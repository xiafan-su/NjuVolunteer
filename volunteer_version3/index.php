<?php
require_once('include/php/basic.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>首页</title>
<link href="./header.css" rel="stylesheet" />
<link href="./include/css/main.css" rel="stylesheet" />
<link href="./include/css/login.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="./imgs/jquery-1.9.1.min.js" type="text/javascript"></script>
<script>
var ad = 1;
var t = 0;
$(document).ready(function(){
	$("#picshow").html("<img src=\"./imgs/" + ad + ".jpg\" width=240px height=300px />").show();
	t=setTimeout("timedCount()",3000);
});
function timedCount()
{
	ad=(ad+1)%6;
	$("#picshow").html("<img src=\"./imgs/" + ad + ".jpg\" width=240px height=300px />").show();
	t=setTimeout("timedCount()",3000);
}
</script>
</head>

<body>
<div class=header>
	<?php
	require('include/php/header_index.php');
	
	?>
</div>
<div>
<?php
require('include/php/login.php');
?>
</div>
<div class=main>
	<div class=adv>
		<img src="./imgs/index.png" />
	</div>
    <div class=content>
        <div class=box1 id=picshow>
            
        </div>
        <div class=box2>
            <div class=title>
            </div>
     		<div class=news>
            	<li class=li>全国首个孤独症 儿童合唱团在宁成立</li>
                <li class=li>我为"亚青"活动献一计-----"亚青"赛会期间文...</li>
                <li class=li>青年志愿者徽章设计征集大赛活动方案</li>
                <li class=li>雨花台区掀起学雷锋志愿活动热潮</li>
                <li class=li>南京春运期间多措并举开展关爱农民工志愿服务</li>
                <li class=li>魏纪中："亚青会将给城市带来正能量"</li>
                <li class=li>第二届亚洲青年运动会吉祥物揭晓</li>
                <li class=li>南京志愿者温暖社区"空巢"老人共享新年气氛</li>
                <li class=li>"相约南京"主题交流活动在港举行</li>
            </div>
        </div>
        <div class=link1>
           
        </div>
        <div class=link2>
            
        </div>
        <div class=link1>
            
        </div>
        <div class=link2>
            
        </div>
    </div>
    <div class=adv2>
    	<img src="./imgs/bottom.png"  />
    </div>
</div>
<?php
require('include/php/footer.php');
?>
</body>

</html>