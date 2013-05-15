
var nowloading="<div class=\"loading\"><img src=\"./assets/img/loading/loading.gif\"/></div>";

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
});
$("#my_focused_team").click(function(){
	$("#main_title").text("关注的团队");
});



