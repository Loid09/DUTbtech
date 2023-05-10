-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 10 mai 2023 à 14:54
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dut`
--

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `nom_entreprise` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `nom_prenom` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `catalogue` varchar(255) DEFAULT NULL,
  `souscrire` tinyint(1) DEFAULT 0,
  `rdv` tinyint(1) DEFAULT 0,
  `apport` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom_entreprise`, `adresse`, `nom_prenom`, `tel`, `mail`, `catalogue`, `souscrire`, `rdv`, `apport`) VALUES
(1, 'ODIAS OHOUE', 'LOKOSSA-BENIN', 'dqsdq', 'dsqdq', 'gohouerodiask@gmail.com', 'platinum', 1, NULL, ''),
(2, 'ODIAS OHOUE', 'LOKOSSA-BENIN', 'dqsdq', 'dsqdq', 'gohouerodiask@gmail.com', 'platinum', 1, NULL, ''),
(3, 'ODIAS OHOUE', 'LOKOSSA-BENIN', 'dqsdq', 'dsqdq', 'gohouerodiask@gmail.com', 'platinum', 1, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `tel` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `nom_ecole` varchar(255) NOT NULL,
  `emplacement` varchar(255) NOT NULL,
  `hackathon` tinyint(1) DEFAULT 0,
  `digitalMiss` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `tel`, `mail`, `nom_ecole`, `emplacement`, `hackathon`, `digitalMiss`) VALUES
(8, 'RODIAS FIRSDYNO SEMEVO GOHOUE', 'jgk', '+22997933988', 'gohouerodias@gmail.com', 'RODIAS SEMEVO GOHOUE', 'https://baraboucle.com/', 0, 0),
(9, 'RODIAS FIRSDYNO SEMEVO GOHOUE', 'jgk', '+22997933988', 'gohouerodias@gmail.com', 'RODIAS SEMEVO GOHOUE', 'https://baraboucle.com/', 0, 0),
(10, 'RODIAS SEMEVO GOHOUE', 'fgjhk', '5628629+', 'gohouerodias@gmail.com', 'RODIAS GOHOUE', 'https://baraboucle.com/', 0, 0),
(11, 'azert', 'gkljkl', '54386', 'riogoereo@gmail.com', 'dirgorurg', 'uiert', 0, 0),
(12, 'azert', 'gkljkl', '54386', 'riogoereo@gmail.com', 'dirgorurg', 'uiert', 0, 0),
(13, 'RODIAS FIRSDYNO SEMEVO GOHOUE', 'sqdsdqd', '+22997933988', 'gohouerodias@gmail.com', 'Alex Qweme', 'https://baraboucle.com/', 0, 0),
(14, 'RODIAS FIRSDYNO SEMEVO GOHOUE', 'RODIAS ', '+22997933988', 'gohouerodias@gmail.com', 'ODIAS OHOUE', 'https://baraboucle.com/', 0, NULL),
(15, 'RODIAS FIRSDYNO SEMEVO GOHOUE', 'RODIAS ', '+22997933988', 'gohouerodias@gmail.com', 'ODIAS OHOUE', 'https://baraboucle.com/', 1, 0),
(16, 'RODIAS FIRSDYNO SEMEVO GOHOUE', 'RODIAS', '+22997933988', 'gohouerodias@gmail.com', 'Alex Qweme', 'https://baraboucle.com/', 1, 0),
(17, 'RODIAS FIRSDYNO SEMEVO GOHOUE', 'RODIAS ', '+22997933988', 'gohouerodias@gmail.com', 'RODIAS GOHOUE', 'https://baraboucle.com/', 1, 0),
(18, 'RODIAS FIRSDYNO SEMEVO GOHOUE', 'sqdsd', '+22997933988', 'gohouerodias@gmail.com', 'Alex Qweme', 'https://baraboucle.com/', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `universite`
--

CREATE TABLE `universite` (
  `id` int(11) NOT NULL,
  `nom_universite` varchar(255) DEFAULT NULL,
  `nom_ecole` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `participer` tinyint(1) DEFAULT 0,
  `raison` varchar(255) DEFAULT NULL,
  `reserver` tinyint(1) DEFAULT 0,
  `periode_meilleur` varchar(255) DEFAULT NULL,
  `autre_raison` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `universite`
--

INSERT INTO `universite` (`id`, `nom_universite`, `nom_ecole`, `adresse`, `tel`, `mail`, `participer`, `raison`, `reserver`, `periode_meilleur`, `autre_raison`) VALUES
(1, 'RODIAS', 'GOHOUE', '', '+22997933988', 'gohouerodias@gmail.com', 0, '', 0, '', ''),
(2, 'RODIAS', 'GOHOUE', '', '+22997933988', 'gohouerodias@gmail.com', 0, '', 0, '', ''),
(3, 'RODIAS', 'GOHOUE', '', '+22997933988', 'gohouerodias@gmail.com', 1, '', 0, '', ''),
(4, 'RODIAS', 'GOHOUE', '', '+22997933988', 'gohouerodias@gmail.com', 0, 'raison1', 1, '', ''),
(5, 'RODIAS', 'GOHOUE', '', '+22997933988', 'gohouerodias@gmail.com', 0, 'Période non propice pour cause de préparation aux examens de fin de semestre', 1, '124', ''),
(6, '', 'RODIAS FIRSDYNO SEMEVO GOHOUE', 'LOKOSSA-BENIN', '+22997933988', 'gohouerodias@gmail.com', 0, 'raison1', 1, '', ''),
(7, '', 'RODIAS FIRSDYNO SEMEVO GOHOUE', 'LOKOSSA-BENIN', '+22997933988', 'gohouerodias@gmail.com', 1, '', 0, '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `universite`
--
ALTER TABLE `universite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `universite`
--
ALTER TABLE `universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
