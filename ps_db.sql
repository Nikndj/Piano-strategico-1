-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 12, 2018 alle 11:19
-- Versione del server: 10.1.31-MariaDB
-- Versione PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ps_db`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `areastrategica`
--

CREATE TABLE `areastrategica` (
  `Cod` int(2) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Peso` tinyint(4) DEFAULT '0',
  `Descrizione` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `indicatore`
--

CREATE TABLE `indicatore` (
  `Cod` int(2) NOT NULL,
  `Nome` varchar(40) DEFAULT NULL,
  `Padre` int(2) NOT NULL,
  `Peso` tinyint(4) DEFAULT NULL,
  `Descrizione` varchar(200) DEFAULT NULL,
  `StatoAttuale` int(2) DEFAULT NULL,
  `Allegato` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `obiettivodibase`
--

CREATE TABLE `obiettivodibase` (
  `Cod` int(2) NOT NULL,
  `Nome` varchar(40) DEFAULT NULL,
  `Padre` int(2) NOT NULL,
  `Peso` tinyint(4) DEFAULT NULL,
  `Descrizione` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `obiettivostrategico`
--

CREATE TABLE `obiettivostrategico` (
  `Cod` int(2) NOT NULL,
  `Nome` varchar(40) DEFAULT NULL,
  `Padre` int(2) NOT NULL,
  `Peso` tinyint(4) DEFAULT NULL,
  `Descrizione` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `storico`
--

CREATE TABLE `storico` (
  `Cod` int(2) NOT NULL,
  `Data` date NOT NULL,
  `Indicatore` int(2) NOT NULL,
  `valoreAttuale` int(11) DEFAULT NULL,
  `valoreAtteso` int(11) DEFAULT NULL,
  `avanzamento` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `LivelloAutorizzativo` tinyint(4) NOT NULL DEFAULT '0',
  `ver_code` varchar(150) DEFAULT NULL,
  `verified` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `areastrategica`
--
ALTER TABLE `areastrategica`
  ADD PRIMARY KEY (`Cod`);

--
-- Indici per le tabelle `indicatore`
--
ALTER TABLE `indicatore`
  ADD PRIMARY KEY (`Cod`),
  ADD UNIQUE KEY `StatoAttuale` (`StatoAttuale`),
  ADD KEY `indicatore_ibfk_1` (`Padre`);

--
-- Indici per le tabelle `obiettivodibase`
--
ALTER TABLE `obiettivodibase`
  ADD PRIMARY KEY (`Cod`),
  ADD KEY `obiettivodibase_ibfk_1` (`Padre`);

--
-- Indici per le tabelle `obiettivostrategico`
--
ALTER TABLE `obiettivostrategico`
  ADD PRIMARY KEY (`Cod`),
  ADD KEY `Padre` (`Padre`);

--
-- Indici per le tabelle `storico`
--
ALTER TABLE `storico`
  ADD PRIMARY KEY (`Cod`,`Data`,`Indicatore`),
  ADD KEY `storico_ibfk_1` (`Indicatore`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `areastrategica`
--
ALTER TABLE `areastrategica`
  MODIFY `Cod` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `indicatore`
--
ALTER TABLE `indicatore`
  MODIFY `Cod` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `obiettivodibase`
--
ALTER TABLE `obiettivodibase`
  MODIFY `Cod` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `obiettivostrategico`
--
ALTER TABLE `obiettivostrategico`
  MODIFY `Cod` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `indicatore`
--
ALTER TABLE `indicatore`
  ADD CONSTRAINT `indicatore_ibfk_1` FOREIGN KEY (`Padre`) REFERENCES `obiettivodibase` (`Cod`) ON DELETE CASCADE,
  ADD CONSTRAINT `indicatore_ibfk_2` FOREIGN KEY (`StatoAttuale`) REFERENCES `storico` (`Cod`);

--
-- Limiti per la tabella `obiettivodibase`
--
ALTER TABLE `obiettivodibase`
  ADD CONSTRAINT `obiettivodibase_ibfk_1` FOREIGN KEY (`Padre`) REFERENCES `obiettivostrategico` (`Cod`) ON DELETE CASCADE;

--
-- Limiti per la tabella `obiettivostrategico`
--
ALTER TABLE `obiettivostrategico`
  ADD CONSTRAINT `obiettivostrategico_ibfk_1` FOREIGN KEY (`Padre`) REFERENCES `areastrategica` (`Cod`) ON DELETE CASCADE;

--
-- Limiti per la tabella `storico`
--
ALTER TABLE `storico`
  ADD CONSTRAINT `storico_ibfk_1` FOREIGN KEY (`Indicatore`) REFERENCES `indicatore` (`Cod`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
