var nowloading="<div class=\"loading\"><img src=\"./assets/img/loading/loading.gif\"/></div>";
var act=1;
var flag=0;
var topp=['-1250px','-800px','-808px','-887px','-1250px'];
var left=['-1000px','-1050px','-999px','-890px','-1020px'];
var flag1 = 1;
/*
var showp=['<h2 style="color:#FFF">恭喜夏凡同学参加仙林中学支教获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜魏子华同学参加宁工小学支教获得3小时志愿时间并获得0.5小时荣誉时间</h2>',
			'<h2 style="color:#FFF">恭喜王逸群同学加城市义工岗获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜夏畅同学参加图书馆整理图书活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜席胜渠同学参加仙林中学支教获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜肖耿同学参加仙林中学获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜段文娜同学参加宁工小学支教获得3小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜王瑶菁同学参加博物馆讲解活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜王鑫同学参加老年公寓活动获得2小时志愿时间</h2>'];
var showp2=['<h2 style="color:#FFF">恭喜夏凡同学参加临终关怀活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜魏子华同学参加万家帮活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜王逸群同学加万家帮活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜夏畅同学参加甘家巷小学支教获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜席胜渠同学参加希望之星大赛志愿者获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜肖耿同学参加佛缘会志愿者获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜段文娜同学参加校庆志愿者活动获得2小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜王瑶菁同学参加博爱安养庇护活动获得3小时志愿时间</h2>',
			'<h2 style="color:#FFF">恭喜王鑫同学参加尧化门小学支教获得4小时志愿时间</h2>'];
			*/
var showp=new Array();
var showp2=new Array();
var claimstr = "志愿宣言：-我愿意成为一名光荣的志愿者-我承诺-尽己所能-不计报酬-帮助他人-服务社会-践行志愿精神-传播先进文化-为建设团结互助-平等友爱-共同前进的美好社会贡献力量";
var claimindex = 0;
var next=1;
var hide=1;
var autoindex = 1;
var shownum=0;
var shownum2=0;

