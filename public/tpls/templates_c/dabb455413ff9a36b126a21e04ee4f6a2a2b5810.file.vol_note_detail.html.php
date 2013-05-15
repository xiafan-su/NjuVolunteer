<?php /* Smarty version Smarty-3.1.7, created on 2013-05-14 20:50:09
         compiled from "../tpls/templates\include\vol_note_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:9669518f8d8fb8af37-40475941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dabb455413ff9a36b126a21e04ee4f6a2a2b5810' => 
    array (
      0 => '../tpls/templates\\include\\vol_note_detail.html',
      1 => 1368530878,
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
    'title' => 0,
    'sender' => 0,
    'time' => 0,
    'content' => 0,
    'id' => 0,
    'state' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518f8d8fbcfb5')) {function content_518f8d8fbcfb5($_smarty_tpl) {?><div class="c-cover" id="c-cover"></div>
<div class="c-haha">
	<div class="c-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
	<div class="c-sender">发送者：<?php echo $_smarty_tpl->tpl_vars['sender']->value;?>
</div>
	<div class="c-time"><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</div>
    <div style="width:400px;height:5px;background:#999;float:left"></div>
	<div class="c-content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
	<div class="c-button"><input type="button" class="button" value="确定" onclick="readit(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
')"/></div>
</div>
<style>
.c-cover{
	position:fixed;
	width:100%;
	height:100%;
	left:0;
	top:0;
	background:rgba(255,255,255,0.3);	
}
.c-haha{
	
}
.c-sender{
	float:left;
	width:190px;
	text-align:right;
	margin-top:10px;
}
.c-title{
	text-align:center;
	margin-top:20px;
	float:left;
	width:400px;
	font-size:18px;	
}
.c-content{
	float:left;
	margin-left:30px;
	margin-top:20px;
	margin-right:30px;
}
.c-time{
	float:right;
	width:200px;
	text-align:left;
	margin-top:10px;
}
.c-button{
	position:absolute;
	top:100%;
	margin-top:-40px;
	left:50%;
	margin-left:-31px;
}
.button{
	color:#FFF;
	background:rgb(102,51,102);	
}
</style><?php }} ?>