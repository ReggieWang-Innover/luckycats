<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_gallery`;");
E_C("CREATE TABLE `ecs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_desc` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_gallery` values('1','1','images/201310/goods_img/1_P_1381080926345.jpg','','images/201310/thumb_img/1_thumb_P_1381080926252.jpg','images/201310/source_img/1_P_1381080926252.jpg');");
E_D("replace into `ecs_goods_gallery` values('2','2','images/201310/goods_img/2_P_1381081006183.jpg','','images/201310/thumb_img/2_thumb_P_1381081006998.jpg','images/201310/source_img/2_P_1381081006625.jpg');");
E_D("replace into `ecs_goods_gallery` values('3','3','images/201310/goods_img/3_P_1381081063895.jpg','','images/201310/thumb_img/3_thumb_P_1381081063765.jpg','images/201310/source_img/3_P_1381081063245.jpg');");
E_D("replace into `ecs_goods_gallery` values('4','4','images/201310/goods_img/4_P_1381081094109.jpg','','images/201310/thumb_img/4_thumb_P_1381081094938.jpg','images/201310/source_img/4_P_1381081094741.jpg');");
E_D("replace into `ecs_goods_gallery` values('5','5','images/201310/goods_img/5_P_1381081130142.jpg','','images/201310/thumb_img/5_thumb_P_1381081130989.jpg','images/201310/source_img/5_P_1381081130258.jpg');");
E_D("replace into `ecs_goods_gallery` values('6','6','images/201310/goods_img/6_P_1381081160319.jpg','','images/201310/thumb_img/6_thumb_P_1381081160314.jpg','images/201310/source_img/6_P_1381081160107.jpg');");
E_D("replace into `ecs_goods_gallery` values('7','7','images/201310/goods_img/7_P_1381081297847.jpg','','images/201310/thumb_img/7_thumb_P_1381081297029.jpg','images/201310/source_img/7_P_1381081297356.jpg');");
E_D("replace into `ecs_goods_gallery` values('8','8','images/201310/goods_img/8_P_1381081330534.jpg','','images/201310/thumb_img/8_thumb_P_1381081330901.jpg','images/201310/source_img/8_P_1381081330400.jpg');");
E_D("replace into `ecs_goods_gallery` values('9','1','images/201310/goods_img/1_P_1381203515547.jpg','','images/201310/thumb_img/1_thumb_P_1381203515884.jpg','images/201310/source_img/1_P_1381203514337.jpg');");
E_D("replace into `ecs_goods_gallery` values('10','1','images/201310/goods_img/1_P_1381203515847.jpg','','images/201310/thumb_img/1_thumb_P_1381203515686.jpg','images/201310/source_img/1_P_1381203515905.jpg');");
E_D("replace into `ecs_goods_gallery` values('11','1','images/201310/goods_img/1_P_1381203515167.jpg','','images/201310/thumb_img/1_thumb_P_1381203515910.jpg','images/201310/source_img/1_P_1381203515827.jpg');");
E_D("replace into `ecs_goods_gallery` values('12','9','images/201405/goods_img/9_P_1399531228596.jpg','','images/201405/thumb_img/9_thumb_P_1399531228645.jpg','images/201405/source_img/9_P_1399531228191.jpg');");
E_D("replace into `ecs_goods_gallery` values('13','10','images/201405/goods_img/10_P_1399531258646.jpg','','images/201405/thumb_img/10_thumb_P_1399531258274.jpg','images/201405/source_img/10_P_1399531258988.jpg');");
E_D("replace into `ecs_goods_gallery` values('14','11','images/201405/goods_img/11_P_1399531296091.jpg','','images/201405/thumb_img/11_thumb_P_1399531296025.jpg','images/201405/source_img/11_P_1399531296940.jpg');");
E_D("replace into `ecs_goods_gallery` values('15','12','images/201405/goods_img/12_P_1399531363074.jpg','','images/201405/thumb_img/12_thumb_P_1399531363714.jpg','images/201405/source_img/12_P_1399531363395.jpg');");
E_D("replace into `ecs_goods_gallery` values('16','13','images/201405/goods_img/13_P_1399531406794.jpg','','images/201405/thumb_img/13_thumb_P_1399531406331.jpg','images/201405/source_img/13_P_1399531406346.jpg');");

require("../../inc/footer.php");
?>