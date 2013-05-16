<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';

/*
参数说明：
type: 处理类型，"add"表示添加；"modify"表示修改,"delete"表示删除
documentId: 【如果有】档案id
*/

if( ! isset($_POST['type']) ) {
	echo "请设置type！";
	exit;
}
if( $_POST['type'] == "add" ){
	echo "收到您的添加请求！我们会及时处理！";
} else if( $_POST['type'] == "delete" ){
	if( isset( $_POST['documentId'] ) ) {
		echo "收到您的删除请求(docid=".$_POST['documentId'].")！我们会及时处理！";
	} else {
		echo "收到您的删除请求！但是您没有给我们您要删除的档案ID，所以我们无法完成您的需求！";
	}
}  else {
	echo "收到您的qita请求！我们会及时处理！";
}
//

?>