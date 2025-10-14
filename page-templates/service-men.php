<?php
/**
 * Template Name: service detail
 */
?>
<?php get_header(); ?>
<?php

			$args = array(
				'clinics' => [
					[
						'id' => 189,
						'en-title' => 'Dr. Taro Kusano clinic',
						'jp-title' => 'くさのたろうクリニック',
						'img-full' => '4060172490079049.jpg',
						'logo' => 'logo_kusano-taro.png',
						'address' => '〒141-0021 東京都品川区上大崎3-2-9',
						'tel' => '03-5422-7081',
						'website' => 'https://kusano-taro.com/',
						'tag' 	=> '二重・目元,鼻,注入治療,美肌治療,バスト,脂肪吸引,輪郭,アートメイク'
					],
					[
						'id' => 201,
						'en-title' => 'Sherie clinic',
						'jp-title' => 'シェリークリニック',
						'img-full' => 'S__60375094.jpg',
						'logo' => 'logo_sherieclinic.svg',
						'address' => '〒160-0022 東京都新宿区新宿４丁目４-１第一スカイビル6階',
						'tel' => '03-6233-8010',
						'website' => 'https://sherieclinic.jp/',
						'tag' 	=> '二重・目元,鼻,注入治療,美肌治療,輪郭'
					],
                    [
						'id' => 381,
						'en-title' => 'Shibuya Mori clinic',
						'jp-title' => '渋谷の森クリニック',
						'img-full' => 'shibuyamori_04.jpg',
						'logo' => 'logo_shibuyamori.png',
						'address' => '〒150-0001 東京都渋谷区神宮前6-18-1クレインズパーク4階',
						'tel' => '03-3409-5959',
						'website' => 'https://shibuyamori.com/',
						'tag' 	=> '二重・目元,鼻,注入治療,美肌治療,バスト,脂肪吸引,輪郭,アートメイク'
					],
					[
						'id' => 220,
						'en-title' => 'TKC clinic',
						'jp-title' => '東京美容外科',
						'img-full' => 'tkc_2.jpeg',
						'logo' => 'logo_tkc-biyou.png',
						'address' => '〒107-0052 東京都港区赤坂6-6-3 2F美容外科・3F審美歯科',
						'tel' => '0120-545-861',
						'website' => 'https://www.tkc110.jp/',
						'tag' 	=> '二重・目元,鼻,注入治療,美肌治療,バスト,脂肪吸引,輪郭'
					],
					[
						'id' => 231,
						'en-title' => 'WOM clinic',
						'jp-title' => 'WOMクリニック',
						'img-full' => '2024317316775474.jpeg',
						'logo' => 'logo_womclinic.jpg',
						'address' => '〒104-0061
                        東京都中央区銀座2-2-18 TH銀座ビル5.6.7階',
						'tel' => '03-6271-0328',
						'website' => 'https://wom-clinic.com/',
						'tag' 	=> '二重・目元,鼻,注入治療,バスト,脂肪吸引,輪郭,アートメイク'
					],
                    [
						'id' => 239,
						'en-title' => 'Omotesando Skin clinic',
						'jp-title' => '表参道スキンクリニック',
						'img-full' => 'omote_mainimages.jpg',
						'logo' => 'logo_omotesando-skin.jpg',
						'address' => '〒150-0001 東京都渋谷区神宮前5-9-13 喜多重ビル4F',
						'tel' => '0120-334-270',
						'website' => 'https://omotesando-skin.jp/',
						'tag' 	=> '二重・目元,鼻,注入治療,美肌治療,バスト,脂肪吸引,輪郭'
					],
					// [
					// 	'id' => 228,
					// 	'en-title' => 'Vogue clinic',
					// 	'jp-title' => '札幌ル・トロワビューティクリニック Vogue',
					// 	'img-full' => 'vogue_1.jpg',
					// 	'logo' => 'logo_slbc-vogue.png',
					// 	'address' => '〒060-0042 北海道札幌市中央区大通西1丁目13番地ル・トロワ6F',
					// 	'tel' => '0120-169-263',
					// 	'website' => 'https://slbc-vogue.jp/',
					// 	'tag' 	=> '美容整形全般,肌治療,他院修正,その他'
					// ],
                    [
						'id' => 225,
						'en-title' => 'Id Beauty clinic',
						'jp-title' => 'id美容クリニック',
						'img-full' => 'id_imgfull.png',
						'logo' => 'logo_idhospital.svg',
						'address' => '〒104-0061 東京都中央区銀座６丁目２−３ Daiwa銀座アネックス2F',
						'tel' => '03-6274-6901',
						'website' => 'https://ginza.idhospital.com/',
						'tag' 	=> ''
					],

                    [
						'id' => 227,
						'en-title' => 'Id Beauty clinic',
						'jp-title' => 'id美容外科',
						'img-full' => 'idkankoku_imgfull.png',
						'logo' => 'logo_idhospital2.jpg',
						'address' => 'ソウル市江南区島山大路142、ID美容外科ビル',
						'tel' => '03-6868-8780',
						'website' => 'https://jp.idhospital.com/',
						'tag' 	=> ''
					],
                    [
						'id' => 2575,
						'en-title' => 'Veary clinic',
						'jp-title' => 'ヴェアリークリニック',
						'img-full' => '008.jpg',
						'logo' => 'veary_logo.png',
						'address' => '〒106-0032 東京都港区六本木4-2-35 vort六本木dual\'s2F',
						'tel' => '03-6820-2457',
						'website' => 'https://vearyclinic.life',
						'tag' 	=> '注入治療,美肌治療'
					],
                    [
						'id' => 1644,
						'en-title' => 'WITH BEAUTY CLINIC',
						'jp-title' => 'ウィズビューティークリニック',
						'img-full' => 'withclinic_img_01.jpg',
						'logo' => 'logo_withclinic.png',
						'address' => '〒150-0034 東京都渋谷区代官山町14丁目9番　B1F',
						'tel' => '03-6452-5668',
						'website' => 'https://beauty.with-clinic.jp/',
						'tag' 	=> '注入治療,輪郭'
                    ],
					[
						'id' => 176,
						'en-title' => 'TA clinic',
						'jp-title' => '銀座TAクリニック',
						'img-full' => 'ta_1.jpg',
						'logo' => 'logo_taclinic.png',
						'address' => '〒104-0061 東京都中央区銀座2丁目3番1号 RayGinza 5階',
						'tel' => '0120-229-239',
						'website' => 'https://taclinic.jp/',
						'tag' 	=> '二重・目元,鼻,注入治療,美肌治療,バスト,脂肪吸引,輪郭'
					],
					[
						'id' => 249,
						'en-title' => 'Kuno clinic',
						'jp-title' => 'Kunoクリニック',
						'img-full' => 'kuno_imgfull.png',
						'logo' => 'logo_d-biyou.jpg',
						'address' => '〒106-0046
                        東京都港区元麻布十番3-2-13 2F',
						'tel' => '0120-874-432',
						'website' => 'https://kunoclinic.sakura.ne.jp',
						'tag' 	=> ''
					],
                    [
						'id' => 361,
						'en-title' => 'Private Clinic Ebisu',
						'jp-title' => 'プライベートクリニック恵比寿',
						'img-full' => '361_02.jpg',
						'logo' => 'logo_private-clinic-ebisu.jpg',
						'address' => '〒150-0011 東京都渋谷区東3-16-9　中村ビル6階',
						'tel' => '070-1241-5350',
						'website' => 'https://private-clinic-ebisu.com/',
						'tag' 	=> ''
					],
					// [
					// 	'id' => 67,
					// 	'en-title' => 'Athena clinic',
					// 	'jp-title' => 'アテナクリニック',
					// 	'img-full' => '1789579194493500.jpg',
					// 	'logo' => 'logo_athena.svg',
					// 	'address' => '〒104-0061 東京都中央区銀座7丁目10-5 The ORB Luminous 3F',
					// 	'tel' => '0120-169-263',
					// 	'website' => 'https://athenaclinic.net/',
					// 	'tag' => '美容整形全般,医療脱毛,肌治療,他院修正,性転換,その他'
					// ],
					// [
					// 	'id' => 233,
					// 	'en-title' => 'Estheticsalon Lilas clinic',
					// 	'jp-title' => 'リラクリニック、エステサロンリラ',
					// 	'img-full' => 'lilas_1.jpg',
					// 	'logo' => 'logo_lilas.jpg',
					// 	'address' => '〒530-0002 大阪府大阪市北区曽根崎新地2-4-21 きちりんビル401',
					// 	'tel' => '06-4256-5544',
					// 	'website' => '#',
					// 	'tag' 	=> 'エステ,美肌治療,全身ケア'
					// ],
                    [
						'id' => 2560,
						'en-title' => 'Seibikai clinic',
						'jp-title' => '清美会クリニック',
						'img-full' => 'seibi_full.jpg',
						'logo' => 'Seibi_logo.png',
						'address' => '〒810-0041 福岡県福岡市中央区大名2-6-26 バルビゾン９４ ５Ｆ',
						'tel' => '0120-928-234',
						'website' => 'https://athena-fukuoka.com/',
						'tag' => ''
					],
                    [
						'id' => 2890,
						'en-title' => 'Sapporo Beauty clinic',
						'jp-title' => 'さっぽろ美容クリニック本院',
						'img-full' => 'S__32153887.jpg',
						'logo' => 'sapporo_logo.png',
						'address' => '〒060-0004 北海道札幌市中央区北4条西2丁目 TRビル9階',
						'tel' => '011-596-8141',
						'website' => 'https://satsubi.jp/',
						'tag' => ''
					],
                    [
						'id' => 2893,
						'en-title' => 'Joe Clinic',
						'jp-title' => 'ジョウクリニック',
						'img-full' => 'joe_1.jpeg',
						'logo' => 'joe_logo.png',
						'address' => '〒104-0061 東京都中央区銀座8-11-3 銀座露木ビル7F・8F',
						'tel' => '',
						'website' => 'https://www.joeclinic.jp/',
						'tag' => ''
					],
                    [
						'id' => 2901,
						'en-title' => 'Wonjin Beauty Clinic',
						'jp-title' => 'ウォンジン整形外科クリニック',
						'img-full' => 'ウォンジン整形外科院内写真3.jpg',
						'logo' => 'wonjin_logo.png',
						'address' => 'ソウル市瑞草區瑞草洞1306-6　パゴタタワー17階',
						'tel' => '',
						'website' => 'http://wonjinbeauty.com/jp/',
						'tag' => ''
					],
                    // [
					// 	'id' => 2996,
					// 	'en-title' => 'KYU EN CLINIC',
					// 	'jp-title' => 'キュウエンクリニック',
					// 	'img-full' => 'CUT1.jpg',
					// 	'logo' => 'logo-kyuen.png',
					// 	'address' => '東京都港区南青山３丁目３−３リビエラ南青山 2F',
					// 	'tel' => '',
					// 	'website' => 'https://kyuen-clinic.jp/',
					// 	'tag' => '美肌治療,医療脱毛'
					// ],
                    [
						'id' => 3112,
						'en-title' => 'SK Clinic',
						'jp-title' => 'SK新宿歌舞伎町美容外科・歯科',
						'img-full' => 'S__61571239.jpg',
						'logo' => 'sk_logo.jpg',
						'address' => '東京都新宿区歌舞伎町1丁目ｰ23ｰ15 SUZUYAビル4F',
						'tel' => '03-6228-0761',
						'website' => 'https://sk-clinic3.com/#',
						'tag' => '二重・目元,注入治療,美肌治療,脂肪吸引'
					],
                    [
						'id' => 3118,
						'en-title' => 'TOKYO ADVANCED MEDICAL CLINIC',
						'jp-title' => '東京先進医療クリニック',
						'img-full' => 'S__61571248.jpg',
						'logo' => 'advanced_logo.jpg',
						'address' => '東京都新宿区新宿3-21-7 東新ビル3階',
						'tel' => '050-5527-0902',
						'website' => 'https://www.admd.jp',
						'tag' => ''
					],
                    [
						'id' => 3127,
						'en-title' => 'Men’s Life Clinic',
						'jp-title' => 'メンズライフクリニック',
						'img-full' => 'S__61571261.jpg',
						'logo' => 'menslife_logo.jpg',
						'address' => '東京都新宿区歌舞伎町1-17-2 小松ビル3F',
						'tel' => '0120-391-784',
						'website' => 'https://www.mens-life-clinic.com',
						'tag' => ''
					],
                    // [
					// 	'id' => 3191,
					// 	'en-title' => 'GAMI PLASTIC SURGERY Clinic',
					// 	'jp-title' => 'ガミ整形外科',
					// 	'img-full' => 'S__62480416.jpg',
					// 	'logo' => 'gami_logo.jpg',
					// 	'address' => 'ソウル特別市江南区テヘラン路105 Aタワー13階',
					// 	'tel' => '02-567-0082',
					// 	'website' => 'http://jp.gamips.co.kr/m/',
					// 	'tag' => '美容整形'
					// ],
                    [
						'id' => 3252,
						'en-title' => 'PBC TOKYO Clinic',
						'jp-title' => 'PBC TOKYO',
						'img-full' => 'エントランス引き_220912_0072_fin-scaled.jpg',
						'logo' => 'pbc_logo.png',
						'address' => '東京都中央区銀座1丁目6-11 土志田ビルディング2F',
						'tel' => '03-6264-4800',
						'website' => 'https://pbc-tokyo.jp/',
						'tag' => '二重・目元,注入治療,美肌治療,アートメイク'
					],
                    [
						'id' => 3318,
						'en-title' => 'MEDICAL α CLINIC',
						'jp-title' => 'メディカルアルファクリニック',
						'img-full' => 'S__68321355_0.jpg',
						'logo' => 'logo_medialpha.jpg',
						'address' => '〒542-0081 大阪市中央区南船場 4-5-8 ラスターオン心斎橋6F',
						'tel' => '050-3358-2363',
						'website' => 'https://proteo.jp',
						'tag' => ''
					],
                    [
						'id' => 3318,
						'en-title' => 'Ginza Myami',
						'jp-title' => '銀座マイアミ美容外科',
						'img-full' => 'miami_院内.png',
						'logo' => 'logo_miami.svg',
						'address' => '〒104-0061 東京都中央区銀座4-6-1 銀座三和ビル4階',
						'tel' => '03-3567-0055',
						'website' => 'https://myami-clinic.jp/',
						'tag' => ''
					],
                    [
						'id' => 3330,
						'en-title' => 'Hibiya Central CLINIC',
						'jp-title' => '日比谷セントラルクリニック',
						'img-full' => 'hibiyacentral.png',
						'logo' => 'logo_hibiyacentral.jpg',
						'address' => '〒100-0006 東京都千代田区有楽町1-2-14紫ビル３階',
						'tel' => '03-3528-8595',
						'website' => 'https://lemon-clinic.com/',
						'tag' => '二重・目元,注入治療,美肌治療'
					],

                    [
						'id' => 3332,
						'en-title' => 'Atom CLINIC',
						'jp-title' => 'アトムクリニックforMEN',
						'img-full' => 'atom.jpg',
						'logo' => 'logo_atom.png',
						'address' => '〒160-0023 東京都新宿区西新宿7-10-7加賀谷ビル7階',
						'tel' => '0120-065-057',
						'website' => 'https://atom-clinic.jp/',
						'tag' => ''
					],
                    [
						'id' => 3335,
						'en-title' => 'Bellefeel CLINIC',
						'jp-title' => 'Bellefeelクリニック',
						'img-full' => '院内.jpg',
						'logo' => 'logo_bellefeel.svg',
						'address' => '〒150-0033 東京都渋谷区猿楽町9-8URBAN PARK 代官山Ⅱ 213号',
						'tel' => '03-6416-4664',
						'website' => 'https://bellefeelclinic.com/',
						'tag' => '二重・目元,注入治療,美肌治療,脂肪吸引,輪郭,アートメイク'
					],
                    [
						'id' => 3325,
						'en-title' => 'Amoureuses CLINIC',
						'jp-title' => 'アムルーズ美容外科クリニック',
						'img-full' => 'Amoureuses.jpg',
						'logo' => 'logo_amoureuses.png',
						'address' => '〒230-0062 神奈川県横浜市鶴見区豊岡町8番19号ソピアビルディング1階',
						'tel' => '045-834-6655',
						'website' => 'https://www.amoureuses.jp/',
						'tag' => ''
					],

				]
			);

			//$list = array(237,238,240,241,242,243,245);
			?>
	<div class="top">
		<!-- <section id="service-content-men" class="top-section">
			<div class="container">
				<div class="sec-title">
					<h2 class="title-en">SERVICE</h2>
					<h3 class="title-ja">メンズ総合</h3>
				</div>
			</div>
		</section> -->
        <section id="service-content-men" class="top-section">
    <div class="container">
    <div class="animate" data-aos="fade-up"
          data-aos-anchor-placement="top-bottom">

            <div class="sec-title scroani">
              <h2 class="title-en title-case">SERVICE&nbsp;<span class="title-ja">-メンズ-</span></h2>

              <div class="casehiddbox">
                <div class="casehiddenleft hiddencolor"></div>
                <div class="casehiddenright hiddencolor"></div>
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

        </div>
    </div>
    </div>
