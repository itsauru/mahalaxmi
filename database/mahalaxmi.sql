-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2024 at 11:12 AM
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
-- Database: `mahalaxmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cat_id` text NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `image`, `status`, `added_date`, `modified_date`) VALUES
(6, '7', 'logo.png', 1, '2024-09-11 04:40:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `productcat`
--

CREATE TABLE `productcat` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productcat`
--

INSERT INTO `productcat` (`id`, `name`, `status`, `added_date`, `modified_date`) VALUES
(7, 'corian', 1, '2024-09-11 04:39:37', '0000-00-00 00:00:00'),
(8, 'wall hanging', 1, '2024-09-11 04:39:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `fb` text NOT NULL,
  `wp` text NOT NULL,
  `insta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `phone`, `email`, `address`, `fb`, `wp`, `insta`) VALUES
(1, 123, 'annant299@gmail.com', 'auru', '#', '#', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcat`
--
ALTER TABLE `productcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `productcat`
--
ALTER TABLE `productcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
