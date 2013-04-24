<?php

//活动类，可执行的操作包括：创建一个新活动，根据id查询一个活动
//根据(一个/一组)关键词查询一系列活动……
//修改某个活动
//删除某个活动
class Team extends DB_Connect {
	
	public function __construct($dbo=NULL){
		parent::__construct($dbo);
	}
	public function fetch_act_all($fauculty_id)//发起的活动
	{
		$query="select * from activity_info where publisher = '".$fauculty_id."'";
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
		$query="select * from participation,user_info where activity_id = '".$act_id."' and participation.user_id=user_info.id";
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