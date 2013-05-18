<?php /* Smarty version Smarty-3.1.7, created on 2013-05-18 01:26:52
         compiled from "../tpls/templates\include\mem.html" */ ?>
<?php /*%%SmartyHeaderCode:141205196685c9dcbd4-17949635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9589185483075bbc18652f970ece25b1222a8d2' => 
    array (
      0 => '../tpls/templates\\include\\mem.html',
      1 => 1368766826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141205196685c9dcbd4-17949635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mem_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5196685ca7bde',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5196685ca7bde')) {function content_5196685ca7bde($_smarty_tpl) {?>


<table>
	<tr>
		<th>学号</th><th>姓名</th>
		<th>性别</th><th>联系方式</th>
		<th>状态</th><th width="100px">身份</th>
	</tr>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['name'] = 'mem_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mem_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['total']);
?>
		<tr>
			<td><span title="点击查看该学生信息" class="studentNo"><?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['id'];?>
</span></td>
			<td><a href="./zonev.php"  title="进入个人空间" target="_blank"><?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['name'];?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['gender'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['tel'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['state'];?>
</td>
			<td><span title="点击修改" class="clickable capacity"><?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['q'];?>
</span></td>
		</tr>
	<?php endfor; endif; ?>
</table><?php }} ?>