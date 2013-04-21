<?php /*%%SmartyHeaderCode:4659516a0f43347e58-09436388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44c556608e67759f0e68fc7fabee31d3f9c92847' => 
    array (
      0 => './tpls/templates\\zonev.html',
      1 => 1365156262,
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
  'nocache_hash' => '4659516a0f43347e58-09436388',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516a0f434a8df',
  'cache_lifetime' => 86400,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516a0f434a8df')) {function content_516a0f434a8df($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<title>个人空间</title>
</head>
<body>
<div class="header">
	<div class="header_content">
		<div class="logo"><a href="">NJUVolunteer</a></div>
		<div  class="main_menu">
			<ul>
				<li><a href="./index.php">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
				<li><a href="./act.php">活动中心</a></li>
					
																		<li><a href="./zonev.php">个人空间</a></li>
															<li><a href="./news.php">新闻广场</a></li>
				<li><a href="./team.php">团队组织</a></li>
			</ul>
		</div>
		<div  class="welcome_bar">
												您好，<a href="./zonev.php">王瑶菁</a>！
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
这里是个人空间
</div>
<div class="footer">
	<div class="copyright">
    Copyright©2013 VAH Studio,All Rights Reserved </br>
     使用过程中有任何问题请联系我们，邮箱:NJUXLQX_VAHStudio@126.com
     </div>
</div>
</body>
</html><?php }} ?>