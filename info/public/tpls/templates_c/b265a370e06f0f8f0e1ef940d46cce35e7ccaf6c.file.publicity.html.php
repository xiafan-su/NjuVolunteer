<?php /* Smarty version Smarty-3.1.7, created on 2014-03-15 08:28:31
         compiled from "./tpls/templates\publicity.html" */ ?>
<?php /*%%SmartyHeaderCode:285755324011f91ab21-90017622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b265a370e06f0f8f0e1ef940d46cce35e7ccaf6c' => 
    array (
      0 => './tpls/templates\\publicity.html',
      1 => 1394867784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285755324011f91ab21-90017622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'publicity_list' => 0,
    'publicity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_532401209037b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532401209037b')) {function content_532401209037b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="./assets/img/header/logo.png">
<title>公示公告</title>
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/gongshi.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
</head>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="main_search">
    	<a href="publicity.php">
        	<div style="float:left;margin-left:110px;margin-top:25px;font-weight:bold;font-size:50px;color:rgb(102,51,102);">光荣记录</div>
        </a>

	 </div>
     <hr />
	 <div id="" class="" style="width:0px;height:260px;display:hidden;float:left"></div>
	<table width="200" border="1">
      <tr>
        <th scope="col">姓名</th>
        <th scope="col">院系</th>
        <th scope="col">活动名称</th>
        <th scope="col">记录日期</th>
        <th scope="col">基础时间</th>
        <th scope="col">荣誉时间</th>
        <th scope="col">备注</th>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['publicity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['publicity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['publicity_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['publicity']->key => $_smarty_tpl->tpl_vars['publicity']->value){
$_smarty_tpl->tpl_vars['publicity']->_loop = true;
?>
        <tr>
		<td <?php if ($_smarty_tpl->tpl_vars['publicity']->value['sus']==1){?>style="background-color:rgb(184, 148, 211)"<?php }?> ><a href="indexv.php?user_id=<?php echo $_smarty_tpl->tpl_vars['publicity']->value['uid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['publicity']->value['name'];?>
</a></td>
        <td <?php if ($_smarty_tpl->tpl_vars['publicity']->value['sus']==1){?>style="background-color:rgb(184, 148, 211)"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['publicity']->value['faculty'];?>
</td>
        <td <?php if ($_smarty_tpl->tpl_vars['publicity']->value['sus']==1){?>style="background-color:rgb(184, 148, 211)"<?php }?> ><a href="act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['publicity']->value['actid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['publicity']->value['act_name'];?>
</a></td>
        <td <?php if ($_smarty_tpl->tpl_vars['publicity']->value['sus']==1){?>style="background-color:rgb(184, 148, 211)"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['publicity']->value['time'];?>
</td>
        <td <?php if ($_smarty_tpl->tpl_vars['publicity']->value['sus']==1){?>style="background-color:rgb(184, 148, 211)"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['publicity']->value['basetime'];?>
</td>
        <td <?php if ($_smarty_tpl->tpl_vars['publicity']->value['sus']==1){?>style="background-color:rgb(184, 148, 211)"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['publicity']->value['honortime'];?>
</td>
        <td <?php if ($_smarty_tpl->tpl_vars['publicity']->value['sus']==1){?>style="background-color:rgb(184, 148, 211)"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['publicity']->value['comment'];?>
</td>
        </tr>
	  <?php } ?>
    </table>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
</body>
</html>
<?php }} ?>