<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';
$id=$_POST['read_id'];
$u=new User();
if ($u->read_note($id))



?>