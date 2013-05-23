<?php /* Smarty version Smarty-3.1.7, created on 2013-05-22 08:34:31
         compiled from "../tpls/templates\handle\notice_page.html" */ ?>
<?php /*%%SmartyHeaderCode:2453519c1297991543-11315713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f729de46fcdde10430243b250319025c9cd167df' => 
    array (
      0 => '../tpls/templates\\handle\\notice_page.html',
      1 => 1368808313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2453519c1297991543-11315713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519c1297b33b0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519c1297b33b0')) {function content_519c1297b33b0($_smarty_tpl) {?><div class="d-title" id="d-title">
    <?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>

</div>
<div class="d-time">
    <div class="time-detail" id="time-detail">发布时间：<?php echo $_smarty_tpl->tpl_vars['content']->value['time'];?>
</div>
    <div class="times-detail" id="times-detail">
    	<?php if ($_smarty_tpl->tpl_vars['type']->value==1){?>
        浏览次数：<?php echo $_smarty_tpl->tpl_vars['content']->value['counts'];?>
次
        <?php }elseif($_smarty_tpl->tpl_vars['type']->value==2){?>
        E-mail:<?php echo $_smarty_tpl->tpl_vars['content']->value['email'];?>

        <?php }elseif($_smarty_tpl->tpl_vars['type']->value==3){?>
        作者：<?php echo $_smarty_tpl->tpl_vars['content']->value['writer'];?>

        <?php }?>
    </div>
</div>
<hr>
<div class="d-content" id="d-content">
	<?php echo $_smarty_tpl->tpl_vars['content']->value['content'];?>

    <?php if ($_smarty_tpl->tpl_vars['type']->value==2){?>
    <br/>回答：<?php echo $_smarty_tpl->tpl_vars['content']->value['answer'];?>

    <?php }?>
</div><?php }} ?>