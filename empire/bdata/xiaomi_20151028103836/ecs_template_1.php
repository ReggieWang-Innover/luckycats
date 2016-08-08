<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_template`;");
E_C("CREATE TABLE `ecs_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_template` values('category','分类页广告二','/library/ad_position.lbi','0','30','1','4','xiaomi','');");
E_D("replace into `ecs_template` values('category','分类页广告一','/library/ad_position.lbi','0','29','1','4','xiaomi','');");
E_D("replace into `ecs_template` values('category','','/library/brands.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_promotion.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('category','右边区域','/library/pages.lbi','1','0','0','0','xiaomi','');");
E_D("replace into `ecs_template` values('category','右边区域','/library/goods_list.lbi','0','0','0','0','xiaomi','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_hot.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('category','精品','/library/recommend_best.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('category','浏览历史记录','/library/history.lbi','0','0','0','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','文章-新闻公告','/library/cat_articles.lbi','0','8','5','3','xiaomi','');");
E_D("replace into `ecs_template` values('index','商品-分类','/library/cat_goods.lbi','0','1','4','1','xiaomi','');");
E_D("replace into `ecs_template` values('index','商品-分类','/library/cat_goods.lbi','1','5','4','1','xiaomi','');");
E_D("replace into `ecs_template` values('index','','/library/auction.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','','/library/brands.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','','/library/group_buy.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_promotion.lbi','0','0','4','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_hot.lbi','0','0','7','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_new.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_best.lbi','0','0','3','0','xiaomi','');");

require("../../inc/footer.php");
?>