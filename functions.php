<?php

/**
 * THEME SUPPOT
 * */
//add_theme_support('automatic-feed-links');
add_theme_support('menus');
add_theme_support('post-thumbnails');

/**
 * REVISION CONTROLL
 * */
function disable_autosave()
{
    wp_deregister_script('autosave');
}

add_action('wp_print_scripts', 'disable_autosave');

/**
 * THUMNAILS SIZE
 * */
//add_image_size('post-full', 960, 9999);
//add_image_size('post-full', 480, 9999);
//add_image_size('post-news-mobile-eyecatch', 208, 166);
//add_image_size('post-news-pc-eyecatch', 118, 94);
add_image_size('case_image_s', 226, 224, false);
add_image_size('case_image_l', 512, 507, false);
add_image_size('campaign_image_s', 800, 300, true);
add_image_size('campaign_image_l', 800, 300, true);
add_image_size('campaign_detail_image', 800, 300, true);
add_image_size('case_clinic', 200, 200, true);
/**
 * REMOVE ACTION
 * */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles', 10);

/**
 * REMOVE Filter
 * */
remove_filter('term_description', 'wpautop');
remove_filter('wp_head', 'feed_links', 2);
remove_filter('wp_head', 'feed_links_extra', 3);

// RSS
/*
  function custom_post_rss_set($query) {
  if (is_feed()) {
  $query->set('post_type', array('news'));
  return $query;
  }
  }
  add_filter('pre_get_posts', 'custom_post_rss_set');
 */

/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
define('WP_SCSS_ALWAYS_RECOMPILE', true);
/* ================================================================================ */

/**
 * CUSTOM POSTTYPE
 * */
