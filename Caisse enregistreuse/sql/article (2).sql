-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 mars 2020 à 07:35
-- Version du serveur :  10.3.14-MariaDB
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `caisseenregistreuse`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `idArticle` int(11) NOT NULL AUTO_INCREMENT,
  `libelleArticle` varchar(50) NOT NULL,
  `prixHt` float NOT NULL,
  `codeBarre` varchar(50) NOT NULL,
  `idTva` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  PRIMARY KEY (`idArticle`),
  KEY `fk_article_tva` (`idTva`),
  KEY `fk_article_categorie` (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `libelleArticle`, `prixHt`, `codeBarre`, `idTva`, `idCategorie`) VALUES
(1, 'Test2', 10203, '123456258', 1, 1),
(4, 'Test2', 1234, '123456258', 1, 1),
(5, 'Test2', 1234, '123456258', 1, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_categorie` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`),
  ADD CONSTRAINT `fk_article_tva` FOREIGN KEY (`idTva`) REFERENCES `tva` (`idTva`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
