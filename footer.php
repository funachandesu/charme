<div class="p-float-cta">
  <button class="p-float-cta__btn-close"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/icon_float-cta-close.svg" alt="閉じる" class="p-float-cta__btn-close-icon" width="18" height="18" loading='lazy' /></button>
  <a href="" target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer" class="p-float-cta__btn">
    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/img_float-cta-pc.webp" alt="LINEで割引情報をGET！" class="p-float-cta__btn-icon u-pc" width="24" height="18" loading='lazy' />
    <div class="p-float-cta__btn-close-box u-sp">
      <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/img_line.webp" alt="" class="p-float-cta__btn-sns-icon" width="24" height="18" loading='lazy' />
      <div class="p-float-cta__box-text-wrap">
        <span class="p-float-cta__text">LINEで割引情報をGET！</span>
        <div class="p-float-cta__check-block">
          <span class="p-float-cta__check-text">CHECK!</span>
          <svg class="p-float-cta__check-icon" width="28" height="6" viewBox="0 0 28 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M28 2.88672L23 -3.06526e-05L23 5.77347L28 2.88672ZM0 2.88672L-4.37114e-08 3.38672L23.5 3.38672L23.5 2.88672L23.5 2.38672L4.37114e-08 2.38672L0 2.88672Z" fill="#424242" />
          </svg>
        </div>
      </div>
    </div>
    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/img_float-cta-face.webp" alt="" class="p-float-cta__face-img u-sp" width="64" height="90" loading='lazy' />
  </a>
</div>

<footer class="l-footer">
  <div class="l-inner">
    <div class="l-footer__top">
      <?php if (is_front_page()): ?>
        <div class="l-footer__logo-wrap">
          <a href="#top" class="l-footer__logo">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets_new/img/img_footer-logo.webp'); ?>" alt="Charme Concierge" class="l-footer__logo-img" width="260" height="69" />
          </a>
        </div>
      <?php else: ?>
        <div class="l-footer__logo-wrap">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer__logo">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets_new/img/img_footer-logo.webp'); ?>" alt="Charme Concierg" class="l-footer__logo-img" width="260" height="69" />
          </a>
        </div>
      <?php endif; ?>
      <div class="l-footer__sns">
        <div class="l-footer__sns-items">
          <a class="l-footer__sns-item" href="" target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer">
            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/img_line.webp" alt="LINE" class="l-footer__sns-icon" width="40" height="40" loading='lazy' />
          </a>
          <a class="l-footer__sns-item" href="" target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer">
            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/img_inst.webp" alt="Instagram" class="l-footer__sns-icon" width="40" height="40" loading='lazy' />
          </a>
          <a class="l-footer__sns-item" href="" target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer">
            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/img_tiktok.webp" alt="TikTok" class="l-footer__sns-icon" width="40" height="40" loading='lazy' />
          </a>
        </div>
        <a class="l-footer__sns-mail-btn">
          <svg class="l-footer__sns-mail-btn-icon" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.6155 14C1.15517 14 0.770833 13.8458 0.4625 13.5375C0.154167 13.2292 0 12.8448 0 12.3845V1.6155C0 1.15517 0.154167 0.770833 0.4625 0.4625C0.770833 0.154167 1.15517 0 1.6155 0H16.3845C16.8448 0 17.2292 0.154167 17.5375 0.4625C17.8458 0.770833 18 1.15517 18 1.6155V12.3845C18 12.8448 17.8458 13.2292 17.5375 13.5375C17.2292 13.8458 16.8448 14 16.3845 14H1.6155ZM9 7.1155L1 1.8845V12.3845C1 12.564 1.05767 12.7115 1.173 12.827C1.2885 12.9423 1.436 13 1.6155 13H16.3845C16.564 13 16.7115 12.9423 16.827 12.827C16.9423 12.7115 17 12.564 17 12.3845V1.8845L9 7.1155ZM9 6L16.6923 1H1.30775L9 6ZM1 1.8845V1V12.3845C1 12.564 1.05767 12.7115 1.173 12.827C1.2885 12.9423 1.436 13 1.6155 13H1V1.8845Z" fill="#FF4469" />
          </svg>
          <span class="l-footer__sns-mail-btn-text">メールでのお問い合わせ</span>
        </a>
      </div>
    </div>
    <div class="l-footer__nav">
      <ul class="l-footer__nav-list">
        <li class="l-footer__nav-item">
          <a href="<?php echo esc_url(home_url('/news')); ?>" class="l-footer__nav-link">
            <span class="l-footer__nav-link-text">お知らせ</span>
          </a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo esc_url(home_url('/about')); ?>" class="l-footer__nav-link">
            <span class="l-footer__nav-link-text">美容コンシェルジュとは</span>
          </a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo esc_url(home_url('/service')); ?>" class="l-footer__nav-link">
            <span class="l-footer__nav-link-text">取り扱いサービス</span>
          </a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo esc_url(home_url('/ip')); ?>" class="l-footer__nav-link">
            <span class="l-footer__nav-link-text">取扱IP紹介</span>
          </a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="l-footer__nav-link">
            <span class="l-footer__nav-link-text">キャンペーン</span>
          </a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo esc_url(home_url('/reason')); ?>" class="l-footer__nav-link">
            <span class="l-footer__nav-link-text">選ばれる理由</span>
          </a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo esc_url(home_url('/reason')); ?>" class="l-footer__nav-link">
            <span class="l-footer__nav-link-text">ご利用の流れ</span>
          </a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo esc_url(home_url('/voice')); ?>" class="l-footer__nav-link">
            <span class="l-footer__nav-link-text">ボイス</span>
          </a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo esc_url(home_url('/clinic')); ?>" class="l-footer__nav-link">
            <span class="l-footer__nav-link-text">提携クリニック一覧</span>
          </a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo esc_url(home_url('/faq')); ?>" class="l-footer__nav-link">
            <span class="l-footer__nav-link-text">よくあるご質問</span>
          </a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo esc_url(home_url('/company')); ?>" class="l-footer__nav-link">
            <span class="l-footer__nav-link-text">運営会社</span>
          </a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo esc_url(home_url('/privacy')); ?>" class="l-footer__nav-link">
            <span class="l-footer__nav-link-text">プライバシーポリシー</span>
          </a>
        </li>
      </ul>
    </div>
    <small class="l-footer__copyright">&copy; 2025 CHARME All Rights Reserved.</small>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>