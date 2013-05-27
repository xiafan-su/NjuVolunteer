<?php /* Smarty version Smarty-3.1.7, created on 2013-05-27 22:16:52
         compiled from "./tpls/templates\act.html" */ ?>
<?php /*%%SmartyHeaderCode:1547251a33244d138a5-60282702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f953ae4134724fc8e1e51861dc90910c96308d5b' => 
    array (
      0 => './tpls/templates\\act.html',
      1 => 1369664210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1547251a33244d138a5-60282702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a33244dc0c1',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a33244dc0c1')) {function content_51a33244dc0c1($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="./assets/img/header/logo.png">
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
        	<div style="float:left;margin-left:110px;margin-top:25px;font-weight:bold;font-size:50px;color:rgb(102,51,102);">活动中心</div>
        </a>
        <div class="submit_search">
			<input id="submit" style="background-color:#606;color:#FFF" name="submit" class="btn btn-warning span2" onclick="searchit()" type="submit" value="搜索" />
		</div>
		<div class="input_search" >
			<input id="keyword" name="keyword" class="email" type="text" placeholder="请输入关键字" />
		</div>
	</div>
    <hr />
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
            <a class="type-list" href="javascript:searchattributiontype(4)" id="a4">校园</a>
            <a class="type-list" href="javascript:searchattributiontype(5)" id="a5">大型赛会</a>
            <a class="type-list" href="javascript:searchattributiontype(6)" id="a6">其他</a>
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
            <div class="pageup" id="slideleft"><img src="./assets/img/activity_center/left.gif" /></div>
            <div class="switchtable">
                <ul class="switch" id="switch">
                    
                </ul>
            </div>
            <div class="pagedown" id="slideright"><img src="./assets/img/activity_center/right.gif" /></div>
        </div>
        <div class="hotact2">
            <div class="title">
                <div class="hotact-left"></div>
                <h3 style="float:left;font-size:24px;padding-top:10px;color:rgb(102,51,102)">人气活动</h3>
                <div class="hotact-right"></div>
            </div>
            <div class="hottable">
            	<div class="hot-cover1"></div>
                <div class="hot-cover2"></div>
                <ul class="hotlist" id="hotlist">
                <div id="hotlist1">
                    <li class="hot" onclick="window.open('./act_dtl.php?act_id=215','_blank')">
                    	<img  src="../Upload/picture/51a3512e219a9.jpg" width=170px/>
                        <div  class="img-bar">“光盘行动”进校园<br />时间：周四中午十点到十二点四十五<br />所属团队：南大青协</div></li>
                    <li class="hot" onclick="window.open('./act_dtl.php?act_id=216','_blank')">
                    	<img  src="../Upload/picture/51a3514d8e809.jpg" width=170px/>
                        <div  class="img-bar">南京大学自强社爱心包裹活动<br />时间：每周六、周日<br />所属团队：南大青协</div></li>
                    <li class="hot" onclick="window.open('./act_dtl.php?act_id=217','_blank')">
                    	<img  src="../Upload/picture/51a35192b254e.jpg" width=170px/>
                        <div  class="img-bar">农村孤儿助养项目<br />时间：周末<br />所属团队：南大青协</div></li>
                    <li class="hot"onclick="window.open('./act_dtl.php?act_id=218','_blank')">
                    	<img  src="../Upload/picture/51a351ae89361.jpg" width=170px/>
                        <div  class="img-bar">平安阿福2013年度台历义卖活动<br />时间：12月24日平安夜和12月25日圣诞夜<br />所属团队：南大青协</div></li>
                    <li class="hot" onclick="window.open('./act_dtl.php?act_id=219','_blank')">
                    	<img  src="../Upload/picture/51a351d8a54b4.jpg" width=170px/>
                        <div  class="img-bar">朝天宫民族小学七彩课堂主题班会<br />时间：每三下午2点<br />所属团队：南大青协</div></li>
                </div>
                <div id="hotlist2">
                    <li class="hot" onclick="window.open('./act_dtl.php?act_id=220','_blank')">
                    	<img  src="../Upload/picture/51a351fa65bcc.jpg" width=170px/>
                        <div  class="img-bar">锁金村临终关怀活动<br />时间：周一至周五任意时段<br />所属团队：南大青协</div></li>
                    <li class="hot" onclick="window.open('./act_dtl.php?act_id=221','_blank')">
                    	<img  src="../Upload/picture/51a35216c4a76.jpg" width=170px/>
                        <div  class="img-bar">校区信使 鼓楼——仙林物品传递专线<br />时间：每周一至周四<br />所属团队：南大青协</div></li>
                    <li class="hot" onclick="window.open('./act_dtl.php?act_id=222','_blank')">
                    	<img  src="../Upload/picture/51a3524815e2b.jpg" width=170px/>
                        <div  class="img-bar">玄武区红山街道残疾人帮扶中心志愿<br />时间：周五下午1点到4点<br />所属团队：南大青协</div></li>
                    <li class="hot" onclick="window.open('./act_dtl.php?act_id=223','_blank')">
                    	<img  src="../Upload/picture/51a350b2e595c.jpg" width=170px/>
                        <div  class="img-bar">走进社区•云南路社区爱心家教<br />时间：每周末下午2:00—4:00<br />所属团队：南大青协</div></li>
                    <li class="hot" onclick="window.open('./act_dtl.php?act_id=224','_blank')">
                    	<img  src="../Upload/picture/51a352752096f.jpg" width=170px/>
                        <div  class="img-bar">走近宁声<br />时间：每周四2：30 – 4：30<br />所属团队：南大青协</div></li>
                </div>
                </ul>
            </div>
        </div>
        <div class="weekact" id="weekact_list" style="display:none"></div>
        <div class="weekact" id="weekact" style="display:block">
            <div class="title">
                <div class="hotact-left"></div>
                <h3 style="float:left;font-size:24px;padding-top:10px; color:rgb(102,51,102)">本周活动</h3>
                <div class="hotact-right"></div>
                </ul>
            </div>
            <div style="padding-top:3px;padding-bottom:3px;background-color:#333"></div>
            <div class="weeka">
                <div class="weekdate" id="day1"></div>
                <div class="act-content" id="act_day11"></div>
                <div class="act-content" id="act_day12"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day2"></div>
                <div class="act-content" id="act_day21"></div>
                <div class="act-content" id="act_day22"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day3"></div>
                <div class="act-content" id="act_day31"></div>
                <div class="act-content" id="act_day32"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day4"></div>
                <div class="act-content" id="act_day41"></div>
                <div class="act-content" id="act_day42"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day5"></div>
                <div class="act-content" id="act_day51"></div>
                <div class="act-content" id="act_day52"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day6"></div>
                <div class="act-content" id="act_day61"></div>
                <div class="act-content" id="act_day62"></div>
            </div>
            <div class="weeka" style="margin-right:0px">
                <div class="weekdate" id="day7"></div>
                <div class="act-content" id="act_day71"></div>
                <div class="act-content" id="act_day72"></div>
            </div>
        </div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>