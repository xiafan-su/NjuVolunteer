
<?php

include_once '../sys/core/init.inc.php';

include './include/header.php';

if( !isset( $_SESSION[User::USER][User::FACULTY_ID] ) ){
	echo "<p>登录信息已失效，请重新登录！</p>";
	exit;
}


$print = false;

$user_id = "b100000000";

$name = "某某某";
$faculty = "XXXXXXXXX系";
$grade = 2010;
$start_year = 2010;
$start_month = 9;
$end_year = 2012;
$end_month = 6;
$vol_time = 111;
$team_name = "XXXXXXXXX";
$prove_date_year = "2012";
$prove_date_month = "6";


if( isset( $_GET['user_id'] ) ){
	$user_id = $_GET['user_id'];
	if( isset( $_GET['begin_time'] ) && isset( $_GET['end_time'] ) ){
		$print = true;

		$system = new System();
		$provment = $system->print_provement($user_id, $_SESSION[User::USER][User::FACULTY_ID], $_GET['begin_time'], $_GET['end_time']);

		$name = $provment['name'];
		$faculty = $provment['faculty'];
		$grade = $provment['grade'];
		$start_year = $provment['begin_year'];
		$start_month = $provment['begin_month'];
		$end_year = $provment['end_year'];
		$end_month = $provment['end_month'];
		$vol_time = $provment['time'];
		$team_name = $provment['team_name'];
		$prove_date_year = $provment['prove_date_year'];
		$prove_date_month = $provment['prove_date_month'];

	}
}




$tpl->assign( "print", $print );

$tpl->assign( "user_id", $user_id );
$tpl->assign( "name", $name );
$tpl->assign( "faculty", $faculty );
$tpl->assign( "grade", $grade );
$tpl->assign( "start_year", $start_year );
$tpl->assign( "start_month", $start_month );
$tpl->assign( "end_year", $end_year );
$tpl->assign( "end_month", $end_month );
$tpl->assign( "vol_time", $vol_time );
$tpl->assign( "team_name", $team_name );
$tpl->assign( "prove_date_year", $prove_date_year );
$tpl->assign( "prove_date_month", $prove_date_month );


$tpl->display('print_vol_time.html');


?>