<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

?>
页面内容：<br />
（收、发）通知列表<br />
<br />
页面参数：<br />
<table border="1">
<tr><th>参数</th><th>含义</th><th>取值</th></tr>
<tr>
	<td>type</td>
	<td>指定通知显示的内容</td>
	<td>
		<table border="1">
			<tr><td>"recv"</td><td>显示收到的通知</td></tr>
			<tr><td>"sent"</td><td>显示已发送的通知</td></tr>
		</table>
	</td>
</tr>
</table>
<br />
其他：<br />
当前团队id请直接从SESSION获取<br />