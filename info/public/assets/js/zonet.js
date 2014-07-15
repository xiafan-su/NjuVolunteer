
//右边DIV的标题id、右边主副页面
var zt_elem_main_title = "#main_title";
var zt_elem_main_content = "#main_content";
var zt_elem_main_content2 = "#main_content2";
var zt_elem_go_back_home = "#go_back_home";

//“申请活动”、“发起的活动”、"完成的活动"
var zt_elem_apply_act = "#util_apply_activity";
var zt_elem_start_act = "#util_start_activity";
var zt_elem_finished_act = "#util_finished_activity";
var zt_elem_note_edit = "#util_note_edit";
var zt_elem_note_recv = "#util_note_recv";
var zt_elem_note_sent = "#util_note_sent";
var zt_elem_mem = "#util_mem";
var zt_elem_infot = "#util_infot";
var zt_elem_infot_edit = "#util_infot_edit";
var zt_elem_extend_time = "#util_extend_time";
var zt_elem_chxpsd = "#util_chxpsd";
//对应URL
var zt_url_apply_act = "./act_apply.php";
var zt_url_act = "./include/actz.php";//发起的、完成的活动使用相同php
var zt_url_note = "./include/note.php";//收到的、发送的通知使用相同php
var zt_url_extend_time = "./include/act_time.php";
var zt_url_note_edit = "./include/note_edit.php";
var zt_url_note_dtl = "./include/note_dtl.php";
var zt_url_mem = "./include/mem.php";
var zt_url_chxpsd = "./include/infot_chxpsd.php";//change password
var zt_url_infot = "./include/infot.php";
var zt_url_infot_edit = "./include/infot_edit.php";

//活动档案索引类（活动列表中的档案列表索引）
var zt_elem_doc_index = ".zonet-doc-row";
var zt_elem_doc_add = ".util_doc_add";
var zt_elem_doc_apply = ".util_doc_apply";//每次小活动的报名情况
var zt_elem_doc_list = ".util_doc_list";//活动档案列表元素
var zt_elem_doc_fold = ".util_doc_fold";//用于折叠、展开活动档案列表操作的元素
var zt_elem_doc_del = ".util_doc_del";//删除
//通知
var zt_elem_note_row = ".note_table_row";
var zt_elem_note_recv_act_select = "#note_recv_act_select";



//点击“发起的活动”、“完成的活动”的回调函数
var zt_func_start_act = function(html){};
var zt_func_finished_act = function(html){};
var zt_func_extend_time = function(){};
//以下函数在actz.js中实现
var zt_func_doc_index = function(){};
var zt_func_doc_add = function(){};
var zt_func_doc_apply = function(){};
var zt_func_doc_fold = function(elem){};
var zt_func_doc_del = function(){};
var zt_func_export_csv = function(){};

//点击“收到的通知”/“发送的通知”的回调函数
var zt_func_note_recv = function(){};
var zt_func_note_sent = function(){};
var zt_func_note_send = function(){};
//以下函数在note.js中国实现
var nt_func_note_read = function(){};
var nt_func_note_sent = function(){};//发送的通知
//var nt_func_note_send = function(){};//发通知
var nt_func_note_recv_act_select = function(){};
//团队资料


//记录当前操作（记录所属）的活动id
var current_activity_id = -1;
var current_document_id = -1;

//转换主副页面
function switch_main_content( direction ){
	var switch_style = "slow";
	var switch_time = 1000;
	if( direction == "<-" ){
	/*	$(zt_elem_main_content2).animate({width:0}, switch_style );
		$(zt_elem_main_content2).hide(switch_time);
		$(zt_elem_main_content).animate({width:683}, switch_style );
		$(zt_elem_main_content).show(switch_time);//*/
	//	$(zt_elem_main_content2).fadeOut(  );
	//	$(zt_elem_main_content).fadeIn(  );
		$(zt_elem_main_content2).hide();
		$(zt_elem_main_content).show();
	} else if( direction == "->" ) {
	/*	$( zt_elem_main_content2 ).html( "正在载入……" );
		$( zt_elem_main_content ).animate({width:0}, switch_style );
		$( zt_elem_main_content ).hide(switch_time);
		$( zt_elem_main_content2 ).animate({width:683}, switch_style );
		$( zt_elem_main_content2 ).show(switch_time);//*/
		$( zt_elem_main_content2 ).html( "正在载入……" );
		$(zt_elem_main_content2).show();
		$(zt_elem_main_content).hide();
	}
}


