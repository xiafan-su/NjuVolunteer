<?php


$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";

include_once '../../sys/core/init.inc.php';

//18 ---信息管理学院
$act_state_transfer = array( "audited"=>"审核通过，正在运转中", "auditing"=>"等待管理员审核", "editing"=>"编辑中", "end"=>"已结束" );

$faculty_id = $_SESSION[User::USER][User::FACULTY_ID];
//echo $_SESSION[User::USER][User::PERM_ID];

$is_add = false;

$act_list = array();

$team = new Team();
$act_info = "";
if( isset($_POST['type']) ){
	if( $_POST['type'] == "finished" ) {
		$act_info = $team->fetch_act_all( $faculty_id, 0 );
	} else {
		$act_info = $team->fetch_act_all( $faculty_id, 1 );
	}
}
while($act_row = mysql_fetch_array($act_info) ) {
	$act_elem['act_id'] = (int)$act_row['id'];
	$act_elem['act_title'] = $act_row['name'];//."，测试一下比较长的标题是怎么显示的";
	$act_elem['consult'] = $act_row['responser'];
	$act_elem['state_text'] = $act_state_transfer[$act_row['state']];
	$act_elem['state'] = $act_row['state'];
	$act_elem['is_add']=$act_row['state']=="audited";
	$act_elem['editable'] = $act_row['state'] != "end";
	$act_elem['deletable'] = $act_row['state'] != "end";//可删除的
	$doc_info = $team->fetch_act_doc_all( $act_row['id'] );
	$doc_list = array();
	while( $doc_row = mysql_fetch_array( $doc_info ) ){
		$doc_list[] = array( "doc_id"=>$doc_row['id'],
				"doc_time"=>$doc_row['vol_time'], 
				"leader"=> $doc_row['leader'], 
				"tel"=>$doc_row['tel'],
				"state"=>$doc_row['state'],
		);
		if( $doc_row['state'] == "final" )
			$act_elem['deletable'] = false;
	}
				
	$act_elem['doc_list'] = $doc_list;
	$act_list[] = $act_elem;
}


/*
	$act_list = array(  
		array( "act_id"=>1, "act_title"=>"活动名称1", "consult"=>"联系人1", "state"=>"状态1", 
			"doc_list"=> array( 
				array( "doc_time"=>"时间1", "doc_title"=>"标题1", "leader"=>"带队人1" ), 
				array( "doc_time"=>"时间2", "doc_title"=>"标题2", "leader"=>"带队人2"  ) 
			)
		),
		array( "act_id"=>2, "act_title"=>"活动名称2", "consult"=>"联系人2", "state"=>"状态2", 
			"doc_list"=> array( 
				array( "doc_time"=>"时间3", "doc_title"=>"标题3", "leader"=>"带队人3" ), 
				array( "doc_time"=>"时间4", "doc_title"=>"标题4", "leader"=>"带队人4"  ), 
				array( "doc_time"=>"时间5", "doc_title"=>"标题5", "leader"=>"带队人5"  ) 
			)
		),
		array( "act_id"=>3, "act_title"=>"活动名称3", "consult"=>"联系人3", "state"=>"状态3", 
			"doc_list"=> array( 
				array( "doc_time"=>"时间6", "doc_title"=>"标题6", "leader"=>"带队人6" ), 
				array( "doc_time"=>"时间7", "doc_title"=>"标题7", "leader"=>"带队人7"  ) 
			)
		)
	);
*/

if( isset($_POST['type']) && $_POST['type'] == 'start' ) {	
	$tpl->assign( "is_add", true );
} else {
	$tpl->assign( "is_add", false );
}
$tpl->assign( "act_list", $act_list );
$tpl->assign( "current_time", date("Y-m-d H:i:s") );

$tpl->display('include/actz.html');


?>
<!-- 
页面内容：<br />
（发起的、已完成的）活动列表<br />
<br />
页面参数：<br />
<table border="1">
<tr><th>参数</th><th>含义</th><th>取值</th></tr>
<tr>
	<td>type</td>
	<td>指定活动显示的内容</td>
	<td>
		<table border="1">
			<tr><td>"start"</td><td>显示发起的活动</td></tr>
			<tr><td>"finished"</td><td>显示已完成的活动</td></tr>
		</table>
	</td>
</tr>
</table>
<br />
其他：<br />
当前团队id请直接从SESSION获取<br />


 -->