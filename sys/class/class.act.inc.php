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
	public function admin_fetch_info(){
	$query="select count(*) as num from activity_info";
	$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
	return $select;
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
	public function new_comment($user_id,$act_id,$resp_id,$comment,$time){
			$insert = "
			insert into act_comment
			(
				user_id,act_id,resp_id,comment,time
			)
			values(
				'".$user_id."','".$act_id."','".$resp_id."','".$comment."','".$time."'
			)
			;";
			
			if (!mysql_query($insert,$this->root_conn))
			{
			  die('Error: ' . mysql_error());
			}
			return 1;
	}
	public function find_same($activity_id){
		$act_info=NULL;
		$select = mysql_query("select * from apply_act where act_id = '".$activity_id."'")or trigger_error(mysql_error(),E_USER_ERROR);
		while ($row = mysql_fetch_array($select)){
			$result = mysql_query("select * from apply_act where user_id = '".$row['user_id']."' and act_id != '".$activity_id."'")or trigger_error(mysql_error(),E_USER_ERROR);
			while ($roow = mysql_fetch_array($result)){
				$info = mysql_query("select * from activity_info where id = '".$roow['act_id']."'")or trigger_error(mysql_error(),E_USER_ERROR);
				while ($detail = mysql_fetch_array($info)){
					$act_info[] = array('name' => $detail['name'],'responser' => $detail['responser'],'id' => $detail['id']);
				}
			}
		}
		return $act_info;
	}

	public function get_comment($activity_id){
		$comment_info=NULL;
		$comment = mysql_query("select * from act_comment where act_id = '".$activity_id."'")or trigger_error(mysql_error(),E_USER_ERROR);
		while ($comment_row = mysql_fetch_array($comment)){
			$comment_name = mysql_query("select * from user_info where id = '".$comment_row['user_id']."'")or trigger_error(mysql_error(),E_USER_ERROR);
			$comment_name1 = mysql_fetch_array($comment_name);
			$comment_info[] = array('id' => $comment_row['user_id'],'name' =>$comment_name1['name'],'time' => $comment_row['time'],'content'=>$comment_row['comment']);
		}
		return $comment_info;
	}
	public function attachment($act_id,$filename)//活动申请时候，上传附件
	{
		$query="UPDATE activity_info SET plan_url='".$filename."' WHERE id='".$act_id."'";
		if(!mysql_query($query,$this->root_conn))
		{
			die('Error: ' . mysql_error());
			return false; 
		}else
		{
			return true;
		}
	}
	public function upload_pic($act_id,$filename)//活动详细页面，上传照片
	{
		$query="INSERT INTO photos(act_id,pic_name,time) VALUES('".$act_id."','".$filename."','".date('Y-m-d H:i:s',time())."')";
		if(!mysql_query($query,$this->root_conn))
		{
			die('Error: ' . mysql_error());
			return false; 
		}
		$query="INSERT INTO 3d_data(time,url) VALUES('".date('Y-m-d H:i:s',time())."','".$filename."')";
		if(!mysql_query($query,$this->root_conn))
		{
			die('Error: ' . mysql_error());
			return false; 
		}
		return true;
	}
	public function create_new_act()
	{
		$hash=rand(1,100);
		$apply_date_hash=date('Y-m-d H:i:s',time())." ".$hash;
		$query="INSERT INTO activity_info(publisher,apply_date_hash) values('".$_SESSION[User::USER][User::FACULTY_ID]."','".$apply_date_hash."')";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$sql="SELECT id FROM activity_info WHERE publisher='".$_SESSION[User::USER][User::FACULTY_ID]."' and apply_date_hash='".$apply_date_hash."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result['id'];
	}
	public function update_act($id, $name,$place,$time_type,$attribution_type,$begin_time,$end_time,$deadline,$detail_time,$total_num,$need_audit,$responser,$responser_tel,$last_time,$activity_profile,$state,$publisher,$weekday_time,$other_language,$faculty_limit,$cet4,$cet6){
		$accepted_num		=0;
		$offer_num			=0;
		$begin_time=$begin_time." 00:00:0";
		$end_time=$end_time." 00:00:0";
		$update="
			UPDATE activity_info SET name='".$name."',place='".$place."',time_type='".$time_type."',attribution_type='".$attribution_type."',
			detail_time='".$detail_time."',total_num='".$total_num."',need_audit='".$need_audit."',
			responser='".$responser."',responser_tel='".$responser_tel."',last_time='".$last_time."',
			begin_time='".$begin_time."',end_time='".$end_time."',deadline='".$deadline."',state='".$state."',profile='".$activity_profile."',
			publisher='".$publisher."',weekday_time='".$weekday_time."',other_language='".$other_language."',
			faculty_limit='".$faculty_limit."',cet4='".$cet4."',cet6='".$cet6."'
			WHERE id='".$id."';
		";
		if (!mysql_query($update,$this->root_conn))
		{
		  	die('Error: ' . mysql_error());
		  	return 0;
		}
		return 1;
		
		/*
		$query="select name from activity_info where name='".$name."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		if(mysql_num_rows($select) == 0) {
			$insert = "
			insert into activity_info 
			( 	
				name,place,time_type,attribution_type,
				detail_time,total_num,need_audit,
				responser,responser_tel,last_time,
				begin_time,end_time,state,profile,publisher,weekday_time,plan_url
			) 
			values
			(
				'".$name."','".$place."','".$time_type."','".$attribution_type."',
				'".$detail_time."','".$total_num."','".$need_audit."',
				'".$responser."','".$responser_tel."','".$last_time."',
				'".$begin_time."','".$end_time."','".$state."','".$activity_profile."',
				'".$publisher."','".$weekday_time."','".$plan_url."'
					
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
		*/
	}

	public function fetch_one( $id ){
		$query="select * from activity_info where id='".$id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result;
	}
	public function participate($activity_id){
		$user_id=$_SESSION[USER::USER][USER::ID];
		$sql="SELECT need_audit FROM activity_info WHERE id='".$activity_id."'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		$status=1;
		if ($result['need_audit']=='false')
			$status='1';
		else
			$status='0';
		$query="INSERT INTO apply_act(user_id,act_id,state,time) VALUES ('".$user_id."','".$activity_id."','".$status."','".date('Y-m-d H:i:s',time())."')";
		if (!mysql_query($query,$this->root_conn))
		{ 
			die('Error'.mysql_error());
			return false;
		}
		else return true;
	}
	public function quit($activity_id){
		$user_id=$_SESSION[USER::USER][USER::ID];
		$query="DELETE FROM apply_act WHERE user_id='".$user_id."' and act_id='".$activity_id."'";
		if (!mysql_query($query,$this->root_conn))
		{
			die('Error'.mysql_error());
			return false;
		}
		else return true;
	}
	public function participate_state($activity_id){
		$user_id=$_SESSION[USER::USER][USER::ID];
		$query="select * from apply_act where user_id='".$user_id."' and act_id='".$activity_id."'";
		$select=mysql_query($query,$this->root_conn);
		if (mysql_num_rows($select)==1) return true;
		else 
		{
			return false;
		}
	}

	public function upload_picture(){
		if ((($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/jpg")|| ($_FILES["file"]["type"] == "image/png"))){
			if (file_exists("d:picture/" . $_FILES["file"]["name"])){
			  return $_FILES["file"]["name"] . " already exists. ";
			}
			else{
			  move_uploaded_file($_FILES["file"]["tmp_name"],
			  "d:/picture/" . $_FILES["file"]["name"]);
			  return "Stored in: " . "d:/picture/" . $_FILES["file"]["name"];
			}
		}
		else{
		  return "Invalid file";
		}
	}
	
	public function fetch_weekact($year,$month,$date){
		$str="$year"."-"."$month"."-"."$date";
		$date1=$date+7;
		$str1="$year"."-"."$month"."-"."$date1";
		$query="select * from activity_info where datediff(end_time,'".$str."')>0 and datediff(begin_time,'".$str1."')<0";
		//$query="select makedate('".$year."',)";
		$select=mysql_query($query, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	
	public function modify( $id/* 其他参数未设置 */ ){
		
	}

	public function delete( $id ){
	
	}
	
}
?>