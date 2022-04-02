-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 03:26 PM
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
-- Table structure for table `yogasd`
--

CREATE TABLE `yogasd` (
  `SNo.` int(10) NOT NULL,
  `Language` int(4) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `scid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yogasd`
--

INSERT INTO `yogasd` (`SNo.`, `Language`, `Name`, `Description`, `link`, `scid`) VALUES
(1, 1, 'Facial Yoga for Acne, Scars &  Pigmentation', '', 'https://youtu.be/VQkAT9Nc_vM', 1),
(2, 1, 'Face Yoga to Reduce Facial Fat', '', 'https://www.youtube.com/watch?v=hqfkApYMsac&t=5s', 1),
(3, 0, 'Facial Yoga to get rid of Double Chin', '', 'https://www.youtube.com/watch?v=1dYnGQMlmbs&list=WL&index=127', 1),
(4, 0, 'How to Get Rid of Dark Circles', '', 'https://www.youtube.com/watch?v=R_uK_1rkAKU&list=WL&index=130', 1),
(5, 1, 'Face Yoga for Skin Tightening', '', 'https://www.youtube.com/watch?v=t0mT6dkAHo8', 1),
(6, 1, 'Daily Yoga for FACE', '', 'https://www.youtube.com/watch?v=uwvcSPLV8iU', 1),
(7, 0, 'Facial Yoga to Get a Perfect Jaw Line ', '', 'https://www.youtube.com/watch?v=e7vBiJTci7w ', 1),
(8, 0, 'Face Yoga for Sharp Looking Nose ', '', 'https://www.youtube.com/watch?v=dNWkQX9fz94', 1),
(9, 0, 'Bedtime Yoga for Glowing Skin', '', 'https://www.youtube.com/watch?v=SkdN7bWml8s', 1),
(10, 1, 'Yoga Asanas for Wrinkle Free Glowing Skin', '', 'https://www.youtube.com/watch?v=5g5FfNCD-6I', 1),
(11, 1, '5 Best Yoga Asanas To Treat Ovarian Cysts', '', 'https://www.youtube.com/watch?v=Mam_okDRRB4&list=WL&index=122', 3),
(12, 1, 'Acidity - Quick Relief Yoga Poses', '', 'https://www.youtube.com/watch?v=rSwxM0VeEQY', 3),
(13, 1, ' Yoga Asanas To Flush Out Kidney Stones', '', 'https://www.youtube.com/watch?v=ZllDiYDBMsg', 3),
(14, 1, 'Yoga Poses that\'ll cure Irregular Periods', '', 'https://www.youtube.com/watch?v=3YzSpRncW4s', 3),
(15, 1, 'Yoga for Scoliosis', '', 'https://www.youtube.com/watch?v=18Fb9InoKjE', 3),
(16, 1, 'Yoga Poses to Treat Hernia', '', 'https://www.youtube.com/watch?v=nAXL29adEQg', 3),
(17, 1, 'Yoga Poses for Stomach Problems', '', 'https://www.youtube.com/watch?v=Onj50mJ7e-0', 3),
(18, 1, 'Yoga for Heart Diseases', '', 'https://www.youtube.com/watch?v=CS7uNgsrlYA', 3),
(19, 0, 'Yoga for Back Pain Relief', '', 'https://www.youtube.com/watch?v=ruLshJ6E0Uo', 4),
(20, 1, 'Yoga For Back Pain', '', 'https://www.youtube.com/watch?v=cOjFCrd2rYM', 4),
(21, 0, 'Yoga to Cure Neck Pain and Spondylitis', '', 'https://www.youtube.com/watch?v=iwPsbH5yFc4', 4),
(22, 0, 'Yoga to Relieve Headache', '', 'https://www.youtube.com/watch?v=5SYUkCqfmc8&t=93s', 4),
(23, 1, 'YOGA FOR Elbow Pain Relief', '', 'https://www.youtube.com/watch?v=r_0OR1cMA0s', 4),
(24, 0, 'Yoga to Cure Joint Pain', '', 'https://www.youtube.com/watch?v=mNZ4zrRS3BE', 4),
(25, 0, 'Ease Hip Pain', '', 'https://www.youtube.com/watch?v=l60QBPKMoP0', 4),
(26, 0, 'Leg Pain cure', '', 'https://www.youtube.com/watch?v=4DSZzvtB9Tc', 4),
(27, 1, 'Asanas to help ease Knee pain', '', 'https://www.youtube.com/watch?v=q8RVbBiDwoI', 4),
(28, 0, 'Get rid of Frozen Shoulders through Yoga', '', 'https://www.youtube.com/watch?v=0bvGlLBgBzg', 4),
(29, 1, 'Yoga to cure Sciatic Pain', '', 'https://www.youtube.com/watch?v=PxXOaqoW9Lk', 4),
(30, 0, 'How and at what time to do Pranayams', '', 'https://www.youtube.com/watch?v=lZPbrQFICyM', 2),
(31, 0, 'How to do Surya Namaskar', '', 'https://www.youtube.com/watch?v=wsfG1eQ-tac', 2),
(32, 1, 'Surya Namaskar Part-1 Right Postures', '', 'https://www.youtube.com/watch?v=38GTnjg_aBA&t=13s', 2),
(33, 1, 'Surya Namaskar Part-2 Breath Awareness\r\n', '', 'https://www.youtube.com/watch?v=Ey4qJFFsReU', 2),
(34, 0, 'Tadasana', '', 'https://www.youtube.com/watch?v=t4EFxQDhA8A', 2),
(35, 1, 'Tadasana', '', 'https://www.youtube.com/watch?v=0mPNlC0vD6s', 2),
(36, 1, 'How To Do Shirshasana Independently & Correctly', '', 'https://www.youtube.com/watch?v=4LvVtTZBaxY', 2),
(37, 1, 'Sarvangasana and its variations', '', 'https://www.youtube.com/watch?v=kuFWLbCUiKI', 2),
(38, 1, 'Ustrasana- Camel pose', '', 'https://www.youtube.com/watch?v=8q7GxnIFsQo', 2),
(39, 1, 'Trikonasana : Triangle Yoga Pose', '', 'https://www.youtube.com/watch?v=W4OZkibNQm0', 2),
(40, 1, 'INDIGESTION : Vajrasana', '', 'https://www.youtube.com/watch?v=_ocdRy-1v3A', 5),
(41, 1, 'Meruwakrasana', '', 'https://www.youtube.com/watch?v=lyrgTvc-__k', 2),
(42, 1, 'Dhanurasana | Bow Pose', '', 'https://www.youtube.com/watch?v=4P2mYcOGxbU', 2),
(43, 1, 'Akarna Dhanurasana - The Shooting Bow Pose', '', 'https://www.youtube.com/watch?v=peh9uHiRGrQ', 2),
(44, 1, 'Shalabhasana | Locust Yoga Pose', '', 'https://www.youtube.com/watch?v=IFKJasb2taE', 2),
(45, 1, 'INCREASE HEIGHT : TADASANA, TRIKONASANA, ADHO MUKHA SHAVANASANA', '', 'https://www.youtube.com/watch?v=ytsoq-Qb8AQ', 5),
(46, 1, 'WEIGHT GAIN', '', 'https://www.youtube.com/watch?v=zpxHe8NxLmI', 5),
(47, 0, 'WEIGHT GAIN', '', 'https://www.youtube.com/watch?v=m5kzGvfzZG4', 5),
(48, 1, 'REDUCE BELLY FAT', '', 'https://www.youtube.com/watch?v=a66oFnBT68w', 5),
(49, 1, 'HAIR GROWTH', '', 'https://www.youtube.com/watch?v=_q00Sjh5RrQ', 5),
(50, 1, 'IMPROVE FLEXIBILITY', '', 'https://www.youtube.com/watch?v=GHNMnPRkNng', 5),
(51, 0, 'OBESITY & WEIGHT LOSS', '', 'https://www.youtube.com/watch?v=qLigjccYrSg', 5),
(52, 1, 'IMPROVE VISION & EYE HEALTH', '', 'https://www.youtube.com/watch?v=LRZssQTDl9U', 5),
(53, 0, 'EAR PROBLEMS', '', 'https://www.youtube.com/watch?v=66LSdfd5Lnc', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yogasd`
--
ALTER TABLE `yogasd`
  ADD PRIMARY KEY (`SNo.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yogasd`
--
ALTER TABLE `yogasd`
  MODIFY `SNo.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
