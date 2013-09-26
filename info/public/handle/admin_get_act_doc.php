<?php
$_BASE_PATH = "../../";
$_SMARTY_ROOT="../tpls";
include_once '../../sys/core/init.inc.php';

$a=new Admin();

$aid=$_POST['actid'];

$sb1=$a->fetch_act_doc_all($aid);
$doc=NULL;
echo '<select id="doc_id" class="docselect" name="';
echo 'docname';
echo '"';
echo " onchange=";
echo '"';
echo "setdoc()";
echo '"';
echo ">";

//echo "<option></option>";
while($doc_info = mysql_fetch_assoc($sb1)){
	$doc[] = array('id' =>$doc_info['id'],'leader'=> $doc_info['leader'],'date'=>$doc_info['date']);
	echo "<option value=";
	echo '"';
	echo $doc_info['id'];
	echo '"';
	echo ">";
	echo $doc_info['leader'];
	echo "   ";
	echo $doc_info['date'];
	echo "</option>";
	
	
}

echo "</select>";




?>