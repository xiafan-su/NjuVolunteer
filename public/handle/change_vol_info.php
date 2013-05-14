<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$u=new User();
$u->change_person_info($_SESSION[User::USER][User::ID],$_POST['name'],$_POST['gender'],$_POST['email']);
?>