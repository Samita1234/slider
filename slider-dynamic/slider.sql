-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 12:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slider`
--

-- --------------------------------------------------------

--
-- Table structure for table `slider_tbl`
--

CREATE TABLE `slider_tbl` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider_tbl`
--

INSERT INTO `slider_tbl` (`id`, `path`, `image`, `title`) VALUES
(1, './assets/images/1.jpg', '', '1'),
(2, './assets/images/2.jpg', '', '2'),
(3, './assets/images/3.jpg', '', '3'),
(4, './assets/images/4.jpg', '', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
