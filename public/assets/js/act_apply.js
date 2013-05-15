

var editor;
KindEditor.ready(function(K) {
	editor = K.create('textarea[name="content"]', {
		resizeType : 1,
		allowPreviewEmoticons : false,
		allowImageUpload : false,
		items : [
			'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
			'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
			'insertunorderedlist', '|', 'emoticons', 'image', 'link','unlink','image','baidumap','fullscreen']
	});
});
var cur_state;
$(document).ready(function(){
	//alert("ready");
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
