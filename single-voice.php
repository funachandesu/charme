<?php get_header(); ?>

<!-- <section id="case-content" class="top-section">
        <div class="container">
            <div class="sec-title">
                <h2 class="title-en">VOICE</h2>
                <h3 class="title-ja">お客様の声</h3>
            </div>
        </div>
    </section> -->

<section id="case-content" class="top-section">
    <div class="container">
        <div class="animate" data-aos="fade-up"
            data-aos-anchor-placement="top-bottom">

            <div class="sec-title scroani">
                <h2 class="title-en title-case">VOICE&nbsp;<span class="title-ja">-お客様の声-</span></h2>

                <div class="casehiddbox">
                    <div class="casehiddenleft hiddencolor"></div>
                    <div class="casehiddenright hiddencolor"></div>
                </div>
                <div class="box">
                    <div class="boxleft"></div>
                    <div class="boxright"></div>
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

<div class="back">
    <div class="container">
        <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/btn-back.png" alt="back">
        </a>
    </div>
</div>

<?php while (have_posts()) : the_post(); ?>
    <?php if (CFS()->get('is_commingsoon')) : ?>
        <div class="sec-in">
            <p class="txt">Commin Soon.</p>
        </div>
    <?php else: ?>
        <?php the_content(); ?>
    <?php endif; ?>
<?php endwhile; ?>

<div class='pagenation-voice'>
    <?php next_post_link('%link', '< 前へ'); ?>｜
    <?php previous_post_link('%link', '次へ > '); ?>
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