<?php



class User extends DB_Connect {

	const USER = "_user";
	const ID = "_user_id"; 
	const NAME = "_user_name";
	const PERM = "_user_permission";
	const PERM_ID = "_user_permission_id";
	const FACULTY = "_user_faculty";
	const FACULTY_ID = "_user_faculty_id";

	public function __construct(){
		parent::__construct();
	}
	public function fetch_person_info($id)
	{
		$sql="SELECT * from user_info where id='".$id."' ";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$results=mysql_fetch_assoc($select);
		return $results;
	} 
	public function fetch_person_act($id)
	{
		$sql="SELECT ai.name,ai.detail_time from apply_act ac ,activity_info ai where ac.user_id='".$id."' and ac.state='audited' and ac.act_id=ai.id";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		//$results=mysql_fetch_assoc($select);
		return $select;
	} 
	public function login($id, $md5psd){

		//$sql="SELECT u.id,u.name,u.permission,f.faculty_name,f.faculty_id FROM user_info u,faculty f WHERE u.faculty = f.faculty_name AND u.id='".$id."' AND u.password='".$md5psd."'";
		$sql="SELECT * from login where id='".$id."' AND password='".$md5psd."'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$results=mysql_fetch_assoc($select);
		if( ! empty( $results ) ){
			$_SESSION[self::USER][self::ID]=$results['id'];
			$_SESSION[self::USER][self::PERM_ID]=$results['permission'];
			if ($results['permission']==2)
			{
				$sql="SELECT * from team where id='".$id."' ";
				$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
				$results=mysql_fetch_assoc($select);
				$_SESSION[self::USER][self::NAME]=$results['name'];
				$_SESSION[self::USER][self::FACULTY]=$results['name'];
			}else if ($results['permission']==1)
			{
				$sql="SELECT * from user_info where id='".$id."' ";
				$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
				$results=mysql_fetch_assoc($select);
				$_SESSION[self::USER][self::NAME]=$results['name'];
				$_SESSION[self::USER][self::FACULTY]=$results['faculty'];
			}else if ($results['permission']==3)
			{
				$_SESSION[self::USER][self::NAME]="超级管理员";
			}
			//$_SESSION[self::USER][self::FACULTY_ID]=$results['faculty_id'];
			if( $_SESSION[self::USER][self::PERM_ID] == 3 ) {
				//$_SESSION[self::USER][self::PERM] = "A";
				return 3;
			} else if( $_SESSION[self::USER][self::PERM_ID] == 1 ) {
				//_SESSION[self::USER][self::PERM_ID] = 2;
				return 1;
			} else if( $_SESSION[self::USER][self::PERM_ID] == 2 ) {
				//$_SESSION[self::USER][self::PERM_ID] = 3;
				return 2;
			} else {
				return 0;
			}
		} else {
			return 0;
		}
		
	}

}

?>