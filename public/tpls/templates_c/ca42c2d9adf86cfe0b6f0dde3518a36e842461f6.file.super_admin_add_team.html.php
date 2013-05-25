<?php /* Smarty version Smarty-3.1.7, created on 2013-05-25 16:26:13
         compiled from "../tpls/templates\handle\super_admin_add_team.html" */ ?>
<?php /*%%SmartyHeaderCode:27151a075a5a86507-67449051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca42c2d9adf86cfe0b6f0dde3518a36e842461f6' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_add_team.html',
      1 => 1369460093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27151a075a5a86507-67449051',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a075a5ab371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a075a5ab371')) {function content_51a075a5ab371($_smarty_tpl) {?><head>
</head>
<body>
 <table >
				<tr>
                <th style="width:150px" >填写栏目</th>
					<th>填写值</th>
                    <th>校验</th>
                   
                   </tr>
               
<script src="./assets/js/md5.js"></script>
<script src="./assets/js/admin_check_team.js"></script>
<form action="./handle/super_admin_add_team_ok.php" method="POST"  onsubmit="return checkover(this)">
<tr><td style="text-align:left">团队账号名</td>
<td><input type="text" id="col1" name="teamid" onBlur="checkid()"></td>
<td id="ac_1"></td>
</tr>
<tr><td style="text-align:left">团队名称</td>
<td><input type="text" id="col2" name="teamname" onBlur="checkname()"></td>
<td id="nm_2"></td>
</tr>

<tr><td style="text-align:left">团队密码</td>
<td><input type="password" id="mima" name="password" id="password" onBlur="checkpwd()"></td>
<td id="pwd"></td>
</tr>

<tr><td style="text-align:left">团队层次</td>
<td><select name="teamlayer">
<option value="0">院系组织</option>
<option value="1">非院系组织</option>
</select>
</td>
<td>请注意正确选择</td>
</tr>



<tr><td style="text-align:left">团队联系邮箱</td>
<td><input type="text" id="col3" name="teamemail" onBlur="checkemail()"></td>
<td id="em_3"></td>
</tr>

<tr><td style="text-align:left">团队挂靠单位</td>
<td><input type="text" id="col8" name="teamunit" onBlur="checkaa()"></td>
<td id="aa_8"></td>
</tr>




<tr><td style="text-align:left">团队负责人姓名</td>
<td><input type="text" id="col4" name="teamres" onBlur="checkuname()"></td>
<td id="un_4"></td>
</tr>

<tr><td style="text-align:left">团队指导老师姓名</td>
<td><input type="text" id="col6" name="teamtea" onBlur="checkgname()"></td>
<td id="gn_6"></td>
</tr>





<tr><td style="text-align:left">团队负责人联系方式</td>
<td><input type="text" id="col5" name="teamres_tel" onBlur="checkutel()"></td>
<td id="up_5"></td>
</tr>

<tr><td style="text-align:left">团队指导老师联系方式</td>
<td><input type="text" id="col7" name="teamtea_tel" onBlur="checkgtel()"></td>
<td id="gp_7"></td>
</tr>





 <tr><td style="text-align:left">请确认</td><td><input type="submit" value="确认创建" onClick="$('#password').val(hex_md5($('#password').val()));" /></td><td></td></tr>
 
</form>

</table>
</body>
<?php }} ?>