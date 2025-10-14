<?php
/**
 * Template Name: campaign_list
 */
?>
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

<div class="back"><div class="container"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-back.png" alt="back"></a></div></div>

	<div class="sec-campaign"><div class="sec-in">
		<?php
		$args = null;
		$args = array(
			'post_type' => 'campaign',
			'showposts' => -1,
			'paged' => $paged
			);
		?>
		<?php query_posts( $args ); ?>
		<?php if (have_posts()) : ?>
		<ul>
			<?php while (have_posts()) : the_post(); ?>
			<?php if ( get_post_meta($post->ID, 'campaign_display' ,TRUE) ): ?>
			<li>
				<a href="<?php esc_url(the_permalink()); ?>">
					<div class="campaign_list_l">
                        <div class="campaign-img">
						<?php $attachment_id=CFS()->get('campaign_clinic_img',$post->ID); ?>
						<?php echo wp_get_attachment_image($attachment_id,'campaign_image_s'); ?></div>
					</div>
					<div class="campaign_list_r">
						<span><?php echo CFS()->get('campaign_month'); ?></span>
						<h3><?php echo CFS()->get('campaign_tittle'); ?></h3>
					</div>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more" class="readmore-img"></a>
				</a>
			</li>
			<?php else: ?>
			<?php endif; ?>
			<?php endwhile; ?>
		</ul>
		<?php else : ?>
		<div class="borderBox">
			<p>キャンペーンは只今準備中です。</p>
		</div>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div></div>

<?php get_template_part('content', 'footer-contact'); ?>

<?php get_footer(); ?>
