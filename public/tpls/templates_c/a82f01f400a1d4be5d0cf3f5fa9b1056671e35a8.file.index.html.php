<?php /* Smarty version Smarty-3.1.7, created on 2013-04-28 11:14:03
         compiled from "./tpls/templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:28950516a173f951b03-87385774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a82f01f400a1d4be5d0cf3f5fa9b1056671e35a8' => 
    array (
      0 => './tpls/templates\\index.html',
      1 => 1367118836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28950516a173f951b03-87385774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516a173f9ace2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516a173f9ace2')) {function content_516a173f9ace2($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/index.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/index.js"></script>
<title>首页</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main">
    <div class="act-show">
		<div class="map">
			<div class="map-img"><img src="./assets/img/index/map.png" /></div>
		</div>
		<div class="act-img">
       		<div class="act-img-t" id="act-img1"><img src="./assets/img/index/education1.png" /></div>
            <div class="act-img-t" id="act-img2"><img src="./assets/img/index/education2.png" /></div>
            <div class="act-img-t" id="act-img3"><img src="./assets/img/index/education3.png" /></div>
            <div class="act-img-t" id="act-img4"><img src="./assets/img/index/education4.png" /></div>
		</div>
        <div class="act-detail" id="act-detail1"></div>
        <div class="act-detail" id="act-detail2"></div>
        <div class="act-detail" id="act-detail3"></div>
        <div class="act-detail" id="act-detail4"></div>
		<div class="act-title">
        	<div class="act-title-t" id="act-title1" onclick="changeact(1)"></div>
            <div class="act-title-t" id="act-title2" onclick="changeact(2)"></div>
            <div class="act-title-t" id="act-title3" onclick="changeact(3)"></div>
            <div class="act-title-t" id="act-title4" onclick="changeact(4)"></div>
		</div>
    </div>
    <div class="little-box">
    </div>
    <div class="people-show">
    </div>
    <div class="others">
    </div>
</div>




<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>