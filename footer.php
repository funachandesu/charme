<?php $sns = charme_get_sns_links(); ?>
<?php $newDesign = true; ?>
<?php if ($newDesign || is_front_page()): ?>
  <!-- 新デザインフッター（トップページ用） -->
  <div class="p-float-cta" id="js-float-cta">
    <button class="p-float-cta__btn-close" id="js-float-cta-close"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/icon_float-cta-close.svg" alt="閉じる" class="p-float-cta__btn-close-icon" width="18" height="18" loading='lazy' /></button>
    <a href="<?php echo esc_url($sns['line']); ?>" target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer" class="p-float-cta__btn">
      <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/img_float-cta-pc.webp" alt="LINEで割引情報をGET！" class="p-float-cta__btn-icon u-pc" width="24" height="18" loading='lazy' />
      <div class="p-float-cta__btn-close-box u-sp">
        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/img_line.webp" alt="" class="p-float-cta__btn-sns-icon" width="24" height="18" loading='lazy' />
        <div class="p-float-cta__box-text-wrap">
          <span class="p-float-cta__text">LINEで割引情報をGET！</span>
          <div class="p-float-cta__check-block">
            <div class="p-float-cta__check-content">
              <span class="p-float-cta__check-text" lang="en">CHECK!</span>
              <svg class="p-float-cta__check-icon" width="28" height="6" viewBox="0 0 28 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M28 2.88672L23 -3.06526e-05L23 5.77347L28 2.88672ZM0 2.88672L-4.37114e-08 3.38672L23.5 3.38672L23.5 2.88672L23.5 2.38672L4.37114e-08 2.38672L0 2.88672Z" fill="#424242" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/img_float-cta-face.webp" alt="" class="p-float-cta__face-img u-sp" width="64" height="90" loading='lazy' />
    </a>
  </div>

  <footer class="l-footer">
    <div class="l-footer__inner">
      <div class="l-footer__top">
        <div class="l-footer__logo-wrap">
          <a href="<?php echo is_front_page() ? '#top' : esc_url(home_url('/')); ?>" class="l-footer__logo">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets_new/img/img_footer-logo.webp'); ?>" alt="Charme Concierge" class="l-footer__logo-img" width="260" height="69" />
          </a>
        </div>
        <div class="l-footer__sns">
          <div class="l-footer__sns-items">
            <a class="l-footer__sns-item"
              href="<?php echo esc_url($sns['line']); ?>"
              target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets_new/img/img_line.webp"
                alt="LINE" class="l-footer__sns-icon" width="40" height="40" loading="lazy" />
            </a>
            <a class="l-footer__sns-item"
              href="<?php echo esc_url($sns['inst']); ?>"
              target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets_new/img/img_inst.webp"
                alt="Instagram" class="l-footer__sns-icon" width="40" height="40" loading="lazy" />
            </a>
            <a class="l-footer__sns-item"
              href="<?php echo esc_url($sns['tiktok']); ?>"
              target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets_new/img/img_tiktok.webp"
                alt="TikTok" class="l-footer__sns-icon" width="40" height="40" loading="lazy" />
            </a>
          </div>
          <a href="<?php echo esc_url(get_permalink(2)); ?>" class="l-footer__sns-mail-btn">
            <svg class="l-footer__sns-mail-btn-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_184_1345" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                <rect width="24" height="24" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_184_1345)">
                <path d="M4.6155 19C4.15517 19 3.77083 18.8458 3.4625 18.5375C3.15417 18.2292 3 17.8448 3 17.3845V6.6155C3 6.15517 3.15417 5.77083 3.4625 5.4625C3.77083 5.15417 4.15517 5 4.6155 5H19.3845C19.8448 5 20.2292 5.15417 20.5375 5.4625C20.8458 5.77083 21 6.15517 21 6.6155V17.3845C21 17.8448 20.8458 18.2292 20.5375 18.5375C20.2292 18.8458 19.8448 19 19.3845 19H4.6155ZM12 12.1155L4 6.8845V17.3845C4 17.564 4.05767 17.7115 4.173 17.827C4.2885 17.9423 4.436 18 4.6155 18H19.3845C19.564 18 19.7115 17.9423 19.827 17.827C19.9423 17.7115 20 17.564 20 17.3845V6.8845L12 12.1155ZM12 11L19.6923 6H4.30775L12 11ZM4 6.8845V6V17.3845C4 17.564 4.05767 17.7115 4.173 17.827C4.2885 17.9423 4.436 18 4.6155 18H4V6.8845Z" fill="#FF4469" />
              </g>
            </svg>
            <span class="l-footer__sns-mail-btn-text">メールでのお問い合わせ</span>
          </a>
        </div>
      </div>
      <div class="l-footer__nav">
        <ul class="l-footer__nav-list">
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(get_permalink(1912)); ?>" class="l-footer__nav-link">
              <span class="l-footer__nav-link-text">CHARMEとは</span>
            </a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(get_post_type_archive_link('service')); ?>" class="l-footer__nav-link">
              <span class="l-footer__nav-link-text">サービス</span>
            </a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>" class="l-footer__nav-link">
              <span class="l-footer__nav-link-text">症例</span>
            </a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(home_url('/concierge')); ?>" class="l-footer__nav-link">
              <span class="l-footer__nav-link-text">コンシェルジュ</span>
            </a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="l-footer__nav-link">
              <span class="l-footer__nav-link-text">キャンペーン</span>
            </a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(get_permalink(1503)); ?>" class="l-footer__nav-link">
              <span class="l-footer__nav-link-text">ご利用までの流れ</span>
            </a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>" class="l-footer__nav-link">
              <span class="l-footer__nav-link-text">クリニック</span>
            </a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(get_permalink(2)); ?>" class="l-footer__nav-link">
              <span class="l-footer__nav-link-text">お問い合わせ</span>
            </a>
          </li>
        </ul>
      </div>
      <small class="l-footer__copyright" lang="en">&copy; <?php echo date('Y'); ?> CHARME All Rights Reserved.</small>
    </div>
  </footer>

  <?php wp_footer(); ?>
  </body>

  </html>

