<?php /* Smarty version Smarty-3.1.7, created on 2013-05-25 14:33:32
         compiled from "./tpls/templates\zonev.html" */ ?>
<?php /*%%SmartyHeaderCode:46451a05b3c9caa74-05052641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44c556608e67759f0e68fc7fabee31d3f9c92847' => 
    array (
      0 => './tpls/templates\\zonev.html',
      1 => 1369463197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46451a05b3c9caa74-05052641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_name' => 0,
    'user_rate' => 0,
    'volunteer_time' => 0,
    'base_time' => 0,
    'honor_time' => 0,
    'signature' => 0,
    'notice_num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a05b3cc2363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a05b3cc2363')) {function content_51a05b3cc2363($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="./assets/img/header/logo.png">
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
&nbsp;&nbsp;&nbsp;</div>
            <div id="user_level">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_rate']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
			<img src="./assets/img/star.png" /> 
			<?php endfor; endif; ?>
            </div>
			<div id="server-time">服务总时间：<?php echo $_smarty_tpl->tpl_vars['volunteer_time']->value;?>
小时</div>
            <div id="base-time">基础时间：<?php echo $_smarty_tpl->tpl_vars['base_time']->value;?>
小时</div>
            <div id="honor-time">荣誉时间：<?php echo $_smarty_tpl->tpl_vars['honor_time']->value;?>
小时</div>
            <div id="signature">
            	<span>签名：</span>
            	<span  class="signature" onclick="$(this).toggle();$(this).next().toggle();$(this).next().focus();"><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</span>
            	<input style="display:none" type="text" class="signature" id="sign" value="<?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
" onblur="change_sign(); $(this).toggle(); $(this).prev().text($(this).val()); $(this).prev().toggle();"/>
              
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
							新通知<?php echo $_smarty_tpl->tpl_vars['notice_num']->value;?>

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
					<div id="main_title" class=""  style="padding-left:20px;">活动列表</div>
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