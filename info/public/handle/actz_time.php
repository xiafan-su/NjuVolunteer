<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';



if( !isset($_POST['type']) ){
	echo "error";
	exit;
}

if( $_POST['type'] == "getdoc" ){//获取活动记录
	if( ! isset($_POST['activityId']) ){ echo "参数错误！"; exit; }
	$actid = $_POST['activityId'];

	$select_option = '<select name="" id="extend_select_doc"><option value="-1" selected>请选择活动档案</option>';
	$doc_list = array();
	$team = new Team();
	$doc_info = $team->fetch_act_doc_all( $actid );
	while( $doc_row = mysql_fetch_array($doc_info) ){
		$select_option .= '<option value="'.$doc_row['id'].'" selected>'.$doc_row['date']."(".$doc_row['leader'].")".'</option>';
	}
	$select_option .= '</select>';

	echo $select_option;
} else if( $_POST['type'] == "addTime" ){//添加服务时间
//$uid,$doc_id,$time,$level,$excellent,$leader,$comment
	$team = new Team();
	$result = $team->insert_act_record( $_POST['uid'], $_POST['documentId'], $_POST['time'], $_POST['level'], $_POST['excellent'], $_POST['leader'], $_POST['comment']) ;
	if($result == 1){
		echo "0";
	} else if($result == -1){
		echo "添加失败，该志愿者已经在该档案的参与记录中！";
	} else {
		echo "添加失败！";
	}
}

?>