
var register_capacity = function(){};
function bindStudentInfo(){
	$(".studentNo").bind( "click", function(){
		var id = this.innerText;
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
	});

	$(".capacity").bind( "click", register_capacity );

}

register_capacity = function(){
	//alert( newHtml );
	var newHtml = '<select id="ThisIsAstrangeOption">';
	//alert( newHtml );
	if( this.innerText == "主席" ){
		newHtml += '<option value="0" selected="selected">主席</option><option value="1">成员</option>';
	} else {
		newHtml += '<option value="0">主席</option><option value="1"  selected="selected">成员</option>';
	}
	newHtml += '</select>';
	newHtml += '<span id="ThisIsAstrangeButton" class="clickable">确定</span>';
	//alert( newHtml );
	$(this).parent().html(  newHtml  );


	$( "#ThisIsAstrangeButton" ).bind( "click", function(){
		var t  =$("#ThisIsAstrangeOption > option:selected").text();
		var html = '<span title="点击修改" class="clickable capacity">'+t+'</span>';
		$(this).parent().html( html );

		$(".capacity").bind( "click", register_capacity );

	} );
}

filte_mem_table = function(){
	var startYear = $('select#filter_select_start_year option:selected').val();
	startYear = parseInt(startYear, 10);//按照十进制解析字符串为整数
	var stopYear = $('select#filter_select_stop_year option:selected').val();
	stopYear = parseInt(stopYear, 10);//按照十进制解析字符串为整数
	var sender = $('select#filter_select_sender option:selected').val();//性别
	var state = $('select#filter_select_state option:selected').val();//状态
	var position = $('select#filter_select_position option:selected').val();//身份
	var keyword = $('input#filter_keyword').val();
	var tbody = $("table#mem_table").children();
	if(tbody.length < 1){
		alert("错误，请联系系统管理员！");
	}
	var tr = $(tbody[0]).children();
	for(var i = 1; i < tr.length; i ++){//忽略第一行（表头）
		var t = $(tr[i]).children();
		var No = $(t[0]).children().first().text();
		var name = $(t[1]).children().first().text();
		var t_sender = $(t[2]).text();
		var t_state = $(t[4]).children("span:first-child").text();//状态是第4列
		var t_position = $(t[5]).children("span:first-child").text();//身份是第5列
		if( No.substring(0,2)=="MG"){//去掉MG
			No = No.substring(2, No.length);
		}
		if(No.length < 2){
			alert("错误，请联系系统管理员！");
		}
		No = parseInt(No.substring(0,2));
		No += 2000;
		if( No < startYear || No > stopYear
			|| sender.indexOf(t_sender) < 0
			|| state.indexOf(t_state) < 0
			 || position.indexOf(t_position) < 0
			|| name.indexOf(keyword) < 0){
			$(tr[i]).css("display", "none");
		} else {
			$(tr[i]).css("display", "table-row");
		}
	}
}
