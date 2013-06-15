<?php /* Smarty version Smarty-3.1.7, created on 2013-06-15 14:45:21
         compiled from "../tpls/templates\handle\change_vol_psd.html" */ ?>
<?php /*%%SmartyHeaderCode:713951bc05dcc13637-09853631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff84b4ecadc41eb783ba900884a131d6c1ba1520' => 
    array (
      0 => '../tpls/templates\\handle\\change_vol_psd.html',
      1 => 1371277157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '713951bc05dcc13637-09853631',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51bc05dcc477a',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bc05dcc477a')) {function content_51bc05dcc477a($_smarty_tpl) {?><div style="margin-left:20px;margin-right:20px; margin-bottom:20px;">
<table width="200" border="1">

      <tr>
        <td>原密码</td>
        <td><input type="password" name="old_psd" id="old_psd"/></td>
      </tr>
      <tr>
        <td>新密码</td>
        <td><input type="password" name="new_psd" id="new_psd"/></td>
      </tr>
      <tr>
        <td>确认密码</td>
        <td><input type="password" name="confirm_psd" id="confirm_psd"/></td>
      </tr>
	  
</table>
<input type="button" class="button"  onClick="vol_change_psd();" name="submit" id="submit" value="提交" title="点击修改密码"/>
</div><?php }} ?>