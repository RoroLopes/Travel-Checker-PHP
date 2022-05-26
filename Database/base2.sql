-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2022 at 02:32 PM
-- Server version: 10.7.4-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Voyage`
--

CREATE TABLE `Voyage` (
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrival` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gate` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baggage_drop` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Voyage`
--

INSERT INTO `Voyage` (`type`, `number`, `departure`, `arrival`, `seat`, `gate`, `baggage_drop`) VALUES
('train', '78A', 'Madrid', 'Barcelona', '45B', '', ''),
('bus', 'airport', 'Barcelona', 'Gerona Airport', '', '', ''),
('car', 'null', 'Nice', 'Antibes', 'null', 'null', 'null'),
('plane', 'SK22', 'Stockholm', 'New York JFK', '7B', '22', ''),
('plane', 'SK455', 'Gerona Airport', 'Stockholm', '3A', '45B', '344');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Voyage`
--
ALTER TABLE `Voyage`
  ADD UNIQUE KEY `number` (`number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
