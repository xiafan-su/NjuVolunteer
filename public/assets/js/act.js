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
var slidehot=0;
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
			setTimeout("flag=0",500);
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
			setTimeout("flag=0",500);
		}
	});
	setTimeout('slide()',5000);	
	returntoday();
	$('#hotlist').animate({left:'-960px'},25000,'linear');
	setTimeout("slidehott()",25000);
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
		setTimeout("flag=0",500);
	}	
}
function returntoday(){
	mydate = new Date();
	//$("#day1").html(getday(mydate.getDay())).show();
	
	//alert(mydate.setFullYear(mydate.getDate(),mydate.getMonth(),mydate.getDate()));
	//alert(mydate.getDay());
	//mydate.setDate(mydate.getDate()-6);
	//alert(mydate.getDay());
	transdate=new Date();
	//alert(transdate.getYear());
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/week_act_list.php",
		data:{
			
			date:transdate.getDate(),
			month:(transdate.getMonth()+1),
			year:(transdate.getYear()+1900),
			day:transdate.getDay(),
		},
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			//alert(html);
			//alert("hello");
			//$("#act_day11").html(html);
			document.getElementById("weekact").style.display="none";
			$("#weekact_list").html(html);
			document.getElementById("weekact_list").style.display="block";
			$("#day1").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
			mydate.setDate(mydate.getDate()+1);
			$("#day2").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
			mydate.setDate(mydate.getDate()+1);
			$("#day3").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
			mydate.setDate(mydate.getDate()+1);
			$("#day4").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
			mydate.setDate(mydate.getDate()+1);
			$("#day5").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
			mydate.setDate(mydate.getDate()+1);
			$("#day6").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
			mydate.setDate(mydate.getDate()+1);
			$("#day7").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
			
		}	
	});
}
function preweek(){
	mydate.setDate(mydate.getDate()-13);
	predate=new Date();
	//alert(mydate.getYear());
	predate.setYear(mydate.getYear()+1900);
		//alert(predate.getYear());
	predate.setMonth(mydate.getMonth(),mydate.getDate());
	//alert(predate.getDate());
	$("#day1").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day2").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day3").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day4").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day5").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day6").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day7").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	
	//alert(predate.getYear());
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/week_act_list.php",
		data:{
			
			date:predate.getDate(),
			month:(predate.getMonth()+1),
			year:(predate.getYear()+1900),
			day:predate.getDay(),
		},
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			//alert(html);
			//$("#act_day11").html(html);
			document.getElementById("weekact").style.display="none";
			$("#weekact_list").html(html);
			document.getElementById("weekact_list").style.display="block";
		}	
	});
}
tdate=new Date();
function nextweek(){
	mydate.setDate(mydate.getDate()+1);
	tdate=new Date();
	tdate.setYear(mydate.getYear()+1900);
	//alert(tdate.getYear());
	tdate.setMonth(mydate.getMonth(),mydate.getDate());
	//tdate.setDate(mydate.getDate());
	//alert(mydate.getMonth()+" "+tdate.getMonth()+" "+tdate.getDate());
	//alert(tdate.getMonth()+1);
	$("#day1").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day2").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day3").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day4").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day5").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day6").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	mydate.setDate(mydate.getDate()+1);
	$("#day7").html(mydate.getMonth()+1+"-"+mydate.getDate()+"-"+getday(mydate.getDay())).show();
	//alert(tdate.getMonth()+"--"+tdate.getDate());
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/week_act_list.php",
		data:{
			
			date:tdate.getDate(),
			month:(tdate.getMonth()+1),
			year:(tdate.getYear()+1900),
			day:tdate.getDay(),
		},
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			//alert(html);
			document.getElementById("weekact").style.display="none";
			$("#weekact_list").html(html);
			document.getElementById("weekact_list").style.display="block";
			//$("#act_day11").html(html);
		}	
	});
}
function getday(temp){
	if(temp=='0')
		return '周日';
	else if(temp=='1')
		return '周一';
	else if(temp=='2')
		return '周二';
	else if(temp=='3')
		return '周三';
	else if(temp=='4')
		return '周四';
	else if(temp=='5')
		return '周五';
	else if(temp=='6')
		return '周六';
}
function slide(){
	slideleft();
	setTimeout('slide()',5000);	
}
function slidehott(){
	var list1=$('#hotlist1').html();
	var list2=$('#hotlist2').html();
	$('#hotlist1').html(list2);
	$('#hotlist2').html(list1);
	$('#hotlist').animate({left:'0px'},0);
	$('#hotlist').animate({left:'-960px'},25000,'linear');
	setTimeout("slidehott()",25000);
}

function searchit(){
	keyword=$("#keyword").val();
	//if(keyword==""){
	//	alert("请输入关键字");
	//	return;	
	//}
	document.getElementById("hotact").style.display="none";
	document.getElementById("result").style.display="block";
	keyword = $('#keyword').val();
	timetype = 0; 
	attributiontype = 0;
	timelimit = 0;
	actstate = 0;
	selectedtt(timetype);
	selectedat(attributiontype);
	selectedtl(timelimit);
	selectedas(actstate);
	
	actnum = 5;		//modified by XiaoGeng
	searchitt();
	if(keyword=="")
		$("#result-bar").html("为您显示所有活动列表").show();
	else
		$("#result-bar").html("为您找到与“"+keyword+"”相关的活动如下，请点击分类进行进一步检索").show();
}
function searchtimetype(temp){
	removett(timetype);
	timetype = temp;
	selectedtt(timetype);
	//alert(timetype);
	searchitt();	
}
function selectedtt(temp){
	document.getElementById("t"+temp).style.fontWeight="bolder";
	document.getElementById("t"+temp).style.color="#606";
}
function removett(temp){
	document.getElementById("t"+temp).style.fontWeight="normal";
	document.getElementById("t"+temp).style.color="#000";
}
function searchattributiontype(temp){
	removeat(attributiontype);
	attributiontype = temp;
	selectedat(attributiontype);
	//alert(attributiontype);
	searchitt();	
}
function selectedat(temp){
	document.getElementById("a"+temp).style.fontWeight="bolder";
	document.getElementById("a"+temp).style.color="#606";
}
function removeat(temp){
	document.getElementById("a"+temp).style.fontWeight="normal";
	document.getElementById("a"+temp).style.color="#000";
}
function searchtimelimit(temp){
	removetl(timelimit);
	timelimit = temp;
	selectedtl(timelimit);
	//alert(timelimit);
	searchitt();	
}
function selectedtl(temp){
	document.getElementById("l"+temp).style.fontWeight="bolder";
	document.getElementById("l"+temp).style.color="#606";
}
function removetl(temp){
	document.getElementById("l"+temp).style.fontWeight="normal";
	document.getElementById("l"+temp).style.color="#000";
}
function searchactstate(temp){
	removeas(actstate);
	actstate = temp;
	selectedas(actstate);
	//alert(actstate);
	searchitt();	
}
function selectedas(temp){
	document.getElementById("s"+temp).style.fontWeight="bolder";
	document.getElementById("s"+temp).style.color="#606";
}
function removeas(temp){
	document.getElementById("s"+temp).style.fontWeight="normal";
	document.getElementById("s"+temp).style.color="#000";
}
function more(){
	actnum += 5;
	searchitt();	
}
function searchitt(){
	document.getElementById('loading-bar').style.display='block';
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
			document.getElementById('loading-bar').style.display='none';
			$("#act_list").html(html);
		}	
	});
}