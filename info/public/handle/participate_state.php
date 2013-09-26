<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';
$a=new Act();
$id=$_POST['act_id'];
$status=$a->participate_state($id);
if ($status==0)
{
	echo 0;
}else if ($status==-1)
{
	echo -1;	
}else if ($status==1)
{
	echo 1;	
}else if ($status==-2)
{
	echo -2;	
}else if ($status==-3)
{
	echo -3;	
}




?>