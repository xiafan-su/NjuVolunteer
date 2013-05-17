<?php /* Smarty version Smarty-3.1.7, created on 2013-05-17 18:03:18
         compiled from "./tpls/templates\team_list.html" */ ?>
<?php /*%%SmartyHeaderCode:257955194954d21ef70-81971850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7916e79428643b39e99c1493974ee1c008cebce' => 
    array (
      0 => './tpls/templates\\team_list.html',
      1 => 1368769644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257955194954d21ef70-81971850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5194954d26aa3',
  'variables' => 
  array (
    'department_info' => 0,
    'item' => 0,
    'other_team_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5194954d26aa3')) {function content_5194954d26aa3($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/team_list.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/team_list.js"></script>
<title>团队组织</title>
<style>
button{
	width:140px;
	height:40px;
	border:ridge;
	-webkit-border-radius:15px;
}
</style>

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="main_search">
    	<a href="team.php">
        	<div style="float:left;margin-left:130px;margin-top:25px;font-weight:bold;font-size:50px;color:rgb(102,51,102);">团队组织</div>
        </a>
        <div class="submit_search">
            <input id="submit" style="background-color:#606;color:#FFF" name="submit" class="btn btn-warning span2" onclick="searchteam()" type="submit" value="搜索" />
		</div>
		<div class="input_search">
			<input id="keyword" name="keyword" class="email" type="text" placeholder="请输入关键字" />
		</div>
	</div>
     <div class="search-result" id="result">
       	<div style="height:5px;float:left;width:100%;background-color:#333"></div>
        <div style="height:30px;float:left;width:100%;background-color:#DDD;">
        	<div style="padding-top:5px;padding-left:10px" id="result-bar"></div>
        </div>
     </div>
     <div class="teams-list" style="float:left" id="teams_list">
     </div>
     <div class="team_news" id="visualnews">
     	<!--<h3>这里是滚动新闻图片</h3>-->
        <ul class="switch" id="switch">
        <!--<li class="tn-img-t"><img src="../../assets/img/team_list/news5.jpg" /></li>,
		<li class="tn-img-t"><img src="../../assets/img/team_list/news2.jpg" /></li>,
		<li class="tn-img-t"><img src="../../assets/img/team_list/news3.jpg" /></li>,
		<li class="tn-img-t"><img src="../../assets/img/team_list/news4.jpg" /></li>,
        <div class="tn-img-t" id="t-img1"><img src="../../assets/img/team_list/news5.jpg" /></div>
        <div class="tn-img-t" id="t-img2"><img src="../../assets/img/team_list/news2.png" /></div>
        <div class="tn-img-t" id="t-img3"><img src="../../assets/img/team_list/news3.png" /></div>
        <div class="tn-img-t" id="t-img4"><img src="../../assets/img/team_list/news4.png" /></div>-->
        </ul>
        <!--<p>文化祭志愿活动现场</p>-->
        
     </div>
     <div class="dot_button" id="dot_button">
     	<div id="dot1" onclick="switchimg(1)"></div>
     	<div id="dot2" onclick="switchimg(2)"></div>
     	<div id="dot3" onclick="switchimg(3)"></div>
     	<div id="dot4" onclick="switchimg(4)"></div>
     	<div id="dot5" onclick="switchimg(5)"></div>
     </div>
     <div class="assortment" id="assortment_list">
     <!--<div style="height:5px;float:left;width:100%;background-color:#333"></div>
        <div style="height:30px;float:left;width:100%;background-color:#DDD;">
        	<div style="padding-top:5px;padding-left:10px" id="result-bar"></div>
        </div>
     </div>-->
     <div class="explore_bd" style="margin-top:20px;">
        <!--<h3>来这里发现团队家族吧</h3>-->
        <!--<ul class="team_menu">
        <li class="team_class">
        <!--<div class="department">-->
       <!-- <button type="button" onclick="somelist(1)"><div class="text">
        院系团队</div></button>
        </li>
        <li class="team_class">
         <button type="button" onclick="somelist(2)"><div class="text">
        其它团队</div></button>
        </li>
        </ul>-->
    	<div class="left-bar"></div>
        <div class="departmemt">
        	<div class="title-bar"></div>
            <span class="title-content" onclick="somelist(1)">院系团队</span>
        </div>
        <div class="center-bar"></div>
        <div class="otherts">
        	<div class="title-bar"></div>
            <span class="title-content" onclick="somelist(2)" >其它团队</span>
        </div>
        <div class="right-bar"></div>
     </div>
    
     <div class="group" id="group1">
     <ul >
     
     <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['department_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
     <li class="explore-item">
   		<div class="pic" onmouseover="stateshow(<?php echo $_smarty_tpl->tpl_vars['item']->value['cal'];?>
)" onmouseout="statehide(<?php echo $_smarty_tpl->tpl_vars['item']->value['cal'];?>
)">
        	<img src="./assets/img/team_list/mianma.jpg" class="t-portrait" id="pic1" />
        	<div class="float_state" id="float_state<?php echo $_smarty_tpl->tpl_vars['item']->value['cal'];?>
">
        		<?php echo $_smarty_tpl->tpl_vars['item']->value['slogan'];?>

        	</div>
       	</div>
   		<div class="content" >
        	<div class="title">
            		<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

        	</div>
        	<div class="favs">
            	<?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
个靠谱青年在此聚集
            </div>
    	</div>
     </li>
     <?php } ?>
     
    </ul>
    </div>
    <div class="group" id="group2">
     <ul>
     
     <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['other_team_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
     <li class="explore-item">
   		<div class="pic">
        	<img src="./assets/img/team_list/mianma.jpg" class="t-portrait" id="pic1" />
        	<div class="float_state" id="float_state<?php echo $_smarty_tpl->tpl_vars['item']->value['cal'];?>
">
        		<?php echo $_smarty_tpl->tpl_vars['item']->value['slogan'];?>

        	</div>
       	</div>
   		<div class="content" >
        	<div class="title">
            		<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

        	</div>
        	<div class="favs">
            	<?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
个靠谱青年在此聚集
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