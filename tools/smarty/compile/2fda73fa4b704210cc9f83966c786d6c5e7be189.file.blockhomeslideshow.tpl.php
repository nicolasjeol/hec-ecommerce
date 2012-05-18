<?php /* Smarty version Smarty-3.0.7, created on 2012-05-18 03:42:47
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/modules/blockhomeslideshow/blockhomeslideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8624257354fb5a91712f469-62635010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fda73fa4b704210cc9f83966c786d6c5e7be189' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/modules/blockhomeslideshow/blockhomeslideshow.tpl',
      1 => 1337294191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8624257354fb5a91712f469-62635010',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('page_name')->value=='index'){?>
<!-- Module Editorial -->
<link href="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
js/prod.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
/slider/css/global.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
js/jquery_002.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
js/slides.jquery.js"></script>
    
    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
            init_slideshow()
        })

        init_slideshow = function() {
            $('#home_slides').cycle({
                fx:'fade',
                timeout:8000,
                pager:'#slide_navigation',
                after:update_slide_caption,
                before:fade_slide_caption
            })
        }

        fade_slide_caption = function(next, previous) {
            caption_container = $('#project_caption')
            caption_container.fadeOut('fast')
        }

        update_slide_caption = function(next, previous) {
            caption_container = $('#project_caption')

            caption = $('span.slide_caption', previous)
            caption_container.fadeIn('fast')
            caption_container.html(caption.html())

        }
    </script>


    <script>
        $(function() {
            $('#slides').slides({
                preload: true,
                preloadImage: "{$this_path}img/loading.gif",
                play: 6000,
                pause: 2500,
                hoverPause: true,
                animationStart: function(current) {
                    $('.caption').animate({
                        bottom:-35
                    }, 100);
                    if (window.console && console.log) {
                        // example return of current slide number
                        console.log('animationStart on slide: ', current);
                    }
                    ;
                },
                animationComplete: function(current) {
                    $('.caption').animate({
                        bottom:-130
                    }, 200);
                    if (window.console && console.log) {
                        // example return of current slide number
                        console.log('animationComplete on slide: ', current);
                    }
                    ;
                },
                slidesLoaded: function() {
                    $('.caption').animate({
                        bottom:-130
                    }, 200);
                }
            });
        });
    </script>

    <style type="text/css">

        .fourlink:hover {
            margin-top: 10px;
        }

    </style>

    


<div id="container" style="position: absolute; left: 155px; top : 157px; ">
    <div id="example">
        <div id="slides">
            <div class="slides_container">
                <div class="slide">
                    <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('category.php?id_category=65');?>
">

                        <img style="width: 950px;" src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
slider/Feel-legendary.gif" alt="Vintage"
                             title="Vintage"/>
                    </a>
                </div>
                <div class="slide">
                    <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('category.php?id_category=68');?>
">
                        <img src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
slider/Trendy.gif" alt="Trendy" title="Trendy"/>
                    </a>
                </div>
                <div class="slide">
                    <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php');?>
"> <img style="width: 950px;"
                                                                             src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
slider/Become-unique.gif"
                                                                             alt="find your look"/> </a>
                </div>
                <div class="slide">
                    <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('magazine.php');?>
"> <img src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
slider/magazine2.png"
                                                                         alt="magazine"/> </a>
                </div>
            </div>
            <a href="#" class="prev"><img src="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
/slider/img/arrow-prev.png" width="24" height="43"
                                          alt="Arrow Prev"></a>
            <a href="#" class="next"><img src="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
/slider/img/arrow-next.png" width="24" height="43"
                                          alt="Arrow Next"></a>
        </div>
    </div>
</div>

<a href="product.php?id_product=1495"> <img style="width: 167px; position: absolute; left: 1100px; top : 563px;"
                                            src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
slider/commentary.png" alt="comment customer"
                                            title="comment customer"/>
</a>

<div>
    <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('category.php?id_category=65');?>
">
        <img class="fourlink" style="position: absolute; left: 145px; top : 608px;"
             src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
advantages/vintage.png" alt="vintage glasses" title="vintage glasses"/>
    </a>
    <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('category.php?id_category=68');?>
">
        <img class="fourlink" style="position: absolute; left: 393px; top : 609px;"
             src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
advantages/trendy.png" alt="trendy glasses" title="trendy glasses"/>
    </a>
    <a class="fourlink" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('magazine.php');?>
">
        <img class="fourlink" style="position: absolute; left: 640px; top : 609px;"
             src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
advantages/visibellymag.png" alt="Magazine of Visibelly"
             title="Magazine of Visibelly"/>
    </a>
    <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php');?>
">
        <img class="fourlink" style="position: absolute; left: 894px; top : 609px;"
             src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
advantages/designer.png" alt="designer of visibelly" title="designer of visibelly"/>
    </a>

    <img style="position: absolute; left: 93px; top : 1090px;" src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
advantages/newsletter.jpg"
         alt="newsletter visibelly" title="luxe brand of visibelly"/>
    <img style="position: absolute; left: 593px; top : 1090px;" src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
advantages/marques.jpg"
         alt="luxe brand visibelly" title="luxe brand of visibelly"/>

</div>


<?php }?>