<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$a=new Act();
$select=$a->admin_fetch_info();
$act_info = mysql_fetch_assoc($select);

	
	$tpl->assign("num",$act_info['num']);
	$tpl->display("handle/super_admin_actinfo.html");


?>
