
<?php

include_once '../sys/core/init.inc.php';

include './include/header.php';

//
$id=$_GET['team_id'];
//


$team=new Team();
$leader=$team->fetch_leader($id);
$team_name=$team->fetch_team_name($id);
$u=new User();
if ($u->follow_state($id))
{
	$tpl->assign("already_follow",1);
}
else
$tpl->assign("already_follow",0);
$tpl->assign("team_id",$team_name['id']);
$tpl->assign("team_name",$team_name['name']);
$tpl->assign("leader_name",$leader['name']);
$tpl->assign("leader_email",$leader['email']);
$tpl->assign("leader_phone",$leader['phone']);

$act_num_all=$team->fetch_all_doc_num($id);
$act_doc_now=$team->fetch_now_doc_num($id);
/*$strtime = "2008-03-16 11:11:11";
$strtimes = explode(" ",$strtime);
$timearray = explode("-",$strtimes[0]);
$year = $timearray[0];
$month = $timearray[1];
$day = $timearray[2];
echo $month;*/


$act_result=$team->fetch_act_all($id,2);
while ($row=mysql_fetch_assoc($act_result))
	$act_info[] = array('id'=>$row['id'],'name'=>$row['name'],'begin_time'=>$row['begin_time'],'end_time'=>$row['end_time']);

$tpl->assign("activity_info",$act_info);
$tpl->assign("all_act_num",$act_num_all);
$tpl->assign("now_act_num",$act_doc_now);
$tpl->display('indext.html');
?>