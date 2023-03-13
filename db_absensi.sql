-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Mar 2023 pada 08.55
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keterangan` enum('Hadir','Sakit','Izin','Tanpa_keterangan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nm_kelas` varchar(10) NOT NULL,
  `wali_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
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
(19, 'X ATPH', 'wali kelas 10 ATPH'),
(20, 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `jenis_kelamin`, `tanggal_lahir`) VALUES
(19, '5678', 'Adelia fitriani', 'Perempuan', '2023-02-03'),
(20, '4567', 'Annisa Nurlaely Arafah', 'Perempuan', '2005-01-20'),
(21, '3456', 'Zidan Khulus Sajid', 'Laki-laki', '2023-03-04'),
(23, '01243', 'Rizki Firmansyah', 'Laki-laki', '2023-03-03'),
(24, '3456', 'Dini Rahma Aprilianti', 'Laki-laki', '2023-03-10'),
(30, '45647', 'Dini Rahma Aprilianti', 'Perempuan', '2023-03-08'),
(31, '78689', 'Lukman nurhakim', 'Laki-laki', '2023-03-03'),
(32, '097976', 'Rizki Firmansyah', 'Laki-laki', '2023-03-09'),
(33, '67576', 'jggfd', 'Laki-laki', '2023-03-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `level` enum('Super_admin','Admin','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `id_kelas`, `level`) VALUES
(13, 'super_admin', 'superadmin', 20, 'Super_admin'),
(14, 'adminrpl1', 'adminrpl1', 1, 'Admin'),
(16, 'petugasrpl1', 'petugasrpl1', 1, 'Petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
