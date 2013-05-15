<?php /* Smarty version Smarty-3.1.7, created on 2013-05-15 22:30:58
         compiled from "../tpls/templates\include\mem.html" */ ?>
<?php /*%%SmartyHeaderCode:19254519365859e5236-84583822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9589185483075bbc18652f970ece25b1222a8d2' => 
    array (
      0 => '../tpls/templates\\include\\mem.html',
      1 => 1368628114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19254519365859e5236-84583822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51936585a3821',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51936585a3821')) {function content_51936585a3821($_smarty_tpl) {?>


<table>
	<tr>
		<th>学号</th><th>姓名</th>
		<th>性别</th><th>联系方式</th>
		<th>状态</th><th width="100px">身份</th>
	</tr>

	<tr>
		<td><span title="点击查看该学生信息" class="studentNo">b101220105</span></td>
		<td><a href="./zonev.php"  title="进入个人空间" target="_blank">谭琦存</a></td>
		<td>男</td><td>15900000000</td>
		<td>已审</td>
		<td><span title="点击修改" class="clickable capacity">主席</span></td>
	</tr>
	<tr>
		<td><span title="点击查看该学生信息" class="studentNo">b101220105</span></td>
		<td><a href="./zonev.php"  title="进入个人空间" target="_blank">谭琦存</a></td>
		<td>男</td><td>15900000001</td>
		<td><span title="点击修改" class="clickable checkNode">未审</span></td>
		<td><span title="点击修改" class="clickable capacity">主席</span></td>
	</tr>
	<tr>
		<td><span title="点击查看该学生信息" class="studentNo">b101220105</span></td>
		<td><a href="./zonev.php"  title="进入个人空间" target="_blank">谭琦存</a></td>
		<td>男</td><td>15900000002</td>
		<td><span title="点击修改" class="clickable checkNode">未审</span></td>
		<td><span title="点击修改" class="clickable capacity">成员</span></td>
	</tr>
</table><?php }} ?>