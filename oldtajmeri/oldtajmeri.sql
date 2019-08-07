-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03. Jun 2018. u 22:59
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oldtajmeri`
--
CREATE DATABASE IF NOT EXISTS `oldtajmeri` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `oldtajmeri`;

-- --------------------------------------------------------

--
-- Struktura tabele `automobil`
--

DROP TABLE IF EXISTS `automobil`;
CREATE TABLE IF NOT EXISTS `automobil` (
  `ID_automobil` int(255) NOT NULL AUTO_INCREMENT,
  `model` varchar(255) NOT NULL,
  `marka` varchar(255) NOT NULL,
  `kubikaza` varchar(255) NOT NULL,
  `konjaza` double(255,0) NOT NULL,
  `boja` varchar(255) NOT NULL,
  `godina_proizvodnje` date NOT NULL,
  `broj_vrata` int(255) NOT NULL,
  `gorivo` varchar(255) NOT NULL,
  `kilometraza` int(200) NOT NULL,
  `cena` int(200) NOT NULL,
  PRIMARY KEY (`ID_automobil`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Prikaz podataka tabele `automobil`
--

INSERT INTO `automobil` (`ID_automobil`, `model`, `marka`, `kubikaza`, `konjaza`, `boja`, `godina_proizvodnje`, `broj_vrata`, `gorivo`, `kilometraza`, `cena`) VALUES
(1, '1750 GS Figoni & Falaschi', 'Alfa Romeo', '1346', 44, 'crna', '1933-01-13', 2, 'dizel', 148000, 25000),
(2, '8C 233 Zagato Spyder', 'Alfa Romeo', '1200', 55, 'crvena', '1932-06-01', 2, 'dizel', 250000, 35000),
(3, 'DB2 Prototype UMC 272', 'Aston Martin', '1500', 250, 'zelena', '1949-02-10', 2, 'dizel', 350000, 45000),
(4, 'Speed Six Old No 2', 'Bentley', '1100', 130, 'crna', '1926-07-13', 2, 'benzin', 12000, 55000),
(5, '250 GT SWB Berlinetta Competizione', 'Ferrari', '1300', 270, 'siva', '1959-08-27', 2, 'dizel ', 0, 65000),
(6, 'Testarossa Spider Valeo', 'Ferrari', '1256', 120, 'siva', '1986-11-13', 2, 'benzin', 15000, 75000),
(7, 'E-type Lightweight', 'Jaguar', '1350', 134, 'siva', '1964-06-17', 2, 'dizel', 13000, 85000),
(8, 'H6C Dubonnet Xenia', 'Hispano-Suiza', '485', 119, 'crna', '1938-07-05', 2, 'dizel', 0, 95000),
(9, 'Countach', 'Lamborghini', '459', 290, 'zelena', '1974-07-10', 2, 'dizel', 0, 115000),
(10, 'Phantom III Thrupp & Mabeley', 'Rolls-Royce', '678', 50, 'plava', '1936-05-28', 2, 'benzin', 145131, 80000),
(11, 'Oxia Prototype', 'Peugeot', '1375', 173, 'siva', '1989-02-09', 2, 'dizel', 152313, 95000),
(12, 'T150C-SS Pourtout Coupe', 'Talbot-Lago', '1321', 132, 'siva', '1937-06-23', 2, 'benzin', 131232, 150000);

-- --------------------------------------------------------

--
-- Struktura tabele `korisnici`
--

DROP TABLE IF EXISTS `korisnici`;
CREATE TABLE IF NOT EXISTS `korisnici` (
  `ID_korisnik` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `godina` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Broj_kupljenih_vozila` int(255) NOT NULL,
  PRIMARY KEY (`ID_korisnik`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Prikaz podataka tabele `korisnici`
--

INSERT INTO `korisnici` (`ID_korisnik`, `ime`, `email`, `godina`, `username`, `password`, `Broj_kupljenih_vozila`) VALUES
(1, 'Vanja Smiljkovic', 'v@gmail.com', '1999-12-31', 'Vanjica12', 'vanja17', 0),
(2, 'Vanja Smiljkovic', 'v@gmail.com', '1995-09-30', 'Vanjica13', 'nesto', 0),
(3, 'Vanja Smiljkovic', 'v@gmail.com', '1999-12-31', 'Vanjica14', 'nesto1', 0),
(4, 'Nikola Ugarkovic', 'n@gmail.com', '1997-12-18', 'Dzo', 'Dzo', 10),
(5, 'Dzo1', 'Dzo1@gmail.com', '1997-12-18', 'Dzo1', 'Dzo1', 19),
(6, 'Dzo2', 'Dzo2@gmail.com', '1997-12-18', 'Dzo2', 'Dzo2', 0),
(7, 'Dzo3', 'Dzo3@gmail.com', '1997-12-18', 'Dzo3', 'Dzo3', 0),
(8, 'Dzo4', 'Dzo4@gmail.com', '1997-12-18', 'Dzo4', 'Dzo4', 0),
(9, 'Dzo5', 'Dzo@gmail.com', '1997-12-18', 'Dzo5', 'Dzo5', 0);

-- --------------------------------------------------------

--
-- Struktura tabele `kupljeniautomobili`
--

DROP TABLE IF EXISTS `kupljeniautomobili`;
CREATE TABLE IF NOT EXISTS `kupljeniautomobili` (
  `ID_kupljeniautomobil` int(255) NOT NULL AUTO_INCREMENT,
  `ID_Korisnika` int(11) NOT NULL,
  `ID_automobil` int(255) NOT NULL,
  `datum_kupljenog_vozila` date NOT NULL,
  PRIMARY KEY (`ID_kupljeniautomobil`),
  KEY `ID_automobil` (`ID_automobil`),
  KEY `ID_Korisnik_sk` (`ID_Korisnika`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Prikaz podataka tabele `kupljeniautomobili`
--

INSERT INTO `kupljeniautomobili` (`ID_kupljeniautomobil`, `ID_Korisnika`, `ID_automobil`, `datum_kupljenog_vozila`) VALUES
(1, 1, 1, '2018-06-03'),
(5, 4, 1, '2018-06-03'),
(7, 5, 1, '2018-06-03'),
(8, 5, 7, '2018-06-03'),
(9, 5, 10, '2018-06-03'),
(10, 5, 9, '2018-06-03');

-- --------------------------------------------------------

--
-- Struktura tabele `popust`
--

DROP TABLE IF EXISTS `popust`;
CREATE TABLE IF NOT EXISTS `popust` (
  `ID_popust` int(255) NOT NULL AUTO_INCREMENT,
  `ID_korisnik` int(255) NOT NULL,
  `popusti` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_popust`),
  KEY `ID_korisnik` (`ID_korisnik`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Prikaz podataka tabele `popust`
--

INSERT INTO `popust` (`ID_popust`, `ID_korisnik`, `popusti`) VALUES
(1, 5, '30');

--
-- Ograničenja za izvezene tabele
--

--
-- Ograničenja za tabele `kupljeniautomobili`
--
ALTER TABLE `kupljeniautomobili`
  ADD CONSTRAINT `ID_Korisnik_sk` FOREIGN KEY (`ID_Korisnika`) REFERENCES `korisnici` (`ID_korisnik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ID_automobil` FOREIGN KEY (`ID_automobil`) REFERENCES `automobil` (`ID_automobil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograničenja za tabele `popust`
--
ALTER TABLE `popust`
  ADD CONSTRAINT `ID_korisnik` FOREIGN KEY (`ID_korisnik`) REFERENCES `korisnici` (`ID_korisnik`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
