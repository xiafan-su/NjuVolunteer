<?php /* Smarty version Smarty-3.1.7, created on 2013-05-12 11:09:13
         compiled from "../tpls/templates\include\vol_note.html" */ ?>
<?php /*%%SmartyHeaderCode:340518f07d9c33a52-45252132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '409f65359b724a9e37fdf04bfeb5db6216df765e' => 
    array (
      0 => '../tpls/templates\\include\\vol_note.html',
      1 => 1368327084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '340518f07d9c33a52-45252132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'note_list' => 0,
    'record' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_518f07d9c9315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518f07d9c9315')) {function content_518f07d9c9315($_smarty_tpl) {?><table width="200" border="1">
  <tr>
    <th scope="row">通知标题</th>
    <th scope="row">时间</th>
  </tr>
  <?php if (isset($_smarty_tpl->tpl_vars['note_list']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['note_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
?>
      <tr>
        <td id="title"><?php echo $_smarty_tpl->tpl_vars['record']->value['title'];?>
</td>
        <td id="time"><?php echo $_smarty_tpl->tpl_vars['record']->value['time'];?>
</td>
      </tr>
    <?php } ?>
   <?php }?>

</table><?php }} ?>