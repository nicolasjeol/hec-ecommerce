<?php /* Smarty version Smarty-3.0.7, created on 2012-05-14 00:59:28
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/modules/productcomments//tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17879339894fb03cd044f504-42292689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2733251b3547c56da5a47bdadbd18261026be87e' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/modules/productcomments//tab.tpl',
      1 => 1335107262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17879339894fb03cd044f504-42292689',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<li><a href="#idTab5" class="idTabHrefShort"><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'productcomments'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->getVariable('nbComments')->value;?>
)</a></li>