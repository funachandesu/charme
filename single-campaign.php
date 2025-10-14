<?php get_header(); ?>

<!-- <section id="page-content" class="top-section">
    <div class="container">
        <div class="sec-title">
            <h2 class="title-en">CAMPAIGN</h2>
            <h3 class="title-ja">キャンペーン</h3>
        </div>
    </div>
</section> -->

<section id="case-content" class="top-section">
    <div class="container">
        <div class="animate" data-aos="fade-up"
            data-aos-anchor-placement="top-bottom">

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
</section>

<div class="back">
    <div class="container"><a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-back.png" alt="back"></a></div>
</div>

<div class="sec-campaign-detail">
    <div class="sec-in">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <div class="sec-campaign-detail_box">
                    <div class="sec-campaign-detail_l">
                        <?php $attachment_id = CFS()->get('campaign_clinic_img', $post->ID); ?>
                        <?php echo wp_get_attachment_image($attachment_id, 'campaign_image_l'); ?>
                    </div>
                    <div class="sec-campaign-detail_r">
                        <span><?php echo CFS()->get('campaign_month'); ?></span>
                        <h3><?php echo CFS()->get('campaign_tittle'); ?></h3>
                        <p>
                            <?php echo CFS()->get('campaign_detail'); ?>
                        </p>
                        <?php $attachment_id = CFS()->get('campaign_img', $post->ID); ?>
                        <?php echo wp_get_attachment_image($attachment_id, 'campaign_detail_image'); ?>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</div>


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