-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 10:18 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smanage`
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
  `dateofbirth` date DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`, `dateofbirth`, `country`, `role`) VALUES
(2, 'Quang', 'Bao', 'quangbao@gmail.com', '$2y$10$ylqRl4eT6uwj5dpnshEmYugGDNNSZd5j5fB', 'male', '2022-03-15', 'Vietnam', 1),
(4, 'Bao', 'Khoi', 'baokhoi@gmail.com', '$2y$10$9Qxf4Tpnq4cZkZnkLebl..tlvq.K2b8xQVt', 'Female', '2022-03-15', 'Vietnam', 1),
(5, 'Anh', 'Hao', 'anhhao@gmail.com', '3ea01b7e03a367fd8731f6718907f873', 'Male', '2022-03-15', 'Vietnam', 1),
(6, 'bao', 'huynh', 'habo592000@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male', '2022-03-01', 'VN', 1),
(8, 'A', 'Nguyen Van', 'admin1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2021-09-15', 'US', 1),
(9, 'Admin1', 'Server', 'admin1@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male', '2000-10-23', 'France', 3),
(10, 'Admin2', 'Server', 'admin2@gmail.com', '202cb962ac59075b964b07152d234b70', 'Female', '1996-08-18', 'Japan', 3),
(11, 'Admin3', 'server', 'admin3@gmail.com', '202cb962ac59075b964b07152d234b70', 'Other', '1992-08-16', 'America', 3),
(13, 'Hao', 'Nguyen Dinh', 'Hao@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Male', '1998-07-17', 'VN', 1),
(14, 'Bao', 'Huynh Quang', 'hbao592000@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Male', '2000-09-05', 'VN', 1),
(20, 'Khoi', 'Nguyen Huu', 'khoi@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Male', '2000-07-07', 'VN', 2),
(21, 'Group8', 'SManage', 'group8@itec.hcmus.edu.vn', '25d55ad283aa400af464c76d713c07ad', 'Other', '2000-08-08', 'VN', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
