<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

if( !isset( $_SESSION[User::USER][User::FACULTY_ID] ) ){
	echo "<p>登录信息已失效，请重新登录！</p>";
	exit;
}
$note_list = array();

if( $_POST['type'] == "recv" ) {
	$user = new User();
	$note_info = $user->fetch_notes($_SESSION[User::USER][User::FACULTY_ID], 0);
	while( $note_row = mysql_fetch_array($note_info) ){
		$note_list[] =array( 
				"id" => $note_row['id'],
				"type"=>0, //0未读1已读
				"title"=>$note_row['title'], 
				"content"=>($note_row['content']), 
				"time"=>$note_row['time'] 
		);
	}
	$note_info = $user->fetch_notes($_SESSION[User::USER][User::FACULTY_ID], 1);
	while( $note_row = mysql_fetch_array($note_info) ){
		$note_list[] =array( 
				"id" => $note_row['id'],
				"type"=>1, //0未读1已读
				"title"=>$note_row['title'], 
				"content"=>($note_row['content']), 
				"time"=>$note_row['time'] 
		);
	}

} else if( $_POST['type'] == "sent" ){
	$team = new Team();
	$note_info = $team->fetch_my_send_notes($_SESSION[User::USER][User::FACULTY_ID], 0);
	while( $note_row = mysql_fetch_array($note_info) ){
		$note_list[] =array( 
				"id" => $note_row['id'],
				"type"=>2, //发送
				"title"=>$note_row['title'], 
				"content"=>($note_row['content']), 
				"time"=>$note_row['date'] 
		);
	}

}

$tpl->assign( "note_list",  $note_list);


$tpl->display( "include/note.html" );


?>

<!-- 
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

 -->

