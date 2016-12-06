CREATE DATABASE washyou;
USE washyou;

CREATE TABLE customer(
id INT(10) NOT NULL PRIMARY KEY,
name VARCHAR(40),
district VARCHAR(15),
address VARCHAR(30),
contact_no INT(12),
email VARCHAR(20),
password VARCHAR(18),
frequency INT(10)
);

CREATE TABLE driver(
full_name VARCHAR(200),
vehicle_no VARCHAR(200),
license_no VARCHAR(200) NOT NULL PRIMARY KEY,
mobile VARCHAR(200),
address VARCHAR(200),
);

CREATE TABLE order(
id INT(10) NOT NULL PRIMARY KEY,
customer_email INT(10),
product_capacity INT(10),
delivery_date DATE,
pickup_date DATE,
state VARCHAR(10),
license_no VARCHAR(50),
CONSTRAINT fk FOREIGN KEY (customer_email) REFERENCES customer(email),
CONSTRAINT fk2 FOREIGN KEY (license_no) REFERENCES delivery(license_no)

);

