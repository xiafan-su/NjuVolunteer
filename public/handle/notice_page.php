<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$s = new System();

$type = $_POST['type'];
$id = $_POST['id'];

$content = $s->fetch_content($type,$id);

$tpl->assign("content",$content);
$tpl->assign("type",$type);
$tpl->display("handle/notice_page.html");

?>