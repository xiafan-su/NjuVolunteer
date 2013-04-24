$("#apply_activity").click(function(){
		//$("#apply").troggle("click");
		window.open($("#apply").attr("href"), "_blank");
	});

var state_show_detail = 1;
$("#start_activity").click(function(){
	$("#main_title").text("发起的活动");

	$("#main_content2").animate({width:0},"slow");
	$("#main_content2").hide(1000);
	$("#main_content").animate({width:638},"slow");
	$("#main_content").show(1000);

	$.ajax({
			type:"POST",
			url:"handle/show_activity.php",
			data:{user_id:1},
			success:function(html){
				$("#main_content").html(html);
				$(".zone_rec_list").css("display", "none");
				$(".fold_rec").bind("click", function(){
					if(this.innerText != "╦"){
						this.innerText = "╦";$(this).next().next().css("display", "");//alert("现在应该展开！");
					} else{
						this.innerText = "╬";$(this).next().next().css("display", "none");//alert("现在应该收起！");
					}
				});

				$(".rec_index").bind("click",function(){
					//alert( $("#main_content").css("width") );
					$("#main_content").animate({width:0},"slow");
					$("#main_content").hide(1000);
					$("#main_content2").animate({width:638},"slow");
					$("#main_content2").show(1000);
					$.ajax({
						type:"POST",
						url:"handle/zone_rec_dtl.php",
						success:function(html){
							$("#main_content2").html(html);
							$("#go_back_home").bind("click", function(){
								$("#main_content2").animate({width:0},"slow");
								$("#main_content2").hide(1000);
								$("#main_content").animate({width:638},"slow");
								$("#main_content").show(1000);
							});
							$("#fold_volunteer").bind("click", function(){
								if(this.innerText != "╦"){
									this.innerText = "╦";
									$("#act_people_div").css("display", "block");
								} else {
									this.innerText = "╬";
									$("#act_people_div").css("display", "none");
								}
							});
						}
					});
				});
				$(".link_add_rec").bind("click",function(){
					//alert("添加活动记录");
					$("#main_content").animate({width:0},"slow");
					$("#main_content").hide(1000);
					$("#main_content2").animate({width:638},"slow");
					$("#main_content2").show(1000);
					$.ajax({
						type:"POST",
						url:"handle/zone_rec_edit.php",
						success:function(html){
							$("#main_content2").html(html);
							$("#go_back_home").bind("click", function(){
								$("#main_content2").animate({width:0},"slow");
								$("#main_content2").hide(1000);
								$("#main_content").animate({width:638},"slow");
								$("#main_content").show(1000);
							});

						}
					});
				});
				
				$(".go_to_act_people").bind("click",function(){
					$("#main_content").animate({width:0},"slow");
					$("#main_content").hide(1000);
					$("#main_content2").animate({width:638},"slow");
					$("#main_content2").show(1000);
					$.ajax({
						type:"POST",
						url:"./activity/handle/act_people.php",
						data:{activity_id:$(this).attr("actid")},
						success:function(html){
							$("#main_content2").html(html);

							
							//给所有的学号添加事件
							$(".act_user_id_col").bind("click", function(){
								var id = $(this).text();
								$.ajax({
									type:"GET",
									url:"./activity/handle/exp_people.php",
									data:{user_id:id},
									success:function(html){
										tipsWindown("学生信息","text:"+html,"900","427","true","","true","");
									}
								});
							});


						}
					});
				});
			}
		});
});

$("#finished_activity").click(function(){
	$("#main_title").text("完成的活动");
	$("#main_content2").animate({width:0},"slow");
	$("#main_content2").hide(1000);
	$("#main_content").animate({width:638},"slow");
	$("#main_content").show(1000);

	$.ajax({
			type:"POST",
			url:"handle/show_activity.php",
			data:{user_id:2},
			success:function(html){
				$("#main_content").html(html);
				$(".zone_rec_list").css("display", "none");
				$(".fold_rec").bind("click", function(){
					if(this.innerText != "╦"){
						this.innerText = "╦";$(this).next().next().css("display", "");//alert("现在应该展开！");
					} else{
						this.innerText = "╬";$(this).next().next().css("display", "none");//alert("现在应该收起！");
					}
				});
				$(".rec_index").bind("click",function(){
					//alert( $("#main_content").css("width") );
					$("#main_content").animate({width:0},"slow");
					$("#main_content").hide(1000);
					$("#main_content2").animate({width:638},"slow");
					$("#main_content2").show(1000);
					$.ajax({
						type:"POST",
						url:"handle/zone_rec_dtl2.php",
						success:function(html){
							$("#main_content2").html(html);
							$("#go_back_home").bind("click", function(){
								$("#main_content2").animate({width:0},"slow");
								$("#main_content2").hide(1000);
								$("#main_content").animate({width:638},"slow");
								$("#main_content").show(1000);
							});
							$("#fold_volunteer").bind("click", function(){
								if(this.innerText != "╦"){
									this.innerText = "╦";
									$("#act_people_div").css("display", "block");
								} else {
									this.innerText = "╬";
									$("#act_people_div").css("display", "none");
								}
							});
						}
					});
				});
				
				$(".go_to_act_people").bind("click",function(){
					$("#main_content").animate({width:0},"slow");
					$("#main_content").hide(1000);
					$("#main_content2").animate({width:638},"slow");
					$("#main_content2").show(1000);
					$.ajax({
						type:"POST",
						url:"./activity/handle/act_people.php",
						data:{activity_id:$(this).attr("actid")},
						success:function(html){
							$("#main_content2").html(html);

							//给所有的学号添加事件
							$(".act_user_id_col").bind("click", function(){
								var id = $(this).text();
								$.ajax({
									type:"GET",
									url:"./activity/handle/exp_people.php",
									data:{user_id:id},
									success:function(html){
										tipsWindown("学生信息","text:"+html,"900","427","true","","true","");
									}
								});
							});

						}
					});
				});
			}
		});
});

$("#unaudited_people").click(function(){
	$("#main_title").text("待审核的成员");
	$.ajax({
			type:"POST",
			url:"handle/show_activity.php",
			data:{user_id:3},
			success:function(html){
				$("#main_content").html(html);
			}
		});
});

$("#unaudited_activity").click(function(){
	$("#main_title").text("待审核的活动");
	$.ajax({
			type:"POST",
			url:"handle/show_activity.php",
			data:{user_id:4},
			success:function(html){
				$("#main_content").html(html);
			}
		});
});

$("#recv_info").click(function(){
	$("#main_title").text("收到的通知");
	$.ajax({
			type:"POST",
			url:"handle/show_activity.php",
			data:{user_id:5},
			success:function(html){
				$("#main_content").html(html);
			}
		});
});
$("#send_info").click(function(){
	$("#main_title").text("发送的通知");
	$.ajax({
			type:"POST",
			url:"handle/show_activity.php",
			data:{user_id:5},
			success:function(html){
				$("#main_content").html(html);
			}
		});
});
$("#member").click(function(){
	$("#main_title").text("成员");


	$("#main_content2").animate({width:0},"slow");
	$("#main_content2").hide(1000);
	$("#main_content").animate({width:638},"slow");
	$("#main_content").show(1000);


	$.ajax({
			type:"POST",
			url:"handle/show_activity.php",
			data:{user_id:7},
			success:function(html){
				$("#main_content").html(html);
			}
		});
});
$("#blacklist").click(function(){
	$("#main_title").text("黑名单");
	$.ajax({
			type:"POST",
			url:"handle/show_activity.php",
			data:{user_id:5},
			success:function(html){
				$("#main_content").html(html);
			}
		});
});
