<?php /* Smarty version Smarty-3.1.7, created on 2013-05-18 17:05:44
         compiled from "./tpls/templates\indext.html" */ ?>
<?php /*%%SmartyHeaderCode:1495951974468486f56-49463739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcc6fe68a9e41e4d9da946fded2039d0b9e628f0' => 
    array (
      0 => './tpls/templates\\indext.html',
      1 => 1368856711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1495951974468486f56-49463739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'team_id' => 0,
    'team_name' => 0,
    'already_follow' => 0,
    'leader_name' => 0,
    'all_act_num' => 0,
    'now_act_num' => 0,
    'leader_email' => 0,
    'leader_phone' => 0,
    'activity_info' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5197446852491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5197446852491')) {function content_5197446852491($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


<div id="team_id" style="display:none"><?php echo $_smarty_tpl->tpl_vars['team_id']->value;?>
</div>
<div class="main">
	<div class="team_name">
    	<div style="float:left;margin-left:110px;margin-top:25px;font-weight:bold;font-size:50px;color:#606;">
        	<?php echo $_smarty_tpl->tpl_vars['team_name']->value;?>

        </div>
    </div>
    <hr />
    <div class="left">
        <div class="photo">
            <img src="./assets/img/head_photo/boy/7.jpg"/>
        </div>
        <div class="follow" id="followit">
            <?php if ($_smarty_tpl->tpl_vars['already_follow']->value==1){?>
                取消关注这个团队
            <?php }else{ ?>
                关注这个团队
            <?php }?>
        </div>
    </div>
    <div class="center">
        <div class="per-info">
            <table width="200" border="1">
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


    <div id="table_activity">
      	<table border="1">
        <tr>
        	<th scope="col">活动名称</th>
        	<th scope="col">活动时间</th>
		</tr>
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
    </div>
    
    <div id="table_comment">
    <table border="1">
    	<th>评论人</th><th>评论内容</th>
    
    </table>
    </div>
    <div id="content">
    
    </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>