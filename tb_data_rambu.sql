-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 04:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_jukir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_rambu`
--

CREATE TABLE `tb_data_rambu` (
  `no` varchar(50) NOT NULL,
  `tempat_rambu` varchar(50) NOT NULL,
  `kategori_rambu` varchar(30) NOT NULL,
  `nama_rambu` varchar(30) NOT NULL,
  `titik_lokasi` varchar(30) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data_rambu`
--

INSERT INTO `tb_data_rambu` (`no`, `tempat_rambu`, `kategori_rambu`, `nama_rambu`, `titik_lokasi`, `foto`) VALUES
('1', 'Madiun', 'Warning', 'Rambu Hazard', '-7,7499, 111,51643', 'foto faruq.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data_rambu`
--
ALTER TABLE `tb_data_rambu`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
