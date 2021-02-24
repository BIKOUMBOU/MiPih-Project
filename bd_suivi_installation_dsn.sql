CREATE SCHEMA `bd_suivi_installation_dsn` ;

CREATE TABLE `suivi_instalation_dsn`.`utilisateur` ( 
`id` INT(255) NOT NULL AUTO_INCREMENT , 
`nom` VARCHAR(50) NOT NULL , 
`prenom` VARCHAR(50) NOT NULL , 
`mail` VARCHAR(70) NOT NULL , 
`mdp` TEXT NOT NULL , 
`date_creation_compte` DATETIME NOT NULL , 
PRIMARY KEY (`id`)) 
ENGINE = InnoDB; 


CREATE TABLE `suivi_instalation_dsn`.`utilisateur` ( 
`id` INT(255) NOT NULL AUTO_INCREMENT , 
`nom` VARCHAR(50) NOT NULL , 
`prenom` VARCHAR(50) NOT NULL , 
`mail` VARCHAR(70) NOT NULL , 
`mdp` TEXT NOT NULL , 
`date_creation_compte` DATETIME NOT NULL , 
`token` TEXT NOT NULL  
`confirmation_token` DATETIME NOT NULL AFTER `token`; 
PRIMARY KEY (`id`)) 
ENGINE = InnoDB;






CREATE TABLE `site` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT     COMMENT 'Clé primaire',
  `priorite`int(30) NULL                            COMMENT 'Priorité',
  `nom` varchar(50) NOT NULL                        COMMENT 'Nom du site',
  `siren` varchar(10)NULL                           COMMENT 'SIREN',
  `pret_install` varchar(3) NULL                    COMMENT 'Prêt install OUI/NON',
  `statut_hebergement` varchar(1) NOT NULL          COMMENT 'Autonome/ Hébergé (A/H)',
  `acces` varchar(250) DEFAULT NULL                 COMMENT 'Procédure d''accès',
  `rp` varchar(45) NULL                             COMMENT 'Nom du responsable Projet',
  `cons_dsn`varchar(45) NULL                        COMMENT 'Nom du consultant DSN',
  `version_prodige`varchar(10) NULL                 COMMENT 'Numéro de la version Prodige',
  `version_agirh`varchar(10) NULL                   COMMENT 'Numéro de la version Agirh',
  `mirth`int(1) DEFAULT 0                           COMMENT 'Mirth configurée a faire/en cours/terminé',
  `ifp`int(1) DEFAULT 0                             COMMENT 'IFP démarrée a faire/en cours/terminé',
  `ws_ph7`int(1) DEFAULT 0                          COMMENT 'WebService PH7 faire/en cours/terminé',
  `config_prodige` int(1) DEFAULT 0                 COMMENT 'Prodige configuré a faire/en cours/terminé',
  `config_agirh` int(1) DEFAULT 0                   COMMENT 'Agirh configuré a faire/en cours/terminé',
  `nom_absence` int(1) DEFAULT 0                    COMMENT 'Import des nomenclatures absence faire/en cours/terminé',
  `nom_statut` int(1) DEFAULT 0                     COMMENT 'Import des nomenclatures statut faire/en cours/terminé',
  `nom_emploi`int(1) DEFAULT 0                      COMMENT 'Import des nomenclatures statut faire/en cours/terminé',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;