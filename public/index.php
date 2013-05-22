
<?php

include_once '../sys/core/init.inc.php';

include './include/header.php';
$s=new System();
$s->new_visitor();

$notice=new System();

$notice_info=$notice->fetch_notice(1);
$tpl->assign("notice_detail",$notice_info);
$question_info=$notice->fetch_online_question(1);
$tpl->assign("question_detail",$question_info);

$tpl->display('index.html');




if(isset($_GET['login'])&&$_GET['login']=='error' &&isset($_SESSION['login']) ){
	unset($_SESSION['login'] );
	echo '<script>alert("用户名/密码错误");</script>';
}

?>
