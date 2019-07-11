--Name of the data base
CREATE DATABASE RunnerDB;
--here it use the data base
USE RunnerDB;

-- create the user name and password 
CREATE USER "adminted"@"%" IDENTIFIED BY "nawazted";

--giving pribvilige to my user-%
GRANT ALL PRIVILEGES ON RunnerDB.* TO "adminted"@"%";

--creating the table 
CREATE TABLE walkers(
id INT PRIMARY KEY AUTO_INCREMENT,
title VARCHAR (200),
name  VARCHAR (200),
photo VARCHAR (200),
city VARCHAR (200),
postal code TEXT ,
route VARCHAR (200),
upload photo VARCHAR (200),
country VARCHAR (200),
discription VARCHAR (4000), 
);