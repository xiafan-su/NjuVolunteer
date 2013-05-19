<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';


$tid=$_POST['teamid'];
$tname=$_POST['teamname'];
$pwd=$_POST['password'];
$temail=$_POST['teamemail'];
$tres=$_POST['teamres'];
$tres_tel=$_POST['teamres_tel'];
$tea=$_POST['teamtea'];
$tea_tel=$_POST['teamtea_tel'];

$tu=$_POST['teamunit'];


 $a=new Admin();
	$result=$a->add_team($tid,$tname,$pwd,$temail,$tres,$tres_tel,$tea,$tea_tel,$tu );
	if ($result)
	{
		echo "<script type=\"text/javascript\">alert(\"添加团队成功！\");</script>\n";
	}
	else
	{
		echo "<script type=\"text/javascript\">alert(\"添加团队失败！\");</script>\n";
	}
	



?>
