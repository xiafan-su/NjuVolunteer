<?php /* Smarty version Smarty-3.1.7, created on 2014-03-15 14:57:37
         compiled from "../tpls/templates\include\mem.html" */ ?>
<?php /*%%SmartyHeaderCode:37005324408f33c553-07473164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9589185483075bbc18652f970ece25b1222a8d2' => 
    array (
      0 => '../tpls/templates\\include\\mem.html',
      1 => 1394891855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37005324408f33c553-07473164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5324408fb376b',
  'variables' => 
  array (
    'mem_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5324408fb376b')) {function content_5324408fb376b($_smarty_tpl) {?>

<div id="" class="" style="margin: 0 20px 10px;">

<div id="" class="">
	<span class="" id="filter_ctrl">筛选</span>
</div>
<div id="mem_filter" class="mem_filter">
	<div id="year_filter" class="mem_filter_unit">
		<span class="">起讫年份：</span>
		<select id="filter_select_start_year" name="filter_select_start_year" onchange="filte_mem_table()">
			<!--filte_mem_table()函数在mem.js中定义-->
			<option value="0" selected>请选择</option>
			<option value="2009">2009</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
		</select>
		&nbsp;-&nbsp;
		<select id="filter_select_stop_year" name="filter_select_stop_year" onchange="filte_mem_table()">
			<option value="9999" selected>请选择</option>
			<option value="2009">2009</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
		</select>
	</div>
	<div id="sender_filter" class="mem_filter_unit">
		<span class="">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</span>
		<select id="filter_select_sender" name="filter_select_sender" onchange="filte_mem_table()">
			<option value="男女" selected>请选择</option>
			<option value="男">男</option>
			<option value="女">女</option>
		</select>
	</div>
	<div id="state_filter" class="mem_filter_unit">
		<span class="">状&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;态：</span>
		<select id="filter_select_state" name="filter_select_state" onchange="filte_mem_table()">
			<option value="审核中通过" selected>请选择</option>
			<option value="审核中">审核中</option>
			<option value="通过">通过</option>
		</select>
	</div>
	<div id="position_filter" class="mem_filter_unit">
		<span class="">身&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;份：</span>
		<select id="filter_select_position" name="filter_select_position" onchange="filte_mem_table()">
			<option value="主席副主席成员" selected>请选择</option>
			<option value="主席副主席">主席（含副主席）</option>
			<option value="成员">成员</option>
		</select>
	</div>
	<div id="sender_filter" class="mem_filter_unit">
		<span class="">关&nbsp;键&nbsp;&nbsp;字：</span>
		<input id="filter_keyword" type="text" onblur="filte_mem_table()" />
	</div>
</div>
<table id="mem_table">
	<tr>
		<th>学号</th><th>姓名</th>
		<th>性别</th><th>联系方式</th>
		<th>状态</th><th width="100px">身份</th>
		<th>操作</th>
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
			<td><a href="./indexv.php?user_id=<?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['id'];?>
"  title="进入个人空间" target="_blank"><?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['name'];?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['gender'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['tel'];?>
</td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['state']==0){?>
				<span class="" onclick="turn_to_set_mem_state(this);" style="cursor:pointer" change="1" title="点击修改">审核中</span>
				<span class="" style="display: none; white-space:nowrap;" >
					<select name="" uid="<?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['id'];?>
" >
						<option value="0" selected="true">审核中</option>
						<option value="1" >通过</option>
						<option value="2" >退回</option>
					</select>
					<span class="" onclick="mem_state_handle(this)" style="cursor:pointer" >确定</span>
				</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['state']==1){?>
				<span class="">通过</span>
				<?php }?>
			</td>
			<td>
				<span title="点击修改" class="clickable " onclick="turn_to_set_mem_position(this);"><?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['q'];?>
</span>
				<span class="" style="display: none; white-space:nowrap;" >
					<select name="" uid="<?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['id'];?>
" >
						<option value="0" <?php if ($_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['q']=="主席"){?>selected="true"<?php }?>>主席</option>
						<option value="1" <?php if ($_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['q']=="副主席"){?>selected="true"<?php }?>>副主席</option>
						<option value="2" <?php if ($_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['q']=="成员"){?>selected="true"<?php }?>>成员</option>
					</select>
					<span class=""onclick="mem_position_handle(this)" style="cursor:pointer" onclick="mem_position_handle(this)" >确定</span>
				</span>
			</td>
			<td><a target="_blank" href="./print_vol_time.php?user_id=<?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['id'];?>
">
				<img src="./assets/img/zonet/printer.png" width="20px" height="20px" border="0" alt="打印" title="打印">
			</a></td>
		</tr>
	<?php endfor; else: ?>
		<tr><td colspan="7">您还没有成员哦！</td></tr>
	<?php endif; ?>
</table>


</div><?php }} ?>