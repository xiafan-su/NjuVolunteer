<?php /* Smarty version Smarty-3.1.7, created on 2013-05-16 22:48:51
         compiled from "./tpls/templates\zonev.html" */ ?>
<?php /*%%SmartyHeaderCode:237935177976cd9d591-18584448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44c556608e67759f0e68fc7fabee31d3f9c92847' => 
    array (
      0 => './tpls/templates\\zonev.html',
      1 => 1368706884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237935177976cd9d591-18584448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5177976cdf086',
  'variables' => 
  array (
    'user_name' => 0,
    'volunteer_time' => 0,
    'base_time' => 0,
    'honor_time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5177976cdf086')) {function content_5177976cdf086($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/zonev.css" rel="stylesheet" />
<link type="text/css" rel="stylesheet" href="./plugin/calendar/calendar.css" >
<script type="text/javascript" src="./plugin/calendar/calendar.js" ></script>  
<script type="text/javascript" src="./plugin/calendar/calendar-zh.js" ></script>
<script type="text/javascript" src="./plugin/calendar/calendar-setup.js"></script>

<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>

<title>个人空间</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main">

	<div id="up" class="">
		<div id="logo" class="" style="float:left">
			<img src="./assets/img/head_photo/boy/178.jpg" width="80px" height="80px" border="0" alt="">
		</div>
		<div id="person_info" class="person-info" style="float:left">
			<div id="user_name" ><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</div>
            <div id="user_level">
            	<img src="./assets/img/star.png" />
                <img src="./assets/img/star.png" />
                <img src="./assets/img/star.png" />
            </div>
			<div id="server-time">服务总时间：<?php echo $_smarty_tpl->tpl_vars['volunteer_time']->value;?>
小时</div>
            <div id="base-time">基础时间：<?php echo $_smarty_tpl->tpl_vars['base_time']->value;?>
小时</div>
            <div id="honor-time">荣誉时间：<?php echo $_smarty_tpl->tpl_vars['honor_time']->value;?>
小时</div>
            <div id="signature">签名：
            	<input type="text" class="signature" id="sign" value="我了个草/(ㄒoㄒ)/~~" onblur="change_sign()"/>
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
                        <div id="change_profile" class="menu_item_span">
                        	修改资料
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
<div id="note_detail"></div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="./assets/js/zonev.js"></script>

</body>
</html><?php }} ?>