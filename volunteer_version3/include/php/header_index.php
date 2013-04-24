<script type="text/javascript">
var flag=0;
$(document).ready(function(){
	$('#loginModal').hide();
});
</script>
<script type="text/javascript">
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
<div class="header">
	<div class="header_content">
		<div class="logo"><a href="">NJUVolunteer</a></div>
		<div  class="main_menu">
        	<?php 
				if(isset($_SESSION[$_user_name])){
					?>
			<ul>
				<li><a href="./index.php">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
				<li><a href="./news.php">新闻广场</a></li>
				<li><a href="./tzone.php">团队空间</a></li>
				<li><a href="./activity.php">活动中心</a></li>
				<li><a href="./team.php">团队组织</a></li>
			</ul>
            <?php }  else { ?>
            			<ul>
				<li><a href="./index.php">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
				<li><a href="./news.php">新闻广场</a></li>
				<li><a href="./activity.php">活动中心</a></li>
				<li><a href="./team.php">团队组织</a></li>
			</ul>
            <?php } ?>
		</div>
		<div  class="welcome_bar">
			<?php 
				if(isset($_SESSION[$_user_name])){
					?>
                    
						您好，<a href="./vzone.php"><?php  echo $_SESSION[$_user_name]; ?></a>
						&nbsp;&nbsp;<a href="./include/php/logout.php">退出</a>
					<?php
				} else{ ?> <a onclick="showit()" id="login_button">登录</a>/<a href="./register.php">注册</a> <?php
				}
			?>
		</div>
	</div>
</div>