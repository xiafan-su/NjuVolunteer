<?php /* Smarty version Smarty-3.1.7, created on 2013-05-21 23:07:51
         compiled from "../tpls/templates\handle\super_admin_add_team.html" */ ?>
<?php /*%%SmartyHeaderCode:17862519b8dc749f362-15895223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca42c2d9adf86cfe0b6f0dde3518a36e842461f6' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_add_team.html',
      1 => 1369147733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17862519b8dc749f362-15895223',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519b8dc74e2a5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519b8dc74e2a5')) {function content_519b8dc74e2a5($_smarty_tpl) {?><head>
</head>
<body>
 <table >
				<tr>
                <th style="width:150px" >填写栏目</th>
					<th>填写值</th>
                    </tr>
               
<script src="./assets/js/md5.js"></script>
<form action="./handle/super_admin_add_team_ok.php" method="POST">
<tr><td style="text-align:left">团队账号名</td>
<td><input type="text" name="teamid"></td></tr>
<tr><td style="text-align:left">团队名称</td>
<td><input type="text" name="teamname"></td></tr>
<tr><td style="text-align:left">团队密码</td>
<td><input type="password" name="password" id="password"></td></tr>
<tr><td style="text-align:left">团队联系邮箱</td>
<td><input type="text" name="teamemail"></td></tr>
<tr><td style="text-align:left">团队负责人姓名</td>
<td><input type="text" name="teamres"></td></tr>
<tr><td style="text-align:left">团队负责人联系方式</td>
<td><input type="text" name="teamres_tel"></td></tr>
<tr><td style="text-align:left">团队指导老师姓名</td>
<td><input type="text" name="teamtea"></td></tr>
<tr><td style="text-align:left">团队指导老师联系方式</td>
<td><input type="text" name="teamtea_tel"></td></tr>
<tr><td style="text-align:left">团队挂靠单位</td>
<td><input type="text" name="teamunit"></td></tr>


 <tr><td style="text-align:left">请确认</td><td><input type="submit" value="确认创建" onClick="$('#password').val(hex_md5($('#password').val()));"/></td>
</form>

</table>
</body>
<?php }} ?>