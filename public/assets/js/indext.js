// JavaScript Document
var act=1;
$(document).ready(function(){
	while(act<9){
		$('#scroll-panel').append("恭喜"+$('#name').text()+"成功举办深夜写代码"+act+"。<br />");
		act++;
	}
	//alert($('#name').text());
	scrollit();
});

function scrollit(){
	$('#scroll-panel').animate({top:'200px'},1);
	$('#scroll-panel').animate({top:'-200px'},10000,'linear');
	setTimeout("scrollit()",10000);
}