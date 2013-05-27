<?php /* Smarty version Smarty-3.1.7, created on 2013-05-27 22:32:47
         compiled from "../tpls/templates\handle\super_admin_actlist_going.html" */ ?>
<?php /*%%SmartyHeaderCode:2133651a36e8f335232-65000876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54c0da45b9a2ded0a3fc82e4e77c94572d99005c' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_actlist_going.html',
      1 => 1369128975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2133651a36e8f335232-65000876',
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
  'unifunc' => 'content_51a36e8f3f9de',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a36e8f3f9de')) {function content_51a36e8f3f9de($_smarty_tpl) {?> <table>
				<tr>
				
					<th>活动名称</th>
					<th>活动地点</th>
					<th>招募人数</th>
					<th>联系人姓名</th>
					<th>联系人电话</th>
                    <th>活动简介</th>
                    <th>操作</th>
				</tr>

<?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
<div class="act_info" id="activity_<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
">
    <div class="act-name" id="act_name" onclick="showmore(<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
)"></div>

    
    
   
    
   				
					<tr class="even">

						<td><?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['act']->value['place'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['act']->value['total_num'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['act']->value['responser'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['act']->value['responser_tel'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['act']->value['profile'];?>
</td>
                        <td>         <div class="act-state" id="act_state">
        <input type="button" value="编辑该活动" onclick="editing('<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
')"/>
        <input type="button" value="结束该活动" onclick="ending('<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['act']->value['publisher'];?>
','<?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
')"/>
    </div></td>
					</tr>
        
    	</div>
				<?php } ?>
                </table>
    
    
    <!--
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
    
    -->
    
<?php }} ?>