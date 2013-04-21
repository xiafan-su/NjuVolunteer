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

	public function login($id, $md5psd){

		$sql="SELECT u.id,u.name,u.permission,f.faculty_name,f.faculty_id FROM user_info u,faculty f WHERE u.faculty = f.faculty_name AND u.id='".$id."' AND u.password='".$md5psd."'";
		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$results=mysql_fetch_assoc($select);

		if( ! empty( $results ) ){
			$_SESSION[self::USER][self::ID]=$results['id'];
			$_SESSION[self::USER][self::NAME]=$results['name'];
			$_SESSION[self::USER][self::PERM]=$results['permission'];
			$_SESSION[self::USER][self::FACULTY]=$results['faculty_name'];
			$_SESSION[self::USER][self::FACULTY_ID]=$results['faculty_id'];
			if( $_SESSION[self::USER][self::PERM] == "Person" ) {
				$_SESSION[self::USER][self::PERM_ID] = 1;
				return 1;
			} else if( $_SESSION[self::USER][self::PERM] == "Visitor" ) {
				$_SESSION[self::USER][self::PERM_ID] = 2;
				return 2;
			} else if( $_SESSION[self::USER][self::PERM] == "Organizer" ) {
				$_SESSION[self::USER][self::PERM_ID] = 3;
				return 3;
			} else {
				return 0;
			}
		} else {
			return 0;
		}
		
	}

}

?>