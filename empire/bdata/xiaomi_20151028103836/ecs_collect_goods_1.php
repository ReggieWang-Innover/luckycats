<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_collect_goods`;");
E_C("CREATE TABLE `ecs_collect_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  `is_attention` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`),
  KEY `is_attention` (`is_attention`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_collect_goods` values('1','1','1','1381156278','0');");
E_D("replace into `ecs_collect_goods` values('3','1','5','1399461564','0');");
E_D("replace into `ecs_collect_goods` values('4','1','8','1401034404','0');");
E_D("replace into `ecs_collect_goods` values('5','1','12','1401112073','0');");
E_D("replace into `ecs_collect_goods` values('6','1','3','1401112439','0');");
E_D("replace into `ecs_collect_goods` values('7','1','7','1407536180','0');");

require("../../inc/footer.php");
?>