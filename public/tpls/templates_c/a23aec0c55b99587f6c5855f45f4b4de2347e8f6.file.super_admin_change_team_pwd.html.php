<?php /* Smarty version Smarty-3.1.7, created on 2013-05-20 05:25:53
         compiled from "../tpls/templates\handle\super_admin_change_team_pwd.html" */ ?>
<?php /*%%SmartyHeaderCode:1563051994361c0f859-38149399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a23aec0c55b99587f6c5855f45f4b4de2347e8f6' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_change_team_pwd.html',
      1 => 1368983442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1563051994361c0f859-38149399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'team_list' => 0,
    'team' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51994361c8051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51994361c8051')) {function content_51994361c8051($_smarty_tpl) {?><head>
</head>
<body>


 <table >
				<tr>
                <th>选择要修改的团队</th>
					<th>填写新的密码</th>
                    <th>确认</th>
                    </tr>

<form action="./handle/super_admin_change_team_pwd_ok.php" method="POST">


<tr><td>
	
  	<select id="team" class="teamselect" name='cteam'>
        <?php  $_smarty_tpl->tpl_vars['team'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['team']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['team_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['team']->key => $_smarty_tpl->tpl_vars['team']->value){
$_smarty_tpl->tpl_vars['team']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>
</option>
		<?php } ?>
   		</select>

</td>



<td>        
<input type="password" name="password">
</td>
<td>
 <input type="submit" value="确认修改" /></td></tr>
</form>
</table>
</body>
<?php }} ?>