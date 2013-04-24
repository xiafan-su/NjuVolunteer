<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';


$tpl->assign("act_list",$act_listinfo);
$tpl->display("handle/act_handle.html");


?>