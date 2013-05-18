<?php /* Smarty version Smarty-3.1.7, created on 2013-05-18 23:39:04
         compiled from "../tpls/templates\include\note.html" */ ?>
<?php /*%%SmartyHeaderCode:278425197a0981f3232-85002848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ce719227b9ae7bc28317370bb4d6b205012cc85' => 
    array (
      0 => '../tpls/templates\\include\\note.html',
      1 => 1368845882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278425197a0981f3232-85002848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'note_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5197a09828fc2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5197a09828fc2')) {function content_5197a09828fc2($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\apache\\htdocs\\NjuVolunteer\\Smarty\\libs\\plugins\\modifier.truncate.php';
?>
<div id="" class=""  style="margin: 0 20px">
	






<table>
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
		<tr class="note_table_row" noteid="<?php echo $_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['id'];?>
" id="note_table_row_<?php echo $_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['id'];?>
">
			<td>
				<?php if ($_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['type']==0){?>
					<img src="./assets/img/zonet/note_unread.png" width="24" height="24" border="0" alt="">
				<?php }elseif($_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['type']==1){?>
					<img src="./assets/img/zonet/note_read.png" width="24" height="24" border="0" alt="">
				<?php }elseif($_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['type']==2){?>
					<img src="./assets/img/zonet/note_send.png" width="24" height="24" border="0" alt="">
				<?php }?>
			</td>
			<td><?php echo $_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['title'];?>
</td>
			<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['content'],12,"……",true);?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['note_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['note_index']['index']]['time'];?>
</td>
		</tr>
	<?php endfor; else: ?>
		<tr><td colspan="4" style="text-align:left">您什么也没有收到！</td></tr>
	<?php endif; ?>
</table>




</div>
<?php }} ?>