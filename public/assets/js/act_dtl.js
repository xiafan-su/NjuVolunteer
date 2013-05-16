var editor;
KindEditor.ready(function(K) {
	
	editor = K.create('textarea[name="com_content"]', {
		resizeType : 1,
		allowPreviewEmoticons : false,
        allowImageUpload : false,
        items : [
        	'emoticons', 'image']
		});
});

$(document).ready(function(){
//document.getElementById("drop_cover").style.display="none";
//$('#drop_cover').animate({opacity:'0'},10);
		jQuery(function($){
			$('.fileUpload').fileUploader({
				autoUpload: false,
				limit: false,
				buttonUpload: '#px-submit',
				buttonClear: '#px-clear',
				selectFileLabel: 'Select files',
				allowedExtension: 'jpg|jpeg|gif|png'
				});
		});
	
	 $.ajax({
			type:"POST",
			url:"./handle/participate_state.php",
			data:{act_id:$('#act_id').val()},
			success:function(html){
				//alert(html);
				//alert("success");
				if (html == '1')
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
		//alert($('#act_id').val());
         $.ajax({
			type:"POST",
			url:"./handle/participate_act.php",
			data:{act_id:$('#act_id').val()},
			success:function(html){
				//alert(html);
				//alert("success");
				if (html == 1)
				{
				 	alert("报名成功");
					$('#take_part_in').text("退出活动");
				}
				else if (html == 2)
				{
					alert("退出成功");
					$('#take_part_in').text("参加活动");
				}
				 else
				 alert("失败"+html);
				
			}
		});
    });
	
	$('#upload_pic').click(function(){
		$('#cover-m').show();
		$('#drop_cover').show();
		$('#cover-m').animate({opacity:'1'},1000);
		$('#drop_cover').animate({opacity:'1'},1000);
		document.getElementById("drop_cover").style.display="block";
		//alert("。。。。。。。。。");
	});
	
	$('#cover-m').click(function(){
		$('#cover-m').animate({opacity:'0'},1000);
		$('#drop_cover').animate({opacity:'0'},1000);
		setTimeout("$('#cover-m').hide()",1000);
		setTimeout("$('#drop_cover').hide()",1000);	
	});

	$('#update_text').bind("click", function(){
		update_people();
	});
	
	var response_id = -1;
	$('#submit_comment').click(function() {
		content = editor.html();
		//alert(editor.html());
		$.ajax({
			type:"POST",
			url:"./handle/comment_apply.php",
			data:{content:editor.html(),res_id:response_id,act_id:$('#act_id').attr("value")},
			success:function(html){
				window.location.reload();
				alert(html);
			}
		});
		
	});
	
	$('.reply').click(function(){
		editor.text("Reply " + $(this).prev().text() + ":");
		response_id =  $(this).prev().prev().text();
		//alert($(this).prev().prev().text());
	});
});




