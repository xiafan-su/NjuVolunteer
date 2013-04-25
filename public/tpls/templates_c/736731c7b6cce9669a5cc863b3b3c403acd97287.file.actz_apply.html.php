<?php /* Smarty version Smarty-3.1.7, created on 2013-04-25 08:52:29
         compiled from "../tpls/templates\include\actz_apply.html" */ ?>
<?php /*%%SmartyHeaderCode:273645177f03f9aad93-21740526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '736731c7b6cce9669a5cc863b3b3c403acd97287' => 
    array (
      0 => '../tpls/templates\\include\\actz_apply.html',
      1 => 1366816327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273645177f03f9aad93-21740526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5177f03fa4a00',
  'variables' => 
  array (
    'update_time' => 0,
    'apply_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5177f03fa4a00')) {function content_5177f03fa4a00($_smarty_tpl) {?>
这里是活动报名情况<br />
<span id="go_back_home" class="">返回</span><br />
<span id="show_activity_text" class="">更新</span>时间：<?php echo $_smarty_tpl->tpl_vars['update_time']->value;?>


<table id="act_people_table">
	<tr>
		<th><input id="check_all_act_people" type="checkbox" title="全选" disabled="true" /></th>
		<th>学号</th>
		<th>姓名</th>
		<th>院系</th>
		<th>年级</th>
		<th>联系电话</th>
		<th>qq号</th>
	</tr>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['name'] = 'vol_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['apply_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['vol_index']['total']);
?>
		<tr class="even">
			<td><input class="checkbox" type="checkbox" /></td>
			<td><a class="act_user_id_col" title="点击查看该学生的信息"><?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['id'];?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['faculty'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['grade'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['tel'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['qq'];?>
</td>
		</tr>
	<?php endfor; endif; ?>
</table>
<?php }} ?>