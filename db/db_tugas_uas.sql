-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2023 at 03:30 AM
-- Server version: 8.0.30
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tugas_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `name`) VALUES
(1, 'Admin'),
(2, 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `status`) VALUES
(1, 'Aktif'),
(2, 'Nonaktif'),
(3, 'Register');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  `id_status` int NOT NULL,
  `id_role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `email`, `pass`, `id_status`, `id_role`) VALUES
(1, 'SUPER saiya', 'SUPER saiya', 'super@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1),
(2, 'ADMIN', 'ADMIN', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `id_wisata` int NOT NULL,
  `id_kategori` int NOT NULL,
  `nm_wisata` varchar(50) NOT NULL,
  `lokasi` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_wisata`
--

INSERT INTO `tbl_wisata` (`id_wisata`, `id_kategori`, `nm_wisata`, `lokasi`, `deskripsi`) VALUES
(1, 2, 'www', 'Kota Mungkid', 'Terlaksananya pengumpulan kebutuhan informasi'),
(2, 3, 'qwqw', 'gergergre', 'Terlaksananya pengembangan Program Aplikasi Sistem Informasi'),
(3, 2, 'qweqwq', 'ewqewqewq', 'ewqewqewewqewqewqewqewq');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wisata_kategori`
--

CREATE TABLE `tbl_wisata_kategori` (
  `id_kategori` int NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_wisata_kategori`
--

INSERT INTO `tbl_wisata_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Umum'),
(2, 'Alam'),
(3, 'Religi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_wisata_kategori`
--
ALTER TABLE `tbl_wisata_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `id_wisata` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_wisata_kategori`
--
ALTER TABLE `tbl_wisata_kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
