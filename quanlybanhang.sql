-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 04:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `congty`
--

CREATE TABLE `congty` (
  `id_ct` int(11) NOT NULL,
  `ten_congty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `congty`
--

INSERT INTO `congty` (`id_ct`, `ten_congty`) VALUES
(1, 'C1'),
(2, 'Công ty số 1'),
(4, 'công ty số 3'),
(5, 'Công ty số 10'),
(6, 'c2'),
(7, 'c3');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_dh` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL,
  `ten_donhang` varchar(100) NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id_dh`, `id_kh`, `id_tk`, `ten_donhang`, `ngay`) VALUES
(13, 6, 9, 't3', '2024-04-20'),
(15, 7, 9, 'Tao', '2024-04-13'),
(16, 6, 9, 't5', '2024-04-19'),
(17, 6, 9, 't6', '2024-04-20'),
(18, 6, 9, 't7', '2024-04-20'),
(19, 7, 9, 'Tao9', '2024-04-13'),
(20, 6, 9, 't67', '2024-04-19'),
(21, 6, 9, 't69', '2024-04-20'),
(22, 6, 9, 't72', '2024-04-20'),
(24, 6, 9, 't674', '2024-04-19'),
(25, 6, 9, 't694', '2024-04-20'),
(26, 6, 9, 't724', '2024-04-20'),
(27, 6, 9, 't2', '2024-04-20'),
(28, 6, 9, 't3', '2024-04-20'),
(29, 7, 9, 'Tao', '2024-04-13'),
(30, 6, 9, 't5', '2024-04-19'),
(31, 6, 9, 't6', '2024-04-20'),
(32, 6, 9, 't7', '2024-04-20'),
(33, 7, 9, 'Tao9', '2024-04-13'),
(34, 6, 9, 't67', '2024-04-19'),
(35, 6, 9, 't69', '2024-04-20'),
(36, 6, 9, 't72', '2024-04-20'),
(37, 6, 9, 't674', '2024-04-19'),
(38, 6, 9, 't694', '2024-04-20'),
(39, 6, 9, 't724', '2024-04-20'),
(40, 6, 9, 't2', '2024-04-20'),
(41, 6, 9, 't3', '2024-04-20'),
(42, 7, 9, 'Tao', '2024-04-13'),
(43, 6, 9, 't5', '2024-04-19'),
(44, 6, 9, 't6', '2024-04-20'),
(45, 6, 9, 't7', '2024-04-20'),
(46, 7, 9, 'Tao9', '2024-04-13'),
(47, 6, 9, 't67', '2024-04-19'),
(48, 6, 9, 't69', '2024-04-20'),
(49, 6, 9, 't72', '2024-04-20'),
(50, 6, 9, 't674', '2024-04-19'),
(51, 6, 9, 't694', '2024-04-20'),
(52, 6, 9, 't724', '2024-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `tuoi` int(100) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `id_ct` int(11) NOT NULL,
  `nghe_nghiep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `ten`, `tuoi`, `dia_chi`, `id_ct`, `nghe_nghiep`) VALUES
(6, 'update', 1, 't', 1, 't'),
(7, 'test304', 1, '1', 1, '1'),
(8, 't5', 1, '1', 1, '1'),
(9, 'test3043', 1, '1', 1, '1'),
(11, 'test3043', 1, '1', 2, '1'),
(13, 'test30435665', 1, '1', 2, '1'),
(14, 'update', 1, 't', 1, 't'),
(15, 'test304', 1, '1', 1, '1'),
(16, 'update', 1, 't', 1, 't'),
(17, 'test304', 1, '1', 1, '1'),
(18, 'update', 1, 't', 1, 't'),
(19, 'test304', 1, '1', 1, '1'),
(20, 'update', 1, 't', 1, 't'),
(21, 'test304', 1, '1', 1, '1'),
(22, 'update', 1, 't', 1, 't'),
(23, 'test304', 1, '1', 1, '1'),
(24, 'update', 1, 't', 1, 't'),
(27, 't', 1, '1', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id_pq` int(11) NOT NULL,
  `id_tk1` int(11) NOT NULL,
  `id_tk2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`id_pq`, `id_tk1`, `id_tk2`) VALUES
(1, 6, 7),
(10, 6, 1),
(12, 6, 2),
(14, 6, 5),
(22, 9, 11);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `username`, `password`, `ten`) VALUES
(1, 'test', '$2y$12$WOLBpFqzjdvW7lKbMmyyOespZoW5nnM/9ns1BwfZEGZiuxt51yzf2', 'test'),
(2, 'test2', '$2y$12$zyUxrTVQ9SYSZbeIndEXnuHgza51hWWDSF.z2.hqyCoH/X31gogYK', 'test'),
(3, 'test4', '$2y$12$YQxmr.yA3Tq2WmyyIHGOI.K8R8psAT43GQi32mZieyNjFFF/E9rL.', 't'),
(4, 'test6', '$2y$12$jxiovNW1pbLJMoYzR/cMturnKNCrwPMtGAvLlRmYVOdGvV/tBotL2', 't'),
(5, 'test9', '$2y$12$qE0X6w6vS.3VTd6DlPhYFe7fNOm/YiABbadADymfm3IdLlcYgewKu', 't'),
(6, 'test10', '$2y$12$X7AoAIW9xNn5X0WuaYGCm.UZRI3ratWdpYALUqbSF8DiZczZniakO', 't up'),
(7, 'test11', '$2y$12$/zqkJxXilie4Rl8phnC/MeAPbXh8ZEVrh4cTHB3CNRoREE0oWERx.', 't'),
(8, 'test15', '$2y$12$HLDxGhVjMH/GeH8EnGX.Cux7lTfBiXdllToEKkF2tpQjrGow4JFXa', 't'),
(9, 'test12', '$2y$12$QiKAeSUanKzWsvc5xzb6neSQXEXndHhVz84LFTkN2hsHLxjiRI/f.', 'up'),
(10, 'test14', '$2y$12$7ETafXsK8paR2pkGXXiVreQUOEMkQtbQ2qIQXRDwX0FCa7Wh.1Hn6', 't'),
(11, 'test16', '$2y$12$FpEAHTS42YmgBnU0fuxP3eNk65pf1cBspO4Dqw3PDNY.k4MvytT/O', 't'),
(12, 'test100', '$2y$12$uTR45P2Tw8p3fNfV6XkjIOT9SD6ZVZu.XZvEwi4VUiL9waGe0T1u6', 't');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`id_ct`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_dh`),
  ADD KEY `id_kh` (`id_kh`),
  ADD KEY `id_tk` (`id_tk`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`),
  ADD KEY `id_ct` (`id_ct`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id_pq`),
  ADD KEY `id_tk1` (`id_tk1`),
  ADD KEY `id_tk2` (`id_tk2`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `congty`
--
ALTER TABLE `congty`
  MODIFY `id_ct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id_pq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`id_tk`) REFERENCES `taikhoan` (`id_tk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`id_ct`) REFERENCES `congty` (`id_ct`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD CONSTRAINT `phanquyen_ibfk_1` FOREIGN KEY (`id_tk1`) REFERENCES `taikhoan` (`id_tk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phanquyen_ibfk_2` FOREIGN KEY (`id_tk2`) REFERENCES `taikhoan` (`id_tk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
