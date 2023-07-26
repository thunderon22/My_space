-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 28, 2023 at 11:52 AM
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
-- Table structure for table `addvenue`
--

CREATE TABLE `addvenue` (
  `id` int(6) UNSIGNED NOT NULL,
  `Auditoriumname` varchar(40) NOT NULL,
  `capacity` int(10) NOT NULL,
  `booking_type` varchar(30) NOT NULL,
  `addrress` varchar(150) NOT NULL,
  `booking_purpose` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addvenue`
--

INSERT INTO `addvenue` (`id`, `Auditoriumname`, `capacity`, `booking_type`, `addrress`, `booking_purpose`) VALUES
(1, 'Ambedkar Auditorium', 200, 'FULL DAY', 'Opposite to Student canteen, LHC1', 'Reunion, Events, Talks'),
(2, 'School of Life Sciences Auditorium', 3000, 'FULL DAY', 'South Campus, Near CIS, University of Hyderabad', 'Webinars, Academic conferences'),
(3, 'Savitri Bhai Phule Auditorium', 5000, 'FULL DAY', 'North Campus, Opposite to School of Social Sciences, besides Reading room and Library', 'Seminar, talk, reunion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addvenue`
--
ALTER TABLE `addvenue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addvenue`
--
ALTER TABLE `addvenue`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
