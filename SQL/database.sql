CREATE DATABASE washyou;
USE washyou;

CREATE TABLE customer(
name VARCHAR(40),
district VARCHAR(15),
address VARCHAR(30),
contact_no INT(12),
email VARCHAR(100) NOT NULL PRIMARY KEY,
password VARCHAR(18),
frequency INT(10)
);

CREATE TABLE driver(
full_name VARCHAR(200),
vehicle_no VARCHAR(200),
license_no VARCHAR(200) NOT NULL PRIMARY KEY,
mobile VARCHAR(200),
address VARCHAR(200)
);

CREATE TABLE ODR(
id INT(10) NOT NULL PRIMARY KEY,
customer_email VARCHAR(100),
product_capacity INT(10),
delivery_date DATE,
pickup_date DATE,
token VARCHAR(10),
license_no VARCHAR(200),
CONSTRAINT fk FOREIGN KEY (customer_email) REFERENCES customer(email),
CONSTRAINT fk2 FOREIGN KEY (license_no) REFERENCES driver(license_no)

);

