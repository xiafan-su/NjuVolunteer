<?php /* Smarty version Smarty-3.1.7, created on 2014-03-18 10:04:28
         compiled from "./tpls/templates\act_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1989853280c1cdb87e6-49175010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'accf2e2e29956097b93510a9379feabf374c8d48' => 
    array (
      0 => './tpls/templates\\act_edit.html',
      1 => 1394867784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1989853280c1cdb87e6-49175010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'act_name' => 0,
    'act_place' => 0,
    'time_type' => 0,
    'attribution_type' => 0,
    'begin_date' => 0,
    'end_date' => 0,
    'dead_date' => 0,
    'last_time' => 0,
    'weekday1' => 0,
    'weekday2' => 0,
    'weekday3' => 0,
    'weekday4' => 0,
    'weekday5' => 0,
    'weekday6' => 0,
    'weekday7' => 0,
    'detail_time' => 0,
    'total_num' => 0,
    'facultylimit' => 0,
    'faculty_list' => 0,
    'faculty' => 0,
    'englishlimit' => 0,
    'cet4' => 0,
    'cet6' => 0,
    'other_language' => 0,
    'responser' => 0,
    'responser_tel' => 0,
    'act_id' => 0,
    'profile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53280c1e131b9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53280c1e131b9')) {function content_53280c1e131b9($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="./assets/img/header/logo.png">
<link href="./assets/css/main.css" rel="stylesheet" />


<link href="./assets/css/act_apply.css" rel="stylesheet" />

<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="./plugin/calendar/calendar.css" >
<script type="text/javascript" src="./plugin/calendar/calendar.js" ></script>  
<script type="text/javascript" src="./plugin/calendar/calendar-zh.js" ></script>
<script type="text/javascript" src="./plugin/calendar/calendar-setup.js"></script>
<script charset="utf-8" src="./plugin/kindeditor-4.1.5/kindeditor-min.js"></script>
<script charset="utf-8" src="./plugin/kindeditor-4.1.5/lang/zh_CN.js"></script>
<script type="text/javascript" src="./assets/js/act_edit.js"></script>

<link href="./plugin/jquery-fileuploader-php-master/css/ui-lightness/jquery-ui-1.8.14.custom.css" rel="stylesheet" type="text/css" />
<link href="./plugin/jquery-fileuploader-php-master/css/fileUploader.css" rel="stylesheet" type="text/css" />
<script src="./plugin/jquery-fileuploader-php-master/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="./plugin/jquery-fileuploader-php-master/js/jquery-ui-1.8.14.custom.min.js" type="text/javascript"></script>
<script src="./plugin/jquery-fileuploader-php-master/js/jquery.fileUploader.js" type="text/javascript"></script>

<title>活动编辑</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
		<div class="span_left">
			
				<div class="breadcrumb">
                	<div class="bar-left"></div>
                    <div class="bar-title">活动资料</div>
                    <div class="bar-right"></div>
                </div>
                <table border="1">
                <tr>
					<th>活动名称</th>
					<td>
						<input id="activity_name" name="activity_name" value="<?php echo $_smarty_tpl->tpl_vars['act_name']->value;?>
" class="user" type="text" placeholder="活动名称，20字以内"/> 
                    </td>
                    <td>   
						<span id="activity_name_error"></span>
					</td>
                </tr>
           		<tr>
					<th>活动地点</th>
                    <td>
						<input id="activity_place" name="activity_place" value="<?php echo $_smarty_tpl->tpl_vars['act_place']->value;?>
" class="user" type="text" placeholder="50字以内" />
                    </td>    
					<td><span id="activity_place_error"></span></td>
                </tr>
                <tr>
					<th>时间类型</th>
					<td>
                        <select name="time_type" id="time_type">
                          <option value="longtime" <?php if ($_smarty_tpl->tpl_vars['time_type']->value=='longtime'){?>selected="selected"<?php }?>>长期活动</option>
                          <option value="temp"<?php if ($_smarty_tpl->tpl_vars['time_type']->value=='temp'){?>selected="selected"<?php }?>>临时活动</option>
                        </select>
					</td>
                    <td></td>    
                </tr>
                <tr>	
					<th>活动属性</th>
					<td>
                        <select name="attribution_type" id="attribution_type">
                          <option value="helpdisabled" <?php if ($_smarty_tpl->tpl_vars['attribution_type']->value=='helpdisabled'){?>selected="selected"<?php }?>>助残</option>
                          <option value="supporteducation"<?php if ($_smarty_tpl->tpl_vars['attribution_type']->value=='supporteducation'){?>selected="selected"<?php }?>>支教</option>
                          <option value="helpold"<?php if ($_smarty_tpl->tpl_vars['attribution_type']->value=='helpold'){?>selected="selected"<?php }?>>扶老</option>
                          <option value="helpold"<?php if ($_smarty_tpl->tpl_vars['attribution_type']->value=='campus'){?>selected="selected"<?php }?>>校园</option>
                          <option value="competition"<?php if ($_smarty_tpl->tpl_vars['attribution_type']->value=='competition'){?>selected="selected"<?php }?>>大型赛会</option>
                          <option value="other"<?php if ($_smarty_tpl->tpl_vars['attribution_type']->value=='other'){?>selected="selected"<?php }?>>其他</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                </table>	
				<div class="breadcrumb">
                	<div class="bar-left"></div>
                    <div class="bar-title">活动时间</div>
                    <div class="bar-right"></div>
                </div>
  				<table border="1">
                <tr>
					<th>开始日期</th>
					<td>
						<input name="begin_time" class="user" value="<?php echo $_smarty_tpl->tpl_vars['begin_date']->value;?>
" type="text" id="begin_time" onClick="return showCalendar('begin_time', 'y-mm-dd');" />
					</td>
                         <td><span id="begin_time_tip" class="begin_time-tip"> </span>
						<span id="begin_time_error"></span></td>
                </tr>
                <tr>
                <th>结束日期</th>
					<td>
						<input name="end_time" class="user" value="<?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
" type="text" id="end_time" onClick="return showCalendar('end_time', 'y-mm-dd');"/>
                    </td>
                        <td><span id="end_time_tip" class="end_time_tip"></span>
						<span id="end_time_error"></span></td>
                </tr>
                <tr>
                <th>报名截止日期</th>
					<td>
							<input name="deadline" class="user" value="<?php echo $_smarty_tpl->tpl_vars['dead_date']->value;?>
" type="text" id="deadline" onClick="return showCalendar('deadline', 'y-mm-dd');"/>
                           
						</td>
                        <td><span id="deadline_tip" class="end_time_tip"></span>
						<span id="deadline_error"></span></td>
                </tr>
                <tr>
                <th>持续时间</th>
					<td>
							<input name="last_time" id="last_time" value="<?php echo $_smarty_tpl->tpl_vars['last_time']->value;?>
" class="user" type="text" placeholder="一个数字，单位是小时，例如2"  />
                    </td>
                        <td><span id="last_time_tip" class="last_time_tip"> </span>
						<span id="last_time_error"></span></td>
                </tr>
                <tr>
                <th>具体时间</th>
					<td colspan="2" style="text-align:left">
                    	<input name="weekday" type="checkbox" value="1"  <?php if ($_smarty_tpl->tpl_vars['weekday1']->value==1){?>checked<?php }?> /><label>周一</label>
                        <input name="weekday" type="checkbox" value="2"  <?php if ($_smarty_tpl->tpl_vars['weekday2']->value==1){?>checked<?php }?> /><label>周二</label>
                        <input name="weekday" type="checkbox" value="4"  <?php if ($_smarty_tpl->tpl_vars['weekday3']->value==1){?>checked<?php }?> /><label>周三</label>
                        <input name="weekday" type="checkbox" value="8"  <?php if ($_smarty_tpl->tpl_vars['weekday4']->value==1){?>checked<?php }?> /><label>周四</label>
                        <input name="weekday" type="checkbox" value="16" <?php if ($_smarty_tpl->tpl_vars['weekday5']->value==1){?>checked<?php }?> /><label>周五</label>
                        <input name="weekday" type="checkbox" value="32" <?php if ($_smarty_tpl->tpl_vars['weekday6']->value==1){?>checked<?php }?> /> <label>周六</label>
                        <input name="weekday" type="checkbox" value="64" <?php if ($_smarty_tpl->tpl_vars['weekday7']->value==1){?>checked<?php }?> /><label>周日</label>
					</td>
                </tr>
                <tr>
				<th>详细时间</th>
					<td>
							<input name="detail_time" id="detail_time" value="<?php echo $_smarty_tpl->tpl_vars['detail_time']->value;?>
"class="user" type="text" placeholder="详细描述，例如：每周五下午"/>
						</td>
						<td><span id="detail_time_error"></span></td>
                </tr>
                </table>
            
				<div class="breadcrumb">
                	<div class="bar-left"></div>
                    <div class="bar-title">活动要求</div>
                    <div class="bar-right"></div>
                </div>
                <table border="1">
                <tr>
                <th>招募人数</th>
					<td>
							<input name="total_num" id="total_num" value="<?php echo $_smarty_tpl->tpl_vars['total_num']->value;?>
" class="user" type="text" placeholder="人数，例如：20" />
						</td>
						<td><span id="total_num_error"></span></td>
                </tr>
                <tr>
                	<th>院系要求</th>
					<td style="text-align:left">
                        <input name="faculty_select" type="radio" value="true" onclick="show_faculty()"  <?php if ($_smarty_tpl->tpl_vars['facultylimit']->value==1){?>checked<?php }?>/><label>是</label>
                    	<input name="faculty_select" type="radio" value="false" onclick="hide_faculty()" <?php if ($_smarty_tpl->tpl_vars['facultylimit']->value==0){?>checked<?php }?> /><label>否</label>
                    </td>
                    <td style="white-space:nowrap; "><label>(是否只允许指定的院系志愿者参加)</label></td>
                </tr>
                <tr id="faculty_choose" <?php if ($_smarty_tpl->tpl_vars['facultylimit']->value==1){?> style="display:table-row" <?php }?> >
                    <th>&nbsp;</th>
                    <td style="text-align:left">
                        <?php  $_smarty_tpl->tpl_vars['faculty'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['faculty']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['faculty_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['faculty']->key => $_smarty_tpl->tpl_vars['faculty']->value){
$_smarty_tpl->tpl_vars['faculty']->_loop = true;
?>
                            <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['faculty']->value['name'];?>
" name="faculty_choose" <?php echo $_smarty_tpl->tpl_vars['faculty']->value['limit'];?>
 />
                            <label><?php echo $_smarty_tpl->tpl_vars['faculty']->value['name'];?>
</label><br />
                        <?php } ?>&nbsp;
                    </td>
                    <td width="220px">&nbsp;</td>
                </tr>

                <tr>
				<th>审核类型</th>
					<td>
							<select name="need_audit" id="need_audit">
							  <option value="false">报名即参加</option>
                              <option value="true">需要审核报名志愿者</option>
							</select>
						</td>
                      <td></td>
                </tr>
                <tr>
                <th>英语要求</th>
					<td style="text-align:left">
                        <input name="en_select" type="radio" value="true" onclick="show_en()"  <?php if ($_smarty_tpl->tpl_vars['englishlimit']->value==1){?>checked<?php }?>/><label>是</label>
                    	<input name="en_select" type="radio" value="false" onclick="hide_en()" <?php if ($_smarty_tpl->tpl_vars['englishlimit']->value==0){?>checked<?php }?>/><label>否</label>
					</td>
                    <td></td>
                </tr>
                <tr id="en_choose" <?php if ($_smarty_tpl->tpl_vars['facultylimit']->value==1){?>style="display:table-row"<?php }?>>
                <th></th>
                <td>
                    	CET-4大于<input id="cet4" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cet4']->value;?>
"/><br />
                        CET-6大于<input id="cet6" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cet6']->value;?>
"/>
                </td>
                <td></td>
                </tr>
                <tr>
                <th>其他语言要求</th>
					<td>
							<input name="other_language" id="other_language" value="<?php echo $_smarty_tpl->tpl_vars['other_language']->value;?>
"class="user" type="text" placeholder="德语 法语 默认为无要求"/>
						</td>
					<td></td>
                </tr>
                </table>
                <div class="breadcrumb">
                	<div class="bar-left"></div>
                    <div class="bar-title">负责同学</div>
                    <div class="bar-right"></div>
                </div>
                <table border="1">
                <tr>
				<th>姓名</th>
					<td>
							<input name="responser" id="responser"value="<?php echo $_smarty_tpl->tpl_vars['responser']->value;?>
" class="user" type="text" />
                           
						</td>
                        <td><span id="responser_tip" class="responser_tip" ></span>
						<span id="responser_error"></span></td>
                </tr>
                <tr>
                <th>电话</th>
					<td>
							<input name="responser_tel" id="responser_tel" value="<?php echo $_smarty_tpl->tpl_vars['responser_tel']->value;?>
" class="phone" type="text" />
						</td>
                        <td><span id="tel_tip" class="tel_tip"></span>
						<span id="responser_tel_error"></span></td>
					</div>
				</div>
                </tr>
                </table>
                <div class="breadcrumb">
                	<div class="bar-left"></div>
                    <div class="bar-title">策划上传</div>
                    <div class="bar-right"></div>
                </div> 


					<table border="1">
						<tr>
							<th>上传要求</th>
							<td style="text-align:left" colspan="2"><span id="plan_upload">上传文件格式为rar和zip</span></td>
						</tr>
						<tr><th>选择文件</th>
							<td style="text-align:left" colspan="2">
								<form action="./handle/upload_zip.php" method="post" enctype="multipart/form-data">
									<input type="file" name="userfile" class="fileUpload" multiple>
									<input type="hidden" name="act_id" value="<?php echo $_smarty_tpl->tpl_vars['act_id']->value;?>
">
									<button id="px-submit" type="submit" style="display:none">上传</button>
									<button id="px-clear" type="reset" style="display:none">清除</button>
								</form>
							</td>
						</tr>
						<tr>
							<th>上传操作</th>
							<td style="text-align:left" colspan="2">
								<input type="button" class="button"  value="上传"  onclick="$('#px-submit').trigger('click');" />
								<input type="button" class="button"   value="清除"  onclick="$('#px-clear').trigger('click');" />
							</td>
						</tr>
					</table>

				<div class="breadcrumb">
                	<div class="bar-left"></div>
                    <div class="bar-title">活动简介</div>
                    <div class="bar-right"></div>
                </div>


				<table border="1">
					 <tr>
						<td style="padding: 0">
							<textarea id="activity_profile" name="content" style="width:610px;height:200px;visibility:hidden;" placeholder="1500字以内" ><?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
</textarea>
						</td>
					</tr>
				 </table>

  
				<div class="control-group">
					<div class="controls">
                        <div class="button-ctrl">
                        	<lable id="act_id"style="display:none;"><?php echo $_smarty_tpl->tpl_vars['act_id']->value;?>
</lable>
                            <input name="submit" type="button" id="submit"  value="提交" />
                            <input name="preview" type="button" id="preview"  value="预览" />
                            <input name="save" type="button" id="save"  value="保存" />
                        </div>	
                    </div>
				</div>
		</div>
 
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>