<?php

//活动类，可执行的操作包括：创建一个新活动，根据id查询一个活动
//根据(一个/一组)关键词查询一系列活动……
//修改某个活动
//删除某个活动
class Admin extends DB_Connect {
	
	public function __construct($dbo=NULL){
		parent::__construct($dbo);
	}
	
	public function audit_pass($act_id,$team_id,$act_name)//修改这个活动档案
	{
		$act_id=htmlspecialchars($act_id,ENT_QUOTES);
		$team_id=htmlspecialchars($team_id,ENT_QUOTES);
		$act_name=htmlspecialchars($act_name,ENT_QUOTES);
		$query="UPDATE activity_info SET state = 'audited' where id='".$act_id."'";
		if (!mysql_query($query,$this->root_conn))
		{
			return false;
		}else
		{
			
			$insertitem="insert into note(sender_id,recv_type,recv_id,title,content,time) values ('admin','0','".$team_id."','活动申请通过','您申请的活动  ".$act_name." 已经通过审核,恭喜！',now());";
			
			if (!mysql_query($insertitem,$this->root_conn))
		    {
			// die('Error: ' . mysql_error());
			
		     }
			return true;
		}
	}
		public function audit_refused($act_id,$team_id,$act_name)//修改这个活动档案
	{
		$act_id=htmlspecialchars($act_id,ENT_QUOTES);
		$team_id=htmlspecialchars($team_id,ENT_QUOTES);
		$act_name=htmlspecialchars($act_name,ENT_QUOTES);
		$query="UPDATE activity_info SET state = 'editing' where id='".$act_id."'";
		if (!mysql_query($query,$this->root_conn))
		{
			return false;
		}else
		{
				$insertitem="insert into note(sender_id,recv_type,recv_id,title,content,time) values ('admin','0','".$team_id."','活动申请被拒','您申请的活动  ".$act_name." 没有通过审核，退回重审！',now());";
			
			if (!mysql_query($insertitem,$this->root_conn))
		    {
			// die('Error: ' . mysql_error());
			
		     }
			return true;
		}
	}
	public function add_team($tid,$tname,$pwd,$temail,$tres,$tres_tel,$tea,$tea_tel,$tu)
	{
		$tid=htmlspecialchars($tid,ENT_QUOTES);
		$tname=htmlspecialchars($tname,ENT_QUOTES);
		$pwd=htmlspecialchars($pwd,ENT_QUOTES);
		$temail=htmlspecialchars($temail,ENT_QUOTES);
		$tres=htmlspecialchars($tres,ENT_QUOTES);
		$tres_tel=htmlspecialchars($tres_tel,ENT_QUOTES);
		$tea=htmlspecialchars($tea,ENT_QUOTES);
		$tea_tel=htmlspecialchars($tea_tel,ENT_QUOTES);
		$tu=htmlspecialchars($tu,ENT_QUOTES);
		$insert_login="insert into login(id,password,permission)  values ('".$tid."', '".$pwd."',2);";
		if (!mysql_query($insert_login,$this->root_conn))
		{
			 //die('Error: ' . mysql_error());
			return false;
		}
		$insert_team="insert into team(id,name,email,leader,layer,leader_phone,adviser,adviser_tel,attached_institutions) values ('".$tid."','".$tname."','".$temail."','".$tres."','1','".$tres_tel."','".$tea."','".$tea_tel."' ,'".$tu."'    );";
		//echo $insert_team;
			if (!mysql_query($insert_team,$this->root_conn))
			{
			   //die('Error: ' . mysql_error());
			   			$del="delete from login  where (id='".$tid."');";
				mysql_query($del,$this->root_conn);
				return false;
			}
		
		

		return true;
	}
	public function change_pwd($tid,$pwd){
		$tid=htmlspecialchars($tid,ENT_QUOTES);
		$pwd=htmlspecialchars($pwd,ENT_QUOTES);
		$change_pwd="update login set password='".$pwd."'  where id='".$tid."';";
		//echo $pwd;
		if (empty($pwd)) return false;
		if (!mysql_query($change_pwd,$this->root_conn))
			{
			   //die('Error: ' . mysql_error());
			   
				return false;
			}
		return true;
		
	}
	public function fetch_all_team(){
			$query="select * from team where layer='0' or layer='1'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
		
		
		
	}
	public function add_vol_time($sid,$did,$bt,$ht,$re,$lv){
		$sid=htmlspecialchars($sid,ENT_QUOTES);
		$did=htmlspecialchars($did,ENT_QUOTES);
		$bt=htmlspecialchars($bt,ENT_QUOTES);
		$ht=htmlspecialchars($ht,ENT_QUOTES);
		$re=htmlspecialchars($re,ENT_QUOTES);
		$lv=htmlspecialchars($lv,ENT_QUOTES);
		$insert_time="insert into act_record(doc_id,user_id,base_time,honor_time,comment,performance_level)  values ('".$did."', '".$sid."', '".$bt."', '".$ht."','".$re."',  '".$lv."'  );";
			if (!mysql_query($insert_time,$this->root_conn))
			{
			 //  die('Error: ' . mysql_error());
			   
				return false;
			}
		return true;	
			
	}
	
	

	
	public function get_team_name(){
			$query="select * from team  where id<>'system' order by id";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function get_team_people($tid){
		$tid=htmlspecialchars($tid,ENT_QUOTES);
			$query="select count(*) as people from apply_team where state='1' and   team_id='".$tid."';";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}	
	
	public function get_team_act($tid){
		$tid=htmlspecialchars($tid,ENT_QUOTES);
			$query="select count(*) as act from activity_info where (state='audited' or state='end') and publisher='".$tid."';";
			//echo $query;
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}	
	
	public function get_act_people($act_id){
		$act_id=htmlspecialchars($act_id,ENT_QUOTES);
		$query="select count(*) as ap from act_record where doc_id in(select id from act_doc where act_id in(
select id from activity_info where publisher='".$act_id."'));";
	
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;

	}
	public function get_act_base_time($act_id){
		$act_id=htmlspecialchars($act_id,ENT_QUOTES);
		$query="select sum(base_time) as tp from act_record where doc_id in(select id from act_doc where act_id in(
select id from activity_info where publisher='".$act_id."'));";
	
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;

	}	
	public function get_act_honor_time($act_id){
		$act_id=htmlspecialchars($act_id,ENT_QUOTES);
		$query="select sum(honor_time) as tp from act_record where doc_id in(select id from act_doc where act_id in(
select id from activity_info where publisher='".$act_id."'));";
	
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;

	}	
	
	public function fetch_team_all(){
		$query="select * from team";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function fetch_act_all(){
		$query="select * from activity_info";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}	
	public function fetch_people_all(){
		$query="select * from user_info";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	/*
	public function get_team_actpeople(){
			$query=" ";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}	*/	
	
}
?>