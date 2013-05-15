<?php

//活动类，可执行的操作包括：创建一个新活动，根据id查询一个活动
//根据(一个/一组)关键词查询一系列活动……
//修改某个活动
//删除某个活动
class Team extends DB_Connect {
	
	public function __construct($dbo=NULL){
		parent::__construct($dbo);
	}
	public function fetch_all_faculty()
	{
		$query="select id,name from team where layer = '0' ";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;		
	}
	public function fetch_team_name($id)
	{
		$query="select * from team where id='".$id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_array($select);
		return $result;
	}
	public function fetch_leader($id)
	{
		$query="select u.* from team t,user_info u where t.id='".$id."' and leader=u.id";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result;
	}
	public function fetch_all_doc_num($id)
	{
		$query="select ai.* from act_doc ad,activity_info ai where ad.act_id=ai.id and ai.publisher='".$id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$count=0;
		while ($row=mysql_fetch_assoc($select))
			$count ++;
		return $count;
	}
	public function fetch_now_doc_num($id)
	{
		$current_month=date("m");
		$current_year=date("Y");
		$query="select ai.* from act_doc ad,activity_info ai where ad.act_id=ai.id and ai.publisher='".$id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		if ($current_month >=2 && $current_month<=7){
			$count=0;
			while ($row=mysql_fetch_assoc($select)){
				$begin_strtimes = explode(" ",$row['begin_time']);
				$begin_timearray = explode("-",$begin_strtimes[0]);
				$begin_year = $begin_timearray[0];
				$begin_month = $begin_timearray[1];
				
				$end_strtimes = explode(" ",$row['begin_time']);
				$end_timearray = explode("-",$end_strtimes[0]);
				$end_year = $end_timearray[0];
				$end_month = $end_timearray[1];
				
				if ($begin_year==$current_year 
					&& $end_year==$current_year
					&& $begin_month>=2
					&& $end_month<=7
					)
					$count ++;
			}
			return $count;
		}
		if ($current_month >=9 && $current_month<=12){
			$count=0;
			while ($row=mysql_fetch_assoc($select)){
				$begin_strtimes = explode(" ",$row['begin_time']);
				$begin_timearray = explode("-",$begin_strtimes[0]);
				$begin_year = $begin_timearray[0];
				$begin_month = $begin_timearray[1];
				
				$end_strtimes = explode(" ",$row['begin_time']);
				$end_timearray = explode("-",$end_strtimes[0]);
				$end_year = $end_timearray[0];
				$end_month = $end_timearray[1];
				
				if ($begin_year==$current_year 
					&& $end_year==$current_year
					&& $begin_month>=9
					&& $end_month<=12
					)
					$count ++;
			}
			return $count;
		}
		return 0;
	}
	public function fetch_all_nation()
	{
		$query="select nation from nations order by id";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;		
	}
	public function fetch_act_all($faculty_id)//发起的活动
	{
		$query="select * from activity_info where publisher = '".$faculty_id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function fetch_act_doc_all($act_id)//该活动的所有活动档案
	{
		$query="select * from act_doc where act_id = '".$act_id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function fetch_act_doc_byid($doc_id)//某个具体活动档案的详细信息
	{
		$query="select * from act_doc where id = '".$doc_id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function modify_doc($doc_id,$leader,$profile,$summary,$tel,$vol_time)//修改这个活动档案
	{
		$query="UPDATE act_doc SET leader = '".$leader."',profile='".$profile."',summary='".$summary."',tel='".$tel."',vol_time='".$vol_time."' where id='".$doc_id."'";
		//$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		if (!mysql_query($query,$this->root_conn))
		{
			return false;
		}else
		{
			return true;
		}
	}
	public function add_doc($doc_id,$act_id,$leader,$profile,$summary,$tel,$vol_time)//增加一个活动档案
	{
		$query = "INSERT INTO act_doc(act_id,leader,profile,summary,tel,vol_time)VALUES('".$act_id."','".$leader."','".$profile."','".$summary."','".$tel."','".$vol_time."')";
		//$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		if(!mysql_query($query,$this->root_conn)) return false;
		else return true;
	}
	public function delete_doc($doc_id)//删除一个活动档案
	{
		
		$query="DELETE FROM act_doc WHERE id='".$doc_id."'";
		if (!mysql_query($query,$this->root_conn))
		{
			return false;
		}else
		{
			return true;
		}
	}
	public function fetch_apply_volunteer($act_id)//报名情况
	{
		$query="select * from apply_act,user_info where act_id = '".$act_id."' and apply_act.user_id=user_info.id";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	
	public function fetch_apply_doc_volunteer($doc_id)//报名情况
	{
		$query="select * from act_record,user_info where doc_id = '".$doc_id."' and act_record.user_id=user_info.id";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}


	
}
?>