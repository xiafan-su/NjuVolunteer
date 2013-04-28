<?php /* Smarty version Smarty-3.1.7, created on 2013-04-25 19:43:56
         compiled from "../tpls/templates\include\actz.html" */ ?>
<?php /*%%SmartyHeaderCode:120495177f009b046a9-54500981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24f5947343209a91bb72f2be1d995a7847928238' => 
    array (
      0 => '../tpls/templates\\include\\actz.html',
      1 => 1366886701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120495177f009b046a9-54500981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5177f009c3cdf',
  'variables' => 
  array (
    'current_time' => 0,
    'act_list' => 0,
    'act_count' => 0,
    'is_add' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5177f009c3cdf')) {function content_5177f009c3cdf($_smarty_tpl) {?>

<span id="show_activity_text" class="">更新</span>时间：<?php echo $_smarty_tpl->tpl_vars['current_time']->value;?>


<table id="show_activity_table" class="act_people_table">
	<tr>
    <th>活动名称</th>
    <th>负责人</th>
    <th>状态</th>
    <th>报名情况</th>
    </tr>
	<?php $_smarty_tpl->tpl_vars['act_count'] = new Smarty_variable(0, null, 0);?>
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
		<?php if ($_smarty_tpl->tpl_vars['act_count']->value%2==0){?><tr class="even"><?php }else{ ?><tr class="odd"><?php }?>
		   <td style="text-align:left">
					<span class="util_doc_fold" actid="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" title="展开/折叠活动记录">╬</span>
					<a href="./act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_title'];?>
</a>
					<div id="doc_list_<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" class="util_doc_list">
						<table>
							<tr><th>时间</th><th>带队人</th><th>联系方式</th></tr>
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
									<tr class="even">
										<td><?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['doc_list'][$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['doc_time'];?>
</td>
										<td><span docid=<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['doc_list'][$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['doc_id'];?>
 class="util_doc_index"><?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['doc_list'][$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['leader'];?>
</span></td>
										<td><?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['doc_list'][$_smarty_tpl->getVariable('smarty')->value['section']['doc_index']['index']]['tel'];?>
</td>
									</tr>
								<?php endfor; endif; ?>
						</table>
						<?php if ($_smarty_tpl->tpl_vars['is_add']->value==true){?>
							<span actid="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" class="util_doc_add">添加活动档案</span>
						<?php }?>
					</div>
			</td>
		   <td><?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['consult'];?>
</td>
		   <td><?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['state'];?>
</td>
		   <td><span actid="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['act_id'];?>
" class="util_doc_apply">》》》</span></td>
		</tr>
	<?php $_smarty_tpl->tpl_vars['act_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['act_count']->value+1, null, 0);?>
	<?php endfor; endif; ?>
</table>

<?php }} ?>