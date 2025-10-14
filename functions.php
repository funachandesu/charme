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