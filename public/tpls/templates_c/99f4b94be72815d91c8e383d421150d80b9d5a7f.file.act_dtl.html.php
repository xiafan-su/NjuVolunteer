<?php /* Smarty version Smarty-3.1.7, created on 2013-04-24 20:52:04
         compiled from "./tpls/templates\act_dtl.html" */ ?>
<?php /*%%SmartyHeaderCode:2998951774793cdc5c3-31257610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99f4b94be72815d91c8e383d421150d80b9d5a7f' => 
    array (
      0 => './tpls/templates\\act_dtl.html',
      1 => 1366807921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2998951774793cdc5c3-31257610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51774793d659a',
  'variables' => 
  array (
    'act_title' => 0,
    'act_state' => 0,
    'act_begin_time' => 0,
    'act_end_time' => 0,
    'last_time' => 0,
    'act_time_type' => 0,
    'act_attr_type' => 0,
    'act_place' => 0,
    'act_profile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51774793d659a')) {function content_51774793d659a($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/act_dtl.css" rel="stylesheet" />

<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/act_dtl.js"></script>
<title>活动详细页面</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main">
	<div id="left">
        <?php echo $_smarty_tpl->getSubTemplate ("include/act_dtl_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
	<div id="right">
        <div id="act_simple">
            <div class="div_title">
                <div id="act_title"><?php echo $_smarty_tpl->tpl_vars['act_title']->value;?>
</div>
                <div id="act_state"><?php echo $_smarty_tpl->tpl_vars['act_state']->value;?>
</div>
            </div>
            <div class="div_content">
                <ul>
                    <li><div class="div_content_attr">时间</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['act_begin_time']->value;?>
 --- <?php echo $_smarty_tpl->tpl_vars['act_end_time']->value;?>
</div></li>
                    <li><div class="div_content_attr">持续</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['last_time']->value;?>
小时</div></li>
                    <li><div class="div_content_attr">性质</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['act_time_type']->value;?>
</div></li>
                    <li><div class="div_content_attr">类型</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['act_attr_type']->value;?>
</div></li>
                    <li><div class="div_content_attr">地点</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['act_place']->value;?>
</div></li>
                </ul>
            </div>
        </div>
        <div id="act_detail" class="div">
            <div class="div_title2"><div>活动介绍</div></div>
            <div id="act_introduction">
				<?php echo $_smarty_tpl->tpl_vars['act_profile']->value;?>

			</div>
            <div class="div_title2"><div>参加过这项活动的人还参加了</div></div>
            <div id="act_same"  class="div_content"></div>
        </div>
		<div id="" class="clearBar">&nbsp;</div>
    </div><!-- 结束right div -->
</div>

<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>