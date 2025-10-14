<?php
/**
 * Template Name: campaign
 */
?>
<?php get_header(); ?>

	<div class="tit-page"><div class="tit-page-in">
		<div class="en">CAMPAIGN</div>
		<h2>キャンペーン</h2>
	</div></div>

<?php if (function_exists('yoast_breadcrumb')) : ?>
	<div class="sec-breadcrumbs"><div class="sec-in">
<?php yoast_breadcrumb('<p>', '</p>'); ?>
	</div></div>
<?php endif; ?>

	<div class="sec-in">
		<ul class="list-campaign">
			<li><a href="<?php echo esc_url(get_permalink(15)); ?>">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/campaign/bnr_athena.jpg" alt="" class="is-disp-pc">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/campaign/bnr_athena_sp.jpg" alt="" class="img-full is-disp-sp">
			</a></li>
		</ul>
	</div>

<?php get_template_part('content', 'footer-contact'); ?>
	
<?php get_footer(); ?>