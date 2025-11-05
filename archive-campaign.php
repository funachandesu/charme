<?php

/**
 * Campaign Archive Template
 * キャンペーン一覧ページ - 全面刷新版
 */

get_header();

// 現在時刻取得
$now = current_time('mysql');

// フィルターパラメータ取得
$filter_tier = isset($_GET['tier']) ? sanitize_text_field($_GET['tier']) : '';
$filter_treatment = isset($_GET['treatment_category']) ? sanitize_text_field($_GET['treatment_category']) : '';
$filter_area = isset($_GET['area']) ? sanitize_text_field($_GET['area']) : '';
$filter_month = isset($_GET['month']) ? sanitize_text_field($_GET['month']) : '';
$filter_max_price = isset($_GET['max_price']) ? (int) $_GET['max_price'] : 0;

// クエリ引数構築
$args = [
    'post_type' => 'campaign',
    'post_status' => 'publish',
    'posts_per_page' => 24,
    'no_found_rows' => true,
    'update_post_meta_cache' => true,
    'update_post_term_cache' => false,
];

// meta_query初期化
$args['meta_query'] = [];

// ティアフィルター
if ($filter_tier && in_array($filter_tier, ['premium', 'standard', 'basic'])) {
    $args['meta_query'][] = [
        'key' => 'tier',
        'value' => $filter_tier,
        'compare' => '='
    ];
}

// 月フィルター（campaign_monthsは配列なので検索方法変更）
if ($filter_month) {
    $args['meta_query'][] = [
        'key' => 'campaign_months',
        'value' => $filter_month,
        'compare' => 'LIKE'
    ];
}

// タクソノミーフィルター
if ($filter_treatment || $filter_area) {
    $args['tax_query'] = ['relation' => 'AND'];

    if ($filter_treatment) {
        $args['tax_query'][] = [
            'taxonomy' => 'treatment_category',
            'field' => 'slug',
            'terms' => $filter_treatment
        ];
    }

    if ($filter_area) {
        $args['tax_query'][] = [
            'taxonomy' => 'area',
            'field' => 'slug',
            'terms' => $filter_area
        ];
    }
}

// クエリ実行
$query = new WP_Query($args);
$campaigns = [];

// 表示可能キャンペーンの抽出とスコア計算
while ($query->have_posts()) {
    $query->the_post();
    $post_id = get_the_ID();

    // 表示可能期間チェック
    if (!charme_campaign_is_published_window($post_id)) {
        continue;
    }

    $campaigns[] = [
        'id' => $post_id,
        'tier' => charme_get_field_safe('tier', $post_id),
        'date' => get_post_time('U', false, $post_id)  // 明示的にpost_idを指定
    ];
}

wp_reset_postdata();

// 並び順: ティア → 投稿日 DESC
usort($campaigns, function ($a, $b) {
    $tier_order = ['premium' => 3, 'standard' => 2, 'basic' => 1];
    $tier_comparison = ($tier_order[$b['tier']] ?? 0) <=> ($tier_order[$a['tier']] ?? 0);

    if ($tier_comparison !== 0) {
        return $tier_comparison;
    }

    return $b['date'] <=> $a['date'];
});
?>

<section id="case-content" class="top-section">
    <div class="container">
        <div class="animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="sec-title scroani">
                <h2 class="title-en title-camp">CAMPAIGN&nbsp;<span class="title-ja title-campja">-キャンペーン-</span></h2>
                <div class="campbox">
                    <div class="campboxleft"></div>
                    <div class="campboxright"></div>
                </div>
                <div class="camphiddbox">
                    <div class="camphiddenleft"></div>
                    <div class="camphiddenright"></div>
                </div>
                <div class="campline">
                    <div id="camptopleft"></div>
                    <div id="campleft"></div>
                    <div id="campbottomleft"></div>
                    <div id="camptopright"></div>
                    <div id="campright"></div>
                    <div id="campbottomright"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="back">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-back.png" alt="back">
        </a>
    </div>
</div>

<!-- フィルターバー -->
<?php // get_template_part('template-parts/campaign/filter-bar');
?>

<!-- キャンペーン一覧 -->
<div class="ch-campaign-archive">
    <div class="container">
        <?php if (!empty($campaigns)): ?>
            <div class="ch-campaign-grid">
                <?php foreach ($campaigns as $campaign_data): ?>
                    <?php
                    global $post;
                    $post = get_post($campaign_data['id']);
                    setup_postdata($post);
                    $tier = $campaign_data['tier'];
                    ?>
                    <?php get_template_part("template-parts/campaign/card", $tier); ?>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php else: ?>
            <div class="ch-campaign-empty">
                <p>条件に合うキャンペーンが見つかりませんでした。</p>
                <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="ch-btn ch-btn--secondary">
                    すべてのキャンペーンを見る
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- モバイル用スティッキーCTA -->
<div class="ch-sticky-cta ch-sticky-cta--mobile">
    <a href="<?php echo esc_url(charme_get_line_cta_url()); ?>" class="ch-sticky-cta__btn" data-event="campaign_sticky_cta">
        <span class="ch-sticky-cta__icon">📱</span>
        <span class="ch-sticky-cta__text">LINE相談</span>
    </a>
</div>

<?php get_template_part('content', 'footer-contact'); ?>

<?php get_footer(); ?>
