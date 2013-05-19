<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
$u=new User();
$result=$u->fetch_person_info($_SESSION[USER::USER][USER::ID]);

$tpl->assign( "user_name", $_SESSION[User::USER][User::NAME] );
$tpl->assign( "notes_number", 3 );
$tpl->assign("volunteer_time",round($result['volunteer_time'],1) );
$tpl->assign("base_time",round($result['base_time'],1) );
$tpl->assign("honor_time",round($result['honor_time'],1) );
$tpl->assign("signature",$result['signature'] );
$select=$u->fetch_notes($_SESSION[USER::USER][USER::ID],0);
$notice_num=mysql_num_rows($select);
if ($notice_num!=0)
	$tpl->assign("notice_num",'('.$notice_num.')');
else
	$tpl->assign("notice_num","");
$tpl->display('zonev.html');
?>