<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

$team = new Team();
$doc_info = $team->fetch_act_doc_byid( $_POST['documentId'] );
if( $doc_row = mysql_fetch_array($doc_info) ){
	$tpl->assign( "leader", $doc_row['leader'] );
	$tpl->assign( "tel", $doc_row['tel'] );
	$tpl->assign( "start_time", $doc_row['vol_time'] );
} else {
	$tpl->assign( "leader", "无人带队" );
	$tpl->assign( "tel", "无联系方式" );
	$tpl->assign( "start_time", "未开始" );
}

$part_info = $team->fetch_apply_doc_volunteer( $_POST['documentId'] );
$part_list = array();
while( $part_row = mysql_fetch_array($part_info) ){
	$part_list[] = array( "id"=>$part_row['id'], "name"=>$part_row['name'], "faculty"=>$part_row['faculty'], "vol_time"=>"未录入" );
}
if( count($part_list) == 0){
	//echo "documentId=".$_POST['documentId'];
	$part_list = array(
		array( "id"=>"学号哦", "name"=>"名字", "faculty"=>"院系", "vol_time"=>"未录入" ),
		array( "id"=>"学号哦", "name"=>"名字", "faculty"=>"院系", "vol_time"=>"未录入" ),
		array( "id"=>"学号哦", "name"=>"名字", "faculty"=>"院系", "vol_time"=>"未录入" ),
		array( "id"=>"学号哦", "name"=>"名字", "faculty"=>"院系", "vol_time"=>"未录入" )
	);
}
$tpl->assign( "part_list", $part_list );

//给我这个档案对应的活动id吧！！！
$tpl->assign( "actid", 6 );
$tpl->assign( "update_time", date("Y-m-d H:i:s") );

$tpl->display( "include/rec_dtl.html" );

?>


页面内容：<br />
活动档案列表<br />
<br />
页面参数：<br />
<table border="1">
<tr><th>参数</th><th>含义</th><th>取值</th></tr>
<tr>
	<td>docid</td>
	<td>档案id</td>
	<td>档案id</td>
</tr>
<tr>
	<td>show</td>
	<td>是否展开参与人员表</td>
	<td>T/F</td>
</tr>
</table>
<br />
其他：<br />
当前团队id请直接从SESSION获取<br />