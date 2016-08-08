<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('1','','0','免责条款','1','1','0','article.php?id=26','bottom');");
E_D("replace into `ecs_nav` values('2','','0','隐私保护','1','2','0','article.php?id=26','bottom');");
E_D("replace into `ecs_nav` values('3','','0','咨询热点 ','1','3','0','article.php?id=26','bottom');");
E_D("replace into `ecs_nav` values('4','','0','联系我们','1','4','0','article.php?id=26','bottom');");
E_D("replace into `ecs_nav` values('5','','0','公司简介','1','5','0','article.php?id=26','bottom');");
E_D("replace into `ecs_nav` values('6','','0','批发方案','1','6','0','article.php?id=26','bottom');");
E_D("replace into `ecs_nav` values('7','','0','配送方式','1','7','0','article.php?id=26','bottom');");
E_D("replace into `ecs_nav` values('8','c','1','小米手机','1','2','0','category.php?id=1','middle');");
E_D("replace into `ecs_nav` values('9','c','5','配件','1','4','0','category.php?id=5','middle');");
E_D("replace into `ecs_nav` values('11','','0','专题页','1','8','0','topic.php?topic_id=1','middle');");
E_D("replace into `ecs_nav` values('13','','0','积分商城','1','11','0','exchange.php','middle');");
E_D("replace into `ecs_nav` values('14','','0','留言板','0','12','0','message.php','middle');");
E_D("replace into `ecs_nav` values('15','','0','团购商品','1','13','0','group_buy.php','middle');");
E_D("replace into `ecs_nav` values('16','','0','小米网','1','1','0','#','top');");
E_D("replace into `ecs_nav` values('17','','0','MIUI','1','2','0','#','top');");
E_D("replace into `ecs_nav` values('18','','0','米聊','1','3','0','#','top');");
E_D("replace into `ecs_nav` values('19','','0','游戏','1','4','0','#','top');");
E_D("replace into `ecs_nav` values('20','','0','多看阅读','1','5','0','#','top');");
E_D("replace into `ecs_nav` values('21','','0','小米网移动版','1','6','0','mobile','top');");

require("../../inc/footer.php");
?>