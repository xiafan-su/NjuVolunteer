<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
$a=new Act();
$act_id=$a->create_new_act();
$tpl->assign("act_id",$act_id);
$tpl->display('act_apply.html');
?>