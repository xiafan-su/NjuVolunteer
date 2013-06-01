
var nowloading="<div class=\"loading\"><img src=\"./assets/img/loading/loading.gif\"/></div>";

var flag_name=0;
var flag_idcard=0;
var flag_birthday=0;
var flag_email=0;
var flag_phone=0;
var flag_cet4=0;
var flag_cet6=0;
var flag_other_skills=0;

var origin_name;
var origin_idcard;
var origin_birthday;
var origin_email;
var origin_phone;
var origin_cet4;
var origin_cet6;
var origin_other_skills;

function change_sign(){
		$.ajax({
		type:"POST",
		data:{
			signature:$("#sign").val()
			},
		url:"./handle/change_sign.php",
		success:function(html){
			//alert(html);
			//$("#note_detail").html(html);
			if (html!=1)
				alert(html);
		}
	});
	
	}
function test_name(){
	if($("#name").val().replace(/\s/g,"")==""){
		$("#name_tip").text("*不能为空");
		document.getElementById("name_tip").style.color="red";
		flag_name++;

	}
	else if($("#name").val().length<2){
		$("#name_tip").text("*姓名最少为2个字符");
		document.getElementById("name_tip").style.color="red";
		flag_name++;

	}
	else if($("#name").val().length>20){
		$("#name_tip").text("*姓名最多为20个字符");
		document.getElementById("name_tip").style.color="red";
		flag_name++;
	}
	else{
		flag_name=0;
		$("#name_tip").text("");
		document.getElementById("name_tip").style.color="black";
	}
}

function test_idcard(){
	var reg= /^(\d{14}|\d{17})(\d|[xX])$/;
	if($("#idcard_num").val().replace(/\s/g,"")==""){
		//alert("hello");
		$("#id_number").text("*不能为空");
		document.getElementById("id_number").style.color="red";
		flag_idcard++;
	}
	else if(!reg.test($("#idcard_num").val())){
		$("#id_number").text("*格式不对,14位或18位身份证");
		document.getElementById("id_number").style.color="red";
		flag_idcard++;
	}
	else{
		flag_idcard=0;
		$("#id_number").text("");
		document.getElementById("id_number").style.color="black";
	}
}

function test_birthday(){
	var reg=/^(([0-9]{3}[1-9]|[0-9]{2}[1-9][0-9]{1}|[0-9]{1}[1-9][0-9]{2}|[1-9][0-9]{3})-(((0[13578]|1[02])-(0[1-9]|[12][0-9]|3[01]))|((0[469]|11)-(0[1-9]|[12][0-9]|30))|(02-(0[1-9]|[1][0-9]|2[0-8]))))|((([0-9]{2})(0[48]|[2468][048]|[13579][26])|((0[48]|[2468][048]|[3579][26])00))-02-29) $/;
	if(!reg.test($("#birthday").val())){
		$("#birthday_tip").text("格式是yyyy-mm-dd");
		document.getElementById("birthday_tip").style.color="red";
		flag_birthday++;
	}
	else{
		flag_birthday=0;
		$("#birthday_tip").text("");
	}
}

function test_cet4(){
	//if($("#cet4").val().)
	var reg=/^\d*$/;
	if($("#cet4").val().replace(/\s/g,"")!=""){
		if(!reg.test($("#cet4").val())){
			$("#cet4_tip").text("请输入数字");
			document.getElementById("cet4_tip").style.color="red";
			flag_cet4++;
		}
		else{
			flag_cet4=0;
			$("#cet4_tip").text(" ");
			document.getElementById("cet4_tip").style.color="black";
		}
	}
	else{
		flag_cet4=0;
		$("#cet4_tip").text("您的四级英语成绩，没有则留空");
		document.getElementById("cet4_tip").style.color="black";
	}
}

function test_cet6(){
	//if($("#cet4").val().)
	var reg=/^\d*$/;
	if($("#cet6").val().replace(/\s/g,"")!=""){
		if(!reg.test($("#cet6").val())){
			$("#cet6_tip").text("请输入数字");
			document.getElementById("cet6_tip").style.color="red";
			flag_cet6++;
		}
		else{
			flag_cet6=0;
			$("#cet6_tip").text("");
			document.getElementById("cet6_tip").style.color="black";
		}
	}
	else{
		flag_cet6=0;
		$("#cet6_tip").text("您的6级英语成绩，没有则留空");
		document.getElementById("cet6_tip").style.color="black";
	}
}

