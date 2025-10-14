<?php
/**
 * Template Name: charmelp
 */
?>
<?php get_header(); ?>

<head>
  <!-- google-font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

  <!-- adobe-font -->
  <script>
    (function(d) {
      var config = {
          kitId: 'ofd2xmr',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>

  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/page-templates/assets/css/lib/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/page-templates/assets/css/style.css?ver1.0" />
  <style>
    header, footer, #contact, #line, #footer-menu, .fixed-icon, .sp-footer{
      display: none;
    }
    #main{
      margin-top: 0px !important;
    }
    #main section {
      padding: 1px !important;
    }
  </style>

  <!-- js -->
  <script src="<?php echo get_template_directory_uri() ?>/page-templates/assets/js/lib/swiper-bundle.min.js" defer></script>
  <script src="<?php echo get_template_directory_uri() ?>/page-templates/assets/js/main.js?ver1.0" defer></script>
</head>

<body>
  <button class="p-drawer__icon">
    <div class="p-drawer__icon--bar"></div>
    <div class="p-drawer__icon--bar"></div>
    <div class="p-drawer__icon--bar"></div>
  </button>

  <div class="p-drawer">
    <div class="p-drawer__body">
      <ul class="p-drawer__list">
        <li><a href="#top">トップ</a></li>
        <li><a href="#lp-about">私たちについて</a></li>
        <li><a href="#use">お得に利用する方法</a></li>
        <li><a href="#request">5つのわがまま</a></li>
        <li><a href="#warning">5つの落し穴</a></li>
        <li><a href="#evaluation">5つの評価基準</a></li>
        <li><a href="#menu">施術例</a></li>
        <li><a href="#comparison">相場比較表</a></li>
        <li><a href="#flow">コンシェルジュの使い方</a></li>
        <li><a href="#voice">お客様の声</a></li>
        <li><a href="#faq">よくある質問</a></li>
      </ul>
    </div>
  </div>
  <div class="p-bg">
  </div>
  <div class="p-side__menu">
    <h1 class="p-side__title"><img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/top-logo.svg" alt="CHARME CONCIERGE" class="p-side__logo" width="600" height="162" /></h1>
    <div class="p-side__cta">
      <p class="p-side__cta-sentence"></p>
      <a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=782sy1" target="_blank" rel="noopener noreferrer" class="p-side__cta-btn">
        <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/line-icon.svg" alt="LINEのアイコン" class="p-side__cta-icon" width="29" height="29" />
        <p class="p-side__cta-text">今なら公式LINE登録で、<br>最大30%OFFクーポンゲット！</p>
      </a>
    </div>
  </div>
  <main class="l-main">

    <div class="l-main__inner">


      <div class="c-top-logo">
        <img src='<?php echo get_template_directory_uri() ?>/page-templates/assets/img/top-logo.svg' alt='CHARME CONCIERGE' width='74' height='20'>
      </div>
      <section class="p-fv" id="top">
        <div class="l-inner">
          <div class="p-fv__container">
            <div class="p-fv__bg-img-wrap">
              <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/fv-bg.webp" alt="" class="p-fv__bg-img" width="359" height="606">
            </div>
            <div class="p-fv__rec">
              <span class="p-fv__rec-circle"></span>
              <span class="p-fv__rec-text" lang="en">REC</span>
            </div>
            <svg class="p-fv__copy" width="150" height="74" viewBox="0 0 150 74" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_d_73_22)">
                <path d="M24.512 8.272C25.888 8.272 26.624 8.912 26.624 10.352C26.624 11.92 24.32 15.088 20.928 17.04C18.688 18.288 16.064 18.896 14.112 19.088C13.824 19.984 13.664 20.88 13.664 21.648C13.664 22.8 14.016 23.376 15.264 23.376C17.184 23.376 20.928 19.696 21.28 19.088C21.696 18.48 21.92 18.352 22.4 18.352C22.656 18.352 22.88 18.576 22.88 18.864C22.88 19.408 22.24 20.144 21.824 21.744C21.696 22.32 21.536 23.024 21.344 23.92C22.912 22.992 24.256 22.064 25.056 20.976C25.44 20.496 25.696 20.176 26.048 20.176C26.336 20.176 26.496 20.368 26.496 20.624C26.496 20.912 26.368 21.104 25.984 21.552C24.736 23.056 22.976 24.24 21.024 25.36C19.264 32.496 15.328 38.032 11.52 38.032C9.92 38.032 8.832 36.976 8.832 35.344C8.832 30.544 15.776 26.864 19.776 24.784C20.224 22.992 20.448 21.584 20.48 21.52C19.456 22.64 16.768 24.656 14.848 24.656C13.28 24.656 12.16 23.696 12.16 21.776C12.16 20.944 12.288 20.048 12.576 19.152C11.104 19.152 10.848 18.608 10.848 18.256C10.848 17.968 11.04 17.648 11.584 17.648C12.032 17.648 12.48 17.776 13.024 17.808C13.632 16.368 14.464 14.928 15.552 13.616C18.048 10.608 22.144 8.272 24.512 8.272ZM11.648 36.848C14.304 36.848 18.272 31.184 19.392 26.256C16.416 27.632 10.112 31.408 10.112 35.152C10.112 36.24 10.592 36.848 11.648 36.848ZM16.768 14.48C15.904 15.504 15.2 16.624 14.656 17.744C16.256 17.584 18.176 17.168 20 16.144C23.328 14.256 25.28 11.408 25.28 10.64C25.28 10.096 24.928 9.648 24.256 9.648C22.592 9.648 18.976 11.728 16.768 14.48ZM26.0793 25.072C28.8953 25.072 31.1673 22.512 32.3193 20.976C32.7033 20.496 32.9913 20.176 33.3113 20.176C33.6313 20.176 33.7593 20.368 33.7593 20.624C33.7593 20.912 33.6313 21.104 33.2793 21.552C31.7433 23.376 29.1193 26.224 25.5673 26.224C24.5753 26.224 23.6472 25.2 23.6472 24.176C23.6472 23.856 23.5512 23.76 23.5512 23.44C23.5512 23.152 23.8072 22.8 24.0953 22.672C25.4073 19.632 27.5513 18.416 29.1833 18.416C29.7913 18.416 30.4953 18.928 30.4953 19.536C30.4953 21.168 27.7113 23.024 25.7273 23.472C25.1513 23.6 25.1193 23.792 25.1193 24.112C25.1193 24.432 25.3113 25.072 26.0793 25.072ZM28.7993 19.664C27.8073 19.664 26.0153 21.712 25.5353 22.48C26.6553 22.448 29.1833 20.656 29.1833 19.984C29.1833 19.728 29.0553 19.664 28.7993 19.664ZM36.3373 16.304C36.9453 16.304 37.3933 16.08 37.8733 16.08C38.3853 16.08 38.5133 16.304 38.5133 16.752C38.5133 17.616 36.6893 17.616 35.5052 17.616C33.7773 20.72 32.2413 24.08 32.2413 25.744C32.2413 26.16 32.4333 26.32 32.4333 26.608C32.4333 26.864 32.2093 27.248 31.7613 27.248C31.2812 27.248 30.9612 26.768 30.9612 25.968C30.9612 24.112 32.4973 20.624 34.0333 17.584C33.4893 17.584 32.0173 17.584 32.0173 16.912C32.0173 16.464 32.3372 16.144 32.8493 16.144C33.3293 16.144 33.4253 16.368 33.8093 16.368C34.1293 16.368 34.4493 16.304 34.8013 16.24C35.7293 14.576 36.3373 13.424 37.1053 12.368C37.6493 11.6 38.0013 11.28 38.4173 11.28C38.8333 11.28 39.0893 11.472 39.0893 11.856C39.0893 12.24 39.0253 12.496 38.4173 12.976C37.8733 13.424 37.1693 14.704 36.3373 16.304ZM48.054 12.592C48.374 12.592 48.758 12.848 48.758 13.488C48.758 14.256 47.894 14.704 47.51 14.704C47.126 14.704 46.966 14.032 46.966 13.584C46.966 13.136 47.414 12.592 48.054 12.592ZM43.734 24.848C44.662 24.848 46.966 22.512 48.118 20.976C48.502 20.496 48.758 20.176 49.11 20.176C49.398 20.176 49.558 20.368 49.558 20.624C49.558 20.912 49.43 21.104 49.078 21.552C47.542 23.376 44.662 26.096 43.062 26.096C42.518 26.096 41.75 25.52 41.75 24.464C41.75 23.056 43.382 19.92 43.638 19.44C43.99 18.832 44.278 18.32 44.694 18.32C44.982 18.32 45.43 18.544 45.43 18.896C45.43 19.248 45.11 19.568 44.822 20.048C44.118 21.264 43.158 23.504 43.158 24.208C43.158 24.496 43.318 24.848 43.734 24.848ZM52.1498 16.304C52.7578 16.304 53.2058 16.08 53.6858 16.08C54.1978 16.08 54.3258 16.304 54.3258 16.752C54.3258 17.616 52.5018 17.616 51.3177 17.616C49.5898 20.72 48.0538 24.08 48.0538 25.744C48.0538 26.16 48.2458 26.32 48.2458 26.608C48.2458 26.864 48.0218 27.248 47.5738 27.248C47.0938 27.248 46.7737 26.768 46.7737 25.968C46.7737 24.112 48.3098 20.624 49.8458 17.584C49.3018 17.584 47.8298 17.584 47.8298 16.912C47.8298 16.464 48.1497 16.144 48.6618 16.144C49.1418 16.144 49.2378 16.368 49.6218 16.368C49.9418 16.368 50.2618 16.304 50.6138 16.24C51.5418 14.576 52.1498 13.424 52.9178 12.368C53.4618 11.6 53.8138 11.28 54.2298 11.28C54.6458 11.28 54.9018 11.472 54.9018 11.856C54.9018 12.24 54.8378 12.496 54.2298 12.976C53.6858 13.424 52.9818 14.704 52.1498 16.304ZM60.0265 18.352C60.2825 18.352 60.7945 18.768 60.7945 19.12C60.7945 19.952 59.2905 23.056 59.2905 24.368C59.2905 24.656 59.3545 24.816 59.5785 24.816C60.6345 24.816 62.3625 22.16 63.1945 19.952C63.4505 19.184 63.8345 18.64 64.1545 18.64C64.4745 18.64 65.0505 18.768 65.0505 19.312C65.0505 19.856 64.2825 20.816 64.2825 22.448C64.2825 23.824 64.5385 24.784 65.1785 24.784C66.4905 24.784 67.9305 22.064 67.9305 19.728C67.9305 19.152 67.8665 18.544 67.7065 18.224C67.5465 17.872 66.8745 17.584 66.8745 17.04C66.8745 16.592 67.0985 16.176 67.7065 16.176C68.6985 16.176 69.0825 17.456 69.0825 19.632C69.0825 22.48 67.0025 26.064 64.9225 26.064C63.4505 26.064 62.9385 24.528 62.8105 23.216C61.9145 24.656 60.2825 26.288 59.2265 26.288C58.6825 26.288 57.8185 25.968 57.8185 24.944C57.8185 23.92 58.7785 20.496 59.0025 19.536C59.2265 18.576 59.5465 18.352 60.0265 18.352ZM75.7415 12.592C76.0615 12.592 76.4455 12.848 76.4455 13.488C76.4455 14.256 75.5815 14.704 75.1975 14.704C74.8135 14.704 74.6535 14.032 74.6535 13.584C74.6535 13.136 75.1015 12.592 75.7415 12.592ZM71.4215 24.848C72.3495 24.848 74.6535 22.512 75.8055 20.976C76.1895 20.496 76.4455 20.176 76.7975 20.176C77.0855 20.176 77.2455 20.368 77.2455 20.624C77.2455 20.912 77.1175 21.104 76.7655 21.552C75.2295 23.376 72.3495 26.096 70.7495 26.096C70.2055 26.096 69.4375 25.52 69.4375 24.464C69.4375 23.056 71.0695 19.92 71.3255 19.44C71.6775 18.832 71.9655 18.32 72.3815 18.32C72.6695 18.32 73.1175 18.544 73.1175 18.896C73.1175 19.248 72.7975 19.568 72.5095 20.048C71.8055 21.264 70.8455 23.504 70.8455 24.208C70.8455 24.496 71.0055 24.848 71.4215 24.848ZM78.2053 24.016C78.2053 22.768 75.9333 22.832 75.9333 21.392C75.9333 19.728 78.3653 18.192 79.7733 18.192C80.3173 18.192 81.0533 18.672 81.0533 19.344C81.0533 20.016 80.6373 21.136 79.9973 21.136C79.6453 21.136 79.3253 20.944 79.3253 20.592C79.3253 20.048 79.8053 19.952 79.8053 19.824C79.8053 19.632 79.5813 19.408 79.3253 19.408C78.8773 19.408 77.3733 20.272 77.3733 21.2C77.3733 22.096 79.6773 21.968 79.6773 24.016C79.6773 25.072 78.7493 26.224 76.8932 26.224C75.7733 26.224 74.9093 25.424 74.9093 24.656C74.9093 24.208 75.2293 23.856 75.6133 23.856C75.9013 23.856 76.1893 24.016 76.1893 24.336C76.1893 24.88 76.4773 25.2 77.0853 25.2C77.7573 25.2 78.2053 24.656 78.2053 24.016ZM83.2355 25.072C86.0515 25.072 88.3235 22.512 89.4755 20.976C89.8595 20.496 90.1475 20.176 90.4675 20.176C90.7875 20.176 90.9155 20.368 90.9155 20.624C90.9155 20.912 90.7875 21.104 90.4355 21.552C88.8995 23.376 86.2755 26.224 82.7235 26.224C81.7315 26.224 80.8035 25.2 80.8035 24.176C80.8035 23.856 80.7075 23.76 80.7075 23.44C80.7075 23.152 80.9635 22.8 81.2515 22.672C82.5635 19.632 84.7075 18.416 86.3395 18.416C86.9475 18.416 87.6515 18.928 87.6515 19.536C87.6515 21.168 84.8675 23.024 82.8835 23.472C82.3075 23.6 82.2755 23.792 82.2755 24.112C82.2755 24.432 82.4675 25.072 83.2355 25.072ZM85.9555 19.664C84.9635 19.664 83.1715 21.712 82.6915 22.48C83.8115 22.448 86.3395 20.656 86.3395 19.984C86.3395 19.728 86.2115 19.664 85.9555 19.664ZM91.3405 25.008C92.7165 25.008 95.1485 22.512 96.3005 20.976C96.6845 20.496 96.9405 20.176 97.2925 20.176C97.5805 20.176 97.7405 20.368 97.7405 20.624C97.7405 20.912 97.6125 21.104 97.2285 21.552C95.7245 23.376 92.9405 26.192 91.1165 26.192C90.0605 26.192 88.8125 25.328 88.8125 23.856C88.8125 21.136 90.8925 16.208 92.7165 13.072C94.6365 9.776 96.0765 8.144 97.8685 8.144C98.4765 8.144 99.1165 8.816 99.1165 9.456C99.1165 10.384 98.6045 12.336 96.3005 15.28C94.2205 17.904 92.7165 18.96 91.3085 20.08C90.7325 21.008 90.2845 22.8 90.2845 23.504C90.2845 24.432 90.6365 25.008 91.3405 25.008ZM97.2285 9.616C96.8125 9.616 95.5005 10.512 93.8685 13.488C92.1725 16.464 91.7885 17.808 91.6925 18.32C92.1085 18.128 93.7085 16.72 95.4365 14.384C97.3245 11.792 97.7085 10.832 97.7085 10.064C97.7085 9.744 97.5485 9.616 97.2285 9.616ZM102.292 29.136C101.652 33.872 98.9963 40.624 94.9642 40.624C93.8122 40.624 92.6922 39.664 92.6922 38.288C92.6922 36.848 93.6202 34.288 95.9563 31.728C98.1003 29.36 100.756 28.272 100.916 28.208C101.172 25.744 101.524 22.256 101.524 22.096C101.524 21.936 101.524 21.52 101.396 21.52C101.364 21.52 101.3 21.552 101.268 21.616C100.436 22.832 97.9083 26.192 96.2763 26.192C95.7323 26.192 95.2203 25.776 95.2203 24.912C95.2203 24.048 96.1803 21.136 96.5963 20.144C97.0443 19.12 97.4603 18.544 97.9403 18.544C98.4203 18.544 98.7403 18.8 98.7403 19.088C98.7403 19.344 98.5163 19.696 98.1003 20.304C97.4603 21.328 96.6283 23.952 96.6283 24.24C96.6283 24.56 96.6923 24.688 96.8843 24.688C97.6843 24.688 100.084 21.488 100.692 20.56C101.14 19.888 101.588 19.216 101.812 18.992C102.068 18.704 102.74 18.48 102.996 18.48C103.252 18.48 103.54 18.576 103.54 18.992C103.54 19.408 103.06 20.016 102.964 21.744C102.868 23.44 102.612 25.776 102.452 27.984C102.676 27.952 102.9 27.92 103.124 27.92C104.628 27.92 106.228 28.624 106.228 30.128C106.228 30.704 105.844 31.312 105.236 31.312C104.628 31.312 104.468 30.96 104.468 30.608C104.468 30.256 104.564 30.064 104.564 29.744C104.564 29.36 103.988 29.04 103.028 29.04C102.804 29.04 102.516 29.072 102.292 29.136ZM100.788 29.52C100.66 29.584 98.6443 30.608 96.5643 32.912C94.7402 34.896 94.0362 37.232 94.0362 38.448C94.0362 39.088 94.5162 39.472 95.0282 39.472C98.1003 39.472 100.5 32.912 100.788 29.52ZM122.116 8.496C122.404 8.496 122.628 8.688 122.756 8.88C123.428 8.752 124.1 8.656 124.836 8.656C127.236 8.656 128.196 9.456 128.196 10.352C128.196 10.832 127.876 11.472 127.236 11.472C126.884 11.472 126.596 11.12 126.596 10.768C126.596 10.096 125.828 9.712 125.06 9.712C124.1 9.712 123.076 9.968 121.988 10.32C118.756 13.2 114.724 22.448 114.724 26.256C114.724 26.704 114.884 26.896 114.884 27.28C114.884 27.664 114.564 28.112 114.052 28.112C113.7 28.112 113.22 27.888 113.22 27.12C113.22 22.32 116.868 15.024 119.492 11.088C117.892 11.6 116.164 12.048 114.372 12.048C113.508 12.048 111.332 11.696 111.332 10.416C111.332 10 111.716 9.68 112.132 9.68C112.356 9.68 112.644 9.808 112.772 10C113.188 10.48 113.668 10.832 114.404 10.832C116.644 10.832 118.692 10.032 120.804 9.392C121.316 8.816 121.796 8.496 122.116 8.496ZM128.793 24.88C129.945 24.88 131.929 22.512 133.113 20.976C133.465 20.496 133.753 20.176 134.073 20.176C134.393 20.176 134.521 20.368 134.521 20.624C134.521 20.912 134.393 21.104 134.041 21.552C132.505 23.376 130.009 26.16 128.409 26.16C127.129 26.16 126.585 25.424 126.585 24.176C126.585 23.344 127.065 21.808 127.065 21.488C127.065 21.168 127.001 20.912 126.585 20.912C125.177 20.912 122.105 24.08 121.625 25.744C121.433 26.416 121.081 26.64 120.697 26.64C120.345 26.64 120.056 26.256 120.056 25.68C120.056 24.24 122.073 18 125.049 13.232C127.161 9.84 129.241 8.048 130.553 8.048C131.161 8.048 131.929 8.56 131.929 9.36C131.929 10.32 131.577 12.304 129.209 15.024C126.681 17.936 124.761 18.864 123.641 19.952C122.969 20.592 122.361 22.512 122.297 22.736C123.833 20.848 125.945 19.536 127.321 19.536C128.281 19.536 128.633 20.048 128.633 20.816C128.633 21.616 128.153 23.312 128.153 23.984C128.153 24.56 128.312 24.88 128.793 24.88ZM130.297 9.392C129.433 9.392 127.833 11.024 126.265 13.648C124.665 16.304 124.057 18.064 124.057 18.064C124.057 18.064 126.137 17.008 128.153 14.576C130.393 11.824 130.777 10.416 130.777 9.84C130.777 9.488 130.553 9.392 130.297 9.392ZM134.111 25.072C136.927 25.072 139.199 22.512 140.351 20.976C140.735 20.496 141.023 20.176 141.343 20.176C141.663 20.176 141.791 20.368 141.791 20.624C141.791 20.912 141.663 21.104 141.311 21.552C139.775 23.376 137.151 26.224 133.599 26.224C132.607 26.224 131.678 25.2 131.678 24.176C131.678 23.856 131.582 23.76 131.582 23.44C131.582 23.152 131.838 22.8 132.127 22.672C133.439 19.632 135.583 18.416 137.215 18.416C137.823 18.416 138.527 18.928 138.527 19.536C138.527 21.168 135.743 23.024 133.759 23.472C133.183 23.6 133.151 23.792 133.151 24.112C133.151 24.432 133.343 25.072 134.111 25.072ZM136.831 19.664C135.839 19.664 134.047 21.712 133.567 22.48C134.687 22.448 137.215 20.656 137.215 19.984C137.215 19.728 137.087 19.664 136.831 19.664ZM18.304 50.592C18.624 50.592 19.008 50.848 19.008 51.488C19.008 52.256 18.144 52.704 17.76 52.704C17.376 52.704 17.216 52.032 17.216 51.584C17.216 51.136 17.664 50.592 18.304 50.592ZM13.984 62.848C14.912 62.848 17.216 60.512 18.368 58.976C18.752 58.496 19.008 58.176 19.36 58.176C19.648 58.176 19.808 58.368 19.808 58.624C19.808 58.912 19.68 59.104 19.328 59.552C17.792 61.376 14.912 64.096 13.312 64.096C12.768 64.096 12 63.52 12 62.464C12 61.056 13.632 57.92 13.888 57.44C14.24 56.832 14.528 56.32 14.944 56.32C15.232 56.32 15.68 56.544 15.68 56.896C15.68 57.248 15.36 57.568 15.072 58.048C14.368 59.264 13.408 61.504 13.408 62.208C13.408 62.496 13.568 62.848 13.984 62.848ZM23.8078 57.024C24.1598 55.552 24.7678 53.344 26.1118 50.496C27.4558 47.648 28.9598 46.4 30.0798 46.4C30.9758 46.4 31.4878 47.04 31.4878 47.936C31.4878 48.832 31.1998 50.368 29.4078 53.248C27.2638 56.672 24.9918 58.656 24.6078 59.424C24.3198 60.032 24.1918 60.832 24.1918 61.696C24.1918 62.464 24.2238 64.16 25.1198 64.384C25.4078 64.416 25.6318 64.48 25.6318 64.64C25.6318 64.896 25.1198 65.248 24.4798 65.248C23.0398 65.248 22.8158 63.392 22.8158 62.112V61.408C21.3758 63.2 19.4238 64.32 18.3358 64.32C17.7278 64.32 16.7357 63.84 16.7357 62.56C16.7357 60.256 19.9038 56.448 21.9838 56.448C23.1678 56.448 23.6478 57.024 23.8078 57.024ZM29.8878 47.584C29.5678 47.584 28.5438 48.32 27.1678 51.04C25.7917 53.76 25.0558 57.216 25.0558 57.216C25.0558 57.216 26.9438 55.264 28.4798 52.512C29.8878 50.016 30.2398 49.12 30.2398 48.192C30.2398 47.936 30.2398 47.616 29.8878 47.584ZM21.9838 57.76C20.4798 57.856 18.1438 61.024 18.1438 62.24C18.1438 62.752 18.5278 62.976 18.8798 62.976C19.9678 62.976 23.1998 59.552 23.1678 58.752C23.0398 58.752 22.7198 58.688 22.6878 58.304C22.6558 57.952 22.3038 57.76 21.9838 57.76ZM28.6105 63.072C31.4265 63.072 33.6985 60.512 34.8505 58.976C35.2345 58.496 35.5225 58.176 35.8425 58.176C36.1625 58.176 36.2905 58.368 36.2905 58.624C36.2905 58.912 36.1625 59.104 35.8105 59.552C34.2745 61.376 31.6505 64.224 28.0985 64.224C27.1065 64.224 26.1785 63.2 26.1785 62.176C26.1785 61.856 26.0825 61.76 26.0825 61.44C26.0825 61.152 26.3385 60.8 26.6265 60.672C27.9385 57.632 30.0825 56.416 31.7145 56.416C32.3225 56.416 33.0265 56.928 33.0265 57.536C33.0265 59.168 30.2425 61.024 28.2585 61.472C27.6825 61.6 27.6505 61.792 27.6505 62.112C27.6505 62.432 27.8425 63.072 28.6105 63.072ZM31.3305 57.664C30.3385 57.664 28.5465 59.712 28.0665 60.48C29.1865 60.448 31.7145 58.656 31.7145 57.984C31.7145 57.728 31.5865 57.664 31.3305 57.664ZM40.5035 57.184C40.7595 57.184 40.9195 56.512 41.4635 56.512C41.9755 56.512 42.2955 56.8 42.2955 57.184C42.2955 57.6 41.4635 58.688 40.7915 59.968C40.4075 60.672 40.2155 61.312 40.2155 61.792C40.2155 62.208 40.3435 62.56 40.6315 62.56C41.7835 62.56 43.7035 60.512 44.8875 58.976C45.2395 58.496 45.5275 58.176 45.8475 58.176C46.1675 58.176 46.2955 58.368 46.2955 58.624C46.2955 58.912 46.1675 59.104 45.8155 59.552C44.2795 61.376 41.7835 63.84 40.1835 63.84C39.1915 63.84 38.6795 63.136 38.6795 62.336C38.6795 61.984 38.7435 61.536 38.7435 61.248C38.7435 61.056 38.7435 60.96 38.6795 60.96C38.4875 60.96 37.9755 61.568 37.2715 62.208C35.7675 63.52 34.7755 64.16 34.0395 64.16C33.7195 64.16 33.0795 63.68 33.0795 62.912C33.0795 59.648 36.5675 56.48 39.1915 56.448C39.7995 56.448 40.3755 57.184 40.5035 57.184ZM38.7435 57.664C37.3675 57.664 34.5515 60.672 34.5515 62.24C34.5515 62.432 34.6795 62.624 34.9355 62.624C35.4795 62.624 39.6395 59.008 39.6395 58.464C39.6395 58.304 39.0955 58.4 39.0955 58.048C39.0955 57.856 38.9995 57.664 38.7435 57.664ZM46.9045 63.008C47.4805 63.008 48.1205 62.592 48.5045 62.24C48.9205 61.824 49.2405 61.408 49.5925 61.408C49.8805 61.408 50.0405 61.6 50.0405 61.856C50.0405 62.112 49.9445 62.336 49.5285 62.784C48.9205 63.392 47.9925 64.192 46.6165 64.192C45.5605 64.192 44.3125 63.328 44.3125 61.856C44.3125 59.136 46.3925 54.208 48.2165 51.072C50.1365 47.776 51.5765 46.144 53.3685 46.144C53.9765 46.144 54.6165 46.816 54.6165 47.456C54.6165 48.384 54.1045 50.336 51.8005 53.28C49.7205 55.904 48.5685 56.544 47.2245 57.888C46.4245 58.688 45.7845 60.8 45.7845 61.504C45.7845 62.432 46.2005 63.008 46.9045 63.008ZM52.7285 47.616C52.3125 47.616 51.0005 48.512 49.3685 51.488C47.6725 54.464 47.2885 55.808 47.1925 56.32C47.6085 56.128 49.2085 54.72 50.9365 52.384C52.8245 49.792 53.2085 48.832 53.2085 48.064C53.2085 47.744 53.0485 47.616 52.7285 47.616ZM66.9665 62.816C68.0225 62.816 69.8465 60.512 70.9985 58.976C71.3825 58.496 71.6385 58.176 71.9905 58.176C72.2785 58.176 72.4385 58.368 72.4385 58.624C72.4385 58.912 72.3105 59.104 71.9265 59.552C70.9345 60.832 68.2785 64.096 66.5825 64.096C65.7185 64.096 65.1745 63.488 65.1745 62.4C65.1745 61.088 65.8785 58.816 65.8785 58.592C65.8785 58.368 65.8145 58.176 65.5585 58.176C64.5345 58.176 61.9105 61.6 61.4305 62.848C61.1105 63.584 60.8545 64.064 60.5665 64.064C60.2465 64.064 59.7665 63.648 59.7665 63.296C59.7665 62.912 61.2065 59.264 61.2065 58.304C61.2065 58.048 61.0465 57.792 60.6945 57.792C60.3105 57.792 58.6465 59.04 57.5265 60.64C56.9505 61.44 56.4065 62.56 56.0545 63.296C55.7665 63.904 55.7345 64.448 55.2545 64.448C54.9665 64.448 54.5825 64.16 54.5825 63.744C54.5825 63.296 56.0225 59.488 57.0145 56.416C57.2385 55.712 57.5905 55.36 57.8465 55.36C58.2305 55.36 58.6145 55.488 58.6145 55.968C58.6145 56.512 57.6865 58.656 57.5585 59.104C58.5505 57.728 60.2465 56.448 61.1105 56.448C61.6865 56.448 62.6465 56.768 62.6465 57.6C62.6465 58.368 62.4225 59.232 62.3905 59.52C63.4465 58.048 65.1745 56.8 66.1985 56.8C66.7105 56.8 67.3505 57.248 67.3505 57.92C67.3505 58.592 66.4865 60.864 66.4865 62.112C66.4865 62.56 66.5825 62.816 66.9665 62.816ZM72.0168 63.072C72.9128 63.072 73.7448 62.432 74.3208 61.984C74.8328 61.6 75.0568 61.28 75.4088 61.28C75.6968 61.28 75.8568 61.472 75.8568 61.728C75.8568 62.016 75.6648 62.24 75.2168 62.592C74.2568 63.328 73.1688 64.192 71.6968 64.192C70.7048 64.192 69.5847 63.2 69.5847 62.176C69.5847 61.856 69.4887 61.76 69.4887 61.44C69.4887 61.152 69.7447 60.8 70.0328 60.672C71.3448 57.632 73.4888 56.416 75.1208 56.416C75.7288 56.416 76.4328 56.928 76.4328 57.536C76.4328 59.168 73.6488 61.024 71.6648 61.472C71.0888 61.6 71.0568 61.792 71.0568 62.112C71.0568 62.432 71.2488 63.072 72.0168 63.072ZM74.7368 57.664C73.7448 57.664 71.9528 59.712 71.4728 60.48C72.5928 60.448 75.1208 58.656 75.1208 57.984C75.1208 57.728 74.9928 57.664 74.7368 57.664ZM76.2538 63.584C76.2538 63.008 76.8618 62.048 77.6618 62.048C78.0138 62.048 78.1418 62.304 78.1418 62.656C78.1418 63.264 77.6298 64.16 76.7978 64.16C76.4138 64.16 76.2538 63.904 76.2538 63.584Z" fill="white" />
              </g>
              <defs>
                <filter id="filter0_d_73_22" x="0.832031" y="0.0480042" width="148.958" height="73.2" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                  <feOffset />
                  <feGaussianBlur stdDeviation="4" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0" />
                  <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_73_22" />
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_73_22" result="shape" />
                </filter>
              </defs>
            </svg>

            <hgroup class="p-fv__header-group">
              <p class="p-fv__header-ja">賢く手に入れる<br>理想の私。</p>
              <p class="p-fv__header-en" lang="en">IDEAL ME</p>
            </hgroup>
            <div class="p-fv__light-img-wrap">
              <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/fv-light.webp" alt="" class="p-fv__light-img" width="607" height="354" />
            </div>
          </div>
        </div>
      </section>

      <section class="p-cta">
        <div class="l-inner">
          <div class="p-cta__container">
            <div class="p-cta__top-treat-img-wrap">
              <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/cta-top-treat.webp" alt="" class="p-cta__top-treat-img" width="45" height="45">
            </div>
            <p class="p-cta__top">
              都内の美容クリニック対象
            </p>
            <div class="p-cta__center">
              <div class="p-cta__authority-img-wrap">
                <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/cta-authority.webp" alt="都内クリニック提携数 No.1" class="p-cta__top-treat-img" width="220" height="124">
              </div>
              <p class="p-cta__center-sentence">
                CHARMEから予約する<br>だけで大幅割引。
              </p>
              <div class="p-cta__center-img-wrap">
                <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/cta-center.webp" alt="" class="p-cta__top-treat-img" width="192" height="176">
              </div>
            </div>
            <div class="p-cta__btn-wrap">
              <a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=782sy1" target="_blank" rel="noopener noreferrer" class="p-cta__btn">
                <span class="p-cta__btn-lt"></span>
                <span class="p-cta__btn-rt"></span>
                <span class="p-cta__btn-lb"></span>
                <span class="p-cta__btn-rb"></span>
                <div class="p-cta__btn-left">
                  <p class="p-cta__btn-left-ja">公式ライン登録で</p>
                  <p class="p-cta__btn-left-en">COUPON GET</p>
                </div>
                <div class="p-cta__btn-icon">
                  <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/line-icon.svg" alt="LINEのアイコン" class="p-cta__btn-icon-img" width="38" height="38" loading='lazy' />
                </div>
                <div class="p-cta__btn-right">
                  <span class="p-cta__btn-right-ja">最大</span>
                  <span class="p-cta__btn-right-no">30</span>
                  <div class="p-cta__btn-right-box">
                    <span class="p-cta__btn-right-percent">%</span>
                    <span class="p-cta__btn-right-off">OFF</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="p-about" id="lp-about">
        <div class="l-inner">
          <div class="p-about__container">
            <span class="p-about__top-text --tl" lang="en">About</span>
            <span class="p-about__top-text --br" lang="en">Me</span>
            <div class="p-about__body">
              <p>都内クリニックを</p>
              <h2>最安値<span>で</span><br>一括比較</h2>
            </div>
          </div>
        </div>
      </section>
      <div class="p-bg--white">
        <div class="p-clinic">
          <div class="l-inner">
            <div class="p-clinic__container">
              <div class="p-clinic__top">
                <span class="p-clinic__text" lang="en">LIST OF CLINIC</span>
                <span class="p-clinic__arrow" lang="en">＜＜＜</span>
              </div>
              <div class="p-clinic__swiper-container">
                <div class="swiper p-clinic__swiper">
                  <div class="swiper-wrapper p-clinic__swiper-wrapper">
                    <div class="swiper-slide p-clinic__swiper-slide">
                      <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/clinic-logo1.webp" alt="" class="p-clinic__swiper-slide-img --1" width="197" height="197" loading='lazy' />
                    </div>
                    <div class="swiper-slide p-clinic__swiper-slide">
                      <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/clinic-logo2.webp" alt="" class="p-clinic__swiper-slide-img --2" width="197" height="197" loading='lazy' />
                    </div>
                    <div class="swiper-slide p-clinic__swiper-slide">
                      <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/clinic-logo3.webp" alt="" class="p-clinic__swiper-slide-img --3" width="197" height="197" loading='lazy' />
                    </div>
                    <div class="swiper-slide p-clinic__swiper-slide">
                      <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/clinic-logo4.webp" alt="" class="p-clinic__swiper-slide-img --4" width="197" height="197" loading='lazy' />
                    </div>
                    <div class="swiper-slide p-clinic__swiper-slide">
                      <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/clinic-logo5.webp" alt="" class="p-clinic__swiper-slide-img --5" width="197" height="197" loading='lazy' />
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <section class="p-use" id="use">
          <div class="l-inner">
            <div class="p-use__container">
              <div class="p-use__top">
                <p>CHARMEを利用すると、</p>
                <h2><span class="p-use__top-yellow">直接予約するより<br>お得に</span><span class="p-use__top--small">予約可能！</span></h2>
                <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/use-arrow.svg" alt="" class="p-use__arrow-img" width="37" height="20" loading='lazy' />
              </div>
              <p class="p-use__sentence">
                CHARMEは、<br>
                都内美容クリニックを<br>
                最安値でご紹介する<br>
                美容コンシェルジュです。
              </p>
              <div class="p-use__cta-btn-wrap">
                <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/use-cta.webp" alt="" class="p-use-cta__img" width="750" height="660" loading='lazy' />
                <a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=782sy1" target="_blank" rel="noopener noreferrer" class="c-cta-btn">
                  <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/line-icon.svg" alt="LINEのアイコン" class="c-cta-btn__icon" width="29" height="29" loading='lazy' />
                  <p class="c-cta-btn__text">早速美容コンシェルジュを試してみる。</p>
                </a>
              </div>
              <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/dot-line.svg" alt="" class="p-use__dot-img" width="" height="" loading='lazy' />
            </div>
          </div>
        </section>
      </div>

      <section class="p-request" id="request">
        <div class="l-inner">
          <div class="p-request__container">
            <div class="p-request__top">
              <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/request-left-line.svg" alt="" class="p-request__line --left" width="52" height="126" loading='lazy' />
              <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/request-right-line.svg" alt="" class="p-request__line --right" width="52" height="126" loading='lazy' />
              <h2 class="p-request__top-header">
                <span class="p-request__top-sentence">美容コンシェルジュに<br>お願いできる</span>
                <span class="p-request__top-sentence"> <span class="p-request__top-sentence --no">5</span> <span class="p-request__top-sentence --big">つ</span></span>
                <span class="p-request__top-sentence">のわがまま</span>
              </h2>
            </div>
            <ol class="p-request__list">
              <li class="p-request__list-item"><span class="p-request__list-item-no">01</span>
                <p class="p-request__list-item-sentence">あの有名なクリニックを最安値で予約しておいて！</p>
              </li>
              <li class="p-request__list-item"><span class="p-request__list-item-no">02</span>
                <p class="p-request__list-item-sentence">私のなりたいを叶えてくれるクリニックを探して提案して！</p>
              </li>
              <li class="p-request__list-item"><span class="p-request__list-item-no">03</span>
                <p class="p-request__list-item-sentence">私の理想を叶えるために必要な費用や時間はどれくらいか教えて！</p>
              </li>
              <li class="p-request__list-item"><span class="p-request__list-item-no">04</span>
                <p class="p-request__list-item-sentence">クリニックを変更したいから対応がいいクリニックを探してきて！</p>
              </li>
              <li class="p-request__list-item"><span class="p-request__list-item-no">05</span>
                <p class="p-request__list-item-sentence">1人でクリニックに行くのが不安だから一緒にきて！</p>
              </li>
            </ol>
            <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/dot-line.svg" alt="" class="p-request__dot-img" width="" height="" loading='lazy' />
            <div class="p-request__bottom">
              <p class="p-request__bottom-sentence">
                私たち美容コンシェルジュが<br>
                あなたの理想を叶えるまで<br>
                お供いたします。</p>
            </div>
            <div class="p-request__cta-btn-wrap">
              <a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=782sy1" target="_blank" rel="noopener noreferrer" class="c-cta-btn">
                <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/line-icon.svg" alt="LINEのアイコン" class="c-cta-btn__icon" width="29" height="29" loading='lazy' />
                <p class="c-cta-btn__text">早速美容コンシェルジュを試してみる。</p>
              </a>
            </div>
          </div>
        </div>
      </section>
      <div class="p-bg--yellow">
        <section class="p-warning" id="warning">
          <div class="l-inner">
            <div class="p-warning__top-container">
              <span class="p-warning__top-text" lang="en">Warning</span>
              <div class="p-warning__top">
                <h2 class="p-warning__top-sentence-box">
                  <span class="p-warning__top-sentence"><span class="p-warning__top-sentence --dot">安</span><span class="p-warning__top-sentence --dot">す</span><span class="p-warning__top-sentence --dot">ぎ</span><span class="p-warning__top-sentence --dot">る</span>施術費用の</span>
                  <span class="p-warning__top-sentence"><span class="p-warning__top-sentence --no">5</span><span class="p-warning__top-sentence --big">つの</span></span>
                  <span class="p-warning__top-sentence">落し穴</span>
                </h2>
              </div>
            </div>
            <div class="p-warning__center">
              <p class="p-warning__center-sentence">安すぎる施術費用には、<br>こんな落とし穴が、、</p>
              <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/use-arrow.svg" alt="" class="p-warning__center-img" width="36" height="19" loading='lazy' />
            </div>
            <div class="p-warning__list-wrap">
              <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/warning.webp" alt="" class="p-warning__list-img" width="173" height="269" loading='lazy' />
              <?php
              $warnings = [
                [
                  'title' => '医師やスタッフの経験不足',
                  'description' => '十分な経験や技術を持たない医師やスタッフが施術を行う可能性があります。'
                ],
                [
                  'title' => '安全対策の不備',
                  'description' => 'コストカットが優先されるため、適切な設備や器具のメンテナンスが不十分な可能性があります。また、感染症のリスクが高まります。'
                ],
                [
                  'title' => '使用する材料の品質問題',
                  'description' => '注射やインプラントに使用する材料が認可されていない低品質の製品である場合は、施術後に健康被害が生じるリスクがあります。'
                ],
                [
                  'title' => 'アフターケアの欠如',
                  'description' => '適切なフォローアップが行われず、トラブルが発生した際の対応が不十分であることが懸念されます。'
                ],
                [
                  'title' => '広告費用への偏り',
                  'description' => '実際の施術よりも広告に費用を割き、見かけだけで集客している場合があります。'
                ],
              ];

              ?>

              <dl class="p-warning__list">
                <?php foreach ($warnings as $index => $warning): ?>
                  <div class="p-warning__list-item">
                    <dt class="p-warning__list-header">
                      <p class="p-warning__list-item-top-ttl"><?php echo esc_html($warning['title']); ?></p>
                      <p class="p-warning__list-item-top-no"><?php echo sprintf('%02d', $index + 1); ?></p>
                    </dt>
                    <dd class="p-warning__list-item-body">
                      <?php echo esc_html($warning['description']); ?>
                    </dd>
                  </div>
                <?php endforeach; ?>
              </dl>

            </div>
          </div>
        </section>

        <section class="p-evaluation" id="evaluation">
          <div class="l-inner">
            <div class="p-evaluation__top">
              <h2 class="p-evaluation__header">
                <span class="p-evaluation__top-sentence">CHARMEは</span>
                <span class="p-evaluation__top-sentence"><span class="p-evaluation__top-sentence --no">5</span><span class="p-evaluation__top-sentence --big">つの</span><span class="p-evaluation__top-sentence --no">評価基準</span></span>
                <span class="p-evaluation__top-sentence">をクリアしたクリニックのみ<br>提携＆ご提案いたします</span>
              </h2>
            </div>
            <div class="p-evaluation__body">
              <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/evaluation-logo.svg" alt="CHARME" class="p-evaluation__logo-img" width="394" height="64" loading='lazy' />
              <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/evaluation-graph.webp" alt="「技術力」「信頼度」「保証内容」「コスパ」「再現性」の5つの評価基準" class="p-evaluation__graph-img" width="257" height="324" loading='lazy' />
            </div>
            <p class="p-evaluation__bottom-sentence">
              審査の結果、基準に達さないクリニックや過去トラブルがあるクリニックはご提案いたしませんので、安心・安全にご利用いただけます。
            </p>
          </div>
        </section>
      </div>
      <div class="p-bg--black">
        <div class="p-coupon">
          <div class="l-inner">
            <div class="p-coupon__container">
              <div class="p-coupon__text-box">
                <span class="p-coupon__text --ja1">整形</span>
                <span class="p-coupon__text --en">DEBUT<br>COUPON</span>
                <span class="p-coupon__text --ja2">脅威価格</span>
                <span class="p-coupon__text --ttb">今だけ配布</span>
              </div>
              <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/coupon-img.webp" alt="" class="p-coupon__img" width="255" height="340" loading='lazy' />
            </div>
          </div>
        </div>

        <section class="p-menu" id="menu">
          <div class="l-inner">
            <div class="p-menu__top-text-box">
              <span class="p-menu__top-text --en" lang="en">MENU</span>
              <h2 class="p-menu__top-text --ja">施術例</h2>
            </div>
            <?php
            // メニューアイテムのデータを配列にまとめる
            $menu_items = [
              [
                'title' => '二重整形',
                'subtitle' => '埋没/2点留め',
                'price' => '￥46,200',
                'compare_img' => get_template_directory_uri() . '/page-templates/assets/img/menu-item1.webp',
              ],
              [
                'title' => 'ヒアルロン酸注射',
                'subtitle' => '0.1ccあたり',
                'price' => '￥3,267〜',
                'compare_img' => get_template_directory_uri() . '/page-templates/assets/img/menu-item2.webp',
              ],
              [
                'title' => 'ボトックス注射',
                'subtitle' => '1単位',
                'price' => '￥320',
                'compare_img' => get_template_directory_uri() . '/page-templates/assets/img/menu-item3.webp',
              ],
              [
                'title' => 'ダーマペン',
                'subtitle' => '1回分',
                'price' => '￥8,800',
                'compare_img' => get_template_directory_uri() . '/page-templates/assets/img/menu-item4.webp',
              ],
            ];
            ?>

            <div class="p-menu__items">
              <?php foreach ($menu_items as $item): ?>
                <div class="p-menu__item">
                  <div class="p-menu__item-top">
                    <div class="p-menu__item-top-text-box">
                      <h3 class="p-menu__item-top-ttl"><?php echo esc_html($item['title']); ?></h3>
                      <p class="p-menu__item-sub"><?php echo esc_html($item['subtitle']); ?></p>
                    </div>
                    <span class="p-menu__item-price">
                      <?php echo esc_html($item['price']); ?>
                    </span>
                  </div>
                  <div class="p-menu__item-body">
                    <img src="<?php echo esc_url($item['compare_img']); ?>" alt="<?php echo esc_attr($item['title']); ?>の施術前の画像" class="p-menu__item-img --before" width="358" height="141" loading='lazy' />
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <div class="p-comparison" id="comparison">
          <div class="l-inner">
            <div class="p-comparison__table">
              <div class="p-comparison__table-header">
                <span class="p-comparison__table-header-text --name">相場比較表</span>
                <span class="p-comparison__table-header-text --other">相場</span>
                <span class="p-comparison__table-header-text --charme" lang="en">CHARME</span>
              </div>
              <?php
              // 比較表のデータを配列にまとめる
              $comparison_table_rows = [
                [
                  'name' => '二重整形',
                  'other_price' => '￥300,000',
                  'charme_price' => '￥46,200',
                ],
                [
                  'name' => 'ヒアルロン酸注射',
                  'other_price' => '￥13,000',
                  'charme_price' => '￥3,267',
                ],
                [
                  'name' => 'ボトックス注射',
                  'other_price' => '￥2,000',
                  'charme_price' => '￥320',
                ],
                [
                  'name' => 'ダーマペン',
                  'other_price' => '￥30,000',
                  'charme_price' => '￥8,800',
                ],
              ];

              ?>
              <div class="p-comparison__table-body">
                <?php foreach ($comparison_table_rows as $row): ?>
                  <div class="p-comparison__table-row">
                    <span class="p-comparison__table-row-text --name"><?php echo esc_html($row['name']); ?></span>
                    <span class="p-comparison__table-row-text --other"><?php echo esc_html($row['other_price']); ?></span>
                    <span class="p-comparison__table-row-text --charme"><span><?php echo esc_html($row['charme_price']); ?></span></span>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>

        <section class="p-cta --black">
          <div class="l-inner">
            <div class="p-cta__container">
              <div class="p-cta__top-treat-img-wrap">
                <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/cta-top-treat.webp" alt="" class="p-cta__top-treat-img" width="45" height="45">
              </div>
              <p class="p-cta__top">
                都内の美容クリニック対象
              </p>
              <div class="p-cta__border-container">
                <div class="p-cta__center">
                  <div class="p-cta__authority-img-wrap">
                    <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/cta-authority.webp" alt="都内クリニック提携数 No.1" class="p-cta__top-treat-img" width="220" height="124">
                  </div>
                  <p class="p-cta__center-sentence">
                    CHARMEから予約する<br>だけで大幅割引。
                  </p>
                  <div class="p-cta__center-img-wrap">
                    <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/cta-center.webp" alt="" class="p-cta__top-treat-img" width="192" height="176">
                  </div>
                </div>
                <div class="p-cta__btn-wrap">
                  <a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=782sy1" target="_blank" rel="noopener noreferrer" class="p-cta__btn">
                    <span class="p-cta__btn-lt"></span>
                    <span class="p-cta__btn-rt"></span>
                    <span class="p-cta__btn-lb"></span>
                    <span class="p-cta__btn-rb"></span>
                    <div class="p-cta__btn-left">
                      <p class="p-cta__btn-left-ja">公式ライン登録で</p>
                      <p class="p-cta__btn-left-en">COUPON GET</p>
                    </div>
                    <div class="p-cta__btn-icon">
                      <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/line-icon.svg" alt="LINEのアイコン" class="p-cta__btn-icon-img" width="38" height="38" loading='lazy' />
                    </div>
                    <div class="p-cta__btn-right">
                      <span class="p-cta__btn-right-ja">最大</span>
                      <span class="p-cta__btn-right-no">30</span>
                      <div class="p-cta__btn-right-box">
                        <span class="p-cta__btn-right-percent">%</span>
                        <span class="p-cta__btn-right-off">OFF</span>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <section class="p-flow" id="flow">
        <div class="p-flow__top-wrapper">
          <div class="l-inner">
            <div class="p-flow__top-container">
              <span class="p-flow__top-text --tl">FLOW</span>
              <h2 class="p-flow__top-text --br">コンシェルジュの使い方</h2>
              <div class="p-flow__body">
                <p class="p-flow__body-text --small">安心してください</p>
                <p class="p-flow__body-text --big">コンシェルジュ<br>費用完全無料</p>
              </div>
            </div>
          </div>
        </div>
        <div class="p-flow__list-wrapper">
          <div class="l-inner">
            <?php
            // フロー項目のデータを配列にまとめる
            $flow_items = [
              [
                'no' => '01',
                'icon' => '<svg class="p-flow__item-ttl-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.01401 0.0051455C3.47183 0.0471438 2.94969 0.187212 2.4566 0.422947C1.57173 0.845992 0.856677 1.55876 0.429349 2.44377C0.225465 2.86602 0.110871 3.23635 0.036016 3.71493C0.00192192 3.93279 0 4.26979 0 10.0007C0 15.7315 0.00192192 16.0685 0.036016 16.2864C0.111171 16.767 0.226547 17.1394 0.42975 17.5576C0.861862 18.4467 1.55317 19.138 2.44244 19.5701C2.86062 19.7733 3.23309 19.8886 3.71371 19.9638C3.93159 19.9979 4.26863 19.9998 10 19.9998C16.7704 19.9998 16.1955 20.0117 16.782 19.8588C17.9966 19.542 19.0139 18.7024 19.5702 17.5576C19.7735 17.1394 19.8888 16.767 19.964 16.2864C19.9981 16.0685 20 15.7315 20 10.0007C20 4.26979 19.9981 3.93279 19.964 3.71493C19.8891 3.23635 19.7745 2.86602 19.5707 2.44377C19.0116 1.28587 17.9648 0.434897 16.7167 0.123654C16.1921 -0.00718576 16.7223 0.00270327 10.1001 0.0003211C6.8023 -0.000859977 4.06356 0.00132201 4.01401 0.0051455ZM10.6016 3.21525C11.1152 3.25495 11.5818 3.32638 12.032 3.43427C14.6216 4.05484 16.6251 5.84343 17.1339 7.98883C17.2152 8.33178 17.2476 8.58001 17.2606 8.95971C17.3352 11.1393 16.0695 12.9167 12.7628 15.2756C11.8758 15.9083 10.6717 16.6633 10.1301 16.9264C9.85453 17.0603 9.73433 17.0971 9.57293 17.0971C9.44444 17.0971 9.43269 17.0933 9.37916 17.0333C9.28637 16.9295 9.28546 16.8476 9.37151 16.3431C9.46951 15.7687 9.47756 15.4718 9.3994 15.3155C9.31674 15.1502 9.10713 15.0364 8.77375 14.9757C8.68292 14.9592 8.48248 14.9225 8.32833 14.8941C6.1823 14.4991 4.38709 13.3432 3.40232 11.7222C3.14973 11.3065 2.92036 10.7512 2.80563 10.2777C2.70154 9.84822 2.68264 9.66794 2.6832 9.10985C2.68364 8.65664 2.68965 8.55619 2.72963 8.33248C2.88597 7.45796 3.2384 6.67995 3.81477 5.93696C4.00174 5.69594 4.48496 5.20171 4.74146 4.98913C5.47133 4.38426 6.28334 3.942 7.24725 3.62435C7.94695 3.39378 8.56635 3.27545 9.42943 3.20749C9.63057 3.19165 10.3585 3.19648 10.6016 3.21525ZM5.12394 7.58684C5.08611 7.61451 5.08495 7.65821 5.07974 9.25893L5.07439 10.9026L5.12386 10.9521L5.17335 11.0016H6.23087C7.15559 11.0016 7.29397 10.9977 7.33287 10.9704C7.37576 10.9404 7.37738 10.9274 7.37738 10.6132C7.37738 10.3227 7.37337 10.2835 7.34076 10.254C7.30813 10.2244 7.22574 10.2209 6.58 10.2209H5.85586V8.92968C5.85586 7.66519 5.85503 7.63769 5.81582 7.59847C5.77926 7.56192 5.74909 7.55843 5.46929 7.55843C5.23622 7.55843 5.15349 7.56524 5.12394 7.58684ZM7.90591 7.57375C7.83988 7.61785 7.83784 7.66912 7.83784 9.28961V10.9033L7.88699 10.9524C7.93461 11.0001 7.945 11.0016 8.22462 11.0016C8.48617 11.0016 8.51804 10.9977 8.56586 10.9601L8.61862 10.9186V9.27854C8.61862 7.66519 8.61796 7.63785 8.57858 7.59847C8.542 7.5619 8.51207 7.55845 8.23323 7.55873C8.06532 7.55891 7.91802 7.56566 7.90591 7.57375ZM9.18364 7.5896L9.13914 7.62075L9.13944 9.26613C9.13962 10.1711 9.14637 10.9214 9.15445 10.9335C9.19085 10.988 9.26689 11.0016 9.536 11.0016C9.78122 11.0016 9.82116 10.9969 9.86264 10.9633L9.90991 10.9251L9.91992 9.95144L9.92993 8.97783L10.657 9.95945C11.0568 10.4993 11.4034 10.9547 11.4272 10.9713C11.4608 10.9949 11.5337 11.0016 11.7571 11.0016C12.0349 11.0016 12.0454 11 12.093 10.9524L12.1421 10.9033V9.28961C12.1421 7.66912 12.1401 7.61785 12.0741 7.57375C12.062 7.56566 11.9147 7.55891 11.7467 7.55873C11.4679 7.55845 11.438 7.5619 11.4014 7.59847C11.3625 7.63739 11.3614 7.66519 11.3614 8.59938C11.3614 9.12787 11.3546 9.56002 11.3463 9.55972C11.3381 9.5594 11.0205 9.13848 10.6406 8.62431C10.2608 8.11014 9.92424 7.65999 9.89281 7.62395L9.8357 7.55843H9.53191C9.28937 7.55843 9.21916 7.56472 9.18364 7.5896ZM12.6958 7.59505C12.6655 7.62848 12.6627 7.77467 12.6627 9.28545V10.9393L12.7072 10.9704C12.7461 10.9977 12.8844 11.0016 13.8092 11.0016H14.8667L14.9158 10.9524C14.9634 10.9049 14.965 10.8941 14.965 10.6208C14.965 10.3695 14.9534 10.2888 14.9105 10.2409C14.9056 10.2354 14.5713 10.2264 14.1675 10.2209L13.4334 10.2109V9.94061V9.67036L14.1675 9.66035C14.5713 9.65485 14.9056 9.64584 14.9105 9.64033C14.9534 9.59237 14.965 9.51172 14.965 9.26039C14.965 8.98716 14.9634 8.97631 14.9158 8.92878L14.8667 8.87964H14.145H13.4234V8.61011V8.34057L14.1559 8.33486L14.8884 8.32914L14.9281 8.28021C14.9644 8.23533 14.9671 8.20572 14.9613 7.92323C14.9556 7.64557 14.9511 7.61238 14.9161 7.5868C14.8837 7.56316 14.6984 7.55843 13.8031 7.55843C12.7879 7.55843 12.7271 7.56044 12.6958 7.59505Z" fill="#FF4469"/>
                        </svg>',
                'title' => '公式ラインをお友だち登録',
                'description' => '相談料はもちろん無料です。気になるクリニックや気になる施術、その他何でも構いませんので、気軽にお問い合わせ下さい。',
              ],
              [
                'no' => '02',
                'title' => 'コンシェルジュからご返信',
                'description' => '順番にコンシェルジュからご返信させて頂きます。（基本的には当日のご返信です）<br>一人一人のご相談内容をしっかりと確認させて頂きます。その後、担当のコンシェルジュからご連絡が入りますので、納得行くまでご相談下さい。',
              ],
              [
                'no' => '03',
                'title' => 'ヒアリング&ご提案',
                'description' => 'コンシェルジュからご連絡が入りましたら何でも相談してみて下さい。施術の事、クリニックの事、お値段の事、お客様が気になる事は何でもお答えさせて頂きます。大事なお体の事ですので、細部にわたるまでしっかりとご相談に乗らせて頂きます。',
              ],
              [
                'no' => '04',
                'title' => 'カウンセリング',
                'description' => '実際にカウンセリングに行きます。<br>納得いくまで何店舗でもカウンセリングOK！カウンセリング後、聞きづらかった事、気になった事等は再度コンシェルジュにご相談して下さい。しっかりとご返答します。',
              ],
              [
                'no' => '05',
                'title' => 'クリニックで施術',
                'description' => 'カウンセリング後、納得出来るクリニックが有りましたら施術して頂きます。クリニックよってはシャルム特別割引等も用意してます。',
              ],
            ];
            ?>

            <ol class="p-flow__item-list">
              <?php foreach ($flow_items as $item): ?>
                <li class="p-flow__item">
                  <div class="p-flow__item-head">
                    <span class="p-flow__item-no"><?php echo esc_html($item['no']); ?></span>
                    <h3 class="p-flow__item-ttl">
                      <?php if (!empty($item['icon'])): ?>
                        <?php echo $item['icon']; ?>
                      <?php endif; ?>
                      <span class="p-flow__item-ttl-text"><?php echo esc_html($item['title']); ?></span>
                    </h3>
                  </div>
                  <div class="p-flow__item-body">
                    <p class="p-flow__item-body-sentence"><?php echo wp_kses_post($item['description']); ?></p>
                  </div>
                </li>
              <?php endforeach; ?>
            </ol>
          </div>
        </div>
      </section>

      <section class="p-voice" id="voice">
        <div class="l-inner">
          <div class="p-voice__top">
            <span class="p-voice__top-text --en" lang="en">VOICE</span>
            <h2 class="p-voice__top-text --ja">お客様の声</h2>
          </div>
          <p class="p-voice__top-header">利用者による<br>コンシェルジュの評価</p>
          <ul class="p-voice__list">
            <li class="p-voice__list-item">
              <div class="p-voice__item-top">
                <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/voice-icon1.webp" alt="" class="p-voice__item-icon" width="73" height="73" loading='lazy' />
                <div class="p-voice__item-top-content">
                  <p class="p-voice__item-top-name">20代女性</p>
                  <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/voice-star5.webp" alt="星5" class="p-voice__item-top-star" width="96" height="15" loading='lazy' />
                </div>
              </div>
              <div class="p-voice__list-item-body">
                <p class="p-voice__item-body-sentence">他社と比較してみたら、<span>かなりお得な価格</span>で予約できてびっくりしました。<span>大手クリニックも割引</span>が効いて、これなら無理なく美容整形を受けられると感じました！</p>
              </div>
            </li>
            <li class="p-voice__list-item">
              <div class="p-voice__item-top">
                <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/voice-icon2.webp" alt="" class="p-voice__item-icon" width="73" height="73" loading='lazy' />
                <div class="p-voice__item-top-content">
                  <p class="p-voice__item-top-name">30代女性</p>
                  <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/voice-star5.webp" alt="星5" class="p-voice__item-top-star" width="96" height="15" loading='lazy' />
                </div>
              </div>
              <div class="p-voice__list-item-body">
                <p class="p-voice__item-body-sentence">自分で探していた時は高くて諦めていたけど、コンシェルジュを使ったら<span>想像以上に安く</span>できました。お金の不安が軽減して気軽に踏み出せました。</p>
              </div>
            </li>
            <li class="p-voice__list-item">
              <div class="p-voice__item-top">
                <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/voice-icon3.webp" alt="" class="p-voice__item-icon" width="73" height="73" loading='lazy' />
                <div class="p-voice__item-top-content">
                  <p class="p-voice__item-top-name">20代女性</p>
                  <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/voice-star4-5.webp" alt="星4.5" class="p-voice__item-top-star" width="96" height="15" loading='lazy' />
                </div>
              </div>
              <div class="p-voice__list-item-body">
                <p class="p-voice__item-body-sentence">カウンセリングを重ねて、自分が理想とする顔をしっかり理解してくれました。おすすめされたクリニックは技術が高く、<span>まさにイメージ通りの結果</span>になりました！</p>
              </div>
            </li>
            <li class="p-voice__list-item">
              <div class="p-voice__item-top">
                <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/voice-icon4.webp" alt="" class="p-voice__item-icon" width="73" height="73" loading='lazy' />
                <div class="p-voice__item-top-content">
                  <p class="p-voice__item-top-name">30代女性</p>
                  <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/voice-star5.webp" alt="星5" class="p-voice__item-top-star" width="96" height="15" loading='lazy' />
                </div>
              </div>
              <div class="p-voice__list-item-body">
                <p class="p-voice__item-body-sentence">詳しく比較できる資料を用意してくれて、クリニック選びに時間をかけず効率よく決められました。結果、満足のいく施術を受けられてコンシェルジュの方に感謝です。</p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <div class="p-bg--white2">
        <section class="p-faq" id="faq">
          <div class="l-inner">
            <div class="p-faq__top">
              <span class="p-faq__top-text --en" lang="en">Q&A</span>
              <h2 class="p-faq__top-text --ja">よくある質問</h2>
            </div>
            <?php
            // FAQ項目のデータを配列にまとめる
            $faq_items = [
              [
                'question' => 'Q. 相談料は無料ですか？また、利用した場合は料金が発生しますか？',
                'answer' => 'A. CHARMEではご相談は全て無料にて行わせて頂いております。気になる些細なことでも是非ご相談くださいませ。また、ご利用に際しての料金も発生致しませんのでお客様のご負担は御座いません。安心してご相談ください。',
              ],
              [
                'question' => 'Q. 利用者特典などはありますか？',
                'answer' => 'A. はい。御座います。当社とクリニック様の特別な割引サービスも多数ご用意いたしております。また、無料クーポンやモニターのご案内などもさせて頂いております。（無料クーポンは常時では御座いません。）',
              ],
              [
                'question' => 'Q. 利用可能な年齢、性別はありますか？',
                'answer' => 'A. 20歳未満の方から高齢者、男女問わずご相談可能です。近年、男性のお客さまも多数お問い合わせをいただいております。',
              ],
              [
                'question' => 'Q. 施術料金はいくらですか？',
                'answer' => 'A. 提携先クリニックによって金額がそれぞれ異なります。詳細に関しましてはコンシェルジュまでお問合せ下さい。',
              ],
            ];
            ?>

            <div class="p-faq__content">
              <?php foreach ($faq_items as $item): ?>
                <div class="p-faq__item">
                  <div class="p-faq__question">
                    <p class="p-faq__question-sentence"><?php echo esc_html($item['question']); ?></p>
                    <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/faq-question-balloon.svg" alt="" class="p-faq__question-ballon" width="27" height="21" loading='lazy' />
                  </div>
                  <div class="p-faq__answer">
                    <p class="p-faq__answer-sentence"><?php echo wp_kses_post($item['answer']); ?></p>
                    <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/faq-answer-balloon.svg" alt="" class="p-faq__answer-ballon" width="27" height="21" loading='lazy' />
                  </div>
                </div>
              <?php endforeach; ?>
            </div>

          </div>
        </section>

        <section class="p-cta --footer">
          <div class="l-inner">
            <div class="p-cta__container">
              <div class="p-cta__top-treat-img-wrap">
                <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/cta-top-treat.webp" alt="" class="p-cta__top-treat-img" width="45" height="45">
              </div>
              <p class="p-cta__top">
                都内の美容クリニック対象
              </p>

              <div class="p-cta__center">
                <div class="p-cta__authority-img-wrap">
                  <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/cta-authority.webp" alt="都内クリニック提携数 No.1" class="p-cta__top-treat-img" width="220" height="124">
                </div>
                <p class="p-cta__center-sentence">
                  CHARMEから予約する<br>だけで大幅割引。
                </p>
                <div class="p-cta__center-img-wrap">
                  <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/cta-center.webp" alt="" class="p-cta__top-treat-img" width="192" height="176">
                </div>
              </div>
              <div class="p-cta__btn-wrap">
                <a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=782sy1" target="_blank" rel="noopener noreferrer" class="p-cta__btn">
                  <span class="p-cta__btn-lt"></span>
                  <span class="p-cta__btn-rt"></span>
                  <span class="p-cta__btn-lb"></span>
                  <span class="p-cta__btn-rb"></span>
                  <div class="p-cta__btn-left">
                    <p class="p-cta__btn-left-ja">公式ライン登録で</p>
                    <p class="p-cta__btn-left-en">COUPON GET</p>
                  </div>
                  <div class="p-cta__btn-icon">
                    <img src="<?php echo get_template_directory_uri() ?>/page-templates/assets/img/line-icon.svg" alt="LINEのアイコン" class="p-cta__btn-icon-img" width="38" height="38" loading='lazy' />
                  </div>
                  <div class="p-cta__btn-right">
                    <span class="p-cta__btn-right-ja">最大</span>
                    <span class="p-cta__btn-right-no">30</span>
                    <div class="p-cta__btn-right-box">
                      <span class="p-cta__btn-right-percent">%</span>
                      <span class="p-cta__btn-right-off">OFF</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="p-footer ">
        <div class="l-inner">
          <p class="p-footer__sentence">私たち美容コンシェルジュが<br>
            あなたの理想を叶えるまで<br>
            お供いたします。</p>
        </div>
      </div>
      <div class="p-footer__cta-wrap u-sp">
        <div class="l-inner">
          <a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=782sy1" target="_blank" rel="noopener noreferrer" class="p-footer__cta">
            <span class="p-footer__cta-lt"></span>
            <span class="p-footer__cta-rt"></span>
            <span class="p-footer__cta-lb"></span>
            <span class="p-footer__cta-rb"></span>
            <div class="p-footer__cta-left">
              <p class="p-footer__cta-left-ja">公式ライン登録で</p>
              <p class="p-footer__cta-left-en">COUPON GET</p>
            </div>
            <div class="p-footer__cta-icon">
              <svg class="p-footer__cta-icon-img" width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.74663 0.858262C7.62908 0.94483 6.55284 1.23354 5.53647 1.71944C3.71257 2.59143 2.23869 4.0606 1.35788 5.88478C0.937632 6.75512 0.701429 7.51847 0.547137 8.50491C0.476862 8.95397 0.4729 9.64861 0.4729 21.4611C0.4729 33.2737 0.476862 33.9683 0.547137 34.4174C0.702048 35.4079 0.939861 36.1756 1.35871 37.0375C2.24938 38.8703 3.67432 40.2951 5.50729 41.1857C6.36925 41.6045 7.13699 41.8423 8.12765 41.9972C8.57674 42.0675 9.27145 42.0714 21.085 42.0714C35.0401 42.0714 33.8552 42.0961 35.0641 41.7808C37.5677 41.1279 39.6646 39.3972 40.8113 37.0375C41.2302 36.1756 41.468 35.4079 41.6229 34.4174C41.6932 33.9683 41.6971 33.2737 41.6971 21.4611C41.6971 9.64861 41.6932 8.95397 41.6229 8.50491C41.4686 7.51847 41.2324 6.75512 40.8122 5.88478C39.6597 3.49811 37.5021 1.74407 34.9296 1.10253C33.8481 0.832845 34.9411 0.853228 21.2913 0.848318C14.4939 0.845884 8.84877 0.850381 8.74663 0.858262ZM22.325 7.47498C23.3837 7.5568 24.3454 7.70402 25.2735 7.92642C30.6112 9.20554 34.7408 12.8922 35.7894 17.3143C35.957 18.0212 36.0238 18.5329 36.0506 19.3155C36.2045 23.8082 33.5955 27.4718 26.7797 32.3338C24.9515 33.6379 22.4695 35.1943 21.3532 35.7366C20.7852 36.0126 20.5374 36.0885 20.2047 36.0885C19.9399 36.0885 19.9157 36.0805 19.8053 35.957C19.6141 35.7429 19.6122 35.5742 19.7896 34.5343C19.9916 33.3502 20.0082 32.7384 19.8471 32.4162C19.6767 32.0754 19.2446 31.8408 18.5575 31.7158C18.3702 31.6818 17.9571 31.6061 17.6393 31.5476C13.2159 30.7334 9.51562 28.3508 7.48581 25.0097C6.96516 24.1527 6.49238 23.0082 6.25589 22.0322C6.04135 21.1469 6.0024 20.7753 6.00355 19.625C6.00446 18.6908 6.01684 18.4838 6.09925 18.0227C6.42149 16.2201 7.14793 14.6165 8.33596 13.085C8.72134 12.5882 9.71736 11.5695 10.2461 11.1313C11.7505 9.88454 13.4242 8.97295 15.411 8.3182C16.8532 7.84295 18.13 7.59905 19.909 7.45897C20.3235 7.42633 21.824 7.43627 22.325 7.47498ZM11.0344 16.4857C10.9564 16.5428 10.954 16.6328 10.9433 19.9323L10.9323 23.3203L11.0343 23.4222L11.1363 23.5242H13.316C15.2221 23.5242 15.5073 23.5162 15.5875 23.46C15.6759 23.3981 15.6792 23.3714 15.6792 22.7237C15.6792 22.125 15.671 22.0441 15.6038 21.9833C15.5365 21.9224 15.3667 21.915 14.0357 21.915H12.5431V19.2536C12.5431 16.6472 12.5414 16.5905 12.4605 16.5097C12.3852 16.4344 12.323 16.4272 11.7463 16.4272C11.2659 16.4272 11.0953 16.4412 11.0344 16.4857ZM16.7686 16.4588C16.6326 16.5497 16.6283 16.6553 16.6283 19.9955V23.3217L16.7297 23.4229C16.8278 23.5211 16.8492 23.5242 17.4256 23.5242C17.9647 23.5242 18.0304 23.5162 18.129 23.4387L18.2377 23.3532V19.9727C18.2377 16.6472 18.2363 16.5909 18.1552 16.5097C18.0798 16.4343 18.0181 16.4272 17.4433 16.4278C17.0972 16.4282 16.7936 16.4421 16.7686 16.4588ZM19.4023 16.4914L19.3106 16.5556L19.3112 19.9471C19.3116 21.8124 19.3255 23.359 19.3422 23.3839C19.4172 23.4963 19.5739 23.5242 20.1286 23.5242C20.6341 23.5242 20.7164 23.5146 20.8019 23.4454L20.8993 23.3665L20.92 21.3597L20.9406 19.3529L22.4391 21.3762C23.2633 22.489 23.9777 23.4276 24.0267 23.4619C24.0961 23.5105 24.2462 23.5242 24.7068 23.5242C25.2793 23.5242 25.301 23.5211 25.3991 23.4229L25.5004 23.3217V19.9955C25.5004 16.6553 25.4962 16.5497 25.3601 16.4588C25.3352 16.4421 25.0316 16.4282 24.6854 16.4278C24.1107 16.4272 24.049 16.4343 23.9736 16.5097C23.8934 16.5899 23.8911 16.6472 23.8911 18.5728C23.8911 19.6621 23.8772 20.5529 23.8601 20.5523C23.8431 20.5516 23.1885 19.684 22.4055 18.6242C21.6225 17.5644 20.9289 16.6365 20.8641 16.5622L20.7464 16.4272H20.1202C19.6203 16.4272 19.4755 16.4401 19.4023 16.4914ZM26.6416 16.5027C26.5792 16.5716 26.5733 16.8729 26.5733 19.9869V23.3958L26.6651 23.46C26.7452 23.5162 27.0305 23.5242 28.9365 23.5242H31.1163L31.2176 23.4229C31.3156 23.325 31.3189 23.3026 31.3189 22.7394C31.3189 22.2214 31.295 22.0551 31.2067 21.9563C31.1966 21.9449 30.5074 21.9264 29.6752 21.915L28.1621 21.8944V21.3374V20.7803L29.6752 20.7597C30.5074 20.7483 31.1966 20.7298 31.2067 20.7184C31.295 20.6196 31.3189 20.4533 31.3189 19.9353C31.3189 19.3721 31.3156 19.3497 31.2176 19.2518L31.1163 19.1505H29.6288H28.1414V18.5949V18.0393L29.6513 18.0276L31.1611 18.0158L31.2428 17.9149C31.3177 17.8224 31.3234 17.7614 31.3114 17.1791C31.2995 16.6068 31.2903 16.5384 31.2181 16.4857C31.1514 16.4369 30.7694 16.4272 28.924 16.4272C26.8314 16.4272 26.7062 16.4313 26.6416 16.5027Z" fill="#1FA700" />
              </svg>
            </div>
            <div class="p-footer__cta-right">
              <span class="p-footer__cta-right-ja">最大</span>
              <span class="p-footer__cta-right-no">30</span>
              <div class="p-footer__cta-right-box">
                <span class="p-footer__cta-right-percent">%</span>
                <span class="p-footer__cta-right-off">OFF</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </main>
</body>
<?php get_footer(); ?>