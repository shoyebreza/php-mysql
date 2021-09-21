MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| ciproject          |
| ciproject43        |
| code               |
| company            |
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
20 rows in set (0.001 sec)

MariaDB [(none)]> use company;
Database changed
MariaDB [company]> show tables;
+-------------------+
| Tables_in_company |
+-------------------+
| employee          |
| employee2         |
+-------------------+
2 rows in set (0.000 sec)

MariaDB [company]> drop table employee;
Query OK, 0 rows affected (0.023 sec)

MariaDB [company]> show tables;
+-------------------+
| Tables_in_company |
+-------------------+
| employee2         |
+-------------------+
1 row in set (0.000 sec)

MariaDB [company]> create table employee(
    -> id int unsigned not null auto_increment primary key,
    -> employee_id char(8) not null,
    -> first_name varchar(100) not null,
    -> last_name varchar(100) not null,
    -> email varchar(50) not null,
    -> phone char(11) not null,
    -> salary decimal(8,2) not null );
Query OK, 0 rows affected (0.021 sec)

MariaDB [company]> describe employee;
+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| id          | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| employee_id | char(8)          | NO   |     | NULL    |                |
| first_name  | varchar(100)     | NO   |     | NULL    |                |
| last_name   | varchar(100)     | NO   |     | NULL    |                |
| email       | varchar(50)      | NO   |     | NULL    |                |
| phone       | char(11)         | NO   |     | NULL    |                |
| salary      | decimal(8,2)     | NO   |     | NULL    |                |
+-------------+------------------+------+-----+---------+----------------+
7 rows in set (0.006 sec)

MariaDB [company]> insert into employee(employee_id,first_name,last_name,email,phone,salary)value(1,'shoyeb','reza',
    -> 'shoyebreza@gmail.com',01782873767,25000);    
Query OK, 1 row affected (0.006 sec)

MariaDB [company]> view employee;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'view employee' at line 1
MariaDB [company]> describe employee;
+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| id          | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| employee_id | char(8)          | NO   |     | NULL    |                |
| first_name  | varchar(100)     | NO   |     | NULL    |                |
| last_name   | varchar(100)     | NO   |     | NULL    |                |
| email       | varchar(50)      | NO   |     | NULL    |                |
| phone       | char(11)         | NO   |     | NULL    |                |
| salary      | decimal(8,2)     | NO   |     | NULL    |                |
+-------------+------------------+------+-----+---------+----------------+
7 rows in set (0.005 sec)

MariaDB [company]> create view employee_info as select first_name, last_name, email, phone, from employee order by first_name asc;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'from employee order by first_name asc' at line 1
MariaDB [company]> create view employee_info as select first_name, last_name, email, phone, from employee order by first_name ASC;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'from employee order by first_name ASC' at line 1
MariaDB [company]> create view employee_info as select first_name, last_name, email, phone, from employee order by first_name;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'from employee order by first_name' at line 1
MariaDB [company]> create view employee_info as select first_name, last_name, email, phone, from employee;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'from employee' at line 1
MariaDB [company]> CREATE VIEW employee_info AS SELECT first_name, last_name, email, phone,salary FROM employee;
Query OK, 0 rows affected (0.009 sec)

MariaDB [company]> select * from employee_info;
+------------+-----------+----------------------+------------+----------+
| first_name | last_name | email                | phone      | salary   |
+------------+-----------+----------------------+------------+----------+
| shoyeb     | reza      | shoyebreza@gmail.com | 1782873767 | 25000.00 |
+------------+-----------+----------------------+------------+----------+
1 row in set (0.004 sec)

MariaDB [company]> insert into employee(employee_id,first_name,last_name,email,phone,salary)value(1,'shoyeb','reza',
    -> 'shoyebreza@gmail.com',01782873867,15000);
Query OK, 1 row affected (0.004 sec)

MariaDB [company]> insert into employee(employee_id,first_name,last_name,email,phone,salary)value(1,'shoyeb','reza',
    -> 'shoyeb@gmail.com',01782873867,10000);
