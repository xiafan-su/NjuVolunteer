<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
include './include/act_left.php';
$activity_id = $_GET['act_id'];
$act = new Act();
$item = $act->fetch_one($activity_id);
$tpl->assign( "id", $activity_id);

switch($item['state']){
	case "audited" :$tpl->assign( "act_state", "已审核" );break;
	case "auditing" :$tpl->assign( "act_state", "未审核" );break;
	default : $tpl->assign( "act_state","未知类型" );
}

switch($item['time_type']){
	case "longtime" : $tpl->assign( "act_time_type", "长期活动" );break;
	case "temp": $tpl->assign( "act_time_type", "临时活动" );break;
	default : $tpl->assign("act_time_type","未知类型");
}

switch($item['attribution_type']){
	case "helpdisabled" : $tpl->assign( "act_attr_type", "助残" );break;
	case "supporteducation" : $tpl->assign( "act_attr_type", "支教");break;
	case "helptheold" : $tpl->assign( "act_attr_type", "扶老");break;
	case "bigmatch" : $tpl->assign( "act_attr_type", "大型赛事");break;
	default : $tpl->assign( "act_attr_type", "其他");
}

$same_act =$act->find_same($activity_id);
$tpl->assign( "act_same", $same_act);
$tpl->assign( "id", $activity_id);
$tpl->assign( "act_place", $item['place'] );
$tpl->assign( "act_profile", $item['profile'] );
$tpl->assign( "act_title", $item['name'] );
$tpl->assign( "act_begin_time", $item['begin_time'] );
$tpl->assign( "act_end_time", $item['end_time']);
$tpl->assign( "last_time", $item['last_time'] );
$tpl->assign( "act_id", $activity_id);

$comment_info=$act->get_comment($activity_id);

$tpl->assign( "comment_detail",$comment_info);

$tpl->display('act_dtl.html');
?>