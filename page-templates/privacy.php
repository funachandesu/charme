<?php
/**
 * Template Name: privacy
 */
?>
<?php get_header(); ?>

<!-- <section id="case-content" class="top-section">
        <div class="container">
            <div class="sec-title">
                <h2 class="title-en">PRIVACY POLICY</h2>
                <h3 class="title-ja">プライバシーポリシー</h3>
            </div>
        </div>
    </section> -->
    <section id="case-content" class="top-section">
    <div class="container">
    <div class="animate" data-aos="fade-up"
          data-aos-anchor-placement="top-bottom">

            <div class="sec-title scroani">
              <h2 class="title-en title-camp">PRIVACY&nbsp;<span class="title-ja title-campja">-プライバシーポリシー-</span></h2>

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
    </div>
</section>

    <div class="back">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/common/btn-back.png" alt="back">
            </a>
        </div>
    </div>

	<div class="sec-privacy"><div class="sec-in-s-privacy">
		<p class="txt-privacy-content">個人情報漏えい防止のため、下記の個人情報保護方針に従い適正に管理しております。</p>
		<section class="sec-privacy-in">
			<h3 class="tit-privacy">収集目的</h3>
			<p class="txt-privacy">シャルムコンシェルジュサービスでは、お問い合わせ・お申込みに際し、必要な範囲内で個人情報の提供をお願いしております。<br>
			お客様がご入力されたメールアドレス等は、本サービス内のご利用に限らせていただいております。</p>
		</section>
		<section class="sec-privacy-in">
			<h3 class="tit-privacy">第三者への提供</h3>
			<ul class="list-privacy">
                <li>お問い合わせ・お申込みいただいた方の同意なく、個人情報を第三者に提供することはございません。<br>
			ただし、次の場合には、あらかじめご本人の同意を得ることなく、個人情報を第三者に提供することがありますので、あらかじめご了承ください。</li>
				<li>法令に基づく場合</li>
				<li>人の生命、身体又は財産の保護のために必要がある場合であって、ご本人の同意を得ることが困難である場合</li>
				<li>公衆衛生の向上又は児童の健全な育成の推進のために特に必要がある場合であって、ご本人の同意を得ることが困難である場合</li>
				<li>国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する場合であって、ご本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがある場合</li>
			</ul>
		</section>
		<section class="sec-privacy-in">
			<h3 class="tit-privacy">第三者への委託</h3>
			<p class="txt-privacy">利用目的の達成に必要な範囲内において、他の事業者へ個人情報を委託することがあります。この場合には、個人情報保護体制が整備された委託先を選定するとともに、個人情報保護に関する契約を締結いたします。</p>
		</section>
		<section class="sec-privacy-in">
			<h3 class="tit-privacy">個人情報に関するお問い合わせ</h3>
			<p class="txt-privacy">お問い合わせいただいた方の個人情報について、ご本人から開示・訂正・削除を求められたときは、ご本人確認の上、弊社にて速やかに対応いたします。<br>
			個人情報に関するお問い合わせ・ご相談は下記にてお受けいたします。</p>
			<p class="txt-privacy txt-contact">シャルムコンシェルジュサービス<br>
			担当者：個人情報保護管理者</p>
		</section>
	</div></div>

<?php get_template_part('content', 'footer-contact'); ?>

<?php get_footer(); ?>
