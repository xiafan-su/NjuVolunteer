var keyword="";
var timetype=0;
var attributiontype=0;
var timelimit=0;
var weekday=0;
var actstate=0;
var actnum=0;
var left=0;
var picnum=5;
var flag=0;
var hot=[
'<li class=\"switchlist\"><img src=\"./assets/img/activity_center/hot/1.jpg\" /></li>',
'<li class=\"switchlist\"><img src=\"./assets/img/activity_center/hot/2.jpg\" /></li>',
'<li class=\"switchlist\"><img src=\"./assets/img/activity_center/hot/3.jpg\" /></li>',
'<li class=\"switchlist\"><img src=\"./assets/img/activity_center/hot/4.jpg\" /></li>',
'<li class=\"switchlist\"><img src=\"./assets/img/activity_center/hot/5.jpg\" /></li>'];
var mydate;
$(document).ready(function(){
	document.getElementById("switch").style.left="-800px";
	$("#switch").html(hot[2]+hot[0]+hot[1]+hot[2]+hot[0]).show();
	$("#slideleft").click(function(){
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
			flag=0;
		}
	});
	$("#slideright").click(function(){
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
			flag=0;
		}
	});
	setTimeout('slide()',5000);	
	returntoday();
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
		flag=0;
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
		flag=0;
	}	
}
function returntoday(){
	mydate = new Date();
	$("#day1").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day2").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day3").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day4").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day5").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day6").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day7").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();	
}
function preweek(){
	mydate.setDate(mydate.getDate()-13);
	$("#day1").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day2").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day3").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day4").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day5").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day6").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day7").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
}
function nextweek(){
	mydate.setDate(mydate.getDate()+1);
	$("#day1").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day2").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day3").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day4").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day5").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day6").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day7").html(mydate.getMonth()+1+"-"+mydate.getDate()).show();
}
function slide(){
	slideleft();
	setTimeout('slide()',5000);	
}
function highshow(){
	$("#hotlist").animate({left:'-960px'});
}
function hotshow(){
	$("#hotlist").animate({left:'0px'});
}
function searchit(){
	keyword=$("#keyword").val();
	if(keyword==""){
		alert("请输入关键字");
		return;	
	}
	document.getElementById("hotact").style.display="none";
	document.getElementById("result").style.display="block";
	keyword = $('#keyword').val();
	timetype = 0; 
	attributiontype = 0;
	timelimit = 0;
	actstate = 0;
	actnum = 10;
	searchitt();
	$("#result-bar").html("为您找到与“"+keyword+"”相关的活动如下，请点击分类进行进一步检索").show();
}
function searchtimetype(temp){
	timetype = temp;
	alert(timetype);
	searchitt();	
}
function searchattributiontype(temp){
	attributiontype = temp;
	alert(attributiontype);
	searchitt();	
}
function searchtimelimit(temp){
	timelimit = temp;
	alert(timelimit);
	searchitt();	
}
function searchactstate(temp){
	actstate = temp;
	alert(actstate);
	searchitt();	
}
function searchitt(){
	$.ajax({
		type:"POST",
		url:"./handle/act.php",
		data:{
			keyword:keyword,
			timetype:timetype,
			attributiontype:attributiontype,
			timelimit:timelimit,
			actstate:actstate,
			actnum:actnum},
		success:function(html){
			$("#act_list").html(html);
		}	
	});
}