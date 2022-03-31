-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 01:50 PM
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
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `VerificationCode` varchar(255) NOT NULL,
  `isVerified` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`email`, `password`, `VerificationCode`, `isVerified`) VALUES
('ratna.priya2091@gmail.com', '$2y$10$SuhF0Bzft1.SyoJFLdO4aewgASwaX9Nwccgac5AuMBw8x87dpuOua', '75c92306e6f9a6df732e1efe3437be79', 0),
('ratnapriya.1913411@gmail.com', '$2y$10$853VIW1cjQzCuPkaZ2uVqujCYqfQKMbCRBs8iDazRf8ITHC/6vu7e', 'd9b4040c754dcb03f5489229c59e05ac', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
