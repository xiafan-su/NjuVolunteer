<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";

include_once '../../sys/core/init.inc.php';

echo  "activityId=".$_POST['activityId'];

$tpl->assign( "update_time", date("Y-m-d H:i:s") );

if( isset($_POST['documentId']) ) {
	$tpl->assign( "docId", $_POST['documentId']);
} else {
	$tpl->assign( "docId", -1);
}

$tpl->display( "include/rec_edit.html" );


?>

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
</table>
<br />
其他：<br />
当前团队id请直接从SESSION获取<br />