//点击“申请活动”时，跳转到新页面
$( zt_elem_apply_act ).click(function(){
		window.open( zt_url_apply_act , "_blank");
});
//注册函数
var register_click_event = function ( elem, new_title, handle_url, url_param, handle_func ){
	elem.click( function(){
		$( zt_elem_main_title ).text( new_title );
		switch_main_content( "<-" );
		document.getElementById('loading-bar').style.display='block';
		$.ajax({type:"POST",
			url: handle_url,
			data: url_param,
			success: function(html){
				document.getElementById('loading-bar').style.display='none';
				if( handle_func == null ){
					$( zt_elem_main_content ).html(html);
				} else {
					handle_func( html );
				}
			}
		});
	});
}


zt_func_start_act = function(html){
	$( zt_elem_main_content ).html(html);
	$( zt_elem_doc_list ).css("display", "none");//默认不显示活动档案
	$( zt_elem_doc_fold ).bind("click", zt_func_doc_fold );
	$( zt_elem_doc_index ).bind("click", zt_func_doc_index );
	$( zt_elem_doc_add ).bind("click", zt_func_doc_add );
	$( zt_elem_doc_apply ).bind("click", zt_func_doc_apply );
	$( zt_elem_doc_del ).bind("click", zt_func_doc_del );
	if(current_activity_id != -1){
		var tnode = $(".util_doc_fold[actid="+current_activity_id+"]");
		tnode.trigger("click");
		var scroll_offset = tnode.parent().parent().parent().offset();  //得到pos这个div层的offset，包含两个值，top和left
		$("body,html").animate({
   			scrollTop:scroll_offset.top  //让body的scrollTop等于pos的top，就实现了滚动
   		},0);
	}
}
zt_func_finished_act = function(html){
	$(zt_elem_main_content).html(html);
	$( zt_elem_doc_list ).css("display", "none");//默认不显示活动档案
	$( zt_elem_doc_fold ).bind("click", zt_func_doc_fold );
	$( zt_elem_doc_index ).bind("click", zt_func_doc_index );
	$( zt_elem_doc_apply ).bind("click", zt_func_doc_apply );
	$( zt_elem_doc_del ).bind("click", zt_func_doc_del );
}
//点击“成员”的处理方法
zt_func_mem = function(html){
	$(zt_elem_main_content).html(html);
	//绑定【学生信息显示】到【学号点击事件】
	bindStudentInfo();//此函数在mem.js中定义
}

zt_func_note_recv = function(html){
	$(zt_elem_main_content).html(html);
	$(zt_elem_note_row).bind( "click", nt_func_note_read );
}
zt_func_note_sent = function(html){
	$(zt_elem_main_content).html(html);
	$(zt_elem_note_row).bind( "click", nt_func_note_sent );
}
zt_func_note_send = function(html){
	$(zt_elem_main_content).html(html);
	$(zt_elem_note_recv_act_select).bind( "change", nt_func_note_recv_act_select );
}


//注册点击事件
register_click_event( $( zt_elem_start_act ), "发起的活动", zt_url_act, {type:"start"}, zt_func_start_act );
register_click_event( $( zt_elem_finished_act ), "完成的活动", zt_url_act, {type:"finished"}, zt_func_finished_act );
register_click_event( $( zt_elem_extend_time ), "快速添加服务时间", zt_url_extend_time );
register_click_event( $( zt_elem_note_edit ), "发通知", zt_url_note_edit, null, zt_func_note_send);
register_click_event( $( zt_elem_note_recv ), "收到的通知", zt_url_note, {type:"recv"}, zt_func_note_recv );
register_click_event( $( zt_elem_note_sent ), "发送的通知", zt_url_note, {type:"sent"}, zt_func_note_sent );
register_click_event( $( zt_elem_mem ), "成员", zt_url_mem, null, zt_func_mem );
register_click_event( $( zt_elem_infot ), "资料", zt_url_infot );
register_click_event( $( zt_elem_chxpsd ), "修改密码", zt_url_chxpsd );




//获取url参数
function GetRequest() {
   var url = location.search; //获取url中"?"符后的字串
   var theRequest = new Object();
   if (url.indexOf("?") != -1) {
      var str = url.substr(1);
      strs = str.split("&");
      for(var i = 0; i < strs.length; i ++) {
         theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);
      }
   }
   return theRequest;
}

var para = GetRequest();
if( para['type'] == null || para['type'] == 'start' ){
	$("#util_start_activity").trigger( "click" );
}