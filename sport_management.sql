-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 08:46 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(42) DEFAULT NULL,
  `gender` text NOT NULL,
  `dateofbirth` datetime NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`, `dateofbirth`, `country`) VALUES
(1, 'ad', 'min', 'admin@gmail.com', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', '', '2022-03-15 08:23:00', 'Vietnam'),
(2, 'Quang', 'Bao', 'quangbao@gmail.com', '$2y$10$ylqRl4eT6uwj5dpnshEmYugGDNNSZd5j5fB', 'male', '2022-03-15 08:27:53', 'Vietnam'),
(4, 'Bao', 'Khoi', 'baokhoi@gmail.com', '$2y$10$9Qxf4Tpnq4cZkZnkLebl..tlvq.K2b8xQVt', 'Female', '2022-03-15 08:30:23', 'Vietnam'),
(5, 'Anh', 'Hao', 'anhhao@gmail.com', 'anhhao', 'Male', '2022-03-15 08:33:33', 'Vietnam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
