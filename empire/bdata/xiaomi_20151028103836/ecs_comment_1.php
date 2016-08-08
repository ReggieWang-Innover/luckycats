<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_comment`;");
E_C("CREATE TABLE `ecs_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_value` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `parent_id` (`parent_id`),
  KEY `id_value` (`id_value`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_comment` values('3','0','1','76374482@qq.com','test','买了没有后悔，还是官网的好','5','1381212972','127.0.0.1','1','0','1');");
E_D("replace into `ecs_comment` values('4','0','1','76374482@qq.com','test','不错啊，和手机非常般配','5','1381212988','127.0.0.1','1','0','1');");
E_D("replace into `ecs_comment` values('8','0','1','admn@qq.com','','柔软耐用，手感好','4','1399379827','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('9','0','1','admin@qq.com','','不错，比山寨的强很多，用起来手感也不错，颜色也不错，如果多几个选择更好','5','1399379860','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('10','0','1','76374482@qq.com','admin','亲爱的，建议您使用衣领净、蓝月亮、洗衣粉等清洁用品清洗，如果无效您再使用酒精尝试一下，应该会有效果的哦！ ','0','1399379876','127.0.0.1','0','9','0');");
E_D("replace into `ecs_comment` values('11','0','1','76374482@qq.com','admin','您好，时常摸着它，感觉心里痒痒的么( ¯▽¯！)好吧，我邪恶了。我对不起大家，对不起党和领导对我的栽培和指导，我回去从新修炼节操。感谢您的支持。','0','1399379893','127.0.0.1','0','8','0');");
E_D("replace into `ecs_comment` values('12','0','11','admin@qq.com','','还不错哦，合身！173 65千克，L的刚好！','5','1399531809','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('13','0','10','admin@qq.com','','很喜欢的一件POLO衫，款式、布料都不错，米粉就该有这么一件装备 \r\n','4','1399531841','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('14','0','13','admin@qq.com','','面料棉含量是70%，布料不會太薄，洗了不會變形或退色，很好！ \r\n','5','1399531868','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('15','0','2','dfsaf@qq.com','','sdaf','3','1409425951','140.206.182.114','1','0','0');");
E_D("replace into `ecs_comment` values('16','0','2','896581586@qq.com','hello','dfadsa','0','1409426065','140.206.182.114','0','15','0');");
E_D("replace into `ecs_comment` values('17','0','1','896581586@qq.com','','dsaf','5','1409427271','140.206.182.114','1','0','0');");
E_D("replace into `ecs_comment` values('18','0','1','896581586@qq.com','','afd','5','1409428343','140.206.182.114','0','0','0');");
E_D("replace into `ecs_comment` values('19','0','1','896581586@qq.com','','dsaf','5','1409429465','140.206.182.114','0','0','0');");
E_D("replace into `ecs_comment` values('20','0','1','896581586@qq.com','','saf','5','1409430582','140.206.182.114','0','0','0');");
E_D("replace into `ecs_comment` values('21','0','1','896581586@qq.com','test','sdaf','5','1409431494','140.206.182.114','0','0','1');");
E_D("replace into `ecs_comment` values('22','0','2','896581586@qq.com','test','DSAF','5','1409432790','140.206.182.114','0','0','1');");
E_D("replace into `ecs_comment` values('23','0','8','dsf@qq.com','test','dsaf','5','1409433528','140.206.182.114','0','0','1');");
E_D("replace into `ecs_comment` values('24','0','1','896581586@qq.com','test','saf','5','1409433556','140.206.182.114','0','0','1');");
E_D("replace into `ecs_comment` values('25','0','1','896581586@qq.com','test','2313213','4','1409434308','140.206.182.114','0','0','1');");
E_D("replace into `ecs_comment` values('26','0','1','dsaf@qq.com','','dsafdsaf','5','1409610536','112.65.139.182','0','0','0');");

require("../../inc/footer.php");
?>