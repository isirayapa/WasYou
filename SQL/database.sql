CREATE DATABSE washyou;
CHANGE washyou;

CREATE TABLE customer(
id INT(10) NOT NULL PRIMARY KEY,
name VARCHAR(40),
district VARCHAR(15),
address VARCHAR(30),
contact_no INT(12),
email VARCHAR(20),
password VARCHAR(18),
usage INT(10),
);

CREATE TABLE delivery(
driver_id INT(12) NOT NULL PRIMARY KEY,
vehicle_no INT(12),
vehicle_type VARCHAR(20),
)

CREATE TABLE usage(
customer_id INT(10),
order_id INT(10),
count INT(10),
CONSTRAINT fk_1 FOREIGN KEY (customer_id) REFERENCES customer(id),
CONSTRAINT fk_2 FOREIGN KEY (order_id) REFERENCES pre_order(id),
CONSTRAINT pk PRIMARY KEY (customer_id,order_id)
)

CREATE TABLE pre_oder(
id INT(10) NOT NULL PRIMARY KEY,
customer_id INT(10),
product_capacity INT(10),
delivery_date DATE,
pickup_date DATE,
state VARCHAR(10)
CONSTRAINT fk FOREIGN KEY (customer_id) REFERENCES customer(id)
)

CREATE TABLE order_history(
id INT(10) NOT NULL PRIMARY KEY,
customer_id INT(10),
product_capacity INT(10),
delivery_date DATE,
pickup_date DATE,
amount INT(10)
)

