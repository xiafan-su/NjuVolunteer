<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$uid=$_SESSION[User::USER][User::ID];

$user=new User();


$myfollowlist=NULL;
$myfollow=$user->fetch_my_follow($_SESSION[User::USER][User::ID]);	
while ($row3=mysql_fetch_assoc($myfollow)){
	$myfollowlist[]=array('teamid'=>$row3['TID'],'name'=>$row3['TNAME']);
}


$tpl->assign("teamlist",$myfollowlist);

$tpl->display("handle/my_team.html")







?>
