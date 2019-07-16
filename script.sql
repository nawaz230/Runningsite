--Création de la base de données "RunnerDB"
CREATE DATABASE RunnerDB;

--On utilise la base de donnéées
USE RunnerDB;

--Créer le tableau "walkers" 
CREATE TABLE walkers(
id INT PRIMARY KEY AUTO_INCREMENT,
title VARCHAR (200),
name  VARCHAR (200),
photo VARCHAR (200),
postalcode TEXT ,
startingpoint VARCHAR (200),
endingpoint VARCHAR (200),
city VARCHAR (200),
country VARCHAR (200),
description VARCHAR (4000), 
);

--Créer un utilisateur
CREATE USER "adminted"@"%" IDENTIFIED BY "nawazted";

--Accorder tout les privilèges à cet utilisateurs
GRANT ALL PRIVILEGES ON RunnerDB.* TO "adminted"@"%";



--Insérer une nouvelle promenade
INSERT INTO walkers (title, name, photo, postalcode, startingpoint, endingpoint, city, country, description )
VALUES ("Running to the park", "Daniela Longchamp", "/home/cf/projet6/Runningsite/www/photo/carte.png", "1213", "Onex", "Evaux", "Genève", "Suisse", "J'ai courru pendant 10 minutes blablablabli")