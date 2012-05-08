<?php /* Smarty version Smarty-3.0.7, created on 2012-05-08 02:57:10
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/modules/lofslider/tmpl/default/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:554557254fa86f66a548f9-54434554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51678b23975cee25c893067e9a623114958a2817' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/modules/lofslider/tmpl/default/default.tpl',
      1 => 1336412123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '554557254fa86f66a548f9-54434554',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop-hec/tools/smarty/plugins/modifier.escape.php';
?><div id="lofslider<?php echo $_smarty_tpl->getVariable('prfSlide')->value;?>
<?php echo $_smarty_tpl->getVariable('blockid')->value;?>
" class="lof-slider" style="height:<?php echo $_smarty_tpl->getVariable('moduleHeight')->value;?>
; width:<?php echo $_smarty_tpl->getVariable('moduleWidth')->value;?>
">
 <div class="lof-wrapper">
 <?php if (($_smarty_tpl->getVariable('params')->value->get('preload',1)==1)){?>
 <div class="preload"><div></div></div>
 <?php }?>
<!-- MAIN CONTENT --> 
  <div class="lof-main-outer" style="height:<?php echo $_smarty_tpl->getVariable('params')->value->get('main_height',300);?>
px;width:<?php echo $_smarty_tpl->getVariable('params')->value->get('main_width',650);?>
px;">
  	<ul class="lof-main-wapper">
 			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
            	<li style="width:<?php echo $_smarty_tpl->getVariable('params')->value->get('main_width','650');?>
px; height:<?php echo $_smarty_tpl->getVariable('params')->value->get('main_height','300');?>
px; display:block">
                	<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="$product.name" class="product_image">
                		<img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['mainImge'];?>
"  alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8');?>
" />
                	</a>
                      	<?php if (($_smarty_tpl->getVariable('params')->value->get('slider_layout','image-description')=='image-description')){?>
                         <div class="lof-description">
                            <h4 class="lof-title">
                                <a  <?php echo $_smarty_tpl->getVariable('target')->value;?>
  href="<?php echo $_smarty_tpl->getVariable('row')->value->link;?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

                                </a>
                            </h4>
                            <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

                        </div> 
                       <?php }?>
                </li>
            <?php }} ?>
    </ul>   
  </div>
  <!-- END MAIN CONTENT --> 
  
    <?php if (($_smarty_tpl->getVariable('params')->value->get('nav_pos','horizontal')!='none')){?>
   <div class="lof-navigator-wapper  lof-<?php echo $_smarty_tpl->getVariable('params')->value->get('nav_pos','horizontal');?>
">
         <?php if (($_smarty_tpl->getVariable('showButtons')->value==1)){?> 
             <div onclick="return false" href="" class="lof-next"></div> 
           
           <?php }?>
            <div class="lof-navigator-outer">
                <ul class="lof-navigator">
                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
                    <li>
                       <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['thumbImge'];?>
" height="<?php echo $_smarty_tpl->getVariable('thumb_size')->value['height'];?>
" width="<?php echo $_smarty_tpl->getVariable('thumb_size')->value['width'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8');?>
" />
                    </li>
                     <?php }} ?> 
                </ul>
            </div>	  
			<?php if (($_smarty_tpl->getVariable('showButtons')->value==1)){?>
			<div onclick="return false" href="" class="lof-previous"></div>  	
			<?php }?>
      </div> 	
      <?php }?>
 </div>  
  <?php if (($_smarty_tpl->getVariable('params')->value->get('shadow',1)==1)){?>
  <div class="lof-bottom-bg">&nbsp;</div> 
 <?php }?>
</div>