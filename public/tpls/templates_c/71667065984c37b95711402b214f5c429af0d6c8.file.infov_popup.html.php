<?php /* Smarty version Smarty-3.1.7, created on 2013-05-18 16:48:51
         compiled from "../tpls/templates\include\infov_popup.html" */ ?>
<?php /*%%SmartyHeaderCode:21632519740736401b0-01871896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71667065984c37b95711402b214f5c429af0d6c8' => 
    array (
      0 => '../tpls/templates\\include\\infov_popup.html',
      1 => 1368854236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21632519740736401b0-01871896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uid' => 0,
    'uname' => 0,
    'ugrade' => 0,
    'ufaculty' => 0,
    'uphone' => 0,
    'position_list' => 0,
    'doc_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519740738243a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519740738243a')) {function content_519740738243a($_smarty_tpl) {?>

<div id="" class="">
	
<table>
<tr><th>学号</th><th>姓名</th><th>年级</th><th>院系</th><th>联系方式</th></tr>
<tr><td><?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ugrade']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ufaculty']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['uphone']->value;?>
</td></tr>
</table>
<table>
	<tr><th>参加的组织</th><th>职务</th></tr>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['name'] = 'pos_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['position_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pos_index']['total']);
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['position_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pos_index']['index']]['tname'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['position_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pos_index']['index']]['pos'];?>
</td>
	</tr>
	<?php endfor; else: ?>
	<tr><td colspan="2">该同学什么组织液没有参加！</td></tr>
	<?php endif; ?>
</table>
<table>
	<tr><th>活动时间</th><th>活动内容</th><th>服务时间</th><th>服务评价</th></tr>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['name'] = 'doc_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['doc_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['total']);
?>
	<tr><td><?php echo $_smarty_tpl->tpl_vars['doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['date'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['content'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['base_time'];?>
+<?php echo $_smarty_tpl->tpl_vars['doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['honor_time'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['level'];?>
</td></tr>
	<?php endfor; else: ?>
	<tr><td colspan="4">该同学什么活动也没有参加！</td></tr>
	<?php endif; ?>
</table>



</div><?php }} ?>