<?php
/**
 * Template Name: about
 */
?>
<?php get_header(); ?>

<style type="text/css">
body,div {
   margin: 0;
   padding: 0;
   border:0;
}
</style>

<div class="about-page">
        <div class="about-block1"><div class="container">
            <div class="back"><a href="<?php echo esc_url(home_url('/')); ?>"><img class="back-btn" src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/about/btn-back-white.png" alt="back"></a></div>
            <div class="sec-title">
                <h2 class="title-en-about">ABOUT</h2>
                <h3 class="title-ja-about1">美容コンシェルジュとは</h3>
            </div>
            <div class="about-content1">
                <p>
                美容整形や医療脱毛、審美歯科などに通いたいけれど、クリニックやサロンの選び方がわからない。<br>
                そんなお悩みにお答えするのが、私たちCHARMEがご提案する美容コンシェルジュです。<br>
                昨今の美容ブームにより、自分磨きや綺麗になることが当たり前になってきた時代の流れと共に、美容クリニックやサロン数は右肩上がりに増えてきています。
                膨大なクリニックの中から、ご自身で自分にちゃんと合ったクリニックを探すのはなかなか難しくなってきています。
                特に初めてクリニックをお選びになる方は不安がたくさんあるかと思います。
            </p></div></div>
        </div>
        <div class="about-block2"><div class="container">
        <div class="sec-title">
            <h3 class="title-ja-about2">
                あなたの「もっと美しくなりたい」を<br>
                全力でお手伝いいたします
            </h3>
            </div>
            <div class="about-content2">
                <p>
                    CHARMEでは、そんなお客さまの悩みや願望、ご予算や通院に関するさまざまな要望に対し、
                    お客さま一人ひとりに寄り添いしっかりと時間をかけてヒアリングをさせていただくことで、お客さまに合ったクリニックをご紹介させていただきます。
                </p>
                <p>
                    CHARMEは、有名クリニックや実績・対応の良いクリニックと数多くご提携させていただいておりますのでご安心ください。<br>
                    お客さまの大切な身体を第一に考えたご提案をしっかりとさせていただきます。
                </p>
            </div>
        </div>
    </div></div>
</div>

<?php get_template_part('content', 'footer-contact'); ?>

<?php get_footer(); ?>
