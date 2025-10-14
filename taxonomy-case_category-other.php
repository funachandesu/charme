<?php
/**
 * Template Name: Nose
 */
?>
<?php
get_header();

$term_id = get_queried_object()->term_id;
$description = term_description();
$img = get_field('case_category-banner', 'case_category_' . $term_id);
?>
<div id="main">
    <section id="case-content" class="top-section">
        <div class="container">
            <div class="sec-title">
                <h2 class="title-en">CASE</h2>
                <h3 class="title-ja">症例事例</h3>
            </div>
        </div>
    </section>
    <div class="back">
        <div class="container">
            <a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/btn-back.png" alt="back">
            </a>
        </div>
    </div>
    <div class="case-banner"><img src="https://charme-beauty.jp/wp-content/uploads/banner-other.png" alt="" /></div>

    <div class="case-des">
        <div class="container">					女性特有のお悩みや他人には相談しにくい男性のお悩みなど、細かいご要望にもお答えいたします。
        </div>
    </div>

    <div class="sec-case-detail">
        <div class="case_search_box">
            <form method="get" id="caseSearch" action="https://charme-beauty.jp">
                <div class="case_search container">
                    <div class="case_pulldown">
                        <select name="case_category" id="case_category" class="postform">
                            <option value="0" selected="selected">カテゴリから探す（全て）</option>
                            <option class="level-0" value="eye">二重・目元</option>
                            <option class="level-0" value="nose">鼻</option>
                            <option class="level-0" value="skin">美肌治療</option>
                            <option class="level-0" value="bust">バスト</option>
                            <option class="level-0" value="liposuction">脂肪吸引</option>
                            <option class="level-0" value="aesthetic-destistry">審美歯科</option>
                            <option class="level-0" value="injection">注入治療</option>
                            <option class="level-0" value="contour">輪郭</option>
                            <option class="level-0" value="makeup">アートメイク</option>
                            <option class="level-0" value="other">その他</option>
                        </select>

                    </div>
                    <div class="case_pulldown">
                        <select name="case_clinic" id="case_clinic" class="postform">
                            <option value="0" selected="selected">クリニックから探す（全て）</option>
                            <option class="level-0" value="kusanotaro">くさのたろうクリニック</option>
                            <option class="level-0" value="sherieclinic">シェリークリニック</option>
                            <option class="level-0" value="labouche">ラ・ブージュデンタルクリニック</option>
                            <option class="level-0" value="primo">プリモ麻布十番クリニック</option>
                            <option class="level-0" value="glowclinic">GLOWクリニック</option>
                            <option class="level-0" value="athena">アテナクリニック</option>
                            <option class="level-0" value="womclinic">WOMクリニック</option>
                            <option class="level-0" value="kogaokagaku">小顔化学研究所</option>
                            <option class="level-0" value="idhospital2">id美容外科(韓国)</option>
                            <option class="level-0" value="shibuyamori">渋谷の森クリニック</option>
                            <option class="level-0" value="veary">ヴェアリークリニック</option>
                            <option class="level-0" value="komuroclinic">コムロクリニック</option>
                            <option class="level-0" value="dazzyclinic">DAZZYクリニック</option>
                        </select>

                    </div>
                    <div class="case_search_kw">
                        <input type="search" class="searchfield" name="s" value="">
                        <input type="hidden" name="post_type" value="case">
                        <input type="submit" value="検索" accesskey="f">
                    </div>

                </div>
            </form>
        </div>
    </div>
    <div class="list-cases">
        <div class="container">
            <ul>
                <li>
                    <div class="col case-left">
                        <a class="case-logo" href="<?php echo esc_url(get_permalink(189)); ?>">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo/2.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                            </figure>
                        </a>
                    </div>
                    <div class="col case-right">
                        <h3 style="font-family:'Futura PT'; font-weight:600">Kusano Taro Clinic</h3>
                        <h4 style="font-weight:600">くさのたろうクリニック</h4>
                        <div class="case-img" data-slider-3></div>
                        <div class="popup"></div>
                        <a class="readmore" href="https://charme-beauty.jp/?case_category=other&case_clinic=kusanotaro&s=&post_type=case">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/readmore.png" alt="read more">
                        </a>
                    </div>
                </li>

                <li>

                    <div class="col case-left">
                        <a class="case-logo" href="<?php echo esc_url(get_permalink(201)); ?>">
                            <figure>
                                <img width="500" height="400" src="<?php echo get_template_directory_uri(); ?>/imgs/logo/1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://charme-beauty.jp/wp-content/uploads/sherie-clinic.jpg 500w, https://charme-beauty.jp/wp-content/uploads/sherie-clinic-226x181.jpg 226w, https://charme-beauty.jp/wp-content/uploads/sherie-clinic-138x110.jpg 138w, https://charme-beauty.jp/wp-content/uploads/sherie-clinic-225x180.jpg 225w, https://charme-beauty.jp/wp-content/uploads/sherie-clinic-413x330.jpg 413w"
                                     sizes="(max-width: 500px) 100vw, 500px" />
                            </figure>
                        </a>
                    </div>
                    <div class="col case-right">
                        <h3 style="font-family:'Futura PT'; font-weight:600">Sherie Clinic</h3>
                        <h4 style="font-weight:600">シェリークリニック</h4>
                        <div class="case-img" data-slider-3></div>
                        <div class="popup"></div>
                        <a class="readmore" href="https://charme-beauty.jp/?case_category=other&case_clinic=sherieclinic&s=&post_type=case">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/readmore.png" alt="read more">
                        </a>
                    </div>
                </li>

                <li>
                    <div class="col case-left">
                        <a class="case-logo" href="<?php echo esc_url(get_permalink(203)); ?>">
                            <figure>
                                <img width="500" height="400" src="<?php echo get_template_directory_uri(); ?>/imgs/logo/3.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                            </figure>
                        </a>
                    </div>
                    <div class="col case-right">
                        <h3 style="font-family:'Futura PT'; font-weight:600">La Bouche Dental Clinic</h3>
                        <h4 style="font-weight:600">ラ・ブージュ　デンタルクリニック</h4>
                        <div class="case-img" data-slider-3></div>
                        <div class="popup"></div>
                        <a class="readmore" href="<?php echo esc_url(get_permalink(203)); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more">
                        </a>
                    </div>
                </li>

                <li>
                    <div class="col case-left">
                        <a class="case-logo" href="<?php echo esc_url(get_permalink(238)); ?>">
                            <figure>
                                <img width="500" height="400" src="<?php echo get_template_directory_uri(); ?>/imgs/logo/4.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                            </figure>
                        </a>
                    </div>
                    <div class="col case-right">
                        <h3 style="font-family:'Futura PT'; font-weight:600">Primo Azabujyuban Clinic</h3>
                        <h4 style="font-weight:600">プリモ麻布十番クリニック</h4>
                        <div class="case-img" data-slider-3></div>
                        <div class="popup"></div>
                        <a class="readmore" href="https://charme-beauty.jp/?case_category=other&case_clinic=primo&s=&post_type=case">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/readmore.png" alt="read more">
                        </a>
                    </div>
                </li>

                <li>
                    <div class="col case-left">
                        <a class="case-logo" href="<?php echo esc_url(get_permalink(211)); ?>">
                            <figure>
                                <img width="500" height="400" src="<?php echo get_template_directory_uri(); ?>/imgs/logo/5.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                            </figure>
                        </a>
                    </div>
                    <div class="col case-right">
                        <h3 style="font-family:'Futura PT'; font-weight:600">GLOW Clinic</h3>
                        <h4 style="font-weight:600">GLOWクリニック</h4>
                        <div class="case-img" data-slider-3></div>
                        <div class="popup"></div>
                        <a class="readmore" href="<?php echo esc_url(get_permalink(211)); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more">
                        </a>
                    </div>
                </li>

                <li>
                    <div class="col case-left">
                        <a class="case-logo" href="<?php echo esc_url(get_permalink(67)); ?>">
                            <figure>
                                <img width="500" height="400" src="<?php echo get_template_directory_uri(); ?>/imgs/logo/6.svg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                            </figure>
                        </a>
                    </div>
                    <div class="col case-right">
                        <h3 style="font-family:'Futura PT'; font-weight:600">Athena clinic</h3>
                        <h4 style="font-weight:600">アテナクリニック</h4>
                        <div class="case-img" data-slider-3></div>
                        <div class="popup"></div>
                        <a class="readmore" href="https://charme-beauty.jp/?case_category=other&case_clinic=athena&s=&post_type=case">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more">
                        </a>
                    </div>
                </li>

                <li>
                    <div class="col case-left">
                        <a class="case-logo" href="<?php echo esc_url(get_permalink(231)); ?>">
                            <figure>
                                <img width="500" height="400" src="<?php echo get_template_directory_uri(); ?>/imgs/logo/7.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                            </figure>
                        </a>
                    </div>
                    <div class="col case-right">
                        <h3 style="font-family:'Futura PT'; font-weight:600">WOM Clinic</h3>
                        <h4 style="font-weight:600">WOMクリニック</h4>
                        <div class="case-img" data-slider-3></div>
                        <div class="popup"></div>
                        <a class="readmore" href="https://charme-beauty.jp/?case_category=other&case_clinic=womclinic&s=&post_type=case">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/readmore.png" alt="read more">
                        </a>
                    </div>
                </li>

                <li>
                    <div class="col case-left">
                        <a class="case-logo" href="<?php echo esc_url(get_permalink(291)); ?>">
                            <figure>
                                <img width="500" height="400" src="<?php echo get_template_directory_uri(); ?>/imgs/logo/8.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                            </figure>
                        </a>
                    </div>
                    <div class="col case-right">
                        <h3 style="font-family:'Futura PT'; font-weight:600">Kogao Kagaku Laboratory</h3>
                        <h4 style="font-weight:600">小顔化学研究所</h4>
                        <div class="case-img" data-slider-3></div>
                        <div class="popup"></div>
                        <a class="readmore" href="https://charme-beauty.jp/?case_category=other&case_clinic=kogaokagaku&s=&post_type=case">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/readmore.png" alt="read more">
                        </a>
                    </div>
                </li>

                <li>
                    <div class="col case-left">
                        <a class="case-logo" href="<?php echo esc_url(get_permalink(227)); ?>">
                            <figure>
                                <img width="500" height="400" src="<?php echo get_template_directory_uri(); ?>/imgs/logo/9.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                            </figure>
                        </a>
                    </div>
                    <div class="col case-right">
                        <h3 style="font-family:'Futura PT'; font-weight:600">id Hospital</h3>
                        <h4 style="font-weight:600">id美容外科</h4>
                        <div class="case-img" data-slider-3></div>
                        <div class="popup"></div>
                        <a class="readmore" href="<?php echo esc_url(get_permalink(227)); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/readmore.png" alt="read more">
                        </a>
                    </div>
                </li>

                <li>
                    <div class="col case-left">
                        <a class="case-logo" href="<?php echo esc_url(get_permalink(381)); ?>">
                            <figure>
                                <img width="500" height="400" src="<?php echo get_template_directory_uri(); ?>/imgs/logo/10.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                            </figure>
                        </a>
                    </div>
                    <div class="col case-right">
                        <h3 style="font-family:'Futura PT'; font-weight:600">Shibuya no Mori Clinic</h3>
                        <h4 style="font-weight:600">渋谷の森クリニック</h4>
                        <div class="case-img"></div>
                        <div class="popup"></div>
                        <a class="readmore" href="<?php echo esc_url(get_permalink(381)); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/readmore.png" alt="read more">
                        </a>
                    </div>
                    </li>
                    <li>
                    <div class="col case-left">
                        <a class="case-logo" href="https://charme-beauty.jp/?case_category=other&case_clinic=veary&s=&post_type=case">
                            <figure>
                                <img width="500" height="400" src="<?php echo get_template_directory_uri(); ?>/imgs/clinic/veary_logo.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                            </figure>
                        </a>
                    </div>
                    <div class="col case-right">
                        <h3 style="font-family:'Futura PT'; font-weight:600">veary Clinic</h3>
                        <h4 style="font-weight:600">ヴェアリークリニック</h4>
                        <div class="case-img" data-slider-3></div>
                        <div class="popup"></div>
                        <a class="readmore" href="https://charme-beauty.jp/?case_category=other&case_clinic=veary&s=&post_type=case">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/readmore.png" alt="read more">
                        </a>
                    </div>
                </li>
                <li>
                    <div class="col case-left">
                        <a class="case-logo" href="https://charme-beauty.jp/?case_category=other&case_clinic=komuroclinic&s=&post_type=case">
                            <figure>
                                <img width="500" height="400" src="<?php echo get_template_directory_uri(); ?>/imgs/clinic/logo_komuroclinic.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                            </figure>
                        </a>
                    </div>
                    <div class="col case-right">
                        <h3 style="font-family:'Futura PT'; font-weight:600">Komuro Clinic</h3>
                        <h4 style="font-weight:600">コムロクリニック</h4>
                        <div class="case-img" data-slider-3></div>
                        <div class="popup"></div>
                        <a class="readmore" href="https://charme-beauty.jp/?case_category=other&case_clinic=komuroclinic&s=&post_type=case">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/readmore.png" alt="read more">
                        </a>
                    </div>
                </li>
                <li>
                    <div class="col case-left">
                        <a class="case-logo" href="https://charme-beauty.jp/?case_category=other&case_clinic=dazzyclinic&s=&post_type=case">
                            <figure>
                                <img width="500" height="400" src="<?php echo get_template_directory_uri(); ?>/imgs/clinic/logo_dazzy.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                            </figure>
                        </a>
                    </div>
                    <div class="col case-right">
                        <h3 style="font-family:'Futura PT'; font-weight:600">dazzy Clinic</h3>
                        <h4 style="font-weight:600">DAZZYクリニック</h4>
                        <div class="case-img" data-slider-3></div>
                        <div class="popup"></div>
                        <a class="readmore" href="https://charme-beauty.jp/?case_category=other&case_clinic=dazzyclinic&s=&post_type=case">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/readmore.png" alt="read more">
                            </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php get_template_part('content', 'footer-contact'); ?> <?php get_footer(); ?>
