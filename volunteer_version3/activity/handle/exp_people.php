<?php 
require_once('../../include/php/basic.php');
require_once('../../connections/root_conn.php');
$result = mysql_query("SELECT * FROM user_info WHERE id = '" .$_GET['user_id']. "'");
while($row = mysql_fetch_array($result)){
?>
<div id="" class="exp_people">
	<div id="" class="exp_people_title">基本信息</div>
	<div id="" class="exp_people_cotent">
		<ul class="info_people_simple">
			<li><span class="info_people_attr">学号</span><span class="info_people_value"><?php echo $row['id']; ?></span></li>
			<li><span class="info_people_attr">姓名</span><span class="info_people_value"><?php echo $row['name']; ?></span></li>
			<li><span class="info_people_attr">性别</span><span class="info_people_value"><?php echo $row['gender']; ?></span></li>
			<li><span class="info_people_attr">年级</span><span class="info_people_value"><?php echo $row['grade']; ?></span></li>
			<li><span class="info_people_attr">院系</span><span class="info_people_value"><?php echo $row['department']; ?></span></li>
			<li><span class="info_people_attr">城市</span><span class="info_people_value"><?php echo $row['city']; ?></span></li>
			<li><span class="info_people_attr">总服务时间</span><span class="info_people_value"><?php echo $row['volunteer_time']; ?></span></li>
		</ul>
	</div>
<?php }?>
	<div id="" class="exp_people_title">加入的组织</div>
	<div id="" class="exp_people_cotent">
		<ul>
			<li><a href="./team.php" target="_blank">天健社</a></li>
			<li><a href="./team.php" target="_blank">天健社</a></li>
			<li><a href="./team.php" target="_blank">天健社</a></li>
		</ul>
	</div>
	<div id="" class="exp_people_title">服务记录</div>
	<div id="" class="exp_people_cotent">
		<table id="exp_people_table" class="act_people_table">
		<tr><th>序号</th><th>时间</th><th>活动名称</th><th>组织团队</th><th>服务时间</th></tr>
		<tr class="even"><td>1</td><td>2013-01-22 17:38:45</td><td><a href="./team.php" target="_blank">南京大学志愿者临时活动</a></td><td>计算机</td><td>2</td></tr>
		<tr class="odd"><td>2</td><td>2013-03-22 17:38:45</td><td><a href="./team.php" target="_blank">南京大学志愿者临时活动</a></td><td>天健社</td><td>3</td></tr>
		<tr class="even"><td>3</td><td>2013-02-22 17:38:45</td><td><a href="./team.php" target="_blank">南京大学志愿者临时活动</a></td><td>计算机</td><td>2</td></tr>
		<tr class="odd"><td>4</td><td>2013-03-12 17:38:45</td><td><a href="./team.php" target="_blank">南京大学志愿者临时活动</a></td><td>天健社</td><td>3</td></tr>
		<tr class="even"><td>5</td><td>2013-03-02 17:38:45</td><td><a href="./team.php" target="_blank">南京大学志愿者临时活动</a></td><td>计算机</td><td>4</td></tr>
		<tr class="odd"><td>6</td><td>2013-03-24 17:38:45</td><td><a href="./team.php" target="_blank">南京大学志愿者临时活动</a></td><td>天健社</td><td>1</td></tr>
		<tr class="even"><td>7</td><td>2013-01-12 20:38:45</td><td><a href="./team.php" target="_blank">南京大学志愿者临时活动</a></td><td>计算机</td><td class="exp_time_zero">0</td></tr>
		<tr class="odd"><td>8</td><td>2013-03-22 16:38:45</td><td><a href="./team.php" target="_blank">南京大学志愿者临时活动</a></td><td>天健社</td><td>3</td></tr>
		<tr class="even"><td>9</td><td>2013-03-22 14:38:45</td><td><a href="./team.php" target="_blank">南京大学志愿者临时活动</a></td><td>计算机</td><td>2</td></tr>
		<tr class="odd"><td>10</td><td>2013-03-14 11:38:45</td><td><a href="./team.php" target="_blank">南京大学志愿者临时活动</a></td><td>天健社</td><td>5</td></tr>
		<tr class="even"><td>11</td><td>2013-03-25 12:38:45</td><td><a href="./team.php" target="_blank">南京大学志愿者临时活动</a></td><td>计算机</td><td>1</td></tr>
		<tr class="odd"><td>12</td><td>2013-03-01 14:38:45</td><td><a href="./team.php" target="_blank">南京大学志愿者临时活动</a></td><td>天健社</td><td>2</td></tr>
		</table>
	</div>
	<div id="" class="exp_people_title">诚信记录</div>
	<div id="" class="exp_people_cotent">无</div>

</div>




