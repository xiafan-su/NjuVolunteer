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


$info_list = array();


$info_list[] = array( "name"=>"团队名称", "value"=>"XXXX" );
$info_list[] = array( "name"=>"团队年龄", "value"=>"XXXX" );
$info_list[] = array( "name"=>"团队负责人", "value"=>"XXXX" );



$tpl->assign( "info_list", $info_list );


$tpl->display( "include/infot.html" );

?>

页面内容：<br />
嘿，这里显示团队资料<br />
<br />
页面参数：<br />
无<br />
<br />
其他：<br />
当前团队id请直接从SESSION获取<br />
