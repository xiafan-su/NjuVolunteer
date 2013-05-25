<?php /* Smarty version Smarty-3.1.7, created on 2013-05-25 20:48:58
         compiled from "./tpls/templates\publicity.html" */ ?>
<?php /*%%SmartyHeaderCode:1140051a0b0fa6914f6-15398242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b265a370e06f0f8f0e1ef940d46cce35e7ccaf6c' => 
    array (
      0 => './tpls/templates\\publicity.html',
      1 => 1369486033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1140051a0b0fa6914f6-15398242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a0b0fa705c6',
  'variables' => 
  array (
    'publicity_list' => 0,
    'publicity' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a0b0fa705c6')) {function content_51a0b0fa705c6($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <tr <?php if ($_smarty_tpl->tpl_vars['publicity']->value['sus']==1){?>style="background-color:rgb(100,100,100)"<?php }?> >
		<td><a href="indexv.php?user_id=<?php echo $_smarty_tpl->tpl_vars['publicity']->value['uid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['publicity']->value['name'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['publicity']->value['faculty'];?>
</td>
        <td><a href="act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['publicity']->value['actid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['publicity']->value['act_name'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['publicity']->value['time'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['publicity']->value['basetime'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['publicity']->value['honortime'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['publicity']->value['comment'];?>
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