<?php /* Smarty version Smarty-3.1.7, created on 2013-05-30 20:47:07
         compiled from "./tpls/templates\print_vol_time.html" */ ?>
<?php /*%%SmartyHeaderCode:1965151a74a4b738219-78969703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '752cbfc027f3777f233663e911afc60372c08152' => 
    array (
      0 => './tpls/templates\\print_vol_time.html',
      1 => 1369487914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1965151a74a4b738219-78969703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'print' => 0,
    'user_id' => 0,
    'name' => 0,
    'faculty' => 0,
    'grade' => 0,
    'start_year' => 0,
    'start_month' => 0,
    'end_year' => 0,
    'end_month' => 0,
    'vol_time' => 0,
    'team_name' => 0,
    'prove_date_year' => 0,
    'prove_date_month' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a74a4b872af',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a74a4b872af')) {function content_51a74a4b872af($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="./assets/img/header/logo.png">
<?php if (!$_smarty_tpl->tpl_vars['print']->value){?>
<link type="text/css" rel="stylesheet" href="./plugin/calendar/calendar.css" >
<script type="text/javascript" src="./plugin/calendar/calendar.js" ></script>  
<script type="text/javascript" src="./plugin/calendar/calendar-zh.js" ></script>
<script type="text/javascript" src="./plugin/calendar/calendar-setup.js"></script>
<link href="./assets/css/index.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/zonet.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script language="javascript">
function to_print(){
	var user_id = $("#user_id").text();
	var begin = $("#input_begin_time").val();
	var end = $("#input_end_time").val();
	//alert( user_id+","+begin+","+end );
	window.open( "./print_vol_time.php?user_id="+user_id+"&begin_time="+begin+"&end_time="+end, "_blank" );
}
</script>
<?php }?>
<title>志愿服务证明</title>
</head>

<body>
<?php if (!$_smarty_tpl->tpl_vars['print']->value){?>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main">
	<table>
	<tr>
		<th style="text-align:right">学号</th>
		<td style="text-align:left" id="user_id"><?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
</td></tr>
	<tr>
		<th style="text-align:right">开始时间</th>
		<td style="text-align:left">
			<input type="text" id="input_begin_time" onclick="return showCalendar('input_begin_time', 'y-mm-dd');" />
		</td>
	</tr>
	<tr>
		<th style="text-align:right">结束时间</th>
		<td style="text-align:left">
			<input type="text" id="input_end_time" onclick="return showCalendar('input_end_time', 'y-mm-dd');" />
		</td>
	</tr>
	</table>
	<input type="button" class="button" onclick="to_print()" value="打印预览" />
	<p>打印模板：</p>
<?php }?>
<!--startprint-->
	<table align="center" width="840px" >
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
    	<tr height="30px">
        	<td width="10%"></td>
        	<td align="center" width="80%" style="font-family:黑体; font-size:24px;"><b>志愿者服务证明</b></td>
            <td></td>
        </tr>


		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>

        <tr height="200px">
        	<td></td>
        	<td  style="line-height:60px;font-family:宋体;text-align:left">&nbsp;&nbsp;&nbsp;&nbsp;<b><u><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
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



		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><th></th><td>&nbsp;</td><td>&nbsp;</td></tr>

        <tr height="30px">
        	<td></td>
        	<td style="font-family:宋体;text-align:right"><b><?php echo $_smarty_tpl->tpl_vars['team_name']->value;?>
<b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td></td>
        </tr>
        <tr height="30px">
        	<td></td>
        	<td style="font-family:宋体;text-align:right"><b>&nbsp;&nbsp;&nbsp;&nbsp;（校团委盖章）</b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td></td>
        </tr>
        <tr height="30px">
        	<td></td>
        	<td  style="font-family:宋体;text-align:right"><b><?php echo $_smarty_tpl->tpl_vars['prove_date_year']->value;?>
&nbsp;年&nbsp;<?php echo $_smarty_tpl->tpl_vars['prove_date_month']->value;?>
&nbsp;月</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td></td>
        </tr>
    </table>
<!--endprint-->
<?php if (!$_smarty_tpl->tpl_vars['print']->value){?>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?>
</body>
</html><?php }} ?>