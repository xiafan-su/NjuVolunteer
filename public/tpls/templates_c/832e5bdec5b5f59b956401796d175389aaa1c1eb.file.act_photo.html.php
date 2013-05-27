<?php /* Smarty version Smarty-3.1.7, created on 2013-05-27 22:55:37
         compiled from "../tpls/templates\include\act_photo.html" */ ?>
<?php /*%%SmartyHeaderCode:1354651a373e9670984-03564934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '832e5bdec5b5f59b956401796d175389aaa1c1eb' => 
    array (
      0 => '../tpls/templates\\include\\act_photo.html',
      1 => 1369665438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1354651a373e9670984-03564934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thumbnail_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a373e985687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a373e985687')) {function content_51a373e985687($_smarty_tpl) {?>
<style>
.loading-bar2{
	width:inherit;
	height:inherit;
}
.loading-cover2{
	position:relative;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background:rgba(255,255,255,0.5);
	z-index:192;
}
.loading-pic2{
	position:fixed;
	top:50%;
	left:50%;
	margin-left:-15px;
	margin-top:-15px;
	width:31px;
	height:31px;
	z-index:193;
}
</style>

<div>
	
	<div id="act_photo_full" >

		<table>
			<tr height="430px">
				<td>
					<span pic_id="-1" id="act_photo_full_img_span">
					<!-- width最大750px height最大 430px-->
						<img  src="" id="act_photo_full_img" width="750px" height="430px" border="0" title="活动图片" />
					</span>
				</td>
				<td><!--  width="122px" -->
					<div style="display:hidden;width:122px">&nbsp;</div>
					<div id="act_photo_full_img_info" class="">
						<div id="" class="">
							图片信息
						</div>
						<div id="act_photo_full_img_info_uploader" 
							class="act_photo_full_img_info_item" title="上传者" 
							user_id="">
							<!-- 
							style="cursor:pointer" onclick="window.open('./indexv.php?user_id='+$(this).attr('user_id'), '_blank');" -->
							&nbsp;上传者
						</div>
						<div id="act_photo_full_img_info_time" class="act_photo_full_img_info_item" title="上传时间" style="font-size:12px;">
							&nbsp;上传时间
						</div>
					</div>
					<div id="" class="act_photo_full_img_op">
						<div id="" class="act_photo_full_img_op_item">
							<input type="button" class="button" id="act_photo_op_cover" value="封面" onclick="set_photo_cover();" title="将此图片作为活动的封面"/>
						</div>
						<div id="" class="act_photo_full_img_op_item">
							<input type="button" id="act_photo_op_delete" class="button" value="删除" onclick="delete_act_photo();" title="删除此图片"/>
						</div>
					</div>
				</td>
			</tr>
		</table>

		
	</div>

<!-- 最多8张缩略图 -->
	<div>
		<span class=""  style="cursor:pointer;overflow:hidden;height:80px;position:absolute;left:20px;margin-top:7px" title="上一页" onclick="move_thumbnail('left');">
				<img src="./assets/img/activity_detail/photo_prev.jpg" width="20px" height="65px" border="0" />
			</span>

		<span id="thumbnail_list" class="" style="overflow:hidden;width:760px; height:80px;position:absolute;left:45px;">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['name'] = 'thumbnail_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['thumbnail_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['thumbnail_index']['total']);
?>
			<span class="act_photo_item" 
				onclick="javascript: change_full_picture(this, '<?php echo $_smarty_tpl->tpl_vars['thumbnail_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['thumbnail_index']['index']]['full_src'];?>
');" 
					id="act_photo_item_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['thumbnail_index']['iteration'];?>
"
					pic_id="<?php echo $_smarty_tpl->tpl_vars['thumbnail_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['thumbnail_index']['index']]['id'];?>
"
					uploader_id="<?php echo $_smarty_tpl->tpl_vars['thumbnail_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['thumbnail_index']['index']]['uploader_id'];?>
"
					uploader_name="<?php echo $_smarty_tpl->tpl_vars['thumbnail_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['thumbnail_index']['index']]['uploader_name'];?>
"
					uploader_time="<?php echo $_smarty_tpl->tpl_vars['thumbnail_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['thumbnail_index']['index']]['upload_time'];?>
"
					style="position:absolute; left: <?php echo ($_smarty_tpl->getVariable('smarty')->value['section']['thumbnail_index']['iteration']-1)*95;?>
px;"
				>
				<img src="<?php echo $_smarty_tpl->tpl_vars['thumbnail_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['thumbnail_index']['index']]['src'];?>
"  title="活动缩略图" />
			</span>
			<?php endfor; endif; ?>
		</span>


		<span class=""  style="cursor:pointer;overflow:hidden;height:80px;position:absolute;left:805px;margin-top:7px" title="下一页"  onclick="move_thumbnail('right');">
				<img src="./assets/img/activity_detail/photo_next.jpg" width="20px" height="65px" border="0" />
			</span>
	</div>

    <div id="loading-bar2">
        <div class="loading-cover2"></div>
        <div class="loading-pic2"><img src="./assets/img/loading/loading.gif"/></div>
    </div>
</div>

<script language="javascript">

function addImg(isrc) {
	var Img = new Image(); 
	Img.onload = function ()  {
		var WIDTH = 750, HEIGHT = 430;
		//$(Img).css("width", "200px");
		var h = Img.height, w = Img.width;
		if( Img.width/Img.height > WIDTH/HEIGHT){
			if( Img.width > WIDTH ) {
				w = WIDTH;
				h = Img.height*WIDTH/Img.width;
				$(Img).css("width", w+"px");
				$(Img).css("height", h +"px");
			}
		} else {
			if( Img.height > HEIGHT ){
				h = HEIGHT;
				w = Img.width*HEIGHT/Img.height;
				//alert( "Img.height="+Img.height+",Img.width="+Img.width+",h="+h+",w="+w );
				$(Img).css("height", h+"px");
				$(Img).css("width", w+"px");
			}
		}

		$(Img).css("margin-left",  ( WIDTH - w )/2 );
		$(Img).css("margin-top",  ( HEIGHT -h )/2 );
		$("#act_photo_full_img_span").html( Img );
		document.getElementById('loading-bar2').style.display='none';
	}
	Img.src = isrc;//顺序不能换！！！
}

function change_full_picture(elem, full_src){
	//alert( "tesr!"+full_id+","+full_src );
	document.getElementById('loading-bar2').style.display='block';
	$("#act_photo_full_img_span").attr( "pic_id", $(elem).attr("pic_id") );
	$("#act_photo_full_img_info_uploader").attr( "user_id", $(elem).attr("uploader_id") );
	$("#act_photo_full_img_info_uploader").text( $(elem).attr("uploader_name") );
	$("#act_photo_full_img_info_time").text( $(elem).attr("uploader_time") );
	//setTimeout('addImg( "'+full_src+'" )', 2000);//for testing
	addImg( full_src );
}
//var thumbnail_move_index = 0;
function move_thumbnail( dir ){
	if( dir == "left" ){
		var children = $("#thumbnail_list").children();
		for( var i = 0; i < children.length; i ++ ){
			var left = $(children[i]).position().left + 95;
			$(children[i]).animate({left:left},"slow");
		}
	} else {
		var children = $("#thumbnail_list").children();
		for( var i = 0; i < children.length; i ++ ){
			var left = $(children[i]).position().left - 95;
			$(children[i]).animate({left:left},"slow");
		}
	}
}
function set_photo_cover(){
	var pic_id = $("#act_photo_full_img_span").attr( "pic_id");
	if( ! confirm( "您确定要将此图片作为活动的封面吗？" )){ return; }
	$.ajax({
		type:"POST",
		url:"./handle/act_photo.php",
		data:{pic_id:pic_id, type:"cover"},
		success:function(html){
			if( html == 1 ){
				alert( "设置成功！" );
			} else {
				alert(html);
			}
		}
	});
}
function delete_act_photo(){
	var pic_id = $("#act_photo_full_img_span").attr( "pic_id");
	if( ! confirm( "您确定要将此图片删除吗？" )){ return; }
	$.ajax({
		type:"POST",
		url:"./handle/act_photo.php",
		data:{pic_id:pic_id, type:"delete"},
		success:function(html){
			if( html == 1 ){
				alert( "删除成功！" );
				var list = $(".act_photo_item");
				var found = false;
				var next = true;
				if( list.length == 1 ){
					$("#act_photo_full_img").attr("src", "");
					$("#act_photo_full_img").attr("width", "750px");
					$("#act_photo_full_img").attr("height", "430px");
					$("#act_photo_full_img_info_uploader").html( "&nbsp;上传者" );
					$("#act_photo_full_img_info_time").html( "&nbsp;上传时间" );
					$("#act_photo_op_delete").prop( "disabled", true );
					$("#act_photo_op_cover").prop( "disabled", true );
				}
				for( var i = 0; i < list.length; i ++ ){
					if( found ) {
						var left = $(list[i]).position().left - 95;
						$(list[i]).animate({left:left},"slow");
						if( next ){
							next = false;
							$(list[i]).trigger("click");
						}
					} else {
						if( $(list[i]).attr("pic_id") == pic_id ){//找到要删除的item
							$(list[i]).remove();
							found = true;
						}
					}
				}
			} else {
				alert(html);
			}
		}
	});
}


</script><?php }} ?>