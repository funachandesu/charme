<?php

/**
 * Single Campaign Template
 * キャンペーン詳細ページ - 全面刷新版
 */

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        $post_id = get_the_ID();

        // 表示可能かチェック
        if (!charme_campaign_is_published_window($post_id)) {
            get_template_part('404');
            return;
        }

        // フィールド取得（新しいACF構造に対応）
        $tier = charme_get_field_safe('tier', $post_id);
        $status = charme_get_field_safe('status', $post_id);
        $start_date = charme_get_field_safe('start_date', $post_id);
        $end_date = charme_get_field_safe('end_date', $post_id);
        $campaign_months = charme_get_field_array_safe('campaign_months', $post_id);
        $clinic_id = charme_get_field_safe('clinic', $post_id);
        $title = charme_get_field_safe('title', $post_id) ?: get_the_title();
        $lead = charme_get_field_safe('lead', $post_id);
        $description = get_field('description', $post_id);
        $price_blocks = charme_get_price_blocks($post_id);
        $recommended_for = charme_get_field_safe('recommended_for', $post_id);
        $kv_image = get_field('kv_image', $post_id);
        $gallery = get_field('gallery', $post_id);
        $clinic_logo_override = get_field('clinic_logo_override', $post_id);
        $featured_image_id = $kv_image ? $kv_image['ID'] : get_post_thumbnail_id($post_id);
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
                <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-back.png" alt="back">
                </a>
            </div>
        </div>

        <!-- キャンペーン詳細コンテンツ -->
        <div class="ch-campaign-detail">
            <div class="container">

                <!-- メインコンテンツ -->
                <div class="ch-campaign-detail__main">

                    <!-- ヘロー画像 -->
                    <?php if ($featured_image_id): ?>
                        <div class="ch-campaign-detail__hero">
                            <img src="<?php echo esc_url(charme_campaign_get_image_url($featured_image_id, 'charme-campaign-hero')); ?>"
                                alt="<?php echo esc_attr(get_post_meta($featured_image_id, '_wp_attachment_image_alt', true)); ?>"
                                class="ch-campaign-detail__hero-img">

                            <!-- ティアバッジ -->
                            <div class="ch-campaign-detail__tier-badge ch-tier-badge--<?php echo esc_attr($tier); ?>">
                                <span class="ch-tier-badge__text"><?php echo esc_html(strtoupper($tier)); ?></span>
                            </div>

                            <!-- 最初の価格ブロックから割引率を取得 -->
                            <?php
                            $first_price = !empty($price_blocks) ? $price_blocks[0] : null;
                            $discount_rate = $first_price ? $first_price['discount_rate'] : null;
                            ?>
                            <?php if ($discount_rate): ?>
                                <div class="ch-campaign-detail__discount">
                                    <span class="ch-discount__rate"><?php echo esc_html($discount_rate); ?>%OFF</span>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- キャンペーン情報 -->
                    <div class="ch-campaign-detail__info">
                        <div class="ch-campaign-detail__header">

                            <!-- メタ情報 -->
                            <div class="ch-campaign-detail__meta">
                                <?php if ($start_date && $end_date): ?>
                                    <span class="ch-campaign-meta__period">
                                        <?php echo esc_html(date('Y年n月j日', strtotime($start_date))); ?>〜<?php echo esc_html(date('Y年n月j日', strtotime($end_date))); ?>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <!-- タイトル -->
                            <h1 class="ch-campaign-detail__title"><?php echo esc_html($title); ?></h1>

                            <!-- リード文 -->
                            <?php if ($lead): ?>
                                <div class="ch-campaign-detail__lead">
                                    <?php echo esc_html($lead); ?>
                                </div>
                            <?php endif; ?>

                            <!-- 価格表 -->
                            <?php if (!empty($price_blocks)): ?>
                                <div class="ch-campaign-detail__pricing">
                                    <?php foreach ($price_blocks as $price_block): ?>
                                        <div class="ch-pricing-block">
                                            <h4 class="ch-pricing-block__title"><?php echo esc_html($price_block['treatment']); ?></h4>
                                            <div class="ch-pricing-block__prices">
                                                <?php if ($price_block['regular_price']): ?>
                                                    <div class="ch-pricing__row">
                                                        <span class="ch-pricing__label">通常価格</span>
                                                        <span class="ch-pricing__value ch-pricing__value--strike"><?php echo esc_html($price_block['regular_price']); ?></span>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($price_block['campaign_price']): ?>
                                                    <div class="ch-pricing__row ch-pricing__row--highlight">
                                                        <span class="ch-pricing__label">キャンペーン価格</span>
                                                        <span class="ch-pricing__value ch-pricing__value--large"><?php echo esc_html($price_block['campaign_price']); ?></span>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($price_block['note']): ?>
                                                    <div class="ch-pricing__note">
                                                        <?php echo esc_html($price_block['note']); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- コンテンツ -->
                        <?php if ($description): ?>
                            <div class="ch-campaign-detail__content">
                                <?php echo wp_kses_post($description); ?>
                            </div>
                        <?php else: ?>
                            <div class="ch-campaign-detail__content">
                                <?php the_content(); ?>
                            </div>
                        <?php endif; ?>

                        <!-- ギャラリー -->
                        <?php if ($gallery && is_array($gallery)): ?>
                            <div class="ch-campaign-detail__section">
                                <div class="ch-campaign-detail__gallery">
                                    <?php foreach ($gallery as $image): ?>
                                        <img src="<?php echo esc_url($image['sizes']['medium'] ?? $image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>"
                                            class="ch-gallery-image">
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>


                        <!-- こんな方におすすめ -->
                        <?php if ($recommended_for): ?>
                            <div class="ch-campaign-detail__section">
                                <h3 class="ch-section__title">こんな方におすすめ</h3>
                                <div class="ch-campaign-detail__recommended">
                                    <?php echo nl2br(esc_html($recommended_for)); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- 対象クリニック -->
                        <?php if ($clinic_id): ?>
                            <div class="ch-campaign-detail__section">
                                <h3 class="ch-section__title">対象クリニック</h3>
                                <div class="ch-campaign-detail__clinics">
                                    <span class="ch-clinic-tag"><?php echo esc_html(get_the_title($clinic_id)); ?></span>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- クリニックロゴ -->
                        <?php if ($clinic_logo_override || $clinic_id): ?>
                            <div class="ch-campaign-detail__section">
                                <h3 class="ch-section__title">提携クリニック</h3>
                                <div class="ch-campaign-detail__logos">
                                    <?php if ($clinic_logo_override): ?>
                                        <img src="<?php echo esc_url($clinic_logo_override['url']); ?>"
                                            alt="<?php echo esc_attr($clinic_logo_override['alt']); ?>"
                                            class="ch-clinic-logo">
                                    <?php elseif ($clinic_id): ?>
                                        <?php
                                        $clinic_logo = get_post_thumbnail_id($clinic_id);
                                        if ($clinic_logo):
                                        ?>
                                            <img src="<?php echo esc_url(wp_get_attachment_image_url($clinic_logo, 'medium')); ?>"
                                                alt="<?php echo esc_attr(get_the_title($clinic_id)); ?>"
                                                class="ch-clinic-logo">
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- CTA -->
                        <div class="ch-campaign-detail__cta">
                            <div class="ch-cta-group">
                                <a href="<?php echo esc_url(charme_get_line_cta_url($post_id)); ?>"
                                    class="ch-btn ch-btn--primary ch-btn--large"
                                    data-event="campaign_cta"
                                    data-campaign-id="<?php echo esc_attr($post_id); ?>"
                                    data-tier="<?php echo esc_attr($tier); ?>">
                                    LINE相談
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- サイドバー（関連キャンペーン） -->
                <aside class="ch-campaign-detail__sidebar">
                    <h3 class="ch-sidebar__title">関連キャンペーン</h3>
                    <div class="ch-related-campaigns">
                        <?php
                        // 関連キャンペーン取得
                        $related_args = [
                            'post_type' => 'campaign',
                            'posts_per_page' => 3,
                            'post__not_in' => [$post_id],
                            'meta_query' => [
                                ['key' => 'display', 'value' => 1, 'compare' => '='],
                                ['key' => 'status', 'value' => 'published', 'compare' => '=']
                            ],
                            'orderby' => 'meta_value_num',
                            'meta_key' => 'priority_score',
                            'order' => 'DESC'
                        ];

                        $related_query = new WP_Query($related_args);
                        while ($related_query->have_posts()) :
                            $related_query->the_post();
                            if (charme_campaign_is_published_window(get_the_ID())):
                        ?>
                                <div class="ch-related-campaign">
                                    <a href="<?php echo esc_url(get_permalink()); ?>" class="ch-related-campaign__link">
                                        <?php if (has_post_thumbnail()): ?>
                                            <img src="<?php echo esc_url(charme_campaign_get_image_url(get_post_thumbnail_id(), 'charme-campaign-thumb')); ?>"
                                                alt="<?php echo esc_attr(get_the_title()); ?>"
                                                class="ch-related-campaign__img">
                                        <?php endif; ?>
                                        <h4 class="ch-related-campaign__title"><?php echo esc_html(get_the_title()); ?></h4>
                                    </a>
                                </div>
                        <?php
                            endif;
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </aside>
            </div>
        </div>

        <!-- モバイル用スティッキーCTA -->
        <div class="ch-sticky-cta ch-sticky-cta--mobile">
            <a href="<?php echo esc_url(charme_get_line_cta_url($post_id)); ?>" class="ch-sticky-cta__btn" data-event="campaign_sticky_cta">
                <span class="ch-sticky-cta__text">LINE相談</span>
            </a>
        </div>

<?php
    endwhile;
endif;

get_template_part('content', 'footer-contact');
get_footer();
?>
