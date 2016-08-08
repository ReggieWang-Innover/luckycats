<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_category`;");
E_C("CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_category` values('1','小米手机','','','0','50','','','1','','1','5','');");
E_D("replace into `ecs_category` values('2','小米电视与盒子','','','0','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('3','手机优惠套装','','','0','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('4','按机型选配件','','','0','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('5','配件','','','0','50','','','1','','1','0','');");
E_D("replace into `ecs_category` values('6','手机外壳','','','0','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('7','软件','','','0','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('9','特卖商品','','','0','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('10','小米手机1','','','1','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('11','小米手机1s','','','1','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('12','小米手机2','','','1','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('13','小米电视','','','2','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('14','新小米盒子','','','2','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('15','盒子配件','','','2','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('16','小米2/2S','','','3','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('17','小米2A','','','3','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('18','小米1/1S','','','3','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('19','红米','','','3','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('20','小米2/2S配件','','','4','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('21','小米2A配件','','','4','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('22','小米1/1S配件','','','4','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('23','红米配件','','','4','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('24','每日10点特价秒杀','','','9','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('25','特价配件','','','9','50','','','0','','1','0','');");

require("../../inc/footer.php");
?>