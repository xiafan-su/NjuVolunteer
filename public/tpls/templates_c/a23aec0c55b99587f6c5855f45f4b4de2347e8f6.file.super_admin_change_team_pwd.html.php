<?php /* Smarty version Smarty-3.1.7, created on 2013-05-15 18:32:47
         compiled from "../tpls/templates\handle\super_admin_change_team_pwd.html" */ ?>
<?php /*%%SmartyHeaderCode:182615193644f557bb3-25092239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a23aec0c55b99587f6c5855f45f4b4de2347e8f6' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_change_team_pwd.html',
      1 => 1368538893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182615193644f557bb3-25092239',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5193644f5960f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5193644f5960f')) {function content_5193644f5960f($_smarty_tpl) {?><head>
</head>
<body>
<form action="../../../../handle/super_admin_change_team_pwd_ok.php" method="POST">
团队账户名：
<input type="text" name="teamid">
<br />
新的密码：         
<input type="password" name="password">
<br/>
 <input type="submit" value="确认修改" />
</form>

</body>
<?php }} ?>