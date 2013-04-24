<?php
require_once('include/php/basic.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>团队空间</title>
<link href="./include/css/main.css" rel="stylesheet" />
<link href="./include/css/tipsWindown.css" rel="stylesheet" />
<link href="./include/css/activity_detail.css" rel="stylesheet" />
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
			<p><?php echo $_SESSION[$_user_faculty] ?></p>
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
                        <div id="apply_activity" class="menu_item_span">
							申请活动<a id="apply" href="./team/team_activity_apply.php" target="_blank"></a>
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
					<!--
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							待办事项
						</div>
						<div id="unaudited_people" class="menu_item_span">
							待审核的成员
						</div>
						<div id="unaudited_activity" class="menu_item_span">
							待审核的活动
						</div>
					</div>-->
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

<?php
require('include/php/footer.php');
?>

</body>

<script src="include/js/jquery-1.9.1.min.js"></script>
<script src="include/js/tipswindown.js"></script>
<script src="include/js/tzone.js"></script>
</html>
