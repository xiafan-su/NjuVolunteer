<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$b=new Admin();
$sb1=$b->fetch_act_all_with_doc();
$all_listinfo=NULL;

while($act_info = mysql_fetch_assoc($sb1)){
	 $all_listinfo[] = array('id' =>$act_info['id'],'name'=> $act_info['name']);
}

	$tpl->assign("act_all",$all_listinfo);
	$tpl->display("handle/super_admin_add_vol_time.html");


?>