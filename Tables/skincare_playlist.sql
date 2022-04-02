-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 03:24 PM
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
-- Table structure for table `skincare_playlist`
--

CREATE TABLE `skincare_playlist` (
  `sno` int(10) NOT NULL,
  `Language` int(4) NOT NULL,
  `topicname` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `scid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skincare_playlist`
--

INSERT INTO `skincare_playlist` (`sno`, `Language`, `topicname`, `links`, `scid`) VALUES
(1, 1, 'OILY SKINCARE routine', 'https://www.youtube.com/watch?v=xuMLnrsM-vs', 2),
(2, 1, 'Day To Night Oily Skincare Routine ', 'https://www.youtube.com/watch?v=HaosuzfjIUM', 2),
(3, 0, 'Oily skin care', 'https://www.youtube.com/watch?v=odHlLYf7fvM', 2),
(4, 1, 'Diet For Oily Skin', 'https://www.youtube.com/watch?v=hAeRHk7nY68', 2),
(5, 1, 'Combination Skin Care', 'https://www.youtube.com/watch?v=Y0jD7tyITSk', 3),
(6, 1, 'Day To Night Skincare for Combination Skin', 'https://www.youtube.com/watch?v=N9UmK3kh_2w', 3),
(7, 2, 'Drinks for Glowing Skin & Body', 'https://www.youtube.com/watch?v=cZz_Xb-YLG4', 4),
(8, 0, 'Drink for Pigmentation, Pimple, Acne, Wrinkles', 'https://www.youtube.com/watch?v=VBwJhZ5_acM', 4),
(9, 0, 'Hyperpigmentation Remedy', 'https://www.youtube.com/watch?v=FX5NsibBDLs', 5),
(10, 0, 'Day Cream', 'https://www.youtube.com/watch?v=beODCQQjQW4', 5),
(11, 2, 'Natural face and body moisturizers', 'https://www.youtube.com/watch?v=VkP06o6Yxto', 5),
(12, 1, '7 Quick & Healthy Drinks', 'https://www.youtube.com/watch?v=UposRQt67Dg', 4),
(13, 2, 'For Clear & Acne free Skin', 'https://www.youtube.com/watch?v=eY0LPtC7rLc', 4),
(14, 0, '10 mistakes not to do by people with Dry Skin ', 'https://www.youtube.com/watch?v=EKDOZmY9D3g', 1),
(15, 1, 'Home remedies for Dry skin', 'https://www.youtube.com/watch?v=T8f_9MDMjbE', 1),
(16, 1, 'DIY Face Masks & At-Home Remedies for Dry Skin', 'https://www.youtube.com/watch?v=IWubQHg3c6k', 1),
(17, 1, 'Dry Skin Care - Causes and Remedies', 'https://www.youtube.com/watch?v=U57ZcGFLAU0', 1),
(18, 0, 'Yoga for Dry Skin', 'https://www.youtube.com/watch?v=Lxtxxn5m9YU', 1),
(19, 0, 'How to get beautiful Skin', 'https://www.youtube.com/watch?v=sxJUP0KZFpM', 6),
(20, 0, 'Heal pimples & acne', 'https://www.youtube.com/watch?v=Qo1hl39_vDs', 6),
(21, 0, '100% Pure Skincare Products - Make at Home', 'https://www.youtube.com/watch?v=28Du9nIQwBM', 5),
(22, 1, 'What Should You Eat For Dry Skin?', 'https://www.youtube.com/watch?v=1znzya6udDA', 1),
(23, 0, 'Home remedies for Dry Skin | Winter Special Skin Care\r\n', 'https://www.youtube.com/watch?v=7t-ElqEnC5U', 5),
(24, 0, 'Natural Lip Balm for Winters', 'https://www.youtube.com/watch?v=ANMJay022-w', 5),
(25, 0, 'Wrinkle Free Cream', 'youtube.com/watch?v=beJ8a0MKRRA', 5),
(26, 1, 'Natural home remedies for body odour', 'https://www.youtube.com/watch?v=74FecyEJ064', 5),
(27, 1, 'How to take care of your underarms', 'https://www.youtube.com/watch?v=Nuv2hZTyObQ', 5),
(28, 0, '4 NATURAL Skincare HACKS for PATCHY Skin Tone', 'https://www.youtube.com/watch?v=ro-lkQm7FAU', 5),
(29, 1, 'Facial Massage Routine for Glowing Skin and a Slimmer Face', 'https://www.youtube.com/watch?v=k1XFV11Fwr8', 6),
(30, 0, 'Homemade Night Serum for Glowing Skin Remove Pigmentation , Acne Marks', 'https://www.youtube.com/watch?v=QYJAEJfUsN4', 5),
(31, 0, 'KNOW YOUR SKIN TYPE ', 'https://www.youtube.com/watch?v=xlzRYOiugvg', 7),
(32, 1, 'Face Yoga for Skin Tightening', 'https://www.youtube.com/watch?v=t0mT6dkAHo8', 6),
(33, 0, 'Facial Massage for Lymphatic Drainage, Glowing Skin, and Face lift', 'https://www.youtube.com/watch?v=RF97x41JjX0', 6),
(34, 2, 'Get Younger looking hands, reduces wrinkles, hand swelling, fade dark spots', 'https://www.youtube.com/watch?v=eFsWtgycaLM', 6),
(35, 1, 'How To Get Rid Of Cellulite Naturally', 'https://www.youtube.com/watch?v=V3DrZtLcmg0', 5),
(36, 1, 'How To Reduce Stretch Marks | DIY Home Remedies', 'https://www.youtube.com/watch?v=f52J9bklOfs', 5),
(37, 1, 'How to get rid of stretch marks', 'https://www.youtube.com/watch?v=PfwcrXVW36w', 5),
(38, 1, 'How To Know Your Skin Type', 'https://www.youtube.com/watch?v=aYeO3GQ0VZY', 7),
(39, 1, 'Overnight Care For Dark, Pigmented & Dry Lips', 'https://www.youtube.com/watch?v=FsBbHjnhlFo', 5),
(40, 0, 'Combination Skin Care Routine for Men', 'https://www.youtube.com/watch?v=JZcwZKSvDqU', 3),
(41, 0, 'Indian Men :Know Your Skin Type', 'https://www.youtube.com/watch?v=WdncUT8LC7w', 7),
(42, 0, 'REMOVE Dark Spots ', 'https://www.youtube.com/watch?v=wj0x2gNSiSo', 5),
(43, 2, 'Exercises to Get TIGHTEN CHIN', 'https://www.youtube.com/watch?v=FZ1SqPbyYsA', 6),
(44, 1, 'Daily Yoga for FACE (Enhance Feature & Glow)', 'https://www.youtube.com/watch?v=uwvcSPLV8iU', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skincare_playlist`
--
ALTER TABLE `skincare_playlist`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skincare_playlist`
--
ALTER TABLE `skincare_playlist`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
