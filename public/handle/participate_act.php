<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';
$a=new Act();
$act_id=$_POST['act_id'];
if (!($a->participate_state($act_id)))
{
	if ($a->participate($act_id))
		echo 1;
	else
		echo 0;
}else 
{
	if ($a->quit($act_id))
		echo 2;
	else
		echo 0;
}
?>