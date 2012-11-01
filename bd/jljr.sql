-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2012 at 07:14 PM
-- Server version: 5.5.28-log
-- PHP Version: 5.4.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cmsrl`
--
CREATE DATABASE `cmsrl` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cmsrl`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(70) NOT NULL,
  `date` datetime NOT NULL,
  `content` mediumtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `menu_titre` varchar(70) NOT NULL,
  `acces` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usagers`
--

CREATE TABLE IF NOT EXISTS `usagers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `enc_password` varchar(40) NOT NULL,
  `acces` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usagers`
--

INSERT INTO `usagers` (`id`, `login`, `enc_password`, `acces`) VALUES
(1, 'karine', 'f57b455e08f1daebf152a1e07cdd6c1d831993d6', 'admin'),
(2, 'paul', 'a57b455e08f1daebf152a1e07cdd6c1d831993d6', 'membre'),
(3, 'garneau', '5cec175b165e3d5e62c9e13ce848ef6feac81bff', 'admin');
