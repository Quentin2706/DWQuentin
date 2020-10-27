#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE IF NOT EXISTS Hotels;
USE Hotels; 

#------------------------------------------------------------
# Table: Stations
#------------------------------------------------------------
DROP TABLE IF EXISTS Stations;
CREATE TABLE Stations(
        idStation       Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomStation      Varchar (50) NOT NULL ,
        altitudeStation Int NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: Hotels
#------------------------------------------------------------
DROP TABLE IF EXISTS Hotels;
CREATE TABLE Hotels(
        idHotel        Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomHotel       Varchar (50) NOT NULL ,
        CategorieHotel Varchar (50) NOT NULL ,
        adresseHotel   Varchar (50) NOT NULL ,
        villeHotel  Varchar (50) NOT NULL ,
        idStation      Int NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: Chambres
#------------------------------------------------------------
DROP TABLE IF EXISTS Chambres;
CREATE TABLE Chambres(
        idCHambre       Int  Auto_increment  NOT NULL PRIMARY KEY,
        numChambre      Int NOT NULL ,
        TypeChambre     Varchar (50) NOT NULL ,
        CapaciteChambre Varchar (50) NOT NULL ,
        idHotel         Int NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: Clients
#------------------------------------------------------------
DROP TABLE IF EXISTS Clients;
CREATE TABLE Clients(
        idClient      Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomClient     Varchar (75) NOT NULL ,
        prenomClient  Varchar (50) NOT NULL ,
        adresseClient Varchar (100) NOT NULL ,
        villeClient   Varchar (50) NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: Reservations
#------------------------------------------------------------
DROP TABLE IF EXISTS Reservations;
CREATE TABLE Reservations(
        idReservation Int NOT NULL PRIMARY KEY ,
        dateReservation   Date NOT NULL ,
        dateDebutSejour   Date NOT NULL ,
        dateFinSejour     Date NOT NULL ,
        prixReservation   Float NOT NULL ,
        arrhesReservation Float NOT NULL ,
        idCHambre         Int NOT NULL ,
        idClient          Int NOT NULL 
)ENGINE=InnoDB, CHARSET = UTF8;


ALTER TABLE Hotels
ADD CONSTRAINT Hotels_Stations_FK
FOREIGN KEY (idStation)
REFERENCES Stations(idStation);

ALTER TABLE Chambres
ADD CONSTRAINT Chambres_Hotels_FK
FOREIGN KEY (idHotel)
REFERENCES Hotels(idHotel);

ALTER TABLE Reservations
ADD CONSTRAINT Reservations_Chambres_FK
FOREIGN KEY (idChambre)
REFERENCES Chambres(idChambre);

ALTER TABLE Reservations
ADD CONSTRAINT Reservations_Clients_FK
FOREIGN KEY (idClient)
REFERENCES Clients(idClient);