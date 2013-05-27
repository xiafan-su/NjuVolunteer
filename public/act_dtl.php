<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
include './include/act_left.php';


$activity_id = intval($_GET['act_id']);
$act = new Act();
$item = $act->fetch_one($activity_id);
$tpl->assign( "id", $activity_id);
if ($item['cover_pic']!=NULL)
	$tpl->assign("picture",$_PIC_PATH.$item['cover_pic']);//取出封面图片
else
	$tpl->assign("picture",$_PIC_PATH."default.jpg");//取出封面图片

if (isset($_SESSION[USER::USER][USER::PERM_ID]))
{
	if ($_SESSION[USER::USER][USER::PERM_ID]==3)//超管要上传，你有意见？
		$perm_of_upload=1;
	else 
	{
		if ($_SESSION[USER::USER][USER::PERM_ID]==2)
		{
			if ($item['publisher']==$_SESSION[USER::USER][USER::ID])//判断本活动是否为本院系举办，如果是的话，则可以上传图片
				$perm_of_upload=1;
			else $perm_of_upload=0;
		}else 
			if ($_SESSION[USER::USER][USER::PERM_ID]==1)//判断本活动您是否参加过，参加过的可以上传照片
			{
				$u=new User();
				if ($u->a_member_of($activity_id))//一堆判断之后，终于参加过活动的个人可以上传图片了
					$perm_of_upload=1;
				else 
					$perm_of_upload=0;
			}
	}
}else
{
	$perm_of_upload=0;
}

$tpl->assign("perm_of_upload",$perm_of_upload);
/*switch($item['state']){
	case "audited" :$tpl->assign( "act_state", "已审核" );break;
	case "auditing" :$tpl->assign( "act_state", "未审核" );break;
	default : $tpl->assign( "act_state","未知类型" );
}//*/
$now=date("Y-m-d H:i:s",time());
if ($now<$item['deadline']) $state='正在招募';
else if($now>$item['begin_time'] && $now<$item['end_time']) $state="进行中";
else if ($now>$item['end_time']) $state="已结束";

switch($item['time_type']){
	case "longtime" : $tpl->assign( "act_time_type", "长期活动" );break;
	case "temp": $tpl->assign( "act_time_type", "临时活动" );break;
	default : $tpl->assign("act_time_type","未知类型");
}

switch($item['attribution_type']){
	case "helpdisabled" : $tpl->assign( "act_attr_type", "助残" );break;
	case "supporteducation" : $tpl->assign( "act_attr_type", "支教");break;
	case "helptheold" : $tpl->assign( "act_attr_type", "扶老");break;
	case "bigmatch" : $tpl->assign( "act_attr_type", "大型赛事");break;
	case "campus" : $tpl->assign( "act_attr_type", "校园");break;
	default : $tpl->assign( "act_attr_type", "其他");
}
$begin=explode(" ",$item['begin_time']);
$end=explode(" ",$item['end_time']);
$deadline=explode(" ",$item['deadline']);
$same_act =$act->find_same($activity_id);
$tpl->assign("act_state",$state);
$tpl->assign( "same_act", $same_act);
$tpl->assign( "id", $activity_id);
$tpl->assign( "act_place", $item['place'] );
$tpl->assign( "act_profile", htmlspecialchars_decode($item['profile'],ENT_QUOTES) );
$tpl->assign( "act_title", $item['name'] );
$tpl->assign( "act_begin_time", $begin[0] );
$tpl->assign( "act_end_time", $end[0]);
$tpl->assign( "last_time", $item['last_time'] );
$tpl->assign( "signupnum", $item['offer_num'] );
$tpl->assign( "total_num", $item['total_num'] );
$tpl->assign( "deadline", $deadline[0] );
$tpl->assign( "act_id", $activity_id);
$tpl->assign( "responser", $item['responser']);
$tpl->assign( "responser_tel", $item['responser_tel']);


$tpl->display('act_dtl.html');
?>