<?php /* Smarty version Smarty-3.1.7, created on 2013-05-18 16:36:46
         compiled from "./tpls/templates\gongshi.html" */ ?>
<?php /*%%SmartyHeaderCode:1787651973c40ebad52-97926030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2173a9b879c7f7dc3c7f7c89daec88899b962474' => 
    array (
      0 => './tpls/templates\\gongshi.html',
      1 => 1368866204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1787651973c40ebad52-97926030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51973c40f1828',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51973c40f1828')) {function content_51973c40f1828($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/gongshi.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
</head>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	
	<table width="200" border="1">
      <tr>
        <th scope="col">姓名</th>
        <th scope="col">院系</th>
        <th scope="col">活动名称</th>
        <th scope="col">志愿时间</th>
        <th scope="col">备注</th>
      </tr>
    </table>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
</body>
</html>
<?php }} ?>