/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_wysija_url_mail` (
  `email_id` int(11) NOT NULL AUTO_INCREMENT,
  `url_id` int(10) unsigned NOT NULL,
  `unique_clicked` int(10) unsigned NOT NULL DEFAULT '0',
  `total_clicked` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`email_id`,`url_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
