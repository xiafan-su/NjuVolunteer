<?php /* Smarty version Smarty-3.1.7, created on 2013-05-22 17:23:26
         compiled from "./tpls/templates\super_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:6266519c8e8e499047-67591812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6a328254f3c3ea1ecde6f19f08837bf57cbb730' => 
    array (
      0 => './tpls/templates\\super_admin.html',
      1 => 1369145194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6266519c8e8e499047-67591812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519c8e8e4fe8a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519c8e8e4fe8a')) {function content_519c8e8e4fe8a($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="./assets/img/header/logo.png">
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/tipswindown.css" rel="stylesheet" />
<link href="./assets/css/zonea.css" rel="stylesheet" />
<link href="./assets/css/actz.css" rel="stylesheet" />
<link href="./assets/css/rec_dtl.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>

<title>超级管理员空间</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div class="main">

	<div id="up" class="">
		<div id="logo" class="">
			<img src="./assets/img/head_photo/boy/4.jpg" width="80px" height="80px" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
">
		</div>
		<div id="admin_info" class="">
			<p><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>


		</div>
	</div>
<div id="down" class="">
			<div id="down_left" class="">
				<div id="" class="menu">
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							管理活动
						</div>
                        <div id="examine_act" class="menu_item_span">
							审核活动
						</div>
						<div id="view_act_info" class="menu_item_span">
							查看活动统计
						</div>
					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							管理团队
						</div>
						<div id="add_new_team" class="menu_item_span">
							增加新团队
						</div>
						<div id="change_team_info" class="menu_item_span">
							修改团队密码
						</div>
					</div>
					<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							管理志愿者
						</div>
						<div id="add_vol_time" class="menu_item_span">
							增加服务时间
						</div>
					</div>
                    
                    	<div id="" class="menu_item">
						<div id="" class="menu_item_title">
							通知
						</div>
                        <div id="send_notice" class="menu_item_span">
							发通知
						</div>
                       <div id="received_notice" class="menu_item_span">
							收到的通知
						</div>
						<div id="sent_notice" class="menu_item_span">
							发送的通知
						</div>
					</div>
                    
                    
                    
                    
				</div>
			</div>
			<div id="down_right" class="">
					<div id="main_title" class=""></div>
					<div id="main_content" class="">
					</div>

			</div>
	</div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
<script type="text/javascript" src="./assets/js/super_admin.js"></script>
<script src="./assets/js/tipswindown.js"></script>
<script src="./assets/js/actz.js"></script>
<script src="./assets/js/note_admin.js"></script>
</html><?php }} ?>