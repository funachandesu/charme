<?php
/**
 * Template Name: sp
 */
?>
<?php get_header(); ?>

	<div class="tit-page"><div class="tit-page-in">
		<div class="en">Special</div>
		<h2>特集ページ</h2>
	</div></div>

<?php if (function_exists('yoast_breadcrumb')) : ?>
	<div class="sec-breadcrumbs"><div class="sec-in">
<?php yoast_breadcrumb('<p>', '</p>'); ?>
	</div></div>
<?php endif; ?>

	<div class="sec-voice"><div class="sec-in-s">
		<p>先日kunoクリニックさんの公開施術撮影会へ行ってきました！</p><br>
		<p> モニターの方は53歳の女性で、今回の施術内容は最先端の若返り治療。<br><br>上まぶたの脱脂術・顔の脂肪吸引・お腹の脂肪吸引・採取した脂肪や<br>脂肪幹細胞を使った肌の再生を組合せたオーダーメイド治療です。 </p><br><br>
		<figure class="wp-block-image size-large"><img src="https://charme-beauty.jp/wp-content/uploads/IMG_7117.jpg" alt="" class="wp-image-263"/></figure>
		<br><p> 先ず、お顔と身体に脂肪を取るデザインを描き、<br>PRPや脂肪を注入する箇所に細かくデザインを描いていきます。<br><br>手術は上眼瞼眼窩脂肪の脱脂術から。<br>まぶたの脱脂をすることで目元がスッキリとし開きも良くなり若々しい印象をあたえます。<br><br>モニターの方が安心できるよう声をかけながらも、あっという間に脂肪を摘出しており手際の良さに驚きました！ </p><br><br>
		<figure class="wp-block-image size-large"><img src="https://charme-beauty.jp/wp-content/uploads/IMG_7118.jpg" alt="" class="wp-image-264"/></figure>
		<p> 次に、お顔の脂肪吸引とお腹の脂肪吸引では、全身麻酔の併用も可能ですが、今回はモニター様の御希望で注射での局所麻酔→管で麻酔を注入→脂肪吸引という流れで行います。<br>管で麻酔薬を注入することによって凸凹を予防しつつ出血が抑えられるようです。 </p><br>
		<p> お顔の脂肪を取るだけでなく、タルミをリフトアップさせて固定することで頬やフェイスラインがシャープになり老け顔の原因が限りなく減少します。<br><br>九野先生ご自身の指先が高性能なセンサーのようになっていて、超繊細な技術を駆使して㎜単位で脂肪吸引を行って下さいます★ </p><br><br>
		<figure class="wp-block-image size-large"><img src="https://charme-beauty.jp/wp-content/uploads/IMG_7119.jpg" alt="" class="wp-image-265"/></figure>
		<p> 今回のモニターの方は過去に他院で唇に異物を注入され、従来では難しくてできなかった摘出も行いました。<br>脂肪吸引後その脂肪から九野先生が独自で開発された方法で脂肪幹細胞を摘出していきます。<br><br>脂肪幹細胞は、いわば0歳の赤ちゃん細胞ですが、そのままではあまり効果を引き出せません。<br>そこにPRPと栄養成分の入ったkunoクリニックオリジナルのプレミアムを適量混和してお顔に注入していきます！ </p><br>
		<p> PRPはご自身の血液中に含まれる血小板を使っているので安全性が高いものとなり、脂肪幹細胞や各種細胞に刺激を与え、元気にして成長や分化、増殖させる成分が含まれています。<br><br>目の周りやシワが気になる皮膚の薄い箇所に、脂肪幹細胞と共に職人技術で注入していくことで、メスを用いずにシワやタルミを減少させた綺麗なお肌になっていくのです！ </p><br><br>
		<figure class="wp-block-image size-large"><img src="https://charme-beauty.jp/wp-content/uploads/IMG_7120.jpg" alt="" class="wp-image-266"/></figure>
		<p> 最後に、先程の脂肪幹細胞とPRPとプレミアムに、摘出した脂肪を混ぜたものをおでこやほうれい線などのシワ・溝・クボミ箇所と、ボリュームを出したい箇所にそれぞれ適量注入します。<br><br>顔面の影の部分を無くしつつ、前額や頬等はハリのあるふっくらしたお顔に仕上がります。<br><br>脂肪はヒアルロン酸とは違い溶かせないので、人工知能の様な正確な予見と微調整ができる腕が良い先生でないと難しい施術内容なんです！！ </p><br><br>
		
	<p>お顔のバランスを見ながら細かく注入していき、最後に脂肪吸引をした頬下部から下顎部に圧迫のバンドをつけ施術終了です。<br><br>これから徐々に腫れも収まっていき大体3か月後に完成のようです。施術直後は腫れもありましたが、既に若々しくなったように見えました。</p><br><br>
		
		<p>九野先生にしかできない技術や手際の良さを拝見でき、とても貴重な経験をさせて頂きました！　<br><br>このオリジナルの再生医療には他院では真似ができないkunoクリニック独自の技術がたくさん詰め込まれています。</p><br><br>
		
		<p>九野先生本日はお時間頂きありがとうございました＾＾<br><br>
興味がある方や気になった方はぜひお問合せ下さい！</p><br><br><br>

<?php
	$args = null;
	$args = array(
		'posts_per_page' => -1,
		'post_status' => 'publish',
		'post_type' => 'voice',
	);
	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) : 
?>
		
<?php endif; ?>
	</div></div>

<?php get_template_part('content', 'footer-contact'); ?>
	
<?php get_footer(); ?>