<?php

$_BASE_PATH = "../info/";

include_once '../info/sys/core/init.inc.php';

$headers = getallheaders();
/*
foreach($headers as $name=>$value){
	echo $name.": ".$value."<br />";
}
// */
if(!isset( $_SESSION[User::USER][User::PERM_ID] )){
    $user = new User();
	$user->loginFromWebAgent($headers);
}
if(isset($_GET['link'])){
	header("Location: ".$_GET['link']);
}

?>