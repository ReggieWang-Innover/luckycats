<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_users`;");
E_C("CREATE TABLE `ecs_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `aite_id` text NOT NULL,
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `frozen_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_points` int(10) unsigned NOT NULL DEFAULT '0',
  `rank_points` int(10) unsigned NOT NULL DEFAULT '0',
  `address_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0',
  `last_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `visit_count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `user_rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_special` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ec_salt` varchar(10) DEFAULT NULL,
  `salt` varchar(10) NOT NULL DEFAULT '0',
  `parent_id` mediumint(9) NOT NULL DEFAULT '0',
  `flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `alias` varchar(60) NOT NULL,
  `msn` varchar(60) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `is_validated` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `credit_line` decimal(10,2) unsigned NOT NULL,
  `passwd_question` varchar(50) DEFAULT NULL,
  `passwd_answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `email` (`email`),
  KEY `parent_id` (`parent_id`),
  KEY `flag` (`flag`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_users` values('1','','php8@hejin.cc','test','5a10af93c54539977d766c54cce8dd63','','','0','1954-01-01','10000.00','0.00','100000','0','1','1381154749','1410328158','0000-00-00 00:00:00','140.206.182.114','1442','0','0','8507','0','0','0','','','','','','','0','0.00','','');");
E_D("replace into `ecs_users` values('2','','hphp8@139.com','851176816','75884303152a16a92400775371c24756','','','0','0000-00-00','0.00','0.00','0','0','2','1407708685','1407708685','0000-00-00 00:00:00','122.189.103.242','1','0','0','','0','0','0','','','','','','','0','0.00','','');");
E_D("replace into `ecs_users` values('20','','test@test.com','test1234','217c4c790b4113c4dde426dc3da1c624','','','0','0000-00-00','0.00','0.00','0','0','6','1410541367','1410556338','0000-00-00 00:00:00','76.74.178.49','3','0','0','3602','0','0','0','','','123456789','','','','0','0.00','','');");
E_D("replace into `ecs_users` values('19','','php8@qq.com','a5201314','723d505516e0c197e42a6be3c0af910e','','','0','0000-00-00','0.00','0.00','0','0','0','1410274130','1410274130','0000-00-00 00:00:00','110.88.254.107','1','0','0','','0','0','0','','','5201314','','','','0','0.00','','');");
E_D("replace into `ecs_users` values('18','','123@php8.com','1232123','e10adc3949ba59abbe56e057f20f883e','','','0','0000-00-00','0.00','0.00','0','0','0','1410214321','1410214321','0000-00-00 00:00:00','112.65.139.182','1','0','0','','0','0','0','','','123456','','','','0','0.00','','');");
E_D("replace into `ecs_users` values('21','','ha@aa.com','haihui','2deb30a7070a80b4c61e6a46dcb457ed','','','0','0000-00-00','0.00','0.00','0','0','7','1411330463','1415055133','0000-00-00 00:00:00','127.0.0.1','4','0','0','8805','0','0','0','','','','','','','0','0.00','','');");

require("../../inc/footer.php");
?>