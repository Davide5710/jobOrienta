-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 31.11.39.87
-- Creato il: Feb 23, 2023 alle 21:40
-- Versione del server: 5.7.35-38-log
-- Versione PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Sql1621673_4`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `studio`
--

CREATE TABLE `studio` (
  `idSt` int(10) NOT NULL,
  `nomeStudio` varchar(20) NOT NULL,
  `paese` varchar(20) NOT NULL,
  `via` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `studio`
--

INSERT INTO `studio` (`idSt`, `nomeStudio`, `paese`, `via`) VALUES
(1, 'Dentisti Pro', 'Este (PD)', 'roma 2');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`idSt`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `studio`
--
ALTER TABLE `studio`
  MODIFY `idSt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
