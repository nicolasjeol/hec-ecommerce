<?php /* Smarty version Smarty-3.0.7, created on 2012-05-14 00:59:52
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/blockmyaccount/blockmyaccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14464850984fb03ce8cdb6d9-51974104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '591fa6273cc1d6627a59aae29cb9dff4aca53cbe' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/blockmyaccount/blockmyaccount.tpl',
      1 => 1336325339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14464850984fb03ce8cdb6d9-51974104',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block myaccount module -->
<div class="block">
	<h4><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></h4>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('history.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My orders','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li>
			<?php if ($_smarty_tpl->getVariable('returnAllowed')->value){?><li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-follow.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My merchandise returns','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li><?php }?>
			<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-slip.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('addresses.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('identity.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My personal info','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li>
			<?php if ($_smarty_tpl->getVariable('voucherAllowed')->value){?><li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('discount.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My vouchers','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li><?php }?>
			<?php echo $_smarty_tpl->getVariable('HOOK_BLOCK_MY_ACCOUNT')->value;?>

		</ul>
		<p class="logout"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('index.php');?>
?mylogout" title="<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccount'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></p>
	</div>
</div>
<!-- /Block myaccount module -->