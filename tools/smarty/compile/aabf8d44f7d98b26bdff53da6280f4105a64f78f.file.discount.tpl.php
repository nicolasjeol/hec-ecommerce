<?php /* Smarty version Smarty-3.0.7, created on 2012-05-09 17:05:50
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/discount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11982097784faa87ceb44812-77339257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aabf8d44f7d98b26bdff53da6280f4105a64f78f' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/discount.tpl',
      1 => 1336325339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11982097784faa87ceb44812-77339257',
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
</span><?php echo smartyTranslate(array('s'=>'My Vouchers'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1><?php echo smartyTranslate(array('s'=>'My Vouchers'),$_smarty_tpl);?>
</h1>

<?php if (isset($_smarty_tpl->getVariable('discount',null,true,false)->value)&&count($_smarty_tpl->getVariable('discount')->value)&&$_smarty_tpl->getVariable('nbDiscounts')->value){?>
<table class="discount std">
	<thead>
		<tr>
			<th class="discount_code first_item"><?php echo smartyTranslate(array('s'=>'Code'),$_smarty_tpl);?>
</th>
			<th class="discount_description item"><?php echo smartyTranslate(array('s'=>'Description'),$_smarty_tpl);?>
</th>
			<th class="discount_quantity item"><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</th>
			<th class="discount_value item"><?php echo smartyTranslate(array('s'=>'Value'),$_smarty_tpl);?>
*</th>
			<th class="discount_minimum item"><?php echo smartyTranslate(array('s'=>'Minimum'),$_smarty_tpl);?>
</th>
			<th class="discount_cumulative item"><?php echo smartyTranslate(array('s'=>'Cumulative'),$_smarty_tpl);?>
</th>
			<th class="discount_expiration_date last_item"><?php echo smartyTranslate(array('s'=>'Expiration date'),$_smarty_tpl);?>
</th>
		</tr>
	</thead>
	<tbody>
	<?php  $_smarty_tpl->tpl_vars['discountDetail'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('discount')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['discountDetail']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['discountDetail']->iteration=0;
 $_smarty_tpl->tpl_vars['discountDetail']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
if ($_smarty_tpl->tpl_vars['discountDetail']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['discountDetail']->key => $_smarty_tpl->tpl_vars['discountDetail']->value){
 $_smarty_tpl->tpl_vars['discountDetail']->iteration++;
 $_smarty_tpl->tpl_vars['discountDetail']->index++;
 $_smarty_tpl->tpl_vars['discountDetail']->first = $_smarty_tpl->tpl_vars['discountDetail']->index === 0;
 $_smarty_tpl->tpl_vars['discountDetail']->last = $_smarty_tpl->tpl_vars['discountDetail']->iteration === $_smarty_tpl->tpl_vars['discountDetail']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['discountDetail']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['discountDetail']->last;
?>
		<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }else{ ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2){?>alternate_item<?php }?>">
			<td class="discount_code"><?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['name'];?>
</td>
			<td class="discount_description"><?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['description'];?>
</td>
			<td class="discount_quantity"><?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['quantity_for_user'];?>
</td>
			<td class="discount_value">
				<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['id_discount_type']==1){?>
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['discountDetail']->value['value'],'htmlall','UTF-8');?>
%
				<?php }elseif($_smarty_tpl->tpl_vars['discountDetail']->value['id_discount_type']==2){?>
					<?php echo Product::convertPrice(array('price'=>$_smarty_tpl->tpl_vars['discountDetail']->value['value']),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo smartyTranslate(array('s'=>'Free shipping'),$_smarty_tpl);?>

				<?php }?>
			</td>
			<td class="discount_minimum">
				<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['minimal']==0){?>
					<?php echo smartyTranslate(array('s'=>'none'),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo Product::convertPrice(array('price'=>$_smarty_tpl->tpl_vars['discountDetail']->value['minimal']),$_smarty_tpl);?>

				<?php }?>
			</td>
			<td class="discount_cumulative">
				<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['cumulable']==1){?>
					<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/yes.gif" alt="<?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
" class="icon" />
				<?php }else{ ?>
					<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/no.gif" alt="<?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
" class="icon" />
				<?php }?>
			</td>
			<td class="discount_expiration_date"><?php echo Tools::dateFormat(array('date'=>$_smarty_tpl->tpl_vars['discountDetail']->value['date_to']),$_smarty_tpl);?>
</td>
		</tr>
	<?php }} ?>
	</tbody>
</table>
<p>
	*<?php echo smartyTranslate(array('s'=>'Tax included'),$_smarty_tpl);?>

</p>
<?php }else{ ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'You do not possess any vouchers.'),$_smarty_tpl);?>
</p>
<?php }?>

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
