<?php get_header(); ?>
<!--
<section id="case-content" class="top-section">
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
            <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/btn-back.png" alt="back">
            </a>
        </div>
    </div>

	<div class="sec-news"><div class="sec-in-s">
    <?php
            $args = array(
                'posts_per_page' => 6,
                'post_status' => 'publish',
                'post_type' => 'news',
                'paged' => $paged,
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
                ?>
                <ul class="news">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
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
                            <div class="news-datetime">
                                <time datetime="<?php esc_html(the_time('Y.m.d')); ?>"><?php esc_html(the_time('Y.m.d')); ?></time>
                            </div>
                            <a class="news-title" href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></a>
                            <a class="readmore" href="<?php esc_url(the_permalink()); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more"></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
<?php wp_pagenavi(); ?>
<?php endif; ?>
	</div></div>

<?php get_footer(); ?>
