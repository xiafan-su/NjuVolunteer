<?php /* Smarty version Smarty-3.1.7, created on 2013-05-19 16:18:00
         compiled from "../tpls/templates\handle\super_admin_change_team_pwd.html" */ ?>
<?php /*%%SmartyHeaderCode:2675451988ab8404014-26521781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a23aec0c55b99587f6c5855f45f4b4de2347e8f6' => 
    array (
      0 => '../tpls/templates\\handle\\super_admin_change_team_pwd.html',
      1 => 1368776669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2675451988ab8404014-26521781',
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
  'unifunc' => 'content_51988ab8454b8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51988ab8454b8')) {function content_51988ab8454b8($_smarty_tpl) {?><head>
</head>
<body>
<form action="./handle/super_admin_change_team_pwd_ok.php" method="POST">



	
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





</br>
新的密码：         
<input type="password" name="password">
<br/>
 <input type="submit" value="确认修改" />
</form>

</body>
<?php }} ?>