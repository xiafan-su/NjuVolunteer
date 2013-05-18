<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';
$a=new Act();
$act_id=$_POST['act_id'];
if (!($a->participate_state($act_id)))
{
	$status=$a->participate($act_id);
	if ($status==0)
		echo 1;
	if ($status==1)	
		echo -1;
	if ($status==2)	
		echo -2;
	if ($status==3)	
		echo -3;
	if ($status==4)	
		echo -4;
	if ($status==5)	
		echo -5;
}else 
{
	if ($a->quit($act_id))
		echo 2;
	else
		echo 0;
}
?>