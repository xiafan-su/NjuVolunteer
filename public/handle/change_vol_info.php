<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$u=new User();

if ($u->change_person_info($_SESSION[User::USER][User::ID],$_POST['name'],$_POST['idcard_num'],$_POST['gender'],
		$_POST['email'],$_POST['phone'],$_POST['faculty'],$_POST['grade'],
		$_POST['birthday'],	
		$_POST['politics_status'],$_POST['nation'],	$_POST['cloth_size'],
		$_POST['dormitory'],$_POST['cet4'],	$_POST['cet6'],
		$_POST['language'],	$_POST['language_level'],$_POST['drive'],
		$_POST['medical'], $_POST['other_skills']))
		{
			echo 1;
		}else
		{
			echo 0;
		}
$s=new System();
$s->system_note($_POST['faculty']);
?>