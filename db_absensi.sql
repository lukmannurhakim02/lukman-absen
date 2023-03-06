-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 08:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keterangan` enum('Hadir','Sakit','Izin','Tanpa_keterangan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `nama`, `tanggal`, `keterangan`) VALUES
(24, 'Lukman nurhakim', '2023-03-06 07:01:38', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nm_kelas` varchar(10) NOT NULL,
  `wali_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nm_kelas`, `wali_kelas`) VALUES
(1, 'XII RPL 1', 'wali kelas 12 RPL 1'),
(2, 'XII RPL 2', 'wali kelas 12 RPL2'),
(3, 'XII RPL 3', 'wali kelas 12 RPL3'),
(4, 'XII TBSM', 'wali kelas 12 TBSM'),
(5, 'XII ATPH', 'wali kelas 12 ATPH'),
(6, 'XI RPL 1', 'wali kelas 11 rpl1'),
(7, 'XI RPL 2', 'wali kelas 11 rpl2'),
(8, 'XI RPL 3', 'wali kelas 11 rpl3'),
(9, 'XI RPL 4', 'wali kelas 11 rpl4'),
(10, 'XI TBSM 1', 'wali kelas 11 TBSM1'),
(11, 'XI TBSM 2', 'wali kelas 11 TBSM2'),
(12, 'XI ATPH', 'wali kelas 11 ATPH'),
(13, 'X RPL 1', 'wali kelas 10 rpl1'),
(14, 'X RPL 2', 'wali kelas 10 rpl2'),
(15, 'X RPL 3', 'wali kelas 10 rpl3'),
(16, 'X RPL 4', 'wali kelas 10 rpl4'),
(17, 'X TBSM 1', 'wali kelas 10 TBSM1'),
(18, 'X TBSM 2', 'wali kelas 10 TBSM2'),
(19, 'X ATPH', 'wali kelas 10 ATPH');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `jenis_kelamin`, `tanggal_lahir`) VALUES
(17, '2345', 'Lukman nurhakim', 'Laki-laki', '2023-02-23'),
(18, '8901', 'M Ikbal Firdaus', 'Laki-laki', '2023-02-06'),
(19, '5678', 'Adelia fitriani', 'Perempuan', '2023-02-03'),
(20, '4567', 'Annisa Nurlaely Arafah', 'Perempuan', '2005-01-20'),
(21, '3456', 'Zidan Khulus Sajid', 'Laki-laki', '2023-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `level` enum('Admin','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `id_kelas`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Admin'),
(2, 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 1, 'Petugas'),
(3, 'adminrpl3', '32cacb2f994f6b42183a1300d9a3e8d6', 3, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
