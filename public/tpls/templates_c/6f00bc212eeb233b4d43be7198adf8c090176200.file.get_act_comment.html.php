<?php /* Smarty version Smarty-3.1.7, created on 2013-06-01 15:28:52
         compiled from "../tpls/templates\handle\get_act_comment.html" */ ?>
<?php /*%%SmartyHeaderCode:2515651a9a2b48bbe61-78486111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f00bc212eeb233b4d43be7198adf8c090176200' => 
    array (
      0 => '../tpls/templates\\handle\\get_act_comment.html',
      1 => 1369465292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2515651a9a2b48bbe61-78486111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comment_detail' => 0,
    'act_comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a9a2b49ad86',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a9a2b49ad86')) {function content_51a9a2b49ad86($_smarty_tpl) {?>            
<?php  $_smarty_tpl->tpl_vars['act_comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act_comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment_detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act_comment']->key => $_smarty_tpl->tpl_vars['act_comment']->value){
$_smarty_tpl->tpl_vars['act_comment']->_loop = true;
?>
<div class="comment-panel">
    <div class="comment-title">
        <div class="comment-name">
        <?php if ($_smarty_tpl->tpl_vars['act_comment']->value['user_id']!="id"){?>
            <?php if ($_smarty_tpl->tpl_vars['act_comment']->value['flag_faculty']==0){?>
                <a href="indexv.php?user_id=<?php echo $_smarty_tpl->tpl_vars['act_comment']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['act_comment']->value['name'];?>
(<?php echo $_smarty_tpl->tpl_vars['act_comment']->value['user_id'];?>
)</a>
            <?php }else{ ?>
                <a href="indext.php?team_id=<?php echo $_smarty_tpl->tpl_vars['act_comment']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['act_comment']->value['name'];?>
(<?php echo $_smarty_tpl->tpl_vars['act_comment']->value['user_id'];?>
)</a>
            <?php }?>
        <?php }else{ ?>
            <?php echo $_smarty_tpl->tpl_vars['act_comment']->value['name'];?>

        <?php }?>
        </div>
        <div class="comment-time">[<?php echo $_smarty_tpl->tpl_vars['act_comment']->value['time'];?>
]</div>
    </div>
    <div class="comment-content">
        <div style="width:410px;word-break:break-all"><?php echo $_smarty_tpl->tpl_vars['act_comment']->value['content'];?>
</div>
        <span class="name-used" style="display:none"><?php echo $_smarty_tpl->tpl_vars['act_comment']->value['user_id'];?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['act_comment']->value['user_id']!="id"){?>
        <span class="name-used" style="display:none"><?php echo $_smarty_tpl->tpl_vars['act_comment']->value['name'];?>
(<?php echo $_smarty_tpl->tpl_vars['act_comment']->value['user_id'];?>
)</span>
        <?php }else{ ?>
        <span class="name-used" style="display:none"><?php echo $_smarty_tpl->tpl_vars['act_comment']->value['name'];?>
</span>
        <?php }?>
        <span class="reply"><a href="#comment-w">回复</a></span>
    </div>
</div>
<?php } ?><?php }} ?>