<?php
/**
 * Campaign Filter Bar Template
 * キャンペーンフィルターバー
 */

// 現在のフィルター値を取得
$current_tier = isset($_GET['tier']) ? sanitize_text_field($_GET['tier']) : '';
$current_treatment = isset($_GET['treatment_category']) ? sanitize_text_field($_GET['treatment_category']) : '';
$current_area = isset($_GET['area']) ? sanitize_text_field($_GET['area']) : '';
$current_month = isset($_GET['month']) ? sanitize_text_field($_GET['month']) : '';
$current_max_price = isset($_GET['max_price']) ? (int) $_GET['max_price'] : 0;

// タクソノミー取得
$treatment_categories = get_terms([
    'taxonomy' => 'treatment_category',
    'hide_empty' => true
]);

$areas = get_terms([
    'taxonomy' => 'area',
    'hide_empty' => true
]);
?>

<div class="ch-filter-bar">
    <div class="container">
        <form method="get" action="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="ch-filter-form">
            <div class="ch-filter-row">
                <!-- プランフィルター -->
                <div class="ch-filter-group">
                    <label class="ch-filter-label">プラン</label>
                    <select name="tier" class="ch-filter-select">
                        <option value="">すべてのプラン</option>
                        <option value="premium" <?php selected($current_tier, 'premium'); ?>>プレミアム</option>
                        <option value="standard" <?php selected($current_tier, 'standard'); ?>>スタンダード</option>
                        <option value="basic" <?php selected($current_tier, 'basic'); ?>>ベーシック</option>
                    </select>
                </div>

                <!-- 施術カテゴリフィルター -->
                <?php if (!empty($treatment_categories)): ?>
                <div class="ch-filter-group">
                    <label class="ch-filter-label">施術カテゴリ</label>
                    <select name="treatment_category" class="ch-filter-select">
                        <option value="">すべての施術</option>
                        <?php foreach ($treatment_categories as $term): ?>
                            <option value="<?php echo esc_attr($term->slug); ?>" <?php selected($current_treatment, $term->slug); ?>>
                                <?php echo esc_html($term->name); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <?php endif; ?>

                <!-- エリアフィルター -->
                <?php if (!empty($areas)): ?>
                <div class="ch-filter-group">
                    <label class="ch-filter-label">エリア</label>
                    <select name="area" class="ch-filter-select">
                        <option value="">すべてのエリア</option>
                        <?php foreach ($areas as $term): ?>
                            <option value="<?php echo esc_attr($term->slug); ?>" <?php selected($current_area, $term->slug); ?>>
                                <?php echo esc_html($term->name); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <?php endif; ?>

                <!-- 月フィルター -->
                <div class="ch-filter-group">
                    <label class="ch-filter-label">開催月</label>
                    <select name="month" class="ch-filter-select">
                        <option value="">すべての月</option>
                        <?php
                        $months = [
                            '01' => '1月',
                            '02' => '2月',
                            '03' => '3月',
                            '04' => '4月',
                            '05' => '5月',
                            '06' => '6月',
                            '07' => '7月',
                            '08' => '8月',
                            '09' => '9月',
                            '10' => '10月',
                            '11' => '11月',
                            '12' => '12月'
                        ];
                        foreach ($months as $value => $label):
                        ?>
                            <option value="<?php echo esc_attr($value); ?>" <?php selected($current_month, $value); ?>>
                                <?php echo esc_html($label); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- 価格上限フィルター -->
                <div class="ch-filter-group">
                    <label class="ch-filter-label">価格上限</label>
                    <select name="max_price" class="ch-filter-select">
                        <option value="">指定なし</option>
                        <option value="10000" <?php selected($current_max_price, 10000); ?>>1万円以下</option>
                        <option value="30000" <?php selected($current_max_price, 30000); ?>>3万円以下</option>
                        <option value="50000" <?php selected($current_max_price, 50000); ?>>5万円以下</option>
                        <option value="100000" <?php selected($current_max_price, 100000); ?>>10万円以下</option>
                        <option value="200000" <?php selected($current_max_price, 200000); ?>>20万円以下</option>
                    </select>
                </div>

                <!-- 検索ボタン -->
                <div class="ch-filter-group ch-filter-group--actions">
                    <button type="submit" class="ch-btn ch-btn--primary">絞り込む</button>
                    <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="ch-btn ch-btn--secondary">クリア</a>
                </div>
            </div>
        </form>
    </div>
</div>