function test_phone(){
	
	var phone = $("#phone").val();
	var pattern =  new RegExp(/^(1(([35][0-9])|(47)|[8][01236789]))\d{8}$/);
	if(!pattern.test(phone))
	{
		flag_phone++;
		$("#phone_tip").text('*请输入正确的手机号码');
		document.getElementById("phone_tip").style.color="red";
		
	}
	else
	{
		flag_phone=0;
		$('#phone_tip').text('');
	}
}

function test_email(){
	var reg =/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	var email_addr=$("#email").val();
	
	if($("#email").val().replace(/\s/g,"")!="")
		if(!reg.test(email_addr)){
			$("#email_tip").text("*邮箱格式错误");
			document.getElementById("email_tip").style.color="red";
			flag_email++;
		}
		else{
			flag_email=0;
			$("#email_tip").text("");	
		}
	else{
		flag_email++;
		$("#email_tip").text("*邮箱不能为空");
		document.getElementById("email_tip").style.color="red";
	}
}

function test_other_skills(){
	if($("#other_skills").val().length>100){
		$("#other_skills_tip").text("*超过100字");
		document.getElementById("other_skills_tip").style.color="red";
		flag_other_skills++;
	}
	else{
		flag_other_skills=0;
		$("#other_skills_tip").text("100字以内");
		document.getElementById("other_skills_tip").style.color="black";
	}
}

var origin_myGender;
var origin_myPolitic;
var origin_myLanguageLevel;
var origin_myMedical;
var origin_myDrive;
var origin_other_lang;
var origin_dormitory;
var origin_nation;
var origin_cloth_size;
var origin_dept;
var origin_grade;

