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

function audited(temp){
	$.ajax({
		type:"POST",
		url:"./handle/admin_audit.php",
		data:{act_id:temp},
		success:function(html){
			if(html=='1'){
				alert("审核活动成功,活动编号:"+temp);
				$('#activity_'+temp).slideUp();
			}
			else
				alert("审核活动失败");
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


