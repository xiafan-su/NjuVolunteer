<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';
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

$team_name = "XXX院系";
$team_email = "XXXX@nju.edu.cn";
$team_leader = "院系负责人";
$team_leader_phone = "15900000000";
$team_director = "这里是指导老师";
$team_director_phone = "15900000000";
$team_attched = "XXX团委";

$team_profile = "这里是团队资料";
$team_signature = "这是口号";

$tpl->assign( "team_name", $team_name );
$tpl->assign( "team_email", $team_email );
$tpl->assign( "team_leader", $team_leader );
$tpl->assign( "team_leader_phone", $team_leader_phone );
$tpl->assign( "team_director", $team_director );
$tpl->assign( "team_director_phone", $team_director_phone );
$tpl->assign( "team_attched", $team_attched );


$tpl->assign( "team_profile", $team_profile );
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