<?php
	require_once('../connections/root_conn.php'); 
	$id = $_POST['user'];
	$query="SELECT id FROM user_info WHERE id='".$id."'";
	$select=mysql_query($query,$root_conn);
	if(mysql_num_rows($select) >= 1)
	{
		echo "1";
	}
	else
	{
		echo "0";	
	}
?>