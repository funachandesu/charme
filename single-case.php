<?php get_header(); ?>

<!-- <section id="page-content" class="top-section">
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

<div class="back"><div class="container"><a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-back.png" alt="back"></a></div></div>

<?php
while (have_posts()) : the_post();
    ?>
    <div class="popup_box_inner">
        <div class="popup_box_l">
            <?php $attachment_id = CFS()->get('case_image', $post->ID); ?>
            <?php echo wp_get_attachment_image($attachment_id, case_image_l); ?>
        </div>
        <div class="popup_box_r">
            <h3><?php echo CFS()->get('case_name'); ?></h3>
            <div>
                <dl>
                    <dt>◆料金</dt>
                    <dd><?php echo CFS()->get('case_price'); ?></dd>
                </dl>
                <dl>
                    <dt>◆リスク・副作用</dt>
                    <dd><?php echo CFS()->get('case_risk'); ?></dd>
                </dl>
                <dl>
                    <dt>◆クリニック</dt>
                    <dd><?php echo CFS()->get('case_clinic'); ?></dd>
                </dl>
                <dl>
                    <dd></dd>
                </dl>
            </div>
        </div>
    </div>
    <?php
endwhile;
?>

<?php get_footer(); ?>
