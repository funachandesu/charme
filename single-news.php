<?php get_header(); ?>

<!-- <section id="case-content" class="top-section">
        <div class="container">
            <div class="sec-title">
                <h2 class="title-en">NEWS</h2>
                <h3 class="title-ja">お知らせ</h3>
            </div>
        </div>

    </section> -->
    <section id="case-content" class="top-section">
    <div class="container">
    <div class="animate" data-aos="fade-up"
          data-aos-anchor-placement="top-bottom">

            <div class="sec-title scroani">
            <h2 class="title-en">TOPICS&nbsp;<span class="title-ja"> - お知らせ - </span></h2>

<div class="box">
  <div class="boxleft"></div>
  <div class="boxright"></div>
</div>
<div class="casehiddbox">
                <div class="casehiddenleft hiddencolor"></div>
                <div class="casehiddenright hiddencolor"></div>
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
            <a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/btn-back.png" alt="back">
            </a>
        </div>
    </div>

<?php while (have_posts()) : the_post(); ?>
	<div class="sec-in-s">
		<article class="article-news">
			<header class="header">
            <a class="news-img" href="<?php esc_url(the_permalink()); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } else {
                                    ?>
                                    <img class="placehoder" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/logo.svg" alt="CHARME">
                                <?php }
                                ?>
                            </a>
				<time class="time"><?php the_time('Y.m.d'); ?></time>
				<h3 class="tit-news"><?php the_title(); ?></h3>
			</header>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</article>
<?php
	the_post_navigation(array(
		'next_text' => '次の記事へ',
		'prev_text' => '前の記事へ',
	));
?>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>
