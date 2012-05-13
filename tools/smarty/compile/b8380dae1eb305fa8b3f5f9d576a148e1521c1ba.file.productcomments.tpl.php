<?php /* Smarty version Smarty-3.0.7, created on 2012-05-14 00:59:28
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/modules/productcomments//productcomments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11269183794fb03cd04c9737-14962427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8380dae1eb305fa8b3f5f9d576a148e1521c1ba' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/modules/productcomments//productcomments.tpl',
      1 => 1335107262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11269183794fb03cd04c9737-14962427',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop-hec/tools/smarty/plugins/modifier.escape.php';
?>

<div id="idTab5">
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('module_dir')->value;?>
js/jquery.rating.pack.js"></script>
<script type="text/javascript">
	$(function(){ $('input[@type=radio].star').rating(); });
	$(function(){
		$('.auto-submit-star').rating({
			callback: function(value, link){
			}
		});
	});
	
	//close  comment form
	function closeCommentForm(){
		$('#sendComment').slideUp('fast');
		$('input#addCommentButton').fadeIn('slow');
	}
</script>
<?php if ($_smarty_tpl->getVariable('comments')->value){?>
	<?php if (count($_smarty_tpl->getVariable('criterions')->value)>0){?>
		<h2><?php echo smartyTranslate(array('s'=>'Average grade','mod'=>'productcomments'),$_smarty_tpl);?>
</h2>
		<div style="float: left">
			<?php echo smartyTranslate(array('s'=>'Average','mod'=>'productcomments'),$_smarty_tpl);?>
:<br />
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['average']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['name'] = 'average';
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total']);
?>
				<input class="auto-submit-star" disabled="disabled" type="radio" name="average" <?php if (round($_smarty_tpl->getVariable('averageTotal')->value)!=0&&$_smarty_tpl->getVariable('smarty')->value['section']['average']['index']==round($_smarty_tpl->getVariable('averageTotal')->value)){?>checked="checked"<?php }?> />
			<?php endfor; endif; ?>
		</div>
		<div style="float: left; margin-left: 40px; width: 400px">
		<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('criterions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
?>
			<div style="float: left; margin-left: 20px; margin-bottom: 10px;">
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['c']->value['name'],'html','UTF-8');?>
<br />
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['average']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['name'] = 'average';
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total']);
?>
				<input class="auto-submit-star" disabled="disabled" type="radio" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['c']->value['name'],'html','UTF-8');?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['average']['index'];?>
" value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['average']['index'];?>
" <?php if (isset($_smarty_tpl->getVariable('averages',null,true,false)->value[$_smarty_tpl->tpl_vars['c']->value['id_product_comment_criterion']])&&round($_smarty_tpl->getVariable('averages')->value[$_smarty_tpl->tpl_vars['c']->value['id_product_comment_criterion']])!=0&&$_smarty_tpl->getVariable('smarty')->value['section']['average']['index']==round($_smarty_tpl->getVariable('averages')->value[$_smarty_tpl->tpl_vars['c']->value['id_product_comment_criterion']])){?>checked="checked"<?php }?> />
			<?php endfor; endif; ?>
			</div>
		<?php }} ?>
		</div>
	<?php }?>
	<div class="clear table_block">
		<table class="std" style="width: 100%">
			<thead>
				<tr>
					<th class="first_item" style="width:80px;"><?php echo smartyTranslate(array('s'=>'From','mod'=>'productcomments'),$_smarty_tpl);?>
</th>
					<th class="item"><?php echo smartyTranslate(array('s'=>'Title','mod'=>'productcomments'),$_smarty_tpl);?>
</th>
					<th class="item"><?php echo smartyTranslate(array('s'=>'Comment','mod'=>'productcomments'),$_smarty_tpl);?>
</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('comments')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
?>
				<?php if ($_smarty_tpl->tpl_vars['comment']->value['content']){?>
				<tr>
					<td style="vertical-align:top">
						<?php echo Tools::dateFormat(array('date'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['date_add'],'html','UTF-8'),'full'=>0),$_smarty_tpl);?>

						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['customer_name'],'html','UTF-8');?>
.
					</td>
					<td style="vertical-align:top">
						<?php echo $_smarty_tpl->tpl_vars['comment']->value['title'];?>

					</td>
					<td style="vertical-align: top">
						<?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['content'],'html','UTF-8'));?>

					</td>
				</tr>
				<?php }?>
			<?php }} ?>
			</tbody>
		</table>
	</div>
<?php }else{ ?>
	<p class="align_center"><?php echo smartyTranslate(array('s'=>'No customer comments for the moment.','mod'=>'productcomments'),$_smarty_tpl);?>
</p>
<?php }?>

<?php if ($_smarty_tpl->getVariable('too_early')->value==true){?>
	<p class="align_center"><?php echo smartyTranslate(array('s'=>'You should wait','mod'=>'productcomments'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->getVariable('delay')->value;?>
 <?php echo smartyTranslate(array('s'=>'second(s) before posting a new comment','mod'=>'productcomments'),$_smarty_tpl);?>
</p>
<?php }elseif($_smarty_tpl->getVariable('cookie')->value->isLogged()==true||$_smarty_tpl->getVariable('allow_guests')->value==true){?>
<p class="align_center"><input style="margin:auto;" class="button_large" type="button" id="addCommentButton" value="<?php echo smartyTranslate(array('s'=>'Add a comment','mod'=>'productcomments'),$_smarty_tpl);?>
" onclick="$('#sendComment').slideDown('slow');$(this).slideUp('slow');" /></p>
<form action="<?php echo $_smarty_tpl->getVariable('action_url')->value;?>
" method="post" class="std" id="sendComment" style="display:none;">
	<fieldset>
		<p class="align_right"><a href="javascript:closeCommentForm()">X</a></p>
		<p class="bold"><?php echo smartyTranslate(array('s'=>'Add a comment','mod'=>'productcomments'),$_smarty_tpl);?>
</p>
		<?php if (count($_smarty_tpl->getVariable('criterions')->value)>0){?>
		<table border="0" cellspacing="0" cellpadding="0">
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('criterions')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>
				<input type="hidden" name="id_product_comment_criterion_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
" value="<?php echo intval($_smarty_tpl->getVariable('criterions')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_product_comment_criterion']);?>
" />
				<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('criterions')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'],'html','UTF-8');?>

			</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>
			<input class="star" type="radio" name="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
_grade" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
_grade" value="1" />
			<input class="star" type="radio" name="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
_grade" value="2" />
			<input class="star" type="radio" name="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
_grade" value="3" checked="checked" />
			<input class="star" type="radio" name="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
_grade" value="4" />
			<input class="star" type="radio" name="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
_grade" value="5" />
			</td>
		</tr>
		<?php endfor; endif; ?>
		</table>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('allow_guests')->value==true&&$_smarty_tpl->getVariable('cookie')->value->isLogged()==false){?><p><label for="customer_name"><?php echo smartyTranslate(array('s'=>'Your name:','mod'=>'productcomments'),$_smarty_tpl);?>
</label><input type="text" name="customer_name" id="customer_name" /></p><?php }?>
		<p><label for="comment_title"><?php echo smartyTranslate(array('s'=>'Title:','mod'=>'productcomments'),$_smarty_tpl);?>
</label><input type="text" name="title" id="comment_title" /></p>
		<p><label for="content"><?php echo smartyTranslate(array('s'=>'Comment:','mod'=>'productcomments'),$_smarty_tpl);?>
</label><textarea cols="46" rows="5" name="content" id="content"></textarea></p>
		<p class="submit">
			<input class="button" name="submitMessage" value="<?php echo smartyTranslate(array('s'=>'Send','mod'=>'productcomments'),$_smarty_tpl);?>
" type="submit" />
		</p>
	</fieldset>
</form>
<?php }else{ ?>
	<p class="align_center"><?php echo smartyTranslate(array('s'=>'Only registered users can post a new comment.','mod'=>'productcomments'),$_smarty_tpl);?>
</p>
<?php }?>
</div>