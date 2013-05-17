<?php 
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';


$content = $_POST['content'];
$user_id = $_SESSION[User::USER][User::ID];
$act_id = $_POST['act_id'];

if ($_POST['res_id'] == -1)
	$resp_id = $user_id;
else
	$resp_id = $_POST['res_id'];
	//$resp_id=101220129;
$time = date("Y-m-d H:m:s");

$act=new Act();
if ($content != ""){
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
//$comment_info=$act->get_comment($act_id);
//$tpl->assign( "comment_detail",$comment_info);

?>