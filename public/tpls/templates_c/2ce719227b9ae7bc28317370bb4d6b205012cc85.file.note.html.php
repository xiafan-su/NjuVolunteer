<?php /* Smarty version Smarty-3.1.7, created on 2013-05-30 20:36:48
         compiled from "../tpls/templates\include\note.html" */ ?>
<?php /*%%SmartyHeaderCode:2750451a34f39bf2167-98499444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ce719227b9ae7bc28317370bb4d6b205012cc85' => 
    array (
      0 => '../tpls/templates\\include\\note.html',
      1 => 1369665438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2750451a34f39bf2167-98499444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a34f39dd865',
  'variables' => 
  array (
    'note_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a34f39dd865')) {function content_51a34f39dd865($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\PHPWeb\\NjuVolunteer\\Smarty\\libs\\plugins\\modifier.truncate.php';
?>
<div id="" class=""  style="margin: 0 20px">
	






<table id="note_table">
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['note_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['name'] = 'note_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['note_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['note_index']['total']);
?>
		<tr>
			<td><img id="note_head_img_<?php echo $_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['id'];?>
"
				<?php if ($_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['type']==0){?>
					src="./assets/img/zonet/note_unread.png" title="未读通知"
				<?php }elseif($_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['type']==1){?>
					src="./assets/img/zonet/note_read.png" title="已读通知"
				<?php }elseif($_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['type']==2){?>
					src="./assets/img/zonet/note_send.png" title="发送通知"
				<?php }?>
				width="24" height="24" border="0" alt="">
			</td>
			<td class="note_table_row" style="font-weight:600;color:#606" noteid="<?php echo $_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['id'];?>
" id="note_table_row_<?php echo $_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['id'];?>
" title="点击查看详细内容"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['title'],20,"……",true);?>
</td>
			<td style="text-align:left"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['content'],20,"……",true);?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['time'];?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['type']!=2){?>
			<td><span
				onclick="nt_func_note_delete(this)"  title="删除此通知" class="clickable note_list_delete" 
				id="del_op_<?php echo $_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['id'];?>
" note_id="<?php echo $_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['id'];?>
">删除</span></td>
			<?php }?>
		</tr>
	<?php endfor; else: ?>
		<tr><td colspan="4" style="text-align:left">这里什么也没有！</td></tr>
	<?php endif; ?>
</table>




</div>
<?php }} ?>