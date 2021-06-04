-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 04 juin 2021 à 11:24
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `pseudo`, `content`, `date`) VALUES
(1, 'CAMILLE', 'COUCOU', '2021-06-02 15:09:29'),
(2, 'CONDE', 'COMMENT VAS TU ', '2021-06-02 15:09:29'),
(3, 'EDOUARD', 'JE VAIS BIEN', '2021-06-02 15:09:35'),
(4, 'PHILIPE', 'ET TOI ? ', '2021-06-02 15:09:35'),
(5, 'hjschjds', 'bonjour', '2021-06-03 13:00:37'),
(6, 'demotchat', 'hello world insert', '2021-06-03 13:01:04'),
(7, 'mathier', 'helloword', '2021-06-03 13:01:31'),
(62, 'valdmirdemo', 'demodemo demo demo demo', '2021-06-04 13:01:32'),
(63, 'valdmirdemo', 'demodemo demo demo demo', '2021-06-04 13:02:04'),
(64, 'valdmirdemo', 'demodemo demo demo demo', '2021-06-04 13:19:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
