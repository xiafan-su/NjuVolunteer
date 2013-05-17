<?php						//说明，返回值是一个二维数组，数组中下标0,1对应当前页面第一个，2,3对应第二个。比如当前页面第一个是周五，则0,1是周五的活动，2,3
							//	是周六的活动，4,5是周日的活动，不一定下标元素都有值，用的时候要判断isset();
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$year=$_POST["year"];
$month=$_POST["month"];		
$date=$_POST["date"];
$day=$_POST["day"];

$a=new Act();
$select=$a->fetch_weekact($year,$month,$date);

while($result=mysql_fetch_assoc($select)){
	
	$week_act_list[]=array('id'=>$result['id'],'name'=>$result['name'],'time_type'=>$result['time_type'],'weekday'=>$result['weekday_time'],'deadline'=>$result['deadline'],'begin_time'=>$result['begin_time'],'end_time'=>$result['end_time'],'used'=>false);
}

$str="$year"."-"."$month"."-"."$date";
$ret_act_list=NULL;

for($i=0;$i<14;$i++){
	$j=intval($i/2);
	$count=0;
	if(($j+$day)>7)
		$week_day=($j+$day)%7;
	else
		$week_day=$j+$day;
	foreach($week_act_list as $weeklist){
		$count++;
		
		if((!empty($weeklist['weekday']))&&(!$weeklist['used'])){
			
			if((date("Y-m-d",strtotime($weeklist['begin_time']))<date("Y-m-d",strtotime("$str+$j day")))&&(date("Y-m-d",strtotime($weeklist['end_time']))>date("Y-m-d",strtotime("$str+ $j day")))&&(($weeklist['weekday']&pow(2,$week_day-1))==pow(2,$week_day-1))){
				
				$ret_act_list[$i]=array('id'=>$weeklist['id'],'name'=>$weeklist['name'],'time_type'=>$weeklist['time_type'],'weekday'=>$weeklist['weekday'],'deadline'=>$weeklist['deadline']);
				$week_act_list[$count-1]['used']=true;
				
				break;
			}
		}
	
	}
}

echo $ret_act_list[8]['name'];

?>