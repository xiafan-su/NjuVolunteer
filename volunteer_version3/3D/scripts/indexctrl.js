$(document).ready(function(){
	$('#indexMsgSubmit').click(function(){
		$.ajax({ 
			url: 'scripts/cmtmsg.php', 
			data: $('#indexmsg').serialize(), 
			dataType: 'json',
			type: "post", 
			cache : false, 
			success: function(data) 
			{		
				if(data.res==6){
					alert("请勿输入非法词");	
				}else if(data.res==1){
					alert("请填写祝福");
				}else if(data.res==2){
					alert("请填写姓名");
				}else if(data.res==3){
					alert("请填写邮箱");
				}else if(data.res==4){
					alert("请填写入学年份");
				}else if(data.res==5){
					alert("请填写就学状况");
				}else if(data.res==0){
					confirm("祝福提交成功！");
					window.location.href="index.php";
				}
			}
		});
	});
});

