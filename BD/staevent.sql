-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 29 nov. 2021 à 13:37
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `staevent`
--

-- --------------------------------------------------------

--
-- Structure de la table `animator`
--

CREATE TABLE `animator` (
  `animator_id` int(10) NOT NULL,
  `animator_name` varchar(50) DEFAULT NULL,
  `animator_fname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `event_id` int(10) NOT NULL,
  `types_id` int(10) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `event_description` text DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_organisator` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `participate`
--

CREATE TABLE `participate` (
  `users_id` int(10) NOT NULL,
  `ses_id` int(10) NOT NULL,
  `state` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ses`
--

CREATE TABLE `ses` (
  `ses_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `animator_id` int(10) DEFAULT NULL,
  `theme` varchar(50) DEFAULT NULL,
  `session_description` text DEFAULT NULL,
  `session_date` date DEFAULT NULL,
  `h_start` text DEFAULT NULL,
  `h_end` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `nb_max` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `types_id` int(10) NOT NULL,
  `types_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `users_id` int(10) NOT NULL,
  `users_name` varchar(50) DEFAULT NULL,
  `users_fname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `pswd` varchar(255) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `code` int(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_fname`, `email`, `login`, `pswd`, `class`, `code`, `status`) VALUES
(1, 'Zinutti', 'matteo', 'matteoz@gmail.com', 'matteoz', 'matteoz', 'SIO2A', 111, 'eleve');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animator`
--
ALTER TABLE `animator`
  ADD PRIMARY KEY (`animator_id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `types_id` (`types_id`);

--
-- Index pour la table `participate`
--
ALTER TABLE `participate`
  ADD PRIMARY KEY (`users_id`,`ses_id`),
  ADD KEY `ses_id` (`ses_id`);

--
-- Index pour la table `ses`
--
ALTER TABLE `ses`
  ADD PRIMARY KEY (`ses_id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `animator_id` (`animator_id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`types_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animator`
--
ALTER TABLE `animator`
  MODIFY `animator_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ses`
--
ALTER TABLE `ses`
  MODIFY `ses_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `types_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `EVENTS_ibfk_1` FOREIGN KEY (`types_id`) REFERENCES `types` (`types_id`);

--
-- Contraintes pour la table `participate`
--
ALTER TABLE `participate`
  ADD CONSTRAINT `PARTICIPATE_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`),
  ADD CONSTRAINT `PARTICIPATE_ibfk_2` FOREIGN KEY (`ses_id`) REFERENCES `ses` (`ses_id`);

--
-- Contraintes pour la table `ses`
--
ALTER TABLE `ses`
  ADD CONSTRAINT `SES_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`),
  ADD CONSTRAINT `SES_ibfk_2` FOREIGN KEY (`animator_id`) REFERENCES `animator` (`animator_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
