<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$tid=$_POST['cteam'];
//$tid=$_POST['teamid'];
$pwd=$_POST['password'];

 $a=new Admin();
	$result=$a->change_pwd($tid,$pwd);
	if ($result)
	{
		echo "<script type=\"text/javascript\">alert(\"修改密码成功！\");</script>\n";
	}
	else
	{
		echo "<script type=\"text/javascript\">alert(\"修改密码失败！\");</script>\n";
	}
	



?>