<?php

/**
 * Template Name: concierge
 */
?>

<?php get_header(); ?>

<div class="back back--subtle">
	<div class="container">
		<a class="back__link" href="<?php echo esc_url(home_url('/')); ?>">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/imgs/common/btn-back.png'); ?>" alt="back">
		</a>
	</div>
</div>

<?php
// ===== データ定義 =====
$theme_uri = get_template_directory_uri();

$concierges = [
	[
		'name'  => '保良 綾乃',
		'role'  => '代表取締役',
		'image' => 'https://charme-beauty.jp/wp-content/uploads/S__58392592_0.jpg',
		'bio'   => '“ 美容整形 ”
この言葉に対して、今こちらの文章をお読み頂いている貴方はどの様なイメージをお持ちでしょうか。

十数年前までは世間的に整形に対してあまり良いイメージを持たれていませんでした。
整形＝『親から貰った顔にメスを入れる』、『本当の顔では無い顔で人を騙している』、『最終的に崩れて悲惨な顔になる』等、否定的な意見が一般的でした。

しかし、昨今の美容ブームやSNSの普及により美容整形は以前と比較し圧倒的に身近なものとなり多数派だった否定的な声は少数派へ。
美容クリニックの数は過去最大数、今現在も新たな院が増え続けています。

以前よりも気軽に美容医療を受けれる世の中になりましたが、残念ながら悪徳クリニックも増えているのも事実です。
虚偽の口コミ業者やステルスマーケティングが蔓延る現状で、多くの情報の中から安心して施術出来るクリニックを探すのはかなり難易度が高いかと思います。

適正価格で安心して美容施術を受けられるクリニックを業界に精通している人が教えてくれる環境があれば良いのに。そんな想いから2019年にCHARMEというサービスは始まりました。

CHARMEのコンシェルジュ達は、自分の大事な家族や親友にも紹介したいと思えるクリニックをお客様へご紹介しています。
サービス開始から2025年現在まで述べ7000人以上の会員様のサポートを全力で行って参りました。
史上最高の貴方へのステップアップ、是非とも弊社サービス CHARMEにお任せ下さい。'
	],
	[
		'name'  => '松浦 みさき',
		'role'  => 'コンシェルジュ',
		'image' => 'https://charme-beauty.jp/wp-content/uploads/S__58392590_0.jpg',
		'bio'   => '美容整形に興味・関心があり、これまで美容施術を受けた経験があります。
その経験も活かし、施術の選択やクリニック選びに迷われている方、施術に対する不安をお持ちの方にもしっかりと寄り添いながらサポートさせていただきます！
安心して相談できる環境を提供しますので、お気軽にご相談ください。'
	],
];
?>

<div class="sec-concierge">
	<div class="sec-in-s container">
		<ul class="concierge-list">
			<?php foreach ($concierges as $person) : ?>
				<li class="concierge-card">
					<figure class="concierge-media">
						<div class="concierge-media__frame">
							<img
								src="<?php echo esc_url($person['image']); ?>"
								alt="<?php echo esc_attr($person['name']); ?>"
								loading="lazy"
								decoding="async" />
						</div>
					</figure>

					<div class="concierge-content">
						<h3 class="concierge-name">
							<span class="concierge-name__jp"><?php echo esc_html($person['name']); ?></span>
							<span class="concierge-role"><?php echo esc_html($person['role']); ?></span>
						</h3>
						<div class="concierge-bio">
							<?php echo wpautop(esc_html($person['bio'])); ?>
						</div>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>

<?php get_template_part('content', 'footer-contact'); ?>

<?php get_footer(); ?>

