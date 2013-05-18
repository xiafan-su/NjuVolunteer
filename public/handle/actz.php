<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';

/*参数说明
type: 处理类型，
	"actApply"，活动报名人员的审核
idList: 处理列表，如审核的志愿者列表，用空格隔开【仅POST有效】
	"101220129 101220130"(举例)
target: 处理目标，如活动报名人员的审核的目标：通过1/退回0
	"0/1"
reason: 理由，当审核失败时用到

type: "setpart" 设置参与人员
documentId:记录列表
setStr:设置列表

*/
//echo "0";
//exit;
if( ! isset( $_POST['type'] ) ) {
	echo "error";
	exit;
}
if( $_POST['type'] == "actApply" ){
	if( isset( $_POST['idList'] ) && isset( $_POST['target'] ) && isset( $_POST['reason'] ) && isset( $_POST['activityId'] ) ){
		$actid = $_POST['activityId'];
		$vol_list = $_POST['idList'];
		$state = $_POST['target'];
		$reason = $_POST['reason'];
		
		//echo "活动ID：".$actid."<br />志愿者列表：".$vol_list."<br />状态：".$state."<br />理由：".$reason."<br />";
		$team = new Team();
		if( $team->audit_act_vol( $actid, $vol_list, $state, $reason ) ){
			echo "0"; exit;
		} else {
			echo "\n修改数据库失败！"; exit;
		}
	}
	echo "\n参数不正确！"; exit;
} else if( $_POST['type'] == "setpart" ){
	$token = "&n&b&";
	$docid = $_POST['documentId'];
	$record_list = array();
	$part_list = explode($token, $_POST['setStr']);

	echo "count=".count($part_list);
	for ($i = 0; $i < floor(count($part_list)/6); $i++ ){
		$record_list[] = array(
			"user_id"=> $part_list[$i*6+0],
			"base_time"=> $part_list[$i*6+1],
			"performance_level"=> $part_list[$i*6+2],
			"honor_leader"=> $part_list[$i*6+3],
			"honor_excellent"=> $part_list[$i*6+4],
			"comment"=> $part_list[$i*6+5],
		);
	}
	$team = new Team();
	if($team->edit_voltime( $docid, $record_list )){
		echo "0";
	} else {
		echo "修改失败！";
	}
} else if( $_POST['type'] == "submit" ){
	if( $_POST['documentId'] == -1){
		echo "提交失败！";
	} else {
		$team = new Team();
	//	$record_list = array();//留空
		if($team->register_voltime( $_POST['documentId']/* , $record_list*/ )){
			echo "0";
		} else {
			echo "提交失败！";
		}
	}
}

?>