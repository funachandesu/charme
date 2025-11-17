<!DOCTYPE html>
<html <?php language_attributes(); ?> id="a-top">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="icon" href="<?php echo esc_url(home_url()); ?>/favicon.svg" type="image/svg+xml">
    <?php /*
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    */ ?>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="https://use.typekit.net/pnf3fyy.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap">

    <?php if (is_mobile() && (is_home() || is_front_page())) : ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css?20240617">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ress.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css">
    <?php else : ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style_pc.css?20240617">
        <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>">
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style_input.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Abel|Libre+Baskerville&display=swap">
    <link rel="stylesheet" href="https://use.typekit.net/xcg6uqz.css">
    <!-- <script src="<?php echo get_template_directory_uri() ?>/function.js" type="text/javaScript" charset="utf-8"></script> -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NCJL6ZP');
    </script>
    <!-- End Google Tag Manager -->
    <link rel="stylesheet" href="https://use.typekit.net/xcg6uqz.css">
    <?php wp_head(); ?>
</head>
<?php if (is_user_logged_in()) : ?>
    <style type="text/css">
        .header {
            margin-top: 32px;
        }
    </style>
<?php endif; ?>

<?php $sns = charme_get_sns_links(); ?>

<body<?php set_body_pageid(); ?> <?php body_class('my-class'); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCJL6ZP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header <?php if (is_front_page()): ?> class="l-header" <?php endif; ?>>
        <?php $old_header = false; ?>
        <?php if (is_front_page()): ?>
            <div class="l-header__inner">
                <?php if (is_front_page()): ?>
                    <h1 class="l-header__logo-wrap">
                        <a href="#top" class="l-header__logo-link">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets_new/img/logo.webp'); ?>" alt="Charme Concierge" class="l-header__logo-img" width="160" height="43" />
                        </a>
                    </h1>
                <?php else: ?>
                    <div class="l-header__logo-wrap">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo-link">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets_new/img/logo.webp'); ?>" alt="Charme Concierge" class="l-header__logo-img" width="160" height="43" />
                        </a>
                    </div>
                <?php endif; ?>
                <button class="p-drawer__icon" type="button" aria-label="メニューを開く">
                    <div class="p-drawer__icon-wrap">
                        <span class="p-drawer__icon-bar"></span>
                        <span class="p-drawer__icon-bar"></span>
                        <span class="p-drawer__icon-bar"></span>
                    </div>
                </button>
            </div>

            <div class="p-drawer">
                <div class="p-drawer__inner">
                    <nav class="p-drawer__nav">
                        <ul class="p-drawer__list">
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">お知らせ</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(home_url('/about')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">美容コンシェルジュとは</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(home_url('/service')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">取り扱いサービス</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">キャンペーン</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(home_url('/reason')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">選ばれる理由</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(home_url('/reason')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">ご利用の流れ</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(home_url('/voice')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">ボイス</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(home_url('/clinic')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">提携クリニック一覧</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(home_url('/faq')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">よくあるご質問</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(home_url('/company')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">運営会社</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(home_url('/privacy')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">プライバシーポリシー</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="p-drawer__btn-wrap">
                        <div class="p-drawer__sns">
                            <div class="p-drawer__sns-items">
                                <a class="p-drawer__sns-item" href='<?php echo esc_url($sns['line']); ?>' target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/img_line.webp" alt="LINE" class="p-drawer__sns-icon" width="40" height="40" loading='lazy' />
                                </a>
                                <a class="p-drawer__sns-item" href='<?php echo esc_url($sns['inst']); ?>' target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/img_inst.webp" alt="Instagram" class="p-drawer__sns-icon" width="40" height="40" loading='lazy' />
                                </a>
                                <a class="p-drawer__sns-item" href='<?php echo esc_url($sns['tiktok']); ?>' target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/img_tiktok.webp" alt="TikTok" class="p-drawer__sns-icon" width="40" height="40" loading='lazy' />
                                </a>
                            </div>
                            <a class="p-drawer__sns-mail-btn u-pc">
                                <svg class="p-drawer__sns-mail-btn-icon" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.6155 14C1.15517 14 0.770833 13.8458 0.4625 13.5375C0.154167 13.2292 0 12.8448 0 12.3845V1.6155C0 1.15517 0.154167 0.770833 0.4625 0.4625C0.770833 0.154167 1.15517 0 1.6155 0H16.3845C16.8448 0 17.2292 0.154167 17.5375 0.4625C17.8458 0.770833 18 1.15517 18 1.6155V12.3845C18 12.8448 17.8458 13.2292 17.5375 13.5375C17.2292 13.8458 16.8448 14 16.3845 14H1.6155ZM9 7.1155L1 1.8845V12.3845C1 12.564 1.05767 12.7115 1.173 12.827C1.2885 12.9423 1.436 13 1.6155 13H16.3845C16.564 13 16.7115 12.9423 16.827 12.827C16.9423 12.7115 17 12.564 17 12.3845V1.8845L9 7.1155ZM9 6L16.6923 1H1.30775L9 6ZM1 1.8845V1V12.3845C1 12.564 1.05767 12.7115 1.173 12.827C1.2885 12.9423 1.436 13 1.6155 13H1V1.8845Z" fill="#FF4469" />
                                </svg>
                                <span class="p-drawer__sns-mail-btn-text">メールでのお問い合わせ</span>
                            </a>
                        </div>
                        <a href='<?php echo esc_url($sns['line']); ?>' class="c-cta-btn --grad u-pc --line p-drawer__cta-btn">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets_new/img/icon_line-cta.svg" alt="LINE" class="c-cta-btn__line-icon" width="40" height="40" loading='lazy' />
                            <span class="c-cta-btn__text">LINEで割引情報をGET！</span>
                            <svg class="c-cta-btn__arrow" width="12" height="24" viewBox="0 0 12 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.49964 3.00086L10.4996 12.0009L1.49964 21.0009L1.49964 3.00086Z" fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <?php if (!is_mobile()) : ?>
                <div id="topsection"></div>
                <div class="first-img">
                    <p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/first-banner.jpg" id="firstimgs" alt=""></p>
                    <span>
                        美容専門のコンシェルジュが、<br>
                        提供する「最高の美」
                    </span>
                </div>
                <div id="header">
                    <div class="header-in">
                        <h1 class="logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/logo.svg" alt="CHARME">
                            </a>
                        </h1>
                        <div id="js-btn-nav-global"><span class="menu"></span></div>
                        <nav class="nav-global">
                            <div class="nav-global-in">
                                <ul>
                                    <li></li>
                                    <li><a href="<?php echo esc_url(get_permalink(1912)); ?>">ABOUT<span class="nav-global-ins-detail">ーCHARMEとはー</span></a></li>
                                    <li><a href="<?php echo esc_url(get_post_type_archive_link('service')); ?>">SERVICE<span class="nav-global-ins-detail">ーサービスー</span></a></li>
                                    <li><a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>">CASE<span class="nav-global-ins-detail">ー症例ー</span></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/concierge')); ?>">CONCIERGE<span class="nav-global-ins-detail">ーコンシェルジュー</span></a></li>
                                    <!-- <li><a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">VOICE<span class="nav-global-ins-detail">ーお客様の声ー</span></a></li> -->
                                    <li><a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">CAMPAIGN<span class="nav-global-ins-detail">ーキャンペーンー</span></a></li>
                                    <li><a href="<?php echo esc_url(get_permalink(1503)); ?>">FLOW<span class="nav-global-ins-detail">ーご利用までの流れー</span></a></li>
                                    <li><a href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>">CLINIC<span class="nav-global-ins-detail">ークリニックー</span></a></li>
                                    <!-- <li><a href="<?php echo esc_url(get_permalink(1808)); ?>">INTERVIEW<span class="nav-global-ins-detail">ーインタビューー</span></a></li> -->
                                    <li><a href="<?php echo esc_url(get_permalink(17)); ?>">FAQ<span class="nav-global-ins-detail">ーよくあるご質問ー</span></a></li>
                                    <li><a href="<?php echo esc_url(get_permalink(2)); ?>">CONTACT<span class="nav-global-ins-detail">ーお問い合わせー</span></a></li>
                                </ul>

                            </div>
                    </div>
                </div>
            <?php else : ?>
                <?php if ((is_home() || is_front_page())) : ?>
                    <div class="first-img">
                        <p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/visual_bg.jpg" id="firstimgs" alt=""></p>
                        <span>
                            美容専門のコンシェルジュが、<br>
                            提供する「最高の美」
                        </span>
                    </div>
                    <div class="headers">
                        <div class="header-ins">
                            <h1 class="logo"><a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/logo.svg" alt="CHARME">
                                </a>
                            </h1>
                            <div id="js-btn-nav-globals">
                                <span></span>
                            </div>
                            <nav class="nav-globals">
                                <div class="nav-global-ins">
                                    <ul>
                                        <li></li>
                                        <li><a href="<?php echo esc_url(get_permalink(1912)); ?>">ABOUT<span class="nav-global-ins-detail">ーCHARMEとはー</span></a></li>
                                        <li><a href="<?php echo esc_url(get_post_type_archive_link('service')); ?>">SERVICE<span class="nav-global-ins-detail">ーサービスー</span></a></li>
                                        <li><a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>">CASE<span class="nav-global-ins-detail">ー症例ー</span></a></li>
                                        <li><a href="<?php echo esc_url(home_url('/concierge')); ?>">CONCIERGE<span class="nav-global-ins-detail">ーコンシェルジュー</span></a></li>
                                        <!-- <li><a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">VOICE<span class="nav-global-ins-detail">ーお客様の声ー</span></a></li> -->
                                        <li><a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">CAMPAIGN<span class="nav-global-ins-detail">ーキャンペーンー</span></a></li>
                                        <li><a href="<?php echo esc_url(get_permalink(1503)); ?>">FLOW<span class="nav-global-ins-detail">ーご利用までの流れー</span></a></li>
                                        <li><a href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>">CLINIC<span class="nav-global-ins-detail">ークリニックー</span></a></li>
                                        <!-- <li><a href="<?php echo esc_url(get_permalink(1808)); ?>">INTERVIEW<span class="nav-global-ins-detail">ーインタビューー</span></a></li> -->
                                        <li><a href="<?php echo esc_url(get_permalink(17)); ?>">FAQ<span class="nav-global-ins-detail">ーよくあるご質問ー</span></a></li>
                                        <li><a href="<?php echo esc_url(get_permalink(2)); ?>">CONTACT<span class="nav-global-ins-detail">ーお問い合わせー</span></a></li>
                                    </ul>

                                    <div class="list-sns">
                                        <a href="https://www.instagram.com/concierge_charme/" target="_blank"><i class="ico ico-instagram-white"></i></a>
                                        <a href="https://twitter.com/charme_bcs" target="_blank"><i class="ico ico-twitter-white"></i></a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                <?php else : ?>
                    <div id="header">
                        <div class="header-in">
                            <h1 class="logo"><a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/logo.svg" alt="CHARME">
                                </a>
                            </h1>
                            <div id="js-btn-nav-global"><span></span></div>
                            <nav class="nav-global">
                                <div class="nav-global-in">
                                    <ul>
                                        <li></li>
                                        <li><a href="<?php echo esc_url(get_permalink(1912)); ?>">ABOUT<span class="nav-global-ins-detail">ーCHARMEとはー</span></a></li>
                                        <li><a href="<?php echo esc_url(get_post_type_archive_link('service')); ?>">SERVICE<span class="nav-global-ins-detail">ーサービスー</span></a></li>
                                        <li><a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>">CASE<span class="nav-global-ins-detail">ー症例ー</span></a></li>
                                        <li><a href="<?php echo esc_url(home_url('/concierge')); ?>">CONCIERGE<span class="nav-global-ins-detail">ーコンシェルジュー</span></a></li>
                                        <!-- <li><a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">VOICE<span class="nav-global-ins-detail">ーお客様の声ー</span></a></li> -->
                                        <li><a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">CAMPAIGN<span class="nav-global-ins-detail">ーキャンペーンー</span></a></li>
                                        <li><a href="<?php echo esc_url(get_permalink(1503)); ?>">FLOW<span class="nav-global-ins-detail">ーご利用までの流れー</span></a></li>
                                        <li><a href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>">CLINIC<span class="nav-global-ins-detail">ークリニックー</span></a></li>
                                        <!-- <li><a href="<?php echo esc_url(get_permalink(1808)); ?>">INTERVIEW<span class="nav-global-ins-detail">ーインタビューー</span></a></li> -->
                                        <li><a href="<?php echo esc_url(get_permalink(17)); ?>">FAQ<span class="nav-global-ins-detail">ーよくあるご質問ー</span></a></li>
                                        <li><a href="<?php echo esc_url(get_permalink(2)); ?>">CONTACT<span class="nav-global-ins-detail">ーお問い合わせー</span></a></li>
                                    </ul>

                                </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif ?>
        <?php endif; ?>
    </header>

    <div id="<?php if (is_front_page()): ?><?php else: ?>main<?php endif; ?>">