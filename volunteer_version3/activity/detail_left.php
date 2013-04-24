<div id="act_image">
    <img src="./include/img/activity_img.jpg" height="300px" width="180px" />
</div>
<div id="option">
<?php 
if( isset( $_SESSION[$_user_permission] ) ){

if( $_SESSION[$_user_permission] == $_up_v ){ 
	

$query_RS_participate = sprintf("SELECT user_id FROM participation WHERE user_id = '%s' AND activity_id = %d", $_SESSION[$_user_id],$_SESSION['activity_id'] );
$RS_participate = mysql_query($query_RS_participate, $root_conn) or die(mysql_error());
$totalRows_RS_participate = mysql_num_rows($RS_participate);


	?>



    <a id="take_part_in" name="take_part_in">
	<?php  if( $totalRows_RS_participate > 0 ){ ?>
	退出活动
	<?php } else { ?>
	参加活动
	<?php } ?>
	</a>
<?php } else  if( $_SESSION[$_user_permission] == $_up_t ) {?>

<?php } else  if( $_SESSION[$_user_permission] == $_up_r ) { ?>
    <a id="scan_people" name="scan_people">报名情况</a>
<?php } 
}

?>
</div>

