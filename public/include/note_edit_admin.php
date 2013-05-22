<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';


if( isset( $_POST['noteId'] ) ){
	//从数据库获取并显示
}



$a = new Admin();
//院系组织
$team_list = array();
$team_info = $a->fetch_all_team();
while( $team_row = mysql_fetch_array( $team_info ) ){
	$team_list[] = array(
		"id" => 	$team_row['id'],
		"name" => 	$team_row['name'],
	);
}
$tpl->assign( "team_list", $team_list );

//活动列表
$act_list = array();
$act_info = $a->fetch_act_all();//1表示发起的活动
while( $act_row = mysql_fetch_array( $act_info ) ){
	$act_list[] = array(
		"id" => 	$act_row['id'],
		"name" => 	$act_row['name'],//."测试一下长长的标题测试一下长长的标题测试一下长长的标题"
	);
}
$tpl->assign( "act_list", $act_list );


//成员
$mem_list = array();
$mem_info = $a->fetch_people_all();
while( $mem_row = mysql_fetch_array( $mem_info ) ){
	$mem_list[] = array(
		"id" => 	$mem_row['id'],
		"name" => 	$mem_row['name'],
	);
}
$tpl->assign( "mem_list", $mem_list );


$tpl->display( "include/note_edit_admin.html" );


?>