<?php

/**
 * Template Name: case
 */
?>
<?php get_header(); ?>

<?php
$current_category_slug = isset($_GET['case_category']) ? sanitize_text_field($_GET['case_category']) : '';
$current_clinic_slug = isset($_GET['case_clinic']) ? sanitize_text_field($_GET['case_clinic']) : '';
$search_query = get_search_query();

// カテゴリのterm_idを取得
$current_category_id = 0;
$current_category_term = null;
if (!empty($current_category_slug)) {
    $current_category_term = get_term_by('slug', $current_category_slug, 'case_category');
    if ($current_category_term && !is_wp_error($current_category_term)) {
        $current_category_id = $current_category_term->term_id;
    }
}

// クリニックのterm_idを取得
$current_clinic_id = 0;
if (!empty($current_clinic_slug)) {
    $current_clinic_term = get_term_by('slug', $current_clinic_slug, 'case_clinic');
    if ($current_clinic_term && !is_wp_error($current_clinic_term)) {
        $current_clinic_id = $current_clinic_term->term_id;
    }
}

// 親カテゴリを取得
$parent_term = null;
if ($current_category_term && !is_wp_error($current_category_term)) {
    $parent_term = ($current_category_term->parent === 0) ? $current_category_term : get_term($current_category_term->parent, 'case_category');
}
?>

<section class="search-case-hero">
    <div class="search-case-hero__inner">
        <h1 class="search-case-hero__title">
            <span class="search-case-hero__title-en">CASE</span>
            <span class="search-case-hero__title-ja">症例一覧</span>
        </h1>
        <?php if ($parent_term): ?>
            <p class="search-case-hero__category"><?php echo esc_html($parent_term->name); ?></p>
        <?php endif; ?>
    </div>
</section>

<div class="search-case-back">
    <div class="search-case-back__inner">
        <a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>" class="search-case-back__link">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>症例カテゴリに戻る</span>
        </a>
    </div>
</div>

