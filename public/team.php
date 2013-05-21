<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';



$team=new Team();

$department_info=$team->fetch_department_info();


$other_info=$team->fetch_other_info();

$tpl->assign("department_info",$department_info);
$tpl->assign("other_team_info",$other_info);

$tpl->display('team_list.html');
?>