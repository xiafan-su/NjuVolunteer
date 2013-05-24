<?php /* Smarty version Smarty-3.1.7, created on 2013-05-22 15:51:56
         compiled from "../tpls/templates\handle\act_handle.html" */ ?>
<?php /*%%SmartyHeaderCode:22772519c791c769551-97125505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98ac2491da6aa96dd5b95ddfd79f9643e04a48d2' => 
    array (
      0 => '../tpls/templates\\handle\\act_handle.html',
      1 => 1369185307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22772519c791c769551-97125505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'act_list' => 0,
    'act' => 0,
    'have_more' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519c791c7ef29',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519c791c7ef29')) {function content_519c791c7ef29($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
<div class="summary">
    <div class="act_img">
        <img src="../Upload/picture/<?php echo $_smarty_tpl->tpl_vars['act']->value['img'];?>
" width="174" />
    </div>
    <div class="words">
        <div>
            <h2><a href="act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</a><span class="atc_state"><?php echo $_smarty_tpl->tpl_vars['act']->value['state'];?>
</span></h2>
            <span style="height:70px;width:660px;float:left;overflow:hidden"><?php echo $_smarty_tpl->tpl_vars['act']->value['profile'];?>
</span>
        </div>
        <div class="otherInfo">
            <span class="first">活动时间：<?php echo $_smarty_tpl->tpl_vars['act']->value['time'];?>
</span>
            <span>活动地点：<?php echo $_smarty_tpl->tpl_vars['act']->value['place'];?>
</span>
            <span>招募人数：<em><?php echo $_smarty_tpl->tpl_vars['act']->value['offer_num'];?>
</em></span>
        </div>
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