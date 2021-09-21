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
20 rows in set (0.013 sec)

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
5 rows in set (0.011 sec)

MariaDB [company]> delimiter//
    -> create function calculate_bonus
    -> (emp_id char(8) returns decimal(10,2)
    -> comment 'calculate employee bonus'
    -> begin
    -> declare total decimal(10,2);
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'delimiter//create function calculate_bonus
(emp_id char(8) returns decimal(10...' at line 1
MariaDB [company]> delimiter//
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'delimiter//' at line 1
MariaDB [company]> delimiter//;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'delimiter//' at line 1
MariaDB [company]> delimiter //
MariaDB [company]> create function calc_bonus (emp_id char(8)) returns decimal(10,2) comment 'calculate employee bonus'
    -> begin
    -> declare total decimal(10,2);
    -> declare bonus decimal(10,2);
    -> select sum(revenue) into total from sales where employee_id = emp_id;
    -> set bonus = total * .05;
    -> return bonus;
    -> end;
    -> //
Query OK, 0 rows affected (0.017 sec)

MariaDB [company]> delimiter ;
MariaDB [company]> select calc_bonus;
ERROR 1054 (42S22): Unknown column 'calc_bonus' in 'field list'
MariaDB [company]> show tables
    -> ;
+-------------------+
| Tables_in_company |
+-------------------+
| employee          |
| employee2         |
+-------------------+
2 rows in set (0.000 sec)

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

MariaDB [company]> 