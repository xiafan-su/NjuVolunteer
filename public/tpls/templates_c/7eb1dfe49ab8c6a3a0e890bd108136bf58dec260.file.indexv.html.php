<?php /* Smarty version Smarty-3.1.7, created on 2013-05-16 19:14:17
         compiled from "./tpls/templates\indexv.html" */ ?>
<?php /*%%SmartyHeaderCode:16079518e452bc40143-46076184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eb1dfe49ab8c6a3a0e890bd108136bf58dec260' => 
    array (
      0 => './tpls/templates\\indexv.html',
      1 => 1368634849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16079518e452bc40143-46076184',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_518e452bc97e5',
  'variables' => 
  array (
    'name' => 0,
    'faculty' => 0,
    'volunteer_time' => 0,
    'honor_time' => 0,
    'email' => 0,
    'phone_number' => 0,
    'apply' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518e452bc97e5')) {function content_518e452bc97e5($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/indexv.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/indexv.js"></script>

<title>个人主页</title>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main">
	<div class="bar-top"></div>
    <div class="bar-top2"></div>
    <div class="personal-info">
    	<div class="left">
        	<div class="photo">
            	<img src="./assets/img/head_photo/boy/5.jpg"/>
            </div>
            <div class="orgnization">
            	<h3>当前所属团队：</h3>
                <h3 style="color:rgb(102,51,102)" id="team">南京大学青年志愿者协会</h3>
            </div>
        </div>
        <div class="center">
        	<div class="name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
            <div class="honor"></div>
            <div class="per-info">
            	<table width="200" border="0">
                  <tr>
                    <th scope="row">所属院系</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['faculty']->value;?>
</td>
                  </tr>
                  <tr>
                    <th scope="row">累计服务时间</th>
                    <td><span id="all_time"><?php echo $_smarty_tpl->tpl_vars['volunteer_time']->value;?>
</span>小时</td>
                  </tr>
                  <tr>
                    <th scope="row">荣誉时间</th>
                    <td><span id="honor_time"><?php echo $_smarty_tpl->tpl_vars['honor_time']->value;?>
</span>小时</td>
                  </tr>
                  <tr>
                    <th scope="row">E-mail：</th>
                    <td><div id="email"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</div></td>
                  </tr>
                  <tr>
                    <th scope="row">Tel：</th>
                    <td><div id="phone"><?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
</div></td>
                  </tr>
                  <tr>
                    <th scope="row">签名档：</th>
                    <td><div id="sign">我是一个猥琐男，啦啦啦啦啦~</div></td>
                  </tr>
                </table>
            </div>
        </div>
        <div class="right">
        	<div class="top-bar"></div>
            <div class="scroll-item">
            	这里是会滚动的信息
            </div>
            <div class="bottom-bar"></div>
        </div>
    </div>
    <div style="width:100%;height:40px;float:left">
    	<div class="left-bar"></div>
        <div class="team">
        	<div class="title-bar"></div>
            <div id="id_team" class="title-content">他关注的团队</div>
        </div>
        <div class="center-bar"></div>
        <div class="act">
        	<div class="title-bar"></div>
            <div id="id_activity" class="title-content">他参加的活动</div>
        </div>    
        <div class="right-bar"></div>
    </div>
    
    <div id="table_for_activity" style="display:none;">
    	<br>
        <table class="act_people_table">
        <tr><th>活动名称</th><th>活动负责人</th></tr>
        <?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['apply']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['data']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['data']['iteration']++;
?>
        <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['data']['iteration']%2==0)){?>
        <tr class="even">
        <?php }else{ ?>
        <tr class="odd">
        <?php }?>
        <td><a href="act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['act']->value['responser'];?>
</td>
        </tr>
        <?php } ?>
        </table>
        </br>
    </div>
    
    <div id="table_for_team" style="display:none;">
    	<br>
        <table class="act_people_table">
        <tr><th>团队名称</th><th>活动负责人</th></tr>
        
        </table>
        </br>
    </div>
    
    <div id="content">
    
    </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>