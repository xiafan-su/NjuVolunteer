<?php


$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';


$uid = $_GET['userId'];
$position_list = array();
$doc_list = array();

$team = new Team();
$user_info = $team->fetch_my_fellow_detail_info( $uid );
if( $user_info != NULL){
	$uname = $user_info['name'];
	$ugrade = $user_info['grade'];
	$ufaculty = $user_info['faculty'];
	$uphone = $user_info['phone'];
}
$pos_info = $team->fetch_my_fellow_position( $uid );
while( $pos_row = mysql_fetch_array( $pos_info ) ){
	$position_list[] = array( "tname"=>$pos_row['name'], "pos"=>$pos_row['position'] );
}

$doc_info = $team->fetch_my_fellow_record( $uid );
while( $doc_row = mysql_fetch_array( $doc_info ) ){
	$doc_list[] = array( 
			"date"=>$doc_row['date'],
			"content"=>$doc_row['name'],
			"base_time"=>$doc_row['base_time'],
			"honor_time"=>$doc_row['honor_time'],
			"level"=>$doc_row['performance_level'],
	);
}


$tpl->assign( "uid", $uid );
$tpl->assign( "uname", $uname );
$tpl->assign( "ugrade", $ugrade );
$tpl->assign( "ufaculty", $ufaculty );
$tpl->assign( "uphone", $uphone );
$tpl->assign( "position_list", $position_list );
$tpl->assign( "doc_list", $doc_list );
$tpl->display( "include/infov_popup.html" );

?>
