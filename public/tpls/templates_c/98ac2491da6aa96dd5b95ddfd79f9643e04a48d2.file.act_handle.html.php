<?php /* Smarty version Smarty-3.1.7, created on 2013-04-25 08:59:44
         compiled from "../tpls/templates\handle\act_handle.html" */ ?>
<?php /*%%SmartyHeaderCode:249651772d64a01d92-29562757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98ac2491da6aa96dd5b95ddfd79f9643e04a48d2' => 
    array (
      0 => '../tpls/templates\\handle\\act_handle.html',
      1 => 1366851542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249651772d64a01d92-29562757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51772d64a666f',
  'variables' => 
  array (
    'act_list' => 0,
    'act' => 0,
    'have_more' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51772d64a666f')) {function content_51772d64a666f($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
<div class="summary">
    <div class="act_img">
        <img src="./assets/img/activity_center/<?php echo $_smarty_tpl->tpl_vars['act']->value['img'];?>
.jpg" width="200px" height="130px" href="www.baidu.com"/>
    </div>
    <div class="words">
        <span>
            <h2><a href="./act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
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
<?php if (isset($_smarty_tpl->tpl_vars['have_more']->value)){?>
	<?php if ($_smarty_tpl->tpl_vars['have_more']->value==1){?>
    <div class="more" id="more" onclick="more()">
        <div class="more-but">更多</div>
        <div style=""></div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['have_more']->value==0){?>
    <div class="more" id="nomore">
        <div class="more-but">没有更多了</div>
        <div style=""></div>
    </div>
    <?php }?>
<?php }?>
<?php }} ?>