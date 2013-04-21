<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
include './include/act_left.php';

$tpl->assign( "act_title", "~~~~标题~~~~" );
$tpl->assign( "act_state", "~~~~状态~~~~" );
$tpl->assign( "act_begin_time", "2010-10-10 0:0:0" );
$tpl->assign( "act_end_time", "2012-10-10 0:0:0" );
$tpl->assign( "last_time", 3 );
$tpl->assign( "act_time_type", "长期活动" );
$tpl->assign( "act_attr_type", "助残" );
$tpl->assign( "act_place", "XXXXX" );
$tpl->assign( "act_profile", "~~~~~~~~~~~~~活动简介~~~~~~~~~~~~~" );



$tpl->display('act_dtl.html');
?>