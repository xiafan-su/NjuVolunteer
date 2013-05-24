
<?php

include_once '../sys/core/init.inc.php';

include './include/header.php';
$s=new System();
$s->new_visitor();

$notice=new System();

$notice_info=$notice->fetch_notice(1);
for( $i = count($notice_info); $i < 3; $i++ ){
	$notice_info[] = array( "id"=>-1, "title"=>"&nbsp;" );
}
$tpl->assign("notice_detail",$notice_info);

$question_info=$notice->fetch_online_question(1);
for( $i = count($question_info); $i < 3; $i++ ){
	$question_info[] = array( "id"=>-1, "title"=>"&nbsp;" );
}
$tpl->assign("question_detail",$question_info);

$tpl->display('index.html');




if(isset($_GET['login'])&&$_GET['login']=='error' &&isset($_SESSION['login']) ){
	unset($_SESSION['login'] );
	echo '<script>alert("用户名/密码错误");</script>';
}

?>
