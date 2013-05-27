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
$a=new Admin();
$select=$a->get_all_going_act();
$act_listinfo=NULL;
while($act_info = mysql_fetch_assoc($select)){
		
		
	
$act_listinfo[] = array('id' =>$act_info['id'],'name'=> $act_info['name'],'place'=> $act_info['place'],'time_type'=> $act_info['time_type'],'attribution_type'=> $act_info['attribution_type'],'begin_time'=> $act_info['begin_time'],'end_time'=> $act_info['end_time'],'last_time'=> $act_info['last_time'],'detail_time'=> $act_info['detail_time'],'total_num'=> $act_info['total_num'],'need_audit'=> $act_info['need_audit'],'responser'=> $act_info['responser'],'responser_tel'=> $act_info['responser_tel'],'profile'=> htmlspecialchars_decode($act_info['profile'],ENT_QUOTES),'publisher'=> $act_info['publisher']);

		
		
	}
	$tpl->assign("act_list",$act_listinfo);
	if(mysql_num_rows($select)!=0)
		$tpl->display("handle/super_admin_actlist_going.html");
	else
		$tpl->display("handle/super_admin_noactlist_going.html");
?>
