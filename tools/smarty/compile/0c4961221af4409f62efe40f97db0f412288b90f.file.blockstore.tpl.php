<?php /* Smarty version Smarty-3.0.7, created on 2012-05-06 16:33:02
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/modules/blockstore/blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14369228204fa68b9e6747c7-02115399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c4961221af4409f62efe40f97db0f412288b90f' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/modules/blockstore/blockstore.tpl',
      1 => 1335107259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14369228204fa68b9e6747c7-02115399',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<h4><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('stores.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</a></h4>
	<div class="block_content blockstore">
		<p>
			<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('stores.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('module_dir')->value;?>
<?php echo $_smarty_tpl->getVariable('store_img')->value;?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
" width="174" height="115" /></a><br />
			<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('stores.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Discover our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</a>
		</p>
	</div>
</div>
<!-- /Block stores module -->
