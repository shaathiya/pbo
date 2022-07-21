-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 04:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_demi`
--

CREATE TABLE `tbl_demi` (
  `id_demi` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `domisili` varchar(50) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `bidang` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telepon` int(18) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_demi`
--

INSERT INTO `tbl_demi` (`id_demi`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `domisili`, `pekerjaan`, `bidang`, `email`, `telepon`, `foto`) VALUES
(1, 'Hazar Aswat', 'L', 'Sambas , Pemangkat', '2000-09-07', 'Sambas', 'Wirausaha', 'Ketua Umum', 'aswat@gmail.com', 834627845, ''),
(3, 'tya', 'P', 'singawang', '2022-07-06', 'sambas', 'tak tahu', 'media ', 'tya@gmail.com', 892637485, 'hazar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_login`, `username`, `password`, `nama_pengguna`, `telepon`, `email`, `alamat`) VALUES
(8, 'rina', '3aea9516d222934e35dd30f142fda18c', 'rinaa', '08763442577', 'rina@gmail.com', 'sambas'),
(9, 'nurul', '202cb962ac59075b964b07152d234b70', 'nurul', '09876354678', 'nurul@gmail.com', 'singkawang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_demi`
--
ALTER TABLE `tbl_demi`
  ADD PRIMARY KEY (`id_demi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_demi`
--
ALTER TABLE `tbl_demi`
  MODIFY `id_demi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
