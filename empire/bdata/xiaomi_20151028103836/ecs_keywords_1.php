<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2013-10-07','ecshop','小米电视','1');");
E_D("replace into `ecs_keywords` values('2013-10-07','ecshop','小米手机3','2');");
E_D("replace into `ecs_keywords` values('2013-10-07','ecshop','冰淇淋','18');");
E_D("replace into `ecs_keywords` values('2013-10-08','ecshop','小米电视','1');");
E_D("replace into `ecs_keywords` values('2014-05-07','ecshop','小米手机3','2');");
E_D("replace into `ecs_keywords` values('2014-05-08','ecshop','小米手机3','6');");
E_D("replace into `ecs_keywords` values('2014-05-08','ecshop','111','3');");
E_D("replace into `ecs_keywords` values('2014-05-08','ecshop','小米','1');");
E_D("replace into `ecs_keywords` values('2014-05-08','ecshop','ww','1');");
E_D("replace into `ecs_keywords` values('2014-08-11','ecshop','小米手机3','1');");
E_D("replace into `ecs_keywords` values('2014-08-14','ecshop','小米手机3','1');");
E_D("replace into `ecs_keywords` values('2014-08-26','ecshop','小米电视','1');");
E_D("replace into `ecs_keywords` values('2014-08-26','ecshop','小米手机3','1');");
E_D("replace into `ecs_keywords` values('2014-08-29','SOGOU','http://4.hi5.cc','1');");
E_D("replace into `ecs_keywords` values('2014-09-04','ecshop','小米手机3','2');");
E_D("replace into `ecs_keywords` values('2014-09-04','ecshop','小米电视','2');");
E_D("replace into `ecs_keywords` values('2014-09-05','ecshop','小米手机3','1');");
E_D("replace into `ecs_keywords` values('2014-09-07','ecshop','小米电视','1');");
E_D("replace into `ecs_keywords` values('2014-09-08','BAIDU','4.hi5.cc','1');");
E_D("replace into `ecs_keywords` values('2014-09-08','ecshop','小米手机3','1');");
E_D("replace into `ecs_keywords` values('2014-09-08','ecshop','冰淇淋色后盖','1');");
E_D("replace into `ecs_keywords` values('2014-09-09','ecshop','小米电视','1');");
E_D("replace into `ecs_keywords` values('2014-09-10','ecshop','小米电视','1');");
E_D("replace into `ecs_keywords` values('2014-09-10','ecshop','小米手机3','2');");
E_D("replace into `ecs_keywords` values('2014-09-12','BAIDU','4.hi5.cc','1');");
E_D("replace into `ecs_keywords` values('2014-09-13','ecshop','小米手机3','1');");
E_D("replace into `ecs_keywords` values('2014-09-14','ecshop','小米手机3','1');");
E_D("replace into `ecs_keywords` values('2014-09-15','ecshop','你的','1');");

require("../../inc/footer.php");
?>