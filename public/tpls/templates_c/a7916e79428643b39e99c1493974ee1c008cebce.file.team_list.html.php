<?php /* Smarty version Smarty-3.1.7, created on 2013-06-01 13:24:36
         compiled from "./tpls/templates\team_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2932851a985941f8c89-10842100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7916e79428643b39e99c1493974ee1c008cebce' => 
    array (
      0 => './tpls/templates\\team_list.html',
      1 => 1369409822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2932851a985941f8c89-10842100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'department_info' => 0,
    'item' => 0,
    'other_team_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a985942b55a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a985942b55a')) {function content_51a985942b55a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="./assets/img/header/logo.png">
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/team_list.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/team_list.js"></script>
<title>团队组织</title>
<style>
button{
	position:relative;
	width:140px;
	height:40px;
	border:ridge;
	border-radius:15px;
	behavior:url(./assets/css/pie.htc);
}
</style>

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="main_search">
    	<a href="team.php">
        	<div style="float:left;margin-left:110px;margin-top:25px;font-weight:bold;font-size:50px;color:rgb(102,51,102);">团队组织</div>
        </a>

	 </div>
     <hr />
     <div class="hotact">
        <div class="pageup" id="slideleft"><img src="./assets/img/activity_center/left.gif" /></div>
        <div class="switchtable">
            <ul class="switch" id="switch">
                
            </ul>
        </div>
        <div class="pagedown" id="slideright"><img src="./assets/img/activity_center/right.gif" /></div>
    </div>

    
   	 <div class="group" id="group1">
     	<div class="left-bar"></div>
     	<div class="bar-title">院系组织</div>
        <div class="right-bar"></div>
         <ul >
         
         <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['department_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
         <li class="explore-item">
            <div class="pic">
               <span onclick="window.open('./indext.php?team_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
','_blank')"> <img src="./assets/img/team/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" class="t-portrait" id="pic1"/></span>
            </div>
            <div class="content">
                <div class="title">
                	<span onclick="window.open('indext.php?team_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
', '_blank');"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                    </span>
                </div>
                <div class="favs">
                    
                </div>
            </div>
         </li>
         <?php } ?>
         
        </ul>
    </div>
    
    <div class="group" id="group2">
    <div class="left-bar"></div>
     	<div class="bar-title">其他组织</div>
        <div class="right-bar"></div>
     <ul>
     <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['other_team_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
     <li class="explore-item">
   		<div class="pic">
        	 <span onclick="window.open('./indext.php?team_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
','_blank')"> <img src="./assets/img/team/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" class="t-portrait" id="pic1"/></spn>
       	</div>
   		<div class="content" >
                <div class="title">
                	<span onclick="window.open('indext.php?team_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
', '_blank');"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                    </span>
                </div>
        	<div class="favs">
            	
            </div>
    	</div>
     </li>
     <?php } ?>
     
     </ul>
    </div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>