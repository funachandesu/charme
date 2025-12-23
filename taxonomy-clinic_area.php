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

<?php
$term = get_queried_object(); // 現在のカテゴリ（ターム）情報
if ($term && !is_wp_error($term)) :
?>
    <div class="category-title" style="text-align:center; font-size:1.5em; margin:24px 0 12px;">
        「<?php echo esc_html($term->name); ?>」カテゴリのクリニック一覧
    </div>
<?php endif; ?>

<div class="back">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-back.png" alt="back">
        </a>
    </div>
</div>

<?php
$terms = get_terms([
    'taxonomy' => 'clinic_area',
    'hide_empty' => false,
    'number' => 6,
]);
$current_term = get_queried_object();

// 検索条件を取得
$search_keyword = isset($_GET['clinic_keyword']) ? sanitize_text_field($_GET['clinic_keyword']) : '';
$search_case_category = isset($_GET['search_case_category']) ? sanitize_text_field($_GET['search_case_category']) : '';
$search_clinic_area = isset($_GET['search_clinic_area']) ? sanitize_text_field($_GET['search_clinic_area']) : '';
?>

<!-- クリニック検索ボックス -->
<section class="p-clinic-search p-clinic-search--archive" id="clinic-search">
    <div class="l-inner p-0">
        <div class="p-clinic-search__content">
            <h2 class="p-clinic-search__title">クリニックを探す</h2>

            <!-- フリーワード検索 -->
            <form class="p-clinic-search__form" action="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>" method="get">
                <div class="p-clinic-search__input-wrap">
                    <input type="text" name="clinic_keyword" class="p-clinic-search__input" placeholder="クリニック名・キーワードで検索" value="<?php echo esc_attr($search_keyword); ?>">
                    <button type="submit" class="p-clinic-search__submit-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                    </button>
                </div>
                <!-- 隠しフィールド（モーダルで選択した値を保持） -->
                <input type="hidden" name="search_case_category" id="search_case_category" value="<?php echo esc_attr($search_case_category); ?>">
                <input type="hidden" name="search_clinic_area" id="search_clinic_area" value="<?php echo esc_attr($search_clinic_area); ?>">
            </form>

            <!-- 検索ボタン（3つ横並び） -->
            <div class="p-clinic-search__buttons">
                <button type="button" class="p-clinic-search__btn" data-modal="modal-case-category">
                    <span class="p-clinic-search__btn-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </span>
                    <span class="p-clinic-search__btn-text">部位から探す</span>
                </button>
                <button type="button" class="p-clinic-search__btn" data-modal="modal-clinic-area">
                    <span class="p-clinic-search__btn-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </span>
                    <span class="p-clinic-search__btn-text">エリアから探す</span>
                </button>
                <button type="button" class="p-clinic-search__btn" data-modal="modal-clinic-list">
                    <span class="p-clinic-search__btn-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    </span>
                    <span class="p-clinic-search__btn-text">クリニックから探す</span>
                </button>
            </div>

            <!-- 選択中の条件表示 -->
            <div class="p-clinic-search__selected" id="selected-conditions" style="display:none;">
                <span class="p-clinic-search__selected-label">選択中：</span>
                <div class="p-clinic-search__selected-tags" id="selected-tags"></div>
                <button type="button" class="p-clinic-search__clear-btn" id="clear-conditions">クリア</button>
            </div>

            <!-- 検索実行ボタン -->
            <button type="button" class="p-clinic-search__search-btn" id="execute-search" style="display:none;">
                この条件で検索する
            </button>
        </div>
    </div>
</section>

<!-- モーダル：部位から探す -->
<div class="p-search-modal" id="modal-case-category">
    <div class="p-search-modal__overlay"></div>
    <div class="p-search-modal__content">
        <div class="p-search-modal__header">
            <h3 class="p-search-modal__title">部位から探す</h3>
            <button type="button" class="p-search-modal__close">&times;</button>
        </div>
        <div class="p-search-modal__body">
            <div class="p-search-modal__list">
                <?php
                $case_categories = get_terms([
                    'taxonomy' => 'case_category',
                    'hide_empty' => false,
                    'parent' => 0,
                ]);
                $selected_case_cats = !empty($search_case_category) ? array_map('intval', explode(',', $search_case_category)) : [];
                if (!empty($case_categories) && !is_wp_error($case_categories)):
                    foreach ($case_categories as $parent_cat):
                        $is_parent_checked = in_array($parent_cat->term_id, $selected_case_cats);
                ?>
                    <div class="p-search-modal__category-group">
                        <label class="p-search-modal__checkbox-label<?php echo $is_parent_checked ? ' is-checked' : ''; ?>">
                            <input type="checkbox" class="p-search-modal__checkbox" name="case_category[]" value="<?php echo esc_attr($parent_cat->term_id); ?>" data-name="<?php echo esc_attr($parent_cat->name); ?>"<?php echo $is_parent_checked ? ' checked' : ''; ?>>
                            <span class="p-search-modal__checkbox-text"><?php echo esc_html($parent_cat->name); ?></span>
                        </label>
                        <?php
                        $child_cats = get_terms([
                            'taxonomy' => 'case_category',
                            'hide_empty' => false,
                            'parent' => $parent_cat->term_id,
                        ]);
                        if (!empty($child_cats) && !is_wp_error($child_cats)):
                        ?>
                            <div class="p-search-modal__children">
                                <?php foreach ($child_cats as $child_cat):
                                    $is_child_checked = in_array($child_cat->term_id, $selected_case_cats);
                                ?>
                                    <label class="p-search-modal__checkbox-label --child<?php echo $is_child_checked ? ' is-checked' : ''; ?>">
                                        <input type="checkbox" class="p-search-modal__checkbox" name="case_category[]" value="<?php echo esc_attr($child_cat->term_id); ?>" data-name="<?php echo esc_attr($child_cat->name); ?>"<?php echo $is_child_checked ? ' checked' : ''; ?>>
                                        <span class="p-search-modal__checkbox-text"><?php echo esc_html($child_cat->name); ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
        <div class="p-search-modal__footer">
            <button type="button" class="p-search-modal__apply-btn">選択する</button>
        </div>
    </div>
