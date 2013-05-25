<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$a=new Admin();

$tid=$_POST['newid'];


$rs= $a->newid($tid);
if ($rs==0) echo 0;else echo 1;




?>