-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 03:15 AM
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
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pendidikan_terakhir` enum('SD','SMP','SMA') NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `masa_kerja` int(4) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `nama`, `ttl`, `alamat`, `no_hp`, `pendidikan_terakhir`, `lokasi`, `masa_kerja`, `foto`) VALUES
('1', 'Mochammad Faruq Syaifullah', 'Gresik, 27 juli 2002', 'Jl. Raya Sumurber', '0858-1279-9210', 'SMP', 'Gresik', 2003, 'foto faruq.jpg'),
('2', 'Mochammad Faruq Syaifullah', 'Gresik, 27 juli 2002', 'Jl. Raya Sumurber', '0858-1279-9210', 'SMA', 'Gresik', 2003, 'foto background merah.jpg'),
('3', 'Mochammad Faruq Syaifullah', 'Gresik, 27 juli 2002', 'Jl. Raya Sumurber', '0858-1279-9210', 'SD', 'Gresik', 2003, 'WhatsApp Image 2020-08-26 at 07.34.50.jpeg'),
('4', 'Mochammad Faruq Syaifullah', 'Gresik, 27 juli 2002', 'Jl. Raya Sumurber', '0858-1279-9210', 'SMA', 'Gresik', 2003, 'poltek.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Sekretaris') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'aku', 'aku', 'aku', 'Administrator'),
(2, 'JA', 'JA', 'JA', 'Sekretaris'),
(3, 'Faruq', 'admin', 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_profil` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `bidang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_profil`, `alamat`, `bidang`) VALUES
(1, 'DINAS PERHUBUNGAN KABUPATEN MADIUN', 'Jl Panglima Sudirman No.50, Kronggahan, Kec. Mejayan, Kab. Madiun, Jawa Timur 63153', 'Dinas Perhubungan Kabupaten Madiun memiliki moto Meningkatkan Sarana Prasarana Perlengkapan Jalan yang Berkeselatan. Dinas Perhubungan Kabupaten Madiun dipimpin oleh Bapak SUPRIYADI AP, M.Si.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
