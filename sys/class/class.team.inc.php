<?php

//活动类，可执行的操作包括：创建一个新活动，根据id查询一个活动
//根据(一个/一组)关键词查询一系列活动……
//修改某个活动
//删除某个活动
class Team extends DB_Connect {
	
	public function __construct($dbo=NULL){
		parent::__construct($dbo);
	}
	public function fetch_all_faculty()//获取所有院系
	{
		$query="select id,attached_institutions as name from team where layer = '0' ";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;		
	}
	public function fetch_all_team()//获取所有团队包括admin,不包括system
	{
		$query="select id,name from team where id<>'system' order by convert(name using gb2312) asc";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;		
	}
	public function fetch_team_name($id)//获取院系的详细信息
	{
		$id=htmlspecialchars($id,ENT_QUOTES);
		$query="select * from team where id='".$id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_array($select);
		return $result;
	}
	public function fetch_department_info()//取出所有的院系团队
	{
		$query="select * from team where layer = '0'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$team_info=NULL;
		while ($result=mysql_fetch_assoc($select))
		{
			$query_num="select count(*) AS num from apply_team where team_id='".$result['id']."' and state= '1'";
			$num=mysql_query($query_num,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			if($result['logo']==NULL) $result['logo']="NJU_default.png";
			$team_info[]=array("name"=>$result['name'],"count"=>$num['num'],"slogan"=>$result['slogan'],"id"=>$result['id'],"logo"=>$result['logo'],"attached_institutions"=>$result['attached_institutions']);
			//echo $result['name']."<br />".count($team_info)."<br />";
		}
		return $team_info;
	}
	
	public function fetch_other_info()//取出所有的其他团队
	{
		$query="select * from team where layer = '1'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$team_info=NULL;
		while ($result=mysql_fetch_assoc($select))
		{
			$query_num="select count(*) AS num from apply_team where team_id='".$result['id']."' and state=1";
			$num=mysql_query($query_num,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			if($result['logo']==NULL) $result['logo']="NJU_default.png";
			$team_info[]=array("name"=>$result['name'],"count"=>$num['num'],"slogan"=>$result['slogan'],"id"=>$result['id'],"logo"=>$result['logo']);
		}
		return $team_info;
	}
	public function fetch_leader($id)//获取团队的leader信息
	{
		$id=htmlspecialchars($id,ENT_QUOTES);
		$query="select u.* from team t,user_info u where t.id='".$id."' and leader=u.id";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result;
	}
	public function fetch_all_doc_num($id)//取出某个活动的全部活动档案
	{
		$id=htmlspecialchars($id,ENT_QUOTES);
		$query="select ai.* from act_doc ad,activity_info ai where ad.act_id=ai.id and ai.publisher='".$id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$row=mysql_num_rows($select);
		return $row;
	}
	public function fetch_now_doc_num($id)//取出我本学期的活动档案次数，即举办活动的次数
	{
		$id=htmlspecialchars($id,ENT_QUOTES);
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
	public function fetch_act_all($faculty_id,$state)//发起/完成的活动,state为1表示发起,0表示完成,2表示审核通过的活动
	{
		$faculty_id=htmlspecialchars($faculty_id,ENT_QUOTES);
		$state=htmlspecialchars($state,ENT_QUOTES);
		if ($state==0)
		{
			$query="select * from activity_info where publisher = '".$faculty_id."' and name<>'NULL' and state='end'";
			$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			return $select;
		}else
		if ($state==1)
		{
			$query="select * from activity_info where publisher = '".$faculty_id."' and name<>'NULL' and state<>'end'";
			$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			return $select;			
		}else
		if ($state==2)
		{
			$query="select * from activity_info where publisher = '".$faculty_id."' and name<>'NULL' and state='audited'";
			$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			return $select;				
		}
	}
	public function change_act_state($act_id,$state)//state即为数据库中的值，audited,auditing,editing,end
	{
		$act_id=htmlspecialchars($act_id,ENT_QUOTES);
		$state=htmlspecialchars($state,ENT_QUOTES);
		$query="UPDATE activity_info SET state='".$state."' WHERE id = '".$act_id."'";
		if(!mysql_query($query,$this->root_conn))
		{
			die('Error: ' . mysql_error());
			return false;
		}else
		return true;	
	}
	public function fetch_act_doc_all($act_id)//该活动的所有活动档案
	{
		$act_id=htmlspecialchars($act_id,ENT_QUOTES);
		$query="select * from act_doc where act_id = '".$act_id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function fetch_act_doc_byid($doc_id)//某个具体活动档案的详细信息
	{
		$doc_id=htmlspecialchars($doc_id,ENT_QUOTES);
		$query="select * from act_doc where id = '".$doc_id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function modify_doc($doc_id,$leader,$profile,$summary,$tel,$vol_time,$date)//修改这个活动档案
	{
		$doc_id=htmlspecialchars($doc_id,ENT_QUOTES);
		$leader=htmlspecialchars($leader,ENT_QUOTES);
		$profile=htmlspecialchars($profile,ENT_QUOTES);
		$summary=htmlspecialchars($summary,ENT_QUOTES);
		$tel=htmlspecialchars($tel,ENT_QUOTES);
		$vol_time=htmlspecialchars($vol_time,ENT_QUOTES);
		$date=htmlspecialchars($date,ENT_QUOTES);
		$query="UPDATE act_doc SET leader = '".$leader."',profile='".$profile."',summary='".$summary."',tel='".$tel."',vol_time='".$vol_time."',date='".$date."' where id='".$doc_id."'";
		//$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		if (!mysql_query($query,$this->root_conn))
		{
			die('Error: ' . mysql_error());
			return false;
		}else
		{
			return true;
		}
	}
	public function add_doc($act_id,$leader,$profile,$summary,$tel,$vol_time,$date)//增加一个活动档案
	{
		$act_id=htmlspecialchars($act_id,ENT_QUOTES);
		$leader=htmlspecialchars($leader,ENT_QUOTES);
		$profile=htmlspecialchars($profile,ENT_QUOTES);
		$summary=htmlspecialchars($summary,ENT_QUOTES);
		$tel=htmlspecialchars($tel,ENT_QUOTES);
		$vol_time=htmlspecialchars($vol_time);
		$date=htmlspecialchars($date,ENT_QUOTES);
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
		$doc_id=htmlspecialchars($doc_id,ENT_QUOTES);
		$sql="SELECT * FROM act_record WHERE doc_id='".$doc_id."' and final='true'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$num_of_results=mysql_num_rows($select);
		if ($num_of_results>0)
		{
			return false;
		}else
		{
			$sql="DELETE FROM act_record WHERE doc_id='".$doc_id."'";
			$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
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
	}
	public function audit_vol($vol_list,$state,$reason)//审核报名该组织的志愿者
	{
		$state=htmlspecialchars($state,ENT_QUOTES);
		$reason=htmlspecialchars($reason,ENT_QUOTES);
		$vol = explode(" ", $vol_list);
		$s=new System();
		if ($state==1)//审核通过
		{
			foreach ($vol as $value)
			{
				if ($value!=NULL)
				{
					$value=htmlspecialchars($value,ENT_QUOTES);
					$sql="UPDATE apply_team SET state='1',time='".date('Y-m-d H:i:s',time())."' where user_id='".$value."' and team_id='".$_SESSION[User::USER][User::FACULTY_ID]."'";
					if (!mysql_query($sql,$this->root_conn))
					{
						die('Error: ' . mysql_error());
						return false;
					}
					$title="恭喜您的资料通过了".$_SESSION[User::USER][User::FACULTY]."组织的审核";
					$reason="加入组织后，您就可以去活动中心参加活动了。";
					if (!$s->send_note($value,$title,$reason)) return false;//发送审核未过的理由
				}
			} 
		}else//审核未过，需要发送通知给个人
		{
			foreach($vol as $value)
			{
				if ($value!=NULL)
				{
					$value=htmlspecialchars($value,ENT_QUOTES);
					$sql_update="UPDATE apply_team SET state='2',time='".date('Y-m-d H:i:s',time())."' where user_id='".$value."' and team_id='".$_SESSION[User::USER][User::FACULTY_ID]."'";
					if (!mysql_query($sql_update,$this->root_conn))
					{
						die('Error: ' . mysql_error());
						return false;
					}
					$title="您的资料未通过".$_SESSION[User::USER][User::FACULTY]."的审核";
					if (!$s->send_note($value,$title,$reason)) return false;//发送审核未过的理由
				}
			}
		}
		return true;
	}
	public function audit_act_vol($act_id,$vol_list,$state,$reason)//审核报名活动的志愿者
	{
		$act_id=htmlspecialchars($act_id,ENT_QUOTES);
		$state=htmlspecialchars($state,ENT_QUOTES);
		$reason=htmlspecialchars($reason,ENT_QUOTES);			
		$vol = explode(" ", $vol_list);
		$s=new System();
		$sql="SELECT name FROM activity_info where id='".$act_id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$act_name=mysql_fetch_assoc($select);
		if ($state==1)//审核通过
		{
			foreach ($vol as $value)
			{
				if ($value!=NULL)
				{
					$value=htmlspecialchars($value,ENT_QUOTES);
					$sql="UPDATE apply_act SET state='1',time='".date('Y-m-d H:i:s',time())."' where user_id='".$value."' and act_id='".$act_id."'";
					if (!mysql_query($sql,$this->root_conn))
					{
						die('Error: ' . mysql_error());
						return false;
					}
	
					$title="恭喜您报名参加的".$act_name['name']."活动，审核通过";
					$reason="具体信息查看您报名的活动。";
					if (!$s->send_note($value,$title,$reason)) return false;//发送审核未过的理由
				}
			} 
		}else//审核未过，需要发送通知给个人
		{
			foreach($vol as $value)
			{
				if ($value!=NULL)
				{
					$value=htmlspecialchars($value,ENT_QUOTES);
					$sql_update="UPDATE apply_act SET state='2',time='".date('Y-m-d H:i:s',time())."' where user_id='".$value."' and act_id='".$act_id."'";
					if (!mysql_query($sql_update,$this->root_conn))
					{
						die('Error: ' . mysql_error());
						return false;
					}
					$title="您报名参加的".$act_name['name']."活动，未通过管理员的审核";
					if (!$s->send_note($value,$title,$reason)) return false;//发送审核未过的理由
				}
			}
		}
		return true;
	}
	public function import_vol_to_doc($doc_id,$vol_list)//导入人员进档案表，即添加活动记录表
	{

		$vol = explode(" ", $vol_list);
		foreach ($vol as $value)
		{
			if ($value!=NULL)
			{
				$value=htmlspecialchars($value,ENT_QUOTES);
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
		} 
		return true;
	}
	public function delete_vol_from_doc($doc_id,$vol_list)//将vol_list中的志愿者从doc中删除
	{
		$vol_list=htmlspecialchars($vol_list);
		$vol = explode(" ", $vol_list);
		foreach ($vol as $value)
		{
			if ($value!=NULL)
			{
				$value=htmlspecialchars($value,ENT_QUOTES);
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
		} 
		return true;
	}
	public function edit_voltime($doc_id,$record_list)//修改对应服务记录的时间，但不提交给系统，不修改个人信息，不进行通知和公示
	{
		//$record_list=htmlspecialchars($record_list);
		foreach ($record_list as $record)
		{
			$record['user_id']=htmlspecialchars($record['user_id'],ENT_QUOTES);
			$sql="SELECT * FROM act_record WHERE doc_id='".$doc_id."' and user_id='".$record['user_id']."'";
			$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			$num_of_results=mysql_num_rows($select);
			if ($num_of_results!=0)
			{
				$honor_time=0;
				if ($record['honor_excellent']==1)
					$honor_time=$honor_time+$record['base_time']*0.15;
				if ($record['honor_leader']==1)
					$honor_time=$honor_time+$record['base_time']*0.15;//根据带队奖优秀奖计算荣誉
				if ($record['comment']=="undefined")
					$record['comment']="无";
				$sql_update="UPDATE act_record SET base_time='".$record['base_time']."',honor_time='".$honor_time."',comment='".$record['comment']."',performance_level='".$record['performance_level']."',honor_leader='".$record['honor_leader']."',honor_excellent='".$record['honor_excellent']."' WHERE doc_id='".$doc_id."' and user_id='".$record['user_id']."'";
				if (!mysql_query($sql_update,$this->root_conn))
				{
					die('Error: ' . mysql_error());
					return false;
				}
			}
			
		} 
		return true;		
	}
	public function register_voltime($doc_id)//确定将这些志愿者时间录入,进行通知和公示，录入时只修改已存在的，不进行添加。
	{
		$sql="UPDATE act_doc SET state='final' WHERE id='".$doc_id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);//提交后，活动档案将不再能够修改

		$sql="SELECT * FROM act_record WHERE doc_id='".$doc_id."' and final='false'";//获取非强制添加的志愿的服务记录
		$record_id_list=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		while ($record=mysql_fetch_assoc($record_id_list))
		{
			$honor_time=0;
			if ($record['honor_excellent']==1)
				$honor_time=$honor_time+$record['base_time']*0.15;
			if ($record['honor_leader']==1)
				$honor_time=$honor_time+$record['base_time']*0.15;//根据带队奖优秀奖计算荣誉间
			$sql_update="UPDATE act_record SET final='true',date='".date("Y-m-d H-i-s",time())."' WHERE doc_id='".$doc_id."' and user_id='".$record['user_id']."'";//修改act_record表，修改后不再可以修改
			if (!mysql_query($sql_update,$this->root_conn))
			{
				die('Error: ' . mysql_error());
				return false;
			}
			$sql_update_user_info="UPDATE user_info SET base_time=base_time+'".$record['base_time']."',honor_time=honor_time+'".$honor_time."',volunteer_time=base_time+honor_time WHERE id='".$record['user_id']."'";//修改个人信息中的志愿时间
			$select=mysql_query($sql_update_user_info,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			$sql="SELECT i.name FROM act_doc d,activity_info i WHERE d.act_id=i.id and d.id='".$doc_id."'";//获取活动名称，为了发送通知
			$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			$result=mysql_fetch_assoc($select);
			$s=new System();//发送通知
			$time=$record['base_time']+$honor_time;
			$s->send_note($record['user_id'],"恭喜您获得".$time."小时服务时间","您参与的".$result['name']."活动成功完成了，获得了".$record['base_time']."小时基础时间，".$honor_time."小时荣誉时间。具体请查看您的服务记录。");
		
			
		} 
		return true;
	}
	public function fetch_apply_volunteer($act_id,$state=0)//报名情况,0为所有报名人员,1为通过审核的报名人员
	{
		$state=htmlspecialchars($state);
		if($state==0)
		{
			$query="select * from apply_act,user_info where act_id = '".$act_id."' and apply_act.user_id=user_info.id";
			$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			return $select;
		}else
		{
			$query="select * from apply_act,user_info where act_id = '".$act_id."' and apply_act.user_id=user_info.id and apply_act.state='1'";
			$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			return $select;			
		}
	}
	
	public function fetch_apply_doc_volunteer($doc_id)//报名情况
	{
		$query="select user_info.name,user_info.faculty,act_record.* from act_record,user_info where doc_id = '".$doc_id."' and act_record.user_id=user_info.id";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function fetch_my_fellows($faculty_id)//获取我的所有院系成员，返回数据集
	{
		$query="select u.*,a.state,a.position from user_info u,apply_team a where a.user_id=u.id and a.team_id='".$faculty_id."' and a.state<>'2' order by u.id";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function fetch_my_send_notes($team_id)//获取我发送的通知列表
	{
		$query="select * from note_send where sender_id='".$team_id."' order by date DESC";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;		
	}
	public function fetch_my_send_note_detail_recv_list($send_note_id)//获取我发送的某个具体通知,返回接收者的列表
	{
		$send_note_id=htmlspecialchars($send_note_id,ENT_QUOTES);
		$query="select * from note_send where id='".$send_note_id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$recv_id_list=mysql_fetch_assoc($select);
		$recv_list=explode(" ",$recv_id_list['recv_id_list']);
		$recv_name_list=NULL;
		foreach ($recv_list as $value)
		{
			if ($value!=NULL)
			{
				$sql="SELECT id,name FROM team WHERE id='".$value."'";
				$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
				$num_of_results=mysql_num_rows($select);
				if ($num_of_results!=0)
				{
					$result=mysql_fetch_assoc($select);
					$recv_name_list[]=array('id'=>$result['id'],'name'=>$result['name']);
				}
			}
		}		
		foreach ($recv_list as $value)
		{
			if ($value!=NULL)
			{
				$sql="SELECT id,name FROM user_info WHERE id='".$value."'";
				$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
				$num_of_results=mysql_num_rows($select);
				if ($num_of_results!=0)
				{
					$result=mysql_fetch_assoc($select);
					$recv_name_list[]=array('id'=>$result['id'],'name'=>$result['name']);
				}
			}
		}
		return $recv_name_list;		
	}	
	public function fetch_my_send_note_detail($send_note_id)//返回这条通知的详细信息
	{
		$send_note_id=htmlspecialchars($send_note_id,ENT_QUOTES);
		$query="select * from note_send where id='".$send_note_id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$detail=mysql_fetch_assoc($select);
		return $detail;
	}
	//点成员姓名后进入的页面
	public function fetch_my_fellow_detail_info($user_id)//获取成员的基本资料
	{
		$user_id=htmlspecialchars($user_id,ENT_QUOTES);
		$sql="SELECT id,name,grade,faculty,phone FROM user_info WHERE id='".$user_id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result;
	}
	public function fetch_my_fellow_position($user_id)//获取他的职位
	{
		$user_id=htmlspecialchars($user_id,ENT_QUOTES);
		$sql="SELECT t.name,a.position FROM apply_team a,team t WHERE a.user_id='".$user_id."' and a.team_id=t.id and a.state='1'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function fetch_my_fellow_record($user_id)//获取他的活动记录
	{
		$user_id=htmlspecialchars($user_id,ENT_QUOTES);
		$sql="SELECT r.*,i.name,d.date FROM act_record r,act_doc d,activity_info i WHERE r.user_id='".$user_id."' and r.final='true' and r.doc_id=d.id and d.act_id=i.id";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;		
	}
	public function edit_my_fellow_position($user_id,$position)//修改成员的身份
	{
		$user_id=htmlspecialchars($user_id);
		$position=htmlspecialchars($position,ENT_QUOTES);
		$sql="UPDATE apply_team SET position='".$position."' WHERE user_id='".$user_id."' and state='1'";
		if(!mysql_query($sql,$this->root_conn))
		{
			die('ERROR'.mysql_error());
			return false;
		}
		return true;		
	}
	public function delete_my_activity($id)//删除一个活动
	{
		$id=htmlspecialchars($id);
		$sql="SELECT * FROM act_record r,act_doc d WHERE r.final='true' and r.doc_id=d.id and d.act_id='".$id."'";//首先看下是否已经有志愿者的服务时间是已经提交了的
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$results=mysql_num_rows($select);
		if ($results>0) return false;//存在已经提交的志愿服务记录，不得删除
		$sql="DELETE r from act_record r,act_doc d WHERE r.doc_id=d.id and d.act_id='".$id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$sql="DELETE  from act_doc WHERE act_id='".$id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$sql="DELETE  from apply_act WHERE act_id='".$id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$sql="DELETE  from act_comment WHERE act_id='".$id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$sql="DELETE  from activity_info WHERE id='".$id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return true;
	}
	public function insert_act_record($uid,$doc_id,$time,$level,$excellent,$leader,$comment)//1成功,0失败,-1已有记录
	{
		$uid=htmlspecialchars($uid);
		$doc_id=htmlspecialchars($doc_id);
		$time=htmlspecialchars($time,ENT_QUOTES);
		$level=htmlspecialchars($level,ENT_QUOTES);
		$excellent=htmlspecialchars($excellent,ENT_QUOTES);
		$leader=htmlspecialchars($leader,ENT_QUOTES);
		$comment=htmlspecialchars($comment,ENT_QUOTES);
		$sql="SELECT * FROM act_record WHERE doc_id='".$doc_id."' and user_id='".$uid."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		if  (mysql_num_rows($select)!=0)
			return -1;
		$honor_time=$time*0.15*($leader+$excellent);
		$sql="INSERT INTO act_record(doc_id,user_id,base_time,honor_time,comment,performance_level,honor_leader,honor_excellent,final,date,sus)
		VALUES('".$doc_id."','".$uid."','".$time."','".$honor_time."','".$comment."','".$level."','".$leader."','".$excellent."','".true."','".date("Y-m-d H:i:s",time())."','1')
		";
		if(!mysql_query($sql,$this->root_conn))
		{
			die('ERROR'.mysql_error());
			return 0;
		}
		$sql_update_user_info="UPDATE user_info SET base_time=base_time+'".$time."',honor_time=honor_time+'".$honor_time."',volunteer_time=base_time+honor_time WHERE id='".$uid."'";//修改个人信息中的志愿时间
		if(!mysql_query($sql_update_user_info,$this->root_conn))
		{
			die('ERROR'.mysql_error());
			return 0;
		}
		$sql="SELECT i.name FROM act_doc d,activity_info i WHERE d.act_id=i.id and d.id='".$doc_id."'";//获取活动名称，为了发送通知
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		$s=new System();//发送通知
		$total_time=$time+$honor_time;
		$s->send_note($uid,"恭喜您获得".$total_time."小时服务时间","您参与的".$result['name']."活动成功完成了，获得了".$time."小时基础时间，".$honor_time."小时荣誉时间。具体请查看您的服务记录。");
		return 1;
	}
	public function fetch_team_profile($id)//获取团队的所有资料
	{
		$id=htmlspecialchars($id);
		$sql="SELECT * FROM team WHERE id='".$id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		$result['profile'] = htmlspecialchars_decode( $result['profile'], ENT_QUOTES );
		return $result;
	}
	
	public function modify_team_profile($id,$profile,$slogan)//修改编号为id的tema的简介和口号
	{
		$profile=htmlspecialchars($profile, ENT_QUOTES);
		$slogan=htmlspecialchars($slogan,ENT_QUOTES);
		$id=htmlspecialchars($id);
		$sql="UPDATE team SET profile='".$profile."',slogan='".$slogan."' WHERE id='".$id."'";
		if(!mysql_query($sql,$this->root_conn))
		{
			die('ERROR:'.mysql_error());
			return false;
		}
		return true;		
	}
	public function fetch_my_new_notes_count($team_id)//获取我未读通知的数量
	{
		$team_id=htmlspecialchars($team_id);
		$sql="SELECT count(*) AS count FROM note WHERE recv_id='".$team_id."' and state='unread'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result['count'];
	}
	public function modify_password($team_id,$oldpsd,$newpsd)//修改密码，新密码已经是md5加密
	{
		$sql="SELECT id FROM login WHERE id='".$team_id."' and password='".$oldpsd."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_num_rows($select);
		if ($result==0) return false;
		$sql="UPDATE login SET password='".$newpsd."' WHERE id='".$team_id."'";
		if(!mysql_query($sql,$this->root_conn))
		{
			die('ERROR:'.mysql_error());
			return false;
		}else
		return true;
	}

}
?>

