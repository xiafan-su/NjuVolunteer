<?php /*%%SmartyHeaderCode:11724516a0ee30d46c7-69569219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae501245acb6019fd59ecfaf5dc2aa117dc89e3a' => 
    array (
      0 => './tpls/templates\\zonet.html',
      1 => 1365170658,
      2 => 'file',
    ),
    '1048da3ca248985a74c0290df8746b95cbab34f3' => 
    array (
      0 => './tpls/templates\\include\\header.html',
      1 => 1365165722,
      2 => 'file',
    ),
    'bade9366763f2c3ef3f5c78c15ec9639ccea326d' => 
    array (
      0 => './tpls/templates\\include\\login.html',
      1 => 1365158077,
      2 => 'file',
    ),
    'b50b7562c6d0bda8d5967293bd62cebc8b3648b0' => 
    array (
      0 => './tpls/templates\\include\\footer.html',
      1 => 1365139443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11724516a0ee30d46c7-69569219',
  'variables' => 
  array (
    'user_name' => 0,
    'notes_number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516a0ee355447',
  'cache_lifetime' => 86400,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516a0ee355447')) {function content_516a0ee355447($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/zonet.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<title>团队空间</title>
</head>
<body>
<div class="header">
	<div class="header_content">
		<div class="logo"><a href="">NJUVolunteer</a></div>
		<div  class="main_menu">
			<ul>
				<li><a href="./index.php">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
				<li><a href="./act.php">活动中心</a></li>
					
																		<li><a href="./zonet.php">团队空间</a></li>
															<li><a href="./news.php">新闻广场</a></li>
				<li><a href="./team.php">团队组织</a></li>
			</ul>
		</div>
		<div  class="welcome_bar">
												您好，<a href="./zonet.php">信息管理学院</a>！
								&nbsp;&nbsp;<a href="./handle/logout.php">退出</a>
					</div>
	</div>
</div>

<div id="loginModal">
	<div align="center" class="modal-header">
		<h1><font color="#888888">LOGIN</font></h1>
	</div>
 
	<div align="center" class="modal-body">
		<form name="login" id="login" action="./handle/login.php" method="POST">
			<table>
				<tbody>
					<tr>
						<td>
							<div class="input-prepend">
								<span class="add-on"><i class="icon-envelope"></i></span>
								<input name="user" class="email" type="text" placeholder="Student No" />
							</div>
							<span class="emailerror"></span>
						</td>
					</tr>
					<tr>
						<td>
							<div class="input-prepend">
								<span class="add-on"><i class="icon-lock"></i></span>
								<input name="password" class="password" type="password" placeholder="Password" />
							</div>
							<span class="passworderror"></span>
						</td>
					</tr>
					<tr>
						<td>
							<input name="submit" class="btn btn-warning span2" type="submit" value="Log in" />
							<a class="btn pull-right" href="register.php">register</a>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
 
</div>



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
</script>


<div class="main">

	<div id="up" class="">
		<div id="logo" class="">
			<img src="" width="80px" height="80px" border="0" alt="">
		</div>
		<div id="team_info" class="">
			<p>信息管理学院</p>
			<div id="notification_bar" class="">
				<span id="notes" class="notification_item">通知(<span id="notes_number" class="">3</span>)</span>
			</div>
		</div>
	</div>
<div id="down" class="">
			<div id="down_left" class="">
				<div id="" class="menu">
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							活动
						</div>
                        <div id="apply_activity" class="menu_item_span">
							申请活动<a id="apply" href="./act_apply.php" target="_blank"></a>
						</div>
						<div id="start_activity" class="menu_item_span">
							发起的活动
						</div>
						<div id="finished_activity" class="menu_item_span">
							完成的活动
						</div>
					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							通知
						</div>
						<div id="send_info" class="menu_item_span">
							发通知
						</div>
						<div id="info_recv" class="menu_item_span">
							收到的通知
						</div>
						<div id="info_send" class="menu_item_span">
							发送的通知
						</div>
					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							团队管理
						</div>
						<div id="member" class="menu_item_span">
							成员
						</div>
						<div id="blacklist" class="menu_item_span">
							黑名单
						</div>
					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							私信
						</div>
						<div id="send_mail" class="menu_item_span">
							发私信
						</div>
						<div id="recv_mail_box" class="menu_item_span">
							收信箱
						</div>
						<div id="send_mail_box" class="menu_item_span">
							发信箱
						</div>
					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							资料
						</div>
					</div>
				</div>
			</div>
			<div id="down_right" class="">
					<div id="main_title" class="">活动列表</div>
					<div id="main_content" class="">
					</div>
					<div id="main_content2" class="">
						正在载入……
					</div>
			</div>
	</div>
</div>



<div class="footer">
	<div class="copyright">
    Copyright©2013 VAH Studio,All Rights Reserved </br>
     使用过程中有任何问题请联系我们，邮箱:NJUXLQX_VAHStudio@126.com
     </div>
</div>
</body>
<script src="./assets/js/tipswindown.js"></script>
<script src="./assets/js/zonet.js"></script>
</html><?php }} ?>