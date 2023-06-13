-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2022 at 06:26 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-terminal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `id_info` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `waktu_kejadian` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id_info`, `judul`, `isi`, `waktu_kejadian`) VALUES
(1, 'Diberhentikan Rute Surabaya ke Jombang', 'bla bla bla', '2022-12-01 00:00:00'),
(2, 'Diberhentikan Rute Surabaya ke Mojokerto', 'ble ble ble bla', '2022-12-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `awal_terminal` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `waktu_sampai` datetime DEFAULT NULL,
  `id_knd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `awal_terminal`, `tujuan`, `waktu`, `waktu_sampai`, `id_knd`) VALUES
(1, 'Bungurasih', 'Sidoarjo', '2022-12-26 05:00:00', '2022-12-26 12:00:00', 2),
(2, 'Bungurasih', 'Mojokerto', '2022-12-26 22:00:00', '2022-12-27 14:00:00', 1),
(9, 'Bungurasih', 'Surabaya Ampel', '2022-12-26 22:00:00', '2022-12-27 12:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kondektur`
--

CREATE TABLE `tbl_kondektur` (
  `id_knd` int(11) NOT NULL,
  `nama_kondektur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kondektur`
--

INSERT INTO `tbl_kondektur` (`id_knd`, `nama_kondektur`) VALUES
(1, 'Ikhya Ulummudin'),
(2, 'Dimas Syahputra'),
(3, 'Dini Syahputri');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kupon`
--

CREATE TABLE `tbl_kupon` (
  `id_kupon` int(11) NOT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `kd_kupon` varchar(255) DEFAULT NULL,
  `tgl_dibuat` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kupon`
--

INSERT INTO `tbl_kupon` (`id_kupon`, `id_jadwal`, `kd_kupon`, `tgl_dibuat`, `id_user`) VALUES
(2, 1, 'KDK01', '12/12/2002', 29);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(25) DEFAULT NULL,
  `foto_user` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `password`, `level`, `foto_user`) VALUES
(27, 'admin', 'admin@gmail.com', '$2y$10$ViQfvhFIsYiu2KZu8QPxvO7w8Cu2woK.WuFqppqQ.L0pxnWgLKKVm', '1', NULL),
(28, 'knd1', 'dini@gmail.com', '$2y$10$7R69d5WRKwZPCIvHTcaQTuhG3E9c8N5Q9tMXaWMuM20x/V9rEKNjC', '2', NULL),
(29, 'penumpang', 'penumpang@gmail.com', '$2y$10$LpS4dFXlRHUfIJg4hjRQ2.h0kgab4MGbAaRzF1wJAMefzqIcW1w0O', '3', NULL),
(32, 'knd3', 'ikhya@gmail.com', '$2y$10$mEbTHiRgiB4z2GbsiCrlaOYdG0BgTo/ND0OvyvfYT//ma5hwBqvQG', '2', NULL),
(33, 'knd4', 'knd4@gmail.com', '$2y$10$2TxkWeq9MmmlDBLgm/jjV.RPbxUXyPyCt67zymiK3/WsUQlPaYxbq', '2', NULL),
(34, 'Admin2', 'admin2@gmail.com', '$2y$10$05JzFUF9qDHDe/71UpeJsOx4YCYZJYgoSOY6OsKlyqQGPHDsTo2d2', '1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_kondektur`
--
ALTER TABLE `tbl_kondektur`
  ADD PRIMARY KEY (`id_knd`);

--
-- Indexes for table `tbl_kupon`
--
ALTER TABLE `tbl_kupon`
  ADD PRIMARY KEY (`id_kupon`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_kondektur`
--
ALTER TABLE `tbl_kondektur`
  MODIFY `id_knd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_kupon`
--
ALTER TABLE `tbl_kupon`
  MODIFY `id_kupon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
