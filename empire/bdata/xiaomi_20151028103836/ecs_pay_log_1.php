<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pay_log`;");
E_C("CREATE TABLE `ecs_pay_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pay_log` values('1','1','411.00','0','0');");
E_D("replace into `ecs_pay_log` values('2','2','211.00','0','0');");
E_D("replace into `ecs_pay_log` values('3','3','279.00','0','0');");
E_D("replace into `ecs_pay_log` values('4','4','54.00','0','0');");
E_D("replace into `ecs_pay_log` values('5','5','131.00','0','0');");
E_D("replace into `ecs_pay_log` values('6','6','1315.00','0','0');");
E_D("replace into `ecs_pay_log` values('7','7','260.00','0','0');");
E_D("replace into `ecs_pay_log` values('8','8','103.00','0','0');");
E_D("replace into `ecs_pay_log` values('9','9','3015.00','0','0');");
E_D("replace into `ecs_pay_log` values('10','10','163.00','0','0');");
E_D("replace into `ecs_pay_log` values('11','11','54.00','0','0');");
E_D("replace into `ecs_pay_log` values('12','12','33.00','0','0');");
E_D("replace into `ecs_pay_log` values('13','13','54.00','0','0');");
E_D("replace into `ecs_pay_log` values('14','14','9015.00','0','0');");
E_D("replace into `ecs_pay_log` values('15','15','54.00','0','0');");
E_D("replace into `ecs_pay_log` values('16','16','54.00','0','0');");
E_D("replace into `ecs_pay_log` values('17','17','113.00','0','0');");
E_D("replace into `ecs_pay_log` values('18','18','3114.00','0','0');");
E_D("replace into `ecs_pay_log` values('19','19','74.00','0','0');");
E_D("replace into `ecs_pay_log` values('20','20','6113.00','0','0');");
E_D("replace into `ecs_pay_log` values('21','21','3015.00','0','0');");
E_D("replace into `ecs_pay_log` values('22','22','113.00','0','0');");
E_D("replace into `ecs_pay_log` values('23','23','113.00','0','0');");
E_D("replace into `ecs_pay_log` values('24','24','113.00','0','0');");
E_D("replace into `ecs_pay_log` values('25','25','113.00','0','0');");
E_D("replace into `ecs_pay_log` values('26','26','3015.00','0','0');");
E_D("replace into `ecs_pay_log` values('27','27','3015.00','0','0');");
E_D("replace into `ecs_pay_log` values('28','28','113.00','0','0');");
E_D("replace into `ecs_pay_log` values('29','29','114.00','0','0');");
E_D("replace into `ecs_pay_log` values('30','30','3054.00','0','0');");
E_D("replace into `ecs_pay_log` values('31','31','113.00','0','0');");
E_D("replace into `ecs_pay_log` values('32','32','113.00','0','0');");
E_D("replace into `ecs_pay_log` values('33','33','64.00','0','0');");
E_D("replace into `ecs_pay_log` values('34','34','3015.00','0','0');");
E_D("replace into `ecs_pay_log` values('35','35','135.00','0','0');");
E_D("replace into `ecs_pay_log` values('36','36','3015.00','0','0');");
E_D("replace into `ecs_pay_log` values('37','37','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('38','38','0.00','0','0');");

require("../../inc/footer.php");
?>