
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
var az_elem_apply_export_csv = "#btn_export_csv";
//活动记录：提交、删除、全选、移除参与者
var az_func_doc_submit_doc = function(){};
var az_func_doc_delete_doc = function(){};
var az_funz_doc_select_all = function(){};
var az_funcz_doc_import_part = function(){};
var az_funcz_doc_import_ok = function(){};//导入对话框中的“确定”按钮的处理函数
var az_funcz_doc_remove_part = function(){};

function htmlEncode(str) {
	 var s = "";
	 if (str.length == 0) return "";
	 s = str.replace(/&/g, "&amp;");
	 s = s.replace(/</g, "&lt;");
	 s = s.replace(/>/g, "&gt;");
	 s = s.replace(/'/g, "&apos;");
	 s = s.replace(/"/g, "&quot;");
	 return s;
};
function popup_volunteer_info(id){
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"GET",
		url:"./include/popup_infov.php",
		data:{userId:id},
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			tipsWindown("学生信息","text:"+html,"900","427","true","","true","");
		}
	});
}

//以下4个函数 是针对 活动列表的
zt_func_doc_index = function(){
	switch_main_content( "->" );
	//alert( ""+$(this).attr("actid")+","+$(this).attr("docid") );
	current_activity_id = $(this).attr("actid");
	current_document_id = $(this).attr("docid");
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./include/rec_edit.php",
		data:{activityId: current_activity_id, documentId: current_document_id },
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			az_func_loaded_doc_edit(html); }
	});
}
zt_func_doc_add = function(){
	switch_main_content( "->" );
	current_activity_id = $(this).attr("actid");
	current_document_id = -1;
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./include/rec_edit.php",
		data:{activityId: current_activity_id, documentId: current_document_id },
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			az_func_loaded_doc_edit(html); }
	});
}
zt_func_doc_apply = function(){
	switch_main_content( "->" );
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./include/actz_apply.php",
		data:{activityId:$(this).attr("actid")},
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			$( zt_elem_main_content2 ).html(html);
			$(zt_elem_go_back_home).bind("click", function(){ switch_main_content( "<-" ); });
			$( az_elem_apply_audit_ok ).bind( "click",  az_funz_apply_audit_ok );//"审核通过"
			$( az_elem_apply_audit_fail ).bind( "click", az_funz_apply_audit_fail );//"审核失败"
			$( za_elem_apply_select_all ).bind( "change",  az_funz_apply_select_all );//"选择全部"
			$( az_elem_apply_export_csv ).bind( "click", zt_func_export_csv );
		/*	$(".apply_id_col").bind("click", function(){//查看个人信息----弹框
				var id = $(this).text();
				popup_volunteer_info(id);
			});//*/
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

zt_func_doc_del = function(){
	if( ! confirm( "此操作不可逆，您确定要删除该活动吗？" ) ) return;
	var actid = $(this).attr("actid");
	$.ajax({
		type:"POST",
		url:"./handle/actz.php",
		data:{activityId:actid, type:"del"},
		success:function(html){
			if( html == 0 ){
				alert( "删除成功！" );
				$("#util_start_activity").trigger( "click" );
			} else {
				alert( html );
			}
		}
	});
}

zt_func_export_csv = function(){
	//alert($(this).attr("actid"));
	window.open( "./handle/actz.php?type=exportcsv&activityId="+$(this).attr("actid") , "_blank" );
	/*$.ajax({
		type:"POST",
		url:"./handle/actz.php",
		data:{type:"exportcsv", activityId: $(this).attr("actid") },
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			alert( html );
		}
	});//*/
}

//加载完“记录编辑”(包括添加)之后要做的事
az_func_loaded_doc_edit = function(html){
	$(zt_elem_main_content2).html(html);
	$(zt_elem_go_back_home).bind("click", function(){ switch_main_content( "<-" ); });
	$("#submit_act_doc").bind( "click", az_func_doc_submit_doc);//记录编辑的“提交”按钮
	$("#delete_act_doc").bind( "click", az_func_doc_delete_doc);//"删除"按钮
	$("#check_all_part_people").bind( "click", az_funz_doc_select_all);//全选
	$("#doc_op_import").bind( "click", az_funcz_doc_import_part);//"导入"按钮
	$("#doc_op_remove").bind( "click", az_funcz_doc_remove_part);//"移除"按钮
}

//点击活动档案的“保存”按钮的处理函数
az_func_doc_submit_doc = function(){
	//alert( current_document_id );
	var doc_edit_leader = $( "#doc_edit_leader" ).val();
	var doc_edit_tel = $( "#doc_edit_tel" ).val();
	var doc_edit_time = $( "#doc_edit_time" ).val();
	var doc_edit_date_start = $( "#doc_edit_date_start" ).val();
	var doc_edit_profile = $( "#doc_edit_profile" ).val();
	var doc_edit_summary = $( "#doc_edit_summary" ).val();
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/rec.php",
		data:{
			type:"add",
			activityId: current_activity_id,
			documentId: current_document_id,
			leader: doc_edit_leader,
			profile: doc_edit_profile,
			summary: doc_edit_summary,
			tel: doc_edit_tel,
			volTime: doc_edit_time,
			start_date: doc_edit_date_start
		},
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			if( html == 0 ){
				//switch_main_content( "<-" );
				alert( "保存成功！" );
				$("#util_start_activity").trigger("click");
			} else {
				alert( html );
			}
		}
	});
}
//点击活动档案的“删除”按钮的处理函数
az_func_doc_delete_doc = function(){
	if( ! confirm( "此操作不可逆，您确定要删除该档案吗？" ) ) return;
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/rec.php",
		data:{type:"delete", documentId: $(this).attr("docid") },
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			if( html == 0 ){//删除成功！
				//switch_main_content( "<-" );
				$("#util_start_activity").trigger("click");
			} else {
				alert( html );
			}
		}
	});
}
//参与人员的“导入”
az_funcz_doc_import_part = function(){
	var list = az_func_getIdList( "doc_checkbox_head_", "all" );
	document.getElementById('loading-bar').style.display='block';
	//alert( list );
	$.ajax({
		type:"POST",
		url:"./include/actz_apply.php",//从“报名”页面导入
		data:{type:"choose", activityId: $(this).attr("actid"), idList: list, documentId: $(this).attr("docid") },
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
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
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/rec.php",
		data:{type:"remove", documentId: $(this).attr("docid"), idList: list },
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
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
				$("#doc_op_remove").attr( "disabled", true );
			} else {//移除失败
				alert( html );
			}
		}
	});
}
//导入成功的处理函数！
az_funcz_doc_import_ok = function(){
	//alert( "test -ok" );
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type: "POST",
		url: "./handle/rec.php",
		data:{ type:"import", idList: az_func_getIdList(  "act_people_table_checkbox_" ), documentId: $(this).attr( "docid" ) },
		success:function(html){//0-成功，其他-失败
		document.getElementById('loading-bar').style.display='none';
			if( html == 0 ){
				$("#doc_edit_part_table_tr_tip").remove();//移除“还没有人参加这个活动哦”提示
				var base_time = $("input#doc_edit_time").val();
				var tr = '<tr uid="{id}" id="part_people_table_tr_{id}">'+
					'<td><input type="checkbox" class="doc_checkbox_head" id="doc_checkbox_head_{id}" noid="{id}" onclick="change_rec_edit_head_checkbox();"/></td>'+
					'<td>'+
						'<span class="clickable" onclick="popup_volunteer_info({id});" noid="{id}" title="点击查看该学生信息" >{id}</span>'+
					'</td>'+
					'<td><span class="clickable" onclick="window.open(\'./indexv.php?user_id={id}\', \'_blank\');" title="查看个人主页">{name}</span></td>'+
					'<td>{faculty}</td>'+
					'<td>'+
						'<span class="doc_time" title="点击修改"  onclick = "change_doc_time_handle(this, 1)"    id="doc_time_{id}" >{time}</span>'+
						'<span class="" style="display: none; white-space:nowrap;" id="doc_time_set_{id}">'+
								'<input type="text" value="{time}" uid="{id}" onblur="change_doc_time_handle(this, 2)" />'+
						'</span> '+
					'</td>'+
					'<td>'+
						'<span class="doc_level" id="doc_level_{id}" title="点击修改"   onclick="change_doc_level_handle(this, 1);"  >{level}</span>'+
						'<span class="" style="display: none; white-space:nowrap;" id="doc_level_set_{id}">'+
							'<select name="doc_level_select" id="doc_level_select_{id}" onblur="change_doc_level_handle(this, 2)">'+
								'<option name="一般" value="一般">一般</option>'+
								'<option  name="良好" value="良好">良好</option>'+
								'<option name="优秀"  value="优秀">优秀</option>'+
							'</select>'+
						'</span>'+
					'</td>'+
					'<td>'+
						'<input   type="checkbox"   onclick="change_doc_honnor_leader_handle(this, 1);"  id="doc_checkbox_leader_{id}"  title="荣获带队奖的志愿者将获得额外的志愿时间" />'+
					'</td>'+
					'<td>'+
						'<input  type="checkbox" onclick="change_doc_honnor_leader_handle(this, 2);"    id="doc_checkbox_excellent_{id}"  title="荣获优秀奖的志愿者将获得额外的志愿时间" />'+
					'</td>'+
					'<td>'+
						'<span id="doc_comment_{id}"    title="点击修改" onclick="change_doc_comment_handle(this, 1)"   > '+
							'无'+
						'</span>'+
						'<span class=""  style="display: none;">'+
							'<textarea id="doc_comment_set_{id}>" name="" rows="3" cols="10"  onblur="change_doc_comment_handle(this, 2)">{comment}</textarea>'+
						'</span>'+
					'</td>'+
				'</tr>';
				/*var tr = '<tr id="part_people_table_tr_{id}">'+
					'<td><input type="checkbox" title="" id="doc_checkbox_head_{id}" noid="{id}" onclick="change_rec_edit_head_checkbox();" /></td>'+
					'<td>{id}(来自JS)</td>'+
					'<td>{name}(来自JS)</td>'+
					'<td>{faculty}(来自JS)</td>'+
					'<td>0.000(来自JS)</td>'+
					'<td>优秀(来自JS)</td>'+
					'<td><input type="checkbox"  id="doc_checkbox_leader_{id}"  title="" /></td>'+
					'<td><input type="checkbox"   id="doc_checkbox_excellent_{id}"   title="" /></td>'+
					'<td><textarea col="5" id="doc_comment_{id}"></textarea></td>'+
					'</tr>';//*/
				var all_checkbox = $( "[type='checkbox']" );
				for( var i = 0;  i < all_checkbox.length; i ++ ){
					if( $(all_checkbox[i]).prop("disabled") ){} else {
						if( $(all_checkbox[i]).attr("id").search("act_people_table_checkbox_") > -1
								&&  $(all_checkbox[i]).prop("checked") ) {
							var uid = $(all_checkbox[i]).attr("noid" );
							var uname = $(all_checkbox[i]).attr("un" );
							var ufaculty = $(all_checkbox[i]).attr("uf" );
							$("#doc_edit_part_table").append(
								tr.replace( /{id}/g, uid ).replace( /{name}/g, uname ).replace( /{faculty}/g, ufaculty ).replace( /{time}/g, base_time ).replace( /{level}/g, "一般" ).replace( /{comment}/g, "" )
							);
						}
					}
				}
				$( "#windown-close" ).trigger("click");//暂时放这里
			} else {
				alert( html );
			}
		}
	});
}