</section>
		<div id="clinics">
			<div class="container">
				<div class="swiper-container clinic-slider">
				  <div class="swiper-wrapper">
					<?php foreach ($args['clinics'] as $key => $clinic):?>
					<div class="swiper-slide">
						<div class="pickup">Pick up clinic</div>
						<ul class="service-list">
							<li>
								<div class="right">
									<div class="service-title">
										<h3>
										<a target="_blank" href="<?php echo esc_url(get_permalink($clinic['id'])); ?>"><span class="en"><?php echo $clinic['en-title'];?></span><br><?php echo $clinic['jp-title'];?></a>
										</h3>
										<span class="img"><a target="_blank" href="<?php echo $clinic['website'];?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/<?php echo $clinic['logo'];?>" alt="" class="img-full"></a></span>
									</div>
									<div class="service-info">
										<span><label>Address</label><span><?php echo $clinic['address'];?></span></span>
										<span><label>TEL</label><span><?php echo $clinic['tel'];?></span></span>
										<span><label>WEB</label><span><a target="_blank" href="<?php echo $clinic['website'];?>"><?php echo $clinic['website'];?></a></span></span>
                                        <?php
                                        if(empty($clinic['tag'])){ ?>
                                        <?php
                                        }else{
                                        ?>
                                        <div class="tag">
                                            <?php
                                            $tags = explode(',',$clinic['tag']);
                                            for($i=0;$i<count($tags);$i++){
                                                echo '<a>'.$tags[$i].'</a> ';
                                            }
                                            ?>
                                        </div>
                                        <?php } ?>
									</div>
									<a class="readmore" href="<?php echo esc_url(get_permalink($clinic['id'])); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore-slider.png" alt="read more"></a>
								</div>
								<div class="left">
								<?php
								if($clinic['img-full'] != ''){
								?>
                                                                        <a target="_blank" href="<?php echo $clinic['website']; ?>">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/<?php echo $clinic['img-full'];?>" alt="" class="img-full">
                                                                        </a>
								<?php
								}else{
								?>
                                                                    <a class="no-image" target="_blank" href="<?php echo $clinic['website']; ?>">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo.svg" alt="" class="img-df">
								</a>
                                                                            <?php } ?>
								</div>
							</li>
						</ul>
					</div>
					<?php endforeach;?>


				  </div>
				  <div class="swiper-button-next"></div>
				  <div class="swiper-button-prev"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="sec-service">
		<div class="container">

			<ul id="listPage" class="service-list">
				<?php foreach ($args['clinics'] as $key => $clinic):?>
				<li>
					<div class="service-list-content">
					<div class="left"><a target="_blank" href="<?php echo $clinic['website']; ?>">
					<?php
					if($clinic['img-full'] != ''){
					?>
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/<?php echo $clinic['img-full'];?>" alt="" class="img-full">
					<?php
					}else{
					?>
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/logo.svg" alt="" class="img-df">
					<?php } ?>
					</a></div>
					<div class="right">
						<div class="service-title">
							<h3>
								<a href="<?php echo esc_url(get_permalink($clinic['id'])); ?>"><span class="en"><?php echo $clinic['en-title'];?></span><br><?php echo $clinic['jp-title'];?></a>
							</h3>
							<span class="img"><a target="_blank" href="<?php echo $clinic['website'];?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/clinic/<?php echo $clinic['logo'];?>" alt="" class="img-full"></a></span>
						</div>
						<div class="service-info">
							<span><label>Address</label><span><?php echo $clinic['address'];?></span></span>
							<span><label>TEL</label><span><?php echo $clinic['tel'];?></span></span>
							<span><label>WEB</label><span><a target="_blank" href="<?php echo $clinic['website'];?>"><?php echo $clinic['website'];?></a></span></span>
                            <?php
                            if(empty($clinic['tag'])){ ?>
                            <div class="tag"></div>
                            <?php
                            }else{
                            ?>
							<div class="tag">
								<?php
								$tags = explode(',',$clinic['tag']);
								for($i=0;$i<count($tags);$i++){
									echo '<a>'.$tags[$i].'</a> ';
								}
								?>
							</div>
                            <?php } ?>
						</div>
						<a class="readmore" href="<?php echo esc_url(get_permalink($clinic['id'])); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more"></a>
					</div>
					</div>
				</li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>

<?php //get_template_part('content', 'footer-contact'); ?>

<?php get_footer(); ?>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/paginathing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($){
	$('#listPage').paginathing({
      perPage: 5,
      pageNumbers: true
    })
  });
</script>
