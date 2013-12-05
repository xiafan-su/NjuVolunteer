// JavaScript Document
var keyword="";
var dtnum; //院系团队个数
var otnum; //其它组织的团队个数
var imgnum=5;
var current_img=1;
var listflag=1;  //当前显示的团队列表类别,1是院系，2是其它
var imgflag=0; //图片切换失效标识
var flag=0;
var left=0;
var hot=[
'<li class=\"switchlist\" onclick=\"window.open(\'http://www.nanjing2013.org/\',\'_blank\')\"><img src=\"./assets/img/activity_center/hot/5.jpg\" /></li>',
'<li class=\"switchlist\" onclick=\"window.open(\'http://society.people.com.cn/GB/8217/241699/243905/index.html\',\'_blank\')\"><img src=\"./assets/img/activity_center/hot/2.jpg\" /></li>',
'<li class=\"switchlist\" onclick=\"window.open(\'http://www.mianfeiwucan.org/home/\',\'_blank\')\"><img src=\"./assets/img/activity_center/hot/3.jpg\" /></li>',
'<li class=\"switchlist\" ><img src=\"./assets/img/activity_center/hot/4.jpg\" /></li>',
'<li class=\"switchlist\"><img src=\"./assets/img/activity_center/hot/1.jpg\" /></li>',
'<li class=\"switchlist\"><img src=\"./assets/img/activity_center/hot/6.jpg\" /></li>',
'<li class=\"switchlist\"><img src=\"./assets/img/activity_center/hot/7.jpg\" /></li>'];

$(document).ready(function(){
	document.getElementById("switch").style.left="-800px";
	$("#switch").html(hot[2]+hot[0]+hot[1]+hot[2]+hot[0]).show();
	document.getElementById("act-tag1").style.background="rgb(102,51,102)";
	$("#slideright").click(function(){
		if(flag==0){
			flag=1;
			left += 1;
			if(left<3)
				$("#switch").animate({left:'-=800px'});
			else{
				left = 0;
				document.getElementById("switch").style.left="0px";
				$("#switch").animate({left:'-=800px'});
			}
			pointtag()
			setTimeout("flag=0",500);
		}
	});
	$("#slideleft").click(function(){
		if(flag==0){
			flag=1;
			if(left>0){
				$("#switch").animate({left:'+=800px'});
				left -= 1;
			}
			else{
				left = 2;
				document.getElementById("switch").style.left="-3200px";
				$("#switch").animate({left:'+=800px'});
			}
			pointtag()
			setTimeout("flag=0",500);
		}
	});
	setTimeout('slide()',5000);
	/*for(k=2;k<imgnum+1;k++){
		$('#t-img'+k).hide();
	}*/
	//document.getElementById('group2').style.display='none';
	//setTimeout('slide()',5000);	
	
});
function slideleft(){
	if(flag==0){
		flag=1;
		left += 1;
		if(left<3)
			$("#switch").animate({left:'-=800px'});
		else{
			left = 0;
			document.getElementById("switch").style.left="0px";
			$("#switch").animate({left:'-=800px'});
		}
		pointtag()
		setTimeout("flag=0",500);
	}
}
function slideright(){
	if(flag==0){
		flag=1;
		if(left>0){
			$("#switch").animate({left:'+=800px'});
			left -= 1;
		}
		else{
			left = 2;
			document.getElementById("switch").style.left="-3200px";
			$("#switch").animate({left:'+=800px'});
		}
		pointtag()
		setTimeout("flag=0",500);
	}	
}
function pointtag(){
	document.getElementById("act-tag1").style.background="#FFFFFF";
	document.getElementById("act-tag2").style.background="#FFFFFF";
	document.getElementById("act-tag3").style.background="#FFFFFF";
	var tag = left+1;
	document.getElementById("act-tag"+tag).style.background="rgb(102,51,102)";
}
function showtag(index){
	if(flag == 0 && index-1 != left){
		flag = 1;
		$("#switch").animate({left:'-'+(800*index)+'px'});
		left = index - 1;
		pointtag();
		setTimeout("flag=0",500);
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
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/act.php",
		data:{
			keyword:keyword,
			},
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			$("#teams_list").html(html);
		}	
	});
}