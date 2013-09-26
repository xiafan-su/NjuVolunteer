<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';
if ($_POST['type']=="show")
{
	$tpl->display("handle/change_vol_psd.html");
}else
{
	$u=new User();
	$result=$u->change_psd($_POST['old_psd'],$_POST['new_psd']);
	echo $result;
}

?>