<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';

if( !isset( $_POST['type'] ) ){
	echo "参数错误！";exit;
}
if( !isset($_SESSION[User::USER][User::FACULTY_ID]) ){
	echo "<p>登录信息已经失效，请重新登录！</p>"; exit;
}

if( $_POST['type'] == "cover" ){//设为封面
	if( !isset( $_POST['pic_id'] ) ){ echo "参数错误！";exit; }
	$act = new Act();
	if($act->set_cover( $_POST['pic_id']  )){
		echo "1";
	} else {
		echo "设置失败！";
	}
	exit;
} else if ( $_POST['type'] == "delete" ){//删除
	if( !isset( $_POST['pic_id'] ) ){ echo "参数错误！";exit; }
	$act = new Act();
	if($act->delete_photo( $_POST['pic_id']  )){
		echo "1";
	} else {
		echo "删除失败！";
	}
	exit;
}


?>