<?php /* Smarty version Smarty-3.1.7, created on 2013-05-18 23:00:35
         compiled from "../tpls/templates\handle\week_act_list.html" */ ?>
<?php /*%%SmartyHeaderCode:24165197715c1a1ac9-68177459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73bf2702b43c814ae6c0d9d1857afb4051b4492f' => 
    array (
      0 => '../tpls/templates\\handle\\week_act_list.html',
      1 => 1368889232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24165197715c1a1ac9-68177459',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5197715c53de3',
  'variables' => 
  array (
    'retlist' => 0,
    'weekact' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5197715c53de3')) {function content_5197715c53de3($_smarty_tpl) {?><div class="title">
   <div class="hotact-left"></div>
    <h3 style="float:left;font-size:24px;padding-top:10px;color:rgb(102,51,102)">本周活动</h3>
    <div class="hotact-right"></div>
</div>
<div style="padding-top:3px;padding-bottom:3px;background-color:#333"></div>
<div class="weekdate-cover">
	<div class="weekdate" id="day1"></div>
    <div class="weekdate" id="day2"></div>
    <div class="weekdate" id="day3"></div>
    <div class="weekdate" id="day4"></div>
    <div class="weekdate" id="day5"></div>
    <div class="weekdate" id="day6"></div>
    <div class="weekdate" id="day7"></div>
</div>
<?php  $_smarty_tpl->tpl_vars['weekact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['weekact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['retlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['weekact']->key => $_smarty_tpl->tpl_vars['weekact']->value){
$_smarty_tpl->tpl_vars['weekact']->_loop = true;
?>

<div class="weeka">
    <div class="act-content">
    
        <a href="act_dtl.php? act_id=<?php echo $_smarty_tpl->tpl_vars['weekact']->value['id1'];?>
"><?php echo $_smarty_tpl->tpl_vars['weekact']->value['name1'];?>
</a>
        </br>
        <?php if (isset($_smarty_tpl->tpl_vars['weekact']->value['detail_time1'])){?>
        <span>时间:<?php echo $_smarty_tpl->tpl_vars['weekact']->value['detail_time1'];?>
</span>
        <?php }?>
        </br>
        <?php if (isset($_smarty_tpl->tpl_vars['weekact']->value['deadline1'])){?>
        <span>报名截止:<?php echo $_smarty_tpl->tpl_vars['weekact']->value['deadline1'];?>
</span>
        <?php }?>
    </div>
    <div style="width:120px;height:2px;background:#666;float:left"></div>
    <div class="act-content">
        <a href="act_dtl.php? act_id=<?php echo $_smarty_tpl->tpl_vars['weekact']->value['id2'];?>
"><?php echo $_smarty_tpl->tpl_vars['weekact']->value['name2'];?>
</a>
        </br>
        <?php if (isset($_smarty_tpl->tpl_vars['weekact']->value['detail_time2'])){?>
        <span>时间:<?php echo $_smarty_tpl->tpl_vars['weekact']->value['detail_time2'];?>
</span>
        <?php }?>
        </br>
        <?php if (isset($_smarty_tpl->tpl_vars['weekact']->value['deadline2'])){?>
        <span>报名截止:<?php echo $_smarty_tpl->tpl_vars['weekact']->value['deadline2'];?>
</span>
        <?php }?>
    </div>
</div>
<?php } ?>

<?php }} ?>