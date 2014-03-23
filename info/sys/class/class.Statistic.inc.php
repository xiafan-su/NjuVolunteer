<?php
//统计类
//提供单个团队单个统计属性的数值
class Statistic extends DB_Connect {
	
	public function __construct(){
		parent::__construct();
	}
	
	//获取团队4个年级的总人数，虽然可以区分硕士与博士，但博士们不知道几年才能毕业，暂且硕博都按四年算吧
	//总人数：total_member_num
	public function fetch_total_member_num($team_id)
	{
		$now_year=date("Y",time())%100;//获取当前年份，只选取四年内的成员
		$now_month=date("m",time());
		$begin_year=($now_year-4)%100;//最老的成员年份
		//echo $begin_date+$now_date;
		if ($now_month>9) $begin_year=$begin_year+1;//9月份大四狗就走了，就不算他们了
		$sql="SELECT * FROM apply_team WHERE team_id='".$team_id."' and state='1'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$count=0;//统计尚在校的
		while ($member=mysql_fetch_assoc($select))
		{
			$prefix=substr($member["user_id"],0,4);//获取学号前缀
			$preprefix=substr($prefix,0,2);//获取本硕博前缀
			if ($preprefix=="MG" || $preprefix=="MF" || $preprefix=="DG")
			{
				$sufprefix=substr($prefix,2,2);
				if ($sufprefix>=$begin_year)
					$count++;
			}else
			{
				if ($preprefix>=$begin_year)
					$count++;
			}
		}
		return $count;
	}
	
	//获取团队4个年级中活跃的人数，有统计条件约束
	//活跃人数：active_member_num
	//begin_time和end_time均为数据库标准时间格式"Y-m-d h:i:s"
	public function fetch_active_total_member_num($team_id,$begin_time,$end_time)
	{
		$now_year=date("Y",time())%100;//获取当前年份，只选取四年内的成员
		$now_month=date("m",time());
		$begin_year=($now_year-4)%100;//最老的成员年份
		//echo $begin_date+$now_date;
		if ($now_month>9) $begin_year=$begin_year+1;//9月份大四狗就走了，就不算他们了
		$sql="SELECT * FROM apply_team WHERE team_id='".$team_id."' and state='1'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$count=0;//活跃人数
		while ($member=mysql_fetch_assoc($select))
		{
			$is_in_school=0;//是否还在校
			$prefix=substr($member["user_id"],0,4);//获取学号前缀
			$preprefix=substr($prefix,0,2);//获取本硕博前缀
			if ($preprefix=="MG" || $preprefix=="MF" || $preprefix=="DG")
			{
				$sufprefix=substr($prefix,2,2);
				if ($sufprefix>=$begin_year)
					$is_in_school=1;
			}else
			{
				if ($preprefix>=$begin_year)
					$is_in_school=1;
			}
			if ($is_in_school==1)//如果是在校学生
			{
				//判断是否在这段时间内有活动记录
				$sql="SELECT * FROM act_record where final='true' and user_id='".$member["user_id"]."' and date>='".$begin_time."' and date<'".$end_time."'";
				$is_active_select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
				$num_rows=mysql_num_rows($is_active_select);
				if ($num_rows>0)
					$count++;
			}
		}
		return $count;	
	}
	
	//获取该团队在统计时间段内一共举办的活动数量
	public function fetch_total_activity_num($team_id,$begin_time,$end_time)
	{
		$sql="SELECT count(*) AS count FROM activity_info WHERE name IS NOT NULL AND publisher='".$team_id."' AND (begin_time<'".$end_time."' or end_time>'".$begin_time."')";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result["count"];
	}
	
	//获取团队在统计时间段内活跃的活动数量
	public function fetch_active_activity_num($team_id,$begin_time,$end_time)
	{
		$sql="SELECT * FROM activity_info WHERE name IS NOT NULL AND publisher='".$team_id."' AND (begin_time<'".$end_time."' or end_time>'".$begin_time."')";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$count=0;//活跃活动数量
		while ($act=mysql_fetch_assoc($select))
		{
			$sql="SELECT * FROM act_doc WHERE act_id='".$act["id"]."' AND date>'".$begin_time."' AND date<'".$end_time."' AND state='final'";
			$if_active_select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
			if (mysql_num_rows($if_active_select)>0)
				$count++;
		}
		return $count;
	} 
	
	//获取团队在统计时间段内志愿服务总人次
	//is_my_member 0：举办过的活动统计数据 1：我所在成员的统计数据
	public function fetch_volunteer_person_time_num($team_id,$begin_time,$end_time,$is_my_member)
	{
		if ($is_my_member==1)
		{
			$sql="SELECT count(*) AS count FROM apply_team at,act_record ar WHERE at.team_id='".$team_id."' AND at.state='1' AND at.user_id=ar.user_id AND ar.final='true' AND ar.date>='".$begin_time."' AND ar.date<'".$end_time."'";
		}else
		{
			$sql="SELECT count(*) AS count FROM activity_info ai, act_doc ad, act_record ar WHERE ai.publisher='".$team_id."' and ad.act_id=ai.id and ar.doc_id=ad.id and ar.final='true' AND ar.date>='".$begin_time."' AND ar.date<'".$end_time."'";
		}
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result["count"];
	}
	
	//获取团队在统计时间内志愿服务总时长
	//is_my_member 0：举办过的活动统计数据 1：我所在成员的统计数
	public function fetch_total_volunteer_time($team_id,$begin_time,$end_time,$is_my_member)
	{
		if ($is_my_member==1)
		{
			$sql="SELECT sum(ar.base_time) AS count FROM apply_team at,act_record ar WHERE at.team_id='".$team_id."' AND at.state='1' AND at.user_id=ar.user_id AND ar.final='true' AND ar.date>='".$begin_time."' AND ar.date<'".$end_time."'";
		}else
		{
			$sql="SELECT sum(ar.base_time) AS count FROM activity_info ai, act_doc ad, act_record ar WHERE ai.publisher='".$team_id."' and ad.act_id=ai.id and ar.doc_id=ad.id and ar.final='true' AND ar.date>='".$begin_time."' AND ar.date<'".$end_time."'";
		}
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result["count"];		
	}
}