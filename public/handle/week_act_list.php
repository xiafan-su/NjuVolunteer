<?php						//说明，返回值是一个二维数组，数组中下标0,1对应当前页面第一个，2,3对应第二个。比如当前页面第一个是周五，则0,1是周五的活动，2,3
							//	是周六的活动，4,5是周日的活动，不一定下标元素都有值，用的时候要判断isset();
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$year=$_POST["year"];
$month=$_POST["month"];		
$date=$_POST["date"];
$day=$_POST["day"];

/*$year=2013;
$month=5;		
$date=3;
$day=5;*/
$a=new Act();
$select=$a->fetch_weekact($year,$month,$date);

while($result=mysql_fetch_assoc($select)){
	
	$week_act_list[]=array('id'=>$result['id'],'name'=>$result['name'],'time_type'=>$result['time_type'],'weekday'=>$result['weekday_time'],'deadline'=>$result['deadline'],'begin_time'=>$result['begin_time'],'end_time'=>$result['end_time'],'profile'=>$result['profile'],'detail_time'=>$result['detail_time'],'used'=>false);
}

$str="$year"."-"."$month"."-"."$date";
$ret_act_list=NULL;

/*foreach($week_act_list as $weeklist){
	echo $weeklist['id']."  ".$weeklist['name']."</br>";
}
echo "test".($weeklist['weekday']&pow(2,$day-1));
echo pow(2,$day-1);*/
for($i=0;$i<14;$i++){
	$ret_act_list[$i]=array('id'=>NULL,'name'=>NULL,'time_type'=>NULL,'weekday'=>NULL,'deadline'=>NULL,'profile'=>NULL,'detail_time'=>NULL,'defined'=>false);
}

for($i=0;$i<14;$i++){
	$j=intval($i/2);
	$count=0;
	if(($j+$day)>7)
		$week_day=($j+$day)%7;
	else
		$week_day=$j+$day;
	if(isset($week_act_list)){
		
		foreach($week_act_list as $weeklist){
			$count++;
			if((!empty($weeklist['weekday']))&&(!$weeklist['used'])){
				
				if((date("Y-m-d",strtotime($weeklist['begin_time']))<date("Y-m-d",strtotime("$str+$j day")))&&(date("Y-m-d",strtotime($weeklist['end_time']))>date("Y-m-d",strtotime("$str+ $j day")))&&(($weeklist['weekday']&pow(2,$week_day-1))==pow(2,$week_day-1))){
					//echo "helllo i=0";
					//$ret_act_list[$i]=array('id'=>$weeklist['id'],'name'=>$weeklist['name'],'time_type'=>$weeklist['time_type'],'weekday'=>$weeklist['weekday'],'deadline'=>$weeklist['deadline'],'defined'=>true);
					$ret_act_list[$i]['defined']=true;
					$ret_act_list[$i]['id']=$weeklist['id'];
					$ret_act_list[$i]['name']=$weeklist['name'];
					$ret_act_list[$i]['time_type']=$weeklist['time_type'];
					$ret_act_list[$i]['weekday']=$weeklist['weekday'];
					$ret_act_list[$i]['deadline']=$weeklist['deadline'];
					$ret_act_list[$i]['profile']=$weeklist['profile'];
					$ret_act_list[$i]['detail_time']=$weeklist['detail_time'];
					$week_act_list[$count-1]['used']=true;
					
					break;
				}
			}
		
		}
	}
}
for($i=0;$i<7;$i++){
	$j=2*($i);
	//echo $i."----".$j;
	$retlist[$i]=array('id1'=>$ret_act_list[$j]['id'],'name1'=>$ret_act_list[$j]['name'],'time_type1'=>$ret_act_list[$j]['time_type'],'weekday1'=>$ret_act_list[$j]['weekday'],'deadline1'=>$ret_act_list[$j]['deadline'],'profile1'=>$ret_act_list[$j]['profile'],'detail_time1'=>$ret_act_list[$j]['detail_time'],'defined1'=>$ret_act_list[$j]['defined'],'id2'=>$ret_act_list[$j+1]['id'],'name2'=>$ret_act_list[$j+1]['name'],'time_type2'=>$ret_act_list[$j+1]['time_type'],'weekday2'=>$ret_act_list[$j+1]['weekday'],'deadline2'=>$ret_act_list[$j+1]['deadline'],'profile2'=>$ret_act_list[$j+1]['profile'],'detail_time2'=>$ret_act_list[$j+1]['detail_time'],'defined2'=>$ret_act_list[$j+1]['defined']);
	//echo $i."--".$retlist[$i]['id1']."--".$retlist[$i]['name1']."</br>";
}
$tpl->assign("retlist",$retlist);
$tpl->display("handle/week_act_list.html");
/*$temp=NULL;
echo $temp."++++";
if($temp)
echo "heolll";
else
echo "fuck";*/
//echo $ret_act_list[0]['name'];

?>