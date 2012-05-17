<?php /* Smarty version Smarty-3.0.7, created on 2012-05-17 17:12:03
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/modules/beautifilter/beautifilter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15901045974fb51543ef72a0-82748026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbaacaf5af4efa705aad09eb10c6ac2b2d26e662' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/modules/beautifilter/beautifilter.tpl',
      1 => 1337186376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15901045974fb51543ef72a0-82748026',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop-hec/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->getVariable('nbr_filterBlocks')->value!=0){?>
<div id="layered_block_left">
		<form action="#" id="layered_form">
				<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('filters')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value){
?>
					<?php if (isset($_smarty_tpl->tpl_vars['filter']->value['values'])&&$_smarty_tpl->tpl_vars['filter']->value['type']!=''){?>
					<div class="owaci_filterjoomjoom">
						<div class="layered_subtitle"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['name'],'html','UTF-8');?>
</div>
						<div class="layered_content">
						<?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['slider'])){?>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id_value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['id_value']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<div<?php if ($_smarty_tpl->getVariable('layered_use_checkboxes')->value){?> class="nomargin"<?php }?>>
									<?php if (isset($_smarty_tpl->tpl_vars['filter']->value['is_color_group'])&&$_smarty_tpl->tpl_vars['filter']->value['is_color_group']){?>
										<input type="button" name="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" rel="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];?>
" id="layered_attribute_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['value']->value['nbr']){?> value="X" disabled="disabled"<?php }?> style="background: <?php if (isset($_smarty_tpl->tpl_vars['value']->value['color'])){?><?php echo $_smarty_tpl->tpl_vars['value']->value['color'];?>
<?php }else{ ?>#CCC<?php }?>; margin-left: 0; width: 20px; height: 20px; padding:0" <?php if (isset($_smarty_tpl->tpl_vars['value']->value['checked'])&&$_smarty_tpl->tpl_vars['value']->value['checked']){?>class="owaci_filter_color_checked"<?php }else{ ?>class="owaci_filter_color"<?php }?> />
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['checked'])&&$_smarty_tpl->tpl_vars['value']->value['checked']){?><input type="hidden" name="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" /><?php }?>
									<?php }else{ ?>
										<?php if ($_smarty_tpl->getVariable('layered_use_checkboxes')->value){?>
											<input style="display:none" type="checkbox" class="checkbox" name="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" id="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
<?php if ($_smarty_tpl->tpl_vars['id_value']->value||$_smarty_tpl->tpl_vars['filter']->value['type']=='quantity'){?>_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
<?php }?>" value="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
<?php if ($_smarty_tpl->tpl_vars['filter']->value['id_key']){?>_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['value']->value['checked'])){?> checked="checked"<?php }?><?php if (!$_smarty_tpl->tpl_vars['value']->value['nbr']){?> disabled="disabled"<?php }?> />
										<?php }?>
									<?php }?>
									<label for="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
"<?php if (!$_smarty_tpl->tpl_vars['value']->value['nbr']){?> class="disabled"<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['filter']->value['is_color_group'])&&$_smarty_tpl->tpl_vars['filter']->value['is_color_group']){?> name="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" class="layered_color" rel="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];?>
"<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['value']->value['checked'])){?> class="owaci_filter_checked"<?php }?><?php }?><?php }?>><?php if (isset($_smarty_tpl->tpl_vars['filter']->value['is_color_group'])&&$_smarty_tpl->tpl_vars['filter']->value['is_color_group']){?><?php if (isset($_smarty_tpl->tpl_vars['value']->value['checked'])&&$_smarty_tpl->tpl_vars['value']->value['checked']){?><span style="color:<?php if (isset($_smarty_tpl->tpl_vars['value']->value['color'])){?><?php echo $_smarty_tpl->tpl_vars['value']->value['color'];?>
<?php }?>; font-weight:bold"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value['name'],'html','UTF-8');?>
</span><?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value['name'],'html','UTF-8');?>
<?php }?><?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value['name'],'html','UTF-8');?>
<?php }?><span> (<?php echo $_smarty_tpl->tpl_vars['value']->value['nbr'];?>
)</span></label>
								</div>
							<?php }} ?>
						<?php }else{ ?>
						<ul id="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];?>
">
							<div class="nomargin" style="padding-left:20px">
								<span id="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range"></span>
							</div>
							<div style="margin:10px; width:570px; float:left" class="layered_slider" id="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_slider"></div>
							<script type="text/javascript">
							unit = '<?php echo $_smarty_tpl->tpl_vars['filter']->value['unit'];?>
';
							
								$(document).ready(function()
								{
									$('#layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_slider').slider({
										range: true,
										min: <?php echo $_smarty_tpl->tpl_vars['filter']->value['min'];?>
,
										max: <?php echo $_smarty_tpl->tpl_vars['filter']->value['max'];?>
,
										values: [ <?php echo $_smarty_tpl->tpl_vars['filter']->value['values'][0];?>
, <?php echo $_smarty_tpl->tpl_vars['filter']->value['values'][1];?>
],
										slide: function( event, ui ) {
											$('#layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range').html(ui.values[ 0 ] + unit + ' - ' + ui.values[ 1 ] + unit);
											console.log(event);
											console.log(ui);
										},
										stop: function () {
											reloadContent();
										}
									});
									$('#layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range').html($('#layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_slider').slider('values', 0 ) +unit+
										' - ' + $('#layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_slider').slider('values', 1 )+unit );
								});
							
							</script>
							<!--
							<script type="text/javascript">
							unit = '<?php echo $_smarty_tpl->tpl_vars['filter']->value['unit'];?>
';
							type = '<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
';
							max = '<?php echo $_smarty_tpl->tpl_vars['filter']->value['max'];?>
';
							min = '<?php echo $_smarty_tpl->tpl_vars['filter']->value['min'];?>
';
							values = [<?php echo $_smarty_tpl->tpl_vars['filter']->value['values'][0];?>
, <?php echo $_smarty_tpl->tpl_vars['filter']->value['values'][1];?>
];
							
								$(document).ready(function()
								{
									initSlider(type, min, max, values, unit);
								});
							
							</script>
							-->
						</ul>
						<?php }?>
						</div>
					</div>
					</ul>
					<?php }?>
				<?php }} ?>
			<input type="hidden" name="id_category_layered" value="<?php echo $_smarty_tpl->getVariable('id_category_layered')->value;?>
" />
			<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('filters')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value){
?>
				<?php if ($_smarty_tpl->tpl_vars['filter']->value['type_lite']=='id_attribute_group'&&isset($_smarty_tpl->tpl_vars['filter']->value['is_color_group'])&&$_smarty_tpl->tpl_vars['filter']->value['is_color_group']){?>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id_value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['id_value']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<?php if (isset($_smarty_tpl->tpl_vars['value']->value['checked'])){?>
							<input type="hidden" name="layered_id_attribute_group_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];?>
" />
						<?php }?>
					<?php }} ?>
				<?php }?>
			<?php }} ?>
		</form>
	<div id="layered_ajax_loader" style="display: none;">
		<p style="margin: 20px 0; text-align: center;"><img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
loader.gif" alt="" /><br /><?php echo smartyTranslate(array('s'=>'Loading...','mod'=>'beautifilter'),$_smarty_tpl);?>
</p>
	</div>
</div>
<?php }?>