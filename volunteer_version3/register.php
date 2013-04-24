<?php
require_once('connections/root_conn.php'); 
require_once('./include/php/basic.php'); 
if( isset( $_POST['user'] ) ) {
	$id		= 	$_POST['user'];
	$name  		= 	$_POST['user_name'];
	$password 	= 	md5($_POST['password']);
	$gender  	= 	$_POST['gender'];
	$grade 		= 	$_POST['grade'];
	$time		= 	date("Y-m-d-h-m-s");
	$department =   $_POST['department'];
	$phone  	= 	$_POST['phone'];
	$QQ  		= 	$_POST['QQ'];
	$city  		= 	$_POST['city'];

	$query="select id from user_info where id='".$id."'";
	$select=mysql_query($query,$root_conn);
	if(mysql_num_rows($select) == 0) {
		$insert = "
		insert into user_info 
		( 	
			id			,		name			,		password			, 
			gender			,		grade			,		
			last_login	,		phone				,
			qq				,		city             ,department
		) 
		values
		(	
			'".$id."'	,		    '".$name."'	   	,		'".$password."'		,
			'".$gender."'	,		'".$grade."'	,		
			'".$time."'		,		'".$phone."'		,
			'".$QQ."'		,		'".$city."'         ,    '".$department."'
		);";
		//mysql_query($insert,$root_conn);
		if (!mysql_query($insert,$root_conn))
		{
		  die('Error: ' . mysql_error());
		}
		$_SESSION[$_user_id]=$id;
		$_SESSION[$_user_name]=$name;
		$_SESSION[$_user_permission]=$_up_v;
		$_SESSION[$_user_faculty]=$department;
		//$_SESSION[$_user_faculty_id]=$;
		header( "Location: ./activity.php" );
	}
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="./include/css/main.css" rel="stylesheet" />
	<link href="./include/css/register.css" rel="stylesheet" />
</head>


<body>
<?php
require("./include/php/header.php");
?>

	
<div class="main">
	
		<div class="span_left">
			<form class="form-horizontal" id="register" action="register.php" method="POST">
				<ul class="breadcrumb"><li>基本信息</li></ul>
				<div class="control-group">
					<label class="control-label" for="inputInfo">学号</label>
					<div class="controls">
						<div class="input_border">
							<input  id="user" name="user" class="user" type="text" value="<?php  if(isset($_POST['user']))echo $_POST['user'];  ?>" />
						</div>
						<span id="user_tip" class="input-tip">学号格式错误</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputInfo">密码</label>
					<div class="controls">
						<div class="input_border">
							<input id="password" name="password" class="password" type="password"  />
						</div>
						<span id="password_tip" class="input-tip">密码不能为空</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputInfo">确认</label>
					<div class="controls">
						<div class="input_border">
							<input id="password2" name="password2" class="password2" type="password" />
						</div>
						<span id="password2_tip"  class="input-tip">密码不一致</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputInfo">姓名</label>
					<div class="controls">
						<div class="input_border">
							<input id="user_name" name="user_name" class="name" type="text" value="<?php  if(isset($_POST['user_name']))echo $_POST['user_name'];  ?>" />
						</div>
						<span id="user_name_tip" class="input-tip">姓名格式错误</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputInfo">性别</label>
					<div class="controls">
						<div class="input_border">
							<select name="gender">
								<option vlaue="男">男</option>
								<option vlaue="女">女</option>
							</select>
						</div>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputInfo">级别</label>
					<div class="controls">
						<div class="input_border">
							<select name="grade">
									<!-- 
											Warning:  date() [function.date]: It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'UTC' for '8.0/no DST' instead in F:\z-htdocs\volunteer_old\register.php on line 79 -->
							  <option value="2013">2013级</option><option value="2012">2012级</option>
							  <option value="2011">2011级</option><option value="2010">2010级</option>
							  <option value="2009">2009级</option><option value="2008">2008级</option>
							  <option value="2007">2007级</option><option value="2006">2006级</option>
							  <option value="2005">2005级</option><option value="2004">2004级</option>
							  <option value="2003">2003级</option><option value="2002">2002级</option>
							  <option value="2001">2001级</option><option value="2000">2000级</option>
							  <option value="1999">1999级</option><option value="1998">1998级</option>
							  <option value="1997">1997级</option><option value="1996">1996级</option>
							  <option value="1995">1995级</option><option value="1994">1994级</option>
							  <option value="1993">1993级</option><option value="1992">1992级</option>
							  <option value="1991">1991级</option><option value="1990">1990级</option>
							  <option value="1989">1989级</option><option value="1988">1988级</option>
							  <option value="1987">1987级</option><option value="1986">1986级</option>
							  <option value="1985">1985级</option><option value="1984">1984级</option>               
							</select>
						</div>
					</div>
				</div>
                
                <div class="control-group">
					<label class="control-label" for="inputInfo">院系</label>
					<div class="controls">
						<div class="input_border">
							<select name="department">
							  <option value="文学院">文学院</option><option value="物理学院">物理学院</option>
							  <option value="外国语学院">外国语学院</option><option value="数学系">数学系</option>
							  <option value="哲学系">哲学系</option><option value="地球科学与工程学院">地球科学与工程学院</option>
							  <option value="历史学系">历史学系</option><option value="大气科学学院">大气科学学院</option>
							  <option value="天文与空间科学学院">天文与空间科学学院</option><option value="计算机科学与技术系">计算机科学与技术系</option>
							  <option value="地理与海洋科学学院">地理与海洋科学学院</option>
                              <option value="现代工程与应用科学学院">现代工程与应用科学学院</option>
							  <option value="电子科学与工程学院">电子科学与工程学院</option><option value="新闻传播学院">新闻传播学院</option>
							  <option value="商学院">商学院</option><option value="法学院">法学院</option>
							  <option value="生命科学学院">生命科学学院</option><option value="政府管理学院">政府管理学院</option>
							  <option value="信息管理学院">信息管理学院</option><option value="社会学院">社会学院</option>
							  <option value="化学化工学院">化学化工学院</option><option value="环境学院">环境学院</option>
							  <option value="医学院">医学院</option><option value="软件学院">软件学院</option>
							  <option value="工程管理学院">工程管理学院</option><option value="匡亚明学院">匡亚明学院</option>
							  <option value="建筑与城市规划学院">建筑与城市规划学院</option><option value="海外教育学院">海外教育学院</option>
							  <option value="国际学院">国际学院</option><option value="金陵学院">金陵学院</option>               
							</select>
						</div>
					</div>
				</div>	
	
				<ul class="breadcrumb"><li>联系方式</li></ul>
				<div class="control-group">
					<label class="control-label" for="inputInfo">手机</label>
					<div class="controls">
						<div class="input_border">
							<input id="phone" name="phone" class="phone" type="text" placeholder="格式：15900000000" value="<?php  if(isset($_POST['phone']))echo $_POST['phone'];  ?>" />
						</div>
						<span  id="phone_tip" class="input-tip">手机格式错误</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputInfo">QQ</label>
					<div class="controls">
						<div class="input_border">
							<input id="QQ" name="QQ" class="QQ" type="text"  value="<?php  if(isset($_POST['QQ']))echo $_POST['QQ'];  ?>" placeholder="格式：1234567890" />
						</div>
						<span  id="QQ_tip" class="input-tip">QQ格式错误</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputInfo">城市</label>
					<div class="controls">
						<div class="input_border">
							<input  id="city" name="city" class="city" type="text" placeholder="格式：江苏南京" value="<?php  if(isset($_POST['city']))echo $_POST['city'];  ?>"/>
						</div>
						<span  id="city_tip" class="input-tip">城市格式错误</span>
					</div>
				</div>
				<ul class="breadcrumb"><li>有趣的验证操作（第三阶段）</li></ul>
				<div class="control-group" >
					
					<div class="controls" style="margin-left:123px">
						<img src="./include/img/register/small.jpg" width="50" height="42" border="1 rgb(200,200,200)" alt="">
						<img src="./include/img/register/big.jpg" width="200" height="111" border="1 rgb(200,200,200)" alt="">
						<span id="captcha_tip" class="input-tip">请执行操作</span>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<input name="submit" class="button" id="submit" type="submit" value="注册" style="padding:0px;margin-left:380px" />
					</div>
				</div>
			</form>
		</div>

		<div class="span_right">
			<?php
			   //生成三个随机数
			$rand1 = rand()*100%33;
			$rand2 = 0;
			$rand3 = 0;
			while( ($rand2 = rand()*100%33) == $rand1 );
			while( ($rand3 = rand()*100%33) == $rand1 || $rand3  == $rand2 );
			?><!-- 220 146 -->
			<img class="reg_nju_scene" src="./include/img/nju_scene/scene<?php  echo $rand1+1;  ?>.jpg" />
			<img class="reg_nju_scene" src="./include/img/nju_scene/scene<?php  echo $rand2+1;  ?>.jpg" />
			<img class="reg_nju_scene" src="./include/img/nju_scene/scene<?php  echo $rand3+1;  ?>.jpg" />
		</div>
 
</div>



<?php
require("./include/php/footer.php");
?>
</body>

<script src="./include/js/jquery-1.9.1.min.js"></script>
<script src="./include/js/register.js"></script>
</html>