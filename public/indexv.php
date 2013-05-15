
<?php

include_once '../sys/core/init.inc.php';

include './include/header.php';

//
$id=101220129;
//


$user=new User();
$student=$user->fetch_person_info($id);
$activity_detail=$user->fetch_person_act($id);

while ($row=mysql_fetch_assoc($activity_detail))
	$activity[]=array('name'=>$row['name'],'id'=>$row['id'],'responser'=>$row['responser']);

$tpl->assign("name" ,$student['name']);
$tpl->assign("email",$student['email']);
$tpl->assign("phone_number",$student['phone']);
$tpl->assign("volunteer_time",$student['volunteer_time']);
$tpl->assign("honor_time",$student['honor_time']);
$tpl->assign("faculty",$student['faculty']);
$tpl->assign("apply",$activity);

$tpl->display('indexv.html');


?>