<?php
require_once('../../connections/root_conn.php'); 
require_once('../../include/php/basic.php');
$user_id = $_SESSION[$_user_id];
$activity_id = $_SESSION[$_act_id];
$insert = "INSERT INTO participation(user_id,activity_id,state)VALUES('".$user_id."',".$activity_id.",'".$_as_auditing."')";
$add_num = "UPDATE activity_info SET offer_num = (offer_num+1) WHERE id=".$activity_id;
$query = "SELECT user_id,activity_id FROM participation WHERE user_id='".$user_id."' AND activity_id=".$activity_id;
$delete = "DELETE FROM participation WHERE user_id='".$user_id."' AND activity_id=".$activity_id;
$sub_num = "UPDATE activity_info SET offer_num = (offer_num-1) WHERE id=".$activity_id;

$select=mysql_query($query,$root_conn);
if(mysql_num_rows($select)>=1){
	if (!mysql_query($delete,$root_conn)	)	{
		  die('Error: ' . mysql_error());
		};
		if (!mysql_query($sub_num,$root_conn)	)	{
		  die('Error: ' . mysql_error());
		};
		echo 0;
} else {
	mysql_query($insert,$root_conn)or die(mysql_error());
	mysql_query($add_num,$root_conn)or die(mysql_error());
	echo 1;
}
	//header("Location:../detail.php?activityId=".$activity_id );

?>