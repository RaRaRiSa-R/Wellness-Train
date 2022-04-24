-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 03:54 PM
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
-- Table structure for table `personalized`
--

CREATE TABLE `personalized` (
  `Sno` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personalized`
--

INSERT INTO `personalized` (`Sno`, `Name`, `Image`) VALUES
(1, 'Diabetes', 'diabetes.jpg'),
(2, 'Knee Pain', 'kneepain.jpg'),
(3, 'Weight loss', 'weightloss.jpg'),
(4, 'Fat Loss', 'fatloss.jpg'),
(5, 'Muscle Gain', 'musclegain1.jpg'),
(6, 'Mensturation', 'menstruation1.jpg'),
(7, 'Blood Pressure', 'bp.jpg'),
(8, 'Acidity', 'acid.jpg'),
(9, 'Eye Care', 'eyecare.jpg'),
(10, 'Ear Care', 'Ear-Care.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personalized`
--
ALTER TABLE `personalized`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personalized`
--
ALTER TABLE `personalized`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
