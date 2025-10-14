<?php get_header(); ?>

<section id="case-content" class="top-section">
    <div class="container">
        <div class="animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="sec-title scroani">
                <h2 class="title-en">CLINIC&nbsp;<span class="title-ja">-クリニック-</span></h2>
                <div class="box">
                    <div class="boxleft"></div>
                    <div class="boxright"></div>
                </div>
                <div class="casehiddbox">
                    <div class="casehiddenleft hiddencolor"></div>
                    <div class="casehiddenright hiddencolor"></div>
                </div>
                <div class="line">
                    <div id="topleft"></div>
                    <div id="left"></div>
                    <div id="bottomleft"></div>
                    <div id="topright"></div>
                    <div id="right"></div>
                    <div id="bottomright"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$term = get_queried_object(); // 現在のカテゴリ（ターム）情報
if ($term && !is_wp_error($term)) :
?>
    <div class="category-title" style="text-align:center; font-size:1.5em; margin:24px 0 12px;">
        「<?php echo esc_html($term->name); ?>」カテゴリのクリニック一覧
    </div>
<?php endif; ?>

<div class="back">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-back.png" alt="back">
        </a>
    </div>
</div>

<?php
$terms = get_terms([
    'taxonomy' => 'clinic_area',
    'hide_empty' => false,
    'number' => 6,
]);
$current_term = get_queried_object();
?>
<section class="sec-clinic" id="a-clinic">
    <div class="sec-in">
        <div class="clinic-category-btns" style="text-align:center; margin:30px 0;">
            <?php foreach ($terms as $term): ?>
                <a class="clinic-category-btn<?php if ($term->term_id === $current_term->term_id) echo ' active'; ?>"
                    href="<?php echo esc_url(get_term_link($term)); ?>">
                    <?php echo esc_html($term->name); ?>
                </a>
            <?php endforeach; ?>
            <a class="clinic-category-btn" href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>">すべて</a>
        </div>
    </div>
</section>

<section class="sec-clinic" id="a-clinic">
    <div class="sec-in">
        <div class="sec-service">
            <div class="container">
                <ul id="listPage" class="service-list">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post();
                            $clinic_id = get_the_ID();
                            $en_title  = get_post_meta($clinic_id, 'en-title', true);
                            $jp_title  = get_the_title($clinic_id);
                            $img_full  = get_field('img-full', $clinic_id);
                            $logo      = get_field('logo', $clinic_id);
                            $address   = get_post_meta($clinic_id, 'address', true);
                            $tel       = get_post_meta($clinic_id, 'tel', true);
                            $website   = get_post_meta($clinic_id, 'website', true);
                            $tag       = get_post_meta($clinic_id, 'tag', true);
                        ?>
                            <li>
                                <div class="service-list-content">
                                    <!-- ギャラリー -->
                                    <?php $gallery = get_field('gallery', $clinic['id']); ?>
                                    <?php if ($gallery): ?>
                                        <section class="archive-sec-galley">
                                            <div class="archive-gallery-scroll">
                                                <?php foreach ($gallery as $image_url): ?>
                                                    <div class="archive-gallery-item">
                                                        <a href="<?php echo esc_url($image_url); ?>" target="_blank" rel="noopener noreferrer">
                                                            <img src="<?php echo esc_url($image_url); ?>" alt="" />
                                                        </a>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </section>
                                    <?php endif; ?>
                                    <div class="right">
                                        <div class="service-title">
                                            <h3>
                                                <a href="<?php echo esc_url(get_permalink($clinic_id)); ?>">
                                                    <span class="en"><?php echo esc_html($en_title); ?></span><br>
                                                    <?php echo esc_html($jp_title); ?>
                                                </a>
                                            </h3>
                                            <span class="img">
                                                <a target="_blank" href="<?php echo esc_url($website); ?>">
                                                    <?php if (!empty($logo)): ?>
                                                        <img src="<?php echo esc_url($logo); ?>" alt="" class="img-full">
                                                    <?php else: ?>
                                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo.svg" alt="" class="img-df">
                                                    <?php endif; ?>
                                                </a>
                                            </span>
                                        </div>
                                        <div class="service-info">
                                            <span><label>Address</label><span><?php echo esc_html($address); ?></span></span>
                                            <span><label>TEL</label><span><?php echo esc_html($tel); ?></span></span>
                                            <span><label>WEB</label><span><a target="_blank" href="<?php echo esc_url($website); ?>"><?php echo esc_html($website); ?></a></span></span>
                                            <?php if (empty($tag)): ?>
                                                <div class="tag"></div>
                                            <?php else: ?>
                                                <div class="tag">
                                                    <?php
                                                    $tags = explode(',', $tag);
                                                    foreach ($tags as $t) {
                                                        echo '<a>' . esc_html(trim($t)) . '</a> ';
                                                    }
                                                    ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <a class="readmore" href="<?php echo esc_url(get_permalink($clinic_id)); ?>">
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more">
                                        </a>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <li>該当するクリニックはありません。</li>
                    <?php endif; ?>
                </ul>
                <!-- WP標準ページネーション設置 -->
                <div class="clinic-pagination" style="text-align:center; margin:32px 0;">
                    <?php
                    the_posts_pagination([
                        'mid_size'  => 2,
                        'prev_text' => '« 前へ',
                        'next_text' => '次へ »',
                    ]);
                    ?>
                </div>
            </div>
        </div>
        <p class="txt txt-clinic">
            全国主要都市から韓国まで、公正な調査の上で厳選された数々の技術力の高いクリニック様とご提携させて頂いております。<br>
            掲載クリニック様以外にも数多くのクリニック様とご提携しております。
        </p>
    </div>
</section>
<?php get_template_part('content', 'footer-contact'); ?>
<?php get_footer(); ?>
