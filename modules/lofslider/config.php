<?php
if (!defined('_CAN_LOAD_FILES_'))
	exit;
?>
<link rel="stylesheet" href="<?php echo __PS_BASE_URI__."modules/lofslider/assets/admin/form.css";?>" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" src="<?php echo __PS_BASE_URI__."modules/lofslider/assets/admin/form.js";?>"></script>
<h3><?php echo $this->l('Lof Silder Configuration');?></h3>
<form action="<?php echo $_SERVER['REQUEST_URI'].'&rand='.rand();?>" method="post" id="lofform">
 <input type="submit" name="submit" value="<?php echo $this->l('Update');?>" class="button" />
  <fieldset>
    <legend><img src="../img/admin/contact.gif" /><?php echo $this->l('General Setting'); ?></legend>
    <div id="lof_config_wrrapper" class="clearfix">
      <ul>
      	<li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Theme - Layout');?></label>
            </li>
            <li class="lof-config-right">
              <select class="inputbox select-group" id="paramsslider_module_theme" name="module_theme">
                <?php foreach ($themes as $k=> $theme):?>
                <option <?php if($this->getParamValue("module_theme",'')==$k) echo 'selected="selected"';?> value="<?php echo $k;?>"><?php echo $k;?></option>
                <?php endforeach;?>
              </select>
            </li>
          </ul>
        </li>              	
        
        <li class="row">
          <ul class="row">
            <li class="lof-config-left">
              <label><?php echo $this->l('Get Product From');?></label>
            </li>
            <li class="lof-config-right">
              <select class="inputbox select-group" id="paramsslider_home_sorce" name="home_sorce">              
                <option <?php if($this->getParamValue("home_sorce","selectcat")=="selectcat") echo 'selected="selected"';?> value="selectcat"><?php echo $this->l('Select category');?></option>
                <option <?php if($this->getParamValue("home_sorce","selectcat")=="homefeatured") echo 'selected="selected"';?> value="homefeatured"><?php echo $this->l('Home Featured');?></option>
                  <option <?php if($this->getParamValue("home_sorce","selectcat")=="productids") echo 'selected="selected"';?> value="productids"><?php echo $this->l('Product IDs');?></option>
              </select>
            </li>
          </ul>
          
          <ul class="row home_sorce-selectcat">
            <li class="lof-config-left">
              <label><?php echo $this->l('Select category');?></label>
            </li>
            <li class="lof-config-right">
              <?php 
				$children  = $this->getIndexedCategories();				
				$list = array();			
				$this->treeCategory( 0, $list , $children );
				$selectCat = $this->getParamValue("category","");
				$catArray  = explode(",",$selectCat); 
				//print_r($selectCat);die();
			  ?>
				<select size="10" multiple="multiple" style="width: 90%;" class="inputbox" id="params_category" name="category[]">
					<option <?php if(in_array("",$catArray)) echo 'selected="selected"';?> value="" onclick="lofSelectAll('#params_category');">-- <?php echo $this->l('All Categories');?></option>
					<?php foreach($list as $cat){ ?>					
					<option <?php if(in_array($cat["id_category"],$catArray) || in_array("",$catArray)) echo 'selected="selected"';?> value="<?php echo $cat["id_category"];?>">---| <?php echo $cat["tree"].$cat["name"]; ?></option>
					<?php } ?>
				</select>
            </li>
          </ul>
                         
          <ul class="home_sorce-selectcat">
            <li class="lof-config-left">
              <label><?php echo $this->l('Limit items');?></label>
            </li>
            <li class="lof-config-right">
              <input name="limit_items" id="paramslimit_items" value="<?php echo $this->getParamValue("limit_items","5");?>" class="text_area" type="text">
            </li>
          </ul>       
          
           <ul class="home_sorce-productids">
            <li class="lof-config-left">
              <label><?php echo $this->l('Product IDs');?></label>
            </li>
            <li class="lof-config-right">
              <input name="productids" id="paramsproducts_id" style="width:90%" value="<?php echo $this->getParamValue("productids","1,2,3,4,5");?>" class="text_area" type="text">
            </li>
          </ul>       
           	
        </li>       
		<li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Enable ShaDow');?></label>
            </li>
            <li class="lof-config-right">
              <input type="radio" value="0" <?php if(Configuration::get($this->name.'_shadow')==0) echo 'checked="checked"';?> id="paramsshadow0" name="shadow">
              <label for="paramsshadow0">No</label>
              <input type="radio" value="1" <?php if(Configuration::get($this->name.'_shadow')==1) echo 'checked="checked"';?> id="paramsshadow1" name="shadow">
              <label for="paramsshadow1">Yes</label>
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Enable CSS 3');?></label>
            </li>
            <li class="lof-config-right">
              <input name="enable_css3" id="paramsenable_css30" value="0" <?php if(Configuration::get($this->name.'_enable_css3')==0) echo 'checked="checked"';?> type="radio">
              <label for="paramsenable_css30">No</label>
              <input name="enable_css3" id="paramsenable_css31" value="1" <?php if(Configuration::get($this->name.'_enable_css3')==1) echo 'checked="checked"';?> type="radio">
              <label for="paramsenable_css31">Yes</label>
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Module Height');?></label>
            </li>
            <li class="lof-config-right">
              <input type="text" class="text_area"  value="<?php echo $this->getParamValue("module_height","auto");?>" id="paramsmodule_height" name="module_height">
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Module Width');?></label>
            </li>
            <li class="lof-config-right">
              <input name="module_width" id="paramsmodule_width" value="<?php echo $this->getParamValue("module_width","auto");?>" class="text_area" type="text">
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Display Button');?></label>
            </li>
            <li class="lof-config-right">
              <input name="display_button" id="paramsdisplay_button0" value="0" <?php if(Configuration::get($this->name.'_display_button',1)==0) echo 'checked="checked"';?> type="radio">
              <label for="paramsdisplay_button0">No</label>
              <input name="display_button" id="paramsdisplay_button1" value="1" <?php if(Configuration::get($this->name.'_display_button',1)==1) echo 'checked="checked"';?> type="radio">
              <label for="paramsdisplay_button1">Yes</label>
            </li>
          </ul>
        </li>        
      </ul>
    </div>
  </fieldset>
  <fieldset>
    <legend><img src="../img/admin/contact.gif" /><?php echo $this->l('Main Slider Setting'); ?></legend>
    <div id="lof_config_wrrapper" class="clearfix">
      <ul>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Content Slider Layout');?></label>
            </li>
            <li class="lof-config-right">
              <select class="inputbox select-group" id="paramsslider_layout" name="slider_layout">
                <option <?php if(Configuration::get($this->name.'_slider_layout','image-description')=="image-description") echo 'selected="selected"';?> value="image-description">image-description</option>
                <option <?php if(Configuration::get($this->name.'_slider_layout')=="images") {echo 'selected="selected"';};?> value="images">images</option>
              </select>
            </li>
          </ul>
        </li>
        <li class="row slider_layout-image-description">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Description Max Chars');?></label>
            </li>
            <li class="lof-config-right">
              <input type="text" class="text_area" value="<?php echo $this->getParamValue("des_max_chars",100);?>" id="paramsdescription_max_chars" name="des_max_chars">
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Default Slider Showed');?></label>
            </li>
            <li class="lof-config-right">
              <input name="start_item" id="paramsstart_item" value="<?php echo $this->getParamValue("start_item",0);?>" class="text_area" type="text">
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label for="paramsdisplay_cre_main_size"><?php echo $this->l('Create Main Image sized');?></label>                            
            </li>
            <li class="lof-config-right">
              <input name="cre_main_size" class="select-option" id="paramsdisplay_cre_main_size0" value="0" <?php if($this->getParamValue("cre_main_size",0)==0) echo 'checked="checked"';?> type="radio">
              <label for="paramsdisplay_button0">No</label>
              <input name="cre_main_size" id="paramsdisplay_cre_main_size1" value="1" <?php if($this->getParamValue("cre_main_size",1)==1) echo 'checked="checked"';?> type="radio">
              <label for="paramsdisplay_button1">Yes</label>
              <i class="clearfix">(<?php echo $this->l("You can create a new size or use available size.");?>)</i>
            </li>
          </ul>
        </li>
        <li class="row cre_main_size-0">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Main Image Size');?></label>                            
            </li>
            <li class="lof-config-right">
              <select class="inputbox select-group" id="paramsslider_main_img_size" name="main_img_size">
                <?php foreach ($formats as $k=> $format):?>
                <option <?php if($this->getParamValue("main_img_size",'thickbox')==$format['name']) echo 'selected="selected"';?> value="<?php echo $format['name'];?>"> <?php echo $format['name'];?> (<?php echo $format['width']."x".$format['height'];?>) </option>
                <?php endforeach;?>
              </select>
              <i class="clearfix">(<?php echo $this->l("You can create a new size via Menu <b>Preferences/Image</b>.");?>)</i>         
            </li>
          </ul>
        </li>
        <li class="row cre_main_size-1">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Main Image Height');?></label>
            </li>
            <li class="lof-config-right">
              <input type="text" class="text_area" value="<?php echo $this->getParamValue("main_height",300);?>" id="paramsmain_height" name="main_height">
            </li>
          </ul>
        </li>
        <li class="row cre_main_size-1">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Main Image Width');?></label>
            </li>
            <li class="lof-config-right">
              <input type="text" class="text_area" value="<?php echo $this->getParamValue("main_width",960);?>" id="paramsmain_width" name="main_width">
            </li>
          </ul>
        </li>        
      </ul>
    </div>
  </fieldset>
  <fieldset>
    <legend><img src="../img/admin/contact.gif" /><?php echo $this->l('Navigator Setting'); ?></legend>
    <div id="lof_config_wrrapper" class="clearfix">
      <ul>
      	<li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Navigator position');?></label>
            </li>
            <li class="lof-config-right">
              <select class="inputbox" id="paramsnavigator_pos" name="nav_pos">
             
                <option <?php if($this->getParamValue("nav_pos","horizontal") == "horizontal") echo 'selected="selected"';?> value="horizontal"><?php echo $this->l('Horizontal');?></option>
                <option <?php if($this->getParamValue("nav_pos","horizontal") == "vertical") echo 'selected="selected"';?> value="vertical"><?php echo $this->l('Vertical');?></option>              
                   <option <?php if($this->getParamValue("nav_pos","horizontal") == "none") echo 'selected="selected"';?> value="none"><?php echo $this->l('Disable');?></option>  
              </select>
            </li>
          </ul>
        </li>      
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Max Nav Items display');?></label>
            </li>
            <li class="lof-config-right">
              <input type="text" class="text_area" value="<?php echo $this->getParamValue("max_nav_items",3);?>" id="paramsmax_nav_items" name="max_nav_items">
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Navigator Item Height');?></label>
            </li>
            <li class="lof-config-right">
              <input type="text" class="text_area" value="<?php echo $this->getParamValue("nav_height",32);?>" id="paramsnavitem_height" name="nav_height">
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Navigator Item Width');?></label>
            </li>
            <li class="lof-config-right">
              <input type="text" class="text_area" value="<?php echo $this->getParamValue("nav_width",84);?>" id="paramsnav_width" name="nav_width">
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Thumbnail Padding X');?></label>
            </li>
            <li class="lof-config-right">
              <input type="text" class="text_area" value="<?php echo $this->getParamValue("thumb_pad_x",10);?>" id="paramsthumb_pad_x" name="thumb_pad_x">
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Thumbnail Padding Y');?></label>
            </li>
            <li class="lof-config-right">
              <input type="text" class="text_area" value="<?php echo $this->getParamValue("thumb_pad_y",6);?>" id="paramsthumb_pad_y" name="thumb_pad_y">
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Render Thumbnail');?></label>
            </li>
            <li class="lof-config-right">
              <input name="auto_renthu" id="paramsauto_renderthumb0" value="0" <?php if($this->getParamValue("auto_renthu",1) == 0) echo 'checked="checked"';?> type="radio">
              <label for="paramsauto_renderthumb0">No</label>
              <input name="auto_renthu" id="paramsauto_renderthumb1" value="1" <?php if($this->getParamValue("auto_renthu",1) == 1) echo 'checked="checked"';?> type="radio">
              <label for="paramsauto_renderthumb1">Yes</label>
            </li>
          </ul>
        </li>        
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label for="paramsdisplay_cre_thumb_size0"><?php echo $this->l('Create Thumbnail sized');?></label>                            
            </li>
            <li class="lof-config-right">
              <input name="cre_thumb_size" class="select-option" id="paramsdisplay_cre_thumb_size0" value="0" <?php if($this->getParamValue("cre_thumb_size",0)==0) echo 'checked="checked"';?> type="radio">
              <label for="paramsdisplay_button0">No</label>
              <input name="cre_thumb_size" id="paramsdisplay_cre_thumb_size1" value="1" <?php if($this->getParamValue("cre_thumb_size",1)==1) echo 'checked="checked"';?> type="radio">
              <label for="paramsdisplay_button1">Yes</label>
              <i class="clearfix">(<?php echo $this->l("You can create a new size or use available size.");?>)</i>
            </li>
          </ul>
        </li>        
        <li class="row cre_thumb_size-0">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Thumbnail Size');?></label>
            </li>
            <li class="lof-config-right">
              <select class="inputbox" id="paramsslider_thumb_size" name="thumb_size">
                <?php foreach ($formats as $k=> $format):?>
                <option <?php if($this->getParamValue("thumb_size",'small')==$format['name']) echo 'selected="selected"';?> value="<?php echo $format['name'];?>"> <?php echo $format['name'];?> (<?php echo $format['width']."x".$format['height'];?>) </option>
                <?php endforeach;?>
              </select>              
              <i class="clearfix">(<?php echo $this->l("You can create a new size via Menu <b>Preferences/Image</b>.");?>)</i> </li>
          </ul>
        </li>
                
        <li class="row cre_thumb_size-1">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Thumbnail height');?></label>
            </li>
            <li class="lof-config-right">
              <input type="text" class="text_area" value="<?php echo $this->getParamValue("thumb_height",35);?>" id="paramsthumbnail_height" name="thumb_height">
            </li>
          </ul>
        </li>
        <li class="row cre_thumb_size-1">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Thumbnail width');?></label>
            </li>
            <li class="lof-config-right">
              <input type="text" class="text_area" value="<?php echo $this->getParamValue("thumb_width",85);?>" id="paramsthumbnail_width" name="thumb_width">
            </li>
          </ul>
        </li>
        
      </ul>
    </div>
  </fieldset>
  <fieldset>
    <legend><img src="../img/admin/contact.gif" /><?php echo $this->l('Effect Setting'); ?></legend>
    <div id="lof_config_wrrapper" class="clearfix">
      <ul>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Enable Preload');?></label>
            </li>
            <li class="lof-config-right">
              <input name="preload" id="paramspreload0" value="0" <?php if($this->getParamValue("preload",1) == 0) echo 'checked="checked"';?> type="radio">
              <label for="paramspreload0">No</label>
              <input name="preload" id="paramspreload1" value="1" <?php if($this->getParamValue("preload",1) == 1) echo 'checked="checked"';?> type="radio">
              <label for="paramspreload1">Yes</label>
            </li>
          </ul>
        </li>
       
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Interval');?></label>
            </li>
            <li class="lof-config-right">
              <input type="text" class="text_area" value="<?php echo $this->getParamValue("interval","6000");?>" id="paramsinterval" name="interval">
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Animation duration');?></label>
            </li>
            <li class="lof-config-right">
              <input type="text" class="text_area" value="<?php echo $this->getParamValue("duration","1300");?>" id="paramsduration" name="duration">
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Animation Transition');?></label>
            </li>
            <li class="lof-config-right">
            <?php $effectArra = 
            	array("easeInQuad"=>"easeInQuad","easeOutQuad"=>"easeOutQuad","easeInOutQuad"=>"easeInOutQuad"
	            	 ,"easeInCubic"=>"easeInCubic","easeOutCubic"=>"easeOutCubic","easeInOutCubic"=>"easeInOutCubic"
	            	 ,"easeInQuart"=>"easeInQuart","easeOutQuart"=>"easeOutQuart","easeInOutQuart"=>"easeInOutQuart"
	            	 ,"easeInQuint"=>"easeInQuint","easeOutQuint"=>"easeOutQuint","easeInOutQuint"=>"easeInOutQuint"
	            	 ,"easeInSine"=>"easeInSine","easeOutSine"=>"easeOutSine","easeInOutSine"=>"easeInOutSine"
	            	 ,"easeInExpo"=>"easeInExpo","easeOutExpo"=>"easeOutExpo","easeInOutExpo"=>"easeInOutExpo"
	            	 ,"easeInCirc"=>"easeInCirc","easeOutCirc"=>"easeOutCirc","easeInOutCirc"=>"easeInOutCirc"	            	 
	            	 ,"easeInElastic"=>"easeInElastic","easeOutElastic"=>"easeOutElastic","easeInOutElastic"=>"easeInOutElastic"
            		 ,"easeInBack"=>"easeInBack","easeOutBack"=>"easeOutBack","easeInOutBack"=>"easeInOutBack"
            		 ,"easeInBounce"=>"easeInBounce","easeOutBounce"=>"easeOutBounce","easeInOutBounce"=>"easeInOutBounce"
            	);            	
            ?>
              <select class="inputbox" id="paramseffect" name="effect">
              	<?php foreach ($effectArra as $keyEff=>$valEff) {?>
              		<option <?php if($this->getParamValue("effect","easeInOutExpo") == $keyEff) echo 'selected="selected"';?> value="<?php echo $keyEff;?>"><?php echo $valEff;?></option>	
              	<?php } ?>                               
              </select>
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Auto Start');?></label>
            </li>
            <li class="lof-config-right">
              <input name="auto_start" id="paramsauto_start0" <?php if($this->getParamValue("auto_start",0)==0) echo 'checked="checked"';?> value="0" type="radio">
              <label for="paramsauto_start0">No</label>
              <input name="auto_start" id="paramsauto_start1" value="1" <?php if($this->getParamValue("auto_start",0)==1) echo 'checked="checked"';?> type="radio">
              <label for="paramsauto_start1">Yes</label>
            </li>
          </ul>
        </li>
        <li class="row">
          <ul>
            <li class="lof-config-left">
              <label><?php echo $this->l('Click link, Open In');?></label>
            </li>
            <li class="lof-config-right">
              <select class="inputbox" id="paramsopen_target" name="open_target">
                <option <?php if($this->getParamValue("open_target","_blank") == "_blank") echo 'selected="selected"';?> value="_blank">New window</option>
                <option <?php if($this->getParamValue("open_target","_blank") == "_parent") echo 'selected="selected"';?> value="_parent">Parent window</option>
              </select>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </fieldset>
<br />
  <input type="submit" name="submit" value="<?php echo $this->l('Update');?>" class="button" />
  	<fieldset><legend><img src="../img/admin/comment.gif" alt="" title="" /><?php echo $this->l('Information');?></legend>
    	
    	<ul>
        	     <li>+ <a target="_blank" href="http://landofcoder.com/our-porfolios/prestashop/item/53-prestashop-lof-slider-module.html"><?php echo $this->l('Detail Information');?></li>
                 <li>+ <a target="_blank" href="http://landofcoder.com/forum/forum.html?id=40"><?php echo $this->l('Forum support');?></a></li>
                 <li>+ <a target="_blank" href="http://landofcoder.com/submit-request.html"><?php echo $this->l('Customization/Technical Support Via Email');?>.</a></li>
                 <li>+ <a target="_blank" href="http://landofcoder.com/download/guides-docs/docs-guide-prestashop/121-prestashop13x-lofslider-module.html"><?php echo $this->l('UserGuide ');?></a></li>

        </ul>
        <br />
        @copyright: <a href="http://landofcoder.com">LandOfCoder.com</a>
    </fieldset>
</form>
