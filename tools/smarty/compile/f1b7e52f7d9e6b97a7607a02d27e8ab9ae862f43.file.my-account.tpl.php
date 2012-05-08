<?php /* Smarty version Smarty-3.0.7, created on 2012-05-07 22:18:24
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16425927994fa82e10748673-09739600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1b7e52f7d9e6b97a7607a02d27e8ab9ae862f43' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/my-account.tpl',
      1 => 1336325339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16425927994fa82e10748673-09739600',
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

<?php ob_start(); ?><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</h1>
<h4><?php echo smartyTranslate(array('s'=>'Welcome to your account. Here you can manage your addresses and orders.'),$_smarty_tpl);?>
</h4>
<ul>
	<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('history.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/order.gif" alt="<?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
" class="icon" /></a><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('history.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'History and details of my orders'),$_smarty_tpl);?>
</a></li>
	<?php if ($_smarty_tpl->getVariable('returnAllowed')->value){?>
		<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-follow.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Merchandise returns'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/return.gif" alt="<?php echo smartyTranslate(array('s'=>'Merchandise returns'),$_smarty_tpl);?>
" class="icon" /></a><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-follow.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Merchandise returns'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My merchandise returns'),$_smarty_tpl);?>
</a></li>
	<?php }?>
	<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-slip.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/slip.gif" alt="<?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
" class="icon" /></a><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-slip.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My credit slips'),$_smarty_tpl);?>
</a></li>
	<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('addresses.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/addrbook.gif" alt="<?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
" class="icon" /></a><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('addresses.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My addresses'),$_smarty_tpl);?>
</a></li>
	<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('identity.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Information'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/userinfo.gif" alt="<?php echo smartyTranslate(array('s'=>'Information'),$_smarty_tpl);?>
" class="icon" /></a><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('identity.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Information'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My personal information'),$_smarty_tpl);?>
</a></li>
	<?php if ($_smarty_tpl->getVariable('voucherAllowed')->value){?>
		<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('discount.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/voucher.gif" alt="<?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
" class="icon" /></a><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('discount.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My vouchers'),$_smarty_tpl);?>
</a></li>
	<?php }?>
	<?php echo $_smarty_tpl->getVariable('HOOK_CUSTOMER_ACCOUNT')->value;?>

</ul>
<p><a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/home.gif" alt="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
" class="icon" /></a><a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></p>
