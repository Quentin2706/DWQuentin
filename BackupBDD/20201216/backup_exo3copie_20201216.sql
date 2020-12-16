-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: exo3copie
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `exo3copie`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `exo3copie` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `exo3copie`;

--
-- Table structure for table `avoir_note`
--

DROP TABLE IF EXISTS `avoir_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avoir_note` (
  `idAvoirNote` int(11) NOT NULL AUTO_INCREMENT,
  `idEtudiant` int(11) DEFAULT NULL,
  `idEpreuve` int(11) DEFAULT NULL,
  `note` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAvoirNote`),
  KEY `FK_AvoirNote_Epreuves` (`idEpreuve`),
  KEY `FK_AvoirNote_Etudiants` (`idEtudiant`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avoir_note`
--

LOCK TABLES `avoir_note` WRITE;
/*!40000 ALTER TABLE `avoir_note` DISABLE KEYS */;
INSERT INTO `avoir_note` VALUES (1,1,1,15),(2,2,1,8),(3,3,1,7),(4,4,1,11),(5,5,1,15),(6,6,1,16),(7,7,1,1),(8,17,1,6),(9,18,1,11),(10,1,2,12),(11,2,2,12),(12,3,2,3),(13,4,2,15),(14,5,2,9),(15,6,2,11),(16,7,2,13),(17,17,2,19),(18,18,2,6),(19,8,3,8),(20,9,3,14),(21,10,3,14),(22,11,3,11),(23,12,3,6),(24,13,3,3),(25,14,3,20),(26,15,3,12),(27,16,3,11),(28,8,4,7),(29,9,4,11),(30,10,4,12),(31,11,4,3),(32,12,4,20),(33,13,4,12),(34,14,4,10),(35,15,4,8),(36,16,4,10),(37,17,4,8),(38,1,7,10),(39,2,7,8),(40,3,7,7),(41,4,7,9),(42,17,3,15);
/*!40000 ALTER TABLE `avoir_note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enseignants`
--

DROP TABLE IF EXISTS `enseignants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enseignants` (
  `idEnseignant` int(11) NOT NULL AUTO_INCREMENT,
  `nomEnseignant` varchar(20) NOT NULL,
  `prenomEnseignant` varchar(20) DEFAULT NULL,
  `fonctionEnseignant` varchar(25) DEFAULT NULL,
  `adresseEnseignant` varchar(40) DEFAULT NULL,
  `villeEnseignant` varchar(10) DEFAULT NULL,
  `codePostalEnseignant` int(11) DEFAULT NULL,
  `telephoneEnseignant` varchar(14) DEFAULT NULL,
  `dateNaissanceEnseignant` date DEFAULT NULL,
  `dateEmbaucheEnseignant` date DEFAULT NULL,
  PRIMARY KEY (`idEnseignant`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enseignants`
--

LOCK TABLES `enseignants` WRITE;
/*!40000 ALTER TABLE `enseignants` DISABLE KEYS */;
INSERT INTO `enseignants` VALUES (1,'talon','isabelle','MAITRE DE CONFERENCES','12,rue des lilas','marseille',13000,'29-89-76-30','1965-05-30','1991-10-01'),(2,'pelletier','séverine','CERTIFIE','213,avenue de londres','calais',62100,'21-54-87-61','1975-04-21','2014-09-01'),(3,'roseau','alain','AGREGE','12,allee des mimosas','calais',62100,'21-65-87-43','1960-01-02','1991-10-01'),(4,'preux','erick','CERTIFIE','76,rue charles de gaulle','lyon',69000,'30-87-21-54','1969-11-09','1995-10-01'),(5,'roussel','philippe','MAITRE DE CONFERENCES','43,rue des cogognes','lille',59000,'28-90-86-64','1966-01-21','1990-10-12'),(6,'renaud','leon','MAITRE DE CONFERENCES','34,allee luoia','lille',59000,'28-29-30-31','1968-12-12','1994-10-10'),(7,'delignieres','benedicte','MAITRE DE CONFERENCES','124,allee rouids','lyon',69000,'45-87-91-03','1964-10-13','1991-10-01'),(8,'robillard','marcel','AGREGE','12,route de paris','lille',59000,'28-28-39-39','1965-12-12','1995-10-01'),(9,'savasta','sophie','CERTIFIE','32,rue luois david','calais',62100,'21-78-64-54','1959-10-09','1996-10-01'),(10,'cayron','isabelle','AGREGE','56,rue de majorettes','lille',59000,'28-98-59-01','1965-09-09','1993-10-01'),(11,'pacou','alain','AGREGE','34,rue monsigny','saint omer',62300,'21-94-63-20','1978-12-01','1998-10-01');
/*!40000 ALTER TABLE `enseignants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `epreuves`
--

DROP TABLE IF EXISTS `epreuves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `epreuves` (
  `idEpreuve` int(11) NOT NULL AUTO_INCREMENT,
  `libelleEpreuve` varchar(20) DEFAULT NULL,
  `idEnseignantEpreuve` int(11) NOT NULL,
  `idMatiereEpreuve` int(11) NOT NULL,
  `dateEpreuve` date DEFAULT NULL,
  `CoefficientEpreuve` int(11) NOT NULL,
  `anneeEpreuve` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEpreuve`),
  KEY `FK_epreuves_enseignants` (`idEnseignantEpreuve`),
  KEY `FK_epreuves_matieres` (`idMatiereEpreuve`),
  CONSTRAINT `FK_epreuves_enseignants` FOREIGN KEY (`idEnseignantEpreuve`) REFERENCES `enseignants` (`idEnseignant`),
  CONSTRAINT `FK_epreuves_matieres` FOREIGN KEY (`idMatiereEpreuve`) REFERENCES `matieres` (`idMatiere`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `epreuves`
--

LOCK TABLES `epreuves` WRITE;
/*!40000 ALTER TABLE `epreuves` DISABLE KEYS */;
INSERT INTO `epreuves` VALUES (1,'interro anglais',9,1,'2014-09-12',1,1),(2,'partiel maths',3,8,'2014-09-13',3,1),(3,'partiel BD',1,2,'2014-09-18',4,2),(4,'partiel UNIX',7,3,'2014-10-01',3,2),(5,'interro BD',1,2,'2014-10-12',1,2),(6,'interro maths',3,8,'2014-10-12',4,1),(7,'interro écrite',9,1,'1996-10-21',1,NULL);
/*!40000 ALTER TABLE `epreuves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etudiants` (
  `idEtudiant` int(11) NOT NULL AUTO_INCREMENT,
  `nomEtudiant` varchar(20) NOT NULL,
  `prenomEtudiant` varchar(20) DEFAULT NULL,
  `adresseEtudiant` varchar(40) DEFAULT NULL,
  `villeEtudiant` varchar(10) DEFAULT NULL,
  `codePostalEtudiant` int(11) DEFAULT NULL,
  `telephoneEtudiant` varchar(14) DEFAULT NULL,
  `dateEntreeEtudiant` date DEFAULT NULL,
  `anneeEtudiant` int(11) DEFAULT NULL,
  `remarqueEtudiant` varchar(40) DEFAULT NULL,
  `sexeEtudiant` char(1) DEFAULT NULL,
  `dateNaissanceEtudiant` date DEFAULT NULL,
  `HOBBY` varchar(20) NOT NULL DEFAULT 'SPORT',
  PRIMARY KEY (`idEtudiant`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiants`
--

LOCK TABLES `etudiants` WRITE;
/*!40000 ALTER TABLE `etudiants` DISABLE KEYS */;
INSERT INTO `etudiants` VALUES (1,'roblin','lea','12,bd de la liberte','calais',62100,'21345678','2014-09-01',1,'','F','1995-01-14','SPORT'),(2,'macarthur','leon','121,bd gambetta','calais',62100,'21-30-65-09','2014-09-01',1,'','M','1994-04-12','SPORT'),(3,'minol','luc','9,rue des prairies','boulogne',62200,'21-30-20-10','2014-09-01',1,'','M','1997-03-12','SPORT'),(4,'bagnole','sophie','12,rue des capucines','wimereux',62930,'21-89-04-30','2014-09-01',1,'','F','1996-03-21','SPORT'),(5,'bury','marc','67,allee ronde','marcq',62300,'21-90-87-65','2014-09-01',1,'','M','1993-02-05','SPORT'),(6,'vendraux','marc','5,rue de marseille','calais',62100,'21-96-00-09','2013-09-01',1,'a redouble sa premiere annee','M','1996-01-21','SPORT'),(7,'vendermaele','helene','456,rue de paris','boulogne',62200,'21-45-45-60','2014-09-01',1,'','F','1995-03-30','SPORT'),(8,'besson','loic','3,allee carpentier','dunkerque',59300,'28-90-89-78','2014-09-01',2,'','M','1994-05-21','SPORT'),(9,'godart','jean-paul','123,rue de lens','marck',59870,'28-09-87-65','2013-09-01',2,'a double sa seconde annee','M','1993-01-12','SPORT'),(10,'beaux','marie','1,allee des cygnes','dunkerque',59100,'21-30-87-90','2014-09-01',2,NULL,'F','1996-04-12','SPORT'),(11,'turini','elsa','12,route de paris','boulogne',62200,'21-32-47-97','2014-09-01',2,NULL,'F','1996-07-17','SPORT'),(12,'torelle','elise','123,vallee du denacre','boulogne',62200,'21-67-86-90','2014-09-01',2,NULL,'F','1997-04-16','SPORT'),(13,'pharis','pierre','12,avenue foch','calais',62100,'21-21-85-90','2014-09-01',2,NULL,'M','1996-03-18','SPORT'),(14,'ephyre','luc','12,rue de lyon','calais',62100,'21-35-32-90','2014-09-01',2,NULL,'M','1995-01-21','SPORT'),(15,'leclercq','jules','12,allee des ravins','boulogne',62200,'21-36-71-92','2014-09-01',2,NULL,'M','1994-05-19','SPORT'),(16,'dupont','luc','21,avenue monsigny','calais',62200,'21-21-34-99','2014-09-01',2,NULL,'M','1996-11-02','SPORT'),(17,'marke','loic','312,route de paris','wimereux',62930,'21-87-87-71','2014-09-01',2,NULL,'M','1996-11-12','SPORT'),(18,'dewa','leon','121,allee des eglantines','dunkerque',59100,'28-30-87-90','2014-09-01',2,NULL,'M','1997-04-03','SPORT');
/*!40000 ALTER TABLE `etudiants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faire_cours`
--

DROP TABLE IF EXISTS `faire_cours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faire_cours` (
  `idFaireCours` int(11) NOT NULL AUTO_INCREMENT,
  `idEnseignant` int(11) DEFAULT NULL,
  `idMatiere` int(11) DEFAULT NULL,
  `annee` int(11) DEFAULT NULL,
  PRIMARY KEY (`idFaireCours`),
  KEY `FK_FaireCours_Enseignants` (`idEnseignant`),
  KEY `FK_FaireCours_Matieres` (`idMatiere`),
  CONSTRAINT `FK_FaireCours_Enseignants` FOREIGN KEY (`idEnseignant`) REFERENCES `enseignants` (`idEnseignant`),
  CONSTRAINT `FK_FaireCours_Matieres` FOREIGN KEY (`idMatiere`) REFERENCES `matieres` (`idMatiere`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faire_cours`
--

LOCK TABLES `faire_cours` WRITE;
/*!40000 ALTER TABLE `faire_cours` DISABLE KEYS */;
INSERT INTO `faire_cours` VALUES (1,1,2,2),(2,1,10,2),(3,2,4,1),(4,2,5,1),(5,2,11,1),(6,2,11,2),(7,3,8,2),(8,3,13,1),(9,4,14,1),(10,5,12,1),(11,5,12,2),(12,6,3,2),(13,6,3,1),(14,6,6,2),(15,7,13,1),(16,7,7,2),(17,7,3,2),(18,8,10,1),(19,8,13,1),(20,9,1,1),(21,9,1,2),(22,10,9,1),(23,10,9,2),(24,11,8,1);
/*!40000 ALTER TABLE `faire_cours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matieres`
--

DROP TABLE IF EXISTS `matieres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matieres` (
  `idMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `nomMatiere` varchar(15) NOT NULL,
  `idModule` int(11) DEFAULT NULL,
  `coefficientMatiere` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMatiere`),
  KEY `FK_matieres_modules` (`idModule`),
  CONSTRAINT `FK_matieres_modules` FOREIGN KEY (`idModule`) REFERENCES `modules` (`idModule`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matieres`
--

LOCK TABLES `matieres` WRITE;
/*!40000 ALTER TABLE `matieres` DISABLE KEYS */;
INSERT INTO `matieres` VALUES (1,'anglais',4,2),(2,'BD',1,5),(3,'UNIX',1,5),(4,'access',1,1),(5,'bureautique',1,2),(6,'C',1,5),(7,'Prog avancee',1,3),(8,'mathematiques',2,1),(9,'expression',4,2),(10,'ACSI',1,7),(11,'economie',3,2),(12,'gestion',3,2),(13,'algorithmique',1,5),(14,'architecture',1,3);
/*!40000 ALTER TABLE `matieres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modules` (
  `idModule` int(11) NOT NULL AUTO_INCREMENT,
  `nomModule` varchar(15) NOT NULL,
  `coefficientModule` int(11) DEFAULT NULL,
  PRIMARY KEY (`idModule`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modules`
--

LOCK TABLES `modules` WRITE;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` VALUES (1,'informatique',15),(2,'mathematiques',5),(3,'EOG',5),(4,'LEC',5);
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-16 17:00:01
