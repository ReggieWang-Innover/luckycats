<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `log_info` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('1','1411328640','1','还原数据库备份: 备份时间2014-09-16 22:27:08','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2','1411329391','1','添加商品分类: PHP源码吧','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3','1411332613','1','编辑文章分类: 微商城','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('4','1411332704','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('5','1411332733','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('6','1411332763','1','编辑会员账号: a5201314','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('7','1411332768','1','编辑会员账号: a5201314','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('8','1411332770','1','编辑会员账号: 1232123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('9','1411332774','1','编辑会员账号: 851176816','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('10','1411332781','1','编辑会员账号: test','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('11','1411332792','1','编辑会员账号: test','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('12','1411332796','1','编辑会员账号: test','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('13','1411332980','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('14','1411333145','1','编辑前台语言项: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('15','1411499292','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('16','1414954602','1','编辑商品: 双口USB充电器1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('17','1415561582','1','添加订单: 2014111093811','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('18','1415561612','1','添加订单: 2014111018796','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('19','1418426475','1','编辑广告位置: 手机版首页-底部版权','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('20','1418426493','1','编辑广告位置: 手机版首页-新品广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('21','1418426507','1','编辑广告位置: 手机版首页-特惠广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('22','1418426515','1','编辑广告位置: 手机版首页-中间广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('23','1418426523','1','编辑广告位置: 手机版首页-轮播广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('24','1421709087','1','还原数据库备份: 备份时间2015-01-20 15:09:00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('25','1431838128','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('26','1441590844','1','还原数据库备份: 备份时间2015-05-17 20:52:06','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('27','1441591048','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('28','1445818841','1','删除商品分类: PHP源码吧','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('29','1445820848','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('30','1445821549','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('31','1445822077','1','编辑广告: 首页-轮播广告-底部广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('32','1445822082','1','编辑广告: 手机版首页-轮播广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('33','1445969766','1','编辑广告: 首页-新品上架广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('34','1445969779','1','编辑广告: 首页-推荐产品广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('35','1445969792','1','编辑广告: 首页-轮播广告-底部广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('36','1445969807','1','编辑广告: 首页-轮播广告-底部广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('37','1445969814','1','编辑广告: 首页-轮播广告-底部广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('38','1445969834','1','编辑广告: 手机版首页-轮播广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('39','1445969853','1','编辑广告: 手机版首页-轮播广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('40','1445969862','1','编辑广告: 手机版首页-轮播广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('41','1445969871','1','编辑广告: 手机版首页-轮播广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('42','1445969883','1','编辑广告: 手机版首页-特惠广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('43','1445969892','1','编辑广告: 手机版首页-中间广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('44','1445969920','1','编辑广告: 手机版首页-中间广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('45','1445969946','1','编辑广告: 手机版首页-中间广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('46','1445969958','1','编辑广告: 手机版首页-底部版权','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('47','1445969981','1','编辑广告: 手机版首页-中间广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('48','1445969989','1','编辑广告: 手机版首页-中间广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('49','1445970219','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('50','1445970240','1','编辑商店设置: ','127.0.0.1');");

require("../../inc/footer.php");
?>