<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_topic`;");
E_C("CREATE TABLE `ecs_topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '''''',
  `intro` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(10) NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `template` varchar(255) NOT NULL DEFAULT '''''',
  `css` text NOT NULL,
  `topic_img` varchar(255) DEFAULT NULL,
  `title_pic` varchar(255) DEFAULT NULL,
  `base_style` char(6) DEFAULT NULL,
  `htmls` mediumtext,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_topic` values('1','平板电脑','<div class=\"ahz-head container\">\r\n	<h2 class=\"ahz-head-leftCon version-td\">\r\n		<span>平板电脑 </span>\r\n	</h2>\r\n	<div id=\"J_head_rightCon\" class=\"ahz-head-rightCon J_head_rightCon\">\r\n		<span class=\"bold tab\">标题1</span><b>|</b> <span class=\"tab\">标题2</span><b>|</b> <span class=\"tab\">标题3</span><b>|</b> <span class=\"tab\">标题4</span><b>|</b> <span class=\"tab\">标题5</span><b>|</b> <span class=\"tab\">标题6</span> \r\n	</div>\r\n</div>\r\n<div class=\"pad-container\">\r\n	<div class=\"pad-1 J_pad_block \">\r\n		标题1图文html放在这里\r\n		<div class=\"pad-bottom-href \">\r\n			<a class=\"J_toogleWin\" href=\"2\">继续了解 标题2</a> \r\n		</div>\r\n	</div>\r\n	<div class=\"pad-2 J_pad_block hide\">\r\n		标题2图文html放在这里\r\n		<div class=\"pad-bottom-href \">\r\n			<a class=\"J_toogleWin\" href=\"3\">继续了解 标题3</a> \r\n		</div>\r\n	</div>\r\n	<div class=\"pad-3 J_pad_block hide\">\r\n		标题3图文html放在这里\r\n		<div class=\"pad-bottom-href \">\r\n			<a class=\"J_toogleWin\" href=\"4\">继续了解 标题4</a> \r\n		</div>\r\n	</div>\r\n	<div class=\"pad-4 J_pad_block hide\">\r\n		标题4图文html放在这里\r\n		<div class=\"pad-bottom-href \">\r\n			<a class=\"J_toogleWin\" href=\"5\">继续了解 标题5</a> \r\n		</div>\r\n	</div>\r\n	<div class=\"pad-5 J_pad_block hide\">\r\n		标题5图文html放在这里\r\n		<div class=\"pad-bottom-href \">\r\n			<a class=\"J_toogleWin\" href=\"6\">继续了解 标题6</a> \r\n		</div>\r\n	</div>\r\n	<div class=\"pad-6 J_pad_block hide\">\r\n		标题6图文html放在这里\r\n		<div class=\"pad-bottom-href \">\r\n			<a class=\"J_toogleWin\" href=\"1\">继续了解 标题1</a> \r\n		</div>\r\n	</div>\r\n</div>\r\n\r\n','1402243200','1497024000','s:0:\"\";','','','','','','','平板电脑','平板电脑');");

require("../../inc/footer.php");
?>