<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

$u=new User();
$results=$u->fetch_notes($_SESSION[User::USER][User::ID],0);
while ($note=mysql_fetch_assoc($results))
{
	$note_list[]=array('title'=>$note['title'],'time' => $note['time']);
}
if (isset($note_list))
	$tpl->assign('note_list',$note_list);
$tpl->display("include/vol_note.html");

?>