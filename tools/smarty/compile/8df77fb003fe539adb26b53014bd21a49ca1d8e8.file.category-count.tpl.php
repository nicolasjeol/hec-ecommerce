<?php /* Smarty version Smarty-3.0.7, created on 2012-05-06 15:40:54
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/prestashop/./category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7688364764fa67f66e675d8-98162557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8df77fb003fe539adb26b53014bd21a49ca1d8e8' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/prestashop/./category-count.tpl',
      1 => 1335107263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7688364764fa67f66e675d8-98162557',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if ($_smarty_tpl->getVariable('category')->value->id==1||$_smarty_tpl->getVariable('nb_products')->value==0){?><?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'There is'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are'),$_smarty_tpl);?>
<?php }?>
	<?php echo $_smarty_tpl->getVariable('nb_products')->value;?>

	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'product.'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'products.'),$_smarty_tpl);?>
<?php }?>
<?php }?>