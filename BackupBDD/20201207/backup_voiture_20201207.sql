-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: voiture
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
-- Current Database: `voiture`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `voiture` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `voiture`;

--
-- Temporary table structure for view `aaaaaaaaaaa`
--

DROP TABLE IF EXISTS `aaaaaaaaaaa`;
/*!50001 DROP VIEW IF EXISTS `aaaaaaaaaaa`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `aaaaaaaaaaa` AS SELECT 
 1 AS `idMarque`,
 1 AS `nomMarque`,
 1 AS `nomModele`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `aaaaaaaaaaaa`
--

DROP TABLE IF EXISTS `aaaaaaaaaaaa`;
/*!50001 DROP VIEW IF EXISTS `aaaaaaaaaaaa`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `aaaaaaaaaaaa` AS SELECT 
 1 AS `idMarque`,
 1 AS `nomMarque`,
 1 AS `nomModele`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `marques`
--

DROP TABLE IF EXISTS `marques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marques` (
  `idMarque` int(11) NOT NULL AUTO_INCREMENT,
  `nomMarque` varchar(50) NOT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marques`
--

LOCK TABLES `marques` WRITE;
/*!40000 ALTER TABLE `marques` DISABLE KEYS */;
INSERT INTO `marques` VALUES (1,'Subaru'),(2,'Nissan'),(3,'Ford'),(4,'Toyota'),(5,'GMC'),(6,'Acura'),(7,'Porsche'),(8,'Saturn'),(9,'Dodge'),(10,'Volkswagen'),(11,'Buick'),(12,'Lincoln'),(13,'BMW'),(14,'Infiniti'),(15,'Pontiac'),(16,'Chevrolet'),(17,'Mercedes-Benz'),(18,'Chrysler'),(19,'Bentley'),(20,'Mazda'),(21,'Mitsubishi'),(22,'Spyker'),(23,'Honda'),(24,'Audi'),(25,'Volvo'),(26,'Mercury'),(27,'Hyundai'),(28,'Aston Martin'),(29,'Plymouth'),(30,'Kia'),(31,'Suzuki'),(32,'MINI'),(33,'Isuzu'),(34,'Daewoo'),(35,'Lexus'),(36,'Land Rover');
/*!40000 ALTER TABLE `marques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modeles`
--

DROP TABLE IF EXISTS `modeles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modeles` (
  `idModele` int(11) NOT NULL AUTO_INCREMENT,
  `nomModele` varchar(50) NOT NULL,
  `idMarque` varchar(50) NOT NULL,
  PRIMARY KEY (`idModele`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modeles`
--

LOCK TABLES `modeles` WRITE;
/*!40000 ALTER TABLE `modeles` DISABLE KEYS */;
INSERT INTO `modeles` VALUES (1,'Forester','1'),(2,'Quashqai','1'),(3,'Fiesta','1'),(4,'Yaris','1'),(5,'Acadia','1'),(6,'Tlx','6'),(7,'Cayenne','7'),(8,'S-Series sedan','8'),(9,'Avenger','9'),(10,'Tiguan','10'),(11,'Coupe','10'),(12,'Aviator','10'),(13,'Serie 1','10'),(14,'Fx','10'),(15,'GTO','10'),(16,'Camaro','10'),(17,'Cla','10'),(18,'Sebring','10'),(19,'Bentayga','10'),(20,'Mx-30','10'),(21,'Eclipse','10'),(22,'Preliator','10'),(23,'Civic','10'),(24,'90','10'),(25,'S60','25'),(26,'Monterey','26'),(27,'Ioniq','27'),(28,'Dbs','28'),(29,'Superbird','29'),(30,'Ceed','30'),(31,'Alto','31'),(32,'Cooper','32'),(33,'Serie N','33'),(34,'Espero','34'),(35,'Ct','35'),(36,'Defender','36');
/*!40000 ALTER TABLE `modeles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `voiture`
--

USE `voiture`;

--
-- Final view structure for view `aaaaaaaaaaa`
--

/*!50001 DROP VIEW IF EXISTS `aaaaaaaaaaa`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `aaaaaaaaaaa` AS select `marques`.`idMarque` AS `idMarque`,`marques`.`nomMarque` AS `nomMarque`,`modeles`.`nomModele` AS `nomModele` from (`marques` join `modeles` on((`modeles`.`idMarque` = `marques`.`idMarque`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `aaaaaaaaaaaa`
--

/*!50001 DROP VIEW IF EXISTS `aaaaaaaaaaaa`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `aaaaaaaaaaaa` AS select `marques`.`idMarque` AS `idMarque`,`marques`.`nomMarque` AS `nomMarque`,`modeles`.`nomModele` AS `nomModele` from (`marques` join `modeles` on((`marques`.`idMarque` = `modeles`.`idMarque`))) */;
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

-- Dump completed on 2020-12-07 17:00:02
