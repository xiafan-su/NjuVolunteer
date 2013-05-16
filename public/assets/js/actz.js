
//  zt_elem_main_content = "#main_content";
//  zt_elem_main_content2 = "#main_content2";


var getNewPitureURL = function( source, newFileName ){
	return source.substring( 0, source.lastIndexOf( "/" )+1 )+newFileName;
}

//记录当前操作（记录所属）的活动id
var current_activity_id = -1;
var current_document_id = -1;

var az_func_loaded_doc_edit = function(){};


//活动报名情况：通过，退出，选择全部
var az_funz_apply_audit_ok = function(){};
var az_funz_apply_audit_fail = function(){};
var az_funz_apply_select_all = function(){};
var az_elem_apply_audit_ok = "#btn_audit_ok";
var az_elem_apply_audit_fail = "#btn_audit_fail";
var za_elem_apply_select_all = "#check_all_act_people";
//活动记录：提交、删除、全选、移除参与者
var az_func_doc_submit_doc = function(){};
var az_func_doc_delete_doc = function(){};
var az_funz_doc_select_all = function(){};
var az_funcz_doc_import_part = function(){};
var az_funcz_doc_import_ok = function(){};//导入对话框中的“确定”按钮的处理函数
var az_funcz_doc_remove_part = function(){};


