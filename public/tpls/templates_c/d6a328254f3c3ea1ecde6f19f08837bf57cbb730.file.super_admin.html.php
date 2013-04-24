<?php /* Smarty version Smarty-3.1.7, created on 2013-04-24 20:12:27
         compiled from "./tpls/templates\super_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:145825177c41e292540-13490397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6a328254f3c3ea1ecde6f19f08837bf57cbb730' => 
    array (
      0 => './tpls/templates\\super_admin.html',
      1 => 1366805511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145825177c41e292540-13490397',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5177c41e2d7f2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5177c41e2d7f2')) {function content_5177c41e2d7f2($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>超级管理员</title>
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/super_admin.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/super_admin.js"></script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="act-info-title">
    	<div class="act-name" style="cursor:auto;text-align:center">活动名称</div>
        <div class="act-state">活动状态</div>
    </div>
    <div id="content">
    
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html>
<?php }} ?>