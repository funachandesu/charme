<?php get_header(); ?>

<!-- slide css -->
<style type="text/css">
    .clinic-slide .logo {
        padding: 0 !important;
    }

    .clinic-slide .slick-track {
        display: flex;
        align-items: stretch;
        justify-content: center;
    }

    .clinic-slide__item {
        margin: 0 !important;
        padding: 45px 15px !important;
        box-sizing: border-box;
    }

    .clinic-slide__item__inner {
        min-height: 200px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;
        transition: scale 0.3s;
        scale: 0.8;
        padding: 10px;
        border: 1px solid #937f65;
        border-radius: 5px;
    }

    .slick-center .clinic-slide__item__inner {
        scale: 1.3;
    }


    @media(max-width: 480px) {
        .clinic-slide__item {
            padding: 45px 5px !important;
        }

        .clinic-slide__item img {
            max-width: 100%;
        }

        .clinic-slide__item__inner {
            gap: 10px;
            min-height: 100px;
            padding: 5px;
        }

        .clinic-slide__item__inner span {
            font-size: 10px;
            line-height: 1.3;
        }

        .clinic-slide__item img.kusano {
            max-width: 50%;
        }

        .clinic-slide .slick-track {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .clinic-slide__item.slick-center .clinic-slide__item__inner {
            scale: 1.2;
        }

        .slick-slide[aria-hidden=true]:not([tabindex="-1"])+.slick-cloned[aria-hidden=true] .clinic-slide__item__inner {
            scale: 1.2;
        }
    }
</style>
<!-- end slide css -->


<?php if (is_mobile()) : ?>


    <div class="fade">
        <div class="nav-wrappers">
            <div class="bgimg visual1">
            </div>
            <div class="bgimg visual2"></div>

            <div class="top-menu">
                <div class="sec-topicss">
                    <div class="tit-intros">
                        TOPICS
                    </div>
                    <!-- サブクエリをセット -->
                    <?php
                    $args = array(
                        'post_type' => 'news', // 投稿タイプ
                        'posts_per_page' => 3, // 表示件数。 -1ならすべての投稿を取得
                        'orderby' => 'date', // ソート
                        'order' => 'DESC'
                    );    // 降順(日付の場合、日付が新しい順)
                    ?>
                    <?php $loop = new WP_Query($args); ?>

                    <?php if ($loop->have_posts()) : ?>
                        <ul class="list-topicss">
                            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                <li id="slidess">
                                    <a class="news-img-sp" href="<?php esc_url(the_permalink()); ?>">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail();
                                        } else {
                                        ?>
                                            <img class="placehoder" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/logo.svg" alt="CHARME">
                                        <?php }
                                        ?></a>
                                    <div class="times-sp"><time datetime="<?php esc_html(the_time('Y-m-d')); ?>"><?php esc_html(the_time('Y.m.d')); ?></time><span class="new">NEW</span></div>
                                    <a class="news-img-sp3" href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>

                        <?php endif; ?><?php wp_reset_postdata(); ?>
                        <div class="more-btn">
                            <a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">MORE</a>
                        </div>

                </div>


                <div class="nav-menu">
                    <div><a href="#about"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/about_icon.png"
                                alt=""><span>ABOUT</span></a></div>
                    <div><a href="https://charme-beauty.jp/column/"><img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/books.png"
                                alt=""><span>COLUMN</span></a></div>
                    <div><a href="#case"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/case_icon.png"
                                alt=""><span>CASE</span></a></div>
                    <div><a href="#campaign"><img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/campaign_icon.png"
                                alt=""><span>CAMPAIGN</span></a></div>
                    <div><a href="#reason"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/reason_icon.png"
                                alt=""><span>REASON</span></a></div>
                    <div><a href="#flow"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/flow_icon.png"
                                alt=""><span>FLOW</span></a></div>
                    <div><a href="https://charme-beauty.jp/concierge/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/voice_icon.png"
                                alt=""><span>CONCIERGE</span></a></div>
                    <div><a href="#sns"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/sns_icon.png"
                                alt=""><span>SNS</span></a></div>
                    <div><a href="#clinic"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/clinic_icon.png"
                                alt=""><span>CLINIC</span></a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- <section id="column">
    <div class="container section">
        <ul class="ul_column">
        <div class="container inner">
        <li class="left"> -->
    <!-- <div class="right_image"> -->
    <!-- <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/column_image.png" alt=""> -->
    <!-- </div> -->
    <!-- </li>
            <li class="right">
            <div class="sec-title">

                <div class="right_column">

                <h2 class="sp">COLUMN<span>コラム</span></h2>
        <p>
            お得な情報やCHARMEならではのお役立ち情報を配信中。
        </p>
                    <div class="about-item">
        <div class="more-btn">
                    <a href="https://charme-beauty.jp/column">MORE</a>
                </div>
                </div>
        </div>
                </div> </li>


            </div></ul>
        </div>
    </section> -->

    <section id="sns" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <h2 class="spc"><span class="bigLet snsLet">SNS</span><span class="smallLet">-公式SNSアカウント-</span>
            <div class="hiddbox">
                <div class="hiddenleft"></div>
                <div class="hiddenright"></div>
            </div>
            <div class="box">
                <div class="boxleft"></div>
                <div class="boxright"></div>
            </div>
            <div class="line">
                <div id="topleft"></div>
                <div id="left"></div>
                <div id="bottomleft"></div>
                <div id="topright"></div>
                <div id="right"></div>
                <div id="bottomright"></div>
            </div>
        </h2>
        <div class="copy">
            シャルム公式SNSでは最新情報や、お得な情報を随時お届けしています。
        </div>
        <div class="sns-link">
            <div class="sns-item">
                <a href="https://www.instagram.com/concierge_charme/" target="_blank">
                    <img class="insta" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/insta_icon.png"
                        alt="インスタグラム">
                    <div>@concierge_charme</div>
                </a>
            </div>
            <div class="sns-item">
                <a href="https://www.tiktok.com/@charme.concierge?_t=8mHq6qDaRKJ&_r=1" target="_blank">
                    <img class="twitter"
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/tiktok-icon.png" alt="インスタグラム">
                    <div>@charme.concierge</div>
                </a>
            </div>
        </div>
    </section>

    <section id="about" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">

        <h2 class="spc scro"><span class="bigLet space1">ABOUT</span><span class="smallLet">- CHARMEとは - </span>
            <div class="hiddbox">
                <div class="hiddenleft"></div>
                <div class="hiddenright"></div>
            </div>
            <div class="box">
                <div class="boxleft"></div>
                <div class="boxright"></div>
            </div>
            <div class="line">
                <div id="topleft"></div>
                <div id="left"></div>
                <div id="bottomleft"></div>
                <div id="topright"></div>
                <div id="right"></div>
                <div id="bottomright"></div>
            </div>
        </h2>

        <p class="ptxt">
            美容整形や医療脱毛、審美歯科などに通いたいけれど、クリニックやサロンの選び方がわからない。
            そんなお悩みにお答えするのが、私たちCHARMEがご提案する美容コンシェルジュです。
        </p>
        <div class="about-item">
            <div class="more-btn">
                <a href="<?php echo esc_url(get_permalink(1912)); ?>">MORE</a>
            </div>
        </div>
        </div>
        <!-- <div class="about-wrapper">
            <a class="readmore-btn" href="">
                READ MORE
            </a>
            <div class="about-content">
                <div>
                    昨今の美容ブームにより、自分磨きや綺麗になることが当たり前になってきた時代の流れと共に、美容クリニックやサロン数は右肩上がりに増えてきています。
                    膨大なクリニックの中から、ご自身で自分にちゃんと合ったクリニックを探すのはなかなか難しくなってきています。
                    特に初めてクリニックをお選びになる方は不安がたくさんあるかと思います。
                </div>
                <div class="about-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/about.jpg" alt="美容コンシェルジュについて">
                </div>
                <div class="about-body">
                    <div class="about-copy">あなたの「もっと美しくなりたい」を全力でお手伝いいたします</div>
                    <p>
                        CHARMEでは、そんなお客さまの悩みや願望、ご予算や通院に関するさまざまな要望に対し、
                        お客さま一人ひとりに寄り添いしっかりと時間をかけてヒアリングをさせていただくことで、お客さまに合ったクリニックをご紹介させていただきます。
                    </p>
                    <p>
                        CHARMEは、有名クリニックや実績・対応の良いクリニックと数多くご提携させていただいておりますのでご安心ください。
                        お客さまの大切な身体を第一に考えたご提案をしっかりとさせていただきます。
                    </p>
                </div>
            </div>
        </div> -->
        <!-- <div class="service-items">
            <div class="service-item"><a href="<?php echo esc_url(get_permalink(38)); ?>">
                    <h3 class="sp">美容整形</h3>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/service1.jpg" alt="美容整形のサービス">
                    <p>
                        人気の埋没法やヒアルロン酸注入などのプチ整形や、切開系施術、タトゥー除去、渡韓による輪郭形成など様々なお取り扱いがございます。
                    </p></a>
            </div>
            <div class="service-item"><a href="<?php echo esc_url(get_permalink(28)); ?>">
                    <h3 class="sp">医療脱毛</h3>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/service2.jpg" alt="医療脱毛のサービス">
                    <p>
                        自己処理による剃刀負けや乾燥、色素沈着、埋もれ毛などの肌負担を無くしていく為、
                        毛穴が小さくなりお肌のトーンが明るくなるなど美肌効果がございます。<br>
                        お顔ですとお化粧ノリが良くなる等のメリット多数です。
                    </p></a>
            </div>
            <div class="service-item"><a href="<?php echo esc_url(get_permalink(39)); ?>">
                    <h3 class="sp">メンズ総合</h3>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/service3.jpg" alt="メンズ総合のサービス">
                    <p>
                        女性のみならず男性も積極的に美容を行う時代です。<br>
                        美容整形はもちろん、 美肌治療、髭や全身の医療脱毛、審美歯科、AGA治療等…<br>
                        気になる所はあるけどどうしたら良いかわらない方でも、コンシェルジュがお悩みに沿った美容治療をご案内させて頂きます。
                    </p></a>
            </div> -->
        <!-- <div class="service-item"><div class="top-otherservice">
                    <p>
                        その他にもお客さまのニーズに合わせた多くの施術をご紹介することができます。
                        また、海外クリニックとの提携もご用意していますので送迎・宿泊込みのプランも対応可能です。ご相談はすべて無料ですので、お気軽にご相談ください。
                    </p>
                    <div class="more-btn-other">
                        <a href="<?php echo esc_url(get_permalink(40)); ?>">OTHER SERVICE</a>
                    </div></div></div> -->
        </div>
    </section>

    <!-- <section id="service" data-aos="fade-up"
          data-aos-anchor-placement="top-bottom">
        <h2 class="spc"><span class="midLet">SERVICE</span><span class="smallLet">-サービス-</span>
            <div class="hiddbox">
                <div class="hiddenleft hidcolor"></div>
                <div class="hiddenright hidcolor"></div>
              </div>
            <div class="box">
                <div class="boxleft"></div>
                <div class="boxright"></div>
              </div>
              <div class="line">
                <div id="topleft"></div>
                <div id="left"></div>
                <div id="bottomleft"></div>
                <div id="topright"></div>
                <div id="right"></div>
                <div id="bottomright"></div>
              </div>
        </h2>
        <div class="service-items">
            <div class="service-item"><a href="<?php echo esc_url(get_permalink(38)); ?>">
                    <h3 class="sp">美容整形</h3>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/service1.jpg" alt="美容整形のサービス">
                    <p>
                        人気の埋没法やヒアルロン酸注入などのプチ整形や、切開系施術、タトゥー除去、渡韓による輪郭形成など様々なお取り扱いがございます。
                    </p></a>
            </div>
            <div class="service-item"><a href="<?php echo esc_url(get_permalink(28)); ?>">
                    <h3 class="sp">医療脱毛</h3>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/service2.jpg" alt="医療脱毛のサービス">
                    <p>
                        自己処理による剃刀負けや乾燥、色素沈着、埋もれ毛などの肌負担を無くしていく為、
                        毛穴が小さくなりお肌のトーンが明るくなるなど美肌効果がございます。<br>
                        お顔ですとお化粧ノリが良くなる等のメリット多数です。
                    </p></a>
            </div>
            <div class="service-item"><a href="<?php echo esc_url(get_permalink(39)); ?>">
                    <h3 class="sp">メンズ総合</h3>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/service3.jpg" alt="メンズ総合のサービス">
                    <p>
                        女性のみならず男性も積極的に美容を行う時代です。<br>
                        美容整形はもちろん、 美肌治療、髭や全身の医療脱毛、審美歯科、AGA治療等…<br>
                        気になる所はあるけどどうしたら良いかわらない方でも、コンシェルジュがお悩みに沿った美容治療をご案内させて頂きます。
                    </p></a>
            </div>
            <div class="service-item"><div class="top-otherservice">
                    <p>
                    その他にもお客さまのニーズに合わせた多くの施術をご紹介することができます。
