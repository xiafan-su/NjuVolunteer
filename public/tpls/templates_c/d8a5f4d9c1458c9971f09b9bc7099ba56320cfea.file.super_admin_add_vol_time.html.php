<?php /* Smarty version Smarty-3.1.7, created on 2013-05-15 18:32:52
         compiled from "../tpls/templates\handle\super_admin_add_vol_time.html" */ ?>
<?php /*%%SmartyHeaderCode:3005851936454c82f28-32435600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8a5f4d9c1458c9971f09b9bc7099ba56320cfea' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_add_vol_time.html',
      1 => 1368538893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3005851936454c82f28-32435600',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51936454cc298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51936454cc298')) {function content_51936454cc298($_smarty_tpl) {?><head>






</head>
<body>
<form action="../../../../handle/super_admin_add_vol_time_ok.php" method="POST">
学生账户名：
<input type="text" name="userid">
<br />
活动档案号：
<input type="text" name="docid">
</br>
增加基础时间(小时)：
<input type="text" name="basictime">
<br />      
增加荣誉时间(小时)：
<input type="text" name="honortime">
<br /> 
评价：
<input type="text" name="reasoneva">
<br/>     

表现等级
<select name="level" >
<option value="优秀">优秀</option>
<option value="良好">良好</option>
<option value="一般">一般</option>
</select>

</br>
 <input type="submit" value="提交更改" />
</form>

</body>
<?php }} ?>