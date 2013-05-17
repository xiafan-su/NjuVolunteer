<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$a=new Admin();

$id=$_POST['act_id'];

if ($a->audit_pass($id)) echo 1;
	else echo 0;



?>