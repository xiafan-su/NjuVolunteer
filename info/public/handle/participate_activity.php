<?php

require_once('../../sys/config/db-cred.inc.php'); 
require_once('../../sys/core/init.inc.php');

$user_id = $_SESSION[User::USER][User::ID];
$activity_id = $_SESSION["act_id"];
$_as_auditing="auditing";
$insert = "INSERT INTO participation(user_id,activity_id,state)VALUES('".$user_id."',".$activity_id.",'".$_as_auditing."')";
$add_num = "UPDATE activity_info SET offer_num = (offer_num+1) WHERE id=".$activity_id;
$query = "SELECT user_id,activity_id FROM participation WHERE user_id='".$user_id."' AND activity_id=".$activity_id;
$delete = "DELETE FROM participation WHERE user_id='".$user_id."' AND activity_id=".$activity_id;
$sub_num = "UPDATE activity_info SET offer_num = (offer_num-1) WHERE id=".$activity_id;
$a = new Act();
$select=$a->test_part_act($user_id,$activity_id);

if(mysql_num_rows($select)>=0){
	echo 0;
} else {
	$a->participate_activity_db($user_id,$activity_id,$_as_auditing);
	echo 1;
}
?>