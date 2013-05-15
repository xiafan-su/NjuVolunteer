<?php /* Smarty version Smarty-3.1.7, created on 2013-05-14 10:35:48
         compiled from "./tpls/templates\include\act_dtl_left.html" */ ?>
<?php /*%%SmartyHeaderCode:109585177d2ae997052-56911016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff5701e6c2d16695a03a7c96a4c8dff10f58032e' => 
    array (
      0 => './tpls/templates\\include\\act_dtl_left.html',
      1 => 1368498946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109585177d2ae997052-56911016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5177d2ae9992a',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5177d2ae9992a')) {function content_5177d2ae9992a($_smarty_tpl) {?><!--script src="./assets/js/act_dtl.js" ></script-->
<div id="act_image">
    <img src="./assets/img/activity_center/0.jpg" height="300" width="180" />
</div>

<div id="option">
	<a id="take_part_in" name="take_part_in"></a>
	<a id="upload_pic" name="upload_pic">上传图片</a>
    <!--form aciton="/file-upload" class="dropzone" id="my_dropzone">上传图片</form-->
    <a id="scan_people" name="scan_people">报名情况</a>
</div>


<?php }} ?>