<?php
include_once '../sys/core/init.inc.php';
include './include/header.php';


//$a=new Act();
//if ($a->participate_state(7)) echo 1;;
//$id=$a->create_new_act();
//echo $id;
//$t=new Team();
//$t->fetch_act_all('101220130',0);
//$t->modify_doc(7,"夏畅","这是一次不多的活动","bucu","15996256569","3.5","2010-5-7");
//$id=$t->add_doc(6,'夏凡','test','test','15996256592','2','2013-5-7');
//echo $id;
//$t->delete_doc(6);
//$t->audit_vol("101220129 101220125 101220126",0,"长的丑");
//$t->import_vol_to_doc(1,"101220129 101220125 101220126");
//$t->delete_vol_from_doc(1,"101220129 101220125");
//$vol_list[]=array('doc_id'=>'1','user_id'=>'101220126','base_time'=>'2','honor_time'=>'0.3','comment'=>'不错','performance_level'=>'良好');
//$vol_list[]=array('doc_id'=>'2','user_id'=>'101220129','base_time'=>'2','honor_time'=>'0.3','comment'=>'不错','performance_level'=>'一般');
//$t->register_voltime($vol_list);
/*$s=new System();
if ($s->send_note("101220129 101220125 101220128 ","大家好","我是来测试的","101220130"))
echo "success";
$t=new Team();
$select=$t->fetch_apply_volunteer(6,1);
while ($result=mysql_fetch_assoc($select))
{
	echo $result['name']." ";
}
echo "</br>";
$select=$t->fetch_my_fellows();
while ($result=mysql_fetch_assoc($select))
{
	echo $result['name']." ";
}
$select=$t->fetch_all_team();
while ($result=mysql_fetch_assoc($select))
{
	echo $result['name']." ";
}
$s=new System();
$s->new_visitor();
$s->fetch_visit_times();
echo '</br>';
$s->fetch_total_volunteers();
echo '</br>';
$s->fetch_total_activities();
echo '</br>';
$s->fetch_total_teams();
echo '</br>';
$s->fetch_total_teams();
echo '</br>';
$s->fetch_person_times();
echo '</br>';
$s->fetch_total_hours();*/
//$s=new System();
//$s->send_note("101220129 101220125 ","You来测试啦","恭喜您中了测试将","101220130");
/*$t=new Team();
$vol_list[]=array('user_id'=>'101220125','base_time'=>'2','honor_leader'=>'0','honor_excellent'=>'1','comment'=>'不错','performance_level'=>'良好');
$vol_list[]=array('user_id'=>'101220129','base_time'=>'2','honor_leader'=>'1','honor_excellent'=>'1','comment'=>'不错','performance_level'=>'一般');
//$t->edit_voltime(8,$vol_list);
$t->register_voltime(8,$vol_list);*/
//$t=new Team();
//$recv_list=$t->fetch_my_send_note_detail(1);
//echo $recv_list['content'];
//$select=$t->fetch_my_send_notes(101220130);
//$result=mysql_fetch_assoc($select);
//echo $result['content'];
//$a=new Act();
//$a->upload_pic(41,"asd");
//$t=new Team();
//$vol_list[]=array('user_id'=>'101220125','base_time'=>'2','honor_leader'=>'0','honor_excellent'=>'1','comment'=>'不错','performance_level'=>'良好');
//$vol_list[]=array('user_id'=>'101220129','base_time'=>'2','honor_leader'=>'1','honor_excellent'=>'1','comment'=>'不错','performance_level'=>'一般');
//if (! $t->register_voltime(8,$vol_list)) echo 'false';
/*$t=new Team();
$detail=$t->fetch_my_fellow_detail_info(101220129);
echo $detail['name'].$detail['grade'].$detail['faculty'].'</br>';
$position=$t->fetch_my_fellow_position(101220129);
while($result=mysql_fetch_assoc($position))
	echo $result['name'].$result['position'].'</br>';
$record_list=$t->fetch_my_fellow_record(101220129);
while ($record=mysql_fetch_assoc($record_list))
	echo $record['base_time'].$record['performance_level'].'</br>';
$t->edit_my_fellow_position(101220129,'成员');*/
/*$t=new Team();
$select=$t->fetch_apply_doc_volunteer(1);
while ($result=mysql_fetch_assoc($select))
 echo $result['name'].$result['user_id'].$result['base_time'];*/
 
/*$t=new Team();
$t->register_voltime(1);
$select=$t->fetch_my_fellow_record(101220129);
while ($result=mysql_fetch_assoc($select))
	echo $result['name'].' '.$result['date'].' '.$result['base_time'].'</br>';



$a=new Act();
if (!$a->judge_participate_button_state(6)) echo "过期";*/
//$a=new Act();
//echo $a->participate_state(6);
//$t=new Team();
//$result=$t->fetch_team_profile('NJU001');
//echo $result['name'];
//$t->modify_team_profile("we are together","我们是一家人","NJU001");
//$u=new Act();
//echo $u->participate('130');
/*$a=new Act();
$select=$a->fetch_all("",0,0,1,0,5);
while ($result=mysql_fetch_assoc($select))
{
	echo $result['name'].'<br />';	
}*/
//$t=new Team();
//echo $t->fetch_my_new_notes_count('NJU002');

//$s=new System();
//$pro=$s->print_provement("101220129","NJU002","2012-5-10","2013-6-10");
//echo $pro['name']."<br />".$pro['faculty']."<br />".$pro['grade']."<br />".$pro['begin_year']."<br />".$pro['begin_month']."<br />".$pro['end_year']."<br />".$pro['end_month']."<br />".$pro['time']."<br />".$pro['team_name']."<br />".$pro['prove_date_year']."<br />".$pro['prove_date_month']."<br />";
/*$sendto		=	"245681117@qq.com";
$sendfrom	=	"demonsu1992@126.com";
$mailpass	=	"920328";
$mailserver	=	"smtp.126.com";
$subject	=	"test";
$message	=	"测试"."<br>信息来自系统管理员"."<br><br>如果您有什么问题，请联系 <strong>245681117@qq.com</strong>";
$sm 		= 	new Smail( $sendfrom, $mailpass, $mailserver);
$send 		= 	$sm->send( $sendto, $sendfrom, $subject, $message );*/
$s=new System();
if($s->send_email("245681117@qq.com","测试",'<div style="font-size:40">heh</div>')) echo "success";
//if(!$t->insert_act_record(101220119,6,3,'优秀',1,0,'这孩子不错'))echo "wrong";
//$t->register_voltime(6);
//if($t->delete_my_activity(121)) echo "可以删除";
//else echo "不可删除";

?>