-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 29 Août 2017 à 01:15
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sam`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id_projet` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`id_projet`, `id_membre`) VALUES
(1, 1),
(8, 1),
(9, 1),
(7, 2),
(8, 2),
(9, 2),
(7, 3),
(8, 4),
(9, 4);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `niveau` int(11) NOT NULL,
  `specialite` varchar(20) NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `email`, `niveau`, `specialite`, `tel`) VALUES
(1, 'NAJJAR', 'Fatma', 'fatmanajjar119@gmail.com', 4, 'GL', 95398991),
(2, 'membre1', 'membre1', 'bkjnkj', 2, 'GL', 12345678),
(3, 'membre2', 'membre2', 'membre2@gmail.com', 3, 'GL', 12365478),
(4, 'membre3', 'membre3', 'membre3@gmail.com', 3, 'GL', 25413658),
(5, 'membre5', 'membre5', 'membre5@gmail.com', 2, 'RT', 58746932),
(6, 'ridha', 'NAJJAR', 'ridha.najjar@gmail.com', 2, 'GL', 12547859);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `label` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`id`, `label`, `description`) VALUES
(1, 'label', 'description'),
(2, 'projet2', '\r\n								Description\r\n										'),
(3, 'projet3', '\r\n								Description\r\n										'),
(4, 'projet4', '\r\n								Description\r\n										'),
(5, 'projet5', '\r\n								Description\r\n										'),
(6, 'projet7', '\r\n								Description\r\n										'),
(7, 'projet8', '\r\n								Description\r\n										'),
(8, 'projet0', 'description projet'),
(9, 'projet10', 'description projet');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id_projet`,`id_membre`),
  ADD KEY `fkmembre` (`id_membre`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `fkmembre` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`),
  ADD CONSTRAINT `fkprojet` FOREIGN KEY (`id_projet`) REFERENCES `projet` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
