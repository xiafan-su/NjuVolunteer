<?php /* Smarty version Smarty-3.1.7, created on 2013-04-22 17:48:19
         compiled from "../tpls/templates\handle\act_handle.html" */ ?>
<?php /*%%SmartyHeaderCode:279345174f768f308b3-43611276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98ac2491da6aa96dd5b95ddfd79f9643e04a48d2' => 
    array (
      0 => '../tpls/templates\\handle\\act_handle.html',
      1 => 1366623625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279345174f768f308b3-43611276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5174f7690950e',
  'variables' => 
  array (
    'act_list' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5174f7690950e')) {function content_5174f7690950e($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
<div class="summary">
    <div class="act_img">
        <img src="./include/img/activity/.1jpg" width="200px" height="130px"href="www.baidu.com"/>
    </div>
    <div class="words">
        <span>
            <h2><a href="activity/detail.php?activityId=1" target="_blank"><?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</a><span class="atc_state"><?php echo $_smarty_tpl->tpl_vars['act']->value['state'];?>
</span></h2>
            <p><?php echo $_smarty_tpl->tpl_vars['act']->value['profile'];?>
</p>
        </span>
        <span class="otherInfo">
            <span class="first">活动时间：<?php echo $_smarty_tpl->tpl_vars['act']->value['time'];?>
</span>
            <span>活动地点：<?php echo $_smarty_tpl->tpl_vars['act']->value['place'];?>
</span>
            <span>招募人数：<em><?php echo $_smarty_tpl->tpl_vars['act']->value['offer_num'];?>
</em></span>
        </span>
    </div>
</div>
<?php } ?>
<?php }} ?>