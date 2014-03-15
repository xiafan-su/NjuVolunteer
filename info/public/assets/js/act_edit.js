
function show_en(){
	$('#en_choose').slideDown();
}
function hide_en(){
	$('#en_choose').slideUp();
	$('#cet4').val(0);
	$('#cet6').val(0);	
}
function show_faculty(){
	$('#faculty_choose').slideDown();	
}
function hide_faculty(){
	$('#faculty_choose').slideUp();	
	var faculty=document.getElementsByName("faculty_choose");
	var faculty_limit="";
   	for(var i=0;i<faculty.length;i++)
  	{
    	 if(faculty.item(i).checked){
			faculty.item(i).checked=false;
		 }
 	}
}
function htmlEncode(str) {  
	 var s = "";  
	 if (str.length == 0) return "";  
	 s = str.replace(/&/g, "&amp;");  
	 s = s.replace(/</g, "&lt;");  
	 s = s.replace(/>/g, "&gt;");    
	 s = s.replace(/'/g, "&apos;");  
	 s = s.replace(/"/g, "&quot;");  
	 return s;  
};
var editor;
var origin_editor;
KindEditor.ready(function(K) {
	editor = K.create('textarea[name="content"]', {
		resizeType : 1,
		allowPreviewEmoticons : true,
		allowImageUpload : true,
		allowFileManager : true,
		items : [
			'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
			'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
			'insertunorderedlist', '|', 'wordpaste','emoticons', 'image', 'link','unlink','baidumap','fullscreen']
	});
	origin_editor=editor.html();
});
var cur_state,preview_flag=0;
function check_before_submit(){
	
}
var name_flag=1;
var place_flag=1;
var begin_time_flag=1;
var end_time_flag=1;
var deadline_flag=1;
var last_time_flag=1;
var detail_time_flag=1;
var total_num_flag=1;
var responser_flag=1;
var responser_tel_flag=1;
var origin_name;
var origin_place;
var origin_begin_time;
var origin_end_time;
var origin_deadline;
var origin_last_time;
var origin_detail_time;
var origin_total_num;
var origin_other_lang;
var origin_responser;
var origin_responser_tel;

var origin_time_type;
var origin_attr;
var origin_weekday;
var origin_dept_req;
var origin_need_audit;
var origin_cet4,origin_cet6;


$(document).ready(function(){
	origin_name=$("#activity_name").val();
	origin_place=$("#activity_place").val();
	origin_begin_time=$("#begin_time").val();
	origin_end_time=$("#end_time").val();
	origin_last_time=$("#last_time").val();
	origin_detail_time=$("#detail_time").val();
	origin_total_num=$("#total_num").val();
	origin_other_lang=$("#other_language").val();
	origin_responser=$("#responser").val();
	origin_responser_tel=$("#responser_tel").val();
	origin_cet4=$("#cet4").val();
	origin_cet6=$("#cet6").val();
	
	var t=document.getElementById("time_type");
	var a=document.getElementById("attribution_type");
	var n=document.getElementById("need_audit");
	origin_time_type=t.options[t.selectedIndex].value;
	origin_attr=a.options[a.selectedIndex].value;
	origin_need_audit=n.options[n.selectedIndex].value;
	
	var Weekday=document.getElementsByName("weekday");
	var Weekday_time=0;
	for(var i=0;i<Weekday.length;i++)
  	{
    	 if(Weekday.item(i).checked){
        	 Weekday_time=Weekday_time+parseInt(Weekday.item(i).getAttribute("value"));  
		 }
 	}
	
	origin_weekday=Weekday_time;
	
	//var English_request=document.getElementsByName("faculty_select");
	var faculty=document.getElementsByName("faculty_choose");
	var faculty_limit="";
   	for(var i=0;i<faculty.length;i++)
  	{
    	 if(faculty.item(i).checked){
        	 faculty_limit=faculty_limit.concat(faculty.item(i).getAttribute("value").concat(" "));
			 //alert(faculty_limit);
		 }
 	}
	
	origin_dept_req=faculty_limit;
	
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
			
			$("#activity_name_error").html("*活动名称不能为空");
			document.getElementById("activity_name_error").style.color="red";
			name_flag=0;
		}
		else{
			if($("#activity_name").val().length>20){
				$("#activity_name_error").html("*活动名称20字以内");
				document.getElementById("activity_name_error").style.color="red";
				name_flag=0;
			}
			else{
				$("#activity_name_error").html("");
				document.getElementById("activity_name_error").style.color="black";
				name_flag=1;
			}
		}
	})
	$("#activity_place").blur(function(){
		if($("#activity_place").val().replace(/\s/g,"")==""){
			document.getElementById("activity_place_error").style.color="red";
			$("#activity_place_error").html("*活动地点不能为空");
			
			place_flag=0;
		}
		else{
			if($("#activity_place").val().length>50){
				$("#activity_place_error").html("*活动地点50字以内");
				document.getElementById("activity_place_error").style.color="red";
				place_flag=0;
			}
			else{
				$("#activity_place_error").html("");
				document.getElementById("activity_place_error").style.color="black";
				place_flag=1;
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
				$('#begin_time_tip').html('*时间格式错误：YYYY-MM-DD');
				document.getElementById("begin_time_tip").style.color="red";
				begin_time_flag=0;
			}
			else
			{
				if(($("#end_time").val().replace(/\s/g,"")!="")&&(pattern.test($('#end_time').val()))){
					var starttimes = $("#begin_time").val().split("-");
					var endtimes = $("#end_time").val().split("-");
					var starttimeTemp = starttimes[0] + "/" + starttimes[1] + "/" + starttimes[2];
					var endtimesTemp = endtimes[0] + "/" + endtimes[1] + "/" + endtimes[2];
					if(Date.parse(new   Date(starttimeTemp))>Date.parse(new   Date(endtimesTemp))){
						
						$('#begin_time_tip').html('*开始时间不能在结束时间之后');
						document.getElementById("begin_time_tip").style.color="red";
						begin_time_flag=0;
						
					}
					else{
						$('#begin_time_tip').html('');
						$('#end_time_tip').html('');
						document.getElementById("begin_time_tip").style.color="black";
						begin_time_flag=1;
					}
					
				}
				else{
					$('#begin_time_tip').html('');
					document.getElementById("begin_time_tip").style.color="black";
					begin_time_flag=1;
				}
			}
		}
		else{
				$('#begin_time_tip').html('*开始时间不能为空');
				document.getElementById("begin_time_tip").style.color="red";
				begin_time_flag=0;
		}
	})

	$("#end_time").blur(function(){
		var time = $('#end_time').val();
		
		var pattern = new RegExp(/^(([0-9]{3}[1-9]|[0-9]{2}[1-9][0-9]{1}|[0-9]{1}[1-9][0-9]{2}|[1-9][0-9]{3})-(((0[13578]|1[02])-(0[1-9]|[12][0-9]|3[01]))|((0[469]|11)-(0[1-9]|[12][0-9]|30))|(02-(0[1-9]|[1][0-9]|2[0-8]))))|((([0-9]{2})(0[48]|[2468][048]|[13579][26])|((0[48]|[2468][048]|[3579][26])00))-02-29) $/);
		if($("#end_time").val().replace(/\s/g,"")!=""){
			if(!pattern.test(time))
			{
				end_time_flag=0;
				$('#end_time_tip').html('*时间格式错误：YYYY-MM-DD');
				document.getElementById("end_time_tip").style.color="red";
			}
			else
			{
				if(($("#begin_time").val().replace(/\s/g,"")!="")&&(pattern.test($("#begin_time").val()))){
					var starttimes = $("#begin_time").val().split("-");
					var endtimes = $("#end_time").val().split("-");
					var starttimeTemp = starttimes[0] + "/" + starttimes[1] + "/" + starttimes[2];
					var endtimesTemp = endtimes[0] + "/" + endtimes[1] + "/" + endtimes[2];
					if(Date.parse(new   Date(starttimeTemp))>Date.parse(new   Date(endtimesTemp))){
						$('#end_time_tip').html('*开始时间不能在结束时间之后');
						document.getElementById("end_time_tip").style.color="red";
						end_time_flag=0;
						}
					else{
						end_time_flag=1;
						$('#end_time_tip').html('');
						$('#begin_time_tip').html('');
						document.getElementById("end_time_tip").style.color="black";
					}
				}
				else{
					end_time_flag=1;
					$('#end_time_tip').html('');
					$('#begin_time_tip').html('');
					document.getElementById("end_time_tip").style.color="black";
					
				}
			
				
			}
		}
		else{
				end_time_flag=0;
				$('#end_time_tip').html('*结束时间不能为空');
				document.getElementById("end_time_tip").style.color="red";
		}
	})
	
	$('#deadline').blur(function(){
		if($('#deadline').val().replace(/\s/g,"")==""){
			$('#deadline_tip').html("*截止日期不能为空");
			document.getElementById("deadline_tip").style.color="red";
			deadline_flag=0;
		}
		else{
			var reg = new RegExp(/^(([0-9]{3}[1-9]|[0-9]{2}[1-9][0-9]{1}|[0-9]{1}[1-9][0-9]{2}|[1-9][0-9]{3})-(((0[13578]|1[02])-(0[1-9]|[12][0-9]|3[01]))|((0[469]|11)-(0[1-9]|[12][0-9]|30))|(02-(0[1-9]|[1][0-9]|2[0-8]))))|((([0-9]{2})(0[48]|[2468][048]|[13579][26])|((0[48]|[2468][048]|[3579][26])00))-02-29) $/);
			if(!reg.test($("#deadline").val())){
				document.getElementById("deadline_tip").style.color="red";
				$('#deadline_tip').html('*时间格式错误：YYYY-MM-DD');
				deadline_flag=0;
			}
			else{
				deadline_flag=1;
				$('#deadline_tip').html('');
				document.getElementById("deadline_tip").style.color="black";
			}
		}
	})
	
	$("#last_time").blur(function(){
		if($("#last_time").val().replace(/\s/g,"")==""){
			last_time_flag=0;
			$('#last_time_tip').html('*持续时间不能为空');
			document.getElementById("last_time_tip").style.color="red";
		}
		else{
			var reg = new RegExp("^[0-9]*$");
			if(!reg.test($("#last_time").val())){
				document.getElementById("last_time_tip").style.color="red";
				$('#last_time_tip').html('*请输入数字');
				last_time_flag=0;
			}
			else{
				last_time_flag=1;
				$('#last_time_tip').html('');
				document.getElementById("last_time_tip").style.color="black";
			}
		}
	})

	$("#detail_time").blur(function()
	{
		if($("#detail_time").val().replace(/\s/g,"")==""){
			document.getElementById("detail_time_error").style.color="red";
			$('#detail_time_error').html('*详细时间不能为空');
			detail_time_flag=0;
		}
		else{
			detail_time_flag=1;
			$('#detail_time_error').html('');
			document.getElementById("detail_time_error").style.color="black";
		}
	})

	$("#total_num").blur(function()
	{
		if($("#total_num").val().replace(/\s/g,"")==""){
			document.getElementById("total_num_error").style.color="red";
			$('#total_num_error').html('*招募人数不能为空');
			total_num_flag=0;
		}
		else{
			total_num_flag=1;
			document.getElementById("total_num_error").style.color="black";
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
			responser_flag=0;
			$('#responser_error').html('*姓名格式错误');
			document.getElementById("responser_error").style.color="red";
		}
		else
		{
			responser_flag=1;
			$('#responser_error').html('');
			document.getElementById("responser_error").style.color="black";
	
		}
	})
	$("#responser_tel").blur(function(){
		var phone = $('#responser_tel').val();
		var pattern =  new RegExp(/^(1(([35][0-9])|(47)|[8][01236789]))\d{8}$/);
		if(!pattern.test(phone))
		{
			responser_tel_flag=0;
			document.getElementById("responser_tel_error").style.color="red";
			$('#responser_tel_error').html('*请输入正确的手机号码');
		}
		else
		{
			responser_tel_flag=1;
			$('#responser_tel_error').html('');
			document.getElementById("responser_tel_error").style.color="black";
		}
		
	})
	
	$("#submit").click(function(){
			
			preview_flag=0;
			cur_state="auditing";
			var Weekday=document.getElementsByName("weekday");
			var Weekday_time=0;
			for(var i=0;i<Weekday.length;i++)
			{
				 if(Weekday.item(i).checked){
					 Weekday_time=Weekday_time+parseInt(Weekday.item(i).getAttribute("value"));  
				 }
			}
			
			var act_id=document.getElementById("act_id").innerHTML;
			
			var faculty=document.getElementsByName("faculty_choose");
			var faculty_limit="";
			for(var i=0;i<faculty.length;i++)
			{
				 if(faculty.item(i).checked){
					 faculty_limit=faculty_limit.concat(faculty.item(i).getAttribute("value").concat(" "));
				 }
			}
			
			var t=document.getElementById("time_type");
			var a=document.getElementById("attribution_type");
			var n=document.getElementById("need_audit");
			
			/*if((origin_name==$("#activity_name").val())&&(origin_place==$("#activity_place").val())&&(origin_begin_time==$("#begin_time").val())&&(origin_end_time==$("#end_time").val())&&(origin_last_time==$("#last_time").val())&&(origin_detail_time==$("#detail_time").val())&&(origin_total_num==$("#total_num").val())&&(origin_other_lang==$("#other_language").val())&&(origin_responser==$("#responser").val())&&(origin_responser_tel==$("#responser_tel").val())&&(origin_editor==editor.html())&&(origin_time_type==t.options[t.selectedIndex].value)&&(origin_attr==a.options[a.selectedIndex].value)&&(origin_need_audit==n.options[n.selectedIndex].value)&&(origin_cet4==$("#cet4").val())&&(origin_cet6==$("#cet6").val())&&(origin_weekday==Weekday_time)&&(origin_dept_req==faculty_limit)){
				alert("修改成功，已提交");
				window.close();
				
			}
			else*/
			//点击提交的话，无条件提交
			{
				//alert(deadline_flag);
				if ( name_flag==1 && place_flag==1 && begin_time_flag==1 && end_time_flag==1 && deadline_flag==1&& last_time_flag==1 && detail_time_flag==1 && total_num_flag==1 && responser_flag==1 && responser_tel_flag==1)
				submit_click();
				else alert("填写信息中有错误或有信息为空");
			}
		});
		
		
	$("#preview").click(function(){
			preview_flag=1;
			cur_state="editing";
			
			var Weekday=document.getElementsByName("weekday");
			var Weekday_time=0;
			for(var i=0;i<Weekday.length;i++)
			{
				 if(Weekday.item(i).checked){
					 Weekday_time=Weekday_time+parseInt(Weekday.item(i).getAttribute("value"));  
				 }
			}
			
			var act_id=document.getElementById("act_id").innerHTML;
			
			var faculty=document.getElementsByName("faculty_choose");
			var faculty_limit="";
			for(var i=0;i<faculty.length;i++)
			{
				 if(faculty.item(i).checked){
					 faculty_limit=faculty_limit.concat(faculty.item(i).getAttribute("value").concat(" "));
				 }
			}
			
			var t=document.getElementById("time_type");
			var a=document.getElementById("attribution_type");
			var n=document.getElementById("need_audit");
			
			if((origin_name==$("#activity_name").val())&&(origin_place==$("#activity_place").val())&&(origin_begin_time==$("#begin_time").val())&&(origin_end_time==$("#end_time").val())&&(origin_last_time==$("#last_time").val())&&(origin_detail_time==$("#detail_time").val())&&(origin_total_num==$("#total_num").val())&&(origin_other_lang==$("#other_language").val())&&(origin_responser==$("#responser").val())&&(origin_responser_tel==$("#responser_tel").val())&&(origin_editor==editor.html())&&(origin_time_type==t.options[t.selectedIndex].value)&&(origin_attr==a.options[a.selectedIndex].value)&&(origin_need_audit==n.options[n.selectedIndex].value)&&(origin_cet4==$("#cet4").val())&&(origin_cet6==$("#cet6").val())&&(origin_weekday==Weekday_time)&&(origin_dept_req==faculty_limit)){
				
				window.open('./act_dtl.php?act_id='+act_id,"newwindow");
			}
			else{
				alert(deadline_flag);
				if ( name_flag==1 && place_flag==1 && begin_time_flag==1 && end_time_flag==1 && deadline_flag==1 && last_time_flag==1 && detail_time_flag==1 && total_num_flag==1 && responser_flag==1 && responser_tel_flag==1)
				submit_click();
				else alert("填写信息中有错误或有信息为空");
			}
		});
		
		
	$("#save").click(function(){
			preview_flag=0;
			cur_state="editing";
			
			var Weekday=document.getElementsByName("weekday");
			var Weekday_time=0;
			for(var i=0;i<Weekday.length;i++)
			{
				 if(Weekday.item(i).checked){
					 Weekday_time=Weekday_time+parseInt(Weekday.item(i).getAttribute("value"));  
				 }
			}
			
			var act_id=document.getElementById("act_id").innerHTML;
			
			var faculty=document.getElementsByName("faculty_choose");
			var faculty_limit="";
			for(var i=0;i<faculty.length;i++)
			{
				 if(faculty.item(i).checked){
					 faculty_limit=faculty_limit.concat(faculty.item(i).getAttribute("value").concat(" "));
				 }
			}
			
			var t=document.getElementById("time_type");
			var a=document.getElementById("attribution_type");
			var n=document.getElementById("need_audit");
			
			if((origin_name==$("#activity_name").val())&&(origin_place==$("#activity_place").val())&&(origin_begin_time==$("#begin_time").val())&&(origin_end_time==$("#end_time").val())&&(origin_last_time==$("#last_time").val())&&(origin_detail_time==$("#detail_time").val())&&(origin_total_num==$("#total_num").val())&&(origin_other_lang==$("#other_language").val())&&(origin_responser==$("#responser").val())&&(origin_responser_tel==$("#responser_tel").val())&&(origin_editor==editor.html())&&(origin_time_type==t.options[t.selectedIndex].value)&&(origin_attr==a.options[a.selectedIndex].value)&&(origin_need_audit==n.options[n.selectedIndex].value)&&(origin_cet4==$("#cet4").val())&&(origin_cet6==$("#cet6").val())&&(origin_weekday==Weekday_time)&&(origin_dept_req==faculty_limit)){
				alert("保存成功!");
				window.close();
			}
			else{
				if ( name_flag==1)
				submit_click();
				else alert("最少需要填写活动标题");
			}
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
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		data:{id:act_id,activity_name:$('#activity_name').val(),activity_place:$("#activity_place").val(),time_type:$('#time_type').val(),attribution_type:$('#attribution_type').val(),begin_time:$('#begin_time').val(),end_time:$('#end_time').val(),deadline:$('#deadline').val(),detail_time:htmlEncode($('#detail_time').val()),total_num:$('#total_num').val(),need_audit:$('#need_audit').val(),responser:$('#responser').val(),responser_tel:$('#responser_tel').val(),last_time:$('#last_time').val(),activity_profile:htmlEncode(profile),state:cur_state,weekday_time:Weekday_time,other_language:$("#other_language").val(),faculty_limit:faculty_limit,cet4:$('#cet4').val(),cet6:$('#cet6').val()},
		url:"./handle/act_apply.php",
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
		//alert(html[4]);
			if(html.indexOf('1') != -1) {
				if (preview_flag==0)
				{
					if (cur_state=='auditing')
						alert("修改成功,请等待管理员审核");
					else if (cur_state=='editing')
						alert("保存成功");
					window.close();
				}else
				{
					window.open('act_dtl.php?act_id='+act_id,'_blank');
				}
			} else {
				alert("申请失败"+html);
			}
		}	
	});
}
