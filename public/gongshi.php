<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';

$s=new System();
$publicity_list=NULL;
$select=$s->fetch_pub_list();
while ($pub=mysql_fetch_assoc($select))
{
	$publicity_list[]=array('uid'=>$pub['UID'],'actid'=>$pub["ACTID"],'name'=>$pub['UNAME'],'faculty'=>$pub['faculty'],'act_name'=>$pub['ACTNAME'],'basetime'=>$pub['base_time'],'honortime'=>$pub['honor_time'],'comment'=>$pub['comment']);	
}
$tpl->assign("publicity_list",$publicity_list);
$tpl->display('gongshi.html');

?>