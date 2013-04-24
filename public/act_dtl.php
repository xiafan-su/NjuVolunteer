<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
include './include/act_left.php';

//$activity_info=$_GET["activity_id"];
$a=new Act();
$activity_info=1;
$_SESSION["act_id"]=$activity_info;
$result=$a->fetch_one($activity_info);
$act_info = mysql_fetch_assoc($result);
if(mysql_num_rows($result)==0){
        exit('查询结果为空');
}else{
	$tpl->assign( "act_title", $act_info['name']);
	$current_time=date("Y-m-d H:i:s");
	if(strtotime($act_info['deadline'])>strtotime($current_time)){
		$state=sprintf("%s:%s","招募中,截止时间",$act_info['deadline']);
		$tpl->assign( "act_state", $state);
	}
	else{
		$tpl->assign( "act_state", "招募已结束" );
	}
	$tpl->assign( "act_begin_time", $act_info['begin_time']);
	$tpl->assign( "act_end_time",  $act_info['end_time']);
	$tpl->assign( "last_time", $act_info['last_time']);
	$tpl->assign( "act_time_type",  $act_info['time_type']);
	$tpl->assign( "act_attr_type",  $act_info['attribution_type']);
	$tpl->assign( "act_place", $act_info['place'] );
	$tpl->assign( "act_profile",  $act_info['profile']);
}


$tpl->display('act_dtl.html');
?>
