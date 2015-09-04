# gcm-server
GCM Example Implementation in PHP and Bootstrap

This is just a very basic server. You have to adjust it to your needs.


The MySQL database tables used in this example.


devices_types:
+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| id          | int(11) unsigned | NO   | PRI | NULL    | auto_increment |
| name        | varchar(255)     | YES  |     | NULL    |                |
| description | varchar(500)     | YES  |     |         |                |
+-------------+------------------+------+-----+---------+----------------+


devices:
+-----------------+------------------+------+-----+---------+----------------+
| Field           | Type             | Null | Key | Default | Extra          |
+-----------------+------------------+------+-----+---------+----------------+
| id              | int(11) unsigned | NO   | PRI | NULL    | auto_increment |
| registration_id | varchar(255)     | YES  |     | NULL    |                |
| device_type_id  | int(11) unsigned | YES  |     | NULL    |                |
+-----------------+------------------+------+-----+---------+----------------+


Device Type can be 1=Android, 2=iOS, ... Whatever you think is helpful for you.
