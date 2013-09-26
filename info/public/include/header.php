<?php

include_once '../sys/core/init.inc.php';

if( ! isset( $_SESSION[User::USER][User::PERM_ID] ) ){
	$user = new User();
	$user->loginFromWebAgent(getallheaders());
}

if( isset( $_SESSION[User::USER][User::PERM_ID] ) ){
	$tpl->assign( "user_permission", $_SESSION[User::USER][User::PERM_ID] );
	$tpl->assign( "user_name", $_SESSION[User::USER][User::NAME] );
}


?>