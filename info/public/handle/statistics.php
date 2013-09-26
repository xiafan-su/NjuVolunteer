<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';
$s=new System();
$tpl->assign('total_visits',$s->fetch_visit_times());
$tpl->assign('total_teams',$s->fetch_total_teams());
$tpl->assign('total_volunteers',$s->fetch_total_volunteers());
$tpl->assign('total_activities',$s->fetch_total_activities());
$tpl->assign('total_peron_times',$s->fetch_person_times());
$tpl->assign('total_hours',$s->fetch_total_hours());
$tpl->display("include/statistics.html");
?>