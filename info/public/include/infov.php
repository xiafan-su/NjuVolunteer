<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';


$u=new User();
$info=$u->fetch_person_info($_SESSION[User::USER][User::ID]);


$tpl->assign("name",$info['name']);
$tpl->assign("stu_no",$info['id']);
$tpl->assign("idcard_num",$info['idcard_num']);
$tpl->assign("gender",$info['gender']);
$tpl->assign("email",$info['email']);
$tpl->assign("phone",$info['phone']);
$tpl->assign("faculty",$info['faculty']);
$tpl->assign("grade",$info['grade']);
$tpl->assign("department",$info['department']);
$tpl->assign("birthday",$info['birthday']);
$tpl->assign("politics_status",$info['politics_status']);
$tpl->assign("nation",$info['nation']);
$tpl->assign("cloth_size",$info['cloth_size']);
$tpl->assign("dormitory",$info['dormitory']);
$tpl->assign("cet4",$info['cet4']);
$tpl->assign("cet6",$info['cet6']);
$tpl->assign("language",$info['language']);
$tpl->assign("level",$info['language_level']);
$tpl->assign("drive",$info['drive']);
$tpl->assign("medical",$info['medical']);
$tpl->assign("other_skills",$info['other_skills']);
$tpl->display("include/infov.html");
?>