//修改“移除”按钮状态----根据head复选框
function change_rec_edit_head_checkbox(){
	//一个for循环，查看所有的checkbox_head是否存在选中的

	var all_head_checkbox = $('.doc_checkbox_head[type="checkbox"]');
	//	alert( "L="+all_head_checkbox.length );
	for( var i = 0; i < all_head_checkbox.length; i ++ ){
		//alert( i );
		var per_head_checkbox = all_head_checkbox[i];
		//alert( "id="+$(per_head_checkbox).attr("id") );
		if( $(per_head_checkbox).attr("id").search( "doc_checkbox_head_" ) < 0 ) continue;//
		if( $(per_head_checkbox).prop("checked") ){
			$("#doc_op_remove").attr( "disabled", false );//找到打钩的
			$("#doc_op_remove").attr(  "title", "将选择的志愿者移除参与表" );
			return;
		}
	}
	$("#doc_op_remove").attr( "disabled", true );
	$("#doc_op_remove").attr(  "title", "请先勾选要移除的志愿者" );
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
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type: "POST",
		url: "./handle/actz.php",
		data:{ type:"actApply", idList: az_func_getIdList( "act_people_table_checkbox_" ),
			target:1, reason: " 暂时没有", activityId: $(this).attr( "actid" ) },
		success:function(html){//0-成功，其他-失败
			document.getElementById('loading-bar').style.display='none';
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
							if( t != null ) t.text( "通过" );
						}
					}
				}
			} else {//失败，弹框
				alert( html );
			}
		}
	});
}
//报名表下方的“退回”按钮
az_funz_apply_audit_fail= function(){
	var reason = $("#textarea_back_reason").val().trim();
	var actid = $(this).attr( "actid" );
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type: "POST",
		url: "./handle/actz.php",
		data:{ type:"actApply", idList: az_func_getIdList( "act_people_table_checkbox_" ),
			target:0, reason: reason, activityId: $(this).attr( "actid" ) },
		success:function(html){//0-成功，其他-失败
			document.getElementById('loading-bar').style.display='none';
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
//报名表下方的退回理由文本域-
function textarea_back_reason_on_change(elem, check){//check表示是否检查了head_check，即报名表最左边的复选框
	//alert( $(elem).val() );
	if( check == false ) {
		var all_checkbox = $( ".checkbox_head[type='checkbox']:checked" );
		if( all_checkbox.length == 0 ){
			$("#btn_audit_ok").prop( "disabled", true );
			$("#btn_audit_ok").attr( "title", "请先勾选审核通过的志愿者" );
			$("#btn_audit_fail").prop( "disabled", true );
			$("#btn_audit_fail").attr( "title", "请先勾选要退回志愿者并填写退回理由" );
			return;
		} else {
			$("#btn_audit_ok").prop( "disabled", false );
			$("#btn_audit_ok").attr( "title", "将选择的报名人员设置为审核通过" );

			var t = $(elem).val().trim();
			if( t.length == 0 || t.length > 100 ){//字数超过100个字
				$("#btn_audit_fail").prop( "disabled", true );
				$("#btn_audit_fail").attr( "title", "请先勾选要退回志愿者并填写退回理由" );
				return;
			} else {
				$("#btn_audit_fail").prop( "disabled", false );
				$("#btn_audit_fail").attr( "title", "将选择的报名人员设置为审核失败" );
				return;
			}
		}
	} else {
			var t = $(elem).val().trim();
			if( t.length == 0 || t.length > 100 ){//字数超过100个字
				$("#btn_audit_fail").prop( "disabled", true );
				$("#btn_audit_fail").attr( "title", "请先勾选要退回志愿者并填写退回理由" );
				return;
			} else {
				$("#btn_audit_fail").prop( "disabled", false );
				$("#btn_audit_fail").attr( "title", "将选择的报名人员设置为审核失败" );
				return;
			}
			return;
	}
}

//活动报名情况的"全选"复选框
az_funz_apply_select_all = function( check ){//是否检查了文本域
	var in_checked = false;//是否存在勾选的志愿者
	var checked = $("#check_all_act_people").prop( "checked" );
	var all_checkbox = $( "[type='checkbox']" );
	//alert( all_checkbox.length );//*
	for( var i = 0;  i < all_checkbox.length; i ++ ){
		if( $(all_checkbox[i]).attr("id") == "check_all_act_people" ) continue;

		if( $(all_checkbox[i]).prop("disabled") ) { } else {//如果不是“不可选的”
			$(all_checkbox[i]).prop("checked", checked);
		}
		if( $(all_checkbox[i]).prop("checked") ) {
				in_checked = true;
		}
	}//*/
	if( in_checked ){//当存在
		//alert( "in!" );
		$("#btn_audit_ok").prop( "disabled", false );
		$("#btn_audit_ok").attr( "title", "将选择的报名人员设置为审核通过" );
		if( check == true ){//已经核对，并且符合条件（文本域不为空）
			//alert( "check box" );
			$("#btn_audit_fail").prop( "disabled", false );
			$("#btn_audit_fail").attr( "title", "将选择的报名人员设置为审核失败" );
		} else {
			//alert( "~check box" );
			textarea_back_reason_on_change( $("#textarea_back_reason"), true );
		}
	} else {
		$("#btn_audit_ok").prop( "disabled", true );
		$("#btn_audit_ok").attr( "title", "请先勾选审核通过的志愿者" );
		$("#btn_audit_fail").prop( "disabled", true );
		$("#btn_audit_fail").attr( "title", "请先勾选要退回志愿者并填写退回理由" );
	}
}
//报名表 左边复选框
function act_apply_head_check(){
	textarea_back_reason_on_change( $("#textarea_back_reason"), false );
}
//参与表的“全选”
az_funz_doc_select_all = function(){
	var checked = $("#check_all_part_people").prop( "checked" );
	var all_checkbox = $( ".doc_checkbox_head[type='checkbox']" );
	//alert( all_checkbox.length );//*
	for( var i = 0;  i < all_checkbox.length; i ++ ){
		if( $(all_checkbox[i]).attr("id") == "check_all_part_people" ) continue;

		if( $(all_checkbox[i]).attr("id").search( "doc_checkbox_head_" ) == -1 ) continue;

		if( $(all_checkbox[i]).prop("disabled") ) { } else {//如果不是“不可选的”
			$(all_checkbox[i]).prop("checked", checked);
		}
	}//*/
	change_rec_edit_head_checkbox();//设置“移除”按钮
}





//设置参与表的“确定”按钮有效
function set_submit_enable(  ){
	//“保存”
	$("#submit_act_doc").attr( "disabled", true );
	$("#submit_act_doc").attr( "title", "您必须点击“确定”按钮保存参与表后才能保存！" );
	//“提交”
	$("#doc_op_submit").attr( "disabled", true );
	$("#doc_op_submit").attr( "title", "您必须点击“确定”按钮保存参与表后才能提交！" );

	var submit_button = $("#doc_op_modify");
	submit_button.attr( "disabled", false );
	submit_button.attr( "title", "修改后点击此按钮生效" );

}

//以下几个函数处理，参与表的修改
function change_doc_time_handle(elem, no){
	var time = 100;
	if( no == 1 ){
		$(elem).toggle( time );
		$(elem).next().toggle( time );
		$(elem).next().find(":first-child").focus();
	} else {//no == 2
		$(elem).parent().prev().toggle( time );
		$(elem).parent().toggle( time );
		$(elem).parent().prev().text( $(elem).val() );

		var val = $(elem).val();
		var all_selected_box = $(".doc_checkbox_head:checked");
		for( var i = 0; i < all_selected_box.length; i ++ ){
			var uid = $(all_selected_box[i]).attr( "noid" );
			var span = $( "#doc_time_"+uid );
			span.text( val );
			span.next().find(":first-child").val( val );
		}

		set_submit_enable();//确定按钮有效
	}
}
function change_doc_level_handle(elem, no){//评价-一般良好优秀
	//alert( $(elem).attr("id") );
	var time = 100;
	if( no == 1 ){
		$(elem).toggle( time );
		$(elem).next().toggle( time );
		$(elem).next().find(":first-child").focus();
	} else {//no == 2
		var newval = $(elem).find(":selected").text();
		var newIndex = elem.selectedIndex;
		$(elem).parent().prev().toggle( time );
		$(elem).parent().toggle( time );
		$(elem).parent().prev().text( newval  );

		var all_selected_box = $(".doc_checkbox_head:checked");
		for( var i = 0; i < all_selected_box.length; i ++ ){
			var uid = $(all_selected_box[i]).attr( "noid" );
			var span = $( "#doc_level_"+uid );
			span.text( newval );
			//$("#select_id  ").attr("selected", true);
			/*
			var sel = $("#doc_level_select_"+uid+" > option");
			alert( sel.length );
			alert( sel[0].attr("id") );
			sel[0].attr("selected", "selected");//*/
			var select_level = document.getElementById( "doc_level_select_"+uid );
			//alert( select_level );
			//alert( select_level.options[select_level.selectedIndex].value );
			select_level.options[newIndex].selected = true;
		}
		set_submit_enable();//确定按钮有效


	}
}
function change_doc_comment_handle(elem, no){
	var time = 100;
	if( no == 1 ){
		$(elem).toggle( time );
		$(elem).next().toggle( time );
		$(elem).next().find(":first-child").focus();
	} else {//no == 2
		$(elem).parent().prev().toggle( time );
		$(elem).parent().toggle( time );

		var dis_val, real_val;//显示值与真实值
		if( $(elem).val().trim().length == 0 ) {
			dis_val = "无";
			real_val = "";
		} else {
			dis_val = real_val = $(elem).val().trim();
		}
		$(elem).parent().prev().text( dis_val );
		$(elem).text( real_val );

		var all_selected_box = $(".doc_checkbox_head:checked");
		for( var i = 0; i < all_selected_box.length; i ++ ){
			var uid = $(all_selected_box[i]).attr( "noid" );
			var span = $( "#doc_comment_"+uid );
			span.text( dis_val );
			var set = $("#doc_comment_set_"+uid);
			set.val( real_val );
		}

		set_submit_enable();//确定按钮有效
	}
}
function change_doc_honnor_leader_handle(elem, type){//type ==1 表示“带队”，2表示“优秀”
	var newval = $(elem).prop("checked");

	var all_selected_box = $(".doc_checkbox_head:checked");
	if( type == 1 ) {
		for( var i = 0; i < all_selected_box.length; i ++ ){
			var uid = $(all_selected_box[i]).attr( "noid" );
			$( "#doc_checkbox_leader_"+uid ).prop( "checked", newval );
			//span.next().find(":first-child").val( newval );
		}
	} else {//优秀
		for( var i = 0; i < all_selected_box.length; i ++ ){
			var uid = $(all_selected_box[i]).attr( "noid" );
			$( "#doc_checkbox_excellent_"+uid ).prop( "checked", newval );
			//span.next().find(":first-child").val( newval );
		}
	}
	set_submit_enable();//确定按钮有效
}
//把参与表连成字符串
function get_part_table_string(){
	var all_head_checkbox = $(".doc_checkbox_head");
	var token = "&n&b&";
	var str = "";
	for( var i = 0; i < all_head_checkbox.length; i ++ ){
		var uid = $( all_head_checkbox[i]).attr( "noid" );
		var elem_t = $("#doc_time_set_"+uid).find(":first-child");//时间
		var elem_p = $("#doc_level_set_"+uid).find(":first-child");//评价
		var elem_l = $("#doc_checkbox_leader_"+uid);//是否带队
		var elem_e = $("#doc_checkbox_excellent_"+uid);//是否优秀
		var elem_c = $("#doc_comment_set_"+uid );//评论
		//alert( elem_t.val() );
		//alert( elem_p.find(":selected").text() );
		//alert( elem_l.prop("checked") );
		//alert( elem_e.prop("checked") );
		//alert( elem_c.val() );
		str += uid+token+elem_t.val() + token + elem_p.find(":selected").text() + token + (elem_l.prop("checked")?1:0) + token + (elem_e.prop("checked")?1:0) +token+ elem_c.val() + token;
	}
	return str;
}

//活动档案“确定”按钮
function doc_edit_submit_handle(elem){
	//alert( "ter" );
	var submit_button = $("#doc_op_modify");
	submit_button.attr( "disabled", true );
	submit_button.attr( "title", "正在提交到服务器上……" );

	var str = get_part_table_string();

	var docid = $(elem).attr("docid");
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/actz.php",
		data:{setStr:str, type:"setpart", documentId: docid },
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			if( html == 0 ){
				var modify_button = $("#doc_op_modify");
				modify_button.attr( "disabled", true );
				modify_button.attr( "title", "之前的修改已保存，您还没有新的修改" );
				//“保存”
				$("#submit_act_doc").attr( "disabled", false );
				$("#submit_act_doc").attr( "title", "保存该活动档案" );
				$("#doc_op_submit").attr( "disabled", false );
				$("#doc_op_submit").attr( "title", "提交该活动档案，提交后志愿时间将会公示一周，并且除非有异议不得再修改" );
				alert( "修改成功！" );
			} else {
				alert( html );
				submit_button.attr( "title", "请修改不正确的地方" );
			}
		}
	});
}

