<?php /* Smarty version Smarty-3.1.7, created on 2013-05-11 20:50:30
         compiled from "./tpls/templates\act_dtl.html" */ ?>
<?php /*%%SmartyHeaderCode:91615177d2ae9126f8-24185650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99f4b94be72815d91c8e383d421150d80b9d5a7f' => 
    array (
      0 => './tpls/templates\\act_dtl.html',
      1 => 1368238864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91615177d2ae9126f8-24185650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5177d2ae98861',
  'variables' => 
  array (
    'id' => 0,
    'act_title' => 0,
    'act_state' => 0,
    'act_begin_time' => 0,
    'act_end_time' => 0,
    'last_time' => 0,
    'act_time_type' => 0,
    'act_attr_type' => 0,
    'act_place' => 0,
    'act_profile' => 0,
    'comment_detail' => 0,
    'act_comment' => 0,
    'act_same' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5177d2ae98861')) {function content_5177d2ae98861($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/act_dtl.css" rel="stylesheet" />

<script charset="utf-8" src="./plugin/kindeditor-4.1.5/kindeditor-min.js"></script>
<script charset="utf-8" src="./plugin/kindeditor-4.1.5/lang/zh_CN.js"></script>

<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>


<title>活动详细页面</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<input type="button" id="act_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="display:none" />


<div class="main">
	<div id="left">
        <?php echo $_smarty_tpl->getSubTemplate ("include/act_dtl_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
 --- <?php echo $_smarty_tpl->tpl_vars['act_end_time']->value;?>
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
                </ul>
            </div>
        </div>
        <div id="act_detail" class="div">
            <div class="div_title2"><div>活动介绍</div></div>
            <div id="act_introduction">
				<?php echo $_smarty_tpl->tpl_vars['act_profile']->value;?>

			</div>
            
            <ul class="div_title2"><li>评论</li></ul>
            <br>
            <table>
            <tr><th>评论人学号</th><th>评论人</th><th>评论时间</th><th>评论</th><th>回复</th>
            
           	<?php  $_smarty_tpl->tpl_vars['act_comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act_comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment_detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act_comment']->key => $_smarty_tpl->tpl_vars['act_comment']->value){
$_smarty_tpl->tpl_vars['act_comment']->_loop = true;
?>
            <tr class="even">
            <td><?php echo $_smarty_tpl->tpl_vars['act_comment']->value['id'];?>
</td>
            <td><a href="http://www.baidu.com" target="_blank"><?php echo $_smarty_tpl->tpl_vars['act_comment']->value['name'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['act_comment']->value['time'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['act_comment']->value['content'];?>
</td>
            <td class="reply">回复</td>
            </tr>
            <?php } ?>
            </table>
            </br>
            <ul class="div_title2"><li>提交自己的评论</li></ul>
        	<br></br>
            
     		<div id="comment_area">
				<textarea id="comment_input" name="com_content" style="width:590px;height:200px;visibility:hidden;" ></textarea>
			</div>
      		<div class="control-group">
				<div class="controls">
				<input name="com_submit" class="button" id="submit_comment"  value="评论" />
				</div>
			</div>
            
            <div class="div_title2"><div>参加过这项活动的人还参加了</div>
            <br>
            <table id="act_people_table" class="act_people_table">
            <tr><th>名称</th><th>负责人</th></tr>
            <?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act_same']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['data']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['data']['iteration']++;
?>
            <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['data']['iteration']%2==0)){?>
            <tr class="even">
            <?php }else{ ?>
            <tr class="odd">
            <?php }?>
            <td><span><a href="http://www.baidu.com" target="_blank"><?php echo $_smarty_tpl->tpl_vars['act']->value['name'];?>
</a></span></td>
            <td><span><?php echo $_smarty_tpl->tpl_vars['act']->value['responser'];?>
</span></td>
            </tr>
            <?php } ?>
            </table>
            </br>
        	</div>
            <div id="act_same"  class="div_content"></div>
        </div>
		<div id="" class="clearBar">&nbsp;</div>
        
    </div><!-- 结束right div -->
</div>

<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
<script type="text/javascript" src="./assets/js/act_dtl.js"></script>
</html><?php }} ?>