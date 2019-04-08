-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 08 avr. 2019 à 22:09
-- Version du serveur :  10.3.14-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `id9167880_fenouil`
--

-- --------------------------------------------------------

--
-- Structure de la table `Article`
--

CREATE TABLE `Article` (
  `numéro` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `Désignation` text NOT NULL,
  `Prixdevents` int(11) NOT NULL,
  `Categori` varchar(255) NOT NULL,
  `imag` text NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Article`
--

INSERT INTO `Article` (`numéro`, `titre`, `Désignation`, `Prixdevents`, `Categori`, `imag`, `updated_at`, `created_at`) VALUES
(9, 'Chigniol a Main', '<p>chigniol bosh de qualit&eacute; avec garantie d\'un ans&nbsp;</p>', 67, 'Bricolage', 'chiniolamain.jpg', '2019-04-07', '2019-04-07'),
(10, 'Chigniol', '<p>Chigniol bosh avec touts ces recharge pour boit et brique</p>', 46, 'Bricolage', 'chiniolbosh.png', '2019-04-07', '2019-04-07'),
(11, 'cle a molette', '<p>cle a molette r&eacute;glable facilite tout action de bricolage</p>', 23, 'Bricolage', 'cle.jpg', '2019-04-07', '2019-04-07'),
(12, 'Cle a crochet', '<p>Cle a crochet pour fixer les elements difficile&nbsp;</p>', 36, 'Bricolage', 'clet.jpg', '2019-04-07', '2019-04-07'),
(13, 'cle crocodile', '<p>clet a dent de crocodile pour la plombrie</p>', 45, 'Bricolage', 'cletcrocodile.jpg', '2019-04-07', '2019-04-07'),
(14, 'Marteau', '<p>Marteau en inox avec un bras en boit maniable&nbsp;</p>', 18, 'Bricolage', 'marteau.jpg', '2019-04-07', '2019-04-07'),
(15, 'Marteau de Distruction', '<p>Marteau pour detruire les murs difficile ou pour se prendre pour tor</p>', 40, 'Bricolage', 'MARTO.jpg', '2019-04-07', '2019-04-07'),
(16, 'Marteau', '<p>Marteau proffessionnel arrache et fix les&nbsp;clous</p>', 25, 'Bricolage', 'marteau2.jpg', '2019-04-07', '2019-04-07'),
(17, 'Panopli de tourne vis', '<p>une panopli de tourne vis reglable et maniable avec differente tete</p>', 35, 'Bricolage', 'panoplidetournevis.jpg', '2019-04-07', '2019-04-07'),
(18, 'Tourne vis', '<p>Tourne vis classique americain pour ser&eacute; vos vis a la perf&eacute;ction</p>', 10, 'Bricolage', 'tournevis.jpg', '2019-04-07', '2019-04-07'),
(19, 'Vase Traditionelle', '<p>vase Traditionelle datan du 18 eme siecle fait en argile pure .<strong>&nbsp;</strong></p>', 20, 'Décoration', 'vasetreditionnele.jpg', '2019-04-07', '2019-04-07'),
(20, 'Vase a fleurs', '<p>vase a fleur parfait a mettre en entr&eacute;e d\'une maison</p>', 12, 'Décoration', 'vaseafleur.jpg', '2019-04-07', '2019-04-07'),
(21, 'Vase a fleurs', '<p>vase a fleur parfait a mettre en entr&eacute;e d\'une maison</p>', 17, 'Décoration', 'vaseafleur.jpg', '2019-04-07', '2019-04-07'),
(22, 'Table Traditionnelle', '<p>Table Traditionnelle&nbsp; en pure boit a maitre dans la chambre a coucher pr&eacute;s d\'un lit</p>', 25, 'Décoration', 'table.jpeg', '2019-04-07', '2019-04-07'),
(23, 'Table de chevet', '<p>table de chevet moderne avec des pier au forma triangle</p>', 45, 'Décoration', 'tabledechevais.jpg', '2019-04-07', '2019-04-07'),
(24, 'Panopli de Cadre', '<p>Des cadre a bas prix pour accrocher les souvenire de vacance .</p>', 30, 'Décoration', 'panoplidecadre.jpg', '2019-04-07', '2019-04-07'),
(25, 'Cadre', '<p>Son vendu individuellement ou en groupe ce magnifique cadre son atypique est moderne &agrave; la fois</p>', 23, 'Décoration', 'cadre.jpg', '2019-04-07', '2019-04-07');

-- --------------------------------------------------------

--
-- Structure de la table `Article_commend`
--

CREATE TABLE `Article_commend` (
  `numéro` int(11) NOT NULL,
  `num_commande` int(11) NOT NULL,
  `qantité` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Article_commend`
--

INSERT INTO `Article_commend` (`numéro`, `num_commande`, `qantité`, `updated_at`, `created_at`) VALUES
(9, 15, 1, '2019-04-07', '2019-04-07'),
(15, 19, 1, '2019-04-08', '2019-04-08'),
(16, 16, 1, '2019-04-08', '2019-04-08'),
(19, 17, 1, '2019-04-07', '2019-04-07');

-- --------------------------------------------------------

--
-- Structure de la table `Article_pub`
--

CREATE TABLE `Article_pub` (
  `numéro` int(11) NOT NULL,
  `num_pub` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Article_pub`
--

INSERT INTO `Article_pub` (`numéro`, `num_pub`, `created_at`, `updated_at`) VALUES
(9, 6, '2019-04-08', '2019-04-08'),
(10, 4, '2019-04-08', '2019-04-08'),
(11, 4, '2019-04-08', '2019-04-08'),
(19, 3, '2019-04-08', '2019-04-08'),
(21, 3, '2019-04-08', '2019-04-08');

-- --------------------------------------------------------

--
-- Structure de la table `cible_pub`
--

CREATE TABLE `cible_pub` (
  `num_cible` int(11) NOT NULL,
  `num_pub` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cible_pub`
--

INSERT INTO `cible_pub` (`num_cible`, `num_pub`, `updated_at`, `created_at`) VALUES
(21, 4, '2019-04-08', '2019-04-08'),
(22, 3, '2019-04-08', '2019-04-08'),
(22, 4, '2019-04-08', '2019-04-08');

-- --------------------------------------------------------

--
-- Structure de la table `Cible_routage`
--

CREATE TABLE `Cible_routage` (
  `num_cible` int(11) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `adress` text DEFAULT NULL,
  `socio_pro` varchar(255) DEFAULT NULL,
  `etat` varchar(255) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Cible_routage`
--

INSERT INTO `Cible_routage` (`num_cible`, `age`, `adress`, `socio_pro`, `etat`, `updated_at`, `created_at`) VALUES
(5, NULL, NULL, NULL, 'Refusé', '2019-03-31', '2019-03-21'),
(6, NULL, NULL, NULL, 'en attente', '2019-03-21', '2019-03-21'),
(7, 12, NULL, 'Agriculteurs exploitants', 'en attente', '2019-03-31', '2019-03-31'),
(8, 12, NULL, 'Agriculteurs exploitants', 'en attente', '2019-03-31', '2019-03-31'),
(9, NULL, NULL, NULL, 'en attente', '2019-03-31', '2019-03-31'),
(16, NULL, NULL, NULL, 'en attente', '2019-03-31', '2019-03-31'),
(17, NULL, NULL, 'Cadres et professions intellectuelles supérieures', 'en attente', '2019-03-31', '2019-03-31'),
(18, NULL, NULL, NULL, 'Accepté', '2019-04-01', '2019-04-01'),
(19, NULL, NULL, NULL, 'en attente', '2019-04-08', '2019-04-08'),
(20, NULL, NULL, 'Cadres et professions intellectuelles supérieures', 'en attente', '2019-04-08', '2019-04-08'),
(21, NULL, NULL, NULL, 'Accepté', '2019-04-08', '2019-04-08'),
(22, NULL, NULL, NULL, 'Accepté', '2019-04-08', '2019-04-08'),
(23, NULL, NULL, 'Agriculteurs exploitants', 'en attente', '2019-04-08', '2019-04-08');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `num_commande` int(11) NOT NULL,
  `type de règlement` varchar(255) DEFAULT NULL,
  `etat_commande` varchar(255) NOT NULL,
  `etat_Chéque` varchar(255) DEFAULT NULL,
  `NumeroCart` bigint(20) DEFAULT NULL,
  `DateValidite` date DEFAULT NULL,
  `CVV` int(4) DEFAULT NULL,
  `Prix` int(11) DEFAULT NULL,
  `id_indevidu` int(10) UNSIGNED NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`num_commande`, `type de règlement`, `etat_commande`, `etat_Chéque`, `NumeroCart`, `DateValidite`, `CVV`, `Prix`, `id_indevidu`, `updated_at`, `created_at`) VALUES
(10, NULL, 'SansAnomalie', 'enattente', NULL, NULL, NULL, 170, 6, '2019-03-29', '2019-03-24'),
(11, NULL, 'enattente', NULL, 1234543215672345, '2020-04-30', 123, 1234, 6, '2019-03-30', '2019-03-30'),
(12, NULL, 'Validé', 'enattente', NULL, NULL, NULL, 616, 6, '2019-03-30', '2019-03-30'),
(13, NULL, 'enattente', 'enattente', NULL, NULL, NULL, 669, 6, '2019-04-01', '2019-04-01'),
(14, NULL, 'Validé', 'enattente', NULL, NULL, NULL, 446, 6, '2019-04-01', '2019-04-01'),
(15, NULL, 'Validé', 'enattente', NULL, NULL, NULL, 67, 6, '2019-04-08', '2019-04-05'),
(16, NULL, 'enattente', 'enattente', NULL, NULL, NULL, 25, 13, '2019-04-08', '2019-04-07'),
(17, NULL, 'Validé', NULL, 1234123412341234, '2020-04-18', 123, 20, 6, '2019-04-08', '2019-04-07'),
(18, NULL, 'encour', NULL, NULL, NULL, NULL, NULL, 6, '2019-04-07', '2019-04-07'),
(19, NULL, 'Validé', 'enattente', NULL, NULL, NULL, 40, 17, '2019-04-08', '2019-04-08');

-- --------------------------------------------------------

--
-- Structure de la table `commende_annomali`
--

CREATE TABLE `commende_annomali` (
  `id` int(11) NOT NULL,
  `type d'annomali` varchar(255) NOT NULL,
  `num_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `individu_cible`
--

CREATE TABLE `individu_cible` (
  `id_indevidu` int(10) UNSIGNED NOT NULL,
  `id_cible` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `individu_cible`
--

INSERT INTO `individu_cible` (`id_indevidu`, `id_cible`, `updated_at`, `created_at`) VALUES
(8, 6, '2019-03-21', '2019-03-21'),
(8, 7, '2019-03-31', '2019-03-31'),
(8, 8, '2019-03-31', '2019-03-31'),
(8, 18, '2019-04-01', '2019-04-01'),
(9, 5, '2019-03-21', '2019-03-21'),
(9, 6, '2019-03-21', '2019-03-21'),
(9, 16, '2019-03-31', '2019-03-31'),
(9, 17, '2019-03-31', '2019-03-31'),
(9, 18, '2019-04-01', '2019-04-01'),
(9, 20, '2019-04-08', '2019-04-08'),
(10, 5, '2019-03-21', '2019-03-21'),
(10, 6, '2019-03-21', '2019-03-21'),
(10, 7, '2019-03-31', '2019-03-31'),
(10, 8, '2019-03-31', '2019-03-31'),
(10, 9, '2019-03-31', '2019-03-31'),
(10, 16, '2019-03-31', '2019-03-31'),
(10, 18, '2019-04-01', '2019-04-01'),
(10, 19, '2019-04-08', '2019-04-08'),
(11, 9, '2019-03-31', '2019-03-31'),
(11, 17, '2019-03-31', '2019-03-31'),
(11, 19, '2019-04-08', '2019-04-08'),
(11, 20, '2019-04-08', '2019-04-08'),
(13, 19, '2019-04-08', '2019-04-08'),
(13, 22, '2019-04-08', '2019-04-08'),
(13, 23, '2019-04-08', '2019-04-08'),
(14, 22, '2019-04-08', '2019-04-08'),
(15, 21, '2019-04-08', '2019-04-08'),
(15, 23, '2019-04-08', '2019-04-08'),
(16, 21, '2019-04-08', '2019-04-08');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `Notification`
--

CREATE TABLE `Notification` (
  `id_notif` int(10) UNSIGNED NOT NULL,
  `objet` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `état` int(1) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `id_indevidu` int(10) UNSIGNED NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Notification`
--

INSERT INTO `Notification` (`id_notif`, `objet`, `contenu`, `état`, `Type`, `id_indevidu`, `created_at`, `updated_at`) VALUES
(1, 'Commande', 'attente et verification de la validité de votre chéque', 0, 'attente', 6, '2019-03-24', '2019-03-24'),
(2, 'Commande', 'verification de vos cordonné banquere', 0, 'attente', 6, '2019-03-30', '2019-03-30'),
(3, 'Commande', 'attente et verification de la validité de votre chéque', 0, 'attente', 6, '2019-03-30', '2019-03-30'),
(4, 'Commande', 'attente et verification de la validité de votre chéque', 0, 'attente', 6, '2019-04-01', '2019-04-01'),
(5, 'Commande', 'attente et verification de la validité de votre chéque', 0, 'attente', 6, '2019-04-01', '2019-04-01'),
(6, 'Commande', 'attente et verification de la validité de votre chéque', 0, 'attente', 6, '2019-04-07', '2019-04-07'),
(7, 'Commande', 'verification de vos cordonné banquere', 0, 'attente', 6, '2019-04-07', '2019-04-07'),
(8, 'Commande', 'attente et verification de la validité de votre chéque', 0, 'attente', 17, '2019-04-08', '2019-04-08'),
(9, 'Commande', 'attente et verification de la validité de votre chéque', 0, 'attente', 13, '2019-04-08', '2019-04-08');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
(NULL, '$2y$10$pRXYZ5bIyKSXhaRDGFS6Yep0DEQb1fxY6T8Hhrd3nCSEKvOy39VA.', '2019-04-08 12:52:57');

-- --------------------------------------------------------

--
-- Structure de la table `Publicite`
--

CREATE TABLE `Publicite` (
  `num_pub` int(11) NOT NULL,
  `type_papier` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Publicite`
--

INSERT INTO `Publicite` (`num_pub`, `type_papier`, `titre`, `description`, `created_at`, `updated_at`) VALUES
(1, 'on', 'Doudi', 'DFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF', '2019-04-01', '2019-04-01'),
(2, 'A2', 'Titre', 'contenu', '2019-04-01', '2019-04-01'),
(3, 'internet', 'Article Decoration', 'Retrouver les meilleur article de décoration a bas prix', '2019-04-08', '2019-04-08'),
(4, 'internet', 'pub', 'petite pub', '2019-04-08', '2019-04-08'),
(5, 'A1', 'b', 'b', '2019-04-08', '2019-04-08'),
(6, 'A1', 'b', 'b', '2019-04-08', '2019-04-08');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NumTell` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateNes` date NOT NULL,
  `Fonction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categori_socio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `prenom`, `Age`, `Email`, `NumTell`, `Adress`, `DateNes`, `Fonction`, `categori_socio`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'cedit', 'florian', 20, 'ceditflorian@gmail.com', '0766545489', '3 rue de la paix', '1997-01-07', 'Gestionnaire Administratif', '', NULL, '$2y$10$qw343jIuVn/qc6NeEnW2TeQlfKNaRXNRm3dKiMz5LXGaJB4pDbSfC', 'oF0r9ZeJYo0natOztVx5tHLNDbVEPUZYJ8BptoGDyRE91P29O72mc9cPchFI', '2019-02-27 17:04:24', '2019-02-27 17:04:24'),
(3, 'martineli', 'florian', 21, 'martineliflorian@gmail.com', '0766545488', '4 rue de la paix', '1997-05-05', 'assistant', '', NULL, '$2y$10$keaeRbmG9j1gV4tvBn3C2OSr6FWtLDiCJfXGFkYpv1TzN9ouL3JzS', 'a0WK4ns45jg9WFm0ZVFOY2vUC8RQtoW9CYNXolJYfllfYu5e6UaBAYs5Jy70', '2019-02-27 17:05:53', '2019-02-27 17:05:53'),
(4, 'Draji', 'Driss', 21, 'Drajidriss@gmail.com', '0766545487', '5 rue de la paix', '1998-01-07', 'Responsable du Routage', '', NULL, '$2y$10$49tj6Nd5x2PMDfoRQJUpYuoWDj1pYmyAc.k6hfni/wJQurR6tv0YS', '2mnkVRmDDYHyqqkKJJT2eJuOppjyQFbj4XT05Kqtolde1DhzcaArqGagZnml', '2019-02-27 17:07:28', '2019-02-27 17:07:28'),
(5, 'sousialawi', 'yazide', 21, 'sousialawiyazide@gmail.com', '0766545486', '6 rue de la paix', '1998-01-16', 'Responsable de stratigie', '', NULL, '$2y$10$Woxv376Rf5GQ5CLrqa2YQe5iJgs/X6/WI4AZ2rgB4PzpCKtpxY872', 'iAOa1Mid6g3XZvyvfgOLgd2RXe7TtHVnESDx6rEzIuueWkMF5Sgo544lirwm', '2019-02-27 17:09:18', '2019-02-27 17:09:18'),
(6, 'rayan', 'bounouh', 21, 'rayanbounouh@gmail.com', '0766545485', '2 rue de la paix', '1998-06-10', 'administrateur', '', NULL, '$2y$10$34rgkccxHNtVi5vpQUS08.I38U8.8XxZhtykDBq97Q2eQufEIn10u', 'XHrrQw6vS0oRcvIrW012IAJvG6mkmAvSpOW7NsfGuTHQR92hbdM14QO9DTuM', '2019-02-27 17:16:46', '2019-02-27 17:16:46'),
(8, 'Lamine', 'mohamed', 12, 'doudi459@gmail.com', '076655436', '2 rue monparnass', '1998-08-04', NULL, 'Agriculteurs exploitants', NULL, '$2y$10$O8/He0XFxxJdfdIJbYFL7OJCliyq5khFQqUOM0l0vpMD.bs5e.D6.', NULL, '2019-03-21 00:01:29', '2019-03-21 00:01:29'),
(9, 'Zabat', 'Yacine', 20, 'dhial@gmail.com', '0766523456', '10 residence du parc du petit bourg', '1996-03-12', NULL, 'Cadres et professions intellectuelles supérieures', NULL, '$2y$10$SeTJEEppLkfnSdqPcNqrDuzC8qDb6k11qG6BKaKFwD14bt57kEfjS', 'bT5Ds9ApNuzzKRN56I3x8MCFz1oVDr7zGOz8vddkOMF3iaNwRXrxHRCCPogt', '2019-03-21 17:38:59', '2019-03-21 17:38:59'),
(10, 'ALmatary', 'Mohammed', 21, 'Almatarymohammed@gmail.com', '0765873412', '20 rue des aunetes', '1997-03-12', NULL, 'Agriculteurs exploitants', NULL, '$2y$10$dby8fwRSbDw4FmijbOndD.ttv8RCpjtQbG7HpTBV.aQKrPW09cUxm', 'kJS45VCwWyHOx6E6PDIqdYhVHMAWF03LPRxcaiRREnc6JL4vaOox6sJ32Ew5', '2019-03-21 17:41:19', '2019-03-21 17:41:19'),
(11, 'Katfi', 'amira', 22, 'amket2310@gmail.com', '076655436', 'Bras de fer courcouronne', '1996-10-15', NULL, 'Cadres et professions intellectuelles supérieures', NULL, '$2y$10$PJcuiq8OGh16CarWqcg3.uaT0URlQJS70CEjqcJKAR/0y8ot3r90u', 'Y7z3jkqS3fISFUJJR5gWk987wBKTJ8a4xOo1HiTJLHI2xxxCVqo9PE31hKar', '2019-03-21 17:42:51', '2019-03-21 17:42:51'),
(12, 'Layadi', 'dhia', 20, 'dhialayadi459@gmail.com', '076655436', '62 route de mulen 91250 saintry sur saine', '1998-02-16', NULL, 'Artisans, commerçants et chefs d’entreprise', NULL, '$2y$10$YUYr4PQrdT8m.iCm42feCujsTpdPVt6ssvUsVAogNEUacj.31DHYi', 'JsPiNvNumha3cZpyQ9jSGAhrVt8daTWqNxS8k6aqhccn42GhPMM9FgpeJ9Qk', '2019-04-02 12:12:12', '2019-04-02 12:12:12'),
(13, 'dhia', 'Mohames', 16, 'dhialayadi@gmail.com', '0766516459', '190 oud tarfa achour', '1998-06-19', NULL, 'Agriculteurs exploitants', NULL, '$2y$10$GdCcTDytHZh.FvLNaCSVA.Htr0PiVJySnA91shWSM/Wvv4GI9G5rS', 'lT5PIDwc7To1qFyT5xPlywF3NV7gPxeOhOBEaqA30xcfZwOcQ6VykGKAwY46', '2019-04-07 21:04:43', '2019-04-07 21:04:43'),
(14, 'Daraji', 'Driss', 22, 'darajidriss@gmail.com', '0766241567', '190 oud tarfa achour', '1999-01-06', NULL, 'Artisans, commerçants et chefs d’entreprise', NULL, '$2y$10$cIh..KysWd0ul6oaFjq5auMmmjjiMSJplNVHtzYaw85sUNSp.a5/6', 'DylNQblgsuin1EHpzUmWuoTBqyBR6vLG4bpQEs70560U4hC4Nx6Np4iwZPQf', '2019-04-08 10:10:12', '2019-04-08 10:10:12'),
(15, 'cedit', 'florian', 24, 'cedilleflorian@gmail.com', '0766516459', '190 oud tarfa achour', '1996-07-17', NULL, 'Agriculteurs exploitants', NULL, '$2y$10$tyjdkD5T.00Hswwe9ZSU5.0pAnknvJHF1LnSTez4u4FvPS9m77gS2', 'FnuY0wvdPzVXfhCuCuebIrdA0mVMbyuI2Xb3JMEhbdoB7S9Iqb5WZMeYkStW', '2019-04-08 10:12:57', '2019-04-08 10:12:57'),
(16, 'yazid', 'Sousialaoui', 23, 'sossiyazid@gmail.com', '0766516459', '10 rue de la paix', '1997-01-08', NULL, 'Agriculteurs exploitants', NULL, '$2y$10$v4rVUX8o.UCkX1ZCaf0yR.I7d3s0rvkBmxVoCaVHG1dbyFx/jLkoC', 'Z2nUMT2AiWSOvPFNxtHItfSd05SxT7pgoxwu1wkmCgDB9dqfw2TBuCRWVmgd', '2019-04-08 10:14:53', '2019-04-08 10:14:53'),
(17, 'Cedille', 'Florian', 23, 'cedilleflorian@hotmail.fr', '0682845548', '221B baker street', '1995-09-06', NULL, 'Cadres et professions intellectuelles supérieures', NULL, '$2y$10$hnkmtg.mdKXkDVMeUeMXCeWeOjlI3prlNAYf3Nf3R7P2Li5PGaYUq', 'rGEChU9yW0EuuULTwqtuLEM3v3cRChcQPwOrR44AUg3ckeYsvjOk1ZdQnjKY', '2019-04-08 12:54:23', '2019-04-08 12:54:23');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`numéro`);

--
-- Index pour la table `Article_commend`
--
ALTER TABLE `Article_commend`
  ADD PRIMARY KEY (`numéro`,`num_commande`),
  ADD KEY `foringkey5` (`num_commande`);

--
-- Index pour la table `Article_pub`
--
ALTER TABLE `Article_pub`
  ADD PRIMARY KEY (`numéro`,`num_pub`),
  ADD KEY `foringkey7` (`num_pub`);

--
-- Index pour la table `cible_pub`
--
ALTER TABLE `cible_pub`
  ADD PRIMARY KEY (`num_cible`,`num_pub`),
  ADD KEY `foringkey10` (`num_pub`);

--
-- Index pour la table `Cible_routage`
--
ALTER TABLE `Cible_routage`
  ADD PRIMARY KEY (`num_cible`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`num_commande`),
  ADD KEY `Foring2` (`id_indevidu`);

--
-- Index pour la table `commende_annomali`
--
ALTER TABLE `commende_annomali`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foringkey4` (`num_commande`);

--
-- Index pour la table `individu_cible`
--
ALTER TABLE `individu_cible`
  ADD PRIMARY KEY (`id_indevidu`,`id_cible`),
  ADD KEY `foringkey` (`id_cible`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Notification`
--
ALTER TABLE `Notification`
  ADD PRIMARY KEY (`id_notif`),
  ADD KEY `Foring1` (`id_indevidu`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `Publicite`
--
ALTER TABLE `Publicite`
  ADD PRIMARY KEY (`num_pub`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`Email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Article`
--
ALTER TABLE `Article`
  MODIFY `numéro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `Cible_routage`
--
ALTER TABLE `Cible_routage`
  MODIFY `num_cible` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `num_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Notification`
--
ALTER TABLE `Notification`
  MODIFY `id_notif` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `Publicite`
--
ALTER TABLE `Publicite`
  MODIFY `num_pub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Article_commend`
--
ALTER TABLE `Article_commend`
  ADD CONSTRAINT `foringkey5` FOREIGN KEY (`num_commande`) REFERENCES `commande` (`num_commande`),
  ADD CONSTRAINT `foringkey6` FOREIGN KEY (`numéro`) REFERENCES `Article` (`numéro`);

--
-- Contraintes pour la table `Article_pub`
--
ALTER TABLE `Article_pub`
  ADD CONSTRAINT `foringkey7` FOREIGN KEY (`num_pub`) REFERENCES `Publicite` (`num_pub`),
  ADD CONSTRAINT `foringkey8` FOREIGN KEY (`numéro`) REFERENCES `Article` (`numéro`);

--
-- Contraintes pour la table `cible_pub`
--
ALTER TABLE `cible_pub`
  ADD CONSTRAINT `foringkey10` FOREIGN KEY (`num_pub`) REFERENCES `Publicite` (`num_pub`),
  ADD CONSTRAINT `foringkey9` FOREIGN KEY (`num_cible`) REFERENCES `Cible_routage` (`num_cible`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `Foring2` FOREIGN KEY (`id_indevidu`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `commende_annomali`
--
ALTER TABLE `commende_annomali`
  ADD CONSTRAINT `foringkey4` FOREIGN KEY (`num_commande`) REFERENCES `commande` (`num_commande`);

--
-- Contraintes pour la table `individu_cible`
--
ALTER TABLE `individu_cible`
  ADD CONSTRAINT `Foring` FOREIGN KEY (`id_indevidu`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `foringkey` FOREIGN KEY (`id_cible`) REFERENCES `Cible_routage` (`num_cible`);

--
-- Contraintes pour la table `Notification`
--
ALTER TABLE `Notification`
  ADD CONSTRAINT `Foring1` FOREIGN KEY (`id_indevidu`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
