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
$select=$a->fetch_all($keywords,$timetype,$attributiontype,$timelimit,$actstate,$actnum);
$num_of_results=mysql_num_rows($select);
if ($num_of_results==$actnum)
	$have_more=1;
else 
	$have_more=0;
while($act_info = mysql_fetch_assoc($select)){
		$act_listinfo[] = array('name' => $act_info['name'],'state' => $act_info['state'],'profile' => $act_info['profile'],'time' => $act_info['begin_time'],'place' => $act_info['place'],'offer_num' => $act_info['offer_num']);
	}
if (isset($act_listinfo))
{
	$tpl->assign("have_more",$have_more);
	$tpl->assign("act_list",$act_listinfo);
	$tpl->display("handle/act_handle.html");
}else
{
	$tpl->display("handle/act_handle_none.html");
}


?>