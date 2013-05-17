
function show_en(){
	$('#en_choose').slideDown();
}
function hide_en(){
	$('#en_choose').slideUp();	
}
function show_faculty(){
	$('#faculty_choose').slideDown();	
}
function hide_faculty(){
	$('#faculty_choose').slideUp();	
}
var editor;
KindEditor.ready(function(K) {
	editor = K.create('textarea[name="content"]', {
		resizeType : 1,
		allowPreviewEmoticons : true,
		allowImageUpload : true,
		allowFileManager : true,
		items : [
			'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
			'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
			'insertunorderedlist', '|', 'emoticons', 'image', 'link','unlink','baidumap','fullscreen']
	});
});
var cur_state,preview_flag=0;
function check_before_submit(){
	
}

$(document).ready(function(){
	//alert("ready");
	jQuery(function($){
		$('.fileUpload').fileUploader({
			autoUpload: false,
			limit: false,
			buttonUpload: '#px-submit',
			buttonClear: '#px-clear',
			selectFileLabel: '选择文件',
			allowedExtension: 'zip|rar',
			afterUpload: function(formContainer) {
 				//alert(formContainer);
				//plan_url=$("#uploadedfile").val();
				//alert(plan_url);
			}
			});
	});
	$("#activity_name").blur(function(){
		if($("#activity_name").val().replace(/\s/g,"")==""){
			$("#activity_name_error").html("活动名称不能为空");
			//document.getElementById("activity_name_error").style.color="red";
		}
		else{
			if($("#activity_name").val().length>20){
				$("#activity_name_error").html("活动名称20字以内");
			}
			else{
				$("#activity_name_error").html("");
			}
		}
	})
	$("#activity_place").blur(function(){
		if($("#activity_place").val().replace(/\s/g,"")==""){
			$("#activity_place_error").html("活动地点不能为空");
			//document.getElementById("activity_name_error").style.color="red";
		}
		else{
			if($("#activity_place").val().length>50){
				$("#activity_place_error").html("活动地点50字以内");
			}
			else{
				$("#activity_place_error").html("");
			}
		}
	})
	
	
	$("#begin_time").blur(function()
	{
		var time = $('#begin_time').val();
		
		var pattern = new RegExp(/^(([0-9]{3}[1-9]|[0-9]{2}[1-9][0-9]{1}|[0-9]{1}[1-9][0-9]{2}|[1-9][0-9]{3})-(((0[13578]|1[02])-(0[1-9]|[12][0-9]|3[01]))|((0[469]|11)-(0[1-9]|[12][0-9]|30))|(02-(0[1-9]|[1][0-9]|2[0-8]))))|((([0-9]{2})(0[48]|[2468][048]|[13579][26])|((0[48]|[2468][048]|[3579][26])00))-02-29) $/);
		if($("#begin_time").val().replace(/\s/g,"")!=""){
			if(!pattern.test(time))
			{
				$('#begin_time_tip').html('时间格式错误：YYYY-MM-DD');
			}
			else
			{
				$('#begin_time_tip').html('');
			}
		}
		else{
				$('#begin_time_tip').html('开始时间不能为空');
		}
	})

	$("#end_time").blur(function(){
		var time = $('#end_time').val();
		
		var pattern = new RegExp(/^(([0-9]{3}[1-9]|[0-9]{2}[1-9][0-9]{1}|[0-9]{1}[1-9][0-9]{2}|[1-9][0-9]{3})-(((0[13578]|1[02])-(0[1-9]|[12][0-9]|3[01]))|((0[469]|11)-(0[1-9]|[12][0-9]|30))|(02-(0[1-9]|[1][0-9]|2[0-8]))))|((([0-9]{2})(0[48]|[2468][048]|[13579][26])|((0[48]|[2468][048]|[3579][26])00))-02-29) $/);
		if($("#end_time").val().replace(/\s/g,"")!=""){
			if(!pattern.test(time))
			{
				$('#end_time_error').html('时间格式错误：YYYY-MM-DD');
			}
			else
			{
				
				if($("#begin_time").val().replace(/\s/g,"")!=""){
					//alert($("#begin_time").val());
					var starttimes = $("#begin_time").val().split("-");
 					var endtimes = $("#end_time").val().split("-");
 					var starttimeTemp = starttimes[0] + "/" + starttimes[1] + "/" + starttimes[2];
 					var endtimesTemp = endtimes[0] + "/" + endtimes[1] + "/" + endtimes[2];
					if(Date.parse(new   Date(starttimeTemp))>Date.parse(new   Date(endtimesTemp))){
						$('#end_time_tip').html('开始时间不能在结束时间之后');
						}
					else{
						//alert("world");
						$('#end_time_tip').html('');
					}
				}
				else{
					$('#end_time_tip').html('什么时候开始呢');
				}
				
			}
		}
		else{
				$('#end_time_tip').html('结束时间不能为空');
		}
	})

	$("#last_time").blur(function(){
		if($("#last_time").val().replace(/\s/g,"")==""){
			$('#last_time_tip').html('持续时间不能为空');
		}
		else{
			var reg = new RegExp("^[0-9]*$");
			if(!reg.test($("#last_time").val())){
				$('#last_time_tip').html('请输入数字');
			}
			else{
				$('#last_time_tip').html('');
			}
		}
	})

	$("#detail_time").blur(function()
	{
		if($("#detail_time").val().replace(/\s/g,"")==""){
			$('#detail_time_error').html('详细时间不能为空');
		}
		else{
			
			$('#detail_time_error').html('');
		}
	})

	$("#total_num").blur(function()
	{
		if($("#total_num").val().replace(/\s/g,"")==""){
			$('#total_num_error').html('招募人数不能为空');
		}
		else{
			
			$('#total_num_error').html('');
		}
	})

	$("#other_language").blur(function()
	{
		
	})
	$("#responser").blur(function()
	{
		var name = $('#responser').val();
		var pattern = new RegExp(/^[\u4e00-\u9fa5]{2,5}$/);
		if(!pattern.test(name))
		{
			$('#responser_error').html('姓名格式错误');
		}
		else
		{
			$('#responser_error').html('');
	
	
		}
	})
	$("#responser_tel").blur(function(){
		var phone = $('#responser_tel').val();
		var pattern =  new RegExp(/^(1(([35][0-9])|(47)|[8][01236789]))\d{8}$/);
		if(!pattern.test(phone))
		{
			$('#responser_tel_error').html('请输入正确的手机号码');
		}
		else
		{
			$('#responser_tel_error').html('');
		}
		
	})
	
	$("#submit").click(function(){
			//alert("submit");
			preview_flag=0;
			cur_state="auditing";
			submit_click();
		});
	$("#preview").click(function(){
			preview_flag=1;
			cur_state="editing";
			submit_click();	
		});
	$("#save").click(function(){
			preview_flag=0;
			cur_state="editing";
			submit_click();	
		});

var rand1 = Math.ceil(Math.random()*100)%33;
var rand2 = 0;
var rand3 = 0;
while( (rand2 = Math.ceil(Math.random()*100)%33) == rand1 );
while( (rand3 = Math.ceil(Math.random()*100)%33) == rand1 || rand3  == rand2 );

$('#span_right').html("<img class=\"reg_nju_scene\" src=\"./assets/img/nju_scene/scene"+rand1+".jpg\" /><img class=\"reg_nju_scene\" src=\"./assets/img/nju_scene/scene"+rand2+".jpg\" /><img class=\"reg_nju_scene\" src=\"./assets/img/nju_scene/scene"+rand3+".jpg\" />");
});

