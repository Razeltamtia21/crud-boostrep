-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2024 at 08:35 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `class` varchar(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `class`, `department`, `date_time`) VALUES
(1, 'Lelouch Lamperouge', '11', 'Rekayasan Perangkat Lunak', '2024-11-05 02:32:01'),
(2, 'razel', '11', 'Rekayasan Perangkat Lunak', '2024-11-05 02:34:38'),
(3, 'Lelouch Lamperouge', '45', 'Rekayasan Perangkat Lunak', '2024-11-05 02:35:53'),
(4, 'razel', '13', 'Desain Komunikasi Visual', '2024-11-05 02:38:43'),
(5, 'FantasyPlays', '13', 'Teknik Jaringan Komputer', '2024-11-05 02:39:19'),
(6, 'lelouch', '12', 'Desain Komunikasi Visual', '2024-11-05 02:41:08'),
(7, 'Razeltamtia', '13', 'Desain Komunikasi Visual', '2024-11-05 02:41:18'),
(8, 'Lelouch Lamperouge', '14', 'Teknik Jaringan Komputer', '2024-11-05 02:43:06'),
(9, 'razel', '12', 'Teknik Jaringan Komputer', '2024-11-05 02:44:32'),
(10, 'Lelouch Lamperouge', '12', 'Rekayasan Perangkat Lunak', '2024-11-05 03:17:58'),
(11, 'Razeltamtia', '11', 'Teknik Jaringan Komputer', '2024-11-05 03:19:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
