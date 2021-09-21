MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| ciproject          |
| ciproject43        |
| code               |
| empm               |
| hm                 |
| hospital           |
| hostel             |
| hotel              |
| information_schema |
| laravel            |
| laravelpos         |
| mysql              |
| ng_db              |
| performance_schema |
| pharmacy           |
| phpmyadmin         |
| pos                |
| test               |
| todo               |
+--------------------+
19 rows in set (0.001 sec)

MariaDB [(none)]> use todo;
Database changed
MariaDB [todo]> show tables;
+----------------+
| Tables_in_todo |
+----------------+
| crud           |
| logins         |
| pass_reset     |
| reset          |
| subscribers    |
| tasks          |
| users          |
+----------------+
7 rows in set (0.000 sec)

MariaDB [todo]> describe crud;
+-------+--------------+------+-----+---------+----------------+
| Field | Type         | Null | Key | Default | Extra          |
+-------+--------------+------+-----+---------+----------------+
| id    | int(11)      | NO   | PRI | NULL    | auto_increment |
| name  | varchar(255) | NO   |     | NULL    |                |
| email | varchar(250) | NO   |     | NULL    |                |
| phone | varchar(255) | NO   |     | NULL    |                |
| city  | varchar(255) | NO   |     | NULL    |                |
+-------+--------------+------+-----+---------+----------------+
5 rows in set (0.008 sec)

MariaDB [todo]> select name, email, phone from crud order by city limit 3;
+------------+----------------------+-------------+
| name       | email                | phone       |
+------------+----------------------+-------------+
| ramjanali  | ramjan_ali@gmail.com | 0157330124  |
| shoyeb     | shoyebreza@gmail.com | 01521355084 |
| ramjanali  | ramjan_ali@gmail.com | 0157330124  |
+------------+----------------------+-------------+
3 rows in set (0.003 sec)

MariaDB [todo]> show variable like "version";
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'variable like "version"' at line 1
MariaDB [todo]> exit
