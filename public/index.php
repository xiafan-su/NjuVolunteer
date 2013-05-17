
<?php

include_once '../sys/core/init.inc.php';

include './include/header.php';
$s=new System();
$s->new_visitor();
$tpl->display('index.html');


?>