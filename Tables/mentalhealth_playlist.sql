-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 03:53 PM
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
-- Table structure for table `mentalhealth_playlist`
--

CREATE TABLE `mentalhealth_playlist` (
  `sno` int(10) NOT NULL,
  `scid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentalhealth_playlist`
--

INSERT INTO `mentalhealth_playlist` (`sno`, `scid`, `name`, `links`) VALUES
(1, 1, 'The psychology of PTSD', 'https://youtu.be/b_n9qegR7C4'),
(2, 1, 'PTSD-causes, symptoms, treatment and pathology', 'https://youtu.be/hzSx4rMyVjI'),
(3, 1, 'The 5 types of PTSD', 'https://youtu.be/6GcEhUYoW9E'),
(4, 1, 'Understanding PTSD\'s Effects on Brain, Body, and Emotions', 'https://youtu.be/BEHDQeIRTgs'),
(5, 1, 'PTSD in teens', 'https://youtu.be/BEHDQeIRTgs'),
(6, 1, 'PTSD Treatment: Know your options', 'https://youtu.be/FeLLt39DI8A'),
(7, 2, 'Stop your Negative Energy', 'https://youtu.be/-tMiof0W4_g'),
(8, 2, 'How to control anger', 'https://youtu.be/QAsJvKsd2Xk'),
(9, 2, 'Anger is your Ally', 'https://youtu.be/sbVBsrNnBy8'),
(10, 2, 'Anger Management Tips', 'https://youtu.be/C1N4f1F0vDU'),
(11, 2, 'How to control your anger?', 'https://youtu.be/Pfbnc-u8Ta4'),
(13, 3, 'Freedom from Stress & Pressure', 'https://youtu.be/vpO_3ZegQL4'),
(14, 3, '3 ways to be stress free', 'https://youtu.be/YhpU8VME8Gw'),
(15, 3, 'Stress Management by Swami Mukundananda', 'https://youtu.be/9J41VleQ8Ko'),
(16, 3, 'Stress management: Sadhguru', 'https://youtu.be/o5uJM0An30w'),
(17, 4, 'The Impact of Anxiety and What We Can Do About It', 'https://youtu.be/XP1I1BC8DJM'),
(18, 4, '10 signs of Hidden Anxiety', 'https://youtu.be/woJFvy5Jp1Y'),
(19, 4, 'What\'s normal anxiety -- and what\'s an anxiety disorder? ', 'https://youtu.be/xsEJ6GeAGb0'),
(20, 4, 'How to Make Anxiety Your Best Friend', 'https://youtu.be/IAYxVmCNSk0'),
(21, 4, 'How to cope with anxiety', 'https://youtu.be/WWloIAQpMcQ'),
(22, 4, '5 Ways to Deal with Anxiety ', 'https://youtu.be/lHVYgnlukTw'),
(23, 5, 'How to Stop Overthinking?', 'https://youtu.be/zCT3wcoZ9ds'),
(24, 5, 'How to Stop Overthinking? By Sandeep Maheshwari ', 'https://youtu.be/nRPb6O05Lsw'),
(25, 5, 'How to Stop Overthinking? By Bhagavad Gita', 'https://youtu.be/j_sTk4JdQpY'),
(26, 5, 'Say NO To Overthinking', 'https://youtu.be/-j0rRcZmDws'),
(27, 5, 'Stop mind\'s chatter', 'https://youtu.be/X8Zov4FO9bI'),
(28, 7, 'The Importance Of Mental Health', 'https://www.voicesofyouth.org/blog/importance-mental-health'),
(29, 7, 'Why Is Mental Health Important?', 'https://www.verywellmind.com/the-importance-of-mental-health-for-wellbeing-5207938'),
(30, 7, 'Mental Health', 'https://medlineplus.gov/mentalhealth.html#:~:text=Mental%20health%20includes%20our%20emotional%2C%20psychological%2C%20and%20social,of%20life%2C%20from%20childhood%20and%20adolescence%20through%20adulthood.'),
(31, 8, 'What meditation can do for your mind, mood, and health?', 'https://www.health.harvard.edu/staying-healthy/what-meditation-can-do-for-your-mind-mood-and-health-'),
(32, 8, 'Can Meditation Help In Your Mental Health?', 'https://trusted-science.com/health-articles/meditation-and-mental-health/#:~:text=Meditation%20is%20a%20practice%20proven%20to%20aid%20in,alter%20your%20brain%20to%20handle%20stress%20more%20efficiently.'),
(33, 8, 'Meditation and Psychiatry', 'https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2719544/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentalhealth_playlist`
--
ALTER TABLE `mentalhealth_playlist`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentalhealth_playlist`
--
ALTER TABLE `mentalhealth_playlist`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
