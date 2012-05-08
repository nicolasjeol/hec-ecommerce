{if $page_name eq 'index'}
<!-- Module Editorial -->
<link href="{$this_path}js/prod.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{$this_path}js/jquery_002.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="{$this_path}js/slides.jquery.js"></script>
    {literal}
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


{/literal}
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

{*<div id="home_slideshow">*}
{* <ul style="position: relative; width: 945px; height: 394px;" id="home_slides">*}
{* {foreach name=outer item=outputtop from=$outputtops}*}
{* <li style="position: absolute; top: 0px; left: 0px; display: list-item; z-index: 4; opacity: 1;">*}
{*	 <a href="{$outputtop.link}"><img src="{$this_path}images/{$outputtop.name}"></a>*}
{* </li>*}
{*{/foreach}*}
{*	</ul>*}
{*<div id="home_slideshow_violator" class="clearfix">*}
{* <div style="display: block;" id="project_caption"></div><div id="slide_navigation" class="clearfix"></div>*}
{*</div>*}
{*</div>*}


<div style="margin-top: 30px;" id="slides">
    <div class="slides_container">
        <div>
            <img src="http://c935172.r72.cf3.rackcdn.com/canapé_convertible.jpg" alt="canape"/>
        </div>
        <div>
{*            <img src="{$this_path}images/{$outputtop.name}" alt="men"/>*}
            <img src="{$this_path}/topimg/banner1.jpg" alt="men"/>
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


    {if $sale_products > 0}
<!-- /Block slide show home page module -->
<link href="{$this_path}simple.carousel.0.3/clases.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Kameron:400&subset=latin&v2' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{$this_path}simple.carousel.0.3/simple.carousel.js"></script>
{literal}
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
{/literal}
<div class="best_deal_mod"><div class="fuentegoogle">{l s='Ofertas' mod='blockhomeslideshow'}</div></div>
    <div class="simplecarruselmod">
    <span class="prev"><img src="{$this_path}/js/arrowl.gif" border="0"></span><span class="next"><img src="{$this_path}/js/arrowr.gif"></span>
    <ul class="carruselhome">
 {foreach name=sale_product item=sale_product from=$sale_products}  
 	<li>
		<a href="{$sale_product.link|escape:'htmlall':'UTF-8'}"><img src="{$link->getImageLink($sale_product.link_rewrite, $sale_product.id_image, 'home_special')}" /></a>
	</li>
 {/foreach}
</ul>
</div>

{/if}
{/if}