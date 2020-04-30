-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 06:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppm_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `communities_tbl`
--

CREATE TABLE `communities_tbl` (
  `id` int(11) NOT NULL,
  `communication_channel` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `location_name` varchar(255) DEFAULT NULL,
  `current_engagement` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `community_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `communities_tbl`
--

INSERT INTO `communities_tbl` (`id`, `communication_channel`, `contact_phone`, `contact_email`, `contact_name`, `location_name`, `current_engagement`, `details`, `comments`, `community_name`) VALUES
(1, 'Phone Number Preferred', '07459320560', 'Test@test.co.uk', 'Matthew', 'NTU', 'once a weeek', 'greggs has closed', 'he needs immediate medical attention', NULL),
(2, 'Email address', '02650560503', 'Test_test@testing.co.uk', 'Database', 'NTU', '7 time a week', 'Please send help', 'i have no idea what i am doing', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events_tbl`
--

CREATE TABLE `events_tbl` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `location_name` varchar(255) DEFAULT NULL,
  `officers` varchar(255) DEFAULT NULL,
  `begin_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `community_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events_tbl`
--

INSERT INTO `events_tbl` (`id`, `event_name`, `location_name`, `officers`, `begin_date`, `end_date`, `start_time`, `details`, `comments`, `community_id`) VALUES
(2, 'Holiday', 'Police Station', 'Matthew, Billy', '2020-04-20', '0000-00-00', '05:00:00', 'added to database', 'Your screwed', NULL),
(60, 'Holiday', 'Police Station', 'Matthew, Billy', '2020-04-08', '2020-04-23', '05:00:00', 'added to database', 'it was the $sign', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `communities_tbl`
--
ALTER TABLE `communities_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_tbl`
--
ALTER TABLE `events_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `community_id` (`community_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events_tbl`
--
ALTER TABLE `events_tbl`
  ADD CONSTRAINT `events_tbl_ibfk_1` FOREIGN KEY (`community_id`) REFERENCES `communities_tbl` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
