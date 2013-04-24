<?php
# FileName="Connection_php_mysql.htm"
# Type="root_conn"
# HTTP="true"
$hostname_root_conn = "127.0.0.1";
$database_root_conn = "nju_volunteer";
$username_root_conn = "root";
$password_root_conn = "ares";
$root_conn = mysql_pconnect($hostname_root_conn, $username_root_conn, $password_root_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database_root_conn, $root_conn);
mysql_query("set names utf8");
?>