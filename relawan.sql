-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 05:05 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Admin', 'AdminAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `datarelawan`
--

CREATE TABLE `datarelawan` (
  `nik` varchar(16) NOT NULL,
  `namaling` varchar(100) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `no` text NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `stiker` longblob DEFAULT NULL,
  `ktp` longblob DEFAULT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datarelawan`
--

INSERT INTO `datarelawan` (`nik`, `namaling`, `nama`, `no`, `alamat`, `stiker`, `ktp`, `latitude`, `longitude`) VALUES
('123112', NULL, 'vol1', '08121', 'vol1', NULL, NULL, 3.56063, 98.6583);

-- --------------------------------------------------------

--
-- Table structure for table `kaling`
--

CREATE TABLE `kaling` (
  `idling` int(11) NOT NULL,
  `namalur` varchar(100) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `no` text NOT NULL,
  `foto` longblob DEFAULT NULL,
  `wilayah` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kaling`
--

INSERT INTO `kaling` (`idling`, `namalur`, `nama`, `no`, `foto`, `wilayah`, `username`, `password`) VALUES
(1, NULL, 'korling1', '08121', NULL, 'korling1', 'korling1', '5773d718c85a4d77101f4a3c295dbc34');

-- --------------------------------------------------------

--
-- Table structure for table `katimcam`
--

CREATE TABLE `katimcam` (
  `idcam` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` longblob DEFAULT NULL,
  `no` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `wilayah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katimcam`
--

INSERT INTO `katimcam` (`idcam`, `nama`, `foto`, `no`, `username`, `password`, `wilayah`) VALUES
(1, 'andrio', NULL, '081212123', 'andrio', '30c60f0b492d9f3db57641c6f902bd22', 'korcam');

-- --------------------------------------------------------

--
-- Table structure for table `katimlur`
--

CREATE TABLE `katimlur` (
  `idlur` int(11) NOT NULL,
  `namacam` varchar(100) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `no` text NOT NULL,
  `foto` longblob DEFAULT NULL,
  `wilayah` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katimlur`
--

INSERT INTO `katimlur` (`idlur`, `namacam`, `nama`, `no`, `foto`, `wilayah`, `username`, `password`) VALUES
(1, 'andrio', 'korlur1', '0812', NULL, 'korlur1', 'korlur1', 'cb85450d7489d985d1ce534a304f8a85');

-- --------------------------------------------------------

--
-- Table structure for table `katimses`
--

CREATE TABLE `katimses` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no` text NOT NULL,
  `foto` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katimses`
--

INSERT INTO `katimses` (`id`, `username`, `password`, `nama`, `no`, `foto`) VALUES
(1, 'timses', 'timses', 'roby', '081212121212', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `datarelawan`
--
ALTER TABLE `datarelawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `kaling`
--
ALTER TABLE `kaling`
  ADD PRIMARY KEY (`idling`);

--
-- Indexes for table `katimcam`
--
ALTER TABLE `katimcam`
  ADD PRIMARY KEY (`idcam`);

--
-- Indexes for table `katimlur`
--
ALTER TABLE `katimlur`
  ADD PRIMARY KEY (`idlur`);

--
-- Indexes for table `katimses`
--
ALTER TABLE `katimses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kaling`
--
ALTER TABLE `kaling`
  MODIFY `idling` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `katimcam`
--
ALTER TABLE `katimcam`
  MODIFY `idcam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `katimlur`
--
ALTER TABLE `katimlur`
  MODIFY `idlur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `katimses`
--
ALTER TABLE `katimses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
