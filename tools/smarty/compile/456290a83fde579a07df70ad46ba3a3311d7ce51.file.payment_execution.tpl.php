<?php /* Smarty version Smarty-3.0.7, created on 2012-05-14 15:31:10
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/cheque/payment_execution.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16137117724fb1091e631b44-01015435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '456290a83fde579a07df70ad46ba3a3311d7ce51' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/cheque/payment_execution.tpl',
      1 => 1336325339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16137117724fb1091e631b44-01015435',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php ob_start(); ?><?php echo smartyTranslate(array('s'=>'Cheque payment','mod'=>'cheque'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h2><?php echo smartyTranslate(array('s'=>'Order summary','mod'=>'cheque'),$_smarty_tpl);?>
</h2>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, null);?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./order-steps.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('nbProducts',null,true,false)->value)&&$_smarty_tpl->getVariable('nbProducts')->value<=0){?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.'),$_smarty_tpl);?>
</p>
<?php }else{ ?>

<h3><?php echo smartyTranslate(array('s'=>'Cheque payment','mod'=>'cheque'),$_smarty_tpl);?>
</h3>
<form action="<?php echo $_smarty_tpl->getVariable('this_path_ssl')->value;?>
validation.php" method="post">
	<p>
		<img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
cheque.jpg" alt="<?php echo smartyTranslate(array('s'=>'cheque','mod'=>'cheque'),$_smarty_tpl);?>
" width="86" height="49" style="float:left; margin: 0px 10px 5px 0px;" />
		<?php echo smartyTranslate(array('s'=>'You have chosen to pay by cheque.','mod'=>'cheque'),$_smarty_tpl);?>

		<br/><br />
		<?php echo smartyTranslate(array('s'=>'Here is a short summary of your order:','mod'=>'cheque'),$_smarty_tpl);?>

	</p>
	<p style="margin-top:20px;">
		- <?php echo smartyTranslate(array('s'=>'The total amount of your order is','mod'=>'cheque'),$_smarty_tpl);?>

		<span id="amount" class="price"><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('total')->value),$_smarty_tpl);?>
</span>
		<?php if ($_smarty_tpl->getVariable('use_taxes')->value==1){?>
    		<?php echo smartyTranslate(array('s'=>'(tax incl.)','mod'=>'cheque'),$_smarty_tpl);?>

    	<?php }?>
	</p>
	<p>
		-
		<?php if (isset($_smarty_tpl->getVariable('currencies',null,true,false)->value)&&count($_smarty_tpl->getVariable('currencies')->value)>1){?>
			<?php echo smartyTranslate(array('s'=>'We accept several currencies for cheques.','mod'=>'cheque'),$_smarty_tpl);?>

			<br /><br />
			<?php echo smartyTranslate(array('s'=>'Choose one of the following:','mod'=>'cheque'),$_smarty_tpl);?>

			<select id="currency_payement" name="currency_payement" onchange="setCurrency($('#currency_payement').val());">
			<?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('currencies')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id_currency'];?>
" <?php if (isset($_smarty_tpl->getVariable('currencies',null,true,false)->value)&&$_smarty_tpl->tpl_vars['currency']->value['id_currency']==$_smarty_tpl->getVariable('cust_currency')->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
</option>
			<?php }} ?>
			</select>
		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'We accept the following currency to be sent by cheque:','mod'=>'cheque'),$_smarty_tpl);?>
&nbsp;<b><?php echo $_smarty_tpl->getVariable('currencies')->value[0]['name'];?>
</b>
			<input type="hidden" name="currency_payement" value="<?php echo $_smarty_tpl->getVariable('currencies')->value[0]['id_currency'];?>
" />
		<?php }?>
	</p>
	<p>
		<?php echo smartyTranslate(array('s'=>'Cheque owner and address information will be displayed on the next page.','mod'=>'cheque'),$_smarty_tpl);?>

		<br /><br />
		<b><?php echo smartyTranslate(array('s'=>'Please confirm your order by clicking \'I confirm my order\'','mod'=>'cheque'),$_smarty_tpl);?>
.</b>
	</p>
	<p class="cart_navigation">
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
?step=3" class="button_large"><?php echo smartyTranslate(array('s'=>'Other payment methods','mod'=>'cheque'),$_smarty_tpl);?>
</a>
		<input type="submit" name="submit" value="<?php echo smartyTranslate(array('s'=>'I confirm my order','mod'=>'cheque'),$_smarty_tpl);?>
" class="exclusive_large" />
	</p>
</form>
<?php }?>
