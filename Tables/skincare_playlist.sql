-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 03:55 PM
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
  `topicname` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `scid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skincare_playlist`
--

INSERT INTO `skincare_playlist` (`sno`, `topicname`, `links`, `scid`) VALUES
(1, 'OILY SKINCARE routine', 'https://www.youtube.com/watch?v=xuMLnrsM-vs', 2),
(2, 'Day To Night Oily Skincare Routine ', 'https://www.youtube.com/watch?v=HaosuzfjIUM', 2),
(3, 'Oily skin care', 'https://www.youtube.com/watch?v=odHlLYf7fvM', 2),
(4, 'Diet For Oily Skin', 'https://www.youtube.com/watch?v=hAeRHk7nY68', 2),
(5, 'Combination Skin Care', 'https://www.youtube.com/watch?v=Y0jD7tyITSk', 3),
(6, 'Day To Night Skincare for Combination Skin', 'https://www.youtube.com/watch?v=N9UmK3kh_2w', 3),
(7, 'Drinks for Glowing Skin & Body', 'https://www.youtube.com/watch?v=cZz_Xb-YLG4', 4),
(8, 'Drink for Pigmentation, Pimple, Acne, Wrinkles', 'https://www.youtube.com/watch?v=VBwJhZ5_acM', 4),
(9, 'Hyperpigmentation Remedy', 'https://www.youtube.com/watch?v=FX5NsibBDLs', 5),
(10, 'Day Cream', 'https://www.youtube.com/watch?v=beODCQQjQW4', 5),
(11, 'Natural face and body moisturizers', 'https://www.youtube.com/watch?v=VkP06o6Yxto', 5),
(12, '7 Quick & Healthy Drinks', 'https://www.youtube.com/watch?v=UposRQt67Dg', 4),
(13, 'For Clear & Acne free Skin', 'https://www.youtube.com/watch?v=eY0LPtC7rLc', 4),
(14, '10 mistakes not to do by people with Dry Skin ', 'https://www.youtube.com/watch?v=EKDOZmY9D3g', 1),
(15, 'Home remedies for Dry skin', 'https://www.youtube.com/watch?v=T8f_9MDMjbE', 1),
(16, 'DIY Face Masks & At-Home Remedies for Dry Skin', 'https://www.youtube.com/watch?v=IWubQHg3c6k', 1),
(17, 'Dry Skin Care - Causes and Remedies', 'https://www.youtube.com/watch?v=U57ZcGFLAU0', 1),
(18, 'Yoga for Dry Skin', 'https://www.youtube.com/watch?v=Lxtxxn5m9YU', 1),
(19, 'How to get beautiful Skin', 'https://www.youtube.com/watch?v=sxJUP0KZFpM', 6),
(20, 'Heal pimples & acne', 'https://www.youtube.com/watch?v=Qo1hl39_vDs', 6),
(21, '100% Pure Skincare Products - Make at Home', 'https://www.youtube.com/watch?v=28Du9nIQwBM', 5),
(22, 'What Should You Eat For Dry Skin?', 'https://www.youtube.com/watch?v=1znzya6udDA', 1),
(23, 'Home remedies for Dry Skin | Winter Special Skin Care\r\n', 'https://www.youtube.com/watch?v=7t-ElqEnC5U', 5),
(24, 'Natural Lip Balm for Winters', 'https://www.youtube.com/watch?v=ANMJay022-w', 5),
(25, 'Wrinkle Free Cream', 'youtube.com/watch?v=beJ8a0MKRRA', 5),
(26, 'Natural home remedies for body odour', 'https://www.youtube.com/watch?v=74FecyEJ064', 5),
(27, 'How to take care of your underarms', 'https://www.youtube.com/watch?v=Nuv2hZTyObQ', 5),
(28, '4 NATURAL Skincare HACKS for PATCHY Skin Tone', 'https://www.youtube.com/watch?v=ro-lkQm7FAU', 5),
(29, 'Facial Massage Routine for Glowing Skin and a Slimmer Face', 'https://www.youtube.com/watch?v=k1XFV11Fwr8', 6),
(30, 'Homemade Night Serum for Glowing Skin Remove Pigmentation , Acne Marks', 'https://www.youtube.com/watch?v=QYJAEJfUsN4', 5),
(31, 'KNOW YOUR SKIN TYPE ', 'https://www.youtube.com/watch?v=xlzRYOiugvg', 7),
(32, 'Face Yoga for Skin Tightening', 'https://www.youtube.com/watch?v=t0mT6dkAHo8', 6),
(33, 'Facial Massage for Lymphatic Drainage, Glowing Skin, and Face lift', 'https://www.youtube.com/watch?v=RF97x41JjX0', 6),
(34, 'Get Younger looking hands, reduces wrinkles, hand swelling, fade dark spots', 'https://www.youtube.com/watch?v=eFsWtgycaLM', 6),
(35, 'How To Get Rid Of Cellulite Naturally', 'https://www.youtube.com/watch?v=V3DrZtLcmg0', 5),
(36, 'How To Reduce Stretch Marks | DIY Home Remedies', 'https://www.youtube.com/watch?v=f52J9bklOfs', 5),
(37, 'How to get rid of stretch marks', 'https://www.youtube.com/watch?v=PfwcrXVW36w', 5),
(38, 'How To Know Your Skin Type', 'https://www.youtube.com/watch?v=aYeO3GQ0VZY', 7),
(39, 'Overnight Care For Dark, Pigmented & Dry Lips', 'https://www.youtube.com/watch?v=FsBbHjnhlFo', 5),
(40, 'Combination Skin Care Routine for Men', 'https://www.youtube.com/watch?v=JZcwZKSvDqU', 3),
(41, 'Indian Men :Know Your Skin Type', 'https://www.youtube.com/watch?v=WdncUT8LC7w', 7),
(42, 'REMOVE Dark Spots ', 'https://www.youtube.com/watch?v=wj0x2gNSiSo', 5),
(43, 'Exercises to Get TIGHTEN CHIN', 'https://www.youtube.com/watch?v=FZ1SqPbyYsA', 6),
(44, 'Daily Yoga for FACE (Enhance Feature & Glow)', 'https://www.youtube.com/watch?v=uwvcSPLV8iU', 6),
(45, '10 Do\'s and Dont\'s for Oily Skin', 'https://www.idahoskininstitute.com/blog/10-dos-and-donts-for-oily-skin', 8),
(46, 'Do\'s & Dont\'s for Oily Skin', 'https://www.dermadoctor.com/blog/dos-and-donts-for-oily-skin/', 8),
(47, 'Oily Skin: The Do\'s and Dont\'s', 'https://timesofindia.indiatimes.com/life-style/beauty/dos-and-donts-for-oily-skin/articleshow/81971343.cms', 8),
(48, '15 Best Home Remedies For Sensitive Skin', 'https://fabbon.com/articles/skincare/home-remedies-for-sensitive-skin', 9),
(49, '16 Must Know Beauty Tips For Sensitive Skin', 'https://vitalhealthnet.we.selfip.com/articles/must-know-beauty-tips-for-sensitive-skin/', 9),
(50, 'Is your skin sensitive? Here are tips to protect it', 'https://timesofindia.indiatimes.com/life-style/beauty/is-your-skin-sensitive-here-are-tips-to-protect-it/articleshow/90657257.cms', 9),
(51, '23 Foods To Eat for Healthier Skin', 'https://health.clevelandclinic.org/23-foods-good-skin/', 10),
(52, '22 Foods That Will Immediately Improve Your Skin, According to Dermatologists', 'https://www.eatthis.com/foods-for-better-skin/', 10),
(53, 'The Best Diets For A Healthy & Glowing Skin', 'https://skinkraft.com/blogs/articles/diet-for-healthy-skin', 10);

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
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
