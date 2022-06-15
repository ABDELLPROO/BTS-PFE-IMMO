-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 15 juin 2022 à 13:50
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pfe_immo`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` bigint(11) UNSIGNED NOT NULL,
  `nom_admin` varchar(100) NOT NULL,
  `prenom_admin` varchar(100) NOT NULL,
  `login_admin` varchar(100) NOT NULL,
  `motpass_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `prenom_admin`, `login_admin`, `motpass_admin`) VALUES
(1, 'jaafar', 'abderrahmane', 'jaafar01@gmail.com', 'abdo1234');

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_vendeur` bigint(20) UNSIGNED NOT NULL,
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `region` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `id_type_annonce` bigint(20) UNSIGNED NOT NULL,
  `chambre` int(11) DEFAULT NULL,
  `etage` int(11) DEFAULT NULL,
  `salle_de_bain` int(11) DEFAULT NULL,
  `piece` int(11) DEFAULT NULL,
  `superficie` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `video` longblob NOT NULL,
  `etat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id_img` bigint(20) UNSIGNED NOT NULL,
  `nom_img` varchar(100) NOT NULL,
  `type_img` varchar(100) NOT NULL,
  `bin` longblob NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `type_annonce`
--

CREATE TABLE `type_annonce` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_annonce`
--

INSERT INTO `type_annonce` (`id`, `nom`) VALUES
(1, 'maison'),
(2, 'appartement'),
(3, 'studio'),
(4, 'villa'),
(5, 'riad'),
(6, 'ferme'),
(7, 'bureau');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE `vendeur` (
  `id_ven` bigint(11) UNSIGNED NOT NULL,
  `nomV` varchar(100) NOT NULL,
  `prenomV` varchar(100) NOT NULL,
  `telV` varchar(100) NOT NULL,
  `emailV` varchar(100) NOT NULL,
  `motpassV` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`id_ven`, `nomV`, `prenomV`, `telV`, `emailV`, `motpassV`) VALUES
(7, 'JA', 'abderrahmane', '0644157042', 'jaafar@gmail.com', '2222'),
(8, 'jaafar', 'abderrahmane', '064', 'jaafar@gmail.com', '1111'),
(9, ' jaafar1', 'abdooo', '0644157042', 'jaafar@gmail.com', 'abdo'),
(10, 'sony', 'abde', '0644157042', 'jaafar@gmail.com', '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `annonce_un` (`id_type_annonce`),
  ADD KEY `id_ven` (`id_vendeur`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `annonce_id_type_annonce_IDX` (`id_type_annonce`) USING BTREE;

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `type_annonce`
--
ALTER TABLE `type_annonce`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD PRIMARY KEY (`id_ven`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id_img` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_annonce`
--
ALTER TABLE `type_annonce`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `vendeur`
--
ALTER TABLE `vendeur`
  MODIFY `id_ven` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_FK` FOREIGN KEY (`id_type_annonce`) REFERENCES `type_annonce` (`id`),
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `annonce_ibfk_2` FOREIGN KEY (`id_vendeur`) REFERENCES `vendeur` (`id_ven`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id`) REFERENCES `annonce` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
