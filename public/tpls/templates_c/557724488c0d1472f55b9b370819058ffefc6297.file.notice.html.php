<?php /* Smarty version Smarty-3.1.7, created on 2013-05-15 21:00:39
         compiled from "./tpls/templates\notice.html" */ ?>
<?php /*%%SmartyHeaderCode:1700951936ff20052c8-45431286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '557724488c0d1472f55b9b370819058ffefc6297' => 
    array (
      0 => './tpls/templates\\notice.html',
      1 => 1368622836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1700951936ff20052c8-45431286',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51936ff204b3e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51936ff204b3e')) {function content_51936ff204b3e($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>公告通知</title>
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/notice.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/notice.js"></script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main">
    <div class="left">
        <div class="notice">
        	公告通知
        </div>
        <div class="online">
        	在线咨询
        </div>
        <div class="online">
        	心路历程
        </div>
    </div>
    
    <div class="right">
        <div class="title-bar" id="title_bar">
        	<div class="left-bar"></div>
            <span id="type">公告通知</span>
            <div class="right-bar"></div>
        </div>
        <div class="content">
        	<div class="notice-list">
            	<ul class="detail">
                	<li>
                    	<div class="title-d">上学期所有志愿活动一览</div>
                    	<div class="time-d">[2013-5-11]</div>
                    </li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                </ul>
            </div>
            <div class="bottom-s">
            	<div style="float:left">第页/总页，共条</div>
                <div style="float:right">
                	<input type="button" value="首页"/>
                    <input type="button" value="上一页"/>
                    <input type="button" value="下一页"/>
                    <input type="button" value="末页"/>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>