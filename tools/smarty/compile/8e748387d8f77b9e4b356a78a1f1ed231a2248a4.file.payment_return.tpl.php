<?php /* Smarty version Smarty-3.0.7, created on 2012-05-14 15:31:32
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/cheque/payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6559960724fb1093481d558-06014049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e748387d8f77b9e4b356a78a1f1ed231a2248a4' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/cheque/payment_return.tpl',
      1 => 1336325339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6559960724fb1093481d558-06014049',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php if ($_smarty_tpl->getVariable('status')->value=='ok'){?>
	<p><?php echo smartyTranslate(array('s'=>'Your order on','mod'=>'cheque'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->getVariable('shop_name')->value;?>
</span> <?php echo smartyTranslate(array('s'=>'is complete.','mod'=>'cheque'),$_smarty_tpl);?>

		<br /><br />
		<?php echo smartyTranslate(array('s'=>'Please send us a cheque with:','mod'=>'cheque'),$_smarty_tpl);?>

		<br /><br />- <?php echo smartyTranslate(array('s'=>'an amount of','mod'=>'cheque'),$_smarty_tpl);?>
 <span class="price"><?php echo $_smarty_tpl->getVariable('total_to_pay')->value;?>
</span>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'payable to the order of','mod'=>'cheque'),$_smarty_tpl);?>
 <span class="bold"><?php if ($_smarty_tpl->getVariable('chequeName')->value){?><?php echo $_smarty_tpl->getVariable('chequeName')->value;?>
<?php }else{ ?>___________<?php }?></span>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'mail to','mod'=>'cheque'),$_smarty_tpl);?>
 <span class="bold"><?php if ($_smarty_tpl->getVariable('chequeAddress')->value){?><?php echo $_smarty_tpl->getVariable('chequeAddress')->value;?>
<?php }else{ ?>___________<?php }?></span>
		<br /><br /><?php echo smartyTranslate(array('s'=>'An e-mail has been sent to you with this information.','mod'=>'cheque'),$_smarty_tpl);?>

		<br /><br /><span class="bold"><?php echo smartyTranslate(array('s'=>'Your order will be sent as soon as we receive your payment.','mod'=>'cheque'),$_smarty_tpl);?>
</span>
		<br /><br /><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'cheque'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php',true);?>
"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'cheque'),$_smarty_tpl);?>
</a>.
	</p>
<?php }else{ ?>
	<p class="warning">
		<?php echo smartyTranslate(array('s'=>'We noticed a problem with your order. If you think this is an error, you can contact our','mod'=>'cheque'),$_smarty_tpl);?>
 
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php',true);?>
"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'cheque'),$_smarty_tpl);?>
</a>.
	</p>
<?php }?>
