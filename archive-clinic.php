<?php get_header(); ?>

<div class="back">
	<div class="container"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-back.png" alt="back"></a></div>
</div>

<?php
$terms = get_terms([
	'taxonomy' => 'clinic_caategory',
	'hide_empty' => false,
]);

// 検索条件を取得
$is_search = !empty($_GET['clinic_keyword']) || !empty($_GET['search_case_category']) || !empty($_GET['search_clinic_area']);
$search_keyword = isset($_GET['clinic_keyword']) ? sanitize_text_field($_GET['clinic_keyword']) : '';
$search_case_category = isset($_GET['search_case_category']) ? sanitize_text_field($_GET['search_case_category']) : '';
$search_clinic_area = isset($_GET['search_clinic_area']) ? sanitize_text_field($_GET['search_clinic_area']) : '';
?>

<?php if ($is_search): ?>
<!-- 検索結果ヘッダー -->
<section class="sec-clinic-search-result">
	<div class="sec-in">
		<div class="clinic-search-result-header">
			<h2 class="clinic-search-result-title">検索結果</h2>
			<div class="clinic-search-result-conditions">
				<?php if ($search_keyword): ?>
					<span class="clinic-search-result-tag">キーワード: <?php echo esc_html($search_keyword); ?></span>
				<?php endif; ?>
				<?php if ($search_case_category): ?>
					<?php
					$cat_ids = array_map('intval', explode(',', $search_case_category));
					foreach ($cat_ids as $cat_id):
						$term = get_term($cat_id, 'case_category');
						if ($term && !is_wp_error($term)):
					?>
						<span class="clinic-search-result-tag"><?php echo esc_html($term->name); ?></span>
					<?php endif; endforeach; ?>
				<?php endif; ?>
				<?php if ($search_clinic_area): ?>
					<?php
					$area_ids = array_map('intval', explode(',', $search_clinic_area));
					foreach ($area_ids as $area_id):
						$term = get_term($area_id, 'clinic_area');
						if ($term && !is_wp_error($term)):
					?>
						<span class="clinic-search-result-tag"><?php echo esc_html($term->name); ?></span>
					<?php endif; endforeach; ?>
				<?php endif; ?>
			</div>
			<a href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>" class="clinic-search-result-clear">条件をクリア</a>
		</div>
	</div>
</section>
<?php endif; ?>

<section class="sec-clinic" id="a-clinic">
	<div class="sec-in">
		<div class="clinic-category-btns" style="text-align:center; margin:30px 0;">
			<?php foreach ($terms as $term): ?>
				<a class="clinic-category-btn" href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
			<?php endforeach; ?>
			<a class="clinic-category-btn" href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>">すべて</a>
		</div>
	</div>
</section>


