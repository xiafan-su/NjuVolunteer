// JavaScript Document

$("#examine_act").click(function(){
	$("#main_title").text("审核活动");
	$.ajax({
	type:"POST",
	url:"./handle/super_admin_fetch_actlist.php",
	data:{},
	success:function(html){
		$("#main_content").html(html);
	}	
});
});

$("#finished_act").click(function(){
	$("#main_title").text("完成的活动");
	$.ajax({
	type:"POST",
	url:"./handle/super_admin_fetch_actlist_done.php",
	data:{},
	success:function(html){
		$("#main_content").html(html);
	}	
});
});




$("#ingoing_act").click(function(){
	$("#main_title").text("进行中的活动");
	$.ajax({
	type:"POST",
	url:"./handle/super_admin_fetch_actlist_going.php",
	data:{},
	success:function(html){
		$("#main_content").html(html);
	}	
});
});

function editing(temp1){
	window.open("../public/act_edit.php?activityId="+temp1,"_blank");
	/*
	$.ajax({
		type:"GET"
		url:"../public/act_edit.php",
		data:{activityId:temp1},
		success:function(html){
		}	
	});	*/
}

function ending(temp1,temp2,temp3){


	
	$.ajax({
		type:"POST",
		url:"./handle/admin_end.php",
		data:{act_id:temp1,team_id:temp2,aname:temp3},
		success:function(html){
			if(html[html.length-1]=='1'){
				alert("结束该活动成功,活动编号:"+temp1);
				$('#activity_'+temp).slideUp();
			}
			else{
				alert("结束活动失败,活动编号:"+temp1);
			}
		}	
	});	
}





function audited(temp1,temp2,temp3){


	
	$.ajax({
		type:"POST",
		url:"./handle/admin_audit.php",
		data:{act_id:temp1,team_id:temp2,aname:temp3},
		success:function(html){
			if(html[html.length-1]=='1'){
				alert("审核活动成功,活动编号:"+temp1);
				$('#activity_'+temp).slideUp();
			}
			else
				alert("审核活动失败");
		}	
	});	
}

function refused(temp1,temp2,temp3){
	$.ajax({
		type:"POST",
		url:"./handle/admin_audit_refused.php",
		data:{act_id:temp1,team_id:temp2,aname:temp3},
		success:function(html){
			//alert(html);
			if(html[html.length-1]=='1'){
				alert("拒绝该活动，退回进一步编辑,活动编号:"+temp1);
				$('#activity_'+temp1).slideUp();
			}
			else
				alert("拒绝活动失败");
		}	
	});	
}

$("#view_act_info").click(function(){
	$("#main_title").text("查看活动统计");
	$.ajax({
	type:"POST",
	url:"./handle/super_admin_fetch_actinfo.php",
	data:{},
	success:function(html){
		$("#main_content").html(html);
	}	
});
});



$("#send_notice").click(function(){
	$("#main_title").text("发通知");
	$.ajax({
	type:"POST",
	url:"./include/note_edit_admin.php",
	data:{},
	success:function(html){
		$("#main_content").html(html);
	}	
});
});


$("#received_notice").click(function(){
	$("#main_title").text("收到的通知，待续");
	$.ajax({
	type:"POST",
	//url:"./include/note_edit_admin.php",
	data:{},
	success:function(html){
		$("#main_content").html(html);
	}	
});
});




$("#add_new_team").click(function(){
	$("#main_title").text("增加新团队");
	$.ajax({
	type:"POST",
	url:"./handle/super_admin_add_team.php",
	data:{},
	success:function(html){
		$("#main_content").html(html);
	}	
});	
});


$("#change_team_info").click(function(){
	$("#main_title").text("修改团队密码");
	$.ajax({
	type:"POST",
	url:"./handle/super_admin_change_team_pwd.php",
	data:{},
	success:function(html){
		$("#main_content").html(html);
	}	
});		
	
});


$("#add_vol_time").click(function(){
	$("#main_title").text("增加服务时间");
	$.ajax({
	type:"POST",
	url:"./handle/super_admin_add_vol_time.php",
	data:{},
	success:function(html){
		$("#main_content").html(html);
	}	
});		
	
});


