<?php
/**
 * Template Name: clinic
 */
?>
<?php get_header(); ?>

	<div class="tit-page"><div class="tit-page-in">
		<div class="en">CLINIC</div>
		<h2>クリニックのご紹介</h2>
	</div></div>

<?php if (function_exists('yoast_breadcrumb')) : ?>
	<div class="sec-breadcrumbs"><div class="sec-in">
<?php yoast_breadcrumb('<p>', '</p>'); ?>
	</div></div>
<?php endif; ?>

	<div class="sec-clinic"><div class="sec-in">
		<ul class="list-clinic-one">
			<li>
				<div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_athena.svg" alt="銀座アテナクリニック" class="logo-athena"></div>
				<div class="title">銀座アテナクリニック</div>
				<div class="content">
					<p class="txt">アテナクリニックの定村先生は美容整形の業界では有名です。<br>
					施術に関して上手で年間で2,000件以上も施術をこなしており20年以上も美容外科医を経験されているベテランの先生で指導医としても活躍されてます。
					施術においても、整形している顔ではなく自然体な仕上がりになることが特徴です。<br>
					もちろん、お客様の要望がございましたら柔軟にご対応して頂けます。<br>
					そして、お客様のご相談内容について親身になってご相談に乗ってくれますので弊社のご紹介したお客様は皆様アテナクリニックさんでカウンセリングを受けた後は施術をされておりスタッフの皆様のご対応もすごく丁寧でアフターケアも万全なのでリピートをする方が非常に多いです。<br>
					また他のクリニックではして頂けない施術方法を駆使して、お客様の理想に近づけるクリニックです。<br>
					切らない施術はもちろん、他院修正や切る施術はダントツに症例が豊富で豊胸に関しては性転換の方も、かなりの施術をされているので、豊胸の腕はお墨付きです。<br>
					リフトアップ、目、鼻、輪郭に関しても全て網羅しています。</p>
				</div>
				<div class="btn-clinic"><a href="<?php echo esc_url(get_permalink(67)); ?>">クリニック詳細を見る</a></div>
			</li>
		</ul>
		<hr class="hr-clinic">
		<h3 class="tit-clinic-other">その他ご提携クリニック</h3>
		<ul class="list-clinic list-clinic-second">
			<li><a href="<?php echo esc_url(get_permalink(189)); ?>"><div class="logo logo-kusano-taro"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_kusano-taro.png" alt="くさのたろうクリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(249)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_d-biyou.jpg" alt="Kunoクリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(224)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_inokashila.png" alt="井の頭矯正歯科・審美歯科"></div></a></li>
<?php /*
			<li><a href="<?php echo esc_url(get_permalink(211)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_glow-clinic.png" alt="GLOWクリニック"></div></a></li>
*/ ?>
		</ul>
		<hr class="hr-clinic">
		<ul class="list-clinic list-clinic-third">
			<li><a href="<?php echo esc_url(get_permalink(239)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_omotesando-skin.jpg" alt="表参道スキンクリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(201)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_sherieclinic.svg" alt="シェリークリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(225)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_idhospital.svg" alt="id美容クリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(222)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_komuroclinic.png" alt="コムロクリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(203)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_labouche.png" alt="ラ・ブージュデンタルクリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(231)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_womclinic.jpg" alt="WOMクリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(209)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_aoyamajewel-c.png" alt="ジュエルクリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(220)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_tkc-biyou.png" alt="東京美容外科"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(210)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_efiller.png" alt="フィラークリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(206)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_davideclinic.png" alt="ダビデクリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(207)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_tokyobeauty.png" alt="東京ビューティークリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(208)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_agaskin.png" alt="AGAスキンクリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(227)); ?>"><div class="logo logo-idhospital2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_idhospital2.jpg" alt="id美容外科"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(233)); ?>"><div class="logo logo-lilas"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_lilas.jpg" alt="リリアクリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(228)); ?>"><div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_slbc-vogue.png" alt="札幌ル・トロワビューティクリニックVogue"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(176)); ?>"><div class="logo logo-taclinic"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_taclinic.png" alt="銀座TAクリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(232)); ?>"><div class="logo logo-glanzclinic"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_glanz-clinic.png" alt="グランツクリニック"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(291)); ?>"><div class="logo logo-kogaokagaku"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_kogaokagaku.jpg" alt="小顔化学研究所"></div></a></li>
			<li><a href="<?php echo esc_url(get_permalink(361)); ?>"><div class="logo logo-privateclinicebisu"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_private-clinic-ebisu.jpg" alt="プライベートクリニック恵比寿"></div></a></li>
		</ul>

		<hr class="hr-clinic">
		<ul class="list-clinic list-clinic-fourth">
			<li>
				<div class="content">
					<div class="title"><a href="<?php echo esc_url(get_permalink(237)); ?>">ヴェリテクリニック</a></div>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="title"><a href="<?php echo esc_url(get_permalink(238)); ?>">プリモ麻布十番クリニック</a></div>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="title"><a href="<?php echo esc_url(get_permalink(240)); ?>">清美会クリニック</a></div>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="title"><a href="<?php echo esc_url(get_permalink(241)); ?>">銀座白山クリニック</a></div>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="title"><a href="<?php echo esc_url(get_permalink(242)); ?>">牧野美容クリニック</a></div>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="title"><a href="<?php echo esc_url(get_permalink(243)); ?>">ウォンジン整形外科</a></div>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="title"><a href="<?php echo esc_url(get_permalink(244)); ?>">オズクリニック</a></div>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="title"><a href="<?php echo esc_url(get_permalink(245)); ?>">ゆめビューティクリニック</a></div>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="title"><a href="<?php echo esc_url(get_permalink(246)); ?>">クールホワイトデンタルクリニック</a></div>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="title"><a href="<?php echo esc_url(get_permalink(247)); ?>">銀座マロニエ歯科</a></div>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="title"><a href="<?php echo esc_url(get_permalink(248)); ?>">いけやま歯科</a></div>
				</div>
			</li>
		</ul>
	</div></div>

<?php get_template_part('content', 'footer-contact'); ?>
	
<?php get_footer(); ?>