<?php else: ?>
  <!-- 旧デザインフッター（その他ページ用） -->
  </div>
  </div>
  <?php if (is_mobile()) : ?>
    <section id="line">
      <h2><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/line_title.png" alt="LINE公式アカウント"></h2>
      <div>ラインからお気軽にお問い合わせください</div>
      <button class="contact-btn"><a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=mLCQY0">LINE＠</a></button>
    </section>

    <section id="contact">
      <h2>CONTACT US</h2>
      <div>メールでのお問い合わせはこちら</div>
      <button class="contact-btn"><a href="<?php echo esc_url(get_permalink(2)); ?>" class="btn-flex btn-contact">CONTACT FORM</a></button>
    </section>

    <section id="footer-menu">
      <a href="<?php echo esc_url(get_permalink(1912)); ?>">美容コンシェルジュとは</a>
      <a href="<?php echo esc_url(get_post_type_archive_link('service')); ?>">取扱いサービスとは</a>
      <a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>">症例紹介</a>
      <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">キャンペーン</a>
      <a href="<?php echo esc_url(home_url('/')); ?>#reason">選ばれる理由</a>
      <a href="<?php echo esc_url(get_permalink(1503)); ?>">ご利用の流れ</a>
      <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">お客様の声</a>
      <a href="https://www.instagram.com/concierge_charme/">SNS</a>
      <a href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>">提携クリニック一覧</a>
      <a href="<?php echo esc_url(get_permalink(2)); ?>">ライン／お問い合わせ</a>
      <a href="<?php echo esc_url(get_permalink(19)); ?>">運営会社</a>
      <a href="<?php echo esc_url(get_permalink(3)); ?>">プライバシーポリシー</a>
    </section>

    <div class="fixed-icon">
      <div class="line">
        <a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=mLCQY0">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/line_icon.png" alt="LINE">
        </a>
      </div>
      <div class="mail">
        <a href="<?php echo esc_url(get_permalink(2)); ?>" class="btn-flex btn-contact">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/mail_icon.png" alt="MAIL">
        </a>
      </div>
    </div>

    <footer class='sp-footer'><small>&copy; <?php echo date('Y'); ?> CHARME All Rights Reserved.</small></footer>

  <?php else: ?>
    <footer id="footer">
      <div class="fcontent container">
        <div class="col1">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/logo.svg" alt="CHARME">
          </a>
        </div>
        <div class="col2">
          <ul class="fmenu">
            <li>
              <a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">お知らせ</a>
            </li>
            <li>
              <a href="<?php echo esc_url(get_permalink(1912)); ?>">美容コンシェルジュとは</a>
            </li>
            <li>
              <a href="<?php echo esc_url(get_post_type_archive_link('service')); ?>">取り扱いサ―ビス</a>
            </li>
            <li>
              <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">キャンペーン</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>#reason">選ばれる理由</a>
            </li>
          </ul>
          <ul class="fmenu">

            <li>
              <a href="<?php echo esc_url(get_permalink(1503)); ?>">ご利用の流れ</a>
            </li>
            <li>
              <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">ボイス</a>
            </li>
            <li>
              <a href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>">提携クリニック一覧</a>
            </li>
            <li>
              <a href="<?php echo esc_url(get_permalink(17)); ?>">よくあるご質問</a>
            </li>
            <li>
              <a href="<?php echo esc_url(get_permalink(19)); ?>">運営会社</a>
            </li>
            <li>
              <a href="<?php echo esc_url(get_permalink(3)); ?>">プライバシーポリシー</a>
            </li>

          </ul>
        </div>
        <div class="col3">
          <div class="links">
            <a class="mail" href="<?php echo esc_url(get_permalink(2)); ?>">MAIL</a>
            <a class="social-icon" href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=mLCQY0" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/icon-line.png" alt="insta"></a>
            <a class="social-icon" href="https://www.instagram.com/concierge_charme/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/icon-insta.png" alt="insta"></a>
            <a class="social-icon" href="https://www.tiktok.com/@charme.concierge?_t=8mHq6qDaRKJ&_r=1" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/icon-tiktok.png" alt="insta"></a>
          </div>
        </div>

      </div>
      <p class="txt-copyright">© <?php echo date('Y'); ?> CHARME All Rights Reserved.</p>
      <?php if (!is_mobile()) : ?>
        <a href="#topsection" class="gotop active">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/to-top.png" alt="CHARME">
        </a>

      <?php endif; ?>
    </footer>
  <?php endif; ?>

  <?php $term_id = get_queried_object()->term_id; ?>
  <?php /*
    <script src="//code.jquery.com/jquery-3.4.0.min.js"></script>
    */ ?>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/lib/main.js"></script>
  <?php if (is_home()) : ?>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/top/local.js?date=20220515171000"></script>
  <?php elseif (is_tax('case_category') || is_search()) : ?>

    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/jquery.fancybox.css">
    <?php /*
        <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/case/jquery.fancybox.min.js"></script>
        <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
        <!-- jQuery -->
        */ ?>

    <?php /*
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
        */ ?>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

    <script>
      //$.fancybox.defaults.hash = false;
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/case/jquery.matchHeight.js"></script>
    <script>
      jQuery(document).ready(function() {
        jQuery('.list-cases ul li .case-img').empty();

        jQuery.ajax({
          url: 'https://charme-beauty.jp/wp-admin/admin-ajax.php?action=get_case&case_category=<?php echo $term_id ?>',
          // url: 'https://202308142331067966956.onamaeweb.jp/wp-admin/admin-ajax.php?action=get_case&case_category=<?php echo $term_id ?>',
          type: 'get',
          dataType: 'json',
          success: function(res) {
            if (res.status == true) {
              var html_case = '<a class="case-content" href="#" data-src="#pop-[id]" data-fancybox="group-[stt]">[image]<p class="text-center">[case_name]</p></a>';
              var html_popup = '<div id="pop-[id]" class="popup_box">';
              html_popup += '<div class="popup_box_inner">';
              html_popup += '<div class="popup_box_l">';
              html_popup += '[image]';
              html_popup += '</div>';
              html_popup += '<div class="popup_box_r">';
              html_popup += '<p style="color: #937F65;font-family: \'Futura Midium\';font-size: 22px;margin-bottom: 5px !important;font-weight: 600;">[case_name1]</p>';
              html_popup += '<p style="color: #937f65;font-weight: 600;margin-bottom: -5px !important;">[case_clinic]</p>';
              html_popup += '<h3 style="margin-top: 0px;margin-bottom: 30px;"></h3>';
              html_popup += '<div>';
              html_popup += '<dl><dt style="font-size:24px; color: #000; letter-spacing: 5px;">[case_name]</dt></dl>';
              html_popup += '<dl><dt style="font-size: 16px;">料金</dt><dd style="font-family: \'Futura Midium\'; font-weight: 600">[case_price]</dd></dl>';
              html_popup += '<dl><dt style="font-size: 16px;">リスク・副作用</dt><dd style="font-weight: 600">[case_risk]</dd></dl>';
              html_popup += '</div>';
              html_popup += '</div>';
              html_popup += '</div>';
              html_popup += '</div>';

              if (res.data.length > 0) {
                jQuery.each(res.data, function(x, y) {
                  if (y.length < 3) {
                    jQuery('.list-cases ul li:eq(' + (x) + ') .case-img').removeAttr('data-slider-3').addClass('grid');
                    if (y[0].length == 0) {
                      jQuery('.list-cases ul li:eq(' + (x) + ')').addClass("hidden");
                    }
                  }
                  jQuery.each(y, function(a, b) {
                    if (b.id) {
                      var html = html_case;
                      html = html.replace('[id]', b.id);
                      html = html.replace('[image]', b.thumb);
                      html = html.replace('[case_name]', b.case_name);
                      html = html.replace('[stt]', x);
                      jQuery('.list-cases ul li:eq(' + (x) + ') .case-img').append(html);

                      var popup = html_popup;
                      popup = popup.replace('[id]', b.id);
                      popup = popup.replace('[image]', b.popup);
                      popup = popup.replace('[case_name1]', b.case_name1);
                      popup = popup.replace('[case_clinic]', b.case_clinic);
                      popup = popup.replace('[case_name]', b.case_name);
                      popup = popup.replace('[case_price]', b.case_price);
                      popup = popup.replace('[case_risk]', b.case_risk);
                      jQuery('.list-cases ul li:eq(' + (x) + ') .case-right .popup').append(popup);
                    } else {}
                  });
                });

                //$('[data-fancybox]').fancybox({});
                Fancybox.bind("[data-fancybox]");

                if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/i)) {
                  jQuery('[data-slider-3]').slick({
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 1
                  });
                } else {
                  jQuery('[data-slider-3]').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1
                  });
                }
              }
            }
          }
        });
        jQuery(function() {
          jQuery('.sec-case-detail li div').matchHeight();
          jQuery('.sec-case-detail li span').matchHeight();
          jQuery('.sec-case-detail li h3').matchHeight();
        });
      });
    </script>
  <?php endif; ?>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/animation.js"></script>
  <?php wp_footer(); ?>

  </body>

  </html>
<?php endif; ?>