<?php
/**
 * Template Name: voice
 */
?>
<?php get_header(); ?>

	<div class="tit-page"><div class="tit-page-in">
		<div class="en">VOICE</div>
		<h2>お客さまの声</h2>
	</div></div>

<?php if (function_exists('yoast_breadcrumb')) : ?>
	<div class="sec-breadcrumbs"><div class="sec-in">
<?php yoast_breadcrumb('<p>', '</p>'); ?>
	</div></div>
<?php endif; ?>

	<div class="sec-voice"><div class="sec-in-s">
<?php
	$args = null;
	$args = array(
		'posts_per_page' => -1,
		'post_status' => 'publish',
		'post_type' => 'voice',
	);
	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) : 
?>
		<ul class="list-voice">
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<li><a href="<?php esc_url(the_permalink()); ?>">
				<div class="img"><img src="<?php echo CFS()->get('top_images'); ?>" alt=""></div>
				<div class="name"><?php echo CFS()->get('top_name'); ?></div>
			</a></li>
<?php endwhile; ?>
		</ul>
<?php endif; ?>
	</div></div>

<?php get_template_part('content', 'footer-contact'); ?>
	
<?php get_footer(); ?>