function handlechange(){

	var Gender=document.getElementsByName("gender_select");
	var Politic=document.getElementsByName("politics_select");
	var LanguageLevel=document.getElementsByName("level_select");
	var Drive=document.getElementsByName("drive_select");
	var Medical=document.getElementsByName("medical_select");
	//var Dept=document.getElementsByName("");
	var myGender,myPolitic,myLanguageLevel,myMedical,myDrive,myNation,myClothSize,myDept;
	
   	for(var i=0;i<Gender.length;i++)
  	{
    	 if(Gender.item(i).checked){
        	 myGender=Gender.item(i).getAttribute("value");
  	 		 break;
		 }
 	}
	for(var i=0;i<Politic.length;i++)
  	{
    	 if(Politic.item(i).checked){
        	 myPolitic=Politic.item(i).getAttribute("value");  
  	 		 break;
		 }
 	}
	for(var i=0;i<LanguageLevel.length;i++)
  	{
    	 if(LanguageLevel.item(i).checked){
        	 myLanguageLevel=LanguageLevel.item(i).getAttribute("value");  
  	 		 break;
		 }
 	}
	for(var i=0;i<Drive.length;i++)
  	{
    	 if(Drive.item(i).checked){
        	 myDrive=Drive.item(i).getAttribute("value");  
  	 		 break;
		 }
 	}
	for(var i=0;i<Medical.length;i++)
  	{
    	 if(Medical.item(i).checked){
        	 myMedical=Medical.item(i).getAttribute("value");  
  	 		 break;
		 }
 	}
	
	//alert(origin_myMedical);
	var f = document.getElementById("faculty"); 
	var n = document.getElementById("nation");
	var c = document.getElementById("cloth_size");
	var g = document.getElementById("grade");
	//alert(t.options[t.selectedIndex].value);
	//alert(myGender);
	//var t = document.getElementById("faculty"); 
	
	//var main_content=$("#main_content").html();
	
	
	test_name();
	test_idcard();
	test_birthday();
	test_email();
	test_phone();
	test_cet4();
	test_cet6();
	test_other_skills();
	//alert(origin_cloth_size);
	if((origin_name==$("#name").val())&&(origin_idcard==$("#idcard_num").val())&&(origin_email==$("#email").val())&&(origin_birthday==$("#birthday").val())&&(origin_phone==$("#phone").val())&&(origin_other_skills==$("#other_skills").val())&&(origin_cet4==$("#cet4").val())&&(origin_cet6==$("#cet6").val())&&(origin_myGender==myGender)&&(origin_myPolitic==myPolitic)&&(origin_myLanguageLevel==myLanguageLevel)&&(origin_myMedical==myMedical)&&(origin_myDrive==myDrive)&&(origin_dormitory==$("#dormitory").val())&&(origin_other_lang==$("#other_language").val())&&(origin_nation==n.options[n.selectedIndex].value)&&(origin_dept==f.options[f.selectedIndex].value)&&(origin_cloth_size==c.options[c.selectedIndex].value)&&(origin_grade==g.options[g.selectedIndex].value)){
		alert("修改成功,没有提交后台数据库");
		$("#vol_profile").click();
	}
	else{
		var flag=flag_name+flag_idcard+flag_birthday+flag_email+flag_phone+flag_cet4+flag_cet6+flag_other_skills;
		if(flag!=0){
			alert("填写的格式有误，请看提示");
		}
		else{
			$("#operation").html(nowloading);
			document.getElementById('loading-bar').style.display='block';
			$.ajax({
				type:"POST",
				data:{
					name:$("#name").val(),
					idcard_num:$("#idcard_num").val(),
					gender:myGender,
					email:$("#email").val(),
					phone:$("#phone").val(),
					grade:$("#grade").val(),
					faculty:f.options[f.selectedIndex].value,
					birthday:$("#birthday").val(),
					politics_status:myPolitic,
					nation:n.options[n.selectedIndex].value,
					cloth_size:c.options[c.selectedIndex].value,
					dormitory:$("#dormitory").val(),
					cet4:$("#cet4").val(),
					cet6:$("#cet6").val(),
					language:$("#other_language").val(),
					language_level:myLanguageLevel,
					drive:myDrive,
					medical:myMedical,
					other_skills:$("#other_skills").val()
					},
				url:"./handle/change_vol_info.php",
				success:function(html){
					document.getElementById('loading-bar').style.display='none';
					//alert(html);
					if (html==1)
					{
						alert("修改成功");
						$("#vol_profile").click();
					}
					else 
					{	
						alert(html);
						//$("#main_content").html(main_content);
					}
					
				}
			});
		}
	}
}
function init(){
	$("#my_activity").click();
	}
$(document).ready(function(){
	init();
	
	})

function show_note(id){
	//alert(id);
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		data:{
			id:id
			},
		url:"./include/vol_note_detail.php",
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			$("#note_detail").html(html);
			$("#note_detail").show();
			$('#note_detail').animate({opacity:'1'},500);
			
		}
});
}
function readit(id,state){
	//alert(id);
	if (state=='unread')
	{
		//alert(state);
		document.getElementById('loading-bar').style.display='block';
		$.ajax({
			type:"POST",
			data:{
				read_id:id
				},
			url:"./handle/read_note.php",
			success:function(html){
				document.getElementById('loading-bar').style.display='none';
				//alert(html);
				//$("#note_detail").html(html);
				$('#note_detail').animate({opacity:'0'},1);
				$("#note_detail").hide();
				$("#new_notice").click();
			}
		});
	}else
	{
		$('#note_detail').animate({opacity:'0'},1);
		$("#note_detail").hide();
		//$("#notice_record").click();
	}
}
$("#my_activity").click(function(){
	$("#main_title").text("我参与的活动");
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./include/actv_takein.php",
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			//alert(html);
			$("#main_content").html(html);
		}	
	});
});
$("#activity_record").click(function(){
	$("#main_title").text("活动记录");
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
	type:"POST",
	url:"./include/vol_act_record.php",
	success:function(html){
		document.getElementById('loading-bar').style.display='none';
		//alert(html);
		$("#main_content").html(html);
	}	
});
});
$("#new_notice").click(function(){
	$("#main_title").text("新通知");
	$("#new_notice").text("新通知");
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
	type:"POST",
	data:{read:0},
	url:"./include/vol_note.php",
	success:function(html){
		document.getElementById('loading-bar').style.display='none';
			$("#main_content").html(html);
	}
});
});
$("#notice_record").click(function(){
	$("#main_title").text("历史通知");
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
	type:"POST",
	data:{read:1},
	url:"./include/vol_note.php",
	success:function(html){
		document.getElementById('loading-bar').style.display='none';
			$("#main_content").html(html);
	}
});
})
$("#vol_profile").click(function(){
	$("#main_title").text("个人资料");
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
	type:"POST",
	url:"./include/infov.php",
	success:function(html){
		document.getElementById('loading-bar').style.display='none';
		//alert(html);
		$('#main_content').html(html);
	}	
});
});

