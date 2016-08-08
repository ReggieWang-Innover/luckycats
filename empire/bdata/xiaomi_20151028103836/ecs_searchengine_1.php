<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_searchengine`;");
E_C("CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_searchengine` values('2014-08-25','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2014-08-26','GOOGLE','140');");
E_D("replace into `ecs_searchengine` values('2014-08-27','GOOGLE','142');");
E_D("replace into `ecs_searchengine` values('2014-08-28','GOOGLE','70');");
E_D("replace into `ecs_searchengine` values('2014-08-30','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2014-08-31','GOOGLE','15');");
E_D("replace into `ecs_searchengine` values('2014-09-01','GOOGLE','15');");
E_D("replace into `ecs_searchengine` values('2014-09-02','GOOGLE','14');");
E_D("replace into `ecs_searchengine` values('2014-09-03','GOOGLE','21');");
E_D("replace into `ecs_searchengine` values('2014-09-06','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2014-09-07','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2014-09-08','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2014-09-09','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2014-09-12','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2014-09-13','GOOGLE','1');");

require("../../inc/footer.php");
?>