<?php /* Smarty version Smarty-3.0.7, created on 2012-05-10 23:53:45
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/modules/producttooltip/producttooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16173474334fac38e98a4592-02493895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a976f9ecbc5d73058e34d49cbf1360399568ab' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/modules/producttooltip/producttooltip.tpl',
      1 => 1335107262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16173474334fac38e98a4592-02493895',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<script type="text/javascript">
$(document).ready(function() {
	<?php if (isset($_smarty_tpl->getVariable('nb_people',null,true,false)->value)){?>$.jGrowl('<?php echo $_smarty_tpl->getVariable('nb_people')->value;?>
 <?php if ($_smarty_tpl->getVariable('nb_people')->value==1){?><?php echo smartyTranslate(array('s'=>'person is currently watching','mod'=>'producttooltip'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'people are currently watching','mod'=>'producttooltip'),$_smarty_tpl);?>
<?php }?> <?php echo smartyTranslate(array('s'=>'this product','mod'=>'producttooltip'),$_smarty_tpl);?>
', { life: 3500 });<?php }?>
	<?php if (isset($_smarty_tpl->getVariable('date_last_order',null,true,false)->value)){?>$.jGrowl('<?php echo smartyTranslate(array('s'=>'This product was bought last','mod'=>'producttooltip'),$_smarty_tpl);?>
 <?php echo Tools::dateFormat(array('date'=>$_smarty_tpl->getVariable('date_last_order')->value,'full'=>1),$_smarty_tpl);?>
', { life: 3500 });<?php }?>
	<?php if (isset($_smarty_tpl->getVariable('date_last_cart',null,true,false)->value)){?>$.jGrowl('<?php echo smartyTranslate(array('s'=>'This product was added to cart last','mod'=>'producttooltip'),$_smarty_tpl);?>
 <?php echo Tools::dateFormat(array('date'=>$_smarty_tpl->getVariable('date_last_cart')->value,'full'=>1),$_smarty_tpl);?>
', { life: 3500 });<?php }?>
});
</script>
