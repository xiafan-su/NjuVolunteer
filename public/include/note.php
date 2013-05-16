<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

$note_info = array();

if( $_POST['type'] == "recv" ) {
	$note_info = array(
		array( 
			"id" => 123,
			"type"=>0, 
			"title"=>"这是title1", 
			"content"=>"这是内容1,这是内容,这是内容,这是内容,这是内容,这是内容", 
			"time"=>"2013年5月16日18:45:09" ),
		array( 
			"id" => 234,
			"type"=>0, 
			"title"=>"这是title2", 
			"content"=>"这是内容2,这是内容,这是内容,这是内容,这是内容,这是内容", 
			"time"=>"2013年5月16日17:45:09" ),
		array( 
			"id" => 356,
			"type"=>1, 
			"title"=>"这是title3", 
			"content"=>"这是内容3,这是内容,这是内容,这是内容,这是内容,这是内容", 
			"time"=>"2013年5月16日16:45:09" ),

	);
} else if( $_POST['type'] == "sent" ){
	$note_info = array(
		array( 
			"id" => 123,
			"type"=>2, 
			"title"=>"这是title1", 
			"content"=>"这是内容1,这是内容,这是内容,这是内容,这是内容,这是内容", 
			"time"=>"2013年5月16日18:45:09" ),
		array( 
			"id" => 234,
			"type"=>2, 
			"title"=>"这是title2", 
			"content"=>"这是内容2,这是内容,这是内容,这是内容,这是内容,这是内容", 
			"time"=>"2013年5月16日17:45:09" ),
		array( 
			"id" => 356,
			"type"=>2, 
			"title"=>"这是title3", 
			"content"=>"这是内容3,这是内容,这是内容,这是内容,这是内容,这是内容", 
			"time"=>"2013年5月16日16:45:09" ),

	);
}

$tpl->assign( "note_list",  $note_info);


$tpl->display( "include/note.html" );


?>
页面内容：<br />
（收、发）通知列表<br />
<br />
页面参数：<br />
<table border="1">
<tr><th>参数</th><th>含义</th><th>取值</th></tr>
<tr>
	<td>type</td>
	<td>指定通知显示的内容</td>
	<td>
		<table border="1">
			<tr><td>"recv"</td><td>显示收到的通知</td></tr>
			<tr><td>"sent"</td><td>显示已发送的通知</td></tr>
		</table>
	</td>
</tr>
</table>
<br />
其他：<br />
当前团队id请直接从SESSION获取<br />