<section class="search-case-filter">
    <div class="search-case-filter__inner">
        <form method="get" id="caseSearchForm" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="hidden" name="post_type" value="case">

            <div class="search-case-filter__grid">
                <!-- カテゴリ選択 -->
                <div class="search-case-filter__group">
                    <label class="search-case-filter__label">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        カテゴリ
                    </label>
                    <div class="search-case-filter__select-wrap">
                        <?php
                        if ($parent_term) {
                            // 親タームの子タームのみを取得して表示
                            $child_terms = get_terms(array(
                                'taxonomy' => 'case_category',
                                'parent' => $parent_term->term_id,
                                'hide_empty' => 1,
                            ));
                            ?>
                            <select name="case_category" id="case_category_select" class="search-case-filter__select">
                                <option value="<?php echo esc_attr($parent_term->slug); ?>">全て（<?php echo esc_html($parent_term->name); ?>）</option>
                                <?php if (!empty($child_terms) && !is_wp_error($child_terms)): ?>
                                    <?php foreach ($child_terms as $child_term): ?>
                                        <option value="<?php echo esc_attr($child_term->slug); ?>" <?php selected($current_category_slug, $child_term->slug); ?>>
                                            <?php echo esc_html($child_term->name); ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                            <?php
                        } else {
                            // 親タームがない場合は親カテゴリのみ表示
                            $parent_terms = get_terms(array(
                                'taxonomy' => 'case_category',
                                'parent' => 0,
                                'hide_empty' => 1,
                            ));
                            ?>
                            <select name="case_category" id="case_category_select" class="search-case-filter__select">
                                <option value="">全てのカテゴリ</option>
                                <?php if (!empty($parent_terms) && !is_wp_error($parent_terms)): ?>
                                    <?php foreach ($parent_terms as $term): ?>
                                        <option value="<?php echo esc_attr($term->slug); ?>" <?php selected($current_category_slug, $term->slug); ?>>
                                            <?php echo esc_html($term->name); ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <!-- クリニック選択 -->
                <div class="search-case-filter__group">
                    <label class="search-case-filter__label">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 21V5C19 3.89543 18.1046 3 17 3H7C5.89543 3 5 3.89543 5 5V21M19 21H5M19 21H21M5 21H3M9 7H10M9 11H10M14 7H15M14 11H15M12 21V16H12V21Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        クリニック
                    </label>
                    <div class="search-case-filter__select-wrap">
                        <?php
                        wp_dropdown_categories(array(
                            'taxonomy' => 'case_clinic',
                            'name' => 'case_clinic',
                            'id' => 'case_clinic_select',
                            'class' => 'search-case-filter__select',
                            'hide_empty' => 1,
                            'value_field' => 'slug',
                            'selected' => $current_clinic_id,
                            'show_option_all' => '全てのクリニック',
                        ));
                        ?>
                    </div>
                </div>

                <!-- キーワード検索 -->
                <div class="search-case-filter__group search-case-filter__group--keyword">
                    <label class="search-case-filter__label">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        キーワード
                    </label>
                    <input type="search"
                           name="s"
                           class="search-case-filter__input"
                           placeholder="施術名などで検索"
                           value="<?php echo esc_attr($search_query); ?>">
                </div>

                <!-- 検索ボタン -->
                <div class="search-case-filter__group search-case-filter__group--submit">
                    <button type="submit" class="search-case-filter__submit">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        検索する
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="search-case-results">
    <div class="search-case-results__inner">
        <?php if (have_posts()): ?>
            <?php
            global $wp_query;
            $total_posts = $wp_query->found_posts;
            ?>
            <p class="search-case-results__count">
                <span class="search-case-results__count-num"><?php echo esc_html($total_posts); ?></span>件の症例が見つかりました
            </p>

            <ul class="search-case-results__grid">
                <?php while (have_posts()): the_post(); ?>
                    <?php
                    $attachment_id = CFS()->get('case_image', $post->ID);
                    $case_clinic = CFS()->get('case_clinic');
                    $case_name = CFS()->get('case_name');
                    $image_url = wp_get_attachment_image_url($attachment_id, 'case_image_s');
                    $image_url_full = wp_get_attachment_image_url($attachment_id, 'full');
                    ?>
                    <li class="search-case-card">
                        <a href="<?php echo esc_url($image_url_full); ?>"
                           class="search-case-card__link"
                           data-fancybox="case-gallery"
                           data-src="#popup-<?php the_ID(); ?>">
                            <div class="search-case-card__image-wrap">
                                <?php if ($image_url): ?>
                                    <img src="<?php echo esc_url($image_url); ?>"
                                         alt="<?php echo esc_attr($case_name); ?>"
                                         class="search-case-card__image"
                                         loading="lazy">
                                <?php else: ?>
                                    <div class="search-case-card__no-image">No Image</div>
                                <?php endif; ?>
                            </div>
                            <div class="search-case-card__content">
                                <?php if ($case_clinic): ?>
                                    <span class="search-case-card__clinic"><?php echo esc_html($case_clinic); ?></span>
                                <?php endif; ?>
                                <h3 class="search-case-card__title"><?php echo esc_html($case_name); ?></h3>
                            </div>
                        </a>

                        <!-- ポップアップコンテンツ -->
                        <div id="popup-<?php the_ID(); ?>" class="search-case-popup" style="display: none;">
                            <div class="search-case-popup__inner">
                                <div class="search-case-popup__image">
                                    <?php if ($image_url_full): ?>
                                        <img src="<?php echo esc_url($image_url_full); ?>"
                                             alt="<?php echo esc_attr($case_name); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="search-case-popup__content">
                                    <?php if ($case_clinic): ?>
                                        <p class="search-case-popup__clinic"><?php echo esc_html($case_clinic); ?></p>
                                    <?php endif; ?>
                                    <h3 class="search-case-popup__title"><?php echo esc_html($case_name); ?></h3>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>

            <?php if (function_exists('wp_pagenavi')): ?>
                <div class="search-case-results__pagination">
                    <?php wp_pagenavi(); ?>
                </div>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
        <?php else: ?>
            <div class="search-case-results__empty">
                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#ccc" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <p class="search-case-results__empty-text">一致する症例は見つかりませんでした。</p>
                <p class="search-case-results__empty-hint">検索条件を変更してお試しください。</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_template_part('content', 'footer-contact'); ?>

<?php get_footer(); ?>
