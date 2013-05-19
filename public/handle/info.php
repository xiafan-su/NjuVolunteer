<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';



if( !isset($_POST['type']) ) {
	echo "error";
	exit;
}

if( $_POST['type'] == "chtProfile" ){//change team info profile
	$profile = $_POST['profile'];
	echo "收到团队简介：".$profile."，我们会尽快处理！";
	//echo "0";
}

?>