<?php /* Smarty version Smarty-3.1.7, created on 2013-05-15 18:31:41
         compiled from "../tpls/templates\handle\super_admin_actlist.html" */ ?>
<?php /*%%SmartyHeaderCode:85425193640d832697-59491925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c61b8aa861bec3a0d37d11fe76279c8a427604bb' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_actlist.html',
      1 => 1368538893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85425193640d832697-59491925',
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
  'unifunc' => 'content_5193640d94848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5193640d94848')) {function content_5193640d94848($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
<div class="act_info" id="activity_<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
">
    <div class="act-name" id="act_name" onclick="showmore(<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</div>
    <div class="act-state" id="act_state">
        <input type="button" value="通过" onclick="audited(<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
)"/>
    </div>
    <div class="table-bar"></div>
    <div class="act-hiden" id="act_<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
">
    	<div class="hiden-msg">活动时间：<?php echo $_smarty_tpl->tpl_vars['act']->value['time'];?>
</div>
        <div class="hiden-msg">活动地点：<?php echo $_smarty_tpl->tpl_vars['act']->value['place'];?>
</div>
        <div class="hiden-msg">要求人数：<?php echo $_smarty_tpl->tpl_vars['act']->value['offer_num'];?>
</div>
        <div class="hiden-profile">简介：<?php echo $_smarty_tpl->tpl_vars['act']->value['profile'];?>
</div> 
        <div class="table-bar"></div> 
     </div>
</div>
<?php } ?><?php }} ?>