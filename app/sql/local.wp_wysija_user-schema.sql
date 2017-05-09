/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_wysija_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wpuser_id` int(10) unsigned NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL DEFAULT '',
  `lastname` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(100) NOT NULL,
  `confirmed_ip` varchar(100) NOT NULL DEFAULT '0',
  `confirmed_at` int(10) unsigned DEFAULT NULL,
  `last_opened` int(10) unsigned DEFAULT NULL,
  `last_clicked` int(10) unsigned DEFAULT NULL,
  `keyuser` varchar(255) NOT NULL DEFAULT '',
  `created_at` int(10) unsigned DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `domain` varchar(255) DEFAULT '',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `EMAIL_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
