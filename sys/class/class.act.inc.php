<?php

//活动类，可执行的操作包括：创建一个新活动，根据id查询一个活动
//根据(一个/一组)关键词查询一系列活动……
//修改某个活动
//删除某个活动
class Act extends DB_Connect {
	
	public function __construct($dbo=NULL){
		parent::__construct($dbo);
	}
	public function fetch_from_date($day1,$day2,$day3,$day4,$day5,$day6,$day7)
	{
		
		$query="select * from activity_info where date='".$day1."' and () ";

		 
	}
	public function fetch_hot()
	{
		return 1;
	}
	public function fetch_highscore()
	{
		return 2;
	}
	public function admin_fetch_all()
	{
		$query="select * from activity_info where state='auditing'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function fetch_all($keywords,$timetype,$attributiontype,$timelimit,$actstate,$num)
	{
			$time_type = array("longtime","temp");
			$attribution_type=array("supporteducation","helpdisabled");
			
			$query="select * from activity_info where state='audited' and (name LIKE '%".$keywords."%')";
			if ($timetype!=0)
				$query = sprintf("%s and (time_type='".$time_type[$timetype-1]."')", $query);
			if ($attributiontype!=0)
				$query = sprintf("%s and (attribution_type='".$attribution_type[$attributiontype-1]."')", $query);
			$query = sprintf("%s LIMIT 0, %d", $query, $num);
			
			$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			return $select;
	}
	
	public function create_new( $name,$place,$time_type,$attribution_type,$begin_time,$end_time,$detail_time,$total_num,$need_audit,$responser,$responser_tel,$last_time,$activity_profile,$state,$publisher){
		$accepted_num		=0;
		$offer_num			=0;
		$begin_time=$begin_time." 00:00:0";
		$end_time=$end_time." 00:00:0";
		$query="select name from activity_info where name='".$name."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		if(mysql_num_rows($select) == 0) {
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
			if (!mysql_query($insert,$this->root_conn))
			{
			  die('Error: ' . mysql_error());
			}
			return 1;
		}else
		{
			return 0;
		}

	}

	public function fetch_one( $id ){
		
	}
	


	public function modify( $id/* 其他参数未设置 */ ){
		
	}

	public function delete( $id ){
	
	}
	
}
?>