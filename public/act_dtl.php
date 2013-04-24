<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
include './include/act_left.php';

$id=$_GET['act_id'];

$a=new Act();

$result=$a->fetch_one($id);
if ($result['time_type']=='longtime')
	$timetype="长期活动";
	else $timetype="临时活动";
	if ($result['attribution_type']=='supporteducation')
	$atype="支教";
	else $atype="助残";
$tpl->assign( "act_title", $result['name'] );
$tpl->assign( "act_state", $result['state'] );
$tpl->assign( "act_begin_time", $result['begin_time'] );
$tpl->assign( "act_end_time", $result['end_time'] );
$tpl->assign( "last_time", $result['last_time'] );
$tpl->assign( "act_time_type", $timetype );
$tpl->assign( "act_attr_type", $atype );
$tpl->assign( "act_place", $result['place'] );
$tpl->assign( "act_profile", $result['profile'] );
$tpl->assign( "id", $id );


$tpl->display('act_dtl.html');
?>