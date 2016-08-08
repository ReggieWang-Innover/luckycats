<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_title` text NOT NULL,
  `group_img` varchar(50) NOT NULL,
  `isg_new` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `isg_rs` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `group_rs` int(11) NOT NULL,
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('1','双口USB充电器','','1','1','双口USB充电器','1399392000','1494432000','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:10;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','0','<全国包邮>杭州果品 新鲜大樱桃 智利空运进口车厘子2斤装，车厘子表面呈暗红色，果实硕大、坚实而多汁，入口甜美果肉细腻。且营养丰富，含铁量特别高，位于各种水果之首，号称 “百果第一枝”。常吃樱桃可改善贫血，美白淡斑，令人美志气好颜色！','data/group_img/1399473878401162596.jpg','0','0','166');");
E_D("replace into `ecs_goods_activity` values('2','冰淇淋色后盖（黄）-非NFC','','1','5','冰淇淋色后盖（黄）-非NFC','1399392000','1494432000','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:10;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','0','<全国包邮>丝路宝典二级（四星）和田枣500g*3袋。源自北纬37°水果优生带，自然风干晾晒，肉厚核小，个大均匀，营养丰富，补血养颜，适合各类人群食用。 \r\n','data/group_img/1399474041824989147.jpg','0','1','300');");
E_D("replace into `ecs_goods_activity` values('3','社区帽衫版米兔','','1','6','社区帽衫版米兔','1399392000','1494432000','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:10;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','0','<全国包邮> 翼铂YBTG-063手机数码移动电源13600毫安！拒绝低电量！钢琴烤漆外观！超大容量，绝不虚标！支持双USB充电！进口锂电芯打造！带LED强光手电筒！超安全便携！直供正品保障！智能识别电路！在火车上，在地铁上，在旅途中，在游戏中随时随刻保持满格电量\r\n','data/group_img/1399474147896074860.jpg','1','0','479');");
E_D("replace into `ecs_goods_activity` values('4','学院风帆布双肩包（黑）','','1','8','学院风帆布双肩包（黑）','1399305600','1494432000','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:10;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','0','<全国包邮>优衣美2012秋冬新款 韩版修身提臀显瘦大码休闲长裤，保暖加绒VS完美微喇，立体裁剪工艺，2款7色任选，打造你的美腿style！','data/group_img/1399474211007394475.jpg','0','0','472');");
E_D("replace into `ecs_goods_activity` values('5','Adiaos限量T恤（白色L）','','1','2','Adiaos限量T恤（白色L）','1399305600','1494432000','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:20;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','0','<全国包邮>恒源祥家纺精品高支全棉斜纹印花四件套系列，15款任选。采用优质的棉作为原材料，棉纤维的强度高，透气性好，与皮肤接触不会产生任何刺激，面料柔软细腻不起球。','data/group_img/1399474272849414746.jpg','1','1','500');");

require("../../inc/footer.php");
?>