<?php


$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";

include_once '../../sys/core/init.inc.php';

$apply_list = array();

$act = new Act();
$act_info_row = $act->fetch_one( $_POST['activityId'] );
if( $act_info_row ){
	$tpl->assign( "activity_name", $act_info_row['name'] );
} else {
	$tpl->assign( "activity_name", "【什么也没找到】" );
}


$team = new Team();
$apply_info = $team->fetch_apply_volunteer( $_POST['activityId'] );


while( $apply_row = mysql_fetch_array($apply_info)  ){
	$apply_list[] = array( 
		"id"=>$apply_row['id'], 
		"name"=>$apply_row['name'], 
		"faculty"=>$apply_row['faculty'], 
		"grade"=>$apply_row['grade'], 
		"tel"=>$apply_row['phone'], 
		"qq"=>$apply_row['qq'],
		"state"=>$apply_row['state'],
		"dischoosabled"=>( $apply_row['state']=="auditing"?"false":"true" ), //当且仅当为正在审核中才有效
	);
}



/*
$apply_list = array(
	array( "id"=>"b11111", "name"=>"姓名1", "faculty"=>"院系1", "grade"=>"10", "tel"=>123423, "qq"=>12345 ),
	array( "id"=>"b11111", "name"=>"姓名1", "faculty"=>"院系1", "grade"=>"10", "tel"=>123423, "qq"=>12345 ),
	array( "id"=>"b11111", "name"=>"姓名1", "faculty"=>"院系1", "grade"=>"10", "tel"=>123423, "qq"=>12345 ),
	array( "id"=>"b11111", "name"=>"姓名1", "faculty"=>"院系1", "grade"=>"10", "tel"=>123423, "qq"=>12345 ),
);

*/



$tpl->assign( "apply_list", $apply_list );
$tpl->assign( "update_time", date("Y-m-d H:i:s") );

$tpl->display('include/actz_apply.html');


?>

页面内容：<br />
活动报名情况列表<br />
<br />
页面参数：<br />
<table border="1">
<tr><th>参数</th><th>含义</th><th>取值</th></tr>
<tr>
	<td>activityId</td>
	<td>活动id</td>
	<td>活动id</td>
<tr>
</tr>
	<td>type</td>
	<td>类型</td>
	<td>
		<table>
			<tr><td>show</td><td>（默认值）用户选择查看报名情况</td></tr>
			<tr><td>choose</td><td>用户选择志愿者，以导入参与表</td></tr>
		</table>
	</td>
</tr>
</table>
<br />
其他：<br />
当前团队id请直接从SESSION获取<br />


