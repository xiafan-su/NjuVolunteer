<?php /* Smarty version Smarty-3.1.7, created on 2013-05-18 14:06:20
         compiled from "../tpls/templates\handle\super_admin_actlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1787151971a5ce14f39-31035231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c61b8aa861bec3a0d37d11fe76279c8a427604bb' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_actlist.html',
      1 => 1368776643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1787151971a5ce14f39-31035231',
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
  'unifunc' => 'content_51971a5cec446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51971a5cec446')) {function content_51971a5cec446($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
<div class="act_info" id="activity_<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
">
    <div class="act-name" id="act_name" onclick="showmore(<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</div>

    
    <div class="act-hiden" id="act_<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
">
   		<div class="hiden-msg">活动名称：<?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</div>
        <div class="hiden-msg">活动地点：<?php echo $_smarty_tpl->tpl_vars['act']->value['place'];?>
</div>
        <div class="hiden-msg">活动类型：<?php echo $_smarty_tpl->tpl_vars['act']->value['time_type'];?>
</div>
        <div class="hiden-msg">活动属性：<?php echo $_smarty_tpl->tpl_vars['act']->value['attribution_type'];?>
</div>  
    	<div class="hiden-msg">活动开始时间：<?php echo $_smarty_tpl->tpl_vars['act']->value['begin_time'];?>
</div>
        <div class="hiden-msg">活动结束时间：<?php echo $_smarty_tpl->tpl_vars['act']->value['end_time'];?>
</div>
        <div class="hiden-msg">活动持续时间：<?php echo $_smarty_tpl->tpl_vars['act']->value['last_time'];?>
小时</div>
      	<div class="hiden-msg">活动详细时间：<?php echo $_smarty_tpl->tpl_vars['act']->value['detail_time'];?>
</div>
        <div class="hiden-msg">招募人数：<?php echo $_smarty_tpl->tpl_vars['act']->value['total_num'];?>
</div>
        <div class="hiden-msg">参加活动是否需要审核：<?php echo $_smarty_tpl->tpl_vars['act']->value['need_audit'];?>
</div>    
       	<div class="hiden-msg">联系人姓名：<?php echo $_smarty_tpl->tpl_vars['act']->value['responser'];?>
</div>
        <div class="hiden-msg">联系人电话：<?php echo $_smarty_tpl->tpl_vars['act']->value['responser_tel'];?>
</div>        
        <div class="hiden-profile">活动简介：<?php echo $_smarty_tpl->tpl_vars['act']->value['profile'];?>
</div> 
        
     </div>
    <div class="act-state" id="act_state">
        <input type="button" value="通过" onclick="audited(<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
)"/>
    </div>
     </br>
</div>
<?php } ?><?php }} ?>