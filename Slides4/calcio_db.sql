SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `Calciatore` (
  `Codice_Calciatore` int(15) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Cognome` varchar(50) DEFAULT NULL,
  `Nazionalita'` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `calcio`
--

CREATE TABLE `squadra` (
  `Codice_squadra` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Anno_Fondazione` int(11) DEFAULT NULL,
  `Citta` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `squadra`
--

INSERT INTO `squadra` (`Codice_squadra`, `Nome`, `Anno_Fondazione`, `Citta`) VALUES
(122, '122', 12344, 'io'),
(123, 'ciao', 2025, 'halim');

-- --------------------------------------------------------

--
-- Struttura della tabella `partita`
--

CREATE TABLE `partita` (
  `Codice_squadra` int(11) NOT NULL,
  `Codice_Calciatore` int(11) NOT NULL,
  `Risultato` enum('Vinta','Persa') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Struttura della tabella `Lega`
--

CREATE TABLE `Lega` (
  `Codice_Lega` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Paese` varchar(50) DEFAULT NULL,
  `Squadre` varchar(10) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `calciatore`
--
ALTER TABLE `calciatore`
  ADD PRIMARY KEY (`Codice_calciatore`);

--
-- Indici per le tabelle `squadra`
--
ALTER TABLE `squadra`
  ADD PRIMARY KEY (`Codice_squadra`);

--
-- Indici per le tabelle `partita`
--
ALTER TABLE `partita`
  ADD PRIMARY KEY (`Codice_Calciatore`,`Codice_Squadra`),
  ADD KEY `Codice_Calciatore` (`Codice_Calciatore`);

--
-- Indici per le tabelle `Lega`
--
ALTER TABLE `Lega`
  ADD PRIMARY KEY (`Codice_Lega`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `calciatore`
--
ALTER TABLE `calciatore`
  MODIFY `Codice_Calciatore` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `squadra`
--
ALTER TABLE `squadra`
  MODIFY `Codice_squadra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT per la tabella `proiezione`
--
ALTER TABLE `Lega`
  MODIFY `Codice_Lega` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `partita`
--
ALTER TABLE `partita`
  ADD CONSTRAINT `partita_ibfk_1` FOREIGN KEY (`Codice_squadra`) REFERENCES `squadra` (`Codice_squadra`),
  ADD CONSTRAINT `partita_ibfk_2` FOREIGN KEY (`Codice_calciatore`) REFERENCES `calciatore` (`Codice_calciatore`);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;