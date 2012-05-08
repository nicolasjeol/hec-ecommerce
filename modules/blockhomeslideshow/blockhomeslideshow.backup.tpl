{if $page_name eq 'index'}
<!-- Module Editorial -->
<link href="{$this_path}js/prod.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{$this_path}js/jquery_002.js"></script>
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
{/literal}
<div id="home_slideshow">
 <ul style="position: relative; width: 945px; height: 394px;" id="home_slides">
 {foreach name=outer item=outputtop from=$outputtops}                
 <li style="position: absolute; top: 0px; left: 0px; display: list-item; z-index: 4; opacity: 1;"> 
	 <a href="{$outputtop.link}"><img src="{$this_path}images/{$outputtop.name}"></a>
 </li>
{/foreach}
	</ul>
<div id="home_slideshow_violator" class="clearfix">
 <div style="display: block;" id="project_caption"></div><div id="slide_navigation" class="clearfix"></div>
</div>
</div>
{if $sale_products > 0}
<!-- /Block slide show home page module -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="{$this_path}/js/stepcarousel.js"></script>
<link href="{$this_path}/js/stepcarousel.css" rel="stylesheet" type="text/css" media="all" />
{literal}
<script type="text/javascript">
stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	autostep: {enable:false, moveby:1, pause:3000},
	panelbehavior: {speed:500, wraparound:true, wrapbehavior:'pushpull', persist:true},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['{/literal}{$this_path}/js/arrowl.gif{literal}', -5, 80], rightnav: ['{/literal}{$this_path}/js/arrowr.gif{literal}', -20, 80]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'] //content setting ['inline'] or ['ajax', 'path_to_external_file']
})
</script>
{/literal}
<div class="best_deal">&nbsp;</div>
<div id="mygallery" class="stepcarousel">
<div class="belt">
 {foreach name=sale_product item=sale_product from=$sale_products}  
 	<div class="panel">
		<a href="{$sale_product.link|escape:'htmlall':'UTF-8'}"><img src="{$link->getImageLink($sale_product.link_rewrite, $sale_product.id_image, 'home_special')}" /></a>
	</div>
 {/foreach}
</div>
</div>
{/if}
{/if}