<?php /* Smarty version Smarty-3.0.7, created on 2012-05-05 19:48:39
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/prestashop/./product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14291767384fa567f7403f27-00207458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '560f5b533f73754c65534f5d988d76f1c6aa415b' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/prestashop/./product-compare.tpl',
      1 => 1335107264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14291767384fa567f7403f27-00207458',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php if ($_smarty_tpl->getVariable('comparator_max_item')->value){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product.','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than','js'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->getVariable('comparator_max_item')->value;?>
 <?php echo smartyTranslate(array('s'=>'product(s) in the product comparator','js'=>1),$_smarty_tpl);?>
";
//]]>
</script>
	<form method="get" action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('products-comparison.php');?>
" onsubmit="true">
		<p>
		<input type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" style="float:right" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		</p>
	</form>
<?php }?>

