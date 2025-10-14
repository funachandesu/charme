<section class="flow-safety">
    <div class="container">
        <div class="flow-safety__content">
        <?php foreach ($args['blocks'] as $key => $block):?>
            <div class="flow-safety__item">
                <h3><?php echo isset($block['category'])? $block['category']:''?></h3>
                <p><?php echo isset($block['name'])? $block['name']:''?></p>
                <img class="disp1" src="<?php nippou_image($block['image'])?>" alt="<?php echo isset($block['name'])? $block['name']:''?>">
                <a href="<?php echo isset($block['link'])? $block['link']:'#'?>" class="btn">VIEW MORE</a>
            </div>
        <?php endforeach;?>
        </div>
    </div>
</section>