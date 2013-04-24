$(document).ready(function(){
	//$("#take_part_in").text("testing");
	 $.ajax({
			type:"POST",
			url:"http://localhost/NjuVolunteer/public/handle/is_participate_activity.php",
			success:function(html){
				//alert(html);
				//alert("success");
				if (html == 1)
				{
					$('#take_part_in').text("退出活动");
				}
				else
				{
					$('#take_part_in').text("参加活动");
					                                          
				}
			}
		});
	
});


$(function(){
	var register_update_text = function(){};
	function update_people(){
		$('#update_text').text("正在刷新……");
		$.ajax({
			type:"POST",
			url:"activity/handle/act_people.php",
			data:"",
			success:function(html){
				$('#update_text').text('刷新');
				$(".act_user_id_col").unbind("click");//释放上一次bind资源
				//$("#act_people_update").unbind("click");
				//$("#check_all_act_people").unbind( "change");
				$("div#part_people_table").html(html);//
				var ex1 = new tableSort('act_people_table',1,2,999,'up','down','hov');//添加排序
				//给所有的学号添加事件
				$(".act_user_id_col").bind("click", function(){
					var id = $(this).text();
					$.ajax({
						type:"GET",
						url:"activity/handle/exp_people.php",
						data:{user_id:id},
						success:function(html){
							tipsWindown("学生信息","text:"+html,"900","427","true","","true","");
							var ex2 = new tableSort('exp_people_table',1,2,999,'up','down','hov');
						}
					});
				});
				$('#check_all_act_people').bind( "change", function(){
					if( this.checked ){ //alert("yes");
						$("input[type='checkbox']").attr("checked", "true");
					} else { //alert("no");
						$("input[type='checkbox']").removeAttr("checked");
					}
				} );
				$('#act_people_update_text').bind("click", function(){ register_update_text(); }  );
			}	
		});
	}
	register_update_text = function (){ update_people(); }

	var update = true;
	$("#scan_people").text( "报名情况" );
	$("#scan_people").click(function(){ 
		//从服务器取数据
		$("#act_detail").slideToggle("slow");
		$("#act_people").slideToggle("slow");
		//$("#act_people").css({ "display":"block" });
		if( update = ! update ){
			$("#scan_people").text( "报名情况" );
			return;
		} else {
			$("#scan_people").text( "返回简介" );
			update_people();
		}
	} );
	
	$("#take_part_in").click(function() {
         $.ajax({
			type:"POST",
			url:"http://localhost/NjuVolunteer/public/handle/participate_activity.php",
			success:function(html){
				//alert(html);
				//alert(html);
				if(html == 1)
				{
				 	alert("报名成功");
					$('#take_part_in').text("退出活动");
				}
				else if (html == 0)
				{
					alert("退出成功");
					$('#take_part_in').text("参加活动");
					
				}
				 else{
				 	alert("失败");
				}
			}
		});

    });


	$('#update_text').bind("click", function(){
		update_people();
	});
	

});





