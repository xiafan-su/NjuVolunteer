<?php /* Smarty version Smarty-3.1.7, created on 2013-05-27 17:33:00
         compiled from "../tpls/templates\handle\super_admin_add_vol_time.html" */ ?>
<?php /*%%SmartyHeaderCode:1957451a3284c23d617-12798683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8a5f4d9c1458c9971f09b9bc7099ba56320cfea' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_add_vol_time.html',
      1 => 1369465115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1957451a3284c23d617-12798683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'act_all' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a3284c2abed',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a3284c2abed')) {function content_51a3284c2abed($_smarty_tpl) {?><!--

<head>
</head>
<body>
 <table >
				<tr>
                <th align="left">填写栏目</th>
					<th align="left">填写值</th>
                    </tr>
               






<form action="./handle/super_admin_add_vol_time_ok.php" method="POST">
<tr><td>学生账户名</td>
<td><input type="text" name="userid"></td></tr>
<tr><td>活动档案号</td>
<td><input type="text" name="docid"></td></tr>
<td>增加基础时间(小时)</td>
<td><input type="text" name="basictime"></td></tr>  
<tr><td>增加荣誉时间(小时)</td>
<td><input type="text" name="honortime"></td></tr>
<tr><td>评价</td>
<td><input type="text" name="reasoneva"></td></tr>
<tr><td>表现等级</td>
<td>
<select name="level" >
<option value="优秀">优秀</option>
<option value="良好">良好</option>
<option value="一般">一般</option>
</select>
</td></tr>
<tr><td>请确认</td>
<td>
 <input type="submit" value="提交更改" /></td></tr>
</form>
</table>

</body>
-->

<head>
</head>
<body>
 <table >
				<tr>
                <th align="left">填写栏目</th>
					<th align="left">填写值</th>
                    <th>校验</th>
                    </tr>
 <script src="./assets/js/admin_add_vol_time.js"></script>  
<form  method="POST" action="./handle/super_admin_add_vol_time_ok.php" onSubmit="return checkinfoover(this)">
<tr><td style="text-align:left">学生账户名</td>
<td><input type="text" name="userid" id="username" onBlur="checkuserid()"></td>
<td id="ua_1"></td></tr>

<tr><td style="text-align:left">活动名称</td>
<td> 	
<select id="act_name" class="actselect" name='actname'  onChange="get_doc()">
<option></option>
 <?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act_all']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</option>
		<?php } ?>
        </select>
        </td>
<td><font color="green">请注意正确选择</font></td></tr>

<tr><td style="text-align:left">档案选择</td>
<td> 	
	<div id="ready_to_change">
<select id="doc_id" class="docselect" name="docname"  onchange="setdoc()">

		<option > </option>
		
        </select>
        </div>
        </td>
   <td><font color="green">请注意正确选择</font></td></tr>     
       
        
  <tr><td style="text-align:left">评价</td>
<td><input type="text" name="reasoneva"></td>
<td><font color="green">请注意正确填写,可以为空</font></td></tr>
      

<tr><td style="text-align:left">带队奖</td>
<td><select name="teamleader">
<option value="0">否</option>
<option value="1">是</option>
</select>
</td>
<td><font color="green">请注意正确选择</font></td></tr>

<tr><td style="text-align:left">优秀奖</td>
<td><select name="goodmember">
<option value="0">否</option>
<option value="1">是</option>
</select>
</td>
<td><font color="green">请注意正确选择</font></td></tr>


<tr><td style="text-align:left">表现等级</td>
<td>
<select name="level" >
<option value="优秀">优秀</option>
<option value="良好">良好</option>
<option value="一般">一般</option>
</select>
</td>
<td><font color="green">请注意正确选择</font></td></tr>


<tr><td style="text-align:left">增加基础时间(小时)</td>
<td><input type="text" id="check_t" name="basictime" onBlur="check_base_time()"></td>
<td id="bt_2"></td></tr>
 







<tr><td style="text-align:left">请确认</td>
<td>
 <input type="submit" value="提交更改" /></td>
 <td><font color="green">请注意正确选择</font></td></tr>
 
 <input id="fordoc" name="docvalue" type="hidden"></input>
 
</form>
</table>



</body>
<?php }} ?>