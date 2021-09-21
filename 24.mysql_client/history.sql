tee history.sql;
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

MariaDB [(none)]> use test;
Database changed
MariaDB [test]> show tables;
+----------------+
| Tables_in_test |
+----------------+
| cities         |
| users          |
+----------------+
2 rows in set (0.000 sec)

MariaDB [test]> describe cities;
+------------+--------------+------+-----+---------+----------------+
| Field      | Type         | Null | Key | Default | Extra          |
+------------+--------------+------+-----+---------+----------------+
| id         | int(11)      | NO   | PRI | NULL    | auto_increment |
| cityname   | varchar(255) | NO   |     | NULL    |                |
| cityrating | varchar(250) | NO   |     | NULL    |                |
+------------+--------------+------+-----+---------+----------------+
3 rows in set (0.005 sec)

MariaDB [test]> drop table users;
Query OK, 0 rows affected (0.012 sec)

MariaDB [test]> show tables;
+----------------+
| Tables_in_test |
+----------------+
| cities         |
+----------------+
1 row in set (0.000 sec)

MariaDB [test]> create table users(
    -> id smallint unsigned not null auto_increment,
    -> username varchar(50) not null,
    -> password varchar(15) not null,
    -> primary key(id)
    -> );
Query OK, 0 rows affected (0.022 sec)

MariaDB [test]> show tables;
+----------------+
| Tables_in_test |
+----------------+
| cities         |
| users          |
+----------------+
2 rows in set (0.000 sec)

MariaDB [test]> describe cities;
+------------+--------------+------+-----+---------+----------------+
| Field      | Type         | Null | Key | Default | Extra          |
+------------+--------------+------+-----+---------+----------------+
| id         | int(11)      | NO   | PRI | NULL    | auto_increment |
| cityname   | varchar(255) | NO   |     | NULL    |                |
| cityrating | varchar(250) | NO   |     | NULL    |                |
+------------+--------------+------+-----+---------+----------------+
3 rows in set (0.005 sec)

MariaDB [test]> describe users;
+----------+----------------------+------+-----+---------+----------------+
| Field    | Type                 | Null | Key | Default | Extra          |
+----------+----------------------+------+-----+---------+----------------+
| id       | smallint(5) unsigned | NO   | PRI | NULL    | auto_increment |
| username | varchar(50)          | NO   |     | NULL    |                |
| password | varchar(15)          | NO   |     | NULL    |                |
+----------+----------------------+------+-----+---------+----------------+
3 rows in set (0.005 sec)

MariaDB [test]> show engines;
+--------------------+---------+-------------------------------------------------------------------------------------------------+--------------+------+------------+
| Engine             | Support | Comment                                                                                         | Transactions | XA   | Savepoints |
+--------------------+---------+-------------------------------------------------------------------------------------------------+--------------+------+------------+
| CSV                | YES     | Stores tables as CSV files                                                                      | NO           | NO   | NO         |
| MRG_MyISAM         | YES     | Collection of identical MyISAM tables                                                           | NO           | NO   | NO         |
| MEMORY             | YES     | Hash based, stored in memory, useful for temporary tables                                       | NO           | NO   | NO         |
| Aria               | YES     | Crash-safe tables with MyISAM heritage. Used for internal temporary tables and privilege tables | NO           | NO   | NO         |
| MyISAM             | YES     | Non-transactional engine with good performance and small data footprint                         | NO           | NO   | NO         |
| SEQUENCE           | YES     | Generated tables filled with sequential values                                                  | YES          | NO   | YES        |
| InnoDB             | DEFAULT | Supports transactions, row-level locking, foreign keys and encryption for tables                | YES          | YES  | YES        |
| PERFORMANCE_SCHEMA | YES     | Performance Schema                                                                              | NO           | NO   | NO         |
+--------------------+---------+-------------------------------------------------------------------------------------------------+--------------+------+------------+
8 rows in set (0.000 sec)

MariaDB [test]> show databases;
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

MariaDB [test]> create database company;
Query OK, 1 row affected (0.001 sec)

MariaDB [test]> use company;
Database changed
MariaDB [company]> create table employee(id tinyint unsigned not null auto_increment,
    -> firstname varchar(50) not null,
    -> lastname varchar(50) not null,
    -> email varchar(45) not null,
    -> phone varchar(10) not null,
    -> primary key(id));
Query OK, 0 rows affected (0.016 sec)

MariaDB [company]> show tables;
+-------------------+
| Tables_in_company |
+-------------------+
| employee          |
+-------------------+
1 row in set (0.000 sec)

