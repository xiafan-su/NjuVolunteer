<?php /* Smarty version Smarty-3.1.7, created on 2013-05-18 20:05:32
         compiled from "../tpls/templates\include\actz.html" */ ?>
<?php /*%%SmartyHeaderCode:1264751973aabcd0c97-26660044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24f5947343209a91bb72f2be1d995a7847928238' => 
    array (
      0 => '../tpls/templates\\include\\actz.html',
      1 => 1368878731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1264751973aabcd0c97-26660044',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51973aabe886d',
  'variables' => 
  array (
    'current_time' => 0,
    'act_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51973aabe886d')) {function content_51973aabe886d($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\z-htdocs\\NjuVolunteer\\Smarty\\libs\\plugins\\modifier.truncate.php';
?>
<div id="" class="" style="margin: 0 20px">
	
	<span id="show_activity_text" class="">更新</span>时间：<?php echo $_smarty_tpl->tpl_vars['current_time']->value;?>


	<table id="show_activity_table" class="act_people_table">
		<tr>
		<th>活动名称</th>
		<th>负责人</th>
		<th>状态</th>
		<th colspan="3">操作</th>
		</tr>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['name'] = 'act_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['act_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['total']);
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['act_index']['iteration']%2==0){?><tr class="even"><?php }else{ ?><tr class="odd"><?php }?>
			   <td style="text-align:left; white-space:nowrap; overflow: hidden;">
						<span>
							<img class="util_doc_fold" actid="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" title="展开/折叠活动记录" src="./assets/img/zonet/navigate_plus.png" width="13" height="13" border="0">
						</span>
						<a href="./act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" target="_blank">
							<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_title'],30,"……",true);?>

						</a>
						<div id="doc_list_<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" class="util_doc_list">
							<table>
								<tr><th>序号</th><th>时间</th><th>带队人</th><th>联系方式</th></tr>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['name'] = 'doc_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['doc_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<tr class="odd zonet-doc-row" actid="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" 
										docid="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['doc_list'][$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['doc_id'];?>
">
											<td>
												<?php if ($_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['doc_list'][$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['state']=="final"){?>
												<img src="./assets/img/zonet/doc_final.png" width="17" height="17" border="0" title="已提交">
												<?php }else{ ?>
												<img src="./assets/img/zonet/doc_editing.png" width="17" height="17" border="0" title="编辑中">
												<?php }?>
												<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['iteration'];?>

											</td>
											<td><?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['doc_list'][$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['doc_time'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['doc_list'][$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['leader'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['doc_list'][$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['tel'];?>
</td>
										</tr>
									<?php endfor; else: ?>
										<tr class="odd"><td colspan="4">该活动没有记录！</td></tr>
									<?php endif; ?>
										<tr class="odd">
											<td colspan="4" style="text-align:left">
													<?php if ($_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['is_add']){?>
													<span actid="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" class="util_doc_add">
														<img src="./assets/img/zonet/form_yellow_add.png" width="18" height="18" 
														border="0" title="添加活动档案">
													</span>
													<?php }else{ ?>
													<span actid="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" class="util_doc_add_disabled">
														<img src="./assets/img/zonet/form_yellow_add.png" width="18" height="18" 
														border="0" title="编辑中或已完成的活动不能添加档案">
													</span>
													<?php }?>
											</td>
										</tr>
							</table>
						</div>
				</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['consult'];?>
</td>
			   <td><img 
					<?php if ($_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['state']=="audited"){?>
					src="./assets/img/zonet/act_running.png"
					<?php }elseif($_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['state']=="auditing"){?>
					src="./assets/img/zonet/act_auditing.png"
					<?php }elseif($_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['state']=="return"){?>
					src="./assets/img/zonet/act_return.png"
					<?php }elseif($_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['state']=="editing"){?>
					src="./assets/img/zonet/act_editing.png"
					<?php }elseif($_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['state']=="end"){?>
					src="./assets/img/zonet/act_end.png"
					<?php }?>
					 width="24" height="24" border="0" title="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['state_text'];?>
">
			   </td>
			   <td>
						<span>
							<?php if ($_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['editable']){?>
								<a target="_blank" href="./act_edit.php?activityId=<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
">
									<img actid="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" 
										src="./assets/img/zonet/editable.png" title="修改"
										class="util_doc_modify" 
										width="20" height="20" border="0" />
								</a>
							<?php }else{ ?>
									<img actid="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" 
									src="./assets/img/zonet/uneditable.png" title="不能修改"
									class="util_doc_modify_disabled" 
									width="20" height="20" border="0" />
							<?php }?>
						</span>
				</td>
			   <td>
						<span>
							<?php if ($_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['deletable']){?>
							<img actid="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" src="./assets/img/zonet/delete.png" 
							class="util_doc_del" width="20" height="20" border="0" title="删除">
							<?php }else{ ?>
							<img actid="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" src="./assets/img/zonet/undelete.png" 
							class="util_doc_del_disabled" width="20" height="20" border="0" title="已完成或存在已经提交的活动档案的活动不能删除">
							<?php }?>
						</span>
				</td>
			   <td>
						<span>
							<img actid="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" src="./assets/img/zonet/navigate_right2.png" 
							class="util_doc_apply" width="20" height="20" border="0" title="查看报名情况">
						</span>
				</td>
			</tr>
		<?php endfor; else: ?>
			<tr><td colspan="4" >您还没有这方面的活动哦！</td></tr>
		<?php endif; ?>
	</table>


</div><?php }} ?>