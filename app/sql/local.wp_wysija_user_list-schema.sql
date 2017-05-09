/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_wysija_user_list` (
  `list_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `sub_date` int(10) unsigned DEFAULT '0',
  `unsub_date` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`list_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
