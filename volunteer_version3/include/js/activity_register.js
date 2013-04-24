// JavaScript Document
$(function(){
	//$('#begin_time-tip').css("display","none");
	
	var $tip_red = "red", $tip_green = "green";
	/*var validate_activity_name = function (){
		var $act_name = $('#activity_name').val();
		//var pattern = new RegExp(/^[b][0-9]{9}$/);
		if($act_name.replace(/(^\s*)|(\s*$)/g, "")=="")
		{
			$('#activity_tip').css( "color", $tip_red ).html('亲，活动名不能为空哦！！').show();
			return false;
		} /*else {
			$('#user_tip').css( "color", $tip_green ).html('正在向服务器发送请求……').show();
			var data = 'user=' + $user;
			$.ajax({
				type:"POST",
				url:"handle/register_validate_user.php",
				data:data,
				success:function(html){
					if(html == "1") {
						$('#user_tip').css( "color", $tip_red ).html('啊偶，该学号已注册了哦！').show();
						return false;
					} else {
						$('#user_tip').css( "color", $tip_green ).html('该学号未被注册！').show();
						return true;
					}
				}	
			});
			return true;
		
	}*/
	var validate_place = function (){
		var $place = $('#activity_place').val();
		if( $place.replace(/(^\s*)|(\s*$)/g, "")==""){
			$('#place_tip').show();
			return false;
		} else {
			$('#place_tip').hide();
			return true;
		}
	}
	var validate_begin_time = function(){
		
		var begin_time = $('#begin_time').val();
		//var password2 = $('#password2').val();
		var pattern = new RegExp(/^((((19|20)\d{2})-(0?(1|[3-9])|1[012])-(0?[1-9]|[12]\d|30))|(((19|20)\d{2})-(0?[13578]|1[02])-31)|(((19|20)\d{2})-0?2-(0?[1-9]|1\d|2[0-8]))|((((19|20)([13579][26]|[2468][048]|0[48]))|(2000))-0?2-29))$/);
		if(!pattern.test(begin_time)){
			$('#begin_time_tip').css("color",$tip_red).html('格式错了，为yyyy-mm-dd ').show();
			return false;
		} else {
			return true;
		}
	}
	function compare_time(a,b) {
   		var arr=a.split("-");
   		var starttime=new Date(arr[0],arr[1],arr[2]);
   		var starttimes=starttime.getTime(); 
   		var arrs=b.split("-"); 
   		var endtime=new Date(arrs[0],arrs[1],arrs[2]);
   		var endtimes=endtime.getTime();
   		if(starttimes>endtimes)//开始大于结束
   		{
     		return false;
   		} 
   		else{ 
   		 	return true; 
   		}
	}
	
	var validate_end_time = function(){
		var end_time = $('#end_time').val();
		var begin_time2=$('#begin_time').val();
		var pattern2 = new RegExp(/^((((19|20)\d{2})-(0?(1|[3-9])|1[012])-(0?[1-9]|[12]\d|30))|(((19|20)\d{2})-(0?[13578]|1[02])-31)|(((19|20)\d{2})-0?2-(0?[1-9]|1\d|2[0-8]))|((((19|20)([13579][26]|[2468][048]|0[48]))|(2000))-0?2-29))$/);
		if(!pattern2.test(end_time)) {
			$('#end_time_tip').css('color',$tip_red).html('时间格式不对，，应为yyyy-mm-dd').show();
			return false;
		} else {
			if(compare_time(begin_time2,end_time))
				return true;
			else{		
				$('#end_time_tip').css('color',$tip_red).html('结束时间应该在开始时间之后').show();
				return false;
			}
		}
	}
	var validate_last_time = function(){
		var last_time= $('#last_time').val();
		var test_phone = new RegExp(/^(0|[1-9]\d*)$/);
		if(!test_phone.test(last_time)){
			$('#last_time_tip').css('color',$tip_red).html('亲，请输入数字').show();
			return false;
		} else {
			if(last_time>10){
				$('#last_time_tip').css('color',$tip_red).html('亲，你把志愿者当奴隶吗？').show();
					return false;
			}
			else if(last_time<=0){
				$('#last_time_tip').css('color',$tip_red).html('亲，你在恶意测试吧，请输入大于0的数').show();
				return false;
			}
			else
				return true;
		}
	}
	var validate_responser = function(){
		var responser = $('#responser').val();
		var test_responser = new RegExp(/^\s*[.0-9]{5,10}\s*$/);
		if(responser.replace(/(^\s*)|(\s*$)/g, "")==""){
			$('#responser_tip').css("color",$tip_red).html('请输入姓名').show();
			return false;
		} else {
			$('#responser_tip').hide();
			return true;
		}
	}
	var validate_tel = function(){
		var tel = $('#responser_tel').val();
		if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(tel))){
			$('#tel_tip').css("color",$tip_red).html('请输入正确的手机格式').show();
			return false;
		} else {
			$('#tel_tip').hide();
			return true;
		}
	}


	var input_array = new Array(/* '#activity_name',*/ '#activity_place', '#begin_time', '#end_time', '#last_time', '#responser' , '#responser_tel');
	var input_validate = new Array( /*validate_activity_name, */validate_place, validate_begin_time,validate_end_time ,
		validate_last_time, validate_responser, validate_tel);
	for(var i = 0; i < input_array.length; i ++){
		$(input_array[i]).bind( "blur", input_validate[i] );
		$(input_array[i]).bind( "blur", function(){ $( "#"+this.id).parent().removeClass('input_border_focus'); } );
		$(input_array[i]).bind( "focus", function(){ $( "#"+this.id+'_tip').hide(); $( "#"+this.id).parent().addClass('input_border_focus'); }  );
	}

	$('#submit').bind( "click", function(){
		// var $flag_user = validate_activity_name();
		 var $flag_pass = validate_activity_place();
		 var $flag_pass2 = validate_begin_time();
		 var $flag_user_name = validate_end_time();
		 var $flag_phone = validate_last_time();
		 var $flag_QQ = validate_responser();
		 var $flag_city = validate_tel();

		 if(/* $flag_user &&*/ $flag_pass && $flag_pass2 && $flag_user_name) return true;//暂时不添加其他限制
		 else return false;
	}  );

	if( $('#activity_name').val() != "" ){
		validate_activity_name();
	}

});
