<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
//获取活动的id
if (isset($_GET["act_id"]))
	$activity_id = intval($_GET['act_id']);
else
    header("Location:./index.php");

$act = new Act();
$item = $act->fetch_one($activity_id);//获取活动的详细信息
$now_date=date("Y-m-d H:i:s");

if (isset($_SESSION[User::USER][User::PERM_ID]) && ($_SESSION[User::USER][User::PERM_ID]==1))//用户已经登录且为个人用户,直接去活动详情页面报名
{
	header("Location:./act_dtl.php? act_id=".$activity_id);
}else//用户未登录或为非志愿者用户
{
	if ($now_date>$item["deadline"])
	{
		echo '<script>alert("该活动已过报名截止日期");</script>';
		return;
	}
	//自动填写信息
	if (isset($_COOKIE['user_name']))
	{
		$user_name=$_COOKIE['user_name'];
	}else
	{
		$user_name="";
	}
	if (isset($_COOKIE['user_id']))
	{
		$user_id=$_COOKIE['user_id'];
	}else
	{
		$user_id="";
	}
	if (isset($_COOKIE['phone']))
	{
		$phone=$_COOKIE['phone'];
	}else
	{
		$phone="";
	}
	//填写当前页面的参数

	$tpl->assign("act_id",$activity_id);
	$tpl->assign("act_name",$item['name']);
	$tpl->assign("publisher",$item["publisher"]);
	$tpl->assign("act_publisher",$act->fetch_team_name($activity_id));
	$tpl->assign("user_name",$user_name);
	$tpl->assign("user_id",$user_id);
	$tpl->assign("phone",$phone);
}


if ($item==NULL)
	echo '<script>alert("您报名的活动不存在");</script>';
else
	$tpl->display('quick_participate.html');

?>