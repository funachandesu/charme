<?php
/**
 * Template Name: case
 */
?>
<?php
get_header();

$term_id = get_queried_object()->term_id;
$description = term_description();
$img = get_field('case_category-banner', 'case_category_' . $term_id);
?>
<!-- <section id="case-content" class="top-section">
    <div class="container">
        <div class="sec-title">
            <h2 class="title-en">CASE</h2>
            <h3 class="title-ja">症例事例</h3>
        </div>
    </div>
</section> -->
<section id="case-content" class="top-section">
    <div class="container">
    <div class="animate" data-aos="fade-up"
          data-aos-anchor-placement="top-bottom">

            <div class="sec-title scroani">
              <h2 class="title-en title-case">CASE&nbsp;<span class="title-ja">-症例-</span></h2>

              <div class="casebox">
                <div class="caseboxleft"></div>
                <div class="caseboxright"></div>
              </div>
              <div class="casehiddbox">
                <div class="casehiddenleft hiddencolor"></div>
                <div class="casehiddenright hiddencolor"></div>
              </div>
              <div class="caseline">
                <div id="casetopleft"></div>
                <div id="caseleft"></div>
                <div id="casebottomleft"></div>
                <div id="casetopright"></div>
                <div id="caseright"></div>
                <div id="casebottomright"></div>
              </div>

        </div>
    </div>
    </div>
</section>

<div class="back">
    <div class="container">
        <a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-back.png" alt="back">
        </a>
    </div>
</div>
<div class="case-banner"><img src="<?php echo $img; ?>" alt="<?php echo $this_term; ?>" /></div>
<?php
if ($description) {
    ?>
    <div class="case-des">
        <div class="container"><?php echo $description; ?></div>
    </div>
<?php } ?>
<div class="sec-case-detail">
    <div class="case_search_box">
        <form method="get" id="caseSearch" action="<?php echo home_url('/'); ?>">
            <div class="case_search container">
                 <?php
                        //$queried_object = get_queried_object();
                        //if($queried_object instanceof WP_Term && $queried_object->taxonomy === 'case_category') :
                            //$current_category = $queried_object->slug;
                            //echo '<input type="hidden" name="case_category" value="'.$current_category.'">';
                        ?>
                        <?php //else :?>
<div class="case_pulldown">
    <?php
    $queried_object = get_queried_object();

    if ($queried_object instanceof WP_Term && $queried_object->taxonomy === 'case_category') {
        $parent_id = $queried_object->parent;
        $parent_args = array(
            'taxonomy' => 'case_category',
            'name' => 'case_category',
            'depth' => '1', // 子孫カテゴリまでの深さ
            'hide_empty' => '1',
            'show_option_all' => 'カテゴリから探す',
            'option_none_value' => 'カテゴリから探す',
            'value_field' => 'slug',
        );

        // 親カテゴリの場合、子カテゴリのみを表示
        if ($parent_id === 0) {
            $parent_args['child_of'] = $queried_object->term_id;
        }

        wp_dropdown_categories($parent_args);
    }
    ?>
    <!--/case_pulldown-->
</div>

                        <?php //endif; ?>

                <div class="case_pulldown">
                    <?php
                    $args = array(
                        'taxonomy' => 'case_clinic',
                        'name' => 'case_clinic',
                        'depth' => '0',
                        'hide_empty' => '1',
                        'show_option_all' => 'クリニックから探す（全て）',
                        'option_none_value' => 'クリニックから探す（全て）',
                        'value_field' => 'slug'
                    );
                    wp_dropdown_categories($args);
                    ?>
                    <!--/case_pulldown-->
                </div>
                <div class="case_search_kw">
                    <input type="search" class="searchfield" name="s" value="<?php echo get_search_query(); ?>" />
                    <input type="hidden" name="post_type" value="case">
                    <input type="submit" value="検索" accesskey="f" />
                </div>
                <!--/case_search-->
            </div>
        </form>
    </div>
</div>
<div class="list-cases">
    <div class="container">
        <?php
        $this_term = get_query_var('term');
        $args = null;
        $args = array(
            'post_type' => 'case',
            'taxonomy' => 'case_category',
            'term' => $this_term,
            'posts_per_page' => 6,
            'paged' => $paged
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
            ?>
            <ul>
                <?php
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $case_clinics = get_the_terms($post->ID, 'case_clinic');
                    $wp_query = new WP_Query(
                            array(
                        'numberposts' => -1,
                        'post_type' => 'case',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'case_category',
                                'field' => 'slug',
                                'terms' => $this_term,
                            ),
                            array(
                                'taxonomy' => 'case_clinic',
                                'field' => 'slug',
                                'terms' => $case_clinics[0]->slug,
                            ),
                        )
                            )
                    );
