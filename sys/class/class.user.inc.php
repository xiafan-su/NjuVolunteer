<?php

class User extends DB_Connect {

	const USER = "_user";
	const ID = "_user_id"; 
	const NAME = "_user_name";
	const PERM = "_user_permission";
	const PERM_ID = "_user_permission_id";
	const FACULTY = "_user_faculty";
	const FACULTY_ID = "_user_faculty_id";

	public function __construct(){
		parent::__construct();
	}
	public function fetch_person_info($id)//获取个人资料
	{
		$sql="SELECT * from user_info where id='".$id."' ";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$results=mysql_fetch_assoc($select);
		return $results;
	} 
	public function change_person_info($id,$name,$idcard_num,$gender,$email,$phone,$faculty,$birthday,$politics_status,$nation,$cloth_size,$dormitory,$cet4,$cet6,$language,$language_level,$drive,$medical,$other_skills)//修改个人资料
	{
		$sql="UPDATE user_info SET 
		
		name='".$name."',						gender='".$gender."',					idcard_num='".$idcard_num."',
		email='".$email."',						faculty='".$faculty."',
		birthday='".$birthday."',				phone='".$phone."',						
		politics_status='".$politics_status."',	nation='".$nation."',					cloth_size='".$cloth_size."',
		dormitory='".$dormitory."',				cet4='".$cet4."',						cet6='".$cet6."',
		language='".$language."',				language_level='".$language_level."',	drive='".$drive."',
		medical='".$medical."',					other_skills='".$other_skills."'
		
	    WHERE id='".$id."'";
		if (!mysql_query($sql, $this->root_conn) )
		{
			die('Error: ' . mysql_error());
			return false;
		}else
		{
			return true;
		}
	}
	public function fetch_person_act($id)//获取我参与的活动
	{
		$sql="SELECT ai.* from apply_act ac ,activity_info ai where ac.user_id='".$id."' and ac.act_id=ai.id";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		//$results=mysql_fetch_assoc($select);
		return $select;
	} 
	public function fetch_act_record($id)//获取我的活动记录
	{
		$sql="SELECT ad.date,ai.name,ai.id,ar.base_time,ar.honor_time,ar.performance_level,ar.comment from act_doc ad, act_record ar ,activity_info ai where ar.user_id='".$id."' and ad.id=ar.doc_id and ai.id=ad.act_id";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		//$results=mysql_fetch_assoc($select);
		return $select;
	} 
	public function fetch_notes($id,$state)//获取我的通知
	{
		if ($state==0)//取出未读通知
			$sql="SELECT * from note where recv_id='".$id."' and state='unread' and recv_type='0' order by time DESC";
		else//取出历史所有通知
			$sql="SELECT * FROM note where recv_id='".$id."' and recv_type='0' and state='read' order by time DESC";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		//$results=mysql_fetch_assoc($select);
		return $select;
	} 
	public function fetch_one_note($id)//获取具体的通知
	{
		$sql="SELECT t.name,n.title,n.content,n.time,n.state from note n,team t where n.id='".$id."' and t.id=n.sender_id";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	} 
	public function read_note($id)//已读通知
	{
		$sql="UPDATE note SET state='read' WHERE id='".$id."'";
		if (!mysql_query($sql,$this->root_conn))
		{
			 die('Error: ' . mysql_error());
		}
	} 
	public function login($id, $md5psd){

		//$sql="SELECT u.id,u.name,u.permission,f.faculty_name,f.faculty_id FROM user_info u,faculty f WHERE u.faculty = f.faculty_name AND u.id='".$id."' AND u.password='".$md5psd."'";
		$sql="SELECT * from login where id='".$id."' AND password='".$md5psd."'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$results=mysql_fetch_assoc($select);
		if( ! empty( $results ) ){
			$_SESSION[self::USER][self::ID]=$results['id'];
			$_SESSION[self::USER][self::PERM_ID]=$results['permission'];
			if ($results['permission']==2)
			{
				$sql="SELECT * from team where id='".$id."' ";
				$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
				$results=mysql_fetch_assoc($select);
				$_SESSION[self::USER][self::NAME]=$results['name'];
				$_SESSION[self::USER][self::FACULTY]=$results['name'];
				$_SESSION[self::USER][self::FACULTY_ID]=$results['id'];
			}else if ($results['permission']==1)
			{
				$sql="SELECT * from user_info where id='".$id."' ";
				$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
				$results=mysql_fetch_assoc($select);
				$_SESSION[self::USER][self::NAME]=$results['name'];
				$_SESSION[self::USER][self::FACULTY]=$results['faculty'];
			}else if ($results['permission']==3)
			{
				$_SESSION[self::USER][self::NAME]="超级管理员";
			}
			//$_SESSION[self::USER][self::FACULTY_ID]=$results['faculty_id'];
			if( $_SESSION[self::USER][self::PERM_ID] == 3 ) {
				//$_SESSION[self::USER][self::PERM] = "A";
				return 3;
			} else if( $_SESSION[self::USER][self::PERM_ID] == 1 ) {
				//_SESSION[self::USER][self::PERM_ID] = 2;
				return 1;
			} else if( $_SESSION[self::USER][self::PERM_ID] == 2 ) {
				//$_SESSION[self::USER][self::PERM_ID] = 3;
				return 2;
			} else {
				return 0;
			}
		} else {
			return 0;
		}
		
	}

}

?>