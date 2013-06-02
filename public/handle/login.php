<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';

if( !isset( $_POST['user'] ) || !isset( $_POST['password'] ) ){
	echo "<script>window.history.go(-1);alert('用户名/密码错误');</script>";
	exit;
}

$id = htmlspecialchars($_POST['user'],ENT_QUOTES);
$psd =htmlspecialchars($_POST['password'],ENT_QUOTES);

$user = new User();

$perm = $user->login($id, $psd);
echo "<script>window.history.go(-1);alert($perm);</script>";
//获取上一页面URL
$last_url = $_SERVER['HTTP_REFERER'];
$last_pos = strrpos( $last_url, "/" ) + 1;
$last_php = substr( $last_url, $last_pos, strlen($last_url) - $last_pos );
//echo $last_php;exit;
/*
if( $perm == 2 ){
	if( $last_php == "index.php" ) {
		header( "Location: ../zonet.php" );
	} else {
		echo "<script>window.history.go(-1);</script>";
	}
	exit;
} else if( $perm == 1 ){
	if( $last_php == "index.php" ) {
		header( "Location: ../zonev.php" );
	} else {
		echo "<script>window.history.go(-1);</script>";
	}
	exit;
} else if ($perm == 3 ) {
	if( $last_php == "index.php" ) {
		header( "Location: ../super_admin.php" );
	} else {
		echo "<script>window.history.go(-1);</script>";
	}
	exit;
}

$_SESSION['login'] = "true";
//header( "Location: ../index.php?login=error" );
echo "<script>window.history.go(-1);alert('用户名/密码错误');</script>";

*/
?>