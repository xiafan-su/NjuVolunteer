<?php /* Smarty version Smarty-3.1.7, created on 2013-04-23 18:38:52
         compiled from "./tpls/templates\zonev.html" */ ?>
<?php /*%%SmartyHeaderCode:9465516a19bb071fc0-66779518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44c556608e67759f0e68fc7fabee31d3f9c92847' => 
    array (
      0 => './tpls/templates\\zonev.html',
      1 => 1366713491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9465516a19bb071fc0-66779518',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516a19bb0c9a9',
  'variables' => 
  array (
    'user_name' => 0,
    'notes_number' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516a19bb0c9a9')) {function content_516a19bb0c9a9($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/zonet.css" rel="stylesheet" />

<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<title>个人空间</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main">

	<div id="up" class="">
		<div id="logo" class="">
			<img src="" width="80px" height="80px" border="0" alt="">
		</div>
		<div id="team_info" class="">
			<p><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
			<div id="notification_bar" class="">
				<span id="notes" class="notification_item">通知(<span id="notes_number" class=""><?php echo $_smarty_tpl->tpl_vars['notes_number']->value;?>
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
                        <div id="my_activity" class="menu_item_span">
							我参与的活动<a id="apply" href="http://www.baidu.com“ target="_blank"></a>
						</div>
						<div id="activity_record" class="menu_item_span">
							活动记录
						</div>
					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							通知
						</div>
						<div id="new_notice" class="menu_item_span">
							新通知
						</div>
						<div id="notice_record" class="menu_item_span">
							历史通知
						</div>
					</div>
                    <div id="" class="menu_items">
                    	<div id="" class="menu_item_title">
                        	团队
                        </div>
                        <div id="my_team" class="menu_item_span">
                        	我的团队
                        </div>
                        <div id="my_focused_team" class="menu_item_span">
                        	关注的团队
                        </div>
                    </div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							个人
						</div>
                        <div id="vol_profile" class="menu_item_span">
                        	个人资料
                        </div>
                        <div id="change_password" class="menu_item_span">
                        	修改密码
                        </div>
					</div>
				</div>
			</div>
			<div id="down_right" class="">
					<div id="main_title" class="">活动列表</div>
					<div id="main_content" class="">
					</div>
					<div id="main_content2" class="">
						正在载入……
					</div>
			</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="./assets/js/zonev.js"></script>
</body>
</html><?php }} ?>