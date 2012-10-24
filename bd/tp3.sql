-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 03 Février 2011 à 16:03
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tp3`
--

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet_id` int(11) NOT NULL,
  `nom_menu` varchar(30) NOT NULL,
  `position` int(3) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `contenu` text NOT NULL,
  `secure` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `pages`
--

INSERT INTO `pages` (`id`, `sujet_id`, `nom_menu`, `position`, `visible`, `contenu`, `secure`) VALUES
(1, 1, 'Historique', 1, 1, 'Ceci est l''historique de la <b>compagnie</b> ...\r\n\r\nEt voilà!\r\n\r\nEncore une ligne.', 0),
(2, 1, 'Notre Mission', 2, 1, 'Notre mission corporative est ...', 0),
(3, 2, 'Produit vedette', 1, 1, 'Notre produit vedette est vraiment extraordinaire.\r\nC''est tout!', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sujets`
--

CREATE TABLE IF NOT EXISTS `sujets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_menu` varchar(30) NOT NULL,
  `position` int(3) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `sujets`
--

INSERT INTO `sujets` (`id`, `nom_menu`, `position`, `visible`) VALUES
(1, 'À notre propos', 1, 1),
(2, 'Produits', 2, 1),
(3, 'Services', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `usagers`
--

CREATE TABLE IF NOT EXISTS `usagers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `enc_password` varchar(40) NOT NULL,
  `acces` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `usagers`
--

INSERT INTO `usagers` (`id`, `login`, `enc_password`, `acces`) VALUES
(1, 'karine', 'f57b455e08f1daebf152a1e07cdd6c1d831993d6', 'admin'),
(2, 'paul', 'a57b455e08f1daebf152a1e07cdd6c1d831993d6', 'membre');
