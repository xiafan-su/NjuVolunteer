<?php /* Smarty version Smarty-3.1.7, created on 2013-05-06 23:43:09
         compiled from "./tpls/templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:28950516a173f951b03-87385774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a82f01f400a1d4be5d0cf3f5fa9b1056671e35a8' => 
    array (
      0 => './tpls/templates\\index.html',
      1 => 1367854981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28950516a173f951b03-87385774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516a173f9ace2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516a173f9ace2')) {function content_516a173f9ace2($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/index.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/index.js"></script>
<title>首页</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main">
    <div class="act-show">
		<div class="map">
        	<div class="point"><div class="circle"></div></div>
			<div class="map-img" id="map-img"><img src="./assets/img/index/map.png" /></div>
		</div>
		<div class="act-img">
        	<div class="act-detail" id="act-detail1">
            	<span class="act-detail-title">爱心家园</span>
            	<span class="act-detail-content">时光流逝，只有他们永远保持着童心与随之的天真</span></div>
            <div class="act-detail" id="act-detail2">
            	<span class="act-detail-title">青春在路上</span>
                <span class="act-detail-content">望我们和孩子们都一样行动在青春的道路上，希望我们能够给孩子们带来一个梦想</span></div>
            <div class="act-detail" id="act-detail3">
            	<span class="act-detail-title">收线的风筝</span>
            	<span class="act-detail-content">风筝的线会断，你我之间爱的线不会断</span></div>
            <div class="act-detail" id="act-detail4">
            	<span class="act-detail-title">城市边缘的梦想</span>
            	<span class="act-detail-content">同一片天空下，我们希望他们享有同样的教育</span></div>
       		<div class="act-img-t" id="act-img1"><img src="./assets/img/index/education1.png" /></div>
            <div class="act-img-t" id="act-img2"><img src="./assets/img/index/education2.png" /></div>
            <div class="act-img-t" id="act-img3"><img src="./assets/img/index/education3.png" /></div>
            <div class="act-img-t" id="act-img4"><img src="./assets/img/index/education4.png" /></div>
		</div>
        
		<div class="act-title">
        	<div class="act-title-t" id="act-title1" onclick="changeact(1)"><div class="badpoint"><div class="circle"></div></div>
            	爱心家园</div>
            <div class="act-title-t" id="act-title2" onclick="changeact(2)"><div class="badpoint"><div class="circle"></div></div>
            	青春在路上</div>
            <div class="act-title-t" id="act-title3" onclick="changeact(3)"><div class="badpoint"><div class="circle"></div></div>
            	收线的风筝</div>
            <div class="act-title-t" id="act-title4" onclick="changeact(4)"><div class="badpoint"><div class="circle"></div></div>
            	城市边缘的梦想</div>
            <div class="act-title-t" id="act-title4" onclick="changeact(4)" style="margin-bottom:0px"><div class="badpoint"><div class="circle"></div></div>
            	在行动</div>
		</div>
    </div>
    <!--   -->
    <div class="little-box">
    	<div class="box-bar-left"></div>
    	<div class="box-element">
        	<div class="title-bar"></div>
            <div class="title-content">志愿宣言</div>
        </div>
    	<div class="box-element">
        	<div class="title-bar"></div>
            <div class="title-content">图片故事</div>
        </div>
        <div class="box-element">
        	<div class="title-bar"></div>
            <div class="title-content">心路历程</div>
        </div>
        <div class="box-element">
        	<div class="title-bar"></div>
            <div class="title-content">统计数据</div>
        </div>
        <div class="box-bar-right"></div>
    </div>
    <div class="people-show">	
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
        <div class="show-cover"><img src="./assets/img/index/11.jpg" width="960px" style="margin-top:-200px"/></div>
        <div class="pic-cover"></div>
    </div>
    <div class="share">
    	<div class="share-bar-left"></div>
        <div class="share-to">
        	<h2>关注我们</h2>
            <div class="share-element">
                人人
            </div>
            <div class="share-element">
                微博
            </div>
            <div class="share-element">
                豆瓣
            </div>
            <div class="share-element">
                天涯
            </div>
        </div>
        <div class="share-bar-right"></div>
    </div>
    <div class="others">
    	<div class="others-element">
            <div class="others-content">
            	<h3>公告通知</h3><hr />"我的南大梦"征文启事 <hr />"美丽南大"摄影大赛征稿启事<hr />南京大学2012年校园开放日公告
            </div>
        </div>
        <div class="others-h-bar"></div>
    	<div class="others-element">
            <div class="others-content">
            	<h3>留言咨询</h4><hr />请问希望之星的志愿者招募满了吗？<hr />请问在哪可以办理志愿服务的证明？<hr />这学期还有仙林中学的活动吗？
            </div>
        </div>
        <div class="others-h-bar"></div>
        <div class="others-element">
            <div class="others-content">
            	<h3>五星组织</h4><hr />南京大学青年志愿者协会<hr />计算机系青协<hr />文学院青协
            </div>
        </div>
    </div>
</div>




<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>