/* ADD */
function add_custom_posttype()
{
    $arr_category = array(
        'label' => 'カテゴリ',
        'labels' => array(
            'name' => 'カテゴリ',
            'singular_name' => 'カテゴリ',
            'search_items' => 'カテゴリを検索',
            'popular_items' => 'よく使われているカテゴリ',
            'all_items' => 'すべてのカテゴリ',
            'parent_item' => '親のカテゴリ',
            'edit_item' => 'カテゴリの編集',
            'add_new_item' => '新規カテゴリを追加',
            'new_item_name' => '新しいカテゴリ',
        ),
        'rewrite' => array(
            'slug' => 'category'
        ),
        'public' => true,
        'show_ui' => true,
        'hierarchical' => true,
    );

    $label = 'お知らせ';
    $arr_news = array(
        'label' => $label,
        'labels' => array(
            'singular_name' => $label,
            'add_new_item' => '新規追加',
            'add_new' => '新規追加',
            'new_item' => '新規追加',
            'edit_item' => '投稿の編集',
            'view_item' => '投稿を表示',
            'not_found' => '投稿が見つかりませんでした。',
            'not_found_in_trash' => 'ゴミ箱内に投稿が見つかりませんでした。',
            'search_items' => '投稿を検索',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'menu_position' => null,
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );

    $label = 'お客さまの声';
    $arr_voice = array(
        'label' => $label,
        'labels' => array(
            'singular_name' => $label,
            'add_new_item' => '新規追加',
            'add_new' => '新規追加',
            'new_item' => '新規追加',
            'edit_item' => '投稿の編集',
            'view_item' => '投稿を表示',
            'not_found' => '投稿が見つかりませんでした。',
            'not_found_in_trash' => 'ゴミ箱内に投稿が見つかりませんでした。',
            'search_items' => '投稿を検索',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'menu_position' => null,
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );

    $label = 'クリニックのご紹介';
    $arr_clinic = array(
        'label' => $label,
        'labels' => array(
            'singular_name' => $label,
            'add_new_item' => '新規追加',
            'add_new' => '新規追加',
            'new_item' => '新規追加',
            'edit_item' => '投稿の編集',
            'view_item' => '投稿を表示',
            'not_found' => '投稿が見つかりませんでした。',
            'not_found_in_trash' => 'ゴミ箱内に投稿が見つかりませんでした。',
            'search_items' => '投稿を検索',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'menu_position' => null,
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );

    $label = '症例';
    $arr_case = array(
        'label' => $label,
        'labels' => array(
            'singular_name' => $label,
            'add_new_item' => '新規追加',
            'add_new' => '新規追加',
            'new_item' => '新規追加',
            'edit_item' => '投稿の編集',
            'view_item' => '投稿を表示',
            'not_found' => '投稿が見つかりませんでした。',
            'not_found_in_trash' => 'ゴミ箱内に投稿が見つかりませんでした。',
            'search_items' => '投稿を検索',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'menu_position' => null,
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );

    $label = 'キャンペーン';
    $arr_campaign = array(
        'label' => $label,
        'labels' => array(
            'singular_name' => $label,
            'add_new_item' => '新規追加',
            'add_new' => '新規追加',
            'new_item' => '新規追加',
            'edit_item' => '投稿の編集',
            'view_item' => '投稿を表示',
            'not_found' => '投稿が見つかりませんでした。',
            'not_found_in_trash' => 'ゴミ箱内に投稿が見つかりませんでした。',
            'search_items' => '投稿を検索',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'menu_position' => null,
        'has_archive' => true,
        'supports' => array(
            'title',
            'thumbnail'
        )
    );

    $label = 'サービス';
    $arr_service = array(
        'label' => $label,
        'labels' => array(
            'singular_name' => $label,
            'add_new_item' => '新規追加',
            'add_new' => '新規追加',
            'new_item' => '新規追加',
            'edit_item' => '投稿の編集',
            'view_item' => '投稿を表示',
            'not_found' => '投稿が見つかりませんでした。',
            'not_found_in_trash' => 'ゴミ箱内に投稿が見つかりませんでした。',
            'search_items' => '投稿を検索',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'menu_position' => null,
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );

    register_post_type('service', $arr_service);
    register_post_type('news', $arr_news);
    register_post_type('voice', $arr_voice);
    register_post_type('clinic', $arr_clinic);
    register_post_type('case', $arr_case);
    register_post_type('case', $arr_case);
    register_post_type('campaign', $arr_campaign);
    //	register_taxonomy('news_category', 'news', $arr_category);
    /*
      register_taxonomy('campaign_category', 'campaign', $arr_category);
     */

    register_taxonomy(
        'clinic_caategory',
        'clinic',
        array(
            'hierarchical' => true, /* trueならカテゴリ、falseならタグとして扱われる */
            'update_count_callback' => '_update_post_term_count',
            'label' => 'クリニックカテゴリ',
            'singular_label' => 'クリニックカテゴリ',
            'public' => true,
            'show_ui' => true,
            'show_in_rest' => true, //ブロックエディタに表示させるかどうか
            'show_admin_column' => true,
        )
    );
    register_taxonomy(
        'clinic_area',
        'clinic',
        array(
            'hierarchical' => true, /* trueならカテゴリ、falseならタグとして扱われる */
            'update_count_callback' => '_update_post_term_count',
            'label' => 'クリニックエリア',
            'singular_label' => 'クリニックエリア',
            'public' => true,
            'show_ui' => true,
            'show_in_rest' => true, //ブロックエディタに表示させるかどうか
            'show_admin_column' => true,
        )
    );
    register_taxonomy(
        'case_category',
        'case',
        array(
            'hierarchical' => true, /* trueならカテゴリ、falseならタグとして扱われる */
            'update_count_callback' => '_update_post_term_count',
            'label' => '症例カテゴリー',
            'singular_label' => '症例カテゴリー',
            'public' => true,
            'show_ui' => true
        )
    );



    register_taxonomy(
        'case_clinic',
        'case',
        array(
            'hierarchical' => true, /* trueならカテゴリ、falseならタグとして扱われる */
            'update_count_callback' => '_update_post_term_count',
            'label' => 'クリニック',
            'singular_label' => 'クリニック',
            'public' => true,
            'show_ui' => true
        )
    );
}

add_action('init', 'add_custom_posttype');

//カスタム投稿タイプごとの絞り込み検索機能
add_filter('template_include', 'custom_search_template');

function custom_search_template($template)
{
    if (is_search()) {
        $post_types = get_query_var('post_type');
        foreach ((array) $post_types as $post_type)
            $templates[] = "search-{$post_type}.php";
        $templates[] = 'search.php';
        $template = get_query_template('search', $templates);
    }
    return $template;
}

/**
 * タクソノミーURL　Rewrite
 * */
add_rewrite_rule('case/([^/]+)/?$', 'index.php?case_category=$matches[1]', 'top');

/**
 * タクソノミーURL　ページ送りも設定
 * */
add_rewrite_rule('case/([^/]+)/page/([0-9]+)/?$', 'index.php?case_category=$matches[1]&paged=$matches[2]', 'top');

/**
 * 管理画面で特定ユーザーに対してメニュー非表示
 * */
function remove_menu()
{
    global $current_user;
    if ($current_user->data->user_login === 'charme-beauty-support') {
        remove_menu_page('index.php');                  //ダッシュボードを隠します
        remove_menu_page('edit.php');                   //投稿メニュを隠します
        remove_menu_page('edit.php?post_type=page');    //固定ページ
        remove_menu_page('edit-comments.php');          //コメント
        remove_menu_page('edit.php?post_type=voice');     // カスタム投稿「voice」の非表示
        remove_menu_page('edit.php?post_type=clinic');    // カスタム投稿「clinic」の非表示
        remove_menu_page('wpseo_dashboard');              // wpseoの非表示
        remove_menu_page('themes.php');                 //外観
        remove_menu_page('plugins.php');                //プラグイン
        remove_menu_page('users.php');                    // ユーザー
        remove_menu_page('tools.php');                  //ツール
        remove_menu_page('options-general.php');        //設定
    }
}

add_action('admin_menu', 'remove_menu');

/**
 * FUNCTION
 * */
function no_self_ping(&$links)
{
    $home = get_option('home');
    foreach ($links as $l => $link)
        if (0 === strpos($link, $home))
            unset($links[$l]);
}

add_action('pre_ping', 'no_self_ping');

function set_body_pageid()
{
    $page_id = ' id="page-normal"';
    $page_name = '';
    if (is_page() || is_home() || is_404() || is_post_type_archive() || is_single() || is_tax()) :
        if (is_single()) :
            $page_name = get_post_type();
        endif;
        if (is_page()) :
            $page_data = get_page(get_the_ID());
            $page_name = $page_data->post_name;
            if ($page_data->post_parent === 9) :
                $page_name = 'campaign-detail';
            endif;
            if ($page_data->post_parent === 27) :
                $page_name = 'service-detail';
            endif;
        endif;
        if (is_tax())
            $page_name = get_post_type();
        if (is_post_type_archive())
            $page_name = get_post_type();
        if (is_home())
            $page_name = 'home';
        if (is_404())
            $page_name = 'error';
        $page_id = ' id="page-' . $page_name . '"';
    endif;

    echo $page_id;
}

function is_mobile()
{
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser
    );
    $pattern = '/' . implode('|', $useragents) . '/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

add_filter('body_class', 'my_body_classes');

function my_body_classes($classes)
{
    if (is_mobile()) {
        $classes[] = 'mobile';
    } else {
        $classes[] = 'desktop';
    }
    return $classes;
}

if (function_exists('wp_nav_menu')) {

    function wp_my_menus()
    {
        register_nav_menus(
            array(
                'primary' => __('Main menu'),
            )
        );
    }

    add_action('init', 'wp_my_menus');
}

add_action('wp_ajax_get_case', 'dk_get_case');
add_action('wp_ajax_nopriv_get_case', 'dk_get_case');

function dk_get_case()
{
    $headers['Access-Control-Allow-Origin'] = '*';
    $return = ['status' => false, 'data' => [], 'message' => ''];

    $case_clinics = [19, 20, 24, 32, 22, 12, 29, 44, 14, 47, 243, 21, 46];

    foreach ($case_clinics as $key => $case_clinic) {
        $dk_posts = get_posts(
            array(
                'showposts' => -1,
                'post_type' => 'case',
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'case_clinic',
                        'field' => 'term_id',
                        'terms' => $case_clinic
                    ),
                    array(
                        'taxonomy' => 'case_category',
                        'field' => 'id',
                        'terms' => $_GET['case_category'],
                    )
                )
            )
        );
        if (count($dk_posts) > 0) {
            foreach ($dk_posts as $dk_post) {
                $attachment_id = CFS()->get('case_image', $dk_post->ID);
                $case_name1 = CFS()->get('case_name1', $dk_post->ID);
                $case_clinic = CFS()->get('case_clinic', $dk_post->ID);
                $case_name = CFS()->get('case_name', $dk_post->ID);
                $case_price = CFS()->get('case_price', $dk_post->ID);
                $case_risk = CFS()->get('case_risk', $dk_post->ID);
                $return['data'][$key][] = [
                    'id' => $dk_post->ID,
                    'case_clinic' => $case_clinic,
                    'thumb' => wp_get_attachment_image($attachment_id, 'case_clinic'),
                    'popup' => wp_get_attachment_image($attachment_id, 'full'),
                    'case_name1' => $case_name1,
                    'case_clinic' => $case_clinic,
                    'case_name' => $case_name,
                    'case_price' => $case_price,
                    'case_risk' => $case_risk,
                ];
            }
        } else {
            $return['data'][$key][] = [];
        }
    }
    $return['status'] = true;

    echo json_encode($return);
    die;
}
function not_create_image($sizes)
{
    $sizes = array();  # 空にする
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'not_create_image');



//カテゴリページを検索結果へリダイレクト

function redirect_case_category_to_search()
{
    if (is_tax('case_category') && !is_search()) {
        $category = get_queried_object();
        $category_slug = $category->slug;

        $redirect_url = home_url("/?case_category={$category_slug}&case_clinic=0&s=&post_type=case");

        wp_redirect($redirect_url, 301);
        exit;
    }
}
add_action('template_redirect', 'redirect_case_category_to_search');

//アコーディオン要スクリプト読み込み
function my_theme_enqueue_scripts()
{
    // jQueryの登録
    wp_enqueue_script('jquery');

    // accordion.jsの読み込み
    wp_enqueue_script('accordion-script', get_template_directory_uri() . '/js/accordion.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


function my_custom_column($columns)
{
    $columns['case_category'] = '症例カテゴリー';
    return $columns;
}
add_filter('manage_case_posts_columns', 'my_custom_column');

function my_custom_column_id($column_name, $id)
{
    $terms = get_the_terms($id, $column_name);
    if ($terms && !is_wp_error($terms)) {
        $menu_terms = array(); //変数名は任意
        foreach ($terms as $term) {
            $menu_terms[] = $term->name;
        }
        echo join(", ", $menu_terms);
    }
}
add_action('manage_case_posts_custom_column', 'my_custom_column_id', 10, 2);

function my_custom_column2($columns)
{
    $columns['case_clinic'] = 'クリニック';
    return $columns;
}
add_filter('manage_case_posts_columns', 'my_custom_column2');

function my_custom_column_id2($column_name, $id)
{
    $terms = get_the_terms($id, $column_name);
    if ($terms && !is_wp_error($terms)) {
        $menu_terms = $term->name;
    }
}
add_action('manage_case_posts_custom_column', 'my_custom_column_id2', 10, 3);

function my_add_filter()
{
    global $post_type;
    if ('case' == $post_type) {
?>
        <select name="case_category">
            <option value="">すべてのカテゴリー</option>
            <?php
            $terms = get_terms('case_category');
            foreach ($terms as $term) {
            ?>
                <option value="<?php echo $term->slug; ?>" <?php if (isset($_GET['case_category']) && $_GET['case_category'] == $term->slug) {
                                                                print 'selected';
                                                            } ?>><?php echo $term->name; ?>
                    　　　　　</option>
            <?php
            }
            ?>
        </select>
    <?php
    }
}
add_action('restrict_manage_posts', 'my_add_filter');

function my_add_filter2()
{
    global $post_type;
    if ('case' == $post_type) {
    ?>
        <select name="case_clinic">
            <option value="">すべてのクリニック</option>
            <?php
            $terms = get_terms('case_clinic');
            foreach ($terms as $term) {
            ?>
                <option value="<?php echo $term->slug; ?>" <?php if (isset($_GET['case_clinic']) && $_GET['case_clinic'] == $term->slug) {
                                                                print 'selected';
                                                            } ?>><?php echo $term->name; ?>
                    　　　　　</option>
            <?php
            }
            ?>
        </select>
<?php
    }
}
add_action('restrict_manage_posts', 'my_add_filter2');

add_filter('acf/rest_api/enabled', '__return_true'); // ACF REST APIを有効化
add_action('rest_api_init', function () {
    do_action('acf/rest_api/init'); // REST API初期化を強制実行
});

/**
 * Campaign Functions - 全面刷新版
 * キャンペーン機能のインクルードとエンキュー
 */

// Campaign helper functions
require_once get_template_directory() . '/inc/campaign/helpers.php';

// Campaign REST API
require_once get_template_directory() . '/inc/campaign/rest.php';

/**
 * Campaign Assets Enqueue
 * キャンペーン用CSS/JSの読み込み
 */
function charme_enqueue_campaign_assets()
{
    // キャンペーンページでのみ読み込み
    if (is_post_type_archive('campaign') || is_singular('campaign')) {
        // CSS
        wp_enqueue_style(
            'charme-campaign-style',
            get_template_directory_uri() . '/assets/css/campaign.css',
            array(),
            '1.0.0'
        );

        // JavaScript
        wp_enqueue_script(
            'charme-campaign-script',
            get_template_directory_uri() . '/assets/js/campaign.js',
            array(),
            '1.0.0',
            true
        );

        // JavaScript変数をローカライズ
        wp_localize_script('charme-campaign-script', 'charme_campaign', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'rest_url' => rest_url('charme/v1/campaigns'),
            'nonce' => wp_create_nonce('charme_campaign_nonce'),
            'strings' => array(
                'loading' => '読み込み中...',
                'error' => 'エラーが発生しました',
                'no_results' => '条件に合うキャンペーンが見つかりませんでした'
            )
        ));
    }
}
add_action('wp_enqueue_scripts', 'charme_enqueue_campaign_assets');

/**
 * Archive Case Assets Enqueue
 * 症例アーカイブ用CSSの読み込み
 */
function charme_enqueue_archive_case_assets()
{
    if (is_post_type_archive('case')) {
        wp_enqueue_style(
            'charme-archive-case-style',
            get_template_directory_uri() . '/assets/css/archive_case.css',
            array(),
            filemtime(get_theme_file_path('/assets/css/archive_case.css'))
        );
    }
}
add_action('wp_enqueue_scripts', 'charme_enqueue_archive_case_assets');

/**
 * Search Case Assets Enqueue
 * 症例検索ページ用CSS/JSの読み込み
 */
function charme_enqueue_search_case_assets()
{
    if (is_search() && isset($_GET['post_type']) && $_GET['post_type'] === 'case') {
        // CSS
        wp_enqueue_style(
            'charme-search-case-style',
            get_template_directory_uri() . '/assets/css/search_case.css',
            array(),
            filemtime(get_theme_file_path('/assets/css/search_case.css'))
        );

        // FancyBox CSS
        wp_enqueue_style(
            'fancybox-css',
            'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css',
            array(),
            '5.0'
        );

        // FancyBox JS
        wp_enqueue_script(
            'fancybox-js',
            'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js',
            array(),
            '5.0',
            true
        );

        // FancyBox初期化
        wp_add_inline_script('fancybox-js', 'Fancybox.bind("[data-fancybox]");');
    }
}
add_action('wp_enqueue_scripts', 'charme_enqueue_search_case_assets');

/**
 * 2025年リニューアル用CSSの読み込み
 * header.phpのスタイルも含むため全ページで読み込む
 */
function charme_enqueue_renewal_2025_styles()
{
    // 共通CSS（横スクロール防止など）
    wp_enqueue_style(
        'charme-common-style',
        get_template_directory_uri() . '/assets/css/common.css',
        array(),
        filemtime(get_theme_file_path('/assets/css/common.css')),
        'all'
    );

    wp_enqueue_style(
        'charme-header-footer-style-2025',
        get_template_directory_uri() . '/css/style_header_footer_2025.css',
        array('charme-common-style'),
        filemtime(get_theme_file_path('/css/style_header_footer_2025.css')),
        'all'
    );


    // splideが必要なヶ所のみ読み込む
    if (is_front_page()) {
        wp_enqueue_style('css-splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');

        wp_enqueue_script('js-splide', get_template_directory_uri() . '/assets_new/js/lib/splide.min.js', array(), '4.1.2', true);
        wp_enqueue_script('js-splide-auto-scroll', get_template_directory_uri() . '/assets_new/js/lib/splide-extension-auto-scroll.min.js', array('js-splide'), '0.5.3', true);
    }

    if (is_front_page()) {
        wp_enqueue_script('js-top', get_template_directory_uri() . '/assets_new/js/top.js', array(), filemtime(get_theme_file_path('/assets_new/js/top.js')), true);
    }

    // トップページのみcommon.jsを読み込み（ドロワーメニュー等）
    if (is_front_page()) {
        wp_enqueue_script('js-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true);
        wp_enqueue_script('js-gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('js-gsap'), '3.12.2', true);
        wp_enqueue_script('js-common', get_template_directory_uri() . '/assets_new/js/common.js', array('js-gsap', 'js-gsap-scrolltrigger'), filemtime(get_theme_file_path('/assets_new/js/common.js')), true);

        // トップページのみstyle_2025.cssを読み込み
        wp_enqueue_style(
            'charme-style-2025',
            get_template_directory_uri() . '/css/style_2025.css',
            array(),
            filemtime(get_theme_file_path('/css/style_2025.css')),
            'all'
        );

        // トップページのみstyle_nc.cssを読み込み
        wp_enqueue_style(
            'charme-style-nc',
            get_template_directory_uri() . '/assets/css/style_nc.css',
            array(),
            filemtime(get_theme_file_path('/assets/css/style_nc.css')),
            'all'
        );
    }
}
add_action('wp_enqueue_scripts', 'charme_enqueue_renewal_2025_styles');

// ================================
// SNS URL（全ページ共通で利用可能）
// ================================
function charme_get_sns_links()
{
    return array(
        'line'   => 'https://form.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=mLCQY0',
        'inst'  => 'https://www.instagram.com/concierge_charme/',
        'tiktok' => 'https://www.tiktok.com/@charme.concierge?_t=8mHq6qDaRKJ&_r=1',
    );
}

// ================================
// 症例検索のカスタマイズ
// CFSカスタムフィールドとタクソノミーも検索対象に含める
// ================================

/**
 * 症例検索用のJOINを追加
 */
function charme_case_search_join($join, $query)
{
    global $wpdb;

    if (!is_admin() && $query->is_main_query() && $query->is_search()) {
        $post_type = isset($_GET['post_type']) ? $_GET['post_type'] : '';
        if ($post_type === 'case' && !empty(get_search_query())) {
            // postmetaテーブルをJOIN
            $join .= " LEFT JOIN {$wpdb->postmeta} AS cfs_meta ON ({$wpdb->posts}.ID = cfs_meta.post_id) ";
            // term_relationshipsとterm_taxonomyをJOIN
            $join .= " LEFT JOIN {$wpdb->term_relationships} AS tr ON ({$wpdb->posts}.ID = tr.object_id) ";
            $join .= " LEFT JOIN {$wpdb->term_taxonomy} AS tt ON (tr.term_taxonomy_id = tt.term_taxonomy_id) ";
            $join .= " LEFT JOIN {$wpdb->terms} AS t ON (tt.term_id = t.term_id) ";
        }
    }

    return $join;
}
add_filter('posts_join', 'charme_case_search_join', 10, 2);

/**
 * 症例検索用のWHERE句を拡張
 */
function charme_case_search_modify($search, $query)
{
    global $wpdb;

    if (!is_admin() && $query->is_main_query() && $query->is_search()) {
        $post_type = isset($_GET['post_type']) ? $_GET['post_type'] : '';
        if ($post_type === 'case') {
            $search_term = get_search_query();
            if (!empty($search_term)) {
                $like = '%' . $wpdb->esc_like($search_term) . '%';

                // CFSフィールドとタクソノミーも検索対象に含める
                $search = $wpdb->prepare(
                    " AND (
                        ({$wpdb->posts}.post_title LIKE %s)
                        OR ({$wpdb->posts}.post_content LIKE %s)
                        OR ({$wpdb->posts}.post_excerpt LIKE %s)
                        OR (cfs_meta.meta_value LIKE %s)
                        OR (t.name LIKE %s)
                    ) ",
                    $like,
                    $like,
                    $like,
                    $like,
                    $like
                );
            }
        }
    }

    return $search;
}
add_filter('posts_search', 'charme_case_search_modify', 10, 2);

/**
 * 重複を除去
 */
function charme_case_search_distinct($distinct, $query)
{
    if (!is_admin() && $query->is_main_query() && $query->is_search()) {
        $post_type = isset($_GET['post_type']) ? $_GET['post_type'] : '';
        if ($post_type === 'case' && !empty(get_search_query())) {
            return 'DISTINCT';
        }
    }
    return $distinct;
}
add_filter('posts_distinct', 'charme_case_search_distinct', 10, 2);

/**
 * クリニック検索エンジン
 * archive-clinic.phpでの検索クエリを処理
 */
function charme_clinic_search_query($query)
{
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    // archive-clinic.phpでの検索処理
    if (is_post_type_archive('clinic')) {
        $meta_query = array('relation' => 'AND');
        $tax_query = array('relation' => 'AND');
        $has_meta_query = false;
        $has_tax_query = false;

        // フリーワード検索（カスタムフィールド・タクソノミーも含む）
        if (!empty($_GET['clinic_keyword'])) {
            $keyword = sanitize_text_field($_GET['clinic_keyword']);
            $keyword_clinic_ids = charme_get_clinics_by_keyword($keyword);

            // 標準の検索パラメータを無効化（post__inで制御するため）
            $query->set('s', '');

            if (!empty($keyword_clinic_ids)) {
                $query->set('post__in', $keyword_clinic_ids);
                echo '<!-- PRE_GET_POSTS SET: ' . implode(',', $keyword_clinic_ids) . ' -->';
            } else {
                $query->set('post__in', array(0));
            }
        }
        echo '<!-- PRE_GET_POSTS EXECUTED for clinic archive -->';

        // 部位（case_category）からの検索
        // charme_discount_menusのmenu_case_categoryに該当するクリニックを取得
        if (!empty($_GET['search_case_category'])) {
            $case_category_ids = array_map('intval', explode(',', sanitize_text_field($_GET['search_case_category'])));

            // menu_case_categoryフィールドで検索するため、カスタムクエリが必要
            // ACF Repeaterのサブフィールドを検索
            global $wpdb;

            // case_categoryに該当するクリニックIDを取得
            $clinic_ids = charme_get_clinics_by_case_category($case_category_ids);

            if (!empty($clinic_ids)) {
                $query->set('post__in', $clinic_ids);
            } else {
                // 該当なしの場合は結果を0にする
                $query->set('post__in', array(0));
            }
        }

        // エリアからの検索
        if (!empty($_GET['search_clinic_area'])) {
            $area_ids = array_map('intval', explode(',', sanitize_text_field($_GET['search_clinic_area'])));
            $tax_query[] = array(
                'taxonomy' => 'clinic_area',
                'field' => 'term_id',
                'terms' => $area_ids,
                'operator' => 'IN',
            );
            $has_tax_query = true;
        }

        if ($has_tax_query) {
            $query->set('tax_query', $tax_query);
        }
    }
}
add_action('pre_get_posts', 'charme_clinic_search_query');

/**
 * case_categoryに該当するクリニックIDを取得
 * charme_discount_menusリピーターのmenu_case_categoryフィールドを検索
 */
function charme_get_clinics_by_case_category($category_ids)
{
    $clinic_ids = array();

    // 検索対象のカテゴリIDを整数に変換
    $category_ids = array_map('intval', $category_ids);

    // 親カテゴリが選択された場合、子カテゴリも検索対象に含める
    $expanded_category_ids = array();
    foreach ($category_ids as $cat_id) {
        $expanded_category_ids[] = $cat_id;
        $children = get_term_children($cat_id, 'case_category');
        if (!is_wp_error($children) && !empty($children)) {
            $expanded_category_ids = array_merge($expanded_category_ids, $children);
        }
    }
    $category_ids = array_unique(array_map('intval', $expanded_category_ids));

    // 全クリニックを取得
    $clinics = get_posts(array(
        'post_type' => 'clinic',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'fields' => 'ids',
    ));

    foreach ($clinics as $clinic_id) {
        $matched = false;

        if (have_rows('charme_discount_menus', $clinic_id)) {
            while (have_rows('charme_discount_menus', $clinic_id)) {
                the_row();
                $menu_categories = get_sub_field('menu_case_category');

                if (!empty($menu_categories)) {
                    // 配列でない場合は配列に変換
                    if (!is_array($menu_categories)) {
                        $menu_categories = array($menu_categories);
                    }

                    foreach ($menu_categories as $cat) {
                        // オブジェクトの場合はterm_idを取得、それ以外は直接値を使用
                        if (is_object($cat)) {
                            $cat_id = intval($cat->term_id);
                        } elseif (is_array($cat) && isset($cat['term_id'])) {
                            $cat_id = intval($cat['term_id']);
                        } else {
                            $cat_id = intval($cat);
                        }

                        if (in_array($cat_id, $category_ids, true)) {
                            $clinic_ids[] = $clinic_id;
                            $matched = true;
                            break 2; // このクリニックは既にマッチしたので次へ
                        }
                    }
                }
            }
        }

        // have_rowsのポインタをリセット
        if (!$matched) {
            reset_rows();
        }
    }

    return array_unique($clinic_ids);
}

/**
 * クリニック検索エンジン用JS読み込み
 */
function charme_enqueue_clinic_search_scripts()
{
    if (is_front_page() || is_home() || is_post_type_archive('clinic') || is_tax('clinic_area') || is_tax('clinic_caategory')) {
        wp_enqueue_script(
            'charme-clinic-search',
            get_template_directory_uri() . '/js/clinic-search.js',
            array(),
            filemtime(get_theme_file_path('/js/clinic-search.js')),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'charme_enqueue_clinic_search_scripts');

/**
 * キーワードでクリニックを検索（タイトル、本文、カスタムフィールド、タクソノミー）
 */
function charme_get_clinics_by_keyword($keyword)
{
    global $wpdb;

    $like = '%' . $wpdb->esc_like($keyword) . '%';
    $clinic_ids = array();
    $debug = array();

    // 1. タイトル・本文で検索
    $title_content_ids = $wpdb->get_col($wpdb->prepare(
        "SELECT DISTINCT ID FROM {$wpdb->posts}
         WHERE post_type = 'clinic'
         AND post_status = 'publish'
         AND (post_title LIKE %s OR post_content LIKE %s)",
        $like,
        $like
    ));
    $debug['title_content'] = $title_content_ids;
    $clinic_ids = array_merge($clinic_ids, $title_content_ids);

    // 2. カスタムフィールドで検索
    $meta_keys = array(
        'address',
        'access',
        'tel',
        'hours',
        'holiday',
        'doctor_name',
        'doctor_info',
        'features_text',
    );

    $meta_key_placeholders = implode(',', array_fill(0, count($meta_keys), '%s'));
    $meta_query_params = array_merge($meta_keys, array($like));

    $meta_ids = $wpdb->get_col($wpdb->prepare(
        "SELECT DISTINCT pm.post_id FROM {$wpdb->postmeta} pm
         INNER JOIN {$wpdb->posts} p ON pm.post_id = p.ID
         WHERE p.post_type = 'clinic'
         AND p.post_status = 'publish'
         AND pm.meta_key IN ({$meta_key_placeholders})
         AND pm.meta_value LIKE %s",
        ...$meta_query_params
    ));
    $clinic_ids = array_merge($clinic_ids, $meta_ids);

    // 3. ACFリピーターフィールド（menu_title）で検索
    $repeater_ids = $wpdb->get_col($wpdb->prepare(
        "SELECT DISTINCT pm.post_id FROM {$wpdb->postmeta} pm
         INNER JOIN {$wpdb->posts} p ON pm.post_id = p.ID
         WHERE p.post_type = 'clinic'
         AND p.post_status = 'publish'
         AND pm.meta_key LIKE %s
         AND pm.meta_value LIKE %s",
        'charme_discount_menus_%_menu_title',
        $like
    ));
    $clinic_ids = array_merge($clinic_ids, $repeater_ids);

    // 4. タクソノミー（clinic_area, clinic_caategory）で検索
    $taxonomies = array('clinic_area', 'clinic_caategory');
    $matching_term_ids = array();

    foreach ($taxonomies as $taxonomy) {
        $terms = get_terms(array(
            'taxonomy' => $taxonomy,
            'hide_empty' => false,
            'name__like' => $keyword,
        ));

        if (!is_wp_error($terms) && !empty($terms)) {
            foreach ($terms as $term) {
                $matching_term_ids[] = $term->term_id;
                $children = get_term_children($term->term_id, $taxonomy);
                if (!is_wp_error($children) && !empty($children)) {
                    $matching_term_ids = array_merge($matching_term_ids, $children);
                }
            }
        }
    }

    if (!empty($matching_term_ids)) {
        $matching_term_ids = array_unique(array_map('intval', $matching_term_ids));
        $term_ids_str = implode(',', $matching_term_ids);

        $taxonomy_ids = $wpdb->get_col(
            "SELECT DISTINCT tr.object_id FROM {$wpdb->term_relationships} tr
             INNER JOIN {$wpdb->posts} p ON tr.object_id = p.ID
             INNER JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
             WHERE p.post_type = 'clinic'
             AND p.post_status = 'publish'
             AND tt.term_id IN ({$term_ids_str})"
        );
        $debug['taxonomy'] = $taxonomy_ids;
        $debug['matching_terms'] = $matching_term_ids;
        $clinic_ids = array_merge($clinic_ids, $taxonomy_ids);
    }

    $final_ids = array_unique(array_map('intval', $clinic_ids));
    $debug['final'] = $final_ids;

    // デバッグ出力（HTMLコメントで）
    echo '<!-- KEYWORD SEARCH DEBUG: ' . esc_html(print_r($debug, true)) . ' -->';

    return $final_ids;
}
