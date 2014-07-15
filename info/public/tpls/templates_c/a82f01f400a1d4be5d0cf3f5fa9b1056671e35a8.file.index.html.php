<?php /* Smarty version Smarty-3.1.7, created on 2014-03-25 08:47:17
         compiled from "./tpls/templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:241655327f6d13b6b52-71105004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a82f01f400a1d4be5d0cf3f5fa9b1056671e35a8' => 
    array (
      0 => './tpls/templates\\index.html',
      1 => 1395733601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241655327f6d13b6b52-71105004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5327f6d1b1971',
  'variables' => 
  array (
    'index_activity_detail' => 0,
    'act' => 0,
    'notice_detail' => 0,
    'd' => 0,
    'question_detail' => 0,
    'record_list_left' => 0,
    'record' => 0,
    'record_list_right' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5327f6d1b1971')) {function content_5327f6d1b1971($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="./assets/img/header/logo.png">
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/index.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/index.js"></script>
<title>南京大学青年志愿者</title>
</head>
<body>
<!--[if lte IE 8]>
<div class="browser-change">
	<span>想要获得最佳浏览效果请使用Chrome、FireFox、Safari或IE9以上的浏览器浏览本网站！谢谢合作！</span>
	<img src="./assets/img/index/x.png" height="12" class="browser-img" onclick="exit_browser()" />
</div>
<![endif]-->
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main">
    <div class="act-show">
		<div class="map">
        	<div class="point"><div class="circle"></div></div>
			<div class="map-img" id="map-img"><img src="./assets/img/index/map.png" /></div>
		</div>
		<div class="act-img">
            <div class="act-detail" id="act-detail"></div>
            <?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index_activity_detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
        		<div class="act-detail" id="act-detail<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
" onclick="window.open('act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['act']->value['act_id'];?>
','_blank')">
                    <span class="act-detail-title"><?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</span>
                    <span class="act-detail-status"><label class="font-color-2"><?php echo $_smarty_tpl->tpl_vars['act']->value['detail_time'];?>
</label>&nbsp;&nbsp;&nbsp;&nbsp; 截止日期：<?php echo $_smarty_tpl->tpl_vars['act']->value['deadline'];?>
</span>
                    <span class="act-detail-content">地点：<?php echo $_smarty_tpl->tpl_vars['act']->value['place'];?>
 &nbsp;&nbsp;&nbsp;&nbsp;发起组织：<?php echo $_smarty_tpl->tpl_vars['act']->value['publisher'];?>
</span>
                </div>
            <?php } ?>
            <?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index_activity_detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
            	<div title="点击查看详情" class="act-img-t" id="act-img<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
"><img src="./assets/img/index/<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
.jpg" onclick="window.open('act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['act']->value['act_id'];?>
','_blank')"/></div>
            <?php } ?>
		</div>
        
		<div class="act-title">
            <?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index_activity_detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
        		<div title="点击报名" class="act-title-t" id="act-title<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
" onmouseover="changeact(<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
)" onclick="window.open('act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['act']->value['act_id'];?>
','_blank')"><div class="badpoint"><div class="circle"></div></div>
            	<?php echo $_smarty_tpl->tpl_vars['act']->value['short_name'];?>
</div>
            <?php } ?>
            <div class="act-title-t" id="act-title5"  style="margin-bottom:0px" onclick="window.open('act.php','_blank')"><div class="badpoint"><div class="circle"></div></div>
            	更多...</div>
			

		</div>
    </div>
	<div class="others">
    	<div class="others-element">
            <div class="others-content">
            	<h3><a href="./notice.php?type=1&amp;page=1">公告通知</a></h3>
                <div class="a-detail">
                <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notice_detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']<5){?>
                    	<hr />
                    	<a href="notice.php?type=1&page=1&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</a>
                    <?php }?>
                <?php } ?>
                </div>
            </div>
        </div>
        <div class="others-h-bar"></div>
    	<div class="others-element">
            <div class="others-content">
            	<h3><a href="./notice.php?type=4&amp;page=1">在线咨询</a></h3>
                <div class="a-detail">
                <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['question_detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']<5){?>
                    	<hr />
                    	<a href="notice.php?type=2&page=1&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</a>
                    <?php }?>
                <?php } ?>
                </div>
            </div>
        </div>
        <div class="others-h-bar"></div>
        <div class="others-element">
            <div class="others-content">
            	<h3>优秀组织</h3>
                <div class="a-detail">
				<hr /><a href="indext.php?team_id=NJU009">地理学院青年志愿者协会</a>
				<hr /><a href="indext.php?team_id=NJU033">地科青年志愿者协会</a>
                <hr /><a href="indext.php?team_id=NJU013">南京大学法律援助中心</a>	
				<hr /><a href="indext.php?team_id=NJU029">工程青协</a>
				<hr /><a href="indext.php?team_id=NJU019">南京大学环境协会</a>				
                </div>
            </div>
        </div>
    </div>
    <!--   -->
    <div class="little-box">
    	<div class="box-bar-left"></div>
    	<div class="box-element">
        	<div class="title-bar"></div>
            <div class="title-content" onclick="showclaim()"><a>志愿宣言</a></div>
        </div>
    	<div class="box-element">
        	<div class="title-bar"></div>
            <div class="title-content" onclick="show3dwall()"><a>图片故事</a></div>
        </div>
        <div class="box-element">
        	<div class="title-bar"></div>
            <div class="title-content"><a href="./notice.php?type=3&amp;page=1">心路历程</a></div>
        </div>
        <div class="box-element">
        	<div class="title-bar"></div>
            <div class="title-content" id="statistics"><a>统计数据</a></div>
        </div>
        <div class="box-bar-right"></div>
    </div>
    <div class="data-statistics" id="data-statistics">

    </div>
    <div class="volclaim" id="volclaim">
    </div>

    <div class="people-show"  onclick="window.location.href='publicity.php'" >	
        <div class="show-item" id="item1"></div>
        <div class="show-item" id="item2"></div>
        <div class="show-item" id="item3"></div>
        <div class="show-item" id="item4"></div>
        <div class="show-item" id="item5"></div>
        <div class="show-item" id="item6"></div>
        <div class="show-item" id="item7"></div>
        <div class="show-item" id="item8"></div>
        <div class="show-item" id="item9"></div>
        <div class="show-item" id="iitem1"></div>
        <div class="show-item" id="iitem2"></div>
        <div class="show-item" id="iitem3"></div>
        <div class="show-item" id="iitem4"></div>
        <div class="show-item" id="iitem5"></div>
        <div class="show-item" id="iitem6"></div>
        <div class="show-item" id="iitem7"></div>
        <div class="show-item" id="iitem8"></div>
        <div class="show-item" id="iitem9"></div>
        <div class="show-cover"><img src="./assets/img/index/11.jpg" width="960px" class="show-cover"/></div>
    </div>
    <div class="share">
    	<div class="share-bar-left"></div>
        <div class="share-to">
        	<h2>关注我们</h2>
            <div class="share-element">
                <a href="http://www.renren.com/336828625/profile?ref=opensearch_normal">人人</a>
            </div>
            <div class="share-element">
                <a href="http://weibo.com/njuvolunteer">微博</a>
            </div>
            <div class="share-element">
                <a href="#">豆瓣</a>
            </div>
            <div class="share-element">
                <a href="#">天涯</a>
            </div>
        </div>
        <div class="share-bar-right"></div>
    </div>
    
</div>


<div style="display:none">
    <?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['record_list_left']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
?>
    <div id="record_left<?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
">
        <h2 style="color:#FFF"><?php echo $_smarty_tpl->tpl_vars['record']->value['content'];?>
</h2>
    </div>
    <?php } ?>
    <?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['record_list_right']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
?>
    <div id="record_right<?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
">
        <h2 style="color:#FFF"><?php echo $_smarty_tpl->tpl_vars['record']->value['content'];?>
</h2>
    </div>
    <?php } ?>
</div>
<div id="backdrop2" onclick="hiddenit1()"></div>
<div id="backdrop3" onclick="hiddenit2()"></div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>