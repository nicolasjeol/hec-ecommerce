<?php /* Smarty version Smarty-3.0.7, created on 2012-05-18 03:42:47
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/blockcart/blockcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21280150864fb5a917209099-80626362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e7f5222f4903ad7933ce5f9b13a7b8da1f67785' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/blockcart/blockcart.tpl',
      1 => 1336948100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21280150864fb5a917209099-80626362',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if ($_smarty_tpl->getVariable('ajax_allowed')->value){?>
<script type="text/javascript">
var CUSTOMIZE_TEXTFIELD = <?php echo $_smarty_tpl->getVariable('CUSTOMIZE_TEXTFIELD')->value;?>
;
var customizationIdMessage = '<?php echo smartyTranslate(array('s'=>'Customization #','mod'=>'blockcart','js'=>1),$_smarty_tpl);?>
';
var removingLinkText = '<?php echo smartyTranslate(array('s'=>'remove this product from my cart','mod'=>'blockcart','js'=>1),$_smarty_tpl);?>
';
</script>
<?php }?>

<!-- MODULE Block cart -->
<!-- /MODULE Block cart -->

