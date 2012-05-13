{if $page_name eq 'index'}
<!-- Module Editorial -->
<link href="{$this_path}js/prod.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{$base_dir}/slider/css/global.css">
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
        $(function(){
            $('#slides').slides({
                preload: true,
                preloadImage: "{$this_path}img/loading.gif",
                play: 6000,
                pause: 2500,
                hoverPause: true,
                animationStart: function(current){
                    $('.caption').animate({
                        bottom:-35
                    },100);
                    if (window.console && console.log) {
                        // example return of current slide number
                        console.log('animationStart on slide: ', current);
                    };
                },
                animationComplete: function(current){
                    $('.caption').animate({
                        bottom:-130
                    },200);
                    if (window.console && console.log) {
                        // example return of current slide number
                        console.log('animationComplete on slide: ', current);
                    };
                },
                slidesLoaded: function() {
                    $('.caption').animate({
                        bottom:-130
                    },200);
                }
            });
        });
    </script>

{/literal}


		<div id="container" style="position: absolute; left: 155px; top : 157px; ">
		<div id="example">
			<div id="slides">
				<div class="slides_container">
                  	<div class="slide">
						<img style="width: 950px;" src="{$img_prod_dir}slider/Feel-legendary.gif" alt="Vintage" title="Vintage"/>
{*                        <div class="caption" style="bottom:0">*}
{*							<p>Visibella</p>*}
{*						</div>*}
					</div>
					<div class="slide">
						<img src="{$img_prod_dir}slider/Trendy.gif" alt="Trendy" title="Trendy"/>
{*                        <div class="caption">*}
{*							<p>Visibello</p>*}
{*						</div>*}
					</div>
					<div class="slide">
                        <a href="{$link->getPageLink('contact-form.php')}" > <img style="width: 950px;" src="{$img_prod_dir}slider/Become-unique.gif" alt="find your look"/> </a>
{*						<div class="caption">*}
{*							<p>Find your Style !</p>*}
{*						</div>*}
					</div>
					<div class="slide">
                    <a href="{$link->getPageLink('magazine.php')}"> <img src="{$img_prod_dir}slider/magazine2.png" alt="magazine"/> </a>
{*						<div class="caption">*}
{*							<p>See the magazine of the week</p>*}
{*						</div>*}
					</div>
				</div>
				<a href="#" class="prev"><img src="{$base_dir}/slider/img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="{$base_dir}/slider/img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
			</div>
		</div>
	</div>

   <a href="product.php?id_product=1495"> <img style="width: 167px; position: absolute; left: 1100px; top : 563px;" src="{$img_prod_dir}slider/commentary.png" alt="comment customer" title="comment customer"/>
    </a>


{*    <div>*}
{*        <img src="{$img_prod_dir}advantages/sumup.png" alt="sum up" title="advantages of Visibelly"/>*}
{*    </div>*}

    <div>
        <img style="position: absolute; left: 145px; top : 608px;" src="{$img_prod_dir}advantages/vintage.png" alt="vintage glasses" title="vintage glasses"/>
        <img style="position: absolute; left: 393px; top : 609px;" src="{$img_prod_dir}advantages/trendy.png" alt="trendy glasses" title="trendy glasses"/>
        <a href="{$link->getPageLink('magazine.php')}">
            <img style="position: absolute; left: 640px; top : 609px;" src="{$img_prod_dir}advantages/visibellymag.png" alt="Magazine of Visibelly" title="Magazine of Visibelly"/>
        </a>
        <a href="{$link->getPageLink('contact-form.php')}">
            <img style="position: absolute; left: 894px; top : 609px;" src="{$img_prod_dir}advantages/designer.png" alt="designer of visibelly" title="designer of visibelly"/>
        </a>

        <img style="width : 980px; position: absolute; left: 137px; top : 950px;" src="{$img_prod_dir}advantages/sumup.png" alt="sumup visibelly" title="sumup visibelly"/>
    </div>


{/if}