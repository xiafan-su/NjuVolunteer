<?php
require_once('../include/php/basic.php');
require_once('../connections/root_conn.php');

?>
<?php 

$activity_name=$_POST["keyword"];
$temp_name = $activity_name;
$maxRows_RS_Activity = 5;
$activity_time_type=$_POST["timetype"];
$activity_attribution_type=$_POST["attributiontype"];
$activity_weekday_time=$_POST["weekday"]; 
$pageNum_RS_Activity = $_POST["page"];
if (isset($_GET['pageNum_RS_Activity'])) {
  $pageNum_RS_Activity = $_GET['pageNum_RS_Activity'];
}
$startRow_RS_Activity = $pageNum_RS_Activity * $maxRows_RS_Activity;

mysql_select_db($database_root_conn, $root_conn);
if($activity_time_type=="" && $activity_attribution_type==""){
	$query_RS_Activity = "SELECT * FROM activity_info WHERE (name LIKE '%".$activity_name."%') AND (weekday_time & '".$activity_weekday_time."'>0 || '".$activity_weekday_time."'=0)";
}
if($activity_time_type!="" && $activity_attribution_type==""){
	$query_RS_Activity = "SELECT * FROM activity_info WHERE (name LIKE '%".$activity_name."%') AND (time_type = '".$activity_time_type."') AND (weekday_time & '".$activity_weekday_time."'>0 || '".$activity_weekday_time."'=0)";
}
if($activity_time_type=="" && $activity_attribution_type!=""){
	$query_RS_Activity = "SELECT * FROM activity_info WHERE (name LIKE '%".$activity_name."%') AND (weekday_time & '".$activity_weekday_time."'>0 || '".$activity_weekday_time."'=0)";
}
if($activity_time_type!="" && $activity_attribution_type!=""){
	$query_RS_Activity = "SELECT * FROM activity_info WHERE (name LIKE '%".$activity_name."%') AND (time_type = '".$activity_time_type."') AND (attribution_type = '".$activity_attribution_type."') AND (weekday_time & '".$activity_weekday_time."'>0 || '".$activity_weekday_time."'=0)";
}


$query_limit_RS_Activity = sprintf("%s LIMIT %d, %d", $query_RS_Activity, $startRow_RS_Activity, $maxRows_RS_Activity);
$RS_Activity = mysql_query($query_limit_RS_Activity, $root_conn) or die(mysql_error());
$row_RS_Activity = mysql_fetch_assoc($RS_Activity);

if (isset($_GET['totalRows_RS_Activity'])) {
  $totalRows_RS_Activity = $_GET['totalRows_RS_Activity'];
} else {
  $all_RS_Activity = mysql_query($query_RS_Activity);
  $totalRows_RS_Activity = mysql_num_rows($all_RS_Activity);
}
$totalPages_RS_Activity = ceil($totalRows_RS_Activity/$maxRows_RS_Activity)-1;

$queryString_RS_Activity = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_RS_Activity") == false && 
        stristr($param, "totalRows_RS_Activity") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_RS_Activity = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_RS_Activity = sprintf("&totalRows_RS_Activity=%d%s", $totalRows_RS_Activity, $queryString_RS_Activity);
?>

<div class="activity_list">

<?php
//截取utf8字符串
function utf8Substr($str, $from, $len)
{
    return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'.
                       '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s',
                       '$1',$str);
}
?>

<?php
if($totalRows_RS_Activity==0)
{
?>
<div class="notfound">
<div class="act_img">
    <img src="./include/img/activity/notfound.jpg" width="200px"/>
</div>
<div class="words">
<span>
    <h2>哎呀，我没找到</h2><p style="font-size:30px;">o(≧口≦)o</p>
</span>
</div>
</div>
<hr />
<?php
}else{
$activity_format = 
	'<div class="summary">
	<div class="act_img">
		<img src="./include/img/activity/%d.jpg" width="200px" href="%s"/>
	</div>
	<div class="words">
	<span>
    	<h2><a href="activity/detail.php?activityId=%d" target="_blank">%s</a><span class="atc_state">%s</span></h2>
        <p>%s</p>
    </span>
    <span class="otherInfo">
    	<span class="first">活动时间：%s</span>
        <span>活动地点：%s</span>
        <span>招募人数：<em>%d</em></span>
    </span>
	</div>
	</div>
	<hr />';
$type1 = "招募中";
$type2 = "结束报名";
$type3 = "活动已结束";
do{
	echo sprintf( $activity_format,
	rand(1,11),
	"",
	$row_RS_Activity['id'],
	$row_RS_Activity['name'],
	($row_RS_Activity['end_time']<date("Y-m-d"))?($type3):($row_RS_Activity['deadline']<date("Y-m-d")?($type2):($type1)),
	strlen($row_RS_Activity['profile'])<100?$row_RS_Activity['profile']:(utf8Substr($row_RS_Activity['profile'],0, 100)."……"),
	$row_RS_Activity['begin_time'],
	$row_RS_Activity['place'],
	$row_RS_Activity['total_num']
	 );
	
} while($row_RS_Activity = mysql_fetch_assoc($RS_Activity));

?>

<table border="0">
    <tr>
      <td><?php if ($pageNum_RS_Activity > 0) { // Show if not first page ?>
          <a id="first_page" onclick="firstpage()" class="img_nav"> <<第一页 </a>
          <?php } // Show if not first page ?></td>
      <td><?php if ($pageNum_RS_Activity > 0) { // Show if not first page ?>
          <a id="pre_page" onclick="prepage()" class="img_nav"> <上一页 </a>
          <?php } // Show if not first page ?></td>
      <td><?php if ($pageNum_RS_Activity < $totalPages_RS_Activity) { // Show if not last page ?>
          <a id="next_page" onclick="nextpage()" class="img_nav"> 下一页> </a>
          <?php } // Show if not last page ?></td>
      <td><?php if ($pageNum_RS_Activity < $totalPages_RS_Activity) { // Show if not last page ?>
          <a id="last_page" onclick="lastpage()" class="img_nav"> 最后一页>> </a>
          <?php } // Show if not last page ?></td>
    </tr>
</table>
当前第第 <b id="current"> <?php echo $pageNum_RS_Activity+1 ?> </b>&nbsp;页&nbsp;&nbsp;
从 <b id="first"><?php echo 1 ?></b> 到 <b id="last"><?php echo $totalPages_RS_Activity+1 ?></b> 页(总共 <?php echo $totalRows_RS_Activity ?>个活动) </div>
<?php } ?>

