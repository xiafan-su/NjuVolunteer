<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';

$notice=new System();

$type=intval($_GET['type']);
$page=intval($_GET['page']);

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$tpl->assign("id",$id);
}

if($type == 1){
$notice_info=$notice->fetch_notice($page);
$notice_num=$notice->fetch_notice_num();
$notice_page=ceil($notice_num/11);
$tpl->assign("detail",$notice_info);
$tpl->assign("num_all",$notice_num);
$tpl->assign("page_all",$notice_page);
}
else if($type == 2){
$question_info=$notice->fetch_online_question($page);
$question_num=$notice->fetch_online_question_num();
$question_page=ceil($question_num/11);
$tpl->assign("detail",$question_info);
$tpl->assign("num_all",$question_num);
$tpl->assign("page_all",$question_page);
}
else if($type == 3){
$journal_info=$notice->fetch_vol_journal($page);
$journal_num=$notice->fetch_vol_journal_num();
$journal_page=ceil($journal_num/11);
$tpl->assign("detail",$journal_info);
$tpl->assign("num_all",$journal_num);
$tpl->assign("page_all",$journal_page);
}

$tpl->assign("page_now",$page);
$tpl->assign("type",$type);

$tpl->display('notice.html');

?>