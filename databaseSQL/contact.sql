-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  db5000212522.hosting-data.io
-- Généré le :  Jeu 19 Décembre 2019 à 16:04
-- Version du serveur :  5.7.28-log
-- Version de PHP :  7.0.33-0+deb9u6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbs207376`
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
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `date_message`, `titre_message`, `message`, `rgpd`) VALUES
(1, 'Forteroche', 'Jean', 'jeanforteroche@contact.com', NULL, NULL, NULL, 'off'),
(2, 'Penne', 'Thibault', 'thibault.penne@gmail.com', '2019-10-01 00:00:00', 'Publication ', 'Bonjour, je voulais savoir si vous comptiez publié ce livre en librairie ?', 'on'),
(62, 'Penne', 'Thibault', 'thibault.penne@gmail.com', '2019-12-17 23:05:50', 'Auteur', 'Heyyyyyyyyy cool ?', 'on'),
(63, 'Penne', 'Thibault', 'thibault.penne@gmail.com', '2019-12-19 15:41:02', 'Auteur', 'khg', 'on');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
