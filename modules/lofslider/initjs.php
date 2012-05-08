<script type="text/javascript">
// $.noConflict();
$(document).ready( function(){	
	var buttons = { previous:$('#lofslider<?php echo $prfSlide; ?><?php echo $blockid; ?> .lof-previous') ,
					next:$('#lofslider<?php echo $prfSlide; ?><?php echo $blockid; ?> .lof-next') };	
	$obj = $('#lofslider<?php echo $prfSlide; ?><?php echo $blockid; ?>').lofJSidernews( { interval : <?php echo $params->get("interval", 4000);?>,
							direction		: '<?php echo $params->get('layout_style','blank');?>',	
							easing			: '<?php echo $params->get( 'effect', 'easeInOutExpo' );?>',
							duration		: <?php echo (int)$params->get('duration', '1300')?>,
							startItem		 	: <?php echo $params->get('start_item',0)?>,
							auto:<?php echo (int)$params->get('auto_start',0);?>,
							maxItemDisplay  : <?php echo $params->get('max_nav_items', 3) ?>,
							navPosition     : '<?php echo $params->get('nav_pos', 'horizontal') ?>', // horizontal
							navigatorHeight : <?php echo (int)$thumb_size["height"] +(int)$params->get('thumb_pad_x',10);?>,
							navigatorWidth  : <?php echo (int)$thumb_size["width"] +(int)$params->get('thumb_pad_y',6);?>,
							mainWidth:<?php echo $main_img_size['width']; ?>,
							mainHeight:<?php echo $main_img_size['height']; ?>,													
							buttons			: buttons} );	
	
});
</script>
