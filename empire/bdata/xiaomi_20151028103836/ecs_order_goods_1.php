<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('1','1','1','双口USB充电器','ECS000000','0','4','68.80','50.00','颜色:白色[10] \n','0','1','','0','0','1');");
E_D("replace into `ecs_order_goods` values('2','1','4','鳄鱼纹真皮后盖（豹纹黄）','ECS000004','0','2','118.80','98.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('3','2','4','鳄鱼纹真皮后盖（豹纹黄）','ECS000004','0','2','118.80','98.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('4','3','7','小米定制版拉卡拉刷卡器','ECS000007','0','3','105.60','88.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('5','4','5','冰淇淋色后盖（黄）-非NFC','ECS000005','0','1','58.80','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('6','5','4','鳄鱼纹真皮后盖（豹纹黄）','ECS000004','0','1','118.80','98.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('7','5','6','社区帽衫版米兔','ECS000006','0','1','21.59','18.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('8','6','10','魔声Beats Studio HD 2.0耳机 红色','ECS000010','0','1','3600.00','3000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('9','6','1','双口USB充电器','ECS000000','0','6','68.80','50.00','颜色:白色[10] \n','0','1','','0','0','1');");
E_D("replace into `ecs_order_goods` values('10','7','8','学院风帆布双肩包（黑）','ECS000008','0','1','70.80','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('11','7','5','冰淇淋色后盖（黄）-非NFC','ECS000005','0','1','58.80','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('12','7','12','小米短袖POLO男款 浅灰','ECS000012','0','3','58.80','49.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('13','8','7','小米定制版拉卡拉刷卡器','ECS000007','0','1','105.60','88.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('14','9','11','魔声Beats Studio HD 2.0耳机 白色','ECS000011','0','1','3600.00','3000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('15','10','4','鳄鱼纹真皮后盖（豹纹黄）','ECS000004','0','1','118.80','98.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('16','10','1','双口USB充电器','ECS000000','0','1','68.80','50.00','颜色:白色[10] \n','0','1','','0','0','1');");
E_D("replace into `ecs_order_goods` values('17','11','5','冰淇淋色后盖（黄）-非NFC','ECS000005','0','1','58.80','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('18','12','6','社区帽衫版米兔','ECS000006','0','1','21.59','18.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('19','13','5','冰淇淋色后盖（黄）-非NFC','ECS000005','0','1','58.80','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('20','14','10','魔声Beats Studio HD 2.0耳机 红色','ECS000010','0','3','3600.00','3000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('22','16','5','冰淇淋色后盖（黄）-非NFC','ECS000005','0','1','58.80','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('27','20','10','魔声Beats Studio HD 2.0耳机 红色','ECS000010','0','1','3600.00','3000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('28','20','4','鳄鱼纹真皮后盖（豹纹黄）','ECS000004','0','1','118.80','98.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('29','20','11','魔声Beats Studio HD 2.0耳机 白色','ECS000011','0','1','3600.00','3000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('30','21','11','魔声Beats Studio HD 2.0耳机 白色','ECS000011','0','1','3600.00','3000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('31','22','12','小米短袖POLO男款 浅灰','ECS000012','0','2','58.80','49.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('32','23','4','鳄鱼纹真皮后盖（豹纹黄）','ECS000004','0','1','118.80','98.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('33','24','4','鳄鱼纹真皮后盖（豹纹黄）','ECS000004','0','1','118.80','98.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('34','25','4','鳄鱼纹真皮后盖（豹纹黄）','ECS000004','0','1','118.80','98.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('35','26','11','魔声Beats Studio HD 2.0耳机 白色','ECS000011','0','1','3600.00','3000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('36','27','10','魔声Beats Studio HD 2.0耳机 红色','ECS000010','0','1','3600.00','3000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('37','28','4','鳄鱼纹真皮后盖（豹纹黄）','ECS000004','0','1','118.80','98.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('38','29','3','小米超薄5055mAh移动电源（白）','ECS000003','0','1','154.79','99.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('45','35','5','冰淇淋色后盖（黄）-非NFC','ECS000005','0','3','59.80','40.00','颜色:蓝色[1] \n','0','1','','0','0','6');");
E_D("replace into `ecs_order_goods` values('44','34','11','魔声Beats Studio HD 2.0耳机 白色','ECS000011','0','1','3600.00','3000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('43','33','12','小米短袖POLO男款 浅灰','ECS000012','0','1','58.80','49.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('46','36','11','魔声Beats Studio HD 2.0耳机 白色','ECS000011','0','1','3600.00','3000.00','','0','1','','0','0','');");

require("../../inc/footer.php");
?>