<?php 
require_once('../include/php/basic.php');
require_once('../connections/root_conn.php');
?>


<span id="show_activity_text" class="">更新</span>时间：<?php echo date("Y-m-d H:i:s"); ?>
<br />
<span id="go_back_home" class="">
	返回
</span>

<div id="">
			带队人：<input type="text">
            联系方式：<input type="text">
            </br>
            参加人员列表
			<table class="act_people_table">
				<tr>
					<th>
						<input type="checkbox"  disabled="true"/>
					</th>
					<th>学号</th>
					<th>姓名</th>
					<th>院系</th>
					<th>电话</th>
				</tr>
				<tr class="even">
					<td>
						<input type="checkbox"  disabled="true"/>
					</td>
					<td>b101220000</td>
					<td>武大师</td>
					<td>计算机系</td>
					<td>13567564378</td>
				</tr>
				<tr class="odd">
					<td>
						<input type="checkbox" disabled="true"/>
					</td>
					<td>b101220001</td>
					<td>王同学</td>
					<td>文学院</td>
					<td>13567564378</td>
				</tr>
				<tr class="even">
					<td>
						<input type="checkbox"  disabled="true"/>
					</td>
					<td>b101220000</td>
					<td>李同学</td>
					<td>社会学院</td>
					<td>13567564378</td>
				</tr>
				<tr class="odd">
					<td>
						<input type="checkbox" disabled="true"/>
					</td>
					<td>b101220001</td>
					<td>谭同学</td>
					<td>计算机系</td>
					<td>13567564378</td>
				</tr>
			</table>
			快捷操作<br />
			<input type="button" value="从报名表导参加者" /><br />
			<input type="button" value="将选择的志愿者移除该参与表"  /><br />

			<br />
</div>