MariaDB [company]> describe company;
ERROR 1146 (42S02): Table 'company.company' doesn't exist
MariaDB [company]> describe employee;
+-----------+---------------------+------+-----+---------+----------------+
| Field     | Type                | Null | Key | Default | Extra          |
+-----------+---------------------+------+-----+---------+----------------+
| id        | tinyint(3) unsigned | NO   | PRI | NULL    | auto_increment |
| firstname | varchar(50)         | NO   |     | NULL    |                |
| lastname  | varchar(50)         | NO   |     | NULL    |                |
| email     | varchar(45)         | NO   |     | NULL    |                |
| phone     | varchar(10)         | NO   |     | NULL    |                |
+-----------+---------------------+------+-----+---------+----------------+
5 rows in set (0.005 sec)

MariaDB [company]> create table employee2 select * from employee;
Query OK, 0 rows affected (0.016 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [company]> show tables;
+-------------------+
| Tables_in_company |
+-------------------+
| employee          |
| employee2         |
+-------------------+
2 rows in set (0.000 sec)

MariaDB [company]> describe employee2;
+-----------+---------------------+------+-----+---------+-------+
| Field     | Type                | Null | Key | Default | Extra |
+-----------+---------------------+------+-----+---------+-------+
| id        | tinyint(3) unsigned | NO   |     | 0       |       |
| firstname | varchar(50)         | NO   |     | NULL    |       |
| lastname  | varchar(50)         | NO   |     | NULL    |       |
| email     | varchar(45)         | NO   |     | NULL    |       |
| phone     | varchar(10)         | NO   |     | NULL    |       |
+-----------+---------------------+------+-----+---------+-------+
5 rows in set (0.005 sec)

MariaDB [company]> alter table employee2 add column city;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [company]> alter table employee2 add column city after phone;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'phone' at line 1
MariaDB [company]> alter table employee2 add column city varchar after phone;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'after phone' at line 1
MariaDB [company]> alter table employee2 add column city varchar(50) after phone;
Query OK, 0 rows affected (0.010 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [company]> describe employee2;
+-----------+---------------------+------+-----+---------+-------+
| Field     | Type                | Null | Key | Default | Extra |
+-----------+---------------------+------+-----+---------+-------+
| id        | tinyint(3) unsigned | NO   |     | 0       |       |
| firstname | varchar(50)         | NO   |     | NULL    |       |
| lastname  | varchar(50)         | NO   |     | NULL    |       |
| email     | varchar(45)         | NO   |     | NULL    |       |
| phone     | varchar(10)         | NO   |     | NULL    |       |
| city      | varchar(50)         | YES  |     | NULL    |       |
+-----------+---------------------+------+-----+---------+-------+
6 rows in set (0.005 sec)

MariaDB [company]> alter table employee2 drop city;
Query OK, 0 rows affected (0.009 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [company]> describe employee2;
+-----------+---------------------+------+-----+---------+-------+
| Field     | Type                | Null | Key | Default | Extra |
+-----------+---------------------+------+-----+---------+-------+
| id        | tinyint(3) unsigned | NO   |     | 0       |       |
| firstname | varchar(50)         | NO   |     | NULL    |       |
| lastname  | varchar(50)         | NO   |     | NULL    |       |
| email     | varchar(45)         | NO   |     | NULL    |       |
| phone     | varchar(10)         | NO   |     | NULL    |       |
+-----------+---------------------+------+-----+---------+-------+
5 rows in set (0.005 sec)

MariaDB [company]> alter table employee2 add column city varchar(50) not null after phone;
Query OK, 0 rows affected (0.010 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [company]> describe employee2;
+-----------+---------------------+------+-----+---------+-------+
| Field     | Type                | Null | Key | Default | Extra |
+-----------+---------------------+------+-----+---------+-------+
| id        | tinyint(3) unsigned | NO   |     | 0       |       |
| firstname | varchar(50)         | NO   |     | NULL    |       |
| lastname  | varchar(50)         | NO   |     | NULL    |       |
| email     | varchar(45)         | NO   |     | NULL    |       |
| phone     | varchar(10)         | NO   |     | NULL    |       |
| city      | varchar(50)         | NO   |     | NULL    |       |
+-----------+---------------------+------+-----+---------+-------+
6 rows in set (0.005 sec)

MariaDB [company]> alter table employee2 change id id int not null auto_increment primary key;
Query OK, 0 rows affected (0.044 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [company]> describe employee2;
+-----------+-------------+------+-----+---------+----------------+
| Field     | Type        | Null | Key | Default | Extra          |
+-----------+-------------+------+-----+---------+----------------+
| id        | int(11)     | NO   | PRI | NULL    | auto_increment |
| firstname | varchar(50) | NO   |     | NULL    |                |
| lastname  | varchar(50) | NO   |     | NULL    |                |
| email     | varchar(45) | NO   |     | NULL    |                |
| phone     | varchar(10) | NO   |     | NULL    |                |
| city      | varchar(50) | NO   |     | NULL    |                |
+-----------+-------------+------+-----+---------+----------------+
6 rows in set (0.005 sec)

MariaDB [company]> 