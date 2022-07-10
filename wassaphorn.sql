-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2022 at 05:00 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wassaphorn`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf16le COLLATE utf16le_bin NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf16le COLLATE utf16le_bin NOT NULL,
  `email` varchar(20) CHARACTER SET utf16le COLLATE utf16le_bin NOT NULL,
  `address` text CHARACTER SET utf16le COLLATE utf16le_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le COLLATE=utf16le_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf16le_bin NOT NULL,
  `address` varchar(255) COLLATE utf16le_bin NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le COLLATE=utf16le_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf16le_bin NOT NULL,
  `password` varchar(15) COLLATE utf16le_bin NOT NULL,
  `firstname` varchar(50) COLLATE utf16le_bin NOT NULL,
  `lastname` varchar(50) COLLATE utf16le_bin NOT NULL,
  `email` varchar(20) COLLATE utf16le_bin NOT NULL,
  `address` text COLLATE utf16le_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le COLLATE=utf16le_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `address`) VALUES
(1, 'admin', '1234', 'wassaphorn.22@gmail.com', 'วรรษพร', 'ทิพย์ชูวงศ์', 'บนดาวโลก'),
(2, 'คุณไซนักกฎหมาย', '1234', 'ไซบีเรียน', 'ฮัซกิ', 'Saiberien.55@gmail.c', 'Doge house'),
(3, 'คุณนายแมวม่วง', '1234', 'ศรีนวล', 'ม่วงสุก', 'ladypurplecat.55@gma', 'cat house'),
(4, 'คุณฟรออ๊อกนักการเมือ', '1234', 'กบเขียว', 'เนรมิตสุข', 'greenfrog.55@gmail.c', 'โพรงชื้น'),
(5, 'นายกหมีใจดี', '1234', 'บราวนี่แบร์', 'บรังค์กิ้น', 'brownbear.55@gmail.c', 'ถ้ำหินอุ่น');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
