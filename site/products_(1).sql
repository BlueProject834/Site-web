-- phpMyAdmin SQL Dump
-- version 4.0.0
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 23 Mars 2020 à 00:09
-- Version du serveur: 5.6.15-log
-- Version de PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `image`, `price`) VALUES
(5, 'Philips HD2581', '1223', 'C:\\Users\\asus\\Desktop\\site\\img\\a3.jpg', 1200),
(6, 'Mini Four BOSH', '3642', 'C:\\Users\\asus\\Desktop\\site\\img\\a4.jpg', 1299),
(7, 'Meuble Cuisine Indus', '5893', 'C:\\Users\\asus\\Desktop\\site\\img\\a1.jpg', 1200),
(8, 'Meuble Cuisine IPOMA', '3476', 'C:\\Users\\asus\\Desktop\\site\\img\\a2.jpg', 999);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
