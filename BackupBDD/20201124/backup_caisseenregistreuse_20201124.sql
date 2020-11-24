-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: caisseenregistreuse
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
-- Current Database: `caisseenregistreuse`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `caisseenregistreuse` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `caisseenregistreuse`;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `idArticle` int(11) NOT NULL AUTO_INCREMENT,
  `libelleArticle` varchar(50) NOT NULL,
  `prixHt` float NOT NULL,
  `codeBarre` varchar(50) NOT NULL,
  `idTva` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  PRIMARY KEY (`idArticle`),
  KEY `fk_articles_tva` (`idTva`),
  KEY `fk_articles_categories` (`idCategorie`),
  CONSTRAINT `fk_articles_categories` FOREIGN KEY (`idCategorie`) REFERENCES `categories` (`idCategorie`),
  CONSTRAINT `fk_articles_tva` FOREIGN KEY (`idTva`) REFERENCES `tva` (`idTva`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (3,'Crayon',25.45,'5447746843515',1,1),(4,'pate',1.5,'548475484845',2,2);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caisses`
--

DROP TABLE IF EXISTS `caisses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caisses` (
  `idCaisse` int(11) NOT NULL AUTO_INCREMENT,
  `nomCaisse` varchar(50) NOT NULL,
  `totalCaisse` float NOT NULL,
  `date` date NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idCaisse`),
  KEY `fk_caisses_users` (`idUser`),
  CONSTRAINT `fk_caisses_users` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caisses`
--

LOCK TABLES `caisses` WRITE;
/*!40000 ALTER TABLE `caisses` DISABLE KEYS */;
INSERT INTO `caisses` VALUES (1,'caisse1',1500,'2020-11-24',2),(2,'caisse2',120,'2020-11-24',3);
/*!40000 ALTER TABLE `caisses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `libelleCategorie` varchar(50) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'papeterie'),(2,'alimentaire');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lignestickets`
--

DROP TABLE IF EXISTS `lignestickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lignestickets` (
  `idligneTicket` int(11) NOT NULL AUTO_INCREMENT,
  `quantite` int(11) NOT NULL,
  `prixHt` float NOT NULL,
  `montantTva` float NOT NULL,
  `idTicket` int(11) NOT NULL,
  `idArticle` int(11) NOT NULL,
  PRIMARY KEY (`idligneTicket`),
  KEY `fk_lignesTickets_tickets` (`idTicket`),
  KEY `fk_lignesTickets_articles` (`idArticle`),
  CONSTRAINT `fk_lignesTickets_articles` FOREIGN KEY (`idArticle`) REFERENCES `articles` (`idArticle`),
  CONSTRAINT `fk_lignesTickets_tickets` FOREIGN KEY (`idTicket`) REFERENCES `tickets` (`idTicket`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lignestickets`
--

LOCK TABLES `lignestickets` WRITE;
/*!40000 ALTER TABLE `lignestickets` DISABLE KEYS */;
INSERT INTO `lignestickets` VALUES (1,15,10,3,1,3),(2,2,2.5,2,1,4);
/*!40000 ALTER TABLE `lignestickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modespaiements`
--

DROP TABLE IF EXISTS `modespaiements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modespaiements` (
  `idModePaiement` int(11) NOT NULL AUTO_INCREMENT,
  `typePaiement` varchar(50) NOT NULL,
  PRIMARY KEY (`idModePaiement`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modespaiements`
--

LOCK TABLES `modespaiements` WRITE;
/*!40000 ALTER TABLE `modespaiements` DISABLE KEYS */;
INSERT INTO `modespaiements` VALUES (1,'Carte bancaire'),(2,'Cheque'),(3,'espece');
/*!40000 ALTER TABLE `modespaiements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paiements`
--

DROP TABLE IF EXISTS `paiements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paiements` (
  `idPaiement` int(11) NOT NULL AUTO_INCREMENT,
  `idModePaiement` int(11) NOT NULL,
  `idTicket` int(11) NOT NULL,
  `prixTTC` float NOT NULL,
  PRIMARY KEY (`idPaiement`),
  KEY `fk_paiements_ModesPaiements` (`idModePaiement`),
  KEY `fk_paiements_Tickets` (`idTicket`),
  CONSTRAINT `fk_paiements_ModesPaiements` FOREIGN KEY (`idModePaiement`) REFERENCES `modespaiements` (`idModePaiement`),
  CONSTRAINT `fk_paiements_Tickets` FOREIGN KEY (`idTicket`) REFERENCES `tickets` (`idTicket`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paiements`
--

LOCK TABLES `paiements` WRITE;
/*!40000 ALTER TABLE `paiements` DISABLE KEYS */;
INSERT INTO `paiements` VALUES (1,1,1,10),(2,3,1,3.75);
/*!40000 ALTER TABLE `paiements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tickets` (
  `idTicket` int(11) NOT NULL AUTO_INCREMENT,
  `prixHT` float NOT NULL,
  `date` date NOT NULL,
  `montantTVA` float NOT NULL,
  PRIMARY KEY (`idTicket`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (1,12.5,'2020-11-24',1.25);
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tva`
--

DROP TABLE IF EXISTS `tva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tva` (
  `idTva` int(11) NOT NULL AUTO_INCREMENT,
  `tauxTva` float NOT NULL,
  PRIMARY KEY (`idTva`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tva`
--

LOCK TABLES `tva` WRITE;
/*!40000 ALTER TABLE `tva` DISABLE KEYS */;
INSERT INTO `tva` VALUES (1,20),(2,10),(3,5.5);
/*!40000 ALTER TABLE `tva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(50) NOT NULL,
  `motDePasse` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'user','user',1),(3,'admin','admin',100);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-24 17:10:02
