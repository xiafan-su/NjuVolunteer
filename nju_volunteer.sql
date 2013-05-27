/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50151
Source Host           : localhost:3306
Source Database       : nju_volunteer

Target Server Type    : MYSQL
Target Server Version : 50151
File Encoding         : 65001

Date: 2013-05-27 20:52:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `3d_data`
-- ----------------------------
DROP TABLE IF EXISTS `3d_data`;
CREATE TABLE `3d_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `url` varchar(40) NOT NULL,
  `info` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of 3d_data
-- ----------------------------
INSERT INTO `3d_data` VALUES ('92', '2013-05-27 20:24:37', '51a350823cbe9.jpg', null);
INSERT INTO `3d_data` VALUES ('93', '2013-05-27 20:25:26', '51a350b2e595c.jpg', null);
INSERT INTO `3d_data` VALUES ('94', '2013-05-27 20:26:07', '51a350dbe87be.jpg', null);
INSERT INTO `3d_data` VALUES ('95', '2013-05-27 20:26:14', '51a350e39c1a4.jpg', null);
INSERT INTO `3d_data` VALUES ('96', '2013-05-27 20:27:29', '51a3512e219a9.jpg', null);
INSERT INTO `3d_data` VALUES ('97', '2013-05-27 20:28:00', '51a3514d8e809.jpg', null);
INSERT INTO `3d_data` VALUES ('98', '2013-05-27 20:28:03', '51a35150bf95e.jpg', null);
INSERT INTO `3d_data` VALUES ('99', '2013-05-27 20:29:09', '51a35192b254e.jpg', null);
INSERT INTO `3d_data` VALUES ('100', '2013-05-27 20:29:37', '51a351ae89361.jpg', null);
INSERT INTO `3d_data` VALUES ('101', '2013-05-27 20:30:19', '51a351d8a54b4.jpg', null);
INSERT INTO `3d_data` VALUES ('102', '2013-05-27 20:30:53', '51a351fa65bcc.jpg', null);
INSERT INTO `3d_data` VALUES ('103', '2013-05-27 20:31:18', '51a35213a0a37.jpg', null);
INSERT INTO `3d_data` VALUES ('104', '2013-05-27 20:31:21', '51a35216c4a76.jpg', null);
INSERT INTO `3d_data` VALUES ('105', '2013-05-27 20:32:11', '51a3524815e2b.jpg', null);
INSERT INTO `3d_data` VALUES ('106', '2013-05-27 20:32:56', '51a352752096f.jpg', null);

-- ----------------------------
-- Table structure for `activity_info`
-- ----------------------------
DROP TABLE IF EXISTS `activity_info`;
CREATE TABLE `activity_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL COMMENT '活动名称',
  `responser` char(50) DEFAULT NULL COMMENT '活动负责人姓名',
  `responser_tel` decimal(20,0) DEFAULT NULL COMMENT '联系人电话',
  `begin_time` datetime DEFAULT NULL COMMENT '活动开始时间（日期）',
  `end_time` datetime DEFAULT NULL COMMENT '活动结束时间（日期）',
  `last_time` int(11) unsigned DEFAULT NULL COMMENT '持续时间（小时）',
  `profile` text,
  `total_num` int(11) unsigned DEFAULT NULL COMMENT '计划招募人数',
  `accepted_num` int(11) DEFAULT '0' COMMENT '已经招募(审核已通过)人数',
  `offer_num` int(11) DEFAULT '0' COMMENT '待审核人数',
  `state` enum('auditing','audited','end','editing') DEFAULT 'audited' COMMENT '审核中，审核通过，编辑中',
  `requirements` varchar(300) DEFAULT NULL COMMENT '活动要求',
  `summary` varchar(3000) DEFAULT NULL,
  `time_type` enum('temp','longtime') DEFAULT NULL COMMENT '长期活动还是临时活动',
  `attribution_type` enum('helpdisabled','other','competition','helpold','campus','supporteducation') DEFAULT NULL,
  `need_audit` enum('false','true') DEFAULT NULL COMMENT 'true为需要审核参加人员，false。。',
  `deadline` datetime DEFAULT NULL COMMENT '报名截止日期',
  `place` char(50) DEFAULT NULL COMMENT '活动地点',
  `publisher` char(20) DEFAULT NULL COMMENT '负责人姓名',
  `detail_time` char(50) DEFAULT NULL,
  `weekday_time` int(11) DEFAULT NULL,
  `cet4` int(11) DEFAULT '0' COMMENT '活动对四级成绩的要求，为0表示无要求',
  `cet6` int(11) DEFAULT '0' COMMENT '同cet4',
  `plan_url` char(255) DEFAULT NULL COMMENT '存放策划的路径',
  `apply_date_hash` char(255) DEFAULT NULL COMMENT '申请活动前，先获取一个id，由这个hash来唯一确定',
  `faculty_limit` text,
  `other_language` char(255) DEFAULT NULL,
  `cover_pic` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `Publisher` (`publisher`) USING BTREE,
  CONSTRAINT `tpub` FOREIGN KEY (`publisher`) REFERENCES `team` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=225 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of activity_info
