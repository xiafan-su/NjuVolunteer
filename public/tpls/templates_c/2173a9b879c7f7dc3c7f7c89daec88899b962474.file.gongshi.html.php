<?php /* Smarty version Smarty-3.1.7, created on 2013-05-24 18:52:14
         compiled from "./tpls/templates\gongshi.html" */ ?>
<?php /*%%SmartyHeaderCode:9462519f465ef3a923-95268421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2173a9b879c7f7dc3c7f7c89daec88899b962474' => 
    array (
      0 => './tpls/templates\\gongshi.html',
      1 => 1369181561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9462519f465ef3a923-95268421',
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
  'unifunc' => 'content_519f465f139ea',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519f465f139ea')) {function content_519f465f139ea($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <th scope="col">基础时间</th>
        <th scope="col">服务时间</th>
        <th scope="col">备注</th>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['publicity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['publicity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['publicity_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['publicity']->key => $_smarty_tpl->tpl_vars['publicity']->value){
$_smarty_tpl->tpl_vars['publicity']->_loop = true;
?>
            <tr>
		<td><a href="indexv.php?user_id=<?php echo $_smarty_tpl->tpl_vars['publicity']->value['uid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['publicity']->value['name'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['publicity']->value['faculty'];?>
</td>
        <td><a href="act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['publicity']->value['actid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['publicity']->value['act_name'];?>
</a></td>
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