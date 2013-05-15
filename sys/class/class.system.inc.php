<?php

class System extends DB_Connect {
	public function __construct(){
		parent::__construct();
	}
	public function system_note($team_name)
	{
		//查找是否已经申请过一个院系
		$sql="SELECT id FROM team where name='".$team_name."'";
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
	public function send_note($recv_id,$titla,$content)
	{
		
	}
	
	
	
}


?>