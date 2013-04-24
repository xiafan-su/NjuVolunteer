

<div id="loginModal">
	<div align="center" class="modal-header">
		<h1><font color="#888888">LOGIN</font></h1>
	</div>
 
	<div align="center" class="modal-body">
		<form name="login" id="login" action="./handle/login_validate.php" method="POST">
			<table>
				<tbody>
					<tr>
						<td>
							<div class="input-prepend">
								<span class="add-on"><i class="icon-envelope"></i></span>
								<input name="user" class="email" type="text" placeholder="Student No" />
							</div>
							<span class="emailerror"></span>
						</td>
					</tr>
					<tr>
						<td>
							<div class="input-prepend">
								<span class="add-on"><i class="icon-lock"></i></span>
								<input name="password" class="password" type="password" placeholder="Password" />
							</div>
							<span class="passworderror"></span>
						</td>
					</tr>
					<tr>
						<td>
							<input name="submit" class="btn btn-warning span2" type="submit" value="Log in" />
							<a class="btn pull-right" href="register.php">register</a>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
 
     

 
</div>

