<?php /* Smarty version Smarty-3.0.7, created on 2012-05-08 02:58:42
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/modules/blockhomeslideshow/blockhomeslideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4495068054fa86fc2657472-73093609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fda73fa4b704210cc9f83966c786d6c5e7be189' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/modules/blockhomeslideshow/blockhomeslideshow.tpl',
      1 => 1336380290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4495068054fa86fc2657472-73093609',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop-hec/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->getVariable('page_name')->value=='index'){?>
<!-- Module Editorial -->
<link href="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
js/prod.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
js/jquery_002.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
js/slides.jquery.js"></script>
    
<script type="text/javascript" charset="utf-8">
$(window).load(function()
{
	init_slideshow()
})

init_slideshow = function()
{
	$('#home_slides').cycle({
		fx:'fade',
		timeout:8000,
		pager:'#slide_navigation',
		after:update_slide_caption,
		before:fade_slide_caption
	})
}

fade_slide_caption = function(next, previous)
{
	caption_container = $('#project_caption')
	caption_container.fadeOut('fast')
}

update_slide_caption = function(next, previous)
{
	caption_container = $('#project_caption')

	caption = $('span.slide_caption', previous)
	caption_container.fadeIn('fast')
	caption_container.html(caption.html())
	
}
</script>

<script>
    $(function () {
        $("#slides").slides({
            preload:true,
//            preloadImage:'http://c935172.r72.cf3.rackcdn.com/canapé_convertible.jpg',
//            preloadImage:"{$this_path}images/topimg/banner1.jpg",
            play:5000,
            pause:2500,
            hoverPause:true
        });
    });
</script>



<style type="text/css" media="screen">
    .slides_container {
       margin: auto;
       width:900px;
       height:400px;
        .border-radius(10px);

     }
     .slides_container div {
       width:900px;
       height:400px;
       display:block;
     }
        </style>


<div style="margin-top: 30px;" id="slides">
    <div class="slides_container">
        <div>
            <img src="http://c935172.r72.cf3.rackcdn.com/canapé_convertible.jpg" alt="canape"/>
        </div>
        <div>
            <img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
/topimg/banner1.jpg" alt="men"/>
        </div>
        <div>
            <img src="http://c935172.r72.cf3.rackcdn.com/chambre_en_mezzanine.jpg" alt="chambre"/>
        </div>
        <div>
            <img src="http://c935172.r72.cf3.rackcdn.com/vu_autre_angle.jpg" alt="chambre autre angle"/>
        </div>
        <div>
            <img src="http://c935172.r72.cf3.rackcdn.com/maison_vue_de_face.jpg" alt="maison"/>
        </div>
    </div>
</div>


    <?php if ($_smarty_tpl->getVariable('sale_products')->value>0){?>
<!-- /Block slide show home page module -->
<link href="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
simple.carousel.0.3/clases.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Kameron:400&subset=latin&v2' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
simple.carousel.0.3/simple.carousel.js"></script>

<script type="text/javascript">
       jQuery(document).ready(function() {
            // example 1
            $("ul.carruselhome").simplecarousel({
                width:200,
                height:145,
                visible: 4,
                auto: 8000,
				fade: 600,
                next: $('.next'),
                prev: $('.prev')
            });
        });
        
    </script>

<div class="best_deal_mod"><div class="fuentegoogle"><?php echo smartyTranslate(array('s'=>'Ofertas','mod'=>'blockhomeslideshow'),$_smarty_tpl);?>
</div></div>
    <div class="simplecarruselmod">
    <span class="prev"><img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
/js/arrowl.gif" border="0"></span><span class="next"><img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
/js/arrowr.gif"></span>
    <ul class="carruselhome">
 <?php  $_smarty_tpl->tpl_vars['sale_product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sale_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sale_product']->key => $_smarty_tpl->tpl_vars['sale_product']->value){
?>  
 	<li>
		<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sale_product']->value['link'],'htmlall','UTF-8');?>
"><img src="<?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->tpl_vars['sale_product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['sale_product']->value['id_image'],'home_special');?>
" /></a>
	</li>
 <?php }} ?>
</ul>
</div>

<?php }?>
<?php }?>