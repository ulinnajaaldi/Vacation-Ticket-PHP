-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 06:29 PM
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
-- Database: `tiket_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_wisatawan`
--

CREATE TABLE `data_wisatawan` (
  `id_wisatawan` int(11) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `no_identitas` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tempat_wisata` varchar(20) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `pengunjung_dewasa` int(10) NOT NULL,
  `pengunjung_anak` int(10) NOT NULL,
  `harga_tiket` int(20) DEFAULT NULL,
  `total_harga` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_wisatawan`
--

INSERT INTO `data_wisatawan` (`id_wisatawan`, `nama_lengkap`, `no_identitas`, `no_hp`, `tempat_wisata`, `tgl_kunjungan`, `pengunjung_dewasa`, `pengunjung_anak`, `harga_tiket`, `total_harga`) VALUES
(1, 'Ulinnaja', 'L200200090', '+6232480xxx', 'Danau Beratan Bedugu', '2022-10-22', 2, 1, 50000, 125000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_wisatawan`
--
ALTER TABLE `data_wisatawan`
  ADD PRIMARY KEY (`id_wisatawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_wisatawan`
--
ALTER TABLE `data_wisatawan`
  MODIFY `id_wisatawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
