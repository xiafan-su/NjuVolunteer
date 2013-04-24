<?php /* Smarty version Smarty-3.1.7, created on 2013-04-24 13:55:28
         compiled from "./tpls/templates\act.html" */ ?>
<?php /*%%SmartyHeaderCode:13169516a185eddbdb8-59389361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f953ae4134724fc8e1e51861dc90910c96308d5b' => 
    array (
      0 => './tpls/templates\\act.html',
      1 => 1366782915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13169516a185eddbdb8-59389361',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516a185ee3648',
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
        <div style="height:30px;float:left;width:100%;background-color:#DDD;">
        	<div style="padding-top:5px;padding-left:10px" id="result-bar"></div>
        </div>
        <div class="type">
            <div class="type-title">时间类型:</div>
            <a class="type-list" href="javascript:searchtimetype(0)" id="t0">全部活动</a>
            <a class="type-list" href="javascript:searchtimetype(1)" id="t1">长期活动</a>
            <a class="type-list" href="javascript:searchtimetype(2)" id="t2">临时活动</a>
        </div>
        <div class="type">
            <div class="type-title">服务类型:</div>
            <a class="type-list" href="javascript:searchattributiontype(0)" id="a0">全部类型</a>
            <a class="type-list" href="javascript:searchattributiontype(1)" id="a1">扶老</a>
            <a class="type-list" href="javascript:searchattributiontype(2)" id="a2">支教</a>
            <a class="type-list" href="javascript:searchattributiontype(3)" id="a3">助残</a>
            <a class="type-list" href="javascript:searchattributiontype(4)" id="a4">大型赛会</a>
            <a class="type-list" href="javascript:searchattributiontype(5)" id="a5">其他</a>
        </div>
        <div class="type">
            <div class="type-title">时间限制:</div>
            <a class="type-list" href="javascript:searchtimelimit(0)" id="l0">全周</a>
            <a class="type-list" href="javascript:searchtimelimit(1)" id="l1">周一</a>
            <a class="type-list" href="javascript:searchtimelimit(2)" id="l2">周二</a>
            <a class="type-list" href="javascript:searchtimelimit(3)" id="l3">周三</a>
            <a class="type-list" href="javascript:searchtimelimit(4)" id="l4">周四</a>
            <a class="type-list" href="javascript:searchtimelimit(5)" id="l5">周五</a>
            <a class="type-list" href="javascript:searchtimelimit(6)" id="l6">周六</a>
            <a class="type-list" href="javascript:searchtimelimit(7)" id="l7">周日</a>
        </div>
        <div class="type">
            <div class="type-title">活动状态:</div>
            <a class="type-list" href="javascript:searchactstate(0)" id="s0">所有状态</a>
            <a class="type-list" href="javascript:searchactstate(1)" id="s1">正在招募</a>
            <a class="type-list" href="javascript:searchactstate(2)" id="s2">已结束</a>
            <a class="type-list" href="javascript:searchactstate(3)" id="s3">进行中</a>
        </div>
        <div style="margin-top:10px;height:5px;float:left;width:100%;background-color:#333"></div>
        <div style="height:30px;width:100%;background-color:#CCC;float:left"></div>
        <div class="act-list" style="float:left" id="act_list">
        
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
                    <li class="hot">
                    	<img src="./assets/img/activity_center/1.jpg" width=170px/>
                        <div class="img-bar">全国首个孤独症儿童合唱团在宁成立<br />负责人：夏凡<br />所属团队：计算机系青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/2.jpg" width=170px/>
                        <div class="img-bar">青年志愿者徽章设计征集大赛活动方案<br />负责人：夏凡<br />所属团队：计算机系青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/3.jpg" width=170px/>
                        <div class="img-bar">雨花台区掀起学雷锋志愿活动热潮<br />负责人：夏凡<br />所属团队：计算机系青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/4.jpg" width=170px/>
                        <div class="img-bar">南京春运期间多措并举开展关爱农民工志愿服务<br />负责人：夏凡<br />所属团队：计算机系青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/5.jpg" width=170px/>
                        <div class="img-bar">魏纪中："亚青会将给城市带来正能量"<br />负责人：夏凡<br />所属团队：计算机系青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/6.jpg" width=170px/>
                        <div class="img-bar">第二届亚洲青年运动会吉祥物揭晓<br />负责人：夏凡<br />所属团队：计算机系青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/7.jpg" width=170px/>
                        <div class="img-bar">全国首个孤独症儿童合唱团在宁成立<br />负责人：夏凡<br />所属团队：计算机系青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/8.jpg" width=170px/>
                        <div class="img-bar">青年志愿者徽章设计征集大赛活动方案<br />负责人：夏凡<br />所属团队：计算机系青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/9.jpg" width=170px/>
                        <div class="img-bar">雨花台区掀起学雷锋志愿活动热潮<br />负责人：夏凡<br />所属团队：计算机系青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/0.jpg" width=170px/>
                        <div class="img-bar">南京春运期间多措并举开展关爱农民工志愿服务<br />负责人：夏凡<br />所属团队：计算机系青协</div></li>
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
                <div class="act-content"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day2"></div>
                <div class="act-content"></div>
                <div class="act-content"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day3"></div>
                <div class="act-content"></div>
                <div class="act-content"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day4"></div>
                <div class="act-content"></div>
                <div class="act-content"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day5"></div>
                <div class="act-content"></div>
                <div class="act-content"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day6"></div>
                <div class="act-content"></div>
                <div class="act-content"></div>
            </div>
            <div class="weeka" style="margin-right:0px">
                <div class="weekdate" id="day7"></div>
                <div class="act-content"></div>
                <div class="act-content"></div>
            </div>
        </div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>