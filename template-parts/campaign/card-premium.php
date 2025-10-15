<?php

/**
 * Premium Campaign Card Template
 * プレミアムキャンペーンカード（ラージサイズ）
 */

$post_id = get_the_ID();
$tier = charme_get_field_safe('tier', $post_id);
$end_date = charme_get_field_safe('end_date', $post_id);
$clinic_id = charme_get_field_safe('clinic', $post_id);
$clinic_logo_override = get_field('clinic_logo_override', $post_id);
$campaign_months = charme_get_field_array_safe('campaign_months', $post_id);
$lead = charme_get_field_safe('lead', $post_id);
$title = charme_get_field_safe('title', $post_id) ?: get_the_title();
$price_blocks = charme_get_price_blocks($post_id);
$featured_image_id = get_post_thumbnail_id($post_id);
?>

<article class="<?php echo esc_attr(charme_campaign_card_class($tier)); ?> ch-campaign-card--large">
    <div class="ch-campaign-card__inner">

        <!-- 画像エリア -->
        <div class="ch-campaign-card__image">
            <?php if ($clinic_logo_override): ?>
                <img src="<?php echo esc_url($clinic_logo_override['url']); ?>"
                    alt="<?php echo esc_attr($clinic_logo_override['alt'] ?: get_the_title($clinic_id)); ?>"
                    loading="lazy"
                    class="ch-campaign-card__img ch-campaign-card__img--logo">
            <?php elseif ($featured_image_id): ?>
                <img src="<?php echo esc_url(charme_campaign_get_image_url($featured_image_id, 'charme-campaign-card')); ?>"
                    alt="<?php echo esc_attr(get_post_meta($featured_image_id, '_wp_attachment_image_alt', true)); ?>"
                    loading="lazy"
                    class="ch-campaign-card__img">
            <?php endif; ?>

        </div>

        <!-- コンテンツエリア -->
        <div class="ch-campaign-card__content">

            <!-- メタ情報 -->
            <div class="ch-campaign-card__meta">
                <?php if ($end_date): ?>
                    <span class="ch-campaign-meta__deadline">
                        <?php echo esc_html(date('Y年n月j日', strtotime($end_date))); ?>まで
                    </span>
                <?php endif; ?>
            </div>

            <!-- タイトル -->
            <h3 class="ch-campaign-card__title">
                <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html($title); ?></a>
            </h3>

            <!-- リード文 -->
            <?php if ($lead): ?>
                <div class="ch-campaign-card__lead">
                    <?php echo esc_html($lead); ?>
                </div>
            <?php endif; ?>

            <!-- 価格情報 -->
            <?php if (!empty($price_blocks)): ?>
                <div class="ch-campaign-card__price">
                    <?php foreach (array_slice($price_blocks, 0, 2) as $price_block): // 最大2件表示
                    ?>
                        <div class="ch-price-item">
                            <div class="ch-price-item__treatment"><?php echo esc_html($price_block['treatment']); ?></div>
                            <div class="ch-price-item__prices">
                                <?php if ($price_block['regular_price']): ?>
                                    <span class="ch-price__regular"><?php echo esc_html($price_block['regular_price']); ?></span>
                                <?php endif; ?>
                                <?php if ($price_block['campaign_price']): ?>
                                    <span class="ch-price__campaign"><?php echo esc_html($price_block['campaign_price']); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- 概要 -->
            <div class="ch-campaign-card__excerpt">
                <?php echo wp_trim_words(get_the_excerpt(), 50, '...'); ?>
            </div>


            <!-- クリニック情報（Premiumは詳細表示） -->
            <?php if ($clinic_id): ?>
                <div class="ch-campaign-card__clinics">
                    <h4 class="ch-clinics__title">対象クリニック</h4>
                    <div class="ch-clinic-info">
                        <span class="ch-clinic-tag ch-clinic-tag--premium"><?php echo esc_html(get_the_title($clinic_id)); ?></span>
                        <?php
                        // クリニックの所在地を取得
                        $clinic_areas = wp_get_post_terms($clinic_id, 'area', ['fields' => 'names']);
                        if (!is_wp_error($clinic_areas) && !empty($clinic_areas)):
                        ?>
                            <span class="ch-clinic-area"><?php echo esc_html($clinic_areas[0]); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- CTA -->
            <div class="ch-campaign-card__actions">
                <a href="<?php echo esc_url(charme_get_line_cta_url($post_id)); ?>"
                    class="ch-btn ch-btn--primary ch-btn--large"
                    data-event="campaign_cta"
                    data-campaign-id="<?php echo esc_attr($post_id); ?>"
                    data-tier="<?php echo esc_attr($tier); ?>">
                    LINE相談
                </a>
                <a href="<?php echo esc_url(get_permalink()); ?>" class="ch-btn ch-btn--secondary">
                    詳細を見る
                </a>
            </div>
        </div>
    </div>
</article>
