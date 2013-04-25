<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';


$id = $_POST['user'];
$psd = md5($_POST['password']);

$user = new User();

$perm = $user->login($id, $psd);

if( $perm == 3 ){
	header( "Location: ../zonet.php" );
} else if( $perm == 2 ){
	header( "Location: ../zonev.php" );
} else if ($perm == 1 ) {
	header("Location: ../super_admin.php");
}else
{
	echo false;
}
return;

?>