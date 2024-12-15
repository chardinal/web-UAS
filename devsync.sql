-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 06:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devsync`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`email`, `password`, `nama`) VALUES
('FQKF@gmail.com', '02eed24081e3250a4f1c6efa2490163350746b90874a8a2a09321a49b5301302', 'deon'),
('ryan@gmail.com', '5090a56c78719e08107bb37aa776f30b25b842234afad59401ecd422ba63db75', 'ryan');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `package` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `features` text NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama`, `nik`, `email`, `telepon`, `alamat`, `package`, `tipe`, `features`, `pesan`, `created_at`) VALUES
(38, 'fatah', '123456', 'rrr444@gg.mm', '811111111', 'sby', 'standard', 'kesehatan', 'heack nasa', 'terhen', '2024-12-09 06:10:23'),
(40, 'kamu', '2147483555', 'aku@gmail.co', '30483444', 'ddd', 'standard', 'travelling', 'ddd', 'ddd', '2024-12-09 06:11:42'),
(42, 'kamu', '2147483646', 'aku@gmail.cog', '304834837', 'ddd', 'standard', 'travelling', 'ddd', 'ddd', '2024-12-09 06:12:38'),
(44, 'azmi anjay', '2301928382', 'angga.azmi@gmail.com', '1', 'jalan jaya', 'premium', 'sosial', 'ada', 'banyak', '2024-12-09 06:23:43'),
(45, 'sasdsa', '9999999999', 'aku@gmail.corr', '9999999999', 'ddd', 'advanced', 'kesehatan', '534', '54534', '2024-12-09 06:24:42'),
(46, 'rthf', '1234567898743', 'budaou@gmail.com', '765432432', 'vcx', 'advanced', 'e-commerce', 'dgv', 'fsdg', '2024-12-09 06:28:04'),
(47, 'bihadf', '965442', 'nias@gmaio', '85643', 'fjhaif', 'advanced', 'pendidikan', 'dhrteh', 'ewrgv', '2024-12-09 06:28:46'),
(48, 'tygefsd', '0', 'bba@gmail', '3456789876', 'dsfvdbf', 'standard', 'pendidikan', 'fsdghjkgf', 'eghrtjt', '2024-12-09 06:33:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD UNIQUE KEY `idx_email` (`email`),
  ADD UNIQUE KEY `idx_nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
