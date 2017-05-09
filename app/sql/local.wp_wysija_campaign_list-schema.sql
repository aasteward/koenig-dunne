/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_wysija_campaign_list` (
  `list_id` int(10) unsigned NOT NULL,
  `campaign_id` int(10) unsigned NOT NULL,
  `filter` text,
  PRIMARY KEY (`list_id`,`campaign_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
