var act=1;
var flag=0;
var topp=['-952px','-796px','-1088px','-887px'];
var left=['-1200px','-1140px','-1134px','-963px'];
var showp=['<h2 style="color:#FFF">夏凡参加XXX活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">魏子华参加XXX活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">王逸群加XXX活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">夏畅参加XXX活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">席胜渠参加XXX活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">肖耿参加XXX活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">段文娜参加XXX活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">王瑶菁参加XXX活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">王鑫参加XXX活动获得2小时志愿时间</h2>'];

var next=1;
var hide=1;
var shownum=0;
$(document).ready(function(){
	for(i=2;i<5;i++){
		$('#act-img'+i).hide();
		$('#act-detail'+i).hide();
	}
	$('#map-img').animate({marginTop:topp[0],marginLeft:left[0]});
	showpeopleRan();
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
function showpeopleRan(){
	setTimeout("showpeople()",1000+Math.random()*2000);
	setTimeout("showpeopleRan()",3000);
}
function showpeople(){
	if(shownum==9)
		shownum = 0;
	shownum++;
	var s = shownum;
	//alert(showp[shownum-1]);
	document.getElementById('item'+show).style.marginLeft=(Math.random()*480)+"px";
	document.getElementById('item'+show).style.marginTop="170px";
	$('#item'+show).html(showp[show-1]);
	$('#item'+show).animate({marginTop:'70px',opacity:'1'},2000)
	setTimeout("$('#item'+show).animate({marginTop:'20px',opacity:'0'},1000)",2000);
	setTimeout("document.getElementById('item'+show).style.display='none'",3000);
}
