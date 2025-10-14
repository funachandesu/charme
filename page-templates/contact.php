<?php require_once(get_template_directory().'/include/contact/core.php'); ?>
<?php
/**
 * Template Name: contact
 */
?>
<?php get_header(); ?>

<!-- <section id="case-content" class="top-section">
        <div class="container">
            <div class="sec-title">
                <h2 class="title-en">CONTACT</h2>
                <h3 class="title-ja">お問い合わせ</h3>
            </div>
        </div>

    </section> -->


    <section id="case-content" class="top-section">
    <div class="container">
    <div class="animate" data-aos="fade-up"
          data-aos-anchor-placement="top-bottom">

            <div class="sec-title scroani">
              <h2 class="title-en title-camp">CONTACT&nbsp;<span class="title-ja title-campja">-お問い合わせ-</span></h2>

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
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/btn-back.png" alt="back">
            </a>
        </div>
    </div>


	<div class="sec-form"><div class="sec-in">
<?php include_once(get_template_directory().'/include/contact/input.php'); ?>
	</div></div>

<?php get_footer(); ?>
