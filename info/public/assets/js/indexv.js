$(document).ready(function(){
	
	$('#id_activity').click(function(){
		$('#table_for_team').hide();
		$('#table_for_activity').show();
	});
	
	$('#id_team').click(function(){
		$('#table_for_activity').hide();
		$('#table_for_team').show();
	});
	
});