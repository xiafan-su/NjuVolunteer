<?php

/*文件路径
./include/php/basic.php
*/

//mark $_SERVER['DOCUMENT_ROOT']

/***********************************************
	以下对应数据库中的字段，用于session索引，有些变量可能不会用到，
	但暂且先定义着，如$_user_password
***********************************************/
$_user_id = "user_id";
$_user_password = "user_password";
$_user_permission = "user_permission";
$_user_last_login = "user_last_login";
$_user_login_num = "user_login_num";
$_user_gender = "user_gender";
$_user_name = "user_name";
$_user_faculty = "user_faculty";
$_user_faculty_id = "user_faculty_id";
$_user_department = "user_department";
$_user_email = "user_email";
$_user_phone = "user_phone";
$_user_volunnteer_time = "user_volunnteer_time";
$_user_qq = "user_qq";
$_user_city = "user_city";
$_user_grade = "user_grade";

$_act_id = "activity_id";
$_act_name = "activity_name";
$_act_responser_tel = "act_responser_tel";
$_act_begin_time = "act_begin_time";
$_act_end_time = "act_end_time";
$_act_last_time = "act_last_time";
$_act_profile = "act_profile";
$_act_total_num = "act_total_num";
$_act_accepted_num = "act_accepted_num";
$_act_offer_num = "act_offer_num";
$_act_state = "act_state";
$_act_requirements = "act_requirements";
$_act_summary = "act_summary";
$_act_time_type = "act_time_type";
$_act_attribution_type = "act_attribution_type";
$_act_need_audit = "act_need_audit";
$_act_deadline = "act_deadline";
$_act_place = "act_place";
$_act_publisher = "act_publisher";

/*
当登录之后会保存以下session变量，请修改所有session的索引，使用以上定义的变量！
$_SESSION[ $_user_id ]
$_SESSION[ $_user_name ]
$_SESSION[ $_user_permission ]
*/

//up = user permmission, r = root, t = team, v = volunteer
$_up_r = 'Administrator'; 
$_up_t = 'Organizer';
$_up_v = 'Visitor';

/***********************************************
以下是数据库枚举变量enumeration对应的文字
as = activity state
***********************************************/
$_as_editing = 'editing';
$_as_auditing = 'auditing';
$_as_recruting = 'recruting';//对应原数据库中audited
$_as_returned = 'returned';
$_as_holding = 'holding';//举办中
$_as_closed = 'closed';
$_e_as[ $_as_editing ] = "编辑中";
$_e_as[ $_as_auditing ] = "审核中";
$_e_as[ $_as_recruting ] = "招募中";
$_e_as[ $_as_returned ] = "被退回";//说明此活动审核未通过，且活动发布者未对该活动重新编辑
$_e_as[ $_as_closed ] = "已结束";

//att = activity time type
$_att_last = 'longtime';
$_att_temp = 'temp';
$_e_att[ $_att_last ] = "长期";
$_e_att[ $_att_temp ] = "短期";
//e.g.  echo $_e_att[ $AAA[  ]  ];

//aat = activity attibution type
$_aat_hd = 'helpdisabled';
$_aat_se = 'supporteducation';
$_e_aat[ $_aat_hd ] = "助残";
$_e_aat[ $_aat_se ] = "支教";

$_e_boolean['true'] = "是";
$_e_boolean['false'] = "否";

/*
【mark】
数据库应该还有一张院系表，一张省市表，一张年级选择表，
一张"活动记录表"：
记录id， 活动id，活动具体时间，活动具体地点

修改原"活动记录表"为"志愿者服务记录表"：
志愿者id，记录id，服务时长，备注

审核通过是否立即发布活动？

【suggestions】
1.活动报名表添加"志愿者报名时间"字段；
*/


/*
注意：
1.	关于头部的逻辑统一封装到header.php，其他页面只需require('include/php/header.php');就行了，至于是
	使用header_v.php还是header_t.php还是header_r.php由header.php根据
	session中用户权限判断；关于是否需要这3个header还有待讨论。

2.	这两天的任务：
	2.1	完成活动注册/编辑/修改页面activity/edit.php【夏凡】，包括保存、预览、提交功能；
	2.2	完成活动详细/预览页面activity/detail.php【我>_<】，包括页面左部(activity/detail_left.php【夏畅】)
			的活动图片及操作按钮（参与、编辑、审核等），右部的报名情况表activity/handle/act_people.php【肖耿】，
			以及弹出的志愿者服务记录activity/handle/exp_people.php【陈若瑶】；
	2.3	完成活动列表及查询页面activity.php【妖精】，包括activity_search.php【妖精】、activity_list.php【master】；
	2.4	完成以上页面的排版include/css/activity.css【段文娜】。
	ps	1	活动搜索提供"待审核"复选框(超管用)，其他要求见上传的图。
			2	分工不合理，自己微调。

3.	所有关于活动的js代码最后(注意：是最后，也就是第三阶段)将集成到文件include/js/activity.js，
	所有关于活动的css代码最后将集成到文件include/css/activity.css。【《别具光芒css案例分析》好好看】
	关于html中的id，class命名注意不要冲突，尽量个性化。

4.	 其他页面有待重写，暂不上传。

*/
?>