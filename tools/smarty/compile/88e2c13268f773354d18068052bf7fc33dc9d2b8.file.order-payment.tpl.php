<?php /* Smarty version Smarty-3.0.7, created on 2012-05-07 22:33:47
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/order-payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9236315344fa831ab363790-39717127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e2c13268f773354d18068052bf7fc33dc9d2b8' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/order-payment.tpl',
      1 => 1336325339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9236315344fa831ab363790-39717127',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
	<script type="text/javascript">
	<!--
		var baseDir = '<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
';
	-->
	</script>

	<?php ob_start(); ?><?php echo smartyTranslate(array('s'=>'Your payment method'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?><h1><?php echo smartyTranslate(array('s'=>'Choose your payment method'),$_smarty_tpl);?>
</h1><?php }else{ ?><h2>3. <?php echo smartyTranslate(array('s'=>'Choose your payment method'),$_smarty_tpl);?>
</h2><?php }?>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
	<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, null);?>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./order-steps.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./errors.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }else{ ?>
	<div id="opc_payment_methods" class="opc-main-block">
		<div id="opc_payment_methods-overlay" class="opc-overlay" style="display: none;"></div>
<?php }?>

<div id="HOOK_TOP_PAYMENT"><?php echo $_smarty_tpl->getVariable('HOOK_TOP_PAYMENT')->value;?>
</div>

<?php if ($_smarty_tpl->getVariable('HOOK_PAYMENT')->value){?>
	<?php if (!$_smarty_tpl->getVariable('opc')->value){?><h4><?php echo smartyTranslate(array('s'=>'Please select your preferred payment method to pay the amount of'),$_smarty_tpl);?>
&nbsp;<span class="price"><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->getVariable('total_price')->value),$_smarty_tpl);?>
</span> <?php if ($_smarty_tpl->getVariable('taxes_enabled')->value){?><?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?></h4><br /><?php }?>
	<?php if ($_smarty_tpl->getVariable('opc')->value){?><div id="opc_payment_methods-content"><?php }?>
		<div id="HOOK_PAYMENT"><?php echo $_smarty_tpl->getVariable('HOOK_PAYMENT')->value;?>
</div>
	<?php if ($_smarty_tpl->getVariable('opc')->value){?></div><?php }?>
<?php }else{ ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No payment modules have been installed.'),$_smarty_tpl);?>
</p>
<?php }?>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
	<p class="cart_navigation"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
?step=2" title="<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
" class="button">&laquo; <?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
</a></p>
<?php }else{ ?>
	</div>
<?php }?>

