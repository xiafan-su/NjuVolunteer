<?php /* Smarty version Smarty-3.1.7, created on 2013-05-24 19:59:38
         compiled from "../tpls/templates\include\rec_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:10552519f562aab9772-36406159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faf877110be62a795340f534c0c692bc647f473c' => 
    array (
      0 => '../tpls/templates\\include\\rec_edit.html',
      1 => 1369383549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10552519f562aab9772-36406159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'update_time' => 0,
    'activity_name' => 0,
    'doc_name' => 0,
    'is_finished' => 0,
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
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519f562ad888e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519f562ad888e')) {function content_519f562ad888e($_smarty_tpl) {?>


<div id="" class="" style="margin: 0px 20px">
	
	<!-- <span id="show_activity_text" class="">更新</span>时间：<?php echo $_smarty_tpl->tpl_vars['update_time']->value;?>
 -->
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
				<th style="text-align:right">活动代号</th>
				<td style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['doc_name']->value;?>
</td></tr>
			<tr>
				<th style="text-align:right">负责人</th>
				<td style="text-align:left">
						<?php if ($_smarty_tpl->tpl_vars['is_finished']->value){?>
							<?php echo $_smarty_tpl->tpl_vars['doc_leader']->value;?>

						<?php }else{ ?>
							<input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['doc_leader']->value;?>
"  id="doc_edit_leader">
						<?php }?>
				</td></tr>
			<tr>
				<th style="text-align:right">联系方式</th>
				<td style="text-align:left">
						<?php if ($_smarty_tpl->tpl_vars['is_finished']->value){?>
							<?php echo $_smarty_tpl->tpl_vars['doc_tel']->value;?>

						<?php }else{ ?>
							<input type="text"   value="<?php echo $_smarty_tpl->tpl_vars['doc_tel']->value;?>
"  id="doc_edit_tel">
						<?php }?>
				</td></tr>
			<tr>
				<th style="text-align:right" title="此时长将作为基本志愿服务时间">活动时长</th>
				<td style="text-align:left">
						<?php if ($_smarty_tpl->tpl_vars['is_finished']->value){?>
							<?php echo $_smarty_tpl->tpl_vars['doc_vol_time']->value;?>

						<?php }else{ ?>
						<input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['doc_vol_time']->value;?>
"  id="doc_edit_time" />
						<?php }?>
				</td>
			</tr>
			<tr>
				<th style="text-align:right">开始时间</th><td style="text-align:left">
					<?php if ($_smarty_tpl->tpl_vars['is_finished']->value){?>
						<?php echo $_smarty_tpl->tpl_vars['doc_date']->value;?>

					<?php }else{ ?>
						<input type="text"   title="格式：2013-5-20或2013-05-02 14:00:45" value="<?php echo $_smarty_tpl->tpl_vars['doc_date']->value;?>
"  id="doc_edit_date_start" onclick="return showCalendar('doc_edit_date_start', 'y-mm-dd');"  />
					<?php }?>
				</td>
			</tr>
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
				<th><input type="checkbox" title="全选" id="check_all_part_people" <?php if ($_smarty_tpl->tpl_vars['is_finished']->value){?> disabled="true" <?php }?> /></th>
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
			<tr uid="<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" id="part_people_table_tr_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
">
				<td><input type="checkbox" class="doc_checkbox_head" id="doc_checkbox_head_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" noid="<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" onclick="change_rec_edit_head_checkbox();"
				<?php if ($_smarty_tpl->tpl_vars['is_finished']->value){?> disabled="true" <?php }?>
				/></td>
				<td>
					<span class="clickable" onclick="popup_volunteer_info(<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
);" noid="<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" title="点击查看该学生信息" ><?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
</span>
				</td>
				<td>
					<a target="_blank" href="./indexv.php?user_id=<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" title="查看个人主页"><?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['name'];?>
</a>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['faculty'];?>
</td>
				<td>
					<span class="doc_time" <?php if (!$_smarty_tpl->tpl_vars['is_finished']->value){?>title="点击修改"  onclick = "change_doc_time_handle(this, 1)"                id="doc_time_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['time'];?>
</span>
					<span class="" style="display: none; white-space:nowrap;" id="doc_time_set_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
">
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['time'];?>
" uid="<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" onblur="change_doc_time_handle(this, 2)" />
					</span> 
				</td>
				<td>
					<span class="doc_level" id="doc_level_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['is_finished']->value){?>  title="点击修改"   onclick="change_doc_level_handle(this, 1);" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['level'];?>
</span>
					<span class="" style="display: none; white-space:nowrap;" id="doc_level_set_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
">
						<select name="doc_level_select" id="doc_level_select_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" onblur="change_doc_level_handle(this, 2)">
							<option id="option_level_1" name="一般" value="一般" <?php if ($_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['level']=="一般"){?>selected="true"<?php }?> >一般</option>
							<option  id="option_level_2" name="良好" value="良好" <?php if ($_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['level']=="良好"){?>selected="true" "<?php }?> >良好</option>
							<option id="option_level_3" name="优秀"  value="优秀" <?php if ($_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['level']=="优秀"){?>selected="true" "<?php }?> >优秀</option>
						</select>
					</span>
				</td>
				<td>
					<input   type="checkbox"  <?php if (!$_smarty_tpl->tpl_vars['is_finished']->value){?>  onclick="change_doc_honnor_leader_handle(this, 1);"<?php }else{ ?>disabled="true" <?php }?> id="doc_checkbox_leader_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['honor_leader']==1){?> checked="checked" <?php }?>  title="荣获带队奖的志愿者将获得额外的志愿时间" />
				</td>
				<td>
					<input  type="checkbox" <?php if (!$_smarty_tpl->tpl_vars['is_finished']->value){?> onclick="change_doc_honnor_leader_handle(this, 2);" <?php }else{ ?> disabled="true" <?php }?> id="doc_checkbox_excellent_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
"  <?php if ($_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['honor_excellent']==1){?> checked="checked" <?php }?>   title="荣获优秀奖的志愿者将获得额外的志愿时间" />
				</td>
				<td>
					<span id="doc_comment_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
"  <?php if (!$_smarty_tpl->tpl_vars['is_finished']->value){?>  title="点击修改" onclick="change_doc_comment_handle(this, 1)"  <?php }?> > 
						<?php if ($_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['commentlength']==0){?>无
						<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['comment'];?>

						<?php }?>
					</span>
					<span class=""  style="display: none;">
						<textarea id="doc_comment_set_<?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['id'];?>
" name="" rows="3" cols="10"  onblur="change_doc_comment_handle(this, 2)"><?php echo $_smarty_tpl->tpl_vars['part_doc_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['part_doc_index']['index']]['comment'];?>
</textarea>
					</span>
				</td>
			</tr>
			<?php endfor; else: ?>
			<tr id="doc_edit_part_table_tr_tip"><td colspan="9">还没有人参加这个活动哦！</td></tr>
			<?php endif; ?>
		</table>
		
		<?php if ($_smarty_tpl->tpl_vars['is_finished']->value){?>
		<input type="button" class="button" disabled="true"  value="导入" title="活动记录已提交，不能导入" id="doc_op_import" actid="<?php echo $_smarty_tpl->tpl_vars['actId']->value;?>
"  docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
"  />
		<input type="button" class="button" disabled="true" value="移除" title="活动记录已提交，不能移除" id="doc_op_remove" docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
"    />
		<input onclick="doc_edit_submit_handle(this);" type="button" class="button" value="确定" title="活动记录已提交，不能修改" id="doc_op_modify" docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
" disabled="true"   />
		<?php }else{ ?>
		<div id="modify_tip" class="modify_tip" >
			<span class="" style="color:red; ">注意：1.表中的修改将对选择的志愿者做同样的操作。2.修改后必须点击“确定”才有效！</span>
			<span class="" style="color:black; cursor:pointer" onclick="javascript:$(this).parent().toggle(200);">知道了</span>
		</div>
		<input type="button" class="button" value="导入"  id="doc_op_import" actid="<?php echo $_smarty_tpl->tpl_vars['actId']->value;?>
"  docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['docId']->value==-1){?>disabled="true" title="您必须点击“保存”后才能进行此操作" <?php }else{ ?>title="从活动报名表导入" <?php }?>  />
		<input type="button" class="button" value="移除" title="请先勾选要移除的志愿者" id="doc_op_remove" docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
" disabled="true"    />
		<input onclick="doc_edit_submit_handle(this);" type="button" class="button" value="确定" title="您还没有修改任何内容" id="doc_op_modify" docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
" disabled="true"   />
		<?php }?>
	</div>

	<div id="more">
		<div>
			<div class="left-bar"></div>
			<div class="main-content-subtitle">扩展内容</div>
			<div class="right-bar"></div>
		</div>
		<table>
			<tr>
				<th style="text-align:right">活动详细介绍</th>
				<td style="text-align:left">
							<?php if ($_smarty_tpl->tpl_vars['is_finished']->value){?><?php echo $_smarty_tpl->tpl_vars['doc_profile']->value;?>

							<?php }else{ ?>
					<textarea name="" rows="5" cols="80"   id="doc_edit_profile" ><?php echo $_smarty_tpl->tpl_vars['doc_profile']->value;?>
</textarea>
							<?php }?>
				</td>
			</tr>
			<tr>
				<th style="text-align:right">活动总结</th>
				<td style="text-align:left">
							<?php if ($_smarty_tpl->tpl_vars['is_finished']->value){?><?php echo $_smarty_tpl->tpl_vars['doc_summary']->value;?>

							<?php }else{ ?>
					<textarea name="" rows="5" cols="80"   id="doc_edit_summary"><?php echo $_smarty_tpl->tpl_vars['doc_summary']->value;?>
</textarea>
							<?php }?>
				</td>
			</tr>
		</table>
	</div>
<?php if (!$_smarty_tpl->tpl_vars['is_finished']->value){?>
	<input type="button" class="button" value="保存" title="保存活动记录" id="submit_act_doc" />
	<input type="button" class="button" value="删除" title="删除该活动" id="delete_act_doc" docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
" />
	<input type="button" class="button" value="提交" title="提交您所做的修改，提交后志愿时间将会公示一周，并且除非有异议不得再修改" id="doc_op_submit" docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
" onclick="javascript: submit_doc(this);"/>
<?php }else{ ?>
	<input type="button" class="button" disabled="true" value="保存" title="不满足条件，无法保存" id="" />
	<input type="button" class="button" disabled="true" value="删除"title="该活动已经提交，无法删除"  id="" docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
" />
	<input type="button" class="button" disabled="true" value="提交" title="该活动已经提交" id="" docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
" />
<?php }?>
	<input type="button" class="button" value="返回" id="go_back_home" />


</div>


<?php }} ?>