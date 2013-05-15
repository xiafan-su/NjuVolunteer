<?php /* Smarty version Smarty-3.1.7, created on 2013-05-15 19:38:06
         compiled from "../tpls/templates\include\rec_dtl.html" */ ?>
<?php /*%%SmartyHeaderCode:218095193739e656cb4-17089576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30d6f97b3c1399738e8165e4b01ab2e82cbfa326' => 
    array (
      0 => '../tpls/templates\\include\\rec_dtl.html',
      1 => 1366812536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218095193739e656cb4-17089576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'update_time' => 0,
    'leader' => 0,
    'tel' => 0,
    'start_time' => 0,
    'part_list' => 0,
    'actid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5193739e74b21',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5193739e74b21')) {function content_5193739e74b21($_smarty_tpl) {?>
<span id="show_activity_text" class="">更新</span>时间：<?php echo $_smarty_tpl->tpl_vars['update_time']->value;?>

<br />
<span id="go_back_home" class="">
	返回
</span>

<ul id="doc_dtl_ul">
	<li>
		<span class="doc_dtl_attr" style="width:100px">带队人：</span>
		<span class="doc_dtl_value"><?php echo $_smarty_tpl->tpl_vars['leader']->value;?>
</span>
	</li>
	<li>
		<span class="doc_dtl_attr">联系方式：</span>
		<span class=""><?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
</span>
	</li>
	<li>
		<span class="doc_dtl_attr">起始时间：</span>
		<span class=""><?php echo $_smarty_tpl->tpl_vars['start_time']->value;?>
</span>
	</li>
	<hr />
	<li>
		<span id="fold_volunteer" class="">╬</span><span class="">下面是本次活动记录的参与人员</span>
		<div id="act_people_div">
			<table>
				<tr>
					<th>
						<input type="checkbox" />
					</th>
					<th>学号</th>
					<th>姓名</th>
					<th>院系</th>
					<th>志愿服务时间</th>
					<th title="荣获带队奖的志愿者将会获得额外的10%志愿服务时间">带队奖</th>
					<th title="荣获优秀奖的志愿者将会获得额外的10%志愿服务时间">优秀奖</th>
				</tr>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['part_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['name'] = 'part_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['part_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['part_index']['total']);
?>
					<tr class="even">
						<td>
							<input type="checkbox" />
						</td>
						<td><?php echo $_smarty_tpl->tpl_vars['part_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_index']['index']]['id'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['part_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_index']['index']]['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['part_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_index']['index']]['faculty'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['part_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_index']['index']]['vol_time'];?>
</td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
					</tr>
				<?php endfor; endif; ?>
			</table>
			快捷操作<br />
			<input id="opt_import_apply"  type="button" value="从报名表导入此参与表" actid=<?php echo $_smarty_tpl->tpl_vars['actid']->value;?>
 /><br />
			<input type="button" value="将选择的志愿者移除该参与表" /><br />
			<input type="button" value="选择所有未录入服务时间的志愿者" /><br />
			<input type="button" value="将选择的志愿者设置服务时间为" />
			<input type="text" value="3">小时
			<br />
		</div>
	</li>
	<hr />
	<li>
		<span class="">小结</span>
		<div id="" class="">
			<textarea name="" rows="5" cols="80">
				嘿，在这里写总结。<br />
				如果已经写了那就有一个修改按钮。<br />
				什么？没写的话就是一个提交按钮呗！<br />
			</textarea>
			<input type="button" value="确定/修改">
		</div>
	</li>
</ul>


<?php }} ?>