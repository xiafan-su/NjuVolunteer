<?php
header("charset=utf8"); 
require_once("../include/php/basic.php");
require_once("../connections/root_conn.php");
$query="SELECT u.id,u.name,u.permission,f.faculty_name,f.faculty_id FROM user_info u,faculty f WHERE u.faculty = f.faculty_name AND u.id='".$_POST['user']."' AND u.password='".md5($_POST['password'])."'";

$select=mysql_query($query,$root_conn);
if(mysql_num_rows($select)==1)
{
	$temp=mysql_fetch_array($select);
	$time = date("Y-m-d-h-M-s");
	//echo $time;
	$update_time = "UPDATE user_info SET last_login = '".$time."' , login_num = (login_num + 1) WHERE id = '".$temp[0]."';";
	mysql_query($update_time,$root_conn);
	$_SESSION[$_user_id]=$temp[0];
	$_SESSION[$_user_name]=$temp[1];
	$_SESSION[$_user_permission]=$temp[2];
	$_SESSION[$_user_faculty]=$temp[3];
	$_SESSION[$_user_faculty_id]=$temp[4];
	if( $temp[2] == $_up_r )header("Location: ../rzone.php");
	else if( $temp[2] == $_up_t )header("Location: ../tzone.php");
	else if( $temp[2] == $_up_v ) header("Location: ../vzone.php");
}
else
{?>

	<script> alert('账号密码错误'); window.location.href="../index.php"; </script>

    <?php }?>