Query OK, 1 row affected (0.005 sec)

MariaDB [company]> select * from employee_info;
+------------+-----------+----------------------+------------+----------+
| first_name | last_name | email                | phone      | salary   |
+------------+-----------+----------------------+------------+----------+
| shoyeb     | reza      | shoyebreza@gmail.com | 1782873767 | 25000.00 |
| shoyeb     | reza      | shoyebreza@gmail.com | 1782873867 | 15000.00 |
| shoyeb     | reza      | shoyeb@gmail.com     | 1782873867 | 10000.00 |
+------------+-----------+----------------------+------------+----------+
3 rows in set (0.000 sec)

MariaDB [company]> select table_name, table_type, engine from informtion_schema.tables where table_schema = 'book' order by table_name; 
ERROR 1146 (42S02): Table 'informtion_schema.tables' doesn't exist
MariaDB [company]> describe employee_info;
+------------+--------------+------+-----+---------+-------+
| Field      | Type         | Null | Key | Default | Extra |
+------------+--------------+------+-----+---------+-------+
| first_name | varchar(100) | NO   |     | NULL    |       |
| last_name  | varchar(100) | NO   |     | NULL    |       |
| email      | varchar(50)  | NO   |     | NULL    |       |
| phone      | char(11)     | NO   |     | NULL    |       |
| salary     | decimal(8,2) | NO   |     | NULL    |       |
+------------+--------------+------+-----+---------+-------+
5 rows in set (0.005 sec)

MariaDB [company]> select last_name, email from employee_info;
+-----------+----------------------+
| last_name | email                |
+-----------+----------------------+
| reza      | shoyebreza@gmail.com |
| reza      | shoyebreza@gmail.com |
| reza      | shoyeb@gmail.com     |
+-----------+----------------------+
3 rows in set (0.000 sec)

MariaDB [company]> select * from employee_info order by phone;
+------------+-----------+----------------------+------------+----------+
| first_name | last_name | email                | phone      | salary   |
+------------+-----------+----------------------+------------+----------+
| shoyeb     | reza      | shoyebreza@gmail.com | 1782873767 | 25000.00 |
| shoyeb     | reza      | shoyebreza@gmail.com | 1782873867 | 15000.00 |
| shoyeb     | reza      | shoyeb@gmail.com     | 1782873867 | 10000.00 |
+------------+-----------+----------------------+------------+----------+
3 rows in set (0.003 sec)

MariaDB [company]> select * from employee_info where last_name='reza';
+------------+-----------+----------------------+------------+----------+
| first_name | last_name | email                | phone      | salary   |
+------------+-----------+----------------------+------------+----------+
| shoyeb     | reza      | shoyebreza@gmail.com | 1782873767 | 25000.00 |
| shoyeb     | reza      | shoyebreza@gmail.com | 1782873867 | 15000.00 |
| shoyeb     | reza      | shoyeb@gmail.com     | 1782873867 | 10000.00 |
+------------+-----------+----------------------+------------+----------+
3 rows in set (0.004 sec)

MariaDB [company]> show create view eployee_info;
ERROR 1146 (42S02): Table 'company.eployee_info' doesn't exist
MariaDB [company]> show create view employee_info;
+---------------+-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+----------------------+----------------------+
| View          | Create View                                                                                                                                                                                                                                                                                         | character_set_client | collation_connection |
+---------------+-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+----------------------+----------------------+
| employee_info | CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employee_info` AS select `employee`.`first_name` AS `first_name`,`employee`.`last_name` AS `last_name`,`employee`.`email` AS `email`,`employee`.`phone` AS `phone`,`employee`.`salary` AS `salary` from `employee` | cp850                | cp850_general_ci     |
+---------------+-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+----------------------+----------------------+
1 row in set (0.000 sec)

MariaDB [company]> update employee_info set phone='01972873767' where email='shoyeb@gmail.com';
Query OK, 1 row affected (0.006 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [company]> drop view if exists employee_info;
Query OK, 0 rows affected (0.000 sec)

MariaDB [company]> exit
