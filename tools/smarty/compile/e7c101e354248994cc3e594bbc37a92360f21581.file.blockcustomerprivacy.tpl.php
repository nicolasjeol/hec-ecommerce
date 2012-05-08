<?php /* Smarty version Smarty-3.0.7, created on 2012-05-07 22:17:39
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4078813904fa82de31d2995-56849385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7c101e354248994cc3e594bbc37a92360f21581' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1335107259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4078813904fa82de31d2995-56849385',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<script type="text/javascript">
	var error_message = "<p><?php echo $_smarty_tpl->getVariable('error_message')->value;?>
</p>";
	
		$(document).ready(function(){
			if ($().live) {
				$("#account-creation_form").live("submit", function(){
					if($("#customer_privacy").length > 0 && !$("#customer_privacy").is(":checked")) {
						$("div.error_customerprivacy").empty().append(error_message);
						return false;
					} else {
						$("div.error_customerprivacy").empty();
					}
				});
			} else {
				$("#account-creation_form").submit(function(){
					if($("#customer_privacy").length > 0 && !$("#customer_privacy").is(":checked")) {
						$("div.error_customerprivacy").empty().append(error_message);
						return false;
					} else {
						$("div.error_customerprivacy").empty();
					}
				});
			}
		});
	
</script>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy" style="float:left;width:80%;text-align:left;cursor:pointer"><?php echo $_smarty_tpl->getVariable('privacy_message')->value;?>
</label>		
</fieldset>