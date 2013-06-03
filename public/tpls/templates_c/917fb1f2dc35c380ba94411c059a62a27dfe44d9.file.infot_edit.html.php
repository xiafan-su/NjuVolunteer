<?php /* Smarty version Smarty-3.1.7, created on 2013-06-02 16:49:54
         compiled from "../tpls/templates\include\infot_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2182051ab0732b1a247-55462775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '917fb1f2dc35c380ba94411c059a62a27dfe44d9' => 
    array (
      0 => '../tpls/templates\\include\\infot_edit.html',
      1 => 1369463197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2182051ab0732b1a247-55462775',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'team_logo' => 0,
    'team_signature' => 0,
    'team_profile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51ab0732be351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ab0732be351')) {function content_51ab0732be351($_smarty_tpl) {?>


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
		<th style="text-align:right">密码</th>
		<td style="text-align:left">
			<table>
				<tr>
					<th  width="20px" style="text-align:right;">旧密码</th>
					<td style="text-align:left;"> <input type="password" value="" id="team_info_edit_password_old"/> </td>
					<td><span class="" style="white-space:nowrap;font-size:10px;">如果要修改密码，请填写此项，否则请留空！</span></td>
				</tr>
				<tr>
					<th style="text-align:right;width:50px">新密码</th>
					<td style="text-align:left;"> <input type="password" value="" id="team_info_edit_password"/> </td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<th style="text-align:right;width:50px">确认密码</th>
					<td style="text-align:left;"> <input type="password" value="" id="team_info_edit_password2"/> </td>
					<td>&nbsp;</td>
				</tr>
			</table>
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