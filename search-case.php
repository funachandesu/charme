<?php

/**
 * Template Name: case
 */
?>
<?php get_header(); ?>

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


<!-- <section id="case-content" class="top-section">
    <div class="container">
        <div class="sec-title">
            <h2 class="title-en">CASE</h2>
            <h3 class="title-ja">症例</h3>
        </div>
    </div>
</section> -->

<div class="back">
    <div class="container">
        <a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/btn-back.png" alt="back">
        </a>
    </div>
</div>

<div class="sec-case-detail">
    <?php

    $current_category = isset($_GET['case_category']) ? sanitize_text_field($_GET['case_category']) : '';
    if (!empty($current_category)) {
        $term = get_term_by('slug', $current_category, 'case_category');
        if ($term && !is_wp_error($term)) {
            if ($term->parent === 0) {
            } else {
                $term = get_term($term->parent);
            }
            $tax_id = $term->slug;
            //echo   $tax_id;
        }
    }
    ?>


    <!--条件分岐 ターム-->
    <?php if (is_tax('case_category', 'nose')): ?>
        <!-- <div class="case-banner"><img src="https://charme-beauty.jp/wp-content/uploads/banner-nose.png" alt="" class="sec-case-detail-img"></div> -->
        <!-- <div class="case-des">
            <div class="container">顔の中心にある鼻は、顔全体の印象を大きく左右する大事なパーツのひとつになります。<br>
                鼻を高くしたい、鼻の穴を小さくしたい、鷲鼻を治したいetc...。お客様のニーズに沿った施術をご案内させて頂きます。</div>
        </div> -->
    <?php elseif (is_tax('case_category', 'contour')): ?>
        <!-- <div class="case-banner"><img src="https://charme-beauty.jp/wp-content/uploads/banner-contour.png" alt="" class="sec-case-detail-img"></div> -->
        <!-- <div class="case-des">
            <div class="container"> フェイスラインの中でも顎やエラなどは、ダイエットやメイクではすっきり整えることが難しい部分になります。<br>
                エラをなくして小顔にしたい、輪郭をすっきりさせたいetc...。お客様のニーズに沿った施術をご案内させて頂きます。</div>
        </div> -->
    <?php elseif (is_tax('case_category', 'liposuction')): ?>
        <!-- <div class="case-banner"><img src="https://charme-beauty.jp/wp-content/uploads/banner-liposuction.png" alt="" class="sec-case-detail-img"></div> -->
        <!-- <div class="case-des">
            <div class="container"> ダイエットしてもなかなか痩せない部分があります。理想的なボディバランスを手に入れるための効果的な施術になります。<br>
                体の一部だけ痩せたい、短期間で痩せたい、自力で痩せられないetc...。お客様のニーズに沿った施術をご案内させて頂きます。</div>
        </div> -->
    <?php elseif (is_tax('case_category', 'skin')): ?>
        <!-- <div class="case-banner"><img src="https://charme-beauty.jp/wp-content/uploads/banner-skin.png" alt="" class="sec-case-detail-img"></div> -->
        <!-- <div class="case-des">
            <div class="container"> 紫外線や乾燥などの外的要因や栄養の過不足やストレスなどでしわ・たるみ・毛穴が一度悪化してしまうとご自宅のケアだけでは改善が難しいため、的確な治療が必要になります。<br>
                年々増えていくしわをなんとかしたい、白い肌を取り戻したいetc...。お客様のニーズに沿った施術をご案内させて頂きます。</div>
        </div> -->
    <?php elseif (is_tax('case_category', 'injection')): ?>
        <!-- <div class="case-banner"><img src="https://charme-beauty.jp/wp-content/uploads/banner-injection.png" alt="" class="sec-case-detail-img"></div> -->
        <!-- <div class="case-des">
            <div class="container"> 肌弾力を高め、皮膚のたるみ、しわの補正を行う治療になります。<br>
                手軽に若返りたい、プルンとした肌のハリを保ち続けたいetc...。お客様のニーズに沿った施術をご案内させて頂きます。</div>
        </div> -->
    <?php elseif (is_tax('case_category', 'aesthetic-dentistry')): ?>
        <!-- <div class="case-banner"><img src="https://charme-beauty.jp/wp-content/uploads/banner-aesthetic-dentistry.png" alt="" class="sec-case-detail-img"></div> -->
        <!-- <div class="case-des">
            <div class="container">口元は対面する人に与える印象が大きい大切なパーツです。<br>
                自分の雰囲気や理想に合わせて口元を整えたい、美しい歯を手に入れたいetc...。お客様のニーズに沿った施術をご案内させて頂きます。</div>
        </div> -->
    <?php elseif (is_tax('case_category', 'eye') || $tax_id == 'eye'): ?>
        <!-- <div class="case-banner"><img src="https://charme-beauty.jp/wp-content/uploads/banner-eye.png" alt="" class="sec-case-detail-img"></div> -->
        <!-- <div class="case-des">
            <div class="container">目元の印象はお顔の中でも大きな割合を占めており、最も人気の施術となっております。 二重にしたい、目を大きくしたい、クマを取りたいetc…。お客様のニーズに沿った施術をご案内させて頂きます。</div>
        </div> -->
    <?php elseif (is_tax('case_category', 'bust')): ?>
        <!-- <div class="case-banner"><img src="https://charme-beauty.jp/wp-content/uploads/banner-bust.png" alt="" class="sec-case-detail-img"></div> -->
        <!-- <div class="case-des">
            <div class="container"> 女性にとって重要な要素であるバスト。ふっくらとして美しい理想のバストを手に入れたいとバストのお悩みを抱えている女性は多くいらっしゃいます。<br>
                胸を大きくしたい、胸にハリをもたせたい、胸の形を整えたいetc...。お客様のニーズに沿った施術をご案内させて頂きます。</div>
        </div> -->
    <?php elseif (is_tax('case_category', 'makeup')): ?>
        <!-- <div class="case-banner"><img src="https://charme-beauty.jp/wp-content/uploads/banner-makeup.png" alt="" class="sec-case-detail-img"></div> -->
        <!-- <div class="case-des">
            <div class="container"> ファッションのひとつとして人気のアートメイク。メイクが苦手でも理想の眉、アイライン、リップが手に入ります。<br>
                メイクを簡単にしたい、すっぴんでもきれいな眉毛を維持したいetc...。お客様のニーズに沿った施術をご案内させて頂きます。</div>
        </div> -->
    <?php elseif (is_tax('case_category', 'other')): ?>
        <!-- <div class="case-banner"><img src="https://charme-beauty.jp/wp-content/uploads/banner-other.png" alt="" class="sec-case-detail-img"></div> -->
        <!-- <div class="case-des">
            <div class="container"> 女性特有のお悩みや他人には相談しにくい男性のお悩みなど、細かいご要望にもお答えいたします。</div>
        </div> -->
    <?php elseif (is_tax('case_clinic', 'kusanotaro')): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo/2.png" alt="" class="sec-case-detail-img">
    <?php elseif (is_tax('case_clinic', 'sherieclinic')): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/clinic/logo_sherieclinic.svg" alt="" class="sec-case-detail-img">
    <?php elseif (is_tax('case_clinic', 'labouche')): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo/3.png" alt="" class="sec-case-detail-img">
    <?php elseif (is_tax('case_clinic', 'primo')): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo/4.jpeg" alt="" class="sec-case-detail-img">
    <?php elseif (is_tax('case_clinic', 'glowclinic')): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo/5.jpeg" alt="" class="sec-case-detail-img">
    <?php elseif (is_tax('case_clinic', 'athena')): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo/6.svg" alt="" class="sec-case-detail-img">
    <?php elseif (is_tax('case_clinic', 'womclinic')): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo/7.jpeg" alt="" class="sec-case-detail-img">
    <?php elseif (is_tax('case_clinic', 'kogaokagaku')): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo/8.jpeg" alt="" class="sec-case-detail-img">
    <?php elseif (is_tax('case_clinic', 'idhospital2')): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo/9.jpeg" alt="" class="sec-case-detail-img">
    <?php elseif (is_tax('case_clinic', 'shibuyamori')): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo/10.png" alt="" class="sec-case-detail-img">
    <?php endif; ?>

    <div class="sec-case-detail">
        <div class="case_search_box">
            <div class="container">
                <?php
                $post_case_category = $_GET['case_category'];
                $post_case_clinic = $_GET['case_clinic'];
                ?>
                <style>
                    .case_search {
                        display: block;
                    }

                    .case_radio {
                        padding: 0 1%;
                        margin: 20px 0;
                    }

                    #toggle_label_cat,
                    #toggle_label_clinic {}

                    .accordion-label {
                        cursor: pointer;
                        font-weight: bold;
                        background: #937f65;
                        color: #FFF;
                        padding: 20px 5px;
                        font-size: 16px;
                    }

                    .accordion-label:before {
                        content: "\f067";
                        font-family: "Font Awesome 5 Free";
                        display: inline-block;
                        margin-left: 5px;
                        transition: transform 0.3s ease;
                    }

                    .accordion-label.active:before {
                        transform: rotate(135deg);
                    }

                    #case_category,
                    #case_clinic {
                        display: flex;
                        flex-wrap: wrap;
                    }

                    .case_radio label {
                        display: block;
                        width: 50%;
                        color: #424242;
                        letter-spacing: 1.6px;
                        line-height: 30px;
                        font-weight: bold;
                    }

                    .case_search_kw {
                        margin: 10px auto;
                    }

                    #case_category input[type="radio"],
                    #case_clinic input[type="radio"] {
                        accent-color: #937f65;
                    }

                    .sec-case-detail ul li span.case-info,
                    .sec-case-detail ul li h3 {
                        display: block;
                        width: 100%;
                        background-color: rgba(255, 255, 255, 0.7);
                        margin: 0;
                        color: #000;
                    }

                    .sec-case-detail ul li h3 {
                        /*font-size: 12px;*/
                    }
                </style>


                <form method="get" id="caseSearch" action="<?php echo home_url('/'); ?>">
                    <div class="case_search">
                        <div id="toggle_label_cat" class="accordion-label">カテゴリから探す</div>
                        <div class="case_radio">
                            <?php
                            $parent_args = array(
                                'taxonomy'       => 'case_category',
                                'name'           => 'case_category',
                                'depth'          => '1', // 子孫カテゴリまでの深さ
                                'hide_empty'     => '1',
                                'show_option_none' => '全て(' . $term->name . ')',
                                'option_none_value' => $term->slug,
                                'value_field'    => 'slug',
                                'selected' => $post_case_category
                            );

                            // クエリパラメータが指定されている場合、親カテゴリの子カテゴリのみを表示
                            if (!empty($current_category)) {
                                $term = get_term_by('slug', $current_category, 'case_category');
                                if ($term && !is_wp_error($term)) {
                                    if ($term->parent === 0) {
                                        $parent_args['child_of']            = $term->term_id;
                                    } else {
                                        $parent_category = get_term($term->parent, 'case_category');
                                        $parent_args['child_of']            = $term->parent;
                                    }
                                }
                            }

                            ob_start();
                            wp_dropdown_categories($parent_args);
                            $dropdown = ob_get_clean();
                            // ラジオボタンに変換
                            $radio_buttons = str_replace(
                                array('<select', '</select>'),
                                array('<div', '</div>'),
                                $dropdown
                            );
                            $radio_buttons = str_replace(
                                array('<option', '</option>', 'selected'),
                                array('<label><input type="radio" name="case_category"', '</label>', 'checked'),
                                $radio_buttons
                            );
                            echo $radio_buttons;

                            ?>
                            <!--/case_pulldown-->


                        </div>
                        <!-- <div id="toggle_label_clinic" class="accordion-label">クリニックから探す</div> -->
                        <div class="case_radio">
                            <?php
                            $args = array(
                                'taxonomy' => 'case_clinic',
                                'name' => 'case_clinic',
                                'depth' => '0',
                                'hide_empty' => '1',
                                'show_option_all' => 'クリニックから探す（全て）',
                                'option_none_value' => 'クリニックから探す（全て）',
                                'value_field' => 'slug',
                                'selected' => $post_case_clinic
                            );
                            //wp_dropdown_categories($args);
                            ob_start();
                            wp_dropdown_categories($args);
                            $dropdown = ob_get_clean();

                            // ラジオボタンに変換
                            $radio_buttons = str_replace(
                                array('<select', '</select>'),
                                array('<div', '</div>'),
                                $dropdown
                            );
                            $radio_buttons = str_replace(
                                array('<option', '</option>', 'selected'),
                                array('<label><input type="radio" name="case_clinic"', '</label>', 'checked'),
                                $radio_buttons
                            );
                            echo $radio_buttons;

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
    </div>
    <div class="sec-in">
        <?php if (have_posts()): ?>
            <ul>
                <?php while (have_posts()): the_post(); ?>
                    <li>
                        <?php $attachment_id = CFS()->get('case_image', $post->ID); ?>
                        <?php $url = wp_get_attachment_image_url($attachment_id); ?>
                        <a href="<?php echo $url ?>" data-src="#pop-<?php the_ID(); ?>" data-fancybox="group">
                            <div style="background-image:url(<?php echo wp_get_attachment_image_url($attachment_id, 'case_image_s'); ?>);background-repeat:no-repeat;background-size:contain;background-position:center;aspect-ratio: 1/1;display: flex;flex-wrap: wrap;align-items: flex-end;align-content: flex-end;">

                                <span class="case-info"><?php echo CFS()->get('case_clinic'); ?></span>
                            </div>
                            <h3 class="case-info"><?php echo CFS()->get('case_name'); ?></h3>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php
            if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
            }
            ?>
            <?php wp_reset_query(); ?>
            <?php /* ?>検索内容に該当するものがなかった場合<?php */ ?>
        <?php else: ?>
            <div class="library_s_box">
                <p>一致する症例は見つかりませんでした。</p>
                <!-- /#result-list -->
            </div>

        <?php endif; ?>

        <div class="popup_content_Wrap">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <?php $attachment_id = CFS()->get('case_image', $post->ID); ?>
                    <div id="pop-<?php the_ID(); ?>" class="popup_box">
                        <div class="popup_box_inner">
                            <div class="popup_box_l">
                                <?php echo wp_get_attachment_image($attachment_id, 'full'); ?>
                            </div>
                            <div class="popup_box_r">
                                <p style="color: #937F65;font-family: 'Futura Midium';font-size: 22px;margin-bottom: -5px !important;font-weight: 600;">
                                    <?php echo CFS()->get('case_clinic', $dk_post->ID); ?>
                                </p>
                                <p style="color: #937f65;font-weight: 600;margin-bottom: -5px !important; padding-top: 10px;">
                                    <?php echo CFS()->get('case_name', $dk_post->ID); ?>
                                </p>
                                <h3 style="margin-top: 0px;margin-bottom: 30px;">
                                    <?php //echo CFS()->get('case_name');
                                    ?>
                                </h3>
                                <div>
                                    <dl>
                                        <dd></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

        </div>


    </div>
</div>

<?php get_template_part('content', 'footer-contact'); ?>

<?php get_footer(); ?>
