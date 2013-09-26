<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";

include_once '../../sys/core/init.inc.php';

if( !isset( $_SESSION[User::USER][User::FACULTY_ID] ) ){
	echo "<p>登录信息已失效，请重新登录！</p>";
	exit;
}
$act_list = array();

$team = new Team();
$act_info = $team->fetch_act_all( $_SESSION[User::USER][User::FACULTY_ID], 2 );//获取通过审核的活动
while( $act_row = mysql_fetch_array( $act_info ) ) {
	$act_list[] = array(
		"id"=>$act_row['id'],
		"name"=>$act_row['name'],
	);
}
$act_info = $team->fetch_act_all( $_SESSION[User::USER][User::FACULTY_ID], 0 );//获取完成的活动
while( $act_row = mysql_fetch_array( $act_info ) ) {
	$act_list[] = array(
		"id"=>$act_row['id'],
		"name"=>$act_row['name'],
	);
}

$tpl->assign( "act_list", $act_list );

$tpl->display( "include/act_time.html" );

?>