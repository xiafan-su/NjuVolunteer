<?php /* Smarty version Smarty-3.1.7, created on 2013-05-20 01:20:56
         compiled from "./tpls/templates\notice.html" */ ?>
<?php /*%%SmartyHeaderCode:15670519909f8e72bc3-20982429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '557724488c0d1472f55b9b370819058ffefc6297' => 
    array (
      0 => './tpls/templates\\notice.html',
      1 => 1368855632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15670519909f8e72bc3-20982429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'detail' => 0,
    'item' => 0,
    'page_now' => 0,
    'page_all' => 0,
    'num_all' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519909f901fe9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519909f901fe9')) {function content_519909f901fe9($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<div id="type" style="display:none"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
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
        <a href="notice.php?type=3&page=1">
        <div class="online">
        	心路历程
        </div></a>
    </div>
    
    <div class="right" id="right">
        <div class="title-bar" id="title_bar">
    <div class="left-bar"></div>
    <span id="type-title">公告通知</span>
    <div class="right-bar"></div>
        </div>
        <div class="content">
            <div class="notice-list">
                <ul class="detail">
                	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li>
                        <div class="title-d" onclick="detail_show(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                        <div id="notice-id" style="display:none"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</div>
                        <div class="time-d"><?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
</div>
                    </li>
                    <?php } ?>
                    
                </ul>
            </div>
            <div class="bottom-s">
                <div style="float:left">
                	第<span id="page-now"><?php echo $_smarty_tpl->tpl_vars['page_now']->value;?>
</span>页
                    /总<span id="page-all"><?php echo $_smarty_tpl->tpl_vars['page_all']->value;?>
</span>页，
                    共<?php echo $_smarty_tpl->tpl_vars['num_all']->value;?>
条</div>
                <div style="float:right">
                    <input id="first-page" type="button" value="首页"/>
                    <input id="prev-page" type="button" value="上一页"/>
                    <input id="next-page" type="button" value="下一页"/>
                    <input id="last-page" type="button" value="末页"/>
                </div>
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