<?php
mb_internal_encoding("UTF-8");
function autowrap($fontsize,$angle,$fontface,$string,$width) {
    $content = "";
    for ($i=0;$i<mb_strlen($string);$i++) {
        $letter[] = mb_substr($string, $i, 1);
    }
 
    foreach ($letter as $l) {
        $teststr = $content." ".$l;
        $testbox = imagettfbbox($fontsize,$angle,$fontface,$teststr);
        if (($testbox[2] > $width) && ($content !== "")) {
            $content .= "\n";
        }
        $content .= $l;
    }
    return $content;
}

function textout($str)
{	 
	$pic=imagecreatefrompng('../image/test.png'); 
	$fcolor=imagecolorallocate($pic,156,53,144);
	$font="msyh.ttf";
	$str = autowrap(16,0,"msyh.ttf",$str,200); 
	imagettftext($pic,16,0,20,40,$fcolor,$font,$str);
	return $pic;
}

function textout2($str)
{	 
	$pic=imagecreatefromjpeg('../image/back.jpg'); 
	$fcolor=imagecolorallocate($pic,255,255,255);
	$font="msyh.ttf";
	$str = autowrap(16,0,"msyh.ttf",$str,400); 
	imagettftext($pic,16,0,50,330,$fcolor,$font,$str);
	return $pic;
}

	$keyword=array('and','exec','insert','select','update','chr','mid','master','or','truncate','declare','join','delete','char');
	for($i=0;$i<14;$i++){
			if(strstr($_POST['umsg'],$keyword[$i]))exit('{"res":6}');
			if(strstr($_POST['uname'],$keyword[$i]))exit('{"res":6}');
			if(strstr($_POST['uemail'],$keyword[$i]))exit('{"res":6}');
			if(strstr($_POST['udept'],$keyword[$i]))exit('{"res":6}');
			if(strstr($_POST['ugrade'],$keyword[$i]))exit('{"res":6}');
		}
	if(!isset($_POST['umsg'])||$_POST['umsg']==''||$_POST['umsg']===NULL)exit('{"res":1}');
	if(!isset($_POST['uname'])||$_POST['uname']==''||$_POST['uname']===NULL)exit('{"res":2}');
	if(!isset($_POST['uemail'])||$_POST['uemail']==''||$_POST['uemail']===NULL)exit('{"res":3}');
	if(!isset($_POST['udept'])||$_POST['udept']==''||$_POST['udept']===NULL)exit('{"res":4}');
	if(!isset($_POST['ugrade'])||$_POST['ugrade']==''||$_POST['ugrade']===NULL)exit('{"res":5}');
	
	include 'config.php';
	$sql = "INSERT INTO user (user_name,user_email,user_dept,user_grade) VALUES ('".$_POST['uname']."','".$_POST['uemail']."','".$_POST['udept']."','".$_POST['ugrade']."')";
	
	mysql_query($sql);
	date_default_timezone_set('Asia/Shanghai');
	$filename = date("YmdHis").rand(0,999999999);
	$letter = $_POST['umsg'];
	$author = $_POST['uname'];
	$bigimg = $filename.'.jpg';
	$smallimg = $filename.'.gif';
	$pic = textout($letter);
	imagegif($pic,'../random/t_'.$smallimg);
	imagedestroy($pic);
	
	//$pic = textout($letter,$newcolor);
	$pic = textout2($letter);
	imagejpeg($pic,'../random/r_'.$bigimg);
	imagedestroy($pic);

	$letter = str_replace("%%",'</br>',$letter);
	$sql = "INSERT INTO pics (`describe`,`thumb`,`owner`,`original`) VALUES ('".$letter."','".$smallimg."','".$author."','".$bigimg."')";
	mysql_query($sql);
	$counts = mysql_num_rows(mysql_query('select * from pics'));
	mysql_close($link); 
	echo '{"res":0}';