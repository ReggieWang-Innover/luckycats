<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_article`;");
E_C("CREATE TABLE `ecs_article` (
  `article_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL DEFAULT '',
  `author_email` varchar(60) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `article_type` tinyint(1) unsigned NOT NULL DEFAULT '2',
  `is_open` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `file_url` varchar(255) NOT NULL DEFAULT '',
  `open_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_article` values('1','2','公司简介','','','','','0','1','1380510899','','0','','');");
E_D("replace into `ecs_article` values('2','2','管理团队','','','','','0','1','1380510899','','0','','');");
E_D("replace into `ecs_article` values('3','2','小米文化','','','','','0','1','1380510899','','0','','');");
E_D("replace into `ecs_article` values('4','2','发展经历','','','','','0','1','1380510899','','0','','');");
E_D("replace into `ecs_article` values('5','2','小米新闻','','','','','0','1','1380510899','','0','','');");
E_D("replace into `ecs_article` values('6','-1','用户协议','','','','','0','1','1380510899','','0','','');");
E_D("replace into `ecs_article` values('7','4','购物常见问题','','','','','0','1','1380937690','','0','http://','');");
E_D("replace into `ecs_article` values('8','4','订单状态','','','','','0','1','1380937699','','0','http://','');");
E_D("replace into `ecs_article` values('9','4','购物流程','','','','','0','1','1380937711','','0','http://','');");
E_D("replace into `ecs_article` values('10','5','货到付款','','','','','0','1','1380937720','','0','http://','');");
E_D("replace into `ecs_article` values('11','5','配送支付智能查询','','','','','0','1','1380937737','','0','http://','');");
E_D("replace into `ecs_article` values('12','5','在线支付','','','','','0','1','1380937745','','0','http://','');");
E_D("replace into `ecs_article` values('13','6','配送范围与费用','','','','','0','1','1380937753','','0','http://','');");
E_D("replace into `ecs_article` values('14','6','签收须知','','','','','0','1','1380937762','','0','http://','');");
E_D("replace into `ecs_article` values('15','6','快递送货','','','','','0','1','1380937775','','0','http://','');");
E_D("replace into `ecs_article` values('16','7','退换货流程','','','','','0','1','1380937782','','0','http://','');");
E_D("replace into `ecs_article` values('17','7','退换货政策','','','','','0','1','1380937797','','0','http://','');");
E_D("replace into `ecs_article` values('18','7','服务政策','','','','','0','1','1380937810','','0','http://','');");
E_D("replace into `ecs_article` values('19','8','小米手机官翻版','','','','','0','1','1381083295','','0','http://','');");
E_D("replace into `ecs_article` values('20','8','企业用户采购通道','','','','','0','1','1381083304','','0','http://','');");
E_D("replace into `ecs_article` values('21','8','国庆节客服、小米之家服务时间','','','','','0','1','1381083315','','0','http://','');");
E_D("replace into `ecs_article` values('22','9','新浪微博','','','','','0','1','1399301627','','0','http://','');");
E_D("replace into `ecs_article` values('23','9','QQ空间','','','','','0','1','1399301640','','0','http://','');");
E_D("replace into `ecs_article` values('24','9','官方微信','','','','','0','1','1399301649','','0','http://','');");
E_D("replace into `ecs_article` values('25','2','加入小米','','','','','0','1','1402403473','','0','http://','');");
E_D("replace into `ecs_article` values('26','2','联系我们','','','','','0','1','1402403487','','0','http://','');");

require("../../inc/footer.php");
?>