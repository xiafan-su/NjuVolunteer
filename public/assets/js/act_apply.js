
function show_en(){
	$('#en_choose').show();
}
function hide_en(){
	$('#en_choose').hide();	
	$('#cet4').val(0);
	$('#cet6').val(0);	
}
function show_faculty(){
	$('#faculty_choose').show();	
}
function hide_faculty(){
	$('#faculty_choose').hide();	
	var faculty=document.getElementsByName("faculty_choose");
	//var faculty_limit="";
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
});
var cur_state,preview_flag=0;
function check_before_submit(){
	
}
var name_flag=0;
var place_flag=0;
var begin_time_flag=0;
var end_time_flag=0;
var last_time_flag=0;
var detail_time_flag=0;
var deadline_flag=0;
var total_num_flag=0;
var responser_flag=0;
var responser_tel_flag=0;
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

var rand1 = Math.ceil(Math.random()*100)%33;
var rand2 = 0;
var rand3 = 0;
while( (rand2 = Math.ceil(Math.random()*100)%33) == rand1 );
while( (rand3 = Math.ceil(Math.random()*100)%33) == rand1 || rand3  == rand2 );

$('#span_right').html("<img class=\"reg_nju_scene\" src=\"./assets/img/nju_scene/scene"+rand1+".jpg\" /><img class=\"reg_nju_scene\" src=\"./assets/img/nju_scene/scene"+rand2+".jpg\" /><img class=\"reg_nju_scene\" src=\"./assets/img/nju_scene/scene"+rand3+".jpg\" />");
});

function test_act_name(){
		//alert("hello");
	if($("#activity_name").val().replace(/\s/g,"")==""){
		$("#activity_name_error").html("*活动名称不能为空");
		document.getElementById("activity_name_error").style.color="red";
		name_flag=0;
	}
	
	else{
		if($("#activity_name").val().length>45){
			document.getElementById("activity_name_error").style.color="red";
			$("#activity_name_error").html("*活动名称45字以内");
			name_flag=0;
		}
		else{
			document.getElementById("activity_name_error").style.color="black";
			$("#activity_name_error").html("");
			name_flag=1;
		}
	}
}

function test_act_place(){
		if($("#activity_place").val().replace(/\s/g,"")==""){
			document.getElementById("activity_place_error").style.color="red";
			$("#activity_place_error").html("*活动地点不能为空");
			//document.getElementById("activity_name_error").style.color="red";
			place_flag=0;
		}
		else{
			if($("#activity_place").val().length>50){
				document.getElementById("activity_place_error").style.color="red";
				$("#activity_place_error").html("*活动地点50字以内");
				place_flag=0;
			}
			else{
				document.getElementById("activity_place_error").style.color="black";
				$("#activity_place_error").html("");
				place_flag=1;
			}
		}
}

function test_begin_time(){
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
				$('#begin_time_tip').html('');
				document.getElementById("begin_time_tip").style.color="black";
				begin_time_flag=1;
			}
		}
		else{
				document.getElementById("begin_time_tip").style.color="red";
				$('#begin_time_tip').html('*开始时间不能为空');
				begin_time_flag=0;
		}
	
}

function test_end_time(){
		var time = $('#end_time').val();
		
		var pattern = new RegExp(/^(([0-9]{3}[1-9]|[0-9]{2}[1-9][0-9]{1}|[0-9]{1}[1-9][0-9]{2}|[1-9][0-9]{3})-(((0[13578]|1[02])-(0[1-9]|[12][0-9]|3[01]))|((0[469]|11)-(0[1-9]|[12][0-9]|30))|(02-(0[1-9]|[1][0-9]|2[0-8]))))|((([0-9]{2})(0[48]|[2468][048]|[13579][26])|((0[48]|[2468][048]|[3579][26])00))-02-29) $/);
		if($("#end_time").val().replace(/\s/g,"")!=""){
			if(!pattern.test(time))
			{
				end_time_flag=0;
				document.getElementById("end_time_tip").style.color="red";
				$('#end_time_tip').html('*时间格式错误：YYYY-MM-DD');
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
						$('#end_time_tip').html('*开始时间不能在结束时间之后');
						document.getElementById("end_time_tip").style.color="red";
						end_time_flag=0;
						}
					else{
						//alert("world");
						end_time_flag=1;
						document.getElementById("end_time_tip").style.color="black";
						$('#end_time_tip').html('');
						
					}
				}
				else {
					end_time_flag=0;
					document.getElementById("end_time_tip").style.color="red";
					$('#end_time_tip').html('*什么时候开始呢');
				}
				
				
			}
		}
		else{
				end_time_flag=0;
				document.getElementById("end_time_tip").style.color="red";
				$('#end_time_tip').html('*结束时间不能为空');
		}
}

