<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

function utf8Substr($str, $from, $len)
{
    return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'.
                       '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s',
                       '$1',$str);
}
	$a=new Act();
	$keywords=$_POST["keyword"];
	$timetype=$_POST["timetype"];
	$attributiontype=$_POST["attributiontype"];
	$timelimit=$_POST["timelimit"];
	$actstate=$_POST["actstate"];
	$actnum=$_POST["actnum"];
	/*
	if ($activity_name!="")
	{
		$query="SELECT * FROM activity_info WHERE (name LIKE '%".$activity_name."%')";
	}else
	{
		$query="select * from activity_info";
	}*/
	$select=$a->fetch_all($keywords,$timetype,$attributiontype,$timelimit,$actstate,$actnum);
	//$select=mysql_query($query,$root_conn)or trigger_error(mysql_error(),E_USER_ERROR);
	/*while($act_info = mysql_fetch_assoc($select)){
		$act_listinfo[] = array('name' => $act_info['name'],'state' => $act_info['state'],'profile' => $act_info['profile'],'time' => $act_info['begin_time'],'place' => $act_info['place'],'offer_num' => $act_info['offer_num']);
	}*/
	//$act_info = mysql_fetch_assoc($select);
	while($act_info = mysql_fetch_assoc($select)){
		$act_listinfo[] = array('name' => $act_info['name'],'state' => $act_info['state'],'profile' => $act_info['profile'],'time' => $act_info['begin_time'],'place' => $act_info['place'],'offer_num' => $act_info['offer_num']);
	}
	
	/*$activity_format = 
	'<div class="summary">
	<div class="act_img">
		<img src="./include/img/activity/%d.jpg" width="200px" height="130px" href="%s"/>
	</div>
	<div class="words">
	<span>
    	<h2><a href="activity/detail.php?activityId=%d" target="_blank">%s</a><span class="atc_state">%s</span></h2>
        <p>%s</p>
    </span>
    <span class="otherInfo">
    	<span class="first">活动时间：%s</span>
        <span>活动地点：%s</span>
        <span>招募人数：<em>%d</em></span>
    </span>
	</div>
	</div>
	<hr />';
$type1 = "招募中";
$type2 = "结束报名";
$type3 = "活动已结束";
do{
	echo sprintf( $activity_format,
	rand(1,11),
	"",
	$row_RS_Activity['id'],
	$row_RS_Activity['name'],
	($row_RS_Activity['end_time']<date("Y-m-d"))?($type3):($row_RS_Activity['deadline']<date("Y-m-d")?($type2):($type1)),
	strlen($row_RS_Activity['profile'])<100?$row_RS_Activity['profile']:(utf8Substr($row_RS_Activity['profile'],0, 100)."……"),
	$row_RS_Activity['begin_time'],
	$row_RS_Activity['place'],
	$row_RS_Activity['total_num']
	 );
	
} while($row_RS_Activity = mysql_fetch_assoc($select));
*/
$tpl->assign("act_list",$act_listinfo);
$tpl->display("handle/act_handle.html");


?>