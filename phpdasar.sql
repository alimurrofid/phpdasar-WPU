-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 12:44 AM
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
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nrp` char(9) DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `jurusan` varchar(64) DEFAULT NULL,
  `gambar` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(1, '214172001', 'rofid', 'rofid@gmail.com', 'Sastra Mesin', '643965801c0ac.png'),
(2, '214172002', 'dody', 'dody@gmail.com', 'Teknik Mesin', 'user2.png'),
(3, '214172003', 'rina', 'rina@gmail.com', 'Administrasi', 'user3.png'),
(4, '214172004', 'dini', 'dini@gmail.com', 'Sastra Indonesia', 'user4.png'),
(5, '214172005', 'riski', 'riski@gmail.com', 'Teknik Mesin', 'user5.png'),
(6, '214172006', 'zaky', 'zaky@gmail.com', 'Sastra Mesin', 'user6.png'),
(7, '214172007', 'sindi', 'sindi@gmail.com', 'Peternakan', 'user7.png'),
(8, '214172008', 'risma', 'risma@gmail.com', 'Ilmu Komunikasi', 'user8.png'),
(9, '214172009', 'rani', 'rani@gmail.com', 'Teknik Elektro', 'user9.png'),
(10, '214172010', 'dany', 'dany@gmail.com', 'Akuntansi', 'user10.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'rofid', '$2y$10$5LcJLOiQQ9p76HOHa2WwVuM/iG8cvjcBjEq1Xc0TrqNqb.Fjqrz7O'),
(3, 'admin', '$2y$10$iJQiKVCWojEb4O6.ayNIce3dhAO.EfpzVkeK2ML/nHOvFSFXlriV2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
