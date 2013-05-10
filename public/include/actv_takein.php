<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

$u=new User();
$results=$u->fetch_person_act($_SESSION[User::USER][User::ID]);

while($act_info = mysql_fetch_assoc($results))
{
	$act_listinfo[] = array('name' => $act_info['name'],'detail_time' => $act_info['detail_time']);
};
if (isset($act_listinfo))
	$tpl->assign("act_list",$act_listinfo);



$tpl->display("include/actv_takein.html");		
	

?>