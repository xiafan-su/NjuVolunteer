<?php /* Smarty version Smarty-3.1.7, created on 2013-05-18 13:38:17
         compiled from "../tpls/templates\include\infov.html" */ ?>
<?php /*%%SmartyHeaderCode:244765196634d5e5e99-69607860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d4e8fdadac667c8dbd8810f1b75cc235d01ef23' => 
    array (
      0 => '../tpls/templates\\include\\infov.html',
      1 => 1368624941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244765196634d5e5e99-69607860',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5196634d790c9',
  'variables' => 
  array (
    'name' => 0,
    'stu_no' => 0,
    'idcard_num' => 0,
    'gender' => 0,
    'email' => 0,
    'phone' => 0,
    'faculty' => 0,
    'birthday' => 0,
    'politics_status' => 0,
    'nation' => 0,
    'cloth_size' => 0,
    'dormitory' => 0,
    'cet4' => 0,
    'cet6' => 0,
    'language' => 0,
    'level' => 0,
    'medical' => 0,
    'drive' => 0,
    'other_skills' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5196634d790c9')) {function content_5196634d790c9($_smarty_tpl) {?><style>
table td{
	text-align:left;
}
</style>
<div id="" class="">
	
   	<div id="base">
    <div>
    	<div class="left-bar"></div>
    	<div class="base-info">基本资料</div>
    	<div class="right-bar"></div>
	</div>
<table width="200" border="1">
  <tr>
    <th scope="row">姓名</th>
    <td id="name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">学号</th>
    <td id="stud_no"><?php echo $_smarty_tpl->tpl_vars['stu_no']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">身份证号</th>
    <td><?php echo $_smarty_tpl->tpl_vars['idcard_num']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">性别</th>
    <td><?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">E-mail</th>
    <td><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">手机</th>
    <td><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">所在院</th>
    <td><?php echo $_smarty_tpl->tpl_vars['faculty']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">出生日期</th>
    <td><?php echo $_smarty_tpl->tpl_vars['birthday']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">政治面貌</th>
    <td><?php echo $_smarty_tpl->tpl_vars['politics_status']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">民族</th>
    <td><?php echo $_smarty_tpl->tpl_vars['nation']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">服装大小</th>
    <td><?php echo $_smarty_tpl->tpl_vars['cloth_size']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">宿舍</th>
    <td><?php echo $_smarty_tpl->tpl_vars['dormitory']->value;?>
</td>
  </tr>
</table>
</div>
<div id="more">
 	<div>
    	<div class="left-bar"></div>
    	<div class="base-info">个人技能</div>
    	<div class="right-bar"></div>
	</div>
	<table width="200" border="1">
  <tr>
    <th scope="row">cet4</th>
    <td><?php echo $_smarty_tpl->tpl_vars['cet4']->value;?>
</td>
  </tr>
   <tr>
    <th scope="row">cet6</th>
    <td><?php echo $_smarty_tpl->tpl_vars['cet6']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">其他外语</th>
    <td><?php echo $_smarty_tpl->tpl_vars['language']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">水平</th>
    <td><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
</td>
  </tr>
  
  <tr>
    <th scope="row">是否有医疗急救技能</th>
    <td><?php echo $_smarty_tpl->tpl_vars['medical']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">是否有驾驶技能</th>
    <td><?php echo $_smarty_tpl->tpl_vars['drive']->value;?>
</td>
  </tr>
  <tr>
    <th scope="row">其他能力</th>
    <td><?php echo $_smarty_tpl->tpl_vars['other_skills']->value;?>
</td>
  </tr>
</table>

</div>

</div><?php }} ?>