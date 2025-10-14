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
						'id' => 203,
						'en-title' => 'la Bouche Dental clinic',
						'jp-title' => 'ラ・ブージュデンタルクリニック',
						'img-full' => 'labouche_clinic.jpg',
						'logo' => 'logo_labouche.png',
						'address' => '〒150-0002 東京都渋谷区渋谷1-9-8 宮益坂センスビル4階',
						'tel' => '03-5778-4412',
						'website' => 'http://www.labouche.jp/',
						'tag' 	=> '注入治療,美肌治療'
					],
                    [
						'id' => 1642,
						'en-title' => 'SF Dental Orthodontics',
						'jp-title' => 'SF六本木東京デンタルクリニック',
						'img-full' => 'sf_2.jpg',
						'logo' => 'sfdental.jpg',
						'address' => '〒106-0032 東京都港区六本木3-12-5STELLA六本木3F',
						'tel' => '0120-668-118',
						'website' => 'https://dental-clinic.website/invisalign/',
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
						'id' => 1656,
						'en-title' => 'Oracle Beauty Skin clinic',
						'jp-title' => 'オラクル美容皮膚科',
						'img-full' => 'oracle_2.jpg',
						'logo' => 'logo_oracleclinic.jpg',
						'address' => '〒160-0022 東京都新宿区新宿3丁目19-4 MLJ新宿6階・8階',
						'tel' => '0120-905-696',
						'website' => 'https://www.oracleclinic.jp/',
						'tag' 	=> ''
					],
					// [
					// 	'id' => 2182,
					// 	'en-title' => 'MIL CLINIC OSAKA',
					// 	'jp-title' => 'ミルクリニック大阪',
					// 	'img-full' => 'MILCLINIC_2.jpg',
					// 	'logo' => 'logo_MILCLINIC.jpg',
					// 	'address' => '〒542-0086  大阪府大阪市中央区西心斎橋1-5-27　福太郎心斎橋ビル 7F',
					// 	'tel' => '06-6786-8880',
					// 	'website' => 'https://mil-clinic.com',
					// 	'tag' 	=> '美容整形, 肌治療, 医療脱毛'
					// ],
                    [
						'id' => 1766,
						'en-title' => 'WITH DENTAL CLINIC',
						'jp-title' => 'ウィズデンタルクリニック',
						'img-full' => 'with_dental_img_04.jpg',
						'logo' => 'logo_with-dental-clinic.jpg',
						'address' => '〒150-0034 東京都渋谷区代官山町14-9 3F／4F',
						'tel' => '03-6712-7686',
						'website' => 'https://dental.with-clinic.jp',
						'tag' 	=> ''
                    ],
                    [
						'id' => 2210,
						'en-title' => ' LIVLIV BEAUTY SALON',
						'jp-title' => 'LIVLIVビューティサロン',
						'img-full' => 'S__68321335_0.jpg',
						'logo' => 'livliv_logoH140.png',
						'address' => '〒160-0023 東京都新宿区西新宿1丁目19-11 西新宿甲州ビル8F',
						'tel' => '080-7132-5755',
						'website' => 'https://livliv-beautysalon.com',
						'tag' 	=> ''
					],
					// [
					// 	'id' => 207,
					// 	'en-title' => 'AGA Skin Ladies clinic',
					// 	'jp-title' => 'AGAスキンクリニック レディース院',
					// 	'img-full' => 'aga_radies_1.jpg',
					// 	'logo' => 'aga_radies_logo.jpg',
					// 	'address' => '
                    //     〒104-0061
                    //     東京都中央区銀座5-9-11 銀座ファゼンダビル3F',
					// 	'tel' => '
                    //     050-5527-0308',
					// 	'website' => 'https://www.agaskin-woman.jp/',
					// 	'tag' 	=> '女性薄毛治療,育毛'
					// ],
                    [
						'id' => 208,
						'en-title' => 'AGA Skin clinic',
						'jp-title' => 'AGAスキンクリニック',
						'img-full' => 'aga_imgfull.png',
						'logo' => 'logo_agaskin.png',
						'address' => '',
						'tel' => '0120-545-867',
						'website' => 'https://www.agaskin.net/',
						'tag' 	=> ''
					],
                    // [
					// 	'id' => 2221,
					// 	'en-title' => ' Acne clinic',
					// 	'jp-title' => 'アクネクリニック',
					// 	'img-full' => 'acne_1.jpg',
					// 	'logo' => 'logo_acne.jpg',
					// 	'address' => '〒160-0022  東京都新宿区新宿3-1-16　京王新宿追分第二ビル8階',
					// 	'tel' => '0120-905-541',
					// 	'website' => 'https://www.nikibic.net',
					// 	'tag' 	=> '美肌治療'
					// ],
                    [
						'id' => 291,
						'en-title' => 'Kogao Kagaku laboratory',
						'jp-title' => '小顔化学研究所',
						'img-full' => 'kogao_imgfull.png',
						'logo' => 'logo_kogaokagaku.jpg',
						'address' => '〒150-0021
                        東京都渋谷区恵比寿西1-21-3 グレイス代官山901',
						'tel' => '03-6434-7494',
						'website' => 'https://kogaokagaku.com/',
						'tag' 	=> '輪郭'
					],
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
						'id' => 224,
						'en-title' => 'Inokashila clinic',
						'jp-title' => '井の頭矯正歯科・審美歯科',
						'img-full' => 'inokashira_imgfull.png',
						'logo' => 'logo_inokashila.png',
						'address' => '〒180-0004 東京都武蔵野市吉祥寺本町1-25-10 TRビル7F',
						'tel' => '0422-28-7500',
						'website' => 'https://www.inokashila.com',
						'tag' => ''
					],
                    // [
					// 	'id' => 2897,
					// 	'en-title' => 'Cool White Dental Clinic',
					// 	'jp-title' => 'クールホワイトデンタルクリニック',
					// 	'img-full' => 'coolwhite_1.png',
					// 	'logo' => 'coolwhite_logo.png',
					// 	'address' => '〒107-0052 東京都港区赤坂3-8-17 パンジャパンビル5階',
					// 	'tel' => '',
					// 	'website' => 'http://cool-white.net/',
					// 	'tag' => '審美歯科'
					// ],
                    [
						'id' => 2900,
						'en-title' => 'Kondou Dental Clinic',
						'jp-title' => 'コンドウ歯科クリニック',
						'img-full' => 'kondou_3.jpg',
						'logo' => 'kondo_logo.png',
						'address' => '〒467-0005 愛知県名古屋市瑞穂区石川町2-4',
						'tel' => '',
						'website' => 'https://www.e-kondou.com/',
						'tag' => '審美歯科'
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
						'tag' => '美容整形、美肌治療、審美歯科'
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
						'id' => 3328,
						'en-title' => 'REVI CLINIC',
						'jp-title' => 'REVIクリニック',
						'img-full' => 'REVI.jpg',
						'logo' => 'logo_revi.png',
						'address' => '〒104-0061 東京都中央区銀座１丁目８−１４ 銀座大新ビル 7F',
						'tel' => '03-5579-5703',
						'website' => 'https://revi.clinic/',
						'tag' => 'アートメイク'
					],
				]
			);
			?>
	<div class="top">
		<!-- <section id="service-content-whitening" class="top-section">
			<div class="container">
				<div class="sec-title">
					<h2 class="title-en">SERVICE</h2>
					<h3 class="title-ja">その他</h3>
				</div>
			</div>
		</section> -->
        <section id="service-content-whitening" class="top-section">
    <div class="container">
    <div class="animate" data-aos="fade-up"
          data-aos-anchor-placement="top-bottom">

            <div class="sec-title scroani">
              <h2 class="title-en title-case">SERVICE&nbsp;<span class="title-ja">-その他-</span></h2>

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
