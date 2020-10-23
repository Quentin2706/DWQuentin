-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: plages
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
-- Current Database: `plages`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `plages` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `plages`;

--
-- Table structure for table `departement`
--

DROP TABLE IF EXISTS `departement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departement` (
  `idDepartement` int(11) NOT NULL AUTO_INCREMENT,
  `nomDepartement` varchar(50) NOT NULL,
  `idRegion` int(11) NOT NULL,
  PRIMARY KEY (`idDepartement`),
  KEY `Departement_Region_FK` (`idRegion`),
  CONSTRAINT `Departement_Region_FK` FOREIGN KEY (`idRegion`) REFERENCES `region` (`idRegion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departement`
--

LOCK TABLES `departement` WRITE;
/*!40000 ALTER TABLE `departement` DISABLE KEYS */;
INSERT INTO `departement` VALUES (1,'Pas-de-Calais',1);
/*!40000 ALTER TABLE `departement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detenu`
--

DROP TABLE IF EXISTS `detenu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detenu` (
  `idDetenu` int(11) NOT NULL AUTO_INCREMENT,
  `idNatureTerrain` int(11) NOT NULL,
  `idPlage` int(11) NOT NULL,
  PRIMARY KEY (`idDetenu`),
  KEY `Detenu_NatureTerrain_FK` (`idNatureTerrain`),
  KEY `Detenu_Plage_FK` (`idPlage`),
  CONSTRAINT `Detenu_NatureTerrain_FK` FOREIGN KEY (`idNatureTerrain`) REFERENCES `natureterrains` (`idNatureTerrain`),
  CONSTRAINT `Detenu_Plage_FK` FOREIGN KEY (`idPlage`) REFERENCES `plage` (`idPlage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detenu`
--

LOCK TABLES `detenu` WRITE;
/*!40000 ALTER TABLE `detenu` DISABLE KEYS */;
/*!40000 ALTER TABLE `detenu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `natureterrains`
--

DROP TABLE IF EXISTS `natureterrains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `natureterrains` (
  `idNatureTerrain` int(11) NOT NULL AUTO_INCREMENT,
  `NatureDeTerrain` varchar(50) NOT NULL,
  PRIMARY KEY (`idNatureTerrain`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `natureterrains`
--

LOCK TABLES `natureterrains` WRITE;
/*!40000 ALTER TABLE `natureterrains` DISABLE KEYS */;
/*!40000 ALTER TABLE `natureterrains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plage`
--

DROP TABLE IF EXISTS `plage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plage` (
  `idPlage` int(11) NOT NULL AUTO_INCREMENT,
  `nombreKilometres` int(11) DEFAULT NULL,
  `idVille` int(11) NOT NULL,
  PRIMARY KEY (`idPlage`),
  KEY `Plage_Ville_FK` (`idVille`),
  CONSTRAINT `Plage_Ville_FK` FOREIGN KEY (`idVille`) REFERENCES `ville` (`idVille`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plage`
--

LOCK TABLES `plage` WRITE;
/*!40000 ALTER TABLE `plage` DISABLE KEYS */;
/*!40000 ALTER TABLE `plage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `region` (
  `idRegion` int(11) NOT NULL AUTO_INCREMENT,
  `nomRegion` varchar(50) NOT NULL,
  `nomResponsable` varchar(50) NOT NULL,
  `prenomResponsable` varchar(50) NOT NULL,
  PRIMARY KEY (`idRegion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` VALUES (1,'Hauts-de-france','Dupont','Michel');
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ville`
--

DROP TABLE IF EXISTS `ville`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ville` (
  `idVille` int(11) NOT NULL AUTO_INCREMENT,
  `nomVille` varchar(50) NOT NULL,
  `codePostal` varchar(5) NOT NULL,
  `nombreTouritesParAn` int(11) NOT NULL,
  `idDepartement` int(11) NOT NULL,
  PRIMARY KEY (`idVille`),
  KEY `Ville_Departement_FK` (`idDepartement`),
  CONSTRAINT `Ville_Departement_FK` FOREIGN KEY (`idDepartement`) REFERENCES `departement` (`idDepartement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ville`
--

LOCK TABLES `ville` WRITE;
/*!40000 ALTER TABLE `ville` DISABLE KEYS */;
/*!40000 ALTER TABLE `ville` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-23 10:38:35
