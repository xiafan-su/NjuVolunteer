<?php /* Smarty version Smarty-3.1.7, created on 2013-05-17 22:11:42
         compiled from "../tpls/templates\include\statistics.html" */ ?>
<?php /*%%SmartyHeaderCode:24707519639e07d8cf2-65791734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a5264f7af42b008a9d5b23781f82b0f6dd82d6e' => 
    array (
      0 => '../tpls/templates\\include\\statistics.html',
      1 => 1368799899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24707519639e07d8cf2-65791734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519639e086f53',
  'variables' => 
  array (
    'total_visits' => 0,
    'total_volunteers' => 0,
    'total_teams' => 0,
    'total_activities' => 0,
    'total_peron_times' => 0,
    'total_hours' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519639e086f53')) {function content_519639e086f53($_smarty_tpl) {?><h2 style="font-size:24px;margin:20px; line-height:30px">本网站累计已有<?php echo $_smarty_tpl->tpl_vars['total_visits']->value;?>
人次访问，注册志愿者达<?php echo $_smarty_tpl->tpl_vars['total_volunteers']->value;?>
人，<?php echo $_smarty_tpl->tpl_vars['total_teams']->value;?>
个团队在系统中备案，
举办志愿活动<?php echo $_smarty_tpl->tpl_vars['total_activities']->value;?>
个，
累计志愿服务<?php echo $_smarty_tpl->tpl_vars['total_peron_times']->value;?>
人次，
服务时间<?php echo $_smarty_tpl->tpl_vars['total_hours']->value;?>
小时。</h2><?php }} ?>