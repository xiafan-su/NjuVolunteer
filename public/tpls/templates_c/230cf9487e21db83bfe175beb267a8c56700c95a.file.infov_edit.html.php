<?php /* Smarty version Smarty-3.1.7, created on 2013-05-09 21:51:37
         compiled from "../tpls/templates\include\infov_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:11240518ba78624bfd2-16047941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '230cf9487e21db83bfe175beb267a8c56700c95a' => 
    array (
      0 => '../tpls/templates\\include\\infov_edit.html',
      1 => 1368107493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11240518ba78624bfd2-16047941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_518ba7862c079',
  'variables' => 
  array (
    'name' => 0,
    'stu_no' => 0,
    'idcard_num' => 0,
    'gender' => 0,
    'email' => 0,
    'phone' => 0,
    'faculty' => 0,
    'department' => 0,
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518ba7862c079')) {function content_518ba7862c079($_smarty_tpl) {?><div id="" class="">
	个人空间右边的个人资编辑
    <div class="base-info">-基本资料-</div>
    <div class="base-info">-个人技能-</div>
    <div id="base">
<table width="200" border="1">
  <tr>
    <th scope="row">姓名</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">学号</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['stu_no']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">身份证号</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['idcard_num']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">性别</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">E-mail</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">手机</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">所在院</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['faculty']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">所在系</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['department']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">出生日期</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['birthday']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">政治面貌</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['politics_status']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">民族</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['nation']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">服装大小</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['cloth_size']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">宿舍</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['dormitory']->value;?>
"/></td>
  </tr>
</table>
</div>

<div id="more">
	<table width="200" border="1">
  <tr>
    <th scope="row">cet4</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['cet4']->value;?>
"/></td>
  </tr>
   <tr>
    <th scope="row">cet6</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['cet6']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">其他外语</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">水平</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
"/></td>
  </tr>
  
  <tr>
    <th scope="row">是否有医疗急救技能</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['medical']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">是否有驾驶技能</th>
    <td><input type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['drive']->value;?>
"/></td>
  </tr>
  <tr>
    <th scope="row">其他能力</th>
    <td><input type="textarea" id="name" value=""/>&nbsp;</td>
  </tr>
</table>
<input type="button" value="提交"/>
<input type="button" value="回到默认" />
</div>
</div><?php }} ?>