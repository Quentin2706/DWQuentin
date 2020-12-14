-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: boulangerie
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
-- Current Database: `boulangerie`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `boulangerie` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `boulangerie`;

--
-- Table structure for table `consultations`
--

DROP TABLE IF EXISTS `consultations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consultations` (
  `idConsultation` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  PRIMARY KEY (`idConsultation`),
  KEY `consultations_produits_FK` (`idProduit`),
  KEY `consultations_users_FK` (`idUser`),
  CONSTRAINT `consultations_produits_FK` FOREIGN KEY (`idProduit`) REFERENCES `produits` (`idProduit`),
  CONSTRAINT `consultations_users_FK` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultations`
--

LOCK TABLES `consultations` WRITE;
/*!40000 ALTER TABLE `consultations` DISABLE KEYS */;
/*!40000 ALTER TABLE `consultations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenants`
--

DROP TABLE IF EXISTS `contenants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contenants` (
  `idContenant` int(11) NOT NULL AUTO_INCREMENT,
  `idProduit` int(11) NOT NULL,
  `idIngredient` int(11) NOT NULL,
  PRIMARY KEY (`idContenant`),
  KEY `contenants_produits_FK` (`idProduit`),
  KEY `contenants_ingredients_FK` (`idIngredient`),
  CONSTRAINT `contenants_ingredients_FK` FOREIGN KEY (`idIngredient`) REFERENCES `ingredients` (`idIngredient`),
  CONSTRAINT `contenants_produits_FK` FOREIGN KEY (`idProduit`) REFERENCES `produits` (`idProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenants`
--

LOCK TABLES `contenants` WRITE;
/*!40000 ALTER TABLE `contenants` DISABLE KEYS */;
/*!40000 ALTER TABLE `contenants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingredients` (
  `idIngredient` int(11) NOT NULL AUTO_INCREMENT,
  `libelleIngredient` varchar(50) NOT NULL,
  PRIMARY KEY (`idIngredient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredients`
--

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;
/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produits` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `libelleProduit` varchar(50) NOT NULL,
  `datePeremptionProduit` date NOT NULL,
  `prixProduit` int(11) NOT NULL,
  PRIMARY KEY (`idProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produits`
--

LOCK TABLES `produits` WRITE;
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traductions`
--

DROP TABLE IF EXISTS `traductions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `traductions` (
  `idTraduction` int(11) NOT NULL AUTO_INCREMENT,
  `codeTexte` varchar(50) NOT NULL,
  `codeLangue` varchar(5) NOT NULL,
  `texte` text NOT NULL,
  PRIMARY KEY (`idTraduction`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traductions`
--

LOCK TABLES `traductions` WRITE;
/*!40000 ALTER TABLE `traductions` DISABLE KEYS */;
INSERT INTO `traductions` VALUES (1,'titreHeader','FR','Boulangerie'),(2,'titreHeader','EN','Bread Shop');
/*!40000 ALTER TABLE `traductions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(50) NOT NULL,
  `prenomUser` varchar(50) NOT NULL,
  `pseudoUser` varchar(50) NOT NULL,
  `mdpUser` varchar(50) NOT NULL,
  `adresseMailUser` varchar(100) NOT NULL,
  `roleUser` int(11) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2020-12-14 17:10:02
