<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';


$sid=$_POST['userid'];

$did=$_POST['docvalue'];

$bt=$_POST['basictime'];

$re=$_POST['reasoneva'];
$lv=$_POST['level'];

$tl=$_POST['teamleader'];
$gm=$_POST['goodmember'];

$ht=($tl+$gm)*0.15*$bt;


 $a=new Admin();
	$result=$a->add_vol_time($sid,$did,$bt,$ht,$re,$lv,$tl,$gm);
	if ($result)
	{
		echo "<script type=\"text/javascript\">alert(\"增加时间成功！\");</script>\n";
	}
	else
	{
		echo "<script type=\"text/javascript\">alert(\"增加时间失败！也许学生已在这个档案中?\");</script>\n";
	}
	



?>