//                    print_r($wp_query);die();
                    ?>
                    <li>
                        <div class="col case-left">
                            <a class="case-logo" href="<?php esc_url(the_permalink()); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } else {
                                    ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="32">
                                    <path fill-rule="evenodd" fill="#FFF" d="M120 17.7v1.1h-9.8a453.1 453.1 0 0 0 .2-6.9V7.3a91 91 0 0 0-.2-7 228.9 228.9 0 0 0 9.7 0 4 4 0 0 0 0 1.7 108.2 108.2 0 0 1-4.9-.3h-2.3a80 80 0 0 1 0 3.3 150.4 150.4 0 0 0 0 3.6v1.1a11 11 0 0 1 0 1.2v2.7a193.7 193.7 0 0 0 0 4h1.9a49.5 49.5 0 0 0 5.4-.3v.4zm-2.4-7.9a43.4 43.4 0 0 0-3.6 0V8.5a62.4 62.4 0 0 0 5.2-.3 4.2 4.2 0 0 0 0 1.6h-1.6zm-8.4 9h-.6a464.7 464.7 0 0 0 .2-7V7.4 3.8l-.2-3.4h.6l.2 3.4v8.1a89.4 89.4 0 0 1-.2 7zm-6.8 0h-1.2A1321.8 1321.8 0 0 0 99.8 5L96 11.8c-1.2 2.2-2.3 4.5-3.4 7h-.3a228.5 228.5 0 0 0-7-13.8 871 871 0 0 1-1.2 11l-.1 2.8a7.7 7.7 0 0 0-1.9 0A1063.4 1063.4 0 0 0 84.8 0h.5A259.2 259.2 0 0 0 93 14.8a263.2 263.2 0 0 1 5-9.2 409 409 0 0 1 3-5.6h.4a599.5 599.5 0 0 1 1.6 14.3l.6 4.5H102.4zM99 2.3l-.4.6-1 1.8a1441.5 1441.5 0 0 0-4.5 8.3l-.4-.7A524.5 524.5 0 0 1 98 2.6l.4-.6.6-1.1.5-.9h.8A51.5 51.5 0 0 1 99 2.3zM82.7 9.5a405.8 405.8 0 0 1-1.4 9.3h-.7A1068.5 1068.5 0 0 0 83.3 0h.6a207.2 207.2 0 0 1-1.2 9.5zm.1 16.8l.1.2.2 1.3h-.2c-.4-1-1.2-1.5-2.1-1.5-1.3 0-2 1-2 2.4 0 1.8 1 3 2.5 3 .7 0 1 0 1-1 0-.9-.1-1-1-1v-.1h2.3v.1c-.4 0-.4.1-.4 1v.9c-.7.2-1.5.3-2.2.3-2 0-3.3-1.2-3.3-2.9s1.5-3 3.5-3c.6 0 1.2.1 1.6.3zm-6.1-7.6h-.8l-.8.1a268.4 268.4 0 0 0-6.7-8.5V9h.4c.6 0 1.2 0 1.8-.2.6-.1 1.2-.4 1.7-.7A3.7 3.7 0 0 0 74 4.8c0-.6-.2-1.2-.5-1.7-.2-.4-.6-.8-1-1-.4-.3-.8-.5-1.3-.6l-1.5-.2a25.1 25.1 0 0 0-2.6.2l-.1 3V12a88.9 88.9 0 0 0 .1 6.8 15.4 15.4 0 0 0-2.6 0 358.7 358.7 0 0 0 .2-6.9V7.3a88 88 0 0 0-.2-7 100.7 100.7 0 0 0 8.3.3c.7.1 1.3.3 1.8.7a3.6 3.6 0 0 1 1.7 3.3 4 4 0 0 1-.6 2.2c-.4.6-.8 1.1-1.4 1.5a9 9 0 0 1-3.6 1.4 127.3 127.3 0 0 1 5.2 6.4 66.3 66.3 0 0 0 2.3 2.7h-1.6zm-13 .1H63a321.7 321.7 0 0 0 .2-6.8V7.4a88.1 88.1 0 0 0-.2-7h.6a576.8 576.8 0 0 1 .3 7V12a90.4 90.4 0 0 1-.3 6.8zm-1.2 13H60c.6 0 .7-.2.7-.7v-4.2c0-.5-.1-.7-.7-.7h2.4c-.6 0-.7.2-.7.7V31c0 .5.1.6.7.6zm-3.9-13h-1.4a28.3 28.3 0 0 0-1.3-3.3 621.2 621.2 0 0 0-1.5-3.8 110.5 110.5 0 0 0-6.9 0 117.3 117.3 0 0 0-2.6 7.1 8.7 8.7 0 0 0-2 0A681 681 0 0 0 51.4 0h.5A2643.6 2643.6 0 0 0 60 18.8h-1.5zM51 3.6l-3 6.9a43.9 43.9 0 0 1 4.5 0H54l-3-6.9zm-9 15.2h-.8A713.8 713.8 0 0 0 49.7 0h.7A1415.7 1415.7 0 0 1 42 18.8zM43.4 29c0 1.7-1.4 3-3.2 3-1.7 0-2.9-1.3-2.9-3 0-1.9 1.8-2.9 3.2-2.9 1.9 0 3 1.5 3 3zm-3.2-2.6c-1.1 0-1.8.9-1.8 2.4 0 1.7 1 3 2.1 3 1 0 1.8-.9 1.8-2.5 0-1.7-.8-3-2.1-3zm-2.6-10.9l.1 3.4a15.5 15.5 0 0 0-2.7 0 328 328 0 0 0 .3-6.9V9.5a376.8 376.8 0 0 0-10 0V8.3h1.5a144 144 0 0 0 8.5 0v-1a86 86 0 0 0-.3-7 24.3 24.3 0 0 0 1.4.2h.6l.7-.1a571.7 571.7 0 0 0-.2 7v8zM24 9.6v2.3a87 87 0 0 0 .2 6.9 15.5 15.5 0 0 0-2.6 0 358.3 358.3 0 0 0 .2-6.9V7.3a88 88 0 0 0-.2-7 24.3 24.3 0 0 0 1.3.2h.7l.6-.1a571.7 571.7 0 0 0-.2 7v2.2zm-3.3 9.2H20a350.3 350.3 0 0 0 .2-6.8V7.4 3.9L20 .4h.7l.1 3.5V12a90.5 90.5 0 0 1-.1 6.8zM7 9.7c1.7 0 3-1.6 3-3.8 0 2.2 1.2 3.8 3 3.8-1.8 0-3 1.6-3 3.8 0-2.2-1.3-3.8-3-3.8zm8.4-6.4h-.2A8.3 8.3 0 0 0 12 1.3a6 6 0 0 0-1.7-.2c-1 0-2 .2-3 .5-1 .4-1.7.9-2.4 1.6-.7.7-1.2 1.6-1.6 2.7-.4 1-.5 2.3-.5 3.8s.1 2.8.5 3.9c.4 1 1 2 1.6 2.7.7.7 1.5 1.2 2.4 1.5a8.5 8.5 0 0 0 4.8.3 9.7 9.7 0 0 0 3.7-2v.1l-.2 1.6-.7.5-1.3.4a18.5 18.5 0 0 1-3.6.6c-1.4 0-2.7-.2-4-.7a8.4 8.4 0 0 1-5.2-4.8C.2 12.5 0 11 0 9.7c0-1.6.2-3 .7-4.1a8.5 8.5 0 0 1 5.4-5 13.7 13.7 0 0 1 10 .6l-.4 1-.2 1.1zM33.9 26c.6 0 1.2.1 1.6.3l.1.2.1 1.3c-.5-1-1.2-1.5-2.1-1.5-1.3 0-2 1-2 2.4 0 1.7 1 3 2.2 3 .8 0 1.4-.5 2-1.5l-.1 1.2c0 .2 0 .2-.2.2-.5.2-1.1.3-1.6.3-2.4 0-3.4-1.6-3.4-3 0-1.7 1.7-2.9 3.4-2.9zm11.8.2h1c.1 0 .2 0 .4.4l3.2 3.6v-2.9c0-.6-.3-1-.7-1V26h1.8v.1c-.5 0-.8.5-.8 1.1V32h-.1L46.2 27v3.6c0 .6.3 1 .7 1v.1h-1.8c-.1 0-.1 0 0 0 .5 0 .8-.5.8-1.1v-3.9c-.4-.4-.7-.6-1-.6h.8zM56 26c.5 0 1.2.1 1.5.3.2 0 .2 0 .2.2l.1 1.3h-.1c-.4-1-1.1-1.5-2-1.5-1.3 0-2 1-2 2.4 0 1.7 1 3 2.2 3 .8 0 1.4-.5 1.9-1.5v1.2c0 .2 0 .2-.2.2-.6.2-1.1.3-1.7.3-2.4 0-3.3-1.6-3.3-3 0-1.7 1.6-2.9 3.4-2.9zm8.8.2h3.9v1.2c-.2-.7-.7-1-1.4-1H67c-.4 0-.6.2-.6.5v1.8h.8c.7 0 1.1-.2 1.1-.6h.1V29.8c0-.5-.5-.8-1.2-.8h-.8v2c0 .4.2.6.5.6h.3c1 0 1.5-.4 1.8-1.2v1.3l-.2.1h-4c.5 0 .6-.2.6-.7v-4.2c0-.5 0-.7-.6-.7zm7 4.9v-4.2c0-.5-.1-.7-.7-.7h2.4c1.2 0 1.8.3 1.8 1 0 .6-.4 1.2-1 1.5 1.5 2.2 2.2 3 3 3v.1h-1.7c-.2 0-1-1-2-2.8h-.8v2c0 .6.1.7.7.7v.1h-2.4c.6 0 .7-.2.7-.7zm1-2.4h.6c.6 0 .9-.2.9-1 0-1.2-.4-1.4-.9-1.4-.4 0-.6.2-.6.6v1.8zm12.3-2.5H89l.1 1.2h-.1c-.2-.7-.7-1-1.4-1h-.3c-.4 0-.5.2-.5.5v1.8h.7c.8 0 1.1-.2 1.1-.6h.1V29.8c0-.5-.4-.8-1.2-.8H87v2c0 .4 0 .6.4.6h.3c1 0 1.5-.4 1.8-1.2v1.3l-.1.1h-4.1c.5 0 .6-.2.6-.7v-4.2c0-.5 0-.7-.6-.7z" />
                                    </svg>
                                <?php } ?>
                            </a>
                        </div>
                        <div class="col case-right">
                            <?php
                            $case_name1 = CFS()->get('case_name1', $post->ID);
                            $case_clinic = CFS()->get('case_clinic', $post->ID);
                            ?>

                            <h3 style="font-family:'Futura PT'; font-weight:600"><?php echo $case_name1; ?></h3>
                            <?php if ($case_clinic) { ?>
                                <h4 style="font-weight:600"><?php echo $case_clinic; ?></h4>
                            <?php } ?>

