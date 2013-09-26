<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

$read=$_POST['read'];
$u=new User();
$results=$u->fetch_notes($_SESSION[User::USER][User::ID],$read);
while ($note=mysql_fetch_assoc($results))
{
	$note_list[]=array('title'=>$note['title'],'time' => $note['time'],'note_id'=>$note['id']);
}
if (isset($note_list))
	$tpl->assign('note_list',$note_list);
$tpl->display("include/vol_note.html");

?>