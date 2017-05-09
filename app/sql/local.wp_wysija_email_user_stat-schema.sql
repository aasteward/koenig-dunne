/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_wysija_email_user_stat` (
  `user_id` int(10) unsigned NOT NULL,
  `email_id` int(10) unsigned NOT NULL,
  `sent_at` int(10) unsigned NOT NULL,
  `opened_at` int(10) unsigned DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
