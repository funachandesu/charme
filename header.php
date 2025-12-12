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

    <?php $newDesign = true; ?>
    <?php if ($newDesign || is_front_page()): ?>
        <!-- 新デザインヘッダー（トップページ用） -->
        <header class="l-header">
            <div class="l-header__inner">
                <h1 class="l-header__logo-wrap">
                    <a href="<?php echo is_front_page() ? '#top' : esc_url(home_url('/')); ?>" class="l-header__logo-link">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/charme_new_logo_black.png'); ?>" alt="Charme Concierge" class="l-header__logo-img" />
                    </a>
                </h1>
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
                                <a href="<?php echo esc_url(get_permalink(1912)); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">CHARMEとは</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(get_post_type_archive_link('service')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">サービス</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">症例</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(home_url('/concierge')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">コンシェルジュ</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">キャンペーン</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(get_permalink(1503)); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">ご利用までの流れ</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">クリニック</span>
                                    <svg class="p-drawer__link-icon" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.6 6L0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6Z" fill="#424242" />
                                    </svg>
                                </a>
                            </li>
                            <li class="p-drawer__list-item">
                                <a href="<?php echo esc_url(get_permalink(2)); ?>" class="p-drawer__link">
                                    <span class="p-drawer__link-text">お問い合わせ</span>
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
                            <a href="<?php echo esc_url(get_permalink(2)); ?>" class="p-drawer__sns-mail-btn u-pc">
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
        </header>
        <script>
            (function() {
                const header = document.querySelector(".l-header");
                if (!header) return;

                const handleScroll = () => {
                    if (window.scrollY > 0) {
                        header.classList.add("is-scrolled");
                    } else {
                        header.classList.remove("is-scrolled");
                    }
                };

                // 初期状態をチェック
                handleScroll();

                // スクロールイベント
                window.addEventListener("scroll", handleScroll, {
                    passive: true
                });
            })();
            document.addEventListener("DOMContentLoaded", () => {
                // 共通要素とステート管理
                const state = {
                    headerEl: document.querySelector(".l-header"),
                    drawerIcon: document.querySelector(".p-drawer__icon"),
                    drawer: document.querySelector(".p-drawer"),
                    headerHeight: 0,
                    isMenuOpen: false,
                    isMenuOpenAtBreakpoint: false,
                    breakpoint: 1100,
                };

                // ヘッダー高さを更新
                const updateHeaderHeight = () => {
                    state.headerHeight = state.headerEl?.offsetHeight || 0;
                    // console.log("Header height updated:", state.headerHeight); // デバッグ用
                };

                // スムーススクロール（統合版・修正版）
                const smoothScrollTo = (targetId, closeDrawer = false) => {
                    // console.log("Smooth scroll to:", targetId); // デバッグ用

                    // ドロワーを閉じる必要がある場合
                    if (closeDrawer && state.drawer?.classList.contains("js-show")) {
                        closeMenu();
                    }

                    // #topは常にページ先頭へ
                    if (targetId === "#top") {
                        window.scrollTo({
                            top: 0,
                            behavior: "smooth"
                        });
                        return;
                    }

                    const targetEl = document.querySelector(targetId);
                    if (!targetEl) {
                        console.warn("Target element not found:", targetId);
                        return;
                    }

                    // ヘッダー高さを最新の状態に更新
                    updateHeaderHeight();

                    // ターゲット要素の位置を計算
                    const targetPos = targetEl.getBoundingClientRect().top + window.pageYOffset;
                    let offsetPos = targetPos - state.headerHeight;

                    // console.log("Scroll calculation:", {
                    //   targetPos,
                    //   headerHeight: state.headerHeight,
                    //   offsetPos,
                    // }); // デバッグ用

                    window.scrollTo({
                        top: offsetPos,
                        behavior: "smooth",
                    });
                };

                // ドロワーメニュー操作
                const openMenu = () => {
                    if (!state.drawer?.classList.contains("js-show")) {
                        state.drawer.classList.add("js-show");
                        state.drawerIcon?.classList.add("js-show");
                        state.isMenuOpen = true;
                    }
                };

                const closeMenu = () => {
                    if (state.drawer?.classList.contains("js-show")) {
                        state.drawer.classList.remove("js-show");
                        state.drawerIcon?.classList.remove("js-show");
                        state.isMenuOpen = false;
                    }
                };

                const toggleMenu = () => {
                    if (!state.drawer?.classList.contains("js-show")) {
                        openMenu();
                    } else {
                        closeMenu();
                    }
                };

                // リサイズ処理
                const handleResize = () => {
                    updateHeaderHeight();

                    const windowWidth = window.innerWidth;
                    if (windowWidth > state.breakpoint && state.isMenuOpenAtBreakpoint) {
                        closeMenu();
                        state.isMenuOpenAtBreakpoint = false;
                    } else if (windowWidth <= state.breakpoint && state.drawer?.classList.contains("js-show")) {
                        state.isMenuOpenAtBreakpoint = true;
                    }
                };

                // メニュー外クリック処理
                const handleOutsideClick = (event) => {
                    if (state.drawer?.classList.contains("js-show") && !state.drawer.contains(event.target) && !state.drawerIcon?.contains(event.target)) {
                        closeMenu();
                    }
                };

                // ページ内リンクのクリック処理（修正版）
                const handleAnchorClick = (event, closeDrawer = false) => {
                    // console.log("Anchor click detected"); // デバッグ用
                    event.preventDefault();
                    event.stopPropagation(); // 追加：イベントの伝播を停止

                    const href = event.currentTarget.getAttribute("href");
                    // console.log("Link href:", href); // デバッグ用

                    if (href && href.startsWith("#")) {
                        // 少し遅延を入れてスムーススクロールを実行
                        setTimeout(() => {
                            smoothScrollTo(href, closeDrawer);
                        }, 10);
                    }
                };

                // WordPressの絶対URLを含むページ内リンクの処理
                const handleWordPressAnchorClick = (event, hashPart, closeDrawer = false) => {
                    // console.log("WordPress anchor click detected:", hashPart); // デバッグ用
                    event.preventDefault();
                    event.stopPropagation();

                    // 少し遅延を入れてスムーススクロールを実行
                    setTimeout(() => {
                        smoothScrollTo(hashPart, closeDrawer);
                    }, 10);
                };

                // 初期化
                updateHeaderHeight();

                // イベントリスナー設定
                window.addEventListener("resize", handleResize);
                document.addEventListener("click", handleOutsideClick);

                // ドロワーアイコンのクリック
                state.drawerIcon?.addEventListener("click", (event) => {
                    event.stopPropagation();
                    toggleMenu();
                });

                // 全てのページ内リンクにイベントを設定（修正版）
                const setupAnchorLinks = () => {
                    // 1. 通常のページ内リンク（#で始まる）
                    document.querySelectorAll('a[href^="#"]').forEach((link) => {
                        const isDrawerLink = link.closest(".p-drawer__body");

                        // 既存のイベントリスナーを削除（重複防止）
                        link.removeEventListener("click", handleAnchorClick);

                        link.addEventListener("click", (event) => {
                            handleAnchorClick(event, isDrawerLink);
                        });
                    });

                    // 2. WordPressの絶対URLを含むページ内リンク
                    document.querySelectorAll('a[href*="#"]').forEach((link) => {
                        const href = link.getAttribute("href");
                        const currentUrl = window.location.href.split("#")[0]; // 現在のURLからハッシュを除去

                        // 同じページ内のハッシュリンクかチェック
                        if (href && href.includes("#")) {
                            const linkUrl = href.split("#")[0]; // リンクのURLからハッシュを除去
                            const hashPart = "#" + href.split("#")[1]; // ハッシュ部分を取得

                            // 同じページ内のリンクの場合（URLが同じ、または空の場合）
                            if (linkUrl === currentUrl || linkUrl === "" || linkUrl === window.location.origin + window.location.pathname) {
                                const isDrawerLink = link.closest(".p-drawer__body");

                                // 既存のイベントリスナーを削除（重複防止）
                                link.removeEventListener("click", handleWordPressAnchorClick);

                                link.addEventListener("click", (event) => {
                                    handleWordPressAnchorClick(event, hashPart, isDrawerLink);
                                });
                            }
                        }
                    });
                };

                // 初期設定
                setupAnchorLinks();

                // ドロワー内のリンククリック時にイベント伝播を停止
                state.drawer?.addEventListener("click", (event) => {
                    if (event.target.tagName === "A") {
                        event.stopPropagation();
                    }
                });

                // 追加：p-drawer内のaタグをクリックした際にメニューを閉じる
                const setupDrawerCloseLinks = () => {
                    // p-drawer内の全てのaタグに対してイベントを設定
                    document.querySelectorAll(".p-drawer a").forEach((link) => {
                        link.addEventListener("click", (event) => {
                            event.stopPropagation();
                            closeMenu();
                        });
                    });
                };

                // ドロワー内のリンクのイベント設定
                setupDrawerCloseLinks();
            });
        </script>
    <?php else: ?>
        <!-- 旧デザインヘッダー（その他ページ用） -->
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
                                <li><a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">CAMPAIGN<span class="nav-global-ins-detail">ーキャンペーンー</span></a></li>
                                <li><a href="<?php echo esc_url(get_permalink(1503)); ?>">FLOW<span class="nav-global-ins-detail">ーご利用までの流れー</span></a></li>
                                <li><a href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>">CLINIC<span class="nav-global-ins-detail">ークリニックー</span></a></li>
                                <li><a href="<?php echo esc_url(get_permalink(2)); ?>">CONTACT<span class="nav-global-ins-detail">ーお問い合わせー</span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        <?php else : ?>
            <div id="header" class="sp-header">
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
                                <li><a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">CAMPAIGN<span class="nav-global-ins-detail">ーキャンペーンー</span></a></li>
                                <li><a href="<?php echo esc_url(get_permalink(1503)); ?>">FLOW<span class="nav-global-ins-detail">ーご利用までの流れー</span></a></li>
                                <li><a href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>">CLINIC<span class="nav-global-ins-detail">ークリニックー</span></a></li>
                                <li><a href="<?php echo esc_url(get_permalink(2)); ?>">CONTACT<span class="nav-global-ins-detail">ーお問い合わせー</span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <div id="<?php if (is_front_page()): ?><?php else: ?>main<?php endif; ?>">