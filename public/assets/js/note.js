

var const_recv_title_add = "添加到接收者列表";
var const_recv_title_remove = "从接收者列表移除";

function nt_func_note_delete( elem ){
	var note_id = $(elem).attr("note_id");
	var title = $(elem).parent().prev().prev().prev().text();
	if( ! confirm("您确定要删除标题为“"+title+"”的通知吗？") ) return;
	$.ajax({
		type:"POST",
		url:"./handle/note.php",
		data:{type:"delete", note_id:note_id},
		success:function(html){
			if( html == 0 ) {
				$("#del_op_"+note_id).parent().parent().remove();
				var t = $("#note_table > tbody");
				if( t.children().length == 0 ){
					t.html( '<tr><td colspan="4" style="text-align:left">这里什么也没有！</td></tr>' );
				}
			} else {
				alert( html );
			}
		}
	});
}

nt_func_note_read = function(){
	var noteid = $(this).attr( "noteid" );
	//alert( noteid );
	var elem = $( "#note_head_img_"+noteid );
	switch_main_content( "->" );
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./include/note_edit.php",
		data:{type:"readset", noteId: $(this).attr("noteid")},
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			//alert(html);
			if( elem.attr( "src") == "./assets/img/zonet/note_unread.png" ){
				var num = $("#notes_number").text();
				if( num > 0 ) {
					$("#notes_number").text( num - 1 );//头像附近的通知数量减1
				}
			}
			//设置当前阅读的信箱为已读
			elem.attr( "src", "./assets/img/zonet/note_read.png" );
			$( zt_elem_main_content2 ).html(html);
			//$(".note_list_delete").click( nt_func_note_delete );
		}
	});
}
nt_func_note_sent = function(){
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./include/note_edit.php",
		data:{type:"teamread", noteId: $(this).attr("noteid")},
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			//alert(html);
			switch_main_content( "->" );
			$( zt_elem_main_content2 ).html(html);
		}
	});
}



//检查“发送通知”按钮是否有效
function check_note_send_btn(){
	var topic = $("input#note_edit_topic").val().trim();
	var content = $("textarea#note_edit_content").val().trim();
	var card_list_length = $("#note_recv_list").children().length;
	var MAX_NOTE_LENGTH = 1000;
	
	if( topic.length > 0 && card_list_length > 0 && content.length  > 0 && content.length <= MAX_NOTE_LENGTH){
	//alert( "card_list_length="+card_list_length );
		$("#send_note_btn").prop( "disabled", false );
		$("#send_note_btn").prop( "title", "发送通知" );
	} else {
		//alert( "card_list_length2="+card_list_length );
		$("#send_note_btn").prop( "disabled", true );
		$("#send_note_btn").prop( "title", "通知主题、接收者和内容均不能为空才能发送通知" );
	}
}


function change_text_and_pic(elem, state){
	if( state == 0 ){//add
			var src = $(elem).attr( "src" );
			var preffix = src.substring( 0, src.lastIndexOf( "/" )+1 );
			$(elem).attr( "src", preffix+"recv_add.jpg" );
			$(elem).attr( "title", const_recv_title_add );
	} else {
			var src = $(elem).attr( "src" );
			var preffix = src.substring( 0, src.lastIndexOf( "/" )+1 );
			$(elem).attr( "src", preffix+"recv_del.jpg" );
			$(elem).attr( "title", const_recv_title_remove );
	}
}
function update_recv_mem_act_list( uid, state ){
	var card_list = $("#note_recv_vol_list").children();
	//alert( uid );
	for(var i = 0; i < card_list.length; i ++){
		if( $(card_list[i]).attr("uid") == uid ){
			change_text_and_pic( $("img", card_list[i]), state );
			$(card_list[i]).css("border-color", "gray");
			break;
		}
	} 
	card_list = $("#note_recv_mem_list").children();
	for(var i = 0; i < card_list.length; i ++){
		if( $(card_list[i]).attr("uid") == uid ){
			change_text_and_pic( $("img", card_list[i]), state );
			$(card_list[i]).css("border-color", "gray");
			break;
		}
	}
}

function note_recv_button(elem){
	if( $(elem).attr( "title") == const_recv_title_add ){
		if( $(elem).attr( "gid") == 1 ){
			change_text_and_pic( elem, 1 );
			$( "#note_recv_list" ).append( $(elem).parent() );//直接追加
		} else {
			update_recv_mem_act_list( $(elem).parent().attr("uid"), 1 );
			$( "#note_recv_list" ).append( $(elem).parent().clone() );//克隆节点，并追加
		}
	} else if ( $(elem).attr( "title") == const_recv_title_remove ) {
		if( $(elem).attr( "gid") == 1 ){
			change_text_and_pic( elem, 0 );
			var curId = $(elem).attr( "sid" );//当前元素的排序id
			var children_list = $( "#note_recv_team_list" ).children();
			if( children_list.length == 0 ){
				$( "#note_recv_team_list" ).append( $(elem).parent() );
				return;
			}
			var i;
			for( i = 0; i < children_list.length; i ++ ){
				if( curId <  $(children_list[i]).attr("sid") ){
					break;
				}
			}
			if( i == children_list.length ){
				$(children_list[i-1]).after( $(elem).parent() );
			} else {
				$(children_list[i]).before( $(elem).parent() );
			}
		} else {
			var curId = $(elem).parent().attr( "uid" );//当前元素的id
			update_recv_mem_act_list( curId, 0 );
			var children_list = $( "#note_recv_list" ).children();
			for( var i = 0; i < children_list.length; i ++ ){
				if( curId == $(children_list[i]).attr("uid") ){
					$(children_list[i]).remove();
					break;
				}
			}

		}
	}
	check_note_send_btn();
}


