<?php
include_once '../sys/core/init.inc.php';
include './include/header.php';



$t=new Team();

$id=$t->add_doc(6,'夏凡','test','test','15996256592','2','2013-5-7');
echo $id;
//$t->delete_doc(6);
//$t->audit_vol("101220129 101220125 101220126",0,"长的丑");
//$t->import_vol_to_doc(1,"101220129 101220125 101220126");
//$t->delete_vol_from_doc(1,"101220129 101220125");
//$vol_list[]=array('doc_id'=>'1','user_id'=>'101220126','base_time'=>'2','honor_time'=>'0.3','comment'=>'不错','performance_level'=>'良好');
//$vol_list[]=array('doc_id'=>'2','user_id'=>'101220129','base_time'=>'2','honor_time'=>'0.3','comment'=>'不错','performance_level'=>'一般');
//$t->register_voltime($vol_list);
?>