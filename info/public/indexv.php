
<?php

include_once '../sys/core/init.inc.php';

include './include/header.php';

if( !isset( $_GET['user_id'] ) ){ echo "<p>²ÎÊý´íÎó£¡</p>"; exit; }
//
$id=htmlspecialchars($_GET['user_id'],ENT_QUOTES);
//

$activity=NULL;
$myteamlist=NULL;
$myfollowlist=NULL;
$myactlist=NULL;
$user=new User();
$student=$user->fetch_person_info($id);
$activity_detail=$user->fetch_person_act($id);

while ($row=mysql_fetch_assoc($activity_detail))
	$activity[]=array('name'=>$row['name'],'id'=>$row['id'],'responser'=>$row['responser']);


$myteam=$user->fetch_my_team($id);
while ($row2=mysql_fetch_assoc($myteam)){
	$myteamlist[]=array('teamid'=>$row2['TID'],'name'=>$row2['TNAME']);
}

	
$myfollow=$user->fetch_my_follow($id);
while ($row3=mysql_fetch_assoc($myfollow)){
	$myfollowlist[]=array('teamid'=>$row3['TID'],'name'=>$row3['TNAME']);
}

$myact=$user->fetch_my_act($id);	
while ($row4=mysql_fetch_assoc($myact)){
	$myactlist[]=array('id'=>$row4['AID'],'name'=>$row4['name'],'basetime'=>$row4['base_time'],'honortime'=>$row4['honor_time']);
}





/*	
$myact=$user->fetch_my_act($_SESSION[User::USER][User::ID]);	
while ($row=mysql_fetch_assoc($myfollow))
	$myactlist[]=array('teamid'=>$row['TID'],'name'=>$row['TNAME']);*/	
	
	
	
	
$tpl->assign("gender" ,$student['gender']);
$tpl->assign("head_photo" ,$student['photo']);
$tpl->assign("name" ,$student['name']);
$tpl->assign("email",$student['email']);
$tpl->assign("phone_number",$student['phone']);
$tpl->assign("volunteer_time",round($student['volunteer_time'],1));
$tpl->assign("honor_time",round($student['honor_time'],1));
$tpl->assign("faculty",$student['faculty']);
$tpl->assign("signature",$student['signature']);
$tpl->assign("apply",$myactlist);
$tpl->assign("teamlist",$myteamlist);
$tpl->assign("followlist",$myfollowlist);

$tpl->display('indexv.html');


?>