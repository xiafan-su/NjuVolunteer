<?php /* Smarty version Smarty-3.1.7, created on 2013-05-20 05:25:54
         compiled from "../tpls/templates\handle\super_admin_add_vol_time.html" */ ?>
<?php /*%%SmartyHeaderCode:1044251994362b81490-62394341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8a5f4d9c1458c9971f09b9bc7099ba56320cfea' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_add_vol_time.html',
      1 => 1368983442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1044251994362b81490-62394341',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51994362bbed3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51994362bbed3')) {function content_51994362bbed3($_smarty_tpl) {?>

<head>
</head>
<body>
 <table >
				<tr>
                <th align="left">填写栏目</th>
					<th align="left">填写值</th>
                    </tr>
               






<form action="../public/handle/super_admin_add_vol_time_ok.php" method="POST">
<tr><td>学生账户名</td>
<td><input type="text" name="userid"></td></tr>
<tr><td>活动档案号</td>
<td><input type="text" name="docid"></td></tr>
<td>增加基础时间(小时)</td>
<td><input type="text" name="basictime"></td></tr>  
<tr><td>增加荣誉时间(小时)</td>
<td><input type="text" name="honortime"></td></tr>
<tr><td>评价</td>
<td><input type="text" name="reasoneva"></td></tr>
<tr><td>表现等级</td>
<td>
<select name="level" >
<option value="优秀">优秀</option>
<option value="良好">良好</option>
<option value="一般">一般</option>
</select>
</td></tr>
<tr><td>请确认</td>
<td>
 <input type="submit" value="提交更改" /></td></tr>
</form>
</table>

</body>
<?php }} ?>