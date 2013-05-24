<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';

if (isset( $_SESSION[User::USER][User::FACULTY_ID]))
{
	$team_id = $_SESSION[User::USER][User::FACULTY_ID];
	$team = new Team();
	$team_info = $team->fetch_team_profile( $team_id  );
	$team_logo = $team_info['logo'];
	$team_profile = htmlspecialchars_decode($team_info['profile'],ENT_QUOTES);
	$team_signature = $team_info['slogan'];
	if( $team_logo == NULL ){
		 $team_logo = "NJU_default.png";
	}
	$tpl->assign( "team_logo", $team_logo );
	$tpl->assign( "user_name", $_SESSION[User::USER][User::NAME] );
	
	
	$tpl->assign( "notes_number", $team->fetch_my_new_notes_count( $team_id ) );
	
	
	
	$tpl->display('zonet.html');
}else
echo '<script>alert("'.'您的登陆信息已过期，请重新登陆'.'");</script>';

?>