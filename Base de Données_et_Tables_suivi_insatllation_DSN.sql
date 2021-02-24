-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 19 fév. 2021 à 13:02
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

   *************************************************Base de données : `suivi_dsn`*******************************************
*::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*
*                                                                                                                              *
*                                                CREATION BASE DE DONNES SQL                                                   * *                                                                                                                              *
*                                                                                                                              *
*::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*


-- --------------------------------------------------------
>-- Structure de la table `site`

DROP TABLE IF EXISTS `site`;

CREATE TABLE IF NOT EXISTS `site` (
  `id` int NOT NULL AUTO_INCREMENT,
  `priorite` varchar(10) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `siren` varchar(12) DEFAULT NULL,
  `pret_install` varchar(5) DEFAULT NULL,
  `statut_hebergement` varchar(10) DEFAULT NULL,
  `acces` varchar(2000) DEFAULT NULL,
  `rp` varchar(50) DEFAULT NULL,
  `cons_dsn` varchar(50) DEFAULT NULL,
  `version_prodige` varchar(15) DEFAULT NULL,
  `version_agirh` varchar(15) DEFAULT NULL,
  `mirth` varchar(10) DEFAULT NULL,
  `ifp` varchar(10) DEFAULT NULL,
  `ws_ph7` varchar(10) DEFAULT NULL,
  `conf_prodige` varchar(20) DEFAULT NULL,
  `conf_agirh` varchar(20) DEFAULT NULL,
  `nom_abscence` varchar(20) DEFAULT NULL,
  `nom_statut` varchar(20) DEFAULT NULL,
  `nom_emploi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `siren` (`siren`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


*::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*
*                                                                                                                              *
*                                                        FONCTION INSERT SQL                                                   * *                                                                                                                              *
*                                                                                                                              *
*::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*

-- Insertion des données de la table `site`
-- --------------------------------------------------------


INSERT INTO `site` (`id`, `priorite`, `nom`, `siren`, `pret_install`, `statut_hebergement`, `acces`, `rp`, `cons_dsn`, `version_prodige`, `version_agirh`, `mirth`, `ifp`, `ws_ph7`, `conf_prodige`, `conf_agirh`, `nom_abscence`, `nom_statut`, `nom_emploi`) VALUES
(0, '1', 'Amien CHU', '12345678', 'OUI', 'H', NULL, 'Edourd LABESSE', 'Laurent TREMBOUTTE', '20. 0. 1. 4', '20. 0. 1. 4', 'OK', 'OK', 'OUI', 'OK', 'OK', 'OK', 'OK', 'OK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


*::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*
*                                                                                                                              *
*                                                         CREATION TABLE SQL                                                   * *                                                                                                                              *
*                                                                                                                              *
*::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*

-- Structure de la table `utilisateur`
-- -------------------------------------------------------- 
DROP TABLE IF EXISTS `utilisateur`;


CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `mail` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `identifiant` varchar(30) NOT NULL,
  `mot de passe` text NOT NULL,
  `date_creation_compte` datetime DEFAULT NULL,
  `token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `confirmation_token` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

