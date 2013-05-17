// JavaScript Document
var keyword="";
var dtnum; //院系团队个数
var otnum; //其它组织的团队个数
var imgnum=5;
var current_img=1;
var listflag=1;  //当前显示的团队列表类别,1是院系，2是其它
var imgflag=0; //图片切换失效标识
var tn_img=[
	'<li class=\"tn-img-t\" id=\"tn-img-t1\"><img src=\"./assets/img/team_list/news2.jpg\" /><div class=\"img_state\" id=\"img_state1\">老虚的作品赛高！</div></li>',
	'<li class=\"tn-img-t\" id=\"tn-img-t2\"><img src=\"./assets/img/team_list/news3.jpg\" /><div class=\"img_state\" id=\"img_state2\">好像宫老爷子的哈城</div></li>',
	'<li class=\"tn-img-t\" id=\"tn-img-t3\"><img src=\"./assets/img/team_list/news4.jpg\" /><div class=\"img_state\" id=\"img_state3\">邻桌ED</div></li>',
	'<li class=\"tn-img-t\" id=\"tn-img-t4\"><img src=\"./assets/img/team_list/news5.jpg\" /><div class=\"img_state\" id=\"img_state4\">尘与雪</div></li>',
	'<li class=\"tn-img-t\" id=\"tn-img-t5\"><img src=\"./assets/img/team_list/news1.jpg\" /><div class=\"img_state\" id=\"img_state5\">翠星的喷泉美呀美呀美</div></li>'
]; 
$(document).ready(function(){
	document.getElementById("switch").style.left="-960px";
	$("#switch").html(tn_img[4]+tn_img[0]+tn_img[1]+tn_img[2]+tn_img[3]+tn_img[4]).show();
	for(k=1;k<imgnum+1;k++){
		imgstateshow(k);
		imgstatehide(k);
	}
	/*for(k=2;k<imgnum+1;k++){
		$('#t-img'+k).hide();
	}*/
	document.getElementById('group2').style.display='none';
	setTimeout('slide()',5000);	
	
});
function slideleft(){
	
	if((current_img+1)<imgnum+1)
		switchimg(current_img+1);
	else{
		current_img = 0;
		document.getElementById("switch").style.left="0px";
		switchimg(current_img+1);
	}
}
function slide(){
	slideleft();
	setTimeout('slide()',5000);	
}
function switchimg(temp){
	if(imgflag==0){
		imgflag=1;
		for(j=1;j<=5;j++){
			document.getElementById('dot'+j).style.background='rgb(102,51,102)';	
		}
		document.getElementById('dot'+temp).style.background='#FFF';
		if(current_img<imgnum+1 && current_img != temp){
			current_img = temp;
			var left = -(temp*960);
			$('#switch').animate({left:left+'px'},500);
			$('#img_state'+temp).show();
		}
		setTimeout($('#img_state'+temp).hide(),500);
		setTimeout($("#result-bar").html("").show(),500);
		setTimeout("imgflag=0",500);
	}
}
function somelist(temp) {
	if(temp == 1 && listflag != 1){
		document.getElementById('group2').style.display='none';
		document.getElementById('group1').style.display='block';
		listflag=1;
	}
	else if(temp == 2 && listflag != 2){
		document.getElementById('group1').style.display='none';
		document.getElementById('group2').style.display='block';
		listflag=2;
	}
}
function stateshow(temp){
		//$('#float_cover'+temp).fadeIn();
		$('#float_state'+temp).fadeIn();
}
function statehide(temp){
		//$('#float_cover'+temp).fadeOut();
		$('#float_state'+temp).fadeOut();
}
function imgstateshow(temp){
	$('#tn-img-t'+temp).mouseover(function(){
		$('#img_state'+temp).show();
	});
}
function imgstatehide(temp){
	$('#tn-img-t'+temp).mouseout(function(){
		$('#img_state_border'+temp).hide();
		$('#img_state'+temp).hide();
	});
}
function searchteam(){
	keyword = $("#keyword").val();
	document.getElementById("visualnews").style.display="none";
	document.getElementById("assortment_list").style.display="none";
	document.getElementById("dot_button").style.display="none";
	document.getElementById("teams_list").style.display="block";
	searchitt();
	if(keyword==""){
		$("#result-bar").html("为您显示所有团队列表").show();
	}
	else{
		$("#result-bar").html("为您找到相关的团队如下").show();
	}
}
function searchitt(){
	$.ajax({
		type:"POST",
		url:"./handle/act.php",
		data:{
			keyword:keyword,
			},
		success:function(html){
			$("#teams_list").html(html);
		}	
	});
}