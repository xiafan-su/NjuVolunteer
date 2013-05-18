<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
$u=new User();
$result=$u->fetch_person_info($_SESSION[USER::USER][USER::ID]);
$tpl->assign( "user_name", $_SESSION[User::USER][User::NAME] );
$tpl->assign( "notes_number", 3 );
$tpl->assign("volunteer_time",$result['volunteer_time'] );
$tpl->assign("base_time",$result['base_time'] );
$tpl->assign("honor_time",$result['honor_time'] );
$tpl->assign("signature",$result['signature'] );
$tpl->display('zonev.html');
?>