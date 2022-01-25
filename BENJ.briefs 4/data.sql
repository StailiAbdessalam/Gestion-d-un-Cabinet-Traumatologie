-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 25 jan. 2022 à 11:56
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `docteur`
--

CREATE TABLE `docteur` (
  `nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `Gmail` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL,
  `Specialiter` varchar(255) NOT NULL,
  `Mot_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `docteur`
--

INSERT INTO `docteur` (`nom`, `Prenom`, `date_naissance`, `Gmail`, `phone`, `Specialiter`, `Mot_pass`) VALUES
('RAHBANI', '', '2003-09-18', 'Rahbanirafik1987arty@hotmail.com', 554224310, 'Traumatologist', '12345678');

-- --------------------------------------------------------

--
-- Structure de la table `infirmieres`
--

CREATE TABLE `infirmieres` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `Gmail` varchar(255) NOT NULL,
  `NM` int(255) NOT NULL,
  `WorkStarting` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `infirmieres`
--

INSERT INTO `infirmieres` (`id`, `nom`, `Prenom`, `date_naissance`, `Gmail`, `NM`, `WorkStarting`) VALUES
(74, 'salma', 'elmrabe', '2003-09-13', 'ABDOSTAILI2003@gmail.com', 689089903, '0202-10-13'),
(97, 'abdessalam', 'staili', '0000-00-00', 'abdoycode@gmail.com', 689089903, '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `NM` int(11) NOT NULL,
  `Gmail` varchar(255) NOT NULL,
  `DateNaissance` date NOT NULL,
  `Maladie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`id`, `nom`, `Prenom`, `NM`, `Gmail`, `DateNaissance`, `Maladie`) VALUES
(6, 'salma', 'elmrabet', 89089903, 'abdoycode@gmail.com', '1111-11-11', 'BOUZALAM');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `infirmieres`
--
ALTER TABLE `infirmieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `infirmieres`
--
ALTER TABLE `infirmieres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
