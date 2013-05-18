
var nowloading="<div class=\"loading\"><img src=\"./assets/img/loading/loading.gif\"/></div>";

var flag_name=0;
var flag_idcard=0;
var flag_birthday=0;
var flag_email=0;
var flag_phone=0;
var flag_cet4=0;
var flag_cet6=0;
var flag_other_skills=0;
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
	
	if($("#idcard_num").val().replace(/\s/g,"")==""){
		//alert("hello");
		$("#id_number").text("*不能为空");
		document.getElementById("id_number").style.color="red";
		flag_idcard++;
	}
	else{
		flag_idcard=0;
		$("#id_number").text("");
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
		$("#phone_tip").text('请输入正确的手机号码');
		document.getElementById("phone_tip").style.color="red";
		
	}
	else
	{
		flag_phone=0;
		$('#phone_tip').text('');
	}
}

function test_email(){
	var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
	var email_addr=$("#email").val();
	
	if($("#email").val().replace(/\s/g,"")!="")
		if(!reg.test(email_addr)){
			$("#email_tip").text("邮箱格式错误");
			document.getElementById("email_tip").style.color="red";
			flag_email++;
		}
		else{
			flag_email=0;
			$("#email_tip").text("");	
		}
	else{
		flag_email++;
		$("#email_tip").text("邮箱不能为空");
		document.getElementById("email_tip").style.color="red";
	}
}

function test_other_skills(){
	if($("#other_skills").val().length>100){
		$("#other_skills_tip").text("超过100字");
		document.getElementById("other_skills_tip").style.color="red";
		flag_other_skills++;
	}
	else{
		flag_other_skills=0;
		$("#other_skills_tip").text("100字以内");
		document.getElementById("other_skills_tip").style.color="black";
	}
}

function handlechange(){

	var Gender=document.getElementsByName("gender_select");
	var Politic=document.getElementsByName("politics_select");
	var LanguageLevel=document.getElementsByName("level_select");
	var Drive=document.getElementsByName("drive_select");
	var Medical=document.getElementsByName("medical_select");
	var myGender,myPolitic,myLanguageLevel,myMedical,myDrive;
	
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
	var f = document.getElementById("faculty"); 
	var n = document.getElementById("nation");
	var c = document.getElementById("cloth_size");
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
	var flag=flag_name+flag_idcard+flag_birthday+flag_email+flag_phone+flag_cet4+flag_cet6+flag_other_skills;
	if(flag!=0){
		alert("填写的格式有误，请看提示");
	}
	else{
		$("#operation").html(nowloading);
		$.ajax({
			type:"POST",
			data:{
				name:$("#name").val(),
				idcard_num:$("#idcard_num").val(),
				gender:myGender,
				email:$("#email").val(),
				phone:$("#phone").val(),
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

function init(){
	$("#change_profile").click();
	}
function show_note(id){
	//alert(id);
	$("#note_detail").html(nowloading);
	$.ajax({
		type:"POST",
		data:{
			id:id
			},
		url:"./include/vol_note_detail.php",
		success:function(html){
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
		$.ajax({
			type:"POST",
			data:{
				read_id:id
				},
			url:"./handle/read_note.php",
			success:function(html){
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
	$("#main_content").html(nowloading);
	$.ajax({
		type:"POST",
		url:"./include/actv_takein.php",
		success:function(html){
			//alert(html);
			$("#main_content").html(html);
		}	
	});
});
$("#activity_record").click(function(){
	$("#main_title").text("活动记录");
	$("#main_content").html(nowloading);
	$.ajax({
	type:"POST",
	url:"./include/vol_act_record.php",
	success:function(html){
		//alert(html);
		$("#main_content").html(html);
	}	
});
});
$("#new_notice").click(function(){
	$("#main_title").text("新通知");
	$("#main_content").html(nowloading);
	$.ajax({
	type:"POST",
	data:{read:0},
	url:"./include/vol_note.php",
	success:function(html){
			$("#main_content").html(html);
	}
});
});
$("#notice_record").click(function(){
	$("#main_title").text("历史通知");
	$("#main_content").html(nowloading);
	$.ajax({
	type:"POST",
	data:{read:1},
	url:"./include/vol_note.php",
	success:function(html){
			$("#main_content").html(html);
	}
});
})
$("#vol_profile").click(function(){
	$("#main_title").text("个人资料");
	$("#main_content").html(nowloading);
	$.ajax({
	type:"POST",
	url:"./include/infov.php",
	success:function(html){
		//alert(html);
		$('#main_content').html(html);
	}	
});
});

$("#change_profile").click(function(){
	$("#main_title").text("修改资料");
	$("#main_content").html(nowloading);
	$.ajax({
		type:"POST",
		url:"./include/infov_edit.php",
		success:function(html){
			//alert(html);
			
			$("#main_content").html(html);
		}
	});
});
$("#my_team").click(function(){
	$("#main_title").text("我的团队");
	$("#main_content").html(nowloading);
	$.ajax({
		type:"POST",
		url:"./handle/my_team.php",
		success:function(html){
			//alert(html);
			
			$("#main_content").html(html);
		}
	});
});
$("#my_focused_team").click(function(){
	$("#main_title").text("关注的团队");
	$("#main_content").html(nowloading);
	$.ajax({
		type:"POST",
		url:"./handle/my_followteam.php",
		success:function(html){
			//alert(html);
			
			$("#main_content").html(html);
		}
	});
});



