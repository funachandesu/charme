<?php

/**
 * Template Name: flow
 */
?>
<?php get_header(); ?>

<!-- <section id="case-content" class="top-section">
        <div class="container">
            <div class="sec-title">
                <h2 class="title-en">FLOW</h2>
                <h3 class="title-ja">ご利用までの流れ</h3>
            </div>
        </div>
    </section> -->

<section id="case-content" class="top-section">
    <div class="container">
        <div class="animate" data-aos="fade-up"
            data-aos-anchor-placement="top-bottom">

            <div class="sec-title scroani">
                <h2 class="title-en title-case">FLOW&nbsp;<span class="title-ja">-よくあるご質問-</span></h2>

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

<div class="back-flow">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/btn-back.png" alt="back">
        </a>
    </div>
</div>

<div class="sec-flow">
    <div class="sec-in">
        <ol class="list-flow">
            <li>
                <div class="icon">
                    <i class="ico ico-flow1"></i>
                    <div class="flow_tittle">01.お問い合わせ</div>
                </div>
                <div class="li-in flow_list">
                    <p class="txt">
                        まずは下記フォームよりお問い合わせください。<br>
                        <a href="<?php echo esc_url(get_permalink(2)); ?>" class="">お問い合わせはこちら</a><br>
                        相談料はもちろん無料です。気になるクリニックや気になる施術、その他何でも構いませんので、気軽にお問い合わせ下さい。
                    </p>
                    <div class="contact-flow">
                        <div class="contact-pc-line-flow">
                            <p>ラインからのお問い合わせはこちら</p>
                            <button class="contact-btn"><a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=mLCQY0">LINE＠</a></button>
                        </div>
                        <div class="contact-pc-mail-flow">
                            <p>メールでのお問い合わせはこちら</p>
                            <button class="contact-btn"><a href="<?php echo esc_url(get_permalink(2)); ?>" class="btn-flex btn-contact">CONTACT FORM</a></button>
                        </div>
                    </div>
                </div>
                <img class='flow-arrow' src="<?php echo get_template_directory_uri(); ?>/imgs/flow/flow-arrow.png">
            </li>
            <li>
                <div class="icon">
                    <i class="ico ico-flow2"></i>
                    <p class="flow_tittle">02.ご返信<br class="sp"><span>（コンシェルジュよりご連絡）</span></p>
                </div>
                <div class="li-in flow_list">
                    <p class="txt">
                        順番にコンシェルジュからご返信させて頂きます。（基本的には当日のご返信です）<br>
                        一人一人のご相談内容をしっかりと確認させて頂きます。その後、担当のコンシェルジュからご連絡が入りますので、納得行くまでご相談下さい。
                    </p>
                </div>
                <img class='flow-arrow' src="<?php echo get_template_directory_uri(); ?>/imgs/flow/flow-arrow.png">
            </li>

            <li>
                <div class="icon">
                    <i class="ico ico-flow3"></i>
                    <div class="flow_tittle">03.ヒアリング<br class="sp"><span>（お客様に最適なクリニックをご紹介します）</span></div>
                </div>
                <div class="li-in flow_list">
                    <p class="txt">
                        コンシェルジュからご連絡が入りましたら何でも相談してみて下さい。<br>
                        施術の事、クリニックの事、お値段の事、お客様が気になる事は何でもお答えさせて頂きます。大事なお体の事ですので、細部にわたるまでしっかりとご相談に乗らせて頂きます。
                    </p>
                </div>
                <img class='flow-arrow' src="<?php echo get_template_directory_uri(); ?>/imgs/flow/flow-arrow.png">
            </li>
            <li>
                <div class="icon">
                    <i class="ico ico-flow4"></i>
                    <div class="flow_tittle">04.カウンセリング</div>
                </div>
                <div class="li-in flow_list">
                    <p class="txt">
                        実際にカウンセリングに行きます。<br>
                        提携先は沢山ありますので、何店舗でもカウンセリングを受けて頂いて大丈夫です。カウンセリングに行く事によって、今までの自分の想像が変わる事もありますので、納得するまでいろんなクリニックでカウンセリングを受けて頂く事をオススメします。カウンセリング後、聞きづらかった事、気になった事等は再度コンシェルジュかにご相談して下さい。しっかりとご返答します。<br>
                        <!-- <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="">症例が気になる方はこちら</a> -->
                    </p>
                </div>
                <img class='flow-arrow' src="<?php echo get_template_directory_uri(); ?>/imgs/flow/flow-arrow.png">
            </li>
            <li>
                <div class="icon">
                    <i class="ico ico-flow5"></i>
                    <div class="flow_tittle">05.クリニックで施術</div>
                </div>
                <div class="li-in flow_list">
                    <p class="txt">カウンセリング後、納得出来るクリニックが有りましたら施術して頂きます。クリニックよってはシャルム特別割引等も用意してます。</p>
                </div>

            </li>
        </ol>

    </div>
</div>
<?php if (is_mobile()) : ?>
<?php else: ?>
    <div id="contact-pc">
        <h2>CONTACT US</h2>
        <h3 class='title-ja'>お気軽にお問い合わせください</h3>
        <div class='contact'>
            <div class="contact-pc-line">
                <p>ラインからのお問い合わせはこちら</p>
                <button class="contact-btn"><a href="https://s.lmes.jp/landing-qr/2006662795-da8zjpjr?uLand=mLCQY0">LINE＠</a></button>
            </div>
            <div class="contact-pc-mail">
                <p>メールでのお問い合わせはこちら</p>
                <button class="contact-btn"><a href="<?php echo esc_url(get_permalink(2)); ?>" class="btn-flex btn-contact">CONTACT FORM</a></button>
            </div>
        </div>
        <h2><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/top/line_title.png" alt="LINE公式アカウント"></h2>
    </div>
<?php endif; ?>

<?php get_template_part('content', 'footer-contact'); ?>

<?php get_footer(); ?>