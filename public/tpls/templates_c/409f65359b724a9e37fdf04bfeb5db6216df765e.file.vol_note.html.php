<?php /* Smarty version Smarty-3.1.7, created on 2013-05-30 20:12:42
         compiled from "../tpls/templates\include\vol_note.html" */ ?>
<?php /*%%SmartyHeaderCode:2522951a7423a3ce0c6-42459626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '409f65359b724a9e37fdf04bfeb5db6216df765e' => 
    array (
      0 => '../tpls/templates\\include\\vol_note.html',
      1 => 1369646748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2522951a7423a3ce0c6-42459626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'note_list' => 0,
    'note' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a7423a4591d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a7423a4591d')) {function content_51a7423a4591d($_smarty_tpl) {?><div style="margin-left:20px;margin-right:20px;">
<table width="200" border="1">
  <tr>
    <th scope="row">通知标题</th>
    <th scope="row">时间</th>
	<th scope="row">操作</th>
  </tr>
  <?php if (isset($_smarty_tpl->tpl_vars['note_list']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['note_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value){
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
      <tr>
        <td id="title" style="cursor:pointer;text-align:left" onclick="show_note(<?php echo $_smarty_tpl->tpl_vars['note']->value['note_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['note']->value['title'];?>
</td>
        <td id="time"><?php echo $_smarty_tpl->tpl_vars['note']->value['time'];?>
</td>
		<td><span
				onclick="delete_note(<?php echo $_smarty_tpl->tpl_vars['note']->value['note_id'];?>
)"  title="删除此通知" 
				id="del_op_<?php echo $_smarty_tpl->tpl_vars['note']->value['note_id'];?>
" style="cursor:pointer">删除</span>
		</td>
      </tr>
    <?php } ?>
   <?php }?>

</table>
</div><?php }} ?>