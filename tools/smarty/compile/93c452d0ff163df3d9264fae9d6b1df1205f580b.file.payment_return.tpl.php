<?php /* Smarty version Smarty-3.0.7, created on 2012-05-14 00:42:26
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/bankwire/payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:445378914fb038d20b7b32-83935143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93c452d0ff163df3d9264fae9d6b1df1205f580b' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/bankwire/payment_return.tpl',
      1 => 1336325339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '445378914fb038d20b7b32-83935143',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php if ($_smarty_tpl->getVariable('status')->value=='ok'){?>
	<p><?php echo smartyTranslate(array('s'=>'Your order on','mod'=>'bankwire'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->getVariable('shop_name')->value;?>
</span> <?php echo smartyTranslate(array('s'=>'is complete.','mod'=>'bankwire'),$_smarty_tpl);?>

		<br /><br />
		<?php echo smartyTranslate(array('s'=>'Please send us a bank wire with:','mod'=>'bankwire'),$_smarty_tpl);?>

		<br /><br />- <?php echo smartyTranslate(array('s'=>'an amount of','mod'=>'bankwire'),$_smarty_tpl);?>
 <span class="price"><?php echo $_smarty_tpl->getVariable('total_to_pay')->value;?>
</span>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'to the account owner of','mod'=>'bankwire'),$_smarty_tpl);?>
 <span class="bold"><?php if ($_smarty_tpl->getVariable('bankwireOwner')->value){?><?php echo $_smarty_tpl->getVariable('bankwireOwner')->value;?>
<?php }else{ ?>___________<?php }?></span>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'with these details','mod'=>'bankwire'),$_smarty_tpl);?>
 <span class="bold"><?php if ($_smarty_tpl->getVariable('bankwireDetails')->value){?><?php echo $_smarty_tpl->getVariable('bankwireDetails')->value;?>
<?php }else{ ?>___________<?php }?></span>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'to this bank','mod'=>'bankwire'),$_smarty_tpl);?>
 <span class="bold"><?php if ($_smarty_tpl->getVariable('bankwireAddress')->value){?><?php echo $_smarty_tpl->getVariable('bankwireAddress')->value;?>
<?php }else{ ?>___________<?php }?></span>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order #','mod'=>'bankwire'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->getVariable('id_order')->value;?>
</span> <?php echo smartyTranslate(array('s'=>'in the subject of your bank wire','mod'=>'bankwire'),$_smarty_tpl);?>

		<br /><br /><?php echo smartyTranslate(array('s'=>'An e-mail has been sent to you with this information.','mod'=>'bankwire'),$_smarty_tpl);?>

		<br /><br /><span class="bold"><?php echo smartyTranslate(array('s'=>'Your order will be sent as soon as we receive your settlement.','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
		<br /><br /><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'bankwire'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php',true);?>
"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'bankwire'),$_smarty_tpl);?>
</a>.
	</p>
<?php }else{ ?>
	<p class="warning">
		<?php echo smartyTranslate(array('s'=>'We noticed a problem with your order. If you think this is an error, you can contact our','mod'=>'bankwire'),$_smarty_tpl);?>
 
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php',true);?>
"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'bankwire'),$_smarty_tpl);?>
</a>.
	</p>
<?php }?>
