-- Creazione del database se non esiste e selezione
CREATE DATABASE IF NOT EXISTS calcio_db;
USE calcio_db;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Creazione della tabella Calciatore
CREATE TABLE `Calciatore` (
    `Codice_Calciatore` INT(15) NOT NULL AUTO_INCREMENT,
    `Nome` VARCHAR(50) DEFAULT NULL,
    `Cognome` VARCHAR(50) DEFAULT NULL,
    `Nazionalita` VARCHAR(50) DEFAULT NULL,
    PRIMARY KEY (`Codice_Calciatore`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Creazione della tabella Squadra
CREATE TABLE `squadra` (
  `Codice_squadra` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) DEFAULT NULL,
  `Anno_Fondazione` int(11) DEFAULT NULL,
  `Citta` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Codice_squadra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Inserimento dati nella tabella Squadra
INSERT INTO `squadra` (`Codice_squadra`, `Nome`, `Anno_Fondazione`, `Citta`) VALUES
(122, 'Squadra 122', 1899, 'Milano'),
(123, 'Ciao FC', 2025, 'Halim');

-- Creazione della tabella Partita
CREATE TABLE `partita` (
  `Codice_squadra` int(11) NOT NULL,
  `Codice_Calciatore` int(11) NOT NULL,
  `Risultato` enum('Vinta','Persa','Pareggio') DEFAULT NULL,
  PRIMARY KEY (`Codice_Calciatore`,`Codice_squadra`),
  FOREIGN KEY (`Codice_squadra`) REFERENCES `squadra` (`Codice_squadra`),
  FOREIGN KEY (`Codice_Calciatore`) REFERENCES `Calciatore` (`Codice_Calciatore`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Creazione della tabella Lega
CREATE TABLE `Lega` (
  `Codice_Lega` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) DEFAULT NULL,
  `Paese` varchar(50) DEFAULT NULL,
  `Squadre` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Codice_Lega`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

COMMIT;
