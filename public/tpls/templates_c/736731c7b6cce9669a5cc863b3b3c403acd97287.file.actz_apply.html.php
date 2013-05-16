<?php /* Smarty version Smarty-3.1.7, created on 2013-05-16 20:48:18
         compiled from "../tpls/templates\include\actz_apply.html" */ ?>
<?php /*%%SmartyHeaderCode:26959519368a86ca4a4-87138406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '736731c7b6cce9669a5cc863b3b3c403acd97287' => 
    array (
      0 => '../tpls/templates\\include\\actz_apply.html',
      1 => 1368708389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26959519368a86ca4a4-87138406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519368a87b363',
  'variables' => 
  array (
    'update_time' => 0,
    'activity_name' => 0,
    'show_op_button' => 0,
    'apply_list' => 0,
    'actid' => 0,
    'docid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519368a87b363')) {function content_519368a87b363($_smarty_tpl) {?>
<div id="" class="" style="margin: 0 20px">
	
	<!-- <span id="show_activity_text" class="">更新</span>时间：<?php echo $_smarty_tpl->tpl_vars['update_time']->value;?>
<br /> -->

	<h2><?php echo $_smarty_tpl->tpl_vars['activity_name']->value;?>
</h2>
	<div id="base">
		<?php if ($_smarty_tpl->tpl_vars['show_op_button']->value){?>
			<div>
				<div class="left-bar"></div>
				<div class="main-content-subtitle">报名情况</div>
				<div class="right-bar"></div>
			</div>
		<?php }?>
		<table id="act_people_table">
			<tr>
				<th><input id="check_all_act_people"  type="checkbox" title="全选" /></th>
				<th>学号</th>
				<th>姓名</th>
				<th>院系</th>
				<th>年级</th>
				<th>联系电话</th>
				<th>qq号</th>
				<th>状态</th>
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
				<tr class="even" id="act_people_table_tr_<?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['id'];?>
">
					<td><input class="checkbox" type="checkbox" id="act_people_table_checkbox_<?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['id'];?>
" 
						<?php if ($_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['dischoosabled']=="true"){?>
						disabled="true"
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['checked']=="true"){?>
						checked="checked"
						<?php }?>
					noid="<?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['id'];?>
"  un="<?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['name'];?>
" uf="<?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['faculty'];?>
" /></td>
					<td><a class="apply_id_col" title="点击查看该学生的信息"><?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['id'];?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['name'];?>
</td>
					<td style="white-space:nowrap; overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['faculty'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['grade'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['tel'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['qq'];?>
</td>
					<td id="act_people_table_col_state_<?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['apply_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vol_index']['index']]['state'];?>
</td>
				</tr>
			<?php endfor; else: ?>
				<tr class="even">
					<td colspan="8">这个活动还没有人参加哦！赶快敲响你的战鼓吧！</td>
				</tr>
			<?php endif; ?>
		</table>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['show_op_button']->value){?>
		<input type="button" class="button" id="btn_audit_ok" actid="<?php echo $_smarty_tpl->tpl_vars['actid']->value;?>
"  value="通过" title="将选择的报名人员设置为审核通过"/>
		<input type="button" class="button" id="btn_audit_fail" actid="<?php echo $_smarty_tpl->tpl_vars['actid']->value;?>
"  value="退回" title="将选择的报名人员设置为审核失败"/>
		<input type="button" class="button" id="go_back_home" value="返回" />
	<?php }else{ ?>
		<input type="button" class="button" id="btn_import_ok" docid="<?php echo $_smarty_tpl->tpl_vars['docid']->value;?>
"  value="确定" title="将选择的报名人员导入参与表"/>
	<?php }?>

</div><?php }} ?>