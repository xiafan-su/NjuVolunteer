<?
include("../libs/Smarty.class.php");

$tpl = new Smarty();
$tpl->template_dir = "./templates";
$tpl->compile_dir = "./templates_c";
$tpl->config_dir = "./configs";
$tpl->cache_dir = "./cache";
$tpl->caching=1;
$tpl->cache_lifetime=60*60*24;
$tpl->left_delimiter = '<{';
$tpl->right_delimiter = '}>';

$tpl->assign("title", "leapsoul.cn为你展示smarty模板技术");

$tpl->assign("content", "leapsoul.cn通过详细的安装使用步骤为你展示smarty模板技术");

$tpl->display("test.tpl");
?>