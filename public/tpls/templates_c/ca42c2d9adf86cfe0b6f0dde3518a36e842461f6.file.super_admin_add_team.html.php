<?php /* Smarty version Smarty-3.1.7, created on 2013-05-12 18:49:33
         compiled from "../tpls/templates\handle\super_admin_add_team.html" */ ?>
<?php /*%%SmartyHeaderCode:13939518f73bd2051a4-72310252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca42c2d9adf86cfe0b6f0dde3518a36e842461f6' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_add_team.html',
      1 => 1368355388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13939518f73bd2051a4-72310252',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_518f73bd232fa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518f73bd232fa')) {function content_518f73bd232fa($_smarty_tpl) {?><head>
</head>
<body>
<form action="../../../../handle/super_admin_add_team_ok.php" method="POST">
新团队的账户：
<input type="text" name="teamid">
<br />
新团队的名称：
<input type="text" name="teamname">
<br />
新团队的密码：
<input type="password" name="password">
<br/>
 <input type="submit" value="确认创建" />
</form>

</body>
<?php }} ?>