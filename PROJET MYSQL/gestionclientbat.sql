-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 25 avr. 2019 à 07:58
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionclientbat`
--

-- --------------------------------------------------------

--
-- Structure de la table `nonclient`
--

CREATE TABLE `nonclient` (
  `id_nonClient` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `numero` int(100) NOT NULL,
  `projet` text NOT NULL,
  `message` text NOT NULL,
  `confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `nonclient`
--

INSERT INTO `nonclient` (`id_nonClient`, `nom`, `prenom`, `email`, `numero`, `projet`, `message`, `confirm`) VALUES
(1, 'michel', 'nanci', 'nan@gmail.com', 707, 'BATIMENTR+1', 'devis', 1),
(2, 'adjobi', 'michel christian', 'christianadjobi@gmai', 87085834, 'villa basse toiture en duie', 'devis', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `id_nonClient` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jour` varchar(20) NOT NULL,
  `heure` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `id_nonClient`, `email`, `jour`, `heure`, `date`) VALUES
(10, 1, 'christianadjobi@gmai', 'lundi', '14h-16h', '2019-04-22'),
(11, 4, 'konaneude@gmail.com', 'jeudi', '10h-12h', '2019-04-18'),
(12, 3, 'appiah@gmail.com', 'mardi', '10h-12h', '2019-04-25'),
(13, 5, 'nan@gmail.com', 'lundi', '10h-12h', '2019-04-29'),
(14, 1, 'nan@gmail.com', 'mercredi', '8h-10h', '2019-04-25');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `nonclient`
--
ALTER TABLE `nonclient`
  ADD PRIMARY KEY (`id_nonClient`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `nonclient`
--
ALTER TABLE `nonclient`
  MODIFY `id_nonClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
