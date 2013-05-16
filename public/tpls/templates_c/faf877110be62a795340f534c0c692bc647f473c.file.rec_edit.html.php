<?php /* Smarty version Smarty-3.1.7, created on 2013-05-16 20:48:10
         compiled from "../tpls/templates\include\rec_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:158325193739798bbe5-76876918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faf877110be62a795340f534c0c692bc647f473c' => 
    array (
      0 => '../tpls/templates\\include\\rec_edit.html',
      1 => 1368708389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158325193739798bbe5-76876918',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51937397a0096',
  'variables' => 
  array (
    'update_time' => 0,
    'activity_name' => 0,
    'doc_name' => 0,
    'doc_leader' => 0,
    'doc_tel' => 0,
    'doc_vol_time' => 0,
    'doc_date' => 0,
    'part_doc_list' => 0,
    'actId' => 0,
    'docId' => 0,
    'doc_profile' => 0,
    'doc_summary' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51937397a0096')) {function content_51937397a0096($_smarty_tpl) {?>


<div id="" class="" style="margin: 0px 20px">
	
	<span id="show_activity_text" class="">更新</span>时间：<?php echo $_smarty_tpl->tpl_vars['update_time']->value;?>

	<h2><?php echo $_smarty_tpl->tpl_vars['activity_name']->value;?>
</h2>

	<div id="base">
		<div>
			<div class="left-bar"></div>
			<div class="main-content-subtitle">基本资料</div>
			<div class="right-bar"></div>
		</div>
		<table>
			<tr>
				<td style="text-align:right">活动代号</td>
				<td style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['doc_name']->value;?>
</td></tr>
			<tr>
				<td style="text-align:right">负责人</td>
				<td style="text-align:left"><input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['doc_leader']->value;?>
"  id="doc_edit_leader"></td></tr>
			<tr>
				<td style="text-align:right">联系方式</td>
				<td style="text-align:left"><input type="text"   value="<?php echo $_smarty_tpl->tpl_vars['doc_tel']->value;?>
"  id="doc_edit_tel"></td></tr>
			<tr>
				<td style="text-align:right" title="此时长将作为基本志愿服务时间">活动时长</td>
				<td style="text-align:left"><input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['doc_vol_time']->value;?>
"  id="doc_edit_time"></td>
			</tr>
			<tr>
				<td style="text-align:right">开始时间</td><td style="text-align:left">
				<input type="text"   value="<?php echo $_smarty_tpl->tpl_vars['doc_date']->value;?>
"  id="doc_edit_date_start"></td></tr>
		</table>
	</div>

	<div id="participate_member">
		<div>
			<div class="left-bar"></div>
			<div class="main-content-subtitle">参与人员</div>
			<div class="right-bar"></div>
		</div>
		<table id="doc_edit_part_table">
			<tr>
				<th><input type="checkbox" title="全选" id="check_all_part_people"/></th>
				<th>学号</th><th>姓名</th><th>院系</th>
				<th>志愿时间</th><th>评价</th><th>带队奖</th><th>优秀奖</th><th>备注</th>
			</tr>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['name'] = 'part_doc_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['part_doc_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['part_doc_index']['total']);
?>
			<tr id="part_people_table_tr_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
">
				<td><input type="checkbox" title="" id="doc_checkbox_head_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" noid="<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" /></td>
				<td><?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['faculty'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['time'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['level'];?>
</td>
				<td><input type="checkbox"  id="doc_checkbox_leader_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['honor_leader']==1){?> checked="checked" <?php }?>  title="" /></td>
				<td><input type="checkbox"   id="doc_checkbox_excellent_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
"  <?php if ($_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['honor_excellent']==1){?> checked="checked" <?php }?>   title="" /></td>
				<td><textarea col="5" id="doc_comment_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['comment'];?>
</textarea></td>
			</tr>
			<?php endfor; else: ?>
			<tr id="doc_edit_part_table_tr_tip"><td colspan="9">还没有人参加这个活动哦！</td></tr>
			<?php endif; ?>
		</table>


		<input type="button" class="button" value="导入" title="从活动报名表导入" id="doc_op_import" actid="<?php echo $_smarty_tpl->tpl_vars['actId']->value;?>
"  docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
"   />
		<input type="button" class="button" value="移除" title="移除选择的志愿者" id="doc_op_remove" docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
"  />
		<input type="button" class="button" value="确定" title="确定您所做的修改" id="doc_op_submit" docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
"   />
	</div>

	<div id="more">
		<div>
			<div class="left-bar"></div>
			<div class="main-content-subtitle">扩展内容</div>
			<div class="right-bar"></div>
		</div>
		<table>
			<tr>
				<td style="text-align:right">活动详细介绍</td>
				<td style="text-align:left">
					<textarea name="" rows="5" cols="80"   id="doc_edit_profile" ><?php echo $_smarty_tpl->tpl_vars['doc_profile']->value;?>
</textarea>
				</td>
			</tr>
			<tr>
				<td style="text-align:right">活动总结</td>
				<td style="text-align:left">
					<textarea name="" rows="5" cols="80"   id="doc_edit_summary"><?php echo $_smarty_tpl->tpl_vars['doc_summary']->value;?>
</textarea>
				</td>
			</tr>
		</table>
	</div>

	<input type="button" class="button" value="保存" id="submit_act_doc">
	<input type="button" class="button" value="删除" id="delete_act_doc" docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
" >
	<input type="button" class="button" value="提交" title="提交您所做的修改，提交后志愿时间将会公示一周，并且除非有异议不得再修改" id="doc_op_submit">
	<input type="button" class="button" value="返回" id="go_back_home">


</div>


<?php }} ?>