-- ----------------------------
INSERT INTO `activity_info` VALUES ('215', '“光盘行动”进校园', '林觉慈', '15365186503', '2013-02-28 00:00:00', '2013-02-28 00:00:00', '3', '&lt;p class=&quot;p0&quot;&gt;\n	&amp;nbsp; &amp;nbsp; &amp;nbsp; 为倡导节约，保护环境，鼓楼青协，仙林青协，与社联联手打造“光盘行动”，倡导大家不浪费粮食，吃完所打的饭菜。活动当天，一部分志愿者在食堂门口发放环保餐盒，鼓励大家将吃不完的饭菜带回宿舍，另一部分志愿者在食堂内部打饭窗口以及回收托盘的地方张贴宣传海报，其内容为“光盘行动”进校园。\n&lt;/p&gt;', '10', '0', '0', 'auditing', null, null, 'temp', 'other', 'false', '2013-02-28 23:59:59', '南京大学仙林校区', 'NJU000', '一天', '8', '0', '0', null, '2013-05-27 19:45:20 5', '', '', '51a3512e219a9.jpg');
INSERT INTO `activity_info` VALUES ('216', '南京大学自强社爱心包裹活动', '谢同学', '15950583113', '2013-04-11 00:00:00', '2013-05-31 00:00:00', '2', '&lt;p style=&quot;margin-left:0cm;background:white;&quot;&gt;\n	&amp;nbsp; &amp;nbsp; &amp;nbsp; 爱心包裹是由中国扶贫基金会和中国邮政联合举办的大型公益活动，组织大学生志愿者利用周末时间在邮局周边开展爱心包裹劝募，为贫困地区的小学生提供学习和生活的帮助。志愿者通过参与活动，增强面对挫折的抗打击能力，增强与陌生人沟通和表达的能力，增强对公益慈善和社会的了解，增强领导力和团队组织能力，得到高校师生的一致认可。\n&lt;/p&gt;\n&lt;p style=&quot;margin-left:0cm;background:white;&quot;&gt;\n	&amp;nbsp; &amp;nbsp; &amp;nbsp; 本次活动意义在于通过动员大学生志愿服务，以爱心包裹项目为载体，传播人人可公益理念，汇聚爱的力量，并让大学生志愿者在志愿服务、奉献爱心的过程中接触社会、锻炼自我。\n&lt;/p&gt;\n&lt;p style=&quot;margin-left:0cm;background:white;&quot;&gt;\n	&amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;今年我们劝募的包裹类型主要有&lt;strong&gt;100&lt;/strong&gt;&lt;strong&gt;元文具包&lt;/strong&gt;，&lt;strong&gt;200&lt;/strong&gt;&lt;strong&gt;元生活包（定向雅安灾区小学生&lt;/strong&gt;）等。\n&lt;/p&gt;\n&lt;p style=&quot;margin-left:0cm;background:white;&quot;&gt;\n	&lt;br /&gt;\n&lt;/p&gt;\n&lt;p style=&quot;margin-left:0cm;background:white;&quot;&gt;\n	&lt;br /&gt;\n&lt;/p&gt;\n&lt;p style=&quot;margin-left:0cm;background:white;&quot;&gt;\n	参与方式：\n&lt;/p&gt;\n&lt;p style=&quot;margin-left:0cm;background:white;&quot;&gt;\n	&amp;nbsp; &amp;nbsp; &amp;nbsp; 发送短信“姓名+院系+年级+联系方式”至谢同学&lt;u&gt;15950583113&lt;/u&gt; \n&lt;/p&gt;\n&lt;p style=&quot;margin-left:0cm;background:white;&quot;&gt;\n	&amp;nbsp; &amp;nbsp; &amp;nbsp; 志愿者可以选择希望进行劝募的网点。不是每周必须参加，只要有空的周六或周日都可以报名参加（每周我们会发短信进行本周末的报名统计），另外&lt;strong&gt;也可以组团参加活动&lt;/strong&gt;哦。\n&lt;/p&gt;\n&lt;p&gt;\n	&lt;br /&gt;\n&lt;/p&gt;', '0', '0', '0', 'auditing', null, null, 'temp', 'helpdisabled', 'false', '2013-05-31 23:59:59', '新街口、明故宫、广州路、万达广场', 'NJU000', '2013年4月中旬到5月底，每周六、周日', '0', '0', '0', null, '2013-05-27 19:50:40 67', '', '', '51a3514d8e809.jpg');
INSERT INTO `activity_info` VALUES ('217', '农村孤儿助养项目', '无', '0', '2013-05-27 00:00:00', '2013-05-27 00:00:00', '4', '&lt;p class=&quot;MsoNormal&quot;&gt;\n	&amp;nbsp; &amp;nbsp; &amp;nbsp; 孤儿们每学期寄来他们的成绩单,学期报告和生活报告,我们负责将他们寄来的材料扫面录入到电脑里,并翻译成英文.部分志愿者会去探望孤儿.\n&lt;/p&gt;', '0', '0', '0', 'auditing', null, null, 'longtime', 'other', 'false', '2013-05-27 23:59:59', '江苏省南京市鼓楼区爱德基金会', 'NJU000', '', '0', '0', '0', null, '2013-05-27 19:55:01 82', '', '', '51a35192b254e.jpg');
INSERT INTO `activity_info` VALUES ('218', '平安阿福2013年度台历义卖活动', '某同学', '13655167591', '2013-12-24 00:00:00', '2013-12-25 00:00:00', '4', '&lt;p style=&quot;margin-left:0cm;background:white;&quot;&gt;\n	&amp;nbsp; &amp;nbsp; &amp;nbsp; 《南京一夜》暂定12月24日平安夜和12月25日圣诞夜晚上在各大热闹卖场（如新街口莱迪、湖南路、紫峰大厦等多个地方）举行一年一度的2013年度平安阿福台历义卖活动，现需要召集当晚能够帮忙参加义卖的学生义工，活动形式是一所学校的同学负责一个地方的义卖活动（负责地方根据报名情况待分配），欢迎有意参加义卖活动的学生积极报名，&lt;strong&gt;能有学校社团团体报名更优或者能联系上学校某社团组织参加更好，当然也欢迎广大同学个人报名参加，&lt;/strong&gt;平安阿福的狗狗猫猫有广大学生同胞的支持和帮忙才更加完美。\n&lt;/p&gt;\n&lt;p style=&quot;margin-left:0cm;background:white;&quot;&gt;\n	&lt;br /&gt;\n&lt;/p&gt;\n&lt;p style=&quot;margin-left:0cm;background:white;&quot;&gt;\n	&lt;br /&gt;\n&lt;/p&gt;\n&lt;p style=&quot;margin-left:0cm;background:white;&quot;&gt;\n	&lt;strong&gt;报名格式：&lt;/strong&gt;姓名+联系方式+学校（校区）+日期（平安夜or圣诞夜or两晚都可以），报名热线：13655167591短信or电话\n&lt;/p&gt;\n&lt;p&gt;\n	&lt;br /&gt;\n&lt;/p&gt;', '20', '0', '0', 'auditing', null, null, 'temp', 'other', 'false', '2013-12-24 23:59:59', '新街口莱迪、湖南路、紫峰大厦等', 'NJU000', '12月24日平安夜和12月25日圣诞夜晚上', '0', '0', '0', null, '2013-05-27 19:56:49 57', '', '', '51a351ae89361.jpg');
INSERT INTO `activity_info` VALUES ('219', '朝天宫民族小学七彩课堂主题班会', '蔡惠', '18260082752', '2011-12-01 00:00:00', '2014-12-01 00:00:00', '1', '&lt;p class=&quot;MsoNormal&quot;&gt;\n	&amp;nbsp; &amp;nbsp; &amp;nbsp; 选择有趣的科技、人文等知识，组织相关专业志愿者进行主题班会素质拓展。其他志愿者协助讲师志愿者做好课程准备、维持课堂秩序、学员管理、协助教学点开展日常教学工作。 &lt;span&gt;&lt;/span&gt; \n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	&lt;br /&gt;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	&lt;p class=&quot;MsoNormal&quot;&gt;\n		活动要求：以多种多样的主题，帮助小朋友学到更多的科学知识。&lt;span&gt;&lt;/span&gt;\n	&lt;/p&gt;\n&lt;/p&gt;', '10', '0', '0', 'auditing', null, null, 'longtime', 'supporteducation', 'false', '2014-12-01 23:59:59', '南京市朝天宫小学', 'NJU000', '朝天宫小学周三下午第一节课', '4', '0', '0', null, '2013-05-27 19:59:53 91', '', '有专业知识或技能，比如气象、生物、化学、医学、跆拳道等', '51a351d8a54b4.jpg');
INSERT INTO `activity_info` VALUES ('220', '锁金村临终关怀活动', '王同学', '15895879228', '2012-12-04 00:00:00', '2014-12-04 00:00:00', '2', '&lt;p class=&quot;MsoNormal&quot;&gt;\n	冬天了 万物凋零&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	他们&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	也走到了他们生命中的冬天&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	他们中有的已经无法开口说话&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	他们中有的已经无法下床行走&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	然而他们都守着一间空荡荡的小屋！&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	有心的人会发现&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	很多老人都熬不过冬天&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	我想 没有人愿意&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	任劳任怨了一生&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	在自己即将告别这个世界的时候&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	床畔榻下空无一&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	只要一个上午或下午&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	从繁重枯燥的学习书海中逃离&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	去那世外桃源驰骋心绪&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	静静地陪在她身边&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	陪她看窗外的枯树&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	陪她唱一支小曲&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	让她知道&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	有你&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	这个世界她不孤单&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	也许&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	前几次你毫无回报&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	但是&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	当她接受你的时候&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	心中的成就感会满溢&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	也许&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	你五音不全\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	&amp;nbsp;但是&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	她会轻声告诉你&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	你唱的比谁都好听&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	或许&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	我们在陪他们走&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	人生路上的最后一条路&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	或许&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	他们临走之际&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	一个微笑&amp;nbsp;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	已经足够\n&lt;/p&gt;', '30', '0', '0', 'auditing', null, null, 'temp', 'other', 'false', '2014-12-04 23:59:59', '锁金村社区养老服务中心', 'NJU000', '周一至周五任意时段', '31', '0', '0', null, '2013-05-27 20:03:24 68', '', '', '51a351fa65bcc.jpg');
INSERT INTO `activity_info` VALUES ('221', '校区信使 鼓楼——仙林物品传递专线', '青协值班人员', '15900000000', '2013-03-18 00:00:00', '2013-06-06 00:00:00', '2', '&lt;p class=&quot;MsoNormal&quot;&gt;\n	&lt;img src=&quot;/Njuvolunteer/public/plugin/kindeditor-4.1.5/attached/image/20130527/20130527201405_49896.png&quot; width=&quot;18&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt; \n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot; style=&quot;vertical-align:baseline;&quot;&gt;\n	&lt;span style=&quot;font-family:宋体;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; 为服务两校区办学，方便南大新老校区间物品传递，节省人力物力等资源，共&lt;span&gt;&lt;/span&gt;&lt;/span&gt; \n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot; style=&quot;vertical-align:baseline;&quot;&gt;\n	&lt;span style=&quot;font-family:宋体;&quot;&gt;青团南京大学委员会、南京大学后勤服务中心、南京大学青年志愿者协会共同推出了&lt;span&gt;NJU &lt;/span&gt;&lt;/span&gt; \n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot; style=&quot;vertical-align:baseline;&quot;&gt;\n	&lt;span style=&quot;font-family:宋体;&quot;&gt;Campus\nExpress “&lt;/span&gt;&lt;span style=&quot;font-family:宋体;&quot;&gt;校区信使&lt;span&gt;”&lt;/span&gt;鼓楼&lt;span&gt;——&lt;/span&gt;仙林物品传递专线，借助两校区的青协办公室与往&lt;span&gt;&lt;/span&gt;&lt;/span&gt; \n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot; style=&quot;vertical-align:baseline;&quot;&gt;\n	&lt;span style=&quot;font-family:宋体;&quot;&gt;返鼓楼仙林的校车，由南大的志愿者们作为&lt;span&gt;“&lt;/span&gt;校区摆渡人&lt;span&gt;”&lt;/span&gt;，为南大校区间的物品传递提&lt;span&gt;&lt;/span&gt;&lt;/span&gt; \n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot; style=&quot;vertical-align:baseline;&quot;&gt;\n	&lt;!--[if gte vml 1]&gt;&lt;![endif]--&gt;&lt;!--[if !vml]--&gt;&lt;img width=&quot;649&quot; height=&quot;104&quot; src=&quot;file://C:/Users/tqc/AppData/Local/Temp/msohtmlclip1/01/clip_image002.jpg&quot; /&gt;&lt;!--[endif]--&gt;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	&lt;span style=&quot;font-family:宋体;&quot;&gt;&lt;/span&gt; \n&lt;/p&gt;\n&lt;p&gt;\n	&lt;br /&gt;\n&lt;/p&gt;', '10', '0', '0', 'auditing', null, null, 'longtime', 'helpold', 'false', '2013-06-06 23:59:59', '南京大学仙林校区大学生活动中心401青协办公室 南京大学鼓楼校区大学生活动中心1楼青协办公室', 'NJU000', '3月18日-6月6日每周一至周四', '15', '0', '0', null, '2013-05-27 20:08:07 67', '', '', '51a35216c4a76.jpg');
INSERT INTO `activity_info` VALUES ('222', '玄武区红山街道残疾人帮扶中心志愿', '臧同学', '15950579918', '2013-03-08 00:00:00', '2015-03-08 00:00:00', '4', '&lt;p class=&quot;MsoNormal&quot;&gt;\n	&amp;nbsp; &amp;nbsp; &amp;nbsp; 我们时常抱怨生活不公与世态炎凉，总以为自己受到了这个世界的冷落。亲爱的同学，当你在命运的拐点处哀叹愤懑之时，你可知道，这世间还有一群被封印的天使。他们如同夜空中孤寂的恒星，散发着只有他们自己懂得的光芒；他们如同溪边啜饮的小鹿，抬起一双纯真的黑眸，却常被人冷漠伤害；他们如同暮春迟开的花朵，独在枝头，只有自己也说不出的寂寞无助。是的，他们，他们没有很好的智力，甚至不懂言语、控制不住行动，但是他们懂得你的好，你的善，他们是那样全心依赖着你的大爱，就如同你是他们的一切。&lt;span&gt;&lt;/span&gt;\n&lt;/p&gt;', '50', '0', '0', 'auditing', null, null, 'longtime', 'helpdisabled', 'false', '2015-03-08 23:59:59', '红山街道残疾人帮扶中心', 'NJU000', '下午1点到4点', '16', '0', '0', null, '2013-05-27 20:19:05 21', '', '', '51a3524815e2b.jpg');
INSERT INTO `activity_info` VALUES ('223', '走进社区•云南路社区爱心家教', '王社扣', '13770836581', '2013-03-09 00:00:00', '2015-03-09 00:00:00', '2', '&lt;p class=&quot;MsoNormal&quot; style=&quot;text-indent:24.0pt;&quot;&gt;\n	“走进社区·云南路社区爱心家教”志愿服务活动&lt;span&gt;,&lt;/span&gt;自&lt;span&gt;2006&lt;/span&gt;年&lt;span&gt;11&lt;/span&gt;月份第一次开展活动以来，已历经六载春秋。志愿服务的初衷是服务社区百姓，凭借优质的学业辅导提高社区孩子的学习兴趣和学习成绩。志愿者根据自己所擅长的科目为社区学生提供有针对性的辅导，借此机会同样为志愿者提供了一个自我锻炼的平台。&lt;span&gt;&lt;/span&gt;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot; style=&quot;text-indent:24.0pt;&quot;&gt;\n	活动地点为云南路社区办公楼内，项目组已经和云南路社区、青岛路社区达成长期合作，由最初的非定期社区志愿服务演变为每周固定的志愿服务，活动时间为每周末&lt;span&gt;2&lt;/span&gt;点至&lt;span&gt;4&lt;/span&gt;点之间。考虑到小朋友的年级不同、接受能力不同，志愿者必须根据所帮扶小朋友的特点因材施教。特别是针对中学生，我们会挑选出一些所学专业与辅导科目对口的志愿者为其辅导。对于小学生，他们学习科目较少，学习压力也比较小，志愿者们通常会采取一些寓教于乐的方式来对小朋友进行帮助。&lt;span&gt;&lt;/span&gt;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot; style=&quot;text-indent:24.0pt;&quot;&gt;\n	此外我们还会开展各种相关的主题课，如端午节特别策划——传承文明、感恩端午等活动。活动通过各种游戏的形式进行展开，可以让孩子们学得开心，学得快乐。&lt;span&gt;&lt;/span&gt;\n&lt;/p&gt;\n&lt;p class=&quot;MsoNormal&quot;&gt;\n	&lt;span&gt;&amp;nbsp;&lt;/span&gt;\n&lt;/p&gt;', '6', '0', '0', 'auditing', null, null, 'longtime', 'supporteducation', 'false', '2015-03-09 23:59:59', '鼓楼区云南路社区活动室', 'NJU000', '每周末下午2:00—4:00（重大节假日除外）', '96', '0', '0', null, '2013-05-27 20:20:37 45', '', '', '51a350b2e595c.jpg');
INSERT INTO `activity_info` VALUES ('224', '走近宁声', '赵亚芳', '15105191034', '2013-03-12 00:00:00', '2013-06-20 00:00:00', '2', '&lt;p class=&quot;MsoNormal&quot;&gt;\n	&amp;nbsp; &amp;nbsp; &amp;nbsp; 宁声听力康复中心位于鼓楼区峨嵋岭，每学期都有十几个幼儿园小朋友。我们的活动时间一般为每周四下午。我们主要陪小朋友们做游戏，一方面希望给小朋友更多快乐，另一方面希望玩游戏的同时对小朋友听力康复起到积极的作用。除了传统的涂色，画画，拼图，折纸等，我们还会教一些简单的词汇，辨认各种简单的声音。天气晴朗的时候，还会带小朋友去公园玩。&lt;span&gt;&lt;/span&gt;\n&lt;/p&gt;', '6', '0', '0', 'auditing', null, null, 'longtime', 'other', 'false', '2013-06-20 23:59:59', '宁声听力康复中心', 'NJU000', '每周四2：30 – 4：30', '8', '0', '0', null, '2013-05-27 20:22:46 47', '', '', '51a352752096f.jpg');

