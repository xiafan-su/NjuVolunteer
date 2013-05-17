<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$team_id=$_POST['team_id'];
$t=new Team();
$result=$t->follow_team($team_id);
echo $result;

?>