var otherindex1 = 1;
var otherindex2 = 3;
$(document).ready(function(){
	for (i=0;i<9;i++)
	{
		showp[i]=$('#record_left'+i).html();
	}
	for (i=0;i<9;i++)
	{
		showp2[i]=$('#record_right'+i).html();
	}
	for(i=1;i<6;i++){
		$('#act-img'+i).hide();
		$('#act-detail'+i).hide();
	}
	$('#act-img1').show();
	$('#act-detail').html($('#act-detail1').html());
	$('#map-img').animate({marginTop:topp[0],marginLeft:left[0]});
	var int1 = self.setInterval("nextpic()",5000);
	showpeople();
	setTimeout("showpeople2()",1500);
	$('#statistics').click(function(){
		$('#data-statistics').show().animate({opacity:'1'},500);
		$('#backdrop3').show().animate({opacity:'0.7'},500);
		document.getElementById('loading-bar').style.display='block';
		$.ajax({
		type:"POST",
		url:"./handle/statistics.php",
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			$('#data-statistics').html(html);

		}
	});
	});
	$('#backdrop3').click(function(){
		$('#data-statistics').animate({opacity:'0'},500);
		$('#backdrop3').animate({opacity:'0'},500);
		setTimeout("$('#data-statistics').hide()",500);
		setTimeout("$('#backdrop3').hide()",500);
	});
	/*.othertitlefunc:hover{
	line-height:24px;
	font-size:24px;
	padding:2px 0px 4px 60px;
}
*/	for(var i=1;i<=2;i++){
		$('#othertitle'+i).mouseover(function(){
			var no = this.id.split('le')[1];
			$('#othertitle'+no+'1').css('height','4px');
			$('#othertitle'+no+'1').css('margin-bottom','0px');
			$(this).css('line-height','24px');
			$(this).css('font-size','24px');
			$(this).css('padding','2px 0px 4px 60px');
			
			if(no != otherindex1){
				$('#othertitle'+otherindex1).css('line-height','12px');
				$('#othertitle'+otherindex1).css('font-size','12px');
				$('#othertitle'+otherindex1).css('padding','14px 0px 4px 60px');
				$('#othertitle'+otherindex1+'1').css('height','2px');
				$('#othertitle'+otherindex1+'1').css('margin-bottom','2px');
				$('#othercontent'+otherindex1).css('display','none');
				otherindex1 = no;
			}
			$('#othercontent'+no).css('display','block');
		});
	}
	for(var i=3;i<=6;i++){
		$('#othertitle'+i).mouseover(function(){
			var no = this.id.split('le')[1];
			$('#othertitle'+no+'1').css('height','4px');
			$('#othertitle'+no+'1').css('margin-bottom','0px');
			$(this).css('line-height','24px');
			$(this).css('font-size','24px');
			$(this).css('padding','2px 0px 4px 60px');
			
			if(no != otherindex2){
				$('#othertitle'+otherindex2).css('line-height','12px');
				$('#othertitle'+otherindex2).css('font-size','12px');
				$('#othertitle'+otherindex2).css('padding','14px 0px 4px 60px');
				$('#othertitle'+otherindex2+'1').css('height','2px');
				$('#othertitle'+otherindex2+'1').css('margin-bottom','2px');
				$('#othercontent'+otherindex2).css('display','none');
				otherindex2 = no;
			}
			$('#othercontent'+no).css('display','block');
		});
	}

	/*
	$('#othertitle2').mouseover(function(){
		var no = this.id.split('le')[1];
		$('#othertitle'+no+'1').css('height','4px');
		$('#othertitle'+no+'1').css('margin-bottom','0px');
		$(this).css('line-height','24px');
		$(this).css('font-size','24px');
		$(this).css('padding','2px 0px 4px 60px');
		
		if(no != otherindex){
			$('#othertitle'+otherindex).css('line-height','12px');
			$('#othertitle'+otherindex).css('font-size','12px');
			$('#othertitle'+otherindex).css('padding','14px 0px 4px 60px');
			$('#othertitle'+otherindex+'1').css('height','2px');
			$('#othertitle'+otherindex+'1').css('margin-bottom','2px');
			$('#othercontent'+otherindex).css('display','none');
			otherindex = no;
		}
		$('#othercontent'+no).css('display','block');
	});

	
	$('#othertitle3').mouseover(function(){
		var no = this.id.split('le')[1];
		$('#othertitle'+no+'1').css('height','4px');
		$('#othertitle'+no+'1').css('margin-bottom','0px');
		$(this).css('line-height','24px');
		$(this).css('font-size','24px');
		$(this).css('padding','2px 0px 4px 60px');
		
		if(no != otherindex){
			$('#othertitle'+otherindex).css('line-height','12px');
			$('#othertitle'+otherindex).css('font-size','12px');
			$('#othertitle'+otherindex).css('padding','14px 0px 4px 60px');
			$('#othertitle'+otherindex+'1').css('height','2px');
			$('#othertitle'+otherindex+'1').css('margin-bottom','2px');
			$('#othercontent'+otherindex).css('display','none');
			otherindex = no;
		}
		$('#othercontent'+no).css('display','block');
	});

	
	$('#othertitle4').mouseover(function(){
		var no = this.id.split('le')[1];
		$('#othertitle'+no+'1').css('height','4px');
		$('#othertitle'+no+'1').css('margin-bottom','0px');
		$(this).css('line-height','24px');
		$(this).css('font-size','24px');
		$(this).css('padding','2px 0px 4px 60px');
		
		if(no != otherindex){
			$('#othertitle'+otherindex).css('line-height','12px');
			$('#othertitle'+otherindex).css('font-size','12px');
			$('#othertitle'+otherindex).css('padding','14px 0px 4px 60px');
			$('#othertitle'+otherindex+'1').css('height','2px');
			$('#othertitle'+otherindex+'1').css('margin-bottom','2px');
			$('#othercontent'+otherindex).css('display','none');
			otherindex = no;
		}
		$('#othercontent'+no).css('display','block');
	});
	*/
});
function changeact(temp){
	if(flag==0 && act!=temp){
		flag=1;
		$('#act-img'+act).slideUp(800);
		$('#act-detail').html($('#act-detail'+temp).html());
		$('#act-img'+temp).show(800);
		$('#map-img').animate({marginTop:topp[temp-1],marginLeft:left[temp-1]},800);
		act=temp;
		setTimeout("flag=0",800);
	}
}
function show3dwall(){
	window.open("./plugin/cooliris/3Dshow.php");
}
function showpeople(){
	if(shownum==9)
		shownum = 0;
	shownum++;
	//alert(showp[shownum-1]);
	document.getElementById('item'+shownum).style.display='block';
	document.getElementById('item'+shownum).style.marginLeft=(Math.random()*480)+"px";
	document.getElementById('item'+shownum).style.marginTop="170px";
	$('#item'+shownum).html(showp[shownum-1]);
	$('#item'+shownum).animate({marginTop:'70px',opacity:'1'},2000)
	setTimeout("$('#item'+shownum).animate({marginTop:'20px',opacity:'0'},1000)",2000);
	setTimeout("document.getElementById('item'+shownum).style.display='none'",3000);
	setTimeout("showpeople()",3000);
}
function showpeople2(){
	if(shownum2==9)
		shownum2 = 0;
	shownum2++;
	//alert(showp[shownum-1]);
	document.getElementById('iitem'+shownum2).style.display='block';
	document.getElementById('iitem'+shownum2).style.marginLeft=(Math.random()*480)+"px";
	document.getElementById('iitem'+shownum2).style.marginTop="170px";
	$('#iitem'+shownum2).html(showp2[shownum2-1]);
	$('#iitem'+shownum2).animate({marginTop:'70px',opacity:'1'},2000)
	setTimeout("$('#iitem'+shownum2).animate({marginTop:'20px',opacity:'0'},1000)",2000);
	setTimeout("document.getElementById('iitem'+shownum2).style.display='none'",3000);
	setTimeout("showpeople2()",3000);
}
function nextpic(){
	if(autoindex == 4)
		autoindex = 0;
	autoindex++;
	changeact(autoindex);
}
function showclaim(){
	if(claimindex==0){
		$('#volclaim').animate({height:'430px',top:'100px',marginLeft:'-200px',width:'400px',opacity:'0.8'},1000);	
		$('#backdrop2').show().animate({opacity:'0.7'},1000);
		setTimeout("claima()",1000);
	}
}
function claima(){
	if(claimindex<86){
		if(claimstr[claimindex]=='-')
			$('#volclaim').append('<br />');
		else
			$('#volclaim').append(claimstr[claimindex]);
		claimindex++;
		
		if(flag1 == 0){
			$('#volclaim').html('');
			claimindex = 0;
		}
		else
			claima();
	}
}
function hiddenit(){
	if(claimindex>=86 || flag1 == 0){
		$('#volclaim').animate({height:'0px',top:'220px',marginLeft:'0px',width:'0px',opacity:'0'},1000)	
		$('#volclaim').html('');
		$('#backdrop2').animate({opacity:'0'},1000)
		setTimeout("$('#backdrop2').hide()",1000);
		claimindex=0;
		flag1 = 1;
	}
}
function hiddenit1(){
	flag1 = 0;
	hiddenit();
}
function exit_browser(){
	$('.browser-change').hide();
}
