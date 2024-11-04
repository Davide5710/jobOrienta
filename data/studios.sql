-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 16, 2023 alle 23:10
-- Versione del server: 10.4.20-MariaDB
-- Versione PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studios`
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
(1, 1, 1, 'Studio\'sMK', 'Vicenza'),
(2, 1, 1, '#', 'Casale'),
(3, 1, 1, 'Prova 2', ''),
(4, 1, 1, 'Prova 2', 'Padova'),
(5, 1, 1, 'Prova 2', 'Padova');

-- --------------------------------------------------------

--
-- Struttura della tabella `lavoro`
--

CREATE TABLE `lavoro` (
  `idL` int(10) NOT NULL,
  `idU` int(10) NOT NULL,
  `idSt` int(11) NOT NULL,
  `idC` int(10) NOT NULL,
  `titolo` varchar(15) NOT NULL,
  `descrizione` text NOT NULL,
  `nomePaziente` varchar(20) NOT NULL,
  `cognomePaziente` varchar(20) NOT NULL,
  `prezzo` decimal(10,0) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `lavoro`
--

INSERT INTO `lavoro` (`idL`, `idU`, `idSt`, `idC`, `titolo`, `descrizione`, `nomePaziente`, `cognomePaziente`, `prezzo`, `data`) VALUES
(1, 1, 1, 1, 'Ponte Superiore', 'aaaaa', 'Davide', 'Muratore', '500', '2023-01-01'),
(2, 1, 1, 1, 'Ponte Superiore', 'aaaaa', 'Davide', 'Muratore', '500', '2023-01-01'),
(3, 1, 1, 4, 'Ponte Superiore', 'ff', 'Davide', 'Muratore', '1', '2023-01-01');

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
(1, 'Dentisti Pro', 'Este (PD)', 'roma 2'),
(2, '#', 'Casale', 'Rio janeiro');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `idU` int(11) NOT NULL,
  `idSt` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `cognome` varchar(15) NOT NULL,
  `ruolo` varchar(15) NOT NULL,
  `user` varchar(10) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`idU`, `idSt`, `nome`, `cognome`, `ruolo`, `user`, `password`) VALUES
(1, 1, 'Davide', 'Muratore', 'Admin', 'aa', '1234');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`idC`);

--
-- Indici per le tabelle `lavoro`
--
ALTER TABLE `lavoro`
  ADD PRIMARY KEY (`idL`);

--
-- Indici per le tabelle `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`idSt`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `idC` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `lavoro`
--
ALTER TABLE `lavoro`
  MODIFY `idL` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `studio`
--
ALTER TABLE `studio`
  MODIFY `idSt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
