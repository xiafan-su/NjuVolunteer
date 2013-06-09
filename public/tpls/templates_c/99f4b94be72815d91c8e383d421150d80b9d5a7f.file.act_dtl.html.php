<?php /* Smarty version Smarty-3.1.7, created on 2013-06-09 23:12:00
         compiled from "./tpls/templates\act_dtl.html" */ ?>
<?php /*%%SmartyHeaderCode:770751b49b40d51616-76513726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99f4b94be72815d91c8e383d421150d80b9d5a7f' => 
    array (
      0 => './tpls/templates\\act_dtl.html',
      1 => 1370779656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '770751b49b40d51616-76513726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'act_title' => 0,
    'picture_name' => 0,
    'picture' => 0,
    'perm_of_upload' => 0,
    'act_state' => 0,
    'act_begin_time' => 0,
    'act_end_time' => 0,
    'last_time' => 0,
    'act_time_type' => 0,
    'act_attr_type' => 0,
    'act_place' => 0,
    'deadline' => 0,
    'signupnum' => 0,
    'total_num' => 0,
    'act_profile' => 0,
    'responser' => 0,
    'responser_tel' => 0,
    'team_name' => 0,
    'act_id' => 0,
    'same_act' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51b49b40e5a39',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b49b40e5a39')) {function content_51b49b40e5a39($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="./assets/img/header/logo.png">
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/act_dtl.css" rel="stylesheet" />
<link href="./assets/css/act_photo.css" rel="stylesheet" />
<link href="./assets/css/dropzone.css" rel="stylesheet" />
<link href="./assets/css/tipswindown.css" rel="stylesheet" />
<script src="./assets/js/tipswindown.js"></script>
<script charset="utf-8" src="./plugin/kindeditor-4.1.5/kindeditor-min.js"></script>
<script charset="utf-8" src="./plugin/kindeditor-4.1.5/lang/zh_CN.js"></script>
<link href="./plugin/jquery-fileuploader-php-master/css/ui-lightness/jquery-ui-1.8.14.custom.css" rel="stylesheet" type="text/css" />
<link href="./plugin/jquery-fileuploader-php-master/css/fileUploader.css" rel="stylesheet" type="text/css" />

<script src="./plugin/jquery-fileuploader-php-master/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="./plugin/jquery-fileuploader-php-master/js/jquery-ui-1.8.14.custom.min.js" type="text/javascript"></script>
<script src="./plugin/jquery-fileuploader-php-master/js/jquery.fileUploader.js" type="text/javascript"></script>


<title>活动详细页面</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<input type="hidden" id="act_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  />
<input type="hidden" id="act_title" value="<?php echo $_smarty_tpl->tpl_vars['act_title']->value;?>
"/>
<input type="hidden" id="act_pic" value="<?php echo $_smarty_tpl->tpl_vars['picture_name']->value;?>
"/>
<div class="main">
	<div id="left">
        <div id="act_image" style="cursor:pointer;">
   			 <img id="scan_act_photo" src="<?php echo $_smarty_tpl->tpl_vars['picture']->value;?>
" height="244"  />
             <?php if ($_smarty_tpl->tpl_vars['perm_of_upload']->value==1){?>
             <span id="upload_pic" name="upload_pic">上传图片</span>
             <?php }?>
		</div>
    </div>
	<div id="right">
        <div id="act_simple">
            <div class="div_title">
                <div id="act_title"><?php echo $_smarty_tpl->tpl_vars['act_title']->value;?>
</div>
                <div id="act_state"><?php echo $_smarty_tpl->tpl_vars['act_state']->value;?>
</div>
            </div>
            <div class="div_content">
                <ul>
                    <li><div class="div_content_attr">时间</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['act_begin_time']->value;?>
 -- <?php echo $_smarty_tpl->tpl_vars['act_end_time']->value;?>
</div></li>
                    <li><div class="div_content_attr">持续</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['last_time']->value;?>
小时</div></li>
                    <li><div class="div_content_attr">性质</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['act_time_type']->value;?>
</div></li>
                    <li><div class="div_content_attr">类型</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['act_attr_type']->value;?>
</div></li>
                    <li><div class="div_content_attr">地点</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['act_place']->value;?>
</div></li>
                    <li><div class="div_content_attr">报名截止日期</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['deadline']->value;?>
</div></li>


                </ul>
            </div>
        </div>
    </div>
    	
    <div class="bottom">
    	<div class="apply-state">
        	<div style="width:100%;float:left">
                <div class="div_title2" style="margin-top:12px">已报名的人数：<span id="sign_up_num"><?php echo $_smarty_tpl->tpl_vars['signupnum']->value;?>
</span>/<?php echo $_smarty_tpl->tpl_vars['total_num']->value;?>
</div>

                <div id="option" style="float:right">
                	<input type="button" id="take_part_in" name="take_part_in" class="button" style="margin-top:7px">
                    
                </div>
                <?php if ($_smarty_tpl->tpl_vars['act_state']->value!='编辑中'){?>
                <div class="jiathis_style" style=" margin-top:10px;float:right; margin-right:10px">
                    <a class="jiathis_button_tsina"></a>
                    <a class="jiathis_button_renren"></a>
                    <a class="jiathis_button_qzone"></a>
                   
                    <a class="jiathis_button_tqq"></a>
                 
                    <a class="jiathis_counter_style"></a>
            	</div>	
                <?php }?>
            </div>
        </div>
        <div id="act_detail" class="act-detail">
            <div class="div_title2"><div>活动介绍</div></div>
            <div id="act_introduction">
				<?php echo $_smarty_tpl->tpl_vars['act_profile']->value;?>

			</div>
        </div>
        <div id="act_contact" class="act-detail">
            <div class="div_title2" style="width:400px"><div>联系方式</div></div>
            <div class="div_content">
            	<div>
                <ul>
                    <li><div class="div_content_attr">负责同学</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['responser']->value;?>
</div></li>
                    <li><div class="div_content_attr">联系电话</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['responser_tel']->value;?>
</div></li>
                    <li><div class="div_content_attr">发起组织</div>
                    <div class="div_content_value"><?php echo $_smarty_tpl->tpl_vars['team_name']->value;?>
</div></li>
                </ul>
            	</div>
			</div>
        </div>
        <div class="act-comment">
            <!--<div id="drop_cover" style="width:400px;height:5px;background:#999;float:left;display:"none";">-->
            <div class="cover-m" id="cover-m"></div>
            <div class="upload-m" id="drop_cover">	
                <form action="./handle/upload_picture.php" method="post" enctype="multipart/form-data">

                <input type="file" name="userfile"  class="fileUpload" multiple>

                 <input type="hidden" name="act_id" value="<?php echo $_smarty_tpl->tpl_vars['act_id']->value;?>
">
          		</form>
			</div>

            <ul class="div_title2"><li>活动评论详情</li></ul>
            
          	<div id="comment_list">

                
            </div>
            <div style="width:100%;height:10px;float:left"></div>
     		<div id="comment_area">
            	<a name="comment-w"></a>
				<textarea id="comment_input" name="com_content" style="width:460px;height:110px;visibility:hidden;" ></textarea>
			</div>
            <div class="comment_submit" style="width:440px;">
				<input name="com_submit" class="button" id="submit_comment" type="submit" value="评论"/>
			</div>
        </div>
        <div class="other-act">
            <div class="div_title2" ><div>参加过这项活动的人还参加了</div>
            <?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['same_act']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
			<div style="margin:20px 0 20px 0"><a href="act_dtl.php?act_id=<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</a></div>
            <?php } ?>
        	</div>
            <div id="act_same"  class="div_content"></div>
        </div>

   
       <!-- JiaThis Button BEGIN -->


        <!-- JiaThis Button END -->
        
		<script>
			var jiathis_config = { 
				url: "http://volunteer.nju.edu.cn/act_dtl.php?act_id="+$('#act_id').val(), 
				title: "南京大学青年志愿者:"+$('#act_title').val(), 
				summary:"",
				pic:"http://volunteer.nju.edu.cn/Upload/picture/"+$('#act_pic').val()
			}  
        </script>

        
    </div><!-- 结束right div -->
</div>

<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
<script type="text/javascript" src="./assets/js/act_dtl.js"></script>
</html><?php }} ?>