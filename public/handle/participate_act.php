<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';
$a=new Act();
$act_id=$_POST['act_id'];
if (!($a->participate_state($act_id)))
{
	$status=$a->participate($act_id);
	if($status<0)
	{
		$status=-$status;
		echo $status;//报名成功
	}else
	if ($status==1)	
		echo -1;
	else
	if ($status==2)	
		echo -2;
	else
	if ($status==3)	
		echo -3;
	else
	if ($status==4)	
		echo -4;
	else
	if ($status==5)	
		echo -5;
}else 
{
	$result=$a->quit($act_id);
	if ($result == -1)
		echo 0;
	else
	{
		echo 100000+$result;
	}
}
?>