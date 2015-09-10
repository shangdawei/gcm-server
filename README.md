# gcm-server
GCM Example Implementation in PHP and Bootstrap based on Google example code

This is just a very basic server. You have to adjust it to your needs.


MySQL database tables used in this example.

devices_types:

CREATE TABLE `device_types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;


devices:

CREATE TABLE `devices` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `registration_id` varchar(255) DEFAULT NULL,
  `device_type_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


Device Type could be: 1=Android, 2=iOS, ... Whatever you think is helpful for you.
