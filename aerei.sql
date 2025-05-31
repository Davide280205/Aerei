-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 31, 2025 at 04:54 PM
-- Server version: 5.7.24
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aerei`
--

-- --------------------------------------------------------

--
-- Table structure for table `modelli`
--

CREATE TABLE `modelli` (
  `ID` int(11) NOT NULL,
  `Aereo` varchar(50) NOT NULL,
  `Tipologia` enum('Caccia','Cacciabombardiere','Bombardiere','Ricognitore','Trasporto','Multiruolo','Passeggeri') NOT NULL,
  `Nazionalità` varchar(50) NOT NULL,
  `Fotografato` enum('Si','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modelli`
--

INSERT INTO `modelli` (`ID`, `Aereo`, `Tipologia`, `Nazionalità`, `Fotografato`) VALUES
(1, 'Boeing F18 C', 'Cacciabombardiere', 'USA', 'Si'),
(2, 'Eurofighter Typhoon', 'Cacciabombardiere', 'Europa', 'Si'),
(3, 'Mig 29', 'Caccia', 'Russia', 'Si'),
(4, 'Boeing B-29', 'Bombardiere', 'USA', 'No');

--
-- Triggers `modelli`
--
DELIMITER $$
CREATE TRIGGER `trg_before_insert_modelli` BEFORE INSERT ON `modelli` FOR EACH ROW BEGIN DECLARE next_id INT; SELECT IFNULL(MAX(ID), 0) + 1 INTO next_id FROM modelli; SET NEW.ID = next_id; END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modelli`
--
ALTER TABLE `modelli`
  ADD PRIMARY KEY (`ID`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `riordina_modelli` ON SCHEDULE EVERY 1 SECOND STARTS '2025-05-31 18:04:04' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE modelli
SET ID = (@rank := IFNULL(@rank, 0) + 1)
ORDER BY ID$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