<style>
	/* ===== ピンク・プレミアムスタイル ===== */
	:root {
		--c-bg: linear-gradient(180deg, #ffe0e6 0%, var(--accent-pink, #ff4469) 100%);
		--c-card: #ffffff;
		--c-text: #1a1a1a;
		--c-muted: #4a4a4a;
		--c-pink: #ff4469;
		--c-pink-light: #ffb3c1;
		--c-pink-deep: #e6335d;
		--c-rose: #ff6b8a;
		--c-blush: #fff0f3;
		--shadow-luxury: 0 20px 60px rgba(0, 0, 0, .15);
		--shadow-xl: 0 15px 45px rgba(0, 0, 0, .12);
		--shadow-md: 0 8px 25px rgba(0, 0, 0, .08);
		--shadow-inner: inset 0 2px 4px rgba(255, 255, 255, .6);
	}

	/* プレミアム背景 */
	.sec-concierge {
		background: var(--c-bg);
		position: relative;
		padding: 60px 0 80px;
		overflow: hidden;
	}

	.sec-concierge::before {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background:
			radial-gradient(circle at 20% 80%, rgba(255, 68, 105, .08) 0%, transparent 50%),
			radial-gradient(circle at 80% 20%, rgba(255, 107, 138, .06) 0%, transparent 50%),
			radial-gradient(circle at 40% 40%, rgba(255, 224, 230, .04) 0%, transparent 50%);
		pointer-events: none;
	}

	.concierge-hero {
		background: linear-gradient(180deg, rgba(255, 68, 105, .08), rgba(255, 68, 105, 0));
		padding-bottom: 24px;
		margin-bottom: 8px;
	}

	.concierge-hero__title {
		letter-spacing: .08em;
	}

	.concierge-hero__title .title-ja {
		margin-left: .5em;
		font-weight: 500;
	}

	.concierge-hero__ornament {
		width: 120px;
		height: 2px;
		margin: 14px auto 0;
		background: linear-gradient(90deg, transparent, var(--c-pink), transparent);
		border-radius: 2px;
	}

	/* Backリンクを上質に */
	.back--subtle {
		padding-top: 8px;
	}

	.back__link {
		display: inline-flex;
		align-items: center;
		gap: 8px;
		text-decoration: none;
		color: var(--c-muted);
		font-size: 12px;
		letter-spacing: .12em;
		transition: color .2s ease;
	}

	.back__link:hover {
		color: var(--c-pink-deep);
	}

	/* プレミアムリスト */
	.sec-concierge .concierge-list {
		list-style: none;
		padding: 0;
		margin: 50px auto 0;
		display: flex;
		flex-direction: column;
		gap: 50px;
		position: relative;
		z-index: 1;
	}

	/* ラグジュアリーカード */
	.concierge-card {
		display: flex;
		align-items: flex-start;
		gap: 35px;
		background: linear-gradient(145deg, #ffffff, #fdfcfa);
		border-radius: 28px;
		box-shadow: var(--shadow-luxury);
		padding: 40px;
		max-width: 1200px;
		margin: 0 auto;
		border: 2px solid transparent;
		background-clip: padding-box;
		position: relative;
		overflow: hidden;
	}

	.concierge-card::before {
		content: "";
		position: absolute;
		inset: 0;
		padding: 2px;
		background: linear-gradient(135deg, var(--c-pink), var(--c-rose), var(--c-pink-light));
		border-radius: 28px;
		mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
		-webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
		-webkit-mask-composite: destination-out;
		mask-composite: exclude;
	}

	.concierge-card::after {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		height: 100%;
		background: linear-gradient(135deg,
				rgba(255, 68, 105, .03) 0%,
				transparent 25%,
				rgba(255, 107, 138, .02) 50%,
				transparent 75%,
				rgba(255, 224, 230, .04) 100%);
		pointer-events: none;
		border-radius: 28px;
	}

	/* プレミアム画像フレーム */
	.concierge-media {
		margin: 0;
		position: relative;
		z-index: 2;
	}

	.concierge-media__frame {
		position: relative;
		width: 280px;
		min-width: 280px;
		aspect-ratio: 3 / 4;
		border-radius: 20px;
		background: linear-gradient(145deg, #ffffff, #f8f5f0);
		box-shadow: var(--shadow-xl), var(--shadow-inner);
		border: 3px solid transparent;
		background-clip: padding-box;
		overflow: hidden;
		padding: 3px;
	}

	.concierge-media__frame::before {
		content: "";
		position: absolute;
		inset: 0;
		padding: 3px;
		background: linear-gradient(135deg, var(--c-pink), var(--c-blush), var(--c-rose));
		border-radius: 20px;
		mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
		-webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
		-webkit-mask-composite: destination-out;
		mask-composite: exclude;
	}

	.concierge-media__frame::after {
		content: "";
		position: absolute;
		inset: 8px;
		background: linear-gradient(45deg, rgba(255, 68, 105, .08), transparent 30%, rgba(255, 224, 230, .06));
		border-radius: 16px;
		pointer-events: none;
	}

	.concierge-media__frame img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		object-position: center;
		display: block;
		position: relative;
		z-index: 1;
		border-radius: 17px;
		filter: contrast(1.05) brightness(1.02);
	}

	/* プレミアム役職バッジ */
	.concierge-role {
		display: inline-flex;
		align-items: center;
		background: linear-gradient(135deg, var(--c-pink), var(--c-rose));
		color: #ffffff;
		font-size: 10px;
		font-weight: 700;
		letter-spacing: .15em;
		padding: 6px 16px;
		border-radius: 25px;
		margin-left: 16px;
		box-shadow: 0 4px 15px rgba(255, 68, 105, .4), var(--shadow-inner);
		text-transform: uppercase;
		vertical-align: middle;
		border: 2px solid rgba(255, 255, 255, .3);
		position: relative;
		overflow: hidden;
	}

	.concierge-role::before {
		content: "";
		position: absolute;
		top: 0;
		left: -100%;
		width: 100%;
		height: 100%;
		background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .2), transparent);
		animation: shimmer 3s ease-in-out infinite;
	}

	@keyframes shimmer {
		0% {
			left: -100%;
		}

		50% {
			left: 100%;
		}

		100% {
			left: 100%;
		}
	}

	/* プレミアムコンテンツ */
	.concierge-content {
		flex: 1;
		min-width: 0;
		position: relative;
		z-index: 2;
	}

	.concierge-name {
		margin: 0 0 18px;
		font-family: "Noto Serif JP", "Hiragino Mincho ProN", serif;
		font-size: clamp(22px, 2.6vw, 30px);
		line-height: 1.3;
		font-weight: 800;
		color: var(--c-text);
		display: flex;
		align-items: center;
		gap: 12px;
		position: relative;
	}

	.concierge-name__jp {
		position: relative;
		padding-left: 25px;
		background: linear-gradient(135deg, var(--c-text), var(--c-muted));
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		background-clip: text;
	}

	.concierge-name__jp::before {
		content: "";
		position: absolute;
		left: 0;
		top: 50%;
		transform: translateY(-50%);
		width: 18px;
		height: 3px;
		background: linear-gradient(135deg, var(--c-pink), var(--c-rose));
		border-radius: 3px;
		box-shadow: 0 2px 8px rgba(255, 68, 105, .3);
	}

	.concierge-name::after {
		content: "";
		position: absolute;
		bottom: -8px;
		left: 0;
		width: 60px;
		height: 2px;
		background: linear-gradient(90deg, var(--c-pink), transparent);
		border-radius: 2px;
	}

	.concierge-bio {
		color: var(--c-text);
		font-size: 16px;
		line-height: 2.1;
		white-space: pre-wrap;
		background: rgba(255, 255, 255, .4);
		padding: 25px;
		border-radius: 18px;
		border: 1px solid rgba(255, 68, 105, .1);
		box-shadow: var(--shadow-md);
		position: relative;
		backdrop-filter: blur(10px);
	}

	.concierge-bio::before {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		height: 1px;
		background: linear-gradient(90deg, transparent, var(--c-pink-light), transparent);
	}

	.concierge-bio p {
		margin: 0 0 1.2em;
	}

	.concierge-bio p:last-child {
		margin-bottom: 0;
	}

	/* プレミアムホバーエフェクト */
	@media (hover:hover) {
		.concierge-card {
			transition: transform .4s cubic-bezier(0.175, 0.885, 0.32, 1.275),
				box-shadow .4s ease,
				background .4s ease;
		}

		.concierge-card:hover {
			transform: translateY(-8px) scale(1.02);
			box-shadow:
				0 25px 80px rgba(0, 0, 0, .2),
				0 10px 40px rgba(255, 68, 105, .15);
			background: linear-gradient(145deg, #ffffff, #fff8f9);
		}

		.concierge-media__frame {
			transition: transform .4s ease, box-shadow .4s ease;
		}

		.concierge-card:hover .concierge-media__frame {
			transform: translateY(-3px) rotate(1deg);
			box-shadow:
				var(--shadow-luxury),
				0 8px 25px rgba(255, 68, 105, .2);
		}

		.concierge-role {
			transition: transform .3s ease, box-shadow .3s ease;
		}

		.concierge-card:hover .concierge-role {
			transform: scale(1.05);
			box-shadow:
				0 6px 20px rgba(255, 68, 105, .5),
				var(--shadow-inner);
		}
	}

	/* レスポンシブ */
	@media (max-width: 900px) {
		.concierge-card {
			gap: 20px;
			padding: 20px;
		}

		.concierge-media__frame {
			width: 210px;
			min-width: 210px;
		}
	}

	@media (max-width: 680px) {
		.concierge-card {
			flex-direction: column;
			align-items: center;
			text-align: left;
		}

		.concierge-media__frame {
			width: 82%;
			min-width: 0;
			max-width: 360px;
		}

		.concierge-content {
			width: 100%;
		}
	}
</style>
