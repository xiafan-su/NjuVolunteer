<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

if( !isset( $_SESSION[User::USER][User::FACULTY_ID] ) ){
	echo "<p>登录信息已失效，请重新登录！</p>";
	exit;
}

$tpl->display( "include/infot_chxpsd.html" );

?>