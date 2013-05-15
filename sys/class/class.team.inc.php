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
	public function add_doc($act_id,$leader,$profile,$summary,$tel,$vol_time,$date)//增加一个活动档案
	{
		$systemtime=date('Y-m-d H:i:s',time());
		$query = "INSERT INTO act_doc(act_id,leader,profile,summary,tel,vol_time,date,system_time)VALUES('".$act_id."','".$leader."','".$profile."','".$summary."','".$tel."','".$vol_time."','".$date."','".$systemtime."')";
		if(!mysql_query($query,$this->root_conn)) 
		{
			die('Error: ' . mysql_error());
			return -1;
		}
		else
		{ 
			$sql="SELECT id FROM act_doc where act_id='".$act_id."' and system_time='".$systemtime."' and date='".$date."'";
			$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			$result=mysql_fetch_assoc($select);
			return $result['id'];
		}
	}
	public function delete_doc($doc_id)//删除一个活动档案
	{
		
		$query="DELETE FROM act_doc WHERE id='".$doc_id."'";
		if (!mysql_query($query,$this->root_conn))
		{
			die('Error: ' . mysql_error());
			return false;
		}else
		{
			return true;
		}
	}
	public function audit_vol($vol_list,$state,$reason)//审核
	{
		$vol = explode(" ", $vol_list);
		$s=new System();
		if ($state==1)//审核通过
		{
			foreach ($vol as $value)
			{
				$sql="UPDATE apply_team SET state='1',time='".date('Y-m-d H:i:s',time())."' where user_id='".$value."' and team_id='".$_SESSION[User::USER][User::FACULTY_ID]."'";
				if (!mysql_query($sql,$this->root_conn))
				{
					die('Error: ' . mysql_error());
					return false;
				}
			} 
		}else//审核未过，需要发送通知给个人
		{
			foreach($vol as $value)
			{
				$sql_update="UPDATE apply_team SET state='2',time='".date('Y-m-d H:i:s',time())."' where user_id='".$value."' and team_id='".$_SESSION[User::USER][User::FACULTY_ID]."'";
				if (!mysql_query($sql_update,$this->root_conn))
				{
					die('Error: ' . mysql_error());
					return false;
				}
				$title="您申请加入的".$_SESSION[User::USER][User::FACULTY]."组织，审核未通过";
				if (!$s->send_note($value,$title,$reason)) return false;//发送审核未过的理由
			}
		}
		return true;
	}
	public function import_vol_to_doc($doc_id,$vol_list)//导入人员进档案表，即添加活动记录表
	{
		$vol = explode(" ", $vol_list);
		foreach ($vol as $value)
		{
			$sql="SELECT * FROM act_record WHERE doc_id='".$doc_id."' and user_id='".$value."'";
			$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			$num_of_results=mysql_num_rows($select);
			if ($num_of_results==0)
			{
				$sql_insert="INSERT INTO act_record(doc_id,user_id) VALUES('".$doc_id."','".$value."')";
				if (!mysql_query($sql_insert,$this->root_conn))
				{
					die('Error: ' . mysql_error());
					return false;
				}
			}
		} 
		return true;
	}
	public function delete_vol_from_doc($doc_id,$vol_list)//将vol_list中的志愿者从doc中删除
	{
		$vol = explode(" ", $vol_list);
		foreach ($vol as $value)
		{
			$sql="SELECT * FROM act_record WHERE doc_id='".$doc_id."' and user_id='".$value."'";
			$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			$num_of_results=mysql_num_rows($select);
			if ($num_of_results!=0)
			{
				$sql_delete="DELETE FROM act_record WHERE doc_id='".$doc_id."' and user_id='".$value."'";
				if (!mysql_query($sql_delete,$this->root_conn))
				{
					die('Error: ' . mysql_error());
					return false;
				}
			}
		} 
		return true;
	}
	public function register_voltime($record_list)//为这些志愿者录入服务记录
	{
		foreach ($record_list as $record)
		{
			$sql="SELECT * FROM act_record WHERE doc_id='".$record['doc_id']."' and user_id='".$record['user_id']."'";
			$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			$num_of_results=mysql_num_rows($select);
			if ($num_of_results!=0)
			{
				$sql_update="UPDATE act_record SET base_time='".$record['base_time']."',honor_time='".$record['honor_time']."',comment='".$record['comment']."',performance_level='".$record['performance_level']."' WHERE doc_id='".$record['doc_id']."' and user_id='".$record['user_id']."'";
				if (!mysql_query($sql_update,$this->root_conn))
				{
					die('Error: ' . mysql_error());
					return false;
				}
				$sql="SELECT i.name FROM act_doc d,activity_info i WHERE d.act_id=i.id";
				$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
				$result=mysql_fetch_assoc($select);
				$s=new System();
				$time=$record['base_time']+$record['honor_time'];
				$s->send_note($record['user_id'],"恭喜您获得".$time."小时服务时间","您参与的".$result['name']."活动成功完成了，获得了".$record['base_time']."小时基础时间，".$record['honor_time']."小时荣誉时间。具体请查看您的服务记录。");
			}
			
		} 
		return true;
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