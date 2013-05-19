
<?php

include_once '../sys/core/init.inc.php';

include './include/header.php';


$name = "谭琦存";
$faculty = "计算机科学与技术系";
$grade = 2010;
$start_year = 2010;
$start_month = 9;
$end_year = 2012;
$end_month = 6;
$vol_time = 1002.3;


$tpl->assign( "name", $name );
$tpl->assign( "faculty", $faculty );
$tpl->assign( "grade", $grade );
$tpl->assign( "start_year", $start_year );
$tpl->assign( "start_month", $start_month );
$tpl->assign( "end_year", $end_year );
$tpl->assign( "end_month", $end_month );
$tpl->assign( "vol_time", $vol_time );


$tpl->display('print_vol_time.html');


?>