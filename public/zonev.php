<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
if (isset($_SESSION[User::USER][User::ID]))
{
	$u=new User();
	$result=$u->fetch_person_info($_SESSION[User::USER][User::ID]);
	$tpl->assign( "head_photo", $result['photo'] );
	$tpl->assign( "user_name", $_SESSION[User::USER][User::NAME] );
	$tpl->assign( "notes_number", 3 );
	$tpl->assign("volunteer_time",round($result['volunteer_time'],1) );
	$tpl->assign("base_time",round($result['base_time'],1) );
	$tpl->assign("honor_time",round($result['honor_time'],1) );
	$tpl->assign("signature",htmlspecialchars_decode($result['signature'],ENT_QUOTES) );
	$tpl->assign("user_rate",$result['user_rate'] );
	$select=$u->fetch_notes($_SESSION[User::USER][User::ID],0);
	$notice_num=mysql_num_rows($select);
	if ($notice_num!=0)
		$tpl->assign("notice_num",'('.$notice_num.')');
	else
		$tpl->assign("notice_num","");
	$tpl->display('zonev.html');
}else
echo '<script>alert("'.'您的登录信息已过期，请重新登录'.'");</script>';
?>