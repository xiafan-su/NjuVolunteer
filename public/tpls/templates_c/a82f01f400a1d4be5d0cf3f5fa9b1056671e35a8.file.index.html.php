<?php /* Smarty version Smarty-3.1.7, created on 2013-05-25 15:34:00
         compiled from "./tpls/templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:9875519f46372fba08-14846035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a82f01f400a1d4be5d0cf3f5fa9b1056671e35a8' => 
    array (
      0 => './tpls/templates\\index.html',
      1 => 1369466905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9875519f46372fba08-14846035',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519f46373f898',
  'variables' => 
  array (
    'notice_detail' => 0,
    'd' => 0,
    'question_detail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519f46373f898')) {function content_519f46373f898($_smarty_tpl) {?>
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
        	<div class="act-detail" id="act-detail1">
            	<span class="act-detail-title">多一份关爱</span>
            	<span class="act-detail-content">将第一颗爱心献予高淳，为特殊青少年茁壮成长增添养分，相信有"长江基金"的关注、关爱和关怀，高淳特殊青少年成长之花一定会结出丰硕的爱心之果。</span></div>
            <div class="act-detail" id="act-detail2">
            	<span class="act-detail-title">感恩点滴</span>
                <span class="act-detail-content">感恩，是中华民族的优良传统，"乌鸦反哺"的性灵原态，让我们感悟到作为人的重要表证，漂泊在生活的经纬里，总有千丝万缕的情感把我们支撑，感恩需要从点滴做起</span></div>
            <div class="act-detail" id="act-detail3">
            	<span class="act-detail-title">青春同行</span>
            	<span class="act-detail-content">"南大•栖霞青春同行"项目由南京大学团委和栖霞团区委共同发起，依托院系与社区结对的形式，以志愿服务和社会实践调研为载体，对接校地资源。</span></div>
            <div class="act-detail" id="act-detail4">
            	<span class="act-detail-title">新街口新公益</span>
            	<span class="act-detail-content">"青春闪亮新街口志愿服务站"坐落于新街口正洪街广场，是由白下区政府斥资打造的一项便民服务，志愿者在此免费为市民游客提供指路、导购、免费租借雨伞、免费提供饮用水等服务。</span></div>
            <div class="act-detail" id="act-detail5">
            	<span class="act-detail-title">阳光在路上</span>
            	<span class="act-detail-content">2003年，由Becky老师和青协的共同努力下，在高淳特殊教育学校举办了第一次阳光活动。该活动一直延续至今，旨在资助高淳的同学，给他们带去快乐与温暖。</span></div>
       		<div class="act-img-t" id="act-img1"><img src="./assets/img/index/5.jpg" /></div>
            <div class="act-img-t" id="act-img2"><img src="./assets/img/index/4.jpg" /></div>
            <div class="act-img-t" id="act-img3"><img src="./assets/img/index/3.jpg" /></div>
            <div class="act-img-t" id="act-img4"><img src="./assets/img/index/2.jpg" /></div>
            <div class="act-img-t" id="act-img5"><img src="./assets/img/index/1.jpg" /></div>
		</div>
        
		<div class="act-title">
        	<div class="act-title-t" id="act-title1" onclick="changeact(1)"><div class="badpoint"><div class="circle"></div></div>
            	多一份关爱</div>
            <div class="act-title-t" id="act-title2" onclick="changeact(2)"><div class="badpoint"><div class="circle"></div></div>
            	感恩点滴</div>
            <div class="act-title-t" id="act-title3" onclick="changeact(3)"><div class="badpoint"><div class="circle"></div></div>
            	青春同行</div>
            <div class="act-title-t" id="act-title4" onclick="changeact(4)"><div class="badpoint"><div class="circle"></div></div>
            	新街口新公益</div>
            <div class="act-title-t" id="act-title5" onclick="changeact(5)" style="margin-bottom:0px"><div class="badpoint"><div class="circle"></div></div>
            	阳光在路上</div>

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
    <div class="volclaim" id="volclaim" onclick="hiddenit()">
    </div>
    <div class="people-show"  onclick="window.location.href='gongshi.php'" >	
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
                	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']<3){?>
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
            	<h3><a href="./notice.php?type=2&amp;page=1">在线咨询</a></h3>
                <div class="a-detail">
                <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['question_detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']<3){?>
                    	<hr />
                    	<a href="notice.php?type=1&page=1&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
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
                <hr /><a href="indext.php?team_id=NJU002">商学院</a>
                <hr /><a href="indext.php?team_id=NJU003">政府管理学院</a>
                <hr /><a href="indext.php?team_id=NJU004">生命科学学院</a>
                </div>
            </div>
        </div>
    </div>
</div>




<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>