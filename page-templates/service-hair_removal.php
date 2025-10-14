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
					// 	'id' => 211,
					// 	'en-title' => 'GlOW clinic',
					// 	'jp-title' => 'GLOWクリニック',
					// 	'img-full' => '9775892018900573.jpg',
					// 	'logo' => 'logo_glow-clinic.png',
					// 	'address' => '〒150-0002 東京都渋谷区渋谷1-10-1 八千代ビル3F',
					// 	'tel' => '0120-705-822（フリーダイヤル）/ 03-6427-5822',
					// 	'website' => 'https://glow-clinic.com/lp18/?r=34',
					// 	'tag' 	=> '医療脱毛,アートメイク'
					// ],
					// [
					// 	'id' => 2182,
					// 	'en-title' => ' MIL CLINIC OSAKA',
					// 	'jp-title' => 'ミルクリニック大阪',
					// 	'img-full' => 'MILCLINIC_2.jpg',
					// 	'logo' => 'logo_MILCLINIC.jpg',
					// 	'address' => '〒542-0086  大阪府大阪市中央区西心斎橋1-5-27　福太郎心斎橋ビル 7F',
					// 	'tel' => ' 06-6786-8880',
					// 	'website' => 'https://mil-clinic.com',
					// 	'tag' 	=> '美容整形, 肌治療, 医療脱毛'
					// ],
                    // [
					// 	'id' => 2220,
					// 	'en-title' => 'RIGEL clinic',
					// 	'jp-title' => 'リゲルクリニック',
					// 	'img-full' => 'rigel_1.jpg',
					// 	'logo' => 'rigel_clinicLogo.png',
					// 	'address' => '〒153-0053　東京都渋谷区代々木2-8-6新宿駅前サウスビル３F',
					// 	'tel' => '03-5843-5496',
					// 	'website' => 'https://rigel-clinic.com',
					// 	'tag' 	=> '医療脱毛'
					// ],
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
                    [
						'id' => 3123,
						'en-title' => 'Laser Skin Clinic',
						'jp-title' => 'レーザースキンクリニック',
						'img-full' => 'S__68321341.jpg',
						'logo' => 'laserskin_logo.jpg',
						'address' => '〒160-0023 東京都新宿区西新宿1丁目18-6 須⽥ビル6階',
						'tel' => '0120-276-204',
						'website' => 'https://www.laserskinclinic.jp',
						'tag' => ''
					],
                    [
						'id' => 3181,
						'en-title' => 'Juno beauty clinic',
						'jp-title' => 'ジュノビューティークリニック',
						'img-full' => 'S__62259229.jpg',
						'logo' => 'juno_logo.jpg',
						'address' => '東京都新宿区新宿3丁目17−1いさみやビル4階',
						'tel' => '0120-733-038',
						'website' => 'https://www.shinjukubc.com',
						'tag' => ''
					],
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
				]
			);
			?>
	<div class="top">
		<!-- <section id="service-content-hair" class="top-section">
			<div class="container">
				<div class="sec-title">
					<h2 class="title-en">SERVICE</h2>
					<h3 class="title-ja">医療脱毛・アートメイク等</h3>
				</div>
                <div class="service-img">
                </div>
			</div>
		</section> -->
        <section id="service-content-hair" class="top-section">
    <div class="container">
    <div class="animate" data-aos="fade-up"
          data-aos-anchor-placement="top-bottom">

            <div class="sec-title scroani">
              <h2 class="title-en title-case">SERVICE&nbsp;<span class="title-ja">-医療脱毛-</span></h2>

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
							<div class="tag">
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
