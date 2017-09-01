-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2017 at 06:59 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(10) NOT NULL,
  `guestname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `browserinfo` varchar(200) NOT NULL,
  `platform` varchar(200) NOT NULL,
  `ipaddress` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `guestname`, `address`, `email`, `message`, `browserinfo`, `platform`, `ipaddress`, `created_at`, `updated_at`) VALUES
(1, 'peter', '111 Cook st', 'peter@example.com', 'I am a good man.', 'IE 8.0', 'windows 10', '127.0.0.1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'marcia', '112 Cook st', 'marcia@example.com', 'I am a good man.', 'IE 8.0', 'windows 10', '127.0.0.1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'cindy', '211 Cook st', 'cindy@example.com', 'I am a good man.', 'IE 8.0', 'windows 10', '127.0.0.1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'mike', '411 Cook st', 'mike@example.com', 'I am a good man.', 'IE 8.0', 'windows 10', '127.0.0.1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
