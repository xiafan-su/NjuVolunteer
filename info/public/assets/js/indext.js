// JavaScript Document
var act=1;
$(document).ready(function(){
	while(act<9){
		$('#scroll-panel').append("恭喜"+$('#name').text()+"成功举办深夜写代码"+act+"。<br />");
		act++;
	}
	//alert($('#name').text());
	scrollit();
	
	$('#team_comment').click(function(){
		$('#table_activity').hide();
		$('#table_comment').show();
	});
	
	$('#team_activity').click(function(){
		$('#table_comment').hide();
		$('#table_activity').show();
	});
	$('#applyit').click(function(){
		document.getElementById('loading-bar').style.display='block';
		//alert(team_id);
		var team_id=$('#team_id').text();
		//alert(team_id);
		$.ajax({
			type:'POST',
			data:{team_id:team_id},
			url:"./handle/apply_team.php",
			success:function(html){
				document.getElementById('loading-bar').style.display='none';
				//alert(html);
				if(html == -1)
				{
					alert("请先登录");
				}else if (html == -2)
				{
					alert("志愿者才能加入团队");
				}else
				if (html==-3)
					alert("您已经申请了一个非院系志愿组织");
				else
				if(html == 2){
					//alert("取消关注成功");
					$('#applyit').html("申请加入");	
				}
				else if(html == 1){
					//alert("关注成功");
					$('#applyit').html("退出组织");
				}
				else if(html == 0){
					alert("貌似有什么出错了，联系超管吧>_<");	
				}
			}			
		});
		
	});
	$('#followit').click(function(){
		//alert($('#team_id').text());
		document.getElementById('loading-bar').style.display='block';
		$.ajax({
			type:'POST',
			data:{team_id:$('#team_id').text()},
			url:"./handle/follow_team.php",
			success:function(html){
				document.getElementById('loading-bar').style.display='none';
				//alert(html);
				if(html == -1)
				{
					alert("请先登录");
				}else if (html == -2)
				{
					alert("志愿者才能关注团队");
				}
				if(html == 2){
					//alert("取消关注成功");
					$('#followit').html("关注");	
				}
				else if(html == 1){
					//alert("关注成功");
					$('#followit').html("取消关注");
				}
				else if(html == 0){
					alert("貌似有什么出错了，联系超管吧>_<");	
				}
			}
		});
	});
});

function scrollit(){
	$('#scroll-panel').animate({top:'200px'},1);
	$('#scroll-panel').animate({top:'-200px'},10000,'linear');
	setTimeout("scrollit()",10000);
}