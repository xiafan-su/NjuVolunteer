<?php
require_once('../include/php/basic.php');
require_once('../connections/root_conn.php');
?>

<?php

	$name		= 	$_POST['activity_name'];
	$place  		= 	$_POST['activity_place'];
	$time_type 	= 	$_POST['time_type'];
	$attribution_type  	= 	$_POST['attribution_type'];
	$begin_time 		= 	$_POST['begin_time'];
	$end_time		= 	$_POST['end_time'];
	$detail_time  	= 	$_POST['detail_time'];
	$total_num  		= 	$_POST['total_num'];
	$need_audit  		= 	$_POST['need_audit'];
	$responser  		= 	$_POST['responser'];
	$responser_tel  		= 	$_POST['responser_tel'];
	$last_time  		= 	$_POST['last_time'];
	$activity_profile	=	$_POST['activity_profile'];
	$state              = $_POST['state'];
	$accepted_num		=0;
	$offer_num			=0;
	$begin_time=$begin_time." 00:00:0";
	$end_time=$end_time." 00:00:0";
	$publisher=$_SESSION[$_user_faculty_id];
	$query="select name from activity_info where name='".$name."'";
	$select=mysql_query($query,$root_conn);
	if(mysql_num_rows($select) == 0) {
		/*echo "insert enable";
		echo "name:".$name;
		echo "place:".$place;
		echo "time_type:".$time_type;
		echo "attribution_type:".$attribution_type;
		echo "detail_time:".$detail_time;
		echo "total_num:".$total_num;
		echo "need_audit:".$need_audit;
		echo "responser:".$responser;
		echo "responser_tel:".$responser_tel;
		echo "last_time:".$last_time;
		echo "state:".$state;
		echo "accepted_num:".$accepted_num;
		echo "offer_num:".$offer_num."\n";
		echo "publisher:".$publisher;*/
		//echo "begin_time:".$begin_time;
		//echo "end_time:".$end_time;
		$insert = "
		insert into activity_info 
		( 	
			name,place,time_type,attribution_type,
			detail_time,total_num,need_audit,
			responser,responser_tel,last_time,
			begin_time,end_time,state,profile,publisher
		) 
		values
		(
			'".$name."','".$place."','".$time_type."','".$attribution_type."',
			'".$detail_time."','".$total_num."','".$need_audit."',
			'".$responser."','".$responser_tel."','".$last_time."',
			'".$begin_time."','".$end_time."','".$state."','".$activity_profile."',
			18
				
		);";
		if (!mysql_query($insert,$root_conn))
		{
		  die('Error: ' . mysql_error());
		}
		echo "1";
	}else
	{
		echo "0";
	}




?>