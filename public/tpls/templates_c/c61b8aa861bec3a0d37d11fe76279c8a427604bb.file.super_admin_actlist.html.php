<?php /* Smarty version Smarty-3.1.7, created on 2013-05-27 21:48:06
         compiled from "../tpls/templates\handle\super_admin_actlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1496951a3641636ec43-59655770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c61b8aa861bec3a0d37d11fe76279c8a427604bb' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_actlist.html',
      1 => 1369387258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1496951a3641636ec43-59655770',
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
  'unifunc' => 'content_51a3641643a34',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a3641643a34')) {function content_51a3641643a34($_smarty_tpl) {?> <table>
				<tr>
				
					<th>活动名称</th>
					<th>活动地点</th>
					<th>招募人数</th>
					<th>联系人姓名</th>
					<th>联系人电话</th>
                    <th>活动链接</th>
                    <th>策划地址</th>
                    <th>审核</th>
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
                        <td><a href="./act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
">点此进入</td>
                       	<td>这里是策划地址</td>
                        <td>         <div class="act-state" id="act_state">
        <input type="button" value="通过" onclick="audited('<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['act']->value['publisher'];?>
','<?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
')"/>
        <input type="button" value="拒绝" onclick="refused('<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
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