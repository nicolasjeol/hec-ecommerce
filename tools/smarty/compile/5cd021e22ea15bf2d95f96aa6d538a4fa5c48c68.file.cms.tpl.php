<?php /* Smarty version Smarty-3.0.7, created on 2012-05-16 17:25:26
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/cms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21106548464fb3c6e6d7e9b6-77448101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cd021e22ea15bf2d95f96aa6d538a4fa5c48c68' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/cms.tpl',
      1 => 1336325339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21106548464fb3c6e6d7e9b6-77448101',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop-hec/tools/smarty/plugins/modifier.escape.php';
?>
<?php if (isset($_smarty_tpl->getVariable('cms',null,true,false)->value)&&$_smarty_tpl->getVariable('cms')->value->id!=$_smarty_tpl->getVariable('cgv_id')->value){?>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>
<?php if (isset($_smarty_tpl->getVariable('cms',null,true,false)->value)&&!isset($_smarty_tpl->getVariable('category',null,true,false)->value)){?>
	<?php if (!$_smarty_tpl->getVariable('cms')->value->active){?>
		<br />
		<div id="admin-action-cms">
			<p><?php echo smartyTranslate(array('s'=>'This CMS page is not visible to your customers.'),$_smarty_tpl);?>

			<input type="hidden" id="admin-action-cms-id" value="<?php echo $_smarty_tpl->getVariable('cms')->value->id;?>
" />
			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Publish'),$_smarty_tpl);?>
" class="exclusive" onclick="submitPublishCMS('<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
<?php echo $_GET['ad'];?>
', 0)"/>			
			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
" class="exclusive" onclick="submitPublishCMS('<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
<?php echo $_GET['ad'];?>
', 1)"/>			
			</p>
			<div class="clear" ></div>
			<p id="admin-action-result"></p>
			</p>
		</div>
	<?php }?>
	<div class="rte<?php if ($_smarty_tpl->getVariable('content_only')->value){?> content_only<?php }?>">
		<?php echo $_smarty_tpl->getVariable('cms')->value->content;?>

	</div>
<?php }elseif(isset($_smarty_tpl->getVariable('category',null,true,false)->value)){?>
	<div>
		<h1><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('category')->value->name,'htmlall','UTF-8');?>
</h1>
		<?php if (isset($_smarty_tpl->getVariable('sub_category',null,true,false)->value)&!empty($_smarty_tpl->getVariable('sub_category',null,true,false)->value)){?>	
			<h4><?php echo smartyTranslate(array('s'=>'List of sub categories in '),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('category')->value->name;?>
<?php echo smartyTranslate(array('s'=>':'),$_smarty_tpl);?>
</h4>
			<ul class="bullet">
				<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sub_category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value){
?>
					<li>
						<a href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('link')->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_cms_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']),'htmlall','UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['subcategory']->value['name'],'htmlall','UTF-8');?>
</a>
					</li>
				<?php }} ?>
			</ul>
		<?php }?>
		<?php if (isset($_smarty_tpl->getVariable('cms_pages',null,true,false)->value)&!empty($_smarty_tpl->getVariable('cms_pages',null,true,false)->value)){?>
		<h4><?php echo smartyTranslate(array('s'=>'List of pages in '),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('category')->value->name;?>
<?php echo smartyTranslate(array('s'=>':'),$_smarty_tpl);?>
</h4>
			<ul class="bullet">
				<?php  $_smarty_tpl->tpl_vars['cmspages'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cms_pages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cmspages']->key => $_smarty_tpl->tpl_vars['cmspages']->value){
?>
					<li>
						<a href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('link')->value->getCMSLink($_smarty_tpl->tpl_vars['cmspages']->value['id_cms'],$_smarty_tpl->tpl_vars['cmspages']->value['link_rewrite']),'htmlall','UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cmspages']->value['meta_title'],'htmlall','UTF-8');?>
</a>
					</li>
				<?php }} ?>
			</ul>
		<?php }?>
	</div>
<?php }else{ ?>
	<?php echo smartyTranslate(array('s'=>'This page does not exist.'),$_smarty_tpl);?>

<?php }?>
<br />