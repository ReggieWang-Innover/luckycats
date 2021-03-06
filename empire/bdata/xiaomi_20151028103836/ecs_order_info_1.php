<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_info`;");
E_C("CREATE TABLE `ecs_order_info` (
  `order_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(20) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) unsigned NOT NULL DEFAULT '0',
  `province` smallint(5) unsigned NOT NULL DEFAULT '0',
  `city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `district` smallint(5) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `postscript` varchar(255) NOT NULL DEFAULT '',
  `shipping_id` tinyint(3) NOT NULL DEFAULT '0',
  `shipping_name` varchar(120) NOT NULL DEFAULT '',
  `pay_id` tinyint(3) NOT NULL DEFAULT '0',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `how_oos` varchar(120) NOT NULL DEFAULT '',
  `how_surplus` varchar(120) NOT NULL DEFAULT '',
  `pack_name` varchar(120) NOT NULL DEFAULT '',
  `card_name` varchar(120) NOT NULL DEFAULT '',
  `card_message` varchar(255) NOT NULL DEFAULT '',
  `inv_payee` varchar(120) NOT NULL DEFAULT '',
  `inv_content` varchar(120) NOT NULL DEFAULT '',
  `goods_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shipping_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `insure_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pack_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `card_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `money_paid` decimal(10,2) NOT NULL DEFAULT '0.00',
  `surplus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `integral_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bonus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `order_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `confirm_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pack_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `card_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(255) NOT NULL DEFAULT '',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `extension_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `to_buyer` varchar(255) NOT NULL DEFAULT '',
  `pay_note` varchar(255) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `is_separate` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `discount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `user_id` (`user_id`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`),
  KEY `shipping_id` (`shipping_id`),
  KEY `pay_id` (`pay_id`),
  KEY `extension_code` (`extension_code`,`extension_id`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_info` values('1','2014050756372','0','1','0','2','test','1','27','343','2913','1','','13197719036','','','','','','1','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','396.00','15.00','0.00','0.00','0.00','0.00','411.00','0.00','0','0.00','0.00','0.00','0','本站','1399446839','1402473686','1402473686','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('2','2014050757930','1','0','0','0','111','1','3','37','409','11111','','111111','','','','','','1','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','196.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','211.00','0','本站','1399447055','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('3','2014050762249','1','0','0','0','111','1','3','37','409','11111','','111111','','','','','','1','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','264.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','279.00','0','本站','1399447188','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('4','2014050736747','1','0','0','0','111','1','3','37','409','11111','','111111','','','','','','1','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','39.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','54.00','0','','1399461618','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('5','2014052520259','1','0','0','0','111','1','3','37','409','11111','','111111','','1111@qq.com','','','','1','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','116.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','131.00','0','本站','1400980132','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('6','2014052606418','1','2','0','0','111','1','3','37','409','11111','','111111','','1111@qq.com','','','','1','顺丰速运','1','支付宝','与店主协商','','','','','','','3300.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','215.00','0','本站','1401111321','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('7','2014052640129','1','0','0','0','111','1','3','37','409','11111','','111111','','1111@qq.com','','','','1','顺丰速运','4','手机支付宝','等待所有商品备齐后再发','','','','','','','245.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','260.00','0','本站','1401116438','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('8','2014052617462','1','0','0','0','111','1','3','37','409','11111','','111111','','1111@qq.com','','','','1','顺丰速运','5','支付宝转账付款','等待所有商品备齐后再发','','','','','','','88.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','103.00','0','本站','1401116543','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('9','2014061110942','1','1','0','2','111','1','3','37','409','11111','','111111','','1111@qq.com','','','','1','顺丰速运','6','微信支付','等待所有商品备齐后再发','','','','','','','3000.00','15.00','0.00','0.00','0.00','0.00','3015.00','0.00','0','0.00','0.00','0.00','0','本站','1402473483','1402473931','1402473931','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('10','2014080954640','1','0','0','0','111','1','3','37','409','11111','','111111','','1111@qq.com','','','','1','顺丰速运','6','微信支付','等待所有商品备齐后再发','','','','','','','148.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','163.00','0','本站','1407521397','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('11','2014081179308','2','0','0','0','啦啦啦','1','2','52','500','流量卡','','8397777','','honkew@139.com','','','','1','顺丰速运','4','手机支付宝接口','等待所有商品备齐后再发','','','','','','','39.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','54.00','0','本站','1407708829','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('12','2014081425328','0','0','0','0','单声道','1','4','53','519','问问','','1111111111','','','','','','1','顺丰速运','5','支付宝转账付款','等待所有商品备齐后再发','','','','','','','18.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','33.00','0','本站','1407965402','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('13','2014082767886','0','0','0','0','王磊','1','2','52','500','斯蒂芬斯蒂芬','','15352522525','','315975648@qq.com','','','','1','顺丰速运','5','支付宝转账付款','等待所有商品备齐后再发','','','','','','','39.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','54.00','0','本站','1409077317','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('14','2014083141294','0','0','0','0','刚回家快看看','1','5','65','627','fhkllg','','13696541234','','ghj@qq.com','','','','1','顺丰速运','5','支付宝转账付款','等待所有商品备齐后再发','','','','','','','9000.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','9015.00','0','本站','1409418100','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('16','2014090273998','0','0','0','0','111','1','26','322','2725','1111','','12345678901','','','','','','1','顺丰速运','5','支付宝转账付款','等待所有商品备齐后再发','','','','','','','39.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','54.00','0','本站','1409607165','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('20','2014090330079','0','0','0','0','1','1','2','52','504','www','','12574225','','1@123.com','','','','1','顺丰速运','4','手机支付宝接口','等待所有商品备齐后再发','','','','','','','6098.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','6113.00','0','本站','1409649108','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('21','2014090301707','0','0','0','0','qq','1','6','81','754','qqqqq@123.com','','1345464245','','qqqqqqqq@123.com','','','','1','顺丰速运','6','微信支付','等待所有商品备齐后再发','','','','','','','3000.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','3015.00','0','本站','1409649262','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('22','2014090368287','0','0','0','0','gfds','1','2','52','502','sadfdas','','12312313123','','','','','','1','顺丰速运','6','微信支付','等待所有商品备齐后再发','','','','','','','98.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','113.00','4','本站','1409686760','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('23','2014090639626','0','0','0','0','IM','1','8','117','1025','hhhh','','55888888','','jjj@jj.com','','','','1','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','98.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','113.00','0','本站','1409939342','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('24','2014090678680','1','0','0','0','111','1','3','37','409','11111','','111111','','1111@qq.com','','','','1','顺丰速运','4','手机支付宝接口','等待所有商品备齐后再发','','','','','','','98.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','113.00','0','本站','1409939495','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('25','2014090607838','1','0','0','0','111','1','3','37','409','11111','','111111','','1111@qq.com','','','','1','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','98.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','113.00','0','本站','1409940212','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('26','2014090653833','1','0','0','0','111','1','3','37','409','11111','','111111','','1111@qq.com','','','','1','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','3000.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','3015.00','0','本站','1409941426','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('27','2014090622963','1','0','0','0','111','1','3','37','409','11111','','111111','','1111@qq.com','','','','1','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','3000.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','3015.00','0','本站','1409941528','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('28','2014090696384','1','0','0','0','111','1','3','37','409','11111','','111111','','1111@qq.com','','','','1','顺丰速运','6','微信支付','等待所有商品备齐后再发','','','','','','','98.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','113.00','0','本站','1409956219','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('29','2014090678063','1','0','0','0','111','1','3','37','409','11111','','111111','','1111@qq.com','','','','1','顺丰速运','6','微信支付','等待所有商品备齐后再发','','','','','','','99.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','114.00','0','本站','1409957629','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('35','2014091484820','0','0','0','0','Ggggy','1','6','90','812','Tyyy','','1523652541','','Fgghh@qq.com','','','','1','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','120.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','135.00','0','本站','1410661130','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('34','2014091390112','20','0','0','0','Nan Anfu','1','7','97','853','Jiangxisheng Ganzhoushi','','8618507976620','','','','','','1','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','3000.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','3015.00','0','本站','1410541614','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('33','2014091397149','20','2','0','0','Nan Anfu','1','7','97','853','Jiangxisheng Ganzhoushi','','8618507976620','','','','','','1','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','49.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','64.00','0','本站','1410541486','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('36','2014093098394','21','0','0','0','haihui','1','18','256','2149','123','','13233333333','','','','','','1','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','3000.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','3015.00','0','本站','1412023547','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('37','2014111093811','0','3','0','0','','0','0','0','0','','','','','','','','','0','','0','','','','','','','','','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.00','0','管理员添加','1415561582','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('38','2014111018796','21','3','0','0','','0','0','0','0','','','','','','','','','0','','0','','','','','','','','','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.00','0','管理员添加','1415561612','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");

require("../../inc/footer.php");
?>