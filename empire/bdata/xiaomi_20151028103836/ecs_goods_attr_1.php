<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('1','1','1','白色','10');");
E_D("replace into `ecs_goods_attr` values('2','1','1','红色','15');");
E_D("replace into `ecs_goods_attr` values('3','1','1','蓝色','20');");
E_D("replace into `ecs_goods_attr` values('4','1','1','黑色','25');");
E_D("replace into `ecs_goods_attr` values('5','5','2','000','0');");
E_D("replace into `ecs_goods_attr` values('6','5','1','蓝色','1');");

require("../../inc/footer.php");
?>