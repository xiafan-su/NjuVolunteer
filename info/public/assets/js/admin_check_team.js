// JavaScript Document
var cid;
var cn;
var cun;
var cgn;
var ce;
var cut;
var cgt;
var caa;
var cpwd;
function checkid(){
	var id=$("#col1").val();
	
			$.ajax({
		type:"POST",
		data:{
			newid:id
			},
		url:"./handle/admin_checkteamid.php",
		success:function(html){
			if (html[html.length-1]!=1){
				$("#ac_1").text("重复的账号名");
				document.getElementById("ac_1").style.color="red";cid=1;
			}
			else{
				$("#ac_1").text("");
				document.getElementById("ac_1").style.color="black";cid=0;
			}
		}
	});
}
function checkpwd(){
	if($("#mima").val().replace(/\s/g,"")==""){
		$("#pwd").text("*不能为空");
		document.getElementById("pwd").style.color="red";cpwd=1;

	}
	else{
		$("#pwd").text("");
		document.getElementById("pwd").style.color="black";cpwd=0;
	}
}

function checkname(){
	if($("#col2").val().replace(/\s/g,"")==""){
		$("#nm_2").text("*不能为空");
		document.getElementById("nm_2").style.color="red";cn=1;

	}
	else if($("#col2").val().length<2){
		$("#nm_2").text("*团队名称最少为2个字符");
		document.getElementById("nm_2").style.color="red";cn=1;

	}
	else if($("#col2").val().length>20){
		$("#nm_2").text("*团队名称最多为20个字符");
		document.getElementById("nm_2").style.color="red";cn=1;
	}
	else{
		$("#nm_2").text("");
		document.getElementById("nm_2").style.color="black";cn=0;
	}
}

function checkuname(){
	if($("#col4").val().replace(/\s/g,"")==""){
		$("#un_4").text("*不能为空");
		document.getElementById("un_4").style.color="red";cun=1;

	}
	else if($("#col4").val().length<2){
		$("#un_4").text("*姓名最少为2个字符");
		document.getElementById("un_4").style.color="red";cun=1;

	}
	else if($("#col4").val().length>20){
		$("#un_4").text("*姓名最多为20个字符");
		document.getElementById("un_4").style.color="red";cun=1;
	}
	else{
		$("#un_4").text("");
		document.getElementById("un_4").style.color="black";cun=0;
	}
}



function checkgname(){
	if($("#col6").val().replace(/\s/g,"")==""){
		$("#gn_6").text("*不能为空");
		document.getElementById("gn_6").style.color="red";cgn=1;

	}
	else if($("#col6").val().length<2){
		$("#gn_6").text("*姓名最少为2个字符");
		document.getElementById("gn_6").style.color="red";cgn=1;

	}
	else if($("#col6").val().length>20){
		$("#gn_6").text("*姓名最多为20个字符");
		document.getElementById("gn_6").style.color="red";cgn=1;
	}
	else{
		$("#gn_6").text("");
		document.getElementById("gn_6").style.color="black";cgn=0;
	}
}




function checkemail(){
	var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;

	var email_addr=$("#col3").val();
	
	if($("#col3").val().replace(/\s/g,"")!="")
		if(!reg.test(email_addr)){
			$("#em_3").text("邮箱格式错误");
			document.getElementById("em_3").style.color="red";ce=1;
		}
		else{
			$("#em_3").text("");ce=0;	
		}
	else{
		$("#em_3").text("邮箱不能为空");
		document.getElementById("em_3").style.color="red";ce=1;
	}	
	
}


function checkutel(){
	var vl=$("#col5").val();
	var pattern =  new RegExp(/^(1(([35][0-9])|(47)|[8][01236789]))\d{8}$/);
	if(!pattern.test(vl))
	{
		
		$("#up_5").text('请输入正确的手机号码');
		document.getElementById("up_5").style.color="red";cut=1;
		
	}
	else
	{
		$('#up_5').text('');cut=0;
	}
	
}

function checkgtel(){
	var vl=$("#col7").val();
	var pattern =  new RegExp(/^(1(([35][0-9])|(47)|[8][01236789]))\d{8}$/);
	if(!pattern.test(vl))
	{
		$("#gp_7").text('请输入正确的手机号码');
		document.getElementById("gp_7").style.color="red";cgt=1;
		
	}
	else
	{
		$('#gp_7').text('');cgt=0;
	}	
}

function checkaa(){
	if($("#col8").val().replace(/\s/g,"")==""){
		$("#aa_8").text("*不能为空");
		document.getElementById("aa_8").style.color="red";caa=1;

	}
	else if($("#col8").val().length<2){
		$("#aa_8").text("*挂靠单位名称最少为2个字符");
		document.getElementById("aa_8").style.color="red";caa=1;

	}
	else if($("#col8").val().length>20){
		$("#aa_8").text("*挂靠名称最多为20个字符");
		document.getElementById("aa_8").style.color="red";caa=1;
	}
	else{
		$("#aa_8").text("");
		document.getElementById("aa_8").style.color="black";caa=0;
	}
	
	
}

function checkover(srcForm){
if (cid==0 && cn==0 && cun==0 && cgn==0 && ce==0 && cut==0 && cgt==0 && caa==0 && cpwd==0) return true;
	return false;
}