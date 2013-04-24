<?php /* Smarty version Smarty-3.1.7, created on 2013-04-24 22:35:19
         compiled from "./tpls/templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:28950516a173f951b03-87385774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a82f01f400a1d4be5d0cf3f5fa9b1056671e35a8' => 
    array (
      0 => './tpls/templates\\index.html',
      1 => 1366814017,
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
<script>
var ad = 1;
var t = 0;
$(document).ready(function(){
	t=setTimeout("timedCount()",0);
});
function timedCount()
{
	ad=(ad+1)%6;
	$("#picshow").html("<img src=\"./assets/img/index/" + ad + ".jpg\" width=240px height=300px />").show();
	//$("#picshow").html("<div style=\"float:left;background-image:url(../img/index/" + ad + ".jpg)\"></div>").show();
	t=setTimeout("timedCount()",3000);
}
</script>
<title>首页</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class=main>
	<div class=adv>
		<img src="./assets/img/index/index.png" />
	</div>
    <div class=content>
        <div class=box1 id=picshow>
            
        </div>
        <div class=box2>
            <div class=title>
            	<div style="float:left;width:10px;height:25px;margin-top:10px;margin-left:10px;background-color:#606"></div>
                <div style="font-size:22px;float:left;margin-top:11px;margin-left:10px">公告通知</div>
                <div style="margin-top:5px;height:3px;width:420px;float:left;background-color:#000"></div>
                <div style="height:10px;width:420px;float:left;background-color:#CCC"></div>
            </div>
     		<div class=news>
            	
            	<li class=li>全国首个孤独症 儿童合唱团在宁成立</li>
                <li class=li>我为"亚青"活动献一计-----"亚青"赛会期间文...</li>
                <li class=li>青年志愿者徽章设计征集大赛活动方案</li>
                <li class=li>雨花台区掀起学雷锋志愿活动热潮</li>
                <li class=li>南京春运期间多措并举开展关爱农民工志愿服务</li>
                <li class=li>魏纪中："亚青会将给城市带来正能量"</li>
                <li class=li>第二届亚洲青年运动会吉祥物揭晓</li>
            </div>
        </div>
        <div class=link1>
        	
        </div>
        <div class=link2>
        
        </div>
        <div class=link3>
        
        </div>
        <div class=link4>
            
        </div>
    </div>
    <div class=adv2>
    	<img src="./assets/img/index/bottom.png"  />
    </div>
    <div class=act-content>
        <div class=box4>
        	<div class=title1>
            	<div style="float:left;width:10px;height:25px;margin-top:10px;margin-left:10px;background-color:#606"></div>
                <div style="font-size:22px;float:left;margin-top:11px;margin-left:10px">五星组织</div>
                <div style="margin-top:5px;height:3px;width:240px;float:left;background-color:#000"></div>
            </div>
        	<div class=news>
           		<li class=li>全国首个孤独症 儿童合唱团在宁成立</li>
                <li class=li>我为"亚青"活动献一计-----"亚青"赛...</li>
                <li class=li>青年志愿者徽章设计征集大赛活动方案</li>
                <li class=li>雨花台区掀起学雷锋志愿活动热潮</li>
                <li class=li>南京春运期间多措并举开展关爱农民...</li>
                <li class=li>魏纪中："亚青会将给城市带来正能量"</li>
                <li class=li>第二届亚洲青年运动会吉祥物揭晓</li>
            </div>
        </div>
        <div class=box5>
        	<div class=title2>
            	<div style="float:left;width:10px;height:25px;margin-top:10px;margin-left:10px;background-color:#606"></div>
                <div style="font-size:22px;float:left;margin-top:11px;margin-left:10px">记录公示</div>
                <div style="margin-top:5px;height:3px;width:420px;float:left;background-color:#000"></div>
            </div>
        	<div class=news>
           		<li class=li>全国首个孤独症 儿童合唱团在宁成立</li>
                <li class=li>我为"亚青"活动献一计-----"亚青"赛会期间文...</li>
                <li class=li>青年志愿者徽章设计征集大赛活动方案</li>
                <li class=li>雨花台区掀起学雷锋志愿活动热潮</li>
                <li class=li>南京春运期间多措并举开展关爱农民工志愿服务</li>
                <li class=li>魏纪中："亚青会将给城市带来正能量"</li>
                <li class=li>第二届亚洲青年运动会吉祥物揭晓</li>
            </div>
        </div>
        <div class=box6>
        	<div class=title3>
            	<div style="float:left;width:10px;height:25px;margin-top:10px;margin-left:10px;background-color:#606"></div>
                <div style="font-size:22px;float:left;margin-top:11px;margin-left:10px">在线咨询</div>
                <div style="margin-top:5px;height:3px;width:280px;float:left;background-color:#000"></div>
            </div>
        	<div class=news>
           		<li class=li>全国首个孤独症 儿童合唱团在宁成立</li>
                <li class=li>我为"亚青"活动献一计-----"亚青"赛会期间文...</li>
                <li class=li>青年志愿者徽章设计征集大赛活动方案</li>
                <li class=li>雨花台区掀起学雷锋志愿活动热潮</li>
                <li class=li>南京春运期间多措并举开展关爱农民工志愿...</li>
                <li class=li>魏纪中："亚青会将给城市带来正能量"</li>
                <li class=li>第二届亚洲青年运动会吉祥物揭晓</li>
            </div>
        </div>
    </div>
</div>




<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>