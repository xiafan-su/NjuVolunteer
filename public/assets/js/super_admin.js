// JavaScript Document
$(document).ready(function(){
	$.ajax({
		type:"POST",
		url:"./handle/super_admin_fetch_actlist.php",
		data:{},
		success:function(html){
			$("#content").html(html);
		}	
	});
});
function showmore(temp){
	$('#act_'+temp).toggle();	
}
function audited(temp){
	$.ajax({
		type:"POST",
		url:"./handle/admin_audit.php",
		data:{act_id:temp},
		success:function(html){
			if(html=='1')
				alert("成功审核该活动");
			else
				alert("审核该活动失败");
		}	
	});	
}