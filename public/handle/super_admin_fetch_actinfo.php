<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$a=new Act();
$selecta=$a->admin_fetch_info();
$act_info = mysql_fetch_assoc($selecta);


$b=new Admin();
$sb1=$b->get_team_name();
$all_listinfo=NULL;

$sb2=$b->get_team_people();


$sb3=$b->get_team_act();

while($name_info = mysql_fetch_assoc($sb1)){
		
	$people_info=	mysql_fetch_assoc($sb2);
	$actt_info=mysql_fetch_assoc($sb3);
	$pn=$people_info['people'];
	if ($pn==null) $pn=0;
	$an=$actt_info['act'];
	if ($an==null) $an=0;
	
	$sb4=$b->get_act_people($name_info['id']);
	$ap_info = mysql_fetch_assoc($sb4);
	$apn=$ap_info['ap'];
	if ($apn==null) $apn=0;
	
	$sb5=$b->get_act_base_time($name_info['id']);
	$abt_info = mysql_fetch_assoc($sb5);
	$abtn=$abt_info['tp'];
	if ($abtn==null) $abtn=0;	
	
	$sb6=$b->get_act_honor_time($name_info['id']);
	$aht_info = mysql_fetch_assoc($sb6);
	$ahtn=$aht_info['tp'];
	if ($abtn==null) $ahtn=0;	
	
	$totaltime=$abtn+$ahtn;
   $all_listinfo[] = array('id' =>$name_info['id'],'name'=> $name_info['name'],'people'=>$pn,'act'=>$an,'apn'=>$apn,'time'=>$totaltime);
   
   
		
		
	}








//$sb4=$b->get_team_actpeople();
//$sb5=$b->get_team_acttime();





	$tpl->assign("num",$act_info['num']);
	$tpl->assign("all_listinfo",$all_listinfo);

	
	$tpl->display("handle/super_admin_actinfo.html");


?>
