<?php /* Smarty version Smarty-3.1.7, created on 2013-04-22 10:32:24
         compiled from "./tpls/templates\include\header.html" */ ?>
<?php /*%%SmartyHeaderCode:2711516a173f9c4c08-18384765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1048da3ca248985a74c0290df8746b95cbab34f3' => 
    array (
      0 => './tpls/templates\\include\\header.html',
      1 => 1366556349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2711516a173f9c4c08-18384765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516a173fa42a6',
  'variables' => 
  array (
    'user_permission' => 0,
    'user_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516a173fa42a6')) {function content_516a173fa42a6($_smarty_tpl) {?><div class="header">
	<div class="header_content">
		<div class="logo"><a href="">NJUVolunteer</a></div>
		<div  class="main_menu">
			<ul>
				<li><a href="./index.php">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
				<li><a href="./act.php">活动中心</a></li>
					
					<?php if (isset($_smarty_tpl->tpl_vars['user_permission']->value)){?>
						<?php if ($_smarty_tpl->tpl_vars['user_permission']->value==1||$_smarty_tpl->tpl_vars['user_permission']->value==2){?>
							<li><a href="./zonev.php">个人空间</a></li>
						<?php }elseif($_smarty_tpl->tpl_vars['user_permission']->value==3){?>
							<li><a href="./zonet.php">团队空间</a></li>
						<?php }?>
					<?php }?>
				<li><a href="./news.php">新闻广场</a></li>
				<li><a href="./team.php">团队组织</a></li>
			</ul>
		</div>
		<div  class="welcome_bar">
			<?php if (isset($_smarty_tpl->tpl_vars['user_permission']->value)&&$_smarty_tpl->tpl_vars['user_permission']->value>0&&isset($_smarty_tpl->tpl_vars['user_name']->value)){?>
				<?php if ($_smarty_tpl->tpl_vars['user_permission']->value<3){?>
					您好，<a href="./zonev.php"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</a>！
				<?php }elseif($_smarty_tpl->tpl_vars['user_permission']->value==3){?>
					您好，<a href="./zonet.php"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</a>！
				<?php }?>
				&nbsp;&nbsp;<a href="./handle/logout.php">退出</a>
			<?php }else{ ?>
				<a onclick="showit()" id="login_button">登录</a>
			<?php }?>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
var flag=0;
$(document).ready(function(){
	$('#loginModal').hide();
});
function showit(){
	$('#loginModal').slideToggle();	
	if (flag==0)
	{
		$('#login_button').text("返回");
		flag=1;
	}else
	{
		flag=0;
		$('#login_button').text("登录");
	}
}
</script><?php }} ?>