//活动档案“提交”按钮
function submit_doc(elem){
	if( ! confirm( "此操作不可逆，您确定要提交该档案吗？" ) ) return;

	$("#doc_op_submit").attr( "disabled", true );
	$("#doc_op_submit").attr( "title", "正在向服务器提交您的请求……" );
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/actz.php",
		data:{ type:"submit", documentId: $(elem).attr("docid") },
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			if( html == 0){
				alert( "提交成功！" );
				$("#doc_op_submit").attr( "disabled", false );
				$("#doc_op_submit").attr( "title", "提交您所做的修改，提交后志愿时间将会公示一周，并且除非有异议不得再修改" );

				$("#util_start_activity").trigger("click");//模拟点击“发起的活动”事件
			} else {
				alert( html );
			}
		}
	});
}


//转到“修改审核状态”选项
function turn_to_set_mem_state(elem){
	//alert( $(elem).attr("change") );
	if( $(elem).attr("change") == "1" ){
		$(elem).toggle();
		$(elem).next().toggle();
	}
}
//成员列表的审核状态修改
function mem_state_handle(elem){
	var uid = $(elem).prev().attr("uid");
	var newval = $(elem).prev().find(":selected").val();
	var newtext = $(elem).prev().find(":selected").text();
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/mem.php",
		data:{type:"modifyState", uid: uid, state: newval, reason: "暂时没有"},
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			if( html.indexOf('0') != -1 ){
				$(elem).parent().prev().text( newtext );
				$(elem).parent().toggle();
				$(elem).parent().prev().toggle();
				if( newval == 1 ){//审核通过，移除按钮
					$(elem).parent().prev().attr( "change", "0" );
					$(elem).parent().remove();
				} else if ( newval == 2 ) {
					$(elem).parent().parent().parent().remove();
				}
			} else {
				$(elem).parent().toggle();
				$(elem).parent().prev().toggle();
				alert("修改失败！");
			}
		}
	});

}

