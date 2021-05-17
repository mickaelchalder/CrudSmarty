-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 17 mai 2021 à 06:59
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `table_prenom`
--

-- --------------------------------------------------------

--
-- Structure de la table `prenom`
--

CREATE TABLE `prenom` (
  `id` int(11) NOT NULL,
  `prenom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prenom`
--

INSERT INTO `prenom` (`id`, `prenom`) VALUES
(10, 'ALICIA'),
(12, 'antoini'),
(5, 'bobi'),
(7, 'BROCK'),
(8, 'CAIN'),
(9, 'LOUISE'),
(4, 'MICKAEL'),
(6, 'PAT');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `prenom`
--
ALTER TABLE `prenom`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prenom` (`prenom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `prenom`
--
ALTER TABLE `prenom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
