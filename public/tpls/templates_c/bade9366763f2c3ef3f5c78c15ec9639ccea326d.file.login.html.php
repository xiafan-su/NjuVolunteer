<?php /* Smarty version Smarty-3.1.7, created on 2013-05-16 15:33:47
         compiled from "./tpls/templates\include\login.html" */ ?>
<?php /*%%SmartyHeaderCode:22569519363ed2a53b3-05569551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bade9366763f2c3ef3f5c78c15ec9639ccea326d' => 
    array (
      0 => './tpls/templates\\include\\login.html',
      1 => 1368689575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22569519363ed2a53b3-05569551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519363ed2a9aa',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519363ed2a9aa')) {function content_519363ed2a9aa($_smarty_tpl) {?>

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
								<input name="user" class="email" type="text" placeholder="学号" />
							</div>
							<span class="emailerror"></span>
						</td>
					</tr>
					<tr>
						<td>
							<div class="input-prepend">
								<span class="add-on"><i class="icon-lock"></i></span>
								<input name="password" class="password" type="password" placeholder="密码" />
							</div>
							<span class="passworderror"></span>
						</td>
					</tr>
					<tr>
						<td>
							<input name="submit" class="btn btn-warning span2" type="submit" value="登录" style="background:rgba(102,51,102,0.7)"/>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
 
</div>

<?php }} ?>