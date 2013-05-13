<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

$id=$_POST['id'];
$u=new User();
$results=$u->fetch_one_note($id);
$note=mysql_fetch_assoc($results);

if (isset($note))
{
	
	$tpl->assign('sender',$note['name']);
	$tpl->assign('title',$note['title']);
	$tpl->assign('content',$note['content']);
	$tpl->assign('time',$note['time']);
	$tpl->assign('id',$id);
	$tpl->assign('state',$note['state']);
}
$tpl->display("include/vol_note_detail.html");

?>