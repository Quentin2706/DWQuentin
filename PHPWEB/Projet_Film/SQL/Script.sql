#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS projetFilms;
CREATE DATABASE projetFilms;
USE projetFilms;

#------------------------------------------------------------
# Table: Studios
#------------------------------------------------------------

CREATE TABLE Studios(
        idStudio        Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomStudio       Varchar (50) NOT NULL ,
        paysStudio      Varchar (50) NOT NULL ,
        fondateurStudio Varchar (50) NOT NULL ,
        creationStudio  Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Genres
#------------------------------------------------------------

CREATE TABLE Genres(
        idGenre      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleGenre Varchar (50) NOT NULL ,
        descGenre    Text NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Films
#------------------------------------------------------------

CREATE TABLE Films(
        idFilm    Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomFilm   Varchar (50) NOT NULL ,
        dateFilm  Date NOT NULL ,
        coutFilm  Int NOT NULL ,
        dureeFilm Int NOT NULL ,
        synopFilm Text NOT NULL ,
        idStudio  Int NOT NULL ,
        idGenre   Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Realisateurs
#------------------------------------------------------------

CREATE TABLE Realisateurs(
        idRealisateur              Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomRealisateur             Varchar (50) NOT NULL ,
        prenomRealisateur          Varchar (50) NOT NULL ,
        dateDeNaissanceRealisateur Date NOT NULL ,
        paysOrigineRealisateur     Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Acteurs
#------------------------------------------------------------

CREATE TABLE Acteurs(
        idActeur              Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomActeur             Varchar (50) NOT NULL ,
        prenomActeur          Varchar (50) NOT NULL ,
        origineActeur         Varchar (50) NOT NULL ,
        dateDeNaissanceActeur Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Realisations
#------------------------------------------------------------

CREATE TABLE Realisations(
        idRealisation INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        idRealisateur        Int NOT NULL ,
        idFilm               Int NOT NULL ,
        dateDebutRealisation Date NOT NULL ,
        dateFinRealisation   Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Participations
#------------------------------------------------------------

CREATE TABLE Participations(
        idParticipation INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        idActeur Int NOT NULL ,
        idFilm   Int NOT NULL
)ENGINE=InnoDB;

ALTER TABLE Films ADD CONSTRAINT FK_Films_Studios FOREIGN KEY (idStudio) REFERENCES Studios(idStudio);
ALTER TABLE Films ADD CONSTRAINT FK_Films_Genres FOREIGN KEY(idGenre) REFERENCES Genres(idGenre);

ALTER TABLE Realisations ADD CONSTRAINT FK_Realisations_Realisateurs FOREIGN KEY (idRealisateur) REFERENCES Realisateurs(idRealisateur);
ALTER TABLE Realisations ADD CONSTRAINT FK_Realisations_Films FOREIGN KEY (idFilm) REFERENCES Films(idFilm);

ALTER TABLE Participations ADD CONSTRAINT FK_Participations_Acteurs FOREIGN KEY (idActeur) REFERENCES Acteurs(idActeur);
ALTER TABLE Participations ADD CONSTRAINT FK_Participations_Films FOREIGN KEY (idFilm) REFERENCES Films(idFilm);


