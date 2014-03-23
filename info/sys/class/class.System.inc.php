<?php
//获取中文字符串的长度
function strlen_utf8($str) 
{  
	$i = 0;  
	$count = 0;  
	$len = strlen ($str);  
	while ($i < $len) 
	{  
		$chr = ord ($str[$i]);  
		$count++;  
		$i++;  
		if($i >= $len) break;  
		if($chr & 0x80) 
		{  
			$chr <<= 1;  
			while ($chr & 0x80) 
			{  
				$i++;  
				$chr <<= 1;  
			}  
		}  
	}  
	return $count;  
}  
class System extends DB_Connect {
	public function __construct(){
		parent::__construct();
	}

	public function system_note($team_name)//每次修改资料，看下当前志愿者是否已经加入过院系，修改相应审核状态
	{
		$team_name=htmlspecialchars($team_name,ENT_QUOTES);
		//查找是否已经申请过一个院系
		$sql="SELECT id FROM team where attached_institutions='".$team_name."' and layer='0'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$team = mysql_fetch_assoc($select);
		$team_id=$team['id'];
		$sql="SELECT a.* FROM apply_team a,team t WHERE a.user_id='".$_SESSION[User::USER][User::ID]."' and a.team_id=t.id and t.layer='0' ";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$num_of_results=mysql_num_rows($select);
		if ($num_of_results==0)//当前没有申请过院系
		{
			$sql="INSERT INTO apply_team 
			(
				user_id,team_id,state,time
			)VALUES
			(
				'".$_SESSION[User::USER][User::ID]."','".$team_id."','0','".date('Y-m-d H:i:s',time())."'
			)";
			if (mysql_query($sql, $this->root_conn)) 
				return true;
			else 
			{
				die('Error: ' . mysql_error());
				return false;
			}
		}
		else//已经申请过院系
		{
			$result = mysql_fetch_assoc($select);
			$sql="UPDATE apply_team SET team_id='".$team_id."',state='0',time='".date('Y-m-d H:i:s',time())."' where user_id='".$result['user_id']."' and team_id='".$result['team_id']."' ";
			if (mysql_query($sql, $this->root_conn))
				return true;
			else 
			{
				die('Error: ' . mysql_error());
				return false;
			}
		}
	}
	//获取首页的最新活动详细信息
	public function fetch_index_activity()
	{
		$nowdate=date("Y-m-d H:i:s",time());
		$sql="SELECT * FROM activity_info WHERE name is not NULL AND state='audited' AND deadline>'".$nowdate."' ORDER BY apply_date_hash DESC LIMIT 0,5";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$index_activity_info=NULL;
		while($row=mysql_fetch_assoc($select))
		{
			$id=$row['id'];
			$name=$row['name'];
			if (strlen_utf8($name)>10)
				$name=mb_substr($name,0,10);
			$detail_time=$row['detail_time'];
			if (strlen_utf8($detail_time>20))
				$detail_time=mb_substr($detail_time,0,20);
			$deadline=$row['deadline'];
			$profile=htmlspecialchars_decode($row['profile'],ENT_QUOTES);
			if (strlen_utf8($profile)>100)
				$profile=mb_substr($profile,0,100);
				
			$index_activity_info[]=array("id"=>$id,"name"=>$name,"detail_time"=>$detail_time,"deadline"=>$deadline,"profile"=>$profile);
		}	
		return $index_activity_info;	
	}
	public function fetch_notice_num()//取得所有通告的个数
	{
		$query="select count(*) as count from assignment";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$row=mysql_fetch_assoc($select);
		return $row['count'];
	}
	public function fetch_notice($page)//取得某一页的通知
	{
		$page=htmlspecialchars($page,ENT_QUOTES);
		$end=intval($page*11);
		$begin=intval($end-11);
		$query="select * from assignment order by time DESC LIMIT ".$begin." , 11 ";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$notice_info=NULL;
		while($row=mysql_fetch_assoc($select))
		{
			$notice_info[]=array("title"=>$row['title'],"time"=>$row['time'],"id"=>$row['id']);
		}
		return $notice_info;
	}
	public function fetch_content($type,$id)//取出具体信息
	{
		$type=htmlspecialchars($type,ENT_QUOTES);
		$id=htmlspecialchars($id,ENT_QUOTES);
		if ($type==1){
			$sql="UPDATE assignment SET counts=counts+1 WHERE id='".$id."'";
			$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			$query="select * from assignment where id='".$id."'";
		}
		if ($type==2)
			$query="select * from online_question where id='".$id."'";
		if ($type==3)
			$query="select * from vol_journal where id='".$id."'";
			
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$row=mysql_fetch_assoc($select);

		if ($type==1)
			$content=array("title"=>$row['title'],"time"=>$row['time'],"content"=>htmlspecialchars_decode($row['content'],ENT_QUOTES),"counts"=>$row['counts']);
		if ($type==2)
			$content=array("title"=>$row['title'],"content"=>htmlspecialchars_decode($row['content'],ENT_QUOTES),"time"=>$row['time'],"answer"=>$row['answer'],"email"=>$row['email']);
		if ($type==3)
			$content=array("title"=>$row['title'],"content"=>htmlspecialchars_decode($row['content'],ENT_QUOTES),"writer"=>$row['writer'],"time"=>$row['time']);
		
		return $content;
			
	}
	public function fetch_online_question_num()//取得所有在线咨询的个数
	{
		$query="select count(*) as count from online_question";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$row=mysql_fetch_assoc($select);
		return $row['count'];
	}
	public function fetch_online_question($page)//取得某一页在线咨询详细情况
	{
		$page=htmlspecialchars($page,ENT_QUOTES);
		$end=intval($page*11);
		$begin=intval($end-11);
		$query="select * from online_question order by time DESC LIMIT ".$begin." , 11 ";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$question_info=NULL;
		while($row=mysql_fetch_assoc($select))
		{
			$question_info[]=array("title"=>$row['title'],"time"=>$row['time'],"id"=>$row['id']);
		}
		return $question_info;
	}
	public function fetch_vol_journal_num()//取得所有心路历程的个数
	{
		$query="select count(*) as count from vol_journal";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$row=mysql_fetch_assoc($select);
		return $row['count'];
	}
	public function fetch_vol_journal($page)//取得某一页的心路历程
	{
		$page=htmlspecialchars($page,ENT_QUOTES);
		$end=intval($page*11);
		$begin=intval($end-11);
		$query="select * from vol_journal order by time DESC LIMIT ".$begin." , 11 ";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$journal_info=NULL;
		while($row=mysql_fetch_assoc($select))
		{
			$journal_info[]=array("title"=>$row['title'],"time"=>$row['time'],"id"=>$row['id']);
		}
		return $journal_info;
	}
	public function check_same_note($recv_id,$title,$content)
	{
		$sql="SELECT * FROM note WHERE recv_id='".$recv_id."' and title='".$title."' and content='".$content."' and state='unread'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_num_rows($select);
		if ($result==0)
			return false;
		else return true;
	}
	public function send_note($recv_id_list,$title,$content,$sender_id='system')//
	{
		//$recv_id_list=htmlspecialchars($recv_id_list);
		$title=htmlspecialchars($title,ENT_QUOTES);
		$content=htmlspecialchars($content,ENT_QUOTES);
		$sender_id=htmlspecialchars($sender_id,ENT_QUOTES);
		$recv_id = explode(" ", $recv_id_list);
		$sql="INSERT INTO note_send(sender_id,send_type,recv_id_list,title,content,date)
		VALUES('".$sender_id."','0','".$recv_id_list."','".$title."','".$content."','".date('Y-m-d H:i:s',time())."')
		";
		if (!mysql_query($sql, $this->root_conn))
			{
				die('Error: ' . mysql_error());
				//return false;
			}
		foreach ($recv_id as $value)
		{
			if ($value!=NULL)
			{
				$sql="INSERT INTO note(sender_id,recv_type,recv_id,title,content,time,state) 
					  VALUES('".$sender_id."','0','".$value."','".$title."','".$content."','".date('Y-m-d H:i:s',time())."','unread')
				";
				if (!mysql_query($sql, $this->root_conn))
				{
					die('Error: ' . mysql_error());
					return false;
				}
			}
		}
		return true;
	}
	public function comment_note($user_id,$act_id,$resp_id,$content,$time)
	{
		
	}
	public function new_visitor()
	{
		$sql="UPDATE statistics SET visit_times=visit_times+1 where id='0'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
	}
	public function fetch_visit_times()
	{
		$sql="SELECT visit_times FROM statistics where id ='0'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result['visit_times'];
	}
	public function fetch_total_volunteers()
	{
		$sql="SELECT count(*) as count FROM user_info";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result['count'];
	}
	public function fetch_total_activities()
	{
		$sql="SELECT count(*) as count FROM activity_info where name<>''";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result['count'];
	}	
	public function fetch_total_teams()
	{
		$sql="SELECT count(*) as count FROM team";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result['count'];
	}	
	public function fetch_person_times()
	{
		$sql="SELECT count(*) as count FROM act_record";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result['count'];
	}	
	public function fetch_total_hours()
	{
		$sql="SELECT sum(base_time) as base_hours,sum(honor_time) as honor_hours FROM act_record";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result['base_hours']+$result['honor_hours'];
	}
	public function add_question($email,$question_title,$question_content)//添加在线咨询
	{
		//$sql="select count(*) as count from online_question";
		//$num=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		//$result=mysql_fetch_assoc($num);
		//$id=$result['count']+1;
		$time=date('Y-m-d H:i:s',time());
		$add="INSERT INTO online_question(content,title,time,email)
		VALUES('".$question_content."','".$question_title."','".$time."','".$email."')";
		
		if(mysql_query($add,$this->root_conn))
			return 1;
		else return 0;
	}
	public function add_assignment()
	{
		for ($i=1;$i<100;$i++)
		{
			$title=rand(1,1000);
			$content=rand(1,1000000);
			$time=date('Y-m-d H:i:s',time());
			$count=0;
			$sql="INSERT INTO assignment(title,time,content,counts)
			VALUES('".$title."','".$time."','".$content."','".$count."')";
			$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		}
	}
	public function fetch_pub_list($num=100)
	{
		$sql="SELECT u.id as UID,i.id AS ACTID,u.name AS UNAME,u.faculty,i.name AS ACTNAME,r.base_time,r.honor_time,r.comment,r.sus,r.date  FROM user_info u,act_record r,activity_info i,act_doc d WHERE r.final='true' and u.id=r.user_id and r.doc_id=d.id and d.act_id=i.id LIMIT 0,".$num."";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function print_provement($user_id,$team_id,$begin_date,$end_date)//打印志愿者证明，图片，加水印
	{
		$begindate = explode("-", $begin_date);
		$enddate = explode("-", $end_date);
		
		$sql="SELECT name,faculty,grade FROM user_info WHERE id='".$user_id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$user_info=mysql_fetch_assoc($select);
		
		$sql="SELECT name FROM team WHERE id='".$team_id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$team_info=mysql_fetch_assoc($select);
		
		$sql="SELECT sum(base_time) AS basetime,sum(honor_time) AS honortime FROM act_record WHERE user_id='".$user_id."' and date>='".$begin_date."' and date<='".$end_date."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$vol_info=mysql_fetch_assoc($select);
		
		$provment['name']=$user_info['name'];//姓名
		$provment['faculty']=$user_info['faculty'];//所在院系
		$provment['grade']=$user_info['grade'];//年级
		$provment['begin_year']=$begindate[0];//开始年份
		$provment['begin_month']=$begindate[1];//开始月份
		$provment['end_year']=$enddate[0];//结束年份
		$provment['end_month']=$enddate[1];//结束月份
		$provment['time']=$vol_info['basetime']+$vol_info['honortime'];//服务时间
		$provment['team_name']=$team_info['name'];//发证单位
		$provment['prove_date_year']=date("Y",time());
		$provment['prove_date_month']=date("m",time());
		return $provment;
		
	}
	public function send_email($sendto,$subject,$message)//发送邮件
	{
		$sendto		=	$sendto;
		$sendfrom	=	"NJU_Volunteer@126.com";
		$mailpass	=	"woaiqingxie@2010";
		$mailserver	=	"smtp.126.com";
		$subject	=	$subject;
		$message	=	$message."<br />-------------<br />南京大学青年志愿者系统自动邮件,请勿直接回复<br />任何问题可以发邮件到此邮箱,欢迎提出您的宝贵意见和建议";
		$sm 		= 	new Smail( $sendfrom, $mailpass, $mailserver);
		$send 		= 	$sm->send( $sendto, $sendfrom, $subject, $message );
		if( $send ) return  false;
		else return true;
	}
	public function delete_note($id,$state=0)//0表示删除收到的通知，1表示删除发送的通知
	{
		if($state==0)
			$sql="DELETE FROM note WHERE id='".$id."'";
		else
			$sql="DELETE FROM note_send WHERE id='".$id."' ";
		if (mysql_query($sql,$this->root_conn))
			return true;
		else return false;
	}
	public function export_csv($act_id,$type=0)//导出报名志愿者的csv,$type为0的时候表示导出活动的志愿者
	{
		header("Content-Type: text/csv");  
		header("Content-Disposition: attachment; filename=test.csv");  
		header('Cache-Control:must-revalidate,post-check=0,pre-check=0');  
		header('Expires:0');  
		header('Pragma:public');  
		$sql="SELECT u.name,u.phone FROM apply_act a,user_info u WHERE a.user_id=u.id AND a.act_id='".$act_id."' AND a.state='1' ";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$name=iconv('utf-8','gb2312',"姓名");
		$phone=iconv('utf-8','gb2312',"手机");
		echo "$name,$phone\n";
		while ($result=mysql_fetch_assoc($select))
		{
			$name=iconv('utf-8','gb2312',$result['name']);
			echo $name.",".$result['phone']."\n";	
		}
	}
}


?>