//成员职务修改
function turn_to_set_mem_position(elem){
	$(elem).toggle();
	$(elem).next().toggle();
}
function mem_position_handle(elem){
	var uid = $(elem).prev().attr("uid");
	var newval = $(elem).prev().find(":selected").val();
	var newtext = $(elem).prev().find(":selected").text();
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/mem.php",
		data:{type:"modifyPosition", uid: uid, position: newtext, reason: "暂时没有"},
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			//alert( html );
			if( html == 0 ){
				$(elem).parent().prev().text( newtext );
				$(elem).parent().toggle();
				$(elem).parent().prev().toggle();
				//alert("修改成功！" );
			} else {
				$(elem).parent().toggle();
				$(elem).parent().prev().toggle();
				alert("修改失败！");
			}
		}
	});
}

//快捷录入时间
function extend_act_select_change_handle(elem){
	var actid = elem[elem.selectedIndex].value;
	$.ajax({
		type:"POST",
		url:"./handle/actz_time.php",
		data:{type:"getdoc", activityId:actid},
		success:function(html){
			$("#extend_table_td_container_doc").html( html );
		}
	});
}
//设置“快捷操作”中的“确定”按钮是否有效
function verify_extend_time_handle(){

	$("#extend_op_ok").prop( "disabled", true );

	var ok = true;
	var uid = $("#extend_uid").val().trim();
	var time = $("#extend_input_time").val();
	var comment = $("#extend_ta_comment").val().trim();
	var level = $("input[name='extend_honor_level']:checked").val();
	var leader = $("input[name='extend_honor_leader']:checked").val();
	var excellent = $("input[name='extend_honor_excellent']:checked").val();

	var docselect = document.getElementById("extend_select_doc");
	var docid = docselect.options[docselect.selectedIndex].value;

	if( uid.length == 0 || uid.length > 20){
		ok = false;
		$("#extend_op_ok").attr( "title", "学号长度错误" );
	} else {
		if( docid < 0 ){
			ok = false;
			$("#extend_op_ok").attr( "title", "档案选择错误" );
		} else {
			if( time.length == 0 ){
				ok = false;
				$("#extend_op_ok").attr( "title", "服务时间格式错误" );
			} else {
				$("#extend_op_ok").attr( "title", "确认添加服务时间" );
			}
		}
	}

	$("#extend_op_ok").prop( "disabled", !ok );
}