<section class="sec-clinic" id="a-clinic">
	<div class="sec-in">


		<div class="sec-service">
			<div class="container">

				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				// クエリ引数を構築
				$query_args = [
					'post_type'      => 'clinic',
					'posts_per_page' => 5,
					'post_status'    => 'publish',
					'orderby'        => 'date',
					'order'          => 'DESC',
					'paged'          => $paged,
				];

				// フリーワード検索
				if (!empty($search_keyword)) {
					$query_args['s'] = $search_keyword;
				}

				// 部位（case_category）からの検索
				if (!empty($search_case_category)) {
					$case_category_ids = array_map('intval', explode(',', $search_case_category));
					$clinic_ids = charme_get_clinics_by_case_category($case_category_ids);
					if (!empty($clinic_ids)) {
						$query_args['post__in'] = $clinic_ids;
					} else {
						$query_args['post__in'] = array(0);
					}
				}

				// エリアからの検索
				if (!empty($search_clinic_area)) {
					$area_ids = array_map('intval', explode(',', $search_clinic_area));
					$query_args['tax_query'] = array(
						array(
							'taxonomy' => 'clinic_area',
							'field' => 'term_id',
							'terms' => $area_ids,
							'operator' => 'IN',
						),
					);
				}

				$clinics_query = new WP_Query($query_args);
				?>

				<ul id="listPage" class="service-list">
					<?php if ($clinics_query->have_posts()) : ?>
						<?php while ($clinics_query->have_posts()) : $clinics_query->the_post(); ?>
							<?php
							$clinic_id = get_the_ID();
							$en_title  = get_post_meta($clinic_id, 'en-title', true);
							$img_full  = get_field('img-full', $clinic_id);
							$logo      = get_field('logo', $clinic_id);
							$website   = get_post_meta($clinic_id, 'website', true);
							$gallery   = get_field('gallery', $clinic_id);
							?>

							<li>
								<div class="service-list-content">
									<?php if (!empty($gallery)): ?>
										<section class="archive-sec-galley">
											<div class="archive-gallery-scroll">
												<?php foreach ($gallery as $image_url): ?>
													<div class="archive-gallery-item">
														<a href="<?php the_permalink(); ?>">
															<img src="<?php echo esc_url($image_url); ?>" alt="" />
														</a>
													</div>
												<?php endforeach; ?>
											</div>
										</section>
									<?php else: ?>
										<section class="archive-sec-galley">
											<div class="archive-gallery-scroll">
												<div class="archive-gallery-item">
													<a href="<?php the_permalink(); ?>">
														<img src="https://charme-beauty.jp/wp-content/uploads/charme_blank.jpg" alt="" />
													</a>
												</div>
											</div>
										</section>
									<?php endif; ?>

									<div class="right">
										<div class="service-title">
											<h3>
												<a href="<?php the_permalink(); ?>">
													<span class="en"><?php the_title(); ?></span><br>
												</a>
											</h3>
											<span class="img">
												<a target="_blank" href="<?php the_permalink(); ?>">
													<?php if (!empty($logo)): ?>
														<img src="<?php echo esc_url($logo); ?>" alt="" class="img-full">
													<?php else: ?>
														<img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo.svg" alt="" class="img-df">
													<?php endif; ?>
												</a>
											</span>
										</div>

										<div class="service-info">
											<?php
											// ▼▼▼ ここだけ修正：エリアを“チップ”で横並び＆途中改行なし ▼▼▼
											$areas = get_the_terms($clinic_id, 'clinic_area');
											if (!empty($areas) && !is_wp_error($areas)) {
												echo '<div class="service-info__row" style="display:flex;align-items:flex-start;gap:12px;flex-wrap:wrap;margin:8px 0;">';
												echo '<label style="min-width:4em;color:#555;line-height:1.9;">エリア</label>';
												echo '<div class="area-chips" style="display:flex;flex-wrap:wrap;gap:6px 8px;">';
												foreach ($areas as $area) {
													echo '<a href="' . esc_url(get_term_link($area)) . '" style="display:inline-block;padding:4px 10px;border:1px solid #ddd;border-radius:999px;font-size:13px;line-height:1.6;color:#333;text-decoration:none;background:#fafafa;white-space:nowrap;">' . esc_html($area->name) . '</a>';
												}
												echo '</div></div>';
											}
											// ▲▲▲ 修正ここまで ▲▲▲
											?>
											<span><label>WEB</label><span><a target="_blank" href="<?php echo esc_url($website); ?>"><?php echo esc_html($website); ?></a></span></span>

											<?php
											$terms = get_the_terms($clinic_id, 'clinic_caategory');
											if (empty($terms) || is_wp_error($terms)) { ?>
												<div class="tag"></div>
											<?php } else { ?>
												<div class="tag">
													<?php foreach ($terms as $term) : ?>
														<a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
													<?php endforeach; ?>
												</div>
											<?php } ?>
										</div>

										<!-- シャルム限定割引メニュー（一覧表示用） -->
										<?php if (have_rows('charme_discount_menus', $clinic_id)): ?>
											<a href="<?php the_permalink(); ?>" class="discount-menu-preview-link">
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

										<a class="readmore-btn" href="<?php the_permalink(); ?>">READ MORE</a>
									</div>
								</div>
							</li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>

				<!-- ✅ ページネーション -->
				<div class="clinic-pagination" style="text-align:center; margin:32px 0;">
					<?php
					echo paginate_links([
						'total'   => $clinics_query->max_num_pages,
						'current' => $paged,
						'prev_text' => '« 前へ',
						'next_text' => '次へ »',
					]);
					?>
				</div>

				<?php wp_reset_postdata(); ?>


			</div>
		</div>


		<p class="txt txt-clinic">全国主要都市から韓国まで、公正な調査の上で厳選された数々の技術力の高いクリニック様とご提携させて頂いております。<br>
			掲載クリニック様以外にも数多くのクリニック様とご提携しております。</p>
		<div class="list-clinic-logo">
			<div class="first"><a href="<?php echo esc_url(get_permalink(189)); ?>">
					<div class="logo logo-kusano-taro"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_kusano-taro.png" alt="くさのたろうクリニック"></div>
				</a></div>
			<div class="first"><a href="<?php echo esc_url(get_permalink(201)); ?>">
					<div class="logo logo-sherie"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_sherieclinic.svg" alt="シェリークリニック"></div>
				</a></div>
			<div class="first"><a href="<?php echo esc_url(get_permalink(381)); ?>">
					<div class="logo logo-shibuya"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_shibuyanomori_2.png" alt="渋谷の森クリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(220)); ?>">
					<div class="logo logo-tkc"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_tkc-biyou.png" alt="東京美容外科"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(239)); ?>">
					<div class="logo logo-omotesando"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_omotesando-skin.jpg" alt="表参道スキンクリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(238)); ?>">
					<div class="logo logo-primo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_primo.jpg" alt="プリモ麻布十番クリニック"></div>
				</a></div>
			<div class="second-efiller"><a href="<?php echo esc_url(get_permalink(210)); ?>">
					<div class="logo logo-efiller"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_efiller.png" alt="フィラークリニック"></div>
				</a></div>
			<div class="second-efiller"><a href="<?php echo esc_url(get_permalink(222)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_komuroclinic.png" alt="コムロクリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(231)); ?>">
					<div class="logo logo-wom"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_womclinic.jpg" alt="WOMクリニック"></div>
				</a></div>
			<!-- <div class="second"><a href="<?php echo esc_url(get_permalink(228)); ?>"><div class="logo logo-vogue"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_slbc-vogue.png" alt="札幌ル・トロワビューティクリニックVogue"></div></a></div> -->
			<div class="second"><a href="<?php echo esc_url(get_permalink(3335)); ?>">
					<div class="logo logo-veary"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_bellefeel.svg" alt="Bellefeelクリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(1642)); ?>">
					<div class="logo logo-sf"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/sfdental.jpg" alt="SF六本木東京デンタルクリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(370)); ?>">
					<div class="logo logo-sf"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logodazzy2.jpg" alt="DAZZYクリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(225)); ?>">
					<div class="logo logo-id-beauty"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_idhospital.svg" alt="id美容クリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(227)); ?>">
					<div class="logo logo-id-hospital"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_idhospital2.jpg" alt="id美容外科"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(2575)); ?>">
					<div class="logo logo-veary"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/veary_logo.png" alt="ヴェアリークリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(176)); ?>">
					<div class="logo logo-ta"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_taclinic.png" alt="銀座TAクリニック"></div>
				</a></div>
			<!-- <div class="second"><a href="<?php echo esc_url(get_permalink(211)); ?>"><div class="logo logo-glow"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_glow-clinic.png" alt="GLOWクリニック"></div></a></div> -->
			<div class="second"><a href="<?php echo esc_url(get_permalink(249)); ?>">
					<div class="logo logo-kuno"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_d-biyou.jpg" alt="Kunoクリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(1656)); ?>">
					<div class="logo logo-oracleclinic"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_oracleclinic_2.png" alt="オラクル美容皮膚科"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(207)); ?>">
					<div class="logo logo-tbc"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/aga_radies_logo.jpg" alt="東京ビューティークリニック"></div>
				</a></div>
			<!-- <div class="second-mil"><a href="<?php echo esc_url(get_permalink(2182)); ?>"><div class="logo logo-mil"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_MILCLINIC.jpg" alt="ミルクリニック"></div></a></div> -->

			<div class="second"><a href="<?php echo esc_url(get_permalink(208)); ?>">
					<div class="logo logo-aga"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_agaskin.png" alt="AGAスキンクリニック"></div>
				</a></div>
			<!-- <div class="second"><a href="<?php echo esc_url(get_permalink(2220)); ?>"><div class="logo logo-rigel"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/rigel_clinicLogo.png" alt="リゲルクリニック"></div></a></div> -->

			<!-- <div class="second"><a href="<?php echo esc_url(get_permalink(67)); ?>"><div class="logo logo-athena"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_athena.svg" alt="銀座アテナクリニック"></div></a></div> -->
			<div class="second-pce"><a href="<?php echo esc_url(get_permalink(361)); ?>">
					<div class="logo logo-pce"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_private-clinic-ebisu.jpg" alt="プライベートクリニック恵比寿"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(1644)); ?>">
					<div class="logo logo-withbeauty"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_withclinic.png" alt="WITH BEAUTY CLINIC"></div>
				</a></div>

			<!-- <div class="second"><a href="<?php echo esc_url(get_permalink(2221)); ?>"><div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_acne.jpg" alt="アクネクリニック"></div></a></div> -->

			<div class="second"><a href="<?php echo esc_url(get_permalink(3443)); ?>">
					<div class="logo logo-livliv"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/beclinic_logo_h.png" alt="白金ビークリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(2210)); ?>">
					<div class="logo logo-livliv"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/livliv_logoH140.png" alt="LIVLIVビューティサロン"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(291)); ?>">
					<div class="logo logo-kogaokagaku"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_kogaokagaku.jpg" alt="小顔化学研究所"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(2560)); ?>">
					<div class="logo logo-kogaokagaku"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/Seibi_logo.png" alt="清美会クリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(2890)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/sapporo_logo.png" alt="さっぽろ美容クリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(2893)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/joe_logo.png" alt="ジョウクリニック"></div>
				</a></div>
			<!-- <div class="second"><a href="<?php echo esc_url(get_permalink(2897)); ?>"><div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/coolwhite_logo.png" alt="クールホワイトクリニック"></div></a></div> -->
			<div class="second"><a href="<?php echo esc_url(get_permalink(2900)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/kondo_logo.png" alt="コンドウ歯科クリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(2901)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/wonjin_logo.png" alt="ウォンジン整形外科クリニック"></div>
				</a></div>
			<!-- <div class="second"><a href="<?php echo esc_url(get_permalink(2996)); ?>"><div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo-kyuen.png" alt="ウォンジン整形外科クリニック"></div></a></div> -->
			<div class="second"><a href="<?php echo esc_url(get_permalink(3112)); ?>">
					<div class="logo logo-kogaokagaku"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/sk_logo.jpg" alt="SK新宿歌舞伎町美容外科・歯科"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(3118)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/advanced_logo.jpg" alt="東京先進医療クリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(3123)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/laserskin_logo.jpg" alt="レーザースキンクリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(3127)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/menslife_logo.jpg" alt="メンズライフクリニック"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(3181)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/juno_logo.jpg" alt="ジュノ"></div>
				</a></div>
			<!-- <div class="second"><a href="<?php echo esc_url(get_permalink(3191)); ?>"><div class="logo logo-kogaokagaku"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/gami_logo.jpg" alt="ガミ"></div></a></div> -->
			<div class="second"><a href="<?php echo esc_url(get_permalink(3252)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/pbc_logo.png" alt="ガミ"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(3318)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_medialpha.jpg" alt="ガミ"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(3323)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_miami.svg" alt="ガミ"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(3330)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_hibiyacentral.jpg" alt="ガミ"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(3332)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_atom.png" alt="Atom"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(3328)); ?>">
					<div class="logo logo-kogaokagaku"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_revi.png" alt="ガミ"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(3325)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_amoureuses.png" alt="ガミ"></div>
				</a></div>
			<div class="second"><a href="<?php echo esc_url(get_permalink(3428)); ?>">
					<div class="logo logo-acne"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_leap.jpg" alt="Leap"></div>
				</a></div>
		</div>
	</div>
</section>
<?php get_template_part('content', 'footer-contact'); ?>

<?php get_footer(); ?>
