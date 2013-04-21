<?php


if( !isset($_BASE_PATH) ) $_BASE_PATH = "../";

include  $_BASE_PATH."Smarty/libs/Smarty.class.php";



$tpl = new Smarty();
define ( 'SMARTY_ROOT', './tpls' );
$tpl->template_dir = SMARTY_ROOT."/templates/";
$tpl->compile_dir = SMARTY_ROOT."/templates_c/";
$tpl->config_dir = SMARTY_ROOT."/configs/";
$tpl->cache_dir = SMARTY_ROOT."/cache/";
$tpl->caching=0;
$tpl->cache_lifetime=60*60*24;
$tpl->left_delimiter = '<{';
$tpl->right_delimiter = '}>';

?>