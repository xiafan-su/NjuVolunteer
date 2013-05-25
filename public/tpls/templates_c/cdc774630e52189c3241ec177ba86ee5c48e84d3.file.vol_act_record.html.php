<?php /* Smarty version Smarty-3.1.7, created on 2013-05-24 23:57:00
         compiled from "../tpls/templates\include\vol_act_record.html" */ ?>
<?php /*%%SmartyHeaderCode:7807519f8dcca320c8-24350572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdc774630e52189c3241ec177ba86ee5c48e84d3' => 
    array (
      0 => '../tpls/templates\\include\\vol_act_record.html',
      1 => 1368367048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7807519f8dcca320c8-24350572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'act_record_list' => 0,
    'record' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519f8dccae0b3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519f8dccae0b3')) {function content_519f8dccae0b3($_smarty_tpl) {?><div style="margin-left:20px;margin-right:20px;">
<table width="200" border="1">
  <tr>
    <th scope="row">时间</th>
    <th scope="row">活动名称</th>
    <th scope="row">基础时间</th>
    <th scope="row">荣誉时间</th>
    <th scope="row">表现</th>
    <th scope="row">评价</th>
  </tr>
  <?php if (isset($_smarty_tpl->tpl_vars['act_record_list']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act_record_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
?>
      <tr>
        <td id="date"><?php echo $_smarty_tpl->tpl_vars['record']->value['date'];?>
</td>
        <td id="name"><a href="./act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['record']->value['name'];?>
</a></td>
        <td id="base_time"><?php echo $_smarty_tpl->tpl_vars['record']->value['base_time'];?>
</td>
        <td id="honor_time"><?php echo $_smarty_tpl->tpl_vars['record']->value['honor_time'];?>
</td>
        <td id="performance_level"><?php echo $_smarty_tpl->tpl_vars['record']->value['performance_level'];?>
</td>
        <td id="comment"><?php echo $_smarty_tpl->tpl_vars['record']->value['comment'];?>
</td>
      </tr>
    <?php } ?>
   <?php }?>

</table>
</div><?php }} ?>