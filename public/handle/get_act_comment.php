<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$activity_id=$_POST['act_id'];

$a=new Act();

$comment_info=$a->get_comment($activity_id);

$tpl->assign( "comment_detail",$comment_info);

$tpl->display('handle/get_act_comment.html');
?>