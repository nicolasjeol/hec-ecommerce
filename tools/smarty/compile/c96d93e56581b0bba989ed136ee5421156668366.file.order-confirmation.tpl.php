<?php /* Smarty version Smarty-3.0.7, created on 2012-05-14 15:31:32
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17969916954fb10934b01bc1-75917660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c96d93e56581b0bba989ed136ee5421156668366' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/order-confirmation.tpl',
      1 => 1336325339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17969916954fb10934b01bc1-75917660',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<script type="text/javascript">
<!--
	var baseDir = '<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
';
-->
</script>

<?php ob_start(); ?><?php echo smartyTranslate(array('s'=>'Order confirmation'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1><?php echo smartyTranslate(array('s'=>'Order confirmation'),$_smarty_tpl);?>
</h1>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, null);?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./order-steps.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./errors.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php echo $_smarty_tpl->getVariable('HOOK_ORDER_CONFIRMATION')->value;?>

<?php echo $_smarty_tpl->getVariable('HOOK_PAYMENT_RETURN')->value;?>


<br />
<?php if ($_smarty_tpl->getVariable('is_guest')->value){?>
	<p><?php echo smartyTranslate(array('s'=>'Your order ID is:'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->getVariable('id_order_formatted')->value;?>
</span> . <?php echo smartyTranslate(array('s'=>'Your order ID has been sent to your e-mail.'),$_smarty_tpl);?>
</p>
	<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('guest-tracking.php',true);?>
?id_order=<?php echo $_smarty_tpl->getVariable('id_order')->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Follow my order'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/order.gif" alt="<?php echo smartyTranslate(array('s'=>'Follow my order'),$_smarty_tpl);?>
" class="icon" /></a>
	<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('guest-tracking.php',true);?>
?id_order=<?php echo $_smarty_tpl->getVariable('id_order')->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Follow my order'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Follow my order'),$_smarty_tpl);?>
</a>
<?php }else{ ?>
	<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('history.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to orders'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/order.gif" alt="<?php echo smartyTranslate(array('s'=>'Back to orders'),$_smarty_tpl);?>
" class="icon" /></a>
	<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('history.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to orders'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Back to orders'),$_smarty_tpl);?>
</a>
<?php }?>
