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
	public function change_sign($sign)
	{
		$sign=$sign;
		if (mb_strlen($sign)>80)
			return "签名字数不超过80个字";
		$sql="UPDATE user_info SET signature='".htmlspecialchars($sign)."' WHERE id='".$_SESSION[USER::USER][USER::ID]."'";
		if (!mysql_query($sql,$this->root_conn))
		{
			die('ERROR:'.mysql_error());
			return "出错了";
		}
		return 1;
	}
	public function fetch_person_info($id)//获取个人资料
	{
		$id=htmlspecialchars($id);
		$sql="SELECT * from user_info where id='".$id."' ";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$results=mysql_fetch_assoc($select);
		return $results;
	} 
	
	public function fetch_my_team($id)//获取个人的团队
	{
		$id=htmlspecialchars($id);
		$sql="SELECT team.id as TID,team.name as TNAME from apply_team,team where apply_team.state='1' and  team.id=apply_team.team_id         and   user_id='".$id."' ";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	} 	
	
	public function fetch_my_follow($id)//获取关注的团队
	{
		$id=htmlspecialchars($id);
		$sql="SELECT team.id as TID,team.name as TNAME from follow,team where team.id=follow.team_id  and   follow.user_id='".$id."' ";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	} 	
	
	public function fetch_my_act($id)//获取参加的活动
	{
		$id=htmlspecialchars($id);
		$sql="select activity_info.id as AID,activity_info.name as name,sum(act_record.base_time) as base_time,sum(act_record.honor_time) as honor_time from act_doc,act_record,activity_info  where act_doc.act_id=activity_info.id and act_record.doc_id=act_doc.id  and act_record.user_id='".$id."' and act_record.final='true' ";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	} 		
	
	
	
	
	public function change_person_info($id,$name,$idcard_num,$gender,$email,$phone,$faculty,$grade,$birthday,$politics_status,$nation,$cloth_size,$dormitory,$cet4,$cet6,$language,$language_level,$drive,$medical,$other_skills)//修改个人资料
	{
		$t=rand(1,200);
		if ($gender=="男")
		{
			$photo="boy/".$t.".jpg";
		}else
		{
			$photo="girl/".($t%2).".jpg";
		}
		$sql="UPDATE user_info SET 
		
		name='".htmlspecialchars($name,ENT_QUOTES)."',						gender='".htmlspecialchars($gender,ENT_QUOTES)."',					idcard_num='".htmlspecialchars($idcard_num,ENT_QUOTES)."',
		email='".htmlspecialchars($email,ENT_QUOTES)."',						faculty='".htmlspecialchars($faculty,ENT_QUOTES)."',			grade='".htmlspecialchars($grade,ENT_QUOTES)."',
		birthday='".htmlspecialchars($birthday,ENT_QUOTES)."',				phone='".htmlspecialchars($phone,ENT_QUOTES)."',						
		politics_status='".htmlspecialchars($politics_status,ENT_QUOTES)."',	nation='".htmlspecialchars($nation,ENT_QUOTES)."',					cloth_size='".htmlspecialchars($cloth_size,ENT_QUOTES)."',
		dormitory='".htmlspecialchars($dormitory,ENT_QUOTES)."',				cet4='".htmlspecialchars($cet4,ENT_QUOTES)."',						cet6='".htmlspecialchars($cet6,ENT_QUOTES)."',
		language='".htmlspecialchars($language,ENT_QUOTES)."',				language_level='".htmlspecialchars($language_level,ENT_QUOTES)."',	drive='".htmlspecialchars($drive,ENT_QUOTES)."',
		medical='".htmlspecialchars($medical,ENT_QUOTES)."',					other_skills='".htmlspecialchars($other_skills,ENT_QUOTES)."',
		photo='".$photo."'
	    WHERE id='".htmlspecialchars($id)."'";
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
		$id=htmlspecialchars($id,ENT_QUOTES);
		$sql="SELECT ai.* from apply_act ac ,activity_info ai where ac.user_id='".$id."' and ac.act_id=ai.id";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		//$results=mysql_fetch_assoc($select);
		return $select;
	} 
	public function fetch_act_record($id)//获取我的活动记录
	{
		$id=htmlspecialchars($id,ENT_QUOTES);
		$sql="SELECT ad.date,ai.name,ai.id,ar.base_time,ar.honor_time,ar.performance_level,ar.comment from act_doc ad, act_record ar ,activity_info ai where ar.user_id='".$id."' and ad.id=ar.doc_id and ai.id=ad.act_id";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		//$results=mysql_fetch_assoc($select);
		return $select;
	} 
	public function fetch_notes($id,$state)//获取我的通知
	{
		$id=htmlspecialchars($id,ENT_QUOTES);
		$state=htmlspecialchars($state,ENT_QUOTES);
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
		$id=htmlspecialchars($id,ENT_QUOTES);
		$sql="SELECT t.name,n.title,n.content,n.time,n.state from note n,team t where n.id='".$id."' and t.id=n.sender_id";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	} 
	public function read_note($id)//已读通知
	{
		$id=htmlspecialchars($id,ENT_QUOTES);
		$sql="UPDATE note SET state='read' WHERE id='".$id."'";
		if (!mysql_query($sql,$this->root_conn))
		{
			 die('Error: ' . mysql_error());
		}
	} 
	public function login($id, $md5psd){
		$id=htmlspecialchars($id,ENT_QUOTES);
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
	public function follow_state($team_id)//关注一个团队的状态
	{
		$team_id=htmlspecialchars($team_id);
		if (!isset($_SESSION[USER::USER][USER::ID]))
			return false;
		$sql="SELECT * FROM follow WHERE user_id='".$_SESSION[USER::USER][USER::ID]."' and team_id='".$team_id."'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$num_of_results=mysql_num_rows($select);
		if ($num_of_results==0) return false;
		else return true;
	}
	public function follow($team_id)//关注一个团队
	{
		$team_id=htmlspecialchars($team_id);
		if (!isset($_SESSION[USER::USER][USER::ID]))
			return -1;//请先登录
		if (isset($_SESSION[USER::USER][USER::PERM_ID]) and ($_SESSION[USER::USER][USER::PERM_ID]!=1))
			return -2;//没有权限
		if (!($this->follow_state($team_id)))
		{
			$sql="INSERT INTO follow(user_id,team_id,time)VALUES('".$_SESSION[USER::USER][USER::ID]."','".$team_id."','".date('Y-m-d H:i:s',time())."')";
			$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
			return 1;//关注成功
		}else
		{
			$sql="DELETE FROM follow WHERE user_id='".$_SESSION[USER::USER][USER::ID]."' and team_id='".$team_id."'";
			$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
			return 2;//取消关注成功
		}
		return 0;//失败
	}
	public function apply_team($team_id)
	{
		$team_id=htmlspecialchars($team_id);
		if (!isset($_SESSION[USER::USER][USER::ID]))
			return -1;//请先登录
		else $user_id=$_SESSION[USER::USER][USER::ID];
		if (isset($_SESSION[USER::USER][USER::PERM_ID]) and ($_SESSION[USER::USER][USER::PERM_ID]!=1))
			return -2;//没有权限
		$sql="SELECT t.id FROM apply_team a,team t WHERE a.user_id='".$user_id."' and a.team_id=t.id and t.layer='1' and a.state<>'2'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$num=mysql_num_rows($select);
		$result=mysql_fetch_assoc($select);
		if ($num==0)
		{
			$sql="INSERT INTO apply_team(user_id,team_id,state,time)
			VALUES('".$user_id."','".$team_id."','0','".date("Y-m-d H:i:s",time())."')
			 ";
			 $select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
			 return 1;//申请成功，等待团队管理员审核
		}else
		{
			if ($team_id==$result['id'])
			{
				$sql="DELETE FROM apply_team WHERE user_id='".$user_id."' and team_id='".$team_id."'";
				if(mysql_query($sql, $this->root_conn))
					return 2;//退出成功
				else
				{
					die('ERROR:'.mysql_error());
					return 0;
				}
			}else return -3;//您申请的非院系团队正在审核，在此期间不能加入其它团队
		}
	}

	public function apply_state($team_id)
	{
		$team_id=htmlspecialchars($team_id);
		if (!isset($_SESSION[USER::USER][USER::ID]))
			return false;
		$sql="SELECT * FROM apply_team WHERE user_id='".$_SESSION[USER::USER][USER::ID]."' and team_id='".$team_id."'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$results=mysql_num_rows($select);
		if ($results==0) return false;
		return true;
	}
	public function a_member_of($act_id)
	{
		$sql="SELECT * FROM act_record r,act_doc d WHERE r.doc_id=d.id and d.act_id='".$act_id."' and r.final='true'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_num_rows($select);
		if ($result==0) return false;
		else return true;
	}
}

?>