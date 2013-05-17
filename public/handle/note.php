<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';



/*
type: 处理类型
	"getmem":获取指定活动id的审核通过的成员
activityId:活动id
	"sendnote":发送通知
topic:主题
content:内容
idList:id列表
*/

if( $_POST['type'] == "getmem" ){
	$html = "";
	$team = new Team();
	$mem_info = $team->fetch_apply_volunteer( $_POST['activityId'], 1 );//1表示获取审核通过的
	$i = 1;
	while( $mem_row = mysql_fetch_array( $mem_info ) ){
		$html .= '<div class="receiver-card" uid="'.$mem_row['id'].'" sid="'.$i.'">
							<span class="note_recv_name" >'.$mem_row['name'].'</span>
							<img class="img_note_del" gid="2"  sid="'.$i.'" onclick="note_recv_button(this);" src="./assets/img/zonet/recv_add.jpg" title="添加到接收者列表"/>
						</div>';
		$i++;
	}
	if( $i == 1 ){
		$html = "此活动没有人参与！";
	}
	echo $html;
} else if( $_POST['type'] == "sendnote" ){
	$system = new System();
	if($system->send_note( $_POST['idList'], $_POST['topic'], $_POST['content'], $_SESSION[User::USER][User::FACULTY_ID] )){
		echo "0";
	} else {
		echo "发送失败！";
	}
}


?>