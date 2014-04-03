function qc_part()
{
	//alert("!");
	var act_id=document.getElementById("act_id").innerHTML;
	var user_name=$('#user_name').val();
	var user_id=$("#user_id").val();
	var phone=$('#phone').val();
	var remember_info=1;//是否记住填写的信息
	//alert(act_id);
	//alert(user_name);
	//alert(user_id);
	//alert(phone);
	
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		data:{act_id:act_id,user_name:user_name,user_id:user_id,phone:phone,remember_info:remember_info},
		url:"./handle/quick_participate.php",
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			//alert(html);
			switch(html)
			{
				case "-1":
					alert("未知错误，请联系管理员");
					break;
				case "0":
					alert("姓名/学号错误或您尚未登录过本系统，快捷报名仅提供给系统内的用户使用");
					break;
				case "1":
					alert("报名成功！活动负责人会通知您后续事宜。");
					break;
				case "2":
					alert("报名成功！但发现您尚未完善个人资料，建议您登录系统进入个人空间修改资料，方便日后为您提供服务记录！");
					break;
				case "3":
					alert("您已经报名过该活动，无须再次报名！");
					break;
				case "4":
					alert("您不满足活动对英语成绩的要求(英语成绩可在登录后个人资料中修改)");
					bresk;
				case "5":
					alert("您不满足该活动的院系限制条件");
					bresk;
				case "6":
					alert("该活动有院系限制，但您尚未填写您的个人资料（即尚未知道您属于哪个院系），登录系统进入个人空间可以填写这部分信息");
					bresk;
			}
		}
	});
}