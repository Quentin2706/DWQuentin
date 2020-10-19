DROP DATABASE IF EXISTS plages;
CREATE DATABASE plages;
USE plages;
	CREATE TABLE NatureTerrains
	(
	idNatureTerrain int(11) NOT NULL auto_increment PRIMARY KEY,
	NatureDeTerrain varchar(50) NOT NULL
	)ENGINE = InnoDB, CHARSET = UTF8;
	
	CREATE TABLE Detenu
	(
	idDetenu int(11) NOT NULL auto_increment PRIMARY KEY,
	idNatureTerrain int(11) NOT NULL,
	idPlage int(11) NOT NULL
	)ENGINE = InnoDB, CHARSET = UTF8;
	
	CREATE TABLE Plage
	(
	idPlage int(11) NOT NULL auto_increment PRIMARY KEY,
	nombreKilometres int(11),
	idVille int(11) NOT NULL
	)ENGINE = InnoDB, CHARSET = UTF8;
	
	CREATE TABLE Ville 
	(
	idVille int(11) NOT NULL auto_increment PRIMARY KEY,
	nomVille varchar(50) NOT NULL,
	codePostal varchar(5) NOT NULL,
	nombreTouritesParAn int(11) NOT NULL,
	idDepartement int(11) NOT NULL
	)ENGINE = InnoDB, CHARSET = UTF8;
	
	CREATE TABLE Departement
	(
	idDepartement int(11) NOT NULL auto_increment PRIMARY KEY,
	nomDepartement varchar(50) NOT NULL, 
	idRegion int(11) NOT NULL
	)ENGINE = InnoDB, CHARSET = UTF8;
	
	CREATE TABLE Region
	(
	idRegion int(11) NOT NULL auto_increment PRIMARY KEY,
	nomRegion varchar(50) NOT NULL, 
	nomResponsable varchar(50) NOT NULL, 
	prenomResponsable varchar(50) NOT NULL
	)ENGINE = InnoDB, CHARSET = UTF8;
	
	ALTER TABLE Detenu
	ADD CONSTRAINT Detenu_NatureTerrain_FK
	FOREIGN KEY (idNatureTerrain)
	REFERENCES NatureTerrains(idNatureTerrain);
	
	ALTER TABLE Detenu 
	ADD CONSTRAINT Detenu_Plage_FK
	FOREIGN KEY (idPlage)
	REFERENCES Plage(idPlage);
	
	ALTER TABLE Plage
	ADD CONSTRAINT Plage_Ville_FK
	FOREIGN KEY (idVille)
	REFERENCES Ville(idVille);
	
	ALTER TABLE Ville 
	ADD CONSTRAINT Ville_Departement_FK
	FOREIGN KEY (idDepartement)
	REFERENCES Departement(idDepartement);
	
	ALTER TABLE Departement
	ADD CONSTRAINT Departement_Region_FK
	FOREIGN KEY (idRegion)
	REFERENCES Region(idRegion);
	
	
	
