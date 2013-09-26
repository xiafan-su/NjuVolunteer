<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';


//修改成员审核状态
if( $_POST['type'] == "modifyState" ){
	//echo "收到！".$_POST['uid'].",".$_POST['state'].",".$_POST['reason'];
	$vol_list = $_POST['uid'];
	$state = $_POST['state'];
	$reason = $_POST['reason'];
	$team = new Team();
	if( $team->audit_vol( $vol_list,$state,$reason ) ){
		echo "0";
	} else {
		echo "修改失败！";
	}
} else if( $_POST['type'] == "modifyPosition" ){//修改成员职务
	//echo "收到！".$_POST['uid'].",".$_POST['position'].",".$_POST['reason'];
	$team = new Team();
	if( $team->edit_my_fellow_position( $_POST['uid'],$_POST['position'] ) ){
		echo "0";
	} else {
		echo "修改失败！";
	}
}


?>