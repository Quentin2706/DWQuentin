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
INSERT INTO `acteurs` VALUES (1,'[(Value)]','Christian','Britannique','1974-01-30'),(2,'Ledger','Heath','australien','1979-04-04'),(3,'Eckhaert','Aaron','Americain','1968-03-12'),(4,'Hanks','Tom','Americain','1956-07-09'),(5,'Sinise','Gary','Americain','1955-03-17'),(6,'Wright','Robin','Americaine','1966-04-08');
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
INSERT INTO `films` VALUES (1,'The Dark Knight, Le Chevalier Noir','2008-08-13',185,152,'Batman entreprend de démanteler les dernières organisations criminelles de Gotham. Mais il se heurte bientôt à un nouveau génie du crime qui répand la terreur et le chaos dans la ville : le Joker…',3,2),(2,'Forrest Gump','1994-10-05',300000000,140,'Quelques décennies d\'histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l\'étrange odyssée d\'un homme simple et pur, Forrest Gump.',2,3);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (1,'Pas de genre','Genre non renseigné'),(2,'Action','Film au rythme effrene'),(3,'Comedie','Film a voir en famille');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studios`
--

LOCK TABLES `studios` WRITE;
/*!40000 ALTER TABLE `studios` DISABLE KEYS */;
INSERT INTO `studios` VALUES (1,'Non renseigné','Non renseigné','Non renseigné','0001-01-01'),(2,'United International Pictures','Angleterre','Lew Wasserman','1970-01-01'),(3,'Warner Bros','Amerique','Freres Warner','1943-04-04');
/*!40000 ALTER TABLE `studios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traductions`
--

DROP TABLE IF EXISTS `traductions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `traductions` (
  `idTraduction` int(11) NOT NULL AUTO_INCREMENT,
  `codeTexte` varchar(100) NOT NULL,
  `codeLangue` varchar(10) NOT NULL,
  `Texte` varchar(10000) NOT NULL,
  PRIMARY KEY (`idTraduction`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traductions`
--

LOCK TABLES `traductions` WRITE;
/*!40000 ALTER TABLE `traductions` DISABLE KEYS */;
INSERT INTO `traductions` VALUES (1,'titreacc','FR','Accueil'),(2,'titreLstFilm','FR','Liste des films'),(3,'sousTitreHeader','FR','Le site par excellence pour retrouver les meilleurs films du moment !'),(4,'btnLstFilm','FR','Liste des films'),(5,'btnLstAct','FR','Liste des acteurs'),(6,'btnLstGnr','FR','Liste des genres'),(7,'btnLstRealst','FR','Liste des realisateurs'),(8,'btnLstStd','FR','Liste des studios'),(9,'btnInsc','FR','Inscription'),(10,'btnDeco','FR','Deconnexion'),(12,'titreMainFilms','FR','Liste des films'),(13,'btnAjouter','FR','Ajouter'),(14,'btnDetail','FR','Detail'),(15,'btnModif','FR','Modifier'),(16,'btnSuppr','FR','Supprimer'),(17,'nomFilmLbl','FR','Nom'),(18,'dateSortieFilmLbl','FR','Date de sortie'),(19,'coutFilmLbl','FR','Cout'),(20,'dureeFilmLbl','FR','Duree'),(21,'synopFilmLbl','FR','synopsis'),(22,'nomStdLbl','FR','Nom du Studio'),(23,'nomGnrLbl','FR','Nom du Genre'),(24,'btnAnnulerForm','FR','Annuler'),(25,'btnModifForm','FR','Modifier'),(26,'btnAjouterForm','FR','Ajouter'),(27,'titreacc','ENG','Home'),(28,'titreLstFilm','ENG','List of movies'),(29,'sousTitreHeader','ENG','The best website to find a lot of best movies !'),(30,'btnLstFilm','ENG','List of movies'),(31,'btnLstAct','ENG','List of actors'),(32,'btnLstGnr','ENG','List of genres'),(33,'btnLstRealst','ENG','List of directors'),(34,'btnLstStd','ENG','List of studios'),(35,'btnInsc','ENG','Registration'),(38,'titreMainFilms','ENG','List of movies'),(39,'btnAjouter','ENG','Add'),(40,'btnDetail','ENG','Detail'),(41,'btnModif','ENG','Update'),(42,'btnSuppr','ENG','Delete'),(43,'nomFilmLbl','ENG','Name'),(44,'dateSortieFilmLbl','ENG','release date'),(45,'coutFilmLbl','ENG','Cost'),(46,'dureeFilmLbl','ENG','Duration'),(47,'synopFilmLbl','ENG','Synopsis'),(48,'nomStdLbl','ENG','Studio\'s name'),(49,'nomGnrLbl','ENG','Genre\'s name'),(50,'btnAnnulerForm','ENG','Cancel'),(51,'titreacc','FR','Accueil'),(52,'titreLstFilm','FR','Liste des films'),(53,'sousTitreHeader','FR','Le site par excellence pour retrouver les meilleurs films du moment !'),(54,'btnLstFilm','FR','Liste des films'),(55,'btnLstAct','FR','Liste des acteurs'),(56,'btnLstGnr','FR','Liste des genres'),(57,'btnLstRealst','FR','Liste des realisateurs'),(58,'btnLstStd','FR','Liste des studios'),(59,'btnInsc','FR','Inscription'),(61,'btnConnect','FR','Connexion'),(62,'titreMainFilms','FR','Liste des films'),(63,'btnAjouter','FR','Ajouter'),(64,'btnDetail','FR','Detail'),(65,'btnModif','FR','Modifier'),(66,'btnSuppr','FR','Supprimer'),(67,'nomFilmLbl','FR','Nom'),(68,'dateSortieFilmLbl','FR','Date de sortie'),(69,'coutFilmLbl','FR','Cout'),(70,'dureeFilmLbl','FR','Duree'),(71,'synopFilmLbl','FR','synopsis'),(72,'nomStdLbl','FR','Nom du Studio'),(73,'nomGnrLbl','FR','Nom du Genre'),(74,'btnAnnulerForm','FR','Annuler'),(75,'btnModifForm','FR','Modifier'),(76,'btnAjouterForm','FR','Ajouter'),(77,'titreacc','ENG','Home'),(78,'titreLstFilm','ENG','List of movies'),(79,'sousTitreHeader','ENG','The best website to find a lot of best movies !'),(80,'btnLstFilm','ENG','List of movies'),(81,'btnLstAct','ENG','List of actors'),(82,'btnLstGnr','ENG','List of genres'),(83,'btnLstRealst','ENG','List of directors'),(84,'btnLstStd','ENG','List of studios'),(85,'btnInsc','ENG','Registration'),(86,'btnDeco','ENG','Logout'),(87,'btnConnect','ENG','Login'),(88,'titreMainFilms','ENG','List of movies'),(89,'btnAjouter','ENG','Add'),(90,'btnDetail','ENG','Detail'),(91,'btnModif','ENG','Update'),(92,'btnSuppr','ENG','Delete'),(93,'nomFilmLbl','ENG','Name'),(94,'dateSortieFilmLbl','ENG','realease date'),(95,'coutFilmLbl','ENG','Cost'),(96,'dureeFilmLbl','ENG','Duration'),(97,'synopFilmLbl','ENG','Synopsis'),(98,'nomStdLbl','ENG','Name of Studio'),(99,'nomGnrLbl','ENG','Name of Genre'),(100,'btnAnnulerForm','ENG','Cancel'),(101,'btnModifForm','ENG','Update'),(102,'btnAjouterForm','ENG','Add'),(103,'salut','FR','Bonjour'),(104,'salut','ENG','Hello');
/*!40000 ALTER TABLE `traductions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomUtilisateur` varchar(75) NOT NULL,
  `prenomUtilisateur` varchar(50) NOT NULL,
  `mdpUtilisateur` varchar(50) NOT NULL,
  `emailUtilisateur` varchar(100) NOT NULL,
  `roleUtilisateur` varchar(30) DEFAULT NULL,
  `pseudoUtilisateur` varchar(50) NOT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs`
--

LOCK TABLES `utilisateurs` WRITE;
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` VALUES (12,'BALAIR','Quentin','63fe528fda65e91251feac7e58a513e0','quentin.balair2706@gmail.com','Admin','Quentin');
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-14 17:10:04