$("#change_profile").click(function(){
	//alert("change profile");
	$("#main_title").text("修改资料");
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./include/infov_edit.php",
		success:function(html){
			//alert(html);
			document.getElementById('loading-bar').style.display='none';
			$("#main_content").html(html);
			origin_name=$("#name").val();
			origin_idcard=$("#idcard_num").val();
			origin_birthday=$("#birthday").val();
			origin_email=$("#email").val();
			origin_phone=$("#phone").val();
			origin_cet4=$("#cet4").val();
			origin_cet6=$("#cet6").val();
			//alert($("#birthday").val()+origin_birthday);
			//alert(origin_name+origin_idcard+origin_birthday+origin_email+origin_phone+origin_cet4+origin_cet6);
			origin_other_skills=$("#other_skills").val();
			origin_other_lang=$("#other_language").val();
			origin_dormitory=$("#dormitory").val();
			var Gender=document.getElementsByName("gender_select");
			var Politic=document.getElementsByName("politics_select");
			var LanguageLevel=document.getElementsByName("level_select");
			var Drive=document.getElementsByName("drive_select");
			var Medical=document.getElementsByName("medical_select");
			var myGender,myPolitic,myLanguageLevel,myMedical,myDrive;
			for(var i=0;i<Gender.length;i++)
			{
				 if(Gender.item(i).checked){
					 origin_myGender=Gender.item(i).getAttribute("value");
					 break;
				 }
			}
			//alert(origin_myGender);
			for(var i=0;i<Politic.length;i++)
			{
				 if(Politic.item(i).checked){
					 origin_myPolitic=Politic.item(i).getAttribute("value");  
					 break;
				 }
			}
			for(var i=0;i<LanguageLevel.length;i++)
			{
				 if(LanguageLevel.item(i).checked){
					 origin_myLanguageLevel=LanguageLevel.item(i).getAttribute("value");  
					 break;
				 }
			}
			for(var i=0;i<Drive.length;i++)
			{
				 if(Drive.item(i).checked){
					 origin_myDrive=Drive.item(i).getAttribute("value");  
					 break;
				 }
			}
			for(var i=0;i<Medical.length;i++)
			{
				 if(Medical.item(i).checked){
					 origin_myMedical=Medical.item(i).getAttribute("value");  
					 break;
				 }
			}
			var f = document.getElementById("faculty"); 
			var n = document.getElementById("nation");
			var c = document.getElementById("cloth_size");
			var g = document.getElementById("grade");
			origin_nation=n.options[n.selectedIndex].value;

			origin_dept=f.options[f.selectedIndex].value;
			//alert(c.options[c.selectedIndex].value);
			origin_cloth_size=c.options[c.selectedIndex].value;
			
			origin_grade=g.options[g.selectedIndex].value;
			
			//alert(origin_cloth_size);
		}
	});
});
$("#my_team").click(function(){
	$("#main_title").text("我的团队");
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/my_team.php",
		success:function(html){
			//alert(html);
			document.getElementById('loading-bar').style.display='none';
			$("#main_content").html(html);
		}
	});
});
$("#my_focused_team").click(function(){
	$("#main_title").text("关注的团队");
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/my_followteam.php",
		success:function(html){
			//alert(html);
			document.getElementById('loading-bar').style.display='none';
			$("#main_content").html(html);
		}
	});
});



