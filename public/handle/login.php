<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';


$id = $_POST['user'];
$psd = $_POST['password'];

$user = new User();

$perm = $user->login($id, $psd);

if( $perm == 2 ){
	//echo "what ";
	header( "Location: ../zonet.php" );
} else if( $perm == 1 ){
	header( "Location: ../zonev.php" );
} else if ($perm == 3 ) {
	header("Location: ../super_admin.php");
}else
{
	$_SESSION['login'] = "true";
	header( "Location: ../index.php?login=error" );
	//echo '<script>alert('.'"用户名/密码错误"'.');</script>';
}
return;

?>