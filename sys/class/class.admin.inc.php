<?php

//活动类，可执行的操作包括：创建一个新活动，根据id查询一个活动
//根据(一个/一组)关键词查询一系列活动……
//修改某个活动
//删除某个活动
class Admin extends DB_Connect {
	
	public function __construct($dbo=NULL){
		parent::__construct($dbo);
	}
	
	public function audit_pass($act_id)//修改这个活动档案
	{
		$query="UPDATE activity_info SET state = 'audited' where id='".$act_id."'";
		if (!mysql_query($query,$this->root_conn))
		{
			return false;
		}else
		{
			return true;
		}
	}
	public function add_team($tid,$tname,$pwd)
	{
		$insert_login="insert into login(id,password,permission)  values ('".$tid."', '".$pwd."',2);";
		if (!mysql_query($insert_login,$this->root_conn))
		{
			 //die('Error: ' . mysql_error());
			return false;
		}
		$insert_team="insert into team(id,name) values ('".$tid."','".$tname."');";
		
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
		$change_pwd="update login set password='".$pwd."'  where id='".$tid."';";
		if (!mysql_query($change_pwd,$this->root_conn))
			{
			   //die('Error: ' . mysql_error());
			   
				return false;
			}
		return true;
		
	}
	
	public function add_vol_time($sid,$did,$bt,$ht,$re,$lv){
		$insert_time="insert into act_record(doc_id,user_id,base_time,honor_time,comment,performance_level)  values ('".$did."', '".$sid."', '".$bt."', '".$ht."','".$re."',  '".$lv."'  );";
			if (!mysql_query($insert_time,$this->root_conn))
			{
			 //  die('Error: ' . mysql_error());
			   
				return false;
			}
		return true;	
			
	}
	

	
}
?>