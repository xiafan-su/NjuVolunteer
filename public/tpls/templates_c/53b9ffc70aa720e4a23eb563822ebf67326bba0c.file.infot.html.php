<?php /* Smarty version Smarty-3.1.7, created on 2013-05-27 22:20:30
         compiled from "../tpls/templates\include\infot.html" */ ?>
<?php /*%%SmartyHeaderCode:1513351a36baef16b07-02000101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53b9ffc70aa720e4a23eb563822ebf67326bba0c' => 
    array (
      0 => '../tpls/templates\\include\\infot.html',
      1 => 1369149187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1513351a36baef16b07-02000101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'team_name' => 0,
    'team_email' => 0,
    'team_leader' => 0,
    'team_leader_phone' => 0,
    'team_director' => 0,
    'team_director_phone' => 0,
    'team_attched' => 0,
    'team_logo' => 0,
    'team_signature' => 0,
    'team_profile' => 0,
    'team_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a36baf03bed',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a36baf03bed')) {function content_51a36baf03bed($_smarty_tpl) {?>


<div id="" class="" style="margin: 0px 20px 20px">
	<div id="" class="">
		
			<div>
				<div class="left-bar"></div>
				<div class="main-content-subtitle">备案资料</div>
				<div class="right-bar"></div>
			</div>
			<div id="" class="">
				
				<table>
						<tr>
							<th style="text-align:right">名称</th>
							<td style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['team_name']->value;?>
</td>
						</tr>
						<tr>
							<th style="text-align:right">邮箱</th>
							<td style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['team_email']->value;?>
</td>
						</tr>
						<tr>
							<th style="text-align:right">负责人</th>
							<td style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['team_leader']->value;?>
</td>
						</tr>
						<tr>
							<th style="text-align:right">负责人联系方式</th>
							<td style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['team_leader_phone']->value;?>
</td>
						</tr>
						<tr>
							<th style="text-align:right">指导老师</th>
							<td style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['team_director']->value;?>
</td>
						</tr>
						<tr>
							<th style="text-align:right">指导老师联系方式</th>
							<td style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['team_director_phone']->value;?>
</td>
						</tr>
						<tr>
							<th style="text-align:right">附属单位</th>
							<td style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['team_attched']->value;?>
</td>
						</tr>
				</table>
			</div>
	</div>

	<div id="" class="">
			<div>
				<div class="left-bar"></div>
				<div class="main-content-subtitle">个性资料</div>
				<div class="right-bar"></div>
			</div>
			<div id="" class="" style="width:629px; overflow:auto;">
				<table>
					<tr>
						<th style="text-align:right">Logo</th>
						<td style="text-align:left">
							<div id="" class="">
								<img src="./assets/img/team/<?php echo $_smarty_tpl->tpl_vars['team_logo']->value;?>
" width="" style="border-radius:25px;" height="" border="0" alt="">
							</div>
						</td>
					</tr>
					<tr>
						<th style="text-align:right">口号</th>
						<td style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['team_signature']->value;?>
</td>
					</tr>
					<tr>
						<th style="text-align:right">简介</th>
						<td style="text-align:left" >
							<div class=""  style="" id="infot_profile" ><?php echo $_smarty_tpl->tpl_vars['team_profile']->value;?>
</div>
						</td>
					</tr>
				</table>
			</div>
	</div>
	
	<input type="button" class="button" id="team_info_modify" onclick="team_info_modify_handle(this);" value="修改"  title="修改个性资料" />
	<input type="button" class="button" value="我的主页"  onclick="window.open('./indext.php?team_id=<?php echo $_smarty_tpl->tpl_vars['team_id']->value;?>
', '_blank')" title="在新页面查看我的主页" />


</div><?php }} ?>