-- ----------------------------
-- Table structure for `act_comment`
-- ----------------------------
DROP TABLE IF EXISTS `act_comment`;
CREATE TABLE `act_comment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` char(20) NOT NULL,
  `act_id` int(11) unsigned NOT NULL,
  `resp_id` char(20) DEFAULT NULL,
  `comment` text NOT NULL,
  `time` datetime NOT NULL COMMENT '活动评论时间',
  PRIMARY KEY (`id`),
  KEY `aeuser_id` (`user_id`),
  KEY `aeact_id` (`act_id`),
  KEY `aeresp_id` (`resp_id`),
  CONSTRAINT `aeact_id` FOREIGN KEY (`act_id`) REFERENCES `activity_info` (`id`),
  CONSTRAINT `aeuser_id` FOREIGN KEY (`user_id`) REFERENCES `login` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of act_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `act_doc`
-- ----------------------------
DROP TABLE IF EXISTS `act_doc`;
CREATE TABLE `act_doc` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `act_id` int(11) unsigned zerofill NOT NULL,
  `leader` char(20) DEFAULT NULL COMMENT '带队人',
  `profile` text,
  `summary` text,
  `tel` decimal(20,0) DEFAULT NULL COMMENT '带队人联系方式',
  `vol_time` double(64,1) DEFAULT NULL,
  `date` datetime DEFAULT NULL COMMENT '进行活动的具体时间',
  `system_time` datetime DEFAULT NULL,
  `state` enum('final','edit') DEFAULT 'edit' COMMENT '是否已经提交',
  PRIMARY KEY (`id`),
  KEY `adact_id` (`act_id`),
  CONSTRAINT `adact_id` FOREIGN KEY (`act_id`) REFERENCES `activity_info` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of act_doc
