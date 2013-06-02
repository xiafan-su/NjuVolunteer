<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';
$u=new User();
$info=$u->fetch_person_info($_SESSION[User::USER][User::ID]);

$t=new Team();
$faculties=$t->fetch_all_faculty();
while($faculty = mysql_fetch_assoc($faculties)){
		$faculty_list[] = array('id' => $faculty['id'] , 'name' => $faculty['name']);
}
$nations=$t->fetch_all_nation();
while($nation = mysql_fetch_assoc($nations)){
		$nation_list[] = array('name' => $nation['nation']);
}
$year=intval(date("Y",time()))-7;
for ($i=0;$i<10;$i++)
{
	$grade_list[]=array('year'=>$year);
	$year++;
}
$tpl->assign("nation_list",$nation_list);
$tpl->assign("faculty_list",$faculty_list);
$tpl->assign("name",$info['name']);
$tpl->assign("stu_no",$info['id']);
$tpl->assign("idcard_num",$info['idcard_num']);
$tpl->assign("gender",$info['gender']);
$tpl->assign("email",$info['email']);
$tpl->assign("phone",$info['phone']);
$tpl->assign("my_faculty",$info['faculty']);
$tpl->assign("mygrade",$info['grade']);
$tpl->assign("grade_list",$grade_list);
$tpl->assign("birthday",$info['birthday']);
$tpl->assign("politics_status",$info['politics_status']);
$tpl->assign("my_nation",$info['nation']);
$tpl->assign("cloth_size",$info['cloth_size']);
$tpl->assign("dormitory",$info['dormitory']);
$tpl->assign("cet4",$info['cet4']);
$tpl->assign("cet6",$info['cet6']);
$tpl->assign("language",$info['language']);
$tpl->assign("level",$info['language_level']);
$tpl->assign("drive",$info['drive']);
$tpl->assign("medical",$info['medical']);
$tpl->assign("other_skills",$info['other_skills']);
$tpl->display("include/infov_edit.html");
?>