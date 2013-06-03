<?php /* Smarty version Smarty-3.1.7, created on 2013-06-01 15:06:36
         compiled from "../tpls/templates\include\act_time.html" */ ?>
<?php /*%%SmartyHeaderCode:1665351a99d7c625250-36415898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4023a7d129ac207d6c40b7af9464c30649c8619' => 
    array (
      0 => '../tpls/templates\\include\\act_time.html',
      1 => 1368932172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1665351a99d7c625250-36415898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'act_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a99d7c69007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a99d7c69007')) {function content_51a99d7c69007($_smarty_tpl) {?>



<div id="" class="" style="margin: 0 20px 10px;">
	<table>
	<tr>
		<th style="text-align:right">学号</th>
		<td style="text-align:left">
			<input type="text" id="extend_uid"  onblur="verify_extend_time_handle();" />
		</td>
	</tr>
	<tr>
		<th style="text-align:right">活动</th>
		<td style="text-align:left">
		<select name=""  onchange="extend_act_select_change_handle(this);">
			<option value="-1" selected>请选择</option>
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
			<option value="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['name'];?>
</option>
			<?php endfor; endif; ?>
		</select>
		</td>
	</tr>
	<tr>
		<th style="text-align:right">档案</th>
		<td style="text-align:left" id="extend_table_td_container_doc">
			<select name="" disabled="true" id="extend_select_doc">
				<option value="-1" selected>请先选择您举办的活动</option>
			</select>
		</td>
	</tr>
	<tr>
		<th style="text-align:right">服务时长</th>
		<td style="text-align:left">
			<input type="text" id="extend_input_time"  onblur="verify_extend_time_handle();" />
		</td>
	</tr>
	<tr>
		<th style="text-align:right">表现</th>
		<td style="text-align:left">
			<input type="radio" value="一般" name="extend_honor_level">一般
			<input type="radio" value="良好" name="extend_honor_level" >良好
			<input type="radio" value="优秀" name="extend_honor_level" checked="true" >优秀
		</td>
	</tr>
	<tr>
		<th style="text-align:right">带队奖</th>
		<td style="text-align:left">
			<input type="radio" value="1" name="extend_honor_leader">是
			<input type="radio" value="0" name="extend_honor_leader" checked="true" >否
		</td>
	</tr>
	<tr>
		<th style="text-align:right">优秀奖</th>
		<td style="text-align:left">
			<input type="radio" value="1" name="extend_honor_excellent">是
			<input type="radio" value="0" name="extend_honor_excellent" checked="true" >否
		</td>
	</tr>
	<tr>
		<th style="text-align:right">评论</th>
		<td style="text-align:left">
			<textarea name="" rows="3" cols="50" id="extend_ta_comment"  ></textarea>
		</td>
	</tr>
	</table>
	<input type="button" class="button" id="extend_op_ok" disabled="true"  value="确定"  onclick="extend_ok_handle()" title="您必须填写除评论外的所有项" />
</div><?php }} ?>