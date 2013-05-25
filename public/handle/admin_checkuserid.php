<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$a=new Admin();

$uid=$_POST['userid'];


$rs= $a->userid($uid);
if ($rs=='0'){
	echo '0';
}else{
	 echo $rs;
}




?>