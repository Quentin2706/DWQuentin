DROP DATABASE IF EXISTS Voiture;
CREATE DATABASE Voiture;
USE Voiture;
    CREATE TABLE Marques
    (
        idMarque INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nomMarque VARCHAR (50) NOT NULL
    )ENGINE = InnoDB, CHARSET = UTF8;

    CREATE TABLE Modeles
    (
        idModele INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nomModele VARCHAR (50) NOT NULL
    )ENGINE = InnoDB, CHARSET = UTF8;

ALTER TABLE Detenu
	ADD CONSTRAINT Detenu_NatureTerrain_FK
	FOREIGN KEY (idNatureTerrain)
	REFERENCES NatureTerrains(idNatureTerrain);
    


