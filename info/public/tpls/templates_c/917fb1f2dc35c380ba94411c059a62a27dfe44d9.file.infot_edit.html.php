<?php /* Smarty version Smarty-3.1.7, created on 2014-03-18 03:36:08
         compiled from "../tpls/templates\include\infot_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:142935327aaf0b11d44-16511836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '917fb1f2dc35c380ba94411c059a62a27dfe44d9' => 
    array (
      0 => '../tpls/templates\\include\\infot_edit.html',
      1 => 1395110129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142935327aaf0b11d44-16511836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5327aaf0c59f9',
  'variables' => 
  array (
    'team_logo' => 0,
    'team_signature' => 0,
    'team_profile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5327aaf0c59f9')) {function content_5327aaf0c59f9($_smarty_tpl) {?>


<div id="" class="" style="margin: 0 20px 10px">
	

	<table>
	<tr><th style="text-align:right">Logo</th>
		<td style="text-align:left">
			<div id="" class="">
				<img src="./assets/img/team/<?php echo $_smarty_tpl->tpl_vars['team_logo']->value;?>
" width="" style="border-radius:25px;" height="" border="0" title="暂不支持头像的修改">
			</div>
		</td>
	</tr>
	<tr>
		<th style="text-align:right">口号</th>
		<td style="text-align:left">
			<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['team_signature']->value;?>
" id="team_info_edit_slogan" />
		</td>
	</tr>
	<tr>
		<th style="text-align:right">简介</th>
		<td style="text-align:left">
			<div id="" class="input_area">
				<textarea name="content" style="width:590px;height:200px;visibility:hidden;"><?php echo $_smarty_tpl->tpl_vars['team_profile']->value;?>
</textarea>
			</div>
		</td>
	</tr>
	</table>
	<input type="button" class="button"  onclick="team_info_edit_ok();" value="确定" />
	<input type="button" class="button"  title="取消修改" onclick="go_back_home();" value="返回" />
</div><?php }} ?>