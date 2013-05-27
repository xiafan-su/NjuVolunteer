
<?php

include_once '../sys/core/init.inc.php';

include './include/header.php';
$s=new System();
$s->new_visitor();

$notice=new System();

$notice_info=$notice->fetch_notice(1);
for( $i = count($notice_info); $i < 3; $i++ ){
	$notice_info[] = array( "id"=>-1, "title"=>"&nbsp;" );
}
$tpl->assign("notice_detail",$notice_info);

$question_info=$notice->fetch_online_question(1);
for( $i = count($question_info); $i < 3; $i++ ){
	$question_info[] = array( "id"=>-1, "title"=>"&nbsp;" );
}
$tpl->assign("question_detail",$question_info);

$result=$s->fetch_pub_list();

for ($i=0;$i<9;$i++)
{
	$record_list=mysql_fetch_assoc($result);
	if ($record_list!=NULL)
	{
		$content="恭喜".$record_list['UNAME']."同学参与".$record_list['ACTNAME'].",获得".($record_list['base_time']+$record_list['honor_time'])."小时服务时间";
	}else $content="";
	$record_list_left[]=array('id'=>$i,'content'=>$content);
}
$tpl->assign("record_list_left",$record_list_left);
for ($i=0;$i<9;$i++)
{
	$record_list=mysql_fetch_assoc($result);
	if ($record_list!=NULL)
	{
		$content="恭喜".$record_list['UNAME']."同学参与".$record_list['ACTNAME'].",获得".($record_list['base_time']+$record_list['honor_time'])."小时服务时间";
	}else $content="";
	$record_list_right[]=array('id'=>$i,'content'=>$content);
}
$tpl->assign("record_list_right",$record_list_right);

$tpl->display('index.html');




if(isset($_GET['login'])&&$_GET['login']=='error' &&isset($_SESSION['login']) ){
	unset($_SESSION['login'] );
	echo '<script>alert("用户名/密码错误");</script>';
}

?>
