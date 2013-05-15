
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
	else{
		flag=0;
		$("#name_tip").text("");
	}
});

$("#idcard_num").blur(function(){
	
	if($("#idcard_num").val().replace(/\s/g,"")==""){
		//alert("hello");
		$("#id_number").text("\(^o^)/~讨厌，人家不能为空啦...");
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
		$("#birthday_tip").text("哎呀，人家都说了格式是yyyy-mm-dd~~");
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
			$("#cet4_tip").text("\(^o^)/~讨厌，人家更喜欢数字啦...");
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
			$("#cet6_tip").text("\(^o^)/~讨厌，人家更喜欢数字啦...");
			document.getElementById("cet6_tip").style.color="red";
		}
	}
	else{
		$("#cet6_tip").text("您的6级英语成绩，没有则留空");
	}
});

