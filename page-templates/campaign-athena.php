<?php
/**
 * Template Name: campaign-athena
 */
?>
<?php get_header(); ?>

	<div class="tit-page"><div class="tit-page-in">
		<div class="en">CAMPAIGN</div>
		<h2>キャンペーン</h2>
	</div></div>

<?php if (function_exists('yoast_breadcrumb')) : ?>
	<div class="sec-breadcrumbs"><div class="sec-in">
<?php yoast_breadcrumb('<p>', '</p>'); ?>
	</div></div>
<?php endif; ?>

	<article class="article"><div class="sec-in">
		<div class="header">
			<div class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo_athena.svg" alt="銀座アテナクリニック" class="logo-athena"></div>
			<div class="name">銀座アテナクリニック</div>
		</div>
		<div class="content">
			<p class="txt txt-content">東京のみならず、日本国内でトップクラスの人気を誇るクリニックになります。<br>
			院長の定村（じょうむら）先生は、美容整形業界では知らない人はいないです。有名アイドルグループやモデルなど、芸能人も多数来院や通院をしているクリニックです。大人気クリニックのためカウンセリングの予約も取り辛く、予約を取るのも難しいクリニックになります。<br>
			弊社はカウンセリングの優先枠もありますので是非この機会にカウンセリングだけでも行ってみてはいかがですか？</p>
			
			<table class="table">
				<tr class="thead">
					<th>内容</th>
					<th>キャンペーン価格</th>
				</tr>
				<tr>
					<th>目の全切開</th>
					<td>
						<div class="campaign">
							<span class="off">25%off</span>
							<span class="normal">300,000円</span>
							<span class="arrow"></span>
							<span class="discount">225,000円</span>
						</div>
					</td>
				</tr>
				<tr>
					<th>脂肪吸引<br class="is-disp-pc">
					<span>（各部位）</span></th>
					<td>
						<div class="campaign">
							<span class="off">25%off</span>
							<span class="normal">300,000円</span>
							<span class="arrow"></span>
							<span class="discount">225,000円</span>
						</div>
					</td>
				</tr>
				<tr>
					<th>脂肪吸引まとめて<br class="is-disp-pc">
					<span>（例：二の腕、あご下、頬）</span></th>
					<td>
						<div class="campaign">
							<span class="off">30%off</span>
							<span class="normal">900,000円</span>
							<span class="arrow"></span>
							<span class="discount">630,000円</span>
						</div>
					</td>
				</tr>
				<tr>
					<th>ベビ肌シャープリフトストロング8本</th>
					<td>
						<div class="campaign">
							<span class="off">20%off</span>
							<span class="normal">392,000円</span>
							<span class="arrow"></span>
							<span class="discount">313,600円</span>
						</div>
					</td>
				</tr>
				<tr>
					<th>エラボトックス</th>
					<td>
						<div class="campaign">
							<span class="off">5%off</span>
							<span class="normal">60,000円</span>
							<span class="arrow"></span>
							<span class="discount">57,000円</span>
						
						</div>
					</td>
				</tr>
			</table>
			<p class="txt txt-attention">※価格は税抜き価格になります。<br>
			その他、他にも多数の施術や治療はありますので、お気軽にご相談下さい。</p>
		</div>
	</div></article>

<?php get_template_part('content', 'footer-contact'); ?>
	
<?php get_footer(); ?>