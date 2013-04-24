<?php
require_once('include/php/basic.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>个人空间</title>
<link href="./include/css/main.css" rel="stylesheet" />
<link href="./include/css/tzone.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
require('include/php/header.php');
?>

<div class="main">
	<div id="up" class="">
		<div id="logo" class="">
			<img src="include/img/head_photo/boy/3.jpg" width="80px" height="80px" border="0" alt="">
		</div>
		<div id="team_info" class="">
			<p><?php echo $_SESSION['user_name']; ?></p>
			<div id="notification_bar" class="">
				<span id="notes" class="notification_item">通知(<span id="notes_number" class="">0</span>)</span>
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
						<div id="" class="menu_item_span">
							进行中的活动
						</div>
						<div id="" class="menu_item_span">
							完成的活动
						</div>
                        <div id="" class="menu_item_span">
							我的活动记录
						</div>
					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							通知
						</div>
						<div id="" class="menu_item_span">
							收到的通知
						</div>

					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							好友
						</div>
					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							私信
						</div>
						<div id="" class="menu_item_span">
							收信箱
						</div>
						<div id="" class="menu_item_span">
							发信箱
						</div>
					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							资料
						</div>
					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							团队
						</div>
					</div>
					<!--
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							待办事项
						</div>
						<div id="" class="menu_item_span">
							活动
						</div>
						<div id="" class="menu_item_span">
							组织
						</div>
					</div>  
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							资料管理
						</div>
						<div id="" class="menu_item_span">
							团队
						</div>
						<div id="" class="menu_item_span">
							活动
						</div>
					</div>-->
				</div>
			</div>
			<div id="down_right" class="">
					<div id="main_title" class="">活动列表</div>
					<div id="main_content" class="">
					</div>
			</div>
	</div>
</div>

<?php
require('include/php/footer.php');
?>
</body>

</html>