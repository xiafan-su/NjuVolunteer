<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';

session_destroy();
header("Location: ../index.php");
return;

?>