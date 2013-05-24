<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

if( !isset( $_SESSION[User::USER][User::FACULTY_ID] ) ){
	echo "<p>登录信息已失效，请重新登录！</p>";
	exit;
}
$topic = "";
$content = "";
$recv_list = array();
$team_list = array();
$mem_list = array();
$act_list = array();

$read_only = false;//显示“接收者”选择DIV
$recv = false;

if( isset( $_POST['noteId'] ) ){
	//从数据库获取并显示，并且无法修改！
	//echo "已经收到读设请求(id=".$_POST['noteId'].")！请稍候……";
	$read_only = true;
	$sender = NULL;
	$time = NULL;
	
	if( $_POST['type'] == "teamread" ){
		$team = new Team();
		$note_row = $team->fetch_my_send_note_detail( $_POST['noteId'] );
		if( $note_row != NULL ){
			$topic = $note_row['title'];
			$content = $note_row['content'];
			$time = $note_row['date'];
			$recv_list = $team->fetch_my_send_note_detail_recv_list( $_POST['noteId'] );
		}
	} else {
		$recv = true;
		$user = new User();
		$user->read_note( $_POST['noteId'] );//设置为已读

		$note_info = $user->fetch_one_note( $_POST['noteId'] );
		if( $note_row = mysql_fetch_array($note_info) ){
			$topic = $note_row['title'];
			$content = $note_row['content'];
			$time = $note_row['time'];
			$sender = $note_row['name'];
		}
	}
	$tpl->assign( "sender", $sender );
	$tpl->assign( "time", $time );

} else {
	$team = new Team();
	//院系组织
	$team_info = $team->fetch_all_team();
	while( $team_row = mysql_fetch_array( $team_info ) ){
		$team_list[] = array(
			"id" => 	$team_row['id'],
			"name" => 	$team_row['name'],
		);
	}
	//活动列表
	$act_info = $team->fetch_act_all( $_SESSION[User::USER][User::FACULTY_ID], 1 );//1表示发起的活动
	while( $act_row = mysql_fetch_array( $act_info ) ){
		$act_list[] = array(
			"id" => 	$act_row['id'],
			"name" => 	$act_row['name'],//."测试一下长长的标题测试一下长长的标题测试一下长长的标题"
		);
	}
	//成员
	$mem_info = $team->fetch_my_fellows($_SESSION[User::USER][User::FACULTY_ID]);
	while( $mem_row = mysql_fetch_array( $mem_info ) ){
		$mem_list[] = array(
			"id" => 	$mem_row['id'],
			"name" => 	$mem_row['name'],
		);
	}
}
$tpl->assign( "topic", $topic );
$tpl->assign( "content", $content );
$tpl->assign( "recv_list", $recv_list );
$tpl->assign( "team_list", $team_list );
$tpl->assign( "act_list", $act_list );
$tpl->assign( "mem_list", $mem_list );

$tpl->assign( "read_only", $read_only );
$tpl->assign( "recv", $recv );


$tpl->display( "include/note_edit.html" );


?>