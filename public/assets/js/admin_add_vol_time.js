var act_sel=0;
var doc_sel=0;
var bt=0;
var ua=0;
function get_doc(){
		var id=$("#act_name").val();
		//alert(id);

		
		
		$.ajax({
		type:"POST",
		data:{
			actid:id
			},
		url:"./handle/admin_get_act_doc.php",
		success:function(html){
			
			$("#ready_to_change").html(html);
			var id=$("#doc_id").val();
	
			
		document.getElementById("fordoc").value=id;
		
	
			
			
			  
			//var idd=$("#doc_id").val();
			//alert(idd);
			doc_sel=1;
			act_sel=1;
			if (""==id){
				act_sel=0;
				doc_sel=0;
				//alert(56565);
			
				}
			 //var text = document.getElementById("ready_to_change").innerText;
			// alert(text);

			
			/*
			if (html.length>0){
				 var doc_show=document.getElementById("doc_id");
				
				doc_show.length=0;
				var no=new Option("4");
				
				doc_show.add(no);
	
			}
			else{
				var doc_show=document.getElementById("doc_id");
				
				doc_show.length=0;
			}*/
			
			//if (html[html.length-1]==1){
				
				//$("#ac_1").text("重复的账号名");
				//document.getElementById("ac_1").style.color="red";cid=1;
			//}
			//else{
				//$("#ac_1").text("");
				//document.getElementById("ac_1").style.color="black";cid=0;
			//}
		}
	});
}

function isNumber(str){
	if (""==str){
		return false;
	}
	var reg=/\D/;
	return str.match(reg)==null;
}


function setdoc(){
	
	var id=$("#doc_id").val();
	document.getElementById("fordoc").value=id;
	
		
}



 function check_base_time()
 {
  var num = document.getElementById('check_t').value;
  if( num )
  {
   if( !isNaN( num ) )
   {
   
	    $("#bt_2").text("");
    	document.getElementById("bt_2").style.color="black";
   	bt=1;
    
   }
   else
   {
     bt=0;
	$("#bt_2").text("必须是数字");
		document.getElementById("bt_2").style.color="red";
   }
  }
  else
  {
	  bt=0;
  	$("#bt_2").text("*不能为空");
		document.getElementById("bt_2").style.color="red";
  }
 }


function checkuserid(){
	var id=$("#username").val();
				$.ajax({
		type:"POST",
		data:{
			userid:id
			},
		url:"./handle/admin_checkuserid.php",
		success:function(html){
			
			if (html[html.length-1]=='0'){
				$("#ua_1").text("无此学号！");
				document.getElementById("ua_1").style.color="red";
				ua=0;
			}
			else{
				$("#ua_1").text("学生: "+html);
				document.getElementById("ua_1").style.color="green";
				ua=1;
			}
		}
	});
}



function checkinfoover(srcForm){
	if (act_sel==1 && doc_sel==1 && bt==1 && ua==1) return true;
	else return false;
}








/*
function check_base_time(){
	var tm=$("#check_t").val();
	if($("#check_t").val().replace(/\s/g,"")==""){
		$("#bt_2").text("*不能为空");
		document.getElementById("bt_2").style.color="red";

	}
	else if (!/^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/.test(tm) ){
		$("#bt_2").text("必须是整数");
		document.getElementById("bt_2").style.color="red";
		
	}
	else{
		bt=1;
		$("#bt_2").text("");
		document.getElementById("bt_2").style.color="black";
		
	}
}
*/