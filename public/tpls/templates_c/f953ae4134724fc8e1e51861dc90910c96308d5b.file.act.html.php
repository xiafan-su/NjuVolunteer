<?php /* Smarty version Smarty-3.1.7, created on 2013-04-22 17:48:17
         compiled from "./tpls/templates\act.html" */ ?>
<?php /*%%SmartyHeaderCode:13169516a185eddbdb8-59389361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f953ae4134724fc8e1e51861dc90910c96308d5b' => 
    array (
      0 => './tpls/templates\\act.html',
      1 => 1366623625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13169516a185eddbdb8-59389361',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516a185ee3648',
  'variables' => 
  array (
    'act_list' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516a185ee3648')) {function content_516a185ee3648($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/act_srh.css" rel="stylesheet" />
<link href="./assets/css/act.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/act.js"></script>
<title>活动中心</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="main_search">
    	<a href="act.php">
    		<img src="./assets/img/activity_center/xiaohui.jpg" style="float:left;" width="67px"/>
        	<div style="float:left;margin-left:10px;margin-top:25px;font-weight:bold;font-size:50px;color:#606;">活动中心</div>
        </a>
        <div class="submit_search">
			<input id="submit" style="background-color:#FFF;color:#000" name="submit" class="btn btn-warning span2" onclick="searchit()" type="submit" value="搜索" />
		</div>
		<div class="input_search" >
			<input id="keyword" name="keyword" class="email" type="text" placeholder="请输入关键字" />
		</div>
		
	</div>
    <div class="search-result" id="result">
        <div style="height:5px;float:left;width:100%;background-color:#333"></div>
        <div style="height:30px;float:left;width:100%;background-color:#DDD"></div>
        <div class="type">
            <div class="type-title">时间类型</div>
            <a class="type-list">长期活动</a>
            <a class="type-list">临时活动</a>
        </div>
        <div class="type">
            <div class="type-title">服务类型</div>
            <a class="type-list">扶老</a>
            <a class="type-list">支教</a>
            <a class="type-list">助残</a>
            <a class="type-list">扶老</a>
            <a class="type-list">大型盛会</a>
            <a class="type-list">其他</a>
        </div>
        <div class="type">
            <div class="type-title">时间限制</div>
            <a class="type-list">周一</a>
            <a class="type-list">周二</a>
            <a class="type-list">周三</a>
            <a class="type-list">周四</a>
            <a class="type-list">周五</a>
            <a class="type-list">周六</a>
            <a class="type-list">周日</a>
        </div>
        <div class="type">
            <div class="type-title">活动状态</div>
            <a class="type-list">正在招募</a>
            <a class="type-list">已结束</a>
            <a class="type-list">进行中</a>
        </div>
        <div style="margin-top:10px;height:5px;float:left;width:100%;background-color:#333"></div>
        <div class="act-list" id="act_list">
        <?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
        <div class="summary">
            <div class="act_img">
                <img src="./include/img/activity/.1jpg" width="200px" height="130px"href="www.baidu.com"/>
            </div>
            <div class="words">
                <span>
                    <h2><a href="activity/detail.php?activityId=1" target="_blank"><?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</a><span class="atc_state"><?php echo $_smarty_tpl->tpl_vars['act']->value['state'];?>
</span></h2>
                    <p><?php echo $_smarty_tpl->tpl_vars['act']->value['profile'];?>
</p>
                </span>
                <span class="otherInfo">
                    <span class="first">活动时间：<?php echo $_smarty_tpl->tpl_vars['act']->value['time'];?>
</span>
                    <span>活动地点：<?php echo $_smarty_tpl->tpl_vars['act']->value['place'];?>
</span>
                    <span>招募人数：<em><?php echo $_smarty_tpl->tpl_vars['act']->value['offer_num'];?>
</em></span>
                </span>
            </div>
        </div>
		<?php } ?>
        </div>
    </div>
    <div id="hotact">
        <div class="hotact">
            <div class="pagedown" id="slideright"></div>
            <div class="pageup" id="slideleft"></div>
            <div class="switchtable">
                <ul class="switch" id="switch">
                    
                </ul>
            </div>
        </div>
        <div class="hotact2">
            <div class="title">
                <div style="float:left;height:26px;margin-top:20px;margin-right:10px;width:10px;background-color:#606"></div>
                <h3 style="float:left;font-size:24px;padding-top:10px;">人气活动</h3>
                <ul style="float:right;padding-top:20px">
                    <li class="title-op" style="float:left;margin:5px;font-size:18px;padding:5px" onmouseover="hotshow()">热门</li>
                    <li class="title-op" style="float:left;margin:5px;font-size:18px;padding:5px" onmouseover="highshow()">高评</li>
                </ul>
            </div>
            <div style="padding-top:3px;padding-bottom:3px;background-color:#333"></div>
            <div class="hottable">
                <ul class="hotlist" id="hotlist">
                    <li class="hot"><img src="./assets/img/activity_center/1.jpg" width=170px/></li>
                    <li class="hot"><img src="./assets/img/activity_center/2.jpg" width=170px/></li>
                    <li class="hot"><img src="./assets/img/activity_center/3.jpg" width=170px/></li>
                    <li class="hot"><img src="./assets/img/activity_center/4.jpg" width=170px/></li>
                    <li class="hot"><img src="./assets/img/activity_center/5.jpg" width=170px/></li>
                    <li class="hot"><img src="./assets/img/activity_center/6.jpg" width=170px/></li>
                    <li class="hot"><img src="./assets/img/activity_center/7.jpg" width=170px/></li>
                    <li class="hot"><img src="./assets/img/activity_center/8.jpg" width=170px/></li>
                    <li class="hot"><img src="./assets/img/activity_center/9.jpg" width=170px/></li>
                    <li class="hot"><img src="./assets/img/activity_center/0.jpg" width=170px/></li>
                </ul>
            </div>
        </div>
        <div class="weekact">
            <div class="title">
                <div style="float:left;height:26px;margin-top:20px;margin-right:10px;width:10px;background-color:#606"></div>
                <h3 style="float:left;font-size:24px;padding-top:10px;">本周活动</h3>
                <ul style="float:right;padding-top:20px">
                    <li class="title-op" style="float:left;margin:7px;font-size:14px;padding:3px" onclick="returntoday()">回到本周</li>
                    <li class="title-op" style="float:left;margin:7px;font-size:14px;padding:3px" onclick="preweek()">上一周</li>
                    <li class="title-op" style="float:left;margin:7px;font-size:14px;padding:3px" onclick="nextweek()">下一周</li>
                </ul>
                </ul>
            </div>
            <div style="padding-top:3px;padding-bottom:3px;background-color:#333"></div>
            <div class="weeka">
                <div class="weekdate" id="day1"></div>
                <div class="act-content"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day2"></div>
                <div class="act-content"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day3"></div>
                <div class="act-content"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day4"></div>
                <div class="act-content"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day5"></div>
                <div class="act-content"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day6"></div>
                <div class="act-content"></div>
            </div>
            <div class="weeka" style="margin-right:0px">
                <div class="weekdate" id="day7"></div>
                <div class="act-content"></div>
            </div>
        </div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>