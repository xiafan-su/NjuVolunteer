<?php

require_once('../../sys/config/db-cred.inc.php'); 
require_once('../../sys/core/init.inc.php');

$user_id = $_SESSION[$_user_id];
echo $user_id;
/*$user_id = $_SESSION[User::USER][User::ID];
$activity_id = $_SESSION["act_id"];
//$query = "SELECT user_id,activity_id FROM participation WHERE user_id='".$user_id."' AND activity_id=".$activity_id;
$a = new Act();
$select=$a->test_part_act($user_id,$activity_id);

if(mysql_num_rows($select)>0){
	echo 1;
} else {
	echo 0;
}*/
?>