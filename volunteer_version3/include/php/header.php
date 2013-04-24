<?php  require_once( dirname(__FILE__).'/basic.php' ); ?>
<?php

if( isset($_SESSION[$_user_permission]) ){
	if( $_SESSION[$_user_permission] == $_up_r ) {
		require(dirname(__FILE__).'/header_r.php');
	} else if( $_SESSION['user_permission'] == $_up_t ) {
		require(dirname(__FILE__).'/header_t.php');
	} else {//$_up_v
		require(dirname(__FILE__).'/header_v.php');
	}
	return;
} else {
	//require( dirname(__FILE__). '/header_v.php');//仅用于调试
	//return;
}

?>


<div class="header">
	<div class="header_content">
		<div class="logo"><a href="">NJUVolunteer</a></div>
		<div  class="welcome_bar">
			<a href="./index.php">登录</a>/<a href="./register.php">注册</a>
		</div>
	</div>
</div>