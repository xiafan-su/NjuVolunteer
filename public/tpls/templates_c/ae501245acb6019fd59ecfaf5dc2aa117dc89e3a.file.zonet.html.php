<?php /* Smarty version Smarty-3.1.7, created on 2013-05-20 05:41:36
         compiled from "./tpls/templates\zonet.html" */ ?>
<?php /*%%SmartyHeaderCode:30156519940e71d67c0-30363474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae501245acb6019fd59ecfaf5dc2aa117dc89e3a' => 
    array (
      0 => './tpls/templates\\zonet.html',
      1 => 1368999604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30156519940e71d67c0-30363474',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519940e72471f',
  'variables' => 
  array (
    'team_logo' => 0,
    'user_name' => 0,
    'notes_number' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519940e72471f')) {function content_519940e72471f($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/tipswindown.css" rel="stylesheet" />
<link href="./assets/css/zonet.css" rel="stylesheet" />
<link href="./assets/css/actz.css" rel="stylesheet" />
<link href="./assets/css/rec_dtl.css" rel="stylesheet" />
<link href="./assets/css/rec_edit.css" rel="stylesheet" />
<link href="./assets/css/mem.css" rel="stylesheet" />
<link href="./assets/css/note.css" rel="stylesheet" />
<script charset="utf-8" src="./plugin/kindeditor-4.1.5/kindeditor-min.js"></script>
<script charset="utf-8" src="./plugin/kindeditor-4.1.5/lang/zh_CN.js"></script>
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<title>团队空间</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div class="main">

	<div id="up" class="">
		<div id="logo" class="">
			<img src="<?php echo $_smarty_tpl->tpl_vars['team_logo']->value;?>
"  title="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
">
		</div>
		<div id="team_info" class="">
			<p><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
			<div id="notification_bar" class="">
				<span id="notes"  title="点击查看未读通知" onclick="$('#util_note_recv').trigger('click');" class="notification_item">通知(<span id="notes_number"><?php echo $_smarty_tpl->tpl_vars['notes_number']->value;?>
</span>)</span>
			</div>
		</div>
	</div>
<div id="down" class="">
			<div id="down_left" class="">
				<div id="" class="menu">
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							活动
						</div>
                        <div id="util_apply_activity" class="menu_item_span">
							申请活动
						</div>
						<div id="util_start_activity" class="menu_item_span">
							发起的活动
						</div>
						<div id="util_finished_activity" class="menu_item_span">
							完成的活动
						</div>
						<div id="util_extend_time" class="menu_item_span">
							快捷操作
						</div>
					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							通知
						</div>
						<div id="util_note_edit" class="menu_item_span">
							发通知
						</div>
						<div id="util_note_recv" class="menu_item_span">
							收到的通知
						</div>
						<div id="util_note_sent" class="menu_item_span">
							发送的通知
						</div>
					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							团队管理
						</div>
						<div id="util_mem" class="menu_item_span">
							成员
						</div>
						<div id="util_infot" class="menu_item_span">
							资料
						</div>
					</div>
				</div>
			</div>
			<div id="down_right" class="">
					<div id="main_title" class=""  style="padding-left:20px;">活动列表</div>
					<div id="main_content" class="">
					</div>
					<div id="main_content2" class="">
						正在载入……
					</div>
			</div>
	</div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
<script src="./assets/js/md5.js"></script>
<script src="./assets/js/tipswindown.js"></script>
<script src="./assets/js/mem.js"></script><!-- 一定要在zonet.js前面 -->
<script src="./assets/js/zonet.js"></script>
<script src="./assets/js/actz.js"></script>
<script src="./assets/js/note.js"></script>
<!--
<script language="javascript">
$.ajax({
	type:"POST",
	url:"./include/rec_dtl.php",
	data:{documentId:232},
	success:function(html){
		tipsWindown("档案信息","text:"+html,"900","427","true","","true","");
	}
});
</script>  -->
</html><?php }} ?>