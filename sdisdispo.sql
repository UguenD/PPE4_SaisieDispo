-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 07 Mai 2019 à 15:15
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sdisdispo`
--

-- --------------------------------------------------------

--
-- Structure de la table `creneau`
--

CREATE TABLE IF NOT EXISTS `creneau` (
  `hcreneau` int(13) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`hcreneau`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `creneau`
--

INSERT INTO `creneau` (`hcreneau`, `libelle`) VALUES
(1, '00:01 / 03:00'),
(2, '03:01 / 06:00'),
(3, '06:01 / 09:00'),
(4, '09:01 / 12:00'),
(5, '12:01 / 15:00'),
(6, '15:01 / 18:00'),
(7, '18:01 / 21:00'),
(8, '21:01 / 00:00');

-- --------------------------------------------------------

--
-- Structure de la table `disponibilite`
--

CREATE TABLE IF NOT EXISTS `disponibilite` (
  `matricule` int(10) NOT NULL,
  `hcreneau` int(13) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `disponibilite`
--

INSERT INTO `disponibilite` (`matricule`, `hcreneau`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `pompier`
--

CREATE TABLE IF NOT EXISTS `pompier` (
  `matricule` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `caserne` varchar(10) NOT NULL,
  PRIMARY KEY (`matricule`),
  KEY `matricule` (`matricule`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `pompier`
--

INSERT INTO `pompier` (`matricule`, `nom`, `prenom`, `caserne`) VALUES
(1, 'Le Goff', 'Michel', 'BREST');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
