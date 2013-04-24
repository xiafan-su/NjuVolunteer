<?php
require_once('include/php/basic.php');
require_once('connections/root_conn.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>活动中心</title>

<script type="text/javascript" src="./include/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./activity/activity.js"></script>
<link href="./include/css/main.css" rel="stylesheet" />
<link href="./include/css/search.css" rel="stylesheet" />
<link href="./include/css/activity.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
if (isset($_SESSION['user_permission']))
{
	if( $_SESSION['user_permission'] == 'Organizer' ) {
		require('include/php/header_t.php');
	} else {
		require('include/php/header_v.php');
	}
}
else require('include/php/header_index.php');
require('include/php/login.php');
?>
<div class="main">
<div class="main_search">

  
	<div class="input_search" >
		<input id="keyword" name="keyword" class="email" type="text" placeholder="Input your keyword" />
	</div>
  <div class="submit_search">
		<input id="submit" name="submit" class="btn btn-warning span2" onclick="searchit()" type="submit" value="Search" />
	</div>
  <div class="time-type">
	  <p><h3>时间类型-->
        <label>
      	<input type="radio" name="time_type" value="" id="time_type_0" checked="checked"/>
	      任何类型</label>
	    <label>
	      <input type="radio" name="time_type" value="longtime" id="time_type_1" />
	      长期活动</label>
	    <label>
	      <input type="radio" name="time_type" value="temp" id="time_type_2" />
	      临时活动</label>
	        </h3>  </p>
  </div>
  <div class="attribution-type">
	  <p><h3>志愿类型-->
        <label>
      	<input type="radio" name="attribution_type" value="" id="attribution_type_0"  checked="checked"/>
	      任何类型</label>
	    <label>
	      <input type="radio" name="attribution_type" value="helpdisabled" id="attribution_type_1" />
	      助&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;残</label>
	    <label>
	      <input type="radio" name="attribution_type" value="supporteducation" id="attribution_type_2" />
	      支&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;教</label>
	         </h3> </p>
  </div>
    
<div class="check_box_weekday">	
		<p><h3>时间限制-->
          <label>
            <input type="checkbox" name="weekday" value=64 id="weekday_0" />
            周一
          </label>
          <label>
            <input type="checkbox" name="weekday" value=32 id="weekday_1" />
            周二
          </label>
          <label>  
            <input type="checkbox" name="weekday" value=16 id="weekday_2" />
            周三
          </label>
          <label>  
            <input type="checkbox" name="weekday" value=8 id="weekday_3" />
            周四
          </label>
          <label>
            <input type="checkbox" name="weekday" value=4 id="weekday_4" />
            周五
          </label>
          <label>
            <input type="checkbox" name="weekday" value=2 id="weekday_5" />
            周六
          </label>
          <label>
            <input type="checkbox" name="weekday" value=1 id="weekday_6" />
            周日
     		</label>
            </h3></p>
     </div>
     
    
</div>
</div>
<div class="main" id="main"></div>

<?php
require('include/php/footer.php');
?>
</body>

</html>