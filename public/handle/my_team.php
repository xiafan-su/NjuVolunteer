<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$uid=$_SESSION[USER::USER][USER::ID];
$myteamlist=NULL;
$user=new User();
$myteam=$user->fetch_my_team($_SESSION[USER::USER][USER::ID]);
while ($row2=mysql_fetch_assoc($myteam)){
	$myteamlist[]=array('teamid'=>$row2['TID'],'name'=>$row2['TNAME']);
}

$tpl->assign("teamlist",$myteamlist);

$tpl->display("handle/my_team.html")











?>
