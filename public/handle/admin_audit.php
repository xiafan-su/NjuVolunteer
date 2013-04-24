<?php

$a=new Admin();

$id=$_POST['act_id'];
if ($a->audit_pass($id)) echo 1;
	else echo 0;



?>