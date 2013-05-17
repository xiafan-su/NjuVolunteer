// JavaScript Document
$(document).ready(function(){
	$('#notice-list-1').click(function(){
		$('#notice-cover').show();
		$('#notice-detail').show();
		$("#notice-cover").animate({opacity:'1'});
		$("#notice-detail").animate({opacity:'1'});
	});
	
	$('#notice-cover').click(function(){
		$("#notice-cover").animate({opacity:'0'},500);
		$("#notice-detail").animate({opacity:'0'},500);
		setTimeout("$('#notice-cover').hide()",500);
		setTimeout("$('#notice-detail').hide()",500);
	});
});