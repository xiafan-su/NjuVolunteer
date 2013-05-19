<?php /* Smarty version Smarty-3.1.7, created on 2013-05-19 16:14:44
         compiled from "../tpls/templates\handle\super_admin_actinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:26524519889f4f1b6b5-68007187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7b1c74051c7faa1a98def30a0cb77ffc342d845' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_actinfo.html',
      1 => 1368776642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26524519889f4f1b6b5-68007187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'all_listinfo' => 0,
    'if' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519889f5038d1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519889f5038d1')) {function content_519889f5038d1($_smarty_tpl) {?>目前所有的活动个数是：<?php echo $_smarty_tpl->tpl_vars['num']->value;?>



<?php  $_smarty_tpl->tpl_vars['if'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['if']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_listinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['if']->key => $_smarty_tpl->tpl_vars['if']->value){
$_smarty_tpl->tpl_vars['if']->_loop = true;
?>
<div>
     
   		<div class="hiden-msg">
        	团队名:<?php echo $_smarty_tpl->tpl_vars['if']->value['name'];?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            团队人数:<?php echo $_smarty_tpl->tpl_vars['if']->value['people'];?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            团队举办活动数:<?php echo $_smarty_tpl->tpl_vars['if']->value['act'];?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            团队举办活动参与人次:<?php echo $_smarty_tpl->tpl_vars['if']->value['apn'];?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            团队举办活动参与总时间:<?php echo $_smarty_tpl->tpl_vars['if']->value['time'];?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div> 
            
    
</div>
<?php } ?><?php }} ?>