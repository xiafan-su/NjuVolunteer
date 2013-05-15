<?php /* Smarty version Smarty-3.1.7, created on 2013-05-15 22:01:28
         compiled from "./tpls/templates\notice.html" */ ?>
<?php /*%%SmartyHeaderCode:1700951936ff20052c8-45431286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '557724488c0d1472f55b9b370819058ffefc6297' => 
    array (
      0 => './tpls/templates\\notice.html',
      1 => 1368626485,
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
    
    <div class="right" id="right">
        <?php echo $_smarty_tpl->getSubTemplate ("include/notice_detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>