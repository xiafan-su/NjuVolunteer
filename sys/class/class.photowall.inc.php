<?php


class PhotoWall extends DB_Connect {
	

	public function __construct(){
		parent::__construct();
	}

	public function get_photo(){
		$sql = "select * from 3d_data";

		$select=mysql_query($sql, $this->root_conn) or trigger_error(mysql_error(),E_USER_ERROR);
		$results= array();
		$i = 0;
		while( $row = mysql_fetch_assoc($select) ){
			$results[$i++] = $row;
		}
		return $results;

	}

}

?>