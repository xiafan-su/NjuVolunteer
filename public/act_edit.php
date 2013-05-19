<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
//$act_id=$_POST['act_id'];
$act_id=$_GET['activityId'];
$a=new Act();
$act_info=$a->fetch_one($act_id);
if (!isset($_SESSION[USER::USER][USER::FACULTY_ID]))
	echo '<script>alert("'."您没有权限".'");</script>';
else
if ($act_info['publisher']!=$_SESSION[USER::USER][USER::FACULTY_ID])
	echo '<script>alert("'."此行为已记录".'");</script>';
else
{
	$t=new Team();
	$select=$t->fetch_all_faculty();
	$faculty_limit="呵呵".$act_info['faculty_limit'];
	while ($result=mysql_fetch_assoc($select))
	{
		$name=$result['name'];
		if (strpos($faculty_limit,$name))
			$faculty_list[]=array('name'=>$result['name'],'limit'=> 'checked');
		else
			$faculty_list[]=array('name'=>$result['name'],'limit'=> '');
	}
	$begin_date=explode(" ",$act_info['begin_time']);
	$end_date=explode(" ",$act_info['end_time']);
	$dead_date=explode(" ",$act_info['deadline']);
	$tpl->assign("act_id",$act_id);
	$tpl->assign("act_name",$act_info['name']);
	$tpl->assign("act_place",$act_info['place']);
	$tpl->assign("time_type",$act_info['time_type']);
	$tpl->assign("attribution_type",$act_info['attribution_type']);
	$tpl->assign("begin_date",$begin_date[0]);
	$tpl->assign("end_date",$end_date[0]);
	$tpl->assign("dead_date",$dead_date[0]);
	$tpl->assign("last_time",$act_info['last_time']);
	$tpl->assign("cet4",$act_info['cet4']);
	$tpl->assign("cet6",$act_info['cet6']);
	$tpl->assign("other_language",$act_info['other_language']);
	$tpl->assign("responser",$act_info['responser']);
	$tpl->assign("responser_tel",$act_info['responser_tel']);
	$tpl->assign("profile",$act_info['profile']);
	$i=1;$temp=1;
	for ($i=1;$i<=7;$i++)
	{
		if (($temp & $act_info['weekday_time'])==$temp)
			$tpl->assign("weekday"."$i",1);
		else $tpl->assign("weekday"."$i",0);
		$temp=$temp*2;
	}
	$tpl->assign("detail_time",$act_info['detail_time']);
	$tpl->assign("total_num",$act_info['total_num']);
	if ($act_info['faculty_limit']==NULL)
	{
		$tpl->assign("facultylimit",0);
	}else
	{
		$tpl->assign("facultylimit",1);
	}
	if ($act_info['cet4']>0 || $act_info['cet6']>0)
	{
		$tpl->assign("englishlimit",1);
	}else
	{
		$tpl->assign("englishlimit",0);
	}
	$tpl->assign("faculty_list",$faculty_list);
	
	$tpl->display('act_edit.html');
}
?>