<div class="case-img" data-slider-3>
    <?php if (count($wp_query->posts) > 0): ?>
        <?php foreach ($wp_query->posts as $dk_post): ?>
            <?php
            $attachment_id = CFS()->get('case_image', $dk_post->ID);
//                                        $url = wp_get_attachment_image_url($attachment_id);
            ?>
            <a class="case-content" href="#" data-src="#pop-<?php the_ID(); ?>-<?= $dk_post->ID; ?>" data-fancybox="group">
                <?php echo wp_get_attachment_image($attachment_id, 'case_clinic'); ?>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

                            <?php if (count($wp_query->posts) > 0): ?>
                                <?php foreach ($wp_query->posts as $dk_post): ?>
                                    <?php
                                        $attachment_id = CFS()->get('case_image', $dk_post->ID);
                                    ?>
                                    <div id="pop-<?php the_ID(); ?>-<?= $dk_post->ID; ?>" class="popup_box">
                                        <div class="popup_box_inner">
                                            <div class="popup_box_l">
                                                <?php echo wp_get_attachment_image($attachment_id, 'full'); ?>
                                            </div>
                                            <div class="popup_box_r">
                                                <p style="color: #ff4469;font-family: 'Futura Midium';font-size: 22px;margin-bottom: -5px !important;font-weight: 600;">
                                                    <?php echo CFS()->get('case_name1', $dk_post->ID); ?>
                                                </p>
                                                <p style="color: #ff4469;font-weight: 600;margin-bottom: -5px !important;">
                                                    <?php echo CFS()->get('case_clinic', $dk_post->ID); ?>
                                                </p>
                                                <h3 style="margin-top: 0px;margin-bottom: 30px;">
                                                    <?php //echo CFS()->get('case_name'); ?>
                                                </h3>
                                                <div>
                                                    <dl>
                                                        <dt style="font-size:24px; color: #000; letter-spacing: 5px;">
                                                            <?php echo CFS()->get('case_name', $dk_post->ID); ?>
                                                        </dt>
                                                    </dl>
                                                    <dl>
                                                        <dt style="font-size: 16px;">料金</dt>
                                                        <dd style="font-family: 'Futura Midium'; font-weight: 600">
                                                            <?php echo CFS()->get('case_price', $dk_post->ID); ?>
                                                        </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt style="font-size: 16px;">リスク・副作用</dt>
                                                        <dd style="font-weight: 600"><?php echo CFS()->get('case_risk', $dk_post->ID); ?></dd>
                                                    </dl>
                                                    <!-- <dl>
                                                            <dt style="font-size: 16px;">クリニック</dt>
                                                            <dd><?php //echo CFS()->get('case_clinic');                 ?></dd>
                                                        </dl> -->
                                                    <dl>
                                                        <dd></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <a class="readmore" href="<?php esc_url(the_permalink()); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more">
                            </a>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php
            if (function_exists('wp_pagenavi')):
                wp_pagenavi(array('query' => $the_query));    //wp_pagenavi()の呼び出し
            endif;
            ?>
        <?php else :
            ?>
            <div class="borderBox">
                <p><?php echo get_term_by('slug', $term, $taxonomy)->name ?>症例は只今準備中です。</p>
            </div>
        <?php
        endif;
        wp_reset_query();
        ?>
    </div>
</div>
<?php get_template_part('content', 'footer-contact'); ?> <?php get_footer(); ?>
