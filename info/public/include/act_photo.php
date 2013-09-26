<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

if( !isset($_GET['activityId']) ){
	echo "参数错误！";exit;
}

$act_id = $_GET['activityId'];
/*
$WIDTH = 750;
$HEIGHT = 430;
//根据活动id从数据库获取第一张图片src
$first_full_img_src = "./assets/img/act_photo_test/full/image1_big.jpg";
$first_full_img_width = "400";
$first_full_img_height = "300";
$first_full_img_uploader_id = "101220128";
$first_full_img_uploader_name = "夏畅";
$first_full_img_upload_time = "2013-05-20 14:00:00";
//计算左边距、上边距
$first_full_img_left = ($WIDTH - $first_full_img_width)/2;
$first_full_img_top = ($HEIGHT - $first_full_img_height)/2;
//
*/
//根据活动id获取全部缩略图信息
$thumbnail_list = array();
$act = new Act();
$thumbnail_list = $act->fetch_act_pic( $act_id );
/*
for($i = 1; $i < 13; $i ++) {
	$thumbnail_list[] = array(
		"src"=>"./assets/img/act_photo_test/thumbnail/image".$i.".jpg",//缩略图地址
		"full_src"=>"./assets/img/act_photo_test/full/image".$i."_big.jpg",//全图地址
		"full_id"=>"12",//全图id
		"uploader_id"=>"101220128",//上传者id
		"uploader_name"=>"夏畅",//上传者
		"upload_time"=>"2013-05-20 14:".$i.":34"//上传时间
	);
}//


$tpl->assign( "first_full_img_src", $first_full_img_src );
$tpl->assign( "first_full_img_width", $first_full_img_width );
$tpl->assign( "first_full_img_height", $first_full_img_height );
$tpl->assign( "first_full_img_uploader_id", $first_full_img_uploader_id );
$tpl->assign( "first_full_img_uploader_name", $first_full_img_uploader_name );
$tpl->assign( "first_full_img_upload_time", $first_full_img_upload_time );
$tpl->assign( "first_full_img_left", $first_full_img_left );
$tpl->assign( "first_full_img_top", $first_full_img_top );
*/

$tpl->assign( "thumbnail_list", $thumbnail_list );


$tpl->display("include/act_photo.html");

?>