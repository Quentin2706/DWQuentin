-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: pharmacie
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
-- Current Database: `pharmacie`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `pharmacie` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pharmacie`;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(50) NOT NULL,
  `ordonnanceCategorie` varchar(20) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Non renseigné','Non renseigné'),(2,'Antiseptique','Non'),(3,'Antibiotiques','Oui'),(4,'Antiviraux','Non'),(5,'Cardiologie','Oui'),(6,'Anti-inflammatoire','Non');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commandes` (
  `idCommande` int(11) NOT NULL AUTO_INCREMENT,
  `dateCommande` date NOT NULL,
  `dateReception` date NOT NULL,
  `idProduit` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idCommande`),
  KEY `FK_Commandes_Produits` (`idProduit`),
  KEY `FK_Commandes_Users` (`idUser`),
  CONSTRAINT `FK_Commandes_Produits` FOREIGN KEY (`idProduit`) REFERENCES `produits` (`idProduit`),
  CONSTRAINT `FK_Commandes_Users` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commandes`
--

LOCK TABLES `commandes` WRITE;
/*!40000 ALTER TABLE `commandes` DISABLE KEYS */;
INSERT INTO `commandes` VALUES (1,'2020-12-01','2020-12-08',4,5),(2,'2020-11-10','2020-11-20',2,1),(3,'2020-10-20','2020-11-10',3,5);
/*!40000 ALTER TABLE `commandes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lieuxdestockages`
--

DROP TABLE IF EXISTS `lieuxdestockages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lieuxdestockages` (
  `idLieuxDeStockage` int(11) NOT NULL AUTO_INCREMENT,
  `libelleLieuxDeStockage` varchar(50) NOT NULL,
  `Rayon` varchar(50) NOT NULL,
  `Etagere` int(11) NOT NULL,
  PRIMARY KEY (`idLieuxDeStockage`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lieuxdestockages`
--

LOCK TABLES `lieuxdestockages` WRITE;
/*!40000 ALTER TABLE `lieuxdestockages` DISABLE KEYS */;
INSERT INTO `lieuxdestockages` VALUES (1,'Depôt','Depôt',1),(2,'Chambre froide','Cardiologie',1),(3,'Chambre froide','Cardiologie',2),(4,'Chambre froide','Cardiologie',3),(5,'Tête de Gondole','Pas de rayon spécifique',1),(6,'Tête de Gondole','Pas de rayon spécifique',2),(7,'Tête de Gondole','Pas de rayon spécifique',3),(8,'Zone commerciale','Rayon 1',1),(9,'Zone commerciale','Rayon 1',2),(10,'Zone commerciale','Rayon 1',3),(11,'Zone commerciale','Rayon 2',1),(12,'Zone commerciale','Rayon 2',2),(13,'Zone commerciale','Rayon 2',3),(14,'Zone commerciale','Rayon 3',1),(15,'Zone commerciale','Rayon 3',2),(16,'Zone commerciale','Rayon 3',3);
/*!40000 ALTER TABLE `lieuxdestockages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produits` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `nomProduit` varchar(50) NOT NULL,
  `descriptionProduit` varchar(300) NOT NULL,
  `restrictionProduit` varchar(100) NOT NULL,
  `datePeremptionProduit` date NOT NULL,
  `prixProduit` float NOT NULL,
  `QuantiteProduit` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `idLieuxDeStockage` int(11) NOT NULL,
  PRIMARY KEY (`idProduit`),
  KEY `FK_Produits_Categories` (`idCategorie`),
  KEY `FK_Produits_LieuxDeStockages` (`idLieuxDeStockage`),
  CONSTRAINT `FK_Produits_Categories` FOREIGN KEY (`idCategorie`) REFERENCES `categories` (`idCategorie`),
  CONSTRAINT `FK_Produits_LieuxDeStockages` FOREIGN KEY (`idLieuxDeStockage`) REFERENCES `lieuxdestockages` (`idLieuxDeStockage`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produits`
--

LOCK TABLES `produits` WRITE;
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
INSERT INTO `produits` VALUES (1,'produit supprimé','la commande lié au produit qui à été supprimé','NULL','2020-12-03',0,0,1,1),(2,'Doliprane','Doliprane','aucune','2020-12-30',6,2500,4,8),(3,'Gaviscon','desc','pas avant de dormir','2022-02-02',12,633,6,10),(4,'Drill','medicament pour la gorge','pas pour les bébé','2021-12-06',3.8,200,2,2),(5,'Spifen400','Spifen','Interdit aux femmes enceintes et enfant de moins de 10 ans','2021-11-07',12.77,300,3,9),(6,'paracetamol','paracetamol','aucune','2021-02-11',20,60,1,1),(7,'smecta','smecta','Interdit au plus de 68 ans','2023-12-12',13,652,5,13),(8,'spasfon','spashon','que pour les filles','2022-06-08',6.8,182,6,14);
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL AUTO_INCREMENT,
  `nomRole` varchar(50) NOT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Inconnu'),(2,'Admin'),(3,'User');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `texte`
--

DROP TABLE IF EXISTS `texte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `texte` (
  `idTexte` int(11) NOT NULL AUTO_INCREMENT,
  `codeTexte` varchar(1118) NOT NULL,
  `codeLangue` varchar(1118) NOT NULL,
  `Texte` text NOT NULL,
  PRIMARY KEY (`idTexte`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `texte`
--

LOCK TABLES `texte` WRITE;
/*!40000 ALTER TABLE `texte` DISABLE KEYS */;
INSERT INTO `texte` VALUES (1,'Header','FR','Bienvenue sur le site de la Pharmacie'),(2,'Header','EN','Welcome to the Pharmacy website'),(3,'Les Produits','FR','Les Produits'),(4,'Les Lieux de Stockage','FR','Les Lieux de Stockage'),(5,'Les Users','FR','Les Users'),(6,'Les Roles','FR','Les Roles'),(7,'Les Categories','FR','Les Categories'),(8,'Les Commandes','FR','Les Commandes'),(9,'Inscriptions','FR','Inscriptions'),(10,'Connexions','FR','Connexions'),(11,'Les Produits','EN','Products'),(12,'Les Lieux de Stockage','EN','Storage places'),(13,'Les Users','EN','Users'),(14,'Les Roles','EN','Roles'),(15,'Les Categories','EN','Categories'),(16,'Les Commandes','EN','Orders'),(17,'Inscriptions','EN','registration'),(18,'Connexions','EN','connection'),(19,'Contact','FR','Contact'),(20,'Adresse Postal','FR','Adresse Postal'),(21,'Adresse Mail','FR','Adresse Mail'),(22,'N° Telephone','FR','N° Telephone'),(23,'N° SIRET','FR','N° SIRET'),(24,'Reseaux','FR','Reseaux'),(25,'Contact','EN','Contact'),(26,'Adresse Postal','EN','Postal Address'),(27,'Adresse Mail','EN','Mail Address'),(28,'N° Telephone','EN','Phone N°'),(29,'N° SIRET','EN','SIRET N° '),(30,'Reseaux','EN','Network');
/*!40000 ALTER TABLE `texte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(100) NOT NULL,
  `prenomUser` varchar(100) NOT NULL,
  `ageUser` int(11) NOT NULL,
  `pseudoUser` varchar(50) NOT NULL,
  `motDePasseUser` varchar(50) NOT NULL,
  `idRole` int(11) NOT NULL,
  PRIMARY KEY (`idUser`),
  KEY `FK_Users_Roles` (`idRole`),
  CONSTRAINT `FK_Users_Roles` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Rodriguez','Alberto',35,'RodriguezAlberto','RodriguezAlberto',2),(2,'Dupont','Toto',25,'DupontToto','DupontToto',3),(3,'Dupont','Titi',25,'DupontTiti','DupontTiti',3),(4,'Dupont','Tata',25,'DupontTata','DupontTata',3),(5,'Rodriguez','Albertine',35,'RodriguezAlbertine','RodriguezAlbertine',2),(6,'Toto','toto',30,'toto','1f87c7027a89d1a84ebdddab67b6193b',3);
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

-- Dump completed on 2021-01-20 17:00:03
