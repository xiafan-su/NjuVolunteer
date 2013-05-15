<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';


$tid=$_POST['teamid'];
$tname=$_POST['teamname'];
$pwd=$_POST['password'];

 $a=new Admin();
	$result=$a->add_team($tid,$tname,$pwd);
	if ($result)
	{
		echo "<script type=\"text/javascript\">alert(\"添加团队成功！\");</script>\n";
	}
	else
	{
		echo "<script type=\"text/javascript\">alert(\"添加团队失败！\");</script>\n";
	}
	



?>