//以下4个函数 是针对 活动列表的
zt_func_doc_index = function(){
	switch_main_content( "->" );
	//alert( ""+$(this).attr("actid")+","+$(this).attr("docid") );
	current_activity_id = $(this).attr("actid");
	current_document_id = $(this).attr("docid");
	$.ajax({
		type:"POST",
		url:"./include/rec_edit.php",
		data:{activityId: current_activity_id, documentId: current_document_id },
		success:function(html){ az_func_loaded_doc_edit(html); }
	});
}
zt_func_doc_add = function(){
	switch_main_content( "->" );
	current_activity_id = $(this).attr("actid");
	current_document_id = -1;
	$.ajax({
		type:"POST",
		url:"./include/rec_edit.php",
		data:{activityId: current_activity_id, documentId: current_document_id },
		success:function(html){ az_func_loaded_doc_edit(html); }
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

//加载完“记录编辑”(包括添加)之后要做的事
az_func_loaded_doc_edit = function(html){
	$(zt_elem_main_content2).html(html);
	$(zt_elem_go_back_home).bind("click", function(){ switch_main_content( "<-" ); });
	$("#submit_act_doc").bind( "click", az_func_doc_submit_doc);//记录编辑的“提交”按钮
	$("#delete_act_doc").bind( "click", az_func_doc_delete_doc);//"删除"按钮
	$("#check_all_part_people").bind( "click", az_funz_doc_select_all);//全选
	$("#doc_op_import").bind( "click", az_funcz_doc_import_part);//"移除"按钮
	$("#doc_op_remove").bind( "click", az_funcz_doc_remove_part);//"移除"按钮
}

//点击活动档案的“提交”按钮的处理函数
az_func_doc_submit_doc = function(){
	//alert( current_document_id );
	var doc_edit_leader = $( "#doc_edit_leader" ).val();
	var doc_edit_tel = $( "#doc_edit_tel" ).val();
	var doc_edit_time = $( "#doc_edit_time" ).val();
	var doc_edit_date_start = $( "#doc_edit_date_start" ).val();
	var doc_edit_profile = $( "#doc_edit_profile" ).val();
	var doc_edit_summary = $( "#doc_edit_summary" ).val();
	$.ajax({
		type:"POST",
		url:"./handle/rec.php",
		data:{
			type:"add", 
			activityId: current_activity_id, documentId: current_document_id,
			leader: doc_edit_leader, profile: doc_edit_profile, 
			summary: doc_edit_summary, tel: doc_edit_tel,
			volTime: doc_edit_time
		},
		success:function(html){
			if( html == 0 ){
				alert( "提交成功！" );
			} else {
				alert( html );
			}
		}
	});
}
//点击活动档案的“删除”按钮的处理函数
az_func_doc_delete_doc = function(){
	$.ajax({
		type:"POST",
		url:"./handle/rec.php",
		data:{type:"delete", documentId: $(this).attr("docid") },
		success:function(html){
			alert( html );
		}
	});
}
//参与人员的“导入”
az_funcz_doc_import_part = function(){
	var list = az_func_getIdList( "doc_checkbox_head_", "all" );
	//alert( list );
	$.ajax({
		type:"POST",
		url:"./include/actz_apply.php",//从“报名”页面导入
		data:{type:"choose", activityId: $(this).attr("actid"), idList: list, documentId: $(this).attr("docid") },
		success:function(html){
			tipsWindown("报名信息","text:"+html,"900","427","true","","true","");
			$( "#btn_import_ok" ).bind( "click", az_funcz_doc_import_ok );//点击“导入”对话框中的“确定”按钮
			$( za_elem_apply_select_all ).bind( "change",  az_funz_apply_select_all );//"选择全部"
		}
	});
}
//参与人员的“移除”
az_funcz_doc_remove_part = function(){
	var list = az_func_getIdList( "doc_checkbox_head_" );
	//alert( list );
	$.ajax({
		type:"POST",
		url:"./handle/rec.php",
		data:{type:"remove", documentId: $(this).attr("docid"), idList: list },
		success:function(html){
			if( html == 0 ){
				//alert( "移除成功！" );
				var all_checkbox = $( "[type='checkbox']" );
				for( var i = 0;  i < all_checkbox.length; i ++ ){
					if( $(all_checkbox[i]).prop("disabled") ){} else {
						if( $(all_checkbox[i]).attr("id").search("doc_checkbox_head_") > -1 
								&&  $(all_checkbox[i]).prop("checked") ) {
							$(all_checkbox[i]).prop("disabled", true);
							$(all_checkbox[i]).prop("checked", false);
							var t = $( "#part_people_table_tr_"+$(all_checkbox[i]).attr("noid" ) );//找到对应的"状态"单元格
							if( t != null ) { $(t).remove(); }//隐藏
						}
					}
				}
				//$("#doc_edit_part_table")
				//alert( $("#doc_edit_part_table").find('tr').length );
				if( $("#doc_edit_part_table").find('tr').length == 1 ){//说明只有表头了
					$("#doc_edit_part_table").append(  '<tr id="doc_edit_part_table_tr_tip"><td colspan="9">还没有人参加这个活动哦！</td></tr>' );
				}
			} else {//移除失败
				alert( html );
			}
		}
	});
}
az_funcz_doc_import_ok = function(){
	//alert( "test -ok" );
	$.ajax({
		type: "POST",
		url: "./handle/rec.php",
		data:{ type:"import", idList: az_func_getIdList(  "act_people_table_checkbox_" ), documentId: $(this).attr( "docid" ) },
		success:function(html){//0-成功，其他-失败
			if( html == 0 ){
				
			} else {
				alert( html );
			}
			$("#doc_edit_part_table_tr_tip").remove();//移除“还没有人参加这个活动哦”提示
			var tr = '<tr id="part_people_table_tr_{id}">'+
				'<td><input type="checkbox" title="" id="doc_checkbox_head_{id}" noid="{id}" /></td>'+
				'<td>{id}(来自JS)</td>'+
				'<td>{name}(来自JS)</td>'+
				'<td>{faculty}(来自JS)</td>'+
				'<td>0.000(来自JS)</td>'+
				'<td>优秀(来自JS)</td>'+
				'<td><input type="checkbox"  id="doc_checkbox_leader_{id}"  title="" /></td>'+
				'<td><input type="checkbox"   id="doc_checkbox_excellent_{id}"   title="" /></td>'+
				'<td><textarea col="5" id="doc_comment_{id}"></textarea></td>'+
				'</tr>';
			var all_checkbox = $( "[type='checkbox']" );
			for( var i = 0;  i < all_checkbox.length; i ++ ){
				if( $(all_checkbox[i]).prop("disabled") ){} else {
					if( $(all_checkbox[i]).attr("id").search("act_people_table_checkbox_") > -1 
							&&  $(all_checkbox[i]).prop("checked") ) {
						var uid = $(all_checkbox[i]).attr("noid" );
						var uname = $(all_checkbox[i]).attr("un" );
						var ufaculty = $(all_checkbox[i]).attr("uf" );
						$("#doc_edit_part_table").append( tr.replace( /{id}/g, uid ).replace( /{name}/g, uname ).replace( /{faculty}/g, ufaculty ) );
					}
				}
			}
			$( "#windown-close" ).trigger("click");//暂时放这里
		}
	});
}


//暂时不考虑，在系统处理时，用户继续点击复选框的情况
//获取选中的复选框的id列表
var az_func_getIdList = function( preffix, match ){
	var apply_vol_string = "";
	var all_checkbox = $( "[type='checkbox']" );
	for( var i = 0;  i < all_checkbox.length; i ++ ){
		if( match == "all" ){
			if( $(all_checkbox[i]).attr("id").search( preffix ) > -1  ) {
				apply_vol_string += $(all_checkbox[i]).attr("noid" ) +" ";
			}
		} else {
			if( $(all_checkbox[i]).prop("disabled") ){} else {
				if( $(all_checkbox[i]).attr("id").search( preffix ) > -1 
					&&  $(all_checkbox[i]).prop("checked") ) {
					apply_vol_string += $(all_checkbox[i]).attr("noid" ) +" ";
				}
			}
		}
	}
	return apply_vol_string;
}
//点击活动报名情况的“审核通过”按钮的处理函数
az_funz_apply_audit_ok = function(){
	var actid = $(this).attr( "actid" );
	$.ajax({
		type: "POST",
		url: "./handle/actz.php",
		data:{ type:"actApply", idList: az_func_getIdList( "act_people_table_checkbox_" ), target:1, reason: " 暂时没有", activityId: $(this).attr( "actid" ) },
		success:function(html){//0-成功，其他-失败
			//alert( html );
			if( html == 0 ){//成功
				//alert( "修改审核状态成功！" );
				var all_checkbox = $( "[type='checkbox']" );
				for( var i = 0;  i < all_checkbox.length; i ++ ){
					if( $(all_checkbox[i]).prop("disabled") ){} else {
						if( $(all_checkbox[i]).attr("id").search("act_people_table_checkbox_") > -1 
								&&  $(all_checkbox[i]).prop("checked") ) {
							$(all_checkbox[i]).prop("disabled", true);
							$(all_checkbox[i]).prop("checked", false);
							var t = $( "#act_people_table_col_state_"+$(all_checkbox[i]).attr("noid" ) );//找到对应的"状态"单元格
							if( t != null ) t.text( "过(来自JS)" );
						}
					}
				}
			} else {//失败，弹框
				alert( html );
			}
		}
	});
}
az_funz_apply_audit_fail= function(){
	var actid = $(this).attr( "actid" );
	$.ajax({
		type: "POST",
		url: "./handle/actz.php",
		data:{ type:"actApply", idList: az_func_getIdList( "act_people_table_checkbox_" ), 
			target:0, reason: " 暂时没有", activityId: $(this).attr( "actid" ) },
		success:function(html){//0-成功，其他-失败
			if( html == 0 ){//成功
				//alert( "修改审核状态成功！" );
				var all_checkbox = $( "[type='checkbox']" );
				for( var i = 0;  i < all_checkbox.length; i ++ ){
					if( $(all_checkbox[i]).prop("disabled") ){} else {
						if( $(all_checkbox[i]).attr("id").search("act_people_table_checkbox_") > -1 
								&&  $(all_checkbox[i]).prop("checked") ) {
							$(all_checkbox[i]).prop("disabled", true);
							$(all_checkbox[i]).prop("checked", false);
							var t = $( "#act_people_table_tr_"+$(all_checkbox[i]).attr("noid" ) );//找到对应的"状态"单元格
							if( t != null ) { t.css( "display", "none" ); }//隐藏
						}
					}
				}
			} else {//失败，弹框
				alert( html );
			}
		}
	});
}
//活动报名情况的"全选"复选框
az_funz_apply_select_all = function(){
	var checked = $("#check_all_act_people").prop( "checked" );
	var all_checkbox = $( "[type='checkbox']" );
	//alert( all_checkbox.length );//*
	for( var i = 0;  i < all_checkbox.length; i ++ ){
		if( $(all_checkbox[i]).attr("id") == "check_all_act_people" ) continue;
		
		if( $(all_checkbox[i]).prop("disabled") ) { } else {//如果不是“不可选的”
			$(all_checkbox[i]).prop("checked", checked);
		}
	}//*/
}
az_funz_doc_select_all = function(){
	var checked = $("#check_all_part_people").prop( "checked" );
	var all_checkbox = $( "[type='checkbox']" );
	//alert( all_checkbox.length );//*
	for( var i = 0;  i < all_checkbox.length; i ++ ){
		if( $(all_checkbox[i]).attr("id") == "check_all_part_people" ) continue;
		if( $(all_checkbox[i]).attr("id").search( "doc_checkbox_head_" ) == -1 ) continue;
		
		if( $(all_checkbox[i]).prop("disabled") ) { } else {//如果不是“不可选的”
			$(all_checkbox[i]).prop("checked", checked);
		}
	}//*/
}