nt_func_note_recv_act_select = function(){

	$( "#zt_elem_note_select_all_act_part").prop("checked", false);
	$( "#zt_elem_note_select_all_act_part").attr( "title", "全选" );
	var act_id = $(this).val();
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/note.php",
		data:{activityId:act_id, type:"getmem"},
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			$("#note_recv_vol_list").html(html);

			//将已经在接收者列表中的，设置为灰色
			var children_list = $( "#note_recv_list" ).children();
			var children_vol_list = $( "#note_recv_vol_list" ).children();
			//alert( children_list.length+", "+children_vol_list.length );
			for(var i = 0; i < children_vol_list.length; i ++){
				for( var j = 0; j < children_list.length ; j ++){
					if( $(children_vol_list[i]).attr("uid") == $(children_list[j]).attr("uid") ){
						//alert( "找到相同："+ $(children_vol_list[i]).attr("uid"));
						$(children_vol_list[i]).css( "border-color", "gray" );
						var elem = $("img", children_vol_list[i]);
						var src = elem.attr( "src" );
						var preffix = src.substring( 0, src.lastIndexOf( "/" )+1 );
						elem.attr( "src", preffix+"recv_del.jpg" );
						elem.attr( "title", const_recv_title_remove );
						//elem.bind( "click", function(){ note_recv_button(this); } );
						break;
					}
				}
			}
		}
	});
}



function nt_func_note_select_all_act_part(elem){

	if( $(elem).prop("checked") ) {
		var children_vol_list = $( "#note_recv_vol_list" ).children();
		for(var i = 0; i < children_vol_list.length; i ++){
			var elem = $("img", children_vol_list[i]);
			if( $(elem).attr( "title") == const_recv_title_add ){
				update_recv_mem_act_list( $(children_vol_list[i]).attr("uid"), 1 );
				$( "#note_recv_list" ).append( $(elem).parent().clone() );//克隆节点，并追加
			}
		}
		$( "#zt_elem_note_select_all_act_part").attr( "title", "全不选" );
	} else {
		var children_vol_list = $( "#note_recv_vol_list" ).children();
		var children_list = $( "#note_recv_list" ).children();
		for(var i = 0; i < children_vol_list.length; i ++){
			update_recv_mem_act_list( $(children_vol_list[i]).attr("uid"), 0 );
			for( var j = 0; j < children_list.length ; j ++){
				if( $(children_vol_list[i]).attr("uid") == $(children_list[j]).attr("uid") ){
					$(children_list[j]).remove();
					break;
				}
			}
		}
		$( "#zt_elem_note_select_all_act_part").attr( "title", "全选" );
	}
	check_note_send_btn();
}

function nt_func_note_select_all_mem(elem){

	if( $(elem).prop("checked") ) {
		var children_vol_list = $( "#note_recv_mem_list" ).children();
		for(var i = 0; i < children_vol_list.length; i ++){
			var elem = $("img", children_vol_list[i]);
			if( $(elem).attr( "title") == const_recv_title_add ){
				update_recv_mem_act_list( $(children_vol_list[i]).attr("uid"), 1 );
				$( "#note_recv_list" ).append( $(elem).parent().clone() );//克隆节点，并追加
			}
		}
		$( "#zt_elem_note_select_mem").attr( "title", "全不选" );
	} else {
		var children_vol_list = $( "#note_recv_mem_list" ).children();
		var children_list = $( "#note_recv_list" ).children();
		for(var i = 0; i < children_vol_list.length; i ++){
			update_recv_mem_act_list( $(children_vol_list[i]).attr("uid"), 0 );
			for( var j = 0; j < children_list.length ; j ++){
				if( $(children_vol_list[i]).attr("uid") == $(children_list[j]).attr("uid") ){
					$(children_list[j]).remove();
					break;
				}
			}
		}
		$( "#zt_elem_note_select_mem").attr( "title", "全选" );
	}
	check_note_send_btn();
}
//“发送”
function nt_func_note_send(){
	var card_list = $("#note_recv_list").children();
	var id_list = "";
	for(var i = 0; i < card_list.length; i ++){
		id_list += $(card_list[i]).attr("uid") + " ";
	}
	var topic = $("input#note_edit_topic").val().trim();
	var content = $("textarea#note_edit_content").val().trim();
	//content = content.replace( /\n/g, "<br />" );
	//alert( topic+", "+id_list+", "+content);
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:"POST",
		url:"./handle/note.php",
		data:{ type:"sendnote", topic:topic, content:content, idList:id_list },
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			if( html == 0 ){
				alert("发送成功！");
				$("#util_note_sent").trigger( "click" );
			} else {
				alert(html);
			}
		}
	});
}







function switch_note_recv_list_div(elem){
	var div = $("#note_recv_list_div");
	div.slideToggle("slow");
	if( $(elem).text() != "折叠" ){
		$(elem).text( "折叠" );
	}else {
		$(elem).text( "展开" );
	}
	
}


