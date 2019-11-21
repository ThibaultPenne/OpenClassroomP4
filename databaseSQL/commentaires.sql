-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 21 nov. 2019 à 19:05
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
  `id_comment` int(11) NOT NULL,
  `id_chapitre` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  `signal_com` varchar(3) NOT NULL DEFAULT 'non',
  `statut` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_comment`, `id_chapitre`, `pseudo`, `commentaire`, `date_commentaire`, `signal_com`, `statut`) VALUES
(1, 1, 'Inozuka', 'Super merci !', '2019-09-06 19:30:53', 'non', 1),
(2, 1, 'Itachi', 'Hehehe ce roman s\'annone incroyable ! Super idée !', '2019-09-07 12:30:16', 'non', 1),
(3, 1, 'Senku', 'Je pense que l\'image n\'aide pas forcément à l\'immersion mais bon. Super chapitre, merci !', '2019-09-11 21:21:52', 'non', 1),
(4, 1, 'Eegfzg', 'sldknflzenflkzenl ezkjfkez ejzfpj ezf e ipejf ezp epizjf', '2019-09-12 02:30:49', 'oui', 2),
(5, 2, 'Senku', 'De retour pour ce 2e chapitre, je me pose beaucoup de questions ! Vivement la suite ! Thanks pour le chapitre !', '2019-09-13 18:05:13', 'non', 1),
(6, 2, 'Yozuria', 'Heheee trop mignon le renard !', '2019-09-15 20:30:07', 'non', 1),
(7, 2, 'Yoshimitsu', 'Je vous remercie humblement pour ce chapitre.', '2019-09-18 11:55:33', 'non', 1),
(8, 2, 'Hitler', 'J\'aime que les blondes et les blonds !', '2019-09-18 23:22:36', 'oui', 2),
(9, 3, 'Senku', 'Encore moi ! Le personnage secondaire m\'intrigue tellement ! Merci pour le chapitre !', '2019-09-20 18:30:11', 'non', 1),
(10, 3, 'Aaliyah', 'J\'aime profondément la douceur qui ressort du personnage féminin principal.', '2019-09-21 09:30:20', 'non', 1),
(11, 3, 'Bruce Lee', 'Le calme avant la tempête. Méfiez vous de l\'eau qui dort.', '2019-09-23 20:33:00', 'non', 1),
(12, 3, 'Red Head', 'Va te faire enculer Jean Forteroche !!!', '2019-09-24 22:14:50', 'oui', 2),
(13, 4, 'Senku', 'Okay là, on passe à un autre level !!!', '2019-09-27 18:39:13', 'non', 1),
(14, 4, 'Petit nuage', 'Mouais bof bof quand même...', '2019-09-27 22:44:21', 'non', 1),
(15, 4, 'Asta', 'Jean Forteroche épouse moi !', '2019-09-28 19:10:39', 'non', 1),
(16, 4, 'Gros fessier', 'Je me sens seule dans mon lit ce soir, rejoignez moi sur seuledansmonlit.com ...', '2019-09-29 02:20:07', 'oui', 2),
(17, 5, 'Kevin', 'Euu encore une histoire de merde écrite par un conard de merde...', '2019-10-04 19:14:32', 'oui', 0),
(18, 5, 'Senku', '5e chapitre, toujours fidèle au poste et ce n\'est pas prêt de changer ! Incroyable, merci pour ce chapitre !', '2019-10-04 20:32:11', 'non', 0),
(19, 5, 'Byakuya', 'Je reste pour par par un peu plus reservé que Senku mais j\'attend la suite avec impatience.', '2019-10-05 10:30:49', 'non', 0),
(20, 5, 'Senku', 'Hahaaaa ne t\'inquiète pas Byakuya, on va surement bientôt comprendre le pourquoi du comment !', '2019-10-05 15:10:07', 'non', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_comment`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
