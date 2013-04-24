<?php /* Smarty version Smarty-3.1.7, created on 2013-04-24 19:26:24
         compiled from "../tpls/templates\handle\super_admin_actlist.html" */ ?>
<?php /*%%SmartyHeaderCode:323075177c1608194b6-34771857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c61b8aa861bec3a0d37d11fe76279c8a427604bb' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_actlist.html',
      1 => 1366802698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323075177c1608194b6-34771857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'act_list' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5177c16088796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5177c16088796')) {function content_5177c16088796($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
<div class="act_info">
    	<div class="act-name" id="act_name" onclick="showmore(<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</div>
        <div class="act-state" id="act_state">
        	<input type="button" value="通过" onclick="audited(<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
)"/>
        </div>
        <div class="act-hiden" id="act_0">
        	<div class="hiden-msg"><?php echo $_smarty_tpl->tpl_vars['act']->value['state'];?>
</div>
            <div class="hiden-msg"><?php echo $_smarty_tpl->tpl_vars['act']->value['profile'];?>
</div>
            <div class="hiden-msg"><?php echo $_smarty_tpl->tpl_vars['act']->value['time'];?>
</div>
            <div class="hiden-msg"><?php echo $_smarty_tpl->tpl_vars['act']->value['place'];?>
</div>
            <div class="hiden-msg"><?php echo $_smarty_tpl->tpl_vars['act']->value['offer_num'];?>
</div>
        </div>
</div>
<?php } ?><?php }} ?>