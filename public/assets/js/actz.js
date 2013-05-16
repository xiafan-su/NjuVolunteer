
//  zt_elem_main_content = "#main_content";
//  zt_elem_main_content2 = "#main_content2";


var getNewPitureURL = function( source, newFileName ){
	return source.substring( 0, source.lastIndexOf( "/" )+1 )+newFileName;
}

//记录当前操作（记录所属）的活动id
var current_document_id;

var az_func_register_submit_doc = function(){};
var az_func_register_delete_doc = function(){};

var az_funz_apply_audit_ok = function(){};
var az_funz_apply_audit_fail = function(){};
var az_funz_apply_select_all = function(){};
//活动报名情况
var az_elem_apply_audit_ok = "#btn_audit_ok";
var az_elem_apply_audit_fail = "#btn_audit_fail";
var za_elem_apply_select_all = "#check_all_act_people";


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
	current_document_id = $(this).attr("actid");
	$.ajax({
		type:"POST",
		url:"./include/rec_edit.php",
		data:{activityId: current_document_id },
		success:function(html){
			$(zt_elem_main_content2).html(html);
			$(zt_elem_go_back_home).bind("click", function(){
				switch_main_content( "<-" );
			});
			//记录编辑的“提交”按钮
			$("#submit_act_doc").bind( "click", az_func_register_submit_doc);
			$("#delete_act_doc").bind( "click", az_func_register_delete_doc);
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
			$(zt_elem_go_back_home).bind("click", function(){ switch_main_content( "<-" ); });
			$( az_elem_apply_audit_ok ).bind( "click",  az_funz_apply_audit_ok );//"审核通过"
			$( az_elem_apply_audit_fail ).bind( "click", az_funz_apply_audit_fail );//"审核失败"
			$( za_elem_apply_select_all ).bind( "change",  az_funz_apply_select_all );//"选择全部"
			$(".apply_id_col").bind("click", function(){//查看个人信息----弹框
				var id = $(this).text();
				$.ajax({
					type:"GET",
					url:"./include/popup_infov.php",
					data:{userId:id},
					success:function(html){
						tipsWindown("学生信息","text:"+html,"900","427","true","","true","");
					}
				});
			});
		}
	});
}
zt_func_doc_fold = function( ){
	var old = this.src.substring( this.src.lastIndexOf("/")+1, this.src.length );//获取图片的src
	if( old != "navigate_minus.png"){//判断是否是“减号”，如果不是，则展开
		this.src = getNewPitureURL( this.src, "navigate_minus.png" );
		$( "#doc_list_"+$(this).attr("actid") ).css("display", "");//
	} else {
		this.src = getNewPitureURL( this.src, "navigate_plus.png" );
		$( "#doc_list_"+$(this).attr("actid") ).css("display", "none");//
	}
}

//点击活动档案的“提交”按钮的处理函数
az_func_register_submit_doc = function(){
	//alert( current_document_id );
	$.ajax({
		type:"POST",
		url:"./handle/rec.php",
		data:{type:"add", activityId: current_document_id},
		success:function(html){
			alert( html );
		}
	});
}
//点击活动档案的“删除”按钮的处理函数
az_func_register_delete_doc = function(){
	$.ajax({
		type:"POST",
		url:"./handle/rec.php",
		data:{type:"delete", documentId: $(this).attr("docid")},
		success:function(html){
			alert( html );
		}
	});
}


//点击活动报名情况的“审核通过”按钮的处理函数
az_funz_apply_audit_ok = function(){
	alert( "ok2" );
}
az_funz_apply_audit_fail= function(){
	alert( "fail2" );
}
//活动报名情况的"全选"复选框
az_funz_apply_select_all = function(){
	var checked = $("#check_all_act_people").prop( "checked" );
	var all_checkbox = $( "[type='checkbox']" );
	//alert( all_checkbox.length );//*
	for( var i = 0;  i < all_checkbox.length; i ++ ){
		if( $(all_checkbox[i]).attr("id") == "check_all_act_people" ) continue;
		
		if( $(all_checkbox[i]).prop("disabled") == null || 
			$(all_checkbox[i]).prop("disabled") == "false" ) {
			$(all_checkbox[i]).prop("checked", checked);
		} else {
			alert( $(all_checkbox[i]).prop("disabled") );
		}
	}//*/
}