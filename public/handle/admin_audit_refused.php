<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$a=new Admin();

$aid=$_POST['act_id'];
$tid=$_POST['team_id'];
$aname=$_POST['aname'];

if ($a->audit_refused($aid,$tid,$aname)) echo 1;
	else echo 0;



?>