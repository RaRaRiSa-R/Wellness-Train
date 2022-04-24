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
-- Table structure for table `exercise_playlist`
--

CREATE TABLE `exercise_playlist` (
  `sno` int(10) NOT NULL,
  `Language` int(4) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `scid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exercise_playlist`
--

INSERT INTO `exercise_playlist` (`sno`, `Language`, `Name`, `Link`, `scid`) VALUES
(1, 1, '15 MIN BEGINNER CARDIO Workout (At Home No Equipment)', 'https://www.youtube.com/watch?v=VWj8ZxCxrYk', 1),
(2, 1, '30-Minute HIIT Cardio Workout - No Equipment at Home', 'https://www.youtube.com/watch?v=ml6cT4AZdqI', 1),
(3, 1, '30 Minute HIIT Cardio Workout + Abs At Home - With Warmup', 'https://www.youtube.com/watch?v=bdCX8Nb_2Mg', 1),
(4, 0, 'Cardio Exercises to lose weight at Home', 'https://www.youtube.com/watch?v=xp4icUUVwxw', 1),
(5, 0, 'Mistakes of Cardio', 'https://www.youtube.com/watch?v=ehuF1gAsZXA', 5),
(6, 0, 'How much Cardio Daily For FAT LOSS', 'https://www.youtube.com/watch?v=CneA519qBKY', 1),
(7, 0, 'Home Cardio Workout For Fat loss and Weight Loss', 'https://www.youtube.com/watch?v=vyXkrnb8_5s', 1),
(8, 1, '17 Min Strength Training Workout for Beginners', 'https://www.youtube.com/watch?v=WIHy-ZnSndA', 2),
(9, 1, '20 Minute Full Body Strength Workout', 'https://www.youtube.com/watch?v=Q2cMMnUuKYQ', 2),
(10, 0, 'SQUATS- 7 Mistakes | Deep Info', 'https://www.youtube.com/watch?v=INNtN1cMG9A', 5),
(11, 0, 'LAT PULL DOWN- 5 Mistakes STOP Now', 'https://www.youtube.com/watch?v=MDg0xyAJnIc', 5),
(12, 0, 'PULL UPS लगाते हुए सावधान रहे इन 5 गलतियों से !', 'https://www.youtube.com/watch?v=xceMZw0eeOc', 5),
(13, 0, 'Push Ups Mistakes', 'https://www.youtube.com/watch?v=SOyAVe-cUzA', 5),
(14, 1, 'The Perfect Push Up ', 'https://www.youtube.com/watch?v=IODxDxX7oi4', 2),
(15, 1, '3 Things You Didn\'t Know About Pull Ups', 'https://www.youtube.com/watch?v=IaeS1qoa-QA', 6),
(16, 0, 'SWEATING makes you lose more fat?', 'https://www.youtube.com/watch?v=Oc6p8pUEGoc', 6),
(17, 2, '6 easy strength training exercises', 'https://www.youtube.com/watch?v=H1F-UfC8Mb8', 2),
(18, 1, '10 Basic Strength Exercises', 'https://www.youtube.com/watch?v=McHfvcJ7KsA', 2),
(19, 1, 'Do These 6 Exercises to Increase Your Mobility & Flexibility', 'https://www.youtube.com/watch?v=4zBnM_uozXM', 3),
(20, 1, 'The 10 Most Important Mobility & Flexibility Exercises', 'https://www.youtube.com/watch?v=sYrIMdOBHkg', 3),
(21, 1, 'The BEST Mobility Exercises For Each Joint!', 'https://www.youtube.com/watch?v=Ru1hYrwCZJo', 3),
(22, 0, 'Flexibility Exercises | Stretching Exercises', 'https://www.youtube.com/watch?v=HdKYvxScfSs', 3),
(23, 1, '5 Minute STRETCH/WARM-UP before ANY EXERCISE', 'https://www.youtube.com/watch?v=vWiu6ayDo2A', 6),
(24, 0, 'Shareer ka Santulan', 'https://www.youtube.com/watch?v=PQF07D1QnhE', 4),
(25, 1, 'Balance & Coordination Exercises', 'https://www.youtube.com/watch?v=HNbjptrn3-A', 4),
(26, 1, '6 Coordination Exercises for Athletes', 'https://www.youtube.com/watch?v=JGX2E0_bOoY', 4),
(27, 1, 'Balance Training Exercises', 'https://www.youtube.com/watch?v=AWuKEt96Jjs', 4),
(28, 1, '5 Crucial Before & After Run Stretches ', 'https://www.youtube.com/watch?v=qq1kGDd4Q60', 6),
(29, 1, 'Essential Running Technique Tips for Proper Form & How to Run Faster', 'https://www.youtube.com/watch?v=3RlvKMxPMr0', 6),
(30, 0, '5 Worst Mistakes you Do for FAT LOSS', 'https://www.youtube.com/watch?v=wyUENWlkDgg', 5),
(31, 0, '5 BIGGEST MISTAKES You Do Before WORKOUT ', 'https://www.youtube.com/watch?v=xyII5bgYkD4', 5),
(32, 0, 'BIGGEST MISTAKES while doing PLANKS', 'https://www.youtube.com/watch?v=h7xQGFosNOw', 5),
(33, 1, 'Do The Perfect Dip', 'https://www.youtube.com/watch?v=2z8JmcrW-As', 5),
(34, 1, 'Balance Exercises for Seniors', 'https://www.youtube.com/watch?v=z-tUHuNPStw', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercise_playlist`
--
ALTER TABLE `exercise_playlist`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercise_playlist`
--
ALTER TABLE `exercise_playlist`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
