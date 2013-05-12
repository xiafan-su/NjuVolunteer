<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

$u=new User();
$results=$u->fetch_act_record($_SESSION[User::USER][User::ID]);

while($act_record = mysql_fetch_assoc($results))
{
	$act_listinfo[] = array('date' => $act_record['date'],'name' => $act_record['name'],'base_time' => $act_record['base_time'],'honor_time' => $act_record['honor_time'],'performance_level' => $act_record['performance_level'],'comment' => $act_record['comment'],'id' =>$act_record['id']);
};
if (isset($act_listinfo))
	$tpl->assign("act_record_list",$act_listinfo);
$tpl->display("include/vol_act_record.html");


?>