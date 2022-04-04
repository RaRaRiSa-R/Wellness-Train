-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 10:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itsabtu`
--

-- --------------------------------------------------------

--
-- Table structure for table `yoga`
--

CREATE TABLE `yoga` (
  `SNo.` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yoga`
--

INSERT INTO `yoga` (`SNo.`, `Name`, `Description`, `Image`) VALUES
(1, 'Facial Yoga', '', 'facialyoga2.jpg'),
(2, 'Yog Asanas', '', 'yoga5.jpg'),
(3, 'Yoga for Diseases', '', 'yogaforD.jpg'),
(4, 'Yoga for Pain Relief', '', 'YOGA FORPAIN.jpg'),
(5, 'Yoga based on Requirements', '', 'yoga2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yoga`
--
ALTER TABLE `yoga`
  ADD PRIMARY KEY (`SNo.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yoga`
--
ALTER TABLE `yoga`
  MODIFY `SNo.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
