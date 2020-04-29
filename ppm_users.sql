-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2020 at 03:08 PM
-- Server version: 5.6.23-log
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m_soft20181_n0801179`
--

-- --------------------------------------------------------

--
-- Table structure for table `ppm_users`
--

CREATE TABLE `ppm_users` (
  `ppm_id` int(11) NOT NULL,
  `ppm_username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ppm_password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ppm_email` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ppm_users`
--

INSERT INTO `ppm_users` (`ppm_id`, `ppm_username`, `ppm_password`, `ppm_email`) VALUES
(1, 'police_admin', 'police_admin_password', 'police_admin_email@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ppm_users`
--
ALTER TABLE `ppm_users`
  ADD PRIMARY KEY (`ppm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ppm_users`
--
ALTER TABLE `ppm_users`
  MODIFY `ppm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
