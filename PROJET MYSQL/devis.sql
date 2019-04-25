-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 25 avr. 2019 à 07:57
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
-- Base de données :  `devis`
--

-- --------------------------------------------------------

--
-- Structure de la table `elect`
--

CREATE TABLE `elect` (
  `id` int(11) NOT NULL,
  `ouvrage` varchar(50) NOT NULL,
  `unite` varchar(50) NOT NULL,
  `quantiter` varchar(60) NOT NULL,
  `prixunitaire` varchar(50) NOT NULL,
  `prix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `generalite`
--

CREATE TABLE `generalite` (
  `id` int(11) NOT NULL,
  `ouvrage` varchar(100) NOT NULL,
  `unite` varchar(100) NOT NULL,
  `quantiter` varchar(100) NOT NULL,
  `prixunitaire` varchar(100) NOT NULL,
  `prix` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `generalite`
--

INSERT INTO `generalite` (`id`, `ouvrage`, `unite`, `quantiter`, `prixunitaire`, `prix`) VALUES
(5, 'implantation', 'metre carre', '140.20', '1458', '5000'),
(6, 'implantation', 'metre carre', '140.20', '1458', '5000'),
(7, 'implantation', 'metre carre', '140.20', '1458', '5000'),
(8, 'implantation', 'metre carre', '140.20', '1458', '5000'),
(12, 'implantation', 'metre carre', '140.20', '1458', '5000'),
(13, 'implantation', 'metre carre', '140.20', '1458', '5000'),
(14, 'implantation', 'metre carre', '140.20', '1458', '5000'),
(15, 'implantation', 'metre carre', '140.20', '1458', '50000'),
(16, 'implantation', 'metre carre', '140.20', '1458', '5000');

-- --------------------------------------------------------

--
-- Structure de la table `go`
--

CREATE TABLE `go` (
  `id` int(11) NOT NULL,
  `ouvrage` varchar(100) NOT NULL,
  `unite` varchar(50) NOT NULL,
  `quantiter` varchar(60) NOT NULL,
  `prixunitaire` varchar(50) NOT NULL,
  `prix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ma`
--

CREATE TABLE `ma` (
  `id` int(11) NOT NULL,
  `ouvrage` varchar(50) NOT NULL,
  `unite` varchar(50) NOT NULL,
  `quantiter` varchar(60) NOT NULL,
  `prixunitaire` varchar(50) NOT NULL,
  `prix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `peint`
--

CREATE TABLE `peint` (
  `id` int(11) NOT NULL,
  `ouvrage` varchar(50) NOT NULL,
  `unite` varchar(50) NOT NULL,
  `quantiter` varchar(50) NOT NULL,
  `prixunitaire` varchar(50) NOT NULL,
  `prix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `peint`
--

INSERT INTO `peint` (`id`, `ouvrage`, `unite`, `quantiter`, `prixunitaire`, `prix`) VALUES
(1, 'epot de peinture', 'ml', '140.20', '1458', '50000');

-- --------------------------------------------------------

--
-- Structure de la table `plomb`
--

CREATE TABLE `plomb` (
  `id` int(11) NOT NULL,
  `ouvrage` varchar(50) NOT NULL,
  `unite` varchar(50) NOT NULL,
  `quantiter` varchar(60) NOT NULL,
  `prixunitaire` varchar(50) NOT NULL,
  `prix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rp`
--

CREATE TABLE `rp` (
  `id` int(11) NOT NULL,
  `ouvrage` varchar(100) NOT NULL,
  `unite` varchar(50) NOT NULL,
  `quantiter` varchar(60) NOT NULL,
  `prixunitaire` varchar(50) NOT NULL,
  `prix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sf`
--

CREATE TABLE `sf` (
  `id` int(11) NOT NULL,
  `ouvrage` varchar(50) NOT NULL,
  `unite` varchar(50) NOT NULL,
  `quantiter` varchar(50) NOT NULL,
  `prixunitaire` varchar(50) NOT NULL,
  `prix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tg`
--

CREATE TABLE `tg` (
  `id` int(11) NOT NULL,
  `ouvrage` varchar(50) NOT NULL,
  `unite` varchar(50) NOT NULL,
  `quantiter` varchar(60) NOT NULL,
  `prixunitaire` varchar(100) NOT NULL,
  `prix` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `elect`
--
ALTER TABLE `elect`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `generalite`
--
ALTER TABLE `generalite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `go`
--
ALTER TABLE `go`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ma`
--
ALTER TABLE `ma`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `peint`
--
ALTER TABLE `peint`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `plomb`
--
ALTER TABLE `plomb`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rp`
--
ALTER TABLE `rp`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sf`
--
ALTER TABLE `sf`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tg`
--
ALTER TABLE `tg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `elect`
--
ALTER TABLE `elect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `generalite`
--
ALTER TABLE `generalite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `go`
--
ALTER TABLE `go`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ma`
--
ALTER TABLE `ma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `peint`
--
ALTER TABLE `peint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `plomb`
--
ALTER TABLE `plomb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rp`
--
ALTER TABLE `rp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sf`
--
ALTER TABLE `sf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tg`
--
ALTER TABLE `tg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
