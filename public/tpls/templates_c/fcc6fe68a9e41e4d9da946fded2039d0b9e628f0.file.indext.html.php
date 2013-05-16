<?php /* Smarty version Smarty-3.1.7, created on 2013-05-16 20:03:57
         compiled from "./tpls/templates\indext.html" */ ?>
<?php /*%%SmartyHeaderCode:13773518f8b90a62573-85390918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcc6fe68a9e41e4d9da946fded2039d0b9e628f0' => 
    array (
      0 => './tpls/templates\\indext.html',
      1 => 1368634528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13773518f8b90a62573-85390918',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_518f8b90d3e51',
  'variables' => 
  array (
    'team_name' => 0,
    'leader_name' => 0,
    'all_act_num' => 0,
    'now_act_num' => 0,
    'leader_email' => 0,
    'leader_phone' => 0,
    'activity_info' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518f8b90d3e51')) {function content_518f8b90d3e51($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/indext.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/indext.js"></script>

<title>团队主页</title>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main">
	<div class="bar-top"></div>
    <div class="bar-top2"></div>
    <div class="personal-info">
    	<div class="left">
        	<div class="photo">
            	<img src="./assets/img/head_photo/boy/7.jpg"/>
            </div>
            <div class="follow">
            	关注这个团队
            </div>
        </div>
        <div class="center">
        	<div class="name" id="name"><?php echo $_smarty_tpl->tpl_vars['team_name']->value;?>
</div>
            <div class="honor"></div>
            <div class="per-info">
            	<table width="200" border="0">
                  <tr>
                    <th scope="row">团队负责人</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['leader_name']->value;?>
</td>
                  </tr>
                  <tr>
                    <th scope="row">累计活动</th>
                    <td><span id="all_time"><?php echo $_smarty_tpl->tpl_vars['all_act_num']->value;?>
</span>次</td>
                  </tr>
                  <tr>
                    <th scope="row">本学期活动</th>
                    <td><span id="honor_time"><?php echo $_smarty_tpl->tpl_vars['now_act_num']->value;?>
</span>次</td>
                  </tr>
                  <tr>
                    <th scope="row">E-mail：</th>
                    <td><div id="email"><?php echo $_smarty_tpl->tpl_vars['leader_email']->value;?>
</div></td>
                  </tr>
                  <tr>
                    <th scope="row">Tel：</th>
                    <td><div id="phone"><?php echo $_smarty_tpl->tpl_vars['leader_phone']->value;?>
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
            	<div id="scroll-panel"></div>
            </div>
            <div class="bottom-bar"></div>
        </div>
    </div>
    <div style="width:100%;height:40px;float:left">
    	<div class="left-bar"></div>
        <div class="team">
        	<div class="title-bar"></div>
            <div id="team_comment" class="title-content">与他相关的评论</div>
        </div>
        <div class="center-bar"></div>
        <div class="act">
        	<div class="title-bar"></div>
            <div id="team_activity" class="title-content">他发起的活动</div>
        </div>
        <div class="right-bar"></div>
    </div>
    
    <div id="table_activity" style="display:none;">
    <br>
    <table>
    <th>活动名称</th><th>活动时间</th>
    <?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activity_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
    <td><?php echo $_smarty_tpl->tpl_vars['act']->value['begin_time'];?>
 --- <?php echo $_smarty_tpl->tpl_vars['act']->value['end_time'];?>
</td>
    </tr>
    <?php } ?>
    </table>
    </br>
    </div>
    
    <div id="table_comment" style="display:none;">
    <br>
    <table>
    <th>评论人</th><th>评论内容</th>
    
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