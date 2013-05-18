<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";

include_once '../../sys/core/init.inc.php';

//echo  "activityId=".$_POST['activityId'];
$is_finished = true;
$tpl->assign( "update_time", date("Y-m-d H:i:s") );


//以下设置标题
$act = new Act();
$act_info_row = $act->fetch_one( $_POST['activityId'] );
$tpl->assign( "actId", $_POST['activityId'] );//设置活动id
if( $act_info_row ){
	$tpl->assign( "activity_name", $act_info_row['name'] );
} else {
	$tpl->assign( "activity_name", "【什么也没找到】" );
}
//以下设置活动记录信息
$team = new Team();
$is_assign = false;
if( isset($_POST['documentId']) ) {
	$doc_info = $team->fetch_act_doc_byid( $_POST['documentId'] );
	if( $doc_row = mysql_fetch_array( $doc_info ) ){
		$tpl->assign( "docId", $_POST['documentId']);
		$tpl->assign( "doc_name", $doc_row['id']);
		$tpl->assign( "doc_leader", $doc_row['leader']);
		$tpl->assign( "doc_profile", $doc_row['profile']);
		$tpl->assign( "doc_summary", $doc_row['summary']);
		$tpl->assign( "doc_tel", $doc_row['tel']);
		$tpl->assign( "doc_vol_time", $doc_row['vol_time']);
		$tpl->assign( "doc_date", $doc_row['date']);
		$is_assign = true;
		$is_finished = ($doc_row['state'] == "final");
	} else $is_finished = false;
} 
if( ! $is_assign ) {
	$tpl->assign( "docId", -1);
	$tpl->assign( "doc_name", "");
	$tpl->assign( "doc_leader", "");
	$tpl->assign( "doc_profile", "");
	$tpl->assign( "doc_summary", "");
	$tpl->assign( "doc_tel", "");
	$tpl->assign( "doc_vol_time", "");
	$tpl->assign( "doc_date", "");
}

//以下设置活动记录参与人员
$part_doc_list = array();
if( isset($_POST['documentId']) ) {
	$part_info = $team->fetch_apply_doc_volunteer( $_POST['documentId'] ); //   
	while( $part_row = mysql_fetch_array( $part_info ) ){
			$part_doc_list[] = array(
				"id"=>	$part_row[ 'user_id' ],
				"name"=>	$part_row[ 'name' ],
				"faculty"=>	$part_row[ 'faculty' ],
				"time"=>	$part_row[ 'base_time' ],
				"level"=>	$part_row[ 'performance_level' ],
				"honor_leader"=>	$part_row[ 'honor_leader' ],
				"honor_excellent"=>	$part_row[ 'honor_excellent' ],
				"comment"=>	$part_row[ 'comment' ],
				"commentlength"=> strlen($part_row[ 'comment' ])
			);
			//echo "#2323#".$part_row[ 'base_time' ];
	}
}
$tpl->assign( "part_doc_list", $part_doc_list );

$tpl->assign( "is_finished", $is_finished );

$tpl->display( "include/rec_edit.html" );


?>
<!-- 
<br /><br />
页面内容：<br />
活动档案添加/编辑<br />
<br />
页面参数：<br />
<table border="1">
<tr><th>参数</th><th>含义</th><th>取值</th></tr>
<tr>
	<td>activityId</td>
	<td>要添加到的活动的id</td>
	<td>要添加到的活动的id</td>
</tr>
<tr>
	<td>documentId</td>
	<td>要修改的活动记录的id</td>
	<td>要修改的活动记录的id</td>
</tr>
</table>
<br />
其他：<br />
当前团队id请直接从SESSION获取<br />

 -->