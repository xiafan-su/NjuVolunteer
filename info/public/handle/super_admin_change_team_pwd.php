<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';





$a=new Admin();
$teams=$a->fetch_all_team();
while($team = mysql_fetch_assoc($teams)){
		$team_list[] = array('id' => $team['id'] , 'name' => $team['name']);
		//echo $team['name'];
}


    $tpl->assign("team_list",$team_list);
	




	$tpl->display("handle/super_admin_change_team_pwd.html");


?>