mysql>
mysql>//1//
mysql>
mysql>mysql --port=7188 -u root
mysql>
mysql>CREATE DATABASE rental;
mysql>
mysql>//2//
mysql>
mysql>use rental;
mysql>
mysql> CREATE TABLE dvd
    -> (
    -> dvd_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    -> title VARCHAR(255),
    -> production_year INT(4)
    -> );
mysql>
mysql> CREATE TABLE customer
    -> (
    -> customer_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    -> first_name VARCHAR(255),
    -> last_name VARCHAR(255),
    -> passport_code INT(11),
    -> registration_date DATE
    -> );
mysql>
mysql> CREATE TABLE offer
    -> (
    -> offer_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    -> dvd_id INT(11),
    -> customer_id INT(11),
    -> offer_date DATE,
    -> return_date DATE
    -> );
mysql>
mysql>//3//
mysql>
mysql> INSERT INTO dvd
    -> (title, production_year)
    -> VALUES
    -> ('disc1', '1990'),
    -> ('disc2', '1991'),
    -> ('disc3', '1992'),
    -> ('disc4', '1993'),
    -> ('disc5', '1994'),
    -> ('disc6', '1995'),
    -> ('disc7', '1996'),
    -> ('disc8', '1997'),
    -> ('disc9', '2003'),
    -> ('disc10', '2008'),
    -> ('disc11', '2012'),
    -> ('disc12', '2013'),
    -> ('disc13', '2010'),
    -> ('disc14', '2010'),
    -> ('a1', 2010),
    -> ('b1', 2010);
mysql>
mysql> INSERT INTO customer
    -> (first_name, last_name, passport_code, registration_date)
    -> VALUES
    -> ('first_name1', 'last_name1', 111111, '2014-03-24'),
    -> ('first_name2', 'last_name2', 222222, '1990-08-14');
mysql>
mysql> INSERT INTO offer
    -> (dvd_id, customer_id, offer_date, return_date)
    -> VALUES
    -> (1,2,'2014-02-15', '2015-02-15'),
    -> (2,1,'2015-02-15', '2013-03-16'),
    -> (3,4,'2014-07-08', '2015-12-12');
mysql>
mysql>//4//
mysql>
mysql> SELECT * FROM dvd
    -> WHERE
    -> production_year=2010
    -> ORDER BY title;
mysql>
mysql>//5//
mysql>
mysql> SELECT d.dvd_id, d.title, d.production_year
    -> FROM dvd d
    -> JOIN offer o ON (d.dvd_id=o.dvd_id)
    -> WHERE o.offer_date < NOW() AND o.return_date > NOW();
mysql>
mysql>//6//
mysql>
mysql> SELECT c.first_name, c.last_name, c.passport_code, c.registration_date, d.dvd_id, d.title, d.production_year
    -> FROM customer c
    -> JOIN offer o ON( c.customer_id = o.customer_id )
    -> JOIN dvd d ON ( d.dvd_id = o.dvd_id )
    -> WHERE YEAR(o.offer_date)=YEAR(NOW());
mysql>