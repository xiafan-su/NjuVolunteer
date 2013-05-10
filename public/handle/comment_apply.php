<?php 
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';


$content = $_POST['content'];
$user_id = $_SESSION[User::USER][User::ID];
$act_id = $_POST['act_id'];

if ($_POST['res_id'] == NULL)
	$resp_id = $user_id;
else
	$resp_id = $_POST['res_id'];

$time = date("Y-m-d H:m:s");

$act=new Act();
if ($content != NULL){
	if ($_POST['res_id'] != $user_id){
		$result = $act->new_comment($user_id,$act_id,$resp_id,$content,$time);
		
		if ($result == 1)
			echo "评论成功";
		else
			echo "评论失败";
	}
	else
		echo "不能评论给自己";
}
else
	echo "评论内容不能为空";
?>