<?php
require_once('../../include/php/basic.php');
require_once('../../connections/root_conn.php');
?>

<?php
//mysql_select_db($database_root_conn, $root_conn);
$result = "";
if( isset($_POST['activity_id']) ){
	$result = mysql_query("SELECT * FROM participation,user_info WHERE activity_id = '".$_POST['activity_id']."' AND id = user_id");
} else if( isset($_SESSION['activity_id']) ){
	$result = mysql_query("SELECT * FROM participation,user_info WHERE activity_id = '".$_SESSION['activity_id']."' AND id = user_id");
} else return;
?>


<span id="act_people_update_text" class="">更新</span>时间：<?php echo date("Y-m-d H:i:s"); ?>
<table id="act_people_table" class="act_people_table" >
	<tr>
		<th><input id="check_all_act_people" type="checkbox" title="有bug暂时不能用" disabled="true" /></th>
		<th>学号</th>
		<th>姓名</th>
		<th>院系</th>
		<th>年级</th>
		<th>联系电话</th>
		<th>qq号</th>
	</tr>
    <?php while($row = mysql_fetch_array($result)){?>
	<tr class="even">
    <td><input class="checkbox" type="checkbox" /></td>
    <td><a class="act_user_id_col" title="点击查看该学生的信息"><?php echo $row['id'];?></a></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['department'];?></td>
    <td><?php echo $row['grade'];?></td>
    <td><?php echo $row['phone'];?></td><td><?php echo $row['qq'];?>
    </tr>
	<?php }?>
</table>

