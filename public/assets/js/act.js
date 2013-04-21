var keyword="";
var timetype="";
var attributiontype="";
var weekday=0;
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
	document.getElementById("hotact").style.display="none";
	document.getElementById("result").style.display="block";
	 /* keyword=$('#keyword').val();
	  timetype=$(':checked[name="time_type"]').val(); 
	  attributiontype=$(':checked[name="attribution_type"]').val();
	  weekday=(document.getElementById("weekday_0").checked?64:0)+
					(document.getElementById("weekday_1").checked?32:0)+
					(document.getElementById("weekday_2").checked?16:0)+
					(document.getElementById("weekday_3").checked?8:0)+
					(document.getElementById("weekday_4").checked?4:0)+
					(document.getElementById("weekday_5").checked?2:0)+
					(document.getElementById("weekday_6").checked?1:0);
	$.ajax({
		type:"POST",
		url:"./activity/activity_search.php",
		data:{
			keyword:keyword,
			timetype:timetype,
			attributiontype:attributiontype,
			weekday:weekday,
			page:0},
		success:function(html){
			$("#main").html(html);
		}	
	});*/
}
function nextpage(){
	$.ajax({
		type:"POST",
		url:"./activity/activity_search.php",
		data:{
			keyword:keyword,
			timetype:timetype,
			attributiontype:attributiontype,
			weekday:weekday,
			page:document.getElementById("current").innerHTML},
		success:function(html){
			$("#main").html(html);
		}
	});	
}
function prepage(){
	//alert((document.getElementById("current").innerHTML-1));
	$.ajax({
	type:"POST",
		url:"./activity/activity_search.php",
		data:{
			keyword:keyword,
			timetype:timetype,
			attributiontype:attributiontype,
			weekday:weekday,
			page:(document.getElementById("current").innerHTML-2)},
		success:function(html){
			$("#main").html(html);
		}
	});
}
function firstpage(){
	$.ajax({
	type:"POST",
		url:"./activity/activity_search.php",
		data:{
			keyword:keyword,
			timetype:timetype,
			attributiontype:attributiontype,
			weekday:weekday,
			page:0},
		success:function(html){
			$("#main").html(html);
		}
	});
}
function lastpage(){
	$.ajax({
	type:"POST",
		url:"./activity/activity_search.php",
		data:{
			keyword:keyword,
			timetype:timetype,
			attributiontype:attributiontype,
			weekday:weekday,
			page:(document.getElementById("last").innerHTML-1)},
		success:function(html){
			$("#main").html(html);
		}
	});
}

