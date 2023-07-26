-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 28, 2023 at 11:46 AM
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
-- Database: `auditoriumbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfo`
--

CREATE TABLE `bookinginfo` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` char(10) NOT NULL,
  `auditorium` varchar(40) NOT NULL,
  `booking_type` varchar(30) NOT NULL,
  `booking_purpose` varchar(30) NOT NULL,
  `datepicker` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookinginfo`
--

INSERT INTO `bookinginfo` (`id`, `fname`, `email`, `mobile`, `auditorium`, `booking_type`, `booking_purpose`, `datepicker`) VALUES
(1, 'M ARUNA', 'arunagundra@gmail.com', '9989123696', 'Ambedkar Auditorium', 'MORNING', 'Reunion', '06/29/2023'),
(2, 'Mulkalla Pavan', 'pavanmulkalla222@gmail.com', '7780567306', 'School of Life Sciences Auditorium', 'FULL DAY', 'Academic Conference', '06/29/2023'),
(3, 'Praveen', 'praveen@gmail.com', '9000399983', 'School of Humanities Auditorium', 'FULL DAY', 'Seminar', '06/30/2023'),
(4, 'Naveen', 'naveenmulkalla5254@gmail.com', '7075663121', 'Savithri Bhai Phule Auditorium', 'AFTERNOON', 'Talk', '07/03/2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