function submit_click()
{
	//alert("您好！");
	profile = editor.html();
	var Weekday=document.getElementsByName("weekday");
	var Weekday_time=0;
	for(var i=0;i<Weekday.length;i++)
  	{
    	 if(Weekday.item(i).checked){
        	 Weekday_time=Weekday_time+parseInt(Weekday.item(i).getAttribute("value"));  
		 }
 	}
	//alert(profile);
	var act_id=document.getElementById("act_id").innerHTML;
	//alert($('#begin_time').val());
	var faculty=document.getElementsByName("faculty_choose");
	var faculty_limit="";
   	for(var i=0;i<faculty.length;i++)
  	{
    	 if(faculty.item(i).checked){
        	 faculty_limit=faculty_limit.concat(faculty.item(i).getAttribute("value").concat(" "));
			 //alert(faculty_limit);
		 }
 	}
	//alert(faculty_limit);
	$.ajax({
		type:"POST",
		data:{id:act_id,activity_name:$('#activity_name').val(),activity_place:$("#activity_place").val(),time_type:$('#time_type').val(),attribution_type:$('#attribution_type').val(),begin_time:$('#begin_time').val(),end_time:$('#end_time').val(),deadline:$('#deadline').val(),detail_time:$('#detail_time').val(),total_num:$('#total_num').val(),need_audit:$('#need_audit').val(),responser:$('#responser').val(),responser_tel:$('#responser_tel').val(),last_time:$('#last_time').val(),activity_profile:profile,state:cur_state,weekday_time:Weekday_time,other_language:$("#other_language").val(),faculty_limit:faculty_limit,cet4:$('#cet4').val(),cet6:$('#cet6').val()},
		url:"./handle/act_apply.php",
		success:function(html){
		//alert(html);
			if(html == 1) {
				if (preview_flag==0)
				{
					if (cur_state=='auditing')
						alert("申请成功,请等待管理员审核");
					else if (cur_state=='editing')
						alert("保存成功");
					window.close();
				}else
				{
					//alert('http://localhost/njuvolunteer/public/act_dtl.php?act_id='+act_id);
					window.open('http://localhost/njuvolunteer/public/act_dtl.php?act_id='+act_id);
				}
			} else {
				alert("申请失败"+html);
			}
		}	
	});
}
