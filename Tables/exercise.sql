-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 03:52 PM
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
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `sno` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`sno`, `Name`, `Description`, `Image`) VALUES
(1, 'Cardio', 'Cardiovascular exercise, also known as cardio or aerobic exercise, is essential for good health. It gets your heart rate up, making you blood pump faster. This delivers more oxygen throughout your body, which keeps your heart and lungs healthy.\r\n\r\nRegular cardio exercise can also help you lose weight, get better sleep, and reduce your risk for chronic disease.', 'cd.jpg'),
(2, 'Strength Training', 'Strength training or resistance training involves the performance of physical exercises that are designed to improve strength and endurance. It is often associated with the lifting of weights.', 'st.jpg'),
(3, 'Flexibility', 'A flexibility exercise is a movement or position designed to stretch specific muscles, with the goal of increasing flexibility and range of motion in that specific area. A flexibility exercise can be any kind of stretch, as long as it increases your range of motion and lengthens your muscles and joints.', 'flex.jpeg'),
(4, 'Balance & Coordination\r\n', 'Balance training involves doing exercises that strengthen the muscles that help keep you upright, including your legs and core. These kinds of exercises can improve stability and help prevent falls.\r\n\r\nCoordination is the ability to select the right muscle at the right time with proper intensity to achieve proper action. These movements are characterized by appropriate speed, distance, direction, timing and muscular tension.\r\n', 'bnc.jpg'),
(5, 'Mistakes not to do', 'If the form is incorrect, then it may lead to multiple disadvantages and long term consequences. It makes the workout less effective and can also lead to injuries. The form has to be kept in mind while doing all the exercises, make sure you have the correct form and position.', 'ms.jpg'),
(6, 'Extra info. on diff. exercises', 'If you have more knowledge and information, you are more likely to make better decisions. With right knowledge, you develop the ability to discern things. Here are some of the important information regarding exercises.', 'Einfo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
