<?php

//活动类，可执行的操作包括：创建一个新活动，根据id查询一个活动
//根据(一个/一组)关键词查询一系列活动……
//修改某个活动
//删除某个活动
class Act extends DB_Connect {
	
	public function __construct($dbo=NULL){
		parent::__construct($dbo);
	}
	public function fetch_from_date($day1,$day2,$day3,$day4,$day5,$day6,$day7)
	{
		
		$query="select * from activity_info where date='".$day1."' and () ";

		 
	}
	public function fetch_hot()
	{
		return 1;
	}
	public function fetch_highscore()
	{
		return 2;
	}
	public function admin_fetch_info(){
	$query="select count(*) as num from activity_info";
	$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
	return $select;
	}
	public function admin_fetch_all()
	{
		$query="select * from activity_info where state='auditing'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function fetch_all($keywords,$timetype,$attributiontype,$timelimit,$actstate,$num)
	{
		$keywords=htmlspecialchars($keywords,ENT_QUOTES);
		$timetype=htmlspecialchars($timetype,ENT_QUOTES);
		$attributiontype=htmlspecialchars($attributiontype,ENT_QUOTES);
		$timelimit=htmlspecialchars($timelimit,ENT_QUOTES);
		$actstate=htmlspecialchars($actstate,ENT_QUOTES);
		$num=htmlspecialchars($num,ENT_QUOTES);
		$time_type = array("longtime","temp");
		$attribution_type=array("helpold","supporteducation","helpdisabled","campus","competition","other");
		
		$query="select * from activity_info where state='audited' and (name LIKE '%".$keywords."%')";
		if ($timetype!=0)
			$query = sprintf("%s and (time_type='".$time_type[$timetype-1]."')", $query);
		if ($attributiontype!=0)
			$query = sprintf("%s and (attribution_type='".$attribution_type[$attributiontype-1]."')", $query);
		if ($timelimit!=0)
		{
			$timelimit=pow(2,$timelimit-1);
			
			$query = sprintf("%s and (weekday_time&'".$timelimit."'='".$timelimit."')", $query);
		}
		if ($actstate==1)
		{
			$query = sprintf("%s and (deadline>='".date("Y-m-d H:i:s",time())."')", $query);
		}else if ($actstate==2)
		{
			$query = sprintf("%s and (end_time<'".date("Y-m-d H:i:s",time())."')", $query);
		}else if ($actstate==3)
		{
			$query = sprintf("%s and (begin_time<='".date("Y-m-d H:i:s",time())."' and end_time>='".date("Y-m-d H:i:s",time())."')", $query);
		}
		$query = sprintf("%s ORDER BY id DESC LIMIT 0, %d", $query, $num);
		
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function new_comment($user_id,$act_id,$resp_id,$comment,$time){
		$user_id=htmlspecialchars($user_id,ENT_QUOTES);
		$act_id=htmlspecialchars($act_id,ENT_QUOTES);
		$resp_id=htmlspecialchars($resp_id,ENT_QUOTES);
		//$comment=htmlspecialchars($comment,ENT_QUOTES);
		$time=htmlspecialchars($time,ENT_QUOTES);
		
		$insert = "
		insert into act_comment
		(
			user_id,act_id,resp_id,comment,time
		)
		values(
			'".$user_id."','".$act_id."','".$resp_id."','".$comment."','".$time."'
		)
		;";
		
		if (!mysql_query($insert,$this->root_conn))
		{
		  die('Error: ' . mysql_error());
		}
		return 1;
	}
	public function find_same($activity_id){
		$activity_id=htmlspecialchars($activity_id,ENT_QUOTES);
		$act_info=NULL;
		$i=0;
		/*$select = mysql_query("select * from apply_act where act_id = '".$activity_id."' and state='1'")or trigger_error(mysql_error(),E_USER_ERROR);
		while ($row = mysql_fetch_array($select)){
			$result = mysql_query("select * from apply_act where user_id = '".$row['user_id']."' and act_id != '".$activity_id."'")or trigger_error(mysql_error(),E_USER_ERROR);
			while ($roow = mysql_fetch_array($result)){
				$info = mysql_query("select * from activity_info where id = '".$roow['act_id']."'")or trigger_error(mysql_error(),E_USER_ERROR);
				while ($detail = mysql_fetch_array($info)){
					if ($i<3)
						$act_info[] = array('name' => $detail['name'],'responser' => $detail['responser'],'id' => $detail['id']);
					else  break;
					$i++;
				}
			}
		}*/
		$sql="SELECT DISTINCT ai.id,ai.name FROM apply_act aa,activity_info ai WHERE aa.act_id=ai.id and aa.user_id IN (SELECT user_id FROM apply_act WHERE act_id='".$activity_id."')";
		$info = mysql_query($sql)or trigger_error(mysql_error(),E_USER_ERROR);
		while ($detail = mysql_fetch_array($info)){
			if ($i<3)
				$act_info[] = array('name' => $detail['name'],'id' => $detail['id']);                             
			else  break;
			$i++;
		}
		return $act_info;
	}

	public function get_comment($activity_id){
		$activity_id=htmlspecialchars($activity_id,ENT_QUOTES);
		$comment_info=NULL;
		$comment = mysql_query("select * from act_comment where act_id = '".$activity_id."'")or trigger_error(mysql_error(),E_USER_ERROR);
		while ($comment_row = mysql_fetch_array($comment)){
			$flag_faculty=0;
			$sql="SELECT name FROM user_info WHERE id='".$comment_row['user_id']."'";
			$select = mysql_query($sql)or trigger_error(mysql_error(),E_USER_ERROR);
			$name = mysql_fetch_array($select);
			if ($name['name']==NULL)
			{
				$flag_faculty=1;
				$sql="SELECT name FROM team WHERE id='".$comment_row['user_id']."'";
				$select = mysql_query($sql)or trigger_error(mysql_error(),E_USER_ERROR);
				$name = mysql_fetch_array($select);
			}
			$comment_info[] = array('cmt_id'=>$comment_row['id'],'user_id' => $comment_row['user_id'],'name' =>$name['name'],'time' => $comment_row['time'],'flag_faculty'=>$flag_faculty,'content'=> str_replace(array('<p>','</p>'), '', htmlspecialchars_decode($comment_row['comment'],ENT_QUOTES)));
		}
		return $comment_info;
	}
	public function attachment($act_id,$filename)//活动申请时候，上传附件
	{
		$act_id=htmlspecialchars($act_id,ENT_QUOTES);
		$filename=htmlspecialchars($filename,ENT_QUOTES);
		$query="UPDATE activity_info SET plan_url='".$filename."' WHERE id='".$act_id."'";
		if(!mysql_query($query,$this->root_conn))
		{
			die('Error: ' . mysql_error());
			return false; 
		}else
		{
			return true;
		}
	}
	public function fetch_act_pic($act_id)
	{
		$sql="SELECT * FROM photos WHERE act_id='".$act_id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$photo_list = NULL;
		while ($result=mysql_fetch_assoc($select))
		{
			$photo_list[]=array('id'=>$result['id'],'src'=>'./Upload/picture/'.$result['pic_name'],'full_src'=>'./Upload/picture/'.$result['pic_name'],'uploader_id'=>$result['uploader_id'],'uploader_name'=>$result['uploader_name'],'upload_time'=>$result['time']);
		}
		return $photo_list;
	}
	public function delete_photo($id)
	{
		$sql="SELECT pic_name,act_id FROM photos WHERE id='".$id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		$myfile = "../Upload/picture/".$result['pic_name'];
		//echo $myfile;
		//chmod($myfile,0755);
		if (file_exists($myfile)) {
			$d=unlink ($myfile);
			//echo $d;
		}
		$sql="DELETE FROM photos WHERE id='".$id."'";
		mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$sql="SELECT * FROM activity_info WHERE cover_pic='".$result['pic_name']."' ";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$exist=mysql_num_rows($select);
		if ($exist>0)
		{
			$sql="SELECT * FROM photos WHERE act_id='".$result['act_id']."' ";
			$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
			if (mysql_num_rows($select)>0)
			{
				$change=mysql_fetch_assoc($select);
				$sql="UPDATE activity_info SET cover_pic='".$change['pic_name']."' WHERE id='".$result['act_id']."'";
			}else
			$sql="UPDATE activity_info SET cover_pic='default.jpg' WHERE id='".$result['act_id']."'";
			if(mysql_query($sql,$this->root_conn))
				return true;
			else return false;
		}

	}
	public function set_cover($id)
	{
		$sql="SELECT * FROM photos WHERE id='".$id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		$sql="UPDATE activity_info SET cover_pic='".$result['pic_name']."' WHERE id='".$result['act_id']."'";
		if(mysql_query($sql,$this->root_conn))
			return true;
		else return false;
	}
	public function upload_pic($act_id,$filename)//活动详细页面，上传照片
	{
		$act_id=htmlspecialchars($act_id,ENT_QUOTES);
		$filename=htmlspecialchars($filename,ENT_QUOTES);
		$query="INSERT INTO photos(act_id,pic_name,time,uploader_id,uploader_name) VALUES('".$act_id."','".$filename."','".date('Y-m-d H:i:s',time())."','".$_SESSION[User::USER][User::ID]."','".$_SESSION[User::USER][User::NAME]."')";
		if(!mysql_query($query,$this->root_conn))
		{
			die('Error: ' . mysql_error());
			return false; 
		}
		$sql="SELECT cover_pic FROM activity_info WHERE id='".$act_id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		if ($result['cover_pic']==NULL)
		{
			$sql="UPDATE activity_info SET cover_pic='".$filename."' WHERE id='".$act_id."'";
			$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		}
		$query="INSERT INTO 3d_data(time,url) VALUES('".date('Y-m-d H:i:s',time())."','".$filename."')";
		if(!mysql_query($query,$this->root_conn))
		{
			die('Error: ' . mysql_error());
			return false; 
		}
		return true;
	}
	public function create_new_act()
	{
		$hash=rand(1,100);
		$apply_date_hash=date('Y-m-d H:i:s',time())." ".$hash;
		$query="INSERT INTO activity_info(publisher,apply_date_hash) values('".$_SESSION[User::USER][User::FACULTY_ID]."','".$apply_date_hash."')";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$sql="SELECT id FROM activity_info WHERE publisher='".$_SESSION[User::USER][User::FACULTY_ID]."' and apply_date_hash='".$apply_date_hash."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result['id'];
	}
	public function update_act($id, $name,$place,$time_type,$attribution_type,$begin_time,$end_time,$deadline,$detail_time,$total_num,$need_audit,$responser,$responser_tel,$last_time,$activity_profile,$state,$publisher,$weekday_time,$other_language,$faculty_limit,$cet4,$cet6){
		$id=htmlspecialchars($id,ENT_QUOTES);
		$name=htmlspecialchars($name,ENT_QUOTES);
		$place=htmlspecialchars($place,ENT_QUOTES);
		$time_type=htmlspecialchars($time_type,ENT_QUOTES);
		$attribution_type=htmlspecialchars($attribution_type,ENT_QUOTES);
		$begin_time=htmlspecialchars($begin_time,ENT_QUOTES);
		$end_time=htmlspecialchars($end_time,ENT_QUOTES);
		$deadline=htmlspecialchars($deadline,ENT_QUOTES);
		$detail_time=htmlspecialchars_decode($detail_time,ENT_QUOTES);
		$detail_time=htmlspecialchars($detail_time,ENT_QUOTES);
		$total_num=htmlspecialchars($total_num,ENT_QUOTES);
		$need_audit=htmlspecialchars($need_audit,ENT_QUOTES);
		$responser=htmlspecialchars($responser,ENT_QUOTES);
		$responser_tel=htmlspecialchars($responser_tel,ENT_QUOTES);
		$last_time=htmlspecialchars($last_time,ENT_QUOTES);
		$activity_profile=htmlspecialchars_decode($activity_profile,ENT_QUOTES);
		$activity_profile=htmlspecialchars($activity_profile,ENT_QUOTES);
		$state=htmlspecialchars($state,ENT_QUOTES);
		$publisher=htmlspecialchars($publisher,ENT_QUOTES);
		$weekday_time=htmlspecialchars($weekday_time,ENT_QUOTES);
		$other_language=htmlspecialchars($other_language,ENT_QUOTES);
		$faculty_limit=htmlspecialchars($faculty_limit,ENT_QUOTES);
		$cet4=htmlspecialchars($cet4,ENT_QUOTES);
		$cet6=htmlspecialchars($cet6,ENT_QUOTES);
		$accepted_num		=0;
		$offer_num			=0;
		$begin_time=$begin_time." 00:00:0";
		$end_time=$end_time." 00:00:0";
		$deadline=$deadline." 23:59:59";
		if ($total_num==NULL)
			$total_num=0;
		if ($responser_tel==NULL)
			$responser_tel=0;		
		if ($last_time==NULL)
			$last_time=0;		
		$update="
			UPDATE activity_info SET name='".$name."',place='".$place."',time_type='".$time_type."',attribution_type='".$attribution_type."',
			detail_time='".$detail_time."',total_num='".$total_num."',need_audit='".$need_audit."',
			responser='".$responser."',responser_tel='".$responser_tel."',last_time='".$last_time."',
			begin_time='".$begin_time."',end_time='".$end_time."',deadline='".$deadline."',state='".$state."',profile='".$activity_profile."',
			publisher='".$publisher."',weekday_time='".$weekday_time."',other_language='".$other_language."',
			faculty_limit='".$faculty_limit."',cet4='".$cet4."',cet6='".$cet6."'
			WHERE id='".$id."';
		";
		if (!mysql_query($update,$this->root_conn))
		{
		  	die('Error: ' . mysql_error());
		  	return 0;
		}
		return 1;
		
		/*
		$query="select name from activity_info where name='".$name."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		if(mysql_num_rows($select) == 0) {
			$insert = "
			insert into activity_info 
			( 	
				name,place,time_type,attribution_type,
				detail_time,total_num,need_audit,
				responser,responser_tel,last_time,
				begin_time,end_time,state,profile,publisher,weekday_time,plan_url
			) 
			values
			(
				'".$name."','".$place."','".$time_type."','".$attribution_type."',
				'".$detail_time."','".$total_num."','".$need_audit."',
				'".$responser."','".$responser_tel."','".$last_time."',
				'".$begin_time."','".$end_time."','".$state."','".$activity_profile."',
				'".$publisher."','".$weekday_time."','".$plan_url."'
					
			);";
			if (!mysql_query($insert,$this->root_conn))
			{
			  die('Error: ' . mysql_error());
			}
			return 1;
		}else
		{
			return 0;
		}
		*/
	}

	public function fetch_one( $id ){
		$id=htmlspecialchars($id,ENT_QUOTES);
		$query="select * from activity_info where id='".$id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result;
	}
	public function fetch_team_name($act_id)
	{
		$query="select t.name from team t,activity_info a where t.id=a.publisher and a.id='".$act_id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result['name'];
	}
	public function participate($activity_id){
		$activity_id=htmlspecialchars($activity_id,ENT_QUOTES);
		$user_id=$_SESSION[User::USER][User::ID];
		$sql="SELECT * FROM apply_team WHERE user_id='".$user_id."'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		if (mysql_num_rows($select)==0)
		{
			return 3;//尚未完善个人资料
		}
		else
		{
			while ($result=mysql_fetch_assoc($select))
			{
				$sql="SELECT layer FROM team WHERE id='".$result['team_id']."'";
				$team_info=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
				$team=mysql_fetch_assoc($team_info);
				if ($team['layer']=='0' && $result['state']=='0')
					return 4;//院系正在审核您的资料
				if ($team['layer']=='0' && $result['state']=='2')
					return 5;//资尚未通过院系的
			}
		}
		$sql="SELECT * FROM activity_info WHERE id='".$activity_id."'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$act_info=mysql_fetch_assoc($select);//获取活动的信息
		
		$sql="SELECT * FROM user_info WHERE id='".$user_id."'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$user_info=mysql_fetch_assoc($select);//获取个人的信息
		$flag=0;
		if ($user_info['cet4']<$act_info['cet4'] && $user_info['cet6']<$act_info['cet6'])
			$flag=1;//英语成绩未达标
		if ($act_info['faculty_limit']!=NULL && strpos("hehe".$act_info['faculty_limit'],$user_info['faculty'])==FALSE)
			$flag=2;//不满足院系报名条件
		if ($flag!=0) return $flag;
		$status=1;
		if ($act_info['need_audit']=='false')
			$status='1';
		else
			$status='0';
		
		$query="INSERT INTO apply_act(user_id,act_id,state,time) VALUES ('".$user_id."','".$activity_id."','".$status."','".date('Y-m-d H:i:s',time())."')";//添加一条报名记录
		if (!mysql_query($query,$this->root_conn))
		{ 
			die('Error'.mysql_error());
			return 3;
		}
		//if ($status=='0')
		$query="UPDATE activity_info SET offer_num=offer_num+1 WHERE id='".$activity_id."'";//报名人数加1
		//else
		//	$query="UPDATE activity_info SET offer_num=offer_num+1,accepted_num=accepted_num+1 WHERE id='".$activity_id."'";
		if (!mysql_query($query,$this->root_conn))
		{ 
			die('Error'.mysql_error());
			return 3;
		}	
		$sql="SELECT offer_num FROM activity_info WHERE id='".$activity_id."'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$act_info=mysql_fetch_assoc($select);//获取活动的信息	
		return -(int)($act_info['offer_num']);//报名成功后返回人数负值
	}
	public function quit($activity_id){
		$activity_id=htmlspecialchars($activity_id,ENT_QUOTES);
		$user_id=$_SESSION[User::USER][User::ID];
		$query="DELETE FROM apply_act WHERE user_id='".$user_id."' and act_id='".$activity_id."'";
		if (!mysql_query($query,$this->root_conn))
		{
			die('Error'.mysql_error());
			return -1;
		}
		$query="UPDATE activity_info SET offer_num=offer_num-1 WHERE id='".$activity_id."'";
		mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$query="SELECT offer_num  FROM activity_info WHERE id='".$activity_id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$result=mysql_fetch_assoc($select);
		return $result['offer_num'];//退出成功后，刷新报名人数
	}
	public function participate_state($activity_id){
		$activity_id=htmlspecialchars($activity_id,ENT_QUOTES);
		$t=$this->judge_participate_button_state($activity_id);
		if ($t!=1) return $t;
		$user_id=$_SESSION[User::USER][User::ID];
		$query="select * from apply_act where user_id='".$user_id."' and act_id='".$activity_id."'";
		$select=mysql_query($query,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		if (mysql_num_rows($select)==1) return 1;//已经参加了活动
		else 
		{
			return 0;//尚未参加活动
		}
	}
	public function judge_participate_button_state($activity_id)//判断是否过了deadline，是否用户为个人
	{
		$activity_id=htmlspecialchars($activity_id,ENT_QUOTES);
		$sql="SELECT deadline FROM activity_info WHERE id='".$activity_id."'";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		$act_info=mysql_fetch_assoc($select);
		//echo $act_info['deadline'].'</br>';
		if ($act_info['deadline']<(date('Y-m-d H:i:s',time())))
			return -1;
		if (isset($_SESSION[User::USER][User::PERM_ID]))
		{	if($_SESSION[User::USER][User::PERM_ID]!=1)
				return -2;
		}
		else return -3;
		return 1;	
	}

	
	public function fetch_weekact($year,$month,$date){
		$year=htmlspecialchars($year,ENT_QUOTES);
		$month=htmlspecialchars($month,ENT_QUOTES);
		$date=htmlspecialchars($date,ENT_QUOTES);
		$str=mktime(0,0,0,$month,$date,$year);
		$str=date("Y-m-d",$str);
		$str1=date("Y-m-d",strtotime("$str   +6   day"));
		//$date1=$date+6;
		//$str1="$year"."-"."$month"."-"."$date1";
		
		$query="select * from activity_info where datediff(end_time,'".$str."')>0 and datediff(begin_time,'".$str1."')<0 and state='audited'";
		//$query="select makedate('".$year."',)";
		$select=mysql_query($query, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function concern_team($team_id){
		$team_id=htmlspecialchars($team_id,ENT_QUOTES);
		$user_id=$_SESSION[User::USER][User::ID];
		$query="INSERT INTO follow(userid,teamid) VALUES('".$user_id."','".$team_id."')";
		if (!mysql_query($query,$this->root_conn))
		{ 
			die('Error'.mysql_error());
			return false;
		}
		else return true;
	}
	public function fetch_photo($act_id)
	{
		$sql="SELECT * FROM photos WHERE act_id='".$act_id."' LIMIT 0,1";
		$select=mysql_query($sql,$this->root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
		return $select;
	}
	public function modify( $id/* 其他参数未设置 */ ){
		
	}

	public function delete( $id ){
	
	}
	
}
?>
