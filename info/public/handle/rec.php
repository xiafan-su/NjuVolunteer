<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';

/*
参数说明：
type: 处理类型，"add"表示添加；"modify"表示修改,"delete"表示删除，remove表示移除参与者
documentId: 【如果有】档案id
idList: 参与人员列表，用空格隔开
*/

if( ! isset($_POST['type']) ) {
	echo "请设置type！";
	exit;
}

if( $_POST['type'] == "add" ){
	//echo "收到您的添加请求！我们会及时处理！docid=".$_POST['documentId'];
	if( isset( $_POST['activityId'] ) && isset($_POST['documentId']) && isset($_POST['leader'])
		&& isset($_POST['profile']) && isset($_POST['summary']) && isset($_POST['tel'])
		 && isset($_POST['volTime']) && isset($_POST['start_date'])  ) {
		$doc_id = $_POST['documentId'];
		if( mb_strlen($_POST['leader']) == 0 || mb_strlen($_POST['leader']) > 20 ) { echo "负责人格式错误！";exit; }//检验负责人
		if( ! preg_match("/^[0-9]{8,11}$/", $_POST['tel'] )){ echo "联系方式格式错误！"; exit; }//检验联系方式
		if( ! is_numeric( $_POST['volTime']) ){ echo "活动时长格式错误！";exit; };
		if( ! preg_match("/^[0-9]{4}(\-|\/)[0-9]{1,2}(\\1)[0-9]{1,2}(|\s+[0-9]{1,2}(|:[0-9]{1,2}(|:[0-9]{1,2})))$/", $_POST['start_date'] )){ echo "开始时间格式错误！"; exit; }
		if( mb_strlen($_POST['profile']) > 1000){ echo "简介长度错误！"; exit; }
		if( mb_strlen($_POST['summary']) > 500){ echo "总结长度错误！"; exit; }

		$team = new Team();
		if( $doc_id == -1 ){
			$new_doc_id = $team->add_doc( $_POST['activityId'], $_POST['leader'], $_POST['profile'], $_POST['summary'], $_POST['tel'], $_POST['volTime'], $_POST['start_date'] );
			if($new_doc_id >= 0){
				echo $new_doc_id;//添加成功！
			} else {
				echo "添加失败！";
			}
		} else {
			if($team->modify_doc( $doc_id, $_POST['leader'], $_POST['profile'], $_POST['summary'], $_POST['tel'], $_POST['volTime'],$_POST['start_date'] )){
				echo $doc_id;
			} else {
				echo "修改失败！".$doc_id.", ".$_POST['leader'].", ".$_POST['profile'].", ".$_POST['summary'].", ".$_POST['tel'].", ".$_POST['volTime'];
			}
		}
	} else {
		echo "参数错误！";
	}
} else if( $_POST['type'] == "delete" ){//删除该活动记录
	if( isset( $_POST['documentId'] ) ) {
		//echo "收到您的删除请求(docid=".$_POST['documentId'].")！我们会及时处理！";
		if( $_POST['documentId'] != -1 ){
			$team = new Team();
			if( $team->delete_doc($_POST['documentId'] ) ){
				echo "0";
			} else {
				echo "删除失败！";
			}
		}
	} else {
		echo "收到您的删除请求！但是您没有给我们您要删除的档案ID，所以我们无法完成您的需求！";
	}
} else if( $_POST['type'] == "remove" ){//移除参与者
	if( isset($_POST['documentId']) && isset($_POST['idList']) ){
		$team = new Team();
		if( $team->delete_vol_from_doc( $_POST['documentId'], $_POST['idList'] ) ){
			echo "0";
		} else {
			echo "移除失败！";
		}
	} else {
		echo "参数错误";
	}
} else if( $_POST['type'] == "import" ){//导入参与者
	if( isset($_POST['documentId']) && isset($_POST['idList']) ){
		$team = new Team();
		if( $team->import_vol_to_doc( $_POST['documentId'], $_POST['idList'] ) ){
			echo "0";
		} else {
			echo "导入失败！";
		}
	} else {
		echo "参数错误";
	}
}  else {
	echo "收到您的其他请求！我们会及时处理！";
}
//

?>