<?php
/**
 * Campaign REST API Endpoints
 * /wp-json/charme/v1/campaigns
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * REST APIエンドポイントを登録
 */
add_action('rest_api_init', function() {
    register_rest_route('charme/v1', '/campaigns', [
        'methods' => 'GET',
        'callback' => 'charme_rest_campaigns',
        'permission_callback' => '__return_true',
        'args' => [
            'limit' => [
                'default' => 20,
                'sanitize_callback' => 'absint',
                'validate_callback' => function($param) {
                    return is_numeric($param) && $param > 0 && $param <= 100;
                }
            ],
            'tier' => [
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field',
                'validate_callback' => function($param) {
                    return in_array($param, ['', 'premium', 'standard', 'basic']);
                }
            ],
            'treatment_category' => [
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            ],
            'area' => [
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            ]
        ]
    ]);
});

/**
 * キャンペーンデータを返すREST APIコールバック
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response|WP_Error
 */
function charme_rest_campaigns($request) {
    $limit = $request->get_param('limit');
    $tier_filter = $request->get_param('tier');
    $treatment_category = $request->get_param('treatment_category');
    $area_filter = $request->get_param('area');

    $args = [
        'post_type' => 'campaign',
        'post_status' => 'publish',
        'posts_per_page' => $limit,
        'meta_query' => [],
        'no_found_rows' => true,
        'update_post_meta_cache' => true,
        'update_post_term_cache' => false,
    ];

    // ティアフィルター
    if ($tier_filter) {
        $args['meta_query'][] = [
            'key' => 'tier',
            'value' => $tier_filter,
            'compare' => '='
        ];
    }

    // タクソノミーフィルター
    if ($treatment_category || $area_filter) {
        $args['tax_query'] = ['relation' => 'AND'];

        if ($treatment_category) {
            $args['tax_query'][] = [
                'taxonomy' => 'treatment_category',
                'field' => 'slug',
                'terms' => $treatment_category
            ];
        }

        if ($area_filter) {
            $args['tax_query'][] = [
                'taxonomy' => 'area',
                'field' => 'slug',
                'terms' => $area_filter
            ];
        }
    }

    $query = new WP_Query($args);
    $campaigns = [];

    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();

        // 表示可能期間チェック
        if (!charme_campaign_is_published_window($post_id)) {
            continue;
        }

        $tier = charme_get_field_safe('tier', $post_id);
        $clinic_id = charme_get_field_safe('clinic', $post_id);
        $title = charme_get_field_safe('title', $post_id) ?: get_the_title();
        $lead = charme_get_field_safe('lead', $post_id);
        $campaign_months = charme_get_field_array_safe('campaign_months', $post_id);
        $price_blocks = charme_get_price_blocks($post_id);
        $kv_image = get_field('kv_image', $post_id);
        $treatment_categories = wp_get_post_terms($post_id, 'treatment_category', ['fields' => 'names']);
        $areas = wp_get_post_terms($post_id, 'area', ['fields' => 'names']);

        // 最初の価格ブロックから価格情報を取得
        $first_price = !empty($price_blocks) ? $price_blocks[0] : null;

        $campaigns[] = [
            'id' => $post_id,
            'title' => $title,
            'lead' => $lead,
            'excerpt' => get_the_excerpt(),
            'permalink' => get_permalink(),
            'tier' => $tier,
            'score' => charme_campaign_score($post_id),
            'start_date' => charme_get_field_safe('start_date', $post_id),
            'end_date' => charme_get_field_safe('end_date', $post_id),
            'campaign_months' => $campaign_months,
            'price_blocks' => $price_blocks,
            'featured_image' => [
                'url' => $kv_image ? $kv_image['url'] : charme_campaign_get_image_url(get_post_thumbnail_id($post_id), 'charme-campaign-card'),
                'alt' => $kv_image ? $kv_image['alt'] : get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true)
            ],
            'clinic_id' => $clinic_id,
            'clinic_name' => $clinic_id ? get_the_title($clinic_id) : '',
            'treatment_categories' => $treatment_categories,
            'areas' => $areas,
            'line_cta_url' => charme_get_line_cta_url($post_id),
            // 下位互換性のための価格情報
            'price_original' => $first_price ? $first_price['regular_price'] : '',
            'price_campaign' => $first_price ? $first_price['campaign_price'] : '',
        ];
    }

    wp_reset_postdata();

    // 並び順: ティア → スコア → 公開日
    usort($campaigns, function($a, $b) {
        $tier_order = ['premium' => 3, 'standard' => 2, 'basic' => 1];
        $tier_comparison = ($tier_order[$b['tier']] ?? 0) <=> ($tier_order[$a['tier']] ?? 0);

        if ($tier_comparison !== 0) {
            return $tier_comparison;
        }

        return $b['score'] <=> $a['score'];
    });

    return new WP_REST_Response([
        'success' => true,
        'data' => $campaigns,
        'total' => count($campaigns),
        'timestamp' => current_time('mysql')
    ], 200);
}

/**
 * クリニックIDからクリニック名を取得
 *
 * @param array|string $clinic_ids
 * @return array
 */
function charme_get_clinic_names($clinic_ids) {
    if (!$clinic_ids) return [];

    if (is_string($clinic_ids)) {
        $clinic_ids = explode(',', $clinic_ids);
    }

    $clinic_names = [];
    foreach ($clinic_ids as $clinic_id) {
        $clinic_id = trim($clinic_id);
        if ($clinic_id && is_numeric($clinic_id)) {
            $clinic_post = get_post($clinic_id);
            if ($clinic_post && $clinic_post->post_type === 'clinic') {
                $clinic_names[] = $clinic_post->post_title;
            }
        }
    }

    return $clinic_names;
}