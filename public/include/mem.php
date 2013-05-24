<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

if( !isset( $_SESSION[User::USER][User::FACULTY_ID] ) ){
	echo "<p>登录信息已失效，请重新登录！</p>";
	exit;
}

$mem_list = array();
$team = new Team();
$mem_info = $team->fetch_my_fellows($_SESSION[User::USER][User::FACULTY_ID]);
while( $mem_row = mysql_fetch_array( $mem_info ) ){
	$mem_list[] = array(
			"id"=>$mem_row['id'],
			"name"=>$mem_row['name'],
			"gender"=>$mem_row['gender'],
			"tel"=>$mem_row['phone'],
			"state"=>$mem_row['state'],
			"q"=>$mem_row['position'],
	);
}
/*
for( $i=0;$i<1000;$i++ ){
$mem_list[] = array(
			"id"=>100000000+$i,
			"name"=>"name",
			"gender"=>"gender",
			"tel"=>15990000000+$i,
			"state"=>"s",
			"q"=>"主席",
	);
}// */

$tpl->assign( "mem_list", $mem_list );

$tpl->display( "include/mem.html" );

?>
<!-- 
页面内容：<br />
嘿，这里显示团队成员<br />
<br />
页面参数：<br />
无<br />
<br />
其他：<br />
当前团队id请直接从SESSION获取<br />

<div id="debug" class="">
	
</div>
 -->