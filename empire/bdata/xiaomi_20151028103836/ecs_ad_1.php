<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad`;");
E_C("CREATE TABLE `ecs_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad` values('1','1','0','首页-轮播广告-底部广告1','http://www.htwl168.com/','1399296353451217960.jpg','1399190400','1528012800','','','','6','1');");
E_D("replace into `ecs_ad` values('2','1','0','首页-轮播广告-底部广告2','http://www.htwl168.com/','1399296360726327112.jpg','1399190400','1496476800','','','','5','1');");
E_D("replace into `ecs_ad` values('3','1','0','首页-轮播广告-底部广告3','http://www.htwl168.com/','1399296367947605205.jpg','1399190400','1496476800','','','','7','1');");
E_D("replace into `ecs_ad` values('4','2','0','首页-新品上架广告','http://www.htwl168.com/','1399297446302746234.jpg','1399190400','1496476800','','','','16','1');");
E_D("replace into `ecs_ad` values('5','3','0','首页-推荐产品广告','http://www.htwl168.com/','1399297599915999827.jpg','1399190400','1496476800','','','','0','1');");
E_D("replace into `ecs_ad` values('6','4','0','手机版首页-轮播广告1','http://www.htwl168.com/','1400995681859215328.jpg','1400918400','1498204800','','','','0','1');");
E_D("replace into `ecs_ad` values('7','4','0','手机版首页-轮播广告2','http://www.htwl168.com/','1400995694057772358.jpg','1400918400','1498204800','','','','0','1');");
E_D("replace into `ecs_ad` values('8','4','0','手机版首页-轮播广告3','http://www.htwl168.com/','1400995707714805189.jpg','1400918400','1498204800','','','','0','1');");
E_D("replace into `ecs_ad` values('9','4','0','手机版首页-轮播广告4','http://www.htwl168.com/','1400995721493255449.jpg','1400918400','1498204800','','','','0','1');");
E_D("replace into `ecs_ad` values('10','5','0','手机版首页-中间广告1','http://www.htwl168.com/','1400996460088999345.jpg','1400918400','1498204800','','','','0','1');");
E_D("replace into `ecs_ad` values('11','5','0','手机版首页-中间广告2','http://www.htwl168.com/','1400996471646394269.jpg','1400918400','1498204800','','','','0','1');");
E_D("replace into `ecs_ad` values('12','5','0','手机版首页-中间广告3','http://www.htwl168.com/','1400996483066699840.jpg','1400918400','1498204800','','','','0','1');");
E_D("replace into `ecs_ad` values('13','5','0','手机版首页-中间广告4','http://www.htwl168.com/','1400996494042730900.jpg','1400918400','1498204800','','','','0','1');");
E_D("replace into `ecs_ad` values('14','5','0','手机版首页-中间广告5','http://www.htwl168.com/','1400996513304876080.jpg','1400918400','1498204800','','','','0','1');");
E_D("replace into `ecs_ad` values('15','6','0','手机版首页-特惠广告','http://www.htwl168.com/','1400996993026954662.jpg','1400918400','1498204800','','','','0','1');");
E_D("replace into `ecs_ad` values('16','7','0','手机版首页-新品广告','','1400997016501221530.jpg','1400947200','1498233600','','','','0','1');");
E_D("replace into `ecs_ad` values('17','8','3','手机版首页-底部版权','http://www.htwl168.com/','©2015 ecshop小米整站+微商城','1400918400','1498204800','','','','0','1');");

require("../../inc/footer.php");
?>