<?php /* Smarty version Smarty-3.1.7, created on 2013-05-15 22:30:13
         compiled from "../tpls/templates\include\rec_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:158325193739798bbe5-76876918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faf877110be62a795340f534c0c692bc647f473c' => 
    array (
      0 => '../tpls/templates\\include\\rec_edit.html',
      1 => 1368628114,
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
    'docId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51937397a0096')) {function content_51937397a0096($_smarty_tpl) {?>


<div id="" class="" style="margin: 0px 20px">
	
	<span id="show_activity_text" class="">更新</span>时间：<?php echo $_smarty_tpl->tpl_vars['update_time']->value;?>

	<h3>XXX活动的记录</h3>

	<div id="base">
		<div>
			<div class="left-bar"></div>
			<div class="main-content-subtitle">基本资料</div>
			<div class="right-bar"></div>
		</div>
		<table>
			<tr><td style="text-align:right">活动名称</td><td style="text-align:left"><input type="text" ></td></tr>
			<tr><td style="text-align:right">负责人</td><td style="text-align:left"><input type="text" ></td></tr>
			<tr><td style="text-align:right">联系方式</td><td style="text-align:left"><input type="text" ></td></tr>
			<tr>
				<td style="text-align:right" title="此时长将作为基本志愿服务时间">活动时长</td>
				<td style="text-align:left"><input type="text" ></td>
			</tr>
			<tr><td style="text-align:right">开始时间</td><td style="text-align:left"><input type="text" ></td></tr>
		</table>
	</div>

	<div id="participate_member">
		<div>
			<div class="left-bar"></div>
			<div class="main-content-subtitle">参与人员</div>
			<div class="right-bar"></div>
		</div>
		<table>
			<tr>
				<th><input type="checkbox" title="全选" /></th>
				<th>学号</th><th>姓名</th><th>院系</th>
				<th>志愿时间</th><th>带队奖</th><th>优秀奖</th><th>备注</th>
			</tr>
		</table>
		<input type="button" class="button" value="导入" title="从活动报名表导入" id="doc_op_import">
		<input type="button" class="button" value="移除" title="移除选择的志愿者" id="doc_op_remove">
		<input type="button" class="button" value="设置" title="将选择的志愿者设置服务时间为活动的时长" id="doc_op_choose">
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
					<textarea name="" rows="5" cols="80"></textarea>
				</td>
			</tr>
			<tr>
				<td style="text-align:right">活动总结</td>
				<td style="text-align:left">
					<textarea name="" rows="5" cols="80"></textarea>
				</td>
			</tr>
		</table>
	</div>

	<input type="button" class="button" value="提交" id="submit_act_doc">
	<input type="button" class="button" value="删除" disabled="true" docid="<?php echo $_smarty_tpl->tpl_vars['docId']->value;?>
" id="delete_act_doc">
	<input type="button" class="button" value="返回" id="go_back_home">


</div>


<?php }} ?>