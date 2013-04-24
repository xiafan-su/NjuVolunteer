<?php
require_once('../include/php/basic.php');
require_once('../connections/root_conn.php');
?>

<?php


$maxRows_RS_activity_detail = 10;
$pageNum_RS_activity_detail = 0;
if (isset($_GET['pageNum_RS_activity_detail'])) {
  $pageNum_RS_activity_detail = $_GET['pageNum_RS_activity_detail'];
}
$startRow_RS_activity_detail = $pageNum_RS_activity_detail * $maxRows_RS_activity_detail;

$colname_RS_activity_detail = "-1";
if (isset($_GET['activityId'])) {
  $colname_RS_activity_detail = $_GET['activityId'];
}
mysql_select_db($database_root_conn, $root_conn);
$query_RS_activity_detail = sprintf("SELECT * FROM activity_info WHERE id = %d", $colname_RS_activity_detail);
$query_limit_RS_activity_detail = sprintf("%s LIMIT %d, %d", $query_RS_activity_detail, $startRow_RS_activity_detail, $maxRows_RS_activity_detail);
$RS_activity_detail = mysql_query($query_limit_RS_activity_detail, $root_conn) or die(mysql_error());
$row_RS_activity_detail = mysql_fetch_assoc($RS_activity_detail);

if (isset($_GET['totalRows_RS_activity_detail'])) {
  $totalRows_RS_activity_detail = $_GET['totalRows_RS_activity_detail'];
} else {
  $all_RS_activity_detail = mysql_query($query_RS_activity_detail);
  $totalRows_RS_activity_detail = mysql_num_rows($all_RS_activity_detail);
}
$totalPages_RS_activity_detail = ceil($totalRows_RS_activity_detail/$maxRows_RS_activity_detail)-1;

$colname_RS_participate = "-1";
if (isset($_SESSION['user_id'])) {
  $colname_RS_participate = $_SESSION['user_id'];
}
mysql_select_db($database_root_conn, $root_conn);
$query_RS_participate = sprintf("SELECT user_id, activity_id FROM participation WHERE user_id = '%s' AND `activity_id` = %d", $colname_RS_participate,
$colname_RS_activity_detail
);
$RS_participate = mysql_query($query_RS_participate, $root_conn) or die(mysql_error());

$totalRows_RS_participate = mysql_num_rows($RS_participate);
?>

<?php
//设置当前浏览的活动id
$_SESSION['activity_id']=$colname_RS_activity_detail;
$result = mysql_query("SELECT * FROM activity_info WHERE id = '" .$_SESSION['activity_id']. "'");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>活动中心</title>
<base href="http://<?php echo $_SERVER ['HTTP_HOST']; ?>/volunteer/" target="_self" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="include/css/main.css" rel="stylesheet" />
<link href="include/css/activity_detail.css" rel="stylesheet" />
<link href="include/css/tipsWindown.css" rel="stylesheet" />
<script charset="utf-8" src="../kindeditor-4.1.5/kindeditor-min.js"></script>
<script charset="utf-8" src="../kindeditor-4.1.5/lang/zh_CN.js"></script>
</head>

<body>
<?php
require('../include/php/header.php');
?>


<div class="main">
    <div id="left">
        <?php require("./detail_left.php"); ?>
    </div>
 <?php
while($row = mysql_fetch_array($result)){?>

    <div id="right">
        <div id="act_simple" class="span">
            <div class="span_title">
                <span id="act_title"><?php echo $row['name']?></span>
                <span id="act_state">
				<?php 
					if ($row['need_audit'] == false)
						echo "未审核";
					else echo "已审核";
				?>
                </span>
            </div>
            <div class="span_content">
                <ul>
                    <li><span class="span_content_attr">时间</span>
                    <span class="span_content_value"><?php echo $row['begin_time'] . " --- " . $row['end_time'] ?></span></li>
                    <li><span class="span_content_attr">持续</span>
                    <span class="span_content_value"><?php echo $row['last_time'] . "小时"?></span></li>
                    
                    <li><span class="span_content_attr">性质</span>
                    <span class="span_content_value">
                    <?php
						switch ($row['time_type']){
							case "temp" : echo "短期活动";break;
							case "longtime" : echo "长期活动";break;
							default : echo "未知";break;
						}
                    ?>
                    </span></li>
                    <li><span class="span_content_attr">活动类型</span>
                    <span class="span_content_value">
                    <?php
						switch ($row['attribution_type']){
							case "helpdisabled" : echo "助残";break;
							case "supporteducation" : echo "支教";break;
							default : echo "其他（还没写！！）";break;
						}
                    ?>
                    </span></li>

                    <li><span class="span_content_attr">地点</span>
                    <span class="span_content_value"><?php echo $row['place'] ?></span></li>
                </ul>
            </div>
        </div>
        <div id="act_detail" class="span">
            <div class="span_title"><span>活动介绍</span></div>
            <div id="act_introduction" class="span_content">
                <p><?php echo $row['profile']?>
                </p>
            </div>
            <?php }?>
            <!--<div class="span_title"><span>参加过这项活动的人还参加了</span></div>
            <div id="act_same"  class="span_content">
            
            </div-->
        </div>

        <div id="act_people" class="span">
            <div class="span_title"><span>报名情况</span><a  id="update_text">刷新</a></div>
            <div id="part_people_table" class="span_content">这里是报名情况
            	
            </div>
        </div>
    </div><!-- 结束right div -->
</div>

<?php
require('../include/php/footer.php');
?>
</body>

<script type="text/javascript"> 


</script>

<script src="include/js/jquery-1.9.1.min.js"></script>
<script src="include/js/tipswindown.js"></script>
<script src="include/js/sorted_table.js"></script>
<script src="include/js/activity_detail.js"></script>
</html>