</div>

<!-- モーダル：エリアから探す -->
<div class="p-search-modal" id="modal-clinic-area">
    <div class="p-search-modal__overlay"></div>
    <div class="p-search-modal__content">
        <div class="p-search-modal__header">
            <h3 class="p-search-modal__title">エリアから探す</h3>
            <button type="button" class="p-search-modal__close">&times;</button>
        </div>
        <div class="p-search-modal__body">
            <div class="p-search-modal__list">
                <?php
                $parent_areas = get_terms([
                    'taxonomy' => 'clinic_area',
                    'hide_empty' => false,
                    'parent' => 0,
                ]);
                $selected_areas = !empty($search_clinic_area) ? array_map('intval', explode(',', $search_clinic_area)) : [];
                if (!empty($parent_areas) && !is_wp_error($parent_areas)):
                    foreach ($parent_areas as $parent_area):
                        $is_parent_checked = in_array($parent_area->term_id, $selected_areas);
                ?>
                    <div class="p-search-modal__category-group">
                        <label class="p-search-modal__checkbox-label<?php echo $is_parent_checked ? ' is-checked' : ''; ?>">
                            <input type="checkbox" class="p-search-modal__checkbox" name="clinic_area[]" value="<?php echo esc_attr($parent_area->term_id); ?>" data-name="<?php echo esc_attr($parent_area->name); ?>"<?php echo $is_parent_checked ? ' checked' : ''; ?>>
                            <span class="p-search-modal__checkbox-text"><?php echo esc_html($parent_area->name); ?></span>
                        </label>
                        <?php
                        $child_areas = get_terms([
                            'taxonomy' => 'clinic_area',
                            'hide_empty' => false,
                            'parent' => $parent_area->term_id,
                        ]);
                        if (!empty($child_areas) && !is_wp_error($child_areas)):
                        ?>
                            <div class="p-search-modal__children">
                                <?php foreach ($child_areas as $child_area):
                                    $is_child_checked = in_array($child_area->term_id, $selected_areas);
                                ?>
                                    <label class="p-search-modal__checkbox-label --child<?php echo $is_child_checked ? ' is-checked' : ''; ?>">
                                        <input type="checkbox" class="p-search-modal__checkbox" name="clinic_area[]" value="<?php echo esc_attr($child_area->term_id); ?>" data-name="<?php echo esc_attr($child_area->name); ?>"<?php echo $is_child_checked ? ' checked' : ''; ?>>
                                        <span class="p-search-modal__checkbox-text"><?php echo esc_html($child_area->name); ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
        <div class="p-search-modal__footer">
            <button type="button" class="p-search-modal__apply-btn">選択する</button>
        </div>
    </div>
</div>

<!-- モーダル：クリニックから探す -->
<div class="p-search-modal" id="modal-clinic-list">
    <div class="p-search-modal__overlay"></div>
    <div class="p-search-modal__content">
        <div class="p-search-modal__header">
            <h3 class="p-search-modal__title">クリニックから探す</h3>
            <button type="button" class="p-search-modal__close">&times;</button>
        </div>
        <div class="p-search-modal__body">
            <div class="p-search-modal__search-box">
                <input type="text" class="p-search-modal__filter-input" id="clinic-filter-input" placeholder="クリニック名で絞り込み">
            </div>
            <div class="p-search-modal__list p-search-modal__clinic-list">
                <?php
                $clinics = get_posts([
                    'post_type' => 'clinic',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_status' => 'publish',
                ]);
                if (!empty($clinics)):
                    foreach ($clinics as $clinic):
                ?>
                    <a href="<?php echo esc_url(get_permalink($clinic->ID)); ?>" class="p-search-modal__clinic-item" data-name="<?php echo esc_attr($clinic->post_title); ?>">
                        <?php echo esc_html($clinic->post_title); ?>
                    </a>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

