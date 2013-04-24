
//  zt_elem_main_content = "#main_content";
//  zt_elem_main_content2 = "#main_content2";

zt_func_doc_index = function(){
	switch_main_content( "->" );
	//alert( $(this).attr("docid") );
	$.ajax({
		type:"POST",
		url:"./include/rec_dtl.php",
		data:{documentId:$(this).attr("docid")},
		success:function(html){
			$(zt_elem_main_content2).html(html);
			$(zt_elem_go_back_home).bind("click", function(){
				switch_main_content( "<-" );
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
			$("#opt_import_apply").bind("click", function(){
				$.ajax({
					type:"POST",
					url:"./include/actz_apply.php",
					data:{activityId:$(this).attr("actid")},
					success:function(html){
						tipsWindown("报名信息","text:"+html,"900","427","true","","true","");
					}
				});
			});
		}
	});
}
zt_func_doc_add = function(){
	switch_main_content( "->" );
	$.ajax({
		type:"POST",
		url:"./include/rec_edit.php",
		data:{activityId:$(this).attr("actid")},
		success:function(html){
			$(zt_elem_main_content2).html(html);
			$(zt_elem_go_back_home).bind("click", function(){
				switch_main_content( "<-" );
			});
		}
	});
}
zt_func_doc_apply = function(){
	switch_main_content( "->" );
	$.ajax({
		type:"POST",
		url:"./include/actz_apply.php",
		data:{activityId:$(this).attr("actid")},
		success:function(html){
			$( zt_elem_main_content2 ).html(html);
			$(zt_elem_go_back_home).bind("click", function(){
				switch_main_content( "<-" );
			});
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
}
zt_func_doc_fold = function( ){
	if(this.innerText != "╦"){
		this.innerText = "╦";
		$( "#doc_list_"+$(this).attr("actid") ).css("display", "");//
	} else{
		this.innerText = "╬";
		$( "#doc_list_"+$(this).attr("actid") ).css("display", "none");//
	}
}

