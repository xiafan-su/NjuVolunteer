<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

if( !isset( $_SESSION[User::USER][User::FACULTY_ID] ) ){
	echo "<p>登录信息已失效，请重新登录！</p>";
	exit;
}
/*
1.	备案资料：由超级管理员录入，团队自己不可修改，包括：
a)	团队名称
b)	团队联系方式（邮箱，接收系统通知）
c)	负责人姓名、联系方式
d)	指导老师姓名、联系方式
e)	挂靠单位
2.	个性化资料：获得账号密码后，由团队自己登入系统填写，包括：
a)	团队简介
b)	团队口号
c)	团队logo
*/

$team = new Team();
$team_info = $team->fetch_team_profile( $_SESSION[User::USER][User::FACULTY_ID]  );


$team_id = $_SESSION[User::USER][User::FACULTY_ID];
$team_name = $team_info['name'];
$team_email = $team_info['email'];
$team_leader = $team_info['leader'];
$team_leader_phone = $team_info['leader_phone'];
$team_director = $team_info['adviser'];
$team_director_phone = $team_info['adviser_tel'];
$team_attched = $team_info['attached_institutions'];

$team_logo = $team_info['logo'];
$team_profile = $team_info['profile'];
$team_signature = $team_info['slogan'];


if( $team_logo == NULL ){
	$team_logo = "NJU_default.png";
}

$tpl->assign( "team_id", $team_id );
$tpl->assign( "team_name", $team_name );
$tpl->assign( "team_email", $team_email );
$tpl->assign( "team_leader", $team_leader );
$tpl->assign( "team_leader_phone", $team_leader_phone );
$tpl->assign( "team_director", $team_director );
$tpl->assign( "team_director_phone", $team_director_phone );
$tpl->assign( "team_attched", $team_attched );


$tpl->assign( "team_logo", $team_logo );
$tpl->assign( "team_profile", htmlspecialchars_decode($team_profile,ENT_QUOTES) );
$tpl->assign( "team_signature", $team_signature );



$tpl->display( "include/infot.html" );

?>
<!-- 
页面内容：<br />
嘿，这里显示团队资料<br />
<br />
页面参数：<br />
无<br />
<br />
其他：<br />
当前团队id请直接从SESSION获取<br />
 -->