function test_deadline(){
	var time=$('#deadline').val();
	//alert(time);
	var pattern = new RegExp(/^(([0-9]{3}[1-9]|[0-9]{2}[1-9][0-9]{1}|[0-9]{1}[1-9][0-9]{2}|[1-9][0-9]{3})-(((0[13578]|1[02])-(0[1-9]|[12][0-9]|3[01]))|((0[469]|11)-(0[1-9]|[12][0-9]|30))|(02-(0[1-9]|[1][0-9]|2[0-8]))))|((([0-9]{2})(0[48]|[2468][048]|[13579][26])|((0[48]|[2468][048]|[3579][26])00))-02-29) $/);
	
	if(time.replace(/\s/g,"")!=""){
		if(!pattern.test(time)){
			deadline_flag=0;
			document.getElementById("deadline_tip").style.color="red";
			$('#deadline_tip').html('*时间格式错误：YYYY-MM-DD');
		}
		else{
			
			
			if($("#end_time").val().replace(/\s/g,"")!=""){
				//alert($("#begin_time").val());
				var starttimes = $("#end_time").val().split("-");
				var endtimes = $("#deadline").val().split("-");
				var starttimeTemp = starttimes[0] + "/" + starttimes[1] + "/" + starttimes[2];
				var endtimesTemp = endtimes[0] + "/" + endtimes[1] + "/" + endtimes[2];
				if(Date.parse(new Date(starttimeTemp)) < Date.parse(new Date(endtimesTemp))){
					$('#deadline_tip').html('*截止时间不能在结束时间之后');
					document.getElementById("deadline_tip").style.color="red";
					deadline_flag=0;
					}
				else{
					//alert("world");
					deadline_flag=1;
					document.getElementById("deadline_tip").style.color="black";
					$('#deadline_tip').html('');
				}
			}
			else{
				deadline_flag=0;
				document.getElementById("deadline_tip").style.color="red";
				$('#deadline_tip').html('*请填写活动结束时间');
			}
		}
	}
	else{
		deadline_flag=0;
		document.getElementById("deadline_tip").style.color="red";
		$('#deadline_tip').html('*截止时间不能为空');
	}
}

function test_last_time(){
		if($("#last_time").val().replace(/\s/g,"")==""){
			last_time_flag=0;
			document.getElementById("last_time_tip").style.color="red";
			$('#last_time_tip').html('*持续时间不能为空');
		}
		else{
			var reg = new RegExp("^[0-9]*$");
			if(!reg.test($("#last_time").val())){
				$('#last_time_tip').html('*请输入数字');
				document.getElementById("last_time_tip").style.color="red";
				last_time_flag=0;
			}
			else{
				last_time_flag=1;
				document.getElementById("last_time_tip").style.color="black";
				$('#last_time_tip').html('');
			}
		}
	
}

function test_detail_time(){
	if($("#detail_time").val().replace(/\s/g,"")==""){
		document.getElementById("detail_time_error").style.color="red";
		$('#detail_time_error').html('*详细时间不能为空');
		detail_time_flag=0;
	}
	else{
		detail_time_flag=1;
		document.getElementById("detail_time_error").style.color="black";
		$('#detail_time_error').html('');
	}
}

function test_total_num(){
		if($("#total_num").val().replace(/\s/g,"")==""){
			document.getElementById("total_num_error").style.color="red";
			$('#total_num_error').html('*招募人数不能为空');
			total_num_flag=0;
		}
		else{
			total_num_flag=1;
			document.getElementById("total_num_error").style.color="red";
			$('#total_num_error').html('');
		}
}
function test_other_lang(){
	
}
function test_responser(){
	if($('#responser').val().length>20)
	{
		responser_flag=0;
		//alert("test");
		document.getElementById("responser_error").style.color="red";
		$('#responser_error').html('*长度过长');
	}
	else if($('#responser').val().replace(/\s/g,"")=="")
	{
		responser_flag=0;
		//alert("test");
		document.getElementById("responser_error").style.color="red";
		$('#responser_error').html('*不能为空');
	}
	else
	{
		responser_flag=1;
		document.getElementById("responser_error").style.color="balck";
		$('#responser_error').html('');


	}
}

function test_responser_tel(){
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
			document.getElementById("responser_tel_error").style.color="balck";
			$('#responser_tel_error').html('');
		}
}

function test_submit(){
	test_act_name();
	test_act_place();
	test_begin_time();
	test_end_time();
	test_last_time();
	test_detail_time();
	test_total_num();
	test_responser();
	test_responser_tel();
	test_deadline();
	test_other_lang();
	preview_flag=0;
	cur_state="auditing";
	if ( name_flag==1 && place_flag==1 && begin_time_flag==1 && end_time_flag==1 && last_time_flag==1 && detail_time_flag==1 && total_num_flag==1 && responser_flag==1 && responser_tel_flag==1&&deadline_flag==1)
	submit_click();
	else alert("填写信息中有错误或有信息为空");
}

function test_save(){
	test_act_name();
	test_act_place();
	test_begin_time();
	test_end_time();
	test_last_time();
	test_detail_time();
	test_total_num();
	test_responser();
	test_responser_tel();
	test_deadline();
	test_other_lang();
	preview_flag=0;
	cur_state="editing";
	if ( name_flag==1 )
		submit_click();
	else alert("最少需要填写活动名称才能保存");
}

function test_preview(){
	test_act_name();
	test_act_place();
	test_begin_time();
	test_end_time();
	test_last_time();
	test_detail_time();
	test_total_num();
	test_responser();
	test_responser_tel();
	test_deadline();
	test_other_lang();
	preview_flag=1;
	cur_state="editing";
	if ( name_flag==1 && place_flag==1 && begin_time_flag==1 && end_time_flag==1 && last_time_flag==1 && detail_time_flag==1 && total_num_flag==1 && responser_flag==1 && responser_tel_flag==1&&deadline==1)
	submit_click();
	else alert("填写信息中有错误或有信息为空");	
}


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
		//alert(html);
			if(html == 1) {
				if (preview_flag==0)
				{
					if (cur_state=='auditing')
						alert("提交成功,请等待管理员审核");
					else if (cur_state=='editing')
						alert("保存成功");
					window.close();
				}else
				{
					//alert('http://localhost/njuvolunteer/public/act_dtl.php?act_id='+act_id);
					window.open('../public/act_dtl.php?act_id='+act_id,'_blank');
				}
			} else  {
				alert("申请失败"+html);
			}
		}	
	});
}
