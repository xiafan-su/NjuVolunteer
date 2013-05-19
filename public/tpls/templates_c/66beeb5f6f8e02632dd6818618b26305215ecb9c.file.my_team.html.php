<?php /* Smarty version Smarty-3.1.7, created on 2013-05-19 02:05:18
         compiled from "../tpls/templates\handle\my_team.html" */ ?>
<?php /*%%SmartyHeaderCode:247575197c2de555e53-90635217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66beeb5f6f8e02632dd6818618b26305215ecb9c' => 
    array (
      0 => '../tpls/templates\\handle\\my_team.html',
      1 => 1368858222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247575197c2de555e53-90635217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'teamlist' => 0,
    'team' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5197c2de5de68',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5197c2de5de68')) {function content_5197c2de5de68($_smarty_tpl) {?><div style="margin-left:20px;margin-right:20px;">
	<table width="200" border="1">
    <tbody>
      <tr>
        <th scope="col">团队ID</th>
        <th scope="col">团队名称</th>
      </tr>
      
      <?php  $_smarty_tpl->tpl_vars['team'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['team']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teamlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['team']->key => $_smarty_tpl->tpl_vars['team']->value){
$_smarty_tpl->tpl_vars['team']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['team']->value['teamid'];?>
</td>
            <td><a href="indext.php?team_id=<?php echo $_smarty_tpl->tpl_vars['team']->value['teamid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>
</a></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>

</div><?php }} ?>