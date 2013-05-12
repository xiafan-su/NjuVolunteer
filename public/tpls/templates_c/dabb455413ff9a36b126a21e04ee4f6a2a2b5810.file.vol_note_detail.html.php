<?php /* Smarty version Smarty-3.1.7, created on 2013-05-12 21:21:05
         compiled from "../tpls/templates\include\vol_note_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:9669518f8d8fb8af37-40475941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dabb455413ff9a36b126a21e04ee4f6a2a2b5810' => 
    array (
      0 => '../tpls/templates\\include\\vol_note_detail.html',
      1 => 1368363714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9669518f8d8fb8af37-40475941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_518f8d8fbcfb5',
  'variables' => 
  array (
    'sender' => 0,
    'title' => 0,
    'content' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518f8d8fbcfb5')) {function content_518f8d8fbcfb5($_smarty_tpl) {?>
<div class="c-sender"><?php echo $_smarty_tpl->tpl_vars['sender']->value;?>
</div>
<div class="c-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
<div class="c-content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
<div class="c-time"><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</div>
<style>
.c-sender{
	width:400px;
	
}
.c-title{
	
}
.c-content{
	
}
.c-time{
}
</style><?php }} ?>