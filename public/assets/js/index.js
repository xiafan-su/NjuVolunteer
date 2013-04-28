var act=1;
var flag=0;
$(document).ready(function(){
	for(i=2;i<5;i++){
		$('#act-img'+i).hide();
		$('#act-detail'+i).hide();
	}
});
function changeact(temp){
	if(flag==0 && act!=temp){
		flag=1;
		$('#act-img'+act).slideUp(1000);
		$('#act-detail'+act).hide(1000);
		$('#act-img'+temp).show(1000);
		$('#act-detail'+temp).show(1000);
		act=temp;
		setTimeout("flag=0",1000);
	}
}