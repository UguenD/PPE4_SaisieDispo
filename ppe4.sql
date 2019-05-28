-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 28 Mai 2019 à 00:31
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ppe4`
--

-- --------------------------------------------------------

--
-- Structure de la table `dispo`
--

CREATE TABLE IF NOT EXISTS `dispo` (
  `idDispo` int(10) NOT NULL AUTO_INCREMENT,
  `idPompier` int(10) NOT NULL,
  `idCreneau` int(10) NOT NULL,
  `dateDispo` date NOT NULL,
  PRIMARY KEY (`idDispo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `dispo`
--

INSERT INTO `dispo` (`idDispo`, `idPompier`, `idCreneau`, `dateDispo`) VALUES
(23, 123, 1, '2019-06-03'),
(24, 123, 1, '2019-06-04'),
(25, 123, 1, '2019-06-05'),
(26, 123, 1, '2019-06-05');

-- --------------------------------------------------------

--
-- Structure de la table `pompier`
--

CREATE TABLE IF NOT EXISTS `pompier` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=125 ;

--
-- Contenu de la table `pompier`
--

INSERT INTO `pompier` (`id`, `nom`, `prenom`) VALUES
(123, 'LE GOFF', 0),
(124, 'LE GALL', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
