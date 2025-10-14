<?php

/**
 * Template Name: company
 */
?>
<?php get_header(); ?>

<!-- <section id="case-content" class="top-section">
        <div class="container">
            <div class="sec-title">
                <h2 class="title-en">COMPANY</h2>
                <h3 class="title-ja">運営会社</h3>
            </div>
        </div>
    </section> -->
<section id="case-content" class="top-section">
	<div class="container">
		<div class="animate" data-aos="fade-up"
			data-aos-anchor-placement="top-bottom">

			<div class="sec-title scroani">
				<h2 class="title-en title-camp">COMPANY&nbsp;<span class="title-ja title-campja">-運営会社-</span></h2>

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

<div class="sec-company">
	<div class="sec-in-s">
		<dl class="dl-company">
			<!-- <dt>法人番号</dt>
			<dd>0128-01-019548</dd> -->
			<dt>商号</dt>
			<dd>株式会社CHARME
				<!-- <a href="https://rise-beauty.jp/" target="_blank">https://rise-beauty.jp/</a></dd> -->
			<dt>代表取締役</dt>
			<dd>保良綾乃</dd>
			<!-- <dt>住所</dt>
			<dd>〒190-0022 東京都立川市錦町2-5-1 K'Sビル3F</dd> -->
			<dt>メールアドレス</dt>
			<dd><a href="mailto:&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#64;&#99;&#104;&#97;&#114;&#109;&#101;&#45;&#98;&#101;&#97;&#117;&#116;&#121;&#46;&#106;&#112;">&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#64;&#99;&#104;&#97;&#114;&#109;&#101;&#45;&#98;&#101;&#97;&#117;&#116;&#121;&#46;&#106;&#112;</a></dd>
			<dt>URL</dt>
			<dd><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_url(home_url('/')); ?></a></dd>
			<!-- <dt>提携先</dt>
			<dd>
				<ul>
					<li>東京美容外科系列全般</li>
					<li>アテナクリニック</li>
					<li>クサノタロウクリニック</li>
					<li>フィラークリニック系列全般</li>
					<li>グロウクリニック系列全般</li>
					<li>シェリークリニック</li>
					<li>ヴェリテクリニック</li>
					<li>プリモ麻布十番</li>
					<li>TAクリニック系列全般</li>
					<li>コムロクリニック系列全般</li>
					<li>札幌ルトロワクリニック</li>
					<li>表参道スキンクリニック</li>
					<li>井の頭審美歯科</li>
					<li>ラ ルージュデンタルクリニック</li>
					<li>ダビデクリニック</li>
					<li>ジュエルクリニック</li>
					<li>その他多数</li>
				</ul>
			</dd> -->
			<dt>弁護士</dt>
			<dd>大藏法律事務所<br>
				大藏 久宣<br>
				東京都府中市寿町2-3-1 レールサイド寿2階</dd>
		</dl>
	</div>
</div>

<?php get_template_part('content', 'footer-contact'); ?>

<?php get_footer(); ?>
