<?php 
print_r($args['clinics']);
?>
<ul class="service-list">				
	<?php foreach ($args['clinics'] as $key => $clinic):?>
	<li>
		<div class="left"><a target="_blank" href="<?php echo esc_url(get_permalink($clinic['id'])); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/service/<?php echo $clinic['img-full'];?>" alt="" class="img-full"></a></div>
		<div class="right">
			<div class="service-title">
				<h3>
					<a target="_blank" href="<?php echo esc_url(get_permalink($clinic['id'])); ?>"><span class="en"><?php echo $clinic['en-title'];?></span><br><?php echo $clinic['jp-title'];?></a>
				</h3>
				<span class="img"><a target="_blank" href="<?php echo $clinic['website'];?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/service/<?php echo $clinic['logo'];?>" alt="" class="img-full"></a></span>
			</div>
			<div class="service-info">
				<span><label>Address</label><span><?php echo $clinic['address'];?></span></span>
				<span><label>TEL</label><span><?php echo $clinic['tel'];?></span></span>
				<span><label>WEBSITE</label><span><a target="_blank" href="<?php echo $clinic['website'];?>"><?php echo $clinic['website'];?></a></span></span>
				<div class="tag">
					<a href="#">メンズ総合</a>
					<a href="#">いけやま歯科</a>
					<a href="#">メンズ総合</a>
					<a href="#">いけやま歯科</a>
				</div>
			</div>
			<a class="readmore" href="<?php esc_url(the_permalink()); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imgs/common/readmore.png" alt="read more"></a>
		</div>
	</li>
	<?php endforeach;?>
</ul>
