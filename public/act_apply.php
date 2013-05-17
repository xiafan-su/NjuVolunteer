<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
$a=new Act();
$act_id=$a->create_new_act();
$t=new Team();
$select=$t->fetch_all_faculty();
while ($result=mysql_fetch_assoc($select))
{
	$faculty_list[]=array('name'=>$result['name']);
}
$tpl->assign("act_id",$act_id);
$tpl->assign("faculty_list",$faculty_list);
$tpl->display('act_apply.html');
?>