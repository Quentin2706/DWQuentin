#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS caisseenregistreuse;
USE caisseenregistreuse;


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        idUser      Int  Auto_increment PRIMARY KEY NOT NULL ,
        identifiant Varchar (50) NOT NULL ,
        motDePasse  Varchar (50) NOT NULL ,
        role        Int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Tva
#------------------------------------------------------------

CREATE TABLE Tva(
        idTva   Int  Auto_increment  PRIMARY KEY  NOT NULL ,
        tauxTva Float NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Categorie
#------------------------------------------------------------

CREATE TABLE Categorie(
        idCategorie      Int  Auto_increment  PRIMARY KEY  NOT NULL ,
        libelleCategorie Varchar (50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Article
#------------------------------------------------------------

CREATE TABLE Article(
        idArticle      Int  Auto_increment  PRIMARY KEY  NOT NULL ,
        libelleArticle Varchar (50) NOT NULL ,
        prixHt         Float NOT NULL ,
        codeBarre      Varchar (50) NOT NULL ,
        idTva          Int NOT NULL ,
        idCategorie    Int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



#------------------------------------------------------------
# Table: Caisse
#------------------------------------------------------------

CREATE TABLE Caisse(
        idCaisse    Int  Auto_increment  PRIMARY KEY  NOT NULL ,
        nomCaisse   Varchar (50) NOT NULL ,
        totalCaisse Int NOT NULL ,
        date        Date NOT NULL ,
        idUser      Int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: ModePaiement
#------------------------------------------------------------

CREATE TABLE ModePaiement(
        idModePaiement   Int  Auto_increment PRIMARY KEY  NOT NULL ,
        typePaiement Varchar (50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Ticket
#------------------------------------------------------------

CREATE TABLE Ticket(
        idTicket   Int  Auto_increment PRIMARY KEY  NOT NULL ,
        prixHT     Float NOT NULL ,
        date       Date NOT NULL ,
        montantTVA Float NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: LigneTicket
#------------------------------------------------------------

CREATE TABLE ligneTicket(
        idLigneTicket Int  Auto_increment PRIMARY KEY NOT NULL ,
        quantite  Int NOT NULL ,
        prixHt  float NOT NULL ,
        montantTva  float NOT NULL ,
        idTicket  Int NOT NULL ,
        idArticle Int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Paiement
#------------------------------------------------------------

CREATE TABLE Paiement(
        idPaiement  Int  Auto_increment  PRIMARY KEY  NOT NULL ,
        idModePaiement Int NOT NULL ,
        idTicket   Int NOT NULL ,
        prixTTC    Float NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_tva` FOREIGN KEY (`idTva`) REFERENCES `Tva` (`idTva`);

ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_categorie` FOREIGN KEY (`idCategorie`) REFERENCES `Categorie` (`idCategorie`);

ALTER TABLE `caisse`
  ADD CONSTRAINT `fk_caisse_user` FOREIGN KEY (`idUser`) REFERENCES `User` (`idUser`);

ALTER TABLE `ligneTicket`
  ADD CONSTRAINT `fk_ligneTicket_ticket` FOREIGN KEY (`idTicket`) REFERENCES `Ticket` (`idTicket`);

ALTER TABLE `ligneTicket`
  ADD CONSTRAINT `fk_ligneTicket_article` FOREIGN KEY (`idArticle`) REFERENCES `Article` (`idArticle`);

ALTER TABLE `paiement`
  ADD CONSTRAINT `fk_paiement_ModePaiement` FOREIGN KEY (`idModePaiement`) REFERENCES `ModePaiement` (`idModePaiement`);

ALTER TABLE `paiement`
  ADD CONSTRAINT `fk_paiement_Ticket` FOREIGN KEY (`idTicket`) REFERENCES `Ticket` (`idTicket`);



