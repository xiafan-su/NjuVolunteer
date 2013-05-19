
<?php

include_once '../sys/core/init.inc.php';

include './include/header.php';


$s=new System();
$s->new_visitor();
$tpl->display('index.html');

if( isset( $_GET['login'] ) && $_GET['login'] == "error" ){
	echo "<script>alert('用户名/密码错误！');</script>";
}

?>