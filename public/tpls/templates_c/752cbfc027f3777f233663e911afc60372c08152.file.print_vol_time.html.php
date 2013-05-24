<?php /* Smarty version Smarty-3.1.7, created on 2013-05-24 20:03:57
         compiled from "./tpls/templates\print_vol_time.html" */ ?>
<?php /*%%SmartyHeaderCode:24036519f572d3ee611-22680809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '752cbfc027f3777f233663e911afc60372c08152' => 
    array (
      0 => './tpls/templates\\print_vol_time.html',
      1 => 1369145194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24036519f572d3ee611-22680809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'faculty' => 0,
    'grade' => 0,
    'start_year' => 0,
    'start_month' => 0,
    'end_year' => 0,
    'end_month' => 0,
    'vol_time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519f572d4ddf5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519f572d4ddf5')) {function content_519f572d4ddf5($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="./assets/img/header/logo.png">
    <title>志愿证明服务</title>
</head>

<body>
	<table align="center" width="840px">
    	<tr height="30px">
        	<td width="10%"></td>
        	<td align="center" width="80%" style="font-family:黑体; font-size:24px;"><b>志愿者服务证明</b></td>
            <td></td>
        </tr>
        <tr height="200px">
        	<td></td>
        	<td  style="line-height:30px;font-family:宋体">&nbsp;&nbsp;&nbsp;&nbsp;<b><u><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</u> 同学系南京大学 <u><?php echo $_smarty_tpl->tpl_vars['faculty']->value;?>
</u><u><?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
</u> 级学生，在 <u><?php echo $_smarty_tpl->tpl_vars['start_year']->value;?>
</u> 年 <u><?php echo $_smarty_tpl->tpl_vars['start_month']->value;?>
</u> 月至 <u><?php echo $_smarty_tpl->tpl_vars['end_year']->value;?>
</u> 年 <u><?php echo $_smarty_tpl->tpl_vars['end_month']->value;?>
</u> 月参与志愿活动，累计服务 <u><?php echo $_smarty_tpl->tpl_vars['vol_time']->value;?>
</u> 小时。</b></td>
            <td></td>
        </tr>
        <tr height="30px">
        	<td></td>
        	<td align="right" style="font-family:宋体"><b><?php echo $_smarty_tpl->tpl_vars['faculty']->value;?>
<b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td></td>
        </tr>
        <tr height="30px">
        	<td></td>
        	<td align="right" style="font-family:宋体"><b>（校团委盖章）</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td></td>
        </tr>
        <tr height="30px">
        	<td></td>
        	<td align="right" style="font-family:宋体"><b>年&nbsp;&nbsp;&nbsp;&nbsp;月</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td></td>
        </tr>
    </table>
</body>
</html><?php }} ?>