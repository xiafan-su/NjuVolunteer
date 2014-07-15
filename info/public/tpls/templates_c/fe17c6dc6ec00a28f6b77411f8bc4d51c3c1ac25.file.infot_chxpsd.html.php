<?php /* Smarty version Smarty-3.1.7, created on 2014-03-18 04:36:49
         compiled from "../tpls/templates\include\infot_chxpsd.html" */ ?>
<?php /*%%SmartyHeaderCode:137635327b1668c1143-23644974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe17c6dc6ec00a28f6b77411f8bc4d51c3c1ac25' => 
    array (
      0 => '../tpls/templates\\include\\infot_chxpsd.html',
      1 => 1395112099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137635327b1668c1143-23644974',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5327b16691706',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5327b16691706')) {function content_5327b16691706($_smarty_tpl) {?>


<div id="" class="" style="margin: 0 20px 10px">
	

	<table>
		<tr>
			<th  width="20px" style="text-align:right;">原密码</th>
			<td style="text-align:left;"> <input type="password" value="" id="team_info_chxpsd_old"/> </td>
			<td width="50%" ><span class="" style="white-space:nowrap;font-size:10px;">&nbsp;</span></td>
		</tr>
		<tr>
			<th style="text-align:right;width:50px">新密码</th>
			<td style="text-align:left;"> <input type="password" value="" id="team_info_chxpsd"/> </td>
			<td><span class="" style="white-space:nowrap;font-size:10px;">&nbsp;</span></td>
		</tr>
		<tr>
			<th style="text-align:right;width:50px">确认密码</th>
			<td style="text-align:left;"> <input type="password" value="" id="team_info_chxpsd2"/> </td>
			<td><span class="" style="white-space:nowrap;font-size:10px;">&nbsp;</span></td>
		</tr>
	</table>
	<input type="button" class="button"  onclick="team_info_chxpsd_ok();" value="确定" />
</div><?php }} ?>