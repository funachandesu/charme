<?php get_header(); ?>

<!-- <section id="page-content" class="top-section">
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

<div class="back"><div class="container"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-back.png" alt="back"></a></div></div>


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
