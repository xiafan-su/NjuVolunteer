<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';

$tpl->assign( "user_name", $_SESSION[User::USER][User::NAME] );
$tpl->assign( "notes_number", 3 );

$tpl->display('zonet.html');
?>