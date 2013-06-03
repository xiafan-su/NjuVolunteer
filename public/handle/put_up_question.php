<?php 
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';

$email_address = $_POST['email_info'];
$question_info = $_POST['question_info'];

if ($email_address == NULL){
	echo "请留下你的邮箱哟！";
}
else{
	//邮箱校验？？
	if ($question_info == NULL){
		echo "您还没有提问哟！";
	}
	else{
		$sys = new System();
		$add = $sys->add_question($email_address,$question_info);
		if ($add == 1)
			echo "提问成功";
		else
			echo "提问失败";
	}
}


?>