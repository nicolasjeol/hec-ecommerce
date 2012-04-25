<?php /* Smarty version Smarty-3.0.7, created on 2012-04-22 17:14:40
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/prestashop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4454319174f942060558e74-57361069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1103592a1244469847a1ee4341af6ef837880b84' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/prestashop/footer.tpl',
      1 => 1335107264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4454319174f942060558e74-57361069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


		<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column">
					<?php echo $_smarty_tpl->getVariable('HOOK_RIGHT_COLUMN')->value;?>

				</div>
			</div>

<!-- Footer -->
			<div id="footer"><?php echo $_smarty_tpl->getVariable('HOOK_FOOTER')->value;?>
</div>
		</div>
	<?php }?>
	</body>
</html>
