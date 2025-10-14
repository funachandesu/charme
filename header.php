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

<body<?php set_body_pageid(); ?> <?php body_class('my-class'); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCJL6ZP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>

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
    </header>

    <div id="main">
