<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

$u=new User();
$results=$u->fetch_person_act($_SESSION[User::USER][User::ID]);

while($act_info = mysql_fetch_assoc($results))
{
	if ($act_info['applystate']=="1")
		$state="报名通过";
	if ($act_info['applystate']=="0")
		$state="待审核";
	if ($act_info['applystate']=="2")
		$state="被拒";
	$act_listinfo[] = array('id' => $act_info['id'],'name' => $act_info['name'],'detail_time' => $act_info['detail_time'],'state' => $state);
};
if (isset($act_listinfo))
	$tpl->assign("act_list",$act_listinfo);



$tpl->display("include/actv_takein.html");		
	

?>