<?php /* Smarty version Smarty-3.1.7, created on 2013-05-20 00:25:34
         compiled from "../tpls/templates\handle\super_admin_actinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:54975198fcfedfc231-95610847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7b1c74051c7faa1a98def30a0cb77ffc342d845' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_actinfo.html',
      1 => 1368960651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54975198fcfedfc231-95610847',
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
  'unifunc' => 'content_5198fcfee916c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5198fcfee916c')) {function content_5198fcfee916c($_smarty_tpl) {?>目前所有的活动个数是：<?php echo $_smarty_tpl->tpl_vars['num']->value;?>








 <table>
				<tr>
				
					<th>团队名</th>
					<th>团队成员数</th>
					<th>团队举办活动数</th>
					<th>团队举办活动参与人次</th>
					<th>团队举办活动参与总时间</th>
                    
				</tr>

<?php  $_smarty_tpl->tpl_vars['if'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['if']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_listinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['if']->key => $_smarty_tpl->tpl_vars['if']->value){
$_smarty_tpl->tpl_vars['if']->_loop = true;
?>

   
    
    
   
    
   				
					<tr class="even">

						<td><?php echo $_smarty_tpl->tpl_vars['if']->value['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['if']->value['people'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['if']->value['act'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['if']->value['apn'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['if']->value['time'];?>
</td>
                   
					</tr>
        
    
				<?php } ?>
                </table><?php }} ?>