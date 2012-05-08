<?php /* Smarty version Smarty-3.0.7, created on 2012-05-08 02:58:42
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/blockuserinfo/blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10730709584fa86fc2417a53-86005850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f87da04d93e2e2d62366cf3e613f93d7e18e93ad' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/blockuserinfo/blockuserinfo.tpl',
      1 => 1336424493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10730709584fa86fc2417a53-86005850',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop-hec/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Block user information module HEADER -->
<div id="header_user">
	<ul id="header_nav">
		<?php if (!$_smarty_tpl->getVariable('PS_CATALOG_MODE')->value){?>
		<li id="shopping_cart">
			<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink(($_smarty_tpl->getVariable('order_process')->value).".php",true);?>
" title="<?php echo smartyTranslate(array('s'=>'Your Shopping Cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">&nbsp;</a>
			<span class="ajax_cart_quantity<?php if ($_smarty_tpl->getVariable('cart_qties')->value==0){?> hidden<?php }?>"><?php echo $_smarty_tpl->getVariable('cart_qties')->value;?>
</span>
			<span class="ajax_cart_product_txt<?php if ($_smarty_tpl->getVariable('cart_qties')->value!=1){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'product','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			<span class="ajax_cart_product_txt_s<?php if ($_smarty_tpl->getVariable('cart_qties')->value<2){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'products','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			<span class="ajax_cart_no_product<?php if ($_smarty_tpl->getVariable('cart_qties')->value>0){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'Empty','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
		</li>
		<?php }?>
		<li id="your_account">
			<?php echo smartyTranslate(array('s'=>'Welcome','mod'=>'blockuserinfo'),$_smarty_tpl);?>
,
			<?php if ($_smarty_tpl->getVariable('cookie')->value->isLogged()){?>
				(<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('index.php');?>
?mylogout" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>)
			<?php }else{ ?>
				(<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>)
			<?php }?>
		</li>
	</ul>
</div>
<div id="header-bg">
<a id="header_logo" href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('shop_name')->value,'htmlall','UTF-8');?>
">
	<img class="logo" src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
logo.jpg?<?php echo $_smarty_tpl->getVariable('img_update_time')->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('shop_name')->value,'htmlall','UTF-8');?>
" />
</a>
<ul>
	<li <?php if ($_smarty_tpl->getVariable('page_name')->value=='index'){?>class="select"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('index.php');?>
"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li>
	<li <?php if ($_smarty_tpl->getVariable('page_name')->value=='sitemap'){?>class="select"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('sitemap.php');?>
"><?php echo smartyTranslate(array('s'=>'Sitemap'),$_smarty_tpl);?>
</a></li>
	<li <?php if ($_smarty_tpl->getVariable('page_name')->value=='new-products'){?>class="select"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('new-products.php');?>
"><?php echo smartyTranslate(array('s'=>'New Products'),$_smarty_tpl);?>
</a></li>
	<li <?php if ($_smarty_tpl->getVariable('page_name')->value=='about-us'){?>class="select"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cms.php?id_cms=4');?>
"><?php echo smartyTranslate(array('s'=>'About Us'),$_smarty_tpl);?>
</a></li>
	<li class="<?php if ($_smarty_tpl->getVariable('page_name')->value=='contact-form'){?>select<?php }?>"><a class="last" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php');?>
"><?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>
</a></li>
    <li <?php if ($_smarty_tpl->getVariable('page_name')->value=='magazine'){?>class="select"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('magazine.php');?>
"><?php echo smartyTranslate(array('s'=>'Magazine'),$_smarty_tpl);?>
</a></li>
</ul>
</div>
				
<!-- /Block user information module HEADER -->
