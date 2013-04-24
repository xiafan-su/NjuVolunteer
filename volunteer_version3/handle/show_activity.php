<?php 
require_once('../include/php/basic.php');
require_once('../connections/root_conn.php');
?>


<span id="show_activity_text" class="">更新</span>时间：<?php echo date("Y-m-d H:i:s"); ?>
<?php if ($_POST['user_id'] == 1){?>
<table id="show_activity_table" class="act_people_table">
	<tr>
    <th>活动名称</th>
    <th>负责人</th>
    <th>状态</th>
    <th>报名情况</th>
    </tr>
    <?php $count=0;
	$result = mysql_query("SELECT * FROM activity_info WHERE end_time > '" . date("Y-m-d H:i:s") ."' ");
	while($row = mysql_fetch_array($result)){
	if ($row['publisher'] == $_SESSION[$_user_faculty_id]){
			 if (($count ++) % 2 == 0){?>
				<tr class="even">
           <?php }else{?>
				<tr class="odd">
           <?php }?>
           <td style="text-align:left">
					<span class="fold_rec" title="展开/折叠活动记录">╬</span>
					<a href="./activity/detail.php?activityId=<?php echo $row['id']; ?> " target="_blank">
					<?php echo $row['name'] ?></a>
					<div class="zone_rec_list">
						<table class="act_people_table">
							<tr><th>时间</th><th>标题</th><th>带队人</th></tr>
							<tr class="even"><td>2010-10-03 15:00:00</td><td><span class="rec_index">第一次活动记录</span></td><td>王同学</td></tr>
							<tr class="odd"><td>2010-10-04 15:00:00</td><td><span class="rec_index">第二次活动记录</span></td><td>李同学</td></tr>
							<tr class="even"><td>2010-10-05 15:00:00</td><td><span class="rec_index">第三次活动记录</span></td><td>武大师</td></tr>
						</table>
						<span class="link_add_rec">添加活动记录</span>
					</div>
			</td>
           <td><?php echo $row['responser'] ?></td>
           <td><?php echo $row['state'] ?></td>
		   <td><span actid="<?php echo  $row['id']  ?>" class="go_to_act_people">》》》</span></td>
    <?php }}?>
</table>
<?php }else if ($_POST['user_id'] == 2){?>
<table id="show_activity_table" class="act_people_table">
	<tr>
    <th>活动名称</th>
    <th>负责人</th>
    <th>状态</th>
    <th>报名情况</th>
    </tr>
    <?php $count=0;
	$result = mysql_query("SELECT * FROM activity_info WHERE end_time < '" . date("Y-m-d H:i:s") ."' ");
	while($row = mysql_fetch_array($result)){
	if ($row['publisher'] == $_SESSION[$_user_faculty_id]){
    if (($count ++) % 2 == 0){?>
		   <tr class="even">
           <?php }else{?>
           <tr class="odd">
           <?php }?>
           <td style="text-align:left">
					<span class="fold_rec">╬</span>
					<a href="./activity/detail.php?activityId=<?php echo $row['id']; ?> " target="_blank"><?php echo $row['name'] ?></a>
					
					<div class="zone_rec_list">
						<table class="act_people_table">
							<tr><th>时间</th><th>标题</th><th>带队人</th></tr>
							<tr class="even"><td>2010-10-03 15:00:00</td><td><span class="rec_index">第一次活动记录</span></td><td>王同学</td></tr>
							<tr class="odd"><td>2010-10-04 15:00:00</td><td><span class="rec_index">第二次活动记录</span></td><td>李同学</td></tr>
							<tr class="even"><td>2010-10-05 15:00:00</td><td><span class="rec_index">第三次活动记录</span></td><td>武大师</td></tr>
						</table>
					</div>
			</td>
           <td><?php echo $row['responser'] ?></td>
		   <td><?php echo $row['state'] ?></td>
		   <td><span actid="<?php echo  $row['id']  ?>" class="go_to_act_people">》》》</span></td>
    <?php }}?>
</table>
<?php }else if ($_POST['user_id'] == 3){?>
<table id="show_activity_table" class="act_people_table">
	<tr>
    <th>学号</th>
    <th>姓名</th>
    <th>联系方式</th>
    </tr>
    
    <?php $count=0;
	$result = mysql_query("SELECT * FROM user_info");
	while($row = mysql_fetch_array($result)){
		if ($row['permission'] == "Visitor" && $row['faculty'] == $_SESSION[$_user_faculty]){
    if (($count ++) % 2 == 0){?>
		   <tr class="even">
           <?php }else{?>
           <tr class="odd">
           <?php }?>
           <td><?php echo $row['id'] ?></td>
           <td><?php echo $row['name'] ?></td>
           <td><?php echo $row['phone'] ?></td>
    <?php }}?>
    
</table>
<?php }else if ($_POST['user_id'] == 4){?>
<table id="show_activity_table" class="act_people_table">
	<tr>
    <th>活动名称</th>
    <th>负责人</th>
    </tr>
<?php $count=0;
	$result = mysql_query("SELECT * FROM activity_info");
	while($row = mysql_fetch_array($result)){
		if ($row['state'] == "auditing" && $row['need_audit'] == true && $row['publisher'] == $_SESSION[$_user_faculty_id]){
    		if (($count ++) % 2 == 0){?>
            	<tr class="even">
				<?php }else{?>
                <tr class="odd">
				<?php }?>
           <td style="text-align:left"><?php echo $row['name'] ?></td>
           <td><?php echo $row['responser']?></td>
    <?php }}?></table>
<?php }else if ($_POST['user_id'] == 7){ ?>
<table id="show_activity_table" class="act_people_table">
	<tr>
    <th>学号</th>
    <th>姓名</th>
    <th>联系方式</th>
    </tr>
    
    <?php $count=0;
	$result = mysql_query("SELECT * FROM user_info");
	while($row = mysql_fetch_array($result)){
		if ($row['faculty'] == $_SESSION[$_user_faculty] && $row['id'] != $_SESSION[$_user_id]){
    if (($count ++) % 2 == 0){?>
		   <tr class="even">
           <?php }else{?>
           <tr class="odd">
           <?php }?>
           <td><?php echo $row['id'] ?></td>
           <td><?php echo $row['name'] ?></td>
           <td><?php echo $row['phone'] ?></td>
    <?php }}?>
    
</table>
<?php }?>