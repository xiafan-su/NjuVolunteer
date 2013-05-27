<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';


$a=new Admin();

$aid=$_POST['act_id'];
$tid=$_POST['team_id'];
$aname=$_POST['aname'];
$result="";
if ($a->audit_end($aid,$tid,$aname)==true) $result=1;
	else $result=0;
	
	echo $result;



?>