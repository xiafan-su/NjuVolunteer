

$(function(){
	var $tip_red = "red", $tip_green = "green";
	var validate_user = function (){
		var $user = $('#user').val();
		var pattern = new RegExp(/^[b][0-9]{9}$/);
		if(!pattern.test($user))
		{
			$('#user_tip').css( "color", $tip_red ).html('啊偶，学号格式不对哦！').show();
			return false;
		} else {
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
		}
	}
	var validate_password = function (){
		var $password = $('#password').val();
		if( $password.length== 0 ){
			$('#password_tip').show();
			return false;
		} else {
			$('#password_tip').hide();
			return true;
		}
	}
	var validate_password2 = function(){
		var password = $('#password').val();
		var password2 = $('#password2').val();
		if(password != password2){
			$('#password2_tip').show();
			return false;
		} else {
			$('#password2_tip').hide();
			return true;
		}
	}
	var validate_user_name = function(){
		var name = $('#user_name').val();
		var pattern2 = new RegExp(/^[\u4e00-\u9fa5]{2,4}$/);
		if(!pattern2.test(name)) {
			$('#user_name_tip').show();
			return false;
		} else {
			$('#user_name_tip').hide();
			return true;
		}
	}
	var validate_phone = function(){
		var phone = $('#phone').val();
		var test_phone = new RegExp(/^(1(([35][0-9])|(47)|[8][01236789]))\d{8}$/);
		if(!test_phone.test(phone)){
			$('#phone_tip').show();
			return false;
		} else {
			$('#phone_tip').hide();
			return true;
		}
	}
	var validate_QQ = function(){
		var QQ = $('#QQ').val();
		var test_QQ = new RegExp(/^\s*[.0-9]{5,10}\s*$/);
		if(!test_QQ.test(QQ)){
			$('#QQ_tip').show();
			return false;
		} else {
			$('#QQ_tip').hide();
			return true;
		}
	}
	var validate_city = function(){
		var city = $('#city').val();
		var test_city = new RegExp(/^[\u4e00-\u9fa5]{1,10}$/);
		if(!test_city.test(city)){
			$('#city_tip').show();
			return false;
		} else {
			$('#city_tip').hide();
			return true;
		}
	}


	var input_array = new Array( '#user', '#password', '#password2', '#user_name', '#phone', '#QQ' , '#city');
	var input_validate = new Array( validate_user, validate_password, validate_password2, validate_user_name,
		validate_phone, validate_QQ, validate_city);
	for(var i = 0; i < input_array.length; i ++){
		$(input_array[i]).bind( "blur", input_validate[i] );
		$(input_array[i]).bind( "blur", function(){ $( "#"+this.id).parent().removeClass('input_border_focus'); } );
		$(input_array[i]).bind( "focus", function(  ){ $( "#"+this.id+'_tip').hide(); $( "#"+this.id).parent().addClass('input_border_focus'); }  );
	}

	$('#submit').bind( "click", function(){
		 var $flag_user = validate_user();
		 var $flag_pass = validate_password();
		 var $flag_pass2 = validate_password2();
		 var $flag_user_name = validate_user_name();
		 var $flag_phone = validate_phone();
		 var $flag_QQ = validate_QQ();
		 var $flag_city = validate_city();

		 if( $flag_user && $flag_pass && $flag_pass2 && $flag_user_name) return true;//暂时不添加其他限制
		 else return false;
	}  );

	if( $('#user').val() != "" ){
		validate_user();
	}

});





