<?php

/**
 * Campaign Helper Functions
 * スコア計算、表示制御、URL生成などの共通処理
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * 現在時刻をMySQL形式で取得
 */
function charme_campaign_now_mysql()
{
    return current_time('mysql');
}

/**
 * キャンペーンが表示可能な状態かチェック
 *
 * @param int $post_id
 * @return bool
 */
function charme_campaign_is_published_window($post_id)
{
    $now = charme_campaign_now_mysql();

    // WordPressの投稿状態をチェック
    $post_status = get_post_status($post_id);
    if ($post_status !== 'publish') return false;

    $start_date = charme_get_field_safe('start_date', $post_id);
    $end_date = charme_get_field_safe('end_date', $post_id);

    // 開始日・終了日チェック
    if (!empty($start_date) && $start_date > $now) return false;
    if (!empty($end_date) && $end_date < $now) return false;

    return true;
}

/**
 * ティア別ボーナススコア取得
 *
 * @param string $tier
 * @return int
 */
function charme_campaign_tier_bonus($tier)
{
    $bonuses = [
        'premium' => 50,
        'standard' => 20,
        'basic' => 0
    ];

    return $bonuses[$tier] ?? 0;
}

/**
 * キャンペーンの総合スコア計算
 *
 * @param int $post_id
 * @return int
 */
function charme_campaign_tier_order($post_id)
{
    $tier = charme_get_field_safe('tier', $post_id);

    $tier_order = [
        'premium' => 3,
        'standard' => 2,
        'basic' => 1
    ];

    return $tier_order[$tier] ?? 0;
}

/**
 * 統一LINEのCTA URL取得
 *
 * @param int $post_id
 * @return string
 */
function charme_get_line_cta_url($post_id = null)
{
    $base_url = 'https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=cAtgGF';

    if ($post_id) {
        // キャンペーンIDをパラメータとして追加
        $base_url .= '?campaign_id=' . $post_id;

        // クリニックIDも追加
        $clinic_id = charme_get_field_safe('clinic', $post_id);
        if ($clinic_id) {
            $base_url .= '&clinic_id=' . $clinic_id;
        }
    }

    return esc_url($base_url);
}


/**
 * 価格ブロック情報を取得
 *
 * @param int $post_id
 * @return array
 */
function charme_get_price_blocks($post_id)
{
    $price_blocks = get_field('price_block', $post_id);

    if (!is_array($price_blocks)) {
        return [];
    }

    return $price_blocks;
}


/**
 * キャンペーン画像のWebP対応URL取得
 *
 * @param int $attachment_id
 * @param string $size
 * @return string
 */
function charme_campaign_get_image_url($attachment_id, $size = 'full')
{
    if (!$attachment_id) return '';

    $image_url = wp_get_attachment_image_url($attachment_id, $size);

    // WebP対応ブラウザの場合はWebP変換を試行
    if (function_exists('wp_get_webp_info') && $image_url) {
        $webp_url = str_replace(['.jpg', '.jpeg', '.png'], '.webp', $image_url);
        if (file_exists(str_replace(site_url(), ABSPATH, $webp_url))) {
            return $webp_url;
        }
    }

    return $image_url;
}

/**
 * 価格をフォーマット
 *
 * @param mixed $price
 * @return string
 */
function charme_format_campaign_price($price)
{
    if (!$price) return '';

    $price = (int) $price;
    return number_format($price) . '円';
}

/**
 * キャンペーンカードのCSSクラス取得
 *
 * @param string $tier
 * @return string
 */
function charme_campaign_card_class($tier)
{
    $classes = [
        'premium' => 'ch-campaign-card ch-campaign-card--premium',
        'standard' => 'ch-campaign-card ch-campaign-card--standard',
        'basic' => 'ch-campaign-card ch-campaign-card--basic'
    ];

    return $classes[$tier] ?? 'ch-campaign-card';
}

/**
 * ACFフィールドを安全に文字列として取得
 *
 * @param string $field_name
 * @param int $post_id
 * @return string
 */
function charme_get_field_safe($field_name, $post_id = null)
{
    $value = get_field($field_name, $post_id);

    // 配列の場合は最初の要素または空文字を返す
    if (is_array($value)) {
        return isset($value[0]) && is_string($value[0]) ? $value[0] : '';
    }

    // オブジェクトの場合は空文字を返す
    if (is_object($value)) {
        return '';
    }

    // その他の場合は文字列にキャスト
    return (string) $value;
}

/**
 * ACFフィールドを安全に配列として取得
 *
 * @param string $field_name
 * @param int $post_id
 * @return array
 */
function charme_get_field_array_safe($field_name, $post_id = null)
{
    $value = get_field($field_name, $post_id);

    if (is_array($value)) {
        return $value;
    }

    if (is_string($value) && !empty($value)) {
        // カンマ区切りの文字列を配列に変換
        return array_map('trim', explode(',', $value));
    }

    return array();
}

/**
 * カスタム画像サイズを登録
 */
function charme_campaign_register_image_sizes()
{
    add_image_size('charme-campaign-card', 720, 540, true);
    add_image_size('charme-campaign-hero', 1280, 720, true);
    add_image_size('charme-campaign-thumb', 360, 270, true);
}
add_action('after_setup_theme', 'charme_campaign_register_image_sizes');
