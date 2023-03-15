-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 05:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sija_wash`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbarang`
--

CREATE TABLE `tblbarang` (
  `idbarang` int(11) NOT NULL,
  `namabarang` varchar(25) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbarang`
--

INSERT INTO `tblbarang` (`idbarang`, `namabarang`, `stok`) VALUES
(1, 'Air compressor ', 3),
(2, 'Shampoo mobil (5 liter)', 20),
(3, 'Kanebo', 15),
(4, 'Aji', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbljasa`
--

CREATE TABLE `tbljasa` (
  `idjasa` int(11) NOT NULL,
  `jasa` varchar(25) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbljasa`
--

INSERT INTO `tbljasa` (`idjasa`, `jasa`, `biaya`) VALUES
(1, 'Isi angin', 2000),
(2, 'Cuci motor hidrolik', 15000),
(4, 'Jasa cuci Dimas', 500),
(5, 'Cuci mobil standar', 21000),
(6, 'Cuci mobil hidrolik', 25000),
(7, 'Jasa cuci monyet', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `idorder` int(11) DEFAULT NULL,
  `nama_customer` varchar(25) DEFAULT NULL,
  `plat_nmr` varchar(7) DEFAULT NULL,
  `idjasa` int(11) DEFAULT NULL,
  `waktu` datetime DEFAULT current_timestamp(),
  `total_biaya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblpegawai`
--

CREATE TABLE `tblpegawai` (
  `idpegawai` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `tempatlahir` varchar(50) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `JK` enum('L','P') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpegawai`
--

INSERT INTO `tblpegawai` (`idpegawai`, `nik`, `nama`, `email`, `tgllahir`, `tempatlahir`, `telepon`, `alamat`, `foto`, `JK`) VALUES
(1, '123345', 'aji akbar', 'aji@email.com', '0000-00-00', 'pasjam', '08883453535', 'pasjam', 'aji.jpg', 'L'),
(2, '1234', 'Curut', 'curut@email.com', '1995-12-06', 'deket RSUD', '0821-141-516', 'cianjur', 'curut.png', 'L'),
(6, '32014141414141 ', 'Pelangi Wulandali', 'pelangi@email.com', '2004-02-05', 'RSUD beneran', '0888-999-991', 'JL. Tinggi langit No. 7', 'pelangi.png', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `iduser` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `level` enum('A','C') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`iduser`, `email`, `username`, `pass`, `level`) VALUES
(4, 'aji@email.com', 'aji', '$2y$10$4aQQCiZT2PMYxHEA.tGc8Orm6bU/a3/17fhM7RgOMKC10SkTRANNS', 'C'),
(6, 'Empiw@email.com', 'mpiw', '$2y$10$VYeXqi/NIDb4xO2AiB0ymuVZlZkHX51ap9mYmsZzIPGw7HXlzTtnm', 'A'),
(8, 'setio@email.com', 'setiokicaw', '$2y$10$LU9GfnTxQOGY/wtDcPoOcOBMLHo2.vNZc3t3nc4eFamI89VJV6QSG', 'C'),
(9, 'bintang@email.com', 'bintang', '$2y$10$ExFSTlvIE1wzPYXYes6.vuu3qDv7MWCkvxVSudANV9dpkFHw3dUUi', 'C'),
(10, 'admin@email.com', 'admin', '$2y$10$SOYnlBFrb/cqeeQTKIjmse07LzWEJFQQad7g3oin2aP8wQmbyzMPC', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbarang`
--
ALTER TABLE `tblbarang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `tbljasa`
--
ALTER TABLE `tbljasa`
  ADD PRIMARY KEY (`idjasa`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD KEY `idjasa` (`idjasa`);

--
-- Indexes for table `tblpegawai`
--
ALTER TABLE `tblpegawai`
  ADD PRIMARY KEY (`idpegawai`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbarang`
--
ALTER TABLE `tblbarang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbljasa`
--
ALTER TABLE `tbljasa`
  MODIFY `idjasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblpegawai`
--
ALTER TABLE `tblpegawai`
  MODIFY `idpegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD CONSTRAINT `tblorder_ibfk_1` FOREIGN KEY (`idjasa`) REFERENCES `tbljasa` (`idjasa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
