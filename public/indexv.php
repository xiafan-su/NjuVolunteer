
<?php

include_once '../sys/core/init.inc.php';

include './include/header.php';

//
$id=101220129;
//


$user=new User();
$student=$user->fetch_person_info($_SESSION[USER::USER][USER::ID]);
$activity_detail=$user->fetch_person_act($id);

while ($row=mysql_fetch_assoc($activity_detail))
	$activity[]=array('name'=>$row['name'],'id'=>$row['id'],'responser'=>$row['responser']);


$myteam=$user->fetch_my_team($_SESSION[USER::USER][USER::ID]);
while ($row2=mysql_fetch_assoc($myteam)){
	$myteamlist[]=array('teamid'=>$row2['TID'],'name'=>$row2['TNAME']);
}

	
$myfollow=$user->fetch_my_follow($_SESSION[USER::USER][USER::ID]);	
while ($row3=mysql_fetch_assoc($myfollow)){
	$myfollowlist[]=array('teamid'=>$row3['TID'],'name'=>$row3['TNAME']);
}

$myact=$user->fetch_my_act($_SESSION[USER::USER][USER::ID]);	
while ($row4=mysql_fetch_assoc($myact)){
	$myactlist[]=array('actid'=>$row4['AID'],'actname'=>$row4['ANAME']);
}





/*	
$myact=$user->fetch_my_act($_SESSION[USER::USER][USER::ID]);	
while ($row=mysql_fetch_assoc($myfollow))
	$myactlist[]=array('teamid'=>$row['TID'],'name'=>$row['TNAME']);*/	
	
	
	
	


$tpl->assign("name" ,$student['name']);
$tpl->assign("email",$student['email']);
$tpl->assign("phone_number",$student['phone']);
$tpl->assign("volunteer_time",$student['volunteer_time']);
$tpl->assign("honor_time",$student['honor_time']);
$tpl->assign("faculty",$student['faculty']);
$tpl->assign("apply",$activity);
$tpl->assign("teamlist",$myteamlist);
$tpl->assign("followlist",$myfollowlist);

$tpl->display('indexv.html');


?>