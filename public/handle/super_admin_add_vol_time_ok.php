<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';


$sid=$_POST['userid'];
$did=$_POST['docid'];
$bt=$_POST['basictime'];
$ht=$_POST['honortime'];
$re=$_POST['reasoneva'];
$lv=$_POST['level'];



 $a=new Admin();
	$result=$a->add_vol_time($sid,$did,$bt,$ht,$re,$lv);
	if ($result)
	{
		echo "<script type=\"text/javascript\">alert(\"增加时间成功！\");</script>\n";
	}
	else
	{
		echo "<script type=\"text/javascript\">alert(\"增加时间失败！\");</script>\n";
	}
	



?>