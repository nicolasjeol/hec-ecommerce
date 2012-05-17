<?php /* Smarty version Smarty-3.0.7, created on 2012-05-15 14:55:59
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4889036274fb2525f85f791-53836385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '487719da09088b1d76d34bbe4634fb7ce768709d' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/history.tpl',
      1 => 1336325339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4889036274fb2525f85f791-53836385',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop-hec/tools/smarty/plugins/modifier.escape.php';
?>

<script type="text/javascript">
<!--
	var baseDir = '<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
';
-->
</script>

<?php ob_start(); ?><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->getVariable('navigationPipe')->value;?>
</span><?php echo smartyTranslate(array('s'=>'Order history'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./errors.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1><?php echo smartyTranslate(array('s'=>'Order history'),$_smarty_tpl);?>
</h1>
<p><?php echo smartyTranslate(array('s'=>'Here are the orders you have placed since the creation of your account'),$_smarty_tpl);?>
.</p>

<?php if ($_smarty_tpl->getVariable('slowValidation')->value){?><p class="warning"><?php echo smartyTranslate(array('s'=>'If you have just placed an order, it may take a few minutes for it to be validated. Please refresh the page if your order is missing.'),$_smarty_tpl);?>
</p><?php }?>

<div class="block-center" id="block-history">
	<?php if ($_smarty_tpl->getVariable('orders')->value&&count($_smarty_tpl->getVariable('orders')->value)){?>
	<table id="order-list" class="std">
		<thead>
			<tr>
				<th class="first_item"><?php echo smartyTranslate(array('s'=>'Order'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Total price'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Payment'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Invoice'),$_smarty_tpl);?>
</th>
				<th class="last_item" style="width:65px">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('orders')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['order']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['order']->iteration=0;
 $_smarty_tpl->tpl_vars['order']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
if ($_smarty_tpl->tpl_vars['order']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
 $_smarty_tpl->tpl_vars['order']->iteration++;
 $_smarty_tpl->tpl_vars['order']->index++;
 $_smarty_tpl->tpl_vars['order']->first = $_smarty_tpl->tpl_vars['order']->index === 0;
 $_smarty_tpl->tpl_vars['order']->last = $_smarty_tpl->tpl_vars['order']->iteration === $_smarty_tpl->tpl_vars['order']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['order']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['order']->last;
?>
			<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }else{ ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2){?>alternate_item<?php }?>">
				<td class="history_link bold">
					<?php if (isset($_smarty_tpl->tpl_vars['order']->value['invoice'])&&$_smarty_tpl->tpl_vars['order']->value['invoice']&&isset($_smarty_tpl->tpl_vars['order']->value['virtual'])&&$_smarty_tpl->tpl_vars['order']->value['virtual']){?><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/download_product.gif" class="icon" alt="<?php echo smartyTranslate(array('s'=>'Products to download'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Products to download'),$_smarty_tpl);?>
" /><?php }?>
					<a class="color-myaccount" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
, 'order-detail');"><?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['order']->value['id_order']);?>
</a>
				</td>
				<td class="history_date bold"><?php echo Tools::dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>
				<td class="history_price"><span class="price"><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['order']->value['total_paid_real'],'currency'=>$_smarty_tpl->tpl_vars['order']->value['id_currency'],'no_utf8'=>false,'convert'=>false),$_smarty_tpl);?>
</span></td>
				<td class="history_method"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order']->value['payment'],'htmlall','UTF-8');?>
</td>
				<td class="history_state"><?php if (isset($_smarty_tpl->tpl_vars['order']->value['order_state'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order']->value['order_state'],'htmlall','UTF-8');?>
<?php }?></td>
				<td class="history_invoice">
				<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['invoice'])&&$_smarty_tpl->tpl_vars['order']->value['invoice']&&isset($_smarty_tpl->tpl_vars['order']->value['invoice_number'])&&$_smarty_tpl->tpl_vars['order']->value['invoice_number'])&&isset($_smarty_tpl->getVariable('invoiceAllowed',null,true,false)->value)&&$_smarty_tpl->getVariable('invoiceAllowed')->value==true){?>
					<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('pdf-invoice.php',true);?>
?id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
" title="<?php echo smartyTranslate(array('s'=>'Invoice'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/pdf.gif" alt="<?php echo smartyTranslate(array('s'=>'Invoice'),$_smarty_tpl);?>
" class="icon" /></a>
					<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('pdf-invoice.php',true);?>
?id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
" title="<?php echo smartyTranslate(array('s'=>'Invoice'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'PDF'),$_smarty_tpl);?>
</a>
				<?php }else{ ?>-<?php }?>
				</td>
				<td class="history_detail">
					<a class="color-myaccount" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
, 'order-detail');"><?php echo smartyTranslate(array('s'=>'details'),$_smarty_tpl);?>
</a>
					<a href="<?php if (isset($_smarty_tpl->getVariable('opc',null,true,false)->value)&&$_smarty_tpl->getVariable('opc')->value){?><?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-opc.php',true);?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
<?php }?>?submitReorder&id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
" title="<?php echo smartyTranslate(array('s'=>'Reorder'),$_smarty_tpl);?>
">
						<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
arrow_rotate_anticlockwise.png" alt="<?php echo smartyTranslate(array('s'=>'Reorder'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Reorder'),$_smarty_tpl);?>
" class="icon" />
					</a>
				</td>
			</tr>
		<?php }} ?>
		</tbody>
	</table>
	<div id="block-order-detail" class="hidden">&nbsp;</div>
	<?php }else{ ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'You have not placed any orders.'),$_smarty_tpl);?>
</p>
	<?php }?>
</div>

<ul class="footer_links">
	<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/my-account.gif" alt="" class="icon" /></a><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><?php echo smartyTranslate(array('s'=>'Back to Your Account'),$_smarty_tpl);?>
</a></li>
	<li><a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/home.gif" alt="" class="icon" /></a><a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li>
</ul>
