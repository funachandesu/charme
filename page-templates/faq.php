<?php
/**
 * Template Name: faq
 */
?>
<?php get_header(); ?>

<!-- <section id="case-content" class="top-section">
        <div class="container">
            <div class="sec-title">
                <h2 class="title-en">FAQ</h2>
                <h3 class="title-ja">よくあるご質問</h3>
            </div>
        </div>
    </section> -->

    <section id="case-content" class="top-section">
    <div class="container">
    <div class="animate" data-aos="fade-up"
          data-aos-anchor-placement="top-bottom">

            <div class="sec-title scroani">
            <h2 class="title-en">FAQ&nbsp;<span class="title-ja">-よくあるご質問-</span></h2>
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
</section>

    <div class="back">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/btn-back.png" alt="back">
            </a>
        </div>
    </div>
	<div class="sec-faq"><div class="sec-in">
        <dl>
			<dt class="faq"><div class="faq-before">Q1</div>一人でクリニックに行くのが不安なんですが・・・。
            <div><span class="faq-span1"></span></div>
            </dt>
			<dd class="faq-answer"><div class="answer-before">A1</div>当社美容コンシェルジュが同行までサポートさせて頂きます。（※一部地域では同行でのご案内が出来ない場合もあります。）</dd>
			<dt class="faq"><div class="faq-before">Q2</div>相談料は無料ですか？また、利用した場合は料金が発生しますか？
            <div><span class="faq-span2"></span></div>
            </dt>
			<dd class="faq-answer"><div class="answer-before">A2</div>CHARMEではご相談は全て無料にて行わせて頂いております。気になる些細なことでも是非ご相談くださいませ。また、ご利用に際しての料金も発生致しませんのでお客様のご負担は御座いません。安心してご相談ください。</dd>
			<dt class="faq"><div class="faq-before">Q3</div>利用者特典などはありますか？
            <div><span class="faq-span3"></span></div>
            </dt>
			<dd class="faq-answer"><div class="answer-before">A3</div>はい。御座います。内容にもよりますが、当社とクリニック様の特別な割引サービスも多数ご用意いたしております。また、無料クーポンやモニターのご案内などもさせて頂いております。（無料クーポンは常時では御座いません。キャンペーン等々をご確認くださいませ。）</dd>
			<dt class="faq"><div class="faq-before">Q4</div>提携しているクリニックの地域はどこですか？
            <div><span class="faq-span4"></span></div>
            </dt>
			<dd class="faq-answer"><div class="answer-before">A4</div>基本的に全国の当社が厳選したクリニック様と提携を結ばせて頂いております。日々、コンシェルジュがクリニック様の開拓を行っておりますが、地域によってはお近くにない場合もございますので、併せてご相談いただけますと幸いです。</dd>
			<dt class="faq"><div class="faq-before">Q5</div>利用可能な年齢、性別はありますか？
            <div><span class="faq-span5"></span></div>
            </dt>
			<dd class="faq-answer"><div class="answer-before">A5</div>20歳未満の方から高齢者、男女問わずご相談可能です。<br>
			近年、男性のお客さまも多数お問い合わせをいただいております。</dd>
			<dt class="faq"><div class="faq-before">Q6</div>施術料金はいくらですか？
            <div><span class="faq-span6"></span></div>
            </dt>
			<dd class="faq-answer"><div class="answer-before">A6</div>提携先クリニックによって金額がそれぞれ異なります。<br>詳細に関しましてはコンシェルジュまでお問合せ下さい。</dd>
			<dt class="faq"><div class="faq-before">Q7</div>医療ローンは対応してますか？
            <div><span  class="faq-span7"></span></div>
            </dt>
			<dd class="faq-answer"><div class="answer-before">A7</div>一部医療ローンのお取り扱いが無いクリニックもございます。<br>詳細に関しましては弊社までお問合せ下さい。</dd>
			<dt class="faq"><div class="faq-before">Q8</div>当日施術は可能ですか？
            <div><span class="faq-span8"></span></div>
            </dt>
			<dd class="faq-answer"><div class="answer-before">A8</div>注入治療、美肌治療、ホワイトニング、アートメイクでしたらご対応可能です。</dd>
			<dt class="faq"><div class="faq-before">Q9</div>コンシェルジュは医師免許を持っていますか？
            <div><span class="faq-span9"></span></div>
            </dt>
			<dd class="faq-answer"><div class="answer-before">A9</div>当社コンシェルジュは医師免許を持ち合わせておりません。当社コンシェルジュはあくまでお客さまの相談役としてクリニック様との連絡窓口やご相談内容の精査及び適応クリニック選定を行う立場でございます。無理なあっせんや勧誘は決して行わない公平な立場としてお客さまの大切な身体を第一に考える相談役として活用頂けますと幸いです。</dd>
		</dl>


	</div></div>

<?php get_template_part('content', 'footer-contact'); ?>

<?php get_footer(); ?>
