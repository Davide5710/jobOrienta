-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 31.11.39.87
-- Creato il: Feb 23, 2023 alle 21:39
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
-- Struttura della tabella `lavoro`
--

CREATE TABLE `lavoro` (
  `idL` int(10) NOT NULL,
  `idU` int(10) NOT NULL,
  `idSt` int(11) NOT NULL,
  `idC` int(10) NOT NULL,
  `titolo` varchar(30) NOT NULL,
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
(8, 1, 1, 1, 'MattÃ¨', '1 elemento inf.  mattÃ¨', 'Alessandro', 'Permunian', '1', '2023-02-01'),
(9, 1, 1, 1, 'PM', '2 perni moncone con attacco a bottone sup.', 'Elide', 'Sboarina', '1', '2023-02-01'),
(10, 1, 1, 7, 'Porcellana', '1 Richmond inf. porcellana', 'Carlo', 'Pernicini', '1', '2023-02-01'),
(11, 1, 1, 9, 'Resina', '1 elemento superiore provvisorio in resina rapida', 'Romina', 'Trivellato', '10', '2023-02-01'),
(12, 1, 1, 9, 'Resina', '1 elemento superiore provvisorio in resina rapida', 'Andrea', 'Marsiglio', '10', '2023-02-01'),
(13, 1, 1, 1, 'mobile', 'Ribasatura mobile superiore ', 'Resy ', 'Fortin', '1', '2023-02-01'),
(14, 1, 1, 6, 'mobile', 'Protesi mobile inf. in nylon con 3 denti + 4 ganci', 'Guido', 'Pescante', '1', '2023-02-01'),
(15, 1, 1, 1, 'Ortodonzia', 'Ortodontico mobile sup. ', 'Ginevra', 'Lucchiari', '1', '2023-02-01'),
(16, 1, 1, 1, 'mobile', 'aggiunto 1 dente +1 gancio+ ribasatura protesi  inferiore ', 'Carla', 'Girardi', '1', '2023-02-01'),
(17, 1, 1, 1, 'mobile', 'aggiunto 3 ganci + ribasatura protesi mobile superiore ', 'Elide', 'Sboarina', '1', '2023-02-01'),
(18, 1, 1, 6, 'MOBILE', 'Riparazione scheletrato inf.', 'BRUNO', 'CESARO', '10', '2023-02-02'),
(19, 1, 1, 6, 'mobile', 'AGGIUNTO 1   DENTE A PROTESI MOBILE INF.', 'ANTONIO', 'NOVENTA', '12', '2023-02-02'),
(20, 1, 1, 8, 'ORTODONZIA', 'MASCHERINA DI ALLINEAMENTO SUP.', 'ARIANNA', 'CHIUMENTO', '50', '2023-02-02'),
(21, 1, 1, 6, 'ORTODONZIA', 'MASCHERINA DI ALLINEAMENTO INF.', 'MARTINA', 'BARBIERO', '40', '2023-02-02'),
(22, 1, 1, 8, 'PORCELLANA', '1 MONCONE PERSONAIZZATO INF. SU IMPIANTO STRAUMANN + 1 ELEMENTO PORCELLANA', 'CARLA', 'BOLZONELLA', '240', '2023-02-02'),
(23, 1, 1, 9, 'MOBILE', 'RIPARAZIONE PROTESI MOBILE SUP.', 'GIOVANNINA', 'DE STEFANI', '15', '2023-02-02'),
(24, 1, 1, 6, 'mobile', 'CAMBIATI 4 GOMMINI A PROTESI INF. SU IMPIANTI', 'BABETTO', 'ALESSIO', '40', '2023-02-03'),
(25, 1, 1, 6, 'mobile', 'RIPARAZIONE PROTESI MOBILE SUP.', 'FIORENZO', 'BASO', '10', '2023-02-03'),
(26, 1, 1, 6, 'mobile', 'RIBASATURA PROTESI MOBILE SUP.', 'GIOVANNI ', 'LIONELLO', '25', '2023-02-03'),
(27, 1, 1, 1, 'ORTODONZIA', '2^ MASCHERINA DI ALLINEAMENTO INF.', 'PIETRO', 'ZANZONI', '40', '2023-02-03'),
(28, 1, 1, 1, 'ORTODONZIA', 'MASCHERINA DI ALLINEAMENTO INF.', 'MARTIN', 'BARADEL', '40', '2023-02-03'),
(29, 1, 1, 1, 'mobile', 'TIRATA RIBASATURA A SCHELETRATO INF. + CAMBIATO 1 ATTACCO VERTICALE', '-', '-', '1', '2023-02-03'),
(30, 1, 1, 1, 'mobile', 'Cambiato 2 gommini verticali x attacchi ', 'N', 'N', '1', '2023-02-03'),
(31, 1, 1, 1, 'mobile', 'aggiunto 3 denti + 1 gancio a protesi sup.', 'Giovanni', 'Panzani', '1', '2023-02-03'),
(32, 1, 1, 1, 'mattÃ¨', '1 weener mattÃ¨', 'Adelino', 'Capuzzo', '1', '2023-02-04'),
(34, 1, 1, 1, 'mobile', 'protesi mobile sup. + inf. 24 denti + 3 ganci + retina di rinforzo + consegnato 3 denti ', 'Anna ', 'Guidoboni ', '1', '2023-02-04'),
(35, 1, 1, 1, 'mattÃ¨', '1 weener mattÃ¨ inf.', 'Valeria ', 'Gobbi', '1', '2023-02-04'),
(36, 1, 1, 1, 'Porcellana', '1 weenwr porcellana inf.', 'Marinella ', 'Vendramin', '1', '2023-02-04'),
(37, 1, 1, 6, 'MOBILE', 'CAMBIATO 1 DENTE A PROTESI MOBILE SUP.', 'MARIA', 'SOLIGO', '12', '2023-02-07'),
(38, 1, 1, 8, 'Resina', '2 ELEMENTI SUPERIORI PROVVISORI IN RESINA RAPIDA SU 13 E 25\r\nGIULIA', '?', '?', '20', '2023-02-07'),
(39, 1, 1, 2, 'Porcellana', '1 ELEMENTO SUP. PORCELLANA ', 'DINA', 'ROSSI ', '75', '2023-02-07'),
(40, 1, 1, 2, 'PORCELLANA', 'PONTE INF. PORCELLANA 3 ELEMENTI', 'EMANUELE', 'CARPI', '225', '2023-02-07'),
(41, 1, 1, 1, 'mobile', 'tirato ribasatura mob. inf. + cambiato 1 gommino ', 'n', 'n', '1', '2023-02-07'),
(42, 1, 1, 1, 'Resina', '1 corona resina inferiore ', 'Renzo ', 'Miotto', '1', '2023-02-07'),
(43, 1, 1, 1, 'mattÃ¨', 'ponte sup. mattÃ¨5 elementi ', 'Antonio', 'Riolfato', '1', '2023-02-07'),
(44, 1, 1, 1, 'mattÃ¨', '1 richmond  mattÃ¨ sup.', 'GianPaolo', 'Contin', '1', '2023-02-07'),
(45, 1, 1, 1, 'Porcellana', '1 elemento inf. in porcellana ', 'Tomaso', 'Carlin', '1', '2023-02-07'),
(46, 1, 1, 1, 'mattÃ¨', '1 richmond inf.  mattÃ¨', 'Italo', 'Tecchio', '1', '2023-02-07'),
(47, 1, 1, 6, 'Porcellana', '1 weener in porcellana sup.', 'Federico', 'Corsari', '1', '2023-02-07'),
(48, 1, 1, 6, 'MOBILE', 'RAGNETTO IN NYLON INF. CON 1 DENTE', 'GIUSEPPE', 'CAVINATO', '165', '2023-02-08'),
(49, 1, 1, 6, 'MOBILE', 'RIPARATA PROTESI MOBILE SUPERIORE', 'BORTOLAZZO', 'GABRIELLA', '10', '2023-02-08'),
(50, 1, 1, 1, 'MOBILE', 'ATTACCATO DENTE A SCHELETRATO INF.', 'MARIO', 'TEMPORIN', '10', '2023-02-08'),
(51, 1, 1, 3, 'FISSA', '1 PERNO MONCONE SUP CON CHIAVISTELLO', 'IVAN', 'BROCCADELLO', '60', '2023-02-08'),
(52, 1, 1, 7, 'Impianti', 'Componentistica impianti Neodent Taliaro', 'per Toronto', '?', '200', '2023-02-10'),
(53, 1, 1, 1, 'ORTODONZIA', 'ORTODONTICO MOBILE SUP.', 'MELISSA', 'BISSARO', '1', '2023-02-10'),
(54, 1, 1, 1, 'Resina', '3 ELEMENTI SUP. PROVVISORI', 'ELISA', 'MENC ATO', '30', '2023-02-10'),
(55, 1, 1, 9, 'FISSA', '1 PERNO FUSO CON ATTACCO A BOTTONE INF. COMPLETO ', 'MARIA GRAZIA', 'ONGARELLI', '50', '2023-02-10'),
(56, 1, 1, 1, 'ORTODONZIA', 'RIADATTATO ORTO SUP. + VITE ESPANSIONE', 'FONTANA ', 'TOBIA', '1', '2023-02-10'),
(57, 1, 1, 1, 'ORTODONZIA', 'ORTODONTICO MOBILE SUP. ', 'NOEMI', 'SENO', '1', '2023-02-10'),
(58, 1, 1, 4, 'FISSA', '1 PERNO FUSO CON ATTACCO A PALLINA SUPERIORE ', 'ORNELLA', 'RIGO', '50', '2023-02-11'),
(59, 1, 1, 2, 'MOBILE', 'Scheletrato superiore con 4 denti', 'ca', '32', '188', '2023-02-13'),
(60, 1, 1, 10, 'Resina', 'PONTE INF. 3 ELEMENTI + 1 ELEMENTO SUPERIORE PROVVISORI ', 'ALLEUMA', 'ARSENIEV', '40', '2023-02-13'),
(61, 1, 1, 10, 'MOBILE', 'RIBASATURA RIGIDA/MORBIDA', 'EUGENIO', 'CASALLI', '35', '2023-02-13'),
(62, 1, 1, 10, 'MOBILE', 'PROTESI MOBILE PARZIALE SUP. 8 DENTI + 2 GANCI ', 'MARIA RENATA', 'LAZZARI', '156', '2023-02-13'),
(63, 1, 1, 1, 'mobile', 'riparato protesi sup.', 'Carlisa ', 'Seren', '1', '2023-02-13'),
(64, 1, 1, 1, 'mattÃ¨', '3 weener mattÃ¨ sup.', 'Valentina ', 'Oprea', '1', '2023-02-14'),
(65, 1, 1, 7, 'Porcellana', '1 elemento in porcellana ', 'Arianna', 'Dallalibera ', '1', '2023-02-14'),
(66, 1, 1, 1, 'p.m.', '1 perno moncone + 1 attacco a bottone inf.', 'Graziano ', 'Vicentini', '1', '2023-02-14'),
(67, 1, 1, 5, 'FISSA', '2 PERNI MONCONI CON ATTACCO A BOTTONE INFERIORI', 'ALESSANDRA', 'RAMPAZZO', '75', '2023-02-14'),
(68, 1, 1, 9, 'PORCELLANA', '1 ELEMENTO SUPERIORE IN METALLO-CERAMICA', 'ROMINA', 'TRIVELLATO', '75', '2023-02-14'),
(69, 1, 1, 6, 'MOBILE', 'PROTESI MOBILE TOTALE INF. CON 14 DENTI', 'DINO', 'ALESSANDRIN', '1', '2023-02-14'),
(70, 1, 1, 6, 'MOBILE', 'PROTESI MOBILE INF. PROVVISORIA 2 DENTI +2 GANCI', 'DANIELA', 'COSTACHE', '40', '2023-02-14'),
(71, 1, 1, 1, 'mobile', '  Alzato masticazione a protesi mob. inf. 1 faccetta resina + ribasatura mob. inf. + sup. + 1 cuffia in metallo ', 'Graziano ', 'Vicentini', '1', '2023-02-14'),
(72, 1, 1, 7, 'Porcellana', '2 monconi su impianto + ponte inf. porcellana  3 elementi ', 'Lady', 'Pavanello', '1', '2023-02-16'),
(73, 1, 1, 1, 'Porcellana', '2 weener porcellana sup.', 'Paola ', 'Masiero ', '1', '2023-02-16'),
(74, 1, 1, 6, 'MOBILE', 'PROTESI MOBILE INFERIORE 1 DENTE + 2 GANCI', 'NATALINA', 'SOLIGO', '35', '2023-02-16'),
(75, 1, 1, 6, 'ZIRCONIO', 'PONTE SUPERIORE IN ZIRCONIODI 4 ELEMENTI AVVITATO SU 2 IMPIANTI (+ 2 VITI ANGOLATE)', 'DOTTORESSA', 'COCCARIELLI', '1', '2023-02-16'),
(76, 1, 1, 7, 'FISSA', '1 CORONA RESINA SUPERIORE', 'ALESSANDRA', 'DE  LORENZI', '20', '2023-02-17'),
(77, 1, 1, 10, 'Resina', 'PONTE INF. PORCELLANA 3 ELEMENTI IN RESINA RAPIDA', 'ALLEUMA', 'ARSENIEV', '30', '2023-02-17'),
(78, 1, 1, 10, 'FISSA', '2 ELEMENTO INFERIORI PROVVISORI IN RESINA RAPIDA', 'CARLA', 'MORESCHI', '20', '2023-02-18'),
(79, 1, 1, 2, 'FISSA', '1 ELEMENTO INFERIORE IN RESINA ARMATA', 'URBANO', 'MANTOAN', '25', '2023-02-20'),
(80, 1, 1, 1, 'FISSA', '1 ELEMENTO PORCELLANA SUP.', 'LAURA', 'COGO', '124', '2023-02-20'),
(81, 1, 1, 9, 'FISSA', '5 ELEMENTI SUP. PROV VISORI IN RESINA RAPIDA', 'LUISELLA', 'SALVAGNO', '50', '2023-02-20'),
(82, 1, 1, 7, 'Porcellana', '1 ELEMENTO IN PORCELLANA SU IMPIANTO AVVITATA ', 'MARTA', 'RIONDATO', '1', '2023-02-21'),
(83, 1, 1, 9, 'MOBILE', 'AGGIUNTO 1 DENTE A SCHELETRATO SUP. + 1 DENTE + 1 GANCIO A SCHELETRATO INF,', 'MONTAGNA', '.', '40', '2023-02-21'),
(84, 1, 1, 6, 'MOBILE', 'RIPARAZIONE PROTESI MOBILE INFERIORE', 'CESARE', 'RAMPAZZO', '10', '2023-02-21'),
(85, 1, 1, 6, 'MOBILE', 'AGGIUNTO 1 DENTE A PROTESI MOBILE INF.', 'FRANCO', 'VISENTIN', '12', '2023-02-21'),
(86, 1, 1, 7, 'MOBILE', 'Ribasatura di scheletrato inf. +aggiunto 1 dente + 1 gancio', 'INES', 'SCHIAVO', '45', '2023-02-22'),
(87, 1, 1, 1, 'MOBILE', 'AGGIUNTO 1 DENTE + 1 GANCIO A SCHELETRATO INF.', 'CARLA', 'GIRARDI', '37', '2023-02-22'),
(88, 1, 1, 10, 'MOBILE', 'RIPARAZIONE PROTESI MOBILE SUPERIORE', 'RENATA', 'LAZZARI', '20', '2023-02-22'),
(89, 1, 1, 1, 'MOBILE', 'ATTACCATO GRUPPO SUO A PROTESI INF. + RIBASATURA INF.', 'FERIOLI', 'ADRIANO', '62', '2023-02-22'),
(90, 1, 1, 7, 'FISSO', '4 ELEMENTI SUP. PROVVISORI IN RESINA RAPIDA', '.', 'REGNOLI', '40', '2023-02-22'),
(91, 1, 1, 8, 'FISSA', '1 elemento superiore provvisorio in resina rapida in posizione 25', '?', '?', '10', '2023-02-23'),
(92, 1, 1, 1, 'mobile', 'AGGIUNTO 2 DENTI A MOBILE INFERIORE + RIBASATURA ', 'MARIA', 'SINIGAGLIA', '1', '2023-02-23');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `lavoro`
--
ALTER TABLE `lavoro`
  ADD PRIMARY KEY (`idL`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `lavoro`
--
ALTER TABLE `lavoro`
  MODIFY `idL` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