<section class="sec-clinic" id="a-clinic">
    <div class="sec-in">
        <div class="sec-service">
            <div class="container">
                <ul id="listPage" class="service-list">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post();
                            $clinic_id = get_the_ID();
                            $en_title  = get_post_meta($clinic_id, 'en-title', true);
                            $jp_title  = get_the_title($clinic_id);
                            $img_full  = get_field('img-full', $clinic_id);
                            $logo      = get_field('logo', $clinic_id);
                            $address   = get_post_meta($clinic_id, 'address', true);
                            $tel       = get_post_meta($clinic_id, 'tel', true);
                            $website   = get_post_meta($clinic_id, 'website', true);
                            $tag       = get_post_meta($clinic_id, 'tag', true);
                        ?>
                            <li>
                                <div class="service-list-content">
                                    <!-- ギャラリー -->
                                    <?php $gallery = get_field('gallery', $clinic_id); ?>
                                    <?php if ($gallery): ?>
                                        <section class="archive-sec-galley">
                                            <div class="archive-gallery-scroll">
                                                <?php foreach ($gallery as $image_url): ?>
                                                    <div class="archive-gallery-item">
                                                        <a href="<?php echo esc_url($image_url); ?>" target="_blank" rel="noopener noreferrer">
                                                            <img src="<?php echo esc_url($image_url); ?>" alt="" />
                                                        </a>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </section>
                                    <?php endif; ?>
                                    <div class="right">
                                        <div class="service-title">
                                            <h3>
                                                <a href="<?php echo esc_url(get_permalink($clinic_id)); ?>">
                                                    <span class="en"><?php echo esc_html($en_title); ?></span><br>
                                                    <?php echo esc_html($jp_title); ?>
                                                </a>
                                            </h3>
                                            <span class="img">
                                                <a target="_blank" href="<?php echo esc_url($website); ?>">
                                                    <?php if (!empty($logo)): ?>
                                                        <img src="<?php echo esc_url($logo); ?>" alt="" class="img-full">
                                                    <?php else: ?>
                                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo.svg" alt="" class="img-df">
                                                    <?php endif; ?>
                                                </a>
                                            </span>
                                        </div>
                                        <div class="service-info">
                                            <span><label>Address</label><span><?php echo esc_html($address); ?></span></span>
                                            <span><label>TEL</label><span><?php echo esc_html($tel); ?></span></span>
                                            <span><label>WEB</label><span><a target="_blank" href="<?php echo esc_url($website); ?>"><?php echo esc_html($website); ?></a></span></span>
                                            <?php if (empty($tag)): ?>
                                                <div class="tag"></div>
                                            <?php else: ?>
                                                <div class="tag">
                                                    <?php
                                                    $tags = explode(',', $tag);
                                                    foreach ($tags as $t) {
                                                        echo '<a>' . esc_html(trim($t)) . '</a> ';
                                                    }
                                                    ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <!-- シャルム限定割引メニュー（一覧表示用） -->
                                        <?php if (have_rows('charme_discount_menus', $clinic_id)): ?>
                                          <a href="<?php echo esc_url(get_permalink($clinic_id)); ?>" class="discount-menu-preview-link">
                                            <div class="discount-menu-preview">
                                              <span class="discount-menu-badge">シャルム限定割引あり</span>
                                              <ul class="discount-menu-list-preview">
                                                <?php
                                                $menu_count = 0;
                                                while (have_rows('charme_discount_menus', $clinic_id)): the_row();
                                                  if ($menu_count >= 3) break;
                                                  $menu_name = get_sub_field('menu_name');
                                                  $price_before = get_sub_field('price_before');
                                                  $price_after = get_sub_field('price_after');
                                                ?>
                                                  <li>
                                                    <span class="menu-name"><?php echo esc_html($menu_name); ?></span>
                                                    <span class="menu-price">
                                                      <?php if ($price_before): ?>
                                                        <span class="price-before"><?php echo esc_html($price_before); ?>円</span>→
                                                      <?php endif; ?>
                                                      <span class="price-after"><?php echo esc_html($price_after); ?>円</span>
                                                    </span>
                                                  </li>
                                                <?php
                                                  $menu_count++;
                                                endwhile;
                                                ?>
                                              </ul>
                                            </div>
                                          </a>
                                        <?php endif; ?>
                                        <a class="readmore-btn" href="<?php echo esc_url(get_permalink($clinic_id)); ?>">READ MORE</a>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <li>該当するクリニックはありません。</li>
                    <?php endif; ?>
                </ul>
                <!-- WP標準ページネーション設置 -->
                <div class="clinic-pagination" style="text-align:center; margin:32px 0;">
                    <?php
                    the_posts_pagination([
                        'mid_size'  => 2,
                        'prev_text' => '« 前へ',
                        'next_text' => '次へ »',
                    ]);
                    ?>
                </div>
            </div>
        </div>
        <p class="txt txt-clinic">
            全国主要都市から韓国まで、公正な調査の上で厳選された数々の技術力の高いクリニック様とご提携させて頂いております。<br>
            掲載クリニック様以外にも数多くのクリニック様とご提携しております。
        </p>
    </div>
</section>
<?php get_template_part('content', 'footer-contact'); ?>
<?php get_footer(); ?>
