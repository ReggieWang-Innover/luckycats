<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods`;");
E_C("CREATE TABLE `ecs_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_name_style` varchar(60) NOT NULL DEFAULT '+',
  `click_count` int(10) unsigned NOT NULL DEFAULT '0',
  `brand_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `provider_name` varchar(100) NOT NULL DEFAULT '',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_weight` decimal(10,3) unsigned NOT NULL DEFAULT '0.000',
  `market_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `shop_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `promote_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `promote_start_date` int(11) unsigned NOT NULL DEFAULT '0',
  `promote_end_date` int(11) unsigned NOT NULL DEFAULT '0',
  `warn_number` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `goods_brief` varchar(255) NOT NULL DEFAULT '',
  `goods_desc` text NOT NULL,
  `goods_thumb` varchar(255) NOT NULL DEFAULT '',
  `goods_img` varchar(255) NOT NULL DEFAULT '',
  `original_img` varchar(255) NOT NULL DEFAULT '',
  `is_real` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `is_on_sale` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_alone_sale` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_shipping` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `sort_order` smallint(4) unsigned NOT NULL DEFAULT '100',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_best` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_new` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_promote` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bonus_type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `last_update` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_type` smallint(5) unsigned NOT NULL DEFAULT '0',
  `seller_note` varchar(255) NOT NULL DEFAULT '',
  `give_integral` int(11) NOT NULL DEFAULT '-1',
  `rank_integral` int(11) NOT NULL DEFAULT '-1',
  `suppliers_id` smallint(5) unsigned DEFAULT NULL,
  `is_check` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`goods_id`),
  KEY `goods_sn` (`goods_sn`),
  KEY `cat_id` (`cat_id`),
  KEY `last_update` (`last_update`),
  KEY `brand_id` (`brand_id`),
  KEY `goods_weight` (`goods_weight`),
  KEY `promote_end_date` (`promote_end_date`),
  KEY `promote_start_date` (`promote_start_date`),
  KEY `goods_number` (`goods_number`),
  KEY `sort_order` (`sort_order`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods` values('1','10','ECS000000','双口USB充电器1','+','570','1','','0','0.000','58.80','49.00','40.00','1381046400','1478332800','0','','适用于小米手机2 / 2S','<div class=\"bd\">\r\n<div id=\"goodsDesc\" class=\"goods-desc-con\">\r\n<p><img style=\"width: 720px; height: 530px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang.jpg\" alt=\"\" /><img style=\"width: 720px; height: 600px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang1.jpg\" alt=\"\" /><img style=\"width: 720px; height: 524px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang2.jpg\" alt=\"\" /><img style=\"width: 720px; height: 658px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuangsan123.jpg\" alt=\"\" /></p>\r\n</div>\r\n</div>','images/201310/thumb_img/1_thumb_G_1381080926818.jpg','images/201310/goods_img/1_G_1381080926401.jpg','images/201310/source_img/1_G_1381080926338.jpg','1','','0','1','0','0','1381080926','100','0','1','1','0','1','0','1417977483','1','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('2','10','ECS000002','Adiaos限量T恤（白色L）','+','105','1','','100','0.000','36.00','30.00','28.00','1381075200','1478361600','1','','','<div class=\"bd\">\r\n<div id=\"goodsDesc\" class=\"goods-desc-con\">\r\n<p><img style=\"width: 720px; height: 530px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang.jpg\" alt=\"\" /><img style=\"width: 720px; height: 600px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang1.jpg\" alt=\"\" /><img style=\"width: 720px; height: 524px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang2.jpg\" alt=\"\" /><img style=\"width: 720px; height: 658px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuangsan123.jpg\" alt=\"\" /></p>\r\n</div>\r\n</div>','images/201310/thumb_img/2_thumb_G_1381081006658.jpg','images/201310/goods_img/2_G_1381081006155.jpg','images/201310/source_img/2_G_1381081006740.jpg','1','','1','1','0','0','1381081006','100','0','0','1','1','1','0','1399298150','0','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('3','10','ECS000003','小米超薄5055mAh移动电源（白）','+','47','1','','100','0.000','154.79','129.00','99.00','1384704000','1479744000','1','','','<div class=\"bd\">\r\n<div class=\"goods-desc-con\" id=\"goodsDesc\">\r\n<p><img alt=\"\" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang.jpg\" style=\"width: 720px; height: 530px; \" /><img alt=\"\" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang1.jpg\" style=\"width: 720px; height: 600px; \" /><img alt=\"\" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang2.jpg\" style=\"width: 720px; height: 524px; \" /><img alt=\"\" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuangsan123.jpg\" style=\"width: 720px; height: 658px; \" /></p>\r\n</div>\r\n</div>','images/201310/thumb_img/3_thumb_G_1381081063005.jpg','images/201310/goods_img/3_G_1381081063443.jpg','images/201310/source_img/3_G_1381081063278.jpg','1','','1','1','0','1','1381081063','100','0','0','1','1','1','0','1399298150','0','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('4','10','ECS000004','鳄鱼纹真皮后盖（豹纹黄）','+','176','1','','100','0.000','118.80','99.00','98.00','1399219200','1493913600','1','','','<div class=\"bd\">\r\n<div id=\"goodsDesc\" class=\"goods-desc-con\">\r\n<p><img style=\"width: 720px; height: 530px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang.jpg\" alt=\"\" /><img style=\"width: 720px; height: 600px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang1.jpg\" alt=\"\" /><img style=\"width: 720px; height: 524px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang2.jpg\" alt=\"\" /><img style=\"width: 720px; height: 658px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuangsan123.jpg\" alt=\"\" /></p>\r\n</div>\r\n</div>','images/201310/thumb_img/4_thumb_G_1381081094117.jpg','images/201310/goods_img/4_G_1381081094237.jpg','images/201310/source_img/4_G_1381081094291.jpg','1','','1','1','0','0','1381081094','100','0','1','1','1','1','0','1399301696','0','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('5','10','ECS000005','冰淇淋色后盖（黄）-非NFC','+','224','1','','0','0.000','58.80','49.00','39.00','1399190400','1493884800','0','','','<div class=\"bd\">\r\n<div id=\"goodsDesc\" class=\"goods-desc-con\">\r\n<p><img style=\"width: 720px; height: 530px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang.jpg\" alt=\"\" /><img style=\"width: 720px; height: 600px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang1.jpg\" alt=\"\" /><img style=\"width: 720px; height: 524px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang2.jpg\" alt=\"\" /><img style=\"width: 720px; height: 658px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuangsan123.jpg\" alt=\"\" /></p>\r\n</div>\r\n</div>','images/201310/thumb_img/5_thumb_G_1381081130578.jpg','images/201310/goods_img/5_G_1381081130476.jpg','images/201310/source_img/5_G_1381081130081.jpg','1','','1','1','0','0','1381081130','100','0','1','0','1','1','0','1410327946','1','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('6','10','ECS000006','社区帽衫版米兔','+','133','1','','100','0.000','21.59','18.00','0.00','0','0','1','','','<div class=\"bd\">\r\n<div id=\"goodsDesc\" class=\"goods-desc-con\">\r\n<p><img style=\"width: 720px; height: 530px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang.jpg\" alt=\"\" /><img style=\"width: 720px; height: 600px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang1.jpg\" alt=\"\" /><img style=\"width: 720px; height: 524px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang2.jpg\" alt=\"\" /><img style=\"width: 720px; height: 658px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuangsan123.jpg\" alt=\"\" /></p>\r\n</div>\r\n</div>','images/201310/thumb_img/6_thumb_G_1381081160153.jpg','images/201310/goods_img/6_G_1381081160462.jpg','images/201310/source_img/6_G_1381081160257.jpg','1','','1','1','0','0','1381081160','100','0','0','1','1','0','0','1399298150','0','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('7','11','ECS000007','小米定制版拉卡拉刷卡器','+','99','1','','100','0.000','105.60','88.00','0.00','0','0','1','','','<div class=\"bd\">\r\n<div id=\"goodsDesc\" class=\"goods-desc-con\">\r\n<p><img style=\"width: 720px; height: 530px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang.jpg\" alt=\"\" /><img style=\"width: 720px; height: 600px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang1.jpg\" alt=\"\" /><img style=\"width: 720px; height: 524px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang2.jpg\" alt=\"\" /><img style=\"width: 720px; height: 658px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuangsan123.jpg\" alt=\"\" /></p>\r\n</div>\r\n</div>','images/201310/thumb_img/7_thumb_G_1381081297850.jpg','images/201310/goods_img/7_G_1381081297686.jpg','images/201310/source_img/7_G_1381081297677.jpg','1','','1','1','0','0','1381081297','100','0','1','1','1','0','0','1399298150','0','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('8','11','ECS000008','学院风帆布双肩包（黑）','+','161','1','','100','0.000','70.80','59.00','0.00','0','0','1','','','<div class=\"bd\">\r\n<div id=\"goodsDesc\" class=\"goods-desc-con\">\r\n<p><img style=\"width: 720px; height: 530px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang.jpg\" alt=\"\" /><img style=\"width: 720px; height: 600px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang1.jpg\" alt=\"\" /><img style=\"width: 720px; height: 524px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuang2.jpg\" alt=\"\" /><img style=\"width: 720px; height: 658px; \" src=\"http://p.www.xiaomi.com/images/tu0326/hongmihuangsan123.jpg\" alt=\"\" /></p>\r\n</div>\r\n</div>','images/201310/thumb_img/8_thumb_G_1381081330475.jpg','images/201310/goods_img/8_G_1381081330963.jpg','images/201310/source_img/8_G_1381081330468.jpg','1','','1','1','0','0','1381081330','100','0','1','1','1','0','0','1399298150','0','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('9','5','ECS000009','魔声Beats Studio HD 2.0耳机 蓝色','+','15','0','','1','0.000','3598.79','2999.00','0.00','0','0','1','','','','images/201405/thumb_img/9_thumb_G_1399531228356.jpg','images/201405/goods_img/9_G_1399531228565.jpg','images/201405/source_img/9_G_1399531228509.jpg','1','','1','1','0','29','1399531228','100','0','0','0','0','0','0','1399531228','0','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('10','5','ECS000010','魔声Beats Studio HD 2.0耳机 红色','+','86','0','','1','0.000','3600.00','3000.00','0.00','0','0','1','','','','images/201405/thumb_img/10_thumb_G_1399531258195.jpg','images/201405/goods_img/10_G_1399531258997.jpg','images/201405/source_img/10_G_1399531258199.jpg','1','','1','1','0','30','1399531258','100','0','1','0','1','0','0','1399548124','0','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('11','5','ECS000011','魔声Beats Studio HD 2.0耳机 白色','+','67','0','','1','0.000','3600.00','3000.00','0.00','0','0','1','','','','images/201405/thumb_img/11_thumb_G_1399531296734.jpg','images/201405/goods_img/11_G_1399531296228.jpg','images/201405/source_img/11_G_1399531296806.jpg','1','','1','1','0','30','1399531296','100','0','0','1','0','0','0','1399531762','0','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('12','5','ECS000012','小米短袖POLO男款 浅灰','+','36','0','','1','0.000','58.80','49.00','0.00','0','0','1','','','','images/201405/thumb_img/12_thumb_G_1399531363015.jpg','images/201405/goods_img/12_G_1399531363722.jpg','images/201405/source_img/12_G_1399531363753.jpg','1','','1','1','0','0','1399531363','100','0','1','0','0','0','0','1399531757','0','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('13','5','ECS000013','小米女款短袖POLO衫 浅蓝','+','37','0','','1','0.000','58.80','49.00','0.00','0','0','1','','','','images/201405/thumb_img/13_thumb_G_1399531406684.jpg','images/201405/goods_img/13_G_1399531406023.jpg','images/201405/source_img/13_G_1399531406366.jpg','1','','1','1','0','0','1399531406','100','0','0','0','0','0','0','1399531406','0','','-1','-1','0','0');");

require("../../inc/footer.php");
?>