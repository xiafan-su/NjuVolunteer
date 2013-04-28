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
	showpeople();
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
function showpeople(){
	if(shownum==9)
		shownum=0;
	$('#item'+next).html(showp[shownum]);
	shownum++;
	$('#item'+next).animate({marginLeft:Math.random()*490+'px',marginTop:Math.random()*180+'px',opacity:1},1000);
	next++;
	if(next==7)
		next = 1;
	setTimeout("hidepeople()",2000);
	setTimeout("showpeople()",1000);
}
function hidepeople(){
	$('#item'+next).animate({marginLeft:Math.random()*490+'px',marginTop:Math.random()*180+'px',opacity:0},1000);
	hide++;
	if(hide==7)
		hide = 1;
}