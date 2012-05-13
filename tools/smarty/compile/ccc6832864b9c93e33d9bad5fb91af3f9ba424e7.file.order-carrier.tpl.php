<?php /* Smarty version Smarty-3.0.7, created on 2012-05-14 00:41:40
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/order-carrier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18118529824fb038a4540222-72395780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccc6832864b9c93e33d9bad5fb91af3f9ba424e7' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/order-carrier.tpl',
      1 => 1336325339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18118529824fb038a4540222-72395780',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop-hec/tools/smarty/plugins/modifier.escape.php';
?>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
	<script type="text/javascript">
	<!--
		var baseDir = '<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
';
	-->
	</script>
	<script type="text/javascript">
	var msg = "<?php echo smartyTranslate(array('s'=>'You must agree to the terms of service before continuing.','js'=>1),$_smarty_tpl);?>
";
	
	function acceptCGV()
	{
		if ($('#cgv').length && !$('input#cgv:checked').length)
		{
			alert(msg);
			return false;
		}
		else
			return true;
	}
	
	</script>
<?php }?>

<?php if (!$_smarty_tpl->getVariable('virtual_cart')->value&&$_smarty_tpl->getVariable('giftAllowed')->value&&$_smarty_tpl->getVariable('cart')->value->gift==1){?>
<script type="text/javascript">

// <![CDATA[
    $('document').ready( function(){
        $('#gift_div').toggle('slow');
    });
//]]>

</script>
<?php }?>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s'=>'Shipping'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?><h1><?php echo smartyTranslate(array('s'=>'Shipping'),$_smarty_tpl);?>
</h1><?php }else{ ?><h2>2. <?php echo smartyTranslate(array('s'=>'Delivery methods'),$_smarty_tpl);?>
</h2><?php }?>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('shipping', null, null);?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./order-steps.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./errors.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<form id="form" action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
" method="post" onsubmit="return acceptCGV();">
<?php }else{ ?>
<div id="opc_delivery_methods" class="opc-main-block">
	<div id="opc_delivery_methods-overlay" class="opc-overlay" style="display: none;"></div>
<?php }?>

<?php if ($_smarty_tpl->getVariable('conditions')->value&&$_smarty_tpl->getVariable('cms_id')->value){?>
	<h3 class="condition_title"><?php echo smartyTranslate(array('s'=>'Terms of service'),$_smarty_tpl);?>
</h3>
	<p class="checkbox">
		<input type="checkbox" name="cgv" id="cgv" value="1" <?php if ($_smarty_tpl->getVariable('checkedTOS')->value){?>checked="checked"<?php }?> />
		<label for="cgv"><?php echo smartyTranslate(array('s'=>'I agree to the terms of service and adhere to them unconditionally.'),$_smarty_tpl);?>
</label> <a href="<?php echo $_smarty_tpl->getVariable('link_conditions')->value;?>
" class="iframe"><?php echo smartyTranslate(array('s'=>'(read)'),$_smarty_tpl);?>
</a>
	</p>
	<script type="text/javascript">$('a.iframe').fancybox();</script>
<?php }?>

<?php if ($_smarty_tpl->getVariable('virtual_cart')->value){?>
	<input id="input_virtual_carrier" class="hidden" type="hidden" name="id_carrier" value="0" />
<?php }else{ ?>
	<h3 class="carrier_title"><?php echo smartyTranslate(array('s'=>'Choose your delivery method'),$_smarty_tpl);?>
</h3>
	
	<div id="HOOK_BEFORECARRIER"><?php if (isset($_smarty_tpl->getVariable('carriers',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('HOOK_BEFORECARRIER')->value;?>
<?php }?></div>
	<?php if (isset($_smarty_tpl->getVariable('isVirtualCart',null,true,false)->value)&&$_smarty_tpl->getVariable('isVirtualCart')->value){?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No carrier needed for this order'),$_smarty_tpl);?>
</p>
	<?php }else{ ?>
	<?php if ($_smarty_tpl->getVariable('recyclablePackAllowed')->value){?>
	<p class="checkbox">
		<input type="checkbox" name="recyclable" id="recyclable" value="1" <?php if ($_smarty_tpl->getVariable('recyclable')->value==1){?>checked="checked"<?php }?> />
		<label for="recyclable"><?php echo smartyTranslate(array('s'=>'I agree to receive my order in recycled packaging'),$_smarty_tpl);?>
.</label>
	</p>
	<?php }?>
	<p class="warning" id="noCarrierWarning" <?php if (isset($_smarty_tpl->getVariable('carriers',null,true,false)->value)&&$_smarty_tpl->getVariable('carriers')->value&&count($_smarty_tpl->getVariable('carriers')->value)){?>style="display:none;"<?php }?>><?php echo smartyTranslate(array('s'=>'There are no carriers available that deliver to this address.'),$_smarty_tpl);?>
</p>
	<table id="carrierTable" class="std" <?php if (!isset($_smarty_tpl->getVariable('carriers',null,true,false)->value)||!$_smarty_tpl->getVariable('carriers')->value||!count($_smarty_tpl->getVariable('carriers')->value)){?>style="display:none;"<?php }?>>
		<thead>
			<tr>
				<th class="carrier_action first_item"></th>
				<th class="carrier_name item"><?php echo smartyTranslate(array('s'=>'Carrier'),$_smarty_tpl);?>
</th>
				<th class="carrier_infos item"><?php echo smartyTranslate(array('s'=>'Information'),$_smarty_tpl);?>
</th>
				<th class="carrier_price last_item"><?php echo smartyTranslate(array('s'=>'Price'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
		<?php if (isset($_smarty_tpl->getVariable('carriers',null,true,false)->value)){?>
			<?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('carriers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['carrier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['carrier']->iteration=0;
 $_smarty_tpl->tpl_vars['carrier']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
if ($_smarty_tpl->tpl_vars['carrier']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value){
 $_smarty_tpl->tpl_vars['carrier']->iteration++;
 $_smarty_tpl->tpl_vars['carrier']->index++;
 $_smarty_tpl->tpl_vars['carrier']->first = $_smarty_tpl->tpl_vars['carrier']->index === 0;
 $_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['carrier']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['carrier']->last;
?>
				<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2){?>alternate_item<?php }else{ ?>item<?php }?>">
					<td class="carrier_action radio">
						<input type="radio" name="id_carrier" value="<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
" id="id_carrier<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
"  <?php if ($_smarty_tpl->getVariable('opc')->value){?>onclick="updateCarrierSelectionAndGift();"<?php }?> <?php if ($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']==$_smarty_tpl->getVariable('checked')->value||count($_smarty_tpl->getVariable('carriers')->value)==1){?>checked="checked"<?php }?> />
					</td>
					<td class="carrier_name">
						<label for="id_carrier<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
">
							<?php if ($_smarty_tpl->tpl_vars['carrier']->value['img']){?><img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['carrier']->value['img'],'htmlall','UTF-8');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['carrier']->value['name'],'htmlall','UTF-8');?>
" /><?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['carrier']->value['name'],'htmlall','UTF-8');?>
<?php }?>
						</label>
					</td>
					<td class="carrier_infos"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['carrier']->value['delay'],'htmlall','UTF-8');?>
</td>
					<td class="carrier_price">
						<?php if ($_smarty_tpl->tpl_vars['carrier']->value['price']){?>
							<span class="price">
								<?php if ($_smarty_tpl->getVariable('priceDisplay')->value==1){?><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->tpl_vars['carrier']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }else{ ?><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->tpl_vars['carrier']->value['price']),$_smarty_tpl);?>
<?php }?>
							</span>
							<?php if ($_smarty_tpl->getVariable('use_taxes')->value){?><?php if ($_smarty_tpl->getVariable('priceDisplay')->value==1){?> <?php echo smartyTranslate(array('s'=>'(tax excl.)'),$_smarty_tpl);?>
<?php }else{ ?> <?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?><?php }?>
						<?php }else{ ?>
							<?php echo smartyTranslate(array('s'=>'Free!'),$_smarty_tpl);?>

						<?php }?>
					</td>
				</tr>
			<?php }} ?>
			<tr id="HOOK_EXTRACARRIER"><?php echo $_smarty_tpl->getVariable('HOOK_EXTRACARRIER')->value;?>
</tr>
		<?php }?>
		</tbody>
	</table>
	<div style="display: none;" id="extra_carrier"></div>
	
		<?php if ($_smarty_tpl->getVariable('giftAllowed')->value){?>
		<h3 class="gift_title"><?php echo smartyTranslate(array('s'=>'Gift'),$_smarty_tpl);?>
</h3>
		<p class="checkbox">
			<input type="checkbox" name="gift" id="gift" value="1" <?php if ($_smarty_tpl->getVariable('cart')->value->gift==1){?>checked="checked"<?php }?> onclick="$('#gift_div').toggle('slow');" />
			<label for="gift"><?php echo smartyTranslate(array('s'=>'I would like the order to be gift-wrapped.'),$_smarty_tpl);?>
</label>
			<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php if ($_smarty_tpl->getVariable('gift_wrapping_price')->value>0){?>
				(<?php echo smartyTranslate(array('s'=>'Additional cost of'),$_smarty_tpl);?>

				<span class="price" id="gift-price">
					<?php if ($_smarty_tpl->getVariable('priceDisplay')->value==1){?><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->getVariable('total_wrapping_tax_exc_cost')->value),$_smarty_tpl);?>
<?php }else{ ?><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->getVariable('total_wrapping_cost')->value),$_smarty_tpl);?>
<?php }?>
				</span>
				<?php if ($_smarty_tpl->getVariable('use_taxes')->value){?><?php if ($_smarty_tpl->getVariable('priceDisplay')->value==1){?> <?php echo smartyTranslate(array('s'=>'(tax excl.)'),$_smarty_tpl);?>
<?php }else{ ?> <?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?><?php }?>)
			<?php }?>
		</p>
		<p id="gift_div" class="textarea">
			<label for="gift_message"><?php echo smartyTranslate(array('s'=>'If you wish, you can add a note to the gift:'),$_smarty_tpl);?>
</label>
			<textarea rows="5" cols="35" id="gift_message" name="gift_message"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('cart')->value->gift_message,'htmlall','UTF-8');?>
</textarea>
		</p>
		<?php }?>
	<?php }?>
<?php }?>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
	<p class="cart_navigation submit">
		<input type="hidden" name="step" value="3" />
		<input type="hidden" name="back" value="<?php echo $_smarty_tpl->getVariable('back')->value;?>
" />
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
<?php if (!$_smarty_tpl->getVariable('is_guest')->value){?>?step=1<?php if ($_smarty_tpl->getVariable('back')->value){?>&back=<?php echo $_smarty_tpl->getVariable('back')->value;?>
<?php }?><?php }?>" title="<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
" class="button">&laquo; <?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
</a>
		<input type="submit" name="processCarrier" value="<?php echo smartyTranslate(array('s'=>'Next'),$_smarty_tpl);?>
 &raquo;" class="exclusive" />
	</p>
</form>
<?php }else{ ?>
	<h3><?php echo smartyTranslate(array('s'=>'Leave a message'),$_smarty_tpl);?>
</h3>
	<div>
		<p><?php echo smartyTranslate(array('s'=>'If you would like to add a comment about your order, please write it below.'),$_smarty_tpl);?>
</p>
		<p><textarea cols="120" rows="3" name="message" id="message"><?php if (isset($_smarty_tpl->getVariable('oldMessage',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('oldMessage')->value;?>
<?php }?></textarea></p>
	</div>
</div>
<?php }?>
