<?php /* Smarty version Smarty-3.1.7, created on 2013-06-03 20:03:00
         compiled from "./tpls/templates\notice3.html" */ ?>
<?php /*%%SmartyHeaderCode:3137251ac85f41ef827-77038338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '769d1f4b80bebf241f7959fd621ed4334e897eff' => 
    array (
      0 => './tpls/templates\\notice3.html',
      1 => 1370257344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3137251ac85f41ef827-77038338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51ac85f423fee',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac85f423fee')) {function content_51ac85f423fee($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="./assets/img/header/logo.png">
<title>公告通知</title>
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/notice.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/notice.js"></script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="type" style="display:none"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</div>
<div id="notice-id" style="display:none"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</div>
<div class="main">
    <div class="left">
        <a href="notice.php?type=1&page=1">
        <div class="notice">
        	公告通知
        </div></a>
        <a href="notice.php?type=2&page=1">
        <div class="online">
        	在线咨询
        </div></a>
        <a href="notice.php?type=4&page=1">
        <div class="online">
        	在线提问
        </div></a>
        <a href="notice.php?type=3&page=1">
        <div class="online">
        	心路历程
        </div></a>
    </div>
    
    <div class="right" id="right">
        <div class="title-bar" id="title_bar">
   			<div class="left-bar"></div>
    		<span id="type-title">在线提问</span>
    		<div class="right-bar"></div>
        </div>
        <div class="content"  style="height:200px;">
			<div class="content-intput">
            	<table width="200" border="0">
                  <tr>
                    <td>E-mail：</td>
                    <td><input id="email_address" type="text" class="content-input-text" /></td>
                  </tr>
                  <tr>
                    <td>问题：</td>
                    <td><input id="question_content" type="text" class="content-input-text" /></td>
                  </tr>
                </table>
            </div>
            <div style="width:640px; text-align:center">
            	<input id="put_up_question" type="button" value="提交问题" />
        	</div>
        </div>
    </div>
</div>
<div class="notice-cover" id="notice-cover" onclick="hide()"></div>
<div class="notice-detail" id="notice-detail">
	
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>