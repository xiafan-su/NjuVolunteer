<?php 
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';

$email_address = htmlspecialchars($_POST['email_info'],ENT_QUOTES);
$question_title = htmlspecialchars($_POST['question_title'],ENT_QUOTES);
$question_content = htmlspecialchars($_POST['question_content'],ENT_QUOTES);

if ($email_address == NULL){
	echo "请留下你的邮箱哟！";
}
else{
	//邮箱校验？？
	if ($question_title == NULL){
		echo "您还没有提问哟！";
	}
	else{
		$sys = new System();
		$add = $sys->add_question($email_address,$question_title,$question_content);
		if ($add == 1)
			echo "提问成功";
		else
			echo "提问失败";
	}
}


?>