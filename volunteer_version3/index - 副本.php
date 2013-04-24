<?php
require_once('include/php/basic.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>首页</title>
<link href="./include/css/main.css" rel="stylesheet" />
<link href="./include/css/login.css" rel="stylesheet" />
<script type="text/javascript" src="./include/js/jquery-1.9.1.min.js"></script>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
require('include/php/header_index.php');
//require('include/php/header_v.php');
//require('include/php/login.php');
require('include/php/login.php');
?>
<div style="height:0%; width:0%;" id="flash" >
	<object id="o" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%">
    		<param name="movie" value="cooliris.swf"/>
   	 		<param name="allowFullScreen" value="true" />
   			<param name="allowScriptAccess" value="always" />
  			<param name="flashvars" value="feed=data.php&numRows=5&style=light&showChrome=false&showNavArrows=false&backgroundColor=#AAAAAA">
   			<embed type="application/x-shockwave-flash"
     			src="cooliris.swf"
    			flashvars="feed=data.php&numRows=5&style=light&showChrome=false&showNavArrows=false&backgroundColor=#AAAAAA"
     			width="100%" 
     		 	height="100%"
     		 	allowFullScreen="true"
     		 	allowScriptAccess="always" />
    </object>
</div>
<?php
require('include/php/footer.php');
?>
</body>

</html>