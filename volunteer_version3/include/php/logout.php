<?php  require( dirname(__FILE__).'/basic.php' ); ?>
<?php

unset( $_SESSION[$_user_id] );
unset( $_SESSION[$_user_name] );
unset( $_SESSION[$_user_permission] );
header( "Location: ../../index.php" );
?>