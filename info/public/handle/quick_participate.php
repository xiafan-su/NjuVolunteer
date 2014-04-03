<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';
$act_id=$_POST['act_id'];
$user_name=$_POST['user_name'];
$user_id=$_POST['user_id'];
$phone=$_POST['phone'];
$remember_info=$_POST['remember_info'];
if ($remember_info==1)
{
	setcookie("user_name",$user_name,time()+30*24*3600,'/');
	setcookie("user_id",$user_id,time()+30*24*3600,'/');
	setcookie("phone",$phone,time()+30*24*3600,'/');
}else
{
	setcookie("user_name","",time()-3600,'/');
	setcookie("user_id","",time()-3600,'/');
	setcookie("phone","",time()-3600,'/');	
}
$act=new Act();
echo $act->quick_participate($act_id,$user_id,$user_name,$phone);

?>