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
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_chapitre` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  `signal_com` varchar(3) NOT NULL DEFAULT 'off',
  `en_cours` int(11) NOT NULL DEFAULT '1',
  `valide` int(11) NOT NULL DEFAULT '0',
  `supprime` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_chapitre`, `pseudo`, `commentaire`, `date_commentaire`, `signal_com`, `en_cours`, `valide`, `supprime`) VALUES
(1, 1, 'Inozuka', 'Super merci !', '2019-09-06 19:30:53', 'on', 0, 1, 0),
(2, 1, 'Itachi', 'Hehehe ce roman s\'annone incroyable ! Super idée !', '2019-09-07 12:30:16', 'off', 0, 1, 0),
(3, 1, 'Senku', 'Je pense que l\'image n\'aide pas forcément à l\'immersion mais bon. Super chapitre, merci !', '2019-09-11 21:21:52', 'off', 0, 1, 0),
(4, 1, 'Eegfzg', 'sldknflzenflkzenl ezkjfkez ejzfpj ezf e ipejf ezp epizjf', '2019-09-12 02:30:49', 'off', 0, 0, 1),
(5, 2, 'Senku', 'De retour pour ce 2e chapitre, je me pose beaucoup de questions ! Vivement la suite ! Thanks pour le chapitre !', '2019-09-13 18:05:13', 'on', 0, 1, 0),
(6, 2, 'Yozuria', 'Heheee trop mignon le renard !', '2019-09-15 20:30:07', 'on', 0, 1, 0),
(7, 2, 'Yoshimitsu', 'Je vous remercie humblement pour ce chapitre.', '2019-09-18 11:55:33', 'off', 0, 1, 0),
(8, 2, 'Hitler', 'J\'aime que les blondes et les blonds !', '2019-09-18 23:22:36', 'on', 0, 0, 1),
(9, 3, 'Senku', 'Encore moi ! Le personnage secondaire m\'intrigue tellement ! Merci pour le chapitre !', '2019-09-20 18:30:11', 'on', 0, 1, 0),
(10, 3, 'Aaliyah', 'J\'aime profondément la douceur qui ressort du personnage féminin principal.', '2019-09-21 09:30:20', 'on', 0, 1, 0),
(11, 3, 'Bruce Lee', 'Le calme avant la tempête. Méfiez vous de l\'eau qui dort.', '2019-09-23 20:33:00', 'on', 0, 1, 0),
(12, 3, 'Red Head', 'Va te faire enculer Jean Forteroche !!!', '2019-09-24 22:14:50', 'on', 0, 0, 1),
(13, 4, 'Senku', 'Okay là, on passe à un autre level !!!', '2019-09-27 18:39:13', 'off', 0, 1, 0),
(14, 4, 'Petit nuage', 'Mouais bof bof quand même...', '2019-09-27 22:44:21', 'on', 0, 1, 0),
(15, 4, 'Asta', 'Jean Forteroche épouse moi !', '2019-09-28 19:10:39', 'on', 0, 1, 0),
(16, 4, 'Gros fessier', 'Je me sens seule dans mon lit ce soir, rejoignez moi sur seuledansmonlit.com ...', '2019-09-29 02:20:07', 'off', 0, 0, 1),
(17, 5, 'Kevin', 'Euu encore une histoire de merde écrite par un conard de merde...', '2019-10-04 19:14:32', 'on', 1, 0, 0),
(18, 5, 'Senku', '5e chapitre, toujours fidèle au poste et ce n\'est pas prêt de changer ! Incroyable, merci pour ce chapitre !', '2019-10-04 20:32:11', 'off', 1, 0, 0),
(19, 5, 'Byakuya', 'Je reste pour par par un peu plus reservé que Senku mais j\'attend la suite avec impatience.', '2019-10-05 10:30:49', 'off', 1, 0, 0),
(20, 5, 'Senku', 'Hahaaaa ne t\'inquiète pas Byakuya, on va surement bientôt comprendre le pourquoi du comment !', '2019-10-05 15:10:07', 'off', 1, 0, 0),
(49, 5, 'rf', 'ffff r ', '2019-11-07 22:18:40', 'on', 1, 0, 0),
(48, 3, '8NINE', 'Ola,\r\n\r\nJe post aussi ici !!!', '2019-11-07 03:17:57', 'off', 1, 0, 0),
(47, 4, '8NINE', 'Hello,\r\n\r\nvoici mon premier message posté en direct héhé !\r\n\r\nMerci', '2019-11-07 03:17:15', 'off', 1, 0, 0),
(50, 2, '8NINE', 'new comment !', '2019-11-12 22:51:19', 'on', 1, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
