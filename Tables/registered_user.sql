-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 03:30 PM
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
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `sno` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `VerificationCode` varchar(255) NOT NULL,
  `isVerified` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`sno`, `email`, `password`, `VerificationCode`, `isVerified`) VALUES
(2, 'btbti19121_ratnapriya@banasthali.in', '$2y$10$Nhbedos7DdO4Ur8Pey1DH.TzE3dix2.RiuDj7.K4Gtba/ITtFyPru', 'dbd276cd48858f8ecf0fe7af461aadf7', 1),
(3, 'sakshig077@gmail.com', '$2y$10$Cgva6A9IylBC6CyBkh59mO//7l7qwkUFP5P3kT9bYcZ4PYN8lILNm', '1b1f729bc9de2641356827b155f82d6d', 0),
(6, 'ratna.priya2091@gmail.com', '$2y$10$p7275YO2fnOvR3jdU9s7fedRcIjLAhsBAuZ2tZqQVfPFBzIwpKTmi', '290995be603edd92c328c5611eb996da', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
