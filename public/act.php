<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
		//$act =new Act();
		//$select=$act->fetch_all("",0,5);
	/*$a = new Act();
	$root_conn = mysql_pconnect('localhost', 'root', '920328') or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db('nju_volunteer', $root_conn);
	mysql_query("set names utf8");

	$query="select * from activity_info";
	
	//$select=mysql_query($query,$root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
	$select=$a->fetch_all("",0,5);
	while($act_info = mysql_fetch_assoc($select)){
		$act_listinfo[] = array('name' => $act_info['name'],'state' => $act_info['state'],'profile' => $act_info['profile'],'time' => $act_info['begin_time'],'place' => $act_info['place'],'offer_num' => $act_info['offer_num']);
	}*/
	
	//$tpl->assign("act_list",$act_listinfo);

	$tpl->display('act.html');
//test git
?>