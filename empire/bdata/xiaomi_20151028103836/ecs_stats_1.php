<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_stats`;");
E_C("CREATE TABLE `ecs_stats` (
  `access_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `visit_times` smallint(5) unsigned NOT NULL DEFAULT '1',
  `browser` varchar(60) NOT NULL DEFAULT '',
  `system` varchar(20) NOT NULL DEFAULT '',
  `language` varchar(20) NOT NULL DEFAULT '',
  `area` varchar(30) NOT NULL DEFAULT '',
  `referer_domain` varchar(100) NOT NULL DEFAULT '',
  `referer_path` varchar(200) NOT NULL DEFAULT '',
  `access_url` varchar(255) NOT NULL DEFAULT '',
  KEY `access_time` (`access_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_stats` values('1411328646','127.0.0.1','289','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/xiaomi2014/admin/index.php?act=top','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1411328658','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/','/php8/xiaomi2014/category.php');");
E_D("replace into `ecs_stats` values('1411329534','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/','/php8/xiaomi2014/category.php');");
E_D("replace into `ecs_stats` values('1411330160','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/index.php','/php8/xiaomi2014/user.php');");
E_D("replace into `ecs_stats` values('1411330169','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/index.php','/php8/xiaomi2014/user.php');");
E_D("replace into `ecs_stats` values('1411330407','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/','/php8/xiaomi2014/user.php');");
E_D("replace into `ecs_stats` values('1411330718','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/user.php','/php8/xiaomi2014/user.php');");
E_D("replace into `ecs_stats` values('1411330722','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/user.php','/php8/xiaomi2014/user.php');");
E_D("replace into `ecs_stats` values('1411330725','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/user.php?act=logout','/php8/xiaomi2014/user.php');");
E_D("replace into `ecs_stats` values('1411330726','127.0.0.1','290','FireFox 32.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1411330727','127.0.0.1','290','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/xiaomi2014/user.php?act=logout','/php8/xiaomi2014/user.php');");
E_D("replace into `ecs_stats` values('1411332951','127.0.0.1','291','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/xiaomi2014/admin/index.php?act=top','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1411332992','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1411408115','127.0.0.1','302','Safari 528.16','Unknown','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1411410858','127.0.0.1','303','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1411412725','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=10','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411412727','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=10','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411412727','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=10','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411413048','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=1','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411413049','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=1','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411413051','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=1','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411413491','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=1','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411413493','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=1','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411448295','127.0.0.1','314','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/','/php8/ectouchecmoban/index.php');");
E_D("replace into `ecs_stats` values('1411499199','127.0.0.1','316','FireFox 32.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1411503198','127.0.0.1','317','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/xiaomi2014/admin/index.php?act=top','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1411521263','127.0.0.1','320','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1411666808','127.0.0.1','331','FireFox 32.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1411752450','127.0.0.1','332','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1411752469','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411752533','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=4','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411752543','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=4','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411752545','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=4','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411752776','127.0.0.1','11','Opera 9.80','Linux','zh-CN,zh','LAN','','','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411753234','127.0.0.1','334','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=4','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411753238','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=4','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411753242','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=4','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411787483','127.0.0.1','348','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1411787505','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/mobile/goods.php?id=4','/php8/xiaomi2014/mobile/goods.php');");
E_D("replace into `ecs_stats` values('1411927381','127.0.0.1','356','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1411927402','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1411928298','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/index.php','/php8/xiaomi2014/category.php');");
E_D("replace into `ecs_stats` values('1411928320','127.0.0.1','357','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/xiaomi2014/category.php?id=2','/php8/xiaomi2014/exchange.php');");
E_D("replace into `ecs_stats` values('1411928321','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/category.php?id=2','/php8/xiaomi2014/category.php');");
E_D("replace into `ecs_stats` values('1411928322','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/category.php?id=2','/php8/xiaomi2014/category.php');");
E_D("replace into `ecs_stats` values('1411928326','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/index.php','/php8/xiaomi2014/category.php');");
E_D("replace into `ecs_stats` values('1411928328','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/index.php','/php8/xiaomi2014/category.php');");
E_D("replace into `ecs_stats` values('1411955788','127.0.0.1','360','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/','/php8/xiaomi20142/index.php');");
E_D("replace into `ecs_stats` values('1412019454','127.0.0.1','363','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1412023468','127.0.0.1','364','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1412023478','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1412023493','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/flow.php','/php8/xiaomi2014/flow.php');");
E_D("replace into `ecs_stats` values('1412023503','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/flow.php?step=checkout','/php8/xiaomi2014/user.php');");
E_D("replace into `ecs_stats` values('1412023522','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/user.php','/php8/xiaomi2014/flow.php');");
E_D("replace into `ecs_stats` values('1412187041','127.0.0.1','375','FireFox 32.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1412480425','127.0.0.1','392','FireFox 32.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1412480426','127.0.0.1','392','FireFox 32.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/mobile/index.php');");
E_D("replace into `ecs_stats` values('1412555339','127.0.0.1','397','FireFox 32.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1413249211','127.0.0.1','436','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1413249216','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1413249222','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/goods.php?id=11','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1413654636','127.0.0.1','462','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1413654636','127.0.0.1','462','FireFox 32.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1413654644','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1413654667','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/index.php','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1414518465','127.0.0.1','3','FireFox 30.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1414954318','127.0.0.1','19','FireFox 30.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1414954610','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/admin/goods.php?act=list&uselastfilter=1','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1415055087','127.0.0.1','25','FireFox 30.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1415055094','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1415055107','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/flow.php','/php8/xiaomi2014/flow.php');");
E_D("replace into `ecs_stats` values('1415055118','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/flow.php','/php8/xiaomi2014/flow.php');");
E_D("replace into `ecs_stats` values('1415055119','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/flow.php','/php8/xiaomi2014/flow.php');");
E_D("replace into `ecs_stats` values('1415055136','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/user.php','/php8/xiaomi2014/flow.php');");
E_D("replace into `ecs_stats` values('1415055175','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/flow.php','/php8/xiaomi2014/flow.php');");
E_D("replace into `ecs_stats` values('1415305252','127.0.0.1','47','FireFox 33.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1415515493','127.0.0.1','54','FireFox 33.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1415515512','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1415561165','127.0.0.1','58','FireFox 33.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1415751773','127.0.0.1','86','Safari 528.16','Unknown','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1415811872','127.0.0.1','93','Safari 528.16','Unknown','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1415812930','127.0.0.1','94','FireFox 33.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1415812934','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1415812950','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/index.php','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1416072776','127.0.0.1','104','FireFox 33.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1417051300','127.0.0.1','159','FireFox 33.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1417715179','127.0.0.1','171','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1417715185','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/goods.php?id=9','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1417715187','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/goods.php?id=9','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1417715189','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/goods.php?id=9','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1417715191','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/goods.php?id=9','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1417715196','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/goods.php?id=9','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1417715198','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/goods.php?id=9','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1417715198','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/goods.php?id=9','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1417715200','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/goods.php?id=9','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1417715205','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/goods.php?id=9','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1417715211','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/goods.php?id=5','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1417974921','127.0.0.1','177','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1417976848','127.0.0.1','178','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1417977411','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/admin/goods.php?act=list','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1417977417','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/admin/goods.php?act=list','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1417977438','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/goods.php?id=4','/php8/xiaomi2014/category.php');");
E_D("replace into `ecs_stats` values('1417977442','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/goods.php?id=4','/php8/xiaomi2014/category.php');");
E_D("replace into `ecs_stats` values('1417977444','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://127.0.0.1','/php8/xiaomi2014/category.php?id=10','/php8/xiaomi2014/category.php');");
E_D("replace into `ecs_stats` values('1418425829','127.0.0.1','1','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/mobile/index.php');");
E_D("replace into `ecs_stats` values('1418667709','127.0.0.1','5','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1418869827','127.0.0.1','9','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1419009239','127.0.0.1','19','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/mobile/index.php');");
E_D("replace into `ecs_stats` values('1419009239','127.0.0.1','19','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/mobile/index.php');");
E_D("replace into `ecs_stats` values('1419012019','127.0.0.1','20','FireFox 34.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/xiaomi2014/admin/index.php?act=top','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1419364934','127.0.0.1','35','FireFox 34.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/xiaomi2014/admin/index.php?act=top','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1419375935','127.0.0.1','37','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/unendins/index.php');");
E_D("replace into `ecs_stats` values('1419467663','127.0.0.1','46','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1419704326','127.0.0.1','57','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1419903595','127.0.0.1','86','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1420164405','127.0.0.1','100','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1420233513','127.0.0.1','101','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1420233763','127.0.0.1','103','FireFox 34.0','Windows NT','zh-cn,zh','LAN','http://127.0.0.1','/php8/xiaomi2014/category.php?id=1','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1420234351','127.0.0.1','106','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1420234422','127.0.0.1','3','Safari 537.36','Windows NT','zh-CN,zh','LAN','','','/php8/xiaomi2014/goods.php');");
E_D("replace into `ecs_stats` values('1420608802','127.0.0.1','118','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1420736035','127.0.0.1','119','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1420761462','127.0.0.1','120','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1420764679','127.0.0.1','121','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1420765459','127.0.0.1','4','Safari 537.36','Windows NT','zh-CN,zh','LAN','','','/php8/xiaomi2014/flow.php');");
E_D("replace into `ecs_stats` values('1421027134','127.0.0.1','123','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1421115811','127.0.0.1','125','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1421189672','127.0.0.1','130','FireFox 34.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1421528384','127.0.0.1','5','FireFox 35.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1421528785','127.0.0.1','6','FireFox 35.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi20142/index.php');");
E_D("replace into `ecs_stats` values('1421529018','127.0.0.1','7','FireFox 35.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1421529698','127.0.0.1','1','Unknow browser','Windows NT','en-US,en','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1421708064','127.0.0.1','8','FireFox 35.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1424990217','127.0.0.1','55','FireFox 35.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1426010993','127.0.0.1','65','FireFox 35.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1428022389','127.0.0.1','105','FireFox 35.0','Windows NT','zh-cn,zh','LAN','','','/php8/huicui/index.php');");
E_D("replace into `ecs_stats` values('1429377064','127.0.0.1','129','FireFox 35.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi2014/index.php');");
E_D("replace into `ecs_stats` values('1431838065','127.0.0.1','162','FireFox 35.0','Windows NT','zh-cn,zh','LAN','','','/php8/xiaomi/index.php');");
E_D("replace into `ecs_stats` values('1441590848','127.0.0.1','1','Safari 537.36','Windows XP','zh-CN,zh','LAN','http://localhost','/admin/index.php?act=top','/index.php');");
E_D("replace into `ecs_stats` values('1445770962','127.0.0.1','5','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1445817859','127.0.0.1','8','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1445818096','127.0.0.1','1','Internet Explorer 8.0','Windows XP','zh-cn','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1445823127','127.0.0.1','2','Internet Explorer 8.0','Windows XP','zh-cn','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1445838113','127.0.0.1','9','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1445879225','127.0.0.1','11','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1445879856','127.0.0.1','3','Internet Explorer 8.0','Windows XP','zh-cn','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1445880025','127.0.0.1','1','Safari 537.36','Windows XP','zh-CN,zh','LAN','http://localhost','/goods.php?id=2','/index.php');");
E_D("replace into `ecs_stats` values('1445923417','127.0.0.1','3','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1445934319','127.0.0.1','4','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1445969629','127.0.0.1','5','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/index.php');");

require("../../inc/footer.php");
?>