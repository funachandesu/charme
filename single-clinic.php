<?php get_header(); ?>
<style type="text/css">
  body {
    margin: 0;
    /* 外側の余白を、上下は3.5文字分に、左右は15pxに */
    padding: 0;
    /* 内側の余白を消す(念のため) */
  }

  .main {
    margin: 0;
    /* 外側の余白を、上下は3.5文字分に、左右は15pxに */
    padding: 0;
  }
</style>

<?php get_header(); ?>

<section id="case-content" class="top-section">
  <div class="container">
    <div class="animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="sec-title scroani">
        <h2 class="title-en">CLINIC&nbsp;<span class="title-ja">-クリニック-</span></h2>
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
    <a href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-back.png" alt="back">
    </a>
  </div>
</div>

<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <div class="sec-clinic-detail">
    <div class="sec-in">
      <div class="header">
        <ul class="service-list-clinic">
          <li>
            <div class="service-list-clinic-content">
              <div class="left">
                <?php
                $logo = get_field('logo');
                if ($logo) {
                  echo '<img src="' . esc_url($logo) . '" alt="" />';
                }
                ?>
              </div>
              <div class="right">
                <div class="service-title">
                  <h3>
                    <span class="ja"><?php the_field('jp-title'); ?></span>
                  </h3>
                </div>
                <div class="service-info">
                  <?php if ($address = get_field('address')): ?>
                    <span><label>ADDRESS</label><span><?php echo nl2br(esc_html($address)); ?></span></span>
                  <?php endif; ?>
                  <?php if ($access = get_field('access')): ?>
                    <span><label>ACCESS</label><span><?php echo nl2br(esc_html($access)); ?></span></span>
                  <?php endif; ?>
                  <?php if ($tel = get_field('tel')): ?>
                    <span><label>TEL</label><span><?php echo nl2br(esc_html($tel)); ?></span></span>
                  <?php endif; ?>
                  <?php if ($website = get_field('website')): ?>
                    <span><label>WEB</label><span><a href="<?php echo esc_url($website); ?>" target="_blank"><?php echo esc_html($website); ?></a></span></span>
                  <?php endif; ?>
                  <?php if ($hours = get_field('hours')): ?>
                    <span><label>HOURS</label><span><?php echo nl2br(esc_html($hours)); ?></span></span>
                  <?php endif; ?>
                  <?php if ($holiday = get_field('holiday')): ?>
                    <span><label>HOLIDAY</label><span><?php echo nl2br(esc_html($holiday)); ?></span></span>
                  <?php endif; ?>
                  <?php
                  $terms = get_the_terms($clinic['id'], 'clinic_caategory');
                  if (empty($terms) || is_wp_error($terms)) { ?>
                    <div class="tag"></div>
                  <?php } else { ?>
                    <div class="tag">
                      <?php
                      foreach ($terms as $term) {
                        echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a> ';
                      }
                      ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div><!-- /.header -->

              <!-- シャルム限定割引メニュー -->
              <?php if (have_rows('charme_discount_menus')): ?>
          <section class="sec-discount-menu">
            <h4>シャルム限定割引メニュー</h4>
            <div class="discount-menu-list">
              <?php while (have_rows('charme_discount_menus')): the_row();
                $menu_name = get_sub_field('menu_name');
                $price_before = get_sub_field('price_before');
                $price_after = get_sub_field('price_after');
                $menu_description = get_sub_field('menu_description');
              ?>
                <div class="discount-menu-item">
                  <div class="discount-menu-header">
                    <h5 class="discount-menu-name"><?php echo esc_html($menu_name); ?></h5>
                    <div class="discount-menu-price">
                      <?php if ($price_before): ?>
                        <span class="price-before"><?php echo esc_html($price_before); ?>円</span>
                        <span class="price-arrow">→</span>
                      <?php endif; ?>
                      <span class="price-after"><?php echo esc_html($price_after); ?>円</span>
                    </div>
                  </div>
                  <?php if ($menu_description): ?>
                    <p class="discount-menu-description"><?php echo nl2br(esc_html($menu_description)); ?></p>
                  <?php endif; ?>
                </div>
              <?php endwhile; ?>
            </div>
          </section>
        <?php endif; ?>

      <div class="main">
        <!-- 院長紹介 -->
        <?php if (get_field('doctor_name')): ?>
          <section class="sec-doctor">
            <div class="doctor-clinic">
              <h4>院長紹介</h4>
              <div class="sec-doctor-in">
                <?php if ($doctor_img = get_field('doctor_img')): ?>
                  <div class="img"><img src="<?php echo esc_url($doctor_img); ?>" alt="院長写真" /></div>
                <?php endif; ?>
                <div class="content">
                  <p class="txt txt-name"><span><?php the_field('doctor_name'); ?></span></p>
                  <?php if (get_field('doctor_info')): ?>
                    <section>
                      <h5>略歴</h5>
                      <p class="txt"><?php echo nl2br(get_field('doctor_info')); ?></p>
                    </section>
                  <?php endif; ?>
                  <?php if (get_field('doctor_conference')): ?>
                    <section>
                      <h5>所属学会</h5>
                      <p class="txt"><?php echo nl2br(get_field('doctor_conference')); ?></p>
                    </section>
                  <?php endif; ?>
                  <?php if (get_field('doctor_belief')): ?>
                    <section>
                      <h5>信念</h5>
                      <p class="txt"><?php nl2br(the_field('doctor_belief')); ?></p>
                    </section>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </section>
        <?php endif; ?>

        <!-- ギャラリー -->
        <?php $gallery = get_field('gallery');
        if ($gallery): ?>
          <section class="sec-galley">
            <h4>ギャラリー</h4>
            <ul class="list-gallery">
              <?php foreach ($gallery as $image_url): ?>
                <li>
                  <a href="<?php echo esc_url($image_url); ?>" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo esc_url($image_url); ?>" alt="" />
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </section>
        <?php endif; ?>

        <!-- クリニックの良さ -->
        <?php if (get_field('features_text')): ?>
          <section class="sec-features">
            <h4>CHARMEから見たクリニックの良さ</h4>
            <p class="txt"><?php the_field('features_text'); ?></p>
          </section>
        <?php endif; ?>

        <!-- 他クリニックとの違い -->
        <?php if (get_field('diffs')): ?>
          <section class="sec-features">
            <h4>他クリニックとの違い</h4>
            <p class="txt"><?php the_field('diffs'); ?></p>
          </section>
        <?php endif; ?>
      </div>
      <!-- お問い合わせボタン -->
      <div class="contact-clinic">
        <div class="contact-clinic-mail"><button class="contact-btn"><a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=mLCQY0">CHARMEへの相談はこちら
              （相談料無料）</a></button></div>
      </div><!-- /.sec-in -->
    </div><!-- /.sec-clinic-detail -->

  <?php endwhile; ?>

  <?php get_footer(); ?>
