<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';
include("../plugin/jquery-fileuploader-php-master/classes/easy_upload/upload_class.php"); //classes is the map where the class file is stored
$max_size = 1024*8000;
$upload = new file_upload();

$upload->upload_dir = '../Upload/picture/';
$upload->extensions = array('.png', '.jpg','.jpeg','.gif'); // specify the allowed extensions here
$upload->rename_file = true;
$act_id=$_POST['act_id'];
if(!empty($_FILES)) {
	$upload->the_temp_file = $_FILES['userfile']['tmp_name'];
	$upload->the_file = $_FILES['userfile']['name'];
	$upload->http_error = $_FILES['userfile']['error'];
	$upload->do_filename_check = 'y'; // use this boolean to check for a valid filename
	if ($upload->upload()){
		$a=new Act();
		$a->upload_pic($act_id,$upload->file_copy);
		echo '<div id="status">success</div>';
		echo '<div id="message">'. $upload->file_copy .' Successfully Uploaded</div>';
		//return the upload file
		echo '<div id="uploadedfile">'. $upload->file_copy .'</div>';
		
	} else {
		
		echo '<div id="status">failed</div>';
		echo '<div id="message">'. $upload->show_error_string() .'</div>';
		
	}
}
//$act = new Act();
//$result = $act->upload_picture();

?>