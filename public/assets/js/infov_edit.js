
var flag=0;
function getByteLen(val) {    //传入一个字符串
	var len = 0;
	for (var i = 0; i < val.length; i++) {
		if (val[i].match(/[^\x00-\xff]/ig) != null) //全角 
			len += 2; //如果是全角，占用两个字节
		else
			len += 1; //半角占用一个字节
		}
	return len;
}
$("#name").blur(function(){
	if($("#name").val().replace(/\s/g,"")==""){
		$("#name_tip").text("*不能为空");
		document.getElementById("name_tip").style.color="red";
		flag++;

	}
	else if($("#name").val().length<2){
		$("#name_tip").text("*姓名最少为2个字符");
		document.getElementById("name_tip").style.color="red";
		flag++;

	}
	else if($("#name").val().length>20){
		$("#name_tip").text("*姓名最多为20个字符");
		document.getElementById("name_tip").style.color="red";
	}
	else{
		flag=0;
		$("#name_tip").text("");
	}
});

$("#idcard_num").blur(function(){
	
	if($("#idcard_num").val().replace(/\s/g,"")==""){
		//alert("hello");
		$("#id_number").text("不能为空");
		document.getElementById("id_number").style.color="red";
		flag++;
	}
	else{
		$("#id_number").text("");
	}
});

$("#birthday").blur(function(){
	var reg=/^(([0-9]{3}[1-9]|[0-9]{2}[1-9][0-9]{1}|[0-9]{1}[1-9][0-9]{2}|[1-9][0-9]{3})-(((0[13578]|1[02])-(0[1-9]|[12][0-9]|3[01]))|((0[469]|11)-(0[1-9]|[12][0-9]|30))|(02-(0[1-9]|[1][0-9]|2[0-8]))))|((([0-9]{2})(0[48]|[2468][048]|[13579][26])|((0[48]|[2468][048]|[3579][26])00))-02-29) $/;
	if(!reg.test($("#birthday").val())){
		$("#birthday_tip").text("格式是yyyy-mm-dd");
		document.getElementById("birthday_tip").style.color="red";
	}
	else{
		$("#birthday_tip").text("");
	}
});

$("#cet4").blur(function(){
	//if($("#cet4").val().)
	var reg=/^\d*$/;
	if($("#cet4").val().replace(/\s/g,"")!=""){
		if(!reg.test($("#cet4").val())){
			$("#cet4_tip").text("分数应该是一个数字");
			document.getElementById("cet4_tip").style.color="red";
		}
	}
	else{
		$("#cet4_tip").text("您的四级英语成绩，没有则留空");
	}
});

$("#cet6").blur(function(){
	//if($("#cet4").val().)
	var reg=/^\d*$/;
	if($("#cet6").val().replace(/\s/g,"")!=""){
		if(!reg.test($("#cet6").val())){
			$("#cet6_tip").text("分数应该是一个数字");
			document.getElementById("cet6_tip").style.color="red";
		}
	}
	else{
		$("#cet6_tip").text("您的6级英语成绩，没有则留空");
	}
});

$("#phone").blur(function(){
	
	var phone = $("#phone").val();
	var pattern =  new RegExp(/^(1(([35][0-9])|(47)|[8][01236789]))\d{8}$/);
	if(!pattern.test(phone))
	{
		$("#phone_tip").text('请输入正确的手机号码');
		document.getElementById("phone_tip").style.color="red";
		
	}
	else
	{
		$('#phone_tip').text('');
	}
});
$("#email").blur(function(){
	var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
	var email_addr=$("#email").val();
	
	if($("#email").val().replace(/\s/g,"")!="")
		if(!reg.test(email_addr)){
			$("#email_tip").text("邮箱格式错误");
			document.getElementById("email_tip").style.color="red";
			
		}
		else{
			$("#email_tip").text("");	
		}
	else{
		$("#email_tip").text("邮箱不能为空");
		document.getElementById("email_tip").style.color="red";
	}
});

$("#other_skills").blur(function(){
	if($("#other_skills").val().length>100){
		$("#other_skills_tip").text("超过100字");
		document.getElementById("other_skills_tip").style.color="red";
	}
	else{
		$("#other_skills_tip").text("100字以内");
		document.getElementById("other_skills_tip").style.color="black";
	}
});