//快捷添加服务时间的“确定按钮”
function extend_ok_handle(){
	var uid = $("#extend_uid").val().trim();
	var time = $("#extend_input_time").val();
	var comment = $("#extend_ta_comment").val().trim();
	var level = $("input[name='extend_honor_level']:checked").val();
	var leader = $("input[name='extend_honor_leader']:checked").val();
	var excellent = $("input[name='extend_honor_excellent']:checked").val();

	var docselect = document.getElementById("extend_select_doc");
	var docid = docselect.options[docselect.selectedIndex].value;
	//alert("adcasd");
	var close = confirm("确认添加服务时间（添加后不能撤销）？");
	if( ! close ){ return; }
	$.ajax( {
		type:"POST",
		url:"./handle/actz_time.php",
		data:{type:"addTime", uid:uid, documentId:docid, time:time,level:level, leader:leader, excellent:excellent, comment:comment},
		success:function(html){
			if( html == 0 ){
				alert( "添加成功！" );
			} else {
				alert( html );
			}
		}

	} );
}

var editor;
//团队资料“修改”按钮
function team_info_modify_handle( elem ){
	$( zt_elem_main_title ).text( "修改资料" );
	switch_main_content( "->" );

	document.getElementById('loading-bar').style.display='block';
	$.ajax({type:"POST",
		url: "./include/infot_edit.php",
		success: function(html){
			document.getElementById('loading-bar').style.display='none';
			$( zt_elem_main_content2 ).html(html);

			$.getScript('./plugin/kindeditor-4.1.5/kindeditor-min.js').done(function() {
					KindEditor.basePath = './plugin/kindeditor-4.1.5/';
					editor = KindEditor.create('textarea[name="content"]', {
							resizeType : 1,
							allowPreviewEmoticons : true,
							allowImageUpload : true,
							allowFileManager : true,
							items : [
								'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
								'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
								'insertunorderedlist', '|','wordpaste', 'emoticons', 'image', 'link','unlink','baidumap','fullscreen']
					});
			});
		}
	});
}

