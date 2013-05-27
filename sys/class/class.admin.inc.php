<?php

//活动类，可执行的操作包括：创建一个新活动，根据id查询一个活动
//根据(一个/一组)关键词查询一系列活动……
//修改某个活动
//删除某个活动
class Admin extends DB_Connect {
	
	public function __construct($dbo=NULL){
		parent::__construct($dbo);
	}
	
	public function get_all_going_act(){

		$query="select * from activity_info where name is not NULL and  state='audited'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;

	}
	
	
	
		public function get_all_done_act(){

		$query="select * from activity_info where  name is not NULL and  state='end'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;

	}
	
	public function get_team_of_act($tid){
		$query="select team.name as tname from team where team.id='".$tid."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	
	
	public function audit_pass($act_id,$team_id,$act_name)//修改这个活动档案
	{
		$act_id=htmlspecialchars($act_id);
		$team_id=htmlspecialchars($team_id);
		$act_name=htmlspecialchars($act_name);
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
	
	
public function audit_end($act_id,$team_id,$act_name)//修改这个活动档案
	{
		$act_id=htmlspecialchars($act_id);
		$team_id=htmlspecialchars($team_id);
		$act_name=htmlspecialchars($act_name);
		$query="UPDATE activity_info SET state = 'end' where id='".$act_id."'";
		if (!mysql_query($query,$this->root_conn))
		{
			return false;
		}else
		{
			
			$insertitem="insert into note(sender_id,recv_type,recv_id,title,content,time) values ('admin','0','".$team_id."','活动被结束','您举办的活动  ".$act_name." 已经被管理员结束,具体原因请向管理员咨询！',now());";
			
			if (!mysql_query($insertitem,$this->root_conn))
		    {
			// die('Error: ' . mysql_error());
			
		     }

			return true;
		}
	}	
	
	public function newid($tid){
		$query="select count(*) as total from team where id='".$tid."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$rs = mysql_fetch_assoc($select);
		if ($rs['total']==0) return 1;else return 0;
	}
	
	
		public function userid($uid){
		$query="select * from user_info where id='".$uid."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		if ($rs = mysql_fetch_assoc($select)){
			return $rs['name'];
		}
		else{
			return 0;
		}
		
	}
	
	
	
	
	
	
		public function audit_refused($act_id,$team_id,$act_name)//修改这个活动档案
	{
		$act_id=htmlspecialchars($act_id);
		$team_id=htmlspecialchars($team_id);
		$act_name=htmlspecialchars($act_name);
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
	public function add_team($tid,$tname,$pwd,$temail,$tres,$tres_tel,$tea,$tea_tel,$tu,$tl)
	{
		$tid=htmlspecialchars($tid);
		$tname=htmlspecialchars($tname);
		$pwd=htmlspecialchars($pwd);
		$temail=htmlspecialchars($temail);
		$tres=htmlspecialchars($tres);
		$tres_tel=htmlspecialchars($tres_tel);
		$tea=htmlspecialchars($tea);
		$tea_tel=htmlspecialchars($tea_tel);
		$tu=htmlspecialchars($tu);
		$tl=htmlspecialchars($tl);
		$insert_login="insert into login(id,password,permission)  values ('".$tid."', '".$pwd."',2);";
		if (!mysql_query($insert_login,$this->root_conn))
		{
			 die('Error: ' . mysql_error());
			return false;
		}
		$insert_team="insert into team(id,name,email,leader,leader_phone,adviser,adviser_tel,attached_institutions,layer) values ('".$tid."','".$tname."','".$temail."','".$tres."','".$tres_tel."','".$tea."','".$tea_tel."' ,'".$tu."','".$tl."'    );";
		//echo $insert_team;
			if (!mysql_query($insert_team,$this->root_conn))
			{
			  die('Error: ' . mysql_error());
			   			$del="delete from login  where (id='".$tid."');";
				mysql_query($del,$this->root_conn);
				return false;
			}
		
		

		return true;
	}
	public function change_pwd($tid,$pwd){
		$tid=htmlspecialchars($tid);
		$pwd=htmlspecialchars($pwd);
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
	public function add_vol_time($sid,$did,$bt,$ht,$re,$lv,$tl,$gm){
		$sid=htmlspecialchars($sid);
		$did=htmlspecialchars($did);
		$bt=htmlspecialchars($bt);
		$ht=htmlspecialchars($ht);
		$re=htmlspecialchars($re);
		$lv=htmlspecialchars($lv);
		$tl=htmlspecialchars($tl);
		$gm=htmlspecialchars($gm);
		
		$insert_time="insert into act_record(doc_id,user_id,base_time,honor_time,comment,performance_level,honor_leader,honor_excellent)  values ('".$did."', '".$sid."', '".$bt."', '".$ht."','".$re."',  '".$lv."',  '".$tl."' ,  '".$gm."' );";
			if (!mysql_query($insert_time,$this->root_conn))
			{
			//   die('Error: ' . mysql_error());
			   
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
		$tid=htmlspecialchars($tid);
			$query="select count(*) as people from apply_team where state='1' and   team_id='".$tid."';";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}	
	
	public function get_team_act($tid){
		$tid=htmlspecialchars($tid);
			$query="select count(*) as act from activity_info where name is not NULL and (state='audited' or state='end') and publisher='".$tid."';";
			//echo $query;
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}	
	
	public function get_act_people($act_id){
		$act_id=htmlspecialchars($act_id);
		$query="select count(*) as ap from act_record where doc_id in(select id from act_doc where act_id in(
select id from activity_info where publisher='".$act_id."'));";
	
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;

	}
	public function get_act_base_time($act_id){
		$act_id=htmlspecialchars($act_id);
		$query="select sum(base_time) as tp from act_record where doc_id in(select id from act_doc where act_id in(
select id from activity_info where publisher='".$act_id."'));";
	
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;

	}	
	public function get_act_honor_time($act_id){
		$act_id=htmlspecialchars($act_id);
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
		$query="select * from activity_info where name is not NULL";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}	
	
	public function fetch_act_all_with_doc(){
		$query="select * from activity_info where name is not NULL and id in (select act_id from act_doc);";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}	
	public function fetch_people_all(){
		$query="select * from user_info";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function fetch_act_doc_all($aid){
		$aid=htmlspecialchars($aid);
		$query="select * from act_doc where act_id='".$aid."';";
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