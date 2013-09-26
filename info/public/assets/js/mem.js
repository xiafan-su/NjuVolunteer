
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