<div id="lofslider{$prfSlide}{$blockid}" class="lof-slider-noshadown" style="height:{$moduleHeight}; width:{$moduleWidth}">

 <div class="lof-wrapper {$css3Class}">
 {if ($params->get('preload',1)==1)}
 <div class="preload"><div></div></div>
 {/if}
<!-- MAIN CONTENT --> 
  <div class="lof-main-outer" style="height:{$params->get('main_height',300)}px;width:{$params->get('main_width',650)}px;">
  	<ul class="lof-main-wapper">
 			{foreach from=$products item=product name=blockLofSlideShow}
            	<li style="width:{$params->get('main_width','650')}px; height:{$params->get('main_height','300')}px; display:block">
                	<a href="{$product.link}" title="$product.name" class="product_image">
                		<img src="{$product.mainImge}"  alt="{$product.name|escape:html:'UTF-8'}" />
                	</a>
                      	{if ($params->get('slider_layout','image-description')=='image-description')}
                         <div class="lof-description">
                            <h4 class="lof-title">
                                <a  {$target}  href="{$row->link}" title="{$product.name}">
                                {$product.name}
                                </a>
                            </h4>
                            {$product.description}
                        </div> 
                       {/if}
                </li>
            {/foreach}
    </ul>   
  </div>
  <!-- END MAIN CONTENT --> 
   {if ($showButtons==1)}
  <div class="lof-buttons-control lof-{$params->get('nav_pos','horizontal')}">
  	 <div onclick="return false" href="" class="lof-next"></div> 
      <div onclick="return false" href="" class="lof-previous"></div>  
  </div>
   {/if}
     {if ($params->get('nav_pos','horizontal')!='none')}
   <div class="lof-navigator-wapper lof-{$params->get('navigator_pos','horizontal')}">
            <div class="lof-navigator-outer">
                <ul class="lof-navigator">
                    {foreach from=$products item=product name=blockLofSlideShow}
                    <li>
                       <img src="{$product.thumbImge}" height="{$thumb_size.height}" width="{$thumb_size.width}" alt="{$product.name|escape:html:'UTF-8'}" />
                    </li>
                     {/foreach} 
                </ul>
            </div>		
      </div> 	
         {/if}
 </div>  
  {if ($params->get('shadow',1)==1)}
  <div class="lof-bottom-bg">&nbsp;</div> 
 {/if}
</div>