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
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `idC` int(10) NOT NULL,
  `idSt` int(10) NOT NULL,
  `idU` int(10) NOT NULL,
  `nomeStudio` varchar(20) NOT NULL,
  `paese` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` (`idC`, `idSt`, `idU`, `nomeStudio`, `paese`) VALUES
(1, 1, 1, 'Bergamini', 'Ospedaletto'),
(2, 1, 1, 'Lenzi', 'Casale'),
(3, 1, 1, 'La Monaca', 'Pegolotte'),
(4, 1, 1, 'La Monaca', 'Porto Viro'),
(5, 1, 1, 'La Monaca ', 'Padova'),
(6, 1, 1, 'Coccarielli', 'Treponti'),
(7, 1, 1, 'Bergo', 'Montemerlo'),
(8, 1, 1, 'Santa Apollonia', 'Cadoneghe'),
(9, 1, 1, 'Rodighiero', 'Montagnana'),
(10, 1, 1, 'Progetto Studio', 'Occhiobello'),
(12, 1, 1, 'Prova', 'Prova Davide');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`idC`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `idC` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
