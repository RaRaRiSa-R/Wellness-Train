-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 03:25 PM
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
-- Table structure for table `haircare_playlist`
--

CREATE TABLE `haircare_playlist` (
  `SNo.` int(10) NOT NULL,
  `scid` int(10) NOT NULL,
  `Language` int(4) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `haircare_playlist`
--

INSERT INTO `haircare_playlist` (`SNo.`, `scid`, `Language`, `Name`, `Link`) VALUES
(1, 1, 2, 'ONION HAIR OIL for faster hair growth and preventing hair fall', 'https://www.youtube.com/watch?v=ATMEKIUnfcM'),
(3, 1, 2, 'Fenugreek seeds hair oil and hair mask', 'https://www.youtube.com/watch?v=0FjoTikMAyY&t=85s'),
(4, 1, 2, 'Black Seeds Hair Mask/ Hair Oil', 'https://www.youtube.com/watch?v=jLJymjnW1qw'),
(6, 1, 2, 'Aloe Vera Hair Oil', 'https://www.youtube.com/watch?v=9DaAm0vIc88'),
(7, 1, 2, '3 Aloe Vera Hair Masks', 'https://www.youtube.com/watch?v=LrTfLphOfCA&t=53s'),
(8, 1, 2, 'Overnight Rice Hair Mask', 'https://www.youtube.com/watch?v=jzJx4v0-6_8'),
(9, 1, 2, '10 best 2-Ingredient Hair Masks', 'https://www.youtube.com/watch?v=aDKon4lok5M'),
(10, 2, 1, 'Fix Split Ends and Damaged Hair', 'https://www.youtube.com/watch?v=6hJHaRDJAgM'),
(11, 2, 1, 'Treatments For Damaged Hair', 'https://www.youtube.com/watch?v=ULa7ULS8kMk'),
(12, 2, 1, 'Home Remedies to prevent Hair Loss', 'https://www.youtube.com/watch?v=EJ7aeYm-nLg'),
(13, 2, 1, '7 Lies About Hair Care', 'https://www.youtube.com/watch?v=VVScWrAA8Cs'),
(14, 2, 1, 'How To Massage Your Scalp and hair', 'https://www.youtube.com/watch?v=oUPRd6sfw34'),
(15, 2, 1, 'Correct Oiling', 'https://www.youtube.com/watch?v=77cs-fK8Lr4'),
(16, 3, 1, 'DIY BIOTIN Shake', 'https://www.youtube.com/watch?v=WtrOL_F7PAE'),
(17, 3, 2, 'BIOTIN DRINK For Hair Growth', 'https://www.youtube.com/watch?v=wr-iwMOA7AI'),
(18, 3, 1, 'Juice for controlling Hair Fall', 'https://www.youtube.com/watch?v=VPecUCCjYNQ'),
(19, 3, 1, 'TOP 7 Foods for Hair Care', 'https://www.youtube.com/watch?v=g3iw0A0WQfk'),
(20, 3, 2, 'Biotin Laddu', 'https://www.youtube.com/watch?v=y1j3yAR5-28'),
(21, 3, 1, 'ANTI GREY HAIR & HAIR GROWTH LADDU', 'https://www.youtube.com/watch?v=7K_X6nsLEtA'),
(22, 4, 1, '6 Pro Tips to Deal with a Dry Scalp', 'https://prose.com/blog/dry-scalp.php'),
(23, 4, 1, '6 Home Remedies for Dry Scalp and Preventive Tips', 'https://www.emedihealth.com/skin-beauty/hair-scalp/dry-scalp-home-remedies'),
(24, 4, 1, 'How to Treat a Dry Scalp - Best Dry Scalp Treatments, Remedies & Tips\r\n', 'https://www.webmd.com/skin-problems-and-treatments/dry-scalp-causes'),
(25, 5, 1, 'Does oiling hair really help make it grow faster, healthier and thicker?', 'https://www.vogue.in/content/oiling-really-good-your-hair'),
(26, 5, 1, '10 Benefits of Oiling Hair ', 'https://parenting.firstcry.com/articles/magazine-10-benefits-of-oiling-hair-heres-why-you-should-oil-your-hair-regularly/'),
(27, 5, 1, 'Hair Oiling Benefits, Choosing Oil, and How to Do It', 'https://www.healthline.com/health/hair-oiling-benefits-oil-and-how-to'),
(28, 6, 1, 'Essential Do\'s and Dont\'s for Healthy Hair', 'https://www.timesnownews.com/lifestyle/expert-shares-essential-dos-and-donts-for-healthy-hair-article-89761007'),
(29, 6, 1, 'Do’s and Dont’s for Healthy Hair', 'https://www.hairtransplantdubai.com/blog/hair-growth/dos-and-donts-for-healthy-hair/'),
(30, 6, 1, 'Do\'s and Dont\'s: Healthy Hair', 'https://health.usnews.com/health-news/articles/2012/08/08/dos-and-donts-of-healthy-hair');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `haircare_playlist`
--
ALTER TABLE `haircare_playlist`
  ADD PRIMARY KEY (`SNo.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `haircare_playlist`
--
ALTER TABLE `haircare_playlist`
  MODIFY `SNo.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
