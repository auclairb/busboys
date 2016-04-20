-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Avril 2016 à 20:28
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_igr`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

DROP TABLE IF EXISTS `groupes`;
CREATE TABLE IF NOT EXISTS `groupes` (
  `ID_G` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_G` varchar(100) DEFAULT NULL,
  `P1` int(11) DEFAULT NULL,
  `P2` int(11) DEFAULT NULL,
  `P3` int(11) DEFAULT NULL,
  `P4` int(11) DEFAULT NULL,
  `P5` int(11) DEFAULT NULL,
  `P6` int(11) DEFAULT NULL,
  `P7` int(11) DEFAULT NULL,
  `P8` int(11) DEFAULT NULL,
  `P9` int(11) DEFAULT NULL,
  `P10` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_G`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groupes`
--

INSERT INTO `groupes` (`ID_G`, `NOM_G`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`, `P10`) VALUES
(2, 'JE', 2, 6, 7, 8, 9, NULL, NULL, NULL, NULL, NULL),
(1, 'BusBoys', 1, 4, 3, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MiFa', 2, 3, 8, 10, 11, 12, NULL, NULL, NULL, NULL),
(5, 'PROFS', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Muscu', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `inscrits_wei`
--

DROP TABLE IF EXISTS `inscrits_wei`;
CREATE TABLE IF NOT EXISTS `inscrits_wei` (
  `ID_P` int(11) NOT NULL,
  `NOM` varchar(100) NOT NULL,
  `PRENOM` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `liste_bde`
--

DROP TABLE IF EXISTS `liste_bde`;
CREATE TABLE IF NOT EXISTS `liste_bde` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(100) DEFAULT NULL,
  `PRENOM` varchar(100) DEFAULT NULL,
  `LOGIN` varchar(100) DEFAULT NULL,
  `MDP` varchar(100) DEFAULT NULL,
  `STATUT` int(11) DEFAULT NULL,
  `GROUPE1` varchar(100) DEFAULT NULL,
  `GROUPE2` varchar(100) DEFAULT NULL,
  `GROUPE3` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `NOM` (`NOM`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `liste_bde`
--

INSERT INTO `liste_bde` (`ID`, `NOM`, `PRENOM`, `LOGIN`, `MDP`, `STATUT`, `GROUPE1`, `GROUPE2`, `GROUPE3`) VALUES
(1, 'Auclair', 'Benjamin', 'bauclair', '1234', 1, 'BusBoys', NULL, NULL),
(2, 'Chochod', 'Martin', 'mchochod', '1234', 1, 'BusBoys', 'JE', NULL),
(3, 'Cardoso Cordeiro', 'Bernardo', 'bcardoso', '4321', 1, 'Bresil', 'BusBoys', 'MiFa'),
(4, 'Morel', 'Augustin', 'amorel', '5678', 1, 'TIVI+', NULL, NULL),
(5, 'Lecolinet', 'Eric', 'elc', '1234', 1, 'PROFS', 'Team IGR', NULL),
(6, 'Heurtaux', 'Philippe', 'pheurtaux', '1234', 1, 'JE', 'Muscu', NULL),
(7, 'Nguyen', 'Berenice', 'bnguyen', '1234', 1, 'JE', NULL, NULL),
(8, 'Taconet', 'Robin', 'rtaconet', '1234', 1, 'JE', NULL, NULL),
(9, 'Cherel', 'Nicolas', 'ncherel', '1234', 1, 'JE', NULL, NULL),
(10, 'Galas', 'Godefroy', 'ggalas', '1234', 2, 'MiFa', 'Excalibed', NULL),
(11, 'Wagner', 'Jonathan', 'jwagner', '1234', 1, 'MiFa', NULL, NULL),
(12, 'Pierru', 'Marie', 'mpierru', '1234', 1, 'MiFa', NULL, NULL),
(13, 'Rouillet', 'Antoine', 'arouillet', '1234', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `voyages_dispo`
--

DROP TABLE IF EXISTS `voyages_dispo`;
CREATE TABLE IF NOT EXISTS `voyages_dispo` (
  `ID_V` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_V` varchar(100) DEFAULT NULL,
  `DISPO` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID_V`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `voyages_dispo`
--

INSERT INTO `voyages_dispo` (`ID_V`, `NOM_V`, `DISPO`) VALUES
(1, 'WEI', 1),
(3, 'WEE', 1),
(5, 'WES (Aller)', 0),
(6, 'WES (Retour)', 0),
(7, 'WEFA (Aller)', 0),
(8, 'WEFA (Retour)', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wei`
--

DROP TABLE IF EXISTS `wei`;
CREATE TABLE IF NOT EXISTS `wei` (
  `ID_WEI` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_G` varchar(100) DEFAULT NULL,
  `PLACEMENT` varchar(10) DEFAULT NULL,
  `TYPE` varchar(10) NOT NULL,
  `P1` varchar(100) DEFAULT NULL,
  `P2` varchar(100) DEFAULT NULL,
  `P3` varchar(100) DEFAULT NULL,
  `P4` varchar(100) DEFAULT NULL,
  `P5` varchar(100) DEFAULT NULL,
  `P6` varchar(100) DEFAULT NULL,
  `P7` varchar(100) DEFAULT NULL,
  `P8` varchar(100) DEFAULT NULL,
  `P9` varchar(100) DEFAULT NULL,
  `P10` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_WEI`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `wei`
--

INSERT INTO `wei` (`ID_WEI`, `NOM_G`, `PLACEMENT`, `TYPE`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`, `P10`) VALUES
(1, 'Fourrure', 'DERRIERE', 'LIGNE', 'AYMERIC', 'VATINYAN', 'LUO', 'DE MURAT', 'DEBAENE', NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
