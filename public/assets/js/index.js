var nowloading="<div class=\"loading\"><img src=\"./assets/img/loading/loading.gif\"/></div>";
var act=1;
var flag=0;
var topp=['-952px','-796px','-1088px','-887px'];
var left=['-1200px','-1140px','-1134px','-963px'];
var showp=['<h2 style="color:#FFF">恭喜夏凡同学参加仙林中学支教获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜魏子华同学参加宁工小学支教获得3小时志愿时间并获得0.5小时荣誉时间</h2>',
			'<h2 style="color:#FFF">恭喜王逸群同学加城市义工岗获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜夏畅同学参加图书馆整理图书活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜席胜渠同学参加仙林中学支教获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜肖耿同学参加仙林中学获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜段文娜同学参加宁工小学支教获得3小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜王瑶菁同学参加博物馆讲解活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜王鑫同学参加老年公寓活动获得2小时志愿时间</h2>'];
var showp2=['<h2 style="color:#FFF">恭喜夏凡同学参加临终关怀活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜魏子华同学参加万家帮活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜王逸群同学加万家帮活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜夏畅同学参加甘家巷小学支教获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜席胜渠同学参加希望之星大赛志愿者获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜肖耿同学参加佛缘会志愿者获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜段文娜同学参加校庆志愿者活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜王瑶菁同学参加博爱安养庇护活动获得3小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜王鑫同学参加尧化门小学支教获得4小时志愿时间</h2>'];
var claimstr = "志愿宣言：-我愿意成为一名光荣的志愿者-我承诺-尽己所能-不计报酬-帮助他人-服务社会-践行志愿精神-传播先进文化-为建设团结互助-平等友爱-共同前进的美好社会贡献力量";
var claimindex = 0;
var next=1;
var hide=1;
var autoindex = 1;
var shownum=0;
var shownum2=0;
$(document).ready(function(){
	for(i=2;i<6;i++){
		$('#act-img'+i).hide();
		$('#act-detail'+i).hide();
	}
	$('#map-img').animate({marginTop:topp[0],marginLeft:left[0]});
	var int1 = self.setInterval("nextpic()",5000);
	showpeople();
	setTimeout("showpeople2()",1500);
	$('#statistics').click(function(){
		$('#data-statistics').show();
		$('#data-statistics').animate({opacity:'1'});
		document.getElementById('loading-bar').style.display='block';
		$.ajax({
		type:"POST",
		url:"./handle/statistics.php",
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			$('#data-statistics').html(html);

		}
	});
	});
	$('#data-statistics').click(function(){
		$('#data-statistics').animate({opacity:'0'},500);
		setTimeout("$('#data-statistics').hide()",500);
	});
});
function changeact(temp){
	if(flag==0 && act!=temp){
		flag=1;
		$('#act-img'+act).slideUp(800);
		$('#act-detail'+act).hide(800);
		$('#act-img'+temp).show(800);
		$('#act-detail'+temp).show(800);
		$('#map-img').animate({marginTop:topp[temp-1],marginLeft:left[temp-1]},800);
		act=temp;
		setTimeout("flag=0",800);
	}
}
function show3dwall(){
	window.open("./plugin/cooliris/3Dshow.php");
}
function showpeople(){
	if(shownum==9)
		shownum = 0;
	shownum++;
	//alert(showp[shownum-1]);
	document.getElementById('item'+shownum).style.display='block';
	document.getElementById('item'+shownum).style.marginLeft=(Math.random()*480)+"px";
	document.getElementById('item'+shownum).style.marginTop="170px";
	$('#item'+shownum).html(showp[shownum-1]);
	$('#item'+shownum).animate({marginTop:'70px',opacity:'1'},2000)
	setTimeout("$('#item'+shownum).animate({marginTop:'20px',opacity:'0'},1000)",2000);
	setTimeout("document.getElementById('item'+shownum).style.display='none'",3000);
	setTimeout("showpeople()",3000);
}
function showpeople2(){
	if(shownum2==9)
		shownum2 = 0;
	shownum2++;
	//alert(showp[shownum-1]);
	document.getElementById('iitem'+shownum2).style.display='block';
	document.getElementById('iitem'+shownum2).style.marginLeft=(Math.random()*480)+"px";
	document.getElementById('iitem'+shownum2).style.marginTop="170px";
	$('#iitem'+shownum2).html(showp2[shownum2-1]);
	$('#iitem'+shownum2).animate({marginTop:'70px',opacity:'1'},2000)
	setTimeout("$('#iitem'+shownum2).animate({marginTop:'20px',opacity:'0'},1000)",2000);
	setTimeout("document.getElementById('iitem'+shownum2).style.display='none'",3000);
	setTimeout("showpeople2()",3000);
}
function nextpic(){
	if(autoindex == 4)
		autoindex = 0;
	autoindex++;
	changeact(autoindex);
}
function showclaim(){
	if(claimindex==0){
		$('#volclaim').animate({height:'430px',top:'100px',marginLeft:'-200px',width:'400px',opacity:'0.8'},1000);
		setTimeout("claima()",1000);
	}
}
function claima(){
	if(claimindex<86){
		if(claimstr[claimindex]=='-')
			$('#volclaim').append('<br />');
		else
			$('#volclaim').append(claimstr[claimindex]);
		claimindex++;
		setTimeout("claima()",100);
	}
}
function hiddenit(){
	if(claimindex>=86){
		$('#volclaim').animate({height:'0px',top:'220px',marginLeft:'0px',width:'0px',opacity:'0'},1000)	
		$('#volclaim').html('');
		claimindex=0;
	}
}
