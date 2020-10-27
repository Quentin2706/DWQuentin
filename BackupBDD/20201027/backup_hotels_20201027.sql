-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: hotels
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
-- Current Database: `hotels`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `hotels` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hotels`;

--
-- Table structure for table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chambres` (
  `idCHambre` int(11) NOT NULL AUTO_INCREMENT,
  `numChambre` int(11) NOT NULL,
  `TypeChambre` varchar(50) NOT NULL,
  `CapaciteChambre` varchar(50) NOT NULL,
  `idHotel` int(11) NOT NULL,
  PRIMARY KEY (`idCHambre`),
  KEY `Chambres_Hotels_FK` (`idHotel`),
  CONSTRAINT `Chambres_Hotels_FK` FOREIGN KEY (`idHotel`) REFERENCES `hotels` (`idHotel`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chambres`
--

LOCK TABLES `chambres` WRITE;
/*!40000 ALTER TABLE `chambres` DISABLE KEYS */;
INSERT INTO `chambres` VALUES (1,101,'1','1',1),(2,102,'1','2',1),(3,103,'1','1',1),(4,104,'1','2',2),(5,105,'1','2',2),(6,106,'1','1',2),(7,107,'1','3',3),(8,108,'1','1',3),(9,109,'1','2',3),(10,235,'1','1',4),(11,157,'1','1',4),(12,874,'1','1',7),(13,125,'1','5',7),(14,101,'1','3',6),(15,102,'1','3',6),(16,103,'1','2',10),(17,104,'1','3',15),(18,105,'1','3',6),(19,106,'1','1',15),(20,107,'1','1',11),(21,108,'1','2',13),(22,109,'1','2',10),(23,235,'1','3',12),(24,157,'1','1',11),(25,874,'1','2',7),(26,125,'1','1',9),(27,101,'1','3',8),(28,102,'1','3',15),(29,103,'1','1',11),(30,104,'1','1',11),(31,105,'1','1',13),(32,106,'1','2',15),(33,107,'1','2',12),(34,108,'1','1',9),(35,109,'1','3',13),(36,235,'1','3',8),(37,157,'1','3',14),(38,874,'1','1',8),(39,125,'1','2',10);
/*!40000 ALTER TABLE `chambres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(75) NOT NULL,
  `prenomClient` varchar(50) NOT NULL,
  `adresseClient` varchar(100) NOT NULL,
  `villeClient` varchar(50) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'DOE','John','Rue Du General Leclerc','Chatenay Malabry'),(2,'HOMME','Josh','Rue Danton','Palm Desert'),(3,'PAUL','Weller','Rue Hoche','Londres'),(4,'WHITE','Jack','Allee Gustave Eiffel','Detroit'),(5,'CLAYPOOL','Les','Rue Jean Pierre Timbaud','San Francisco'),(6,'SQUIRE','Chris','Place Paul Vaillant Couturier','Londres'),(7,'WOOD','Ronnie','Rue Erevan','Londres'),(8,'THUNDERS','Johnny','Rue Du General Leclerc','New York'),(9,'JEUNEMAITRE','Eric','Rue Du General Leclerc','Chaville'),(10,'KARAM','Patrick','Rue Danton','Courbevoie'),(11,'RUFET','Corinne','Rue Hoche','Le Plessis Robinson'),(12,'SAINT JUST ','Wallerand','Allee Gustave Eiffel','Marnes La Coquette'),(13,'SANTINI','Jean-Luc','Rue Jean Pierre Timbaud','Chatenay Malabry'),(14,'AIT','Eddie','Place Paul Vaillant Couturier','Le Plessis Robinson'),(15,'BARBOTIN','Eddie','Rue Erevan','Chatenay Malabry'),(16,'BERESSI','Isabelle','Rue Du General Leclerc','Londres'),(17,'CAMARA','Lamine','Rue Ernest Renan','Antony'),(18,'CECCONI','Frank','Rue Georges Marie','Chatenay Malabry'),(19,'CHEVRON','Eric','Boulevard Gallieni','Suresnes'),(20,'CIUNTU','Marie-Carole','Esplanade Du Belvedere','Meudon');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotels` (
  `idHotel` int(11) NOT NULL AUTO_INCREMENT,
  `nomHotel` varchar(50) NOT NULL,
  `CategorieHotel` varchar(50) NOT NULL,
  `adresseHotel` varchar(50) NOT NULL,
  `villeHotel` varchar(50) NOT NULL,
  `idStation` int(11) NOT NULL,
  PRIMARY KEY (`idHotel`),
  KEY `Hotels_Stations_FK` (`idStation`),
  CONSTRAINT `Hotels_Stations_FK` FOREIGN KEY (`idStation`) REFERENCES `stations` (`idStation`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotels`
--

LOCK TABLES `hotels` WRITE;
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
INSERT INTO `hotels` VALUES (1,'Le Magnifique','3','rue du bas','Pralo',1),(2,'Hotel du haut','1','rue du haut','Pralo',1),(3,'Le Narval','3','place de la liberation','Vonten',2),(4,'Les Pissenlis','4','place du 14 juillet','Bretou',2),(5,'RR Hotel','5','place du bas','Bretou',2),(6,'La Brique','2','place du haut','Bretou',2),(7,'Le Beau Rivage','3','place du centre','Toras',3),(8,'Residence les marmottes','1','1 Chemin des randonneurs','Alpe d Huez',6),(9,'Residence les edelweiss','5','2 Rue des sapins','Areches',2),(10,'Residence les panoramas','4','7 Avenue de la neige','Beaufort',2),(11,'Residence les sapins','5','8 Chemin des pissenlits','Aussois',4),(12,'Chalets les marmottes','3','10 Rue des etables','Avoriaz',3),(13,'Chalets les edelweiss','3','8 Avenue des sapins','Alpe d Huez',8),(14,'Chalets les panoramas','2','3 Chemin de la neige','Areches',6),(15,'Chalets les sapins','5','3 Rue des pissenlits','Beaufort',8);
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `idReservation` int(11) NOT NULL,
  `dateReservation` date NOT NULL,
  `dateDebutSejour` date NOT NULL,
  `dateFinSejour` date NOT NULL,
  `prixReservation` float NOT NULL,
  `arrhesReservation` float NOT NULL,
  `idCHambre` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`idReservation`),
  KEY `Reservations_Chambres_FK` (`idCHambre`),
  KEY `Reservations_Clients_FK` (`idClient`),
  CONSTRAINT `Reservations_Chambres_FK` FOREIGN KEY (`idCHambre`) REFERENCES `chambres` (`idCHambre`),
  CONSTRAINT `Reservations_Clients_FK` FOREIGN KEY (`idClient`) REFERENCES `clients` (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (1,'2020-10-15','2020-10-29','2020-10-30',600.2,30.2,29,5);
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stations`
--

DROP TABLE IF EXISTS `stations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stations` (
  `idStation` int(11) NOT NULL AUTO_INCREMENT,
  `nomStation` varchar(50) NOT NULL,
  `altitudeStation` int(11) NOT NULL,
  PRIMARY KEY (`idStation`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stations`
--

LOCK TABLES `stations` WRITE;
/*!40000 ALTER TABLE `stations` DISABLE KEYS */;
INSERT INTO `stations` VALUES (1,'La Montagne',2500),(2,'Le Sud',200),(3,'La Plage',10),(4,'Alpe d Huez',1860),(5,'Areches',1200),(6,'Beaufort',1200),(7,'Aussois',1500),(8,'Avoriaz',1800);
/*!40000 ALTER TABLE `stations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `test`
--

DROP TABLE IF EXISTS `test`;
/*!50001 DROP VIEW IF EXISTS `test`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `test` AS SELECT 
 1 AS `nomClient`,
 1 AS `prenomClient`,
 1 AS `adresseClient`,
 1 AS `villeClient`,
 1 AS `idReservation`,
 1 AS `dateReservation`,
 1 AS `dateDebutSejour`,
 1 AS `dateFinSejour`,
 1 AS `prixReservation`,
 1 AS `arrhesReservation`,
 1 AS `idCHambre`,
 1 AS `idClient`,
 1 AS `CapaciteChambre`,
 1 AS `TypeChambre`,
 1 AS `numChambre`*/;
SET character_set_client = @saved_cs_client;

--
-- Current Database: `hotels`
--

USE `hotels`;

--
-- Final view structure for view `test`
--

/*!50001 DROP VIEW IF EXISTS `test`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `test` AS select `clients`.`nomClient` AS `nomClient`,`clients`.`prenomClient` AS `prenomClient`,`clients`.`adresseClient` AS `adresseClient`,`clients`.`villeClient` AS `villeClient`,`reservations`.`idReservation` AS `idReservation`,`reservations`.`dateReservation` AS `dateReservation`,`reservations`.`dateDebutSejour` AS `dateDebutSejour`,`reservations`.`dateFinSejour` AS `dateFinSejour`,`reservations`.`prixReservation` AS `prixReservation`,`reservations`.`arrhesReservation` AS `arrhesReservation`,`reservations`.`idCHambre` AS `idCHambre`,`reservations`.`idClient` AS `idClient`,`chambres`.`CapaciteChambre` AS `CapaciteChambre`,`chambres`.`TypeChambre` AS `TypeChambre`,`chambres`.`numChambre` AS `numChambre` from ((`clients` join `reservations` on((`clients`.`idClient` = `reservations`.`idClient`))) join `chambres` on((`reservations`.`idCHambre` = `chambres`.`idCHambre`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-27 17:00:00
