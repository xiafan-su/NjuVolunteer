<?php 
require_once('../include/php/basic.php');
require_once('../connections/root_conn.php');
?>


<span id="show_activity_text" class="">更新</span>时间：<?php echo date("Y-m-d H:i:s"); ?>
<br />
<span id="go_back_home" class="">
	返回
</span>

<ul id="rec_dtl_ul">
	<li>
		<span class="rec_dtl_attr" style="width:100px">带队人学号：</span>
		<span class="">b101220000</span>
	</li>
	<li><span class="rec_dtl_attr">联系电话：</span><span class="">1590000000</span></li>
	<hr />
	<li>
		<span id="fold_volunteer" class="">╬</span><span class="">下面是本次活动记录的参与人员</span>
		<div id="act_people_div">
			<table class="act_people_table">
				<tr>
					<th>
						<input type="checkbox" />
					</th>
					<th>学号</th>
					<th>姓名</th>
					<th>院系</th>
					<th>志愿服务时间</th>
				</tr>
				<tr class="even">
					<td>
						<input type="checkbox" />
					</td>
					<td>b101220000</td>
					<td>武大师</td>
					<td>计算机系</td>
					<td>未录入</td>
				</tr>
				<tr class="odd">
					<td>
						<input type="checkbox" disabled="true"/>
					</td>
					<td>b101220001</td>
					<td>武大师</td>
					<td>计算机系</td>
					<td>4</td>
				</tr>
				<tr class="even">
					<td>
						<input type="checkbox" />
					</td>
					<td>b101220000</td>
					<td>武大师</td>
					<td>计算机系</td>
					<td>未录入</td>
				</tr>
				<tr class="odd">
					<td>
						<input type="checkbox" disabled="true"/>
					</td>
					<td>b101220001</td>
					<td>武大师</td>
					<td>计算机系</td>
					<td>4</td>
				</tr>
			</table>
			快捷操作<br />
			<input type="button" value="从报名表导入此参与表" /><br />
			<input type="button" value="将选择的志愿者移除该参与表" /><br />
			<input type="button" value="选择所有未录入服务时间的志愿者" /><br />
			<input type="button" value="将选择的志愿者设置服务时间为" />
			<input type="text" value="3">小时
			<br />
		</div>
	</li>
	<hr />
	<li>
		<span class="">小结</span>
		<div id="" class="">
			<textarea name="" rows="5" cols="80">
				嘿，在这里写总结。<br />
				如果已经写了那就有一个修改按钮。<br />
				什么？没写的话就是一个提交按钮呗！<br />
			</textarea>
			<input type="button" value="确定/修改">
		</div>
	</li>
</ul>