-- ----------------------------

-- ----------------------------
-- Table structure for `act_record`
-- ----------------------------
DROP TABLE IF EXISTS `act_record`;
CREATE TABLE `act_record` (
  `doc_id` int(11) unsigned NOT NULL,
  `user_id` char(20) NOT NULL,
  `base_time` double(64,3) unsigned DEFAULT '0.000' COMMENT '此次活动的志愿服务时间',
  `honor_time` double(64,3) DEFAULT '0.000' COMMENT '荣誉时间',
  `comment` char(255) DEFAULT '无' COMMENT '具体的活动评价',
  `performance_level` enum('优秀','良好','一般') DEFAULT '优秀',
  `honor_leader` tinyint(1) NOT NULL DEFAULT '0' COMMENT '带队奖',
  `honor_excellent` tinyint(1) NOT NULL DEFAULT '0' COMMENT '优秀奖',
  `final` enum('true','false') NOT NULL DEFAULT 'false',
  `date` datetime DEFAULT NULL COMMENT '记录生成日期',
  `sus` int(11) DEFAULT '0' COMMENT '0表示正常，1表示可以，2表示严重可疑',
  PRIMARY KEY (`doc_id`,`user_id`),
  KEY `User` (`user_id`) USING BTREE,
  KEY `ActivityId` (`doc_id`) USING BTREE,
  CONSTRAINT `ardoc_id` FOREIGN KEY (`doc_id`) REFERENCES `act_doc` (`id`),
  CONSTRAINT `aruser_id` FOREIGN KEY (`user_id`) REFERENCES `login` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of act_record
-- ----------------------------

-- ----------------------------
-- Table structure for `apply_act`
-- ----------------------------
DROP TABLE IF EXISTS `apply_act`;
CREATE TABLE `apply_act` (
  `user_id` char(20) NOT NULL,
  `act_id` int(11) unsigned NOT NULL,
  `state` enum('2','1','0') NOT NULL DEFAULT '0' COMMENT '0审核中、1审核通过、2审核未通过',
  `time` datetime NOT NULL COMMENT '申请的时间/审核时间',
  PRIMARY KEY (`user_id`,`act_id`),
  KEY `UserNo` (`user_id`) USING BTREE,
  KEY `ActivityIdNo` (`act_id`) USING BTREE,
  CONSTRAINT `aaact_id` FOREIGN KEY (`act_id`) REFERENCES `activity_info` (`id`),
  CONSTRAINT `aauser_id` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of apply_act
-- ----------------------------

-- ----------------------------
-- Table structure for `apply_team`
-- ----------------------------
DROP TABLE IF EXISTS `apply_team`;
CREATE TABLE `apply_team` (
  `user_id` char(20) NOT NULL,
  `team_id` char(20) NOT NULL,
  `state` enum('2','1','0') DEFAULT '0' COMMENT '0申请中，1通过，2被拒绝',
  `time` datetime DEFAULT NULL COMMENT '申请时间、审核时间',
  `position` char(255) NOT NULL DEFAULT '成员',
  PRIMARY KEY (`user_id`,`team_id`),
  KEY `ateam_id` (`team_id`),
  CONSTRAINT `ateam_id` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`),
  CONSTRAINT `auser_id` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of apply_team
-- ----------------------------

-- ----------------------------
-- Table structure for `assignment`
-- ----------------------------
DROP TABLE IF EXISTS `assignment`;
CREATE TABLE `assignment` (
  `title` char(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `counts` int(11) DEFAULT NULL,
  `content` text,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of assignment
-- ----------------------------

-- ----------------------------
-- Table structure for `follow`
-- ----------------------------
DROP TABLE IF EXISTS `follow`;
CREATE TABLE `follow` (
  `user_id` char(20) NOT NULL,
  `team_id` char(20) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`team_id`),
  KEY `teamid` (`team_id`),
  CONSTRAINT `teamid` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`),
  CONSTRAINT `userid` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of follow
-- ----------------------------
INSERT INTO `follow` VALUES ('101220129', 'NJU000', '2013-05-25 00:07:52');
INSERT INTO `follow` VALUES ('101220129', 'NJU002', '2013-05-22 17:38:35');

-- ----------------------------
-- Table structure for `frz`
-- ----------------------------
DROP TABLE IF EXISTS `frz`;
CREATE TABLE `frz` (
  `user1_id` char(20) NOT NULL,
  `user2_id` char(20) NOT NULL,
  `state` enum('4','3','2','1','0') NOT NULL DEFAULT '0' COMMENT '0（用户1向用户2）申请中，1通过审核，2被拒绝',
  `time` datetime NOT NULL COMMENT '申请时间，审核时间',
  PRIMARY KEY (`user1_id`,`user2_id`),
  KEY `fuser2_id` (`user2_id`),
  CONSTRAINT `fuser1_id` FOREIGN KEY (`user1_id`) REFERENCES `user_info` (`id`),
  CONSTRAINT `fuser2_id` FOREIGN KEY (`user2_id`) REFERENCES `user_info` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of frz
-- ----------------------------

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` char(20) NOT NULL,
  `password` char(160) NOT NULL,
  `permission` enum('3','2','1','0') NOT NULL DEFAULT '0' COMMENT '0-未审核，1-已审核，2-团队,3-超管',
  PRIMARY KEY (`id`),
  KEY `uid` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('101220128', '670b14728ad9902aecba32e22fa4f6bd', '1');
INSERT INTO `login` VALUES ('101220129', '670b14728ad9902aecba32e22fa4f6bd', '1');
INSERT INTO `login` VALUES ('admin', 'c4ca4238a0b923820dcc509a6f75849b', '3');
INSERT INTO `login` VALUES ('id', 'dsdasdqwe123', '0');
INSERT INTO `login` VALUES ('NJU000', '670b14728ad9902aecba32e22fa4f6bd', '2');
INSERT INTO `login` VALUES ('NJU002', '670b14728ad9902aecba32e22fa4f6bd', '2');
INSERT INTO `login` VALUES ('NJU003', '670b14728ad9902aecba32e22fa4f6bd', '2');
INSERT INTO `login` VALUES ('NJU004', '670b14728ad9902aecba32e22fa4f6bd', '2');
INSERT INTO `login` VALUES ('NJU005', '670b14728ad9902aecba32e22fa4f6bd', '2');
INSERT INTO `login` VALUES ('NJU006', '670b14728ad9902aecba32e22fa4f6bd', '2');
INSERT INTO `login` VALUES ('NJU007', '670b14728ad9902aecba32e22fa4f6bd', '2');
INSERT INTO `login` VALUES ('NJU008', '670b14728ad9902aecba32e22fa4f6bd', '2');
INSERT INTO `login` VALUES ('NJU009', '670b14728ad9902aecba32e22fa4f6bd', '2');
INSERT INTO `login` VALUES ('system', '7be68bde64a26cbf9f1c68459bae1fc5', '2');

-- ----------------------------
-- Table structure for `mail`
-- ----------------------------
DROP TABLE IF EXISTS `mail`;
CREATE TABLE `mail` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` char(20) DEFAULT NULL COMMENT '为空表示超级管理员',
  `recv_id` char(20) DEFAULT NULL COMMENT '为空表示超级管理员',
  `topic` text NOT NULL COMMENT '主题',
  `content` text NOT NULL COMMENT '内容',
  `time` datetime NOT NULL COMMENT '发送时间',
  `state` enum('2','1','0') NOT NULL DEFAULT '0' COMMENT '0编辑中，1已发送但未查看，2已查看',
  PRIMARY KEY (`id`),
  KEY `msender_id` (`sender_id`),
  KEY `mrecv_id` (`recv_id`),
  CONSTRAINT `mrecv_id` FOREIGN KEY (`recv_id`) REFERENCES `login` (`id`),
  CONSTRAINT `msender_id` FOREIGN KEY (`sender_id`) REFERENCES `login` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mail
-- ----------------------------

-- ----------------------------
-- Table structure for `nations`
-- ----------------------------
DROP TABLE IF EXISTS `nations`;
CREATE TABLE `nations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nation` char(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nation` (`nation`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nations
-- ----------------------------
INSERT INTO `nations` VALUES ('23', '东乡族');
INSERT INTO `nations` VALUES ('50', '乌兹别克族');
INSERT INTO `nations` VALUES ('44', '京族');
INSERT INTO `nations` VALUES ('22', '仡佬族');
INSERT INTO `nations` VALUES ('31', '仫佬族');
INSERT INTO `nations` VALUES ('27', '佤族');
INSERT INTO `nations` VALUES ('12', '侗族');
INSERT INTO `nations` VALUES ('48', '俄罗斯族');
INSERT INTO `nations` VALUES ('47', '保安族');
INSERT INTO `nations` VALUES ('21', '傈僳族');
INSERT INTO `nations` VALUES ('19', '傣族');
INSERT INTO `nations` VALUES ('57', '其他');
INSERT INTO `nations` VALUES ('16', '哈尼族');
INSERT INTO `nations` VALUES ('17', '哈萨克族');
INSERT INTO `nations` VALUES ('4', '回族');
INSERT INTO `nations` VALUES ('7', '土家族');
INSERT INTO `nations` VALUES ('30', '土族');
INSERT INTO `nations` VALUES ('45', '基诺族');
INSERT INTO `nations` VALUES ('39', '塔吉克族');
INSERT INTO `nations` VALUES ('54', '塔塔尔族');
INSERT INTO `nations` VALUES ('2', '壮族');
INSERT INTO `nations` VALUES ('11', '布依族');
INSERT INTO `nations` VALUES ('38', '布朗族');
INSERT INTO `nations` VALUES ('8', '彝族');
INSERT INTO `nations` VALUES ('46', '德昂族');
INSERT INTO `nations` VALUES ('43', '怒族');
INSERT INTO `nations` VALUES ('25', '拉祜族');
INSERT INTO `nations` VALUES ('37', '撒拉族');
INSERT INTO `nations` VALUES ('41', '普米族');
INSERT INTO `nations` VALUES ('35', '景颇族');
INSERT INTO `nations` VALUES ('14', '朝鲜族');
INSERT INTO `nations` VALUES ('33', '柯尔克孜族');
INSERT INTO `nations` VALUES ('36', '毛南族');
INSERT INTO `nations` VALUES ('26', '水族');
INSERT INTO `nations` VALUES ('1', '汉族');
INSERT INTO `nations` VALUES ('3', '满族');
INSERT INTO `nations` VALUES ('53', '独龙族');
INSERT INTO `nations` VALUES ('56', '珞巴族');
INSERT INTO `nations` VALUES ('13', '瑶族');
INSERT INTO `nations` VALUES ('20', '畲族');
INSERT INTO `nations` VALUES ('15', '白族');
INSERT INTO `nations` VALUES ('28', '纳西族');
INSERT INTO `nations` VALUES ('6', '维吾尔族');
INSERT INTO `nations` VALUES ('29', '羌族');
INSERT INTO `nations` VALUES ('5', '苗族');
INSERT INTO `nations` VALUES ('9', '蒙古族');
INSERT INTO `nations` VALUES ('10', '藏族');
INSERT INTO `nations` VALUES ('49', '裕固族');
INSERT INTO `nations` VALUES ('55', '赫哲族');
INSERT INTO `nations` VALUES ('34', '达斡尔族');
INSERT INTO `nations` VALUES ('52', '鄂伦春族');
INSERT INTO `nations` VALUES ('42', '鄂温克族');
INSERT INTO `nations` VALUES ('32', '锡伯族');
INSERT INTO `nations` VALUES ('51', '门巴族');
INSERT INTO `nations` VALUES ('40', '阿昌族');
INSERT INTO `nations` VALUES ('24', '高山族');
INSERT INTO `nations` VALUES ('18', '黎族');

-- ----------------------------
-- Table structure for `note`
-- ----------------------------
DROP TABLE IF EXISTS `note`;
CREATE TABLE `note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` char(20) DEFAULT NULL COMMENT '为"null"表示系统通知',
  `recv_type` enum('3','2','1','0') NOT NULL DEFAULT '0' COMMENT '0表示站内通知，1表示邮件通知',
  `recv_id` char(20) DEFAULT NULL COMMENT '如果recv_type不等于3，此值可以为空',
  `title` text NOT NULL COMMENT '通知标题',
  `content` text NOT NULL COMMENT '通知内容',
  `time` datetime NOT NULL COMMENT '发送该通知的时间',
  `state` enum('read','unread') NOT NULL DEFAULT 'unread' COMMENT '已读、未读',
  PRIMARY KEY (`id`),
  KEY `nsender_id` (`sender_id`),
  KEY `nrecv_id` (`recv_id`),
  CONSTRAINT `nrecv_id` FOREIGN KEY (`recv_id`) REFERENCES `login` (`id`),
  CONSTRAINT `nsender_id` FOREIGN KEY (`sender_id`) REFERENCES `team` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of note
-- ----------------------------

-- ----------------------------
-- Table structure for `note_send`
-- ----------------------------
DROP TABLE IF EXISTS `note_send`;
CREATE TABLE `note_send` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` char(20) NOT NULL,
  `send_type` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0表示站内，1表示邮件',
  `recv_id_list` text NOT NULL,
  `title` text,
  `content` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of note_send
-- ----------------------------

-- ----------------------------
-- Table structure for `online_question`
-- ----------------------------
DROP TABLE IF EXISTS `online_question`;
CREATE TABLE `online_question` (
  `title` char(255) DEFAULT NULL,
  `content` text,
  `time` datetime DEFAULT NULL,
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `answer` text,
  `email` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of online_question
-- ----------------------------

-- ----------------------------
-- Table structure for `photos`
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `act_id` int(11) NOT NULL COMMENT '图片所属的活动id',
  `pic_name` char(255) NOT NULL COMMENT '图片的文件名',
  `time` datetime DEFAULT NULL COMMENT '上传的时间',
  `uploader_id` char(20) DEFAULT NULL,
  `uploader_name` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of photos
-- ----------------------------
INSERT INTO `photos` VALUES ('83', '223', '51a350b2e595c.jpg', '2013-05-27 20:25:25', 'NJU000', '南京大学青年志愿者协会');
INSERT INTO `photos` VALUES ('86', '215', '51a3512e219a9.jpg', '2013-05-27 20:27:29', 'NJU000', '南京大学青年志愿者协会');
INSERT INTO `photos` VALUES ('87', '216', '51a3514d8e809.jpg', '2013-05-27 20:28:00', 'NJU000', '南京大学青年志愿者协会');
INSERT INTO `photos` VALUES ('88', '216', '51a35150bf95e.jpg', '2013-05-27 20:28:03', 'NJU000', '南京大学青年志愿者协会');
INSERT INTO `photos` VALUES ('89', '217', '51a35192b254e.jpg', '2013-05-27 20:29:09', 'NJU000', '南京大学青年志愿者协会');
INSERT INTO `photos` VALUES ('90', '218', '51a351ae89361.jpg', '2013-05-27 20:29:37', 'NJU000', '南京大学青年志愿者协会');
INSERT INTO `photos` VALUES ('91', '219', '51a351d8a54b4.jpg', '2013-05-27 20:30:19', 'NJU000', '南京大学青年志愿者协会');
INSERT INTO `photos` VALUES ('92', '220', '51a351fa65bcc.jpg', '2013-05-27 20:30:53', 'NJU000', '南京大学青年志愿者协会');
INSERT INTO `photos` VALUES ('93', '221', '51a35213a0a37.jpg', '2013-05-27 20:31:18', 'NJU000', '南京大学青年志愿者协会');
INSERT INTO `photos` VALUES ('94', '221', '51a35216c4a76.jpg', '2013-05-27 20:31:21', 'NJU000', '南京大学青年志愿者协会');
INSERT INTO `photos` VALUES ('95', '222', '51a3524815e2b.jpg', '2013-05-27 20:32:11', 'NJU000', '南京大学青年志愿者协会');
INSERT INTO `photos` VALUES ('96', '224', '51a352752096f.jpg', '2013-05-27 20:32:56', 'NJU000', '南京大学青年志愿者协会');

-- ----------------------------
-- Table structure for `statistics`
-- ----------------------------
DROP TABLE IF EXISTS `statistics`;
CREATE TABLE `statistics` (
  `visit_times` int(11) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of statistics
-- ----------------------------
INSERT INTO `statistics` VALUES ('1340', '0');

-- ----------------------------
-- Table structure for `team`
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id` char(20) CHARACTER SET utf8 NOT NULL,
  `name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `logo` varchar(40) CHARACTER SET utf8 DEFAULT NULL COMMENT 'logo url',
  `leader` char(20) CHARACTER SET utf8 DEFAULT NULL,
  `profile` text CHARACTER SET utf8 COMMENT '简介',
  `layer` enum('2','1','0') CHARACTER SET utf8 DEFAULT '0' COMMENT '0院系团委，1社团，2其他',
  `email` char(50) CHARACTER SET utf8 DEFAULT NULL,
  `slogan` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `leader_phone` decimal(20,0) DEFAULT NULL,
  `adviser` char(20) CHARACTER SET utf8 DEFAULT NULL,
  `adviser_tel` decimal(20,0) DEFAULT NULL,
  `attached_institutions` char(200) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tid` (`id`),
  KEY `tleader` (`leader`),
  CONSTRAINT `tid` FOREIGN KEY (`id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES ('admin', '系统管理员', null, null, null, '2', null, null, null, null, null, null);
INSERT INTO `team` VALUES ('NJU000', '南京大学青年志愿者协会', 'NJU000.jpg', '林觉慈', null, '1', 'njuxlqingxie@126.com', null, '15365186503', '朱晓雪', '15951946379', '共青团南京大学委员会');
INSERT INTO `team` VALUES ('NJU002', '商学院', null, '李胜蓝', '&lt;div id=&quot;question-header&quot; style=&quot;margin:0px 0px 20px;padding:0px;font-size:13px;vertical-align:baseline;background-color:#FFFFFF;font-family:&#039;Trebuchet MS&#039;, &#039;Liberation Sans&#039;, &#039;DejaVu Sans&#039;, sans-serif;&quot;&gt;\n	&lt;h1 style=&quot;font-size:23px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n		&lt;a href=&quot;http://stackoverflow.com/questions/16671633/django-im-a-long-time-php-developer-cakephp-and-decided-to-try-django-out&quot; class=&quot;question-hyperlink&quot;&gt;django: I&#039;m a long-time PHP developer (cakePHP) and decided to try django out&lt;/a&gt; \n	&lt;/h1&gt;\n&lt;/div&gt;\n&lt;div id=&quot;mainbar&quot; style=&quot;margin:0px 0px 40px;padding:0px;border:0px;font-size:13px;vertical-align:baseline;background-color:#FFFFFF;font-family:Arial, &#039;Liberation Sans&#039;, &#039;DejaVu Sans&#039;, sans-serif;&quot;&gt;\n	&lt;div class=&quot;question&quot; id=&quot;question&quot; style=&quot;margin:0px;padding:0px;border:0px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n		&lt;div class=&quot;everyonelovesstackoverflow adzerk-vote&quot; id=&quot;adzerk1&quot; style=&quot;margin:0px 0px 8px;padding:0px;border:0px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n			&lt;iframe id=&quot;ados_frame_adzerk1_49626&quot; frameborder=&quot;0&quot; height=&quot;90&quot; width=&quot;728&quot;&gt;\n			&lt;/iframe&gt;\n&lt;img height=&quot;0px&quot; width=&quot;0px&quot; border=&quot;0&quot; src=&quot;http://engine.adzerk.net/i.gif?e=eyJhdiI6MTQyNywiYXQiOjQsImNtIjoyOTg2MCwiY2giOjExNzgsImNyIjo3MTI4NiwiZGkiOiI5ZDU5N2RiZTliZjQ0YjdjOWJhNWRjMzQ4ZjQyN2RiOSIsImRtIjoxLCJmYyI6MTAwMDQzLCJmbCI6NDk2MjYsImt3IjoiZGF0YWJhc2UsZGphbmdvLG1vZGVsIiwibWsiOiJkamFuZ28iLCJudyI6MjIsInJmIjoiaHR0cDovL3N0YWNrb3ZlcmZsb3cuY29tLyIsInJ2IjowLCJwciI6NzY1LCJzdCI6ODI3Nywiem4iOjQzfQ&amp;s=MCYQO7CTKHEO0PbQEuT-EhckF30&quot; /&gt; \n		&lt;/div&gt;\n		&lt;table style=&quot;margin:0px;padding:0px;border:0px;font-size:13px;background-color:transparent;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;td class=&quot;votecell&quot; style=&quot;border:0px;font-size:13px;vertical-align:top;background-color:transparent;&quot;&gt;\n						&lt;div class=&quot;vote&quot; style=&quot;margin:0px;padding:0px;border:0px;vertical-align:baseline;background-color:transparent;text-align:center;&quot;&gt;\n							&lt;a class=&quot;vote-up-off&quot;&gt;up vote&lt;/a&gt;&lt;span class=&quot;vote-count-post &quot; style=&quot;font-size:24px;vertical-align:baseline;background-color:transparent;color:#555555;&quot;&gt;0&lt;/span&gt;&lt;a class=&quot;vote-down-off&quot;&gt;down vote&lt;/a&gt;&lt;a class=&quot;star-off&quot; href=&quot;http://stackoverflow.com/questions/16671633/django-im-a-long-time-php-developer-cakephp-and-decided-to-try-django-out#&quot;&gt;favorite&lt;/a&gt; \n							&lt;div class=&quot;favoritecount&quot; style=&quot;margin:0px;padding:0px;border:0px;vertical-align:baseline;background-color:transparent;color:#808185;&quot;&gt;\n								&lt;b&gt;&lt;/b&gt; \n							&lt;/div&gt;\n						&lt;/div&gt;\n					&lt;/td&gt;\n					&lt;td class=&quot;postcell&quot; style=&quot;border:0px;font-size:13px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n						&lt;div style=&quot;margin:0px;padding:0px;border:0px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n							&lt;div class=&quot;post-text&quot; style=&quot;margin:0px 5px 5px 0px;padding:0px;border:0px;font-size:14px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n								&lt;p style=&quot;vertical-align:baseline;background-color:transparent;&quot;&gt;\n									definitely I am missing something here. Django definitely does not suck because everyone in the whole internet seem to love it. I am familiar with python but I&#039;m having trouble understanding django&#039;s logic of interacting with relational dbs.\n								&lt;/p&gt;\n								&lt;p style=&quot;vertical-align:baseline;background-color:transparent;&quot;&gt;\n									&lt;strong&gt;django generates the database tables for you based on the Model you created in python.&lt;/strong&gt; \n								&lt;/p&gt;\n								&lt;p style=&quot;vertical-align:baseline;background-color:transparent;&quot;&gt;\n									its a pain in the ** that every time I change something in the Model (like adding a new attribute to a class) I need to regenerate the table by first deleting it and then doing crazy sql stuff. Why isn&#039;t there a native schema updating command? (or is there?)\n								&lt;/p&gt;\n							&lt;/div&gt;\n							&lt;div class=&quot;post-taglist&quot; style=&quot;margin:0px 0px 10px;padding:0px;border:0px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n								&lt;a href=&quot;http://stackoverflow.com/questions/tagged/database&quot; class=&quot;post-tag&quot;&gt;database&lt;/a&gt;&amp;nbsp;&lt;a href=&quot;http://stackoverflow.com/questions/tagged/django&quot; class=&quot;post-tag&quot;&gt;django&lt;/a&gt;&amp;nbsp;&lt;a href=&quot;http://stackoverflow.com/questions/tagged/model&quot; class=&quot;post-tag&quot;&gt;model&lt;/a&gt; \n							&lt;/div&gt;\n							&lt;table class=&quot;fw&quot; style=&quot;margin:0px;padding:0px;border:0px;font-size:13px;background-color:transparent;width:665px;&quot;&gt;\n								&lt;tbody&gt;\n									&lt;tr&gt;\n										&lt;td class=&quot;vt&quot; style=&quot;border:0px;font-size:13px;vertical-align:top;background-color:transparent;&quot;&gt;\n											&lt;div class=&quot;post-menu&quot; style=&quot;margin:0px;padding:2px 0px 0px;border:0px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n												&lt;a href=&quot;http://stackoverflow.com/q/16671633&quot; class=&quot;short-link&quot; id=&quot;link-post-16671633&quot;&gt;share&lt;/a&gt; \n											&lt;/div&gt;\n										&lt;/td&gt;\n										&lt;td class=&quot;post-signature owner&quot; style=&quot;border:0px;font-size:13px;vertical-align:top;background-color:#E0EAF1;&quot;&gt;\n											&lt;div class=&quot;user-info &quot; style=&quot;margin:0px;padding:0px;border:0px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n												&lt;div class=&quot;user-action-time&quot; style=&quot;margin:2px 0px 4px;padding:0px;border:0px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n													asked&amp;nbsp;&lt;span class=&quot;relativetime&quot; style=&quot;vertical-align:baseline;background-color:transparent;&quot;&gt;1 min ago&lt;/span&gt; \n												&lt;/div&gt;\n												&lt;div class=&quot;user-gravatar32&quot; style=&quot;margin:0px;padding:0px;border:0px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n													&lt;a href=&quot;http://stackoverflow.com/users/1420992/stackplasm&quot;&gt; \n													&lt;div class=&quot;&quot; style=&quot;margin:0px;padding:0px;border:0px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n														&lt;img src=&quot;http://www.gravatar.com/avatar/e247b4d6aaa8f0a12253f9e00a157648?s=32&amp;d=identicon&amp;r=PG&quot; alt=&quot;&quot; width=&quot;32&quot; height=&quot;32&quot; /&gt; \n													&lt;/div&gt;\n&lt;/a&gt; \n												&lt;/div&gt;\n												&lt;div class=&quot;user-details&quot; style=&quot;margin:0px 0px 0px 5px;padding:0px;border:0px;vertical-align:baseline;background-color:transparent;color:#888888;&quot;&gt;\n													&lt;a href=&quot;http://stackoverflow.com/users/1420992/stackplasm&quot;&gt;stackplasm&lt;/a&gt;&lt;br /&gt;\n496\n												&lt;/div&gt;\n											&lt;/div&gt;\n										&lt;/td&gt;\n									&lt;/tr&gt;\n								&lt;/tbody&gt;\n							&lt;/table&gt;\n						&lt;/div&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;tr&gt;\n					&lt;td class=&quot;votecell&quot; style=&quot;border:0px;font-size:13px;vertical-align:top;background-color:transparent;&quot;&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border:0px;font-size:13px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n						&lt;div id=&quot;comments-16671633&quot; class=&quot;comments&quot; style=&quot;margin:10px 0px 0px;padding:0px 0px 10px;vertical-align:baseline;background-color:transparent;color:#444444;&quot;&gt;\n							&lt;table style=&quot;margin:0px;padding:0px;border:0px;font-size:13px;background-color:transparent;width:660px;&quot;&gt;\n								&lt;tbody&gt;\n									&lt;tr id=&quot;comment-23987336&quot; class=&quot;comment&quot;&gt;\n										&lt;td style=&quot;font-size:13px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n										&lt;/td&gt;\n										&lt;td class=&quot;comment-text&quot; style=&quot;font-size:13px;vertical-align:text-top;background-color:transparent;&quot;&gt;\n											&lt;div style=&quot;margin:0px;padding:0px;border:0px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n												&lt;span class=&quot;comment-copy&quot; style=&quot;vertical-align:baseline;background-color:transparent;&quot;&gt;Not native.&amp;nbsp;&lt;a href=&quot;http://south.aeracode.org/&quot;&gt;south.aeracode.org&lt;/a&gt;&lt;/span&gt;&amp;nbsp;–&amp;nbsp;&lt;a href=&quot;http://stackoverflow.com/users/1959899/adrian-lopez&quot; class=&quot;comment-user&quot;&gt;Adrián López&lt;/a&gt;&amp;nbsp;&lt;span class=&quot;comment-date&quot; style=&quot;vertical-align:baseline;background-color:transparent;color:#999999;&quot;&gt;&lt;a class=&quot;comment-link&quot; href=&quot;http://stackoverflow.com/questions/16671633/django-im-a-long-time-php-developer-cakephp-and-decided-to-try-django-out#comment23987336_16671633&quot;&gt;&lt;span class=&quot;relativetime-clean&quot; style=&quot;vertical-align:baseline;background-color:transparent;&quot;&gt;34 secs ago&lt;/span&gt;&lt;/a&gt;&lt;/span&gt; \n											&lt;/div&gt;\n										&lt;/td&gt;\n									&lt;/tr&gt;\n								&lt;/tbody&gt;\n							&lt;/table&gt;\n						&lt;/div&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n	&lt;/div&gt;\n	&lt;div id=&quot;answers&quot; class=&quot;no-answers&quot; style=&quot;margin:0px;padding:10px 0px 0px;border:0px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n		&lt;a name=&quot;tab-top&quot;&gt;&lt;/a&gt; \n		&lt;div id=&quot;answers-header&quot; style=&quot;margin:10px 0px;padding:0px;border:0px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n			&lt;div class=&quot;subheader answers-subheader&quot; style=&quot;margin:0px 0px -10px;padding:0px;vertical-align:baseline;background-color:transparent;&quot;&gt;\n				&lt;h2 style=&quot;font-size:18px;vertical-align:baseline;background-color:transparent;font-family:&#039;Trebuchet MS&#039;, &#039;Liberation Sans&#039;, &#039;DejaVu Sans&#039;, sans-serif;&quot;&gt;\n				&lt;/h2&gt;\n			&lt;/div&gt;\n		&lt;/div&gt;\n		&lt;h2 class=&quot;bottom-notice&quot; style=&quot;font-size:18px;vertical-align:baseline;background-color:transparent;font-family:&#039;Trebuchet MS&#039;, &#039;Liberation Sans&#039;, &#039;DejaVu Sans&#039;, sans-serif;&quot;&gt;\n			Know someone who can answer? Share a&amp;nbsp;&lt;a href=&quot;http://stackoverflow.com/q/16671633&quot;&gt;link&lt;/a&gt;&amp;nbsp;to this question via&amp;nbsp;&lt;a href=&quot;mailto:?subject=Stack%20Overflow%20Question&amp;body=django%3a%20I%27m%20a%20long-time%20PHP%20developer%20(cakePHP)%20and%20decided%20to%20try%20django%20out%0Ahttp%3a%2f%2fstackoverflow.com%2fq%2f16671633%3fsem%3d2&quot;&gt;email&lt;/a&gt;,&amp;nbsp;&lt;a href=&quot;https://plus.google.com/share?url=http%3a%2f%2fstackoverflow.com%2fq%2f16671633%3fsgp%3d2&quot;&gt;Google+&lt;/a&gt;,&lt;a href=&quot;http://twitter.com/share?url=http%3a%2f%2fstackoverflow.com%2fq%2f16671633%3fstw%3d2&amp;text=django%3a%20I%27m%20a%20long-time%20PHP%20developer%20(cakePHP)%20and%20decided%20to%20try%20django%20out&quot;&gt;Twitter&lt;/a&gt;, or&amp;nbsp;&lt;a href=&quot;http://www.facebook.com/sharer.php?u=http%3a%2f%2fstackoverflow.com%2fq%2f16671633%3fsfb%3d2&amp;t=django%3a%20I%27m%20a%20long-time%20PHP%20developer%20(cakePHP)%20and%20decided%20to%20try%20django%20out&quot;&gt;Facebook&lt;/a&gt;.\n		&lt;/h2&gt;\n&lt;a name=&quot;new-answer&quot;&gt;&lt;/a&gt; \n		&lt;h2 class=&quot;space&quot; style=&quot;font-size:18px;vertical-align:baseline;background-color:transparent;font-family:&#039;Trebuchet MS&#039;, &#039;Liberation Sans&#039;, &#039;DejaVu Sans&#039;, sans-serif;&quot;&gt;\n			Your Answer\n		&lt;/h2&gt;\n	&lt;/div&gt;\n&lt;/div&gt;', '0', 'leaver@yeah.net', '大家好', '13951890183', '陈力立', '13813867432', '共青团南京大学商学院青年志愿者协会');
INSERT INTO `team` VALUES ('NJU003', '政府管理学院', null, '徐雪怡', null, '0', 'xxynju@163.com', null, '15996305420', '李敏', '13951697822', '政府管理学院青年志愿者协会');
INSERT INTO `team` VALUES ('NJU004', '生命科学学院', null, '王思阳', null, '0', 'wangsiyang0327@163.com', null, '15996230865', '刘亚兰', '13921431448', '生科院团委青协');
INSERT INTO `team` VALUES ('NJU005', '物理学院', null, '孙望', null, '0', '1277315178@qq.com', null, '18252021350', '施国卿', '13913339088', '物理学院青年志愿者协会');
INSERT INTO `team` VALUES ('NJU006', '建筑与城市规划学院', null, '姜嵩', null, '0', '524201924@qq.coom', null, '18252061306', '窦寅', '13776509489', '南京大学建筑与城市规划学院青年志愿者协会');
INSERT INTO `team` VALUES ('NJU007', '工程管理学院', null, '梁柏焜', null, '0', 'liangbaikun@163.com', null, '18020126835', '夏娟', '13675157827', '青年志愿者协会');
INSERT INTO `team` VALUES ('NJU008', '化学化工学院', null, '施靖婧', null, '0', 'annashi109@sina.com', null, '15996273261', '李兴华', '13584002478', '蒋雯若爱心社');
INSERT INTO `team` VALUES ('NJU009', '地理与海洋科学学院', null, '达飞', null, '0', 'dafeiorlando@163.com', null, '13915986151', '周雨霁', '13913871173', '地理学院青年志愿者协会');
INSERT INTO `team` VALUES ('system', '系统信息', null, '夏凡', null, '2', 'vahstudio@126.com', null, '15996256592', '王林章', '15996256592', '计算机系');

-- ----------------------------
-- Table structure for `user_info`
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `id` char(20) NOT NULL,
  `gender` enum('男','女','随便') DEFAULT '男',
  `faculty` char(20) DEFAULT NULL,
  `department` char(20) DEFAULT NULL,
  `name` char(20) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL COMMENT '上次登录时间',
  `login_num` int(11) unsigned DEFAULT '0',
  `email` char(50) DEFAULT NULL,
  `phone` decimal(20,0) DEFAULT NULL COMMENT '联系电话',
  `qq` decimal(20,0) DEFAULT NULL,
  `city` char(20) DEFAULT NULL,
  `grade` char(20) DEFAULT NULL,
  `volunteer_time` double(64,3) unsigned NOT NULL DEFAULT '0.000' COMMENT '志愿者服务总时间',
  `base_time` double(64,3) unsigned NOT NULL DEFAULT '0.000',
  `honor_time` double(64,3) NOT NULL DEFAULT '0.000',
  `service_times` int(11) NOT NULL DEFAULT '0',
  `user_rate` double(64,0) NOT NULL DEFAULT '0',
  `idcard_num` char(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `politics_status` enum('群众','预备党员','党员','团员') DEFAULT '团员',
  `nation` char(20) DEFAULT '汉族',
  `cloth_size` enum('XS','XL','L','M','S','') DEFAULT 'S',
  `dormitory` char(20) DEFAULT NULL,
  `cet4` int(11) DEFAULT '0',
  `cet6` int(11) DEFAULT '0',
  `drive` enum('是','否') DEFAULT '否',
  `medical` enum('否','是') DEFAULT '否',
  `other_skills` char(255) DEFAULT NULL,
  `language` char(20) DEFAULT NULL,
  `language_level` enum('熟练','一般','精通') DEFAULT '熟练',
  `signature` char(255) DEFAULT '用一句话来描述一下自己吧',
  `photo` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Department` (`department`) USING BTREE,
  KEY `faculty` (`faculty`) USING BTREE,
  KEY `unation` (`nation`),
  CONSTRAINT `uid` FOREIGN KEY (`id`) REFERENCES `login` (`id`),
  CONSTRAINT `unation` FOREIGN KEY (`nation`) REFERENCES `nations` (`nation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of user_info
-- ----------------------------
INSERT INTO `user_info` VALUES ('101220128', '女', '商学院', null, '夏畅', null, '0', 'demonsu@qq.com', '15996256592', null, null, '2010', '11.600', '11.000', '0.600', '0', '1', '321182199204300512', '2013-05-08', '团员', '汉族', 'S', '', '0', '0', '否', '否', '', '', '熟练', '用一句话来描述一下自己吧', 'girl/1.jpg');
INSERT INTO `user_info` VALUES ('101220129', '男', '商学院', null, '夏凡', null, '0', 'Demon_su@qq.com', '15996256592', null, null, '2010', '44.300', '44.000', '0.300', '0', '1', '321hghf&#039;', '2013-05-17', '团员', '汉族', 'S', '1b231werfwerfe', '0', '0', '否', '否', '', '', '熟练', '天高任鸟飞，海阔凭鱼跃', 'boy/62.jpg');

-- ----------------------------
-- Table structure for `vol_journal`
-- ----------------------------
DROP TABLE IF EXISTS `vol_journal`;
CREATE TABLE `vol_journal` (
  `title` char(255) DEFAULT NULL,
  `content` text,
  `writer` char(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vol_journal
-- ----------------------------

-- ----------------------------
-- Event structure for `get_act_rate`
-- ----------------------------
DROP EVENT IF EXISTS `get_act_rate`;
DELIMITER ;;
CREATE EVENT `get_act_rate` ON SCHEDULE EVERY 10 SECOND STARTS '2013-04-23 19:28:05' ON COMPLETION NOT PRESERVE ENABLE DO begin
  declare the_end_time datetime;
  declare length int;
  declare maxid int;
  declare arr int;
  declare handleid int;
  declare alreadyrate int;
  declare totalscore double;
  declare totalpeople double;
  select max(id) into maxid from act_doc;
  set arr=1;
  loop1:while (arr<=maxid) do
     select act_id into handleid from act_doc where act_doc.id=arr;
     select activity_info.end_time into the_end_time from activity_info,act_doc  where     (act_doc.id=arr and act_doc.act_id=activity_info.id);
     select TIMESTAMPDIFF(HOUR,the_end_time,now()) into length; 
     if (length>=48  ) then
       select already_rated into alreadyrate from act_doc where act_doc.id=arr;
       if (alreadyrate=0) then

          update act_record set act_record.evaluate=5 where (act_record.doc_id=arr and act_record.already_eva=0);
          update act_record set act_record.already_eva=1 where act_record.doc_id=arr;

          update act_doc set already_rated=1 where id=arr;
          select sum( (0.5+user_info.user_rate/5)*act_record.evaluate) into totalscore from user_info,act_record where
                 (act_record.doc_id=arr and act_record.user_id=user_info.id);
	  select sum(0.5+user_info.user_rate/5) into totalpeople from user_info,act_record where
                 (act_record.doc_id=arr and act_record.user_id=user_info.id);
          update act_doc set act_rate=totalscore/totalpeople where act_doc.id=arr;



       end if;
     end if;
     set arr=arr+1;
  end while loop1;
end
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `LevelUp`;
DELIMITER ;;
CREATE TRIGGER `LevelUp` BEFORE UPDATE ON `user_info` FOR EACH ROW begin
if ((new.user_rate<1) and ((new.base_time>0 and new.honor_time>=0) or (new.base_time>0 and 

new.service_times>0) or (new.honor_time>=0 and new.service_times>0) ))
then
set new.user_rate=1;
end if;
if ((new.user_rate<2) and ((new.base_time>=20 and new.honor_time>=1) or (new.base_time>=20 and 

new.service_times>5) or (new.honor_time>=1 and new.service_times>5) ))
then
set new.user_rate=2;
end if;
if ((new.user_rate<3) and ((new.base_time>=50 and new.honor_time>=2) or (new.base_time>=50 and 

new.service_times>10) or (new.honor_time>=2 and new.service_times>10) ))
then
set new.user_rate=3;
end if;
if ((new.user_rate<4) and ((new.base_time>=100 and new.honor_time>=5) or (new.base_time>=10 and 

new.service_times>20) or (new.honor_time>=5 and new.service_times>20) ))
then
set new.user_rate=4;
end if;
if ((new.user_rate<5) and ((new.base_time>=200 and new.honor_time>=10) or (new.base_time>=200 and 

new.service_times>50) or (new.honor_time>=10 and new.service_times>50) ))
then
set new.user_rate=5;
end if;
end
;;
DELIMITER ;
