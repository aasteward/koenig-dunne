/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_wysija_email_user_url` (
  `email_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `url_id` int(10) unsigned NOT NULL,
  `clicked_at` int(10) unsigned DEFAULT NULL,
  `number_clicked` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`email_id`,`url_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
