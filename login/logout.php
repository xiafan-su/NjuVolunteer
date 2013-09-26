<?php

$_BASE_PATH = "../info/";

include_once '../info/sys/core/init.inc.php';


session_destroy();
header("Location: http://cer.nju.edu.cn/amserver/UI/Logout?goto=http%3A%2F%2Fvolunteer.nju.edu.cn%2Findex.php");
//退出直接返回首页，避免处理当前用户在个人空间的情况处理
?>