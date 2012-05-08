<?php /* Smarty version Smarty-3.0.7, created on 2012-05-08 02:58:42
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/blockcurrencies/blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13838290934fa86fc2319571-41839246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8b7d0ce0469dd3373259d1b3ac8e5d35e21a3fb' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/modules/blockcurrencies/blockcurrencies.tpl',
      1 => 1336325339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13838290934fa86fc2319571-41839246',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block currencies module -->
<div id="currencies_block_top">
	<form id="setCurrency" action="<?php echo $_smarty_tpl->getVariable('request_uri')->value;?>
" method="post">
	<?php echo smartyTranslate(array('s'=>'Currency','mod'=>'blockcurrencies'),$_smarty_tpl);?>

		<select onchange="javascript:setCurrency(this.value);" class="currency_bg">
        <?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('currencies')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
        <option <?php if ($_smarty_tpl->getVariable('id_currency_cookie')->value==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
"><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>
)</option>        
        <?php }} ?>
    	</select>
		<p>
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
		</p>
	</form>
</div>
<!-- /Block currencies module -->

