<?php /* Smarty version Smarty-3.1.7, created on 2013-05-13 10:22:09
         compiled from "../tpls/templates\include\actv_takein.html" */ ?>
<?php /*%%SmartyHeaderCode:16792518cd1c9eec9f9-91633381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f769ac5b08ee9b0df3433514abe1d10a24976d8d' => 
    array (
      0 => '../tpls/templates\\include\\actv_takein.html',
      1 => 1368367615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16792518cd1c9eec9f9-91633381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_518cd1c9f2404',
  'variables' => 
  array (
    'act_list' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518cd1c9f2404')) {function content_518cd1c9f2404($_smarty_tpl) {?><div style="margin-left:20px;margin-right:20px;">
<table width="200" border="1">
  <tr>
    <th scope="row">活动名称</th>
    <th scope="row">详细时间</th>
    <th scope="row">当前状态</th>
  </tr>
  <?php if (isset($_smarty_tpl->tpl_vars['act_list']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
      <tr>
        <td id="name"><a href="./act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</a></td>
        <td id="stud_no"><?php echo $_smarty_tpl->tpl_vars['act']->value['detail_time'];?>
</td>
        <td id="state"><?php echo $_smarty_tpl->tpl_vars['act']->value['state'];?>
</td>
      </tr>
    <?php } ?>
   <?php }?>

</table>
</div><?php }} ?>