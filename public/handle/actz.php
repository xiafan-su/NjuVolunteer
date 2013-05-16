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
}

?>