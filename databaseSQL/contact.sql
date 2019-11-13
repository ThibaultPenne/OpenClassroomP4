-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 13 nov. 2019 à 15:05
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(90) NOT NULL,
  `prenom` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `date_message` datetime DEFAULT NULL,
  `titre_message` varchar(90) DEFAULT NULL,
  `message` text,
  `rgpd` varchar(3) DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `date_message`, `titre_message`, `message`, `rgpd`) VALUES
(1, 'Forteroche', 'Jean', 'jeanforteroche@contact.com', NULL, NULL, NULL, 'off'),
(2, 'Penne', 'Thibault', 'thibault.penne@gmail.com', '2019-10-01 00:00:00', 'Publication ', 'Bonjour, je voulais savoir si vous comptiez publié ce livre en librairie ?', 'on'),
(3, 'sfdsf', 'fddsf', 'sdfsdf@sdfdsfd', '2019-11-11 14:38:44', 'sfsdfsdfsdf', 'dsfdsfsd', 'off'),
(4, 'egreg', 'regerg', 'regerg&@regerg', '2019-11-11 14:38:56', 'ergerg', 'ergergergr', 'off'),
(5, 'erger', 'greger', 'fdv@feerg', '2019-11-11 14:57:15', 'vdfvfd', 'dfv', 'on'),
(6, 'dfvd', 'fdvf', 'dv@efvv', '2019-11-11 14:57:23', 'evr', 'vrvrv', 'on'),
(7, '8', 'NINE', 'ola@ijskqdl.com', '2019-11-11 14:58:37', 'Auteur', 'Hello,\r\n\r\nSuper auteur je tenais juste à le souligner !', 'on'),
(41, 'Penne', 'Thibault', 'thibault.penne@gmail.com', '2019-11-13 01:36:57', 'Auteur', 'Salut, c\'est encore moi !\r\n\r\nEncore un autre test !', 'on'),
(42, 'Penne', 'Thibault', 'thibault.penne@gmail.com', '2019-11-13 02:19:42', 'sfsdfsdfsdf', 'dtu', 'on'),
(43, 'Penne', 'Thibault', 'thibault.penne@gmail.com', '2019-11-13 02:23:47', 'jhgcjhg', 'fhkjcf', 'on'),
(44, 'Penne', 'Thibault', 'thibault.penne@gmail.com', '2019-11-13 02:28:39', 'erge', 'regerger', 'on'),
(45, 'Penne', 'Thibault', 'thibault.penne@gmail.com', '2019-11-13 02:35:19', 'ryjyr', 'ukiyul yuuiuyiu', 'on'),
(46, 'Suda', 'Samurai', 'samurai.suda@gmail.com', '2019-11-13 12:28:45', 'New', 'Ola, nouveau message !', 'on');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
