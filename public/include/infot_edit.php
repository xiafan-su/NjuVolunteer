<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';



$team = new Team();
$team_info = $team->fetch_team_profile( $_SESSION[User::USER][User::FACULTY_ID]  );
$team_logo = $team_info['logo'];
$team_profile = $team_info['profile'];
$team_signature = $team_info['slogan'];


if( $team_logo == NULL ){
	$team_logo = "NJU_default.png";
}


$tpl->assign( "team_logo", $team_logo );
$tpl->assign( "team_signature", $team_signature );
$tpl->assign( "team_profile", $team_profile );



$tpl->display( "include/infot_edit.html" );

?>