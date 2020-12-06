-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: projetfilms
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
-- Current Database: `projetfilms`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `projetfilms` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `projetfilms`;

--
-- Table structure for table `acteurs`
--

DROP TABLE IF EXISTS `acteurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acteurs` (
  `idActeur` int(11) NOT NULL AUTO_INCREMENT,
  `nomActeur` varchar(50) NOT NULL,
  `prenomActeur` varchar(50) NOT NULL,
  `origineActeur` varchar(50) NOT NULL,
  `dateDeNaissanceActeur` date NOT NULL,
  PRIMARY KEY (`idActeur`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acteurs`
--

LOCK TABLES `acteurs` WRITE;
/*!40000 ALTER TABLE `acteurs` DISABLE KEYS */;
INSERT INTO `acteurs` VALUES (1,'Bale','Christian','Britannique','1974-01-30'),(2,'Ledger','Heath','australien','1979-04-04'),(3,'Eckhaert','Aaron','Americain','1968-03-12'),(4,'Hanks','Tom','Americain','1956-07-09'),(5,'Sinise','Gary','Americain','1955-03-17'),(6,'Wright','Robin','Americaine','1966-04-08');
/*!40000 ALTER TABLE `acteurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `films` (
  `idFilm` int(11) NOT NULL AUTO_INCREMENT,
  `nomFilm` varchar(50) NOT NULL,
  `dateFilm` date NOT NULL,
  `coutFilm` int(11) NOT NULL,
  `dureeFilm` int(11) NOT NULL,
  `synopFilm` text NOT NULL,
  `idStudio` int(11) NOT NULL,
  `idGenre` int(11) NOT NULL,
  PRIMARY KEY (`idFilm`),
  KEY `FK_Films_Studios` (`idStudio`),
  KEY `FK_Films_Genres` (`idGenre`),
  CONSTRAINT `FK_Films_Genres` FOREIGN KEY (`idGenre`) REFERENCES `genres` (`idGenre`),
  CONSTRAINT `FK_Films_Studios` FOREIGN KEY (`idStudio`) REFERENCES `studios` (`idStudio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES (1,'The Dark Knight, Le Chevalier Noir','2008-08-13',185,152,'Batman entreprend de démanteler les dernières organisations criminelles de Gotham. Mais il se heurte bientôt à un nouveau génie du crime qui répand la terreur et le chaos dans la ville : le Joker…',2,1),(2,'Forrest Gump','1994-10-05',300000000,140,'Quelques décennies d\'histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l\'étrange odyssée d\'un homme simple et pur, Forrest Gump.',1,2);
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genres` (
  `idGenre` int(11) NOT NULL AUTO_INCREMENT,
  `libelleGenre` varchar(50) NOT NULL,
  `descGenre` text NOT NULL,
  PRIMARY KEY (`idGenre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (1,'Action','Film au rythme effrene'),(2,'Comedie','Film a voir en famille');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participations`
--

DROP TABLE IF EXISTS `participations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participations` (
  `idParticipation` int(11) NOT NULL AUTO_INCREMENT,
  `idActeur` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL,
  PRIMARY KEY (`idParticipation`),
  KEY `FK_Participations_Acteurs` (`idActeur`),
  KEY `FK_Participations_Films` (`idFilm`),
  CONSTRAINT `FK_Participations_Acteurs` FOREIGN KEY (`idActeur`) REFERENCES `acteurs` (`idActeur`),
  CONSTRAINT `FK_Participations_Films` FOREIGN KEY (`idFilm`) REFERENCES `films` (`idFilm`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participations`
--

LOCK TABLES `participations` WRITE;
/*!40000 ALTER TABLE `participations` DISABLE KEYS */;
INSERT INTO `participations` VALUES (1,1,1),(2,2,1),(3,3,1),(4,4,2),(5,5,2),(6,6,2);
/*!40000 ALTER TABLE `participations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `realisateurs`
--

DROP TABLE IF EXISTS `realisateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `realisateurs` (
  `idRealisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomRealisateur` varchar(50) NOT NULL,
  `prenomRealisateur` varchar(50) NOT NULL,
  `dateDeNaissanceRealisateur` date NOT NULL,
  `paysOrigineRealisateur` varchar(50) NOT NULL,
  PRIMARY KEY (`idRealisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `realisateurs`
--

LOCK TABLES `realisateurs` WRITE;
/*!40000 ALTER TABLE `realisateurs` DISABLE KEYS */;
INSERT INTO `realisateurs` VALUES (1,'Nolan','Christopher','1970-07-30','Angleterre'),(2,'Zemeckis','Robert','1952-05-14','Etats-Unis');
/*!40000 ALTER TABLE `realisateurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `realisations`
--

DROP TABLE IF EXISTS `realisations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `realisations` (
  `idRealisation` int(11) NOT NULL AUTO_INCREMENT,
  `idRealisateur` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL,
  `dateDebutRealisation` date NOT NULL,
  `dateFinRealisation` date NOT NULL,
  PRIMARY KEY (`idRealisation`),
  KEY `FK_Realisations_Realisateurs` (`idRealisateur`),
  KEY `FK_Realisations_Films` (`idFilm`),
  CONSTRAINT `FK_Realisations_Films` FOREIGN KEY (`idFilm`) REFERENCES `films` (`idFilm`),
  CONSTRAINT `FK_Realisations_Realisateurs` FOREIGN KEY (`idRealisateur`) REFERENCES `realisateurs` (`idRealisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `realisations`
--

LOCK TABLES `realisations` WRITE;
/*!40000 ALTER TABLE `realisations` DISABLE KEYS */;
INSERT INTO `realisations` VALUES (1,1,1,'2006-07-31','2008-07-09'),(2,2,2,'1993-08-01','1993-12-09');
/*!40000 ALTER TABLE `realisations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studios`
--

DROP TABLE IF EXISTS `studios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `studios` (
  `idStudio` int(11) NOT NULL AUTO_INCREMENT,
  `nomStudio` varchar(50) NOT NULL,
  `paysStudio` varchar(50) NOT NULL,
  `fondateurStudio` varchar(50) NOT NULL,
  `creationStudio` date NOT NULL,
  PRIMARY KEY (`idStudio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studios`
--

LOCK TABLES `studios` WRITE;
/*!40000 ALTER TABLE `studios` DISABLE KEYS */;
INSERT INTO `studios` VALUES (1,'United International Pictures','Angleterre','Lew Wasserman','1970-01-01'),(2,'Warner Bros','Amerique','Freres Warner','1943-04-04');
/*!40000 ALTER TABLE `studios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-06 17:00:02
