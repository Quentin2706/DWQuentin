-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: gestion_hotels
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
-- Current Database: `gestion_hotels`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `gestion_hotels` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `gestion_hotels`;

--
-- Table structure for table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chambres` (
  `IdChambre` int(11) NOT NULL,
  `numChambre` int(11) NOT NULL,
  `typeChambre` int(11) NOT NULL,
  `capaciteChambre` int(11) NOT NULL,
  `idHotel` int(11) NOT NULL,
  `DATECREATION` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATEMODIFICATION` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdChambre`),
  KEY `FK_Chambres_idHotel` (`idHotel`),
  CONSTRAINT `FK_Chambres_idHotel` FOREIGN KEY (`idHotel`) REFERENCES `hotels` (`idHotel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chambres`
--

LOCK TABLES `chambres` WRITE;
/*!40000 ALTER TABLE `chambres` DISABLE KEYS */;
INSERT INTO `chambres` VALUES (1,101,1,1,1,'2020-10-28 13:28:26',NULL),(2,102,1,2,1,'2020-10-28 13:28:26',NULL),(3,103,1,1,1,'2020-10-28 13:28:26',NULL),(4,104,1,2,2,'2020-10-28 13:28:26',NULL),(5,105,1,2,2,'2020-10-28 13:28:26',NULL),(6,106,1,1,2,'2020-10-28 13:28:26',NULL),(7,107,1,3,3,'2020-10-28 13:28:26',NULL),(8,108,1,1,3,'2020-10-28 13:28:26',NULL),(9,109,1,2,3,'2020-10-28 13:28:26',NULL),(10,235,1,1,4,'2020-10-28 13:28:26',NULL),(11,157,1,1,4,'2020-10-28 13:28:26',NULL),(12,874,1,1,7,'2020-10-28 13:28:26',NULL),(13,125,1,5,7,'2020-10-28 13:28:26',NULL),(14,101,1,3,6,'2020-10-28 13:28:26',NULL),(15,102,1,3,6,'2020-10-28 13:28:26',NULL),(16,103,1,2,10,'2020-10-28 13:28:26',NULL),(17,104,1,3,15,'2020-10-28 13:28:26',NULL),(18,105,1,3,6,'2020-10-28 13:28:26',NULL),(19,106,1,1,15,'2020-10-28 13:28:26',NULL),(20,107,1,1,11,'2020-10-28 13:28:26',NULL),(21,108,1,2,13,'2020-10-28 13:28:26',NULL),(22,109,1,2,10,'2020-10-28 13:28:26',NULL),(23,235,1,3,12,'2020-10-28 13:28:26',NULL),(24,157,1,1,11,'2020-10-28 13:28:26',NULL),(25,874,1,2,7,'2020-10-28 13:28:26',NULL),(26,125,1,1,9,'2020-10-28 13:28:26',NULL),(27,101,1,3,8,'2020-10-28 13:28:26',NULL),(28,102,1,3,15,'2020-10-28 13:28:26',NULL),(29,103,1,1,11,'2020-10-28 13:28:26',NULL),(30,104,1,1,11,'2020-10-28 13:28:26',NULL),(31,105,1,1,13,'2020-10-28 13:28:26',NULL),(32,106,1,2,15,'2020-10-28 13:28:26',NULL),(33,107,1,2,12,'2020-10-28 13:28:26',NULL),(34,108,1,1,9,'2020-10-28 13:28:26',NULL),(35,109,1,3,13,'2020-10-28 13:28:26',NULL),(36,235,1,3,8,'2020-10-28 13:28:26',NULL),(37,157,1,3,14,'2020-10-28 13:28:26',NULL),(38,874,1,1,8,'2020-10-28 13:28:26',NULL),(39,125,1,2,10,'2020-10-28 13:28:26',NULL);
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
  `nomClient` varchar(25) NOT NULL,
  `prenomClient` varchar(25) NOT NULL,
  `adresseClient` varchar(250) NOT NULL,
  `villeClient` varchar(25) NOT NULL,
  `DATECREATION` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATEMODIFICATION` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'DOE','John','Rue Du General Leclerc','Chatenay Malabry','2020-10-28 13:28:27',NULL),(2,'HOMME','Josh','Rue Danton','Palm Desert','2020-10-28 13:28:27',NULL),(3,'PAUL','Weller','Rue Hoche','Londres','2020-10-28 13:28:27',NULL),(4,'WHITE','Jack','Allee Gustave Eiffel','Detroit','2020-10-28 13:28:27',NULL),(5,'CLAYPOOL','Les','Rue Jean Pierre Timbaud','San Francisco','2020-10-28 13:28:27',NULL),(6,'SQUIRE','Chris','Place Paul Vaillant Couturier','Londres','2020-10-28 13:28:27',NULL),(7,'WOOD','Ronnie','Rue Erevan','Londres','2020-10-28 13:28:27',NULL),(8,'THUNDERS','Johnny','Rue Du General Leclerc','New York','2020-10-28 13:28:27',NULL),(9,'JEUNEMAITRE','Eric','Rue Du General Leclerc','Chaville','2020-10-28 13:28:27',NULL),(10,'KARAM','Patrick','Rue Danton','Courbevoie','2020-10-28 13:28:27',NULL),(11,'RUFET','Corinne','Rue Hoche','Le Plessis Robinson','2020-10-28 13:28:27',NULL),(12,'SAINT JUST ','Wallerand','Allee Gustave Eiffel','Marnes La Coquette','2020-10-28 13:28:27',NULL),(13,'SANTINI','Jean-Luc','Rue Jean Pierre Timbaud','Chatenay Malabry','2020-10-28 13:28:27',NULL),(14,'AIT','Eddie','Place Paul Vaillant Couturier','Le Plessis Robinson','2020-10-28 13:28:27',NULL),(15,'BARBOTIN','Eddie','Rue Erevan','Chatenay Malabry','2020-10-28 13:28:27',NULL),(16,'BERESSI','Isabelle','Rue Du General Leclerc','Londres','2020-10-28 13:28:27',NULL),(17,'CAMARA','Lamine','Rue Ernest Renan','Antony','2020-10-28 13:28:27',NULL),(18,'CECCONI','Frank','Rue Georges Marie','Chatenay Malabry','2020-10-28 13:28:27',NULL),(19,'CHEVRON','Eric','Boulevard Gallieni','Suresnes','2020-10-28 13:28:27',NULL),(20,'CIUNTU','Marie-Carole','Esplanade Du Belvedere','Meudon','2020-10-28 13:28:27',NULL);
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
  `nomHotel` varchar(25) NOT NULL,
  `categorieHotel` int(11) NOT NULL,
  `adresseHotel` varchar(25) NOT NULL,
  `villeHotel` varchar(25) NOT NULL,
  `idStation` int(11) NOT NULL,
  `DATECREATION` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATEMODIFICATION` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idHotel`),
  KEY `FK_Hotels_idStation` (`idStation`),
  CONSTRAINT `FK_Hotels_idStation` FOREIGN KEY (`idStation`) REFERENCES `stations` (`idStation`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotels`
--

LOCK TABLES `hotels` WRITE;
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
INSERT INTO `hotels` VALUES (1,'Le Magnifique',3,'rue du bas','Pralo',1,'2020-10-28 13:28:26',NULL),(2,'Hotel du haut',1,'rue du haut','Pralo',1,'2020-10-28 13:28:26',NULL),(3,'Le Narval',3,'place de la liberation','Vonten',2,'2020-10-28 13:28:26',NULL),(4,'Les Pissenlis',4,'place du 14 juillet','Bretou',2,'2020-10-28 13:28:26',NULL),(5,'RR Hotel',5,'place du bas','Bretou',2,'2020-10-28 13:28:26',NULL),(6,'La Brique',2,'place du haut','Bretou',2,'2020-10-28 13:28:26',NULL),(7,'Le Beau Rivage',3,'place du centre','Toras',3,'2020-10-28 13:28:26',NULL),(8,'Résidence les marmottes',1,'1 Chemin des randonneurs','Alpe d Huez',6,'2020-10-28 13:28:26',NULL),(9,'Résidence les edelweiss',5,'2 Rue des sapins','Areches',2,'2020-10-28 13:28:26',NULL),(10,'Résidence les panoramas',4,'7 Avenue de la neige','Beaufort',2,'2020-10-28 13:28:26',NULL),(11,'Résidence les sapins',5,'8 Chemin des pissenlits','Aussois',4,'2020-10-28 13:28:26',NULL),(12,'Chalets les marmottes',3,'10 Rue des etables','Avoriaz',3,'2020-10-28 13:28:26',NULL),(13,'Chalets les edelweiss',3,'8 Avenue des sapins','Alpe d Huez',8,'2020-10-28 13:28:26',NULL),(14,'Chalets les panoramas',2,'3 Chemin de la neige','Areches',6,'2020-10-28 13:28:26',NULL),(15,'Chalets les sapins',5,'3 Rue des pissenlits','Beaufort',8,'2020-10-28 13:28:26',NULL);
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `idReservation` int(11) NOT NULL AUTO_INCREMENT,
  `dateReservationSejour` date NOT NULL,
  `dateDebutSejour` date NOT NULL,
  `dateFinSejour` date NOT NULL,
  `prixSejour` int(11) NOT NULL,
  `arrhesSejour` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `IdChambre` int(11) NOT NULL,
  `archive` varchar(3) DEFAULT NULL,
  `DATECREATION` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATEMODIFICATION` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idReservation`),
  KEY `FK_reservation_idClient` (`idClient`),
  KEY `FK_reservation_IdChambre` (`IdChambre`),
  CONSTRAINT `FK_reservation_IdChambre` FOREIGN KEY (`IdChambre`) REFERENCES `chambres` (`IdChambre`),
  CONSTRAINT `FK_reservation_idClient` FOREIGN KEY (`idClient`) REFERENCES `clients` (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (3,'2019-04-20','2019-05-07','2019-05-09',2400,800,1,1,'oui','2020-10-28 13:28:27',NULL),(4,'2019-11-04','2019-11-13','2019-11-17',400,50,3,1,'oui','2020-10-28 13:28:27',NULL),(5,'2020-01-11','2020-02-12','2020-02-18',3400,100,2,2,'oui','2020-10-28 13:28:27',NULL),(6,'2019-06-19','2019-08-05','2019-08-18',7200,180,4,2,'oui','2020-10-28 13:28:27',NULL),(7,'2019-04-02','2019-04-29','2019-05-03',1400,450,5,3,'oui','2020-10-28 13:28:27',NULL),(8,'2019-10-20','2019-12-01','2019-12-15',2400,780,6,4,'oui','2020-10-28 13:28:27',NULL),(9,'2019-02-27','2019-03-31','2019-04-04',500,80,6,4,'oui','2020-10-28 13:28:27',NULL),(10,'2019-07-21','2019-08-16','2019-08-16',40,0,8,4,'oui','2020-10-28 13:28:27',NULL),(11,'2019-10-12','2019-11-23','2019-11-29',580,58,15,8,'oui','2020-10-28 13:28:27',NULL),(12,'2019-12-22','2020-01-27','2020-01-30',140,14,17,9,'oui','2020-10-28 13:28:27',NULL),(13,'2019-07-21','2019-08-18','2019-08-21',360,36,15,8,'oui','2020-10-28 13:28:27',NULL),(14,'2019-01-10','2019-02-20','2019-03-01',1380,138,20,4,'oui','2020-10-28 13:28:27',NULL),(15,'2019-04-09','2019-04-17','2019-05-02',420,42,16,13,'oui','2020-10-28 13:28:27',NULL),(16,'2019-05-21','2019-06-13','2019-06-26',360,36,16,13,'oui','2020-10-28 13:28:27',NULL),(17,'2019-07-26','2019-08-09','2019-08-20',680,68,1,12,'oui','2020-10-28 13:28:27',NULL),(18,'2019-11-29','2019-11-30','2019-12-14',1280,128,15,21,'oui','2020-10-28 13:28:27',NULL),(19,'2019-03-12','2019-04-06','2019-04-09',420,42,19,14,'oui','2020-10-28 13:28:27',NULL),(20,'2019-01-17','2019-01-24','2019-01-28',260,26,12,24,'oui','2020-10-28 13:28:27',NULL),(21,'2020-01-02','2020-02-15','2020-02-24',1380,138,9,12,'oui','2020-10-28 13:28:27',NULL),(22,'2019-09-10','2019-09-24','2019-10-01',1430,143,12,4,'oui','2020-10-28 13:28:27',NULL),(23,'2019-05-11','2019-06-10','2019-06-14',820,82,1,23,'oui','2020-10-28 13:28:27',NULL),(24,'2019-10-21','2019-10-24','2019-10-31',650,65,11,10,'oui','2020-10-28 13:28:27',NULL),(25,'2020-01-12','2020-03-04','2020-03-09',1290,129,14,20,'oui','2020-10-28 13:28:27',NULL),(26,'2019-04-02','2019-05-02','2019-05-09',1030,103,19,15,'oui','2020-10-28 13:28:27',NULL),(27,'2019-01-04','2019-02-15','2019-02-25',470,47,17,17,'oui','2020-10-28 13:28:27',NULL),(28,'2019-05-17','2019-05-31','2019-06-03',1460,146,16,14,'oui','2020-10-28 13:28:27',NULL),(29,'2019-04-12','2019-05-23','2019-05-28',1310,131,6,21,'oui','2020-10-28 13:28:27',NULL),(30,'2019-06-26','2019-07-15','2019-07-21',460,46,9,20,'oui','2020-10-28 13:28:27',NULL),(31,'2019-04-09','2019-05-23','2019-05-27',350,35,17,18,'oui','2020-10-28 13:28:27',NULL),(32,'2019-06-14','2019-08-02','2019-08-04',890,89,14,23,'oui','2020-10-28 13:28:27',NULL),(33,'2019-03-06','2019-03-23','2019-03-31',1440,144,14,12,'oui','2020-10-28 13:28:27',NULL),(34,'2019-03-27','2019-04-29','2019-05-07',1010,101,17,19,'oui','2020-10-28 13:28:27',NULL),(35,'2019-02-11','2019-03-08','2019-03-22',790,79,13,16,'oui','2020-10-28 13:28:27',NULL),(36,'2019-04-15','2019-04-23','2019-05-04',270,27,5,2,'oui','2020-10-28 13:28:27',NULL),(37,'2019-03-25','2019-05-02','2019-05-16',660,66,19,19,'oui','2020-10-28 13:28:27',NULL),(38,'2019-05-01','2019-06-14','2019-06-18',140,14,13,4,'oui','2020-10-28 13:28:27',NULL),(39,'2020-01-10','2020-02-24','2020-02-29',1460,146,14,19,'oui','2020-10-28 13:28:27',NULL),(40,'2019-11-24','2019-11-30','2019-12-01',790,79,6,4,'oui','2020-10-28 13:28:27',NULL),(41,'2020-01-13','2020-01-30','2020-11-14',390,39,15,20,'non','2020-10-28 13:28:27',NULL);
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `stationchambre`
--

DROP TABLE IF EXISTS `stationchambre`;
/*!50001 DROP VIEW IF EXISTS `stationchambre`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `stationchambre` AS SELECT 
 1 AS `idStation`,
 1 AS `nomStation`,
 1 AS `altitudeStation`,
 1 AS `idHotel`,
 1 AS `nomHotel`,
 1 AS `categorieHotel`,
 1 AS `adresseHotel`,
 1 AS `villeHotel`,
 1 AS `idChambre`,
 1 AS `numChambre`,
 1 AS `typeChambre`,
 1 AS `capaciteChambre`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `stationchambreleft`
--

DROP TABLE IF EXISTS `stationchambreleft`;
/*!50001 DROP VIEW IF EXISTS `stationchambreleft`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `stationchambreleft` AS SELECT 
 1 AS `idStation`,
 1 AS `nomStation`,
 1 AS `altitudeStation`,
 1 AS `idHotel`,
 1 AS `nomHotel`,
 1 AS `categorieHotel`,
 1 AS `adresseHotel`,
 1 AS `villeHotel`,
 1 AS `idChambre`,
 1 AS `numChambre`,
 1 AS `typeChambre`,
 1 AS `capaciteChambre`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `stations`
--

DROP TABLE IF EXISTS `stations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stations` (
  `idStation` int(11) NOT NULL AUTO_INCREMENT,
  `nomStation` varchar(25) NOT NULL,
  `altitudeStation` int(11) NOT NULL,
  `DATECREATION` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATEMODIFICATION` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idStation`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stations`
--

LOCK TABLES `stations` WRITE;
/*!40000 ALTER TABLE `stations` DISABLE KEYS */;
INSERT INTO `stations` VALUES (1,'La Montagne',2500,'2020-10-28 13:28:27',NULL),(2,'Le Sud',200,'2020-10-28 13:28:27',NULL),(3,'La Plage',10,'2020-10-28 13:28:27',NULL),(4,'Alpe d Huez',1860,'2020-10-28 13:28:27',NULL),(5,'Areches',1200,'2020-10-28 13:28:27',NULL),(6,'Beaufort',1200,'2020-10-28 13:28:27',NULL),(7,'Aussois',1500,'2020-10-28 13:28:27',NULL),(8,'Avoriaz',1800,'2020-10-28 13:28:27',NULL);
/*!40000 ALTER TABLE `stations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `gestion_hotels`
--

USE `gestion_hotels`;

--
-- Final view structure for view `stationchambre`
--

/*!50001 DROP VIEW IF EXISTS `stationchambre`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `stationchambre` AS select `stations`.`idStation` AS `idStation`,`stations`.`nomStation` AS `nomStation`,`stations`.`altitudeStation` AS `altitudeStation`,`hotels`.`idHotel` AS `idHotel`,`hotels`.`nomHotel` AS `nomHotel`,`hotels`.`categorieHotel` AS `categorieHotel`,`hotels`.`adresseHotel` AS `adresseHotel`,`hotels`.`villeHotel` AS `villeHotel`,`chambres`.`IdChambre` AS `idChambre`,`chambres`.`numChambre` AS `numChambre`,`chambres`.`typeChambre` AS `typeChambre`,`chambres`.`capaciteChambre` AS `capaciteChambre` from ((`chambres` join `hotels` on((`chambres`.`idHotel` = `hotels`.`idHotel`))) join `stations` on((`hotels`.`idStation` = `stations`.`idStation`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `stationchambreleft`
--

/*!50001 DROP VIEW IF EXISTS `stationchambreleft`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `stationchambreleft` AS select `stations`.`idStation` AS `idStation`,`stations`.`nomStation` AS `nomStation`,`stations`.`altitudeStation` AS `altitudeStation`,`hotels`.`idHotel` AS `idHotel`,`hotels`.`nomHotel` AS `nomHotel`,`hotels`.`categorieHotel` AS `categorieHotel`,`hotels`.`adresseHotel` AS `adresseHotel`,`hotels`.`villeHotel` AS `villeHotel`,`chambres`.`IdChambre` AS `idChambre`,`chambres`.`numChambre` AS `numChambre`,`chambres`.`typeChambre` AS `typeChambre`,`chambres`.`capaciteChambre` AS `capaciteChambre` from ((`stations` left join `hotels` on((`stations`.`idStation` = `hotels`.`idStation`))) left join `chambres` on((`hotels`.`idHotel` = `chambres`.`idHotel`))) */;
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

-- Dump completed on 2020-12-06 17:00:02
