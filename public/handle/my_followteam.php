<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$uid=$_SESSION[USER::USER][USER::ID];

$user=new User();



$myfollow=$user->fetch_my_follow($_SESSION[USER::USER][USER::ID]);	
while ($row3=mysql_fetch_assoc($myfollow)){
	$myfollowlist[]=array('teamid'=>$row3['TID'],'name'=>$row3['TNAME']);
}


$tpl->assign("teamlist",$myfollowlist);

$tpl->display("handle/my_team.html")







?>
