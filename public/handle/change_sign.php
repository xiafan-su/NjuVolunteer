<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$u=new User();
echo $u->change_sign($_POST['signature']);


?>