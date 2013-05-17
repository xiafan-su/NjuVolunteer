<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';



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
