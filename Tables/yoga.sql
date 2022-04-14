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
-- Table structure for table `yoga`
--

CREATE TABLE `yoga` (
  `SNo` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yoga`
--

INSERT INTO `yoga` (`SNo`, `Name`, `Description`, `Image`) VALUES
(1, 'Facial Yoga', 'Face yoga involves massage and exercises that stimulate the muscles, skin, and lymphatic system. This technique is designed to soften and relax your face muscles to help alleviate tension, stress, and worry. \r\nPerforming these yogasans will keep your face looking toned and young, lifting areas that are sagging and drooping, and trimming years from your visage.', 'facialyoga2.jpg'),
(2, 'Yoga', 'Yoga is essentially a spiritual discipline based on an extremely subtle science, which focuses on bringing harmony between mind and body. It is an art and scince of healthy living. The word \'Yoga\' is derived from the Sanskrit root \'Yuj\', meaning \'to join\' or \'to yoke\' or \'to unite\'.', 'yoga5.jpg'),
(3, 'Yoga for Diseases', 'The regular practice of yoga can help prevent non-communicable diseases such as blood pressure, diabetes and cardiovascular illness, thereby reducing the need for curative medicine. Yoga also serves as a stalwart solution to keep chronic back pain, arthritis and other lifestyle diseases at bay.', 'yogaforD.jpg'),
(4, 'Yoga for Pain Relief', 'By building strength, releasing muscle tension, improving flexibility, and bolstering joints and bones, yoga can bring the body into balance, thereby alleviating pain. Also, the therapeutic benefits of yoga are not just physical.', 'YOGA FORPAIN.jpg'),
(5, 'Yoga based on Requirements', 'Yoga has been found to improve quality of life, reduce stress, anxiety, insomnia, depression and back pain. It has also been found to lower heart rate and blood pressure. And unsurprisingly, yoga has been shown to improve fitness, strength and flexibility, according to the alternative medicine center.', 'yoga2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yoga`
--
ALTER TABLE `yoga`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yoga`
--
ALTER TABLE `yoga`
  MODIFY `SNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
