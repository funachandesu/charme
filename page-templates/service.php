<?php
/**
 * Template Name: service
 */
?>
<?php get_header(); ?>

	<div class="tit-page"><div class="tit-page-in">
		<div class="en">SERVICE</div>
		<h2>取扱いサービス</h2>
	</div></div>

<?php if (function_exists('yoast_breadcrumb')) : ?>
	<div class="sec-breadcrumbs"><div class="sec-in">
<?php yoast_breadcrumb('<p>', '</p>'); ?>
	</div></div>
<?php endif; ?>

	<div class="sec-service"><div class="sec-in-s">
		<ul>
			<li><a href="<?php echo esc_url(get_permalink(38)); ?>">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/img_service1.jpg" alt="" class="img-full">
				<div class="title">美容整形</div>
			</a></li>
			<li><a href="<?php echo esc_url(get_permalink(28)); ?>">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/img_service2.jpg" alt="" class="img-full">
				<div class="title">医療脱毛</div>
			</a></li>
			<li><a href="<?php echo esc_url(get_permalink(39)); ?>">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/img_service4.jpg" alt="" class="img-full">
				<div class="title">メンズ総合</div>
			</a></li>
			<li><a href="<?php echo esc_url(get_permalink(40)); ?>">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/img_service6.jpg" alt="" class="img-full">
				<div class="title">その他</div>
			</a></li>
		</ul>
		<p class="txt txt-service">その他にもお客さまのニーズに合わせた多くの施術をご紹介することができます。<br>また、海外クリニックとの提携もご用意していますので送迎・宿泊込みのプランも対応可能です。<br>
		ご相談はすべて無料ですので、お気軽にご相談ください。</p>
	</div></div>
	
<?php //get_template_part('content', 'footer-contact'); ?>
	
<?php get_footer(); ?>