-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 07:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorie`
--

CREATE TABLE `kategorie` (
  `kategoria_ID` int(6) NOT NULL,
  `názov_kategórie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorie`
--

INSERT INTO `kategorie` (`kategoria_ID`, `názov_kategórie`) VALUES
(1, 'tričká'),
(2, 'mikiny'),
(3, 'čiapky');

-- --------------------------------------------------------

--
-- Table structure for table `objednavka_produkt`
--

CREATE TABLE `objednavka_produkt` (
  `objednavky_ID` int(11) NOT NULL,
  `produkt_ID` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `pocet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `objednavky`
--

CREATE TABLE `objednavky` (
  `objednavky_ID` int(11) NOT NULL,
  `meno` varchar(255) NOT NULL,
  `prizvisko` varchar(255) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `hodnota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `používatelia`
--

CREATE TABLE `používatelia` (
  `user_ID` int(6) NOT NULL,
  `meno` varchar(255) NOT NULL,
  `priezvisko` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `heslo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `používatelia`
--

INSERT INTO `používatelia` (`user_ID`, `meno`, `priezvisko`, `email`, `heslo`) VALUES
(1, 'pavol', 'hlinka', 'pavol@gmail.com', '1234'),
(2, 'adam', 'hlinka', 'hlinka@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `prokukt`
--

CREATE TABLE `prokukt` (
  `produkt_ID` int(6) NOT NULL,
  `meno` tinytext NOT NULL,
  `cena` int(11) NOT NULL,
  `sklad` text NOT NULL,
  `popis` text NOT NULL,
  `pohlavie` tinytext NOT NULL,
  `kategoria_ID` int(11) DEFAULT NULL,
  `obrazok_url` varchar(255) NOT NULL,
  `ean` varchar(13) DEFAULT NULL,
  `stara_cena` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prokukt`
--

INSERT INTO `prokukt` (`produkt_ID`, `meno`, `cena`, `sklad`, `popis`, `pohlavie`, `kategoria_ID`, `obrazok_url`, `ean`, `stara_cena`) VALUES
(1, 'Tričko Marcela', 17, '1', 'Dámske bavlnené tričko čiernej farby obohatené výšivkov v stýle slovenského folklóru. Zloženie trička 100% bavlna.', 'dámske', 1, 'tricko1.jpg', '1235644', NULL),
(2, 'Tričko Emma', 15, '1', 'Dámske bavlnené tričko bielej farby obohatené výšivkov v stýle slovenského folklóru. Zloženie trička 100% bavlna.', 'dámske', 1, 'tricko2.jpg', '1235645', NULL),
(3, 'Tričko Ján', 16, '2', 'Pánske bavlnené tričko čiernej farby obohatené výšivkov v stýle slovenského folklóru. Zloženie trička 100% bavlna.', 'pánske', 1, 'tricko3.jpg', '1235646', NULL),
(4, 'Tričko Jozef', 15, '3', 'Pánske bavlnené tričko bielej farby obohatené výšivkov v stýle slovenského folklóru. Zloženie trička 100% bavlna.', 'pánske', 1, 'tricko4.jpg', '1235647', NULL),
(5, 'Tričko Slovačisko', 15, '2', 'Pánske bavlnené tričko čiernej farby obohatené výšivkov v stýle slovenského folklóru. Zloženie trička 100% bavlna.', 'pánske', 1, 'tricko5.jpg', '1235648', NULL),
(6, 'Tričko Laco', 16, '4', 'Pánske bavlnené tričko čiernej farby obohatené výšivkov v stýle slovenského folklóru. Zloženie trička 100% bavlna.', 'pánske', 1, 'tricko6.jpg', '1235649', NULL),
(7, 'Mikina Dominik', 29, '1', 'Pánska čierna mikina cez hlavu s kapucňou. Overená kvalita. Pohodlná na nosenie. Zloženie bavlna a polyester 65%/35%. Vnútorná strana počesaná. Vrecko klokanka. Hrúbka 320g/m2. Farebné odtiene sa môžu od fotky mierne líšiť. (skreslenie fotoaparátu a monitora.)', 'pánske', 2, 'mikina1.jpg', '1235650', NULL),
(8, 'Mikina Ľubo', 29, '1', 'Dámska čierna mikina cez hlavu s kapucňou. Overená kvalita. Pohodlná na nosenie. Zloženie bavlna a polyester 65%/35%. Vnútorná strana počesaná. Vrecko klokanka. Hrúbka 320g/m2. Farebné odtiene sa môžu od fotky mierne líšiť. (skreslenie fotoaparátu a monitora.)', 'pánska', 2, 'mikina2.jpg', '1235651', NULL),
(9, 'Mikina Janka', 35, '1', 'Pánska čierna mikina cez hlavu s kapucňou. Overená kvalita. Pohodlná na nosenie. Zloženie bavlna a polyester 65%/35%. Vnútorná strana počesaná. Vrecko klokanka. Hrúbka 320g/m2. Farebné odtiene sa môžu od fotky mierne líšiť. (skreslenie fotoaparátu a monitora.)', 'dámska', 2, 'mikina3.jpg', '1235652', NULL),
(10, 'Čiapka Zita', 12, '1', 'Univerzálna veľkosť.  Pre dámy aj pánov. Svetlo-hnedá farba. 100% polyakryl. Jemný povrch.', 'dámske', 3, 'ciapka1.jpg', '1235652', NULL),
(11, 'Čiapka Dana', 12, '1', 'Univerzálna veľkosť.  Pre dámy aj pánov. Biela farba. 100% polyakryl. Jemný povrch.', 'dámska', 3, 'ciapka2.jpg', '1235653', NULL),
(12, 'Čiapka Beta', 12, '1', 'Univerzálna veľkosť.  Pre dámy aj pánov. Mordrá + červená, čierna a biela farba. 100% polyakryl. Jemný povrch.', 'dámska', 3, 'ciapka3.jpg', '1235654', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`kategoria_ID`);

--
-- Indexes for table `objednavky`
--
ALTER TABLE `objednavky`
  ADD PRIMARY KEY (`objednavky_ID`);

--
-- Indexes for table `používatelia`
--
ALTER TABLE `používatelia`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `prokukt`
--
ALTER TABLE `prokukt`
  ADD PRIMARY KEY (`produkt_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `kategoria_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `objednavky`
--
ALTER TABLE `objednavky`
  MODIFY `objednavky_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `používatelia`
--
ALTER TABLE `používatelia`
  MODIFY `user_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prokukt`
--
ALTER TABLE `prokukt`
  MODIFY `produkt_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
