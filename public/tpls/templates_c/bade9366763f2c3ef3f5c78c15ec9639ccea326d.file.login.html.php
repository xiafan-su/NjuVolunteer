<?php /* Smarty version Smarty-3.1.7, created on 2013-06-03 15:47:50
         compiled from "./tpls/templates\include\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2866351a05a40b8e8b5-59498335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bade9366763f2c3ef3f5c78c15ec9639ccea326d' => 
    array (
      0 => './tpls/templates\\include\\login.html',
      1 => 1369923294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2866351a05a40b8e8b5-59498335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a05a40bb7c1',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a05a40bb7c1')) {function content_51a05a40bb7c1($_smarty_tpl) {?>
<script src="./assets/js/md5.js"></script>
<div id="loginModal" class="loginModal" >
	<div align="center" class="modal-header">
		<h1><font color="#888888">登录</font></h1>
	</div>
 
	<div align="center" class="modal-body">
		<form name="login" id="login" action="./handle/login.php" method="POST">
			<table>
				<tbody>
					<tr>
						<td>
							<div class="input-prepend">
								<span class="add-on"><i class="icon-envelope"></i></span>
								<input name="user" class="email" type="text" placeholder="学号" id="login_id"/>
							</div>
							<span class="emailerror"></span>
						</td>
					</tr>
					<tr>
						<td>
							<div class="input-prepend">
								<span class="add-on"><i class="icon-lock"></i></span>
								<input name="password" class="password" id="login_password" type="password" placeholder="密码" />
							</div>
							<span class="passworderror"></span>
						</td>
					</tr>
					<tr>
						<td>
							<input name="submit" class="btn" type="submit" value="登录" style="width:130px;color:#FFF;background:rgb(142,71,142)" onclick="$('#login_password').val(hex_md5($('#login_password').val()))"/>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
 
</div>

<?php }} ?>