#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS eval; 
CREATE DATABASE eval; 
USE eval;

#------------------------------------------------------------
# Table: Eleves
#------------------------------------------------------------

CREATE TABLE Eleves(
        idEleve     Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomEleve    Varchar (50) NOT NULL ,
        prenomEleve Varchar (50) NOT NULL ,
        Classe      Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Matieres
#------------------------------------------------------------

CREATE TABLE Matieres(
        idMatiere      Int  Auto_increment  NOT NULL PRIMARY KEY  ,
        libelleMatiere Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateurs
#------------------------------------------------------------

CREATE TABLE Utilisateurs(
        idUtilisateur     Int  Auto_increment  NOT NULL PRIMARY KEY,
        login             Varchar (50) NOT NULL ,
        nomUtilisateur    Varchar (50) NOT NULL ,
        prenomUtilisateur Varchar (50) NOT NULL ,
        motDePasse        Varchar (50) NOT NULL ,
        role              Int NOT NULL ,
        idMatiere         Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: suivis
#------------------------------------------------------------

CREATE TABLE Suivis(
        idSuivi     Int  Auto_increment  NOT NULL PRIMARY KEY ,
        note        Int NOT NULL ,
        coefficient Int NOT NULL ,
        idEleve     Int NOT NULL ,
        idMatiere   Int NOT NULL 

)ENGINE=InnoDB;


ALTER TABLE Utilisateurs ADD CONSTRAINT Utilisateurs_Matiere_FK FOREIGN KEY (idMatiere) REFERENCES Matieres(idMatiere);
ALTER TABLE Suivis ADD CONSTRAINT Suivis_Matiere_FK FOREIGN KEY (idMatiere) REFERENCES Matieres(idMatiere);
ALTER TABLE Suivis ADD CONSTRAINT Suivis_Eleve_FK FOREIGN KEY (idEleve) REFERENCES Eleves(idEleve);