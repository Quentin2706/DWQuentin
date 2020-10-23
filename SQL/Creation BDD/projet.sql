#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Stagiaires
#------------------------------------------------------------

CREATE TABLE Stagiaires(
        idStagiaire            Int  Auto_increment  NOT NULL PRIMARY KEY,
        genreStagiaire         Varchar (30) NOT NULL ,
        nomStagiaire           Varchar (30) NOT NULL ,
        prenomStagiaire        Varchar (3) NOT NULL ,
        numSecuStagiaire       Varchar (15) NOT NULL ,
        numBenefStagiaire      Varchar (15) NOT NULL ,
        dateNaissanceStagiaire Date NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: Formations
#------------------------------------------------------------

CREATE TABLE Formations(
        idFormation      Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleFormation Varchar (50) NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: SessionFormation
#------------------------------------------------------------

CREATE TABLE SessionFormation(
        idSessionFormation Int  Auto_increment  NOT NULL PRIMARY KEY,
        numOffreFormation  Varchar (50) NOT NULL ,
        objectifPAE        Text NOT NULL ,
        idFormation        Int NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: Formateurs
#------------------------------------------------------------

CREATE TABLE Formateurs(
        idFormateur     Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomFormateur    Varchar (30) NOT NULL ,
        prenomFormateur Varchar (30) NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: Entreprises
#------------------------------------------------------------

CREATE TABLE Entreprises(
        idEntreprise       Int  Auto_increment  NOT NULL PRIMARY KEY,
        raisonSociale      Varchar (50) NOT NULL ,
        statutJuridiqueEnt Varchar (10) NOT NULL ,
        adresseEnt         Varchar (50) NOT NULL ,
        cpEnt              Varchar (5) NOT NULL ,
        villeEnt           Varchar (30) NOT NULL ,
        numSiretEnt        Varchar (14) NOT NULL ,
        telEnt             Varchar (10) NOT NULL ,
        assureurEnt        Varchar (20) NOT NULL ,
        numSocietaire      Varchar (10) NOT NULL ,
        nomRepresentant    Varchar (30) NOT NULL ,
        prenomRepresentant Varchar (30) NOT NULL ,
        fctRepresentant    Varchar (50) NOT NULL ,
        telRepresentant    Varchar (10) NOT NULL ,
        mailRepresentant   Varchar (30) NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: Tuteurs
#------------------------------------------------------------

CREATE TABLE Tuteurs(
        idTuteur       Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomTuteur      Varchar (30) NOT NULL ,
        prenomTuteur   Varchar (30) NOT NULL ,
        fonctionTuteur Varchar (50) NOT NULL ,
        telTuteur      Varchar (10) NOT NULL ,
        mailTuteur     Varchar (30) NOT NULL ,
        idEntreprise   Int NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: Stages
#------------------------------------------------------------

CREATE TABLE Stages(
        idStage              Int  Auto_increment  NOT NULL PRIMARY KEY,
        dateVisite           Date NOT NULL ,
        nomVisiteur          Varchar (50) NOT NULL ,    
        lieuRealisation      Varchar (30) NOT NULL ,
        deplacement          Bool NOT NULL ,
        frequenceDeplacement Varchar (20) NOT NULL ,
        modeDeplacement      Varchar (20) NOT NULL ,
        attFormReglement     Bool NOT NULL ,
        libelleAttFormReg    Varchar (30) NOT NULL ,
        visiteMedical        Bool NOT NULL ,
        travauxDang          Bool NOT NULL ,
        dateDeclarationDerog Date NOT NULL ,
        sujetStage           Text NOT NULL ,
        travauxRealises      Text NOT NULL ,
        satisfactionEnt      Int NOT NULL ,
        remarqueEnt          Text NOT NULL ,
        perspectiveEmb       Int NOT NULL ,
        repTravauxDang1      Int NOT NULL ,
        repTravauxDang2      Int NOT NULL ,
        repTravauxDang3      Int NOT NULL ,
        repTravauxDang4      Int NOT NULL ,
        repTravauxDang5      Int NOT NULL ,
        objectifPAE          Text NOT NULL ,
        repTravauxDang6      Int NOT NULL ,
        autreRepTravauxDang  Varchar (50) NOT NULL ,
        dateDebut            Date NOT NULL ,
        dateFin              Date NOT NULL ,
        idTuteur  Int   NOT NULL ,
        idStagiaire Int NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: Fait_par
#------------------------------------------------------------

CREATE TABLE Fait_par
    idfait_par INT Auto_increment NOT NULL PRIMARY KEY,
    idFormateur INT NOT NULL,
    idFormation INT NOT NULL 
)ENGINE=InnoDB, CHARSET = UTF8;  

#------------------------------------------------------------
# Table: Suivi_par
#------------------------------------------------------------

CREATE TABLE Suivi_par
    idsuivi_par INT Auto_increment NOT NULL PRIMARY KEY,
    dateDebut DATE NOT NULL, 
    dateFin DATE NOT NULL,
    idSessionFormation INT NOT NULL, 
    idStagiaire INT NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;  

#------------------------------------------------------------
# Table: horaires
#------------------------------------------------------------

CREATE TABLE horaires
(
        idStage              Int  Auto_increment  NOT NULL PRIMARY KEY,
        dateDebutStage       Date NOT NULL ,
        dateFinStage         Date NOT NULL ,
        horaireDebutJour1    Time NOT NULL ,
        horaireDebutJour2    Time NOT NULL ,
        horaireDebutJour3    Time NOT NULL ,
        horaireDebutJour4    Time NOT NULL ,
        horaireDebutJour5    Time NOT NULL ,
        horaireDebutJour6    Time NOT NULL ,
        horaireFinJour1      Time NOT NULL ,
        horaireFinJour2      Time NOT NULL ,
        horaireFinJour3      Time NOT NULL ,
        horaireFinJour4      Time NOT NULL ,
        horaireFinJour5      Time NOT NULL ,
        horaireFinJour6      Time NOT NULL ,
        horaireDebutDej1     Time NOT NULL ,
        horaireDebutDej2     Time NOT NULL ,
        horaireDebutDej3     Time NOT NULL ,
        horaireDebutDej4     Time NOT NULL ,
        horaireDebutDej5     Time NOT NULL ,
        horaireDebutDej6     Time NOT NULL ,
        horaireFinDej1       Time NOT NULL ,
        horaireFinDej2       Time NOT NULL ,
        horaireFinDej3       Time NOT NULL ,
        horaireFinDej4       Time NOT NULL ,
        horaireFinDej5       Time NOT NULL ,
        horaireFinDej6       Time NOT NULL 
)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: evaluations
#------------------------------------------------------------

CREATE TABLE evaluations
(
        idStage              Int  Auto_increment  NOT NULL ,
        dateEvaluation       Date NOT NULL ,
        objectifAcquisition  Int NOT NULL ,
        comportementMt       Int NOT NULL ,
        evalComportement     Char (1) NOT NULL ,
        libelleAcquis1       Varchar (50) NOT NULL ,
        libelleAcquis2       Varchar (50) NOT NULL ,
        libelleAcquis3       Varchar (50) NOT NULL ,
        libelleAcquis4       Varchar (50) NOT NULL ,
        libelleAcquis5       Varchar (50) NOT NULL ,
        libelleAcquis6       Varchar (50) NOT NULL ,
        libelleAcquis7       Varchar (50) NOT NULL ,
        libelleAcquis8       Varchar (50) NOT NULL ,
        libelleAcquis9       Varchar (50) NOT NULL ,
        libelleAcquis10      Varchar (50) NOT NULL ,
        acquis1              Int NOT NULL ,
        acquis2              Int NOT NULL ,
        acquis3              Int NOT NULL ,
        acquis4              Int NOT NULL ,
        acquis5              Int NOT NULL ,
        acquis6              Int NOT NULL ,
        acquis7              Int NOT NULL ,
        acquis8              Int NOT NULL ,
        acquis9              Int NOT NULL ,
        acquis10             Int NOT NULL ,
)ENGINE=InnoDB, CHARSET = UTF8;

CREATE TABLE TravauxDangereux
(
    idStage   Int  Auto_increment  NOT NULL ,
    ordreTravaux INT NOT NULL , 
    libelleTravaux VARCHAR(40) NOT NULL , 
)

CREATE TABLE TravauxDangereux
(
    idStage   Int  Auto_increment  NOT NULL ,
    ordreComportement INT NOT NULL , 
    libelleComportement VARCHAR(40) NOT NULL , 
)

ALTER TABLE SessionFormation
ADD CONSTRAINT FK_SessionFormation_Formations
FOREIGN KEY (idFormation)
REFERENCES Formations(idFormation);

ALTER TABLE Tuteurs
ADD CONSTRAINT FK_Tuteurs_Entreprises
FOREIGN KEY (idEntreprise)
REFERENCES Entreprises(idEntreprise);

ALTER TABLE Stages
ADD CONSTRAINT FK_Stages_Stagiaires
FOREIGN KEY (idStagiaire)
REFERENCES Stagiaires(idStagiaire);

ALTER TABLE Stages
ADD CONSTRAINT FK_Stages_Tuteurs
FOREIGN KEY (idTuteur)
REFERENCES Tuteurs(idTuteur);

ALTER TABLE Suivi_par
ADD CONSTRAINT FK_suivi_par_SessionFormation
FOREIGN KEY (idSessionFormation)
REFERENCES SessionFormation(idSessionFormation);

ALTER TABLE Suivi_par
ADD CONSTRAINT FK_Suivi_par_Stagiaires
FOREIGN KEY (idStagiaire)
REFERENCES Stagiaires(idStagiaire)

ALTER TABLE Fait_par
ADD CONSTRAINT FK_Fait_par_Formations
FOREIGN KEY (idFormation)
REFERENCES Formations(idFormation);

ALTER TABLE Fait_par
ADD CONSTRAINT FK_Fait_par_Formateurs
FOREIGN KEY (idFormateur)
REFERENCES Formateurs(idFormateur);