//资料修改“修改”按钮
function team_info_edit_ok (){
	var slogan = $("#team_info_edit_slogan").val();
	var profile = editor.html();//$("#team_info_edit_profile").val();
	//alert( profile );
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url: "./handle/actz.php",
		data:{ type:"modifyInfo", slogan: slogan, profile:htmlEncode(profile) },
		success: function(html){
			document.getElementById('loading-bar').style.display='none';
			if( html == 0 ){
				alert( "修改成功！" );
				$("#util_infot").trigger( "click" );
			} else {
				alert( html ) ;
			}
		}
	});
}
function team_info_chxpsd_ok() {
	var old_psd = $("#team_info_chxpsd_old").val();
	var new_psd = $("#team_info_chxpsd").val();
	var new_psd2 = $("#team_info_chxpsd2").val();

	if( old_psd.length >  0 ) {
		if( old_psd.length < 6 || old_psd.length > 16 ) { alert( "旧密码长度必须在6-16之间！"); return; }
		if( new_psd.length < 6 || new_psd.length > 16 ) { alert( "新密码长度必须在6-16之间！"); return; }
		if( new_psd != new_psd2 ){ alert( "两次密码输入不一致！" ); return; }
		old_psd = hex_md5( old_psd );
		new_psd = hex_md5( new_psd );
	} else {
		alert("旧密码不能为空！");return;
	}
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url: "./handle/actz.php",
		data:{ type:"chxpsd", oldpsd:old_psd, newpsd: new_psd },
		success: function(html){
			document.getElementById('loading-bar').style.display='none';
			if( html == 0 ){
				$("#team_info_chxpsd_old").val("");
				$("#team_info_chxpsd").val("");
				$("#team_info_chxpsd2").val("");
				alert( "修改成功！" );
				//$("#util_infot").trigger( "click" );
			} else {
				alert( html ) ;
			}
		}
	});
}


function go_back_home(){
	switch_main_content( "<-" );
}
