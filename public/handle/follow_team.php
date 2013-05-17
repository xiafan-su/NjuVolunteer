<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$team_id=$_POST['team_id'];
$t=new User();
$result=$t->follow($team_id);
echo $result;

?>