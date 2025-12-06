<?php

/**
 * Template Name: case
 */
?>
<?php get_header(); ?>
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
    <div class="container"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-back.png" alt="back"></a></div>
</div>

<div class="sec-case">
    <div class="container">
        <?php
        // $arg = range(12, 322);
        // $args = array(
        //     'exclude' => $arg,
        // );
        // $terms = get_terms('case_category', $args);

        $terms = get_terms(
            array(
                'taxonomy' => 'case_category',
                'parent' => 0, // 親カテゴリのみを取得するために指定
            )
        );

        if (!empty($terms) && !is_wp_error($terms)) {
            echo '<ul class="casies">';
            foreach ($terms as $term) {
                $link = str_replace('/case_category/', '/case/', get_term_link($term->term_id));
        ?>
                <li>
                    <a href="<?php echo $link; ?>">
                        <span class="case-term-title"><?php echo esc_html($term->name); ?></span>
                    </a>
                </li>
        <?php
            }
            echo "</ul>";
        }
        ?>
    </div>
</div>

<?php if (is_mobile()) : ?>
<?php else: ?>
    <div id="contact-pc">
        <h2>CONTACT US</h2>
        <h3 class='title-ja'>お気軽にお問い合わせください</h3>
        <div class='contact'>
            <div class="contact-pc-line">
                <p>ラインからのお問い合わせはこちら</p>
                <button class="contact-btn"><a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=mLCQY0">LINE＠</a></button>
            </div>
            <div class="contact-pc-mail">
                <p>メールでのお問い合わせはこちら</p>
                <button class="contact-btn"><a href="<?php echo esc_url(get_permalink(2)); ?>" class="btn-flex btn-contact">CONTACT FORM</a></button>
            </div>
        </div>
        <h2><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/line_title.png" alt="LINE公式アカウント"></h2>
    </div>
<?php endif; ?>

<?php get_template_part('content', 'footer-contact'); ?>

<?php get_footer(); ?>