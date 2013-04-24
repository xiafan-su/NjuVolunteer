<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';
$a=new Act();
$id=$_POST['act_id'];
if ($a->participate_state($id))
{
	echo 1;
}else
{
	echo 0;	
}



?>