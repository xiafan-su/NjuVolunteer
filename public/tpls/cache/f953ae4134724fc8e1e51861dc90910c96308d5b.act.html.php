<?php /*%%SmartyHeaderCode:325051643a7a828460-69997445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f953ae4134724fc8e1e51861dc90910c96308d5b' => 
    array (
      0 => './tpls/templates\\act.html',
      1 => 1365167207,
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
  'nocache_hash' => '325051643a7a828460-69997445',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516a0ee85a489',
  'has_nocache_code' => false,
  'cache_lifetime' => 86400,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516a0ee85a489')) {function content_516a0ee85a489($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/act_srh.css" rel="stylesheet" />
<link href="./assets/css/act.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/act.js"></script>
<title>活动中心</title>
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
	<div class="main_search">
			<div class="input_search" >
				<input id="keyword" name="keyword" class="email" type="text" placeholder="Input your keyword" />
			</div>
			<div class="submit_search">
				<input id="submit" name="submit" class="btn btn-warning span2" onclick="searchit()" type="submit" value="Search" />
			</div>
			<div class="time-type">
			  <p><h3>时间类型-->
				<label>
				<input type="radio" name="time_type" value="" id="time_type_0" checked="checked"/>
				  任何类型</label>
				<label>
				  <input type="radio" name="time_type" value="longtime" id="time_type_1" />
				  长期活动</label>
				<label>
				  <input type="radio" name="time_type" value="temp" id="time_type_2" />
				  临时活动</label>
					</h3>  </p>
			</div>
			<div class="attribution-type">
				<p>
					<h3>志愿类型-->
					<label>
						<input type="radio" name="attribution_type" value="" id="attribution_type_0"  checked="checked"/>
					  任何类型</label>
					<label>
					  <input type="radio" name="attribution_type" value="helpdisabled" id="attribution_type_1" />
					  助&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;残</label>
					<label>
					  <input type="radio" name="attribution_type" value="supporteducation" id="attribution_type_2" />
					  支&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;教</label>
					 </h3>
				</p>
			</div>
			<div class="check_box_weekday">	
				<p><h3>时间限制-->
				  <label>
					<input type="checkbox" name="weekday" value=64 id="weekday_0" />
					周一
				  </label>
				  <label>
					<input type="checkbox" name="weekday" value=32 id="weekday_1" />
					周二
				  </label>
				  <label>  
					<input type="checkbox" name="weekday" value=16 id="weekday_2" />
					周三
				  </label>
				  <label>  
					<input type="checkbox" name="weekday" value=8 id="weekday_3" />
					周四
				  </label>
				  <label>
					<input type="checkbox" name="weekday" value=4 id="weekday_4" />
					周五
				  </label>
				  <label>
					<input type="checkbox" name="weekday" value=2 id="weekday_5" />
					周六
				  </label>
				  <label>
					<input type="checkbox" name="weekday" value=1 id="weekday_6" />
					周日
					</label>
					</h3></p>
			</div>
	</div>
	<div id="main" ></div>
</div>
<div class="footer">
	<div class="copyright">
    Copyright©2013 VAH Studio,All Rights Reserved </br>
     使用过程中有任何问题请联系我们，邮箱:NJUXLQX_VAHStudio@126.com
     </div>
</div>
</body>
</html><?php }} ?>