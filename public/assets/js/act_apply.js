

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
			'insertunorderedlist', '|', 'emoticons', 'image', 'link','unlink','image','baidumap','fullscreen']
	});
});
var cur_state;
function check_before_submit()
{

}
$(document).ready(function(){
	//alert("ready");
$("#activity_name").blur(function()
{
	
})
$("#activity_place").blur(function()
{
	
})

$("#begin_time").blur(function()
{
	var time = $('#begin_time').val();
	var pattern = new RegExp();
	if(!pattern.test(name))
	{
		$('#begin_time_error').html('时间格式错误：Y-M-D');
	}
	else
	{
		$('#begin_time_error').html('');


	}
})

$("#end_time").blur(function()
{
	
})

$("#last_time").blur(function()
{
	
})

$("#detail_time").blur(function()
{
	
})

$("#total_num").blur(function()
{
	
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
$("#responser_tel").blur(function()
{
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
$("#responser").blur(function()
{
	
})
$("#submit").click(function(){
		//alert("submit");
		cur_state="auditing";
		submit_click();
	});
$("#preview").click(function(){
		cur_state="editing";
		submit_click();	
	});
$("#save").click(function(){
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
	//alert($('#begin_time').val());
	$.ajax({
		type:"POST",
		data:{activity_name:$('#activity_name').val(),activity_place:$("#activity_place").val(),time_type:$('#time_type').val(),attribution_type:$('#attribution_type').val(),begin_time:$('#begin_time').val(),end_time:$('#end_time').val(),detail_time:$('#detail_time').val(),total_num:$('#total_num').val(),need_audit:$('#need_audit').val(),responser:$('#responser').val(),responser_tel:$('#responser_tel').val(),last_time:$('#last_time').val(),activity_profile:profile,state:cur_state,weekday_time:Weekday_time},
		url:"./handle/act_apply.php",
		success:function(html){
		//alert(html);
			if(html == 1) {
				alert("申请成功,请等待管理员审核");
				window.close();
			} else {
				alert("申请失败"+html);
			}
		}	
	});
}