また、海外クリニックとの提携もご用意していますので送迎・宿泊込みのプランも対応可能です。ご相談はすべて無料ですので、お気軽にご相談ください。
                    </p>
                    <div class="more-btn-other">
                    <a href="<?php echo esc_url(get_permalink(40)); ?>">OTHER SERVICE</a>
                </div></div></div>
        </div>
    </section> -->

    <section id="case" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <h2 class="spc"><span class="caseLet">CASE</span><span class="smallLet">-症例-</span>
            <div class="hiddbox">
                <div class="hiddenleft"></div>
                <div class="hiddenright"></div>
            </div>
            <div class="casebox">
                <div class="cboxleft"></div>
                <div class="cboxright"></div>
            </div>
            <div class="caseline">
                <div id="topcleft"></div>
                <div id="cleft"></div>
                <div id="bottomcleft"></div>
                <div id="topcright"></div>
                <div id="cright"></div>
                <div id="bottomcright"></div>
            </div>
        </h2>
        <!--<div class="case-items">
            <div class="case-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/case.jpg" alt="症例紹介">
                <p>
                    各クリニックの症例写真を数多く掲載しております。<br>
                    気になる施術がある方はビフォーアフターを是非ご覧下さい。            </p>
                <div class="more-btn">
                    <a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>">MORE</a>
                </div>
            </div>
        </div>-->
        <?php
        $terms = get_terms(
            array(
                'taxonomy' => 'case_category',
                'parent' => 0, // 親カテゴリのみを取得するために指定
            )
        );
        if (!empty($terms) && !is_wp_error($terms)) {
            echo '<ul class="casies">';
            foreach ($terms as $term) {
                $img = get_field('case_category-image', 'case_category_' . $term->term_id);
                $link = str_replace('/case_category/', '/case/', get_term_link($term->term_id));
        ?>
                <li>
                    <a href="<?php echo $link; ?>">
                        <img src="<?php echo $img; ?>" alt="<?php echo $term->name; ?>" />
                    </a>
                </li>
        <?php
            }
            echo "</ul>";
        }
        ?>
    </section>

    <section id="campaign" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <h2 class="spc"><span class="campLet">CAMPAIGN</span><span class="smallLet">-キャンペーン-</span>
            <div class="camphiddbox">
                <div class="camphiddenleft hidcolor"></div>
                <div class="camphiddenright hidcolor"></div>
            </div>
            <div class="Campbox">
                <div class="boxCampleft"></div>
                <div class="boxCampright"></div>
            </div>
            <div class="line">
                <div id="topleft"></div>
                <div id="left"></div>
                <div id="bottomCampleft"></div>
                <div id="topCampright"></div>
                <div id="Campright"></div>
                <div id="bottomCampright"></div>
            </div>
        </h2>
        <div class="campaign-items">
            <!-- <div class="campaign-item">
                <?php
                $args = null;
                $args = array(
                    'post_type' => 'campaign',
                    'showposts' => 1,
                    'paged' => $paged,
                );
                ?>
                <?php query_posts($args); ?>
                <?php if (have_posts()) : ?>
                    <ul>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php if (get_post_meta($post->ID, 'campaign_display', true)): ?>
                                <li>
                                    <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">
                                        <div class="campaign_list_l">
                                            <?php $attachment_id = CFS()->get('campaign_clinic_img', $post->ID); ?>
                                            <?php echo wp_get_attachment_image($attachment_id, campaign_image_s); ?>
                                        </div>
                                        <p>
                                            <?php echo CFS()->get('campaign_tittle'); ?>
                                        </p>
                                    </a>
                                </li>
                            <?php else: ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                <?php else : ?>
                    <div class="borderBox">
                        <p>キャンペーンは只今準備中です。</p>
                    </div>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                <div class="more-btn">
                    <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">MORE</a>
                </div>
            </div> -->


            <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/campaign_bnr.jpg" alt="キャンペーンバナー"></a>
        </div>

    </section>

    <section id="reason" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <h2 class="spc"><span class="bigLet">REASON</span><span class="smallLet reasmall">-シャルムが選ばれる理由-</span>
            <div class="reahiddbox">
                <div class="reahiddenleft"></div>
                <div class="reahiddenright"></div>
            </div>
            <div class="reabox">
                <div class="reaboxleft"></div>
                <div class="reaboxright"></div>
            </div>
            <div class="line">
                <div id="topleft"></div>
                <div id="left"></div>
                <div id="reabottomleft"></div>
                <div id="reatopright"></div>
                <div id="rearight"></div>
                <div id="reabottomright"></div>
            </div>
        </h2>
        <div class="copy">お客さまの大切な体を優先することがCHARMEコンシェルジュの役割</div>
        <div class="accordion-menu">
            <div class="accordion-item">
                <div class="reason-title">
                    <h3 class="sp">
                        <div>
                            <span class="roboto-small">#</span><span class="roboto-big">01</span>
                        </div>
                        <span class="noto">安心</span>
                    </h3> <a class="readmore-btn-res1" href="">READ MORE</a>
                    <p class="reason-body1">
                        CHARMEでは、すべてのクリニックさまと綿密に面談し提携先を選定しております。<br>
                        大切なお身体を任せる上でよりお客さまの目線でクリニックさまと提携する事で安心して術後までご利用いただいております。
                    </p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="reason-title">
                    <h3 class="sp">
                        <div>
                            <span class="roboto-small">#</span><span class="roboto-big">02</span>
                        </div>
                        <span class="noto">納得</span>
                    </h3>
                    <a class="readmore-btn-res2" href="">READ MORE</a>

                    <p class="reason-body2">
                        CHARMEでは、お客さまがクリニックさまへカウンセリングにつく前に分からない事や不安な事を事前にヒアリングしております。
                        クリニックさまとのカウンセリング時に納得していただけるよう努めてまいります。<br>
                        また、カウンセリング時に聞けなかった事や聞きそびれてしまってもコンシェルジュが後からクリニックさまへ質問する事も可能です。
                    </p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="reason-title">
                    <h3 class="sp">
                        <div>
                            <span class="roboto-small">#</span><span class="roboto-big">03</span>
                        </div>
                        <span class="noto">情報</span>
                    </h3>
                    <a class="readmore-btn-res3" href="">READ MORE</a>

                    <p class="reason-body3">
                        CHARMEをご利用いただいたお客様へのアンケートやクリニックさまとの情報交換によりCHARMEとしてより深い情報が集まってきております。
                        全てのお客さまへよりよいサービスの提供を致します。<br>
                        また、症例写真も多数ご用意しておりますので、お客さまの選択肢も増えております。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="flow" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <h2 class="spc"><span class="flowLet">FLOW</span><span class="smallLet">-ご利用までの流れ-</span>
            <span class="hiddbox">
                <span class="hiddenleft hidcolor"></span>
                <span class="hiddenright hidcolor"></span>
            </span>
            <span class="box">
                <span class="boxleft"></span>
                <span class="boxright"></span>
            </span>
            <span class="line">
                <span id="topleft"></span>
                <span id="left"></span>
                <span id="bottomleft"></span>
                <span id="topright"></span>
                <span id="right"></span>
                <span id="bottomright"></span>
            </span>
        </h2>
        <div class="copy">
            CHARMEをご利用するにあたっての、お問合せから施術までの流れをご説明いたします。<br>
            担当コンシェルジュがお客様に合ったクリニックのご提案をさせて頂きます。
        </div>
        <div class="more-btn">
            <a href="<?php echo esc_url(get_permalink(1503)); ?>">MORE</a>
        </div>
    </section>
    <?php
    $args = null;
    $args = array(
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'post_type' => 'voice',
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
    ?>
        <!-- <section id="voice" data-aos="fade-up"
          data-aos-anchor-placement="top-bottom">
            <h2 class="spc"><span class="midLet">VOICE&nbsp;</span><span class="smallLet">-お客様の声-</span>
                <div class="hiddbox">
                    <div class="hiddenleft"></div>
                    <div class="hiddenright"></div>
                  </div>
                <div class="box">
                    <div class="boxleft"></div>
                    <div class="boxright"></div>
                  </div>
                  <div class="line">
                    <div id="topleft"></div>
                    <div id="left"></div>
                    <div id="bottomleft"></div>
                    <div id="topright"></div>
                    <div id="right"></div>
                    <div id="bottomright"></div>
                  </div>
            </h2>
            <div class="copy">
                CHARMEを実際にご利用頂いたインフルエンサーの方々のお声です。<br>
                初めて美容医療を受けられた方は勿論既に経験のある方まで多数のお喜びの声を頂いております。    </div>
            <ul class="top-list-voices">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li>
                            <div class="img"><img src="<?php echo CFS()->get('top_images'); ?>" alt=""></div>
                            <div class="name"><?php echo CFS()->get('top_name'); ?></div>
                        </li>
                <?php endwhile; ?>
            </ul>
            <div class="more-btn">
                <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">MORE</a>
            </div>
        </section> -->
    <?php endif; ?>

    <section id="interview" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <h2 class="spc"><span class="interLet">SPECIAL<br>INTERVEIW</span>
            <div class="interline">
                <div id="topinterleft"></div>
                <div id="interleft"></div>
                <div id="bottominterleft"></div>
                <div id="topinterright"></div>
                <div id="interright"></div>
                <div id="bottominterright"></div>
            </div>
        </h2>
        <div class="interview-content">
            <div>
                <h3 class="sp">INTERVIEW</h3>
                <div>
                    <a href="<?php echo esc_url(get_permalink(1808)); ?>">
                        Instagramフォロワー23.6万人<br>
                        YouTubeチャンネル登録者数 13.2万人！！<br>
                        総再生回数なんと2300万以上✨<br>
                        可愛すぎると男女ともに大人気のサキ吉さんに美容クリニックでの美容医療ケアについてお伺いしました♡<br></a>
                    <a href="<?php echo esc_url(get_permalink(1808)); ?>">
                        <h3 class="sp">More...</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="clinic" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <h2 class="spc"><span class="bigLet">CLINIC&nbsp;</span><span class="smallLet">-クリニック-</span>
            <div class="hiddbox">
                <div class="hiddenleft hidcolor"></div>
                <div class="hiddenright hidcolor"></div>
            </div>
            <div class="box">
                <div class="boxleft"></div>
                <div class="boxright"></div>
            </div>
            <div class="line">
                <div id="topleft"></div>
                <div id="left"></div>
                <div id="bottomleft"></div>
                <div id="topright"></div>
                <div id="right"></div>
                <div id="bottomright"></div>
            </div>
        </h2>
        <div class="copy">
            全国主要都市から韓国まで、公正な調査の上で厳選された数々の技術力の高いクリニック様とご提携させて頂いております。<br>
            掲載クリニック様以外にも数多くのクリニック様とご提携しております。
        </div>
        <!-- <div class="clinic-list">
            <img class="kusano" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/kusano_clinic.png"
                 alt="くさのたろう clinic">
            <img class="sherie" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/sherie_clinic.png"
                 alt="SHERIE CLINIC">
            <img class="shibuya" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_shibuyanomori_2.png"
                 alt="渋谷の森クリニック">
            <img class="tkc" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_tkc-biyou.png"
                 alt="東京美容外科">
                 <img class="omotesando" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_omotesando-skin.jpg"
                 alt="表参道スキンクリニック">
            <img class="primo" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_primo.jpg"
                 alt="プリモ麻布十番クリニック">
        </div> -->


        <div class="clinic-slide">
            <div class="clinic-slide__item">
                <a href="<?php echo esc_url(get_permalink(189)); ?>" class="clinic-slide__item__inner">
                    <img class="kusano" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/kusano_clinic.png" alt="くさのたろう clinic">
                    <span>くさのたろう<br>clinic</span>
                </a>
            </div>
            <div class="clinic-slide__item">
                <a href="<?php echo esc_url(get_permalink(201)); ?>" class="clinic-slide__item__inner">
                    <img class="sherie" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/sherie_clinic.png" alt="SHERIE CLINIC">
                    <span>SHERIE<br>CLINIC</span>
                </a>
            </div>
            <div class="clinic-slide__item">
                <a href="<?php echo esc_url(get_permalink(381)); ?>" class="clinic-slide__item__inner">
                    <img class="shibuya" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_shibuyanomori_2.png" alt="渋谷の森クリニック">
                    <span>渋谷の森<br>クリニック</span>
                </a>
            </div>
            <div class="clinic-slide__item">
                <a href="<?php echo esc_url(get_permalink(3335)); ?>" class="clinic-slide__item__inner">
                    <img class="omotesando" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_bellefeel.svg" alt="Bellefeel クリニック">
                    <span>Bellefeel<br>クリニック</span>
                </a>
            </div>
            <div class="clinic-slide__item">
                <a href="<?php echo esc_url(get_permalink(3112)); ?>" class="clinic-slide__item__inner">
                    <img class="primo" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/sk_logo.jpg" alt="SK新宿歌舞伎町美容外科">
                    <span>SK新宿<br>歌舞伎町<br>美容外科</span>
                </a>
            </div>
            <div class="clinic-slide__item">
                <a href="<?php echo esc_url(get_permalink(220)); ?>" class="clinic-slide__item__inner">
                    <img class="tkc" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_tkc-biyou.png" alt="東京美容外科">
                    <span>東京<br>美容外科</span>
                </a>
            </div>
        </div>


        <div class="more-btn">
            <a href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>">MORE</a>
        </div>
    </section>
    </body>

    </html>

<?php else: ?>

    <!-- Pc layout -->
    <div class="fade">
        <div class="nav-wrappers">
            <div class="bgimg visual1"></div>
            <div class="bgimg visual2"></div>
        </div>
        <div class="des">美容専門のコンシェルジュが、<br>提供する「最高の美」</div>
        <div id="social-links">
            <a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=mLCQY0" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/line.png" alt="CHARME"></a>
            <a href="<?php echo esc_url(get_permalink(2)); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/email.png" alt="CHARME"></a>
        </div>
    </div>
    <section id="sec-news" class="animate" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <div class="container section">
            <div class="sec-title">
                <h2 class="title-en">TOPICS&nbsp;<span class="title-ja"> - お知らせ - </span></h2>

                <div class="box">
                    <div class="boxleft"></div>
                    <div class="boxright"></div>
                </div>
                <div class="hiddbox">
                    <div class="hiddenleft"></div>
                    <div class="hiddenright"></div>
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
            <?php
            $args = array(
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'post_type' => 'news',
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>
                <ul class="news">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
                            <a class="news-img" href="<?php esc_url(the_permalink()); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } else {
                                ?>
                                    <img class="placehoder" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/logo.svg" alt="CHARME">
                                <?php }
                                ?>
                            </a>
                            <div class="news-datetime">
                                <time datetime="<?php esc_html(the_time('Y.m.d')); ?>"><?php esc_html(the_time('Y.m.d')); ?></time>
                                <span>NEW</span>
                            </div>
                            <a class="news-title" href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></a>
                            <a class="readmore" href="<?php echo esc_url(get_post_type_archive_link('news')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more"></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <div class="news-btn"><a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">MORE TOPICS</a></div>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>

    <section id="column" class="animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="container section">
            <ul class="ul_column">
                <div class="container inner">
                    <li class="left">
                        <div class="sec-title">
                            <div class="tri_up">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/column_tri_up.png" alt="tri">
                            </div>
                            <div class="left_column">
                                <h2 class="title-en">COLUMN <span class="title-ja">-コラム-</span></h2>
                                <div>お得な情報やCHARMEならではのお役立ち情報を配信中 。</div>
                                <div class="btn_column"><a class="readmore" href="https://charme-beauty.jp/column"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-readmore.png" alt="read more"></a></div>
                            </div>
                            <!-- <div class="tri_bottom">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/column_tri_bottom.png" alt="tri">
                </div> -->
                        </div>
                    </li>

                    <li class="right">
                        <div class="right_image">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/column_image.png" alt="">
                        </div>
                    </li>
                </div>
            </ul>
        </div>
    </section>


    <section id="sec-sns" class="animate" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <div class="container section">
            <div class="sec-title">
                <h2 class="title-en">SNS&nbsp;<span class="title-ja">-公式SNSアカウント-</span></h2>

                <div class="box">
                    <div class="boxleft"></div>
                    <div class="boxright"></div>
                </div>
                <div class="hiddbox">
                    <div class="hiddenleft"></div>
                    <div class="hiddenright"></div>
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
            <div class="sec-des">
                CHARME公式SNSでは最新情報や、お得な情報を随時お届けしています。
            </div>
            <ul class="sns">
                <li><a href="https://www.instagram.com/concierge_charme/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/insta.png" alt="insta">@concierge_charme</a></li>
                <li><a href="https://www.tiktok.com/@charme.concierge?_t=8mHq6qDaRKJ&_r=1" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/tiktok-icon.png" alt="twitter">@charme.concierge</a></li>
            </ul>
        </div>
    </section>

    <section id="about" class="animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="container section">
            <div class="sec-title">
                <h2 class="title-en">ABOUT&nbsp;<span class="title-ja title-about"> - CHARMEとは - </span></h2>
                <div class="box">
                    <div class="boxleft"></div>
                    <div class="boxright"></div>
                </div>
                <div class="hiddbox ">
                    <div class="hiddenleft hiddencolor"></div>
                    <div class="hiddenright hiddencolor"></div>
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
            <div class="sec-des">
                美容整形や医療脱毛、審美歯科などに通いたいけれど、クリニックやサロンの選び方がわからない。そんなお悩みにお答えするのが、私たちCHARMEがご提案する美容コンシェルジュです。
                <div class="btn"><a class="readmore" href="<?php echo esc_url(get_permalink(1912)); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-readmore.png" alt="read more"></a></div>
            </div>
        </div>
        <!-- <ul class="services">
                <li>
                    <a href="<?php echo esc_url(get_permalink(38)); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/s1.png" alt="" class="img-full"></a>
                    <div class="title"><a href="<?php echo esc_url(get_permalink(38)); ?>">美容整形</a></div>
                    <div class="des">人気の埋没法やヒアルロン酸注入などのプチ整形や切開系施術、豊胸、タトゥー除去、渡韓による輪郭形成など、様々なお取り扱いがございます。</div>
                    <a class="readmore" href="<?php echo esc_url(get_permalink(38)); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more"></a>
                </li>
                <li>
                    <a href="<?php echo esc_url(get_permalink(40)); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/s2.png" alt="" class="img-full"></a>
                    <div class="title"><a href="<?php echo esc_url(get_permalink(40)); ?>">審美歯科</a></div>
                    <div class="des">欧米では歯の美しさは美男美女の必須条件とされています。今注目を浴びて<br>いるホワイトニングやセラミック施術、マウスピースやワイヤーによる歯列矯正 等をご紹介。</div>
                    <a class="readmore" href="<?php echo esc_url(get_permalink(40)); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more"></a>
                </li>
                <li>
                    <a href="<?php echo esc_url(get_permalink(28)); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/s3.png" alt="" class="img-full"></a>
                    <div class="title"><a href="<?php echo esc_url(get_permalink(28)); ?>">医療脱毛・アートメイク等</a></div>
                    <div class="des">医療脱毛は長期的に持続する脱毛効果、医師による診察やアフターケアがあることがメリットです。アートメイクでは顔の黄金比を測りながらご自身に合った眉を１本１本丁寧に描いていきます。その他エステや小顔矯正もご案内可能です。</div>
                    <a class="readmore"href="<?php echo esc_url(get_permalink(28)); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more"></a>
                </li>
                <li>
                    <a href="<?php echo esc_url(get_permalink(39)); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/s4.png" alt="" class="img-full"></a>
                    <div class="title"><a href="<?php echo esc_url(get_permalink(39)); ?>">メンズ医療</a></div>
                    <div class="des">女性のみならず男性も積極的に美容を行う時代です。美容整形はもちろん、 ア ートメイク、美肌治療、医療脱毛、審美歯科、AGA治療等ご案内可能です。</div>
                    <a class="readmore" href="<?php echo esc_url(get_permalink(39)); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more"></a>
                </li>

            </ul> -->

    </section>

    <!-- <section id="sec-services" class="animate" data-aos="fade-up"
          data-aos-anchor-placement="top-bottom">
        <div class="container section">
            <div class="sec-title">
          <h2 class="title-en">SERVICE&nbsp;<span class="title-ja"> -サービス- </span></h2>
           <div class="box">
            <div class="boxleft"></div>
            <div class="boxright"></div>
          </div>
          <div class="hiddbox">
            <div class="hiddenleft"></div>
            <div class="hiddenright"></div>
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
            <ul class="services">
                <li>
                    <a href="<?php echo esc_url(get_permalink(38)); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/s1.png" alt="" class="img-full"></a>
                    <div class="title"><a href="<?php echo esc_url(get_permalink(38)); ?>">美容整形</a></div>
                    <div class="des">人気の埋没法やヒアルロン酸注入などのプチ整形や切開系施術、豊胸、タトゥー除去、渡韓による輪郭形成など、様々なお取り扱いがございます。</div>
                    <a class="readmore" href="<?php echo esc_url(get_permalink(38)); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more"></a>
                </li>
                <li>
                    <a href="<?php echo esc_url(get_permalink(40)); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/s2.png" alt="" class="img-full"></a>
                    <div class="title"><a href="<?php echo esc_url(get_permalink(40)); ?>">審美歯科</a></div>
                    <div class="des">欧米では歯の美しさは美男美女の必須条件とされています。今注目を浴びて<br>いるホワイトニングやセラミック施術、マウスピースやワイヤーによる歯列矯正 等をご紹介。</div>
                    <a class="readmore" href="<?php echo esc_url(get_permalink(40)); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more"></a>
                </li>
                <li>
                    <a href="<?php echo esc_url(get_permalink(28)); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/s3.png" alt="" class="img-full"></a>
                    <div class="title"><a href="<?php echo esc_url(get_permalink(28)); ?>">医療脱毛・アートメイク等</a></div>
                    <div class="des">医療脱毛は長期的に持続する脱毛効果、医師による診察やアフターケアがあることがメリットです。アートメイクでは顔の黄金比を測りながらご自身に合った眉を１本１本丁寧に描いていきます。その他エステや小顔矯正もご案内可能です。</div>
                    <a class="readmore"href="<?php echo esc_url(get_permalink(28)); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more"></a>
                </li>
                <li>
                    <a href="<?php echo esc_url(get_permalink(39)); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/s4.png" alt="" class="img-full"></a>
                    <div class="title"><a href="<?php echo esc_url(get_permalink(39)); ?>">メンズ医療</a></div>
                    <div class="des">女性のみならず男性も積極的に美容を行う時代です。美容整形はもちろん、 ア ートメイク、美肌治療、医療脱毛、審美歯科、AGA治療等ご案内可能です。</div>
                    <a class="readmore" href="<?php echo esc_url(get_permalink(39)); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more"></a>
                </li>

            </ul>
        </div>
    </section> -->
    <section id="sec-case" class="animate" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <div class="section">
            <div class="container section">

                <div class="sec-title scroani">
                    <h2 class="title-en title-case">CASE&nbsp;<span class="title-ja">-症例-</span></h2>

                    <div class="casebox">
                        <div class="caseboxleft"></div>
                        <div class="caseboxright"></div>
                    </div>
                    <div class="casehiddbox">
                        <div class="casehiddenleft hiddencolor"></div>
                        <div class="casehiddenright hiddencolor"></div>
                    </div>
                    <div class="caseline">
                        <div id="casetopleft"></div>
                        <div id="caseleft"></div>
                        <div id="casebottomleft"></div>
                        <div id="casetopright"></div>
                        <div id="caseright"></div>
                        <div id="casebottomright"></div>
                    </div>
                </div>
                <?php
                $terms = get_terms(
                    array(
                        'taxonomy' => 'case_category',
                        'parent' => 0, // 親カテゴリのみを取得するために指定
                    )
                );
                if (!empty($terms) && !is_wp_error($terms)) {
                    echo '<ul class="casies">';
                    foreach ($terms as $term) {
                        $img = get_field('case_category-image', 'case_category_' . $term->term_id);
                        $link = str_replace('/case_category/', '/case/', get_term_link($term->term_id));
                ?>
                        <li>
                            <a href="<?php echo $link; ?>">
                                <img src="<?php echo $img; ?>" alt="<?php echo $term->name; ?>" />
                            </a>
                        </li>
                <?php
                    }
                    echo "</ul>";
                }
                ?>


            </div>


        </div>
    </section>
    <section id="sec-campaign" class="animate" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <div class="section">
            <div class="col-md-6">
                <!-- <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/campaign.png" alt="read more"> -->
                <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/campaign_bnr.jpg" alt="キャンペーンバナー"></a>
            </div>
            <div class="col-md-6">
                <div class="sec-content">
                    <div class="sec-title scroani">
                        <h2 class="title-en title-camp">CAMPAIGN&nbsp;<span class="title-ja title-campja">-キャンペーン-</span></h2>
                        <div class="campbox">
                            <div class="campboxleft"></div>
                            <div class="campboxright"></div>
                        </div>
                        <div class="camphiddbox">
                            <div class="camphiddenleft"></div>
                            <div class="camphiddenright"></div>
                        </div>
                        <div class="campline">
                            <div id="camptopleft"></div>
                            <div id="campleft"></div>
                            <div id="campbottomleft"></div>
                            <div id="camptopright"></div>
                            <div id="campright"></div>
                            <div id="campbottomright"></div>
                        </div>
                    </div>

                    <!-- <div class="des">お得なキャンペーンを随時更新中。</div>
                    <div class="btn"><a class="readmore" href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-readmore.png" alt="read more"></a></div> -->
                </div>
            </div>
        </div>
    </section>
    <section id="reason" class="animate" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <div class="container section">
            <div class="sec-title">
                <h2 class="title-en">REASON&nbsp;<span class="title-ja">-シャルムが選ばれる理由-</span></h2>

                <div class="box reabox">
                    <div class="boxleft realeft"></div>
                    <div class="boxright reaboxright"></div>
                </div>
                <div class="hiddbox">
                    <div class="hiddenleft reahiddenleft"></div>
                    <div class="hiddenright reahiddenright"></div>
                </div>
                <div class="line">
                    <div id="topleft"></div>
                    <div id="left"></div>
                    <div id="bottomleft"></div>
                    <div id="topright" class="reatopright"></div>
                    <div id="right" class="rearight"></div>
                    <div id="bottomright" class="reabottomright"></div>
                </div>
            </div>
            <div class="sec-des">お客さまの大切な体を優先することがCHARMEコンシェルジュの役割</div>
            <ul class="reason">
                <li>
                    <div class="img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/reason1.png" alt="read more"></div>
                    <h3 class="title"><span class="icon">#</span><span class="number">01</span>安心</h3>
                    <div class="des">CHARMEでは、すべてのクリニックさまと綿密に面談し提携先を選定しております。<br>大切なお身体を任せる上でよりお客さまの目線でクリニックさまと提携する事で安心して術後までご利用いただいております。</div>
                </li>
                <li>
                    <div class="img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/reason2.png" alt="read more"></div>
                    <h3 class="title"><span class="icon">#</span><span class="number">02</span>納得</h3>
                    <div class="des">CHARMEでは、すべてのクリニックさまと綿密に面談し提携先を選定しております。<br>大切なお身体を任せる上でよりお客さまの目線でクリニックさまと提携する事で安心して術後までご利用いただいております。</div>
                </li>
                <li>
                    <div class="img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/reason3.png" alt="read more"></div>
                    <h3 class="title"><span class="icon">#</span><span class="number">03</span>情報</h3>
                    <div class="des">CHARMEでは、すべてのクリニックさまと綿密に面談し提携先を選定しております。<br>大切なお身体を任せる上でよりお客さまの目線でクリニックさまと提携する事で安心して術後までご利用いただいております。</div>
                </li>

            </ul>
            <div class="readmore"><a href="<?php echo esc_url(get_permalink(17)); ?>">よくあるご質問はこちらから</a></a>
            </div>
    </section>
    <section id="sec-flow" class="animate" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <div class="container section">
            <div class="sec-title scroani">
                <h2 class="title-en">FLOW&nbsp;<span class="title-ja">-ご利用までの流れ-</span></h2>
                <div class="box">
                    <div class="boxleft"></div>
                    <div class="boxright"></div>
                </div>
                <div class="hiddbox">
                    <div class="hiddenleft hiddencolor"></div>
                    <div class="hiddenright hiddencolor"></div>
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
            <div class="sec-des">
                CHARMEをご利用するにあたっての、お問い合わせから施術までの流れをご説明いたします。担当コンシェルジュがお客様に合ったクリニックの提案をさせていただきます。
                <div class="btn"><a class="readmore" href="<?php echo esc_url(get_permalink(1503)); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-readmore.png" alt="read more"></a></div>
            </div>
        </div>
    </section>
    <!-- <section id="sec-voice" class="animate" data-aos="fade-up"
          data-aos-anchor-placement="top-bottom">
        <div class="container section">
		<div class="sec-title">
              <h2 class="title-en">VOICE&nbsp;<span class="title-ja">-お客様の声-</span></h2>
              <div class="box">
                <div class="boxleft"></div>
                <div class="boxright"></div>
              </div>
              <div class="hiddbox">
                <div class="hiddenleft"></div>
                <div class="hiddenright"></div>
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
            <div class="sec-des">
                CHARMEを実際にご利用いただいたインフルエンサーの方々のお声です。<br>初めて美容医療を受けられた方は勿論、すでに経験のある方まで多数のお喜びの声を頂いております。
            </div>
            <?php
            $args = array(
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'post_type' => 'voice',
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>
                <ul class="voices">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
                                <div class="img">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    } else {
                                    ?>
                                        <img src="<?php echo CFS()->get('top_images'); ?>" alt="">
                                    <?php }
                                    ?>
                                </div>
                                <div class="name"><?php echo CFS()->get('top_name'); ?></div>
                            </li>
                    <?php endwhile; ?>
                </ul>
                <?php
            endif;
            wp_reset_postdata();
                ?>
            <div class="readmore"><a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">その他のお客様からの声はこちらから</a></div>
        </div>
    </section> -->

    <!-- <section id="sec-interview" class="animate" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <div class="section">
            <div class="col-md-6">
                <div class="sec-content">
                    <div class="sec-title scroani">
                        <h2 class="title-en title-int">SPECIAL INTERVEIW&nbsp;<span class="title-ja">-インタビュー-</span></h2>

                        <div class="intbox">
                            <div class="intboxleft"></div>
                            <div class="intboxright"></div>
                        </div>
                        <div class="inthiddbox">
                            <div class="inthiddenleft"></div>
                            <div class="inthiddenright"></div>
                        </div>
                        <div class="intline">
                            <div id="inttopleft"></div>
                            <div id="intleft"></div>
                            <div id="intbottomleft"></div>
                            <div id="inttopright"></div>
                            <div id="intright"></div>
                            <div id="intbottomright"></div>
                        </div>
                    </div>
                    <div class="btn"><a class="readmore" href="<?php echo esc_url(get_permalink(1808)); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/btn-readmore.png" alt="read more"></a></div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/interview.png" alt="interview">
            </div>

        </div>
    </section> -->

    <section id="sec-clinic" class="animate" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <div class="container section">
            <div class="sec-title">
                <h2 class="title-en">CLINIC&nbsp;<span class="title-ja">-クリニック-</span></h2>
                <div class="box">
                    <div class="boxleft"></div>
                    <div class="boxright"></div>
                </div>
                <div class="hiddbox">
                    <div class="hiddenleft"></div>
                    <div class="hiddenright"></div>
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
            <div class="sec-des">
                全国主要都市から韓国まで、公正な調査の上で厳選された数々の技術力の高いクリニック様とご提携させていただいており ます。掲載クリニック様意外にも数多くのクリニック様とご提携しております。
            </div>
            <!-- <div class="list-clinic-logo-top">
	<div class="first"><a href="<?php echo esc_url(get_permalink(189)); ?>"><div class="logo logo-kusano-taro"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_kusano-taro.png" alt="くさのたろうクリニック"></div></a></div>
			<div class="first"><a href="<?php echo esc_url(get_permalink(201)); ?>"><div class="logo logo-sherie"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_sherieclinic.svg" alt="シェリークリニック"></div></a></div>
            <div class="first"><a href="<?php echo esc_url(get_permalink(381)); ?>"><div class="logo logo-shibuya"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_shibuyanomori_2.png" alt="渋谷の森クリニック"></div></a></div>
            <div class="second"><a href="<?php echo esc_url(get_permalink(220)); ?>"><div class="logo logo-tkc"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_tkc-biyou.png" alt="東京美容外科"></div></a></div>
            <div class="second"><a href="<?php echo esc_url(get_permalink(239)); ?>"><div class="logo logo-omotesando"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_omotesando-skin.jpg" alt="表参道スキンクリニック"></div></a></div>
            <div class="second"><a href="<?php echo esc_url(get_permalink(238)); ?>"><div class="logo logo-primo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_primo.jpg" alt="プリモ麻布十番クリニック"></div></a></div>
        </div> -->

            <div class="list-clinic-logo-top clinic-slide">
                <div class="first clinic-slide__item">
                    <a href="<?php echo esc_url(get_permalink(189)); ?>" class="clinic-slide__item__inner">
                        <div class="logo logo-kusano-taro">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_kusano-taro.png" alt="くさのたろうクリニック">
                        </div>
                        <span>くさのたろう<br>クリニック</span>
                    </a>
                </div>
                <div class="first clinic-slide__item">
                    <a href="<?php echo esc_url(get_permalink(201)); ?>" class="clinic-slide__item__inner">
                        <div class="logo logo-sherie">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_sherieclinic.svg" alt="シェリークリニック">
                        </div>
                        <span>シェリー<br>クリニック</span>
                    </a>
                </div>
                <div class="first clinic-slide__item">
                    <a href="<?php echo esc_url(get_permalink(381)); ?>" class="clinic-slide__item__inner">
                        <div class="logo logo-shibuya">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_shibuyanomori_2.png" alt="渋谷の森クリニック">
                        </div>
                        <span>渋谷の森<br>クリニック</span>
                    </a>
                </div>
                <div class="second clinic-slide__item">
                    <a href="<?php echo esc_url(get_permalink(3335)); ?>" class="clinic-slide__item__inner">
                        <div class="logo logo-omotesando">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_bellefeel.svg" alt="Bellefeelクリニック">
                        </div>
                        <span>Bellefeel<br>クリニック</span>
                    </a>
                </div>
                <div class="second clinic-slide__item">
                    <a href="<?php echo esc_url(get_permalink(3112)); ?>" class="clinic-slide__item__inner">
                        <div class="logo logo-primo">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/sk_logo.jpg" alt="SK新宿歌舞伎町美容外科・歯科">
                        </div>
                        <span>SK新宿<br>歌舞伎町<br>美容外科</span>
                    </a>
                </div>
                <div class="second clinic-slide__item">
                    <a href="<?php echo esc_url(get_permalink(220)); ?>" class="clinic-slide__item__inner">
                        <div class="logo logo-tkc">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_tkc-biyou.png" alt="東京美容外科">
                        </div>
                        <span>東京美容外科</span>
                    </a>
                </div>
            </div>

            <div class="readmore"><a href="<?php echo esc_url(get_post_type_archive_link('clinic')); ?>">その他の提携クリニックはこちらから</a></div>
        </div>
    </section>
<?php endif; ?>

<!-- End Pc layout -->


<!-- slide js -->
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script type="text/javascript">
    (function($) {
        $('.clinic-slide').slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '0px',
            // autoplay: true,
            autoplaySpeed: 4000,
        });
    })(jQuery);
</script>
<!-- end slide js -->

<?php get_footer(); ?>
